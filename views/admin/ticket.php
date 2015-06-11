<?php
use yii\helpers\Html;

$this->title = 'Список обращений';
$this->params['breadcrumbs'][] = ['url' => ['admin/tickets'], 'label' => 'Все обращения'];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <br/>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Email</th>
                <th>Сообщение</th>
                <th>Дата обращения</th>
            </tr>
        </thead>
        <tbody>
            <? foreach ($ticket->ticketMessages as $message) :?>
                <tr>
                    <th scope="row"><?=$message->id?></th>
                    <td><?=$message->email?></td>
                    <td><?=$message->body?></td>
                    <td><?=$message->created_at?></td>
                </tr>
            <? endforeach ?>
        </tbody>
    </table>
</div>