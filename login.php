<?php
    //initialising variables
    $email = "";
    $password = "";
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
