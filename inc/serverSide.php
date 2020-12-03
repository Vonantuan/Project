<?php 

$errors = array();

//when new user is added
if(isset($_POST['register']))
{
    $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $confirm = mysqli_real_escape_string($db, $_POST['confirmPass']);
    $status = mysqli_real_escape_string($db, $_POST['position']);

    
    if(empty($fullname)){
        array_push($errors, "Fullname cannot be empty");
    }
    
    if(empty($username)){
        array_push($errors, "Enter your username");
    }

    if(empty($email)){
        array_push($errors, "Enter an email");
    }

    if(empty($password) || empty($confirm)){
        array_push($errors, "Password cannot be empty");
    }

    if($password != $confirm){
        array_push($errors, "Passwords do not match");
    }

    //check if user already exists

    $sqlChk = "SELECT * FROM user_info WHERE email='$email' ";
    $queryChk = mysqli_query($db, $sqlChk);

    if($queryChk->num_rows > 1){
        array_push($errors, 'This user already exists');
    }
    else{
        if(count($errors) ==0){
            //set a success cookie
            $pass = md5($password);


    $sql = "INSERT INTO user_info(`fullname`,`username`,`email`,`password`,`position`) 
    VALUES('$fullname','$username','$email','$pass','$status')";

    $query = mysqli_query($db, $sql);

    if($query){
        if($position=="seller"){
        echo "<script>alert('Welcome, Account Created successfully')</script>",header("location:sellersPage.php");
        }
        else
        {
           echo header("location:index.php");
        }
    }
    else{
        echo "<script>alert('Account creation unsuccessful')</script>";
    }
   
}
}
}

//registration ends here



//sellers info begins here

if(isset($_POST['sell'])){

    $prod_name = mysqli_real_escape_string($db, $_POST['product_name']);
    $prod_type = mysqli_real_escape_string($db, $_POST['product_type']);
    $desc = mysqli_real_escape_string($db, $_POST['product_description']);
    $price = mysqli_real_escape_string($db, $_POST['product_price']);
   $product_num = mysqli_real_escape_string($db, $_POST['num_product']);
   $seller_info = mysqli_real_escape_string($db, $_POST['seller_name']);


   $prod_img = $_FILES['prod_pic']['name'];
   $tmpname = $_FILES['prod_pic']['tmp_name'];
   move_uploaded_file($tmpname, "uploads/$prod_img");

   $prod_img2 = $_FILES['prod_pic2']['name'];
   $tmpname2 = $_FILES['prod_pic2']['tmp_name'];
   move_uploaded_file($tmpname2, "uploads/$prod_img2");

   $prod_img3 = $_FILES['prod_pic3']['name'];
   $tmpname3 = $_FILES['prod_pic3']['tmp_name'];
   move_uploaded_file($tmpname3, "uploads/$prod_img3");

   $prod_img4 = $_FILES['prod_pic4']['name'];
   $tmpname4 = $_FILES['prod_pic4']['tmp_name'];
   move_uploaded_file($tmpname4, "uploads/$prod_img4");


    $sql = "INSERT INTO product_info(`product_name`,`product_type`,`prod_pic`,`prod_pic2`,`prod_pic3`,`prod_pic4`,`product_description`,`product_price`,`num_product`,`seller_name`,`time_added`)
                                    VALUES('$prod_name','$prod_type','$prod_img','$prod_img2','$prod_img3','$prod_img4','$desc','$price','$product_num','$seller_info',NOW())";

    $query = mysqli_query($db, $sql);

    if($query){
        echo "<script>alert('Product added successfully')</script>";
    }
    else{
        echo "<script>alert('Product not added')</script>";
    }



    
//login validation

if(isset($_POST['login'])){
    //check if email and password are in database
    //decrypt the password
    
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password= mysqli_real_escape_string($db, $_POST['password']);
    $pass= md5($password);

    //check if email and password exists in the database
    $sql = "SELECT * FROM user_info WHERE 'email'=$email AND 'password'=$pass ";
    $query = mysqli_query($db,$sql);
    $result = mysqli_fetch_assoc($query);


    //do this if the user exists

    if($result > 0){
     echo "<script>alert('user exists');</script>";

    }
    else{
        echo "Incorrect Email or password";
    }
}

}
//login validation ends


//search query




?>


