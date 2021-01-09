<?php

declare(strict_types=1);

namespace App\DTO;

class Application
{
    private Student $student;

    private \DateTime $submissionDate;

    private int $points;

    public function __construct(Student $student, \DateTime $submissionDate, int $points)
    {
        $this->student = $student;
        $this->submissionDate = $submissionDate;
        $this->points = $points;
    }

    public function getStudent(): Student
    {
        return $this->student;
    }

    public function getSubmissionDate(): \DateTime
    {
        return $this->submissionDate;
    }

    public function getPoints(): int
    {
        return $this->points;
    }
}