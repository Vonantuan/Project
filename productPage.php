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
    <title>Product Page</title>
    <?php include("inc/cssLink.php"); ?>
</head>
<body>
<?php include("inc/head.php"); ?>
    <div class="container-fluid">


    
    <div class="col-12">
        <div class="row">
            
    <?php 
    //get referrer
    $ref= basename($_SERVER['HTTP_REFERER']);

    if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    //use referer to check the table to access
    if($ref == 'cart.php'){
        $select = "SELECT * FROM shopping_cart WHERE product_id='$id' ";

    }else{
        $select = "SELECT * FROM product_info WHERE product_id='$id' ";

    }
    $query = mysqli_query($db, $select);
    while($row = mysqli_fetch_assoc($query)){

?>


            <!-- product image begins -->
            <div class="card col-lg-8 col-sm-12" id="pr_img">
                <div class="card-header">
                    <?php echo $row['product_name'].' '.$row['product_type']; ?>
                </div>
                 
                <div class="card-body">
            
                 <div id="slide" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <img  class="d-block w-100" src="uploads/<?php echo $row['prod_pic']; ?>" alt="jumia">
                  </div>

                  <div class="carousel-item">
                    <img  class="d-block w-100" src="uploads/<?php echo $row['prod_pic2']; ?>" alt="jumia">
                  </div>

                  <div class="carousel-item">
                    <img  class="d-block w-100" src="uploads/<?php echo $row['prod_pic3']; ?>" alt="jumia">
                  </div>

                  <div class="carousel-item">
                    <img  class="d-block w-100" src="uploads/<?php echo $row['prod_pic4']; ?>" alt="jumia">
                  </div>

                    <a class="carousel-control-prev" href="#slide" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    </a>
                  <a class="carousel-control-next" href="#slide" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                  </a>
                 
                  
                </div>
                </div>

                </div>

                <div class="card-footer">
                <a href="cart.php?cart=<?php echo $row['product_id']; ?>" class="btn btn-info btn-block" id="cart_btn">Add to cart</a>
                </div>
            </div>
            <!-- product image end -->

            <!-- similar products -->
            <div class="card col-lg-4 col-sm-12" id="sim_prod">
                <div class="card-header">
                    Similar Products
                </div>

                <div class="card-body">
                  <?php 
                  $type= $row['product_type']; 
                    $n_type = "SELECT * FROM product_info WHERE product_type ='$type' ";
                    $query1 = mysqli_query($db, $n_type);
                    while($n_row = mysqli_fetch_array($query1)){
                        ?>
                        <div id="slider" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">

                            
                            <a href="productPage.php?edit=<?php echo $n_row['product_id']; ?>">

                            <div class="carousel-item active">
                                <img  class="d-block w-100" src="uploads/<?php echo $n_row['prod_pic']; ?>" alt="jumia" height="20%" width="30%">
                            </div>

                            <div class="carousel-item">
                                <img  class="d-block w-100" src="uploads/<?php echo $n_row['prod_pic2']; ?>" alt="jumia" height="20%" width="30%">
                            </div>

                            <div class="carousel-item">
                                <img  class="d-block w-100" src="uploads/<?php echo $n_row['prod_pic3']; ?>" alt="jumia" height="20%" width="30%">
                            </div>

                            <div class="carousel-item">
                                <img  class="d-block w-100" src="uploads/<?php echo $n_row['prod_pic4']; ?>" alt="jumia" height="20%" width="30%">
                            </div>

                            </a>

                                <a class="carousel-control-prev" href="#slider" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                                </a>
                            <a class="carousel-control-next" href="#slider" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
                                </div>
                    </div>
                        <?php 
                    }
                        ?>
                     </div>   


                 <div class="card-footer">
                     Another something nice
                </div>
            </div>
            <!-- similar products end -->
            


            <!-- product Description -->

            <div class="card col-lg-6 col-sm-12">
                <div class="card-header">
                   Product Description
                </div>
                <div class="card-body">
                    <?php 
                    echo $row['product_description'];
                    echo "</br>";
                    ?>
                    <a href="#" class="btn btn-success disabled text-white">
                <?php echo "Amount: ".$row['product_price']; ?>
                </a>

                </div>
            </div>
            <!-- product description end  -->


            <!-- seller info -->
            <div class="card col-lg-6 col-sm-12">
                <div class="card-header">
                   Seller Information
                </div>
                <div class="card-body">
                   <?php echo $row['seller_name']; ?>
                </div>
                <div class="card-footer">
                    Something nice
                </div> 
            </div>
            <!-- seller info end -->


        </div>


    </div>        



    <?php } 
    }?>
    </div>
</body>
<?php include("inc/jsLink.php")?>
</html>