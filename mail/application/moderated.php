<?php
use yii\helpers\Html;
use yii\helpers\Url;
use app\models\Application;
require __DIR__.'/../layouts/_css.php';

if ($application->status == Application::STATUS_APPROVED) {
    $this->title = 'Заявка на участие в конференции #'.$application->id.' одобрена';
} else {
    $this->title = 'Заявка на участие в конференции #'.$application->id.' отклонена';
}

$urlRoot = Url::to('/', 1);
?>
<h1 style="<?=$styleH1?>"><?= $this->title ?></h1>

<p style="<?=$styleP?>">
    Вы отправили заявку для участия в конференции на сайте
    <a href="<?=$urlRoot?>" style="<?=$styleLink?>"><?=$urlRoot?></a>.
</p>
<p>
    <? if ($application->status == Application::STATUS_APPROVED) :?>
        Ваша заявка одобрена.
    <? else: ?>
        Ваша заявка отклонена
    <? endif ?>
</p>