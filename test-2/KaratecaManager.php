<?php
require_once "Karateca.php";

class KaratecaManager {
private array $karatecas;

public function __construct(array $karatecas) {
  if (count($karatecas) === 0) {
      throw new Exception("Error: No Karatecas found ");
  }

  foreach ($karatecas as $karateca) {
            if (!$karateca instanceof Karateca) {
                throw new Exception("Error: The array contains elements that are not of type Karateca.");
            }
  }
  $this->karatecas = $karatecas;
}

public function findMostExperiencedKarateca(): Karateca {
    $experienced = $this->karatecas[0];
     
    foreach ($this->karatecas as $karateca) {
              if ( $karateca->getYearsOfExperience() > $experienced->getYearsOfExperience()) { 
                  $experienced = $karateca;
              }
     }
     return $experienced;
}

public function filterKaratecasByMaxAge( int $age ): array {
    $result = [];

    if ($age <= 0 || $age > 100) {
        throw new Exception("Error: Invalid age");
    }

   foreach ($this->karatecas as $karateca) {
            if ($karateca ->getAge() <= $age) {
                $result[] = $karateca;
            }
   }
   return $result;
}
}