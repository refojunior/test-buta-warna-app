-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2019 at 01:28 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test-buta-warna`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `user_answer` varchar(10) NOT NULL,
  `result` enum('true','false') NOT NULL,
  `stat` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `user_id`, `user_answer`, `result`, `stat`) VALUES
(11, 7, '1987211134725407', '42', 'true', '0'),
(12, 1, '1987211134725407', '2', 'true', '0'),
(13, 9, '1987211134725407', '7', 'true', '0'),
(14, 4, '1987211134725407', '74', 'true', '0'),
(15, 2, '1987211134725407', '8', 'true', '0'),
(16, 5, '1987211134725407', '12', 'true', '0'),
(17, 8, '1987211134725407', '15', 'true', '0'),
(18, 6, '1987211134725407', '26', 'true', '0'),
(19, 3, '1987211134725407', '6', 'false', '0'),
(20, 10, '1987211134725407', '37', 'false', '0'),
(22, 5, '1987211134725407', '12', 'true', '0'),
(23, 1, '1987211134725407', '2', 'true', '0'),
(24, 7, '1987211134725407', '42', 'true', '0'),
(25, 10, '1987211134725407', '57', 'true', '0'),
(26, 3, '1987211134725407', '5', 'true', '0'),
(27, 2, '1987211134725407', '8', 'true', '0'),
(28, 9, '1987211134725407', '7', 'true', '0'),
(29, 6, '1987211134725407', '26', 'true', '0'),
(30, 8, '1987211134725407', '15', 'true', '0'),
(31, 4, '1987211134725407', '74', 'true', '0');

-- --------------------------------------------------------

--
-- Table structure for table `multiple_choice`
--

CREATE TABLE `multiple_choice` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `value` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `multiple_choice`
--

INSERT INTO `multiple_choice` (`id`, `question_id`, `value`) VALUES
(1, 1, '2'),
(2, 1, '3'),
(3, 1, '1'),
(4, 1, '4'),
(5, 2, '3'),
(6, 2, '9'),
(7, 2, '8'),
(8, 2, '2'),
(9, 3, '2'),
(10, 3, '5'),
(11, 3, '3'),
(12, 3, '6'),
(13, 4, '74'),
(14, 4, '72'),
(15, 4, '14'),
(16, 4, '11'),
(17, 5, '17'),
(18, 5, '11'),
(19, 5, '13'),
(20, 5, '12'),
(21, 6, '26'),
(22, 6, '25'),
(23, 6, '24'),
(24, 6, '23'),
(25, 7, '43'),
(26, 7, '45'),
(27, 7, '92'),
(28, 7, '42'),
(29, 8, '15'),
(30, 8, '16'),
(31, 8, '14'),
(32, 8, '13'),
(33, 9, '2'),
(34, 9, '5'),
(35, 9, '7'),
(36, 9, '4'),
(37, 10, '52'),
(38, 10, '57'),
(39, 10, '32'),
(40, 10, '37');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `answer` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `image`, `answer`) VALUES
(1, 'Angka berapakah gambar diatas?', '1.jpg', '2'),
(2, 'Angka berapakah gambar diatas?', '2.jpg', '8'),
(3, 'Angka berapakah gambar diatas?', '3.jpg', '5'),
(4, 'Angka berapakah gambar diatas?', '4.jpg', '74'),
(5, 'Angka berapakah gambar diatas?', '5.jpg', '12'),
(6, 'Angka berapakah gambar diatas?', '6.jpg', '26'),
(7, 'Angka berapakah gambar diatas?', '7.jpg', '42'),
(8, 'Angka berapakah gambar diatas?', '8.jpg', '15'),
(9, 'Angka berapakah gambar diatas?', '9.jpg', '7'),
(10, 'Angka berapakah gambar diatas?', '10.jpg', '57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `stat` varchar(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `stat`, `date`) VALUES
('1987211134725407', 'Refo Junior', 'refojunior5@gmail.com', 'done', '0000-00-00 00:00:00'),
('1987211134725407', 'Refo Junior', 'refojunior5@gmail.com', 'done', '0000-00-00 00:00:00'),
('1987211134725407', 'Refo Junior', 'refojunior5@gmail.com', 'done', '0000-00-00 00:00:00'),
('1987211134725407', 'Refo Junior', 'refojunior5@gmail.com', 'done', '0000-00-00 00:00:00'),
('1987211134725407', 'Refo Junior', 'refojunior5@gmail.com', 'done', '0000-00-00 00:00:00'),
('1987211134725407', 'Refo Junior', 'refojunior5@gmail.com', 'done', '0000-00-00 00:00:00'),
('1987211134725407', 'Refo Junior', 'refojunior5@gmail.com', 'done', '0000-00-00 00:00:00'),
('1987211134725407', 'Refo Junior', 'refojunior5@gmail.com', 'done', '0000-00-00 00:00:00'),
('1987211134725407', 'Refo Junior', 'refojunior5@gmail.com', 'done', '0000-00-00 00:00:00'),
('1987211134725407', 'Refo Junior', 'refojunior5@gmail.com', 'done', '2019-01-21 05:41:48'),
('1987211134725407', 'Refo Junior', 'refojunior5@gmail.com', 'progress', '2019-01-22 00:28:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multiple_choice`
--
ALTER TABLE `multiple_choice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `multiple_choice`
--
ALTER TABLE `multiple_choice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
