<!--Note Coffee products are not included within the cart array, the tea products are the only items so far that are processed 
and only applies for the first element, black tea -->
<?php
    require_once 'core/init.php';
    
    $sql_coffee = "SELECT * FROM products WHERE categories = 1 ORDER BY id ASC";
    $products = $db->query($sql_coffee);

    $sql_tea = "SELECT * FROM products WHERE categories = 2 ORDER BY id ASC";
    $products_2 = $db->query($sql_tea);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, inital-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/navigation.css">
    <link rel="stylesheet" type="text/css" href="assets/css/shop-style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Sorts+Mill+Goudy" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <title>Shop</title>
</head>
<body>
    <header>
         <?php
         include 'navigation.php'; 
         ?>
    </header>
    <main>
    <div class="container">
        <img id="image-banner"src="assets/img/menu/coffee-art.jpg">
        <h1 id="title" class="title-name">Shop</h1>
        <h1 id="coffee-tea-title" class="title-name">Coffee<span id="serif-font">&</span>Tea</h1>
    </div>
        <!--Coffee Blends-->
        <div class="item-list">
        <?php while($p_coffee = mysqli_fetch_assoc($products)) : ?>
          <div class="item">
              <div class="image-container">
                  <img src="<?= $p_coffee['image']?>" alt="Image of Espresso blend coffee beans" class="image-item">
                  <a href="product6.php?pid=p6"><span class="overlay">
                      <span class="text">View</span>
                    </span>
                  </a>
              </div>
              <div class="item-description">
                  <h2 class="item-title"><?= $p_coffee['title']; ?></h2>
                  <p class="item-para"><?= $p_coffee['description']; ?></p>
                  <p class="item-para">Price: $<?= $p_coffee['price']; ?></p>
              </div>
          </div>
        <?php endwhile; ?>
            <!--Tea Assortments-->
            <?php while($p_tea = mysqli_fetch_assoc($products_2)): ?>
            <div class="item">
                <div class="image-container">
                    <img src="<?= $p_tea['image']; ?>" alt="Earl Grey container" class="image-item">
                    <a href="product2.php?pid=p2"><span class="overlay">
                        <span class="text">View</span>
                      </span>
                    </a>
                </div>
                <div class="item-description">
                    <h2 class="item-title"><?= $p_tea['title']; ?></h2>
                    <p class="item-para"><?= $p_tea['description']; ?></p>
                    <p class="item-para">Price: $<?= $p_tea['price']; ?></p>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </main>
    <footer>
        <hr>
        Katies Truong 2018
    </footer>
    <script src="assets/js/nav-fade.js"></script>
    <script src="assets/js/nav-scroll.js"></script>
</body>
</html>
