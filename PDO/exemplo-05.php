<?php

	$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

	$conn->beginTransaction();

	$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE id_usuario = ?");

	$id = 3;

	$stmt->execute(array($id));

	//$conn->rollback();
	$conn->commit();

	echo "Exclusao OK";

?>