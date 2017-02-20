<?php

$dsn = 'mysql:host=ca-cdbr-azure-central-a.cloudapp.net;dbname=todolist';
$username = 'bdeed905f38b4b';
$password = 'd78d2897';   

try 
{
  $table = "todolist";

    $db = new PDO($dsn, $username, $password);  
   

}
catch(PDOException $e) {
$message = $e->getMessage();
echo "An error occurred: " . $message;
}
?>