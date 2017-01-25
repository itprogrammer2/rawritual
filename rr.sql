-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 25, 2017 at 06:47 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rr`
--

-- --------------------------------------------------------

--
-- Table structure for table `cms_about`
--

CREATE TABLE `cms_about` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `sub_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms_about`
--

INSERT INTO `cms_about` (`id`, `title`, `content`, `sub_content`) VALUES
(1, 'A diet delivery service is your most convenient & delicious way to get pre-prepared healthy meals.', 'are people&#039;s', 'diets successful?'),
(2, 'but why do their diets fail?', '37%      ', '    63%'),
(4, '', '32/F, MarQuee Mall Aniceto Gueco St., Angeles, Pampanga Philippines', '0928 559 0448 | (045) 304 4264'),
(5, 'OUR MENU', 'Sorda atcursus nec luctus a lore tristique orci acem. Duis ultrici es pharetra magna. Donec accum san malesuada orcinec sit amet eros.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),
(6, 'OUR STORY', 'Our founder started the ritual of raw juicing a few years ago. Her ideas and products were so delicious and healthy that friends, now partners, clamored to join her in spreading the juicing lifestyle that could help many others attain better health and beauty. Thus, in 2015, the <strong>Raw Ritual</strong> Kitchen was established.', 'The Raw Ritual Kitchen only uses the freshest of ingredients, free of pesticides and fertilizers that are harmful in our bodies. Our produce are handpicked to capture the nutrients of the fruits and vegetables at its prime.<br><br>Thus, we monitor compliance with our standards to ensure the quality in making our cold pressed juices, salads and wraps. Our chefs and nutritionists design a healthy balance of taste and diet that are beneficial in helping detoxify, cleanse, shed excess weight or rejuvenate the body. We help clients meet their wellness goals with flavors that will stimulate and dsatisfy even the pickiest palate.<br><br>We offer an assortment of juicing programs to meet their needs and we provide online support and coaching other than entertaining answers to the most frequently asked questions. Change is never easy. That is why we are here to give support and motivate people to adapt to a healthier lifestyle. We walk our talk, or rather, eat and drink our talk. We understand, because we practice the wellness habits as well.<br><br>â€‹â€‹â€‹â€‹â€‹â€‹â€‹We are here to ease the busy way of life by formulating a program that would meet the needs and wellness goals of our partners with a good selection of products that will constantly excite their palate.');

-- --------------------------------------------------------

--
-- Table structure for table `cms_icon`
--

CREATE TABLE `cms_icon` (
  `id` int(11) NOT NULL,
  `percentage` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `rank` int(11) NOT NULL,
  `image_file` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms_icon`
--

INSERT INTO `cms_icon` (`id`, `percentage`, `description`, `rank`, `image_file`, `created_by`, `date_created`) VALUES
(1, 35, 'Couldn&#039;t avoid temptation', 1, 'fastfood.png', 1, '2017-01-20 09:31:01'),
(2, 23, 'Making healthy meals takes too long', 2, 'watch.jpg', 1, '2017-01-20 09:39:30'),
(3, 17, 'Healthy options are usually expensive', 3, 'wallet.png', 1, '2017-01-20 09:39:30'),
(4, 10, 'Don&#39;t like the taste', 4, 'tastebad.jpg', 1, '2017-01-20 09:41:29');

-- --------------------------------------------------------

--
-- Table structure for table `cms_icon_logs`
--

CREATE TABLE `cms_icon_logs` (
  `id` int(11) NOT NULL,
  `icon_id` int(11) NOT NULL,
  `field_name` varchar(255) NOT NULL,
  `logs` text NOT NULL,
  `createrd_by` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cms_image`
--

CREATE TABLE `cms_image` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image_file` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms_image`
--

INSERT INTO `cms_image` (`id`, `description`, `image_file`, `created_by`, `date_created`) VALUES
(1, 'Logo', 'logo.png', 1, '2017-01-23 07:00:33'),
(2, 'Background', 'background.png', 1, '2017-01-23 07:00:33'),
(3, 'Tips', 'tip.png', 1, '2017-01-23 07:21:07'),
(4, 'About Image', 'logo1.png', 1, '2017-01-25 02:26:34');

-- --------------------------------------------------------

--
-- Table structure for table `cms_image_logs`
--

CREATE TABLE `cms_image_logs` (
  `id` int(11) NOT NULL,
  `icon_id` int(11) NOT NULL,
  `field_name` varchar(255) NOT NULL,
  `logs` text NOT NULL,
  `createrd_by` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ref_category`
--

CREATE TABLE `ref_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_category`
--

INSERT INTO `ref_category` (`id`, `category_name`, `created_by`, `date_created`) VALUES
(1, 'Master Cleanse', 1, '2017-01-20 04:21:46'),
(2, 'Premium Blends', 1, '2017-01-23 07:32:56'),
(3, 'Fresh Salads', 1, '2017-01-23 07:33:41'),
(4, 'Wraps', 1, '2017-01-23 07:34:00'),
(5, 'DIY Signature Healthy Bowl', 1, '2017-01-23 07:34:45');

-- --------------------------------------------------------

--
-- Table structure for table `ref_category_logs`
--

CREATE TABLE `ref_category_logs` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `field_name` varchar(255) NOT NULL,
  `logs` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pword` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_log` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `fname`, `uname`, `pword`, `date_created`, `last_log`, `date_modified`) VALUES
(1, 'Jeffrey Cabang', 'admin', '05fe7461c607c33229772d402505601016a7d0ea', '2017-01-16 03:37:13', '2017-01-25 03:20:37', '2017-01-25 03:20:37');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `amount` decimal(11,2) NOT NULL,
  `image_file` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`id`, `category_id`, `product_name`, `description`, `amount`, `image_file`, `created_by`, `date_created`) VALUES
(1, 1, 'Hot Lemonada', 'Cayanine Pepper, Lemon, Honey, Water', '99.00', '1484896820.png', 1, '2017-01-20 07:20:20'),
(2, 2, 'Green Brew', 'Celery, Cucumber, Malunggay Leaves, Pineapple, Romaine, Spinach, Green Iced Lettuce.', '145.00', '1485157023.jpg', 1, '2017-01-23 07:37:03'),
(3, 2, 'Chia Blast', 'Pineapple, Apple, Chia Seeds, Kiwi, Pear', '145.00', '1485157110.jpg', 1, '2017-01-23 07:38:30'),
(4, 3, 'Greek Salad', '', '135.00', '1485157145.jpg', 1, '2017-01-23 07:39:05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu_logs`
--

CREATE TABLE `tbl_menu_logs` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `field_name` varchar(255) NOT NULL,
  `logs` text NOT NULL,
  `createrd_by` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cms_about`
--
ALTER TABLE `cms_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_icon`
--
ALTER TABLE `cms_icon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_icon_logs`
--
ALTER TABLE `cms_icon_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_image`
--
ALTER TABLE `cms_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_image_logs`
--
ALTER TABLE `cms_image_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_category`
--
ALTER TABLE `ref_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_category_logs`
--
ALTER TABLE `ref_category_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_menu_logs`
--
ALTER TABLE `tbl_menu_logs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cms_about`
--
ALTER TABLE `cms_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `cms_icon`
--
ALTER TABLE `cms_icon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cms_icon_logs`
--
ALTER TABLE `cms_icon_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cms_image`
--
ALTER TABLE `cms_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cms_image_logs`
--
ALTER TABLE `cms_image_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ref_category`
--
ALTER TABLE `ref_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `ref_category_logs`
--
ALTER TABLE `ref_category_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_menu_logs`
--
ALTER TABLE `tbl_menu_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
