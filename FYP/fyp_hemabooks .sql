-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2018 at 05:36 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fyp_hemabooks`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `Admin_id` int(11) NOT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `PASSWORD` varchar(100) DEFAULT NULL,
  `Admin_Name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`Admin_id`, `UserName`, `PASSWORD`, `Admin_Name`) VALUES
(1, 'test@gmail.com', '123', 'amiina'),
(2, 'aliya@gmail.com', '123', 'aliya'),
(3, 'sidiik', 'sidiik12@gmail.com', '123'),
(4, 'hodan', 'hodan@gmail.com', '123d31'),
(6, 'hodan', 'abdo@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `book_name` varchar(100) DEFAULT NULL,
  `auther_name` varchar(200) DEFAULT NULL,
  `title` varchar(225) DEFAULT NULL,
  `keywords` varchar(270) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `category_id`, `book_name`, `auther_name`, `title`, `keywords`, `price`, `image`, `description`) VALUES
(25, 2, 'af soomli sare labaad', NULL, 'Af-Soomaali Sare Fasalka 2aad', 'Af-Soomaali Sare,soomali,books', '3', 'somali2.jpg', '<p>afsoomali sare</p>'),
(26, 2, 'af soomli sare sadexaad', NULL, 'Af-Soomaali Sare Fasalka 3aad', 'Af-Soomaali Sare ', '3', 'somali3.jpg', '<p>af soomli sare 3aad</p>\r\n'),
(27, 2, 'af soomli sare afraad', NULL, 'Af-Soomaali Sare Fasalka 4aad', NULL, '4', 'somali4.jpg', '<p>af soomli sare 4aad</p>\r\n'),
(28, 2, 'Biology Form 1', NULL, 'Biology Form 1', 'Biology Form 1', '4', 'Bio-F1.jpg', '<p><a href=\"https://www.hemabooks.com/products/2025\">Biology Form 1</a></p>\r\n'),
(29, 2, 'Biology Form 2', NULL, 'Biology Form 2', 'Biology Form 4', '4', 'Bio-F2.jpg', '<p><a href=\"https://www.hemabooks.com/products/2025\">Biology Form&nbsp;</a>2</p>\r\n'),
(30, 2, 'Biology Form 3', NULL, 'Biology Form 3', 'Biology Form 4', '3', 'Bio-F3.jpg', '<p><a href=\"https://www.hemabooks.com/products/2025\">Biology Form&nbsp;</a>3</p>\r\n'),
(31, 2, 'Biology Form 4', NULL, 'Biology Form 4', 'Biology Form 4', '3', 'Bio-F14.jpg', '<p><a href=\"https://www.hemabooks.com/products/2025\">Biology Form&nbsp;</a>4</p>\r\n'),
(32, 2, 'af soomli sare kowaad', NULL, 'Af-Soomaali Sare Fasalka 1aad', NULL, '4', 'somali1.jpg', ''),
(34, 2, 'Arabic Form 2', NULL, 'Arabic Form 2', NULL, '4', 'arabic2.jpg', '<p><a href=\"https://www.hemabooks.com/products/2158\">Arabic Form 2</a></p>\r\n'),
(35, 2, 'Arabic Form 1', NULL, 'Arabic Form 1', NULL, '3', 'arabic1.jpg', '<p><a href=\"https://www.hemabooks.com/products/2158\">Arabic Form&nbsp;</a>1</p>\r\n'),
(37, 2, 'Chemistry Form 1', NULL, 'Chemistry Form 1', NULL, '3', 'Chem-F1.jpg', '<h1>Chemistry Form 1</h1>\r\n'),
(42, 2, 'Chemistry Form 2', NULL, 'Chemistry Form 2', '', '3', 'Chem-F2.jpg', '<h1>Chemistry Form 2</h1>'),
(43, 5, 'Enlish', NULL, '\r\n\r\n21 Speeches That Shaped Our Wor', 'englsih,general', '3', 'eng1.jpg', NULL),
(44, 5, 'english book', NULL, 'A DOLL\'S HOUSE AND OTHER PLAYS', 'english book', '3', 'eng2.jpg', 'general english book'),
(45, 5, 'enlish book', 'ENGLISH', 'A Good African Story', 'english', '3', 'eng3.jpg', 'enlish general books'),
(46, 5, 'ENGLISH', 'ENGLSIH', 'A GOOD MAN IN AFRICA', 'ENLISH BOOKS,GENERAL', '3', 'eng4.jpg', NULL),
(47, 5, 'ENGLISH BOOK', '', 'A MAN OF THE PEOPLE', 'ENGLISH BOOK', '3', 'eng5.jpg', NULL),
(48, 5, 'ENGLISH BOOK', 'ENGLISH BOOK', 'A Modern History of the Somali', 'ENGLISH, BOOK', '3', 'eng6.jpg', 'ENGLISH BOOK'),
(49, 5, 'ENGLISH BOOK', 'ENGLISH BOOK', 'A NEW EARTH', 'ENGLISH BOOK', '3', 'eng7.jpg', 'ENGLISH BOOK'),
(50, 5, 'ENGLISH BOOK', 'ENGLISH BOOK', 'A Perfect Life', 'ENGLISH BOOK', '3', 'eng8.jpg', 'ENGLISH BOOK'),
(51, 5, 'ENGLISH BOOK', 'ENGLISH BOOK', 'A ROOM WITH A VIEW', 'ENGLISH BOOK', '3', 'eng9.jpg', NULL),
(52, 5, 'ENGLISH BOOK', 'ENGLISH BOOK', 'A VIEW FROM THE BRIDGE', 'ENGLISH BOOK', '3', 'eng10.jpg', 'ENGLISH BOOK'),
(53, 5, 'ENGLISH BOOK', 'ENGLISH BOOK', 'AFRICA', 'ENGLISH BOOK', '3', 'eng11.jpg', 'ENGLISH BOOK'),
(54, 5, 'ENGLISH BOOK', 'ENGLISH BOOK', 'After You (Exp)', 'ENGLISH BOOK', '3', 'eng12.jpg', 'ENGLISH BOOK'),
(55, 5, 'ENGLISH BOOK', 'ENGLISH BOOK', 'ENGLISH BOOK', 'ENGLISH BOOK', '3', 'eng13.jpg', 'ENGLISH BOOK'),
(56, 5, 'ENGLISH BOOK', 'ENGLISH BOOK', 'An Image of Africa', 'ENGLISH BOOK', '3', 'eng14.jpg', 'ENGLISH BOOK'),
(57, 5, 'ENGLISH BOOK', 'ENGLISH BOOK', 'AN INSPECTOR CALLS AND OTHER PL', 'ENGLISH BOOK', '3', 'eng15.jpg', NULL),
(58, 3, 'local books', '\r\n\r\nDariiqa Guusha', '\r\nDariiqa Guusha', 'local,books', '3', 'l1.jpg', 'local publications'),
(59, 3, 'local books', 'XALKA QOYSKA', 'XALKA QOYSKA', 'local books', '3', 'l2.jpg', 'local books'),
(61, 3, 'local books', 'Wehelka Baraha', 'Wehelka Baraha', 'local books', '3', 'l3.jpg', 'local books'),
(63, 3, 'local books', '\r\n\r\nWaayo-Tebiye', 'Waayo-Tebiye', 'local books', '3', 'l4.jpg', 'local books'),
(65, 3, 'local books', 'local books', 'Tobanka Fure ee Guusha', 'local books', '3', 'l5.jpg', 'local books'),
(67, 3, 'local books', 'local books', 'Taariikh Ururada Islamiyinta So', 'local books', '3', 'l6.jpg', 'local books'),
(69, 3, 'local books', 'local books', 'Taajir', 'local books', '3', 'l7.jpg', 'local books'),
(71, 3, 'local books', 'local books', 'Sheekaba Sheekay Keentaa', 'local books', '3', 'l8.jpg', 'local books'),
(73, 3, 'local books', 'local books', 'Shaqadoon', 'local books', '3', 'l9.jpg', 'local books'),
(75, 3, 'local books', 'local books', 'SIYAASAD DHAQAMEED', 'local books', '3', 'l10.jpg', 'local books'),
(79, 3, 'local books', 'local books', 'RIYAAQ', 'local books', '3', 'l12.jpg', 'local books'),
(80, 3, 'local books', 'local books', 'SITAAD', 'local books', '3', 'l11.jpg', NULL),
(81, 6, 'islamic', 'islamic1', '\r\n\r\nAbqariyatu al-Imam Ali', 'islamic', '3', 'islamic1.jpg', 'islamic1'),
(82, 6, 'islamic', 'islamic1', 'Abqariyatu al-Saddiq', 'islamic', '3', 'islamic2.jpg', 'islamic1'),
(83, 6, 'islamic', 'islamic1', 'Abqariyatu Khalid', 'islamic', '3', 'islamic3.jpg', 'islamic1'),
(84, 6, 'islamic', 'islamic1', 'Abqariyatu Omar', 'islamic', '3', 'islamic4.jpeg', 'islamic1'),
(85, 6, 'islamic', 'islamic1', 'Abqariyatu Othman', 'islamic', '3', 'islamic5.jpg', 'islamic1'),
(86, 6, 'islamic', 'islamic1', 'Abu bakr alsidiq awal alkhulafa', 'islamic', '3', 'islamic6.jpg', 'islamic1'),
(87, 6, 'islamic', 'islamic1', 'Adatun hasanah khazanatul akhla', 'islamic', '3', 'islamic7.jpg', 'islamic1'),
(88, 6, 'islamic', 'islamic1', 'Ahmed bn Hanbal bayna mihnati a', 'islamic', '3', 'islamic8.jpg', 'islamic1'),
(89, 6, 'islamic', 'islamic1', 'al-Arba\'un al-nawawiyyah', 'islamic', '3', 'islamic9.jpg', 'islamic1'),
(90, 6, 'islamic', 'islamic1', 'al-Faruq Omar part 1&2\r\n\r\n', 'islamic', '3', 'islamic10.jpg', 'islamic1'),
(91, 6, 'islamic', 'islamic1', 'Al-jami\' li asma\' Allah Alhusna', 'islamic', '3', 'islamic11.jpg', 'islamic1'),
(92, 6, 'islamic', 'islamic1', 'al-Khulafa\' al-Rashidun', 'islamic', '3', 'islamic12.jpg', 'islamic1'),
(93, 6, 'islamic', 'islamic1', 'al-Khulafa\' al-Rashidun', 'islamic', '3', 'islamic13.jpg', 'islamic1'),
(94, 6, 'islamic', 'islamic1', 'al-Umrah al-Musawwarah', 'islamic', '3', 'islamic18.jpg', 'islamic1'),
(95, 6, 'islamic', 'islamic1', 'al-Mad-khal ila\' thaqafah al-Is', 'islamic', '3', 'islamic15.jpg', 'islamic1'),
(96, 6, 'islamic', 'islamic1', 'al-Rahiq al-Makhtum aswad', 'islamic', '3', 'islamic17.jpg', 'islamic1'),
(97, 4, 'KG Books', 'KG', '\r\n\r\nECD Sound Activities Level 1', 'kg,books', '3', 'kg1.jpg', 'KG BOOKS'),
(98, 4, 'KG Books', 'KG', 'ECD Sound Activities Level 2', 'kg,books', '3', 'kg2.jpg', 'KG BOOKS'),
(99, 4, 'KG Books', 'KG', 'ECD W.Book Creative English L3', 'kg,books', '3', 'kg3.jpg', 'KG BOOKS'),
(100, 4, 'KG Books', 'KG', 'ECD WKB-Handwritting LVL 2', 'kg,books', '3', 'kg4.jpg', 'KG BOOKS'),
(101, 4, 'KG Books', 'KG', 'ECD Work book Numbers Lvl1', 'kg,books', '3', 'kg5.jpg', 'KG BOOKS'),
(102, 4, 'KG Books', 'KG', 'ECD Work book Numbers Lvl2', 'kg,books', '3', 'kg6.jpg', 'KG BOOKS'),
(103, 4, 'KG Books', 'KG', 'ECD WorkBook Early ENG LVL3', 'kg,books', '3', 'kg7.jpg', 'KG BOOKS'),
(104, 4, 'KG Books', 'KG', '\r\n\r\nECD Workbook first phonics lvl2', 'kg,books', '3', 'kg8.jpg', 'KG BOOKS'),
(105, 4, 'KG Books', 'KG', 'ECD Workbook handwriting Level1', 'kg,books', '3', 'kg9.jpg', 'KG BOOKS'),
(106, 4, 'KG Books', 'KG', 'ECD Workbook- Number Work LVL 3', 'kg,books', '3', 'kg10.jpg', 'KG BOOKS'),
(107, 4, 'KG Books', 'KG', 'KG1 Al-Tarbiyah Al-Islamiyyah', 'kg,books', '3', 'kg11.jpg', 'KG BOOKS'),
(108, 4, 'KG Books', 'KG', 'KG1 Muqarrar Al-Qira\'ah SB', 'kg,books', '3', 'kg12.jpg', 'KG BOOKS'),
(109, 4, 'KG Books', 'KG', 'Premier Numbers WKB M.CLS', 'kg,books', '3', 'kg13.jpg', 'KG BOOKS'),
(110, 4, 'KG Books', 'KG', 'Premier Numbers WKB-PreUnit', 'kg,books', '3', 'kg14.jpg', 'KG BOOKS'),
(111, 4, 'KG Books', 'KG', 'Premier Language-PreUnit', 'kg,books', '3', 'kg15.jpg', 'KG BOOKS'),
(112, 4, 'KG Books', 'KG', 'Premier Numbers WKB', 'kg,books', '3', 'kg16.jpg', 'KG BOOKS'),
(113, 1, 'PRIMARY', 'PRIMARY', 'Creative Arts Pupils BK2', 'primary,books', '3', 'p1.jpg', 'primary books'),
(114, 1, 'PRIMARY', 'PRIMARY', 'Creative Arts Pupils BK3', 'primary,books', '3', 'p2.jpg', 'primary books'),
(115, 1, 'PRIMARY', 'PRIMARY', 'Creative Arts Pupils BK4', 'primary,books', '3', 'p3.jpg', 'primary books'),
(116, 1, 'PRIMARY', 'PRIMARY', 'Creative Arts Pupils BK5', 'primary,books', '3', 'p4.jpg', 'primary books'),
(117, 1, 'PRIMARY', 'PRIMARY', 'Creative Arts Pupils BK6', 'primary,books', '3', 'p5.jpg', 'primary books'),
(118, 1, 'PRIMARY', 'PRIMARY', 'Eeman Readig Series LV3-Book 3', 'primary,books', '3', 'p17.jpg', 'primary books'),
(119, 1, 'PRIMARY', 'PRIMARY', 'Creative Arts Pupils BK7', 'primary,books', '3', 'p7.jpg', 'primary books'),
(120, 1, 'PRIMARY', 'PRIMARY', 'Creative Arts Pupils BK8', 'primary,books', '3', 'p8.jpg', 'primary books'),
(121, 1, 'primary', NULL, 'Eeman Readig Series LV2-Book 2', 'primary,books', '3', 'p9.jpg', 'primary'),
(122, 1, 'primary', NULL, 'Eeman Readig Series LV2-Book 3', 'primary,books', '3', 'p10.jpg', 'primary'),
(123, 1, 'primary', NULL, 'Eeman Readig Series LV2-Book 4', 'primary,books', '3', 'p11.jpg', 'primary'),
(124, 1, 'primary', NULL, 'Eeman Readig Series LV2-Book 5', 'primary,books', '3', 'p12.jpg', 'primary'),
(125, 1, 'primary', NULL, 'Eeman Readig Series LV2-Book 6', 'primary,books', '3', 'p13.jpg', 'primary'),
(126, 1, 'primary', NULL, 'Eeman Readig Series LV2-WBK', 'primary,books', '3', 'p14.jpg', 'primary'),
(127, 1, 'primary', NULL, 'Eeman Readig Series LV3-Book 1', 'primary,books', '3', 'p15.jpg', 'primary'),
(128, 1, 'primary', NULL, 'Eeman Readig Series LV3-Book 2', 'primary,books', '3', 'p16.jpg', 'primary'),
(129, 2, 'Geography Form 1', NULL, 'Geography Form 1', 'Geography Form 1,secondary', '3', 'Geo-F1.jpg', 'Geography Form 1,secondary'),
(130, 2, 'Geography Form 1', NULL, 'Geography Form 2', 'Geography Form 2,secondary', '3', 'Geo-F2.jpg', 'Geography Form 1,secondary'),
(131, 2, 'Geography Form 3', NULL, 'Geography Form 3', 'Geography Form 3,secondary', '3', 'Geo-F3.jpg', 'Geography Form 1,secondary'),
(132, 2, 'Geography Form 3', NULL, 'Geography Form 3', 'Geography Form 3,secondary', '3', 'Geo-F1.jpg', 'Geography Form 1,secondary'),
(133, 2, 'Maths Form 1', NULL, '\r\n\r\nMaths Form 1', '\r\n\r\nMaths Form 1 ,secondary', '3', 'Math-F1.jpg', '\r\n\r\nMaths  Form 1,secondary'),
(134, 2, 'Maths Form 1', NULL, '\r\n\r\nMaths Form 2', '\r\n\r\nMaths Form 2 ,secondary', '3', 'Math-F2.jpg', '\r\n\r\nMaths  Form 2,secondary'),
(135, 2, 'Maths Form 1', NULL, '\r\n\r\nHistory Form 2', '\r\n\r\nMaths Form 2 ,History Form 2', '3', 'His-F2.jpg', '\r\n\r\nHistory Form 2,secondary'),
(136, 2, 'Maths Form 1', NULL, '\r\n\r\nHistory Form 3', '\r\n\r\nMaths Form 3 ,History Form 2', '3', 'His-F3.jpg', '\r\n\r\nHistory Form 3,secondary');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(110) NOT NULL,
  `book_id` int(11) NOT NULL,
  `quanity` int(110) NOT NULL,
  `price` int(11) NOT NULL,
  `book_image` varchar(100) NOT NULL,
  `Title` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cetegories`
--

CREATE TABLE `cetegories` (
  `category_id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cetegories`
--

INSERT INTO `cetegories` (`category_id`, `name`) VALUES
(1, 'primary'),
(2, 'secondary'),
(3, 'local publication'),
(4, 'kindergarten '),
(5, 'General Reading-English'),
(6, 'Islamic'),
(9, 'General Reading-Arabic');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `FirstName` varchar(270) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `email` varchar(270) NOT NULL,
  `PASSWORD` varchar(230) NOT NULL,
  `Confirm` varchar(100) NOT NULL,
  `join_date` datetime NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `FirstName`, `LastName`, `phone_number`, `email`, `PASSWORD`, `Confirm`, `join_date`, `image`) VALUES
(51, 'aasia', 'aasia', 634337090, 'amiisha7@gmail.com', 'amina123??', 'amina123??', '2018-12-31 00:00:00', 'amina.jpg'),
(54, 'aasha', 'aasha', 634337090, 'amiisha7090@hotmail.com', '9ca6e7d7c5b97e39faeaa5cf9a8da47c', 'a3faae10236f7003c25bfbd93ebe7757', '2018-12-31 00:00:00', ''),
(59, 'aasia', 'aasia', 634337090, 'amiisha7090@hotmail.com', 'amina123@@', 'bf9e4572c72f1676d937674d844425ff', '2018-11-30 00:00:00', ''),
(61, 'aasia', 'aasia', 634337090, 'amiisha7090@hotmail.com', '28b85d72f6b6bd1640e33a2460a1272f', '28b85d72f6b6bd1640e33a2460a1272f', '2018-12-31 00:00:00', '.images/.Capture.PNG.'),
(75, 'gggggggggg', '', 0, 'test', '123', '', '0000-00-00 00:00:00', ''),
(76, 'gggggggggg', 'gggggggggg', 0, '', 'd41d8cd98f00b204e9800998ecf8427e', 'd41d8cd98f00b204e9800998ecf8427e', '0000-00-00 00:00:00', '.images/..'),
(77, 'gggggggggg', 'gggggggggg', 0, '', 'd41d8cd98f00b204e9800998ecf8427e', 'd41d8cd98f00b204e9800998ecf8427e', '0000-00-00 00:00:00', '.images/..'),
(78, 'mohamed', 'mohamed', 555, 'samah@gmail.com', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', '2018-09-14 00:00:00', '.images/.khadra.jpg.'),
(79, 'gg', 'gg', 66, 'amisha@amina.com', 'c20ad4d76fe97759aa27a0c99bff6710', 'c20ad4d76fe97759aa27a0c99bff6710', '0000-00-00 00:00:00', '.images/..'),
(80, '66', '66', 66, '66', '3295c76acbf4caaed33c36b1b5fc2cb1', '3295c76acbf4caaed33c36b1b5fc2cb1', '2018-09-14 00:00:00', '.images/..'),
(81, 'cidi', 'cidi', 890, '9090', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', '2018-09-26 00:00:00', '.images/.aa.jpg.'),
(82, '', '', 0, '', 'd41d8cd98f00b204e9800998ecf8427e', 'd41d8cd98f00b204e9800998ecf8427e', '0000-00-00 00:00:00', '.images/..'),
(83, '', '', 0, '', 'd41d8cd98f00b204e9800998ecf8427e', 'd41d8cd98f00b204e9800998ecf8427e', '0000-00-00 00:00:00', '.images/..'),
(84, '', '', 0, '', 'd41d8cd98f00b204e9800998ecf8427e', 'd41d8cd98f00b204e9800998ecf8427e', '0000-00-00 00:00:00', '.images/..'),
(85, '', '', 0, '', 'd41d8cd98f00b204e9800998ecf8427e', 'd41d8cd98f00b204e9800998ecf8427e', '0000-00-00 00:00:00', '.images/..'),
(86, 'nn', 'nn', 777, 'amisha@amina.com', 'ac627ab1ccbdb62ec96e702f07f6425b', '47bce5c74f589f4867dbd57e9ca9f808', '2018-09-22 00:00:00', '.images/.Malala Yousafzai biography.jpg.');

-- --------------------------------------------------------

--
-- Table structure for table `feed_back`
--

CREATE TABLE `feed_back` (
  `Name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feed_back`
--

INSERT INTO `feed_back` (`Name`, `email`, `phone`, `message`) VALUES
('amiisha', '888888888', 0, 'hi hema books'),
('amiisha', '888888888', 0, 'amiina'),
('amiisha', '888888888', 0, 'amiina'),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_date` varchar(20) DEFAULT NULL,
  `books` varchar(110) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `invoice` varchar(100) DEFAULT NULL,
  `customer_email` varchar(100) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `qauntity` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_date`, `books`, `status`, `customer_id`, `price`, `invoice`, `customer_email`, `book_id`, `qauntity`) VALUES
(1, '2008-07-04 00:00:00', 'Chemistry Form 1', 'complete', 59, '3', '26781', 'amiisha7090@hotmail.com', 29, '2'),
(2, '2008-07-09 00:00:00', 'soomlisare fomr1', 'complete', 51, '3', '889', 'amiisha7@gmail.com', 30, '1'),
(3, '0000-00-00 00:00:00', '(Af-Soomaali Sare Fasalka 3aad) 1, ', 'complete', 51, '4', '1550012081', 'amiisha7@gmail.com', NULL, NULL),
(4, '08/08/2018', '(Af-Soomaali Sare Fasalka 3aad) 1, ', 'complete', 51, '4', '1497829401', 'amiisha7@gmail.com', NULL, NULL),
(5, '08/08/2018', '(Biology Form 4) 1, (Biology Form 1) 1, ', 'complete', 51, '7', '1267716341', 'amiisha7@gmail.com', NULL, NULL),
(6, '08/08/2018', '(1) Biology Form 1, (1) Biology Form 4, ', 'Pending', 51, '7', '2007957627', 'amiisha7@gmail.com', NULL, NULL),
(7, '08/11/2018', '(1) Biology Form 1, ', 'pending', 51, '4', '239593823', 'amiisha7@gmail.com', NULL, NULL),
(8, '08/11/2018', '(1) Biology Form 1, ', 'pending', 51, '4', '2078468486', 'amiisha7@gmail.com', NULL, NULL),
(9, '08/12/2018', '(1) Af-Soomaali Sare Fasalka 2aad, (1) Af-Soomaali Sare Fasalka 3aad, ', 'pending', 51, '6', '1963499504', 'amiisha7@gmail.com', NULL, NULL),
(10, '08/12/2018', '(1) Biology Form 2, ', 'pending', 51, '4', '1019295107', 'amiisha7@gmail.com', NULL, NULL),
(11, '08/16/2018', '(1) Af-Soomaali Sare Fasalka 2aad, ', 'pending', 51, '3', '373657515', 'amiisha7@gmail.com', NULL, NULL),
(20, '09/12/2018', '(1) Af-Soomaali Sare Fasalka 4aad, (1) Biology Form 1, ', 'pending', 51, '8', '224844350', 'amiisha7@gmail.com', NULL, NULL),
(21, '09/12/2018', '', 'pending', 51, '0', '176459603', 'amiisha7@gmail.com', NULL, NULL),
(22, '09/12/2018', '(1) Af-Soomaali Sare Fasalka 3aad, ', 'pending', 51, '3', '377871761', 'amiisha7@gmail.com', NULL, NULL),
(23, '09/12/2018', '(1) Af-Soomaali Sare Fasalka 3aad, ', 'pending', 51, '3', '1814695862', 'amiisha7@gmail.com', NULL, NULL),
(24, '09/12/2018', '(1) Af-Soomaali Sare Fasalka 4aad, (1) Biology Form 4, ', 'pending', 51, '7', '1799052506', 'amiisha7@gmail.com', NULL, NULL),
(25, '09/12/2018', '(1) Af-Soomaali Sare Fasalka 4aad, (1) Biology Form 4, ', 'pending', 51, '7', '1799052506', 'amiisha7@gmail.com', NULL, NULL),
(26, '09/12/2018', '(1) Af-Soomaali Sare Fasalka 3aad, (1) Af-Soomaali Sare Fasalka 4aad, ', 'pending', 51, '7', '1750068929', 'amiisha7@gmail.com', NULL, NULL),
(27, '09/12/2018', '', 'pending', 51, '0', '332413500', 'amiisha7@gmail.com', NULL, NULL),
(28, '09/12/2018', '(1) Af-Soomaali Sare Fasalka 4aad, ', 'pending', 51, '4', '1198165612', 'amiisha7@gmail.com', NULL, NULL),
(29, '09/12/2018', '', 'pending', 51, '0', '1390955332', 'amiisha7@gmail.com', NULL, NULL),
(30, '09/12/2018', '(1) Af-Soomaali Sare Fasalka 4aad, ', 'pending', 51, '4', '645615549', 'amiisha7@gmail.com', NULL, NULL),
(31, '09/12/2018', '(1) Af-Soomaali Sare Fasalka 3aad, ', 'pending', 51, '3', '107664236', 'amiisha7@gmail.com', NULL, NULL),
(32, '09/12/2018', '(1) Af-Soomaali Sare Fasalka 4aad, ', 'pending', 51, '4', '995334975', 'amiisha7@gmail.com', NULL, NULL),
(33, '09/14/2018', '', 'pending', 51, '0', '1876267262', 'amiisha7@gmail.com', NULL, NULL),
(34, '09/14/2018', '(1) Af-Soomaali Sare Fasalka 1aad, (1) ENGLSIH, ', 'pending', 51, '7', '2138523643', 'amiisha7@gmail.com', NULL, NULL),
(43, '09/15/2018', '', 'pending', 75, '0', '522008', '', NULL, NULL),
(45, '09/15/2018', '(1) Af-Soomaali Sare Fasalka 4aad, ', 'pending', 51, '4', '822336888', 'amiisha7@gmail.com', NULL, NULL),
(49, '09/15/2018', '(1) english book, ', 'pending', 51, '3', '1937965499', 'amiisha7@gmail.com', NULL, NULL),
(51, '09/15/2018', '(1) local books, ', 'pending', 51, '3', '266282849', 'amiisha7@gmail.com', NULL, NULL),
(52, '09/15/2018', '(1) Af-Soomaali Sare Fasalka 3aad, ', 'pending', 51, '3', '1524851895', 'amiisha7@gmail.com', NULL, NULL),
(53, '09/15/2018', '(1) Af-Soomaali Sare Fasalka 4aad, ', 'pending', 51, '4', '608901641', 'amiisha7@gmail.com', NULL, NULL),
(54, '09/15/2018', '(1) Af-Soomaali Sare Fasalka 3aad, ', 'pending', 51, '3', '2054009363', 'amiisha7@gmail.com', NULL, NULL),
(55, '09/15/2018', '(1) ENGLSIH, ', 'pending', 51, '3', '530631963', 'amiisha7@gmail.com', NULL, NULL),
(56, '09/15/2018', '(1) english book, ', 'pending', 51, '3', '335267250', 'amiisha7@gmail.com', NULL, NULL),
(57, '09/15/2018', '(1) ENGLISH BOOK, ', 'complete', 51, '3', '2129778301', 'amiisha7@gmail.com', NULL, NULL),
(58, '09/15/2018', '(1) primary, ', 'pending', 51, '3', '1150063315', 'amiisha7@gmail.com', NULL, NULL),
(59, '09/15/2018', '(1) Biology Form 1, ', 'complete', 79, '4', '1950806274', 'amisha@amina.com', NULL, NULL),
(61, '09/17/2018', '(1) A Good African Story, ', 'complete', 75, '3', '2003560242', 'test', NULL, NULL),
(62, '09/17/2018', '(1) ECD W.Book Creative English L3, ', 'pending', 75, '3', '2027884603', 'test', NULL, NULL),
(63, '09/17/2018', '(1) ECD W.Book Creative English L3, ', 'pending', 75, '3', '1872589418', 'test', NULL, NULL),
(64, '09/17/2018', '(1) ECD W.Book Creative English L3, ', 'pending', 75, '3', '1160038320', 'test', NULL, NULL),
(65, '09/17/2018', '(1) Af-Soomaali Sare Fasalka 2aad, (1) Biology Form 3, ', 'complete', 75, '6', '2144864607', 'test', NULL, NULL),
(66, '09/17/2018', '(1) Af-Soomaali Sare Fasalka 2aad, (1) Af-Soomaali Sare Fasalka 4aad, ', 'complete', 51, '7', '78557388', 'amiisha7@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `tixrac` varchar(50) NOT NULL,
  `payment_date` varchar(51) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `customer_id`, `amount`, `phone`, `tixrac`, `payment_date`) VALUES
(1, 51, 0, 45464564, '4645646464564564', '9'),
(2, 51, 4, 445645, '464565', '9'),
(3, 51, 3, 3454, '5353535353', '09/12/2018'),
(4, 51, 4, 55, '999', '09/12/2018'),
(5, 51, 0, 8888, '0633864763', '09/14/2018'),
(6, 51, 7, 88, '999', '09/14/2018'),
(7, 75, 0, 4337090, '7090', '09/15/2018'),
(8, 51, 4, 123, '33', '09/15/2018'),
(9, 51, 3, 222, '222', '09/15/2018'),
(10, 51, 3, 889, '889', '09/15/2018'),
(11, 51, 3, 889, '77777777777', '09/15/2018'),
(12, 51, 4, 4337090, '77777777777', '09/15/2018'),
(13, 51, 3, 990, '999', '09/15/2018'),
(14, 51, 3, 7777, '999', '09/15/2018'),
(15, 51, 3, 7090, '9000', '09/15/2018'),
(16, 51, 3, 655555, '8888', '09/15/2018'),
(17, 51, 3, 999, '00009090', '09/15/2018'),
(18, 79, 4, 9090, '4337090', '09/15/2018'),
(19, 75, 3, 222, '222', '09/17/2018'),
(20, 75, 3, 4337090, '999', '09/17/2018'),
(21, 75, 3, 4774444, '4444', '09/17/2018'),
(22, 75, 3, 544, '44', '09/17/2018'),
(23, 75, 6, 909090, '88888', '09/17/2018'),
(24, 51, 7, 4337090, '889', '09/17/2018');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`Admin_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cetegories`
--
ALTER TABLE `cetegories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `Admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cetegories`
--
ALTER TABLE `cetegories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `cetegories` (`category_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
