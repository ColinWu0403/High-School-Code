-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2022 at 09:08 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop1`
--

-- --------------------------------------------------------

--
-- Table structure for table `userreview`
--

CREATE TABLE `userreview` (
  `Shop1ID` bigint(20) NOT NULL,
  `FirstName` varchar(125) NOT NULL,
  `LastName` varchar(125) NOT NULL,
  `Rating` int(11) NOT NULL,
  `Review` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userreview`
--

INSERT INTO `userreview` (`Shop1ID`, `FirstName`, `LastName`, `Rating`, `Review`) VALUES
(1, 'John', 'Doe', 5, 'Great delivery at great prices!'),
(2, 'Jane', 'Dove', 4, 'Good prices'),
(3, 'Joseph', 'Joestar', 4, 'Yare Yare Daze'),
(4, 'Dio', 'Brando', 5, 'Za Warudo!'),
(5, 'Karen', 'Smith', 2, 'I just don\'t like this company, don\'t take it personally'),
(6, 'Bob', 'Marley', 4, 'Spaghetti'),
(7, 'Frank', 'Herbert', 5, 'Its a bit sandy'),
(8, 'Brad', 'Pitt', 5, 'Very Nice. I got my depression pills within 3 days of ordering'),
(9, 'Samuel ', 'Jackson', 1, 'MotherF- these meds are expired'),
(10, 'Samwise', 'Gamgee', 3, 'What Mr. Frodo said'),
(11, 'Frodo', 'Baggins', 3, 'I\'ve had better herbs in the shire, but this works too'),
(12, 'Joe', 'Rogan', 2, 'Vaccines arent real, these guys are ripping you off. Hahah Im so smort.'),
(13, 'Childish', 'Gambino', 5, 'This is America'),
(14, 'Joe', 'Biden', 5, 'Nice'),
(15, 'Donald', 'Trump', 2, 'Obamacare sucks'),
(16, 'Barrack', 'Obama', 5, 'shut up '),
(17, 'Will', 'Smith', 5, 'Pharma C is simply incredible. They have the best prices and selection of both non-prescription and prescription medicine on the market. With a small extra fee, you can also have your medicine delivered to your address within a week if you live in the US. This is a game-changer when it comes to online pharmaceutical markets!'),
(18, 'Brendan', 'Fraser', 5, 'Great prices and delivery is always fast!'),
(19, 'Frank', 'Ocean', 5, 'Cheap Meds');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userreview`
--
ALTER TABLE `userreview`
  ADD PRIMARY KEY (`Shop1ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userreview`
--
ALTER TABLE `userreview`
  MODIFY `Shop1ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
