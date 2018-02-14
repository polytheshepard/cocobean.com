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
            <div id="logo-panel">
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
            </div>
        </nav>
    </header>
    <main>
        <a href="products.php"><input type="button" class="return-button" value="Return"></a>
        <h2>English Breakfast</h2>
        <img src="../img/english-breakfast.png" alt="Earl Grey container" class="image">
        <div class="product-container">
            <p>Price: $10</p>
            <p class="product-description">One of the most popular tea blends, most commonly as British tea. Its robust and rich black tea leaves
            works well with milk and sugar. </p>
            <p><strong>Caffeine Level:</strong> Moderate</p>
            <!--Note to self: Update bar to make it visually intuitive possible remove above text and push to bar level-->
            <div class="caffeine-bar">
                <div class="filled-caffeine-moderate">
                </div>
            </div>
            <p><strong>Caffeine:</strong> 42mg/per 236ml</p>
            <form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=product" method="post">
            <input type="hidden" name="id" value="p1">
            <div class="tea-options">
                <label> Leaves type
                <select name="option" class="tea-box">
                    <option value="black">Black</option>
                    <option value="green">Green</option>
                    <option value="white">White</option>
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

