<?php 
session_start();
require_once("inc/confi.php");

//validation page
require("inc/serverSide.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell Your Products</title>
    <?php include("inc/cssLink.php"); ?>
</head>
<body>
    <?php include("inc/head.php"); ?>
    <div class="container">
        <form action="#" method="post" id="form" enctype="multipart/form-data">
        <div class="card">
            <div class="card-body">

            <div class="form-group">
            <label for="product_name">Name of your product:</label>
            <input type="text" class="form-control" name="product_name" required>
            </div>

            <div class="form-group">
            <label for="product_type">Product Type:</label>
            <select name="product_type" id="prodType" class="form-control">
            <option value="shoes">Shoes</option>
            <option value="shirts">Shirts</option>
            <option value="skirts">Skirts</option>
            <option value="trousers">Trousers</option>
            <option value="belts">Belts</option>
            <option value="jackets">Jackets</option>
            <option value="accessories">Accessories</option>
            <span id="prodTypeErr" class="text-danger"></span>
            </select>
            </div>

            <div class="form-group">
            <label for="pic">Image:</label>
            <input type="file" class="form-control" name="prod_pic">
            </div>

            <div class="form-group">
            <label for="pic">Image:</label>
            <input type="file" class="form-control" name="prod_pic2">
            </div>

            <div class="form-group">
            <label for="pic">Image:</label>
            <input type="file" class="form-control" name="prod_pic3">
            </div>

            <div class="form-group">
            <label for="pic">Image:</label>
            <input type="file" class="form-control" name="prod_pic4">
            </div>

            <div class="form-group">
            <label for="product_description">Description:</label>
            <input type="text" class="form-control" name="product_description">
            </div>

            <div class="form-group">
            <label for="product_price">Price:</label>
            <input type="text" class="form-control" name="product_price">
            </div>

            <div class="form-group">
            <label for="num_product">#:</label>
            <input type="text" class="form-control" name="num_product">
            </div>

            <div class="form-group">
            <label for="seller_name">Name of seller:</label>
            <input type="text" class="form-control" name="seller_name">
            </div>

            <div class="form-group">
            <input type="submit" value="Start Selling" name="sell" id="sell" class="btn btn-block" style="background:#007579">
            </div>

            </div>
        </div>  
</form>
    </div>

</body>
<?php include("inc/jsLink.php"); ?>
</html>