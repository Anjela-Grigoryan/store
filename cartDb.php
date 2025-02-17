<?php

session_start();
include 'db.php';

$pid = $_GET['id'];
$uid = $_SESSION['user_id'];
$sql = "SELECT * FROM `vegan_product` WHERE `id` = '$pid'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$price = $row['price'];
$image = $row['image'];

if(empty($_GET['count']) || $_GET['count'] == 0){
    $count = 1;
}else{
    $count = $_GET['count'];
};

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    
    $sql1 = "SELECT * FROM `vegan_cart` WHERE `pid` = '$pid' AND `user_id` = '$uid'";
    $result1 = mysqli_query($conn, $sql1);
    $resultCheck = mysqli_num_rows($result1);
    $row = mysqli_fetch_assoc($result1);
    $quantity = $row['quantity'];
    $sum = $quantity + $count;

    if($resultCheck == 1){
        $sql = "UPDATE `vegan_cart` SET `quantity`='$sum' WHERE `pid` = '$pid' AND `user_id` = '$uid'";
        $result = mysqli_query($conn, $sql);
        header("Location:user_page.php");
    }else{
        $sql2 = "INSERT INTO `vegan_cart`(`user_id`, `pid`, `name`, `price`, `quantity`, `image`) 
                    VALUES ('$uid','$pid','$name','$price','$count','$image')";
        $result2 = mysqli_query($conn, $sql2);
        header("Location:user+page.php");
    };
}
?>