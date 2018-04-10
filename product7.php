<!--Note Coffee products are not included within the cart array, the tea products are the only items so far that are processed 
and only applies for the first element, black tea -->
<?php
    session_start();
    define(PID, $_GET['pid']);
    $valid_products = ['p1', 'p2', 'p3', 'p4', 'p5', 'p6', 'p7', 'p8', 'p9'];

    // return back to main page when pid or valid products are invalid from url
    if (!isset ($_GET['pid']) || !in_array(PID,$valid_products, true)) {
        header('Location: products.php');
    }

    // Processing to cart storage
    if (isset ($_POST['pid'])) {
        if(in_array($_POST['pid'],$valid_products, true)) {
            $_SESSION['cart'][$_POST['pid']][$_POST['oid']]=$_POST['qty'];
            header('Location: cart.php'); // send user off to cart when purchasing
        } else {
            header('Location: products.php');
        }
    } 

    if(!isset($_SESSION['productTree'])) {
        $fp = fopen('products.csv', "r");
        flock($fp, LOCK_SH);
        $headings = fgetcsv($fp);
        while ($tryReadALine = fgetcsv($fp)) {
            // preShow($tryReadALine);
            $count = count($tryReadALine);
            for ($i=2;$i<$count;$i++) {
                $_SESSION['productTree'][$tryReadALine[0]][$tryReadALine[1]][$headings[$i]] = $tryReadALine[$i]; 
            }
        }
            flock($fp, LOCK_UN);
            fclose($fp);


        // preShow($headings);
    }
    // preShow($_SESSION['productTree']);
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
        <h2>Columbia</h2>
        <img src="../img/columbia.png" alt="Image of a Columbian coffee beans" class="image">
        <div class="product-container">
            <p>Price: $15</p>
            <p class="product-description">Residing from Columbia, this particular blend is mixed in a citrus-like flavour with a fruity tone with coffee bean oils.</p>
            <p><strong>Aroma:</strong> Sweet caramel, cocoa</p>
            <p><strong>Roast:</strong> Medium</p>
            <div class="coffee-bar">
                <div class="filled-medium">
                </div>
            </div>
            <p><strong>Body:</strong> Smooth<p>
            <p><strong>Flavour:</strong> Fruity, Nutty, Citrus-like</p>
            <form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=product" method="post">
            <input type="hidden" name="pid" value="p7">
            <div class="coffee-options">
                <label> Size
                <select name="option" class="size">
                    <option value="500">500 g</option>
                    <option value="green">1 kg</option>
                </select>
                </label>
            </div>
            <div class="quantity-box">
                <input type="button" class="decrease" name="qty" value="-" onclick="minus()">
                <input type="number" class="product-amount" id="pid" name="qty" value="0" min="0">
                <input type="button" class="increase" name="qty" value="+" onclick="plus()">
            </div>
            <input type="submit" class="add-button" value="Add">
            </form>
        </div>
    </main>
    <footer>
        <hr>
        Katies Truong s3671053
        <a href="products.csv">Products Spreadsheet</a>
    </footer>
    <?php
        include_once("/home/eh1/e54061/public_html/wp/debug.php");
    ?>
</body>
<script src="calculate.js"></script>
<script src="subtotal.js"></script>
</html>
