-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2024 at 03:16 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alefba`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` enum('men','women','outlet') NOT NULL,
  `product_primary_img` varchar(1500) DEFAULT NULL,
  `product_secondary_img` varchar(1500) DEFAULT NULL,
  `tags` text DEFAULT NULL,
  `badge` varchar(50) DEFAULT NULL,
  `sale_price` decimal(10,2) DEFAULT NULL,
  `original_price` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `product_primary_img`, `product_secondary_img`, `tags`, `badge`, `sale_price`, `original_price`, `created_at`, `updated_at`) VALUES
(1, 'Oversize Cotton Dress', 'women', '/assets/img/product/oversize-cotton-dress-1.png', '/assets/img/product/oversize-cotton-dress-2.png', 'Dress, Women', '40%', 17.00, 24.00, '2024-09-02 11:43:48', '2024-09-02 13:13:12'),
(2, 'Strapless Dress', 'women', '/assets/img/product/strapless-dress-1.png', '/assets/img/product/strapless-dress-2.png', 'Dress, Women', '40%', 18.00, 26.00, '2024-09-02 11:43:48', '2024-09-02 13:13:12'),
(3, 'Red Denim Jacket', 'men', '/assets/img/product/red-denim-jacket-1.png', '/assets/img/product/red-denim-jacket-2.png', 'Jacket, Men', '30%', 15.00, 19.00, '2024-09-02 11:43:48', '2024-09-02 13:13:12'),
(4, 'Burgundy Bliss Jacket', 'women', '/assets/img/product/burgundy-bliss-jacket-1.png', '/assets/img/product/burgundy-bliss-jacket-2.png', 'Jacket, Women', '25%', 17.00, 21.00, '2024-09-02 11:43:48', '2024-09-02 13:13:12'),
(5, 'Slate Classic Tee', 'men', '/assets/img/product/slate-classic-tee-1.png', '/assets/img/product/slate-classic-tee-2.png', 'T-shirt, Men', '35%', 19.00, 25.00, '2024-09-02 11:43:48', '2024-09-02 13:13:12'),
(6, 'Eclipse Radiance Dress', 'women', '/assets/img/product/eclipse-radiance-dress-1.png', '/assets/img/product/eclipse-radiance-dress-2.png', 'Dress, Women', '40%', 20.00, 28.00, '2024-09-02 11:43:48', '2024-09-02 13:13:12'),
(7, 'Skyline Chic Ensemble', 'women', '/assets/img/product/skyline-chic-ensemble-1.png', '/assets/img/product/skyline-chic-ensemble-2.png', 'Dress, Women', '40%', 20.00, 29.00, '2024-09-02 11:43:48', '2024-09-02 13:13:12'),
(8, 'Western denim shirt', 'women', '/assets/img/product/western-denim-shirt-1.png', '/assets/img/product/western-denim-shirt-2.png', 'Jacket, Women', 'Sale', 128.00, 72.00, '2024-09-02 11:43:48', '2024-09-02 13:13:12'),
(9, 'OSmock Mini Dresss', 'women', '/assets/img/product/osmock-mini-dress-1.png', '/assets/img/product/osmock-mini-dress-2.png', 'Jacket, Women', 'Sale', 142.00, 72.00, '2024-09-02 11:43:48', '2024-09-02 13:13:12');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`id`, `email`, `password`, `created_at`) VALUES
(2, 'alefba@gmail.com', '123', '2024-07-06 15:49:42');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subscribed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `email`, `subscribed_at`) VALUES
(1, '201400163@gift.edu.pk', '2024-07-08 13:06:21'),
(2, '20140063@gift.edu.pk', '2024-07-08 13:07:58'),
(3, '231400109@gift.edu.pk', '2024-07-08 13:37:35'),
(4, 'ahmed@gmail.com', '2024-07-09 06:54:07'),
(5, 'waleedshah@gmail.com', '2024-07-11 08:56:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `signin`
--
ALTER TABLE `signin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
