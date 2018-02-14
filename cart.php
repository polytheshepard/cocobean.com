<?php
    session_start();

    if (isset($_POST['add'], $_POST['id'], $_POST['qty'], $_POST['option'])) {
        // server side code is require here to check if
        // - qty is a positive integer (ie 1 or more)
        // if (qty >= 1) {

        // // - product/service id is valid
        // } else if (id ) && service {

        // // - product/service option is valid
        // } else if (option is valid) {
            
        // }
        $SESSION['cart'][$_POST['id']]['qty'] = $_POST['qty'];
        // repeat to add the valid option
    }

    // Cancel order
    if (isset($_POST['cancel'])) {
        unset($_SESSION['cart']);
        header('Location: products.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, inital-scale=1">
    <title>Assignment 2</title>
    <link rel="stylesheet" type="text/css" href="style.css">
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
        <input type="button" value="Remove">
        <input type="button" value="Edit">
        <h2>Summary</h2>
        <p>Subtotal</p>
        <p><!--Added updated cost value--></p>
        <p>Estimated Shipping Fees</p>
        <p><!--Added updated shipping fees--></p>
        <h2>Total</h2>
        <p><!--Added updated total fees--></p>
        <a href="checkout.php"><input type="button" value="Checkout"></a>
        <input type="button" value="Cancel Order">
    </main>
</body>
<footer>
    Katies Truong s3671053 2018
</footer>
<?php
    include_once("/home/eh1/e54061/public_html/wp/debug.php");
?>
</html>
