<?php
    session_start();

    if (isset($_POST['add'], $_POST['pid'], $_POST['qty'], $_POST['option'], $_POST['pTitle'])) {
        // server side code is require here to check if
        $qty = filter_var($_POST['qty'], FILTER_VALIDATE_INT);
        $pid = filter_var($_POST['pid'], FILTER_VALIDATE_REGEXP, array(
              "options" => array("regexp"=>"/^[p][1-9]$/")
          )
        );
        $option = filter_var($_POST['option']);
        $_SESSION['cart'][$_POST['pid']]['qty'] = $_POST['qty'];
        // repeat to add the valid option
        header("Location: cart.php");
    }
    // if(!isset($_SESSION['productTree'])) {
    //     $fp = fopen('products.csv', "r");
    //     flock($fp, LOCK_SH);
    //     $headings = fgetcsv($fp);
    //     while ($tryReadALine = fgetcsv($fp)) {
    //         // preShow($tryReadALine);
    //         $count = count($tryReadALine);
    //         for ($i=2;$i<$count;$i++) {
    //             $_SESSION['productTree'][$tryReadALine[0]][$tryReadALine[1]][$headings[$i]] = $tryReadALine[$i]; 
    //         }
    //     }
    //         flock($fp, LOCK_UN);
    //         fclose($fp);


    //     // preShow($headings);
    // }
    // preShow($_SESSION['productTree']);
    // function preShow($var) {
    //         echo "<pre>";
    //         print_r($var);
    //         echo "</pre>";
    //     }

      // set and add into cart
      if (isset($_POST['add-item'])) {
        $_SESSION['cart']=$_POST;
    } else if (isset($_POST['edit-item'])) {
        $_SESSION['cart'][]=$_POST;
    } else if (isset($_POST['reset'])) {
        unset ($_SESSION['cart']);
    }

    // // Cancel order
    // if (isset($_POST['cancel'])) {
    //     unset($_SESSION['cart']);
    //     header('Location: products.php');
    // }

    // removes quantity
    if (isset($_POST['delete'])) {
        if (false !== $key = array_search($_POST['delete'], $_SESSION['cart'])) {
            unset ($_SESSION['cart'][$key]);
        }
    }
      
    // resets entire Cart
    if (isset($_GET['reset'])) {
        unset($_SESSION['qty']);
        unset($_SESSION['Price']);
        unset($_SESSION['cart']);
        header('Location: products.php');
    }
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, inital-scale=1">
    <title>Cart</title>
    <link rel="stylesheet" type="text/css" href="cart-style.css">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Montserrat:300|Signika" rel="stylesheet">
    <script src="https://use.fontawesome.com/d71358d53b.js"></script>
</head>
<body>
    <header>
        <nav id="main-nav">
            <img id="nav-logo" src="../img/kaffe-logo-nav.png" alt="The KAFFÉ logo is displayed with the navigation bar">
	            <ul>
	                <li><a href="index.php">Home</a></li>
                    <li><a href="products.php">Shop<i class="fa fa-sort-desc"></i></a>
                        <ul>
                            <li><a href="products.php">Coffee</a></li>
                            <li><a href="products.php">Tea</a></li>
                        </ul>
                    </li>
                    <li><a href="login.php">Login</a></li>
	                <li><a href="service.php">Bookings</a></li>
	                <li><a href="#">Menu</a></li>
                    <li><a href="service2.php">Delivery</a></li>
                    <li><a href="cart.php">Cart</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
         </nav>
    </header>
    <main>
        <h1>Shopping Cart</h1>
        <h2>Summary</h2>
        <?php
          
            // echo $cart;
            // preShow($cart);
            // Possibly add an if statement to show specific option products when chosen
            foreach ($_SESSION['cart'] as $product => $quantity) {
            echo "<div class='item-container'>
            <h2>Product {$product}</h2>
            <h1>{$product['black']}</h1>
            <img src='../img/black.jpeg'>
            <p>Black tea leaves</p>
            <h2>Quantity: {$quantity['black']}</h2>
            </div>
            <div class='item-container'>
            <h1>{$product['white']}</h1>
            <p>White tea leaves</p>
            <img src='../img/white.jpeg'>
            <h2>Quantity: {$quantity['white']}</h2>
            </div>
            <div class='item-container'>
            <h1>{$product['green']}</h1>
            <p>Green tea leaves</p>
            <img src='../img/green.jpeg'>
            <h2>Quantity: {$quantity['green']}</h2>
            </div>
            <br>";
            }
            
        ?>
        <p>Subtotal</p>
        <p><!--Added updated cost value--></p>
        <p>Estimated Shipping Fees</p>
        <p><!--Added updated shipping fees--></p>
        <p>Total</p>
        <p><!--Added updated total fees--></p>
        <form type='hidden' method='post'>
            <div id='button-container'>
                <a href="products.php"><input  class='cart-button' type="button" value="Back to Shopping"></a>
                <a href="?remove<?php echo($cart); ?>"><input class='cart-button' type="button" value="Remove"></a>
                <a href="?reset=true<?php echo($cart); ?>"><input class='cart-button' type="button" value="Reset"></a>
                <a href="checkout.php"><input class='cart-button' type="button" value="Proceed to Checkout"></a>
            </div>
        </form>
    </main>
</body>
<footer>
    <hr>
    Katies Truong s3671053 2018
</footer>
<?php
    include_once("/home/eh1/e54061/public_html/wp/debug.php");
?>
</html>
