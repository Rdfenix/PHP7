<?php

	$conn = new mysqli("localhost", "root", "", "dbphp7");

	if ($conn->connect_error) {
		echo "Error ".$conn->connect_error;
	}

	$stmt = $conn->prepare("INSERT INTO tb_usuarios (des_login, senha) VALUES (?, ?)");
	$login = "user";
	$pass = "123456";
	$stmt->bind_param('ss', $login, $pass);

	$stmt->execute(); 
?>