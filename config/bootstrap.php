<?php

require __DIR__ . '/../vendor/autoload.php'; //Autoload do composer

use Core\Constants\Constants;
use Core\Errors\ErrorsHandler;

ErrorsHandler::init();

Constants::rootPath();
// require_once __DIR__ . '/../core/constants/general.php';
require_once Constants::rootPath()->join( '/core/env/env.php');
// require_once ROOT_PATH . '/core/debug/functions.php';

//require_once ROOT_PATH . '/core/errors/handler.php';
