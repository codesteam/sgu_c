<?php

namespace app\controllers;

use yii\web\Controller;
use yii\web\ForbiddenHttpException;
use yii\web\HttpException;

class Base extends Controller
{
    protected function accessDenied()
    {
        throw new ForbiddenHttpException('Access denied');
    }

    protected function pageNotFound()
    {
        throw new HttpException(404, 'Page not found');
    }
}
