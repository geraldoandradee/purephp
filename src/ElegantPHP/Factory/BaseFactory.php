<?php

namespace ElegantPHP\Factory;


class BaseFactory
{
    protected static $instances = array();

    private function __construct()
    {
    }

    final private function __clone()
    {
    }

    public static function getInstance()
    {
        $class = get_called_class();

        if (!isset(self::$instances[$class])) {
            self::$instances[$class] = new $class;
        }
        return self::$instances[$class];
    }
}
