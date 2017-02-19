<?php
session_start();
if(!isset($_SESSION['admin']))
{
	echo "You must log in";
	header("Location: ./index.php");
}

$dsn = 'mysql:host=us-cdbr-azure-southcentral-f.cloudapp.net;dbname=sean_tucker';
$username = 'b443d4f6b8b1a7';
$password = '7e42bc2c';

try 
{
    $db = new PDO($dsn, $username, $password);  

}
catch(PDOException $e) {
    echo $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset ="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>To Do List</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="font-awesome/font-awesome.css">
<link rel="stylesheet" href="stylesheets/styles.css">
<link rel="stylesheet" href="stylesheets/homestyle.css">
</head>

<body>
 <div class="container">
    <div class="row text-center">
  	<h3>This is your personal to do list</h3>
 	<button class="btn btn-primary"><a href="add-form.php">Add New To Do</a></button>
  	<button class="btn btn-danger"><a href="log-out.php">Log Out</a></button>

  	</div>

  	<table class="table">


  	</table>

  </div>



</body>




</html>