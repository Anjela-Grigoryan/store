<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body class="body get-products about-body">
    <div class="boxContainer">
        <?php
        session_start();
        include 'db.php';
        include 'header.php';

        $sql = mysqli_query($conn, "SELECT * FROM `vegan_order`");
        $resultCheck = mysqli_num_rows($sql);
        if($resultCheck > 0){
            while($row = mysqli_fetch_assoc($sql)){
                ?>
                <div class="orderBox">
                    <div>
                        <p>user id : <?=$row['user_id']?></p>
                        <p>name : <?=$row['name']?></p>
                        <p>email : <?=$row['email']?></p>
                        <p>address : <?=$row['address']?></p>
                        <p>number : <?=$row['number']?></p>
                    </div>
                    <div>
                        <p>pay method : <?=$row['method']?></p>
                        <p>products : <?=$row['total_products_id']?></p>
                        <p>total price : <?=$row['total_price']?></p>
                        <p>payment satus : <?=$row['payment_status']?></p>
                    </div>
                    <a href="delete.php?order&&order_id=<?=$row['id']?>"><i class="fa fa-trash-o" aria-hidden="true" ></i></a>
                </div>
                <?php
            }
        }else{
            ?>
                <p class="message">No Orders</p>
            <?php
        }
        ?>
    </div>
    
    
    <script src="script.js"></script>
</body>
</html>