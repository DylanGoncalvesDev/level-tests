<?php 
require_once "Belt.php";
require_once "Grade.php";

class Karateca {
  private string $name;
  private int $age;
  private Belt $belt;
  private Grade $grade;
  private int $yearsOfExperience;

  public function __construct(string $name, int $age, Belt $belt, Grade $grade, int $yearsOfExperience) {
        
       if (trim($name) === "") {
           throw new Exception("Error: The name must not be empty"); 
       }

       if ($age <= 0 || $age > 100) {
           throw new Exception("Error: Invalid age");
       }
       
       if ($yearsOfExperience <= 0 || $yearsOfExperience > 100) {
           throw new Exception("Error: The years of experience is not within the valid range");
       }

        $this->name = $name;
        $this->age = $age;
        $this->belt = $belt;
        $this->grade = $grade;
        $this->yearsOfExperience = $yearsOfExperience;
  }

  public function getName(): string {
    return $this->name;
  }

  public function getAge(): int {
     return $this->age;
  }

  public function getBelt(): Belt {
    return $this->belt;
  }

  public function getGrade(): Grade {
    return $this->grade;
  }

  public function getYearsOfExperience(): int {
     return $this->yearsOfExperience;
  }

  public function setAge(int $age): void {
    if ($age <= 0 || $age > 100) {
        throw new Exception("Error: Invalid Age");
    }
     $this->age = $age;
  }

  public function setBelt(Belt $belt): void {
    $this->belt = $belt;
  }

  public function setGrade(Grade $grade): void {
     $this->grade = $grade;
  }

  public function setYearsOfExperience(int $yearsOfExperience): void {
    if ($yearsOfExperience <= 0 || $yearsOfExperience > 100) {
         throw new Exception("Error: The years of experience is not within the valid range");
    }
    $this->yearsOfExperience = $yearsOfExperience;
  }

}