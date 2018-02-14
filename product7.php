<?php
    session_start();
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
            <input type="hidden" name="id" value="p7">
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
                <input type="text" class="product-amount" id="p1" name="qty" value="0" min="0">
                <input type="button" class="increase" name="qty" value="+" onclick="plus()">
            </div>
            <input type="submit" class="add-button" value="Add">
            </form>
        </div>
    </main>
    <footer>
    </footer>
</body>
<script src="calculate.js"></script>
</html>
