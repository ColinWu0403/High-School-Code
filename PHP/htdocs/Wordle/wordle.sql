-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2023 at 03:46 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `wordle`
--

CREATE TABLE `wordle` (
  `ID` int(11) NOT NULL,
  `Word` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wordle`
--

INSERT INTO `wordle` (`ID`, `Word`) VALUES
(1, 'Apple'),
(2, 'Chair'),
(3, 'Beach'),
(4, 'Dance'),
(5, 'Plant'),
(6, 'Earth'),
(7, 'Bread'),
(8, 'Money'),
(9, 'Water'),
(10, 'Party'),
(11, 'Hotel'),
(12, 'Mouse'),
(13, 'Dream'),
(14, 'Watch'),
(15, 'Pizza'),
(16, 'Happy'),
(17, 'Music'),
(18, 'Smile'),
(19, 'Bread'),
(20, 'House'),
(21, 'Grape'),
(22, 'River'),
(23, 'Teach'),
(24, 'Light'),
(25, 'Woman'),
(26, 'Brain'),
(27, 'Fruit'),
(28, 'Brain'),
(29, 'Hotel'),
(30, 'Plane'),
(31, 'Drink'),
(32, 'Tiger'),
(33, 'Ocean'),
(34, 'Paper'),
(35, 'Angel'),
(36, 'Lemon'),
(37, 'Bread'),
(38, 'Plant'),
(39, 'Phone'),
(40, 'Horse'),
(41, 'Beach'),
(42, 'Chair'),
(43, 'Smile'),
(44, 'Happy'),
(45, 'Dream'),
(46, 'Earth'),
(47, 'Cloud'),
(48, 'Water'),
(49, 'Storm'),
(50, 'Light'),
(51, 'Bunch'),
(52, 'Clown'),
(53, 'Dwarf'),
(54, 'Eager'),
(55, 'Fable'),
(56, 'Grief'),
(57, 'Hatch'),
(58, 'Icicle'),
(59, 'Juice'),
(60, 'Knock'),
(61, 'Laser'),
(62, 'Merry'),
(63, 'Noble'),
(64, 'Onion'),
(65, 'Piano'),
(66, 'Queen'),
(67, 'Rapid'),
(68, 'Silly'),
(69, 'Truck'),
(70, 'Unity'),
(71, 'Vivid'),
(72, 'Wagon'),
(73, 'Xerox'),
(74, 'Yacht'),
(75, 'Zebra'),
(76, 'Ample'),
(77, 'Blaze'),
(78, 'Crate'),
(79, 'Drift'),
(80, 'Elbow'),
(81, 'Flask'),
(82, 'Giant'),
(83, 'Hedge'),
(84, 'Inkjet'),
(85, 'Jolly'),
(86, 'Kneel'),
(87, 'Lucky'),
(88, 'Might'),
(89, 'Nerve'),
(90, 'Oasis'),
(91, 'Pilot'),
(92, 'Quick'),
(93, 'Razor'),
(94, 'Sable'),
(95, 'Tulip'),
(96, 'Umbra'),
(97, 'Vault'),
(98, 'Wedge'),
(99, 'Xylan'),
(100, 'Yodel');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
