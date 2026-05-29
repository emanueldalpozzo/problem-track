<?php

require '/var/www/app/models/Problem.php';

$method = $_SERVER['REQUEST_METHOD'];

if($method !== 'POST'){
    header('Location: /pages/problems');
    exit;
}



$params= $_POST['problem'];
$problem = new Problem(title:$params['title']);

if($problem -> save()){
     header('Location: /pages/problems');
}else
{
    $problem = "Novo Problema";
    $view = '/var/www/app/views/layouts/application.phtml';
}