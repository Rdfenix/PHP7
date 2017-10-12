<?php

	$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

	$stmt = $conn->prepare("INSERT INTO tb_usuarios (des_login, senha) VALUES (:LOGIN,:PASSWORD)");

	$login = "jose";
	$password = "123456789";

	$stmt->bindParam(":LOGIN", $login);
	$stmt->bindParam(":PASSWORD", $password);

	$stmt->execute();

	echo "Inserido OK";

?>