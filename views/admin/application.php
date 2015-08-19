<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\helpers\HtmlApplication;
use app\models\Application;
use app\models\ApplicationMessage;

$this->title = 'Заявка на участие #'.$application->id;
$this->params['breadcrumbs'][] = ['url' => ['admin/applications'], 'label' => 'Все заявки'];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">
    <?= $this->render('_menu', ['active' => 'applications']) ?>
    <div class="row">
        <div class="col-lg-8">
            <? if ($application->status == Application::STATUS_DRAFT) :?>
                <div class="pull-right">
                    <?=Html::a(
                        'Принять заявку',
                        ['/admin/application-set-status/', 'id' => $application->id, 'status' => Application::STATUS_APPROVED],
                        [
                            'class' => 'btn btn-sm btn-success',
                            'data'  => ['confirm' => 'Вы действительно хотите это сделать?']
                        ]
                    )?>
                    <?=Html::a(
                        'Отклонить заявку',
                        ['/admin/application-set-status/', 'id' => $application->id, 'status' => Application::STATUS_DECLINED],
                        [
                            'class' => 'btn btn-sm btn-danger',
                            'data'  => ['confirm' => 'Вы действительно хотите это сделать?']
                        ]
                    )?>
                    <div class="modal fade" id="basicModal" tabindex="-1" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Отклонить заявку</h4>
                                </div>
                                <div class="modal-body">
                                    <form action="<?=Yii::$app->UrlManager->CreateUrl('admin/send-declines-messages')?>" method="get">
                                        <p><b>Опишите причину отклонения заявки:</b></p>
                                        <p><textarea rows="10" cols="45" name="text"></textarea></p>
                                        <p><input type="submit" value="Отклонить"></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class = "btn btn-sm btn-danger" data-toggle="modal"  data-target="#basicModal">Отклонить заявку (New)</a>
                </div>
            <? endif ?>
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
                        <td>Статус</td>
                        <td><?=HtmlApplication::status($application->status)?>
                            <? if ($application->status == Application::STATUS_DECLINED) :?>
                                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="Tooltip on right">?</button>
                            <? endif ?>
                        </td>
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
