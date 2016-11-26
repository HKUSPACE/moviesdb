-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2016 at 05:26 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movies_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `year` int(4) UNSIGNED NOT NULL,
  `director` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `duration` int(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `name`, `description`, `year`, `director`, `type`, `country`, `duration`) VALUES
(1, 'Infernal Affairs', 'A story between a mole in the police department and an undercover cop. Their objectives are the same: to find out who is the mole, and who is the cop.', 2002, 'Wai-Keung Lau (as Andrew Lau), Alan Mak', 'Crime, Drama, Mystery', 'Hong Kong', 101),
(2, 'Kung Fu Panda 3', 'Continuing his "legendary adventures of awesomeness", Po must face two hugely epic, but different threats: one supernatural and the other a little closer to his home.', 2016, 'Alessandro Carloni, Jennifer Yuh Nelson', 'Animation, Action, Adventure', 'USA', 95),
(3, 'Batman Begins', 'After training with his mentor, Batman begins his fight to free crime-ridden Gotham City from the corruption that Scarecrow and the League of Shadows have cast upon it.', 2005, 'Christopher Nolan', 'Action, Adventure', 'USA', 140),
(4, 'Avatar', 'A paraplegic marine dispatched to the moon Pandora on a unique mission becomes torn between following his orders and protecting the world he feels is his home.', 2009, 'James Cameron', 'Action, Adventure, Fantasy', 'USA', 162),
(5, 'Train to Busan', 'While a zombie-virus breaks out in South Korea, a couple of passengers struggle to survive on the train from Seoul to Busan.', 2016, 'Sang-ho Yeon', 'Action, Drama, Horror', 'Korea', 114);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
