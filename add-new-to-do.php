<?php

$newToDo = $_POST['newToDo'];
$dueDate = $_POST['dueDate'];

try {
$insert = "INSERT INTO todolist (description, due_date) VALUES ($newToDo, $dueDate)";
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$db->exec($insert);
header("Location: ./home.php");
}
catch(PDOException $e)
{
	echo $e->getMessage();
}
?>