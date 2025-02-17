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
    <div class="contact_container">
        <div class="info">
            Lorem ipsum dolor sit amet.lorem ipsum.
            Lorem ipsum dolor sit amet consectetur, 
            adipisicing elit. Ipsa, aperiam.
            Lorem ipsum dolor sit amet. Lorem 
            ipsum dolor sit amet consectetur adipisicing.
            <a href="#">vegan_store@gmail.com</a>
            Lorem ipsum dolor sit amet consectetur 
            adipisicing elit. Atque facilis vero sit 
            ea eos aut magnam harum voluptates quasi eveniet.
            <a href="#">+98767876542345</a>
            Lorem ipsum, dolor sit amet consectetur adipisicing 
            elit. Dolorum vero voluptatum rem ullam officiis? Obcaecati!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Veniam, labore. Voluptates asperiores ducimus, distinctio 
            voluptas dolor eveniet aspernatur repellat nostrum architecto 
            voluptatum, nobis ex ea, vitae aperiam doloremque earum laudantium 
            facilis reiciendis pariatur totam nemo nulla quasi nam ullam? Ipsum.
        </div>
        <form action="./contact_.php" method="post" class="contact_form">
            <input type="text" name="name" placeholder="name" required>
            <input type="text" name="number" placeholder="number" required>
            <input type="text" name="message" placeholder="message" required>
            <input type="submit" name="submit" method = "post" value="submit">
            <p><?=@$_GET['message']?></p>
        </form>
    </div>
    <?php
    include_once 'footer.php';
    ?>
    <script src="script.js"></script>
</body>
</html>