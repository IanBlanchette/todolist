<?php

$newToDo = $_POST['newToDo'];
$dueDate = $_POST['dueDate'];

try {

$statement = ("INSERT INTO todolist (description, due_date)
    VALUES(:description, :dueDue)");
$statement->execute(array(
    "description" => $newToDo,
    "dueDate" => $dueDate,
 
));


}
catch(PDOException $e)
{
	echo $e->getMessage();
}

?>