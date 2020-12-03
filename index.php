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
    <title>Document</title>
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

<div class="container mt-5 mb-5" id="all_products">
<h4>All Products</h4>
        <div class="owl-carousel  owl-carousel1 owl-theme">
            <?php
                $prod_count = "SELECT * FROM product_info";
                $prod_res = mysqli_query($db, $prod_count);

                while($row = mysqli_fetch_assoc($prod_res)){
            ?>
            <div class="item"> 
                <div class="card">
                    <a href="productPage.php?edit=<?php echo $row['product_id']; ?>">
                        <img data-src="uploads/<?php echo $row['prod_pic']; ?>" width="100px"
                                height="200px" class="card-img-top owl-lazy">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">
                        <a href="categories.php?categories=<?php echo $row['product_id']; ?>" style="color:black">
                            <?php 
                                echo $row['product_name']; ?>
                        </h5>
                        </a>
                        <a href="#" class="btn btn-success disabled text-white">
                        <?php echo "Amount: ".$row['product_price']; ?>
                        </a>
                    
                         </br>
                        <a href="cart.php?cart=<?php echo $row['product_id']; ?>" class="btn btn-info btn-block" id="cart_btn">Add to cart</a>
                    </div>
                </div>
            </div>

            <?php 
            }
        ?>

        </div>
</div>

<div class="container mt-5 mb-5">
<h4>Latest Products</h4>
        <div class="owl-carousel owl-carousel2 owl-theme" id="latest_product">
            <?php
                $latest_prod = "SELECT * FROM product_info ORDER BY product_id DESC";
                $late_prod = mysqli_query($db, $latest_prod);

                while($row = mysqli_fetch_assoc($late_prod)){
            ?>
            <div class="item"> 
                <div class="card">
                    <a href="productPage.php?edit=<?php echo $row['product_id']; ?>">
                        <img data-src="uploads/<?php echo $row['prod_pic']; ?>" width="100px"
                                height="200px" class="card-img-top owl-lazy">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">
                        <a href="categories.php?categories=<?php echo $row['product_id']; ?>" style="color:black">
                            <?php 
                                echo $row['product_name']; ?>
                        </h5>
                        </a>
                        <a href="#" class="btn btn-success disabled text-white">
                        <?php echo "Amount: ".$row['product_price']; ?>
                        </a>
                    
                         </br>
                        <a href="cart.php?cart=<?php echo $row['product_id']; ?>" class="btn btn-info btn-block" id="cart_btn">Add to cart</a>
                    </div>
                </div>
            </div>

            <?php 
            }
        ?>

        </div>
</div>
       
               
    
</body>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.mousewheel.min.js"></script>

<script>
    $('.owl-carousel').owlCarousel({
        autoplay: true,
        autoplayHoverPause: true,
        items: 3,
        nav: true,
        dots: true, 
        // loop: true,
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

        $('.owl-carousel1').on('mousewheel', '.owl-stage', function (e){
            if(e.deltaY>0){
                $('.owl-carousel1').trigger('next.owl');
            }
            else{
                $('.owl-carousel1').trigger('prev.owl');
            }
            e.preventDefault();
    });

    $('.owl-carousel2').on('mousewheel', '.owl-stage', function (e){
            if(e.deltaY>0){
                $('.owl-carousel2').trigger('next.owl');
            }
            else{
                $('.owl-carousel2').trigger('prev.owl');
            }
            e.preventDefault();
    });
    
</script>
</html>