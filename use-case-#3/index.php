<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'Student.php';

$studentsArray = [
$ahmad = new student('Ahmad',10,'A'),
$jian = new student ('Jian',9,'A'),
$michael = new student ('Michael',8,'A'),
$dante = new student ('Dante',7,'A'),
$muhammet = new student ('Muhammet',6,'A'),
$nicolas = new student ('Nicolas',5,'A'),
$jordy = new student ('Jordy',4,'A'),
$beryl = new student ('Beryl',3,'A'),
$cynthia = new student ('Cynthia',2,'A'),
$ruben = new student ('Ruben',1,'A'),
$magali = new student ('Magali',10,'B'),
$jawid = new student ('Jawid',10,'B'),
$koen = new student ('Koen',9,'B'),
$kevin = new student ('Kevin',9,'B'),
$benjamin = new student ('Benjamin',8,'B'),
$dery = new student ('Dery',8,'B'),
$michelle = new student ('Michelle',7,'B'),
$colin = new student ('Colin',7,'B'),
$feruz = new student ('Feruz',6,'B'),
$pieter = new student ('Pieter',6,'B'),
];

$scoreGroupA = 0;
$sizeGroupA = 0;
$scoreGroupB = 0;
$sizeGroupB = 0;

for ($i = 0; $i < count($studentsArray); $i++) {
    $group = $studentsArray[$i]->group;
    $score = $studentsArray[$i]->score;

    if ($group === 'A') {
        $sizeGroupA++;
        $scoreGroupA += $score ;
    }
    if ($group === 'B') {
        $sizeGroupB++;
        $scoreGroupB += $score;
    }
}

$averageGroupA = $scoreGroupA / $sizeGroupA;
$averageGroupB = $scoreGroupB / $sizeGroupB;

echo 'Average score for each group:'.'<br>';
echo '<br>';
echo "Group A: {$averageGroupA}<br>";
echo "Group B: {$averageGroupB}<br>";
echo '<br>';
