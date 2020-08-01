<?php


class Number
{
    public $number;
    public $binary;
    public $octal;
    public $hexadecimal;
    public $decimal;

    public function changeNumberfromDecimal($number,Number $numberObject)
    {

        $numberObject->number = $number;
        $numberObject->binary = decbin($numberObject->number);
        $numberObject->octal = decoct($numberObject->number);
        $numberObject->hexadecimal = dechex($numberObject->number);

        return $numberObject;
    }

    public function changeNumberfromBinary($number,Number $numberObject)
    {
        $numberObject->number = $number;
        $numberObject->decimal = bindec($numberObject->number);
        $numberObject->octal = decoct($numberObject->decimal);
        $numberObject->hexadecimal = dechex($numberObject->decimal);

        return $numberObject;
    }

    public function changeNumberfromOct($number,Number $numberObject)
    {
        $numberObject->number = $number;
        $numberObject->decimal = octdec($numberObject->number);
        $numberObject->binary = decbin($numberObject->decimal);
        $numberObject->hexadecimal = dechex($numberObject->decimal);

        return $numberObject;
    }

    public function changeNumberfromHex($number,Number $numberObject)
    {
        $numberObject->number = $number;
        $numberObject->decimal = hexdec($numberObject->number);
        $numberObject->binary = decbin($numberObject->decimal);
        $numberObject->octal = decoct($numberObject->decimal);

        return $numberObject;
    }

    public function Sum($first,$second,$third,$fourth){

        $sum = $first + $second + $third + $fourth;

        return $sum;
    }


}