<?php

function CreateDB($host, $port, $user, $pass, $DBName)
{
    $conn = mysqli_connect($host, $user, $pass);

    if (!$conn) {
        mysqli_close($conn);
        die('Server informations is not valid: ' . mysqli_error());
    }

    $sql = 'CREATE DATABASE IF NOT EXISTS ' . $DBName;
    mysqli_query($conn, $sql);
    mysqli_close($conn);
}

function CreateTable($TableName, $DBName, $host, $user, $pass)
{
    $command = "CREATE TABLE IF NOT EXISTS $TableName (
        id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
         ID2 VARCHAR(10) NOT NULL
         )";
    $conn = new mysqli($host, $user, $pass, $DBName);
    $conn->query($command);
    $conn->close();
}

CreateDB("localhost:3306", "", "root", "", "test_db");
CreateTable('User_IDS', 'test_db', 'localhost:3306', 'root', '');

echo "Database created successufully. <br> Please go to localhost/generate.php or localhost/retrieve.php for testing.";
