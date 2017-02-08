<?php
session_start();
if(isset($_SESSION['admin']))
{
	echo "You are already logged in";
	exit();
}
?>
<!DOCTYPE>
<html lang="en">
<head>
	<meta charset ="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My To Do List</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="font-awesome/font-awesome.css">
	<link rel="stylesheet" href="stylesheets/stylesheet.css">
</head>
<body>
	<div class="container">
		<div class="row text-center">
			<div>
				<h1>My To Do List</h1>
				<h3>Welcome</h3>
				<form action="do-login.php" method="POST">
					<span>Username:</span>
					<br>
					<input type="text" name="username">
					<br>
					<span>Password:</span>
					<br>
					<input type="password" name="password">
					<br>
					<br>
					<input class="btn btn-primary" type="submit" name="submit" value="Login">
				</form>
			</div>
		</div>
	</div>
</body>
</html>