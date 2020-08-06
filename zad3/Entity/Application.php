<?php
namespace Src\Entity;

class Application
{



    public function __construct(Student $student)
    {
        $this->student = $student;

    }


    public $student;

    public function getStudent()
    {
        return $this->student;
    }

    public function setStudent($student)
    {
        $this->student = $student;
    }



    private $points;

    public function getPoints()
    {
        return $this->points;
    }

    public function setPoints($points)
    {
        $this->points = $points;
    }



    private $submissionDate;

    public function getSubmissionDate()
    {
        return $this->submissionDate;
    }

    public function setSubmissionDate($submissionDate)
    {
        $this->submissionDate = $submissionDate;
    }


}