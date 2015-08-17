<?php
use yii\helpers\Html;
use app\helpers\HtmlApplication;
use app\models\Application;
use app\models\ApplicationMessage;
use yii\bootstrap\ActiveForm;

$this->title = 'Заявка на участие #'.$application->id;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
    <br/>
    <div class="row">
        <div class="col-lg-8">
            <h4>Общая информация</h4>
            <br/>
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td>Направление</td><td><?=Html::encode($application->category->name)?></td>
                    </tr>
                    <tr>
                        <td>Участников</td><td><?=count($application->applicationMembers)?></td>
                    </tr>
                    <tr>
                        <td>Статус</td>
                        <td><?=HtmlApplication::status($application->status)?></td>
                    </tr>
                    <tr>
                        <td>Комментарий</td><td><?=Html::encode($application->comment)?></td>
                    </tr>
                </tbody>
            </table>
            <h4>Участники</h4>
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
                                <td><?=Html::a($file->name_origin, '/uploads/'.$file->name, ['target' => '_blank'])?></td>
                            </tr>
                        <? endforeach ?>
                    </tbody>
                </table>
            <? endif ?>
        </div>
        <div class="col-lg-4">
            <h4>Сообщения</h4>
            <p>Используя форму ниже вы можете отправить нам сообщение касательно данной заявки.</p>
            <? foreach ($application->applicationMessages as $message) :?>
                <?
                    if ($message->sender == ApplicationMessage::SENDER_USER) {
                        $panelTitle = 'Пользователь';
                        $panelClass = 'panel-default';
                    } else {
                        $panelTitle = 'Администрация';
                        $panelClass = 'panel-info';
                    }
                ?>
                <div class="panel <?=$panelClass?>">
                    <div class="panel-heading"><strong><?=$panelTitle?></strong> <div class="pull-right"><?=$message->created_at?></div></div>
                    <div class="panel-body">
                        <?= nl2br(Html::encode($message->body)) ?>
                    </div>
                </div>
            <? endforeach ?>
            <br/>
                <?php $form = ActiveForm::begin([]); ?>
                <?= $form->field($model, 'body')->textarea() ?>
                <div class="form-group">
                    <?= Html::submitButton('Отправить', ['class' => 'btn btn-success', 'name' => 'login-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
