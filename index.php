<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Register</title>
    <link rel="stylesheet" href="./css/register.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.csss">

</head>
<body>
    
    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Please Login or Sing Up</h1>
            <span>แล้วคุณจะพบกับสินค้าคุณภาพ</span>
          </div>
        </div>
      </div>
    </div>

    <form action="signup_db.php" method="post">
    <div class="container">
        <div class="imgcontainer">
            <img src="./assets/imges/product9.jpg" alt="Avatar" class="avatar">
        </div>
            <?php if(isset($_SESSION['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php
                        echo $_SESSION['error'];
                        unset($_SESSION['error'])
                    ?>
                </div>
            <?php } ?>
            <?php if(isset($_SESSION['success'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['successs']);
                    ?>
                </div>
            <?php } ?>
            <?php if(isset($_SESSION['warning'])) { ?> 
                <div class="alert alert-warning" role="alert">
                    <?php
                        echo $_SESSION['warning'];
                        unset($_SESSION['warning']);
                    ?>
                </div>
            <?php } ?>

            <div class="mb-3">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" placeholder="Enter  First name"class="form-control" name="firstname" aria-describedby="firstname">
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Last Name</label>
                <innput ttype="text" placeholder="Enter Last name" class="form-control" name="lastname" aria-describedby="lastname">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" placeholder="Enter Email" class="form-control" name="email" aria-describedby="email">
            </div>
            <div class="mb-3">
                <label for="password" cclass="form-label">Password</label>
                <input ttype="password" placeholder="Enter Password" class="form-control" name="password">
            </div>
            <div class="mb-3">
                <label for="confirm password" cclass="form-label">Confirm Password</label>
                <input ttype="password" placeholder="Confirm Password" class="form-control" name="c_password">
            </div>
            <button type="submit" name="signup" >Sign Up</button>
    </form>
    <hr>
    <p>เป็นสมาชิกแล้วใช่ไหม คลิ๊กที่นี่เพื่อ <a href="signin.php">เข้าสู่ระบบ</a></p>
            </div>

<div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>
              Cryptocurrency 2020 NFT
            </p>
          </div>
        </div>
      </div>
</div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/dist/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>

    
 </body>
