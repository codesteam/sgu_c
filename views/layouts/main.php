<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>"  ng-app="SgucApp">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body <?=!empty($this->params['pageScrollSpy']) ? 'data-spy="scroll" data-target="#'.$this->params['pageScrollSpy'].'"' : ''?>>

<?php $this->beginBody() ?>
    <? if (empty($this->params['pageWrap'])) :?>
        <div class="wrap">
    <? endif ?>
        <? if (empty($this->params['pageHideNavbar'])) :?>
            <?php
                NavBar::begin([
                    'brandLabel' => '<img alt="logo" src="/assets_app/images/brand_conf.png">',
                    'brandUrl' => Yii::$app->homeUrl,
                    'options' => [
                        'class' => 'navbar-inverse',
                    ],
                ]);
                echo Nav::widget([
                    'options' => ['class' => 'navbar-nav navbar-right'],
                    'items' => [
                        ['label' => 'Главная', 'url' => ['/'], 'linkOptions' => ['class' => 'hidden-sm']],
                        ['label' => 'Информация о конференции', 'url' => ['/info']],
                        ['label' => 'Контакты', 'url' => ['/contact'], 'linkOptions' => ['class' => 'hidden-sm']],
                        Yii::$app->user->isGuest ?
                            ['label' => 'Подать заявку', 'url' => ['/site/application'], 'linkOptions' => ['class' => 'btn btn-success']] :
                            ['label' => 'Выйти (' . Yii::$app->user->identity->username . ')',
                                'url' => ['/site/logout'],
                                'linkOptions' => ['data-method' => 'post']],
                    ],
                ]);
                NavBar::end();
            ?>
    <? endif ?>

    <? if (empty($this->params['pageWrap'])) :?>
        <div class="container">
    <? endif ?>
            <?= Breadcrumbs::widget([
                'links'    => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                'homeLink' => ['label' => 'Панель администратора','url' => '/admin/']
            ]) ?>
            <?= $content ?>
    <? if (empty($this->params['pageWrap'])) :?>
        </div>
    </div>
    <? endif ?>

    <footer class="footer">
        <div class="container">
            <div class="pull-left">
                ©&nbsp;
            </div>
            <div class="pull-left">
                Кафедра Информационных систем СевГУ <?= date('Y') ?> <br/>
                Севастопольский государственный универсистет
            </div>
            <div class="clearfix"></div>
            <br/>
            <div class="row">
                <div class="col-md-4 contact">
                    <span>
                        <img src="/assets_app/images/footer_ico_address.png"/>
                    </span>
                    <span style="margin-left:5px;">
                        299053 г. Севастополь, ул. Университетская, 33
                    </span>
                </div>
                <div class="col-md-4 contact">
                    <span>
                        <img src="/assets_app/images/footer_ico_phone.png"/>
                    </span>
                    <span style="margin-left:5px;">
                        +7 (978) 333 22 11, +7 (8692) 44 55 66
                    </span>
                </div>
                <div class="col-md-4 contact">
                    <span>
                        <img src="/assets_app/images/footer_ico_email.png"/>
                    </span>
                    <span style="margin-left:5px;">
                        info@proit.code-bit.com
                    </span>
                </div>
            </div>
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
