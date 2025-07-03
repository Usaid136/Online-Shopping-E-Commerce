-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2024 at 07:46 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers_details`
--

CREATE TABLE `customers_details` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact_no` varchar(20) DEFAULT NULL,
  `shipping_address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers_details`
--

INSERT INTO `customers_details` (`customer_id`, `name`, `email`, `contact_no`, `shipping_address`) VALUES
(1, 'John Doe', 'john@example.com', '1234567890', '123 Street Name, City, Country'),
(2, 'Jane Smith', 'jane@example.com', '0987654321', '456 Another St, City, Country'),
(3, 'John Doe', 'john@example.com', '1234567890', '123 Street Name, City, Country'),
(4, 'Jane Smith', 'jane@example.com', '0987654321', '456 Another St, City, Country'),
(5, 'Doe', 'doe@example.com', '1234567890', '123 Street Name, City, Country');

-- --------------------------------------------------------

--
-- Table structure for table `customers_info`
--

CREATE TABLE `customers_info` (
  `customer_id` int(11) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `contact_no` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `shipping_address` text DEFAULT NULL,
  `payment_method` varchar(50) DEFAULT 'COD',
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers_info`
--

INSERT INTO `customers_info` (`customer_id`, `full_name`, `contact_no`, `email`, `shipping_address`, `payment_method`, `city`) VALUES
(1, 'usaid', '03300267892', 'usaid@gmail.com', 'Shah Latif', 'COD', '0'),
(2, 'usaid', '02578724851', 'admin@gmail.com', 'Shah Latif Town', 'COD', '0'),
(3, 'daniyal', '2231513', 'admin@gmail.com', 'shahlatif townl', 'COD', '0'),
(4, 'daniyal', '131111111115', 'admin@gmail.com', 'latif', 'COD', '0'),
(5, 'usaid', '10', 'user@email.com', 'shagfgfhhghg', '', '0'),
(6, 'daniyal', '022222234', 'admin@gmail.com', 'Shah Latif Town', '', '0'),
(7, 'usaid', '335555555555555', 'admin@gmail.com', 'Shah Latif town', '', 'karachi'),
(8, 'daniyal', '211111111111111', 'admin@gmail.com', 'Cattle Colony', '', 'karachi'),
(9, 'daniyal', '122222', 'user@email.com', 'haldh', '', 'karachi'),
(10, 'usaid', '', 'usaid@gmail.com', '', '', ''),
(11, 'usaid', '', 'usaid@gmail.com', '', '', ''),
(12, 'usaid', '03002645454', 'usaid@gmail.com', 'Shah Latif Town', '', 'karachi'),
(13, 'usaid', '03300626278', 'usaid@gmail.com', 'Cattle colony', '', 'karachi'),
(14, 'usaid', '03300262656', 'usaid@gmail.com', 'Shah Latif Town', '', 'karachi');

-- --------------------------------------------------------

--
-- Table structure for table `customer_login`
--

CREATE TABLE `customer_login` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_login`
--

INSERT INTO `customer_login` (`id`, `name`, `email`, `password`, `contact_no`, `Date`) VALUES
(1, 'usaid', 'usaid@gmail.com', 'usaid1234', 2147483647, '2024-09-29 18:16:21');

-- --------------------------------------------------------

--
-- Table structure for table `detail_customers`
--

CREATE TABLE `detail_customers` (
  `customer_id` int(11) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `latest_products`
--

CREATE TABLE `latest_products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_price_line` int(11) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_category` varchar(100) NOT NULL,
  `product_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `latest_products`
--

INSERT INTO `latest_products` (`id`, `product_name`, `product_price`, `product_price_line`, `product_description`, `product_category`, `product_img`) VALUES
(4, 'Best Bag', 1500, 0, 'Lorem ipsum dolor sit amet consectetur adipisicing.', 'Girls Bag', 'img/bags.avif'),
(5, 'School Bag', 1700, 0, 'Lorem ipsum dolor sit amet consectetur adipisicing.', 'Boys Bag', 'img/bag.jpeg'),
(6, 'Puma Shoes', 3500, 0, 'Lorem ipsum dolor sit amet consectetur adipisicing', 'Boys Footwear', 'img/shoes.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `new_orders`
--

CREATE TABLE `new_orders` (
  `order_id` bigint(16) UNSIGNED NOT NULL,
  `customer_id` int(11) UNSIGNED NOT NULL,
  `product_id` int(7) UNSIGNED NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders_info`
--

CREATE TABLE `orders_info` (
  `order_id` bigint(16) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `product_id` int(7) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `total_products` int(11) DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `order_status` enum('Pending','Shipped','Completed') DEFAULT 'Pending',
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `payment_method` varchar(255) NOT NULL DEFAULT 'COD(Cash On Delivery))'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders_new`
--

CREATE TABLE `orders_new` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `status` enum('New','Shipped','Completed') DEFAULT 'New',
  `order_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders_new`
--

INSERT INTO `orders_new` (`order_id`, `customer_id`, `status`, `order_date`) VALUES
(1, 1, 'Completed', '2024-09-16 06:08:28'),
(2, 2, 'Completed', '2024-09-16 06:08:28'),
(3, 1, 'Completed', '2024-09-16 06:12:37'),
(4, 4, 'Completed', '2024-09-17 07:46:06'),
(5, 5, 'Completed', '2024-09-17 08:26:28');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_detail_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_detail_id`, `order_id`, `category`, `product_id`, `product_name`, `quantity`) VALUES
(1, 1, 'electronics', 1, 'Smartphone', 2),
(2, 1, 'clothing', 1, 'T-shirt', 3),
(3, 2, 'stationery', 1, 'Notebook', 5),
(4, 1, 'electronics', 1, 'Smartphone', 2),
(5, 1, 'clothing', 1, 'T-shirt', 3);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin1234'),
(3, 'Riyan', 'opriyan1234@gmail.com', 'Riyan1234');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_boys_bags`
--

CREATE TABLE `tbl_boys_bags` (
  `product_id` int(7) UNSIGNED NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `category` varchar(255) NOT NULL DEFAULT 'Boys Bags',
  `product_price` int(11) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_quantity` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_boys_bags`
--

INSERT INTO `tbl_boys_bags` (`product_id`, `product_name`, `category`, `product_price`, `product_description`, `product_image`, `product_quantity`) VALUES
(1, 'Leather Bag', '', 2500, ' Lorem ipsum dolor sit amet consectetur adipisicing.', 'img/boy Bag1.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_boys_belt`
--

CREATE TABLE `tbl_boys_belt` (
  `product_id` int(7) UNSIGNED NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `category` varchar(255) NOT NULL DEFAULT 'Boys Belts',
  `product_price` int(11) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_quantity` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_boys_belt`
--

INSERT INTO `tbl_boys_belt` (`product_id`, `product_name`, `category`, `product_price`, `product_description`, `product_image`, `product_quantity`) VALUES
(1, 'Black Belt', '', 500, ' Lorem ipsum dolor sit amet consectetur adipisicing.', 'img/belt.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_boys_caps`
--

CREATE TABLE `tbl_boys_caps` (
  `product_id` int(7) UNSIGNED NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `category` varchar(255) NOT NULL DEFAULT 'Boys caps',
  `product_price` int(11) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_quantity` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_boys_caps`
--

INSERT INTO `tbl_boys_caps` (`product_id`, `product_name`, `category`, `product_price`, `product_description`, `product_image`, `product_quantity`) VALUES
(1, 'Brown Cap', 'Boys caps', 400, ' Lorem ipsum dolor sit amet consectetur adipisicing.', 'img/cap.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_boys_clothes`
--

CREATE TABLE `tbl_boys_clothes` (
  `product_id` int(7) UNSIGNED NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `category` varchar(255) NOT NULL DEFAULT 'Boys Clothes',
  `product_price` int(11) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_quantity` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_boys_clothes`
--

INSERT INTO `tbl_boys_clothes` (`product_id`, `product_name`, `category`, `product_price`, `product_description`, `product_image`, `product_quantity`) VALUES
(1, 'Black T-Shirt', '', 1200, ' Lorem ipsum dolor sit amet consectetur adipisicing.', 'img/boys clothes.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_boys_footwear`
--

CREATE TABLE `tbl_boys_footwear` (
  `product_id` int(7) UNSIGNED NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `category` varchar(255) NOT NULL DEFAULT 'Boys Footwear',
  `product_price` int(11) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_quantity` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_boys_footwear`
--

INSERT INTO `tbl_boys_footwear` (`product_id`, `product_name`, `category`, `product_price`, `product_description`, `product_image`, `product_quantity`) VALUES
(2, 'Nike Running Shoes', '', 7000, ' Lorem ipsum dolor sit amet consectetur adipisicing.', 'img/Boys footwear.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_boys_wallets`
--

CREATE TABLE `tbl_boys_wallets` (
  `product_id` int(7) UNSIGNED NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `category` varchar(255) NOT NULL DEFAULT 'Boys Wallets',
  `product_price` int(11) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_quantity` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_boys_wallets`
--

INSERT INTO `tbl_boys_wallets` (`product_id`, `product_name`, `category`, `product_price`, `product_description`, `product_image`, `product_quantity`) VALUES
(1, 'Wallet', '', 1200, ' Lorem ipsum dolor sit amet consectetur adipisicing.', 'img/wallets.avif', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_boys_watch`
--

CREATE TABLE `tbl_boys_watch` (
  `product_id` int(7) UNSIGNED NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `category` varchar(255) NOT NULL DEFAULT 'Boys Watch',
  `product_price` int(11) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_quantity` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_boys_watch`
--

INSERT INTO `tbl_boys_watch` (`product_id`, `product_name`, `category`, `product_price`, `product_description`, `product_image`, `product_quantity`) VALUES
(4, 'Black Watch', 'Watch', 1800, 'Lorem ipsum dolor sit amet consectetur adipisicing.', 'img/watchcat2.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_girls_bags`
--

CREATE TABLE `tbl_girls_bags` (
  `product_id` int(7) UNSIGNED NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `category` varchar(255) NOT NULL DEFAULT 'Girls Bags',
  `product_price` int(11) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_quantity` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_girls_bags`
--

INSERT INTO `tbl_girls_bags` (`product_id`, `product_name`, `category`, `product_price`, `product_description`, `product_image`, `product_quantity`) VALUES
(2, 'Bag Set', '', 4500, ' Lorem ipsum dolor sit amet consectetur adipisicing.', 'img/Bagscat.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_girls_clothes`
--

CREATE TABLE `tbl_girls_clothes` (
  `product_id` int(7) UNSIGNED NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `category` varchar(255) NOT NULL DEFAULT 'Girls Clothes',
  `product_price` int(11) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_quantity` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_girls_clothes`
--

INSERT INTO `tbl_girls_clothes` (`product_id`, `product_name`, `category`, `product_price`, `product_description`, `product_image`, `product_quantity`) VALUES
(2, 'Party Wear', '', 1500, ' Lorem ipsum dolor sit amet consectetur adipisicing.', 'img/boys clothes.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_girls_footwear`
--

CREATE TABLE `tbl_girls_footwear` (
  `product_id` int(7) UNSIGNED NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `category` varchar(255) NOT NULL DEFAULT 'Girls Footwear',
  `product_price` int(11) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_quantity` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_girls_footwear`
--

INSERT INTO `tbl_girls_footwear` (`product_id`, `product_name`, `category`, `product_price`, `product_description`, `product_image`, `product_quantity`) VALUES
(1, 'Girls Shoes', '', 4500, ' Lorem ipsum dolor sit amet consectetur adipisicing.', 'img/s-p1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_girls_wallets`
--

CREATE TABLE `tbl_girls_wallets` (
  `product_id` int(7) UNSIGNED NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `category` varchar(255) NOT NULL DEFAULT 'Girls Wallets',
  `product_price` int(11) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_quantity` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_girls_wallets`
--

INSERT INTO `tbl_girls_wallets` (`product_id`, `product_name`, `category`, `product_price`, `product_description`, `product_image`, `product_quantity`) VALUES
(1, 'Pink Wallet', '', 1200, ' Lorem ipsum dolor sit amet consectetur adipisicing.', 'img/walletcat2.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_girls_watch`
--

CREATE TABLE `tbl_girls_watch` (
  `product_id` int(7) UNSIGNED NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `category` varchar(255) NOT NULL DEFAULT 'Girls Watch',
  `product_price` int(11) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_quantity` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_girls_watch`
--

INSERT INTO `tbl_girls_watch` (`product_id`, `product_name`, `category`, `product_price`, `product_description`, `product_image`, `product_quantity`) VALUES
(2, 'Decent Watch', '', 2000, ' Lorem ipsum dolor sit amet consectetur adipisicing.', 'img/watchcat1.jpeg', 1),
(3, 'Simple Watch', '', 2200, ' Lorem ipsum dolor sit amet consectetur adipisicing.', 'img/watchcat1.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `uppcomming_products`
--

CREATE TABLE `uppcomming_products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_price_line` int(11) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_category` varchar(100) NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `product_quantity` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uppcomming_products`
--

INSERT INTO `uppcomming_products` (`id`, `product_name`, `product_price`, `product_price_line`, `product_description`, `product_category`, `product_img`, `product_quantity`) VALUES
(6, 'Shoes', 4500, 0, 'Lorem ipsum dolor sit amet consectetur adipisicing', 'Boys Shoes', 'img/p2.jpg', 1),
(7, 'Chain Watch', 2000, 0, 'Lorem ipsum dolor sit amet consectetur adipisicing.', 'Girls Watch', 'img/girls watch.jpeg', 1),
(8, 'Card Holder Wallet', 1400, 0, 'Lorem ipsum dolor sit amet consectetur adipisicing.', 'Boys Wallet', 'img/wallet.jpeg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customers_details`
--
ALTER TABLE `customers_details`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customers_info`
--
ALTER TABLE `customers_info`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_login`
--
ALTER TABLE `customer_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_customers`
--
ALTER TABLE `detail_customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latest_products`
--
ALTER TABLE `latest_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_orders`
--
ALTER TABLE `new_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `orders_info`
--
ALTER TABLE `orders_info`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `orders_new`
--
ALTER TABLE `orders_new`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_detail_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_boys_bags`
--
ALTER TABLE `tbl_boys_bags`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_boys_belt`
--
ALTER TABLE `tbl_boys_belt`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_boys_caps`
--
ALTER TABLE `tbl_boys_caps`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_boys_clothes`
--
ALTER TABLE `tbl_boys_clothes`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_boys_footwear`
--
ALTER TABLE `tbl_boys_footwear`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_boys_wallets`
--
ALTER TABLE `tbl_boys_wallets`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_boys_watch`
--
ALTER TABLE `tbl_boys_watch`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_girls_bags`
--
ALTER TABLE `tbl_girls_bags`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_girls_clothes`
--
ALTER TABLE `tbl_girls_clothes`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_girls_footwear`
--
ALTER TABLE `tbl_girls_footwear`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_girls_wallets`
--
ALTER TABLE `tbl_girls_wallets`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_girls_watch`
--
ALTER TABLE `tbl_girls_watch`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `uppcomming_products`
--
ALTER TABLE `uppcomming_products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers_details`
--
ALTER TABLE `customers_details`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customers_info`
--
ALTER TABLE `customers_info`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `customer_login`
--
ALTER TABLE `customer_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `detail_customers`
--
ALTER TABLE `detail_customers`
  MODIFY `customer_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `latest_products`
--
ALTER TABLE `latest_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders_new`
--
ALTER TABLE `orders_new`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_boys_bags`
--
ALTER TABLE `tbl_boys_bags`
  MODIFY `product_id` int(7) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_boys_belt`
--
ALTER TABLE `tbl_boys_belt`
  MODIFY `product_id` int(7) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_boys_caps`
--
ALTER TABLE `tbl_boys_caps`
  MODIFY `product_id` int(7) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_boys_clothes`
--
ALTER TABLE `tbl_boys_clothes`
  MODIFY `product_id` int(7) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_boys_footwear`
--
ALTER TABLE `tbl_boys_footwear`
  MODIFY `product_id` int(7) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_boys_wallets`
--
ALTER TABLE `tbl_boys_wallets`
  MODIFY `product_id` int(7) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_boys_watch`
--
ALTER TABLE `tbl_boys_watch`
  MODIFY `product_id` int(7) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_girls_bags`
--
ALTER TABLE `tbl_girls_bags`
  MODIFY `product_id` int(7) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_girls_clothes`
--
ALTER TABLE `tbl_girls_clothes`
  MODIFY `product_id` int(7) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_girls_footwear`
--
ALTER TABLE `tbl_girls_footwear`
  MODIFY `product_id` int(7) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_girls_wallets`
--
ALTER TABLE `tbl_girls_wallets`
  MODIFY `product_id` int(7) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_girls_watch`
--
ALTER TABLE `tbl_girls_watch`
  MODIFY `product_id` int(7) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `uppcomming_products`
--
ALTER TABLE `uppcomming_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`);

--
-- Constraints for table `orders_info`
--
ALTER TABLE `orders_info`
  ADD CONSTRAINT `orders_info_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers_info` (`customer_id`);

--
-- Constraints for table `orders_new`
--
ALTER TABLE `orders_new`
  ADD CONSTRAINT `orders_new_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers_details` (`customer_id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders_new` (`order_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
