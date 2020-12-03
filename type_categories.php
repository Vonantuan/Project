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
    <?php include("inc/cssLink.php"); ?>

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


<!-- code to display all brands under shirts -->
<div class="container mt-5 mb-5">
    <?php  if(isset($_GET['shirts'])){?>
        <div class="owl-carousel owl-theme">
            <?php 
                // $id = $_GET['shirts'];
                $select = "SELECT * FROM product_info WHERE product_type='shirts' AND product_name='Gucci' ";
                $query = mysqli_query($db, $select);
                while($row1 = mysqli_fetch_array($query)){
            ?>

                <div class="item">
                    <div class="card">
                        <a href="productPage.php?edit=<?php echo $row1['product_id']; ?>">
                            <img data-src="uploads/<?php echo $row1['prod_pic']; ?>" width="100px"
                            height="200px" class="card-img-top owl-lazy">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row1['product_name']; ?></h5>
                            <a href="cart.php?cart=<?php echo $row1['product_id']; ?>" class="btn btn-info btn-block" id="cart_btn">Add to cart</a>
                        </div>
                    </div>
                </div>
           <?php }?>
        </div>


                <br>
                <br>
        <div class="owl-carousel owl-theme">
            <?php 
                // $id = $_GET['shirts'];
                $select = "SELECT * FROM product_info WHERE product_type='shirts' AND product_name='Louis Vuitton' ";
                $query = mysqli_query($db, $select);
                while($row1 = mysqli_fetch_array($query)){
            ?>
            <div class="item">
                <div class="card">
                    <a href="productPage.php?edit=<?php echo $row1['product_id']; ?>">
                        <img data-src="uploads/<?php echo $row1['prod_pic']; ?>" width="100px"
                            height="200px" class="card-img-top owl-lazy">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row1['product_name']; ?></h5>
                        <a href="cart.php?cart=<?php echo $row1['product_id']; ?>" class="btn btn-info btn-block" id="cart_btn">Add to cart</a>
                    </div>
                </div>
           </div>
                <?php }?>
        </div>

        <br>
        <br>
        <div class="owl-carousel owl-theme">
            <?php 
                // $id = $_GET['shirts'];
                $select = "SELECT * FROM product_info WHERE product_type='shirts' AND product_name='D&G' ";
                $query = mysqli_query($db, $select);
                while($row1 = mysqli_fetch_array($query)){
            ?>
            <div class="item">
                <div class="card">
                    <a href="productPage.php?edit=<?php echo $row1['product_id']; ?>">
                        <img data-src="uploads/<?php echo $row1['prod_pic']; ?>" width="100px"
                            height="200px" class="card-img-top owl-lazy">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row1['product_name']; ?></h5>
                        <a href="cart.php?cart=<?php echo $row1['product_id']; ?>" class="btn btn-info btn-block" id="cart_btn">Add to cart</a>
                    </div>
                </div>
           </div>
           <?php }?>
            </div>


            <br>
                <br>
            <div class="owl-carousel owl-theme">
                <?php 
                    // $id = $_GET['shirts'];
                    $select = "SELECT * FROM product_info WHERE product_type='shirts' AND product_name='Armani' ";
                    $query = mysqli_query($db, $select);
                    while($row1 = mysqli_fetch_array($query)){
                ?>
            <div class="item">
                <div class="card">
                    <a href="productPage.php?edit=<?php echo $row1['product_id']; ?>">
                        <img data-src="uploads/<?php echo $row1['prod_pic']; ?>" width="100px"
                            height="200px" class="card-img-top owl-lazy">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row1['product_name']; ?></h5>
                        <a href="cart.php?cart=<?php echo $row1['product_id']; ?>" class="btn btn-info btn-block" id="cart_btn">Add to cart</a>
                    </div>
                </div>
           </div>
                <?php }?>
        </div>

        <br>
        <br>
        <div class="owl-carousel owl-theme">
            <?php 
                // $id = $_GET['shirts'];
                $select = "SELECT * FROM product_info WHERE product_type='shirts' AND product_name='YSL' ";
                $query = mysqli_query($db, $select);
                while($row1 = mysqli_fetch_array($query)){
            ?>
            <div class="item">
                <div class="card">
                    <a href="productPage.php?edit=<?php echo $row1['product_id']; ?>">
                        <img data-src="uploads/<?php echo $row1['prod_pic']; ?>" width="100px"
                            height="200px" class="card-img-top owl-lazy">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row1['product_name']; ?></h5>
                        <a href="cart.php?cart=<?php echo $row1['product_id']; ?>" class="btn btn-info btn-block" id="cart_btn">Add to cart</a>
                    </div>
                </div>
           </div>
                <?php }?>
        </div>


                
              
    
    <?php }?>
      
    
        </div>
</body>
<?php include("inc/jsLink.php"); ?>
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

        $('.owl-carousel').on('mousewheel', '.owl-stage', function (e){
            if(e.deltaY>0){
                $('.owl-carousel').trigger('next.owl');
            }
            else{
                $('.owl-carousel').trigger('prev.owl');
            }
            e.preventDefault();
    });

    // $('.owl-carousel2').on('mousewheel', '.owl-stage', function (e){
    //         if(e.deltaY>0){
    //             $('.owl-carousel2').trigger('next.owl');
    //         }
    //         else{
    //             $('.owl-carousel2').trigger('prev.owl');
    //         }
    //         e.preventDefault();
    // });
    
</script>
</html> 