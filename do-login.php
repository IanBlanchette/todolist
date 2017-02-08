<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

	if($username && $password)
	{
		if($username == 'admin' && $password == 'admin')
		{
			header("Location: ./home.php");
			$_SESSION['admin'] =$_POST['username'];
		}else {
			die("Incorrect password or username");
		}
	}
	else {
		header("Location: ./log-in.php");
	}