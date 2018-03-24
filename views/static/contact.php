<?php
use yii\helpers\Html;
use app\helpers\HtmlApplication;

$this->title = 'Контакты';
$this->params['topMenu'] = 'contact';
?>
<div class="site-login">
    <?=HtmlApplication::h1(Html::encode($this->title))?>
    <p><strong>Контакты для оперативной связи: </strong></p>
    <p>e-mail: KafIS_sevsu@sevsu.ru; тел.: +7(869) 241-77-41 (*1070)</p>
    <p><strong>Организационные вопросы: </strong></p>
    <p>Шумейко Ирина Петровна, тел.: +7(978) 80-98-75</p>
    <p><strong>Ученые секретари: </strong></p>
    <p>Кротов Кирилл Викторович, тел.: +7(978) 730-38-19</p>
    <p>Безуглая Анна Евгеньевна, e-mail: anna_bezuglaya@list.ru</p>
    <p><strong>Почтовый адрес Оргкомитета: </strong></p>
    <p>СевГУ (Кафедра ИС), ул. Университетская, 33, г. Севастополь, 299053, Россия</p>
</div>
