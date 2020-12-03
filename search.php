<?php 
session_start();

require_once("inc/confi.php");
require_once("inc/serverSide.php");

//search query


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("inc/cssLink.php"); ?>
    <title>Document</title>
</head>
<body>
    <?php include("inc/head.php"); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

            <?php 
            // if(isset($_POST['search'])){
                $val = $_POST['search_val'];
                // echo  $_POST['s_id'];
                $query = "SELECT * FROM product_info WHERE product_name LIKE '%$val%' ";
                $result = mysqli_query($db,$query);
                while($row = mysqli_fetch_array($result)){
                    $p_name = $row['product_name'];
                    $p_type = $row['product_type'];
                    $p_pic = $row['prod_pic'];
                    $p_cost = $row['product_price'];

            ?>

    <div class="card">
        <div class="card-header">
            <?php echo $p_name.' '.$p_type; ?>
        </div>

        <div class="card-body">
        <a href="productPage.php?edit=<?php echo $row['product_id']; ?>"><img src="uploads/<?php echo $p_pic; ?>" width="200px"
                    height="200px"></a>
                    <?php echo $row['product_description'];?>
        </div>

        <div class="card-footer">
        <a href="#" class="btn btn-success disabled text-white">
                <?php echo "Amount: ".$row['product_price']; ?>
                </a>
        </div>
</div>
<?php }

                // }?>
</div>
</div>
</div>

</body>


<?php include("inc/jsLink.php"); ?>
</html>