<?php

require_once 'RomanFormatter.php';
require_once 'Number.php';
$obj = new Number();
$number = $argv[1];
$number2 = $argv[2];
$number3 = $argv[3];
$numberTab = [$number, $number2, $number3];
$NumberFromOct = 0;
$NumberFromDecimal = 0;
$NumberFromHex = 0;
$NumberFromBinary = 0;
for ($i = 0; $i <= 2; $i++) {

    if (substr($numberTab[$i], -2) == 10) {
        $obj = $obj->changeNumberfromDecimal(substr($numberTab[$i], 0, -3), new Number());
        $NumberFromDecimal = $obj->number;
    }

    if (substr($numberTab[$i], -2) == 16) {
        $obj = $obj->changeNumberfromHex(substr($numberTab[$i], 0, -3), new Number());
        $NumberFromHex = $obj->decimal;
    }

    if (substr($numberTab[$i], -1) == 8) {
        $obj = $obj->changeNumberfromOct(substr($numberTab[$i], 0, -2), new Number());
        $NumberFromOct = $obj->decimal;
    }

    if (substr($numberTab[$i], -1) == 2) {
        $obj = $obj->changeNumberfromBinary(substr($numberTab[$i], 0, -2), new Number());
        $NumberFromBinary = $obj->decimal;
    }
}

$suma = $obj->Sum($NumberFromDecimal, $NumberFromBinary, $NumberFromOct, $NumberFromHex);


$Roman = new RomanFormatter();
$RomanSuma = $Roman->formatIntToRoman($suma);
echo $RomanSuma;


