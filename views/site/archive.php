<?php
use yii\helpers\Html;
use app\helpers\HtmlApplication;

$this->title = 'Архив событий';
$this->params['topMenu'] = 'archive';
?>

<div class="site-login">
    <?=HtmlApplication::h1(Html::encode($this->title))?>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <? foreach ($archive as $row) :?>
                <table class="table">
                    <thead>
                        <tr>
                            <th><?=HtmlApplication::date($row->start_at)?> - <?=HtmlApplication::date($row->end_at)?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <?= Html::a($row->title, [$row->internal_url]) ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            <? endforeach ?>
        </div>
    </div>
</div>
