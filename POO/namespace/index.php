<?php

	require_once("config.php");

	use Cliente\Cadastro;

	$cad = new Cadastro();

	$cad->setNome("Rudnei Oliveira");
	$cad->setEmail("teste@email.com.br");
	$cad->setSenha("123456");

	$cad->registrarVenda();

	//echo $cad;

?>