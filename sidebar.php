<?php 
session_start();

require_once("inc/confi.php");
require("inc/serverSide.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://kit.fontawesome.com/4291c75975.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #007579;
  position: fixed;
  height: 100%;
  overflow: auto;
  height: 100%;
  width: 200px;
  z-index: 1;
  top: 0;
  left: 0;
    overflow-x: hidden;
  padding-top: 20px;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #007579;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>
<body>

            <?php
                $prod_count = "SELECT * FROM product_info";
                $prod_res = mysqli_query($db, $prod_count);

                while($crow = mysqli_fetch_assoc($prod_res)){
            ?>

<div class="sidebar">
<a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>

<a href="type_categories.php?shirts=<?php echo $crow['product_id']; ?>" style="color:black">
  <i class="fas fa-tshirt"></i> Shirts
  </a>
  
  <a href="type_categories.php?trousers=<?php echo $crow['product_id']; ?>" style="color:black">
  <img src="images/trousers.svg"></i>Trousers
  </a>
  
  <a href="type_categories.php?jackets=<?php echo $crow['product_id']; ?>" style="color:black">
  <img src="images/coat1.png"/>Jackets
  </a>
  
  <a href="type_categories.php?type=<?php echo $crow['product_id']; ?>" style="color:black">
  <i class="fa fa-fw fa-envelope"></i>Accessories
  </a>
  
  <a href="type_categories.php?type=<?php echo $crow['product_id']; ?>" style="color:black">
  <i class="fa fa-fw fa-envelope"></i>Skirts
  </a>

  <a href="type_categories.php?type=<?php echo $crow['product_id']; ?>" style="color:black">
  <i class="fa fa-fw fa-envelope"></i>Shoes
  </a>
</div>

                <?php } ?>

</body>
</html>

</body>
</html>