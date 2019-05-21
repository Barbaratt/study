-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 22, 2019 at 01:23 AM
-- Server version: 5.7.23
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `social`
--

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `tags` text NOT NULL,
  `path` text NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `name`, `description`, `tags`, `path`, `type`) VALUES
(1, 'me', 'description', 'alegria', 'library/asw/me.jpg', 'jpg'),
(2, 'ddsa', 'ds', 'cbc', 'library/asw/cbc.jpg', 'jpg');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id` int(11) NOT NULL,
  `user` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `user`) VALUES
(19, 's'),
(20, 'luccasrenner@icloud.com'),
(21, 'luccasrenner@icloud.com'),
(22, 'luccas'),
(23, 'luccas'),
(24, 'adasdas'),
(25, 'adasdas'),
(26, 'adasdas'),
(27, 'dsa'),
(28, 'dsa'),
(29, 'dsa'),
(30, 'luccasrenner@icloud.com'),
(31, 'dsadasd'),
(32, 'renner@email'),
(33, 'renner@icloud.com'),
(34, 'renner@icloud.com'),
(35, 'torontoestudios@gmail.com'),
(17, 'dddd');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` text,
  `name` text,
  `pass` text,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `name`, `pass`, `about`) VALUES
(1, 'luccasrenner@icloud.com', 'Lucas', '979d472a84804b9f647bc185a877a8b5', ':D'),
(2, 'luccasrenner@icloud.com', 'Lucas', '979d472a84804b9f647bc185a877a8b5', ':D'),
(3, '', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(4, '', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(5, '', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(6, 's', 's', '03c7c0ace395d80182db07ae2c30f034', 's'),
(7, 's', 's', '03c7c0ace395d80182db07ae2c30f034', 's'),
(8, 's', 's', '03c7c0ace395d80182db07ae2c30f034', 's'),
(9, 's', 's', '03c7c0ace395d80182db07ae2c30f034', 's'),
(10, 's', 's', '03c7c0ace395d80182db07ae2c30f034', 's'),
(11, 's', 's', '03c7c0ace395d80182db07ae2c30f034', 's'),
(12, 's', 's', '03c7c0ace395d80182db07ae2c30f034', 's'),
(13, 's', 's', '03c7c0ace395d80182db07ae2c30f034', 's'),
(14, 's', 's', '03c7c0ace395d80182db07ae2c30f034', 's'),
(15, 's', 's', '03c7c0ace395d80182db07ae2c30f034', 's'),
(16, 's', 's', '03c7c0ace395d80182db07ae2c30f034', 's'),
(17, 's', 's', '03c7c0ace395d80182db07ae2c30f034', 's'),
(18, 's', 's', '03c7c0ace395d80182db07ae2c30f034', 's'),
(19, 's', 's', '03c7c0ace395d80182db07ae2c30f034', 's'),
(20, 'luccasrenner@icloud.com', '123', '202cb962ac59075b964b07152d234b70', 's'),
(21, 'luccasrenner@icloud.com', 'Lucas Souza', '202cb962ac59075b964b07152d234b70', 'Im happy'),
(22, 'luccas', 'ds', '77963b7a931377ad4ab5ad6a9cd718aa', ''),
(23, 'luccas', 'dsad', '77963b7a931377ad4ab5ad6a9cd718aa', 'dsa'),
(24, 'adasdas', 'dsadsa', 'a2c2c4126a68c6fb7bf933141af0cdca', ''),
(25, 'adasdas', 'dsadsa', '7d70663568cac5af684503681e3a4d41', 'fds'),
(26, 'adasdas', 'dsadsa', 'd41d8cd98f00b204e9800998ecf8427e', 'fds'),
(27, 'dsa', 'dsadsa', '38c55423e123aca445982dfd897a552d', 'dsad'),
(28, 'dsa', 'dsadsa', '2f43b42fd833d1e77420a8dae7419000', 'dsad'),
(29, 'dsa', 'dsadsa', '7a5aa6e6d8de017c3c8add4b3bbc8a49', 'dsad'),
(30, 'luccasrenner@icloud.com', 'lucas souza', '202cb962ac59075b964b07152d234b70', 'Im a student'),
(31, 'dsadasd', 'adsdsa', '38c55423e123aca445982dfd897a552d', 'dsa'),
(32, 'renner@email', 'adsdsa', 'd41d8cd98f00b204e9800998ecf8427e', 'dsa'),
(33, 'renner@icloud.com', 'adsdsa', 'd41d8cd98f00b204e9800998ecf8427e', 'dsa'),
(34, 'renner@icloud.com', 'adsdsa', 'd41d8cd98f00b204e9800998ecf8427e', 'dsa'),
(35, 'torontoestudios@gmail.com', 'torontoestudios', '202cb962ac59075b964b07152d234b70', ''),
(36, 'dddd', 'dd', '05878003d02eed82c5171a7c6f2cd460', 'addas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
