<?php
use yii\helpers\Html;
use app\helpers\HtmlApplication;

$this->title = 'Заявка на участие #'.$application->id;
$this->params['breadcrumbs'][] = ['url' => ['admin/applications'], 'label' => 'Все заявки'];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">
    <?= $this->render('_menu', ['active' => 'applications']) ?>
    <h4><?= Html::encode($this->title) ?></h4>
    <br/>
    <table class="table table-striped">
        <tbody>
            <tr>
                <td>Научное направление</td><td><?=Html::encode($application->category->name)?></td>
            </tr>
            <tr>
                <td>Участников</td><td><?=count($application->applicationMembers)?></td>
            </tr>
            <tr>
                <td>Статус</td><td><?=HtmlApplication::status($application->status)?></td>
            </tr>
            <tr>
                <td>Комментарий</td><td><?=Html::encode($application->comment)?></td>
            </tr>
        </tbody>
    </table>
    <h4>Участники</h4>
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
        <h4>Файлы</h4>
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
