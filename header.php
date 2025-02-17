
    <header class="header">
        <div class="flex">
            <h1><a href="admin_pannel.php" class="logo text-decoration-none">Vegan Store</a></h1>
            <nav class="navbar">
                <?php
                if($_SESSION['user_type'] == 'admin'){
                    ?>
                    <a class="text-decoration-none" href="admin_pannel.php">home</a>
                    <a class="text-decoration-none" href="admin_product.php">product</a>
                    <a class="text-decoration-none" href="admin_order.php">orders</a>
                    <a class="text-decoration-none" href="admin_user.php">users</a>
                    <a class="text-decoration-none" href="admin_message.php">messages</a>  
                    <?php
                }else{
                    ?>
                    <a class = "text-decoration-none" href="./user_page.php">home</a>
                    <a class = "text-decoration-none" href="./about.php">about as</a>
                    <a class = "text-decoration-none" href="./contact.php">contact</a>
                    <?php
                    }
                ?>
            </nav>
            <div class="icons">
                <i class="fa fa-user-o" id="user-btn"></i>
                <i class="fa fa-bars" aria-hidden="true" id="menu-btn"></i>
                <?php
                    if($_SESSION['user_type'] !== 'admin'){
                        ?>
                        <i class="fa fa-shopping-cart" id="shopping-card" aria-hidden="true"></i>
                        <?php
                    }
                ?>
            </div>
            <div class="user-box">
                <?php
                    if($_SESSION['user_type'] == 'admin'){
                    ?>
                        <p>Username : <span><?php echo $_SESSION['name']; ?></span></p>
                        <p>Email : <span><?php echo $_SESSION['email']; ?></span></p>
                    <?php
                    }else{
                        ?>
                        <p>Username : <span><?php echo $_SESSION['name']; ?></span></p>
                        <p>Email : <span><?php echo $_SESSION['email']; ?></span></p>
                        <?php 
                        }
                    ?>
                <form action="logout.php" method="post">
                    <button class="logout-btn" type="submit" name="logout">log out</button>
                </form>
            </div>
        </div>
    </header>

    <?php
        if($_SESSION['user_type'] == 'admin'){
            ?>
            <div class="banner">
                <div class="detail">
                    <h1>admin dashboard</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur 
                        adipisicing elit. Praesentium, sit!
                    </p>
                </div>
            </div>
            <?php
        }else {
            include_once 'cart.php';
        }
    ?>
    