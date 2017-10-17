<?php

	require_once("config.php");

	/*$sql = new SQL();

	$usuarios = $sql->Select("SELECT * FROM tb_usuarios");

	echo json_encode($usuarios);*/

	/*$root = new Usuario();

	//Traz um usuario com base no seu ID
	$root->loadById(2);

	echo $root;*/

	/*$list = Usuario::getList();
	echo json_encode($list);*/

	//Carrega uma lista de usuarios buscando pelo login
	/*$search = Usuario::Search("Ru");
	echo json_encode($search);*/

	//carrega um usuario usando login e senha
	/*$usuario = new Usuario();
	$usuario->Login("Rudnei", "rud@123456");
	echo $usuario;*/

	//Insere um novo usuario no banco
	/*$aluno = new Usuario("Ana Paula", "147258369");
	$aluno->Insert();
	echo $aluno;*/

	$usuario = new Usuario();
	$usuario->loadById(8);
	$usuario->Update("professor", "1234587910");
	echo $usuario;

?>