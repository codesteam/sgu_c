<?
use yii\helpers\Html;
?>
<div class="row">
    <div class="col-lg-12">
        <div class="<?=!empty($mainPage) ? 'header-main-logo' : 'menu-main-logo'?>">
            <a href="/">
                <div class="pull-left main-logo-img">
                    <? if (!empty($mainPage)): ?>
                        <img src="/assets_app/images/logo-big.png" />
                    <? else: ?>
                        <img src="/assets_app/images/logo-medium.png" />
                    <? endif ?>
                </div>
                <div class="pull-left text-left main-logo-title">
                    <div class="part-1">Перспективные направления развития</div>
                    <div class="part-2">отечественных информационных технологий</div>
                </div>
            </a>
        </div>
        <? $topMenu  = isset($this->params['topMenu']) ? $this->params['topMenu'] : ''; ?>
        <? $btnClass = !empty($mainPage) ? 'btn-lg' : ''; ?>
        <div class="navigation" >
            <?= Html::a('Архив', ['/archive'], ['class' => 'btn pull-right '.$btnClass.' '.($topMenu == 'archive' ? 'btn-success' : '')]) ?>
            <?= Html::a('Контакты', ['/contact'], ['class' => 'btn pull-right '.$btnClass.' '.($topMenu == 'contact' ? 'btn-success' : '')]) ?>
            <?= Html::a('Новости', ['/news'], ['class' => 'btn pull-right '.$btnClass.' '.($topMenu == 'news' ? 'btn-success' : '')]) ?>
            <?= Html::a('Информация', ['/info'], ['class' => 'btn pull-right '.$btnClass.' '.($topMenu == 'info' ? 'btn-success' : '')]) ?>
        </div>
    </div>
</div>