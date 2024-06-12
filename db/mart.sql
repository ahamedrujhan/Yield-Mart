-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 09, 2023 at 09:28 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mart`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `number` int(11) NOT NULL,
  `method` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL,
  `total_products` varchar(500) NOT NULL,
  `total_price` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ordered_on` datetime NOT NULL,
  `delivered_on` datetime DEFAULT NULL,
  `status` int(11) NOT NULL COMMENT '0-placed,1-assign 2-process, 3-delivered, 4-failed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `name`, `number`, `method`, `address`, `total_products`, `total_price`, `user_id`, `ordered_on`, `delivered_on`, `status`) VALUES
(27, 'aa', 775785129, 'cash on delivery', '148, kal3rd lane', 'Apple (1) , Banana (1) , Pinepple (1) ', 240, 6, '2023-05-08 15:37:30', '2023-05-08 19:16:40', 3),
(28, 'ruju', 775785129, 'cash on delivery', '1234', 'Apple (1) , Banana (1) , Pinepple (1) ', 240, 6, '2023-05-08 17:55:21', '2023-05-09 10:21:40', 3),
(29, 't2', 775785129, 'cash on delivery', '124', 'Papaya (1) , Banana (1) , Wood Apple (1) ', 250, 6, '2023-05-08 17:55:56', NULL, 4),
(30, 't3', 755, 'credit card', '233', 'Apple (1) , Pinepple (1) , butterfruit (2) ', 200, 6, '2023-05-08 18:01:34', NULL, 0),
(31, 't3', 775785129, 'credit card', '123', 'Banana (1) , Pinepple (1) , butterfruit (1) ', 240, 6, '2023-05-08 18:02:07', NULL, 4),
(32, 'ruju', 775785129, 'credit card', '123', 'butterfruit (7) ', 280, 6, '2023-05-08 18:19:07', NULL, 4);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` int(6) NOT NULL,
  `price` int(4) NOT NULL,
  `type` varchar(10) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `listed_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `quantity`, `price`, `type`, `image`, `listed_on`) VALUES
(4, 'Apple', 127, 40, 'Kg', 'green-apple-removebg-preview.png', '2023-02-10 00:12:01'),
(6, 'Banana', -4, 120, 'Pices', 'v30_271.png', '2023-02-10 00:12:55'),
(9, 'Pinepple', -4, 80, '', 'v32_272.png', '2023-02-10 01:12:05'),
(12, 'Papaya', 0, 100, '', 'v30_269.png', '2023-02-10 01:12:53'),
(18, 'butterfruit', 356, 40, '', 'v35_276.png', '2023-02-10 11:37:50'),
(20, 'Wood Apple', 495, 30, '', 'v34_275.png', '2023-02-10 13:26:35');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `request_id` int(10) NOT NULL,
  `farmer_id` int(10) NOT NULL,
  `stock_id` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` int(5) NOT NULL,
  `f_name` varchar(225) NOT NULL,
  `total` int(10) NOT NULL,
  `s_name` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `requested_on` datetime DEFAULT NULL,
  `handovered_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`request_id`, `farmer_id`, `stock_id`, `quantity`, `price`, `f_name`, `total`, `s_name`, `status`, `requested_on`, `handovered_on`) VALUES
(8, 3, 21, 100, 50, 'racshu', 5000, 'Wood Apple', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 3, 21, 100, 5, 'racshu', 5000, 'Wood Apple', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 3, 21, 100, 500, 'racshu', 5000, 'Wood Apple', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 3, 21, 200, 50, 'racshu', 5000, 'Wood Apple', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 3, 21, 200, 500, 'racshu', 5000, 'Wood Apple', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 3, 21, 100, 50, 'racshu', 5000, 'Wood Apple', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 3, 22, 100, 5, 'racshu', 500, 'Carrot', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 3, 24, 100, 10, 'racshu', 1000, 'Pineapple', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 3, 22, 13, 13, 'racshu', 169, 'Carrot', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 3, 20, 100, 20, 'racshu', 2000, 'Apple', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 3, 20, 100, 20, 'racshu', 2000, 'Apple', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 3, 21, 12, 20, 'racshu', 240, 'Wood Apple', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 3, 21, 12, 20, 'racshu', 240, 'Wood Apple', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 10, 20, 30, 30, ' Shafi', 900, 'Apple', 4, NULL, NULL),
(22, 3, 21, 10, 10, 'racshu', 100, 'Wood Apple', 0, '2023-05-09 10:10:48', '2023-05-18 00:00:00'),
(23, 3, 21, 20, 20, 'racshu', 400, 'Wood Apple', 1, '2023-05-09 10:10:59', '2023-05-20 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stock_id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `quantity` int(6) NOT NULL,
  `image` varchar(200) NOT NULL,
  `type` varchar(10) NOT NULL,
  `listed_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stock_id`, `name`, `quantity`, `image`, `type`, `listed_on`) VALUES
(20, 'Apple', 70, 'IMG-644dff73d28be3.83110111.png', 'Pices', '2023-04-30 11:11:07'),
(21, 'Wood Apple', 238, 'IMG-644e029e285f69.09340202.png', 'Pices', '2023-04-30 11:24:38'),
(22, 'Carrot', 287, 'IMG-644e02adbc9669.16870832.png', 'Kg', '2023-04-30 11:24:53'),
(24, 'Pineapple', 1000, 'IMG-6450be41975316.93181863.png', 'Pices', '2023-05-02 13:09:45'),
(27, 'Banana', 1200, 'IMG-6454eba41bcdf1.53061447.png', 'Kg', '2023-05-05 17:12:28'),
(30, 'coconut', 1000, 'IMG-6457c58f413808.41604998.png', 'Pices', '2023-05-07 21:06:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(6) NOT NULL,
  `f_name` varchar(40) NOT NULL,
  `l_name` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `role` varchar(10) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `created_on` datetime NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `f_name`, `l_name`, `gender`, `phone`, `email`, `address`, `role`, `password`, `created_on`, `status`) VALUES
(1, 'Ahamed', 'Rujhan', 'Male', 775785129, 'manager@yieldmart.com', 'Sammanthurai', 'Manager', '12345678', '2023-02-09 06:48:45', 0),
(3, 'Racshu', 'racshu', 'female', 123456789, 'farmer@yieldmart.com', 'ssss', 'Farmer', '12345678', '2023-02-09 06:49:50', 0),
(5, 'Ahamed', 'Rujhan', 'Male', 123456789, 'admin@yieldmart.com', 'Sammanthurai', 'Admin', '12345678', '2023-02-09 07:11:18', 0),
(6, 'Ahamed', 'Rujhan', 'Male', 123456789, 'customer@yieldmart.com', 'Sammanthurai', 'Customer', '12345678', '2023-02-09 07:23:34', 0),
(7, 'laxshan', 'laxshan', 'male', 754637, 'deliver@yieldmart.com', 'Sammanthurai', 'Deliver', '12345678', '2023-05-08 18:27:24', 0),
(10, ' Aiman', ' Shafi', 'male', 775785129, 'aimanr@yieldmart.com', '148, kal3rd lane', 'Farmer', '12345678', '2023-05-09 03:26:32', 1),
(11, ' Aiman', ' Shafi', 'male', 775785129, 'ruju@yieldmart.com', '148, kal3rd lane', 'Customer', '12345678', '2023-05-09 12:38:28', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `request_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stock_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
