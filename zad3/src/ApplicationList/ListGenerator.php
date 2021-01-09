<?php

declare(strict_types=1);

namespace App\ApplicationList;

use App\DTO\Application;

class ListGenerator
{

    // FIRST_APPLICATION, MOST_POINTS, RANDOM
    public function generateList(array $applications, string $type, int $amount): array
    {
        switch ($type) {
            case 'FIRST_APPLICATION':
                return $this->generateFirstApplication($applications, $amount);


            case 'SECOND_APPLIACTION':
                return $this->generateSecondApplication($applications,$amount);

            case 'THIRD_APPLICATION':
                return $this->generateThirdApplication($applications,$amount);
        }
    }

    private function generateFirstApplication(array $applications, int $amount): array
    {
        usort($applications, function (Application $a, Application $b) {
            return $a->getSubmissionDate() > $b->getSubmissionDate();
        });

        return array_slice($applications, 0, $amount);
    }
    private function generateSecondApplication(array $applications, int $amount): array
    {
        usort($applications, function (Application $a, Application $b) {
            return $a->getPoints() < $b->getPoints();
        });

        return array_slice($applications, 0, $amount);
    }
    private function generateThirdApplication(array $applications, int $amount){
            return $randomArray = array_rand($applications,$amount);

    }

}