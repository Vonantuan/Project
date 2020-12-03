<?php 
session_start();

require_once("inc/confi.php");
require_once("inc/serverSide.php");


if(isset($_GET['cart'])){
	$id = $_GET['cart'];
	
$cart = "INSERT INTO shopping_cart(`product_name`,`product_type`,`product_pic`,`product_description`,`product_price`,`num_product`)
            SELECT `product_name`,`product_type`,`prod_pic`,`product_description`,`product_price`,`num_product`  FROM product_info 
            WHERE product_id='$id' ";

$cart_query = mysqli_query($db, $cart);
if($cart_query){
    echo "<script>alert('Product added to cart successfully')</script>";
}
else{
    echo mysqli_error($db);
}

}

if(isset($_GET['delete'])){
	$id = $_GET['delete'];
	//delete the user with this id
	$del = "DELETE from shopping_cart where product_id='$id'";
    $del_query = mysqli_query($db, $del);
    if($del_query){
        echo "<script>alert('Product successfully removed from cart')</script>"; 
    }
    else{
        echo mysqli_error($db);
    }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <?php include("inc/cssLink.php"); ?>
</head>
<body>
    <?php include("inc/head.php"); ?>
    <div class="container-fluid">
        <div class="row">
        <?php 
            $carting = "SELECT * FROM shopping_cart";
            $c_query = mysqli_query($db,$carting);
            while($c_row = mysqli_fetch_array($c_query)){
            ?>
            <div class="card col-lg-12 col-md-6 col-sm-12">
            <div class="card-header">
            <a href="categories.php?categories=<?php echo $c_row['product_id']; ?>" style="color:black">
            <?php echo $c_row['product_name']; ?>
            </a>
            </div>

            <div class="card-body">
            <a href="productPage.php?edit=<?php echo $c_row['product_id']; ?>">
            <img  class="" src="uploads/<?php echo $c_row['product_pic']; ?>" alt="jumia" width="200px" height="200px">
            </a>
                <?php echo $c_row['product_description']."<br><br>"; ?>
                

                <a href="#" class="btn btn-success disabled text-white">
                <?php echo "Amount: ".$c_row['product_price']; ?>
                </a>
                
            </div>
           <div class="card-footer">
           <a href="cart.php?cart=<?php echo $c_row['product_id']; ?>" class="btn btn-info" id="cart_btn">Checkout</a>
           <a href="cart.php?delete=<?php echo $c_row['product_id']; ?>" class="btn btn-danger">Remove from cart</a>
           </div>
        </br>
        </br>

</div>
       
        <?php } ?>


</div>
</div>
</body>

<?php include("inc/jsLink.php"); ?>
</html>