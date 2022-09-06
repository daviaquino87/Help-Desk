<?php
$chamados = [];

if (file_exists('../../temp/chamados.txt')) {
    $file = fopen('../../temp/chamados.txt', 'r');

    while (!feof($file)) {
        $registro = fgets($file);
        $arrayDados = explode('#', $registro);

        if ($_SESSION['perfil'] == 2) {

            if (count($arrayDados) < 3) {
                continue;
            }

            if ($_SESSION['id_user'] != $arrayDados[0]) {
                continue;
            } else {
                $chamados[] = $arrayDados;
            }
        } else {

            if (count($arrayDados) < 3) {
                continue;
            }

            $chamados[] = $arrayDados;
        }

    }

    fclose($file);
} else {
    $file = [];
}
