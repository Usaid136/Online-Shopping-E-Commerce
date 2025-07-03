<?php
include "config.php";
session_start();
if (!isset($_SESSION["admin_session"])) {
    echo "<script>
    window.location.href='admin_login.php';
    </script>";
    exit;
}

// Check if customer_id is set in the GET request
if (isset($_GET['customer_id'])) {
    $customer_id = $_GET['customer_id'];
} else {
    // If customer_id is not set, redirect to another page or show an error
    echo "<script>alert('Customer ID is missing!'); window.location.href='orders_list.php';</script>";
    exit;
}

// Fetch customer details
$query = "SELECT * FROM customers_info WHERE customer_id = $customer_id";
$result = mysqli_query($conn, $query);
$customer = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="css/Further_detail.css">
    <title>Admin - Order Details</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <?php include "sidebar.php"; ?>
        <!-- End of Sidebar -->

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="profile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <h1>Order Details</h1>
                        </div>
                    </div>

                    <h2>Customer Information</h2>
                    <p><strong>Name:</strong> <?php echo $customer['full_name']; ?></p>
                    <p><strong>Email:</strong> <?php echo $customer['email']; ?></p>
                    <p><strong>Contact No:</strong> <?php echo $customer['contact_no']; ?></p>
                    <p><strong>Shipping Address:</strong> <?php echo $customer['shipping_address']; ?></p>
                    <p><strong>City:</strong> <?php echo $customer['city']; ?></p>

                    <h2>Products Ordered</h2>
                    <table border="1">
                        <tr>
                            <th>Order ID</th>
                            <th>Product Name</th>
                            <th>Total Amount</th>
                            <th>Order Status</th>
                            <th>Order Date</th>
                            <th>Payment Method</th>
                        </tr>

                        <?php
                        // Fetch products for the customer
                        $query = "SELECT * FROM orders_info WHERE customer_id = $customer_id";
                        $result = mysqli_query($conn, $query);
                        foreach ($result as $product) {
                            echo "<tr>";
                            echo "<td>" . $product['order_id'] . "</td>";
                            echo "<td>" . $product['product_name'] . "</td>";
                            echo "<td>" . $product['total_amount'] . "</td>";
                            echo "<td>" . $product['order_status'] . "</td>";
                            echo "<td>" . $product['order_date'] . "</td>";
                            echo "<td>" . $product['payment_method'] . "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>

            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Vaccine 2024</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
</body>
</html>
