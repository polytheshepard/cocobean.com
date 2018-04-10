<?php
    session_start();

    // if empty empty we set the cart
    // stores the array of what is added into cart.
    if (empty($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    array_push($_SESSION['cart'], $_GET['pid']);
?>
<h1>Product was successfully added to your cart.</h1>
<a href='cart.php'>View Shopping Cart</a>