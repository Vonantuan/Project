<?php
session_start();

require_once("inc/confi.php");
require_once("inc/serverSide.php");

?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
  
  <?php include("inc/cssLink.php");?>
</head>
<body>
    <?php include("inc/head.php");?>

    <div class="container-fluid mt-4">
    <div class="row">

            <?php 
				$prod_count = "SELECT * FROM product_info";
				$prod_res = mysqli_query($db, $prod_count);

				while($row = mysqli_fetch_assoc($prod_res)){
				?>
    
            <div class="card col-lg-4 col-sm-6">
                <div class="card-header">
                <a href="categories.php?categories=<?php echo $row['product_id']; ?>" style="color:black">
                   <?php 
                    echo $row['product_name'];
                   ?>
                   </a>
                </div>
                <div class="card-body">
                    <a href="productPage.php?edit=<?php echo $row['product_id']; ?>"><img src="uploads/<?php echo $row['prod_pic']; ?>" width="200px"
                    height="200px"></a>

                    <a href="#" class="btn btn-success disabled text-white">
                <?php echo "Amount: ".$row['product_price']; ?>
                </a>
                    
                    </br>
                    <a href="cart.php?cart=<?php echo $row['product_id']; ?>" class="btn btn-info btn-block" id="cart_btn">Add to cart</a>
                </div>
            </div>
                <?php } ?>

              

</div>

    
</body>
<?php include("inc/jsLink.php");?>
</html>