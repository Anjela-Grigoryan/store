<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>login page</title>
</head>
<body>
    <section class="form-container">
        <form action="login_.php" method="post">
            <h1>Log In</h1>
            <input type="email" name="email" placeholder="enter your email" required>
            <input type="password" name="password" placeholder="enter your password" required>
            <p style="color:red"><?=@$_GET['err']?></p>
            <input type="submit" name="submit-btn" value="log in" class="btn">
            <p>do not have an account? <a href="register.php">registration</a></p>
        </form>
    </section>
</body>
</html>