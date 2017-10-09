<?php

	$pessoas = array();

	//adiciona itens no array
	array_push($pessoas, array(
		'nome' => 'Roosevel',
		'idade' => 80
	));

	array_push($pessoas, array(
		'nome' => 'Sueli',
		'idade' => 60
	));

	echo json_encode($pessoas);
?>