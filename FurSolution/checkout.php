<?php
session_start();

if (isset($_SESSION["shopping_cart"])) {
    // Clear the shopping cart session
    unset($_SESSION["shopping_cart"]);

    // Redirect to spayment.php
    header("Location: shop1.php");
    exit(); // Ensure that no further code is executed after the redirect
}
?>
