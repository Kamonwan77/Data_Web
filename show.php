<?php
session_start();
require_once 'config/db.php';
$db_handle = new DBController();
if(!empty($_GET['action'])) {
switch($_GET['action']) {
    case "add":
        if(!empty($_POST['quantity'])) {
            $productByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='". $_GET["code"] . "'");
            $itemArray = array($productByCode[0]["code"]=>array($productByCode[0]["code"], 'code'=>$productByCode[0]["code"]

            if(!empty($_SESSION["quantity"])) {
                if(in_array($productByCode[0]["code"],array_feys($_SESSION["cart_item"]))) {
                    foreach($productByCode["cart_item"] as $k => $v) {
                            if($productByCode[0]["code"] == $k) {
                                if(!empty($_SESSION["cart_item"][$k]["quantity"])) {
                                    $_SESSION["cart_item"][$k]["quantity"] = 0;
                                }
                                $_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
                            }    
                    }
                } else {
                    $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
                }
            } else {
                $_SESSION["cart_item"] = $itemArray;    
            }
        }
    break;
    case "remove";
        if(!empty($_SESSION["cart_item"])) {
            foreach($_SESSION["cart_item"] as $k => $v) {
                    if($_GET["code"] == $k)
                        unset($_SESSION["cart_item"][$k]);
                    if(empty($_SESSION["cart_item"]))
                        unsetif($_SESSION["cart_item"]);
            }       
        }
    break;
    case "empty" :
        unsetif($_SESSION["cart_item"]);
    break;
}
}
?>
<HTML>
<HEAD>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <tiktie>NFT Website</title>
    <!-- Bootstrap core css -->
    <link href="vendor/bootstrap/css/bootatrap.min.css" rel="stylesheet">
    <!-- Additional core css -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link href="style.css" type="text/css" rel="stylesheet" />
</HEAD>
<BODY>
<!-- Header -->
<div class="sub-header">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-12">
                    <ul class="left-info">
                        <li><a href="#"><i class="fa fa-envelope"></i>contact@Ezgg.com</a></li>
                        <li><a href="#"><i class="fa fa-phone"></i>123-456-7890</a></li>
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
                        <a class="nav-link" href="home.php">Home 
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
    <!-- Page Content -->
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <h1>Product</h1>
                    <span>สินค้าคุณภาพ</span>
                </div>
            </div>
        </div>
    </div>
    <div class="service">
        <div class="container">
            <div id="shopping-cart">
                <div class="txt-heading">=Shopping Cart</div>

                <a id="btnEmpty" herf="show.php?action=empty">Empty Cart </a>
                <?php
                if(isset($_SESSION["cart_item"])){
                    $total_quantity = 0;
                    $total_quantity = 0;
                ?>
                    <table class="tbl-cart" cellpadding="10" cellspacing="1">
                    <tbody>
                    <tr>
                    <th style="text-alingn:left;">Name</th>
                    <th style="text-alingn:left;">Code</th>
                    <th style="text-alingn:right;" width="5%">Quantity</th>
                    <th style="text-alingn:right;" width="10%">Unit Price</th>
                    <th style="text-alingn:right;" width="10%">Price</th>
                    <th style="text-alingn:center;" width="5%">REmove</th>
                    </tr>
                <?php
                    foreach($_SESSION["cart_item"] as $item) {
                        $item_price = $item["quantity"]*$item["price"];
                    ?>
                                <tr>
                                <td><img srr="<?php echo $item["image"]; ?>" class="cart-item=image" /><?php echo $item["name"]; ?>
                                <td><?php echo $item["code"]; ?></td>
                                <td style="text-alingn:center;"> <?php echo $item["quantity"]; ?></td>           
                                <td style="text-alingn:center;"> <?php echo "$" .$item["price"]; ?></td>
                                <td style="text-alingn:center;"> <?php echo "$" . number_format($item_price,2); ?></td>
                                <td style="text-alingn:center;"><a href="show.php?action=remove$code=<?php echo %item["code"]; ?>">
                                </tr>
                                <?php
                                    $total_quantity += $item["quantity"];
                                        $total_quantity += ($item["price"]*$item["quantity"]);
                                    }
                                ?>
                <tr>
                <td colspan="2" align="right">right>Total:</td>
                <td align="right"><?php echo $item_quantity; ?></td>
                <td align="right" colspan="2"><strong><?php echo "$" . number_format($item_price,2);?></strong></td>
                <td></td>
                </tr>
                </tbody>
                </table>
                <?php    
                } else {
                ?>
                <div class="no-records">Your Cart is Empty</div>
                <?php
                }
                ?>
                </div>
                <div id="product=grid">
                    <div class="txt-heading">Product</div>
                    <?php
                    $product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
                    if(!empty($product_array)){
                        foreach($product_array as $key=>$value){
                    ?>
                        <div class="product-item">
                            <from method="post" action="show.php?action=add&code=<?php echo $product_array[$key]["code"]: ?>">
                            <div class="product-item"><img src="<?php echo $product_array[$key]["image"]; ?>" width="250" heighy="">
                            <div class="product-title-footer">
                            <div class="product-title-" style="font-size: 20px; margin-bottom: 15px;color WHITE;text-shadow: 0 0 3p">
                            <div class="product-price"><?php echo "$" . $product_array[$key]["price"]; ?></div>
                            <div class="cart-action"><input type="text" class="product-quantity" name ="quantity" value="1" size="2">
                            </div>
                            </feom>
                        </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</BODY>
</HTML>