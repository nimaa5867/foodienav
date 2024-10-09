-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2024 at 12:11 AM
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
  `hotelMobile` text NOT NULL,
  `mainPhoto` text NOT NULL,
  `slidePhoto1` text NOT NULL,
  `slidePhoto2` text NOT NULL,
  `slidePhoto3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`hotelID`, `hotelName`, `location`, `address`, `priceRange`, `about`, `cuisines`, `meals`, `features`, `openinhHours`, `mapURL`, `websiteURL`, `email`, `hotelMobile`, `mainPhoto`, `slidePhoto1`, `slidePhoto2`, `slidePhoto3`) VALUES
(1, 'Kumbuk Cafe', 'Colombo', 'Colombo 05', 'High', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis iste nesciunt esse officia! Dicta quia natus harum dolor laudantium velit voluptatibus accusamus molestias excepturi, in eum, ipsa quibusdam consectetur et!', 'Healthy, Local Fusion', 'Breakfast, Brunch', 'Garden dining, eco-friendly', '8 AM - 5 PM', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.846009822921!2d79.8621561744827!3d6.909009518564454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae259772412f065%3A0x5b41ba9c83ca9318!2sCafe%20Kumbuk!5e0!3m2!1sen!2slk!4v1725789541029!5m2!1sen!2slk\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'www.kumbukcafe.com', 'info@kumbukcafe.com', '+94 77 555 1234', 'images/cafeKumbuk.webp', 'images/background/1.webp', 'images/background/11.webp', 'images/background/111.webp'),
(2, 'Seed Cafe', 'Colombo', 'Colombo 07', 'Moderate', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis iste nesciunt esse officia! Dicta quia natus harum dolor laudantium velit voluptatibus accusamus molestias excepturi, in eum, ipsa quibusdam consectetur et!', 'Sri Lankan Fusion, Cafe', 'Breakfast, Brunch, Lunch', 'Garden seating, modern ambiance', '8 AM - 4 PM', '<iframe  src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1972.0176206162542! 2d79.8713455!3d6.9013951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae 25bc7651e998b%3A0xd75db7d0bb2478e4!2sSeed%20Cafe!5e0!3m2!1sen!2slk!4v1633095 001612!5m2!1sen!2slk\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\"  loading=\"lazy\"></iframe>', 'www.seedcafe.lk', 'seedcafe@colombo.com', '+94 77 666 2345', 'images/Seed-Cafe.webp', 'images/background/2.webp', 'images/background/22.webp', 'images/background/222.webp'),
(3, 'Barefoot Cafe', 'Colombo', 'Colombo 03', 'Low', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis iste nesciunt esse officia! Dicta quia natus harum dolor laudantium velit voluptatibus accusamus molestias excepturi, in eum, ipsa quibusdam consectetur et!', 'Cafe, Local', 'Lunch, Snacks', 'Garden setting, attached shop', '10 AM - 7 PM (Mon-Sat), 11 AM - 5 PM (Sun)', '<iframe  src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1971.70120318902 9!2d79.8584527!3d6.9172921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0 x3ae25bc7651e998b%3A0xd75db7d0bb2478e4!2sBarefoot%20Cafe!5e0!3m2!1sen!2slk !4v1633095001612!5m2!1sen!2slk\" width=\"600\" height=\"450\" style=\"border:0;\"  allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'www.barefootcafe.lk', 'info@barefootcafe.com', '+94 11 258 9305', 'images/BarefootCafe.webp', 'images/background/3.webp', 'images/background/33.webp', 'images/background/333.webp'),
(4, 'Grind', 'Colombo', 'Colombo 02', 'High', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis iste nesciunt esse officia! Dicta quia natus harum dolor laudantium velit voluptatibus accusamus molestias excepturi, in eum, ipsa quibusdam consectetur et!', 'Cafe', 'Breakfast, Brunch', 'Floor-to-ceiling windows, brunch favorites', '8 AM - 6 PM', '<iframe  src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1972.0176206162542! 2d79.8713455!3d6.9013951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae 25bc7651e998b%3A0xd75db7d0bb2478e4!2sGrind%20Cafe!5e0!3m2!1sen!2slk!4v163309 5001612!5m2!1sen!2slk\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\"  loading=\"lazy\"></iframe>', 'www.grindcafe.lk', 'grindcafe@colombo.com', ' +94 11 267 1234\n', 'images/Grind.webp', 'images/background/4.webp', 'images/background/44.webp', 'images/background/444.webp'),
(5, 'Department of Coffee', 'Colombo', 'Colombo 07', 'Moderate', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis iste nesciunt esse officia! Dicta quia natus harum dolor laudantium velit voluptatibus accusamus molestias excepturi, in eum, ipsa quibusdam consectetur et!', 'Coffee, Cafe', 'Breakfast, Snacks', 'Specialty coffee, weekend brunch', '7 AM - 9 PM', '<iframe  src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1972.0176206162542! 2d79.8713455!3d6.9013951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae 25bc7651e998b%3A0xd75db7d0bb2478e4!2sDepartment%20of%20Coffee!5e0!3m2!1sen!2 slk!4v1633095001612!5m2!1sen!2slk\" width=\"600\" height=\"450\" style=\"border:0;\"  allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'www.departmentofcoffee.lk', 'coffee@colombo.com', '+94 77 888 4567', 'images/DC.webp', 'images/background/5.webp', 'images/background/55.webp', 'images/background/555.webp'),
(6, 'Butter Boutique', 'Colombo', 'Colombo 07', 'Moderate', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis iste nesciunt esse officia! Dicta quia natus harum dolor laudantium velit voluptatibus accusamus molestias excepturi, in eum, ipsa quibusdam consectetur et!', 'Desserts, Cafe', 'Breakfast, Snacks', 'Renowned for cakes and coffee', '9 AM - 8 PM', '<iframe  src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1972.0176206162542! 2d79.8713455!3d6.9013951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae 25bc7651e998b%3A0xd75db7d0bb2478e4!2sButter%20Boutique!5e0!3m2!1sen!2slk!4v163 3095001612!5m2!1sen!2slk\" width=\"600\" height=\"450\" style=\"border:0;\"  allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'www.butterboutique.lk', 'butterboutique@colombo.com', '+94 11 454 0546', 'images/Butter-boutique.webp', 'images/background/6.webp', 'images/background/66.webp', 'images/background/666.webp'),
(7, 'The Cakery', 'Colombo', 'Colombo 05', 'Moderate', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis iste nesciunt esse officia! Dicta quia natus harum dolor laudantium velit voluptatibus accusamus molestias excepturi, in eum, ipsa quibusdam consectetur et!', 'Desserts, Snacks', 'Breakfast, Light meals', 'Popular bakery, wide dessert selection', '8 AM - 7 PM', '<iframe  src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1972.0176206162542! 2d79.8713455!3d6.9013951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae 25bc7651e998b%3A0xd75db7d0bb2478e4!2sThe%20Cakery!5e0!3m2!1sen!2slk!4v163309 5001612!5m2!1sen!2slk\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\"  loading=\"lazy\"></iframe>', 'www.thecakery.lk', 'cakery@colombo.com', '+94 77 777 6543\n', 'images/Cakery.webp', 'images/background/7.webp', 'images/background/77.webp', 'images/background/777.webp'),
(8, 'Ministry of Crab', 'Colombo', ' Colombo 01', 'High', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis iste nesciunt esse officia! Dicta quia natus harum dolor laudantium velit voluptatibus accusamus molestias excepturi, in eum, ipsa quibusdam consectetur et!', 'Seafood, Sri Lankan', 'Lunch, Dinner', 'Iconic for crab dishes, upscale', '12 PM - 10 PM', '<iframe  src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1971.4750920974088! 2d79.847293!3d6.934743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25a 1bc7e92473%3A0x4f3e6c67838d715e!2sMinistry%20of%20Crab!5e0!3m2!1sen!2slk!4v16 33095001612!5m2!1sen!2slk\" width=\"600\" height=\"450\" style=\"border:0;\"  allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'www.ministryofcrab.com', 'reservations@ministryofcrab.com', '+94 11 234 2722\n', 'images/MinistryofCrab.webp', 'images/background/8.webp', 'images/background/88.webp', 'images/background/888.webp'),
(9, 'Upali’s by Nawaloka', 'Colombo', 'Colombo 07', 'High', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis iste nesciunt esse officia! Dicta quia natus harum dolor laudantium velit voluptatibus accusamus molestias excepturi, in eum, ipsa quibusdam consectetur et!', 'Sri Lankan', 'Lunch, Dinner', 'Authentic Sri Lankan dishes', '11 AM - 10 PM', '<iframe  src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1972.0176206162542! 2d79.8713455!3d6.9013951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae 25bc7651e998b%3A0xd75db7d0bb2478e4!2sUpali’s%20by%20Nawaloka!5e0!3m2!1sen!2s lk!4v1633095001612!5m2!1sen!2slk\" width=\"600\" height=\"450\" style=\"border:0;\"  allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'www.upalis.lk', 'reservations@upalis.lk', '+94 11 269 9852\n', 'images/Upali\'s.webp', 'images/background/9.webp', 'images/background/99.webp', 'images/background/999.webp'),
(10, 'Shang Palace', 'Colombo', 'Shangri-La Hotel, Colombo', 'High', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis iste nesciunt esse officia! Dicta quia natus harum dolor laudantium velit voluptatibus accusamus molestias excepturi, in eum, ipsa quibusdam consectetur et!', 'Chinese', 'Lunch, Dinner', 'Fine dining, Cantonese specialties', '12 PM - 10 PM', '<iframe  src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1971.4750920974088! 2d79.847293!3d6.934743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25a 1bc7e92473%3A0x4f3e6c67838d715e!2sShang%20Palace!5e0!3m2!1sen!2slk!4v16330950 01612!5m2!1sen!2slk\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\"  loading=\"lazy\"></iframe>', 'www.shangri-la.com/colombo', 'shangpalace@shangri-la.com', '+94 11 788 8288', 'images/ShangriLa.webp', 'images/background/10.webp', 'images/background/1010.webp', 'images/background/101010.webp'),
(11, 'The Bayleaf', 'Colombo', 'Colombo 07', 'High', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis iste nesciunt esse officia! Dicta quia natus harum dolor laudantium velit voluptatibus accusamus molestias excepturi, in eum, ipsa quibusdam consectetur et!', 'Italian', 'Lunch, Dinner', 'Heritage villa, classic Italian dishes', '12 PM - 11 PM', '<iframe  src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1972.0176206162542! 2d79.8713455!3d6.9013951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae 25bc7651e998b%3A0xd75db7d0bb2478e4!2sThe%20Bayleaf!5e0!3m2!1sen!2slk!4v163309 5001612!5m2!1sen!2slk\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\"  loading=\"lazy\"></iframe>', 'www.bayleaf.lk', 'bayleaf@colombo.com', '+94 11 269 5920', 'images/Bayleaf.webp', 'images/background/11(2).webp', 'images/background/1111.webp', 'images/background/111111.webp'),
(12, 'Graze Kitchen', 'Colombo', 'Hilton Colombo', 'High', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis iste nesciunt esse officia! Dicta quia natus harum dolor laudantium velit voluptatibus accusamus molestias excepturi, in eum, ipsa quibusdam consectetur et!', 'International buffet', 'Breakfast, Lunch, Dinner', 'Extensive buffet, live cooking stations', '6:30 AM - 10:30 PM', '<iframe  src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1971.4750920974088! 2d79.847293!3d6.934743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25a 1bc7e92473%3A0x4f3e6c67838d715e!2sRooftop%20Kandy!5e0!3m2!1sen!2slk!4v1633095 001612!5m2!1sen!2slk\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\"  loading=\"lazy\"></iframe>', 'www.hilton.com/colombo', 'grazekitchen@hilton.com', '+94 81 222 3345\n', 'images/graze-kitchen.webp', 'images/background/12.webp', 'images/background/1212.webp', 'images/background/121212.webp'),
(13, 'Rooftop', 'Kandy', 'Peradeniya Rd, Kandy', 'Moderate', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis iste nesciunt esse officia! Dicta quia natus harum dolor laudantium velit voluptatibus accusamus molestias excepturi, in eum, ipsa quibusdam consectetur et!', 'Asian Fusion, Sushi', 'Lunch, Dinner', 'Rooftop dining, scenic view', '11 AM - 11 PM', '<iframe  src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1971.4750920974088! 2d79.847293!3d6.934743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25a 1bc7e92473%3A0x4f3e6c67838d715e!2sRooftop%20Kandy!5e0!3m2!1sen!2slk!4v1633095 001612!5m2!1sen!2slk\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\"  loading=\"lazy\"></iframe>', 'www.rooftopkandy.lk', 'rooftopkandy@kandy.com', '+94 81 222 3345\n', 'images/RooftopKandy.webp', '', '', ''),
(14, 'Rockview Restaurant', 'Kandy', 'Kandy', 'Moderate', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis iste nesciunt esse officia! Dicta quia natus harum dolor laudantium velit voluptatibus accusamus molestias excepturi, in eum, ipsa quibusdam consectetur et!', 'Sri Lankan', 'Lunch', 'Views of tea plantations, local dishes', '10 AM - 10 PM', '<iframe  src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1971.4750920974088! 2d79.847293!3d6.934743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25a 1bc7e92473%3A0x4f3e6c67838d715e!2sRockview%20Restaurant!5e0!3m2!1sen!2slk!4v16 33095001612!5m2!1sen!2slk\" width=\"600\" height=\"450\" style=\"border:0;\"  allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'N/A', 'rockview@kandy.com', '+94 81 223 4433', 'images/Rockview.webp', '', '', ''),
(15, 'Sri Krishna Dosai', 'Kandy', 'D.S.Senanayake veediya, Kandy', 'Moderate', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis iste nesciunt esse officia! Dicta quia natus harum dolor laudantium velit voluptatibus accusamus molestias excepturi, in eum, ipsa quibusdam consectetur et!', 'Indian', 'Breakfast, Lunch, Dinner', 'Quick service, near Temple of the Tooth', '8 AM - 9 PM', '<iframe  src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1971.4750920974088! 2d79.847293!3d6.934743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25a 1bc7e92473%3A0x4f3e6c67838d715e!2sSri%20Krishna%20Dosai!5e0!3m2!1sen!2slk!4v1 633095001612!5m2!1sen!2slk\" width=\"600\" height=\"450\" style=\"border:0;\"  allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'N/A', 'srikrishnadosai@kandy.com', '+94 81 222 1123\n', 'images/SriKrishna.webp', '', '', ''),
(16, 'The Empire Cafe', 'Kandy', 'Temple St, Kandy', 'Moderate', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis iste nesciunt esse officia! Dicta quia natus harum dolor laudantium velit voluptatibus accusamus molestias excepturi, in eum, ipsa quibusdam consectetur et!', 'Cafe, Fusion', 'Breakfast, Lunch, Dinner', 'Retro decor, eclectic menu', '8 AM - 10 PM', '<iframe  src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1971.4750920974088! 2d79.847293!3d6.934743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25a 1bc7e92473%3A0x4f3e6c67838d715e!2sThe%20Empire%20Cafe!5e0!3m2!1sen!2slk!4v16 33095001612!5m2!1sen!2slk\" width=\"600\" height=\"450\" style=\"border:0;\"  allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'www.empirecafe.lk', 'empirecafe@kandy.com', '+94 81 223 3445\n', 'images/The-Empire-Cafe.webp', '', '', ''),
(17, 'Balaji Dosai', 'Kandy', 'Dalada Veediya, Kandy', 'Low', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis iste nesciunt esse officia! Dicta quia natus harum dolor laudantium velit voluptatibus accusamus molestias excepturi, in eum, ipsa quibusdam consectetur et!', 'South Indian', 'Breakfast, Lunch, Dinner', 'Vegetarian, budget-friendly', '8 AM - 9 PM', '<iframe  src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1971.4750920974088! 2d79.847293!3d6.934743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25a 1bc7e92473%3A0x4f3e6c67838d715e!2sBalaji%20Dosai!5e0!3m2!1sen!2slk!4v163309500 1612!5m2!1sen!2slk\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\"  loading=\"lazy\"></iframe>', 'N/A', 'balajidosai@kandy.com', ' +94 81 223 4433', 'images/BalajiDosai.webp', '', '', ''),
(18, 'Sharon Inn', 'Kandy', 'Kandy Lake', 'Low', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis iste nesciunt esse officia! Dicta quia natus harum dolor laudantium velit voluptatibus accusamus molestias excepturi, in eum, ipsa quibusdam consectetur et!', 'Sri Lankan Buffet', 'Dinner', 'Homely ambiance, vegetarian options', '6 PM - 9 PM', '<iframe  src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1971.4750920974088! 2d79.847293!3d6.934743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25a 1bc7e92473%3A0x4f3e6c67838d715e!2sSharon%20Inn!5e0!3m2!1sen!2slk!4v1633095001 612!5m2!1sen!2slk\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\"  loading=\"lazy\"></iframe>', 'N/A', 'sharoninn@kandy.com', '+94 81 222 1123', 'images/Sharon-Inn.webp', '', '', ''),
(19, 'Slightly Chilled Lounge Bar & Restaurant', 'Kandy', 'Anagarika Dharmapala Mawatha, Kandy', 'Moderate', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis iste nesciunt esse officia! Dicta quia natus harum dolor laudantium velit voluptatibus accusamus molestias excepturi, in eum, ipsa quibusdam consectetur et!', 'Asian, International', 'Lunch, Dinner', 'Rooftop bar, popular with expats', '11 AM - 11 PM', '<iframe  src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1971.4750920974088! 2d79.847293!3d6.934743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25a 1bc7e92473%3A0x4f3e6c67838d715e!2sSlightly%20Chilled%20Lounge%20Bar%20&%20 Restaurant!5e0!3m2!1sen!2slk!4v1633095001612!5m2!1sen!2slk\" width=\"600\"  height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'www.slightlychilled.lk', 'slightlychilled@kandy.com', '+94 81 223 3445\n', 'images/slightly-chilled-lounge.webp', '', '', ''),
(20, 'Helga\'s Folly', 'Kandy', '70 Rajapihilla Mawatha, Kandy', 'Moderate', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis iste nesciunt esse officia! Dicta quia natus harum dolor laudantium velit voluptatibus accusamus molestias excepturi, in eum, ipsa quibusdam consectetur et!', 'Sri Lankan, International', 'Lunch, Dinner', 'Unique decor, historical', '10 AM - 10 PM', '<iframe  src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1971.4750920974088! 2d79.847293!3d6.934743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25a 1bc7e92473%3A0x4f3e6c67838d715e!2sHelga\'s%20Folly!5e0!3m2!1sen!2slk!4v16330950 01612!5m2!1sen!2slk\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\"  loading=\"lazy\"></iframe>', 'www.helgasfolly.lk', 'helgasfolly@kandy.com', '+94 81 223 4433', 'images/Helga.webp', '', '', ''),
(21, 'Savoury', 'Kandy', 'Yatinuwara Veediya, Kandy', 'Moderate', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis iste nesciunt esse officia! Dicta quia natus harum dolor laudantium velit voluptatibus accusamus molestias excepturi, in eum, ipsa quibusdam consectetur et!', 'Sri Lankan', 'Lunch, Dinner', 'Traditional flavors, popular with locals', '11 AM - 9 PM', '<iframe  src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1971.4750920974088! 2d79.847293!3d6.934743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25a 1bc7e92473%3A0x4f3e6c67838d715e!2sSavoury!5e0!3m2!1sen!2slk!4v1633095001612!5 m2!1sen!2slk\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\"  loading=\"lazy\"></iframe>', 'N/A', 'savoury@kandy.com', '+94 81 223 3445', 'images/savoury-cake.webp', '', '', ''),
(22, 'Theva Cuisine', 'Kandy', 'Theva Residency, Kandy', 'High', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis iste nesciunt esse officia! Dicta quia natus harum dolor laudantium velit voluptatibus accusamus molestias excepturi, in eum, ipsa quibusdam consectetur et!', 'Fusion, International', 'Breakfast, Lunch, Dinner', 'Fine dining with a view', '7 AM - 10 PM', '<iframe  src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1971.4750920974088! 2d79.847293!3d6.934743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25a 1bc7e92473%3A0x4f3e6c67838d715e!2sTheva%20Cuisine!5e0!3m2!1sen!2slk!4v1633095 001612!5m2!1sen!2slk\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\"  loading=\"lazy\"></iframe>', 'www.theva.lk', 'theva@kandy.com', '+94 81 223 4433\n', 'images/Theva-Cuisine-at-Theva-Residency.webp', '', '', ''),
(23, 'Devon Restaurant', 'Kandy', 'Dalada Veediya, Kandy', 'Moderate', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis iste nesciunt esse officia! Dicta quia natus harum dolor laudantium velit voluptatibus accusamus molestias excepturi, in eum, ipsa quibusdam consectetur et!', 'Sri Lankan, Indian', 'Breakfast, Lunch, Dinner', 'Local favorite, fast service', '7 AM - 10 PM', '<iframe  src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1971.4750920974088! 2d79.847293!3d6.934743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25a 1bc7e92473%3A0x4f3e6c67838d715e!2sDevon%20Restaurant!5e0!3m2!1sen!2slk!4v16330 95001612!5m2!1sen!2slk\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\"  loading=\"lazy\"></iframe>', 'N/A', 'devon@kandy.com', '+94 81 222 2333\n', 'images/Devon-Kandy.webp', '', '', ''),
(24, 'Cafe Aroma Inn', 'Kandy', 'Colombo St, Kandy', 'High', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis iste nesciunt esse officia! Dicta quia natus harum dolor laudantium velit voluptatibus accusamus molestias excepturi, in eum, ipsa quibusdam consectetur et!', 'Cafe, International', 'Breakfast, Lunch, Dinner', 'Cozy cafe atmosphere, good coffee', '8 AM - 10 PM', '<iframe  src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1971.4750920974088! 2d79.847293!3d6.934743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25a 1bc7e92473%3A0x4f3e6c67838d715e!2sCafe%20Aroma%20Inn!5e0!3m2!1sen!2slk!4v163 3095001612!5m2!1sen!2slk\" width=\"600\" height=\"450\" style=\"border:0;\"  allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'www.aromainn.lk', 'aromainn@kandy.com', '+94 81 223 4433', 'images/CafeAroma.webp', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` mediumint(9) NOT NULL,
  `status` text NOT NULL,
  `test` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `fname`, `lname`, `email`, `password`, `code`, `status`, `test`) VALUES
