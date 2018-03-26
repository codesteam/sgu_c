<?php

$params = require(__DIR__ . '/params.php');
$staticPagesRegExp = '<view:(contact|info|2015-09-info|2015-09-it-festival|2016-09-info|2017-09-info|2017-09-photo)>';

$config = [
    'id'         => 'basic',
    'basePath'   => dirname(__DIR__),
    'bootstrap'  => ['log'],
    'language'   => 'ru-RU',
    'components' => [
        'request' => [
            'cookieValidationKey' => $_ENV['APP_KEY'],
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass'   => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class'     => 'yii\swiftmailer\Mailer',
            'transport' => [
                'class'      => 'Swift_SmtpTransport',
                'host'       => $_ENV['MAILER_HOST'],
                'username'   => $_ENV['MAILER_USER'],
                'password'   => $_ENV['MAILER_PASS'],
                'port'       => $_ENV['MAILER_PORT'],
                'encryption' => $_ENV['MAILER_ENCRYPT'],
            ],
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets'    => [
                [
                    'class'  => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName'  => false,
            'rules' => [
                'news'                                  => 'site/news',
                'archive'                               => 'site/archive',
                $staticPagesRegExp                      => 'site/page',
                'admin/application/<id:\d+>'            => 'admin/application',
                'admin/application-set-status/<id:\d+>' => 'admin/applicationSetStatus',
            ],
        ],
        'assetManager' => [
            'converter' => [
                'class'    => 'yii\web\AssetConverter',
                'commands' => [
                    'coffee' => ['js', 'coffee -p {from} > {to}'],
                ],
            ],
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],
        'i18n' => [
            'translations' => [
                '*' => [
                    'class'          => 'yii\i18n\PhpMessageSource',
                    'sourceLanguage' => 'en-US',
                ],
            ],
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = 'yii\gii\Module';
}

return $config;
