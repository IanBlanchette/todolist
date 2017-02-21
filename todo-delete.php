<?php
include_once('database-connect.php');
$todolist = $_GET["id"]; // assigns the gameID from the URL
if($todolist != false) {
    $query = "DELETE FROM newtodolist WHERE id = :id ";
    $statement = $db->prepare($query);
    $statement->bindValue(":id", $todolist);
    $success = $statement->execute(); // execute the prepared query
    $statement->closeCursor(); // close off database
    header("Location: ./home.php");;
}
// redirect to index page

?>