<?php

$config = [];
$config['db'] = [
    'host' => 'localhost',
    'port' => '3306',
    'user' => 'u1406926_default',
    'pass' => '69uYJ8ng8P6xZHo3',
    'base' => 'u1406926_default'
];

$config['path'] = [
    'root' => __DIR__,
    'controllers' => __DIR__ . '/controllers',
    'templates' => __DIR__ . '/templates',
    'www' => __DIR__ . '/www'
];

function autoloader($class) {
    $folders = [
        'controllers',
        'models',
        'lib/smarty',
        'lib/',
        'lib/сlasses',
        'lib/сlasses/PHPExcel',
        'lib/сlasses/PHPExcel/Writer'
    ];

    foreach ($folders as $folder) {
        $file = __DIR__ . '/' . $folder . '/' . $class . '.class.php';

        if (is_file($file)) {
            require_once $file;
            return true;
        }
    }
    return false;
}

spl_autoload_register('autoloader');
session_start();

Core::Instance()->Init($config);
Core::Instance()->LoadPage();

