<?php
/*
File Name: todo-delete.php
Author: Ian Blanchette
Student ID: 100139251
Website Name: http://todolist100139251.azurewebsites.net/index.php
Description: Php script to delete a selected member from the list
*/
#connection to the database
include_once('database-connect.php');
$todolist = $_GET["id"]; #get the id for the item to delete
if($todolist != false) { #check to make sure its there
    $query = "DELETE FROM newtodolist WHERE id = :id "; #statement creation
    $statement = $db->prepare($query); #prepare the sql statement
    $statement->bindValue(":id", $todolist);
    $success = $statement->execute(); #execute
    $statement->closeCursor(); #close connection and redirect to the home page
    header("Location: ./home.php");;
}
?>