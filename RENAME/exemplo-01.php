<?php

	$dir_1 = "folder_01";
	$dir_2 = "folder_02";

	if(!is_dir($dir_1)) mkdir($dir_1);
	if(!is_dir($dir_2)) mkdir($dir_2);

	$filename = "README.txt";

	if (!file_exists($dir_1 . DIRECTORY_SEPARATOR . $filename)) {
		$file = fopen($dir_1 . DIRECTORY_SEPARATOR . $filename, "w+");
		fwrite($file, date("Y-m-d H:i:s"));
		fclose($file);
	}

	rename(
		$dir_1 . DIRECTORY_SEPARATOR . $filename //origem, 
		$dir_2 . DIRECTORY_SEPARATOR . $filename //destino
	);

	echo "Arquivo movido com sucesso!";

?>