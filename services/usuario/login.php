<?php
session_start();

$Usuario_autenticado = false;

$email = $_POST['email'];
$pass = $_POST['password'];

//usuarios setados estaticamente
$usuarios = [
    ['email' => 'admin@teste.com', 'password' => 'batataFrita'],
];

foreach ($usuarios as $usuario) {
    if ($usuario['email'] === $email && $usuario['password'] === $pass) {
        $Usuario_autenticado = true;
    }

    if ($Usuario_autenticado) {
        $_SESSION['autenticado'] = 'SIM';
        header('Location: http://localhost/php/HelpDask/public/views/home.php');
    } else {
        $_SESSION['autenticado'] = 'NAO';
        header('Location: http://localhost/php/HelpDask/public/views/index.php?Error');
    }
}
