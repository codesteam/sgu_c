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
use app\models\ConferenceEvent;
use app\models\News;

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
        return $this->render('index');
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
        $categories = ConferenceEvent::getCurrent()->conferenceCategories;
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
            'contact'             => '/static/contact',
            '2015-09-info'        => '/static/2015-09/info',
            '2015-09-it-festival' => '/static/2015-09/it_festival',
            '2016-09-info'        => '/static/2016-09/info',
            '2017-09-info'        => '/static/2017-09/info',
            'info'                => '/static/2018-09/info',
        ];
        if (!isset($map[$view])) {
            return $this->pageNotFound();
        }
        Yii::$app->view->params['pageScrollSpy'] = 'infoScrollSpy';
        return $this->render($map[$view]);
    }

    public function actionNews()
    {
        return $this->render('news', ['news' => News::all()]);
    }

    public function actionArchive()
    {
        $listing = ConferenceEvent::find()
            ->where(['status' => ConferenceEvent::STATUS_ARCHIVED])
            ->orderBy(['start_at' => SORT_DESC])
            ->all();
        return $this->render('archive', ['archive' => $listing]);
    }
}
