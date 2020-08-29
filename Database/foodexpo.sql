-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2017 at 05:23 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id14722915_foodexpo`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `CUSTOMER` (
  `username` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `CUSTOMER` (`username`, `fullname`, `email`, `contact`, `address`, `password`) VALUES
('ani', 'Aniket', 'ani@gmail.com', '7668514255', 'Varanasi', 'ani123'),
('anik12', 'Chikoo', 'chikoo@gmail.com', '8840043812', 'Lucknow', 'chikoo123'),
('anku12', 'Ankesh jaiswal', 'anku@gmail.com', '8004237894', 'Faizabad', 'ankesh123');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `FOOD` (
  `F_ID` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  `R_ID` int(30) NOT NULL,
  `images_path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `food`
--

INSERT INTO `FOOD` (`F_ID`, `name`, `price`, `description`, `R_ID`, `images_path`) VALUES
(58, 'Paneer Butter Masala', 280, 'Paneer Butter Masala loaded with cheese, Paneer chunks, onion & Mayo and lot of secret things :).', 1, 'images/paneer-butter-masala.jpg'),
(59, 'Masala Chicken', 360, 'Masala Chicken - Well cooked chicken & served with grilled onions and tomatoes.', 2, 'images/Chicken-Masala.jpg'),
(60, 'Tutti Fruity Icecream', 99, 'can You Lose all senses over this very delicious tutti fruity flavour.', 3, 'images/tutti-frutti.jpg'),
(61, 'Cappuccino-Coffee', 150, 'Cappuccino - a perfect stress buster coffee.', 1, 'images/Cappuccino.jpg'),
(62, 'Cheese Egg-roll', 65, 'Cheese Egg-roll is very Delicious provided by kathi. Order now!!!', 2, 'images/Eggroll.jpg'),
(63, 'Massive Indian Thali', 105, 'Massive Indian Thali is a very special thali, it contains 29 indian states flavour.:)', 3, 'images/thali.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `MANAGER` (
  `username` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manager`
--

INSERT INTO `MANAGER` (`username`, `fullname`, `email`, `contact`, `address`, `password`) VALUES
('aditya1', 'Aditya Gupta', 'adi@gmail.com', '9874751259', 'Bombay', 'aditi'),
('sandy12', 'Sandesh Mishra', 'sandy@gmail.com', '9894787412', 'UP', 'nikhil'),
('hrithik1', 'Hrithik Somwanshi', 'hrx@gmail.com', '7689258761', 'Chennai', 'roshan');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `ORDERS` (
  `order_ID` int(30) NOT NULL,
  `F_ID` int(30) NOT NULL,
  `foodname` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `quantity` int(30) NOT NULL,
  `order_date` date NOT NULL,
  `username` varchar(30) NOT NULL,
  `R_ID` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `RESTAURANTS` (
  `R_ID` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `M_ID` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `RESTAURANTS` (`R_ID`, `name`, `email`, `contact`, `address`, `M_ID`) VALUES
(1, 'Aditya\'s Restaurant', 'adi@restaurant.com', '9874751259', 'Bombay', 'aditya1'),
(2, 'Sandesh\'s Restaurant', 'sandy@restaurant.com', '9894787412', 'UP', 'sandy12'),
(3, 'Hrithik\'s Restaurant', 'hrx@restaurant.com', '7689258761', 'Chennai', 'hrithik1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CUSTOMER`
--
ALTER TABLE `CUSTOMER`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `FOOD`
--
ALTER TABLE `FOOD`
  ADD PRIMARY KEY (`F_ID`,`R_ID`),
  ADD KEY `R_ID` (`R_ID`);

--
-- Indexes for table `MANAGER`
--
ALTER TABLE `MANAGER`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `ORDERS`
--
ALTER TABLE `ORDERS`
  ADD PRIMARY KEY (`order_ID`),
  ADD KEY `F_ID` (`F_ID`),
  ADD KEY `username` (`username`),
  ADD KEY `R_ID` (`R_ID`);

--
-- Indexes for table `RESTAURANTS`
--
ALTER TABLE `RESTAURANTS`
  ADD PRIMARY KEY (`R_ID`),
  ADD UNIQUE KEY `M_ID_2` (`M_ID`),
  ADD KEY `M_ID` (`M_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `FOOD`
--
ALTER TABLE `FOOD`
  MODIFY `F_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `ORDERS`
--
ALTER TABLE `ORDERS`
  MODIFY `order_ID` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `RESTAURANTS`
--
ALTER TABLE `RESTAURANTS`
  MODIFY `R_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `FOOD`
--
ALTER TABLE `FOOD`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`R_ID`) REFERENCES `RESTAURANTS` (`R_ID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`F_ID`) REFERENCES `FOOD` (`F_ID`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`username`) REFERENCES `CUSTOMER` (`username`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`R_ID`) REFERENCES `RESTAURANTS` (`R_ID`);

--
-- Constraints for table `RESTAURANTS`
--
ALTER TABLE `RESTAURANTS`
  ADD CONSTRAINT `restaurants_ibfk_1` FOREIGN KEY (`M_ID`) REFERENCES `MANAGER` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
