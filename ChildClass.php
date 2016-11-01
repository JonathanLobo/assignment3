<?php
  // this file will extend ParentClass.php
  require_once 'ParentClass.php';

  class ChildClass extends ParentClass {
    public $city;
    public $mascot;
    public $wins;
    public $losses;

    public function __construct($city, $mascot, $wins, $losses) {
      $this->city = $city;
      $this->mascot = $mascot;
      $this->wins = $wins;
      $this->losses = $losses;
    }

    public function getOldCity() {
      return parent::getName();
    }

    public function setCity($newCity) {
      echo "<!-- Setting new City to " . $newCity . "-->";
      $this->city = $newCity;
    }

    public function getOldMascot() {
      return parent::getMascot();
    }

    public function setMascot($newMascot) {
      echo "<!-- Setting new Mascot to " . $newMascot . "-->";
      $this->mascot = $newMascot;
    }

    public function getOldWins() {
      return parent::getWins();
    }

    public function setWins($newWins) {
      echo "<!-- Setting new Wins to " . $newWins . "-->";
      $this->wins = $newWins;
    }

    public function getOldLosses() {
      return parent::getLosses();
    }

    public function resetRecord() {
      echo "<!-- Resetting the team's record. -->";
      $this->wins = 0;
      $this->losses = 0;
    }

    public function setLosses($newLosses) {
      echo "<!-- Setting new Losses to " . $newLosses . "-->";
      $this->losses = $newLosses;
    }

  }
?>
