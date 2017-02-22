<?php
#starts the session and checks for the admin user
session_start();
if(!isset($_SESSION['admin']))
{
	echo "You must log in";
	header("Location: ./index.php");
}
#includes the file to connect to the database
include_once('database-connect.php');

$query = "SELECT * FROM newtodolist"; #SQL statement for selecting all the data from the list
$statement = $db->prepare($query); #prepare the sql statement
$statement->execute(); #run on the database server
$todo = $statement->fetchAll(); #returns the query
$statement->closeCursor(); #close the connection
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset ="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>To Do List</title>
  <!-- CSS Section -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="stylesheets/styles.css">
  <link rel="stylesheet" href="stylesheets/homestyle.css">
  <!-- font from google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
<!--
File Name: home.php
Author: Ian Blanchette
Student ID: 100139251
Website Name: http://todolist100139251.azurewebsites.net/index.php
Description: Home page where the user created lists are displayed
-->
</head>
<body>
 <div class="container">
  <div class="row text-center">
  	<h2 class="my-font">Your Personal To Do List</h2>
    <!-- table creation -->
    <table class="table table-bordered">
      <tr>  
        <th></th>
        <th><div class="text-center">ID</div></th>                  
        <th><div class="text-center">Name</div></th>
        <th><div class="text-center">Notes</div></th>
        <th><div class="text-center"><a class="btn btn-primary" href="#"><i class="fa fa-pencil-square-o"></i> Edit</a></div></th>
        <th><div class="text-center"><a class="btn btn-danger" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a></th>
      </tr>
      <!-- php script that dynamically fills in the table columns with the data entered -->
      <?php foreach($todo as $newtodolist) : ?>
        <tr>
          <td><?php echo '<form action="cross-out.php" method="POST"><input type="checkbox" name="checked" value="Check"></form>'?></td>
          <td><?php echo '<span style="color:white">' . $newtodolist['id'] . '</span>' ?></td>
          <td><?php echo '<span style="color:white">' . $newtodolist['name'] . '</span>' ?></td>
          <td><?php echo '<span style="color:white">' . $newtodolist['notes'] . '</span>' ?></td>                           
          <td><a class="btn btn-primary" href="todo-details.php?id=<?php echo $newtodolist['id'] ?>"><i class="fa fa-pencil-square-o"></i> Edit</a></td>
          <td><a class="btn btn-danger" href="todo-delete.php?id=<?php echo $newtodolist['id'] ?>" onclick="return confirm('Delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a></td>
        </tr>
      <?php endforeach; ?>        
       
  <a class="btn btn-primary" href="add-form.php">Add New To Do</a> 
  <a class="btn btn-danger" href="log-out.php">Log Out</a>
<br>
<br>
    </div>
  </table>
</div>
<!-- JavaScript Section -->
<script src="./Scripts/lib/jquery/dist/jquery.min.js"></script>
<script src="./Scripts/lib/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="./Scripts/app.js"></script>
</body>
</html>