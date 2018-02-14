<?php
    session_start();
    include_once("/home/eh1/e54061/public_html/wp/debug.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>Delivery</title>
    <link rel="stylesheet" type="text/css" href="service2-style.css">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Montserrat:400,500,900|Signika" rel="stylesheet">    
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
        <h1 id="outline-text">Delivery</h1>
        <div class="selection-container">
            <ul>
                <div><li><a href="service2.php#first-heading">Lunch</a></li></div>
                <div><li><a href="service2.php#second-heading">Dinner</a></li></div>
                <div><li><a href="service2.php#third-heading">Drinks</a></li></div>
            </ul>
        </div>
        <div class="container">
            <div class="banner">
                <h2 id="first-heading">Lunch</h2>
                <div id="first-img" class="img-bg"></div>
            </div>
            <div class="first-section">
                <div class="food-content">
                    <h2>Feta Cheese Salad</h2>
                    <img class="img-content" src="../img/feta-cheese-salad.jpeg" alt="Image of a nice cool feta cheese salad">
                    <p>$12.50</p>
                    <form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=service" method="post">
                    <input type="hidden" name="id" value="lu1">
                    <input name="qty" type="button" value="+">
                    </form>
                </div>
                <div class="food-content">
                    <h2>Chia Pudding</h2>
                    <img class="img-content" src="../img/chia-pudding.jpeg" alt="A bowl full of chia pudding with yogurt">
                    <p>$13.20</p>
                    <form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=service" method="post">
                    <input type="hidden" name="id" value="lu2">
                    <input name="qty" type="button" value="+">
                    </form>
                </div>
                <div class="food-content">
                    <h2>Banana Crust</h2>
                    <img class="img-content" src="../img/banana-crust.jpeg" alt="Image of toast topped with cherry tomatoes, boiled eggs and banana side dishes">
                    <p>$10</p>
                    <form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=service" method="post">
                    <input type="hidden" name="id" value="lu3">
                    <input name="qty" type="button" value="+">
                    </form>
                </div>
            </div>
            <div class="banner">
                <h2 id="second-heading">Dinner</h2>
                <div id="second-img" class="img-bg"></div>
                </div>
                <div class="second-section">
                <div class="food-content">
                    <h2>Grilled Chicken</h2>
                    <img class="img-content" src="../img/grilled-chicken.jpeg" alt="Grilled chicken garnished with rocket leaves, lemon and spanish onion">
                    <p>$13.50</p>
                    <input type="hidden" name="id" value="di1">
                    <input name="qty" type="button" value="+">
                </div>
                <div class="food-content">
                    <h2>Eggs and Bacon</h2>
                    <img class="img-content" src="../img/eggs-bacon.jpeg" alt="Overhead shot of a dish of eggs with bacon on the side">
                    <p>$13.20</p>
                    <form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=service" method="post">
                    <input type="hidden" name="id" value="di2">
                    <input name="qty" type="button" value="+">
                    </form>
                </div>
                <div class="food-content">
                    <h2>Brekkie Hotpot</h2>
                    <img class="img-content" src="../img/brekkie-hotpot.jpeg" alt="Image of warm brekkie hotpot filled with tomatoes and eggs and bread slices as a side">
                    <p>$15</p>
                    <form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=service" method="post">
                    <input type="hidden" name="id" value="di3">
                    <input name="qty" type="button" value="+">
                    </form>
                </div>
                <div class="food-content">
                    <h2>Feta Pasta</h2>
                    <img class="img-content" src="../img/pasta.jpg" alt="Pasta is filled with olives, romana tomatoes and feta cheese">
                    <p>$14.30</p>
                    <form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=service" method="post">
                    <input type="hidden" name="id" value="di4">
                    <input name="qty" type="button" value="+">
                    </form>
                </div>
            </div>
            <div class="banner">
                <h2 id="third-heading">Drinks</h2>
                <div id="third-img" class="img-bg"></div>
            </div>
            <div class="third-section">
                <div class="food-content">
                    <h2>Indigo Warrior</h2>
                    <img class="img-content" src="../img/indigo-warrior.jpeg" alt="Berry smoothie blended with blueberries, strawberries and raspberries">
                    <p>$6</p>
                    <form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=service" method="post">
                    <input type="hidden" name="id" value="dr1">
                    <input name="qty" type="button" value="+">
                    </form>
                </div>
                <div class="food-content">
                    <h2>Acai Smoothie</h2>
                    <img class="img-content" src="../img/acai-smoothie.jpeg" alt="Smoothie jar mixed with chocolate goodness topped with nuts, acai berries, strawberries and kiwi">
                    <p>$8</p>
                    <form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=service" method="post">
                    <input type="hidden" name="id" value="dr2">
                    <input name="qty" type="button" value="+">
                   </form> 
                </div>
                <div class="food-content">
                    <h2>Watermelon Shake</h2>
                    <img class="img-content" src="../img/watermelon-shake.jpeg" alt="Chilled watermelon smoothie blended in watermelon juice and ice">
                    <p>$5</p>
                    <form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=service" method="post">
                    <input type="hidden" name="id" value="dr3">
                    <input name="qty" type="button" value="+">
                    </form>
                </div>
                <div class="food-content">
                    <h2>Tooty Fruity</h2>
                    <img class="img-content" src="../img/tooty-fruity.jpg" alt="Image of a strawberry smoothie">
                    <p>$6</p>
                    <form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=service" method="post">
                    <input type="hidden" name="id" value="dr4">
                    <input name="qty" type="button" value="+">
                    </form>    
                </div>
            </div>
        </div>
    </main>
</body>
</html>
