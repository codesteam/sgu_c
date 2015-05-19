<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Заявка на участие';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
        <div class="alert alert-success">
            Ваша заявка успешно отправлена. На ваш Email были отправлены дополнительные инструкции по работе с системой.
        </div>

        <p>
            Обращаем ваше внимание что нам требуется некоторое время чтобы обработать вашу заявку. Если у вас возникли какие-то вопросы
            или заметили какую-то ошибку в работе системы, то вы всегда можете связаться с нами через форму обратной связи.
        </p>
    <?php else: ?>
        <p>
            Для регистрации заявки на участие в конференции необходимо заполнить нижеследующую форму.
            Пожалуйста внимательно заполняйте поле Email т.к. он будет использоваться для обратной связи.
        </p>
        <div class="row">
            <div class="col-lg-5">
                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                    <?= $form->field($model, 'name') ?>
                    <?= $form->field($model, 'email') ?>
                    <?= $form->field($model, 'subject') ?>
                    <?= $form->field($model, 'attach')->fileInput() ?>
                    <?= $form->field($model, 'captcha')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>
                    <div class="form-group">
                        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    <?php endif; ?>
</div>
