<?php
require_once "Difficulty.php";
require_once "Kata.php";
require_once "KataManager.php";

$option = -1;

$kata1 = new Kata ("kosokundai", 50, Difficulty::High, true);
$kata2 = new Kata ("seienchin", 30, Difficulty::High, true);
$kata3 = new Kata ("basai dai", 25, Difficulty::Medium, false);
$kata4 = new Kata ("juroku", 32, Difficulty::Medium, true);
$kata5 = new Kata ("kihon kata", 12, Difficulty::Low, false);
$kata6 = new Kata ("pinan godan", 18, Difficulty::Medium, false);
$kata7 = new Kata ("suparinpei", 45, Difficulty::High, true);
$kata8 = new Kata ("pinan nidan", 20, Difficulty::Low, false);

$katas = [$kata1, $kata2, $kata3, $kata4, $kata5, $kata6, $kata7, $kata8];

$kataManager = new KataManager ($katas);
do {
    $option = (int) readline (
    "Choose an Option (1,2,3):" . PHP_EOL .
    "1. Find Max Movements Kata" . PHP_EOL . 
    "2. Find Min Movements Kata" . PHP_EOL .
    "3. Find Katas by Difficulty" . PHP_EOL .
    "0. Exit"
    );
    switch ($option) {
        case 1 :
              $maxMovementsKata = $kataManager->findMaxMovementsKata();
             echo $maxMovementsKata->getName() . PHP_EOL;
             break;
        case 2 :
             $minMovementsKata = $kataManager->findMinMovementsKata();
             echo $minMovementsKata->getName() . PHP_EOL;
             break;
        case 3 :
           try {
             $option1 = (int) readline(
             "Choose a Difficulty (1,2,3):" . PHP_EOL .
             "1. High" . PHP_EOL .
             "2. Medium" . PHP_EOL .
             "3. Low" . PHP_EOL);

             $chosenDifficulty = match ($option1) {
                   1 => Difficulty::High,
                   2 => Difficulty::Medium,
                   3 => Difficulty::Low,
                   default => throw new Exception("Error: Invalid Difficulty Option"),
             };


            
             $filteredKatas =  $kataManager->filterByDifficulty($chosenDifficulty);

             foreach($filteredKatas as $kata) {
                     echo $kata->getName() . PHP_EOL;
             }

           } catch (Exception $invalidDifficulty) {
                    echo $invalidDifficulty->getMessage()  . PHP_EOL;
           }           
            break;
        case 0 : 
            echo "Adios ...";
            break;
        default : 
            echo "Error: Invalid Option" . PHP_EOL;
            break; 
       
    }
} while ( $option != 0);

