<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=projet-perso', "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $conn = $pdo->prepare();
    $conn->execute();
}
catch(PDOException $exception){
    echo $exception->getMessage();
    $pdo->rollBack();
}