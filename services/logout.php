<?php
session_start();

session_abort();
session_destroy();

header('Location: http://localhost/php/HelpDask/public/views/index.php');
