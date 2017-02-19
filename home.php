<?php
session_start();
if(!isset($_SESSION['admin']))
{
	echo "You must log in";
	header("Location: ./index.php");
}



$dsn = 'mysql:host=ca-cdbr-azure-central-a.cloudapp.net;dbname=todolist';
$username = 'bdeed905f38b4b';
$password = 'd78d2897'; 

$db= new PDO($dsn, $username, $password); // creates PDQ object
try 
{
  $db= new PDO($dsn, $username, $password); // creates PDQ object
  echo '<p>You are connected to the database</p>';
}
catch (PDOException $e)
{
  $error_message = $e->getMessage();
  echo '<p>An error occurred while connecting to the database</p>';
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
  	<?php 
  	$tablename = "SHOW TABLES LIKE 'todolist'";
  	
  	if($tablename !== FALSE)
  	{
	echo '<button class="btn btn-primary"><a href="create-table.php">Add New table</a></button>';
  	}
  	
?>
	<button class="btn btn-primary"><a href="add-form.php">Add New To Do</a></button>
  	<button class="btn btn-danger"><a href="log-out.php">Log Out</a></button>

  	</div>

  	<table class="table">


  	</table>

  </div>



</body>




</html>