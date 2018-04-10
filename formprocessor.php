<?php
    session_start();
    // retrieve post data into a variable to recall in receipt page
        $_SESSION['firstname'] = $_POST['firstname'];
        $_SESSION['lastname'] = $_POST['lastname'];
        $_SESSION['address'] = $_POST['address'];
        $_SESSION['city'] = $_POST['city'];
        $_SESSION['suburb'] = $_POST['suburb'];
        $_SESSION['zip'] = $_POST['zip'];
        $_SESSION['country'] = $_POST['country'];
        header('Location: receipt.php');
    ?>