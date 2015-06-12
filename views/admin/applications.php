<?php
use yii\helpers\Html;
use app\helpers\HtmlApplication;

$this->title = 'Список заявок на участие';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">
    <?= $this->render('_menu', ['active' => 'applications']) ?>
    <p>
        Эта страница предназначена для управления и редактирования списка заявок для участия в конференции.
    </p>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Научное направление</th>
                <th>Участников</th>
                <th>Имя</th>
                <th>Email</th>
                <th>Статус</th>
                <th>Доклад</th>
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
                    <td><?=HtmlApplication::status($application->status)?></td>
                    <td><?=HtmlApplication::filesStatus($application)?></td>
                    <td><?= Html::a('Детали', ['admin/application', 'id' => $application->id]) ?></td>
                </tr>
            <? endforeach ?>
        </tbody>
    </table>
</div>