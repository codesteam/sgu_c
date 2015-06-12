<?php
use yii\helpers\Html;

$this->title = 'Список обращений';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">
    <?= $this->render('_menu', ['active' => 'tickets']) ?>
    <p>
        Эта страница предназначена для управления и просмотра списка обращений и вопросов.
    </p>
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
                    <td><?=Html::encode($ticket->subject)?></td>
                    <td><?=count($ticket->ticketMessages)?></td>
                    <td><?= Html::a('Детали', ['admin/ticket', 'id' => $ticket->id]) ?></td>
                </tr>
            <? endforeach ?>
        </tbody>
    </table>
</div>