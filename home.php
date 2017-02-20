<?php
session_start();
if(!isset($_SESSION['admin']))
{
	echo "You must log in";
	header("Location: ./index.php");
}

$dsn = 'mysql:host=ca-cdbr-azure-central-a.cloudapp.net;dbname=ian_todolist';
$username = 'b78671959fb3a5';
$password = '49314434';

try 
{
    $db = new PDO($dsn, $username, $password);  

}
catch(PDOException $e) {
    echo $e->getMessage();
}

$query = "SELECT * FROM ian_todolist";
$statement = $db->prepary($query);
$statement->execute();
$todolist = $statement->fetchAll();
$statement->closeCursor();





$table = "CREATE TABLE IF NOT EXISTS todolist (
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    description VARCHAR(250) NOT NULL,
    creation_date TIMESTAMP
    due_date DATE
    )";
    $insert = "INSERT INTO todolist (description, due_date) VALUES (Test, 901115)";
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
    <?php foreach($todolist as $ian_todolist) : ?>
                        <tr>
                            <td><?php echo $ian_todolist['id'] ?></td>
                            <td><?php echo $ian_todolist['description'] ?></td>
                            <td><?php echo $ian_todolist['creation_date'] ?></td
                            <td><?php echo $ian_todolist['due_date'] ?></td>                            <!-- This line sends the gameID to the game_details page -->

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