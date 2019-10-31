<?php
use yii\helpers\Html;
use app\helpers\HtmlApplication;
use app\models\ConferenceEvent;

$this->title = '24 - 28 Сентября 2019';
$this->params['topMenu'] = 'archive';
$this->params['pageHideSubmenu'] = true;
$conference = ConferenceEvent::find()->where(['slug' => 'conference-09-2019'])->one();

?>
<div class="site-login">
    <div class="row">
        <div class="col-md-12">
            <br />
            <?=HtmlApplication::h1(Html::encode($this->title))?>
        </div>
        <div class="col-md-9">
            <h2>Фотоматериалы и ссылки</h2>
            <hr/>
            <p>
                Фотоматериалы и ссылки V Межрегиональной научно-практической конференции «Перспективные  направления развития отечественных информационных технологий» Севастополь, 24-28 сентября 2019 г.
            </p>
            <? for($i=1; $i <= 37; $i++): ?>
                <p><img src="/assets_app/files/2019-09/photos/<?=sprintf("%03d", $i);?>.jpg" class="img-responsive" /></p>
            <? endfor ?>
        </div>
    </div>
</div>
