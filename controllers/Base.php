<?php

namespace app\controllers;

use yii\web\Controller;
use yii\web\ForbiddenHttpException;

class Base extends Controller
{
    protected function accessDenied()
    {
        throw new ForbiddenHttpException('Access denied');
    }
}
