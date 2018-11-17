-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2018 at 03:26 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `code_review_11_mustafa`
--

-- --------------------------------------------------------

--
-- Table structure for table `concert`
--

CREATE TABLE `concert` (
  `concert_id` int(5) NOT NULL,
  `concert_name` varchar(20) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `EventTime` time DEFAULT NULL,
  `EventDate` date DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `web_address` varchar(50) DEFAULT NULL,
  `ticket_price` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `concert`
--

INSERT INTO `concert` (`concert_id`, `concert_name`, `image`, `EventTime`, `EventDate`, `address`, `web_address`, `ticket_price`) VALUES
(1, 'conxert number 1', 'https://images.pexels.com/photos/154147/pexels-photo-154147.jpeg?auto=compress&cs=tinysrgb&h=350', '13:15:16', '2018-11-17', 'vienna12/12', 'www.mustafa.codefactory.live', 40),
(2, 'conxert number 2', 'https://www.telegraph.co.uk/content/dam/Travel/Destinations/Europe/Austria/Vienna/vienna-summer-night-concert-austria-p.jpg?imwidth=450', '13:15:16', '2018-11-14', 'linz strasse/1212', 'www.mustafa.codefactory.live', 30),
(3, 'conxert number 3', 'https://d2rd7etdn93tqb.cloudfront.net/wp-content/uploads/2018/02/concert-instagram-captions-social-020618-1024x538.jpg', '13:15:16', '2018-11-21', 'salzburg strasse 1010', 'www.mustafa.codefactory.live', 20);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(5) NOT NULL,
  `city` varchar(20) DEFAULT NULL,
  `zip_code` int(10) DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `place_id` int(5) NOT NULL,
  `place_name` varchar(20) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `type` enum('museum','historical site','must see') DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `web_address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`place_id`, `place_name`, `image`, `type`, `description`, `address`, `web_address`) VALUES
(1, 'vienna', 'https://thumbs-prod.si-cdn.com/RFelHnNig5ttjJcPxLE3yJBT-dk=/800x600/filters:no_upscale()/https://public-media.smithsonianmag.com/filer/03/25/03251376-be81-470c-ac01-a15130b3e9b0/kunst889.jpg', 'museum', 'vienna museum', 'vienna strret50/993', 'www.mustafa.codefactory.live'),
(2, 'slazburg', 'https://d19lgisewk9l6l.cloudfront.net/wexas/www/images/largeimages/destinations/Denmark/sound_music/SalzburgC_autoresized.jpg', 'must see', 'salzburgaasd', 'salzburg65/54', 'www.mustafa.codefactory.live'),
(3, 'linz', 'http://linz-panorama.webfly.at/wp-content/uploads/2011/07/20110704_bahnhof_linz4cut.jpg', 'historical site', 'linz756/654', 'vienna strasse/1010', 'www.mustafa.codefactory.live');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `restaurant_id` int(5) NOT NULL,
  `restaurant_name` varchar(20) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `type` enum('chinese','indian','viennese') DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `web_address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`restaurant_id`, `restaurant_name`, `image`, `type`, `description`, `address`, `web_address`) VALUES
(5, 'indian', 'https://www.wien.info/media/images/41993-das-loft-sofitel-so-vienna-19to1.jpeg', 'indian', 'indian', ' hello', 'www.mustafa.codefactory.live'),
(6, 'chinese', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRkTDtTuBJaM-94mr--7FhHwrV8FT5bs6qKhRvRtro9GNNZ-7CK', 'chinese', 'chinese', 'vienna strasse/1010', 'www.mustafa.codefactory.live'),
(7, 'vienna', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRooqbuacpLc67HhI72VJ9jX-KS4be7J-M_VIKWzWjqMTfih5BUA', 'viennese', 'vienna', 'vienna strret50/993', 'www.mustafa.codefactory.live'),
(8, 'indian', 'https://www.wien.info/media/images/41993-das-loft-sofitel-so-vienna-19to1.jpeg', 'indian', 'indian', 'salzburg65/54', 'www.mustafa.codefactory.live'),
(9, 'chinese', 'https://cdn-image.foodandwine.com/sites/default/files/1501607996/opentable-scenic-restaurants-marine-room-FT-BLOG0818.jpg', 'chinese', 'chinese', 'vienna strasse/1010', 'www.mustafa.codefactory.live');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL,
  `userRole` int(1) NOT NULL DEFAULT '5'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPass`, `userRole`) VALUES
(1, 'mustafa', '123@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 1),
(2, 'mustafa', '1234@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 5),
(3, 'mustafa', 'mustafa@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 5),
(4, 'mustafa', '123456@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 5),
(5, 'mustafa', '1020@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 5),
(6, 'mustafa', 'nour@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 1),
(7, 'ahmad', '123456789@gmil.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `concert`
--
ALTER TABLE `concert`
  ADD PRIMARY KEY (`concert_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`restaurant_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `concert`
--
ALTER TABLE `concert`
  MODIFY `concert_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `place_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `restaurant_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
