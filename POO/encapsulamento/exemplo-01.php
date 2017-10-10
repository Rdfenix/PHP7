<?php

	class Pessoa
	{
		public $nome = "Rudnei Oliveira";
		protected $idade = 26;
		private $senha = "123456";

		public function verDados()
		{
			echo $this->nome."<br/>";
			echo $this->idade."<br/>";
			echo $this->senha."<br/>";
		}
	}

	$objeto = new Pessoa();
	$objeto->verDados();

?>