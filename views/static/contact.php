<?php
use yii\helpers\Html;
use app\helpers\HtmlApplication;

$this->title = 'Контакты';
$this->params['topMenu'] = 'contact';
?>
<div class="site-login">
    <?=HtmlApplication::h1(Html::encode($this->title))?>
    <p>Контакты для оперативной связи: </p>
    <p>Тел. : +7 (8692) 453-138</p>
    <p>Почтовый адрес Оргкомитета Конференции: </p>
    <p>299053, Севастополь, ул. Университетская, 33 </p>
    <p>Севастопольский государственный университет (СевГУ). </p>
    <p>тел.: +7(8692) 435-290, </p>
    <p>e-mail: pervukhina14@mail.ru</p>
    <p>http://pnroit.code-bit.com/</p>
</div>
