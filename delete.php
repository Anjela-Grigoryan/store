<?php
    include 'db.php';

    if(!empty($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM `users` WHERE `id` = '$id'";
        $result = mysqli_query($conn, $sql);
        header("Location:admin_user.php");
    }else if(!empty($_GET['product_id'])){
        $id = $_GET['product_id'];
        $sql = "DELETE FROM `vegan_product` WHERE `id` = '$id'";
        $result = mysqli_query($conn, $sql);
        header("Location:admin_product.php");
    }else if(!empty($_GET['shop_id'])){
        $id = $_GET['shop_id'];
        $sql = "DELETE FROM `vegan_cart` WHERE `id` = '$id'";
        $result = mysqli_query($conn, $sql);
        header("Location:user_page.php");
    }else if(isset($_GET['message'])){
        $id = $_GET['message_id'];
        $sql = mysqli_query($conn, "DELETE FROM `vegan_message` WHERE `id` = '$id'");
        header("Location:admin_message.php");
    }else if(isset($_GET['order'])){
        $id = $_GET['order_id'];
        $sql = mysqli_query($conn, "DELETE FROM `vegan_order` WHERE `id` = '$id'");
        header("Location:admin_order.php");
    }

?>