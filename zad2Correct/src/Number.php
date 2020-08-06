<?php

declare(strict_types=1);

namespace NumberApp;

final class Number
{
    /** @var int */
    public $number;

    /** @var int */
    public $system;

    public function __construct(int $number, int $system)
    {
        $this->number = $number;
        $this->system = $system;
    }

    public function add(Number $number): Number
    {

        $objectNumber = base_convert($this->number,$this->system,10) + base_convert($number->number,$number->system,10);
        $objectNumber = (int)$objectNumber;

        $newNumberObject = new Number($objectNumber, 10);

        return $newNumberObject;
    }
}