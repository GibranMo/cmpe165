<?php
    require 'pdo.php';
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $check = signup($name, $email, $username, $password);
    return $check;
?>

