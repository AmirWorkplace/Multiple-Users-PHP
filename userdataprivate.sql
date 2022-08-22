-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2022 at 09:02 AM
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
-- Database: `userdataprivate`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(200) NOT NULL,
  `user_unique_id` int(100) NOT NULL,
  `post_title` text NOT NULL,
  `post_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `user_unique_id`, `post_title`, `post_content`) VALUES
(1, 1656788460, 'My First Pagination Try Was Successfull...!', 'Amir Ali'),
(2, 1656788460, 'My First Pagination Try Was not Successfull...!', 'Syed Amir Ali'),
(3, 1656788460, 'Lorem Ispum', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus cupiditate officia omnis? Recusandae atque reprehenderit libero modi at ea obcaecati nihil. Quasi quod illo perspiciatis, aperiam laboriosam soluta nemo non.'),
(4, 1656788460, 'Amir Ali I am', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia unde deleniti eius quo asperiores, ipsa enim ea animi, voluptas ex alias beatae nisi exercitationem ratione. Enim voluptatibus nesciunt dolorum similique! Praesentium ratione voluptates, harum pariatur sed illo fugit maxime ut temporibus nobis nemo, cumque natus.\r\n'),
(5, 1656788460, 'okey', 'okey\r\n'),
(6, 204259603, 'My First Pagination Try Was Successfull...!', 'aMIR aLI\r\n'),
(7, 204259603, 'My First Pagination Try Was Successfull...!', 'aMIR aLI\r\n'),
(8, 204259603, 'WHY THIS?', 'I am maybe Successful !'),
(9, 204259603, 'Next Try!', 'Why???????????????'),
(10, 204259603, 'Next Try too!', ' Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali Amir Ali '),
(11, 1553313937, 'First Try!', 'Ayed Amr Ali'),
(12, 229560832, 'Why Die not Works!', 'Owh Sheets\r\nOwh Sheets\r\nOwh Sheets\r\nOwh Sheets\r\nOwh Sheets\r\nOwh Sheets'),
(13, 931001093, 'Next Try!', 'My Post'),
(14, 1656788460, 'Circuit 2 Exam', 'I am amir Ali');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL,
  `user_unique_id` int(100) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_unique_id`, `fname`, `lname`, `email`, `password`, `date`) VALUES
(1, 1656788460, 'Amir', 'Ali', 'amirralli300400@gmail.com', 'amir', 'Friday 19th of August 2022 05:01:24 AM'),
(2, 1553313937, 'Parvez', 'Mia', 'parvez1@gmail.com', 'parvez1', 'Friday 19th of August 2022 02:22:37 PM'),
(3, 1164736961, 'Apon', 'Ali', 'apon@gmail.com', 'aponapon', 'Friday 19th of August 2022 02:25:20 PM'),
(4, 204259603, 'solimullah', 'khan', 'soli@gmail.com', '123456', 'Friday 19th of August 2022 05:07:38 PM'),
(5, 229560832, 'Parvej', 'Star', 'star@gmail.com', '123456', 'Monday 22nd of August 2022 04:24:34 AM'),
(6, 931001093, 'Abu ', 'Sayed', 'sayed@gmail.com', 'sayed', 'Monday 22nd of August 2022 06:48:36 AM'),
(7, 417507012, 'Syed ', 'Amir', 'amir123@gmail.com', 'amir123', 'Monday 22nd of August 2022 08:29:16 AM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
