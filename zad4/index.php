<?php

use App\Api;

require_once realpath("vendor/autoload.php");



$Api = new Api();
header('Content-Type: application/json');
echo $Api->SelectAll();
