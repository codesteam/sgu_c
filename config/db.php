<?php

use app\helpers\Env;

return [
    'class'    => 'yii\db\Connection',
    'dsn'      => 'mysql:host='.$_ENV['DB_HOST'].';port='.$_ENV['DB_PORT'].';dbname='.$_ENV['DB_NAME'],
    'username' => $_ENV['DB_USER'],
    'password' => $_ENV['DB_PASS'],
    'charset'  => 'utf8',
];
