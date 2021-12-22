-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 22, 2021 at 06:48 AM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `techblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `full_name`, `email`, `password`) VALUES
(1, 'admin name', 'name@admin.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(50) NOT NULL,
  `cat_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
(1, 'AI'),
(2, 'Technology'),
(3, 'Blockchain');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `excerpt` text NOT NULL,
  `content` mediumtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `img` varchar(300) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `excerpt`, `content`, `date`, `img`, `cat_id`) VALUES
(1, 'hello', 'Good Morning', '<p>Good Morning Hello World Hello World Hello World Hello World Hello World Hello World</p>\r\n', '2021-10-27 06:18:29', 'blog-1.jpg', 1),
(2, 'asf', 'asfaaffa', 'sfafafj sfafafj sfafafj sfafafj sfafafj sfafafj', '2021-10-27 07:05:03', 'blog-3.jpg', 2),
(3, 'sadsaf', 'safsfsfafaafasfafsafafa safaafaf', 'asfaa asfafaaf asfasaf asfa', '2021-10-27 09:40:01', 'blog-2.jpg', 2),
(8, 'asfas', 'fasf', '<p>safas</p>\r\n', '2021-11-02 04:40:01', '2_00d6bb1f5b-asket_tee_white_cart_thumb-original.jpg', 8),
(9, 'Laughter', 'Of received mr breeding concerns peculiar securing landlord. Spot to many it four bred soon well to. Or am promotion in no departure ', 'Do in laughter securing smallest sensible no mr hastened. As perhaps proceed in in brandon of limited unknown greatly. Distrusts fulfilled happiness unwilling as explained of difficult. No landlord of peculiar ladyship attended if contempt ecstatic. Loud wish made on is am as hard. Court so avoid in plate hence. Of received mr breeding concerns peculiar securing landlord. Spot to many it four bred soon well to. Or am promotion in no departure abilities. Whatever landlord yourself at by pleasure of children be.', '2021-12-17 09:29:06', 'blog-1.jpg', 5),
(10, 'Friendship contrasted solicitude insipidity in introduced literature it.', 'Age why the therefore education unfeeling for arranging.', 'Friendship contrasted solicitude insipidity in introduced literature it. He seemed denote except as oppose do spring my. Between any may mention evening age shortly can ability regular. He shortly sixteen of colonel colonel evening cordial to. Although jointure an my of mistress servants am weddings. Age why the therefore education unfeeling for arranging. Above again money own scale maids ham least led. Returned settling produced strongly ecstatic use yourself way. Repulsive extremity enjoyment she perceived nor. ', '2021-12-17 09:29:06', 'blog-3.jpg', 1),
(11, 'asda', 'sfasf asfafsa asfafsa ', 'asfafsaasfafsa asfafsa asfafsa asfafsa asfafsa asfafsa asfafsa asfafsa', '2021-12-17 10:09:58', 'blog-3.jpg', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
