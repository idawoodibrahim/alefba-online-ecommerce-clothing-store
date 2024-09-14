-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2024 at 12:50 PM
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
  `stock_status` enum('in stock','out of stock') NOT NULL DEFAULT 'in stock',
  `sale_price` decimal(10,2) DEFAULT NULL,
  `original_price` decimal(10,2) DEFAULT NULL,
  `product_primary_img` varchar(1500) DEFAULT NULL,
  `product_secondary_img` varchar(1500) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `display` enum('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category`, `name`, `tags`, `badge`, `stock_status`, `sale_price`, `original_price`, `product_primary_img`, `product_secondary_img`, `details`, `created_at`, `updated_at`, `display`) VALUES
(1, 'women', 'Graus Down Packable Jacket', 'Jacket, Women, Packable', '30% off', 'in stock', 25.00, 35.00, '/assets/img/product/graus-down-packable-jacket-1.png', '/assets/img/product/graus-down-packable-jacket-2.png', 'Lightweight down jacket that packs easily for travel, perfect for staying warm on the go.', '2024-09-14 10:26:54', '2024-09-14 10:26:54', 'yes'),
(2, 'women', 'Adicolor Knit V-Neck Dress', 'Dress, Women, Knit', '40% off', 'in stock', 22.00, 30.00, '/assets/img/product/adicolor-knit-v-neck-dress-1.png', '/assets/img/product/adicolor-knit-v-neck-dress-2.png', 'Stylish knit v-neck dress with a classic fit, great for casual or evening wear.', '2024-09-14 10:26:54', '2024-09-14 10:26:54', 'yes'),
(3, 'women', 'Women\'s Skirt', 'Skirt, Women, Casual', '20% off', 'in stock', 19.00, 24.00, '/assets/img/product/womens-skirt-1.png', '/assets/img/product/womens-skirt-2.png', 'Versatile women\'s skirt, ideal for everyday casual outfits.', '2024-09-14 10:26:54', '2024-09-14 10:26:54', 'yes'),
(4, 'women', 'Play Loud T7 Women\'s Track Jacket', 'Jacket, Women, Track', '35% off', 'in stock', 24.00, 33.00, '/assets/img/product/play-loud-t7-womens-track-jacket-1.png', '/assets/img/product/play-loud-t7-womens-track-jacket-2.png', 'Bold women\'s track jacket, combining style and functionality for your workout or casual wear.', '2024-09-14 10:26:54', '2024-09-14 10:26:54', 'yes'),
(5, 'men', 'Slim Fit Stretch Mesh Shirt', 'Shirt, Men, Slim Fit', '40% off', 'in stock', 20.00, 28.00, '/assets/img/product/slim-fit-stretch-mesh-shirt-1.png', '/assets/img/product/slim-fit-stretch-mesh-shirt-2.png', 'Slim fit stretch mesh shirt for men, offering comfort and style in any situation.', '2024-09-14 10:26:54', '2024-09-14 10:26:54', 'yes'),
(6, 'men', 'Utility Dryvent Jacket', 'Jacket, Men, Utility', '30% off', 'in stock', 27.00, 39.00, '/assets/img/product/utility-dryvent-jacket-1.png', '/assets/img/product/utility-dryvent-jacket-2.png', 'Utility jacket with Dryvent technology, ensuring weatherproof performance and durability.', '2024-09-14 10:26:54', '2024-09-14 10:26:54', 'yes'),
(7, 'women', 'Neuclassics Tee', 'T-shirt, Women, Classic', '25% off', 'in stock', 21.00, 28.00, '/assets/img/product/neuclassics-tee-1.png', '/assets/img/product/neuclassics-tee-2.png', 'Classic tee with a modern twist, perfect for casual wear.', '2024-09-14 10:26:54', '2024-09-14 10:49:12', 'yes'),
(8, 'men', 'Dri-Fit Versatile Hoodie', 'Hoodie, Men, Dri-Fit', '40% off', 'in stock', 23.00, 35.00, '/assets/img/product/dri-fit-versatile-hoodie-1.png', '/assets/img/product/dri-fit-versatile-hoodie-2.png', 'Dri-Fit hoodie with versatile design, providing both comfort and performance for workouts or daily wear.', '2024-09-14 10:26:54', '2024-09-14 10:26:54', 'yes'),
(9, 'men', 'King Pro Men\'s Quarter-zip Top', 'Top, Men, Quarter-zip', '30% off', 'in stock', 24.00, 34.00, '/assets/img/product/king-pro-mens-quarter-zip-top-1.png', '/assets/img/product/king-pro-mens-quarter-zip-top-2.png', 'Quarter-zip top for men, a perfect mix of style and functionality for active days.', '2024-09-14 10:26:54', '2024-09-14 10:26:54', 'yes'),
(10, 'children', 'Cable Knit Cotton Sweater', 'Sweater, Children, Cable Knit', '35% off', 'in stock', 26.00, 40.00, '/assets/img/product/cable-knit-cotton-sweater-1.png', '/assets/img/product/cable-knit-cotton-sweater-2.png', 'Comfortable cotton sweater with cable knit detailing, great for colder weather.', '2024-09-14 10:26:54', '2024-09-14 10:49:12', 'yes'),
(11, 'men', 'Spectra Wind Jacket', 'Jacket, Men, Windbreaker', '20% off', 'in stock', 29.00, 36.00, '/assets/img/product/spectra-wind-jacket-1.png', '/assets/img/product/spectra-wind-jacket-2.png', 'Windbreaker jacket designed to withstand windy conditions while maintaining a stylish look.', '2024-09-14 10:26:54', '2024-09-14 10:26:54', 'yes'),
(12, 'women', 'Neuclassics Track Top', 'Track Top, Women, Classic', '25% off', 'in stock', 27.00, 36.00, '/assets/img/product/neuclassics-track-top-1.png', '/assets/img/product/neuclassics-track-top-2.png', 'Classic track top with a sleek design, perfect for casual wear or sports activities.', '2024-09-14 10:26:54', '2024-09-14 10:49:12', 'yes'),
(13, 'women', 'Sportswear Tech Fleece Hoodie', 'Hoodie, Women, Fleece', '30% off', 'in stock', 28.00, 40.00, '/assets/img/product/sportswear-tech-fleece-hoodie-1.png', '/assets/img/product/sportswear-tech-fleece-hoodie-2.png', 'Fleece hoodie with a tech design, providing warmth and style in any weather.', '2024-09-14 10:26:54', '2024-09-14 10:49:12', 'yes'),
(14, 'children', 'Classics T7 Girl\'s Track Jacket', 'Jacket, Girls, Track', '35% off', 'in stock', 22.00, 34.00, '/assets/img/product/classics-t7-girls-track-jacket-1.png', '/assets/img/product/classics-t7-girls-track-jacket-2.png', 'Classic track jacket for girls, offering comfort and style for active days.', '2024-09-14 10:26:54', '2024-09-14 10:27:25', 'yes'),
(15, 'women', 'Buckle Trim Jersey Surplice Gown', 'Gown, Women, Formal', '40% off', 'in stock', 30.00, 50.00, '/assets/img/product/buckle-trim-jersey-surplice-gown-1.png', '/assets/img/product/buckle-trim-jersey-surplice-gown-2.png', 'Elegant surplice gown with buckle trim, perfect for formal occasions.', '2024-09-14 10:26:54', '2024-09-14 10:26:54', 'yes'),
(16, 'women', 'Oversize Cotton Dress', 'Dress, Women, Casual', '40% off', 'in stock', 17.00, 24.00, '/assets/img/product/oversize-cotton-dress-1.png', '/assets/img/product/oversize-cotton-dress-2.png', 'Comfortable oversized cotton dress perfect for casual wear.', '2024-09-14 10:26:54', '2024-09-14 10:26:54', 'yes'),
(17, 'women', 'Strapless Dress', 'Dress, Women, Summer', '30% off', 'in stock', 18.00, 26.00, '/assets/img/product/strapless-dress-1.png', '/assets/img/product/strapless-dress-2.png', 'Chic strapless dress with floral embroidery, ideal for summer outings.', '2024-09-14 10:26:54', '2024-09-14 10:26:54', 'yes'),
(18, 'men', 'Red Denim Jacket', 'Jacket, Men, Casual', '40% off', 'in stock', 15.00, 19.00, '/assets/img/product/red-denim-jacket-1.png', '/assets/img/product/red-denim-jacket-2.png', 'Stylish red denim jacket with a classic fit, perfect for layering.', '2024-09-14 10:26:54', '2024-09-14 10:26:54', 'yes'),
(19, 'women', 'Burgundy Bliss Jacket', 'Jacket, Women, Cozy', '25% off', 'in stock', 17.00, 21.00, '/assets/img/product/burgundy-bliss-jacket-1.png', '/assets/img/product/burgundy-bliss-jacket-2.png', 'Warm burgundy jacket with a soft feel, great for chilly weather.', '2024-09-14 10:26:54', '2024-09-14 10:26:54', 'yes'),
(20, 'men', 'Slate Classic Tee', 'T-shirt, Men, Basic', '35% off', 'in stock', 19.00, 25.00, '/assets/img/product/slate-classic-tee-1.png', '/assets/img/product/slate-classic-tee-2.png', 'Classic slate-colored tee, a wardrobe essential for any season.', '2024-09-14 10:26:54', '2024-09-14 10:26:54', 'yes'),
(21, 'women', 'Eclipse Radiance Dress', 'Dress, Women, Elegant', '40% off', 'in stock', 20.00, 28.00, '/assets/img/product/eclipse-radiance-dress-1.png', '/assets/img/product/eclipse-radiance-dress-2.png', 'Elegant dress with a radiant design, perfect for evening events.', '2024-09-14 10:26:54', '2024-09-14 10:26:54', 'yes'),
(22, 'women', 'Skyline Chic Ensemble', 'Dress, Women, Urban', '30% off', 'in stock', 21.00, 29.00, '/assets/img/product/skyline-chic-ensemble-1.png', '/assets/img/product/skyline-chic-ensemble-2.png', 'Trendy urban dress with a skyline pattern, ideal for city outings.', '2024-09-14 10:26:54', '2024-09-14 10:26:54', 'yes'),
(23, 'men', 'Western Denim Shirt', 'Shirt, Men, Denim', '10% off', 'in stock', 22.00, 24.00, '/assets/img/product/western-denim-shirt-1.png', '/assets/img/product/western-denim-shirt-2.png', 'Western-style denim shirt with a comfortable fit, great for casual days.', '2024-09-14 10:26:54', '2024-09-14 10:26:54', 'yes'),
(24, 'women', 'Osmock Mini Dresss', 'Dress, Women, Mini', '25% off', 'in stock', 18.00, 24.00, '/assets/img/product/osmock-mini-dress-1.png', '/assets/img/product/osmock-mini-dress-2.png', 'Cute mini dress with a smocked bodice, ideal for a day out.', '2024-09-14 10:26:54', '2024-09-14 10:26:54', 'yes'),
(25, 'men', 'Manfinity Homme Men\'s', 'Polo, Men, Casual', '35% off', 'in stock', 16.00, 22.00, '/assets/img/product/manfinity-homme-mens-1.png', '/assets/img/product/manfinity-homme-mens-2.png', 'Casual polo shirt for men, perfect for everyday wear.', '2024-09-14 10:26:54', '2024-09-14 10:26:54', 'yes'),
(26, 'men', 'Casual Polo Shirt', 'Polo, Men, Basic', '20% off', 'in stock', 20.00, 25.00, '/assets/img/product/casual-polo-shirt-1.png', '/assets/img/product/casual-polo-shirt-2.png', 'Basic polo shirt, a must-have in any man’s wardrobe.', '2024-09-14 10:26:54', '2024-09-14 10:41:16', 'no'),
(27, 'women', 'Women\'s White Ruffle', 'Top, Women, Ruffle', '40% off', 'in stock', 17.00, 28.00, '/assets/img/product/womens-white-ruffle-1.png', '/assets/img/product/womens-white-ruffle-2.png', 'White ruffle top with a feminine design, perfect for a stylish look.', '2024-09-14 10:26:54', '2024-09-14 10:41:16', 'no'),
(28, 'men', 'Flamingo Polo Shirt', 'Polo, Men, Print', '20% off', 'in stock', 21.00, 26.00, '/assets/img/product/flamingo-polo-shirt-1.png', '/assets/img/product/flamingo-polo-shirt-2.png', 'Polo shirt with a flamingo print, adding a fun twist to casual wear.', '2024-09-14 10:26:54', '2024-09-14 10:41:16', 'no'),
(29, 'women', 'Frill Trim Puff', 'Top, Women, Frill', '25% off', 'in stock', 19.00, 25.00, '/assets/img/product/frill-trim-puff-1.png', '/assets/img/product/frill-trim-puff-2.png', 'Frill trim puff sleeve top, adds a touch of elegance to your outfit.', '2024-09-14 10:31:38', '2024-09-14 10:41:16', 'no'),
(30, 'women', 'Essnce USA Flag', 'T-shirt, Women, Flag', '35% off', 'in stock', 19.00, 26.00, '/assets/img/product/essnce-usa-flag-1.png', '/assets/img/product/essnce-usa-flag-2.png', 'USA flag-themed t-shirt, perfect for a casual patriotic look.', '2024-09-14 10:31:38', '2024-09-14 10:31:38', 'yes'),
(31, 'men', 'Colorblock Varsity Jacket', 'Jacket, Men, Varsity', '20% off', 'in stock', 24.00, 30.00, '/assets/img/product/colorblock-varsity-jacket-1.png', '/assets/img/product/colorblock-varsity-jacket-2.png', 'Colorblock varsity jacket, a trendy addition to your collection.', '2024-09-14 10:31:38', '2024-09-14 10:31:38', 'yes'),
(32, 'men', 'Flap Pocket Denim', 'Shirt, Men, Denim', '15% off', 'in stock', 23.00, 27.00, '/assets/img/product/flap-pocket-denim-1.png', '/assets/img/product/flap-pocket-denim-2.png', 'Denim shirt with flap pockets, a versatile piece for any wardrobe.', '2024-09-14 10:31:38', '2024-09-14 10:31:38', 'yes'),
(33, 'women', 'Trumpet Sleeve Tee', 'Top, Women, Sleeve', '30% off', 'in stock', 18.00, 25.00, '/assets/img/product/trumpet-sleeve-tee-1.png', '/assets/img/product/trumpet-sleeve-tee-2.png', 'Trumpet sleeve tee, combining comfort with a stylish design.', '2024-09-14 10:31:38', '2024-09-14 10:41:16', 'no'),
(34, 'men', 'College Style Jacket', 'Jacket, Men, College', '40% off', 'in stock', 22.00, 30.00, '/assets/img/product/college-style-jacket-1.png', '/assets/img/product/college-style-jacket-2.png', 'College-style jacket with a classic look, ideal for layering.', '2024-09-14 10:31:38', '2024-09-14 10:41:16', 'no'),
(35, 'women', 'Frenchy Striped Drop', 'Top, Women, Striped', '15% off', 'in stock', 20.00, 24.00, '/assets/img/product/frenchy-striped-drop-1.png', '/assets/img/product/frenchy-striped-drop-2.png', 'Striped drop shoulder top, a stylish addition to any wardrobe.', '2024-09-14 10:31:38', '2024-09-14 10:31:38', 'yes'),
(36, 'women', 'A-line Denim Top', 'Top, Women, Denim', '40% off', 'in stock', 17.00, 28.00, '/assets/img/product/a-line-denim-top-1.png', '/assets/img/product/a-line-denim-top-2.png', 'A-line denim top with a chic cut, perfect for casual days.', '2024-09-14 10:31:38', '2024-09-14 10:41:16', 'no'),
(37, 'women', 'Casual Cropped Denim', 'Top, Women, Casual', '30% off', 'in stock', 19.00, 27.00, '/assets/img/product/casual-cropped-denim-1.png', '/assets/img/product/casual-cropped-denim-2.png', 'Casual cropped denim top, ideal for a relaxed yet trendy look.', '2024-09-14 10:31:38', '2024-09-14 10:31:38', 'yes'),
(38, 'men', 'Skatered Jean Cargo', 'Pants, Men, Cargo', '20% off', 'in stock', 21.00, 26.00, '/assets/img/product/skatered-jean-cargo-1.png', '/assets/img/product/skatered-jean-cargo-2.png', 'Jean cargo pants with a skater fit, perfect for streetwear style.', '2024-09-14 10:31:38', '2024-09-14 10:31:38', 'yes'),
(39, 'men', 'Hem Tank Top', 'Top, Men, Basic', '25% off', 'in stock', 17.00, 23.00, '/assets/img/product/hem-tank-top-1.png', '/assets/img/product/hem-tank-top-2.png', 'Basic hem tank top, a versatile piece for layering.', '2024-09-14 10:31:38', '2024-09-14 10:31:38', 'yes'),
(40, 'women', 'Ruffle Hem Cami', 'Top, Women, Ruffle', '40% off', 'in stock', 20.00, 28.00, '/assets/img/product/ruffle-hem-cami-1.png', '/assets/img/product/ruffle-hem-cami-2.png', 'Ruffle hem cami top, a cute addition to any summer outfit.', '2024-09-14 10:31:38', '2024-09-14 10:31:38', 'yes'),
(41, 'children', 'Knitted Embossed Hoodie', 'Hoodie, Children, Knitted', '35% off', 'in stock', 22.00, 30.00, '/assets/img/product/knitted-embossed-hoodie-1.png', '/assets/img/product/knitted-embossed-hoodie-2.png', 'Knitted embossed hoodie, a cozy choice for cooler days.', '2024-09-14 10:31:38', '2024-09-14 10:31:38', 'yes'),
(42, 'children', 'Casual Floral Print', 'Dress, Children, Floral', '25% off', 'in stock', 16.00, 21.00, '/assets/img/product/casual-floral-print-1.png', '/assets/img/product/casual-floral-print-2.png', 'Adorable floral print dress, perfect for little ones.', '2024-09-14 10:31:38', '2024-09-14 10:31:38', 'yes'),
(43, 'children', 'V-Neck Strappy Jumpsuit', 'Jumpsuit, Children, Strappy', '30% off', 'in stock', 18.00, 25.00, '/assets/img/product/v-neck-strappy-jumpsuit-1.png', '/assets/img/product/v-neck-strappy-jumpsuit-2.png', 'Strappy jumpsuit with a v-neck, great for playful adventures.', '2024-09-14 10:31:38', '2024-09-14 10:31:38', 'yes'),
(44, 'children', 'Casual Loose Jumpsuit', 'Jumpsuit, Children, Casual', '20% off', 'in stock', 20.00, 25.00, '/assets/img/product/casual-loose-jumpsuit-1.png', '/assets/img/product/casual-loose-jumpsuit-2.png', 'Loose-fitting jumpsuit, ideal for comfort and style.', '2024-09-14 10:31:38', '2024-09-14 10:31:38', 'yes'),
(45, 'children', 'Round Neck Pullover', 'Pullover, Children, Round Neck', '35% off', 'in stock', 15.00, 20.00, '/assets/img/product/round-neck-pullover-1.png', '/assets/img/product/round-neck-pullover-2.png', 'Round neck pullover, a versatile and cozy piece for any day.', '2024-09-14 10:31:38', '2024-09-14 10:31:38', 'yes'),
(46, 'children', 'Hooded Half-placket', 'Hoodie, Children, Half-placket', '40% off', 'in stock', 17.00, 24.00, '/assets/img/product/hooded-half-placket-1.png', '/assets/img/product/hooded-half-placket-2.png', 'Hooded half-placket, offering warmth with a stylish design.', '2024-09-14 10:31:38', '2024-09-14 10:31:38', 'yes'),
(47, 'children', 'Baggy Straight', 'Pants, Children, Baggy', '30% off', 'in stock', 18.00, 25.00, '/assets/img/product/baggy-straight-1.png', '/assets/img/product/baggy-straight-2.png', 'Baggy straight pants, comfortable and stylish for daily wear.', '2024-09-14 10:31:38', '2024-09-14 10:31:38', 'yes'),
(48, 'children', 'Sleeveless Top', 'Top, Children, Sleeveless', '25% off', 'in stock', 19.00, 25.00, '/assets/img/product/sleeveless-top-1.png', '/assets/img/product/sleeveless-top-2.png', 'Sleeveless top, perfect for warm days and layering.', '2024-09-14 10:31:38', '2024-09-14 10:31:38', 'yes'),
(49, 'children', 'Suede T-Shirt', 'T-shirt, Children, Suede', '20% off', 'in stock', 21.00, 26.00, '/assets/img/product/suede-t-shirt-1.png', '/assets/img/product/suede-t-shirt-2.png', 'Suede T-Shirt, a soft and trendy option for kids.', '2024-09-14 10:31:38', '2024-09-14 10:31:38', 'yes'),
(50, 'children', 'Overhead Hoodie', 'Hoodie, Children, Overhead', '35% off', 'in stock', 20.00, 30.00, '/assets/img/product/overhead-hoodie-1.png', '/assets/img/product/overhead-hoodie-2.png', 'Overhead hoodie, comfortable and stylish for cool days.', '2024-09-14 10:31:38', '2024-09-14 10:31:38', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT current_timestamp(),
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` enum('SU','Admin','Manager','Dealer','User') NOT NULL DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `category` enum('men','women','children') NOT NULL,
  `name` varchar(255) NOT NULL,
  `tags` text DEFAULT NULL,
  `badge` varchar(50) DEFAULT NULL,
  `stock_status` enum('in stock','out of stock') NOT NULL DEFAULT 'in stock',
  `sale_price` decimal(10,2) DEFAULT NULL,
  `original_price` decimal(10,2) DEFAULT NULL,
  `product_primary_img` varchar(1500) DEFAULT NULL,
  `product_secondary_img` varchar(1500) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `category`, `name`, `tags`, `badge`, `stock_status`, `sale_price`, `original_price`, `product_primary_img`, `product_secondary_img`, `details`, `created_at`, `updated_at`) VALUES
(1, 'women', 'Oversize Cotton Dress', 'Dress, Women, Casual', '40% off', 'in stock', 17.00, 24.00, '/assets/img/product/oversize-cotton-dress-1.png', '/assets/img/product/oversize-cotton-dress-2.png', 'Comfortable oversized cotton dress perfect for casual wear.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(2, 'women', 'Strapless Dress', 'Dress, Women, Summer', '30% off', 'in stock', 18.00, 26.00, '/assets/img/product/strapless-dress-1.png', '/assets/img/product/strapless-dress-2.png', 'Chic strapless dress with floral embroidery, ideal for summer outings.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(3, 'men', 'Red Denim Jacket', 'Jacket, Men, Casual', '40% off', 'in stock', 15.00, 19.00, '/assets/img/product/red-denim-jacket-1.png', '/assets/img/product/red-denim-jacket-2.png', 'Stylish red denim jacket with a classic fit, perfect for layering.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(4, 'women', 'Burgundy Bliss Jacket', 'Jacket, Women, Cozy', '25% off', 'in stock', 17.00, 21.00, '/assets/img/product/burgundy-bliss-jacket-1.png', '/assets/img/product/burgundy-bliss-jacket-2.png', 'Warm burgundy jacket with a soft feel, great for chilly weather.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(5, 'men', 'Slate Classic Tee', 'T-shirt, Men, Basic', '35% off', 'in stock', 19.00, 25.00, '/assets/img/product/slate-classic-tee-1.png', '/assets/img/product/slate-classic-tee-2.png', 'Classic slate-colored tee, a wardrobe essential for any season.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(6, 'women', 'Eclipse Radiance Dress', 'Dress, Women, Elegant', '40% off', 'in stock', 20.00, 28.00, '/assets/img/product/eclipse-radiance-dress-1.png', '/assets/img/product/eclipse-radiance-dress-2.png', 'Elegant dress with a radiant design, perfect for evening events.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(7, 'women', 'Skyline Chic Ensemble', 'Dress, Women, Urban', '30% off', 'in stock', 21.00, 29.00, '/assets/img/product/skyline-chic-ensemble-1.png', '/assets/img/product/skyline-chic-ensemble-2.png', 'Trendy urban dress with a skyline pattern, ideal for city outings.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(8, 'men', 'Western Denim Shirt', 'Shirt, Men, Denim', '10% off', 'in stock', 22.00, 24.00, '/assets/img/product/western-denim-shirt-1.png', '/assets/img/product/western-denim-shirt-2.png', 'Western-style denim shirt with a comfortable fit, great for casual days.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(9, 'women', 'Osmock Mini Dresss', 'Dress, Women, Mini', '25% off', 'in stock', 18.00, 24.00, '/assets/img/product/osmock-mini-dress-1.png', '/assets/img/product/osmock-mini-dress-2.png', 'Cute mini dress with a smocked bodice, ideal for a day out.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(10, 'men', 'Manfinity Homme Men\'s', 'Polo, Men, Casual', '35% off', 'in stock', 16.00, 22.00, '/assets/img/product/manfinity-homme-mens-1.png', '/assets/img/product/manfinity-homme-mens-2.png', 'Casual polo shirt for men, perfect for everyday wear.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(11, 'men', 'Casual Polo Shirt', 'Polo, Men, Basic', '20% off', 'in stock', 20.00, 25.00, '/assets/img/product/casual-polo-shirt-1.png', '/assets/img/product/casual-polo-shirt-2.png', 'Basic polo shirt, a must-have in any man’s wardrobe.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(12, 'women', 'Women\'s White Ruffle', 'Top, Women, Ruffle', '40% off', 'in stock', 17.00, 28.00, '/assets/img/product/womens-white-ruffle-1.png', '/assets/img/product/womens-white-ruffle-2.png', 'White ruffle top with a feminine design, perfect for a stylish look.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(13, 'men', 'Flamingo Polo Shirt', 'Polo, Men, Print', '20% off', 'in stock', 21.00, 26.00, '/assets/img/product/flamingo-polo-shirt-1.png', '/assets/img/product/flamingo-polo-shirt-2.png', 'Polo shirt with a flamingo print, adding a fun twist to casual wear.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(14, 'women', 'Frill Trim Puff', 'Top, Women, Frill', '25% off', 'in stock', 19.00, 25.00, '/assets/img/product/frill-trim-puff-1.png', '/assets/img/product/frill-trim-puff-2.png', 'Frill trim puff sleeve top, adds a touch of elegance to your outfit.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(15, 'women', 'Essnce USA Flag', 'T-shirt, Women, Flag', '35% off', 'in stock', 19.00, 26.00, '/assets/img/product/essnce-usa-flag-1.png', '/assets/img/product/essnce-usa-flag-2.png', 'USA flag-themed t-shirt, perfect for a casual patriotic look.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(16, 'men', 'Colorblock Varsity Jacket', 'Jacket, Men, Varsity', '20% off', 'in stock', 24.00, 30.00, '/assets/img/product/colorblock-varsity-jacket-1.png', '/assets/img/product/colorblock-varsity-jacket-2.png', 'Colorblock varsity jacket, a trendy addition to your collection.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(17, 'men', 'Flap Pocket Denim', 'Shirt, Men, Denim', '15% off', 'in stock', 23.00, 27.00, '/assets/img/product/flap-pocket-denim-1.png', '/assets/img/product/flap-pocket-denim-2.png', 'Denim shirt with flap pockets, a versatile piece for any wardrobe.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(18, 'women', 'Trumpet Sleeve Tee', 'Top, Women, Sleeve', '30% off', 'in stock', 18.00, 25.00, '/assets/img/product/trumpet-sleeve-tee-1.png', '/assets/img/product/trumpet-sleeve-tee-2.png', 'Trumpet sleeve tee, combining comfort with a stylish design.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(19, 'men', 'College Style Jacket', 'Jacket, Men, College', '40% off', 'in stock', 22.00, 30.00, '/assets/img/product/college-style-jacket-1.png', '/assets/img/product/college-style-jacket-2.png', 'College-style jacket with a classic look, ideal for layering.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(20, 'women', 'Frenchy Striped Drop', 'Top, Women, Striped', '15% off', 'in stock', 20.00, 24.00, '/assets/img/product/frenchy-striped-drop-1.png', '/assets/img/product/frenchy-striped-drop-2.png', 'Striped drop shoulder top, a stylish addition to any wardrobe.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(21, 'women', 'A-line Denim Top', 'Top, Women, Denim', '40% off', 'in stock', 17.00, 28.00, '/assets/img/product/a-line-denim-top-1.png', '/assets/img/product/a-line-denim-top-2.png', 'A-line denim top with a chic cut, perfect for casual days.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(22, 'women', 'Casual Cropped Denim', 'Top, Women, Casual', '30% off', 'in stock', 19.00, 27.00, '/assets/img/product/casual-cropped-denim-1.png', '/assets/img/product/casual-cropped-denim-2.png', 'Casual cropped denim top, ideal for a relaxed yet trendy look.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(23, 'men', 'Skatered Jean Cargo', 'Pants, Men, Cargo', '20% off', 'in stock', 21.00, 26.00, '/assets/img/product/skatered-jean-cargo-1.png', '/assets/img/product/skatered-jean-cargo-2.png', 'Jean cargo pants with a skater fit, perfect for streetwear style.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(24, 'men', 'Hem Tank Top', 'Top, Men, Basic', '25% off', 'in stock', 17.00, 23.00, '/assets/img/product/hem-tank-top-1.png', '/assets/img/product/hem-tank-top-2.png', 'Basic hem tank top, a versatile piece for layering.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(25, 'women', 'Ruffle Hem Cami', 'Top, Women, Ruffle', '40% off', 'in stock', 20.00, 28.00, '/assets/img/product/ruffle-hem-cami-1.png', '/assets/img/product/ruffle-hem-cami-2.png', 'Ruffle hem cami top, a cute addition to any summer outfit.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(26, 'children', 'Knitted Embossed Hoodie', 'Hoodie, Children, Knitted', '35% off', 'in stock', 22.00, 30.00, '/assets/img/product/knitted-embossed-hoodie-1.png', '/assets/img/product/knitted-embossed-hoodie-2.png', 'Knitted embossed hoodie, a cozy choice for cooler days.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(27, 'children', 'Casual Floral Print', 'Dress, Children, Floral', '25% off', 'in stock', 16.00, 21.00, '/assets/img/product/casual-floral-print-1.png', '/assets/img/product/casual-floral-print-2.png', 'Adorable floral print dress, perfect for little ones.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(28, 'children', 'V-Neck Strappy Jumpsuit', 'Jumpsuit, Children, Strappy', '30% off', 'in stock', 18.00, 25.00, '/assets/img/product/v-neck-strappy-jumpsuit-1.png', '/assets/img/product/v-neck-strappy-jumpsuit-2.png', 'Strappy jumpsuit with a v-neck, great for playful adventures.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(29, 'children', 'Casual Loose Jumpsuit', 'Jumpsuit, Children, Casual', '20% off', 'in stock', 20.00, 25.00, '/assets/img/product/casual-loose-jumpsuit-1.png', '/assets/img/product/casual-loose-jumpsuit-2.png', 'Loose-fitting jumpsuit, ideal for comfort and style.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(30, 'children', 'Round Neck Pullover', 'Pullover, Children, Round Neck', '35% off', 'in stock', 15.00, 20.00, '/assets/img/product/round-neck-pullover-1.png', '/assets/img/product/round-neck-pullover-2.png', 'Round neck pullover, a versatile and cozy piece for any day.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(31, 'children', 'Hooded Half-placket', 'Hoodie, Children, Half-placket', '40% off', 'in stock', 17.00, 24.00, '/assets/img/product/hooded-half-placket-1.png', '/assets/img/product/hooded-half-placket-2.png', 'Hooded half-placket, offering warmth with a stylish design.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(32, 'children', 'Baggy Straight', 'Pants, Children, Baggy', '30% off', 'in stock', 18.00, 25.00, '/assets/img/product/baggy-straight-1.png', '/assets/img/product/baggy-straight-2.png', 'Baggy straight pants, comfortable and stylish for daily wear.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(33, 'children', 'Sleeveless Top', 'Top, Children, Sleeveless', '25% off', 'in stock', 19.00, 25.00, '/assets/img/product/sleeveless-top-1.png', '/assets/img/product/sleeveless-top-2.png', 'Sleeveless top, perfect for warm days and layering.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(34, 'children', 'Suede T-Shirt', 'T-shirt, Children, Suede', '20% off', 'in stock', 21.00, 26.00, '/assets/img/product/suede-t-shirt-1.png', '/assets/img/product/suede-t-shirt-2.png', 'Suede T-Shirt, a soft and trendy option for kids.', '2024-09-04 10:14:35', '2024-09-04 10:14:35'),
(35, 'children', 'Overhead Hoodie', 'Hoodie, Children, Overhead', '35% off', 'in stock', 20.00, 30.00, '/assets/img/product/overhead-hoodie-1.png', '/assets/img/product/overhead-hoodie-2.png', 'Overhead hoodie, comfortable and stylish for cool days.', '2024-09-04 10:14:35', '2024-09-04 10:14:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
