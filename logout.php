<?php
    include 'db.php';

    if(isset($_POST['logout'])){
        header("Location:login.php");
    }

?>