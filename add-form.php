<?php
session_start();
if(!isset($_SESSION['admin']))
{
	echo "You must log in";
	header("Location: ./index.php");
}
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
</head>
<body>
	<div class="container">
		<div class="row text-center">
			<div class="my-box">
				<h1>My To Do List</h1>
				<form>
  <fieldset>
    <legend>Add Your New To Do</legend>
    What's To Do: <input type="text" name="todo" placeholer="What do you need to do" size="150"><br>
      </fieldset>
</form>

			</div>
		</div>
	</div>
</body>
</html>