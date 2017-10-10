<?php
	class Endereco 
	{
		private $logradouro;
		private $numero;
		private $cidade;

		//Cria um objeto
		public function __construct($a, $b, $c)
		{
			$this->logradouro = $a;
			$this->numero = $b;
			$this->cidade = $c;
		}

		//transforma um objeto em string
		public function __toString()
		{
			return $this->logradouro.", ".$this->numero.", ".$this->cidade;
		}
	}

	$meuEndereco = new Endereco("Rua papa são Dionisio", "231", "Campinas");

	//var_dump($meuEndereco);

	echo $meuEndereco;

?>