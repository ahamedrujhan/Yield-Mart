-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 25, 2023 at 08:09 AM
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
-- Database: `cart`
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
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(225) NOT NULL,
  `name` text NOT NULL,
  `number` text NOT NULL,
  `address` text NOT NULL,
  `method` varchar(200) NOT NULL,
  `total_products` varchar(200) NOT NULL,
  `total_price` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `number`, `address`, `method`, `total_products`, `total_price`) VALUES
(8, 'aa', '12', 'aa', 'credit card', 'PineApple (2) , Leaks (1) , Carrot (1) ', '1000'),
(9, 'aa', '12', 'aa', 'cash on delivery', 'PineApple (2) , Leaks (1) , Carrot (1) ', '1000'),
(10, 'aa', '12', 'aa', 'cash on delivery', 'PineApple (2) , Leaks (1) , Carrot (1) ', '1000'),
(11, 'a', '0', 'a', 'credit card', 'PineApple (2) , Leaks (1) , Carrot (1) ', '1000'),
(12, 'a', 'a', 'a', 'cash on delivery', 'PineApple (2) , Leaks (1) , Carrot (1) ', '1000'),
(13, 'a', 'a', 'a', 'cash on delivery', 'PineApple (2) , Leaks (1) , Carrot (1) ', '1000'),
(14, 'a', 'a', 'a', 'cash on delivery', 'PineApple (2) , Leaks (1) , Carrot (1) ', '1000'),
(15, 'a', 'a', 'a', 'credit card', 'PineApple (2) , Leaks (1) , Carrot (1) ', '1000'),
(16, 'aa', 'aaa', 'aa', 'credit card', 'PineApple (2) , Leaks (1) , Carrot (1) ', '1000'),
(17, 'aa', 'aa', 'aa', 'cash on delivery', 'PineApple (2) , Leaks (1) , Carrot (1) ', '1000'),
(18, 'aa', 'aa', 'aa', 'credit card', 'PineApple (2) , Leaks (1) , Carrot (1) ', '1000'),
(19, 'aa', '00', 'aa', 'cash on delivery', 'PineApple (2) , Leaks (1) , Carrot (1) ', '1000'),
(20, 'qq', '0', 'qq', 'credit card', 'PineApple (2) , Leaks (1) , Carrot (1) ', '1000'),
(21, 'aa', '000', 'aa', 'cash on delivery', 'PineApple (2) , Leaks (1) , Carrot (1) , BeatRoot (1) ', '1500'),
(22, 'aa', '000', 'aa', 'cash on delivery', 'PineApple (2) , Leaks (1) , Carrot (1) , BeatRoot (1) ', '1500'),
(23, 'aa', '00', 'aa', 'credit card', 'PineApple (2) , Leaks (1) , Carrot (1) , BeatRoot (1) ', '1500'),
(24, 'a', '0', 'a', 'cash on delivery', 'PineApple (2) , Leaks (1) , Carrot (1) ', '1000'),
(25, 'aa', '00', 'aa', 'cash on delivery', 'Leaks (1) , Carrot (1) , Papaya (1) ', '660'),
(26, 'aa', '00', 'a', 'cash on delivery', 'Leaks (1) , Carrot (1) , Papaya (1) ', '660'),
(27, 'a', '0', 'a', 'cash on delivery', 'Leaks (1) , Carrot (1) , Papaya (1) ', '660'),
(28, 'a', '0', 'a', 'cash on delivery', 'Leaks (1) , Carrot (1) , Papaya (1) ', '660'),
(29, 'aa', 'aa', 'aa', 'cash on delivery', 'Leaks (1) , Carrot (1) , Papaya (1) ', '660'),
(30, 'aa', 'aa', 'aa', 'cash on delivery', 'Leaks (1) , Carrot (1) , Papaya (1) ', '660'),
(31, 'aa', 'aa', 'aa', 'cash on delivery', 'Leaks (1) , Carrot (1) , Papaya (1) ', '660'),
(32, 'a', '0', 'a', 'cash on delivery', 'BeatRoot (1) , Carrot (1) , Leaks (1) ', '1100'),
(33, 'vv', 'vv', 'bb', 'cash on delivery', 'BeatRoot (1) , Carrot (1) ', '700'),
(34, 'aa', '0775785129', '148, kal3rd lane', 'cash on delivery', 'BeatRoot (3) , Carrot (3) ', '601'),
(35, 'aa', '0775785129', '148, kal3rd lane', 'cash on delivery', 'Carrot (1) , BeatRoot (1) , Leaks (1) ', '1100'),
(36, 'aa', '0775785129', '148, kal3rd lane', 'cash on delivery', 'Carrot (1) , Leaks (1) ', '600'),
(37, 'a', 'ss', 'ss', 'credit card', 'Mango (1) , Pinepple (1) ', '130'),
(38, 'aa', '0775785129', '148, kal3rd lane', 'credit card', 'Mango (1) , Pinepple (1) , Banana (1) ', '250'),
(39, 'aa', '0775785129', '148, kal3rd lane', 'cash on delivery', 'Pinepple (1) ', '80'),
(40, 'aa', '0775785129', '148, kal3rd lane', 'credit card', 'Pinepple (1) ', '80'),
(41, 'sa', '0775785129', '148, kal3rd lane', 'cash on delivery', 'Apple (3) , Garbage (1) ', '122'),
(42, 'tt', 'ff', 'ee', 'cash on delivery', 'butterfruit (2) , Apple (1) ', '110');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL DEFAULT 0,
  `name` varchar(200) NOT NULL,
  `farmer_id` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `farmer_id`, `price`, `image`) VALUES
(2, 'BeatRoot', '', '500', 'v24_65.png'),
(3, 'Carrot', '', '200', 'v28_127.png'),
(4, 'Leaks', '', '400', 'v26_86.png'),
(5, 'Banana', '', '120', 'v30_271.png'),
(6, 'Papaya', '', '60', 'v30_269.png'),
(7, 'PineApple', '', '200', 'v32_272.png'),
(8, 'Mango', '', '60', 'v28_268.png'),
(9, 'WoodApple', '', '70', 'v34_275.png'),
(10, 'Avacado', '', '250', 'v35_276.png'),
(11, 'carrot', '', '100', 'v28_91.png');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `Phone_Number` varchar(20) NOT NULL,
  `UserName` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `Phone_Number`, `UserName`, `pass`, `address`, `image`) VALUES
(4, ' Wholesaler', ' 0123456789', 'wholesaler@gmail.com', '123', ' No20,Main Road,Dabulla ', '');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `quantity` int(10) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `name`, `quantity`, `image`) VALUES
(24, 'Apple', 200, 'green-apple-removebg-preview.png'),
(26, 'leaks', 200, 'v26_86.png'),
(27, 'carrot', 300, 'v28_127.png');

-- --------------------------------------------------------

--
-- Table structure for table `wholesaler`
--

CREATE TABLE `wholesaler` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `number` varchar(200) NOT NULL,
  `method` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `total_product` varchar(200) NOT NULL,
  `total_price` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wholesaler`
--
ALTER TABLE `wholesaler`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `wholesaler`
--
ALTER TABLE `wholesaler`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
