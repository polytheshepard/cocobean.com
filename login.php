<?php
    session_start();
    include_once("/home/eh1/e54061/public_html/wp/debug.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="login-style.css">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Montserrat:400,900|Signika" rel="stylesheet">    
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
        <div id="login-form">
            <div id="login-container">
                <h1 id="outline-text">Login</h1>
                <form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=login" method="post" onsubmit="return validateForm()">
                    <input type="text" id="email" name="email" value="<?php echo $email?>" placeholder="Email">
                    <span class="error"></span>
                    <p>Password must contain at least 8 characters.</p>
                    <input type="password" id="password" name="password" placeholder="Password">
                    <span class="error"></span>
                    <input type="submit" value="Submit" class="submit-btn btn-block btn-primary">
                </form>
            </div>
        </div>
    </main>
    <footer>
    </footer>
</body>
<script src="validate-form.js"></script>
</html>
