<?php

use App\Api;
require_once 'vendor/autoload.php';
require_once realpath("vendor/autoload.php");

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

$api = new Api();
$result = $api->SelectAll();

echo $twig->render('MasterTemplate.html',[]);
echo $twig->render('ListingTemplate.html',[
    'result' => $result
]);
