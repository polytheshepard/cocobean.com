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
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/navigation.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300|Signikai|Lora" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script async src="https://use.fontawesome.com/d71358d53b.js"></script>
</head>
<body>
    <header>
<?php 
include 'main-navigation.php';
?>
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
                <img src="assets/img/menu/antipasti.jpg" alt="">
            </div>
            <div class="column">
                <img src="assets/img/menu/coffee-cup.jpg" alt="">
            </div>
            <div class="column">
                <img src="assets/img/menu/delivery.jpg" alt="">
            </div>
            <div class="column">
                <img src="assets/img/menu/cafe-booking.jpg" alt="">
            </div>
        </div>
    </main>
    <footer>
        Katies Truong 2018
    </footer>
    <script src="assets/js/nav-fade.js"></script>
    <script src="assets/js/nav-scroll.js"></script>
</body>
</html>
