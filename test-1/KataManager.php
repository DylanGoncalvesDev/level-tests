<?php
require_once "Kata.php";

class KataManager {

 private array $katas;

 public function __construct (array $katas) {
   if (count($katas) === 0 ) {
       throw new Exception("Error: No Katas found.");
   }
   foreach ($katas as $kata) {
            if (!$kata instanceof Kata) {
                throw new Exception("Error: The array contains elements that are not of type Kata.");
            }
   }
    $this->katas = $katas;
 }

 public function filterByDifficulty( Difficulty $chosenDifficulty ): array {
    $filteredKatas = [];

      foreach ($this->katas as $kata) {
                if ($kata->getDifficulty() === $chosenDifficulty) {
                    $filteredKatas[] = $kata;
                   
                }
      }
    return $filteredKatas;
 }
     
 public function findMaxMovementsKata(): Kata {
    $max = $this->katas[0];

    foreach ($this->katas as $kata) {
             if ($kata->getNumberOfMovements() > $max->getNumberOfMovements()) {
                 $max = $kata;
             }
    }
    return $max;
 }                      
 
 public function findMinMovementsKata(): Kata {
     $min = $this->katas[0];

     foreach ($this->katas as $kata) {
              if ($kata->getNumberOfMovements() < $min->getNumberOfMovements()) {
                  $min = $kata;
              } 
     }
     return $min;
 }
}
?> 