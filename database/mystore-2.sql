-- phpMyAdmin SQL Dump
-- version 4.4.13.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jun 20, 2016 at 08:51 AM
-- Server version: 5.6.26
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(6) unsigned NOT NULL,
  `usr` varchar(32) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `usr`, `pass`, `firstname`, `lastname`, `email`) VALUES
(1, 'admin', 'admin', 'Milton', 'Mungin', 'admin@local.com'),
(2, 'miltonm', 'fish123', 'Milton', 'Mungin', 'milton@localhost.com');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(6) unsigned NOT NULL,
  `name` varchar(100) NOT NULL,
  `usr` varchar(30) NOT NULL,
  `shippinginfo` varchar(400) NOT NULL,
  `payment` varchar(200) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `shippingstatus` varchar(50) DEFAULT NULL,
  `items` longtext NOT NULL,
  `price` decimal(6,2) DEFAULT NULL,
  `submitdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=10016 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `usr`, `shippinginfo`, `payment`, `email`, `phone`, `shippingstatus`, `items`, `price`, `submitdate`) VALUES
(10000, 'Milton Mungin', 'admin', '123 main st Atlanta GA 12345', 'payment: 12342135215245 exp: 8/2020', 'admin@local.com', '4047297610', 'processing', 'a:2:{i:4;s:1:"1";i:10;s:1:"1";}', '14.94', '2015-12-13 23:31:22'),
(10001, 'Milton Mungin', 'admin', '123 test st sdf KY 33333', 'payment: 23423423423 exp: 9/2020', 'admin@local.com', '234123', 'processing', 'a:2:{i:4;s:1:"1";i:10;s:1:"2";}', '22.93', '2015-12-14 00:04:23'),
(10005, 'Milton Mungin', 'admin', '123 main t Atlanta GA 30084', 'payment: 1231234 exp: 3/2021', 'admin@local.com', '1231231234', 'processing', 'a:1:{i:9;s:1:"1";}', '89.96', '2015-12-14 04:22:46'),
(10006, 'Milton Mungin', 'admin', '123 Main St Atlanta GA 12345', 'payment: 12342135215245 exp: 7/2019', 'admin@local.com', '4047297610', 'processing', 'a:2:{i:4;s:1:"1";i:10;s:1:"2";}', '22.93', '2015-12-14 05:34:01'),
(10007, 'Milton Mungin', 'admin', '123 main st Atlanta GA 33333', 'payment: 23423423423 exp: 7/2019', 'admin@local.com', '4047297610', 'processing', 'a:3:{i:4;s:1:"1";i:10;s:1:"2";i:8;s:1:"3";}', '622.78', '2015-12-14 05:36:20'),
(10009, 'Jon Snow', 'jonsnow', '123 Main St Atlanta GA 12345', 'payment: 1234567890 exp: 10/2018', 'jonsnow@test.com', '4041112222', 'processing', 'a:2:{i:13;s:1:"1";i:6;s:1:"1";}', '48.99', '2015-12-14 08:24:30'),
(10010, 'Jon Snow', 'jonsnow', '123 Main St Atlanta MA 3411234', 'payment: 123412341234353 exp: 9/2021', 'jonsnow@test.com', '1231231234', 'processing', 'a:1:{i:9;s:1:"1";}', '89.96', '2015-12-14 08:25:37'),
(10011, 'Milton Mungin', 'milton123', '123 Main St Atlanta GA 12345', 'payment: 1234567890123 exp: 8/2020', 'miltonmungin@localhost.com', '4041231234', 'processing', 'a:2:{i:4;s:1:"2";i:13;s:1:"2";}', '51.88', '2015-12-14 20:12:35'),
(10012, 'Milton Mungin', 'milton123', '123 main st atlanta GA 12345', 'payment: 21234123424 exp: 4/2017', 'miltonmungin@localhost.com', '12341234', 'processing', 'a:1:{i:12;s:1:"1";}', '24.95', '2015-12-14 20:13:05'),
(10013, 'Milton Mungin', 'miltonm', '123 Main St Atlanta GA 1234', 'payment: 1234567834532 exp: 5/2018', 'milton@localhost.com', '4041231234', 'processing', 'a:2:{i:4;s:1:"2";i:12;s:1:"1";}', '38.85', '2015-12-14 22:20:25'),
(10014, 'Milton Mungin', 'miltonm', 'dsfasdf atlanta GA 12345', 'payment: 123413543 exp: 4/2018', 'milton@localhost.com', '2341234', 'processing', 'a:1:{i:4;s:1:"1";}', '6.95', '2015-12-14 22:21:09'),
(10015, 'Milton Mungin', 'admin', '  AL ', 'payment: 1234 exp: 1/2016', 'admin@local.com', '', 'processing', 'a:1:{i:4;s:1:"2";}', '13.90', '2016-06-17 19:56:55');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(6) unsigned NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(400) NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `department` varchar(50) CHARACTER SET armscii8 NOT NULL,
  `img` varchar(250) CHARACTER SET armscii8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `description`, `price`, `department`, `img`) VALUES
(4, 'Georgia State University Panthers 11 oz. Mug', 'Enjoy your favorite beverage in this 11 oz. ceramic mug. Printed mascot graphic.', '6.95', 'Gifts & Collectibles', 'gsu_mug.png'),
(6, '47 Brand® Georgia State University Cap', 'Embroidered front and back.', '30.00', 'Apparel & Accessories', '47_gsu_blackhat.png'),
(7, 'Georgia State University Panthers Mini Rubber Basketball - Nike', 'Mini rubber basketball printed school logo in two locations.', '14.00', 'Gifts & Collectibles', 'gsu_minibasketball.png'),
(8, 'Beats Solo2 On-Ear Headphones Black', 'The Solo2 has arrived.  Beats most popular headphone has been redesigned from the inside out.  With updated and improved acoustics, the Solo2 lets you feel your music with a wider range of sound and enhanced clarity.', '199.95', 'Technology', 'beat_solo2_headphones.png'),
(9, 'Star Wars: The Complete Saga (Episodes I-VI) [Blu-ray]', 'Experience the spectacular adventure of STAR WARS The Complete Saga in a way only Blu-ray™ can deliver. This incredible collection unites all six movies in stunning high definition with the purest digital sound in the galaxy.', '89.96', 'Movies & Music', 'Marvels-Star-Wars-300x200@2x.jpg'),
(10, 'Brothers By  The Black Keys', '''Brothers'' was primarily cut in Muscle Shoals, a setting that turned out to have more in common with the Akron, Ohio factories where the Black Keys used to record. The place was desolate, the town depressed, so once again the duo slipped into a world all its own.', '7.99', 'Movies & Music', '71yS6g-KRML._SL1098_.jpg'),
(11, 'Georgia State University Crewneck Sweatshirt', 'Fabric : 50% Cotton/50% Polyester', '14.95', 'Apparel & Accessories', 'gsusw.png'),
(12, 'EMB DRIVE 16GB', 'Keep your computer files handy with this Georgia State University USB Drive Keychain. USB data stick has a 16GB capacity that makes it easy to store and transfer files, photos, music or videos.', '24.95', 'Technology', 'gsuusb.png'),
(13, 'Georgia State University Panthers Ugly Sweater', 'Celebrate the holidays in questionable style in this spirited long sleeve Ugly Holiday campus t-shirt. Cheer-inspiring, cotton, crew neck t-shirt shares holiday spirit with the school mascot and school name screen-printed among a field of snowflakes. ', '18.99', 'Apparel & Accessories', 'gsuugly.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10016;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
