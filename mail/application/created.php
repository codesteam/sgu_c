<?php
use yii\helpers\Html;
use yii\helpers\Url;
require __DIR__.'/../layouts/_css.php';
$this->title = 'Заявка на участие в конференции #'.$application->id;

$urlRoot        = Url::to('/', 1);
$urlApplication = Url::to(['/site/application-view', 'id' => $application->id, 'hash' => $application->hash], 1);
?>
<h1 style="<?=$styleH1?>"><?= $this->title ?></h1>

<p style="<?=$styleP?>">
    Вы отправили заявку для участия в конференции на сайте
    <a href="<?=$urlRoot?>" style="<?=$styleLink?>"><?=$urlRoot?></a>.
</p>
<p style="<?=$styleP?>">
    Текущий статус вашей заявки можно узнать по ссылке
    <a href="<?=$urlApplication?>" style="<?=$styleLink?>"><?=$urlApplication?></a>.
</p>
<p style="<?=$styleP?>">
    Обращаем ваше внимание на то, что нам требуется некоторое время для обработки Вашей заявки. Если у вас возникли какие-то вопросы
    или заметили какую-то ошибку в работе системы, то вы всегда можете связаться с нами через форму обратной связи.
</p>