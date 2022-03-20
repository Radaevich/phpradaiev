-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 21, 2022 at 12:27 AM
-- Server version: 8.0.24
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testphpradaiev`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_categ` int NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_categ`, `name`) VALUES
(1, 'IPhone'),
(2, 'IPhone new'),
(3, 'Mobile phone'),
(4, 'Phone'),
(5, 'Mobile');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_product` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` int NOT NULL,
  `image` varchar(500) NOT NULL,
  `data` date NOT NULL,
  `price` decimal(6,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_product`, `name`, `category`, `image`, `data`, `price`) VALUES
(1, 'IPhone 1', 1, 'test-tovar.jpg', '2022-01-15', '15.00'),
(2, 'Mobile IPhone 2', 1, 'test-tovar.jpg', '2022-01-15', '20.00'),
(3, 'IPhone 3', 1, 'test-tovar.jpg', '2022-01-15', '50.00'),
(4, 'Mobile phone IPhone 4', 2, 'test-tovar.jpg', '2022-01-17', '55.00'),
(5, 'IPhone 5', 2, 'test-tovar.jpg', '2022-01-17', '54.00'),
(6, 'IPhone 6', 2, 'test-tovar.jpg', '2022-01-17', '34.00'),
(7, 'Phone IPhone 7', 3, 'test-tovar.jpg', '2022-01-17', '34.00'),
(8, 'IPhone 8', 3, 'test-tovar.jpg', '2022-01-19', '20.00'),
(9, 'IPhone 9', 3, 'test-tovar.jpg', '2022-01-19', '30.00'),
(10, 'IPhone 10', 2, 'test-tovar.jpg', '2022-01-19', '3024.00'),
(11, 'IPhone 11', 4, 'test-tovar.jpg', '2022-01-15', '224.00'),
(12, 'IPhone 12', 4, 'test-tovar.jpg', '2022-01-20', '554.00'),
(13, 'IPhone 13', 5, 'test-tovar.jpg', '2022-01-20', '344.00'),
(14, 'IPhone 14', 5, 'test-tovar.jpg', '2022-01-20', '340.00'),
(15, 'Apple IPhone 15', 5, 'test-tovar.jpg', '2022-01-20', '10.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_categ`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_categ` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
