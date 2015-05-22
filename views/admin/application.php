<?php
use yii\helpers\Html;

$this->title = 'Заявка на участие #'.$application->id;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <br/>
    <br/>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Имя</th>
                <th>Email</th>
                <th>Тема доклада</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"><?=$application->id?></th>
                <td><?=$application->name?></td>
                <td><?=$application->email?></td>
                <td><?=$application->subject?></td>
            </tr>
        </tbody>
    </table>
</div>