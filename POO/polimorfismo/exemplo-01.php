<?php

	abstract class Animal
	{
		public function falar()
		{
			return "som";
		}

		public function mover()
		{
			return "andar";
		}
	}

	class Cachorro extends Animal
	{
		public function falar()
		{
			return "late !";
		}
	}

	class Pasaro extends Animal
	{
		public function falar()
		{
			return "canta <br/>";
		}

		public function mover()
		{
			return "voa e ".parent::mover();
		}
	}

	$pluto = new Cachorro();
	echo $pluto->falar();
	echo $pluto->mover();

	echo "===============================================<br/>";

	$passaro = new Pasaro();
	echo $passaro->falar();
	echo $passaro->mover();

?>