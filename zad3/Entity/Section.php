<?php


namespace Src\Entity;

require_once '../Interfaces/listInterface.php';
require_once '../Interfaces/listQueue.php';
use Src\interfaces\listInterface;
use Src\interfaces\listQueue;

class Section implements listQueue , listInterface
{
    public $application;

    public function __construct(Application $application)
    {
        $this->application = $application;
    }

    public function HowManyLists($value)
    {
        return $value;
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

}