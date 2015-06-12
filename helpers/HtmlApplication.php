<?php

namespace app\helpers;

use app\models\Application;

/**
 * Html content for application item
 */
class HtmlApplication
{
    public static function status($status)
    {
        $map = [
            Application::STATUS_DRAFT    => ['title' => 'Черновик',  'class' => 'label label-info'],
            Application::STATUS_APPROVED => ['title' => 'Завершено', 'class' => 'label label-success'],
            Application::STATUS_DECLINED => ['title' => 'Отклонено', 'class' => 'label label-danger'],
        ];
        return '<span class="'.$map[$status]['class'].'">'.$map[$status]['title'].'</span>';
    }

    public static function filesStatus($application)
    {
        if (count($application->applicationFiles)) {
            return '<span class="label label-success">Да</span>';
        } else {
            return '<span class="label label-danger">Нет</span>';
        }
    }
}