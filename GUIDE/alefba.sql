-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2024 at 03:08 PM
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
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category` enum('men','women','children') NOT NULL,
  `name` varchar(255) NOT NULL,
  `tags` text DEFAULT NULL,
  `badge` varchar(50) DEFAULT NULL,
  `sale_price` decimal(10,2) DEFAULT NULL,
  `original_price` decimal(10,2) DEFAULT NULL,
  `product_primary_img` varchar(1500) DEFAULT NULL,
  `product_secondary_img` varchar(1500) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category`, `name`, `tags`, `badge`, `sale_price`, `original_price`, `product_primary_img`, `product_secondary_img`, `details`, `created_at`, `updated_at`) VALUES
(1, 'women', 'Oversize Cotton Dress', 'Dress, Women, Casual', '40% off', 17.00, 24.00, '/assets/img/product/oversize-cotton-dress-1.png', '/assets/img/product/oversize-cotton-dress-2.png', 'Comfortable oversized cotton dress perfect for casual wear.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(2, 'women', 'Strapless Dress', 'Dress, Women, Summer', '30% off', 18.00, 26.00, '/assets/img/product/strapless-dress-1.png', '/assets/img/product/strapless-dress-2.png', 'Chic strapless dress with floral embroidery, ideal for summer outings.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(3, 'men', 'Red Denim Jacket', 'Jacket, Men, Casual', '40% off', 15.00, 19.00, '/assets/img/product/red-denim-jacket-1.png', '/assets/img/product/red-denim-jacket-2.png', 'Stylish red denim jacket with a classic fit, perfect for layering.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(4, 'women', 'Burgundy Bliss Jacket', 'Jacket, Women, Cozy', '25% off', 17.00, 21.00, '/assets/img/product/burgundy-bliss-jacket-1.png', '/assets/img/product/burgundy-bliss-jacket-2.png', 'Warm burgundy jacket with a soft feel, great for chilly weather.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(5, 'men', 'Slate Classic Tee', 'T-shirt, Men, Basic', '35% off', 19.00, 25.00, '/assets/img/product/slate-classic-tee-1.png', '/assets/img/product/slate-classic-tee-2.png', 'Classic slate-colored tee, a wardrobe essential for any season.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(6, 'women', 'Eclipse Radiance Dress', 'Dress, Women, Elegant', '40% off', 20.00, 28.00, '/assets/img/product/eclipse-radiance-dress-1.png', '/assets/img/product/eclipse-radiance-dress-2.png', 'Elegant dress with a radiant design, perfect for evening events.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(7, 'women', 'Skyline Chic Ensemble', 'Dress, Women, Urban', '30% off', 21.00, 29.00, '/assets/img/product/skyline-chic-ensemble-1.png', '/assets/img/product/skyline-chic-ensemble-2.png', 'Trendy urban dress with a skyline pattern, ideal for city outings.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(8, 'men', 'Western Denim Shirt', 'Shirt, Men, Denim', '10% off', 22.00, 24.00, '/assets/img/product/western-denim-shirt-1.png', '/assets/img/product/western-denim-shirt-2.png', 'Western-style denim shirt with a comfortable fit, great for casual days.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(9, 'women', 'Osmock Mini Dresss', 'Dress, Women, Mini', '25% off', 18.00, 24.00, '/assets/img/product/osmock-mini-dress-1.png', '/assets/img/product/osmock-mini-dress-2.png', 'Cute mini dress with a smocked bodice, ideal for a day out.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(10, 'men', 'Manfinity Homme Men\'s', 'Polo, Men, Casual', '35% off', 16.00, 22.00, '/assets/img/product/manfinity-homme-mens-1.png', '/assets/img/product/manfinity-homme-mens-2.png', 'Casual polo shirt for men, perfect for everyday wear.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(11, 'men', 'Casual Polo Shirt', 'Polo, Men, Basic', '20% off', 20.00, 25.00, '/assets/img/product/casual-polo-shirt-1.png', '/assets/img/product/casual-polo-shirt-2.png', 'Basic polo shirt, a must-have in any man’s wardrobe.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(12, 'women', 'Women\'s White Ruffle', 'Top, Women, Ruffle', '40% off', 17.00, 28.00, '/assets/img/product/womens-white-ruffle-1.png', '/assets/img/product/womens-white-ruffle-2.png', 'White ruffle top with a feminine design, perfect for a stylish look.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(13, 'men', 'Flamingo Polo Shirt', 'Polo, Men, Print', '20% off', 21.00, 26.00, '/assets/img/product/flamingo-polo-shirt-1.png', '/assets/img/product/flamingo-polo-shirt-2.png', 'Polo shirt with a flamingo print, adding a fun twist to casual wear.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(14, 'women', 'Frill Trim Puff', 'Top, Women, Frill', '25% off', 19.00, 25.00, '/assets/img/product/frill-trim-puff-1.png', '/assets/img/product/frill-trim-puff-2.png', 'Frill trim puff sleeve top, adds a touch of elegance to your outfit.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(15, 'women', 'Essnce USA Flag', 'T-shirt, Women, Flag', '35% off', 19.00, 26.00, '/assets/img/product/essnce-usa-flag-1.png', '/assets/img/product/essnce-usa-flag-2.png', 'USA flag-themed t-shirt, perfect for a casual patriotic look.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(16, 'men', 'Colorblock Varsity Jacket', 'Jacket, Men, Varsity', '20% off', 24.00, 30.00, '/assets/img/product/colorblock-varsity-jacket-1.png', '/assets/img/product/colorblock-varsity-jacket-2.png', 'Colorblock varsity jacket, a trendy addition to your collection.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(17, 'men', 'Flap Pocket Denim', 'Shirt, Men, Denim', '15% off', 23.00, 27.00, '/assets/img/product/flap-pocket-denim-1.png', '/assets/img/product/flap-pocket-denim-2.png', 'Denim shirt with flap pockets, a versatile piece for any wardrobe.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(18, 'women', 'Trumpet Sleeve Tee', 'Top, Women, Sleeve', '30% off', 18.00, 25.00, '/assets/img/product/trumpet-sleeve-tee-1.png', '/assets/img/product/trumpet-sleeve-tee-2.png', 'Trumpet sleeve tee, combining comfort with a stylish design.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(19, 'men', 'College Style Jacket', 'Jacket, Men, College', '40% off', 22.00, 30.00, '/assets/img/product/college-style-jacket-1.png', '/assets/img/product/college-style-jacket-2.png', 'College-style jacket with a classic look, ideal for layering.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(20, 'women', 'Frenchy Striped Drop', 'Top, Women, Striped', '15% off', 20.00, 24.00, '/assets/img/product/frenchy-striped-drop-1.png', '/assets/img/product/frenchy-striped-drop-2.png', 'Striped drop shoulder top, a stylish addition to any wardrobe.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(21, 'women', 'A-line Denim Top', 'Top, Women, Denim', '40% off', 17.00, 28.00, '/assets/img/product/a-line-denim-top-1.png', '/assets/img/product/a-line-denim-top-2.png', 'A-line denim top with a chic cut, perfect for casual days.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(22, 'women', 'Casual Cropped Denim', 'Top, Women, Casual', '30% off', 19.00, 27.00, '/assets/img/product/casual-cropped-denim-1.png', '/assets/img/product/casual-cropped-denim-2.png', 'Casual cropped denim top, ideal for a relaxed yet trendy look.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(23, 'men', 'Skatered Jean Cargo', 'Pants, Men, Cargo', '20% off', 21.00, 26.00, '/assets/img/product/skatered-jean-cargo-1.png', '/assets/img/product/skatered-jean-cargo-2.png', 'Jean cargo pants with a skater fit, perfect for streetwear style.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(24, 'men', 'Hem Tank Top', 'Top, Men, Basic', '25% off', 17.00, 23.00, '/assets/img/product/hem-tank-top-1.png', '/assets/img/product/hem-tank-top-2.png', 'Basic hem tank top, a versatile piece for layering.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(25, 'women', 'Ruffle Hem Cami', 'Top, Women, Ruffle', '40% off', 20.00, 28.00, '/assets/img/product/ruffle-hem-cami-1.png', '/assets/img/product/ruffle-hem-cami-2.png', 'Ruffle hem cami top, a cute addition to any summer outfit.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(26, 'children', 'Knitted Embossed Hoodie', 'Hoodie, Children, Knitted', '35% off', 22.00, 30.00, '/assets/img/product/knitted-embossed-hoodie-1.png', '/assets/img/product/knitted-embossed-hoodie-2.png', 'Knitted embossed hoodie, a cozy choice for cooler days.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(27, 'children', 'Casual Floral Print', 'Dress, Children, Floral', '25% off', 16.00, 21.00, '/assets/img/product/casual-floral-print-1.png', '/assets/img/product/casual-floral-print-2.png', 'Adorable floral print dress, perfect for little ones.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(28, 'children', 'V-Neck Strappy Jumpsuit', 'Jumpsuit, Children, Strappy', '30% off', 18.00, 25.00, '/assets/img/product/v-neck-strappy-jumpsuit-1.png', '/assets/img/product/v-neck-strappy-jumpsuit-2.png', 'Strappy jumpsuit with a v-neck, great for playful adventures.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(29, 'children', 'Casual Loose Jumpsuit', 'Jumpsuit, Children, Casual', '20% off', 20.00, 25.00, '/assets/img/product/casual-loose-jumpsuit-1.png', '/assets/img/product/casual-loose-jumpsuit-2.png', 'Loose-fitting jumpsuit, ideal for comfort and style.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(30, 'children', 'Round Neck Pullover', 'Pullover, Children, Round Neck', '35% off', 15.00, 20.00, '/assets/img/product/round-neck-pullover-1.png', '/assets/img/product/round-neck-pullover-2.png', 'Round neck pullover, a versatile and cozy piece for any day.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(31, 'children', 'Hooded Half-placket', 'Hoodie, Children, Half-placket', '40% off', 17.00, 24.00, '/assets/img/product/hooded-half-placket-1.png', '/assets/img/product/hooded-half-placket-2.png', 'Hooded half-placket, offering warmth with a stylish design.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(32, 'children', 'Baggy Straight', 'Pants, Children, Baggy', '30% off', 18.00, 25.00, '/assets/img/product/baggy-straight-1.png', '/assets/img/product/baggy-straight-2.png', 'Baggy straight pants, comfortable and stylish for daily wear.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(33, 'children', 'Sleeveless Top', 'Top, Children, Sleeveless', '25% off', 19.00, 25.00, '/assets/img/product/sleeveless-top-1.png', '/assets/img/product/sleeveless-top-2.png', 'Sleeveless top, perfect for warm days and layering.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(34, 'children', 'Suede T-Shirt', 'T-shirt, Children, Suede', '20% off', 21.00, 26.00, '/assets/img/product/suede-t-shirt-1.png', '/assets/img/product/suede-t-shirt-2.png', 'Suede T-Shirt, a soft and trendy option for kids.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(35, 'children', 'Overhead Hoodie', 'Hoodie, Children, Overhead', '35% off', 20.00, 30.00, '/assets/img/product/overhead-hoodie-1.png', '/assets/img/product/overhead-hoodie-2.png', 'Overhead hoodie, comfortable and stylish for cool days.', '2024-09-04 10:14:35', '2024-09-04 10:14:35');

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
-- Indexes for table `product`
--
ALTER TABLE `product`
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
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

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
