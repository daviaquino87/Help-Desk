<?php
$chamados = [];

if (file_exists('../../temp/chamados.txt')) {
    $file = fopen('../../temp/chamados.txt', 'r');

    while (!feof($file)) {
        $registro = fgets($file);
        $arrayDados = explode('#', $registro);

        if (count($arrayDados) < 3) {
            continue;
        }

        $chamados[] = $arrayDados;

    }

    fclose($file);
} else {
    $file = [];
}
