<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'assets_app/css/site.css',
        'assets_app/css/jquery.datatables.css'
    ];
    public $js = [
        'assets_app/js/angular.js',
        'assets_app/js/jquery.datatables.js',
        'assets_app/js/app/app.coffee',
        'assets_app/js/app/controllers/site-application.coffee',
        'assets_app/js/app/directives.coffee',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
