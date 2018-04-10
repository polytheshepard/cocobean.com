<?php
    session_start();
    $_SESSION['productTree']=$_POST['productTree'];
    header('Location: cart.php');
?>