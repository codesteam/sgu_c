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
        <div class="site-index">
            <div class="menu-main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="menu-main-logo">
                                <a href="/">
                                    <div class="pull-left main-logo-img">
                                        <img src="/assets_app/images/logo-medium.png" />
                                    </div>
                                    <div class="pull-left text-left main-logo-title">
                                        <div class="part-1">Перспективные направления развития</div>
                                        <div class="part-2">отечественных информационных технологий</div>
                                    </div>
                                </a>
                            </div>
                            <div class="navigation" >
                                <?= Html::a('IT фестиваль', ['/it_festival'], ['class' => 'btn pull-right']) ?>
                                <?= Html::a('Контакты', ['/contact'], ['class' => 'btn pull-right']) ?>
                                <?= Html::a('Новости', ['/news'], ['class' => 'btn pull-right']) ?>
                                <?= Html::a('Информация', ['/info'], ['class' => 'btn btn-success pull-right']) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <? if (empty($this->params['pageHideSubmenu'])) :?>
            <div class="subheader-main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 text">
                            Межрегиональная научно-практическая конференция<br/>
                            23-25 сентября 2015
                        </div>
                        <div class="col-lg-6">
                            <div class="pull-right actions">
                                <?= Html::a('Cвязаться с нами', ['/site/feedback'], ['class' => 'btn btn-success-full pull-right']) ?>
                                <?= Html::a('Подать заявку на участие', ['/site/application'], ['class' => 'btn btn-info-full pull-right']) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <? endif ?>
        <?php
            // TODO: remove it. It fix scroll plugin
            NavBar::begin([
                'options' => [
                    'class' => 'navbar-inverse',
                    'style' => 'display:none',
                ],
            ]);
            
            NavBar::end();
        ?>
    <? endif ?>

    <? if (empty($this->params['pageWrap'])) :?>
        <div class="container">
    <? endif ?>
            <br/>
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
                Севастопольский государственный университет
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
