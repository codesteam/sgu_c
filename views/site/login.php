<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\helpers\HtmlApplication;

$this->title = 'Вход';
?>
<div class="site-login">
    <?=HtmlApplication::h1(Html::encode($this->title))?>
    <p>Пожалуйста представьтесь:</p>
    <div class="row">
        <div class="col-lg-3">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                <?= $form->field($model, 'username') ?>
                <?= $form->field($model, 'password')->passwordInput() ?>
                <div class="form-group">
                    <?= Html::submitButton('Отправить', ['class' => 'btn btn-info-full', 'name' => 'login-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
