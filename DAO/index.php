<?php

	require_once("config.php");

	/*$sql = new SQL();

	$usuarios = $sql->Select("SELECT * FROM tb_usuarios");

	echo json_encode($usuarios);*/

	$root = new Usuario();

	$root->loadById(2);

	echo $root;

?>