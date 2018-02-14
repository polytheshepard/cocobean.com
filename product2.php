<?php session_start();?>
<?php
    // At the top of the page there's an error code indicating that there's a "Use of undefined constant of PID"
    define(PID, $_GET['pid']);
    $product_list = ['p1', 'p2', 'p3', 'p4', 'p5', 'p6', 'p7', 'p8', 'p9'];
    
    if (!isset($_GET['pid']) || !in_array(PID, $product_list,true)) {
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

     // helps with debugging
     function preShow($var) {
        echo "<pre>";
        print_r($var);
        echo "</pre>";
    }

     if (isset($_POST['pid'])) {
         if (in_array($_POST['pid'], $product_list, true)) {
             $_SESSION['cart'][$_POST['pid']][$_POST['oid']]=$_POST['qty'];
             preShow($_SESSION['cart']);
             // redirects to cart when user presses add button
            //  header('Location: cart.php');
         } else {
             header('Location: products.php');
         }
     }

    // runs through array of productTree in new session
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
        <a href="products.php"><input type="button" class="return-button" value="Return"></a>
        <h2><?php echo $_SESSION['productTree'][PID]['productTitle']; ?></h2>
        <img src='<?php echo $_SESSION['productTree'][PID]['imageSource']; ?>' alt='imageAlt' class="image">
        <div class="product-container">
            <p>Price: <?php echo " \${$_SESSION['productTree'][PID]['price']}"; ?></p>
            <p class="product-description"><?php echo $_SESSION['productTree'][PID]['productDescription']; ?></p>
            <p><strong>Caffeine Level:</strong> Moderate</p>
            <div class="caffeine-bar">
                <div class="filled-caffeine-moderate">
                </div>
            </div>
            <p><strong>Caffeine:</strong> 42mg/per 236ml</p>
            <form action='product2.php?pid=".PID."' method='post'>
            <input type="hidden" name="pid" value='<?php echo $p2; ?>'>
            <div class="tea-options">
                <label> Leaves type
                <select name="<?php echo PID.'-opt'?>"][options] class="tea-box">
                    <option value="black">Black</option>
                    <option value="green">Green</option>
                    <option value="white">White</option>
                </select>
                </label>
            </div>
            <div class="quantity-box">
                <input type="button" class="decrease" name="qty" value="-" onclick="minus()">
                <input type="number" class="product-amount" id="pid" name="<?php echo PID.'-qty'?>" value="0" min="0">
                <input type="button" class="increase" name="qty" value="+" onclick="plus()">
            </div>
            <input type="submit" class="add-button" value="Add">
            </form>
            <?php
            if (isset($_POST['productTitle'])) {
                $product_list = $_POST['productTitle'];
            }
            

                foreach ($_SESSION['productTree'][PID] as $oid => $oDesc) {
                    echo "[option value='$oid'][$oDesc]<br>";
                }
                    echo "Price: \${$_SESSION['productTree']['price']}";

                    foreach($_SESSION['productTree'][PID] as $oid => $details) {
                        echo "
                            <article class='topoptiontile'><h2>{$details['Title']}</h2>
                            <img src='../img/".PID."-$oid.png' alt='Image of {$details['Title']} />{$details['Product Description']}
                            <p>Price: \${$details['Price']}</p>
                            <form action='product2.php?pid=".PID."' method='post'>
                                <input type='text' name='qty' pattern='[1-9][0-9]*' required value=1 title='Positive Integers Only'>
                                <button name='buy' value='".PID."'>Buy Me Now</button>
                                <input type='hidden' name='oid' value='$oid'>
                            </form>";
                    }
            ?>
        </div>
    </main>
    <footer>
        Katies Truong s3671053
        <br>
        <a target="_blank" href="products.csv">Products CSV</a>
    </footer>
    <?php
        include_once("/home/eh1/e54061/public_html/wp/debug.php");
    ?>
</body>
<script src="calculate.js"></script>
</html>
