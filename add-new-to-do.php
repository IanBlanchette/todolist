<?php

$servername = "ca-cdbr-azure-central-a.cloudapp.net";
$username = 'b78671959fb3a5';
$password = '49314434';
$dbname = "ian_todolist";
$newToDo = $_POST['newToDo'];
$tableName = 'newtodolist';
$insert = ("INSERT INTO newtodolist (description)
    VALUES('$newToDo')");



    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO $tableName (description) 
VALUES ('$newToDo')";

        $conn->exec($sql);

?>