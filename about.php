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
    <div class="about-page-banner"></div>
    <div class="about-container">
        <div class="about-text">
            <h2>Lorem ipsum dolor sit amet.</h2>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate tenetur consequatur repellendus 
                consectetur saepe voluptatum corporis a ullam labore tempora ratione nam quos voluptas voluptates 
                nemo perferendis nulla ipsa et necessitatibus, esse quam obcaecati asperiores! Nam, quo repellat? 
                Consectetur, ipsa!
            </p>
            <h2>Lorem ipsum dolor sit amet consectetur adipisicing.</h2>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate tenetur consequatur repellendus 
                consectetur saepe voluptatum corporis a ullam labore tempora ratione nam quos voluptas voluptates 
                nemo perferendis nulla ipsa et necessitatibus, esse quam obcaecati asperiores! Nam, quo repellat? 
                Consectetur, ipsa!
            </p>
            <h2>Lorem ipsum dolor sit amet consectetur adipisicing.</h2>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate tenetur consequatur repellendus 
                consectetur saepe voluptatum corporis a ullam labore tempora ratione nam quos voluptas voluptates 
                nemo perferendis nulla ipsa et necessitatibus, esse quam obcaecati asperiores! Nam, quo repellat? 
                Consectetur, ipsa!
            </p>
        </div>
    </div>
    <?php
    include_once 'footer.php'
    ?>
    <script src="script.js"></script>
</body>
</html>