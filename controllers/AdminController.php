<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

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
        return $this->render('index');
    }

    public function actionApplications()
    {
        return $this->render('applications');
    }
}
