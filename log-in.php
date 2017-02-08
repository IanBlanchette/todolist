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
    
    <h1>Log In</h1>
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
    <input type="submit" name="submit" value="Login">
    </form>

    </div>
  </div>



</body>




</html>