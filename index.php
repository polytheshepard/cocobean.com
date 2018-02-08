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
            <div id="logo-panel">
                <span id="nav-logo"><img src="../img/kaffe-logo-nav.png" alt="The KAFFÉ logo is displayed with the navigation bar"></span>
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
                        <li><a href="#">Contact</a></li>
                    </ul>
                    <img id="main-logo" src="../img/kaffe-logo-revamped.png" alt="The KAFFÉ logo">
            </div>
        </nav>
    </header>
    <!--Note to self: will update menu image soon and add delivery services afterwards. Will separate coffee and tea shop when A3 comes along to products1.php and products2.php-->
    <main>
        <h1>Welcome to KAFFÉ</h1>
        <div id="main-info">
            <p>KAFFÉ is a specialty coffee shop serving the best urban dishes along the Boulevarde. We roast the highest quality beans ranging from Columbia, Africa and eco-friendly coffee.</p>
            <p>We take special care of our coffee beans enriching the darkest aromas served with the palette to your warming dishes.</p>
            <p>Our purpose is to entrust meaning to our customer's love for coffee artistry. We value the environment as much as you do, as one of our biggest trademark
               we've decided to go through the sustainable road. As part of our ethos, for every coffee cup you buy at KAFFÉ, 50 cents will go to a community fundraising campaign.</p>
            <p>Feel free to look at our special handcrafted coffee and tea blends in our shop today.</p>
        </div>
        <a href="products.php"><input id="browse-button" type="button" value="Browse shop"></a>
        <div class="showcase-product">
        </div>
    </main>
    <footer>
    © COPYRIGHT Katies Truong s3671053 2018
    </footer>
</body>
</html>
