<?
    use app\models\Application;
    use app\models\Ticket;

    $applicationsCount = Application::find()->count();
    $ticketsCount      = Ticket::find()->count();
?>

<ul class="nav nav-pills" role="tablist">
    <li role="presentation" class="<?=$active == 'applications' ? 'active' : ''?>">
        <a href="/admin/applications">
            Заявки 
            <? if ($applicationsCount) :?>
                <span class="badge"><?=$applicationsCount?></span>
            <? endif ?>
        </a>
    </li>
    <li role="presentation" class="<?=$active == 'tickets' ? 'active' : ''?>">
        <a href="/admin/tickets">
            Вопросы
            <? if ($ticketsCount) :?>
                <span class="badge"><?=$ticketsCount?></span>
            <? endif ?>
        </a>
    </li>
</ul>
<br/>