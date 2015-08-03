<?php
use yii\helpers\Html;
use app\helpers\HtmlApplication;

$this->title = 'Контакты';
?>
<div class="site-login">
    <?=HtmlApplication::h1(Html::encode($this->title))?>
    <p>Адрес: г. Севастополь, ул. Университетская, 33, почтовый индекc 299053. </p>
    <p>Контакный телефон: +7 (8692) .....  </p>
    <p>Адрес электронной почты: ..... </p>
</div>
