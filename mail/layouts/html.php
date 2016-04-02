<?php
use yii\helpers\Html;
use yii\helpers\Url;
require '_css.php';
?>
<?php $this->beginPage() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?= Yii::$app->charset ?>" />
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body style="<?=$styleBody?>">
    <?php $this->beginBody() ?>

    <table style="<?=$styleContainer?>">
        <tbody>
            <tr>
                <td style="background-color:#eee">
                    <table style="padding:30px;width:740px;" cellspacing="0" align="center">
                        <tr>
                            <td style="background-color:white;padding:10px 15px 10px 15px;width:640px;">
                                <table width="100%">
                                    <tr>
                                        <td>
                                            ПНРОИТ <?=date('Y')?>
                                        </td>
                                        <td style="text-align:right">
                                            <span style="margin-top:20px">
                                                <a href="<?=Url::to('/', 1);?>"        style="<?=$styleLink?>;padding-right:15px;">Главная</a>
                                                <a href="<?=Url::to('/contact', 1);?>" style="<?=$styleLink?>;border-left:2px solid #eee;padding-right:15px;padding-left:15px;">Контакты</a>
                                                <a href="<?=Url::to('/info', 1);?>"    style="<?=$styleLink?>;border-left:2px solid #eee;padding-left:15px;">Информация</a>
                                            </span>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color:white;border-top:1px solid #eee">&nbsp;</td>
                        </tr>
                        <tr>
                            <td style="background-color:white;padding:10px 15px 10px 15px;width:640px;">
                                <? echo $content; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color:white;border-top:1px solid #eee">&nbsp;</td>
                        </tr>
                        <tr>
                            <td style="background-color:white;padding:0px 15px 15px 15px;color:#888888">
                                <p style="font-size:12px;margin: 0;">
                                    Данное письмо отправлено роботом и отвечать на него не нужно.<br/>
                                    С уважением, команда <a href="<?=Url::to('/', 1);?>" style="<?=$styleLink?>"><?=Url::to('/', 1);?></a>
                                </p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
