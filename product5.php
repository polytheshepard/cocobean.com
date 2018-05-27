<!--Note Coffee products are not included within the cart array, the tea products are the only items so far that are processed 
and only applies for the first element, black tea -->
<?php
    // session_start();
    // define(PID, $_GET['pid']);
    // $valid_products = ['p1', 'p2', 'p3', 'p4', 'p5', 'p6', 'p7', 'p8', 'p9'];

    // // return back to main page when pid or valid products are invalid from url
    // if (!isset ($_GET['pid']) || !in_array(PID,$valid_products, true)) {
    //     header('Location: products.php');
    // }

    // // Processing to cart storage
    // if (isset ($_POST['pid'])) {
    //     if(in_array($_POST['pid'],$valid_products, true)) {
    //         $_SESSION['cart'][$_POST['pid']][$_POST['oid']]=$_POST['qty'];
    //         header('Location: cart.php'); // send user off to cart when purchasing
    //     } else {
    //         header('Location: products.php');
    //     }
    // } 

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
    // // preShow($_SESSION['productTree']);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, inital-scale=1">
    <title>Product</title>
    <link rel="stylesheet" type="text/css" href="product-style.css">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Montserrat:300|Signika" rel="stylesheet">  
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
        <a href="products.php"><input type="button" class="return-button" value="Return"></a>
        <h2>Darjeeling</h2>
        <img src="../img/darjeeling.png" alt="Darjeeling tea container" class="image">
        <div class="product-container">
            <p>Price: $14</p>
            <p class="product-description">Darjeeling resides in the northern region of India. Famously known as "The Champagne Tea", 
                it consists of a combination of green, white and black tea leaves
                giving an exquisite taste.</p>
            <p><strong>Caffeine Level:</strong> Moderate</p>
            <div class="caffeine-bar">
                <div class="filled-caffeine-moderate">
                </div>
            </div>
            <p><strong>Caffeine:</strong> 50mg/per 236ml</p>
            <input type="hidden" name="pid" value="p5">
            <h2>Leaves Type</h2>
            <?php
                    foreach ($_SESSION['productTree'][PID] as $oid => $details) {
                        // echo "$oid<br>";
                        // preShow($details);
                        echo "
                        <form action='product3.php?pid=".PID."' method='post'>
                        <article class='option-container'><h2 name='title'>{$details['Title']}</h2>
                        <img src='{$details['Image']}' alt='Image of {$details['Option Description']} class='image'>{$details['Product Description']}
                        <p>Price: \${$details['Price']}</p>
                        <input type='hidden' name='pid' value='p3'>
                        <div class='quantity-box'>
                            <input type='button' class='decrease' name='qty' value='-' onclick='minus()'>
                            <input type='text' name='qty' field='qty' id='pid' class='product-amount' pattern='[1-9][0-9]*' title='Positive integers only' required value=1 oninput='updateSubtotal3()'>
                            <input type='button' class='increase' name='qty' value='+' onclick='plus()'>
                            <input type='hidden' name='oid' value='$oid'>
                        </div>
                        <button name='pid' class='add-button' value='".PID."'>Add</button>
                        </form>
                        </article>";
                    }
                    echo "<h2>Subtotal: </h2><span id='subtotal-result'>$0.00</span>"
                ?>
        </div>
    </main>
    <footer>
        <hr>
        Katies Truong 2018
        <a href="products.csv">Products Spreadsheet</a>
    </footer>
</body>
<!--Calculate.js is deprecated since buttons with 3 items is difficult to maintain through js-->
<script src="calculate.js"></script>
<script src="subtotal.js"></script>
</html>
