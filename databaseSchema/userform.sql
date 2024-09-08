-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2024 at 01:29 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userform`
--
CREATE DATABASE IF NOT EXISTS `userform` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `userform`;

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `hotelID` int(11) NOT NULL,
  `hotelName` varchar(60) NOT NULL,
  `location` varchar(60) NOT NULL,
  `address` varchar(60) NOT NULL,
  `priceRange` varchar(60) NOT NULL,
  `about` text NOT NULL,
  `cuisines` text NOT NULL,
  `meals` text NOT NULL,
  `features` text NOT NULL,
  `openinhHours` varchar(60) NOT NULL,
  `mapURL` text NOT NULL,
  `websiteURL` text NOT NULL,
  `email` varchar(60) NOT NULL,
  `hotelMobile` int(15) NOT NULL,
  `mainPhoto` text NOT NULL,
  `slidePhoto1` text NOT NULL,
  `slidePhoto2` text NOT NULL,
  `slidePhoto3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`hotelID`, `hotelName`, `location`, `address`, `priceRange`, `about`, `cuisines`, `meals`, `features`, `openinhHours`, `mapURL`, `websiteURL`, `email`, `hotelMobile`, `mainPhoto`, `slidePhoto1`, `slidePhoto2`, `slidePhoto3`) VALUES
