<?php
use yii\helpers\Html;
use app\helpers\HtmlApplication;
?>
<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <style>
        th,
        td {
            padding: 10px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <? foreach ($applications as $application) :?>
        <table cellspacing="0" cellpadding="0">
        <thead>
            <tr class="table-filters">
                <th>#</th>
                <th>Доклад</th>
                <th>Научное направление</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?=$application->id?></td>
                <td><?=HtmlApplication::filesStatus($application)?></td>
                <td><?=$application->category->name?></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    Участники:
                    <table cellspacing="0" cellpadding="0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Имя</th>
                            <th>Email</th>
                            <th>Страна, город</th>
                            <th>Место работы</th>
                            <th>Должность</th>
                            <th>Почтовый адрес</th>
                            <th>Телефон / факс</th>
                        </tr>
                        </thead>
                        <tbody>
                            <? foreach ($application->applicationMembers as $index => $member) :?>
                                <tr>
                                    <th scope="row"><?=$index + 1?></th>
                                    <td><?=Html::encode($member->name)?></td>
                                    <td><?=Html::encode($member->email)?></td>
                                    <td><?=Html::encode($member->location)?></td>
                                    <td><?=Html::encode($member->profession)?></td>
                                    <td><?=Html::encode($member->rank)?></td>
                                    <td><?=Html::encode($member->post_address)?></td>
                                    <td><?=Html::encode($member->phone)?></td>
                                </tr>
                            <? endforeach ?>
                        </tbody>
                    </table>
                </td>
            </tr>
            </tbody>
        </table>
        <br/>
        <br/>
    <? endforeach ?>
</body>
</html>