<?php

$dsn = 'mysql:host=ca-cdbr-azure-central-a.cloudapp.net;dbname=ian_todolist';
$username = 'b78671959fb3a5';
$password = '49314434';   

try 
{
    $db = new PDO($dsn, $username, $password);  
   

}
catch(PDOException $e) {
$message = $e->getMessage();
echo "An error occurred: " . $message;
}
?>