<?php
    define(PID, $_GET['pid']);
    $valid_products = ['p1', 'p2', 'p3', 'p4', 'p5', 'p6', 'p7', 'p8', 'p9'];

    session_start();
    // initialising variables
    $firstname = $lastname = $email = $address = $number = $country = $city = $zip = $suburb = $shipping = $expiry = $card = '';

    // initialising error variables
    $firstnameErr = $lastnameErr = $addressErr = $countryErr = $cityErr = $cardErr = $expiryErr = $phoneErr = $shippingErr = $numberErr = $zipErr = $suburbErr = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $firstname = test_input($_POST['firstname']);
        $lastname = test_input($_POST['lastname']);
        $email = test_input($_POST['email']);
        $address = test_input($_POST['address']);
        $number = test_input($_POST['number']);
        $country = test_input($_POST['country']);
        $city = test_input($_POST['city']);
        $zip = test_input($_POST['zip']);
        $suburb = test_input($_POST['suburb']);
        $shipping = test_input($_POST['shipping']);
        $expiry = test_input($_POST['expiry']);
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Adds errors for required fields
    // initialise regex firstname and lastname
    $nameArray = '/([A-Za-z .,-])*/';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(empty($_POST['firstname'])) {
            $firstnameErr = 'Required Field'; 
        } else if (!preg_match($nameArray, $firstname)) {
            $firstnameErr = 'Invalid character';
        } else {
            $firstname = $_POST['firstname'];
        } 

        if(empty($_POST['lastname'])) {
            $lastnameErr = 'Required Field';
        } else if (!preg_match($nameArray, $lastname)) {
            $lastnameErr = 'Invalid character';
        } else {
            $lastname = $_POST['lastname'];
        }

        if(empty($_POST['email'])) {
            $emailErr = 'Required Field';
        } else {
            $email = $_POST['email'];
        } 

        // initialise regex address
        $addReg = '/([A-Za-z0-9 .,-\\\n])*/';
        if(empty($_POST['address'])) {
            $addressErr = 'Required Field'; 
        } else if(!preg_match($addReg, $address)) {
            $addressErr = 'Invalid character';
        } else {
            $address = $_POST['address'];
        }

        // initialise regex phone number expressions
        // 1st pattern accepts numbers like 0412 123 123 with only 10 digits
        // 2nd accepts numbers like 0411111111 and only accepts 10 digits
        // 3rd accepts numbers like (04) 0431 0232
        // 4th accepts numbers like (04)01231212
        // 5th accepts numbers like +614111111
        // 6th accepts numbers like +614 1111 1111
        $numArray = '/^(\Q04\E\d{2})(\s)(\d{3})(\s)(\d{3})$|^(\Q04\E\d{8})$|^(\Q(04)\E)(\s)(\d{4})(\s)(\d{4})$|^(\Q(04)\E)(\d{8})$|^(\Q+614\E)(\d{8})$|^(\Q+614\E)(\s)(\d{4})(\s)(\d{4})$/';
        if(empty($_POST['number'])) {
            $numberErr = 'Required Field';
        } else if(!preg_match($numArray, $number)) {
            $numberErr = 'Invalid Number';   
        } else {
            $number = $_POST['number'];
        } 

        if(empty($_POST['country'])) {
            $countryErr = 'Required Field';
        } else {
            $country = $_POST['country'];
        }

        if(empty($_POST['city'])) {
            $cityErr = 'Required Field';
        } else {
            $city = $_POST['city'];
        } 

        if(empty($_POST['zip'])) {
            $zipErr = 'Required Field';
        } else {
            $zip = $_POST['zip'];
        }

        if(empty($_POST['suburb'])) {
            $cityErr = 'Required Field';
        } else {
            $city = $_POST['suburb'];
        } 

        if(!isset($_POST['shipping'])) {
            $shippingErr = 'Required Field';
        } else {
            $shipping = $_POST['shipping'];
        } 

        
        //initialise expiry date to last month
        // Note unable to compare properly, might need to separate strings or numbers? Too unsure
    //    $lastMonth = date('m/d/y', strtotime(date('m/d/y') . ' -1 month'));
    //    $currentMonth = date('m/d/y', strtotime(date('m/d/y')));
    //    if(empty($_POST['expiry'])) {
    //        $expiryErr = 'Required Field';
    //     // if current month is larger than the last month
    //    } else if($currentMonth > $lastMonth) {
    //        $expiryErr = 'You cannot process your card since it is due to expire soon. Please try another time.';
    //     // if current month is less it should pass through
    //    } else if($currentMonth < $lastMonth){
    //        $expiry = $_POST['expiry'];
    //    }

       // clashes with javascript
        // // initialise card number for visa
        // // pattern matches numbers like 4123 4567 8901 2345
        // $visaNum = '/^(\Q4\E\d{3})(\s)(\d{4})(\s)(\d{4})(\s)(\d{4})$/';
        // if(empty($_POST['card'])) {
        //     $cardErr = 'Required Field';
        // } else if(!preg_match()) {
        //     $cardErr = 'Invalid card number';
        // } else {
        //     $card = $_POST['card'];
        // }
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, inital-scale=1">
    <title>Checkout</title>
    <link rel="stylesheet" type="text/css" href="checkout-style.css">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Montserrat:300|Signika" rel="stylesheet">
    <script src="https://use.fontawesome.com/d71358d53b.js"></script>
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
        <a href='cart.php'><input id='return-button' type='button' value='Return'></a>
        <h1>Checkout</h1>
        <!--htmlspecialchars protects against XSS attacks-->
        <form method='post' action='formprocessor.php'>
        <h2>Personal Details</h2>
        <label>Email <br>
            <input class='text-box' type='email' name='email' value='<?php echo htmlspecialchars($email)?>'>
        </label>
        <h2>Shipping Address</h2>
        <label>First Name <br>
            <input class='text-box' type='text' name='firstname' value='<?php echo htmlspecialchars($firstname); ?>'>
            <span class='error'>* <?php echo $firstnameErr; ?></span>
        </label> 
        <br>
        <label>Last Name <br>
            <input class='text-box' type='text' name='lastname'value='<?php echo htmlspecialchars($lastname)?>'>
            <span class='error'>* <?php echo $lastnameErr; ?></span>
        </label>
        <br>    
        <label>Address <br>
            <input class='text-box' type='text-area' name='address' value='<?php echo htmlspecialchars($address)?>'>
            <span class='error'>* <?php echo $addressErr; ?></span>
        </label>
        <br> 
        <label>Phone Number<br>
            <input class='text-box' type='tel' name='number' value='<?php echo htmlspecialchars($number)?>'>
            <span class='error'>* <?php echo $numberErr; ?></span>
        </label>
        <br>
        <label>Country <br>
            <input class='text-box' type='text' name='country' value='<?php echo htmlspecialchars($country)?>'>
            <span class='error'>* <?php echo $countryErr; ?></span>
        </label>
        <br>
        <label>City <br>
            <input class='text-box' type='text' name='city' value='<?php echo htmlspecialchars($city)?>'>
            <span class='error'>* <?php echo $cityErr; ?></span>
        </label>
        <br>
        <label>ZIP Code <br>
            <input class='text-box' type='text' name='zip' value='<?php echo htmlspecialchars($zip)?>'>
            <span class='error'>* <?php echo $zipErr; ?></span>
        </label>
        <br>
        <label>Suburb <br>
            <input class='text-box' type='text' name='suburb' value='<?php echo htmlspecialchars($suburb)?>'>
            <span class='error'>* <?php echo $suburbErr; ?></span>
        </label>
        <h2>Shipping Method</h2>
        <label>Standard <br>
            <input type='radio' name='shipping' value='standard'>
            <?php if (!isset($shipping) && $shipping = 'standard') echo 'Required';?>
            <br>
        Express <br>
            <input type='radio' name='shipping' value='express'>
            <?php if (!isset($shipping) && $shipping = 'express') echo 'Checked';?>
        </label>
        <h2>Payment Method</h2>
        <h3>Credit Card Details</h3>
        <label>
            Credit Card Number <br>
            <p>Card number should include 4 digits and spaces inbetween</p>
            <input class='text-box' type='text' name='card' oninput='checkRegrex()' id='checkNum' value='<?php echo htmlspecialchars($card)?>'>
            <img id='image-visa' src='../img/visa-logo.png'>
            <span class='error'>* <?php echo $cardErr; ?></span>
        </label>
        <br>
        <label> Name <br>
            <input class='text-box' type='text' name='username'>
            <span class='error'>* <?php echo $firstnameErr; ?></span>
        </label>
        <br>
        <label> Expiry Date <br>
            <input class='text-box' type='date' name='expiry' value='<?php echo htmlspecialchars($expiry)?>'>
            <span class='error'>* (mm/dd/yy)<?php echo $expiryErr; ?></span>
        </label>
        <a href='receipt.php'><input id='submit' type='submit' value='Finish Payment'></a>
    </form>
    </main>
</body>
<script src='visa-check-v2.js'></script>
<footer>
    <hr>
    Katies Truong 2018
</footer>
</html>