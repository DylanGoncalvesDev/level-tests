<?php
require_once "Difficulty.php";

class Kata {
private string $name;
private int $numberOfMovements;
private Difficulty $difficulty;
private bool $kiai;

public function __construct(string $name , int $numberOfMovements, Difficulty $difficulty, bool $kiai) {
   
   if (trim($name) === "") {
       throw new Exception("Error: The name cannot be empty.");
   }
   
   if ($numberOfMovements <= 0 ) {
       throw new Exception("Error: The number of movements must be greater than zero (0).");
   }

   $this->name = $name;
   $this->numberOfMovements = $numberOfMovements;
   $this->difficulty = $difficulty;
   $this->kiai = $kiai;
}

public function getName(): string {
    return $this->name;
}
public function getNumberOfMovements(): int{
   return $this->numberOfMovements;
}
public function getDifficulty(): Difficulty {
    return $this->difficulty;
}
public function getKiai(): bool {
    return $this->kiai;
}

}