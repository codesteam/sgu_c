<?php

namespace app\helpers;

use yii\helpers\Inflector;
use app\models\Application;

/**
 * Html content for application item
 */
class HtmlApplication
{
    static public $h2Queue = [];

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

    public static function h1($title, $class = 'text-default')
    {
        return '
            <div class="text-center">
                <h1 class="h-centered"><span class="text '.$class.'">'.$title.'<span></h2>
            </div>
        ';
    }

    public static function h2($title, $class = 'text-default')
    {
        return '
            <div class="text-center">
                <h2 class="h-centered"><span class="text '.$class.'">'.$title.'<span></h2>
            </div>
        ';
    }

    public static function h2Queue($title)
    {
        $slug = 'l-'.Inflector::slug($title);
        self::$h2Queue[$slug] = $title;
        return '<h2 id="'.$slug.'">'.$title.'</h2>';
    }
}