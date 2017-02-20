<?php
session_start();
if(!isset($_SESSION['admin']))
{
	echo "You must log in";
	header("Location: ./index.php");
}

include_once('database-connect.php');

try 
{
  include_once('create-table.php');
}
catch(PDOException $e)
    {
    echo $e->getMessage();
    }

$query = "SELECT * FROM todolist"; // SQL statement
$statement = $db->prepare($query); // encapsulate the sql statement
$statement->execute(); // run on the db server
$todo = $statement->fetchAll(); // returns an array
$statement->closeCursor(); // close the connection
?>
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
    <table class="table table-striped table-hover table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Description</th>
                    <th>Start Date</th>
                    <th>Due Date</th>
                    <th></th>
                    <th></th>
                </tr>
    <?php foreach($todo as $ian_todolist) : ?>
                        <tr>
                            <td><?php echo $ian_todolist['id'] ?></td>
                            <td><?php echo $ian_todolist['description'] ?></td>
                            <td><?php echo $ian_todolist['creation_date'] ?></td>
                            <td><?php echo $ian_todolist['due_date'] ?></td>                        

                            <td><a class="btn btn-primary" href="game_details.php?gameID=<?php echo $game['Id'] ?>"><i class="fa fa-pencil-square-o"></i> Edit</a></td>

                            <td><a class="btn btn-danger" href="game_delete.php?gameID=<?php echo $game['Id'] ?>"><i class="fa fa-trash-o"></i> Delete</a></td>
                        </tr>
                    <?php endforeach; ?>
 	<button class="btn btn-primary"><a href="add-form.php">Add New To Do</a></button>
  	<button class="btn btn-danger"><a href="log-out.php">Log Out</a></button>

  	</div>

  	<table class="table">


  	</table>

  </div>



</body>




</html>