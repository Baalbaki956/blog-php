<?php
require_once '../classes/Connection.php';
require_once '../helpers/functions.php';

if (isset($_GET["id"]) &&
        isset($_GET["first_name"]) && !empty($_GET["first_name"]) &&
        isset($_GET["last_name"]) && !empty($_GET["last_name"]) &&
        isset($_GET["gender"]) && !empty($_GET["gender"]) &&
        isset($_GET["email"]) && !empty($_GET["email"])) {
    $id = intval($_GET['id']);
    $first_name = sanitizeString($_GET['first_name']);
    $last_name = sanitizeString($_GET['last_name']);
    $gender = sanitizeString($_GET['gender']);
    $email = sanitizeString($_GET['email']);
    
    $connection = new Connection();
    
    $query="UPDATE users SET first_name='$first_name', last_name='$last_name', gender='$gender', email='$email' WHERE id='$id'";
    $result= $connection->executeQuery($query);
    
    if ($result) {
        redirectTo("index.php");
    } else {
        die("Unable to update the database.");
    }
}