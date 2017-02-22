<?php
#Starts the session if you are already logged in and redirects
session_start();
if(isset($_SESSION['admin']))
{
	echo "You are already logged in";
	header("Location: ./home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset ="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My To Do List - Logon</title>
	<!-- CSS Section -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="font-awesome/font-awesome.css">
	<link rel="stylesheet" href="stylesheets/styles.css">
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
				<h1 class="my-font">My To Do List</h1>
				<h3>Welcome</h3>
				<!-- Simpe form that asks for username and password --> 
				<form action="do-login.php" method="post">
                <div class="form-group">
                    <label for="NameTextField">Username:</label>
                    <div class="row text-center">
                    <div class="col-md-offset-3 col-md-6">
                    <input type="text" class="form-control" id="username"  name="username"
                           placeholder="Username" required>
                           </div>
                           </div>
                </div>
                <div class="form-group">
                <div class="row text-center">
                    <div class="col-md-offset-3 col-md-6">
                    <label for="NotesTextField">Password:</label>
                    <input type="Password" class="form-control" id="notes" name="password"
                           placeholder="Password" required >
                           </div>
                           </div>
                           <br>
                           <br>
                           <input class="btn btn-primary" type="submit" name="submit" value="Login">
                </div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>