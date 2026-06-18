<?php

require __DIR__ . '/../vendor/autoload.php'; //Autoload do composer

use Core\Env\EnvLoader;
use Core\Errors\ErrorsHandler;

ErrorsHandler::init();
EnvLoader::init();

// require_once __DIR__ . '/../core/constants/general.php';
// require_once ROOT_PATH . '/core/debug/functions.php';


