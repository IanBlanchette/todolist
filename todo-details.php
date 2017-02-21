



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
            <h1>Game Details</h1>
            <form action="update_database.php" method="post">
                <div class="form-group">
                    <label for="IDTextField" hidden>Game ID</label>
                    <input type="hidden" class="form-control" id="IDTextField" name="IDTextField"
                           placeholder="Game ID" value="<?php echo $game['Id']; ?>">
                </div>
                <div class="form-group">
                    <label for="NameTextField">Game Name</label>
                    <input type="text" class="form-control" id="NameTextField"  name="NameTextField"
                           placeholder="Game Name" required  value="<?php echo $game['Name']; ?>">
                </div>
                <div class="form-group">
                    <label for="CostTextField">Game Cost</label>
                    <input type="text" class="form-control" id="CostTextField" name="CostTextField"
                           placeholder="Game Cost" required  value="<?php echo $game['Cost']; ?>">
                </div>
                    <input type="hidden" name="isAddition" value="<?php echo $isAddition; ?>">
                <button type="submit" id="SubmitButton" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>



<script src="./Scripts/lib/jquery/dist/jquery.min.js"></script>
<script src="./Scripts/lib/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="./Scripts/app.js"></script>
</body>
</html>