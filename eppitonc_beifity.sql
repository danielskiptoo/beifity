-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 20, 2018 at 12:57 PM
-- Server version: 5.6.36-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eppitonc_beifity`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_query`
--

CREATE TABLE `client_query` (
  `id` int(11) NOT NULL,
  `c_email` varchar(100) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `query_title` varchar(100) NOT NULL,
  `message` varchar(400) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_query`
--

INSERT INTO `client_query` (`id`, `c_email`, `c_name`, `query_title`, `message`, `date`) VALUES
(1, 'kiptood6@gmail.com', 'Daniel', 'Saless', 'iwould sdv svonvsdvsdv', '2017-11-14 11:56:06'),
(2, 'danielskiptoo@yahoo.com', 'Daniel kiptoo', 'kdmdvsdvsdi', 'v jvdgbdirueghrioghsgs', '2017-11-14 11:58:26'),
(3, 'danielskiptoo@yahoo.com', 'yufufufyu', 'kikikikikikikiki9kiki', 'vgfkuyyovf78ot7 uvuygyk hbuilgig buigg jhbuibi', '2017-11-14 12:00:19');

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `id` int(11) NOT NULL,
  `orderno` varchar(200) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `productid` varchar(200) DEFAULT NULL,
  `quantity` double DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `orderno` varchar(200) DEFAULT NULL,
  `userid` varchar(45) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `fname` varchar(200) DEFAULT NULL,
  `lname` varchar(200) DEFAULT NULL,
  `street` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `town` varchar(200) DEFAULT NULL,
  `zip` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `shipping` varchar(45) DEFAULT 'delivery',
  `status` varchar(45) DEFAULT 'pending',
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pcategories`
--

CREATE TABLE `pcategories` (
  `id` int(11) NOT NULL,
  `categoryname` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pcategories`
--

INSERT INTO `pcategories` (`id`, `categoryname`) VALUES
(1, 'Desktops'),
(2, 'Laptops'),
(3, 'Accessories'),
(4, 'Storage');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `productname` varchar(200) DEFAULT NULL,
  `description` varchar(800) DEFAULT NULL,
  `marketPrice` double DEFAULT NULL,
  `price` double DEFAULT NULL,
  `tradename` varchar(200) DEFAULT NULL,
  `manufacturer` varchar(200) DEFAULT NULL,
  `category` varchar(200) DEFAULT NULL,
  `photo_1` varchar(200) DEFAULT NULL,
  `photo_2` varchar(200) DEFAULT NULL,
  `photo_3` varchar(200) DEFAULT NULL,
  `photo_4` varchar(200) DEFAULT NULL,
  `photo_5` varchar(200) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `subcartegory` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productname`, `description`, `marketPrice`, `price`, `tradename`, `manufacturer`, `category`, `photo_1`, `photo_2`, `photo_3`, `photo_4`, `photo_5`, `timestamp`, `subcartegory`) VALUES
(1, 'Mac All-in-one', NULL, 70000, 65000, NULL, 'Apple', '1', 'images/desktop/ba3.jpg', 'images/desktop/ba4.jpg', 'images/desktop/ba4.jpg', 'images/desktop/ba4.jpg', 'images/desktop/ba4.jpg', '2017-10-20 17:53:09', 1),
(2, 'Hp Pavilion', NULL, 80000, 50000, NULL, NULL, '1', 'images/desktop/ba3.jpg', 'images/desktop/ba4.jpg', 'images/desktop/ba4.jpg', NULL, NULL, '2017-10-20 17:53:09', 1),
(3, 'Dell', NULL, 57000, 50000, NULL, NULL, '1', 'images/desktop/ba3.jpg', 'images/desktop/ba4.jpg', 'images/desktop/ba4.jpg', NULL, NULL, '2017-10-20 17:53:09', 5),
(4, 'HP Envy', NULL, 85000, 45000, NULL, NULL, '1', 'images/desktop/ba3.jpg', 'images/desktop/ba4.jpg', 'images/desktop/ba4.jpg', NULL, NULL, '2017-10-20 17:53:09', 8),
(5, 'Mac book', NULL, 85600, 36000, NULL, NULL, '1', 'images/desktop/ba3.jpg', 'images/desktop/ba4.jpg', 'images/desktop/ba4.jpg', NULL, NULL, '2017-10-20 17:53:09', 2),
(6, 'Accer', NULL, 5888, 50000, NULL, NULL, '1', 'images/desktop/ba3.jpg', 'images/desktop/ba4.jpg', 'images/desktop/ba4.jpg', NULL, NULL, '2017-10-20 17:53:09', 8),
(7, 'Assus', NULL, 75885, 60000, NULL, NULL, '1', 'images/desktop/ba3.jpg', 'images/desktop/ba4.jpg', 'images/desktop/ba4.jpg', NULL, NULL, '2017-10-20 17:53:09', 2),
(8, 'Mac All-in-one', NULL, 147222, 70000, NULL, NULL, '1', 'images/desktop/ba3.jpg', 'images/desktop/ba4.jpg', 'images/desktop/ba4.jpg', NULL, NULL, '2017-10-20 17:53:09', 20),
(9, 'Mac All-in-one', NULL, 150000, 75000, NULL, NULL, '7', 'images/desktop/ba3.jpg', 'images/desktop/ba4.jpg', 'images/desktop/ba4.jpg', NULL, NULL, '2017-10-20 17:53:09', 12),
(10, 'Mac All-in-one', NULL, 140000, 70000, NULL, NULL, '5', 'images/desktop/ba3.jpg', 'images/desktop/ba4.jpg', 'images/desktop/ba4.jpg', NULL, NULL, '2017-10-20 17:53:09', 6),
(11, 'Hp Pro Book 450 G2', NULL, 75000, 50000, NULL, NULL, '2', 'images/desktop/ba3.jpg', 'images/desktop/ba4.jpg', 'images/desktop/ba4.jpg', NULL, NULL, '2017-10-20 18:33:22', 5);

-- --------------------------------------------------------

--
-- Table structure for table `psubcategory`
--

CREATE TABLE `psubcategory` (
  `id` int(11) NOT NULL,
  `parent` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `psubcategory`
--

INSERT INTO `psubcategory` (`id`, `parent`, `name`) VALUES
(1, 1, 'NoteBook'),
(2, 1, 'Tablet Pc'),
(3, 1, 'MacBooks'),
(4, 1, 'New Arrivals'),
(5, 1, 'Top Sales'),
(6, 2, 'All -In -Ones'),
(7, 2, 'Towers & Desktops'),
(18, 2, 'Monotors'),
(19, 3, 'Screens'),
(20, 3, 'Batteries'),
(21, 3, 'Chargers'),
(22, 3, 'Mouse'),
(23, 3, 'Flower Cables'),
(24, 3, 'Others'),
(25, 4, 'Internal HD'),
(26, 4, 'External HD'),
(27, 4, 'Memory Cards'),
(28, 4, 'Flash Drives');

-- --------------------------------------------------------

--
-- Table structure for table `slider_products`
--

CREATE TABLE `slider_products` (
  `id` int(11) NOT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `product_name` varchar(200) DEFAULT NULL,
  `marketprice` double DEFAULT NULL,
  `price` double DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider_products`
--

INSERT INTO `slider_products` (`id`, `photo`, `product_name`, `marketprice`, `price`, `timestamp`) VALUES
(1, 'photos/slider/macbookpro1.jpg', 'MacBook Pro', 90000, 80000, '2017-11-21 08:32:11'),
(2, 'photos/slider/macbookpro2.jpg', 'MacBook Air', 105000, 88000, '2017-11-21 08:32:11'),
(3, 'photos/slider/macbookpro3.jpg', 'MacBook Air', 78000, 70000, '2017-11-21 08:32:11'),
(4, 'photos/slider/slider5.jpg', 'MacBook', 90000, 85000, '2017-11-21 08:32:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(400) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`, `status`) VALUES
(2, 'Daniel', 'danielskiptoo', '$2a$10$eQypHWUJkJacYg4tVBY/G.N4JEsYN8D0sh7i4vqs.vUGNREhay27C', 'danielskiptoo@yahoo.com', 1),
(3, 'kiptoo', 'kiptoo', '$2a$10$NT4MlSa1M2MX0A0CZzOppeIFJeWwfn7ebGnQvTqDg5COKI.IMU2hm', 'danielkipson@gmail.com', 0),
(4, 'kiptoodaniel', 'danielkips', '$2a$10$s.68XUagKNCdXtr4ljszW.Qzfoup8dnA62RMKn7k0HrlskYE5eSYa', 'danielskiptoo44@yahoo.com', 0),
(5, 'damile', 'kiptoo', '$2a$10$19QqQFnRryDat5SOQZPm1eL8EA4eoIWP3XBf6VXeVR4N8MK3xm.qG', 'kiptood00@gmail.com', 1),
(6, 'dan', 'kikip', '$2a$10$eTkME4Uw9kjGSWmbz04knuemlBW7dPkxOy9HnQl5pcSGU/k1KKR5u', 'kiptood68@gmail.com', 0),
(7, 'Alex ', 'alexhunter', '$2a$10$3OhMs3e2MrAnrwV2UGzmoO.0NDJMmV3qyG1JoMsH3ACTHd7CL1gge', 'danielskiptoo22@yahoo.com', 0),
(8, 'Daniel', 'Sing\'oei', '$2a$10$kLw9lBd01JU82O7hIWKj4.bdMLmt7Bg6SjZ97NN14pIBOC0Elno8S', 'kiptood611@gmail.com', 0),
(9, 'Alext ', ' vkldbon dl', '$2a$10$sX3CQDIPTWK9y4rrH6jQIOfy8.cBItv88qhx2QVy0/SU42pqvh0u.', 'kiptood6f@gmail.com', 0),
(10, 'ngodgndofijdf', 'f bdfbdnfo', '$2a$10$gjP8wrceF0dgjP6ioA6YxuoLry6pRAFJEjp7Q1fVZygZ5XgcWMNhG', 'kiptood6rr@gmail.com', 0),
(11, 'kiptoo', 'danilliks', '$2a$10$vmVxf6Gkd0/SeUe5H440rurRR8RcuXqoMaLCQNLa9Mg/TNWR.uVRS', 'danielskiptoott@yahoo.com', 0),
(12, 'Danielkip', 'kiptood67', '$2a$10$S2VohGDCy/0n7TcF2atzk.PVbNLeZAVO4Z3cC9E8ixzb8JyKLPi1S', 'danielskipto011o@yahoo.com', 0),
(13, 'daniel', 'kiptood6', '$2a$10$XHGthdYqzuKhdSwRn3RDR.bvjpZhMSCcBnN1CuOhHuJO8HII0dYpy', 'kiptood6@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_query`
--
ALTER TABLE `client_query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pcategories`
--
ALTER TABLE `pcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `psubcategory`
--
ALTER TABLE `psubcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_products`
--
ALTER TABLE `slider_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client_query`
--
ALTER TABLE `client_query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pcategories`
--
ALTER TABLE `pcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `psubcategory`
--
ALTER TABLE `psubcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `slider_products`
--
ALTER TABLE `slider_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
