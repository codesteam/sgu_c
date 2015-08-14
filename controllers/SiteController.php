<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use app\models\FormLogin;
use app\models\FormContact;
use app\models\FormApplication;
use app\models\FormApplicationMessage;
use app\models\Category;
use app\models\Application;
use app\models\ConferenceDates;

class SiteController extends Base
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        Yii::$app->view->params['pageWrap'] = true;
        Yii::$app->view->params['pageHideNavbar'] = true;
        return $this->render('index', ['dates' => ConferenceDates::all()]);
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new FormLogin();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', ['model' => $model]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }

    public function actionFeedback()
    {
        $model = new FormContact();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            return $this->refresh();
        } else {
            return $this->render('feedback', ['model' => $model]);
        }
    }

    public function actionApplication()
    {
        $model      = new FormApplication();
        $categories = Category::find()->all();
        if ($model->load(Yii::$app->request->post()) && $model->create()) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            return $this->refresh();
        } else {
            return $this->render('application', ['model' => $model, 'categories' => $categories]);
        }
    }

    public function actionApplicationView($id, $hash)
    {
        $model = new FormApplicationMessage();
        $application = Application::find()->where(['id' => $id, 'hash' => $hash])->one();
        if (!$application) {
            return $this->pageNotFound();
        }
        if ($model->load(Yii::$app->request->post()) && $model->create($application)) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            return $this->refresh();
        } else {
            return $this->render('application_view', ['application' => $application, 'model' => $model]);
        }
    }

    public function actionPage($view)
    {
        $map = [
            'contact' => '/static/contact',
            'info'    => '/static/info',
        ];
        if (!isset($map[$view])) {
            return $this->pageNotFound();
        }
        Yii::$app->view->params['pageScrollSpy'] = 'infoScrollSpy';
        return $this->render($map[$view], ['dates' => ConferenceDates::all()]);
    }
}
