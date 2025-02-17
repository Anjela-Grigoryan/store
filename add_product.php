<?php
    include 'db.php';
    $targetDir = "./images/";
    $fileName = basename($_FILES["image"]["name"]);        
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
    $file_size = $_FILES['image']['size'];

    if(isset($_POST['add_product'])){
        $name = $_POST['name'];
        $price = $_POST['price'];
        $detail = $_POST['detail'];
        if(!empty($name) && !empty($price) && !empty($detail) && !empty($_FILES['image']['name'])){
            $product_name = "SELECT * FROM `vegan_product` WHERE `name` = '$name'";
            $result = mysqli_query($conn, $product_name);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0){
                $err = "product name already exist";
                header("Location:admin_product.php?err=$err");
            } else{
                $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
                if (in_array($fileType, $allowTypes)) {
                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
                        if($file_size < 2000000){
                            $insert_product = "INSERT INTO `vegan_product`(`name`, `price`, `product_detail`, `image`) 
                                                VALUES ('$name','$price','$detail','$fileName')"; 
                            $result_product = mysqli_query($conn, $insert_product);
                            header("Location:admin_product.php");
                        }else{
                            $err = "image size is too large";
                            header("Location:admin_product.php?err=$err");
                        }
                    }else{
                        $err = "Sorry, there was an error uploading your file.";
                        header("Location:admin_product.php?err=$err");
                    }
                }else {
                    $err = "Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.";
                    header("Location:admin_product.php?err=$err");
                }
            }  
        }
    }

?>