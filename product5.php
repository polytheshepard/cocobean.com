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
        <!--logo and branding has been placed in nav-->
    </header>
    <nav>
    <div class="logo-panel">
            <div class="navbar">
                <img src="../img/kaffe-logo-nav.png" alt="The KAFFÉ logo is displayed with the navigation bar">
                <ul>
                    <li><a href="index.php">Home</a></li>
                        <div class="dropdown">
                             <button class="dropbtn">
                                <li>Shop<i class="fa fa-sort-desc"></i></li>
                             </button>
                             <div class="dropdown-content">
                                 <a href="products.php">Coffee</a>
                                 <a href="products.php">Tea</a>
                             </div>
                        </div>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="service.php">Bookings</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="#">Delivery</a></li>
                        <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <a href="products.php"><input type="button" class="return-button" value="Return"></a>
        <h2>Darjeeling</h2>
        <img src="../img/darjeeling.png" alt="Have some Darjeeling" class="image">
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
            <form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=product" method="post">
            <input type="hidden" name="id" value="p5">
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