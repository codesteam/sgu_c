<?php
use yii\helpers\Html;

$this->title = 'Заявка на участие #'.$application->id;
$this->params['breadcrumbs'][] = ['url' => ['admin/applications'], 'label' => 'Все заявки'];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <strong>Научное направление:</strong> <?=Html::encode($application->category->name)?><br/>
    <strong>Участников:</strong> <?=count($application->applicationMembers)?><br/>
    <strong>Комментарий:</strong> <?=Html::encode($application->comment)?><br/>
    <strong>Участники:</strong>
    <br/>
    <br/>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Имя</th>
                <th>Email</th>
                <th>Страна, город</th>
                <th>Место работы</th>
                <th>Должность</th>
                <th>Почтовый адрес</th>
                <th>Телефон / факс</th>
            </tr>
        </thead>
        <tbody>
            <? foreach ($application->applicationMembers as $index => $member) :?>
                <tr>
                    <th scope="row"><?=$index + 1?></th>
                    <td><?=Html::encode($member->name)?></td>
                    <td><?=Html::encode($member->email)?></td>
                    <td><?=Html::encode($member->location)?></td>
                    <td><?=Html::encode($member->profession)?></td>
                    <td><?=Html::encode($member->rank)?></td>
                    <td><?=Html::encode($member->post_address)?></td>
                    <td><?=Html::encode($member->phone)?></td>
                </tr>
            <? endforeach ?>
        </tbody>
    </table>
    <? if (count($application->applicationFiles)) :?>
        <strong>Файлы:</strong>
        <br/>
        <br/>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Файл</th>
                </tr>
            </thead>
            <tbody>
                <? foreach ($application->applicationFiles as $index => $file) :?>
                    <tr>
                        <th scope="row"><?=$index + 1?></th>
                        <td><?=Html::a($file->name, '/uploads/'.$file->name, ['target' => '_blank'])?></td>
                    </tr>
                <? endforeach ?>
            </tbody>
        </table>
    <? endif ?>
</div>
