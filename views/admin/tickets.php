<?php
use yii\helpers\Html;

$this->title = 'Список обращений';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <br/>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Тема обращения</th>
                <th>Сообщений</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            <? foreach ($tickets as $ticket) :?>
                <tr>
                    <th scope="row"><?=$ticket->id?></th>
                    <td><?=$ticket->subject?></td>
                    <td><?=count($ticket->ticketMessages)?></td>
                    <td><?= Html::a('Детали', ['admin/ticket', 'id' => $ticket->id]) ?></td>
                </tr>
            <? endforeach ?>
        </tbody>
    </table>
</div>