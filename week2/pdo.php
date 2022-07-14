<?php
    $hostName = "localhost";
    $dbName = "misc";
    $userName = "fred";
    $password = "amrit";

    try {
        $pdo = new PDO("mysql:host=$hostName;port=3325;dbname=$dbName",$userName,$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "Connected successfully\n"; 
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>
