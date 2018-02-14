<?php
    session_start();

    $product_list = ['p1', 'p2', 'p3', 'p4', 'p5', 'p6', 'p7', 'p8', 'p9']; 
    define(PID, $_GET['pid']);

    // if not valid product
    if (!isset ($_GET['pid']) || !in_array(PID, $product_list, true)) {
        header('Location: products.php');
    }
   
    // set an array
    $productTree = array (
        'p1' => array (
            'productTitle' => 'English Breakfast',
            'imageSource' => '../img/english-breakfast.png',
            'imageAlt' => 'Earl Grey container',
            'productDescription' => 'One of the most popular tea blends, most commonly as British tea. Its robust and rich black tea leaves
            works well with milk and sugar.',
            'price' => 10,
            'options' => array (
                'tea1' => 'Black',
                'tea2' => 'Green',
                'tea3' => 'White'
            )
        ),
        'p2' => array (
            'productTitle' => 'Earl Grey',
            'imageSource' => '../img/earl-grey.png',
            'imageAlt' => 'Earl Grey container',
            'productDescription' => 'Black tea that is enriched with the oils from the bergamot orange rind.',
            'price' => 10,
            'options' => array (
                'tea1' => 'Black',
                'tea2' => 'Green',
                'tea3' => 'White'
            )
        ),
        'p3' => array (
            'productTitle' => 'Chai Tea',
            'imageSource' => '../img/chai-tea.png',
            'imageAlt' => 'Chai Tea container',
            'productDescription' => 'Commonly known as masala chai, it is black tea mixed with aromatic Indian spices and herbs.',
            'price' => 12,
            'options' => array (
                'tea1' => 'Black',
                'tea2' => 'Green',
                'tea3' => 'White'
            )
        ),
        'p4' => array (
            'productTitle' => 'Oolong',
            'imageSource' => '../img/oolong.png',
            'imageAlt' => 'Oolong Tea goodness!',
            'productDescription' => 'Traditional Chinese tea that is oxidised from sun heat. It consists both of green and black tea leaves giving life-long health benefits.',
            'price' => 12,
            'options' => array (
                'tea1' => 'Black',
                'tea2' => 'Green',
                'tea3' => 'White'
            )
        ),
        'p5' => array (
            'productTitle' => 'Darjeeling',
            'imageSource' => '../img/darjeeling.png',
            'imageAlt' => 'Darjeeling tea container',
            'productDescription' => 'Darjeeling resides in the northern region of India. Famously known as "The Champagne Tea", 
            it consists of a combination of green, white and black tea leaves
            giving an exquisite taste.',
            'price' => 14,
            'options' => array (
                'tea1' => 'Black',
                'tea2' => 'Green',
                'tea3' => 'White'
            )
        ),
        'p6' => array (
            'productTitle' => 'Espresso Blend',
            'imageSource' => '../img/espresso-blend.png',
            'imageAlt' => 'Image of Espresso blend coffee beans',
            'productDescription' => 'A flavoursome and nutty taste that comes as a common specialty for coffee artistry. This Espresso blend is specifically sourced from Central America.',
            'price' => 13,
            'options' => array (
                'co1' => 500,
                'co2' => 1000
            )
        ),
        'p7' => array (
            'productTitle' => 'Espresso Blend',
            'imageSource' => '../img/espresso-blend.png',
            'imageAlt' => 'Image of Espresso blend coffee beans',
            'productDescription' => 'A flavoursome and nutty taste that comes as a common specialty for coffee artistry. This Espresso blend is specifically sourced from Central America.',
            'price' => 13,
            'options' => array (
                'co1' => 500,
                'co2' => 1000
            )
        ),
        'p8' => array (
            'productTitle' => 'Africano',
            'imageSource' => '../img/africano.png',
            'imageAlt' => 'Image of Africano coffee beans',
            'productDescription' => 'Wet pressed from Uganda, these beans consist of dark and rich aromas satisfying a stronger taste for coffee lovers.',
            'price' => 14,
            'options' => array (
                'co1' => 500,
                'co2' => 1000
            )
        ),
        'p9' => array (
            'productTitle' => 'Fairtrade',
            'imageSource' => '../img/fairtrade.png',
            'imageAlt' => 'Image of Fairtrade coffee beans',
            'productDescription' => 'Organically sourced from Peru, the ideal flavour is grown in the high altitudes of Peru. It has a softer flavour and a gentler body giving its nutty flavour in its beans.',
            'price' => 15,
            'options' => array (
                'co1' => 500,
                'co2' => 1000
            )
        )    
    );

    if (!isset($_SESSION['productTree'])) {
        $fp = fopen('products.csv', "r");
        flock($fp, LOCK_SH);
        $headings = fgetcsv($fp);
        while($readALine = fgetcsv($fp)) {
            $count = count($readALine);
            for($i=2; $i<$count;$i++) {
                $_SESSION['productTree'][$readALine[0]][$readALine[1]][$headings[$i]]=$readALine[$i];
            }
        }
        flock($fp, LOCK_UN);
        fclose($fp);
    }

    // set and add into cart
    if (isset($_POST["add-item"])) {
        $_SESSION['cart']=$_POST;
    } else if (isset($_POST["edit-item"])) {
        $_SESSION['cart'][]=$_POST;
    } else if (isset($_POST["remove-item"])) {
        unset ($_SESSION['cart']);
    }
    
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
        <h2><?php echo $productTree[PID]['productTitle']; ?></h2>
        <img src="<?php echo $productTree[PID]['imageSource']; ?>" alt="imageAlt" class="image">
        <div class="product-container">
            <p>Price: <?php echo " \${$productTree[PID]['price']}"; ?></p>
            <p class="product-description"><?php echo $productTree[PID]['productDescription']; ?></p>
            <p><strong>Caffeine:</strong> 42mg/per 236ml</p>
            <br>
            <p><strong>Caffeine Level:</strong> Moderate</p>
            <div class="caffeine-bar">
                <div class="filled-caffeine-moderate">
                </div>
            </div>
            <form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=product" method="post">
            <input type="hidden" name="id" value="p1">
            <div class="tea-options">
                <label> Leaves type
                <select name="<?php echo PID.'-opt'?>"][options] class="tea-box">
                    <option value="black"><?php echo $productTree[PID]['options']['tea1']; ?></option>
                    <option value="green"><?php echo $productTree[PID]['options']['tea2']; ?></option>
                    <option value="white"><?php echo $productTree[PID]['options']['tea3']; ?></option>
                </select>
                </label>
            </div>
            <div class="quantity-box">
                <input type="button" class="decrease" name="qty" value="-" onclick="minus()">
                <input type="number" class="product-amount" id="pid" name="<?php echo PID.'-qty'?>" value="0" min="0">
                <input type="button" class="increase" name="qty" value="+" onclick="plus()">
            </div>
            <input type="submit" name="add-item" class="add-button" value="Add">
            <p><strong>Subtotal<strong><p>
                <span class="subtotal-result"></span>
            </form>
        </div>
    </main>
    <footer>
    </footer>
    <?php
        include_once("/home/eh1/e54061/public_html/wp/debug.php");
    ?>
</body>
<script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>  
<script src="calculate.js"></script>
<script src="update-cost.js"></script>
</html>

