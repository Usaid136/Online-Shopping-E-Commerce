<?php
session_start();
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $contact_no = $_POST['contact_no'];
    $email = $_POST['email'];
    $shipping_address = $_POST['shipping_address'];
    $city = $_POST['city'];
    $payment_method = $_POST['payment_method'];
    
    // Insert customer details
    $sql = "INSERT INTO customers_info (full_name, contact_no, email, shipping_address, city, payment_method)
            VALUES ('$full_name', '$contact_no', '$email', '$shipping_address', '$city', '$payment_method')";
    $conn->query($sql);
    $customer_id = $conn->insert_id;

    // Place orders for all products in the cart
    $total_amount = 0;
    $total_products = count($_SESSION['cart']);

    foreach ($_SESSION['cart'] as $item) {
        $product_id = $item['product_id'];
        $product_name = $item['product_name'];
        $product_price = $item['product_price'];

        $total_amount += $product_price;

        // Generate unique 16-digit order ID
        $order_number = rand(10000000, 99999999);
        $order_id = sprintf('%07d%08d', $product_id, $order_number);

        // Insert order into the database
        $sql = "INSERT INTO orders_info (order_id, customer_id, product_id, product_name, total_products, total_amount)
                VALUES ('$order_id', '$customer_id', '$product_id', '$product_name', '$total_products', '$total_amount')";
        $conn->query($sql);
    }

    // Clear cart
    unset($_SESSION['cart']);

    // Redirect to order details page with popup message
    echo "<script>
        alert('Order placed successfully!');
        window.location.href='order_details.php?order_id=$order_id';
    </script>";
}
$conn->close();
?>
