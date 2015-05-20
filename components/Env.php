<?php

namespace app\components;

/**
 * Environment component
 */
class Env
{
    const PARAM_PREFIX = 'app_';

    public static function load()
    {
        $params = require dirname(__FILE__).'/../config/env.php';
        foreach ($params as $key => $value) {
            putenv(self::PARAM_PREFIX.$key.'='.$value);
        }
    }

    public static function get($key)
    {
        return getenv(self::PARAM_PREFIX.$key);
    }

}