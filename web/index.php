<?php
// load env variables helper
require_once(dirname(__FILE__).'/../components/Env.php');
\app\components\Env::load();

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG',  \app\components\Env::get('yii_debug'));
defined('YII_ENV') or define('YII_ENV',  \app\components\Env::get('yii_env'));


require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

$config = require(__DIR__ . '/../config/web.php');

(new yii\web\Application($config))->run();
