<?php
    session_start();

    //set array onto $fields variable
    $fields = $_SESSION['cart'];
    $file = fopen('orders.csv', "a");

    fputcsv($file, $fields,',', '"');

    fclose($file);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, inital-scale=1">
    <title>Cart</title>
    <link rel="stylesheet" type="text/css" href="receipt-style.css">
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
        <h2>Thank you for Shopping! Your order has been successfully processed!</h2>
        <h1>Receipt</h1>
        <h2>{{product title}}</h2>
        <p>{{item1 title}}</p>
        <p>{{item1 price}}</p>
        <p>{{item1 qty}}</p>
        <p>{{item2 title}}</p>
        <p>{{item2 price}}</p>
        <p>{{item2 qty}}</p>
        <p>{{item3 title}}</p>
        <p>{{item3 price}}</p>
        <p>{{item3 qty}}</p>
        <p><?php echo $_SESSION['firstname']; ?></p>
        <p><?php echo $_SESSION['lastname']?></p>
        <p><?php echo $_SESSION['address']; ?></p>
        <p><?php echo $_SESSION['suburb']; ?></p>
        <p>{{ID}}</p>
        <p>{{option}}</p>
        <p>{{quantity}}</p>
        <p>{{unit price}}</p>
        <p>{{purchase date}}</p>
        <p>Subtotal</p>
        <p>{{total price}}</p>
        <hr>
        <h2>Your items will be shipped at:</h2>
        <p><?php echo $_SESSION['address'];?></p>
        <p><?php echo $_SESSION['city'];?></p>
        <p><?php echo $_SESSION['zip'];?></p>
        <p><?php echo $_SESSION['country'];?></p>
    </main>
</body>
<footer>
    <hr>
    Katies Truong s3671053 2018
    <a href='orders.csv'>Orders Spreadsheet</a>
</footer>
<?php
    include_once("/home/eh1/e54061/public_html/wp/debug.php");
?>
</html>