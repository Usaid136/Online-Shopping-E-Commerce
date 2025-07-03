<?php
include "config.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product = [
        'product_id' => $_POST['product_id'],
        'product_name' => $_POST['product_name'],
        'product_image' => $_POST['product_image'],
        'product_price' => $_POST['product_price'],
        'product_quantity' => $_POST['product_quantity'],
        'product_description' => $_POST['product_description']
    ];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    $_SESSION['cart'][] = $product;
    header("Location: cart.php");
}
?>
