<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use app\helpers\HtmlApplication;

$this->title = 'Связаться с нами';
?>
<div class="site-contact">
    <?=HtmlApplication::h1(Html::encode($this->title))?>
    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
        <div class="alert alert-success">
            Ваша обращение успешно отправлено.
        </div>
        <p>
            Обращаем ваше внимание на то, что нам требуется некоторое время для обработки Вашего обращения. 
        </p>
    <?php else: ?>
        <p>
            Если у вас появились к нам какие-то вопросы задайте их нам прямо сейчас!
        </p>
        <div class="row">
            <div class="col-lg-4">
                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                    <?= $form->field($model, 'name') ?>
                    <?= $form->field($model, 'email') ?>
                    <?= $form->field($model, 'subject') ?>
                    <?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>
                    <?= $form->field($model, 'captcha')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-4">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>
                    <div class="form-group">
                        <?= Html::submitButton('Отправить', ['class' => 'btn btn-info-full', 'name' => 'contact-button']) ?>
                    </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    <?php endif; ?>
</div>
