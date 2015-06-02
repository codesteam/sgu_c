<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\ArrayHelper;

$this->title = 'Заявка на участие';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact" ng-controller="SiteApplicationCtrl">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
        <div class="alert alert-success">
            Ваша заявка успешно отправлена.
        </div>

        <p>
            Обращаем ваше внимание на то, что нам требуется некоторое время для обработки Вашей заявки. Если у вас возникли какие-то вопросы
            или заметили какую-то ошибку в работе системы, то вы всегда можете связаться с нами через форму обратной связи.
        </p>
    <?php else: ?>
        <p>
            Для регистрации заявки на участие в конференции необходимо заполнить нижеследующую форму.
            Пожалуйста внимательно заполняйте поле Email т.к. он будет использоваться для обратной связи.
        </p>
        <div class="row">
            <div class="col-lg-12">
                <?php $form = ActiveForm::begin([
                    'id'      => 'contact-form',
                    'method'  => 'post',
                    'layout'  => 'horizontal',
                    'options' => ['enctype'=>'multipart/form-data']
                ]); ?>
                    <div class="form-group"> 
                        <div class="col-sm-offset-3 col-sm-6">
                            <strong>Основная информация</strong>
                            <hr/>
                        </div>
                    </div>
                    <?= $form->field($model, 'report')->checkBox(['ng-model' => 'report']) ?>
                    <?= $form->field($model, 'attach', ['options' => ['ng-show' => 'report', 'class' => 'form-group']])->fileInput() ?>
                    <div class="clearfix"></div>
                    <?= $form->field($model, 'members_count', ['options' => ['ng-show' => 'report', 'class' => 'form-group']])->dropDownList($model->membersCountSelector(), ['ng-model' => 'members_count']) ?>
                    <?= $form->field($model, 'category_id')->dropDownList(ArrayHelper::map($categories, 'id', 'name')) ?>
                    <?= $form->field($model, 'name') ?>
                    <?= $form->field($model, 'email') ?>
                    <?= $form->field($model, 'location') ?>
                    <?= $form->field($model, 'profession') ?>
                    <?= $form->field($model, 'rank') ?>
                    <?= $form->field($model, 'post_address') ?>
                    <?= $form->field($model, 'phone') ?>
                    <?= $form->field($model, 'comment')->textarea(['rows' => 4]) ?>
                    <div ng-repeat="member in members" ng-show="report">
                        <div class="form-group"> 
                            <div class="col-sm-offset-3 col-sm-6">
                                <strong>Автор {{ $index + 2 }}</strong>
                                <hr/>
                            </div>
                        </div>
                        <div class="form-group"> 
                            <?= Html::label('ФИО', '', ['class' => 'control-label col-sm-3']) ?>
                            <div class="col-sm-6"> 
                                <?= Html::input('text', 'FormApplication[members][{{$index}}][name]', '', ['class' => 'form-control', 'ng-model'=> 'member.name']) ?>
                            </div>
                        </div>
                        <div class="form-group"> 
                            <?= Html::label('Страна, город', '', ['class' => 'control-label col-sm-3']) ?>
                            <div class="col-sm-6"> 
                                <?= Html::input('text', 'FormApplication[members][{{$index}}][location]', '', ['class' => 'form-control', 'ng-model'=> 'member.location']) ?>
                            </div>
                        </div>
                        <div class="form-group"> 
                            <?= Html::label('Место работы (полностью)', '', ['class' => 'control-label col-sm-3']) ?>
                            <div class="col-sm-6"> 
                                <?= Html::input('text', 'FormApplication[members][{{$index}}][profession]', '', ['class' => 'form-control', 'ng-model'=> 'member.profession']) ?>
                            </div>
                        </div>
                        <div class="form-group"> 
                            <?= Html::label('Должность, степень, звание', '', ['class' => 'control-label col-sm-3']) ?>
                            <div class="col-sm-6"> 
                                <?= Html::input('text', 'FormApplication[members][{{$index}}][rank]', '', ['class' => 'form-control', 'ng-model'=> 'member.rank']) ?>
                            </div>
                        </div>
                        <div class="form-group"> 
                            <?= Html::label('Почтовый адрес (для переписки)', '', ['class' => 'control-label col-sm-3']) ?>
                            <div class="col-sm-6"> 
                                <?= Html::input('text', 'FormApplication[members][{{$index}}][post_addresspost_address]', '', ['class' => 'form-control', 'ng-model'=> 'member.post_address']) ?>
                            </div>
                        </div>
                        <div class="form-group"> 
                            <?= Html::label('Контактные телефоны, факс', '', ['class' => 'control-label col-sm-3']) ?>
                            <div class="col-sm-6"> 
                                <?= Html::input('text', 'FormApplication[members][{{$index}}][phone]', '', ['class' => 'form-control', 'ng-model'=> 'member.phone']) ?>
                            </div>
                        </div>
                        <div class="form-group"> 
                            <?= Html::label('Email', '', ['class' => 'control-label col-sm-3']) ?>
                            <div class="col-sm-6"> 
                                <?= Html::input('text', 'FormApplication[members][{{$index}}][email]', '', ['class' => 'form-control', 'ng-model'=> 'member.email']) ?>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <?= $form->field($model, 'captcha')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>
                    <div class="form-group ">
                        <div class="col-sm-offset-3 col-sm-6">
                            <?= Html::submitButton('Отправить', ['class' => 'btn btn-success', 'name' => 'contact-button']) ?>
                        </div>
                    </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    <?php endif; ?>
</div>
