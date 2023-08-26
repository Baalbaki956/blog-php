<?php
require_once 'functions.php';

$timeout = 60;
$currentTime = time();

if (isset($_SESSION['last_activity'])) {
    $elapsedTime = $currentTime - $_SESSION['last_activity'];

    if ($elapsedTime > $timeout) {
        session_unset();
        session_destroy();
        redirectTo("logout.php");
        exit();
    }
}

$_SESSION['last_activity'] = $currentTime;

?>