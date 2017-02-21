<?php
$servername = "ca-cdbr-azure-central-a.cloudapp.net";
$username = 'b78671959fb3a5';
$password = '49314434';
$dbname = "ian_todolist";

 $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$isAddition = filter_input(INPUT_POST, "isAddition");
$name = filter_input(INPUT_POST, "NameTextField"); 
$notes = filter_input(INPUT_POST, "NotesTextField"); 
if($isAddition == "1") {
$query = "INSERT INTO newtodolist (name, notes) VALUES (:name, :notes)";
$statement = $db->prepare($query); // encapsulate the sql statement
}
else {
$listId = filter_input(INPUT_POST, "IDTextField"); // $_POST["IDTextField"];
$query = "UPDATE newtodolist SET name = '$name', notes = '$notes' WHERE id = '$listId'"; // SQL statement
$statement = $db->prepare($query); // encapsulate the sql statement
$statement->bindValue(':id', $id);
}
$statement->execute(); // run on the db server
$statement->closeCursor(); // close the connection
// redirect to index page
header('Location: ./home.php');
?>