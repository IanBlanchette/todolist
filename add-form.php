<?php
session_start();
if(!isset($_SESSION['admin']))
{
	echo "You must log in";
	header("Location: ./index.php");
}

include_once('database-connect.php');




?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset ="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My To Do List</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="font-awesome/font-awesome.css">
	<link rel="stylesheet" href="stylesheets/styles.css">
	<link rel="stylesheet" href="stylesheets/add-form-style.css">
</head>
<body>
	<div class="container">
		<div class="row text-center">
			<div class="my-box">
				<h1>My To Do List</h1>
				<form action="add-new-to-do.php" method="POST">
					<fieldset>
						<legend>Add Your New To Do</legend>
						What's To Do: <input type="text" placeholder="New To Do" name="newToDo">
						<br>
						<br>
						Whats the Due Date: <input type="date" name="dueDate" placeholder="dd-mm-yyyy" pattern="\d{1,2}-\d{1,2}-\d{4}">
						<br>
					</fieldset>
					<input class="btn btn-primary" type="submit" name="submit" value="New To Do">
				</form>
				
				<button class="btn btn-danger"><a href="home.php">Back To List</a></button>

			</div>
		</div>
	</div>
</body>
</html>