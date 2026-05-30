<?php
require '/var/www/app/core/errors/handler.php';
require '/var/www/app/views/layouts/application.phtml';
require 'var/www/app/models/Problem.php';

$title = 'Novo Problema';
$view = '/var/www/app/views/problems/new.phtml';
$problem = new Problem();
