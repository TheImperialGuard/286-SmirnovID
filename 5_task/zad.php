<?php
	class Animal 
	{
		
		public $name, $text, $health, $intellect, $strength, $agility;
		
		function __construct($nameOfAnimal) {
			$this->name = $nameOfAnimal;
		}
		function say() {
			echo "<p>$this->name: $this->text</p>";
		}
		function getDamage($damage) {
			echo "<p>$this->name got $damage damage</p>";
			$this->health = $this->health - $damage;
		}
		function getHP($HP) {
			echo "<p>$this->name got $HP HP</p>";
			$this->health = $this->health + $HP;
		}
		function getStats() {
			echo "<p>$this->name: Health = $this->health, Intellect = $this->intellect, Strength =  $this->strength, Agility = $this->agility</p>";
		}
		function playClashOfClans($c) {
			for ($i = 0;$i < $c;$i++) {
				$n = rand(1, 2);
				if ($n == 1) {
					echo "<p>$this->name lose in Clash Of Clans,$this->name intellect now is ", $this->intellect = $this->intellect - 10, "</p>";
					} else {
					echo "<p>$this->name won in Clash Of Clans,$this->name intellect now is ", $this->intellect = $this->intellect + 10, "</p>";
				}
				$this->agility = $this->agility - 1;
				$this->strength = $this->strength - 10;
			}
		}
		function visitTrain($c) {
			if ($c == 1) {
				echo "$this->name visited a train";
				$this->strength = $this->strength + 50;
				$this->agility = $this->agility + 10;
				} else {
				for ($i = 0;$i < $c;$i++) {
					$this->strength = $this->strength + 50;
					$this->agility = $this->agility + 10;
				}
				echo "$this->name visited $c trains";
			}
		}
		function fight($c) {
			$agility = 0;
			$strength = 0;
			$damage = 0;
			$intellect = 0;
			if ($c == 1) {
				$name = 'Naker';
				$strength = 100;
				$agility = 100;
				$intellect = 0;
				$damage = 100;
				} else {
				if ($c == 2) {
					$name = 'Kulaega';
					$strength = 400;
					$agility = 260;
					$intellect = 0;
					$damage = 125;
					} else {
					if ($c == 3) {
						$name = 'Egor';
						$intellect = 300;
						$damage = 1;
						} else {
						echo "Enemy not found";
					}
				}
			}
			if ($this->strength < $strength or $this->agility < $agility or $this->intellect < $intellect) {
				echo "<p><b>$this->name lose, enemy was $name, visit more trains or try to win in Clash Of Clans</b></p>";
				$this->health = $this->health - $damage;
				} else {
				if ($c == 1 or $c == 2 or $c == 3) {
					echo "<p><b>$this->name won, enemy was $name, congratulations!</b></p>";
				}
			}
		}
	}
	$wolf = new Animal('Vovk');
	$wolf->text = "bruh";
	$wolf->health = 150;
	$wolf->intellect = 200;
	$wolf->strength = 120;
	$wolf->agility = 250;
	$wolf->say();
	$wolf->fight(1);
	$wolf->fight(2);
	$wolf->getStats();
	$wolf->getDamage(50);
	$wolf->getHP(100);
	$wolf->playClashOfClans(2);
	$wolf->getStats();
	$wolf->visitTrain(6);
	$wolf->getStats();
	$wolf->fight(2);
	$wolf->fight(3);
	
	$human = new Animal('Kulaega');
	$human->text = 'Drovche, Vovk';
	$human->say();
?>
