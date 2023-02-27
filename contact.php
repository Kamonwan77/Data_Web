<?php

    seesion_start();
    require_once 'config/config.php';
    if (!isset($config['admin_login'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ';
        header('location: sigin.php');
    }

?>
<?php

if (isset($_SESSION['user_login'])) {
    $user_id = $_SESSION['user_login'];
    $stmt = $conn->query("SELECT * FROM user WHERE user_id");
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
        
        <title>NET Website</title>

        <!--Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="assets/css/fontawesome.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets//css/owl.css">
    </head>

    <body>
        <!-- Header -->
        <div class="sub-header">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-xs-12">
                <ul class="left-info">
                  <li><a href="#"><i class="fa fa-envelope"></i>contact@Ezgg.com</a></li>
                  <li><a href="#"><i class="fa fa-phon"></i>123-456-7890</a></li>
                </ul>
              </div>
              <div class="col-md-4">
                <ul class="right-icons">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <header class="">
            <nav class="navbar navbar-expand-lg">
              <div class="container">
                <a class="navbar-brand" href="index.php"><h2>NET Store<em> Website</em></h2></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbar">
                  <span class="navbar-toggler-ion"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="index.php">Home 
                        <span class="sr-only">(current)</span>
                      </a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="products.php">Products</a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="show.php">Shopping</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
        </header>

        <div class="page-heading header-text">
          <div class="container">
            <div class="row">
              <div class="col-md-12"> 
                <h1>Contact Us</h1>
                <span>Hello</span>
              </div>
            </div>
          </div>
        </div>

        <div class="contact-information">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <div class="contact-item">
                  <i class="fa fa-phone"></i>
                  <h4>Phone</h4>
                  <p>เจนรักหมู</p>
                  <a href="#">+1 333 4040 5566</a>
                </div>
              </div>
              <div class="col-md-4">
                <div class="contact-item">
                  <i class="fa fa-envelope"></i>
                  <h4>Email</h4>
                  <p>Inbox 24 ชั่วโมง</p>
                  <a href="#">contact@Ezgg.com</a>
                </div>
              </div>
              <div class="col-md-4">
                <div class="contact-item">
                  <i class="fa fa-map-marker"></i>
                  <h4>Location</h4>
                  <p>404 ปราจีนบุรี อำเภอเมือง ตำบล เนินหอม <br> ประเทศไทย</p>
                </div>
              </div>  
            </div>
          </div>
        </div>

        <div id="map">

</div>

        <div class="sub-footer">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <p>
                    cryptocurrency @ 2020 NFT
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Additional Scripts -->
        <script src="assets/js/custom.js"></script>
        <script src="assets/js/owl.js"></script>
        <script src="assets/js/slick.js"></script>
        <script src="assets/js/accordions.js"></script>

        <script language = "text/Javascript">
          cleared[0] = cleared[1] = cleared[2] =0; //set a cleared flag for each field
          function clearField(t){                  //declaring the array outside of the
          if(! cleared[t,id]){                     // function makes it static and global
              cleared[t,id] = 1;  // you could use true and false, but that's more typing
              t.value='';         // with more chance of typos
              t.style.color='#fff';
              }
          }
        </script>

    </body>
</html>