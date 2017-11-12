<?php

	require_once("config.php");

	$sql = new SQL();

	$usuarios = $sql->Select("SELECT * FROM tb_usuarios ORDER BY des_login");

	$headers = array();
	//monta o cabecalho no csv
	foreach ($usuarios[0] as $key => $value) {
		array_push($headers, ucfirst($key));
	}

	$file = fopen("usuarios.csv", "w+");

	fwrite($file, implode(",", $headers)."\r\n");
	//adiciona dados no csv
	foreach ($usuarios as $row) {
		$data = array();

		foreach ($row as $key => $value) {
			array_push($data, $value);
		}

		fwrite($file, implode(",", $data)."\r\n");
	}

	fclose($file);

?>