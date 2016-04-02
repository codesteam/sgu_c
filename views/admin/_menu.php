<?
    use app\models\Application;
    use app\models\Ticket;

    $applicationsCount = Application::find()->where(['conference_event_id' => $this->params['currentConference']->id])->count();
    $ticketsCount      = Ticket::find()->count();
?>

<ul class="nav nav-pills" role="tablist">
    <? if (Yii::$app->user->can('application_listing')) :?>
        <li role="presentation" class="<?=$active == 'applications' ? 'active' : ''?>">
            <a href="/admin/applications">
                Заявки
                <? if ($applicationsCount) :?>
                    <span class="badge"><?=$applicationsCount?></span>
                <? endif ?>
            </a>
        </li>
    <? endif ?>
    <? if (Yii::$app->user->can('ticket_listing')) :?>
        <li role="presentation" class="<?=$active == 'tickets' ? 'active' : ''?>">
            <a href="/admin/tickets">
                Вопросы
                <? if ($ticketsCount) :?>
                    <span class="badge"><?=$ticketsCount?></span>
                <? endif ?>
            </a>
        </li>
    <? endif ?>
</ul>
<br/>