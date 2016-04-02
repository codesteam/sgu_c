<?php
use app\helpers\HtmlApplication;
use app\models\ConferenceEventDate;
?>

<table class="table">
    <tbody>
        <? foreach ($dates as $date) :?>
            <tr>
                <td><?=$date->action?></td>
                <td class="text-right">
                    <? if($date->action_at_border == ConferenceEventDate::ACTION_AT_BORDER_LT) :?>
                        до
                    <? endif ?>
                    <?=HtmlApplication::date($date->action_at)?>
                </td>
            </tr>
        <? endforeach ?>
    </tbody>
</table>
