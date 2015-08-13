<?php
use yii\helpers\Html;

$this->title = 'Список обращений';
$this->params['breadcrumbs'][] = ['url' => ['admin/tickets'], 'label' => 'Все обращения'];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">
    <?= $this->render('_menu', ['active' => 'tickets']) ?>

    <? foreach ($ticket->ticketMessages as $message) :?>
        <div class="panel panel-info">
            <div class="panel-heading">
                <strong>Пользователь: <?=Html::encode($message->email)?></strong>
                <div class="pull-right"><strong><?=Html::encode($message->created_at)?></strong></div>
            </div>
            <div class="panel-body">
                <td><?=nl2br(Html::encode($message->body))?></td>
            </div>
        </div>
    <? endforeach ?>
</div>