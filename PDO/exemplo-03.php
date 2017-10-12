<?php

	$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

	$stmt = $conn->prepare("UPDATE tb_usuarios SET des_login = :LOGIN, senha = :PASSWORD WHERE id_usuario = :ID");

	$login = "José Mendes";
	$password = "12345678";
	$id = 2;

	$stmt->bindParam(":LOGIN", $login);
	$stmt->bindParam(":PASSWORD", $password);
	$stmt->bindParam(":ID", $id);

	$stmt->execute();

	echo "Alterado OK";

?>