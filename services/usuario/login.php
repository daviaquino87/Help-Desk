<?php
session_start();

$Usuario_autenticado = false;

$email = $_POST['email'];
$pass = $_POST['password'];
// Perfil = 1 => 'admin'| 2 => 'usuario';

//usuarios setados estaticamente
$usuarios = [
    ['id' => 1, 'email' => 'admin@teste.com', 'password' => 'batataFrita', 'perfil_id' => 1],
    ['id' => 2, 'email' => 'davi@gmail.com', 'password' => 'batataFrita', 'perfil_id' => 2],
    ['id' => 3, 'email' => 'alex@gmail.com', 'password' => 'batataFrita', 'perfil_id' => 2],
];

foreach ($usuarios as $usuario) {
    if ($usuario['email'] === $email && $usuario['password'] === $pass) {
        $Usuario_autenticado = true;
        $_SESSION['id_user'] = $usuario['id'];
        $_SESSION['perfil'] = $usuario['perfil_id'];
    }

    if ($Usuario_autenticado) {
        $_SESSION['autenticado'] = 'SIM';

        header('Location: http://localhost/php/HelpDask/public/views/home.php');
    } else {
        $_SESSION['autenticado'] = 'NAO';
        header('Location: http://localhost/php/HelpDask/public/views/index.php?Error');
    }
}
