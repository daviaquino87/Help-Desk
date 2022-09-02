<?php
session_start();

if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM') {
    header('Location: http://localhost/php/HelpDask/public/views/index.php?Error');
}
