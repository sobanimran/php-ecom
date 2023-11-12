-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2023 at 12:09 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminpanel`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brn_id` int(11) NOT NULL,
  `brn_name` varchar(100) NOT NULL,
  `brn_desc` longtext NOT NULL,
  `brn_img` varchar(50) NOT NULL,
  `creat_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brn_id`, `brn_name`, `brn_desc`, `brn_img`, `creat_at`) VALUES
(2, 'l’oreal', 'The brand that empowers women through beauty products and services. The world’s leading cosmetics brand, L’Oréal Paris makes the best of luxury', 'pr1.png', '2023-09-11 20:24:34'),
(4, 'Medora Cosmetics', 'Medora is a Pakistani cosmetics brand that has been around for quite some time and is known for offering affordable alternatives to high-end brands such as MAC.', 'pr1.png', '2023-09-12 14:17:33'),
(5, 'Massarat Misbah', 'It was founded by Masarrat Misbah, a Pakistani entrepreneur, cosmetologist, and philanthropist 1. The brand offers a wide range of makeup products that', 'pr3.1.jpg', '2023-09-12 14:19:28'),
(6, 'Luscious Cosmetics', 'Luscious Cosmetics is a Pakistani makeup and skincare company founded in 2007 by an entrepreneur, Mehrbano Sethi . Contents 1 History 2 Products and marketing 3 ', 'pr3.jpg', '2023-09-12 14:20:56'),
(7, 'Hanif Jewellers', 'Hanif Jewellers has made its way to the top through four decades', 'pr2.jpg', '2023-09-12 17:10:30'),
(8, 'Damas Jewellers', 'Damas is a multinational brand operating in Pakistan as well as the Middle East. .', 'pr1.1.jpg', '2023-09-12 17:12:03'),
(9, 'Almas Jewellers', 'Almas is also one of the best jewellery brands in Pakistan that is working for almost four decades in the country. .', 'pr4.jpg', '2023-09-12 17:14:02'),
(10, 'Tesoro Jewellers', 'Tesoro is becoming famous for creating its market in both traditional and contemporary jewellery designs. Whatever you are planning to wear at the wedding, Tesoro has something perfect for you', 'pr6.jpg', '2023-09-12 17:17:30');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `cart_name` varchar(255) NOT NULL,
  `cart_price` decimal(10,2) NOT NULL,
  `cart_quantity` varchar(255) NOT NULL DEFAULT '1',
  `cart_image` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `cart_name`, `cart_price`, `cart_quantity`, `cart_image`, `product_id`, `user_id`) VALUES
(1, 'locket-7', 5000.00, '1', 'jel-21.jpg', 27, 0),
(2, 'LOCKET-9', 5000.00, '1', 'jel-27.jpg', 29, 0),
(4, '6st Small Description', 444.00, '1', 'cat-17.jpg', 16, 0),
(5, 'kit', 5000.00, '1', 'cat-1.jpg', 11, 0),
(6, 'LOCKET-10', 5000.00, '1', 'jel-32.jpg', 30, 6),
(7, 'seventh', 1234.00, '1', 'cat-23.jpg', 18, 0),
(11, 'locket-6', 5000.00, '1', 'jel-18.jpg', 26, 0),
(12, 'loket-8', 5000.00, '1', 'jel-24.jpg', 28, 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(190) NOT NULL,
  `img` varchar(50) NOT NULL,
  `description` longtext NOT NULL,
  `trending` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `img`, `description`, `trending`, `status`, `created_at`) VALUES
