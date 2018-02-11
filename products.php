<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, inital-scale=1">
    <title>Shop</title>
    <link rel="stylesheet" type="text/css" href="products-style.css">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Montserrat|Signika" rel="stylesheet">
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
        <h1>Shop</h1>
        <!-- <select name="option">
            <option value="price"></option>
            <option value=""></option>
        </select> -->
        <!--Coffee Blends-->
        <div class="item-list">
          <div class="item">
              <div class="image-container">
                  <img src="../img/espresso-blend.png" alt="Image of Espresso blend coffee beans" class="image">
                  <a href="product6.php"><span class="overlay">
                      <span class="text">View</span>
                    </span>
                  </a>
              </div>
              <div class="item-description">
                  <h2 class="item-title">Espresso Blend</h2>
                  <p class="item-para">A flavoursome and nutty taste that comes as a common specialty for coffee artistry. This Espresso blend is specifically sourced
                  from Central America.</p>
                  <p class="item-para">Price: $13</p>
              </div>
          </div>
          <div class="item">
              <div class="image-container">
                  <img src="../img/columbia.png" alt="Image of a Columbian coffee beans" class="image">
                  <a href="product7.php"><span class="overlay">
                      <span class="text">View</span>
                    </span>
                  </a>
              </div>
              <div class="item-description">
                  <h2 class="item-title">Columbia</h2>
                  <p class="item-para">Residing from Columbia, this particular blend is mixed in a citrus-like flavour with a fruity tone with the coffee bean oils.</p>
                  <p class="item-para">Price: $15</p>
              </div>
          </div>
          <div class="item">
              <div class="image-container">
                  <img src="../img/africano.png" alt="Image of Africano coffee beans" class="image">
                  <a href="product8.php"><span class="overlay">
                      <span class="text">View</span>
                    </span>
                  </a>
              </div>
              <div class="item-description">
                  <h2 class="item-title">Africano</h2>
                  <p class="item-para">Wet pressed from Uganda, they consist of dark and rich aromas satisfying a stronger taste for coffee lovers.</p>
                  <p class="item-para">Price: $14 </p>
              </div>
          </div>
          <div class="item">
              <div class="image-container">
                  <img src="../img/fairtrade.png" alt="Image of Fairtrade coffee beans" class="image">
                  <a href="product9.php"><span class="overlay">
                      <span class="text">View</span>
                    </span>
                  </a>
              </div>
              <div class="item-description">
                  <h2 class="item-title">Fairtrade</h2>
                  <p class="item-para">Organically sourced from Peru, the ideal flavour is grown in the high altitudes of Peru.
                  It has a softer flavour and body with a gentler nutty flavour to its beans.</p>
                  <p class="item-para">Price: $15</p>
              </div>
          </div>
            <!--Tea Assortments-->
            <div class="item">
                <div class="image-container">
                    <img src="../img/earl-grey.png" alt="Earl Grey container" class="image">
                    <a href="product2.php"><span class="overlay">
                        <span class="text">View</span>
                      </span>
                    </a>
                </div>
                <div class="item-description">
                    <h2 class="item-title">Earl Grey</h2>
                    <p class="item-para">Black tea that is enriched with the oils from the bergamot orange rind.</p>
                    <p class="item-para">Price: $10</p>
                </div>
            </div>
            <div class="item">
                <div class="image-container">
                    <img src="../img/english-breakfast.png" alt="English Breakfast container" class="image">
                    <a href="product1.php"><span class="overlay">
                        <span class="text">View</span>
                      </span>
                    </a>
                </div>
                <div class="item-description">
                    <h2 class="item-title">English Breakfast</h2>
                    <p class="item-para">One of the most popular tea blends, most commonly associated with British tea culture. Its robust and rich black tea leaves
                        works well with milk and sugar.
                    </p>
                    <p class="item-para">Price: $10</p>
                </div>
            </div>
            <div class="item">
                <div class="image-container">
                    <img src="../img/chai-tea.png" alt="Chai Tea container" class="image">
                    <a href="product3.php"><span class="overlay">
                        <span class="text">View</span>
                    </a>
                </div>
                    <div class="item-description">
                    <h2 class="item-title">Chai Tea</h2>
                    <p class="item-para">Commonly known as masala chai that is black tea mixed with aromatic Indian
                        spices and herbs.</p>
                    <p class="item-para">Price: $12</p>
                </div>
            </div>
            <div class="item">
                <div class="image-container">
                    <img src="../img/oolong.png" alt="Oolong Tea goodness!" class="image">
                    <a href="product4.php"><span class="overlay">
                        <span class="text">View</span>
                      </span>
                    </a>
                </div>
                <div class="item-description">
                    <h2 class="item-title">Oolong</h2>
                    <p class="item-para">Traditional Chinese tea that is oxidised from sun heat. It consists both of
                        green and black tea leaves giving life-long health benefits.
                    </p>
                    <p class="item-para">Price: $12</p>
                </div>
            </div>
            <div class="item">
                <div class="image-container">
                    <img src="../img/darjeeling.png" alt="Have some Darjeeling" class="image">
                    <a href="product5.php"><span class="overlay">
                        <span class="text">View</span>
                      </span>
                    </a>
                </div>
                <div class="item-description">
                    <h2 class="item-title">Darjeeling</h2>
                    <p class="item-para">Darjeeling resides in the northern region of India. Famously known as "The Champagne Tea",
                        it consists of a combination of green, white and black tea leaves giving an exquisite taste. </p>
                    <p class="item-para">Price: $14</p>
                </div>
            </div>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
