<?php

	class Pessoa
	{
		public $nome;

		public function falar()
		{
			return "Meu nome é ".$this->nome;
		}
	}

	$rudnei = new Pessoa();

	$rudnei->nome = "Rudeni Oliveira";
	echo $rudnei->falar();

?>