(1, 'marrige Gift', '', 'happy marrige', 1, 0, '2023-08-08 16:11:37'),
(3, 'birthday Gift', '', 'a very periouse gift for your family or friends', 0, 0, '0000-00-00 00:00:00'),
(4, 'aniversery', '', 'yyy', 1, 0, '0000-00-00 00:00:00'),
(9, 'Cosmetic', 'cs2.jpg', 'Cosmetics is an international, scientific, peer-reviewed, open access journal on the science and technology of cosmetics published bimonthly online by MDPI', 1, 1, '2023-09-12 09:02:53'),
(10, 'jewellery', 'jwelery-pic.jpg', 'jewelry, objects of personal adornment prized for the craftsmanship going into their creation and generally for the value of their components as well', 0, 1, '2023-09-12 09:05:24');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `checkout_id` int(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `checkout_Fname` varchar(255) NOT NULL,
  `checkout_Lname` varchar(255) NOT NULL,
  `checkout_email` varchar(255) NOT NULL,
  `checkout_mobile` varchar(255) NOT NULL,
  `checkout_address1` varchar(255) NOT NULL,
  `checkout_address2` varchar(255) NOT NULL,
  `checkout_city` varchar(255) NOT NULL,
  `checkout_zip_code` varchar(255) NOT NULL,
  `checkout_payment_method` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`checkout_id`, `user_id`, `checkout_Fname`, `checkout_Lname`, `checkout_email`, `checkout_mobile`, `checkout_address1`, `checkout_address2`, `checkout_city`, `checkout_zip_code`, `checkout_payment_method`) VALUES
(1, '4', 'soban', 'dd', 'soabn@gmail.com', '12345', '123street', 'wq123dsf', 'auidsh', '123', 'Cash On Delivery'),
(2, '4', 'soban2', 'shahid', 'soban2@gmail.com', '038989', '123', '123street', 'karachi', '125', 'Cash On Delivery');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `email`, `message`, `created_at`) VALUES
(3, 'soban@gmail.com', 'VERY GOOD', '2023-10-08 17:13:00'),
(4, 'saodsnha@gmail.ci', 'dfggfd', '2023-10-08 17:14:19');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_total` decimal(10,2) NOT NULL,
  `order_status` varchar(50) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `order_total`, `order_status`, `order_date`) VALUES
(1, 4, 1234.00, 'Pending', '2023-10-08 15:21:18'),
(2, 4, 18734.00, 'Pending', '2023-10-09 11:08:26');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`item_id`, `order_id`, `product_id`, `quantity`, `price`) VALUES
(1, 1, 18, 1, 1234.00),
(2, 2, 19, 3, 4500.00),
(3, 2, 28, 1, 5000.00),
(4, 2, 17, 1, 234.00);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `transaction_id` varchar(50) NOT NULL,
  `product_price` float(10,2) NOT NULL,
  `total` varchar(10) NOT NULL,
  `created_date` varchar(12) NOT NULL,
  `modified_date` varchar(12) NOT NULL,
  `status` varchar(25) NOT NULL COMMENT '0=Failed, 1=Success'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `brn_id` int(50) NOT NULL,
  `view_as` tinyint(4) NOT NULL DEFAULT 0,
  `trending` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=not-trend,1=trending',
  `name` varchar(190) NOT NULL,
  `small_des` mediumtext NOT NULL,
  `long_des` mediumtext NOT NULL,
  `price` varchar(190) NOT NULL,
  `offerprice` varchar(190) NOT NULL,
  `tax` varchar(190) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(190) NOT NULL,
  `image2` varchar(30) NOT NULL,
  `image3` varchar(30) NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '0=show,1=hide',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cat_id`, `brn_id`, `view_as`, `trending`, `name`, `small_des`, `long_des`, `price`, `offerprice`, `tax`, `quantity`, `image`, `image2`, `image3`, `status`, `created_at`) VALUES
