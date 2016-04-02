<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\ForbiddenHttpException;
use yii\web\HttpException;
use app\models\ConferenceEvent;

class Base extends Controller
{
    protected function accessDenied()
    {
        throw new ForbiddenHttpException('Access denied');
    }

    public function beforeAction($event)
    {
        Yii::$app->view->params['currentConference'] = ConferenceEvent::getCurrent();
        return parent::beforeAction($event);
    }

    protected function pageNotFound()
    {
        throw new HttpException(404, 'Page not found');
    }
}
