<?php
/*
File Name: todo-update.php
Author: Ian Blanchette
Student ID: 100139251
Website Name: http://todolist100139251.azurewebsites.net/index.php
Description: Php script to update the sever with the new inputs 

*/
#varibles to create the connection string
$servername = "ca-cdbr-azure-central-a.cloudapp.net";
$username = 'b78671959fb3a5';
$password = '49314434';
$dbname = "ian_todolist";

#put together the connection string
 $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

#get the input fields
$isAddition = filter_input(INPUT_POST, "isAddition");
$name = filter_input(INPUT_POST, "NameTextField"); 
$notes = filter_input(INPUT_POST, "NotesTextField"); 
if($isAddition == "1") {
$query = "INSERT INTO newtodolist (name, notes) VALUES ('$name', '$notes')"; #Putting together the query for the change of the table 
$statement = $db->prepare($query); #SQL statement for selecting all the data from the list
}
else {
$listId = filter_input(INPUT_POST, "IDTextField"); 
$query = "UPDATE newtodolist SET name = '$name', notes = '$notes' WHERE id = '$listId'"; #putting together the update for the database
$statement = $db->prepare($query);  #prepare the sql statement
$statement->bindValue(':id', $id);
}
#run and close connection
$statement->execute(); 
$statement->closeCursor(); 

header('Location: ./home.php');
?>