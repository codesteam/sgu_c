<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\helpers\HtmlApplication;

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
                    <?= $this->render('_top_menu') ?>
                </div>
            </div>
        </div>
        <? if (empty($this->params['pageHideSubmenu'])) :?>
            <div class="subheader-main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 text">
                            Межрегиональная научно-практическая конференция<br/>
                            <?=HtmlApplication::datesInterval($this->params['currentConference']->start_at, $this->params['currentConference']->end_at) ?>
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
            </div>
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
