<?php
#create a connection string with variables 
$servername = "ca-cdbr-azure-central-a.cloudapp.net";
$username = 'b78671959fb3a5';
$password = '49314434';
$dbname = "ian_todolist";
$name = $_POST['name'];
$notes = $_POST['notes'];
$tableName = 'newtodolist';
 $insert = "INSERT INTO $tableName (name, notes) 
VALUES ('$name', '$notes')";#creation of the insert sql statment 


#setting database atrributes
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
#execute and redirect
        $db->exec($insert);
header("Location: ./home.php");
?>