<?php
include 'db.php';
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $uid = $_SESSION['user_id'];
    $uname = $_SESSION['name'];
    $email = $_SESSION['email'];
    $number = $_POST['number'];
    $address = $_POST['address'];
    $total_price = $_POST['total_price'];
    $products = $_POST['products_id'];

    $sql = mysqli_query($conn, "SELECT * FROM `vegan_cart` WHERE `user_id` = '$uid'");
    $resultCheck = mysqli_num_rows($sql);

    if(!empty($address) && !empty($number) && isset($_POST['pay_method'])){
        $method = $_POST['pay_method'];
        if($resultCheck > 0){
            if($method == "online"){
                $pay_status = "paid";
            }else{
                $pay_status = "pending";
            }
            $insert = "INSERT INTO 
                    `vegan_order`(`user_id`, `name`, `number`, `email`, `method`, `address`, `total_products_id`, `total_price`, `payment_status`) 
                        VALUES ('$uid','$uname','$number','$email','$method','$address','$products','$total_price','$pay_status')";  
            $result = mysqli_query($conn, $insert);
            $delete = mysqli_query($conn, "DELETE FROM `vegan_cart` WHERE `user_id`= $uid");  
            header("Location:user_page.php");
        }else{
            header("Location:user_page.php?error=there are no products to order");
        }
    }else{
        header("Location:user_page.php?error=fill in all fields");
    };
    
};
?>