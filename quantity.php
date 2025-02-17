<?php
include_once 'db.php';

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM `vegan_cart` WHERE `id` = '$id'");
$row = mysqli_fetch_assoc($result);

if(isset($_GET['plus'])){
    $new_quantity = ++$row['quantity'];
    $result2 = mysqli_query($conn, "UPDATE `vegan_cart` SET `quantity`='$new_quantity' WHERE `id` = '$id'");
    header("Location:user_page.php");
}else{
    $new_quantity = --$row['quantity'];
    $result2 = mysqli_query($conn, "UPDATE `vegan_cart` SET `quantity`='$new_quantity' WHERE `id` = '$id'");
    header("Location:user_page.php");
    
    if($row['quantity'] <= 0){
        $delete = mysqli_query($conn, "DELETE FROM `vegan_cart` WHERE `id` = '$id'");
    }
    
}
?>