(1, 'Kumbuk Cafe', 'Colombo', 'Colombo 05', '250 $ - 10 $', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis iste nesciunt esse officia! Dicta quia natus harum dolor laudantium velit voluptatibus accusamus molestias excepturi, in eum, ipsa quibusdam consectetur et!', 'Healthy, Local Fusion', 'Breakfast, Brunch', 'Garden dining, eco-friendly', '8 AM - 5 PM', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.846009822921!2d79.8621561744827!3d6.909009518564454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae259772412f065%3A0x5b41ba9c83ca9318!2sCafe%20Kumbuk!5e0!3m2!1sen!2slk!4v1725789541029!5m2!1sen!2slk\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'TEST.COM', 'TEST@GMAIL.COM', 123456789, './Project/images/cafeKumbuk.jpg', './Project/images/background/back1.jpg', './Project/images/background/back2.jpg', './Project/images/background/back3.jpg'),
(2, 'Seed Cafe', 'Colombo', 'Colombo 07', '', '', 'Sri Lankan Fusion, Cafe', 'Breakfast, Brunch, Lunch', 'Garden seating, modern ambiance', '8 AM - 4 PM', '', '', '', 0, './Project/images/Seed-Cafe.webp', '', '', ''),
(3, 'Barefoot Cafe', 'Colombo', 'Colombo 03', '', '', 'Cafe, Local', 'Lunch, Snacks', 'Garden setting, attached shop', '10 AM - 7 PM (Mon-Sat), 11 AM - 5 PM (Sun)', '', '', '', 0, './Project/images/BarefootCafe.jpg', '', '', ''),
(4, 'Grind', 'Colombo', 'Colombo 02', '', '', 'Cafe', 'Breakfast, Brunch', 'Floor-to-ceiling windows, brunch favorites', '8 AM - 6 PM', '', '', '', 0, './Project/images/Grind.png', '', '', ''),
(5, 'Department of Coffee', 'Colombo', 'Colombo 07', '', '', 'Coffee, Cafe', 'Breakfast, Snacks', 'Specialty coffee, weekend brunch', '7 AM - 9 PM', '', '', '', 0, './Project/images/DC.png', '', '', ''),
(6, 'Butter Boutique', 'Colombo', 'Colombo 07', '', '', 'Desserts, Cafe', 'Breakfast, Snacks', 'Renowned for cakes and coffee', '9 AM - 8 PM', '', '', '', 0, './Project/images/Butter-boutique.jpg', '', '', ''),
(7, 'The Cakery', 'Colombo', 'Colombo 05', '', '', 'Desserts, Snacks', 'Breakfast, Light meals', 'Popular bakery, wide dessert selection', '8 AM - 7 PM', '', '', '', 0, './Project/images/Cakery.jpg', '', '', ''),
(8, 'Ministry of Crab', 'Colombo', 'Dutch Hospital Shopping Precinct, Colombo 01', '', '', 'Seafood, Sri Lankan', 'Lunch, Dinner', 'Iconic for crab dishes, upscale', '12 PM - 10 PM', '', '', '', 0, './Project/images/MinistryofCrab.jpg', '', '', ''),
(9, 'Upali’s by Nawaloka', 'Colombo', 'Colombo 07', '', '', 'Sri Lankan', 'Lunch, Dinner', 'Authentic Sri Lankan dishes', '11 AM - 10 PM', '', '', '', 0, './Project/images/Upali\'s.jpg', '', '', ''),
(10, 'Shang Palace', 'Colombo', 'Shangri-La Hotel, Colombo', '', '', 'Chinese', 'Lunch, Dinner', 'Fine dining, Cantonese specialties', '12 PM - 10 PM', '', '', '', 0, './Project/images/ShangriLa.jpg', '', '', ''),
(11, 'The Bayleaf', 'Colombo', 'Colombo 07', '', '', 'Italian', 'Lunch, Dinner', 'Heritage villa, classic Italian dishes', '12 PM - 11 PM', '', '', '', 0, './Project/images/Bayleaf.jpg', '', '', ''),
(12, 'Graze Kitchen', 'Colombo', 'Hilton Colombo', '', '', 'International buffet', 'Breakfast, Lunch, Dinner', 'Extensive buffet, live cooking stations', '6:30 AM - 10:30 PM', '', '', '', 0, './Project/images/graze-kitchen.jpg', '', '', ''),
(13, 'Rooftop', 'Kandy', 'Peradeniya Rd, Kandy', '', '', 'Asian Fusion, Sushi', 'Lunch, Dinner', 'Rooftop dining, scenic view', '11 AM - 11 PM', '', '', '', 0, '', '', '', ''),
(14, 'Rockview Restaurant', 'Kandy', 'Kandy', '', '', 'Sri Lankan', 'Lunch', 'Views of tea plantations, local dishes', '10 AM - 10 PM', '', '', '', 0, '', '', '', ''),
(15, 'Sri Krishna Dosai', 'Kandy', 'Colombo St, Kandy', '', '', 'Indian', 'Breakfast, Lunch, Dinner', 'Quick service, near Temple of the Tooth', '8 AM - 9 PM', '', '', '', 0, '', '', '', ''),
(16, 'The Empire Cafe', 'Kandy', 'Temple St, Kandy', '', '', 'Cafe, Fusion', 'Breakfast, Lunch, Dinner', 'Retro decor, eclectic menu', '8 AM - 10 PM', '', '', '', 0, '', '', '', ''),
(17, 'Balaji Dosai', 'Kandy', 'Dalada Veediya, Kandy', '', '', 'South Indian', 'Breakfast, Lunch, Dinner', 'Vegetarian, budget-friendly', '8 AM - 9 PM', '', '', '', 0, '', '', '', ''),
(18, 'Sharon Inn', 'Kandy', 'Kandy Lake', '', '', 'Sri Lankan Buffet', 'Dinner', 'Homely ambiance, vegetarian options', '6 PM - 9 PM', '', '', '', 0, '', '', '', ''),
(19, 'Slightly Chilled Lounge Bar & Restaurant', 'Kandy', 'Anagarika Dharmapala Mawatha, Kandy', '', '', 'Asian, International', 'Lunch, Dinner', 'Rooftop bar, popular with expats', '11 AM - 11 PM', '', '', '', 0, '', '', '', ''),
(20, 'Helga\'s Folly', 'Kandy', '70 Rajapihilla Mawatha, Kandy', '', '', 'Sri Lankan, International', 'Lunch, Dinner', 'Unique decor, historical', '10 AM - 10 PM', '', '', '', 0, '', '', '', ''),
(21, 'Savoury', 'Kandy', 'Yatinuwara Veediya, Kandy', '', '', 'Sri Lankan', 'Lunch, Dinner', 'Traditional flavors, popular with locals', '11 AM - 9 PM', '', '', '', 0, '', '', '', ''),
(22, 'Theva Cuisine', 'Kandy', 'Theva Residency, Kandy', '', '', 'Fusion, International', 'Breakfast, Lunch, Dinner', 'Fine dining with a view', '7 AM - 10 PM', '', '', '', 0, '', '', '', ''),
(23, 'Devon Restaurant', 'Kandy', 'Dalada Veediya, Kandy', '', '', 'Sri Lankan, Indian', 'Breakfast, Lunch, Dinner', 'Local favorite, fast service', '7 AM - 10 PM', '', '', '', 0, '', '', '', ''),
(24, 'Cafe Aroma Inn', 'Kandy', 'Colombo St, Kandy', '', '', 'Cafe, International', 'Breakfast, Lunch, Dinner', 'Cozy cafe atmosphere, good coffee', '8 AM - 10 PM', '', '', '', 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `regno` varchar(12) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` mediumint(9) NOT NULL,
  `status` text NOT NULL,
  `test` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `fname`, `lname`, `email`, `regno`, `password`, `code`, `status`, `test`) VALUES
(7, 'Dus', 'B', 'thanushanga@gmail.com', 'ITT/2022/080', '$2y$10$st6zInz3EETARCjCbPz7P.0eTU7m5i72DAWV4j494cjfej0yLHnwi', 0, 'verified', ''),
(8, 'kalu', 'kumara', 'viduladenethsalwathura@gmail.com', 'ITT/2022/085', '$2y$10$PxAe6Qvln2n8UWQVj6.5w.JAGkTwz8bSu8RlOOl3ZgRVRq1kBNhOq', 0, 'verified', ''),
(9, 'Ashab', 'ninsara', 'ashannimsara1234@gmail.com', '', '$2y$10$yLWB3pJY0dikWaqtMWQgeepPs7KAuDS9OI3DLgYN3Kw0MPrUZDIu6', 0, 'verified', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`hotelID`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `hotelID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
