<?php
use yii\helpers\Html;

$this->title = 'Заявка на участие #'.$application->id;
$this->params['breadcrumbs'][] = ['url' => ['admin/applications'], 'label' => 'Все заявки'];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <strong>Научное направление:</strong> <?=$application->category->name?><br/>
    <strong>Участников:</strong> <?=count($application->applicationMembers)?><br/>
    <strong>Участники:</strong>
    <br/>
    <br/>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Имя</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <? foreach ($application->applicationMembers as $index => $member) :?>
                <tr>
                    <th scope="row"><?=$index + 1?></th>
                    <td><?=$member->name?></td>
                    <td><?=$member->email?></td>
                </tr>
            <? endforeach ?>
        </tbody>
    </table>
</div>
