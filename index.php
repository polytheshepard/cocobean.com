<?php
require_once 'core/init.php';

// Selects all items in database
$sql = "SELECT * FROM categories WHERE parent = 0 ";
$p_query = $db->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, inital-scale=1">
    <title>Coco Bean Homepage</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Montserrat:300|Signikai|Lora" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script async src="https://use.fontawesome.com/d71358d53b.js"></script>

</head>
<body>
    <header>
        <nav id="main-nav">
            <div id="logo-panel">
            <!--<img id="nav-logo" src="img/logo/cocobean-nav.png" alt="The Coco Bean logo is displayed with the navigation bar">-->
			<ul>
			    <li><img id="nav-logo" src="img/logo/cocobean-nav.png" alt="The Coco Bean logo is displayed with the navigation bar"></li>
	                    <li><a href="index.php" class="nav-highlight">Home</a></li>
                        <li><a href="products.php" class="nav-highlight">Shop<i class="fa fa-sort-desc"></i></a>
                            <ul>
                                <li><a href="products.php">Coffee</a></li>
                                <li><a href="products.php">Tea</a></li>
                            </ul>
                        </li>
                        <li><a href="login.php" class="nav-highlight">Login</a></li>
	                    <li><a href="service.php" class="nav-highlight">Bookings</a></li>
	                    <li><a href="#" class="nav-highlight">Menu</a></li>
                        <li><a href="service2.php" class="nav-highlight">Delivery</a></li>
                        <li><a href="cart.php" class="nav-highlight">Cart</a></li>
                        <li><a href="#" class="nav-highlight">Contact</a></li>
                    </ul>
                    <img id="main-logo" src="img/logo/cocobean-logo.png" alt="The Coco Bean logo">
            </div>
        </nav>
    </header>
    <main>
        <div id="heading">
            <h1>Welcome to Coco Bean</h1>
            <h2>Where buying coffee comes with style!</h2>
        </div>
        <div id="main-info">
            <p>Coco Bean is a specialty coffee shop serving the best urban dishes along the Boulevarde. We roast the highest quality beans ranging from Columbia, Africa and eco-friendly coffee.</p>
            <p>We take special care of our coffee beans enriching the darkest aromas served with the palette to your warming dishes.</p>
            <p>Our purpose is to entrust meaning to our customer's love for coffee artistry. We value the environment as much as you do, as one of our biggest trademark
               we've decided to go through the sustainable road. As part of our ethos, for every coffee cup you buy at Coco Bean, 50 cents will go to a community fundraising campaign.</p>
            <p>Feel free to look at our special handcrafted coffee and tea blends in our shop today.</p>
        </div>
        <a href="products.php"><input id="browse-button" type="button" value="Browse shop"></a>
        <!-- Showcase different options -->
        <div class="row">
            <div class="column">
                <img src="img/menu/antipasti.jpg" alt="">
            </div>
            <div class="column">
                <img src="img/menu/coffee-cup.jpg" alt="">
            </div>
            <div class="column">
                <img src="img/menu/delivery.jpg" alt="">
            </div>
            <div class="column">
                <img src="img/menu/cafe-booking.jpg" alt="">
            </div>
        </div>
    </main>
    <footer>
        Katies Truong 2018
    </footer>

    <script src="js/nav-scroll.js"></script>
</body>
</html>
