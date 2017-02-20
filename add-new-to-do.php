<?php
include_once('database-connect.php');
$newToDo = $_POST['newToDo'];



$insert = ("INSERT INTO newtodolist (description)
    VALUES($newToDo)");

   
 


$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$db->exec($insert);
header("Location: ./home.php");
?>

