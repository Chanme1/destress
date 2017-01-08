-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jan 08, 2017 at 09:11 AM
-- Server version: 5.5.42
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `destress`
--

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` int(11) NOT NULL,
  `quoter` text,
  `quote` text
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `quoter`, `quote`) VALUES
(1, 'Anonymous', 'If you want to achieve greatness stop asking for permission.'),
(2, 'John Wooden', 'Things work out best for those who make the best of how things work out.'),
(3, 'Anonymous', 'To live a creative life, we must lose our fear of being wrong.'),
(4, 'Jim Rohn', 'If you are not willing to risk the usual you will have to settle for the ordinary.'),
(5, 'Anonymous', 'Trust because you are willing to accept the risk, not because it''s safe or certain.'),
(6, 'Swami Vivekananda', 'Take up one idea. Make that one idea your life--think of it, dream of it, live on that idea. Let the brain, muscles, nerves, every part of your body, be full of that idea, and just leave every other idea alone. This is the way to success.'),
(7, 'Walt Disney', 'All our dreams can come true if we have the courage to pursue them.'),
(8, 'Anonymous', 'Good things come to people who wait, but better things come to those who go out and get them.'),
(9, 'Anonymous', 'If you do what you always did, you will get what you always got.'),
(10, 'Winston Churchill', 'Success is walking from failure to failure with no loss of enthusiasm.'),
(11, 'Proverb', 'Just when the caterpillar thought the world was ending, he turned into a butterfly.'),
(12, 'Anonymous', 'Successful entrepreneurs are givers and not takers of positive energy.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;