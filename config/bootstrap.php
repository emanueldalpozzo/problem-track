<?php

require __DIR__ . '/../vendor/autoload.php'; //Autoload do composer


use Core\Env\EnvLoader;
use Core\Errors\ErrorsHandler;

ErrorsHandler::init();
EnvLoader::init();
