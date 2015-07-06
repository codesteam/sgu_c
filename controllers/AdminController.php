<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use app\models\Application;
use app\models\Ticket;

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
        Yii::$app->view->params['breadcrumbsHomeLink'] = ['label' => 'Панель администратора','url' => '/admin/'];
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
        $data = [
            'applications' => Application::find()->joinWith('category')->orderBy(['id' => SORT_DESC])->all(),
        ];
        return $this->render('applications', $data);
    }

    public function actionApplication($id)
    {
        if (!Yii::$app->user->can('application_listing')) {
            return $this->accessDenied();
        }
        $data = [
            'application' => Application::findOne($id),
        ];
        return $this->render('application', $data);
    }

    public function actionApplicationSetStatus($id)
    {
        if (!Yii::$app->user->can('application_set_status')) {
            return $this->accessDenied();
        }
        $application = Application::findOne($id);
        if ($application) {
            $application->status = Yii::$app->request->post('Application')['status'];
            $application->save();
        }
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
