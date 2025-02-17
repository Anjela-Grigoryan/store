<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php
        session_start();
        include 'header.php';
    ?>
    <section class="add-products form-container">
        <form action="./add_product.php" method="POST" enctype="multipart/form-data">
            <div class="input-field">
                <label>product name</label>
                <input type="text" name="name" required>
            </div>
            <div class="input-field">
                <label>product price</label>
                <input type="text" name="price" required>
            </div>
            <div class="input-field">
                <label>product detail</label>
                <input type="text" name="detail" required>
            </div>
            <div class="input-field">
                <label>product image</label>
                <input type="file" name="image" accept="image/jpg, image/jpeg, imaage/png, image/webp" required>
            </div>
            <div class="err">
                <p><?=@$_GET['err']?></p>
            </div>
            <input type="submit" name="add_product" value="add product" class="btn">
        </form>
    </section>
    <section class="get-products">
        <div class="container">
            <?php
            include_once 'db.php';
            $get_products = "SELECT * FROM `vegan_product`";
            $product_sql = mysqli_query($conn, $get_products);
            $product_count = mysqli_num_rows($product_sql);
            if($product_count > 0){
                while($prow = mysqli_fetch_assoc($product_sql)){
                    $imageUrl = './images/' . $prow['image'];
                    ?>
                    <div class="product">
                        <img src="<?=$imageUrl?>" alt="">
                        <div class="product-detail">
                            <h3 class="product_name">name: <?=$prow['name']?></h3>
                            <p class="product_price">price: <?=$prow['price']?>$</p>
                            <p class="product_detail">details: <?=$prow['product_detail']?></p>
                        </div>
                        <button data-toggle="modal" data-target="#myModal<?=$prow['id']?>" class="btn btn-outline-danger">delete</button>
                    </div>
                    <?php
                    ?>
                    <!-- -------------modal------------- -->
                    <div class="modal" tabindex="-1" role="dialog" id="myModal<?=$prow['id']?>">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-body">
                                <p>Do you want to delete this product?</p>
                            </div>
                            <div class="modal-footer">
                                <a href="./delete.php?product_id=<?=$prow['id']?>">
                                    <button type="button" class="btn btn-outline-danger">Yes</button>
                                </a>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                            </div>
                            </div>
                        </div>
                        </div>
                    <?php
                }
            }
            ?>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>