(7, 'Dus', 'B', 'thanushanga@gmail.com', '$2y$10$14b7g1yQeOiDS4irSVdUrOAm9o2VsMte1ROEQwcPja5iTdNREkzp2', 0, 'verified', ''),
(8, 'kalu', 'kumara', 'viduladenethsalwathura@gmail.com', '$2y$10$PxAe6Qvln2n8UWQVj6.5w.JAGkTwz8bSu8RlOOl3ZgRVRq1kBNhOq', 0, 'verified', ''),
(9, 'Ashab', 'ninsara', 'ashannimsara1234@gmail.com', '$2y$10$yLWB3pJY0dikWaqtMWQgeepPs7KAuDS9OI3DLgYN3Kw0MPrUZDIu6', 0, 'verified', ''),
(10, 'Pasidu', 'Sachintha', 'pasidusachintha0917@gmail.cm', '$2y$10$rnUKS833Pxo2FisGCwwB3uFNbZkp8t1eyxAVT3uh9B7KeDTahhWZq', 435563, 'notverified', ''),
(11, 'Pasidu', 'Sachintha', 'pasidusachintha0917@mail.com', '$2y$10$R4miIHpQ6x2i6hXBM/9H9Osfg42dFYSERWH6xKvQZ15b4o3BapPm.', 158400, 'notverified', ''),
(12, 'Pasidu', 'Sachintha', 'pasidusachintha0917@gmail.com', '$2y$10$NanPZtDvrA0HIuUA9BFgOeFUkj1aq6G0efMjxj0e6tQOm0FBVDQDC', 0, 'verified', ''),
(15, 'Tharusha', 'Pathirana', 'automotiverusl@outlook.com', '$2y$10$P3eo22bwKk1DwYAUQBqx.OX6G/UWC87MXz9.nipK8jLj01dJSVqjm', 0, 'verified', ''),
(17, 'Dulara', 'Abhishek', 'itt2022092@tec.rjt.ac.lk', '$2y$10$tiQvuIrUnrnl/gGVQK.4w.6f.Xk7mVafO6zCl4wvtBmKFo6EHsc56', 0, 'verified', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
