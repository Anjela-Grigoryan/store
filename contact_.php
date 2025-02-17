<?php
    include_once 'db.php';
    session_start();
    if(isset($_POST['submit'])){
        if(!empty($_POST['name']) && !empty($_POST['number']) && !empty($_POST['message'])){
            $email = $_SESSION['email'];
            $user = mysqli_query($conn, "SELECT * FROM `users` WHERE `email` = '$email'");
            $user_row = mysqli_fetch_assoc($user);
            $id = $user_row['id'];
            $name = $_POST['name'];
            $message = $_POST['message'];
            $num = $_POST['number'];
            $sql = "INSERT INTO `vegan_message`(`user_id`, `name`, `email`, `number`, `message`) 
                        VALUES ('$id','$name','$email','$num','$message')";
            $result = mysqli_query($conn, $sql);
            header("Location:contact.php?message=your message has been received");
        }
    }

?>