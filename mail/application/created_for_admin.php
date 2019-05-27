<?php
use yii\helpers\Html;
use yii\helpers\Url;
require __DIR__.'/../layouts/_css.php';
$this->title = 'Новая заявка на участие в конференции #'.$application->id;

$urlRoot        = Url::to('/', 1);
$urlApplication = Url::to(['/admin/application', 'id' => $application->id], 1);
?>
<h1 style="<?=$styleH1?>"><?= $this->title ?></h1>

<p style="<?=$styleP?>">
    Получена новая заявка для участия в конференции на сайте
    <a href="<?=$urlRoot?>" style="<?=$styleLink?>"><?=$urlRoot?></a>.
</p>
<p style="<?=$styleP?>">
    Статус вашей заявки можно узнать по ссылке
    <a href="<?=$urlApplication?>" style="<?=$styleLink?>"><?=$urlApplication?></a>.
</p>
