<?php
require_once '../helpers/functions.php';

session_start();

unset($_SESSION["logged_in"]);
unset($_SESSION["is_admin"]);
unset($_SESSION["user"]);
unset($_SESSION["last_activity"]);

session_destroy();

redirectTo("../index.php");