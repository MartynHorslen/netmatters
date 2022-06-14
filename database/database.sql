-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 14, 2022 at 12:48 PM
-- Server version: 8.0.28
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `martynho_netmatters`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `first_name`, `last_name`, `image`) VALUES
(1, 'Elliot', 'Peacock', 'img/author-1.jpg'),
(2, 'Mark', 'Reilly', 'img/author-2.jpg'),
(3, 'Bethany ', 'Shakespeare', 'img/author-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  `marketing` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `telephone`, `subject`, `message`, `marketing`) VALUES
(24, 'Testy McTestalot', 'tester@te.st', '01234 5687', 'test', 'This is a test message.', 1),
(27, 'Othello', 'deemonti07@gmail.com', '0333444242', 'eeejej', 'dddha', 1),
(28, 'Othello', 'deemonti07@gmail.com', '0333444242', 'eeejej', 'dddha', 1),
(29, 'Anna', 'blabla@gmail.com', '0777777777', 'Netmatters', 'Testing the page on Chrome', 1),
(30, 'Anna', 'blabla@gmail.com', '0777777777', 'Netmatters', 'Test one more time', 1),
(31, 'Jezza Jezabelle', 'Jeremy.Hanson@netmatters-scs.com', '07666666666', 'A subject', 'A message', 0),
(33, 'Jezza Jezabelle', 'Jeremy.Hansen@netmatters-scs.com', '07666666666', 'A subject', 'A message', 0),
(34, 'Brendan', 'brendan-boyle@netmatters-scs.com', '0891505050', 'Net Matters', 'My Net is full of holes!\r\nThis is not acceptable.', 0),
(35, 'Martyn Horslen', 'martynhorslen@gmail.com', '07984245214', 'afdgcgh', 'agdas', 1),
(36, 'Martyn Horslen', 'martynhorslen@gmail.com', '07984245214', '\\sfdgsga', 'asdfgaha', 0);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(103) NOT NULL,
  `link` varchar(100) NOT NULL,
  `tag_id` int NOT NULL,
  `post_img` varchar(100) NOT NULL,
  `date` datetime(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `author_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `link`, `tag_id`, `post_img`, `date`, `author_id`) VALUES
(1, 'Business Development Account Manager', 'Salary Range £25k+ per annum + Bonus + Benefits Hours 40 hours per week, Mon – Fri Location Wymondha', '', 1, 'img/business-dev.jpg', '2022-03-25 00:00:00.000000', 1),
(2, 'Junior New Business Executive', 'Salary Range £20,000 Hours 40 hours per week, Mon – Fri Location Wymondham, Norfolk/Part-time remot', '', 2, 'img/junior.jpg', '2022-03-24 00:00:00.000000', 2),
(3, 'Receptionist', 'Salary Range £20,000-£21,000 Hours 40 hours per week, Monday - Friday Location Wymondham, Norfolk Wh', '#', 3, 'img/receptionist.jpg', '2022-03-23 00:00:00.000000', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `link`, `department`) VALUES
(1, 'careers', '#', 'Bespoke Software'),
(2, 'careers', '#', 'Telecoms Services'),
(3, 'careers', '#', 'Web Design');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
