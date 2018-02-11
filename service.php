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
    <link rel="stylesheet" type="text/css" href="service-style.css">
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
                    <li><a href="#">Contact</a></li>
                </ul>
         </nav>
    </header>
    <main>
        <!--Booking options start here-->
        <!--Note to self: will style more, specifically the background inputs to make it look intuitive and possibly add photoshopped background-->
            <div id="bookings-container">
                <h1 id="outline-text">Book a table</h1>
                <form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" method="post" onsubmit="return validateForm()">
                    <input type="hidden" name="id" value="b1">
                    <label> Choose a date
                        <br>
                        <input type="date" name="option" class="booking-box">
                    </label>
                    <br>
                    <label> Choose a booking time (opening hours 10AM to 6PM)
                        <br>
                        <input type="time" name="option" min="10:00" max="18:00" class="booking-box">
                    </label>
                    <br>
                    <label> Number of People
                        <br>
                    <select name="qty" class="booking-box">
                    <option value="group">Group Table (min. 4 people)</option>
                    <option value="gathering">Massive Gathering (min. 6 people)</option>
                    </select>
                    </label>
                    <br>
                    <input type="submit" value="Submit" class="submit-btn btn-block btn-primary">
                </form>
            </div>
    </main>
    <footer>
    </footer>
</body>
</html>
