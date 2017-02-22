
<?php
#includes the file to connect to the database
include_once('database-connect.php'); 
#gets the id from the database to use for the details page
$id = $_GET["id"];

if($id == 0) {
    $getId = null;
    $isAddition = 1;
} else {
    $isAddition = 0;
$query = "SELECT * FROM newtodolist WHERE id = :id "; #SQL statement
$statement = $db->prepare($query); #prepare the sql statement
$statement->bindValue(':id', $id);
$statement->execute(); #run on the database server
$getId = $statement->fetch(); #returns the query
$statement->closeCursor(); #close the connection
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset ="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>My To Do List - Edit</title>
<!-- CSS Section -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="font-awesome/font-awesome.css">
<link rel="stylesheet" href="stylesheets/styles.css">
<link rel="stylesheet" href="stylesheets/homestyle.css">
<!-- font from google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
<!--
File Name: todo-details.php
Author: Ian Blanchette
Student ID: 100139251
Website Name: http://todolist100139251.azurewebsites.net/index.php
Description: The edit screen for modifying a specific entry in the database
-->
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <h1 class="my-font">To Do List Update</h1>       
            <form action="todo-update.php" method="post">
                <div class="form-group">
                <!-- form group for the edit page -->
                    <label for="IDTextField" hidden>To Do List</label>
                    <input type="hidden" class="form-control" id="IDTextField" name="IDTextField"
                           placeholder="To Do List" value="<?php echo $getId['id']; ?>">
                </div>
                <div class="form-group">
                    <label for="NameTextField">Name</label>
                    <input type="text" class="form-control" id="NameTextField"  name="NameTextField"
                           placeholder="Name" required  value="<?php echo $getId['name']; ?>">
                </div>
                <div class="form-group">
                    <label for="NotesTextField">Notes</label>
                    <input type="text" class="form-control" id="CostTextField" name="NotesTextField"
                           placeholder="Notes" required  value="<?php echo $getId['notes']; ?>">
                </div>
                    <input type="hidden" name="isAddition" value="<?php echo $isAddition; ?>">
                    <!-- button group that can send you back to the main page, delete and confirm the change -->
                <button type="submit" id="SubmitButton" class="btn btn-primary">Submit</button>
                <button><a class="btn btn-danger" href="todo-delete.php?id=<?php echo $getId['id'] ?>" onclick="return confirm('Delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a></button>
                 <button class="btn btn-danger"><a href="home.php">Back To List</a></button>
            </form>
               
           

        </div>
    </div>
</div>



<script src="./Scripts/lib/jquery/dist/jquery.min.js"></script>
<script src="./Scripts/lib/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="./Scripts/app.js"></script>
</body>
</html>