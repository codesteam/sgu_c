<?php
use yii\helpers\Html;
use app\helpers\HtmlApplication;

$this->title = 'Новости';
$this->params['topMenu'] = 'news';
$this->params['pageHideSubmenu'] = true;
?>

<div class="site-login">
    <?=HtmlApplication::h1(Html::encode($this->title))?>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <? foreach ($news as $row) :?>
                <table class="table">
                    <thead>
                        <tr>
                            <th><?=$row['date']?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?=$row['text']?></td>
                        </tr>
                    </tbody>
                </table>
            <? endforeach ?>
        </div>
    </div>
</div>
