<?php 
session_start();

//including the connection string
require_once("inc/confi.php");
require("inc/serverSide.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
    <?php include("inc/cssLink.php"); ?>
</head>
<body>
<?php include("inc/head.php"); ?>
    <div class="container">
    <h3 class="text-muted text-center mb-3">Register</h3>
    <div class="card">
        <div class="col-md-6 offset-md-3 py-3" id="form-section">

    <form action="#" method="post" enctype="multipart/form-data" id="regForm">
    <?php 
        if(isset($_COOKIE['msg'])){
            echo $_COOKIE['msg'];
        }
        include("inc/errors.php"); 
        ?>
    <div class="form-group">
            <label for="fullname">Full Name:</label>
            <input type="text" class="form-control" name="fullname">
            <span id="fullnameErr" class="text-danger"></span>
        </div>

        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" name="username">
            <span id="usernameErr" class="text-danger"></span>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" required>
            <span id="emailErr" class="text-danger"></span>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password" required>
            <span id="passwordErr" class="text-danger"></span>
        </div>

        <div class="form-group">
            <label for="confirmPass">Confirm Password:</label>
            <input type="password" class="form-control" name="confirmPass" required>
            <span id="passwordErr" class="text-danger"></span>
        </div>

        <div class="form-group">
        <label for="Position">Register as:</label>
        <select name="position" id="position" class="form-control">
            <option value="seller" name="seller">Seller</option>
            <option value="buyer" name="buyer">Buyer</option>
            <span id="positionErr" class="text-danger"></span>
        </select>
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary btn-block" name="register" id="register" value="Register">
        </div>
</form>
    </div>
    </div>
    </div>
<?php include("inc/jsLink.php"); ?>
</body>
</html>