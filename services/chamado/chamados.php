<?php

$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);

$chamado = $titulo . '#' . $categoria . '#' . $descricao . "\n";

$file = fopen('../../temp/chamados.txt', 'a');

fwrite($file, $chamado);
fclose($file);

header('Location: http://localhost/php/HelpDask/public/views/abrir_chamado.php');
