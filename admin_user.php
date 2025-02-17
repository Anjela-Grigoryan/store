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
<body class="users-body">
    <?php
    include 'header.php';
    include 'db.php';
    ?>
        <table class="users-container">
            <thead>
                <tr>
                    <th>id</th>
                    <th>users email</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php
            $users_sql = mysqli_query($conn, "SELECT * FROM `users` WHERE `user_type` != 'admin'");
            $users_count = mysqli_num_rows($users_sql);
            if($users_count > 0){
                while($urow = mysqli_fetch_assoc($users_sql)){
                    ?>
                    <tr>
                        <td><?=$urow['id']?></td>
                        <td><?=$urow['email']?></td>
                        <td class="delete-td"><button data-toggle="modal" data-target="#myModal<?=$urow['id']?>">delete</button></td>
                    </tr>
                    <!-- -------------modal------------- -->
                    <div class="modal" tabindex="-1" role="dialog" id="myModal<?=$urow['id']?>">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-body">
                                <p>Do you want to delete this user?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                <a href="delete.php?id=<?=$urow['id']?>">
                                    <button type="button" class="btn btn-primary">Yes</button>
                                </a>
                            </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }else{
                ?>
                    <p class="message">No Users</p>
                <?php
            }
            ?>
            </tbody>
        </table>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>