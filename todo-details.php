
<?php
include_once('database-connect.php'); // include the database connection file
$id = $_GET["id"]; // assigns the gameID from the URL
if($id == 0) {
    $todo = null;
    $isAddition = 1;
} else {
    $isAddition = 0;
$query = "SELECT * FROM newtodolist WHERE id = :id "; // SQL statement
$statement = $db->prepare($query); // encapsulate the sql statement
$statement->bindValue(':id', $id);
$statement->execute(); // run on the db server
$game = $statement->fetch(); // returns only one record
$statement->closeCursor(); // close the connection
}
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
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <h1>To Do List Update</h1>
            <form action="update_database.php" method="post">
                <div class="form-group">
                    <label for="IDTextField" hidden>To Do List</label>
                    <input type="hidden" class="form-control" id="IDTextField" name="IDTextField"
                           placeholder="To Do List" value="<?php echo $newtodolist['id']; ?>">
                </div>
                <div class="form-group">
                    <label for="NameTextField">Name</label>
                    <input type="text" class="form-control" id="NameTextField"  name="NameTextField"
                           placeholder="Name" required  value="<?php echo $newtodolist['name']; ?>">
                </div>
                <div class="form-group">
                    <label for="CostTextField">Game Cost</label>
                    <input type="text" class="form-control" id="CostTextField" name="CostTextField"
                           placeholder="Notes" required  value="<?php echo $newtodolist['notes']; ?>">
                </div>
                    <input type="hidden" name="isAddition" value="<?php echo $isAddition; ?>">
                <button type="submit" id="SubmitButton" class="btn btn-primary">Submit</button>
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