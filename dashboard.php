
<div class="dashboard">
        <div class="box-container">
            <div class="box">
                <?php
                    $total_pendings = 0;
                    $select_pendings = mysqli_query($conn, "SELECT * FROM `vegan_order` WHERE `payment_status` = 'pending'") or die('query failed');
                    while($fetch_pendings = mysqli_fetch_assoc($select_pendings)){
                        $total_pendings += $fetch_pendings['total_price'];
                    }
                ?>
                <h3><?=$total_pendings?></h3>
                <p>total pendings</p>
            </div>
            <div class="box">
                <?php
                    $total_completes = 0;
                    $select_completes = mysqli_query($conn, "SELECT * FROM `vegan_order` WHERE `payment_status` = 'complete'") or die('query failed');
                    while($fetch_completes = mysqli_fetch_assoc($select_completes)){
                        $total_completes += $fetch_completes['total_price'];
                    }
                ?>
                <h3><?=$total_completes?></h3>
                <p>total completes</p>
            </div>
            <div class="box">
                <?php
                    $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE `user_type` = 'user'") or die('query failed');
                    $users_count = mysqli_num_rows($select_users);
                ?>
                <h3><?=$users_count?></h3>
                <p>total registerid users</p>
            </div>
            <div class="box">
                <?php
                    $select_admins = mysqli_query($conn, "SELECT * FROM `users` WHERE `user_type` = 'admin'") or die('query failed');
                    $admins_count = mysqli_num_rows($select_admins);
                ?>
                <h3><?=$admins_count?></h3>
                <p>total admins</p>
            </div>
            <div class="box">
                <?php
                    $select_all_users = mysqli_query($conn, "SELECT * FROM `users`") or die('query failed');
                    $all_users_count = mysqli_num_rows($select_all_users);
                ?>
                <h3><?=$all_users_count?></h3>
                <p>total users</p>
            </div>
            <div class="box">
                <?php
                    $select_orders = mysqli_query($conn, "SELECT * FROM `vegan_order`") or die('query failed');
                    $orders_count = mysqli_num_rows($select_orders);
                ?>
                <h3><?=$orders_count?></h3>
                <p>orders placed</p>
            </div>
            <div class="box">
                <?php
                    $select_products = mysqli_query($conn, "SELECT * FROM `vegan_product`") or die('query failed');
                    $products_count = mysqli_num_rows($select_products);
                ?>
                <h3><?=$products_count?></h3>
                <p>product added</p>
            </div>
            <div class="box">
                <?php
                    $select_messages = mysqli_query($conn, "SELECT * FROM `vegan_message`") or die('query failed');
                    $messages_count = mysqli_num_rows($select_messages);
                ?>
                <h3><?=$messages_count?></h3>
                <p>new messages</p>
            </div>
        </div>
    </div>