(7, 9, 2, 1, 1, 'Mac Foundation', '           helps to smooth and even out skin tone and texture', '           t’s a makeup formula that helps smooth and even out skin tone and texture. Foundation also helps create an even base for other makeup, like blush and bronzer. Depending on the ', '1800', '1600', '0', 12, 'prod-1.jpg', '', '', 0, '2023-09-12 19:21:48'),
(11, 9, 2, 0, 0, 'kit', '      Cosmetics is an international, scientific, peer-reviewed', '      Cosmetics is an international, scientific, peer-reviewed', '5000', '4800', '3%', 12, 'cat-1.jpg', 'cat-2.jpg', 'cat-3.jpg', 0, '2023-09-12 19:04:15'),
(12, 9, 4, 1, 1, 'first Product', 'small description 1st product', 'small description 1st product', '211', '122', '2%', 11, 'cat-4.jpg', 'cat-5.jpg', 'cat-6.jpg', 0, '2023-09-12 19:23:07'),
(13, 9, 4, 1, 1, 'second Product', '    small description 2nd product', '    long description 2nd product', '1111', '111', '11%', 11, 'cat-7.jpg', 'cat-8.jpg', 'cat-9.jpg', 0, '2023-09-12 19:21:53'),
(14, 9, 5, 1, 0, '3rd product', 'Small Description  3rd product', 'Long Description 3rd product', '2222', '21', '2', 22, 'cat-11.jpg', 'cat-12.jpg', 'cat-13.jpg', 0, '2023-09-12 19:11:32'),
(15, 9, 5, 1, 1, '4rt product', ' Small Description 4rt product', ' \r\nSmall Description 4rt product\r\nLong Description', '1223', '21', '2', 22, 'cat-14.jpg', 'cat-15.jpg', 'cat-16.jpg', 0, '2023-09-12 19:22:29'),
(16, 9, 5, 0, 1, '6st Small Description', '    Small Description', '    \r\nSmall Description\r\nLong Description', '444', '5', '55', 122, 'cat-17.jpg', 'cat-18.jpg', 'cat-19.jpg', 0, '2023-09-12 19:22:24'),
(17, 9, 5, 0, 0, '5th prod', ' \r\nSmall Description\r\nLong Description', ' \r\nSmall Description\r\nLong Descrip', '234', '22', '2', 22, 'cat-20.jpg', 'cat-21.jpg', 'cat-22.jpg', 0, '2023-09-12 19:04:29'),
(18, 9, 6, 0, 1, 'seventh', '  \r\nSmall Description\r\nLong Descriptio', '  \r\nSmall Description\r\nLong Descr', '1234', '321', '22', 21, 'cat-23.jpg', 'cat-24.jpg', 'cat-25.jpg', 0, '2023-09-13 10:06:41'),
(19, 9, 6, 0, 1, '8ith pro', '  \r\nSmall Description\r\nLong Description', '  \r\nSmall Description\r\nSmall Description\r\nLong Description\r\nLong Description', '4500', '4300', '21', 123, 'cat-26.jpg', 'cat-27.jpg', 'cat-29.jpg', 0, '2023-09-12 19:21:41'),
(20, 9, 6, 0, 0, '9th prod', '\r\nSmall Description\r\nLong Description', '\r\nSmall Description\r\n\r\nSmall Description\r\nLong Description', '2345', '2344', '2', 22, 'cat-30.jpg', 'cat-31.jpg', 'cat-32.jpg', 0, '2023-09-12 19:11:45'),
(21, 10, 7, 1, 1, 'locket 1', '\r\nLong Description', 'll Description\r\nEnter Long Dll Description\r\nEnter Long Description \r\nLong Descriptionescription \r\nLong Description', '2000', '1800', '10%', 25, 'jew-1.jpg', 'jel-2.jpg', 'jew-3.jpg', 0, '2023-09-12 19:23:15'),
(22, 10, 7, 1, 0, 'locket2', 'll Description', 'll Description\r\nEnter Long Description \r\nLong Descriptionll Description\r\nEnter Long Description \r\nLong Description', '2500', '2300', '8', 12, 'jel-4.jpg', 'jel-5.jpg', 'jel-7.jpg', 0, '2023-09-12 19:11:52'),
(23, 10, 7, 1, 0, 'locket 3', 'A locket is a pendant that opens to reveal a space used for storing a photograph or other small item such as a lock of hair', 'A locket is a pendant that opens to reveal a space used for storing a photograph or other small item such as a lock of hair. Lockets are usually given to loved ones on holidays such as re.', '2444', '1400', '22', 123, 'jel-8.jpg', 'jel-9.jpg', 'jel-10.jpg', 0, '2023-09-12 19:11:57'),
(24, 10, 8, 1, 0, 'locket 4', 'A locket is a pendant that opens to reveal a space used for storing ', 'A locket is a pendant that opens to reveal a space used for storing a photograph or other small item such as a lock of hairA locket is a pendant that opens to reveal a space used for storing a photograph or other small item such as a lock of hair', '2444', '1677', '23', 123, 'jel-12.jpg', 'jel-13.jpg', 'jel-14.jpg', 0, '2023-09-12 19:12:01'),
(25, 10, 8, 0, 0, 'locket5', 'A locket is a pendant that opens to reveal a space used for storing', 'A locket is a pendant that opens to reveal a space used for storing a photograph or other small item such as a lock of hair', '3000', '2700', '10', 23, 'jel-15.jpg', 'jel-16.jpg', 'jel-17.jpg', 0, '2023-09-12 19:12:06'),
(26, 10, 8, 0, 0, 'locket-6', ' A locket is a pendant that opens to reveal a space used for storing ', ' A locket is a pendant that opens to reveal a space used for storing a photograph or other small item such as a lock of hair', '5000', '4500', '10', 25, 'jel-18.jpg', 'jel-19.jpg', 'jel-20.jpg', 0, '2023-09-12 19:05:22'),
(27, 10, 8, 0, 0, 'locket-7', ' A locket is a pendant that opens to reveal a space used for storing ', ' A locket is a pendant that opens to reveal a space used for storing a photograph or other small item such as a lock of hair', '5000', '4500', '10', 35, 'jel-21.jpg', 'jel-22.jpg', 'jel-23.jpg', 0, '2023-09-12 19:04:54'),
(28, 10, 9, 0, 1, 'loket-8', '  A locket is a pendant that opens to reveal a space used for storing ', '  A locket is a pendant that opens to reveal a space used for storing a photograph or other small item such as a lock of hair', '5000', '4500', '10', 66, 'jel-24.jpg', 'jel-24.jpg', 'jel-25.jpg', 0, '2023-09-13 10:06:48'),
(29, 10, 10, 0, 1, 'LOCKET-9', ' A locket is a pendant that opens to reveal a space used for storing', ' A locket is a pendant that opens to reveal a space used for storing a photograph or other small item such as a lock of hair', '5000', '4500', '10', 55, 'jel-27.jpg', 'jel-26.jpg', 'jel-28.jpg', 0, '2023-09-13 10:07:15'),
(30, 10, 9, 0, 1, 'LOCKET-10', '  A locket is a pendant that opens to reveal a space used for storing a photograph or other small item such as a lock of hair', '  A locket is a pendant that opens to reveal a space used for storing a photograph or other small item such as a lock of hairA locket is a pendant that opens to reveal a space used for storing a photograph or other small item such as a lock of hair', '5000', '4500', '10', 50, 'jel-32.jpg', 'jel-33.jpg', 'JEL-34.jpg', 0, '2023-09-13 10:06:56'),
(33, 10, 2, 1, 1, 'custumize locket for girls/women', 'Locket Chain Necklace For men Women - Dumbel Designe', 'r', '90', '80', '11', 19, 'pr1.png', 'pr1.1.jpg', 'pr1.png', 0, '2023-10-10 07:30:42'),
(34, 10, 2, 1, 1, 'Black Square Gold Earrings', 'Gender: Women,Girl Style: Korean,Beauty,CuteMaterial: AlloyOccasions: Party, Banquet, Dating, Cocktail, etcFeatures: Charming,Simple Design', 'Gender: Women,Girl Style: Korean,Beauty,CuteMaterial', '419', '380', '13', 59, 'pr2.jpg', 'pr2.jpg', 'pr2.jpg', 0, '2023-10-10 07:35:09'),
(35, 9, 9, 1, 1, 'Square Gold Earrings Female Jewelry', 'Gender: Women,Girl Style: Korean,Beauty,CuteMaterial: AlloyOccasions: Party, Banquet, Dating, Cocktail, etcFeatures: Charming,Simple Design', 'Gender: Women,Girl Style: Korean,Beauty,CuteMaterial: AlloyOccasions: Party, Banquet, Dating, Cocktail, etcFeatures: Charming,Simple Design', '500', '450', '19', 60, 'pr3.2.jpg', 'pr3.1.jpg', 'pr3.jpg', 0, '2023-10-10 07:37:21'),
(36, 10, 10, 0, 1, 'Royal Blue Stone Jewelry Set For Women & Girls - Silver', 'Elegant & Decent Royal Blue Jewellery Set - Silver\r\nDelivered Same Product as shown in image', 'Elegant & Decent design Jewelry set (Necklace+Earrings) makes your eye catching personality like never before. Fine quality Jewelry set are best for all occasions. Light weight looks', '600', '540', '19', 96, 'pr4.2.jpg', 'pr4.jpg', 'pr4.1.jpg', 0, '2023-10-10 07:40:09'),
(37, 10, 9, 0, 1, 'Stone Jewelry Set For Women & Girls ', '100% Brand New Quality\r\nSuitable for all occasions like Weddings, Birthday, Casual & Home Parties', 'Elegant & Decent design Jewelry set (Necklace+Earrings) makes your eye catching personality like never before. Fine quality Jewelry set are best for all occasions. Light weight looks', '650', '600', '5', 65, 'pr5.png', 'pr5.1.jpg', 'pr5.2.jpg', 0, '2023-10-10 07:41:56'),
(38, 10, 10, 0, 1, 'Pendants Necklaces Gifts European And American Fashion Geometric ', 'Stylish Design\r\nTrendy\r\nElegant\r\nPremium Quality', 'Trendy\r\n\r\nElegant\r\n\r\nPremium Quality\r\n\r\nDurable\r\n\r\nAttractive\r\n\r\nEach unit is tested before shipping and stored in fulfillment by daraz warehouse.', '560', '500', '13', 60, 'pr6.jpg', 'pr6.jpg', 'pr6.jpg', 0, '2023-10-10 07:44:21'),
(39, 10, 10, 0, 1, 'stylish zarcon set fashion', 'stylish zarcon set fashion\r\nEach unit is tested before shipping and stored in fulfillment by daraz warehouse.', 'Trendy\r\n\r\nElegant\r\n\r\nPremium Quality\r\n\r\nDurable\r\n\r\nAttractive\r\n\r\nEach unit is tested before shipping and stored in fulfillment by daraz warehouse.', '600', '560', '16', 39, 'pr7.jpg', 'pr7.1.jpg', 'pr7.1.jpg', 0, '2023-10-10 07:47:47'),
(40, 10, 10, 0, 1, ' Dangle Earrings For Girls Fashion Jewellery', 'Korean Style Dangle EarringsTrendy Romantic High Quality Alloy Nice Polishing and PlatingDangle for Girls Long Dangle EarringsSoomas Jewels Earrings', 'Korean Style Dangle EarringsTrendy Romantic High Quality Alloy Nice Polishing and PlatingDangle for Girls Long Dangle EarringsSoomas Jewels Earrings\r\n Hair Ball Dangle Earrings For for girls 2021', '800', '750', '19', 13, 'pr8.jpg', 'pr8.1.jpg', 'pr8.2.jpg', 0, '2023-10-10 07:51:28'),
(41, 10, 9, 0, 1, 'Soomas Jewels Ball Dangle Earrings For Girls', 'Korean Style Dangle EarringsTrendy Romantic High Quality Alloy Nice Polishing and PlatingDangle for Girls', 'Korean Style Dangle EarringsTrendy Romantic High Quality Alloy Nice Polishing and PlatingDangle for Girls Long Dangle EarringsSoomas Jewels Earrings\r\n Hair Ball Dangle Earrin', '800', '750', '16', 55, 'pr9-m.jpg', 'pr9.jpg', 'pr9.2.jpg', 0, '2023-10-10 07:53:43'),
(42, 10, 9, 0, 1, 'Earrings For Girls', 'Korean Style Dangle EarringsTrendy Romantic High Quality Alloy Nice Polishing Earrings For Girls', 'Korean Style Dangle EarringsTrendy Romantic High Quality Alloy Nice Polishing Earrings For Girls', '800', '700', '19', 23, 'pr10.jpg', 'pr10.1.jpg', 'pr10.jpg', 0, '2023-10-10 07:55:34'),
(43, 10, 10, 0, 1, 'korean Earrings ', 'Korean Style Dangle EarringsTrendy Romantic High Quality Alloy Nice Polishing Earrings For Girls', ' Korean Style Dangle Earrings- Trendy Romantic- High Quality Alloy- Nice Polishing and Plating- Dangle for Girls- Long Dangle Earings', '890', '800', '650', 19, 'pr11.jpg', 'pr11.1.jpg', 'pr11.jpg', 0, '2023-10-10 07:57:14'),
(44, 10, 9, 0, 1, 'lahore Earrings ', ' Korean Style Dangle Earrings- Trendy Romantic- High Quality Alloy- Nice Polishing and Plating- Dangle for Girls', ' Korean Style Dangle Earrings- Trendy Romantic- High Quality Alloy- Nice Polishing and Plating- Dangle for Girls- Long Dangle Earings', '890', '800', '12', 89, 'pr12.2.jpg', 'pr12.1.jpg', 'pr12.2.jpg', 0, '2023-10-10 07:58:47'),
(45, 10, 10, 0, 1, 'Luxury Crystal Opal Flower Earrings ', '*Welcome to the Enacolor Jewelry Store *shopping tips: 1.shopping problems,please contact our customer service. 2.products from china,', 'Estimated Ship time is approximately 2-5 days from Order Date,normally it will arrive in about 12-20 working days; 3.all products in this shop are wholesale prices; 4.full store activity,5-60% off discount; 5.before ordering', '233', '220', '19', 80, 'pr13.jpg', 'pr13.1.jpg', 'pr13.2.jpg', 0, '2023-10-10 08:01:25'),
(46, 10, 9, 0, 1, 'Luxury  Earrings for Women Girl', 'Estimated Ship time is approximately 2-5 days from Order Date,normally it will arrive in about 12-20', 'Estimated Ship time is approximately 2-5 days from Order Date,normally it will arrive in about 12-20 working days; 3.all products in this shop are wholesale prices; 4.full store activity,5-60% off discount; 5.before ordering', '333', '320', '20', 188, 'pr14.jpg', 'pr14.2.jpg', 'pr14.1.jpg', 0, '2023-10-10 08:02:50'),
(47, 10, 10, 0, 1, 'New Korean Lovely Daily Beaded Bracelet', 'Type: Bracelets & CharmsGender: Women,Girl Style: Korean,Beauty,CuteMaterial: AlloyOccasions: Party, Banquet', 'Charming,Simple Design,KoreanNotes:Due to the light and screen setting difference, ', '266', '250', '30', 19, 'pr15.1.jpg', 'pr15.jpg', 'pr15.1.jpg', 0, '2023-10-10 08:06:21'),
(48, 10, 9, 0, 1, 'New  Bracelet Charm Girls Cute Ins', 'Type: Bracelets & CharmsGender: Women,Girl Style: Korean,Beauty,CuteMaterial: AlloyOccasions: Party, Banquet, Dating, Cocktail, etcFeatures: Charming,Simple Design,KoreanNotes:Due to the light and screen setting difference, the items color may be slightly different from the pictures.#Bracelet#Girls#Ins#Linnor#New\r\n', 'Type: Bracelets & CharmsGender: Women,Girl Style: Korean,Beauty,CuteMaterial: AlloyOccasions: Party, Banquet, Dating, Cocktail, etcFeatures: Charming,Simple Design,KoreanNotes:Due to the light and screen setting difference, the items color may be slightly different from the pictures.#Bracelet#Girls#Ins#Linnor#New\r\n', '322', '300', '19', 70, 'pr16.1.jpg', 'pr17.jpg', 'pr16.jpg', 0, '2023-10-10 08:08:57'),
(49, 9, 2, 1, 1, 'UPTOWN LA Professional Makeup ', 'UPTOWN LA Professional Makeups Cosmetics Makeup Fixer Setting Spray Dewy Finish Long Lasting is a standout product in the world of makeup setting sprays', 'ersatile Use: This setting spray can be used with all types of makeup looks, whether you prefer a full face of glam or a more natural, everyday look. It complements any style and helps enhance the longevity of your makeup.', '3666', '3650', '16', 89, 'cs0.png', 'cs0.png', 'cs0.png', 0, '2023-10-10 08:10:59'),
(50, 9, 6, 1, 1, 'cosmetics Makeup Fixer Setting spray', 'ersatile Use: This setting spray can be used with all types of makeup looks, whether you prefer a full face of glam or a more natural, everyday look. It complements any style and helps enhance the longevity of your makeup.', 'ersatile Use: This setting spray can be used with all types of makeup looks, whether you prefer a full face of glam or a more natural, everyday look. It complements any style and helps enhance the longevity of your makeup.', '6500', '6400', '16', 90, 'cs1.jpg', 'cs1.jpg', 'cs1.jpg', 0, '2023-10-10 08:12:44'),
(51, 10, 7, 1, 1, 'bracelet', 'osmetics Makeup Fixer Setting', 'osmetics Makeup Fixer Setting', '99', '7', '4', 77, 'pr17.jpg', 'pr16.1.jpg', 'pr14.jpg', 0, '2023-10-10 08:13:51'),
(52, 10, 8, 1, 1, 'mer shine bracelen', 'osmetics Makeup Fixer Setting', 'osmetics Makeup Fixer Setting', '226', '45', '4', 44, 'pr4.2.jpg', 'pr4.2.jpg', 'pr4.jpg', 0, '2023-10-10 08:15:15'),
(53, 9, 2, 0, 1, 'Setting Spray Dewy Finish Long Lasting', 'Lightweight and Non-Greasy: The spray has a lightweight texture that doesnt feel ', 'Hydrating Properties The formulation of the Cosmetics Makeup Fixer Setting Spray includes hydrating ingredients that help keep your skin moisturized and nourished. It prevents your makeup from drying out your skin', '365', '350', '78', 758, 'cs1.jpg', 'cs1.jpg', 'cs1.jpg', 0, '2023-10-10 08:17:35'),
(54, 9, 2, 0, 1, ' ROSE Concealer , Liquid Foundation', 'Cross-border properties unit weight 0.3kg Product attributes brand type other whether to import no brand MISS ROSE color other model other Special ', 'Cross-border properties unit weight 0.3kg Product attributes brand type other whether to import no brand MISS ROSE color other model other Special ', '755', '757', '75', 757, 'cs2.jpg', 'cs2.jpg', 'cs2.jpg', 0, '2023-10-10 08:18:51'),
(55, 9, 2, 0, 1, 'Arfa Cosmetics Professional Makeup -', 'Cross-border properties unit weight 0.3kg Product attributes brand type other whether to import no brand MISS ROSE color other model other Special ', 'Cross-border properties unit weight 0.3kg Product attributes brand type other whether to import no brand MISS ROSE color other model other Special ', '4557', '752', '75', 542, 'cs3.jpg', 'cs3.jpg', 'cs3.jpg', 0, '2023-10-10 08:20:00'),
(56, 9, 2, 0, 0, 'Cosmetics Makeup Fixer Setting Spray Dewy Finish Long Lasting 160Mls', 'Makeup Fixing Power: It effectively locks in your makeup, helping it withstand various environmental factors like heat, humidity, and sweat. Your foundation', 'Makeup Fixing Power: It effectively locks in your makeup, helping it withstand various environmental factors like heat, humidity, and sweat. Your foundation', '5427', '442', '5', 542, 'cs5.jpg', 'cs5.1.jpg', 'cs5.jpg', 0, '2023-10-10 08:21:58'),
(57, 9, 2, 0, 0, 'arfa foundation', 'Arfa Cosmetics Professional Makeups Cosmetics Makeup Fixer Setting Spray Dewy Finish Long Lasting is a standout product in the world of makeup setting sprays', 'Arfa Cosmetics Professional Makeups Cosmetics Makeup Fixer Setting Spray Dewy Finish Long Lasting is a standout product in the world of makeup setting sprays', '542356', '12221', '25', 2542, 'cs6.jpg', 'cs6.jpg', 'cs6.jpg', 0, '2023-10-10 09:16:15'),
(58, 9, 2, 0, 0, 'loreal foundation', 'Arfa Cosmetics Professional Makeups Cosmetics Makeup Fixer Setting Spray Dewy Finish Long Lasting is a standout product in the world of makeup setting sprays', 'Arfa Cosmetics Professional Makeups Cosmetics Makeup Fixer Setting Spray Dewy Finish Long Lasting is a standout product in the world of makeup setting sprays', '2365', '23611', '12', 54, 'cs10.jpg', 'cs10.jpg', 'cs10.jpg', 0, '2023-10-10 09:17:33'),
(59, 9, 2, 0, 0, 'Professional long lasting foundation ', 'Arfa Cosmetics Professional Makeups Cosmetics Makeup Fixer Setting Spray Dewy Finish Long Lasting is a standout product in the world of makeup setting sprays', 'Arfa Cosmetics Professional Makeups Cosmetics Makeup Fixer Setting Spray Dewy Finish Long Lasting is a standout product in the world of makeup setting sprays', '5132', '5100', '14', 45, 'cs12.jpg', 'cs12.jpg', 'cs12.jpg', 0, '2023-10-10 09:18:46'),
(60, 9, 2, 0, 0, 'HONEY LONG LASTIG LOTION', 'Arfa Cosmetics Professional Makeups Cosmetics Makeup Fixer Setting Spray Dewy Finish Long Lasting is a standout product in the world of makeup setting sprays', 'Arfa Cosmetics Professional Makeups Cosmetics Makeup Fixer Setting Spray Dewy Finish Long Lasting is a standout product in the world of makeup setting sprays', '2356', '2200', '56', 565, 'cs16.jpg', 'cs16.jpg', 'cs16.jpg', 0, '2023-10-10 09:19:46'),
(61, 9, 2, 0, 0, 'SKIN CARE', 'Arfa Cosmetics Professional Makeups Cosmetics Makeup Fixer Setting Spray Dewy Finish Long Lasting is a standout product in the world of makeup setting sprays', 'Arfa Cosmetics Professional Makeups Cosmetics Makeup Fixer Setting Spray Dewy Finish Long Lasting is a standout product in the world of makeup setting sprays', '51461', '541', '47', 114, 'cs14.jpg', 'cs12.jpg', 'cs15.jpg', 0, '2023-10-10 09:20:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phoneNu` varchar(30) NOT NULL,
  `password` varchar(191) NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 2,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phoneNu`, `password`, `role_as`, `created_at`) VALUES
(1, 'soban', 'soban@gmail.com', '123', '1234', 1, '0000-00-00 00:00:00'),
(4, 'soban', 'soban2@gmail.com', '555', '12345', 2, '0000-00-00 00:00:00'),
(6, 'ahmad', 'ahmad02@gamil.com', '0321654987', '123', 2, '0000-00-00 00:00:00'),
(7, 'ahmad', 'ahmad03@gamil.com', '0321654987', '123', 2, '0000-00-00 00:00:00'),
(8, 'ahmad', 'ahmad04@gamil.com', '0321654987', '123', 2, '0000-00-00 00:00:00'),
(10, 'ahmad', 'ahmad08@gamil.com', '0321654987', '123', 1, '0000-00-00 00:00:00'),
(13, 'moij', 'moiz@gmail.com', '0321', '12345', 2, '0000-00-00 00:00:00'),
(14, 'mubeen', 'mubeen@gmail.com', '0321654', '1235', 2, '0000-00-00 00:00:00'),
(15, 'ADMIN', 'admin@gmail.com', '0321654789', 'admin', 1, '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brn_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`checkout_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `brn_id` (`brn_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `checkout_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`brn_id`) REFERENCES `brands` (`brn_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
