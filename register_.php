<?php

include "db.php";

if(isset($_POST['submit-btn'])) {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $pwd = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $cpwd = $_POST['cpassword'];

    $sql2 = "SELECT * FROM `users` WHERE `email` = '$email'";
    $result2 = mysqli_query($conn, $sql2);
    $resultCheck = mysqli_num_rows($result2);

    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['cpassword'])){
        if(password_verify($cpwd, $pwd)){
            if($resultCheck > 0){
                header("Location:register.php?err=this email is already in use");
            }else{
                $sql = "INSERT INTO `users`(`name`, `email`, `password`) 
                            VALUES ('$name','$email','$pwd')";
                $result = mysqli_query($conn, $sql);
                header("Location:user_page.php");
            };
            
        }else{
            header("Location:register.php?err=passwords do not match");
        }
    }
}

?>