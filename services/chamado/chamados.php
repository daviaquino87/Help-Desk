<?php

session_start();

$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);

$chamado = $_SESSION['id_user'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . "\n";

$file = fopen('../../temp/chamados.txt', 'a');

fwrite($file, $chamado);
fclose($file);

header('Location: http://localhost/php/HelpDask/public/views/abrir_chamado.php');
