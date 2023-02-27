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



