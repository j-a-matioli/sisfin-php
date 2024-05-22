<?php
function connectDB()
{
    $host = DATABASE["host"];
    $dbname = DATABASE["dbname"];
    $username = DATABASE["username"];
    $password = DATABASE["password"];
    $dsn = "mysql:host=$host;dbname=$dbname;charset=UTF8";

    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

        return new PDO($dsn, $username, $password, $options);
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}
