<?php
include_once('database-connect.php');
$newToDo = $_POST['newToDo'];
$dueDate = $_POST['dueDate'];


$insert = ("INSERT INTO todolist (description, due_date)
    VALUES(:description, :dueDue)");
$insert->exec(string(
    "description" = $newToDo,
    "dueDate" = $dueDate,
 
));

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$db->exec($insert);
header("Location: ./home.php");
?>

