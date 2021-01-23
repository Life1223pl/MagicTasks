<?php

require_once realpath("vendor/autoload.php");



$Api = new \App\Api\API();
header('Content-Type: application/json');
echo $Api->SelectAll();
