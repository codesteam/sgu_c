<?php
use yii\helpers\Html;
use yii\helpers\Url;
require __DIR__.'/../layouts/_css.php';
$this->title = 'Новое сообщение по заявке #'.$message->application->id;

$urlRoot        = Url::to('/', 1);
$urlApplication = Url::to(['/site/application-view', 'id' => $message->application->id, 'hash' => $message->application->hash], 1);
?>
<h1 style="<?=$styleH1?>"><?= $this->title ?></h1>

<p style="<?=$styleP?>">
    Вам отправлено новое сообщений на сайте
    <a href="<?=$urlRoot?>" style="<?=$styleLink?>"><?=$urlRoot?></a>.
</p>
<p style="<?=$styleP?>">
    Текст сообщения:
</p>
<p style="<?=$styleP?>">
    <?= nl2br(Html::encode($message->body)) ?>
</p>
<p style="<?=$styleP?>">
    Ответить на данное сообщение и/или посмотреть текущий статус вашей заявки можно по ссылке
    <a href="<?=$urlApplication?>" style="<?=$styleLink?>"><?=$urlApplication?></a>.
</p>
