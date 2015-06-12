<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\Application;
use app\models\Ticket;

class AdminController extends Controller
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
        $data = [
            'applications' => Application::find()->joinWith('category')->orderBy(['id' => SORT_DESC])->all(),
        ];
        return $this->render('applications', $data);
    }

    public function actionApplication($id)
    {
        $data = [
            'application' => Application::findOne($id),
        ];
        return $this->render('application', $data);
    }

    public function actionApplicationSetStatus($id)
    {
        $application = Application::findOne($id);
        if ($application) {
            $application->status = Yii::$app->request->post('Application')['status'];
            $application->save();
        }
        return $this->redirect(['/admin/application', 'id' => $id], 302);
    }

    public function actionTickets()
    {
        $data = [
            'tickets' => Ticket::find()->orderBy(['id' => SORT_DESC])->all(),
        ];
        return $this->render('tickets', $data);
    }

    public function actionTicket($id)
    {
        $data = [
            'ticket' => Ticket::findOne($id),
        ];
        return $this->render('ticket', $data);
    }
}
