-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 04, 2023 at 08:41 AM
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
  `name` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `quantity` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `deliver`
--

CREATE TABLE `deliver` (
  `deliverId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `farmer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `f_orders`
--

CREATE TABLE `f_orders` (
  `fOrderId` int(11) NOT NULL,
  `request_id` int(10) NOT NULL,
  `status` int(1) NOT NULL,
  `deliver_id` int(10) NOT NULL,
  `orderd_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `f_payment`
--

CREATE TABLE `f_payment` (
  `fPaymentId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `quantity` int(6) NOT NULL,
  `price` int(4) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `listed_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `description`, `quantity`, `price`, `image`, `listed_on`) VALUES
(4, 'Apple', ' Fresh Green Apples cheap price !!!!', 100, 30, 'green-apple-removebg-preview.png', '2023-02-10 00:12:01'),
(6, 'Banana', ' fresh!!!', 300, 120, 'v30_271.png', '2023-02-10 00:12:55'),
(9, 'Pinepple', ' !!!', 342, 80, 'v32_272.png', '2023-02-10 01:12:05'),
(12, 'Papaya', ' fresh!!!', 150, 100, 'v30_269.png', '2023-02-10 01:12:53'),
(18, 'butterfruit', ' fresh!!!', 366, 40, 'v35_276.png', '2023-02-10 11:37:50'),
(20, 'Wood Apple', ' fresh!!!', 400, 30, 'v34_275.png', '2023-02-10 13:26:35'),
(21, 'Garbage', ' fresh!', 458, 32, 'v28_91.png', '2023-02-16 11:40:57');

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
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`request_id`, `farmer_id`, `stock_id`, `quantity`, `price`, `f_name`, `total`, `s_name`, `status`) VALUES
(8, 3, 21, 100, 50, 'racshu', 5000, 'Wood Apple', 0),
(9, 3, 21, 100, 5, 'racshu', 5000, 'Wood Apple', 2),
(10, 3, 21, 100, 500, 'racshu', 5000, 'Wood Apple', 3),
(11, 3, 21, 200, 50, 'racshu', 5000, 'Wood Apple', 2),
(12, 3, 21, 200, 500, 'racshu', 5000, 'Wood Apple', 4),
(13, 3, 21, 100, 50, 'racshu', 5000, 'Wood Apple', 0),
(14, 3, 22, 100, 5, 'racshu', 500, 'Carrot', 2),
(15, 3, 24, 100, 10, 'racshu', 1000, 'Pineapple', 3);

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
(20, 'Apple', 200, 'IMG-644dff73d28be3.83110111.png', 'Pices', '2023-04-30 11:11:07'),
(21, 'Wood Apple', 150, 'IMG-644e029e285f69.09340202.png', 'Pices', '2023-04-30 11:24:38'),
(22, 'Carrot', 400, 'IMG-644e02adbc9669.16870832.png', 'Kg', '2023-04-30 11:24:53'),
(24, 'Pineapple', 1000, 'IMG-6450be41975316.93181863.png', 'Pices', '2023-05-02 13:09:45');

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
  `lane_1` varchar(40) NOT NULL,
  `lane_2` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL,
  `role` varchar(10) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `f_name`, `l_name`, `gender`, `phone`, `email`, `lane_1`, `lane_2`, `city`, `role`, `password`, `created_on`) VALUES
(1, 'Ahamed', 'Rujhan', 'Male', 775785129, 'manager@yieldmart.com', '148, Kal 3rd lane', 'karuvattukkal-02', 'Sammanthurai', 'Manager', '12345678', '2023-02-09 06:48:45'),
(3, 'Racshu', 'racshu', 'female', 123456789, 'farmer@yieldmart.com', 'ddd', 'dddd', 'ssss', 'Farmer', '12345678', '2023-02-09 06:49:50'),
(5, 'Ahamed', 'Rujhan', 'Male', 123456789, 'admin@yieldmart.com', '148, Kal 3rd lane', 'karuvattukkal-02', 'Sammanthurai', 'Admin', '12345678', '2023-02-09 07:11:18'),
(6, 'Ahamed', 'Rujhan', 'Male', 123456789, 'customer@yieldmart.com', '148, Kal 3rd lane', 'karuvattukkal-02', 'Sammanthurai', 'Customer', '12345678', '2023-02-09 07:23:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deliver`
--
ALTER TABLE `deliver`
  ADD PRIMARY KEY (`deliverId`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`farmer_id`);

--
-- Indexes for table `f_orders`
--
ALTER TABLE `f_orders`
  ADD PRIMARY KEY (`fOrderId`);

--
-- Indexes for table `f_payment`
--
ALTER TABLE `f_payment`
  ADD PRIMARY KEY (`fPaymentId`);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `deliver`
--
ALTER TABLE `deliver`
  MODIFY `deliverId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `farmer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `f_orders`
--
ALTER TABLE `f_orders`
  MODIFY `fOrderId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `f_payment`
--
ALTER TABLE `f_payment`
  MODIFY `fPaymentId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `request_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stock_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
