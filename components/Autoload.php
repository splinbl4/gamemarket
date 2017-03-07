<?php

function __autoload($className)
{
    $arrayPath = [
        '/models/',
        '/components/'
    ];

    foreach ($arrayPath as $path) {
        $path = ROOT . $path . $className . '.php';
        if (is_file($path)) {
            include_once $path;
        }
    }
}