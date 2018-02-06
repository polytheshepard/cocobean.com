<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Delivery</title>
    <link rel="stylesheet" type="text/css" href="service2-style.css">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Montserrat:400,900|Signika" rel="stylesheet">    
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
                        <li><a href="service2.php">Delivery</a></li>
                        <li><a href="#">Contact</a></li>
                </ul>
            </div>
    </div>
</nav>
    <main>
        <h1>Delivery</h2>
        <div class="selection-container">
            <ul>
                <div><li><a href="#lunch">Lunch</a></li></div>
                <div><li><a href="#dinner">Dinner</a></li></div>
                <div><li><a href="#drinks">Drinks</a></li></div>
            </ul>
        </div>
        <div class="container">
            <div class="first-section">
            <h2 id="first-heading">Lunch</h2>
            <img class="img-bg" src="../img/lunch-background.jpeg" alt="Image of chips for lunch on table">
            <div class="food-content">
                <h2>Feta Cheese Salad</h2>
                <img class="img-content" src="../img/feta-cheese-salad.jpeg" alt="Image of a nice cool feta cheese salad">
                <p>Price: $12</p>
            </div>
            <div class="food-content">
                <h2>Chia Pudding</h2>
                <img class="img-content" src="../img/chia-pudding.jpeg" alt="A bowl full of chia pudding with yogurt">
                <p>Price: $13</p>
            </div>
            <div class="food-content">
                <h2>Banana Crust</h2>
                <img class="img-content" src="../img/banana-crust.jpeg" alt="Image of toast topped with cherry tomatoes, boiled eggs and banana side dishes">
                <p>Price: $10</p>
            </div>
            </div>
            <div class="second-section">
            <h2 id="dinner">Dinner</h2>
            <img class="img-bg" src="" alt="">
            <div class="food-content">
                <h2>Grilled Chicken</h2>
                <img class="img-content" src="../img/grilled-chicken.jpeg" alt="Grilled chicken garnished with rocket leaves, lemon and spanish onion">
                <p>Price: $13</p>
            </div>
            </div>
            <div class="third-section">
            <h2 id="dinner">Drinks</h2>
            <img class="img-bg" src="../img/" alt="">
            <div class="food-content">
                <h2>Indigo Warrior</h2>
                <img class="img-content" src="../img/indigo-warrior.jpeg" alt="Berry smoothie blended with blueberries, strawberries and raspberries">
                <p>Price: $8</p>
            </div>
            <div class="food-content">
                <h2>Acai Smoothie</h2>
                <img class="img-content" src="../img/acai-smoothie.jpeg" alt="Smoothie jar mixed with chocolate goodness topped with nuts, acai berries, strawberries and kiwi">
                <p>Price: $10</p>
            </div>
            <div class="food-content">
                <h2>Watermelon Shake</h2>
                <img class="img-content" src="../img/watermelon-shake.jpeg" alt="Chilled watermelon smoothie blended in watermelon juice and ice">
                <p>Price: $8</p>
            </div>
            </div>
        </div>
    </main>
</body>
</html>
