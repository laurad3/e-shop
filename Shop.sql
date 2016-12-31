-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Dec 31, 2016 at 09:01 AM
-- Server version: 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `short_description` varchar(200) NOT NULL,
  `full_description` varchar(800) NOT NULL,
  `image_path` varchar(200) NOT NULL,
  `product_year` int(10) NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_category` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `product_name`, `short_description`, `full_description`, `image_path`, `product_year`, `product_price`, `product_category`) VALUES
(1, 'A Series of Unfortunate Events: Book 5', 'Book the Fifth: The Austere Academy', 'As the three Baudelaire orphans warily approach their new home Prufrock Preparatory School: they can''t help but notice the enormous stone arch bearing the school''s motto Memento Mori or "Remember you will die." This is not a cheerful greeting and certainly marks an inauspicious beginning to a very bleak story just as we have come to expect from Lemony Snickett''s Series of Unfortunate Events, the deliciously morbid set of books that began with The Bad Beginning and only got worse.', 'uploads/book_1.jpg', 2000, 12, 'books'),
(2, 'A Series of Unfortunate Events: Book 8', 'Book the Eighth: The Hostile Hospital', 'The Baudelaires need a safe place to stay - somewhere far away from terrible villains and local police. A quiet refuge where misfortune never visits. Might Heimlich Hospital be just the place? In Lemony Snicket''s eighth ghastly instalment in A Series of Unfortunate Events, I''m sorry to say that the Baudelaire Orphans will spend time in a hospital where they risk encountering a misleading newspaper headline, unnecessary surgery, an intercom system, anesthesia, heart-shaped balloons, and some very startling news about a fire.', 'uploads/book_2.jpg', 2001, 13, 'books'),
(3, 'Snowy Muumi Mug', 'For a nice cup of tea', 'For a nice cup of tea', 'uploads/muumi_2.jpg', 2008, 24, 'mugs'),
(4, 'Moschino Spray iPhone Case', 'Freshen up your phone for the season', 'Freshen up your phone for the season.\r\nFor the iPhone 6.', 'uploads/iphone_case.jpg', 2016, 46, 'cases');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `product` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `product`) VALUES
(1, 'Laura', 'email', 'A Series of Unfortunate Events: Book 5'),
(2, 'Mark', 'email', 'Moschino Spray iPhone Case'),
(3, 'Laura', 'some email', 'Snowy Muumi Mug');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
