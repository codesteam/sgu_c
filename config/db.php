<?php

use app\helpers\Env;

return [
    'class'    => 'yii\db\Connection',
    'dsn'      => 'mysql:host=localhost;dbname='.Env::get('db_name'),
    'username' => Env::get('db_user'),
    'password' => Env::get('db_pass'),
    'charset'  => 'utf8',
];
