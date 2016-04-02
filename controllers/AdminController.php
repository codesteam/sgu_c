<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use app\models\FormAdminApplicationMessage;
use app\models\Application;
use app\models\ApplicationMessage;
use app\models\Ticket;
use app\models\ConferenceEvent;
use app\helpers\Mailer;

class AdminController extends Base
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function init()
    {
        parent::init();
        Yii::$app->view->params['pageHideSubmenu'] = true;
    }

    public function actionIndex()
    {
        return $this->redirect(['/admin/applications'], 302);
    }

    public function actionApplications()
    {
        if (!Yii::$app->user->can('application_listing')) {
            return $this->accessDenied();
        }
        $currentConference = ConferenceEvent::getCurrent();
        $data = [
            'applications'            => Application::find()->where(['applications.conference_event_id' => $currentConference->id])->joinWith('category')->orderBy(['id' => SORT_DESC])->all(),
            'newMessages'             => Application::getCountNewMessages($currentConference->id),
            'newMessagesApplications' => Application::getApplicationIdsWithNewMessages($currentConference->id),
        ];
        return $this->render('applications', $data);
    }

    public function actionApplication($id)
    {
        $model       = new FormAdminApplicationMessage();
        $application = Application::findOne($id);
        $application->updateMessagesViewsCount();
        if (!Yii::$app->user->can('application_listing')) {
            return $this->accessDenied();
        }
        if ($model->load(Yii::$app->request->post()) && $model->create($application)) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            return $this->refresh();
        } else {
            return $this->render('application', ['application' => $application, 'model' => $model]);
        }
    }

    public function actionApplicationSetStatus($id, $status)
    {
        if (!Yii::$app->user->can('application_set_status')) {
            return $this->accessDenied();
        }
        $application = Application::findOne($id);
        if ($application) {
            $application->status = $status;
            $application->save();
        }
        Mailer::applicationModerated($application);
        return $this->redirect(['/admin/application', 'id' => $id], 302);
    }

    public function actionTickets()
    {
        if (!Yii::$app->user->can('ticket_listing')) {
            return $this->accessDenied();
        }
        $data = [
            'tickets' => Ticket::find()->orderBy(['id' => SORT_DESC])->all(),
        ];
        return $this->render('tickets', $data);
    }

    public function actionTicket($id)
    {
        if (!Yii::$app->user->can('ticket_listing')) {
            return $this->accessDenied();
        }
        $data = [
            'ticket' => Ticket::findOne($id),
        ];
        return $this->render('ticket', $data);
    }
}