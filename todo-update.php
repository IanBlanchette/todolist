<?php
$servername = "ca-cdbr-azure-central-a.cloudapp.net";
$username = 'b78671959fb3a5';
$password = '49314434';
$dbname = "ian_todolist";

 $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$isAddition = filter_input(INPUT_POST, "isAddition");

if($isAddition == "1") {
$query = "INSERT INTO newtodolist (description) VALUES (:description)";
$statement = $db->prepare($query); // encapsulate the sql statement
}
else {
$gameID = filter_input(INPUT_POST, "IDTextField"); // $_POST["IDTextField"];
$query = "UPDATE newtodolist SET description = :description WHERE id = :todolist "; // SQL statement
$statement = $db->prepare($query); // encapsulate the sql statement
$statement->bindValue(':id', $newtodolist);
}
$statement->bindValue(':description', $description);
$statement->execute(); // run on the db server
$statement->closeCursor(); // close the connection
// redirect to index page
header('Location: ./home.php');
?>