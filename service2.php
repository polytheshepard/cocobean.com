<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
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
            </ul>
        </div>
        <h2 id="lunch">Lunch</h2>
        <h2 id="dinner">Dinner</h2>
    </main>
</body>
</html>
