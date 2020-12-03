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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link href="assets/owl.carousel.min.css" rel="stylesheet"/>
    <link href="assets/owl.theme.default.min.css" rel="stylesheet"/>
    <style>
        .owl-prev {
            left: -30px;
        }
        .owl-next {
            right: -30px;
        }
        .owl-prev, .owl-next {
            position: absolute;
            top: 30%;
        }
        .owl-prev span, .owl-next span {
            font-size: 60px;
            color: black;
        }
        .owl-theme .owl-nav[class*="owl-"]:hover {
            background-color: transparent;
        }
    </style>
</head>


<body>
    <?php include("inc/head.php"); ?>
    <!-- This code collects data from the database, products with the same name or type or seller
    and brings out the information -->
    <?php 
    if(isset($_GET['categories'])){
    $id = $_GET['categories'];

    $select = "SELECT * FROM product_info WHERE product_id='$id' ";
    $query = mysqli_query($db, $select);
    while($row = mysqli_fetch_assoc($query)){
    ?>

    <div class="container mt-5 mb-5">
    
            <div class="owl-carousel owl-theme">

            <?php 
                    $name= $row['product_name']; 
                    $n_name = "SELECT * FROM product_info WHERE product_name ='$name' AND product_type='shoes' ";
                    $query1 = mysqli_query($db, $n_name);
                    while($n_row = mysqli_fetch_array($query1)){
                ?>
           <div class="item">
                <div class="card">
                <a href="productPage.php?edit=<?php echo $n_row['product_id']; ?>">
                        <img data-src="uploads/<?php echo $n_row['prod_pic']; ?>" width="100px"
                            height="200px" class="card-img-top owl-lazy">
                    </a>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $n_row['product_name']; ?></h5>
                            <button class="btn btn-success disabled text-white"><?php echo $n_row['product_price']; ?>
                            </button>

                            <a href="cart.php?cart=<?php echo $n_row['product_id']; ?>" class="btn btn-info btn-block" id="cart_btn">Add to cart</a>
                        </div>
                </div>
           </div>
            <?php
            } ?>
    </div>   

<br>
<br>
    <div class="owl-carousel owl-theme">
       <!-- this is for shirts categories under product name -->
       <?php
                $uname= $row['product_name']; 
                $t_name = "SELECT * FROM product_info WHERE product_type ='shirts' AND product_name='$uname' ";
                $query2 = mysqli_query($db, $t_name);
                while($t_row = mysqli_fetch_array($query2)){
            ?>

                <div class="item">
                    <div class="card">
                        <a href="productPage.php?edit=<?php echo $t_row['product_id']; ?>">
                            <img data-src="uploads/<?php echo $t_row['prod_pic']; ?>" width="100px"
                            height="200px" class="card-img-top owl-lazy">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $t_row['product_name'].' '.$t_row['product_type']; ?></h5>
                            <button class="btn btn-success disabled text-white"><?php echo $t_row['product_price']; ?>
                            </button>
                            <a href="cart.php?cart=<?php echo $t_row['product_id']; ?>" class="btn btn-info btn-block" id="cart_btn">Add to cart</a>
                        </div>
                    </div>
                </div>
                <?php }?>
    </div>
    <br>
    <br>

    

    

</div>

       


<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
   
<script>
    $('.owl-carousel').owlCarousel({
        autoplay: true,
        autoplayHoverPause: true,
        items: 4,
        nav: true,
        dots: true, 
        //loop: true,
        lazyLoad: true,
        margin: 5,
        responsive: {
            0: {
                items: 1,
                dots: true
            },
            485: {
                items: 2,
                dots: true
            },
            782: {
                items: 3,
                dots: true
            }, 
            900: {
                items: 4,
                dots: true
            },
            1200: {
                items: 5,
                dots: true
            }
        }
    });
    
</script>

<?php }
} ?>

</body>
</html>