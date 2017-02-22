<?php
#starts the session and checks for the admin user
session_start();
if(!isset($_SESSION['admin']))
{
	echo "You must log in";
	header("Location: ./index.php");
}
#connection to the database
include_once('database-connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset ="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My To Do List - Add New To Do</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="font-awesome/font-awesome.css">
	<link rel="stylesheet" href="stylesheets/styles.css">
	<link rel="stylesheet" href="stylesheets/add-form-style.css">
	<!-- font from google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
  	<!--
File Name: index.php
Author: Ian Blanchette
Student ID: 100139251
Website Name: http://todolist100139251.azurewebsites.net/index.php
Description: The log in screen
-->
</head>
<body>
	<div class="container">
		<div class="row text-center">
			<div class="col-md-offset-3 col-md-6">
				<h1 class="my-font">Add A New To Do</h1>
				<!-- simple form to add a new entry into the database --> 
				<form action="add-new-to-do.php" method="post">
					<div class="form-group">
						<label for="NameTextField">Add New To Do</label>
						<input type="text" class="form-control" id="name"  name="name"
						placeholder="Name" required value="Name">
					</div>
					<div class="form-group">
						<label for="NotesTextField">Add a Note</label>
						<input type="text" class="form-control" id="notes" name="notes"
						placeholder="Notes" required  value="Notes">
					</div>
					<!-- button group for submission and redirection -->
					<button type="submit" id="SubmitButton" class="btn btn-primary">Submit</button>
					<button class="btn btn-danger"><a href="home.php">Back To List</a></button>
				</form>				
			</div>			
		</div>
	</div>
</body>
</html>