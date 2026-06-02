<?php
require_once "Belt.php";
require_once "Grade.php";
require_once "Karateca.php";
require_once "KaratecaManager.php";

$option = -1;
$age = 0;

$karateca1 = new Karateca ("Juan", 18, Belt::Purple, Grade::FifthKyu, 7);
$karateca2 = new Karateca ("Fabrizzio", 25, Belt::Black, Grade::FirstDan, 12);
$karateca3 = new Karateca ("Ana", 25, Belt::Black, Grade::SecondDan, 16);
$karateca4 = new Karateca ("Pedro", 15, Belt::Green, Grade::SixthKyu, 5);
$karateca5 = new Karateca ("Paula", 10, Belt::Yellow, Grade::NinthKyu, 2);
$karateca6 = new Karateca ("Zara", 18, Belt::Brown, Grade::FirstKyu, 9);

$karatecas = [$karateca1, $karateca2, $karateca3, $karateca4, $karateca5, $karateca6];

$karatecaManager = new KaratecaManager ($karatecas);

do {
    $option = (int) readline(
    "Choose an Option:" . PHP_EOL .
    "1. Find most Experienced Karateca." . PHP_EOL .
    "2. Filter Karatecas by Age" . PHP_EOL .
    "0. Exit"
    );
    try {
        switch ($option) {
            case 1:
                $experienced = $karatecaManager->findMostExperiencedKarateca();
                echo $experienced->getName() . " " . $experienced->getYearsOfExperience() . PHP_EOL;
                break;
            case 2:
                $age = (int) readline(
                "Enter an Age"    
                );
                $result = $karatecaManager->filterKaratecasbyMaxAge($age);
                foreach ($result as $k) {
                         echo $k->getName() . " " . $k->getAge() . PHP_EOL;
                }
                break;
            case 0: 
                echo "Adios...";
                break;
            default:
                throw new Exception("Error: Invalid Option");
                break;
        }
    } catch (Exception $invalidOption) {
             echo $invalidOption->getMessage();
    }

} while ($option != 0);





