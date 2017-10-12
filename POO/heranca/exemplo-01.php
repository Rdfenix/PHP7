<?php

	class Documento
	{
		private $numero;

		public function getNumero()
		{
			return $this->numero;
		}

		public function setNumero($n)
		{
			$this->numero = $n;
		}
	}

	class CPF extends Documento
	{
		//class retorna um valor bool
		public function validar():bool
		{
			$numeroCPF = $this->getNumero();
			//validacao do CPF
			return true;
		}
	}

	$doc = new CPF();
	$doc->setNumero("40545370817");
	var_dump($doc->validar());

	echo "<br/>";

	echo $doc->getNumero();

?>