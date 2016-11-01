<?php
	// this file will extend ParentClass.php
	include 'ParentClass.php';

	class ChildClass extends ParentClass {
		private $city;
    private $mascot;
    private $wins;
		private $losses;

    public function __construct($c, $m, $w, $l) {
      $this->city = $c;
      $this->mascot = $m;
      $this->wins = $w;
			$this->losses = $l;
    }

    public function getOldCity() {
      return parent::getName();
    }

    public function setCity($newCity) {
      echo "<!-- Setting new City to " . $newCity . "-->";
      $this->city = $newCity;
    }

    public function getOldMascot() {
      return parent::getJob();
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
