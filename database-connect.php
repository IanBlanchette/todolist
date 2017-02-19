<?php
$dsn = 'mysql:host=ca-cdbr-azure-central-a.cloudapp.net;dbname=todolist';
$username = 'bdeed905f38b4b';
$password = 'd78d2897'; 


try 
{
	$db= new PDO($dsn, $username, $password); // creates PDQ object
	echo '<p>You are connected to the database</p>';
}
catch 
{
	$error_message = e->getMessage();
	echo '<p>An error occurred while connecting to the database: $error_message </p>'
}
?>