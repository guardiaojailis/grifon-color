<?php
	// save.php
	header('Content-Type: text/plain; charset=utf-8');

	if (!isset($_POST['filename']) || !isset($_POST['content'])) {
		http_response_code(400);
		echo "Parâmetros faltando.";
		exit;
	}

	$filename = basename($_POST['filename']); // evita path traversal
	$content  = $_POST['content'];

	// pasta onde os arquivos serão salvos (garanta permissão de escrita)
	$dir = __DIR__ . DIRECTORY_SEPARATOR . 'data';
	if (!is_dir($dir)) {
		mkdir($dir, 0777, true);
	}

	$filepath = $dir . DIRECTORY_SEPARATOR . $filename;

	if (file_put_contents($filepath, $content) === false) {
		http_response_code(500);
		echo "Erro ao salvar arquivo.";
		exit;
	}

	echo "Arquivo salvo em: data/" . $filename;
?>