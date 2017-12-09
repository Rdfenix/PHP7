<?php

	$id = (isset($_GET['id']))?$_GET['id'] : 4;

	if (!is_numeric($id)) {
		exit("PEGAMOS VOCE !!!!!");
	}

	$conn = mysqli_connect("localhost", "root", "", "dbphp7");

	$sql = "SELECT * FROM tb_usuarios WHERE id_usuario = $id";

	$exec = mysqli_query($conn, $sql);

	while ($resultado = mysqli_fetch_object($exec)) {
		echo $resultado->des_login."<br>";
	}

?>