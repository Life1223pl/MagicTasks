<?php


namespace Src\Entity;


use Src\interfaces\listInterface;
use Src\interfaces\listQueue;
use Twig\Loader\LoaderInterface;

class Lista implements listQueue, listInterfacepublic {

    function HowManyLists($value){

    }

    public function SortByAlphabet()
    {
        // TODO: Implement SortByAlphabet() method.
    }

    public function SortByPoints()
    {
        // TODO: Implement SortByPoints() method.
    }

    public function SortRandom()
    {
        // TODO: Implement SortRandom() method.
    }

    public function SortByDate()
    {
        // TODO: Implement SortByDate() method.
    }

    public $StudentLimitOnList;
}