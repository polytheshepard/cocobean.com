-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2018 at 04:51 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cocobean`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `parent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `parent`) VALUES
(1, 'Coffee', 0),
(2, 'Tea', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `sizes` text,
  `tea_types` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `categories`, `image`, `description`, `sizes`, `tea_types`) VALUES
(1, 'Espresso Blend', 13.00, '1', '/cocobean/img/products/espresso.png', 'A flavoursome and nutty taste that offers a common ground for darker blends. This Espresso is sourced from Central America.', '500g, 1kg', NULL),
(2, 'Columbia', 15.00, '1', '/cocobean/img/products/columbia.png', 'Residing from Columbia, this special blend is infused with a citrus-like flavour accompanied with a fruity bean oil', '500g, 1kg', NULL),
(3, 'Africano', 14.00, '1', '/cocobean/img/products/africano.png', 'Wet pressed from Uganda, these beans consist of a darker bite and holds a richer aroma satisfying many strong coffee lovers.', '500g, 1kg', NULL),
(4, 'Fairtrade', 15.00, '1', '/cocobean/img/products/fairtrade.png', 'Organically sourced from Peru, its ideal flavour is grown in the higher altitudes of Peru creating a softer and gentler body which gives a greater nutty taste in its bean. ', '500g, 1kg', NULL),
(5, 'English Breakfast', 10.00, '2', '/cocobean/img/products/english-breakfast.png', 'One of the most popular tea blends in the market. Most commonly as British tea, its robust and rich black tea leaves works well with milk and sugar.', NULL, 'Green, White, Black'),
(6, 'Early Grey', 10.00, '2', '/cocobean/img/products/earl-grey.png', 'Black tea that is enriched with the oils from the flavours of bergamot orange rind.', NULL, 'Green, White, Black'),
(7, 'Chai Tea', 12.00, '2', '/cocobean/img/chai-tea.png', 'Commonly known as masala chai, its black tea leaves are usually mixed with aromatic Indian spices and herbs.', NULL, 'Green, White, Black'),
(8, 'Oolong', 12.00, '2', '/cocobean/img/oolong.png', 'Traditional Chinese tea that is oxidised from the sun\'s heat. It is commonly attributed for giving life-long health benefits.', NULL, 'Green, White, Black'),
(9, 'Darjeeling', 14.00, '2', '/cocobean/img/darjeeling.png', 'Darjeeling tea usually resides in the northern region of India. Famously known as \"The Champagne Tea\", it consists of a combination of green, white and black tea leaves giving a lighter exotic taste.', NULL, 'Green, White, Black');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
