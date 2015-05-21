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
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<style type="text/css">
 
</style>

<?php $this->beginBody() ?>
    <? if (empty($this->params['pageWrap'])) :?>
        <div class="wrap">
    <? endif ?>
        <?php
            NavBar::begin([
                'brandLabel' => '<img alt="logo" src="/images/brand.png">',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'Главная', 'url' => ['/']],
                    ['label' => 'Информация о конференции', 'url' => ['/info']],
                    ['label' => 'Контакты', 'url' => ['/contact']],
                    Yii::$app->user->isGuest ?
                        ['label' => 'Войти', 'url' => ['/site/login'], 'linkOptions' => ['class' => 'btn btn-success']] :
                        ['label' => 'Выйти (' . Yii::$app->user->identity->username . ')',
                            'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post']],
                ],
            ]);
            NavBar::end();
        ?>

    <? if (empty($this->params['pageWrap'])) :?>
        <div class="container">
    <? endif ?>
            <?= Breadcrumbs::widget([
                'links'    => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                'homeLink' => isset($this->params['breadcrumbsHomeLink']) ? $this->params['breadcrumbsHomeLink'] : ['label' => 'Главная','url' => Yii::$app->homeUrl]
            ]) ?>
            <?= $content ?>
    <? if (empty($this->params['pageWrap'])) :?>
        </div>
    </div>
    <? endif ?>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; Кафедра Информационных систем СевГУ <?= date('Y') ?></p>
            <p class="pull-right"><?= Html::a('СевГУ', 'http://sevsu.ru') ?></p>
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
