-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2022 at 10:01 AM
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
-- Database: `netmatters`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(6) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  `marketing` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `telephone`, `subject`, `message`, `marketing`) VALUES
(23, 'Martyn Horslen', 'martynhorslen@gmail.com', '0798424521', 'test', 'This is a test message.', 0),
(24, 'Testy McTestalot', 'tester@te.st', '01234 5687', 'test', 'This is a test message.', 1),
(25, 'Martyn Horslen', 'martynhorslen@gmail.com', '0798424521', 'sdghhfda', 'Robert&#039;); DROP TABLE STUDENTS; --', 1),
(26, 'Martyn Horslen', 'martynhorslen@gmail.com', '0798424521', 'sdghhfda', 'Robert&#039;); DROP TABLE STUDENTS; --', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(103) NOT NULL,
  `link` varchar(100) NOT NULL,
  `tag_id` int(6) NOT NULL,
  `post_img` varchar(100) NOT NULL,
  `date` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `author_id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `id` int(6) NOT NULL,
  `name` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
