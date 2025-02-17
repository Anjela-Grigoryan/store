<?php
    include_once 'db.php';
    $uid = $_SESSION['user_id'];
    $sql = "SELECT * FROM `vegan_cart` WHERE `user_id` = '$uid'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    $arr = [];

?>
<form class="shop-container" method="post" action="user_order.php">
<?php

    if($resultCheck > 0){
        $total = 0;
        while($row = mysqli_fetch_assoc($result)){
            $total += $row['price']*$row['quantity'];
            $imageUrl = './images/' . $row['image'];
            $product = 'id' . ':' . $row['pid'] . '-' . 'quantity' . ':' . $row['quantity'];
            array_push($arr, $product);
            ?>
            <div class="product">
                <img src="<?=$imageUrl?>">
                <p><?=$row['name']?></p>
                <div class="count-box">
                    <a data-action="mminus">-</a>
                    <div><p data-count><?=$row['quantity']?></p></div>
                    <p style="display: none;" data-id><?=$row['id']?></p>
                    <a data-action="pplus">+</a>
                </div>
                <div class="prices">
                    <div>price:<p data-price><?=$row['price']?></p></div>
                    <div>total:<p data-result> <?=$row['price']*$row['quantity']?></p></div>
                </div>
                <a class="cart-delete" href="delete.php?shop_id=<?=$row['id']?>"><i class="fa fa-trash-o" aria-hidden="true" ></i></a>
            </div>
            <?php 
        }
    }
    $arr = implode(",", $arr);
    ?>
        <div>
            <input type="text" id="number" name="number" placeholder="write your number" value="+1">
            <input type="text" class="addres" name="address" placeholder="write your adress">
            payment method
            <div class="checkboxes">
                <div>online:<input type="radio" name="pay_method" value="online" class="checbox"></div>
                <div>in place:<input type="radio" name="pay_method" value="in_place" class="checbox"></div>
            </div>
            <?php
            if($resultCheck > 0){
            ?>
                <p>total price:<?=$total?></p>
            <?php
            }
            if(!empty($_GET['error'])){
            ?>
            <p style="color: red;"><?=$_GET['error']?></p>
            <?php } ?>
            <input type="hidden" name="id" value = "<?=$_SESSION['user_id']?>">
            <input type="hidden" name="name" value = "<?=$_SESSION['name']?>">
            <input type="hidden" name="email" value = "<?=$_SESSION['email']?>">
            <input type="hidden" name="products_id" value = "<?=$arr?>">
            <input type="hidden" name="total_price" value = "<?=$total?>">
            <input type="submit" value="order">
        </div>
</form>

