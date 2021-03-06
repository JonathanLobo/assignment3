<?php
  // This is the file for the parent class

  class ParentClass {
    private $c;
    private $m;
    private $w;
    private $l;

    public function __construct($c, $m, $w, $l) {
      $this->city = $c;
      $this->mascot = $m;
      $this->wins = $w;
      $this->losses = $l;
    }

    public function getCity() {
      return $this->city;
    }

    public function getMascot() {
      return $this->mascot;
    }

    public function getWins() {
      return $this->wins;
    }

    public function getLosses() {
      return $this->losses;
    }

    public function __toString() {
      $totalGames = $this->getWins() + $this->getLosses();
      $teamName = $this->getCity() . " " . $this->getMascot();
      $record = $this->getWins() . " - " . $this->getLosses();

      $status;

      if ($totalGames < 16) {
        if ($this->getWins()/($this->getWins() + $this->getLosses()) >= .625) {
          $status = "The season is looking promising!";
        } else {
          $status = "The team's chances are not looking good.";
        }
      } else {
        if ($this->getWins()/($this->getWins() + $this->getLosses()) >= .625) {
          $status = "They are playoff bound!";
        } else {
          $status = "They missed the playoffs. Oh well, there's always next year.";
        }
      }

      $teamInfo = "After " . $totalGames . " games, the " . $teamName . " have a record of " . $record . ".";

      return $teamInfo . "<br>" . $status;
    }
  }
?>
