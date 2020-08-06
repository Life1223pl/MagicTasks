<?php


declare(strict_types=1);

use NumberApp\Number;
use \NumberApp\RomanFormatter;

require_once 'vendor/autoload.php';

unset($argv[0]);

$numberObjectArray = [];

foreach ($argv as $numberInString) {
    $inputNumber = explode(':', $numberInString);

    $number = (int)$inputNumber[0];
    $system = (int)$inputNumber[1];

    $numberObject = new Number($number, $system);
    $numberObjectArray[] = $numberObject;
}

$result = new Number(0, 10);

foreach ($numberObjectArray as $numberObject) {
    $result = $result->add($numberObject);
    // wez kazdy obiekt z tablicy $numberObjectArray przekonwertuj liczbe i dodaj do niego kolejną

}
$RomanFormatter = new RomanFormatter();
$finalResult = $RomanFormatter->formatToString($result);

echo $finalResult;
