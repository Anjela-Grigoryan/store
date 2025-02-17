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
    <?php
    session_start();
    include 'db.php';
    include 'header.php';
    ?>
    <div class="boxContainer">
            <?php
            $sql = mysqli_query($conn, "SELECT * FROM `vegan_message`");
            $resultCheck = mysqli_num_rows($sql);
            if($resultCheck > 0){
                while($row = mysqli_fetch_assoc($sql)){
                    ?>
                    <div class="message-box">
                        <h2><?=$row['name']?></h2>
                        <h4><?=$row['email']?></h4>
                        <h4><?=$row['number']?></h4>
                        <p><?=$row['message']?></p>
                        <a href="delete.php?message&&message_id=<?=$row['id']?>"><i class="fa fa-trash-o" aria-hidden="true" ></i></a>
                    </div>
                    <?php
                }
            }else{
                ?>
                <p class="message">No Messages</p>
                <?php
            }
            
            ?>
    </div>
    <script src="script.js"></script>
</body>
</html>