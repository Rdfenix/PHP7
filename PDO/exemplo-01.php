<?php

	$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

	$stmt = $conn->prepare("SELECT * FROM tb_usuarios");
	$stmt->execute();

	$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

	//var_dump($resultado);
	//echo json_encode($resultado);

	foreach ($resultado as $row) {
		foreach ($row as $key => $value) {
			echo "<strong>".$key.":</strong>".$value."<br/>";
		}
		echo "================================================<br/>";
	}

?>