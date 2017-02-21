<?php

$servername = "ca-cdbr-azure-central-a.cloudapp.net";
$username = 'b78671959fb3a5';
$password = '49314434';
$dbname = "ian_todolist";
$newToDo = $_POST['newToDo'];
$tableName = 'newtodolist';
$insert = ("INSERT INTO newtodolist (description)
    VALUES('$newToDo')");



    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $insert = "INSERT INTO $tableName (description) 
VALUES ('$newToDo')";

        $db->exec($insert);

header("Location: ./home.php");
?>