<?php
use yii\helpers\Html;

$this->title = 'Панель администратора';
?>
<div class="site-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <br/>
    <p>
        Это главная управляющая панель для администраторов системы. Отсюда вы можете управлять всем процессом регистрации будующих участников.
    </p>
    <br/>
    <div class="body-content">
        <div class="row">
            <div class="col-lg-3 text-center">
                <span class="glyphicon glyphicon-user" style="font-size:80px"></span><br/>
                <?= Html::a('Список заявок на участие', ['/admin/applications']) ?>
            </div>
            <div class="col-lg-3 text-center">
                <span class="glyphicon glyphicon-envelope" style="font-size:80px"></span><br/>
                <?= Html::a('Список обращений с вопросами', ['/admin/support']) ?>
            </div>
        </div>
    </div>
</div>