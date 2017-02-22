<?php
/*
File Name: database-connect.php
Author: Ian Blanchette
Student ID: 100139251
Website Name: http://todolist100139251.azurewebsites.net/index.php
Description: Php script that connects the user to the database
*/
#create the connection string variables 
$dsn = 'mysql:host=ca-cdbr-azure-central-a.cloudapp.net;dbname=ian_todolist';
$username = 'b78671959fb3a5';
$password = '49314434';   
#try connecting to the database
try 
{
    $db = new PDO($dsn, $username, $password);  
   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}# throws an error if the connection fails
catch(PDOException $e) {
$message = $e->getMessage();
echo "An error occurred: " . $message;
}
?>

