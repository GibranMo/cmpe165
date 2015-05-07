<?php
    try {
        $con = new PDO("mysql:host=localhost;dbname=welp", "root", "root");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $ex) {
        echo "<p>Connection failed</p>";
      }

    function signup($name, $email, $username, $password)
    {
        global $con;
        $sql = "INSERT INTO Users (user, email, username, password) VALUES ('$name', '$email', '$username', '$password');";
        $q = $con->prepare($sql);
        $bool = $q->execute();
        return $bool;
    }
    
?>
