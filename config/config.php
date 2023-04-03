<?php

declare(strict_types=1);

$root = dirname(__DIR__). DIRECTORY_SEPARATOR;
$url = "http://localhost/project/karma-master/";

define("APP_ROOT", $root);
define("URL_ROOT", $url);
define('CONFIG_PATH', URL_ROOT . 'config' . DIRECTORY_SEPARATOR);
define('PUBLIC_PATH', URL_ROOT . 'public' . DIRECTORY_SEPARATOR);
define('CONTROLLER_PATH', URL_ROOT . 'controller' . DIRECTORY_SEPARATOR);
define('HELPER_PATH', URL_ROOT . 'helper' . DIRECTORY_SEPARATOR);
define('ASSETS_PATH', URL_ROOT . 'public/assets' . DIRECTORY_SEPARATOR);
define('VIEW_PATH', URL_ROOT . 'views' . DIRECTORY_SEPARATOR);

