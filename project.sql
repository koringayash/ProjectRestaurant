-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2022 at 06:10 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(10) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'Punjabi'),
(2, 'kathiyawadi'),
(3, 'Drinks'),
(4, 'Soup'),
(5, 'sweet');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_username` varchar(255) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `customer_password` varchar(255) NOT NULL,
  `customer_date_of_birth` date NOT NULL,
  `customer_phone_no` int(25) NOT NULL,
  `customer_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_username`, `customer_email`, `customer_password`, `customer_date_of_birth`, `customer_phone_no`, `customer_address`) VALUES
(1, '', '', '0', '0000-00-00', 0, ''),
(2, 'koringayash', 'koringayash168@gmail.com', '0', '2002-08-16', 2147483647, 'Rajkot'),
(3, 'koringayash', 'koringayash168@gmail.com', 'Yash', '2002-08-16', 760079640, 'Rajkot'),
(4, 'koringaumang', 'koringaumang@gmail.com', '$2y$10$vyYrDOIpHXbAno9Hzy', '1998-06-22', 2147483647, 'Rajkot'),
(5, 'meet24', 'meet24@gmail.com', '$2y$10$8ileU6MbBo/86gM7xK', '2024-08-15', 1234567891, 'xyz'),
(6, 'pipaliyameet', 'pipaliyameet@gmail.com', '$2y$10$q7/WQFKZeVmUtzyUSt', '2016-06-08', 2147483647, 'Rajkot'),
(7, 'meetpip', 'meetpip@mail.com', '$2y$10$igKw0uWO.wTpQyglgo', '2014-07-18', 2147483647, 'Rj'),
(8, 'yash', 'yash@gmail.com', '$2y$10$l04fonQTf3AtCPPEW.', '2015-01-29', 2147483647, 'Rajkot'),
(9, 'dharmeshg', 'dharmesh22@gmail.com', '$2y$10$JPP.UL.1bkfX3C8Acr', '2002-12-12', 2147483647, 'house of scolers, A M NAIK boy hostel'),
(10, 'om', 'om@gmail.com', '$2y$10$FRpk3hUreSfjgnjfDJ', '2010-07-15', 2147483647, 'rj'),
(11, 'drsmit', 'smit@gmail.com', '$2y$10$gJ.sdbpAbJ6/bgM8uB', '2003-07-10', 1234568795, 'Rajkot'),
(12, 'smit', 'smit@gmail.com', '$2y$10$lVZTo/HImphyQubmQ3', '2003-11-19', 2147483647, 'Rj'),
(13, 'kym', 'kym@gmail.com', '$2y$12$4tL64Ckoxb3ZEWrwZE', '2010-06-16', 2147483647, 'ghare'),
(14, 'umk', 'umk@gmail.com', '$2y$12$w4SHQgmMnttZdW8Ktc', '2012-06-15', 2147483647, 'knya?'),
(15, 'bvm', 'bvm@gmail.com', '$2y$10$/CoWUO8RJDiuSC4BdXUa9Or164Fv89YWVB/TG/X8XuZTkL2/cYTNq', '2005-06-24', 2147483647, 'v.v.nager'),
(16, 'dua_lipa', 'dua_lipa@gmail.com', '$2y$10$.y6LrVe4I6AIHMB1MPYvnuW2jiI0alwCOxmLVjlM0wedHns3cWnyu', '1994-07-14', 2147483647, 'My_Heart'),
(17, 'ram', 'ram@gmail.com', '$2y$10$5wDnaMeiRBQrsC17dkEej.YFC3/RCQ7.Ro/47F03ghNF8n0Gwxrq2', '2019-07-19', 254789635, 'Ayodhaya'),
(18, 'pushpa', 'pushpa@gmail.com', '$2y$10$SrNZrjAuclyr23YeNv.6F.8qbPiI4u0aiWCLjHjVockFI7pfocxK.', '2016-06-16', 2147483647, 'kerla'),
(19, 'janu', 'janu@gmail.com', '$2y$10$ubqfhFcjFR0djBNfjiUZI.B3NZTT.iGhC5yFxEdLwc9qsPFmy/DTm', '2020-06-28', 2147483647, 'my heart'),
(20, 'Katherine_langford_and_josephine_langford', 'Katherine_langford_and_josephine_langford@gmail.co', '$2y$10$Y2Nf.1urZ2lEnpj/k1yqs.pnG46J6jYSPt8dsQuR3JTBDGNB47WFW', '2011-02-10', 2147483647, 'abcd'),
(21, 'ompatel', 'ompatel1693@gmail.com', '$2y$10$nL9MsvaaJXLZ4mkdkxuV9OsgT43jQv3fcOExVlvi0Hns8ndfZkL2q', '2003-09-16', 2147483647, 'Rajkot'),
(22, 'ompappu', 'ompatel1693@gmail.com', '$2y$10$o/loPCFOmHVMdL.QsUBzHut5kw7kt1It37whUvqR0OVfYzooigUoq', '2022-04-07', 2147483647, 'Rajkot'),
(23, 'omgodhani', 'ompatel1693@gmail.com', '$2y$10$ovBuB/7gMMnU8VcI6QMgG.JUaMDonr2a8budajrqP0p0rvQs8gVKG', '2022-04-10', 2147483647, 'Rajkot'),
(24, 'john', 'john@gmail.com', '$2y$10$Fl/m1w.gUxHSc22hYnIfAuNgllhLYvsQJ.nFKXID7x7cOaJ7NkRTK', '2022-04-10', 2147483647, 'ABC'),
(25, 'abc', 'abc@gmail.com', '$2y$10$zM58bxg8HQzQAI5aOhAxX.iQCrq8wDjs9773cFz14FP1OFNvn2SUm', '2022-04-10', 2147483647, 'Rajkot'),
(26, 'xyz', 'xyz@gmail.com', '$2y$10$BgsdZYwVYSyZZ.lQlpm9dOuRtudLHz11MkcMlOZ.k/mLFroA/TouS', '2022-04-10', 2147483647, 'pqr'),
(27, 'abcdef', 'abcdef@gmail.com', '$2y$10$qfTHaWy2y6Kfgr8ZLiSh.OAlGcxWQJGGyjFDTUqmm38a3NqPBvbAe', '2022-04-10', 2147483647, 'abcdf'),
(28, 'fgh', 'fgh@gmail.com', '$2y$10$TvmnaX6xvUx1YjaFzc9/QeSCl6PKF6996p8VFd.wOctL407ifdkVO', '2022-04-10', 2147483647, 'Rajkot'),
(29, 'lalo', 'lalo@gmail.com', '$2y$10$qDiOhJVD2J6D5NUgKDi2KuEqEAjNxfw4n6wFhs/28bLLEgF42hIhG', '2022-04-10', 2147483647, 'Rajkot'),
(30, 'kano', 'kano', '$2y$10$SFVarMKdaQwimDHeKNLb/uk3BtI0ysLP4AvI..FnfrCeNDE.KhAWm', '2022-04-17', 2147483647, 'vcccv');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(10) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `prize` int(10) NOT NULL,
  `item_category` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `prize`, `item_category`) VALUES
(1, 'Rajma Chawal', 80, 1),
(2, 'Paneer Tika', 120, 1),
(3, 'Chole-Bhature', 150, 1),
(4, 'Dal Makhani', 170, 1),
(5, 'Kaju Curry', 170, 1),
(6, 'Malai Kofta', 80, 1),
(7, 'Palak Paneer', 210, 1),
(8, 'Paneer Butter Masala', 200, 1),
(9, 'Paneer Makhani', 110, 1),
(10, 'Paneer Paratha', 120, 1),
(11, 'Punjabi Dal Tadka', 155, 1),
(12, 'Chole', 80, 1),
(20, 'ભરેલા ભીંડા  નું  શાક', 50, 2),
(21, 'સુરતી પાપડી નું શાક', 100, 2),
(22, 'સાબુદાણા ખિચડી', 120, 2),
(23, 'મેથી પાપડ નું શાક', 150, 2),
(24, 'મકાઇ નું શાક', 130, 2),
(25, 'ગુજરાતી દાળ', 70, 2),
(26, 'ગુજરાતી કઢી', 90, 2),
(27, 'કાઠિયાવાડી ઢોકળી', 125, 2),
(28, 'કાજુ ગાંઠિયા  નું શાક', 100, 2),
(29, 'બટાકા નું શાક', 80, 2),
(30, 'વટાણા બટાકા નું શાક', 120, 2),
(31, 'મકાઇ ની ખિચડી', 200, 2),
(40, 'Chaas(ButterMilk)', 20, 3),
(41, 'Coca Cola', 60, 3),
(42, 'Maaza', 40, 3),
(43, 'Minute maid', 70, 3),
(44, 'Pepsi Blank', 80, 3),
(45, 'Red Bull Energy Drink', 150, 3),
(46, 'Sprite', 60, 3),
(47, 'Sweet Lassi', 120, 3),
(48, 'Trpoicana Orange Juice', 90, 3),
(49, 'Cold Coco', 100, 3),
(50, 'Cold Coffee', 120, 3),
(51, 'herbal Tea', 50, 3),
(52, 'Hot Chocolate', 150, 3),
(53, 'Lemon Soda', 25, 3),
(54, 'Tea', 20, 3),
(60, 'Carrot Soup', 120, 4),
(61, 'Chilled Cucumber Soup', 150, 4),
(62, 'Creamy Broccoli Cheddar Soup', 100, 4),
(63, 'Creamy Potato Soup', 80, 4),
(64, 'Creamy Roasted Cauliflower Soup', 120, 4),
(65, 'Green Soup', 200, 4),
(66, 'Moroccan Carrot Soup', 125, 4),
(67, 'Mushroom-Soup', 80, 4),
(68, 'Pumpkin Soup', 120, 4),
(69, 'Spicy Cabbage Soup', 180, 4),
(70, 'Sweet Pea and Avocado Soup', 225, 4),
(71, 'Tomato Soup', 100, 4),
(80, 'Carrot Halwa', 500, 5),
(81, 'Gulab Jamun', 350, 5),
(82, 'Kaju Katli', 800, 5),
(83, 'Laddu', 300, 5),
(84, 'Nankhatai', 250, 5),
(85, 'Rabdi', 450, 5),
(86, 'Rasgulla', 500, 5),
(87, 'Shrikhand', 350, 5),
(88, 'Soan Papdi', 280, 5),
(89, 'Sukhdi', 200, 5),
(90, 'પુરણ પૂરી (વેડમી )', 325, 5),
(91, 'Jalebi', 220, 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_no` int(10) NOT NULL,
  `prize` int(11) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `order_date_time` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_no`, `prize`, `customer_id`, `order_date_time`) VALUES
(1, 3450, 18, 2147483647),
(2, 3450, 18, 2147483647),
(3, 17400, 18, 2147483647),
(4, 3460, 18, 2147483647),
(5, 4500, 18, 2147483647),
(6, 3500, 18, 2147483647),
(8, 200, 18, 2147483647),
(9, 3120, 18, 2147483647),
(10, 1650, 18, 2147483647),
(11, 85, 18, 2147483647),
(12, 40, 22, 2147483647),
(13, 40, 23, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `razorpay_payment_id` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `order_id`, `razorpay_payment_id`, `status`, `email`, `price`) VALUES
(0, 'order_JHefkkpq4OfXA0', 'pay_JHefz0W6bVP68r', 'success', 'abc@gmail.com', 1),
(0, 'order_JHhLOU3sz47gcy', 'pay_JHhbOmH4GeElmL', 'success', 'ompatel1693@gmail.com', 40);

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `item_id` int(11) NOT NULL,
  `item_quan` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `customer_id` int(11) NOT NULL,
  `order_no` int(11) NOT NULL,
  `item_cat` int(11) NOT NULL,
  `total_prize` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`item_id`, `item_quan`, `time`, `customer_id`, `order_no`, `item_cat`, `total_prize`) VALUES
(1, 10, '2022-04-08 05:55:25', 1, 39, 1, 0),
(2, 12, '2022-04-08 06:05:22', 1, 43, 1, 0),
(24, 10, '2022-04-08 06:33:26', 1, 48, 2, 0),
(45, 11, '2022-04-08 11:10:51', 1, 50, 3, 0),
(62, 120, '2022-04-08 13:13:59', 1, 52, 4, 0),
(81, 12, '2022-04-08 14:06:12', 1, 53, 5, 0),
(80, 10, '2022-04-08 14:06:35', 1, 54, 5, 0),
(89, 15, '2022-04-08 14:07:26', 1, 55, 5, 0),
(1, 15, '2022-04-09 06:18:19', 1, 56, 1, 0),
(1, 15, '2022-04-09 06:27:33', 1, 57, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `foreign_key_items_item_category` (`item_category`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_no`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`order_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `temp`
--
ALTER TABLE `temp`
  MODIFY `order_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `foreign_key_items_item_category` FOREIGN KEY (`item_category`) REFERENCES `categories` (`category_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
