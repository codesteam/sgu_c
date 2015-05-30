<?php
use yii\helpers\Html;

$this->title = 'Список заявок на участие';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <br/>
    <p>
        Эта страница предназначена для управления и редактирования списка заявок для участия в конференции.
    </p>
    <br/>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Научное направление</th>
                <th>Участников</th>
                <th>Имя</th>
                <th>Email</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            <? foreach ($applications as $application) :?>
                <tr>
                    <th scope="row"><?=$application->id?></th>
                    <td><?=$application->category->name?></td>
                    <td><?=count($application->applicationMembers)?></td>
                    <td><?=Html::encode($application->applicationMembers[0]->name)?></td>
                    <td><?=Html::encode($application->applicationMembers[0]->email)?></td>
                    <td><?= Html::a('Детали', ['admin/application', 'id' => $application->id]) ?></td>
                </tr>
            <? endforeach ?>
        </tbody>
    </table>
</div>