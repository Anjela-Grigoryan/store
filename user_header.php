
    <header class="header user-header">
        <div class="flex">
            <h1><a href="user_page.php" class="logo text-decoration-none">Vegan Store</a></h1>
            <nav class="navbar">
                <a class = "text-decoration-none" href="./user_page.php">home</a>
                <a class = "text-decoration-none" href="./about.php">about as</a>
                <a class = "text-decoration-none" href="./contact.php">contact</a>
            </nav>
            <div class="icons">
                <i class="fa fa-user-o" id="user-btn"></i>
                <i class="fa fa-bars" aria-hidden="true" id="menu-btn"></i>
                <i class="fa fa-shopping-cart" id="shopping-card" aria-hidden="true"></i>
            </div>
            <div class="user-box">
                <p>Username : <span><?php echo $_SESSION['name']; ?></span></p>
                <p>Email : <span><?php echo $_SESSION['email']; ?></span></p>
                <form action="./logout.php" method="post">
                    <button class="logout-btn" type="submit" name="logout">log out</button>
                </form>
            </div>
        </div>
    </header>
    <?php
    include_once 'cart.php';
    ?>