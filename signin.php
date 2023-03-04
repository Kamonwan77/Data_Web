<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale-1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <title>Test Login Register</title>
    <link rel="stylesheet" href="./css/register.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3">

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
</head>
<body>
    
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Please Login or Sign Up</h1>
                    <span>แล้วคุณจะพบกับสินค้าคุณภาพ</span>
                </div>
            </div>
        </div>
    </div>
        <from action="signin_db.php" method="post">
        <div class="container">
        <div class="imgcontainer">
            <img src="./assets/images/product.jpg" alt="Avatar" class="avatar">
        </div>
            <label for="email" class="form-label"><b>Email</b></label>
            <input type="email" placeholder="Enter Email" class="form-control" name="email" aria-descibedby="email">
            <?php if(isset($_SESSION['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </div>
            <?php } ?>
            <?php if(isset($_SESSION['success'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </div>
            <?php } ?>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" require>
            <button type= "submit" name="signin">Login</button>
            </label>
            <span class="psw">Don't Have accout? <a href="index.php">SignUp</a></span>                   }
        </div>
        </form>
        <div class="sub-footer">
    <div class="container">
        <div class="container">
            <div class="col-md-12">
                <p>
                    Cryptocurrency  2020 NFT
                </p>
            </div>
        </div>
    </div>
        </div>

</body>