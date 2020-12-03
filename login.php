<?php 
session_start();

require_once("inc/confi.php");

require("inc/serverSide.php");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php include("inc/cssLink.php")?>
</head>

<body>
<?php include("inc/head.php"); ?>
    <div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 py-3" id="form-section">
        <?php 
        if(isset($_COOKIE['msg'])){
            echo $_COOKIE['msg'];
        }
        include("inc/errors.php"); 
        ?>

    <form action="#" method="post"  enctype="multipart/form-data">
    <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" name="username" required>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password" required>
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary btn-block" name="login" value="Login">
        </div>

    </div>

    </form>


    </div>
    </div>

    <?php include("inc/jsLink.php"); ?>
</body>
</html>