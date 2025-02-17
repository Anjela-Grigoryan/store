<?php

include "db.php";
session_start();

if(isset($_POST['submit-btn'])) {
    $email = $_POST['email'];
    $pwd = $_POST['password'];

    $sql = "SELECT * FROM `users` WHERE `email` = '$email'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);


    if(!empty($email) && !empty($pwd)){
        if(password_verify($pwd, $row['password'])){
            if($resultCheck>0){
                $_SESSION['email'] = $email;
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['user_type'] = $row['user_type'];
                if($row['user_type'] == 'admin'){
                    header("Location:admin_pannel.php");
                }elseif($row['user_type'] == 'user'){
                    header("Location:user_page.php");
                };
            }else{
                header("Location:login.php?err=Incorrect email or password");
            }
        }else{
            header("Location:login.php?err=Incorrect password or email");
        }
    }
}

?>