<?php
session_start();
if(!isset($_SESSION['admin']))
{
	echo "You must log in";
	header("Location: ./index.php");
}
?>


<!DOCTYPE>
<html lang="en">
<head>
<meta charset ="utf-8">
<mtea name="viewport" content="width=device-width, initial-scale=1">
<title>To Do List</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="font-awesome/font-awesome.css">
<link rel="stylesheet" href="stylesheets/stylesheet.css">
</head>

<body>
 <div class="container">
    <div class="row">
    
    <h1>To Do List</h1>
    <h3>Welcome</h3>
  	<h3>This is your personal to do list</h3>

  	<button><a href="log-out.php">Log Out</a></button>
  	</div>

  </div>



</body>




</html>