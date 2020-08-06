<?php
require_once '../vendor/autoload.php';
require_once '../Entity/Section.php';
require_once '../Entity/Application.php';
require_once '../Entity/Student.php';
require_once '../Entity/Lista.php';

use Src\Entity\Section;
use Src\Entity\Application;
use Src\Entity\Student;
use Src\Entity\Lista;


$sectionA = new Section(new Application(new Student()));

$addmitedList = new Lista();
$reserveList = new Lista();
$rejectedList = new Lista();


$loader = new Twig\Loader\FilesystemLoader('../Templates');
$twig = new Twig\Environment($loader);

echo $twig->render('sectionA.html.twig',[]);