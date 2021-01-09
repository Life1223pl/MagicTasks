<?php
require_once 'vendor/autoload.php';

$applications = [];

for ($i = 0; $i < 300; $i++) {
    $faker = Faker\Factory::create();

    $firstName = $faker->firstName;
    $lastName = $faker->lastName;

    $student = new \App\DTO\Student($firstName, $lastName);
    $application = new \App\DTO\Application($student, $faker->dateTime, $faker->randomNumber(2));
    $applications[] = $application;
}

// Wydz 1
$listGenerator = new \App\ApplicationList\ListGenerator();
$totalList = $listGenerator->generateList($applications, 'FIRST_APPLICATION', 110);
$mainList = array_slice($totalList, 0, 100);
$reservedList = array_slice($totalList, 100, 10);

// Wydz 2

$totalList2 = $listGenerator->generateList($applications,'SECOND_APPLIACTION', 300);
$rejectList2 = array_slice($totalList2,75,300);
$acceptedList= array_slice($totalList2,0,75);

//wydz 3

$totalList3 = $listGenerator->generateList($applications,'THIRD_APPLICATION',55);
$acceptedList3 = array_slice($totalList3,0,50);
$rejectList3 = array_slice($totalList3,50,55);

echo "Wydział Pierwszy:";
dump($totalList);
dump($mainList);
dump($reservedList);
echo "<br/><br/>";

echo "Wydział Drugi:";
dump($acceptedList);
dump($rejectList2);
echo "<br/><br/>";

echo "Wydział Trzeci:";
dump($acceptedList3);
dump($rejectList3);

echo "<br/><br/>";

