<?php
require_once '../classes/Connection.php';
require_once '../helpers/functions.php';

$id = $_GET['id'];

$connection = new Connection();

$query = "DELETE FROM users where id='$id'";
$result = $connection->executeQuery($query);

if ($result) {
    redirectTo("index.php");
} else {
    die("connection error". mysqli_errno());
}