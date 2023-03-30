<?php

$dsn = "mysql:host=$host;dbname=$dbname;charset=UTF8";
$conn = null;

try {

    //pdo object with error handling mode
    $conn = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
    // or
    // $pdo->setAttribute(
    //     PDO::ATTR_ERRMODE,
    //     PDO::ERRMODE_EXCEPTION
    // );
} catch (PDOException $e) {
}
