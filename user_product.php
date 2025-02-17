    <div class="container">
        <?php
        $sql = mysqli_query($conn, "SELECT * FROM `vegan_product`");
        $resultCheck = mysqli_num_rows($sql);

        if($resultCheck > 0){
            while($row = mysqli_fetch_assoc($sql)){
                $imageUrl = './images/' . $row['image'];
        ?>
            <div class="product">
                <img src="<?=$imageUrl?>" alt="">
                <div class="product-detail">
                    <h3 class="product_name">name: <?=$row['name']?></h3>
                    <div class="price-div">price:<p data-price><?=$row['price']?></p>$</div>
                    <p class="product_detail">details: <?=$row['product_detail']?></p>
                </div>
                <form action="cartDb.php" method="get">
                    <div class="count-box">
                        <button data-action="minus" class="minus" name="minus" type="button">-</button>
                        <input class="count" name="count" data-counter type="text" placeholder="0.0">
                        <input type="hidden" name="id" value="<?=$row['id']?>">
                        <input type="hidden" name="name" value="<?=$row['name']?>">
                        <button data-action="plus" class="plus" name="plus" type="button">+</button>
                    </div>
                    <div class="icon">
                        <button class="fa fa-shopping-cart" aria-hidden="true"></button>
                    </div>
                </form>
            </div>
            <?php
            }
        }
        ?>
    </div>