-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2021 at 06:27 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fundforneeds`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_email` varchar(255) NOT NULL,
  `verified` tinyint(1) NOT NULL,
  `token` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `reset_token` varchar(255) NOT NULL,
  `admin_fullname` varchar(255) NOT NULL,
  `admin_staffid` varchar(255) NOT NULL,
  `image_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_email`, `verified`, `token`, `password`, `reset_token`, `admin_fullname`, `admin_staffid`, `image_admin`) VALUES
('khooannhoong@gmail.com', 1, '98b297950041a42470269d56260243a1', '3675bad7bdcf22620f7e32692b694f0d500454ef', '', 'KHOO ANN HONG', 'khoo0291', ''),
('lauhacker98@hotmail.com', 1, '02e74f10e0327ad868d138f2b4fdd6f0', '9b8c02fed3901e82728d18f32bb0369743b22c35', '', 'lau testing', 'a19d1234', 'LAU ZHAO LIN (2).jpg'),
('limshengearn@gmail.com', 1, '7f6ffaa6bb0b408017b62254211691b5', '7c222fb2927d828af22f592134e8932480637c0d', '', 'Lim Sheng Earn', 'lim', ''),
('zhaolinlau@gmail.com', 1, 'b53b3a3d6ab90ce0268229151c9bde11', '9b8c02fed3901e82728d18f32bb0369743b22c35', '163729701909accc824a173d1dfc121f772d7443d4', 'ZHAO LIN', 'A19DW1234', 'LAU ZHAO LIN (2).jpg'),
('zhihao1919@gmail.com', 1, 'e369853df766fa44e1ed0ff613f563bd', '7c222fb2927d828af22f592134e8932480637c0d', '', 'YAP ZHI HAO', '1234', 'yap.png');

-- --------------------------------------------------------

--
-- Table structure for table `payment_history`
--

CREATE TABLE `payment_history` (
  `Transaction_ID` varchar(100) NOT NULL,
  `User_email` varchar(255) NOT NULL,
  `User_fullname` varchar(100) NOT NULL,
  `fullname_receiver` varchar(255) NOT NULL,
  `email_receiver` varchar(255) NOT NULL,
  `phoneNumber_receiver` varchar(255) NOT NULL,
  `amount_donation` decimal(10,2) NOT NULL,
  `status` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_history`
--

INSERT INTO `payment_history` (`Transaction_ID`, `User_email`, `User_fullname`, `fullname_receiver`, `email_receiver`, `phoneNumber_receiver`, `amount_donation`, `status`, `date`) VALUES
('TP90208059315821181121', 'limshengearn@gmail.com', 'Lim Sheng Earn', 'YAP ZHI HAO', 'zhihao1919@gmail.com', '0174510667', '200.00', 1, '2021-11-18 14:04:48'),
('TP90211412190122181121', 'zhihao1919@gmail.com', 'YAP ZHI HAO', 'Lim Sheng Earn', 'limshengearn@gmail.com', '+60102459469', '200.00', 1, '2021-11-18 14:07:06'),
('TP90212272230222181121', 'zhihao1919@gmail.com', 'YAP ZHI HAO', 'LAU TESTING', 'lauhacker98@hotmail.com', '0179988693', '500.00', 1, '2021-11-18 14:08:08'),
('TP90213425270322181121', 'limshengearn@gmail.com', 'Lim Sheng Earn', 'YAP ZHI HAO', 'zhihao1919@gmail.com', '0174510667', '1.00', 1, '2021-11-18 14:09:10'),
('TP90254278080300191121', 'khooannhoong@gmail.com', 'KHOO ANN HONG', 'YAP ZHI HAO', 'zhihao1919@gmail.com', '0174510667', '100.00', 1, '2021-11-18 16:08:56'),
('TP90361115374011191121', 'zhihao1919@gmail.com', 'YAP ZHI HAO', 'KHOO ANN HONG', 'khooannhoong@gmail.com', '01126174870', '1.00', 1, '2021-11-19 03:52:49'),
('TP90375208415112191121', 'lauhacker98@hotmail.com', 'LAU TESTING', 'Lim Sheng Earn', 'limshengearn@gmail.com', '0102459469', '10.00', 1, '2021-11-19 04:57:58'),
('TP90377226025512191121', 'zhaolinlau@gmail.com', 'Zenitsu Lau', 'YAP ZHI HAO', 'zhihao1919@gmail.com', '0174510667', '8.00', 1, '2021-11-19 05:00:59');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `Id` bigint(19) NOT NULL,
  `User_Email` varchar(255) NOT NULL,
  `Post_Content` varchar(255) NOT NULL,
  `Post_Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`Id`, `User_Email`, `Post_Content`, `Post_Date`) VALUES
(17, 'limshengearn@gmail.com', 'I want to ASK DONATION', '2021-11-18 13:54:06'),
(18, 'zhihao1919@gmail.com', 'Hi I new donation for my study. Thank you!', '2021-11-18 14:03:44'),
(19, 'khooannhoong@gmail.com', 'I want the donation. Thank you.', '2021-11-18 16:08:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(100) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 0,
  `token` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `reset_token` varchar(255) DEFAULT NULL,
  `usernames` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `user_verify` tinyint(1) NOT NULL,
  `phoneNumber` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `verified`, `token`, `password`, `reset_token`, `usernames`, `fullname`, `file_name`, `user_verify`, `phoneNumber`, `image`) VALUES
('khooannhoong@gmail.com', 1, '5b8add2a5d98b1a652ea7fd72d942dac', '3675bad7bdcf22620f7e32692b694f0d500454ef', NULL, 'KHOO01', 'KHOO ANN HONG', '', 0, '01126174870', 'Khoo Picture.jpeg'),
('lauhacker98@hotmail.com', 1, 'ffd52f3c7e12435a724a8f30fddadd9c', '7c222fb2927d828af22f592134e8932480637c0d', NULL, 'lau testing', 'LAU TESTING', '', 0, '0179988693', ''),
('limshengearn@gmail.com', 1, '3cf166c6b73f030b4f67eeaeba301103', 'a7d579ba76398070eae654c30ff153a4c273272a', NULL, 'shengearn', 'Lim Sheng Earn', '13323-earn.jpg', 1, '0102459469', 'Earn.jpg'),
('zhaolinlau@gmail.com', 1, '58d4d1e7b1e97b258c9ed0b37e02d087', '9b8c02fed3901e82728d18f32bb0369743b22c35', '163729679409accc824a173d1dfc121f772d7443d4', 'zenitsulau', 'Zenitsu Lau', '58938-lau-zhao-lin.jpg', 1, '0123456789', 'zenitsu.jpg'),
('zhihao1919@gmail.com', 1, '1595af6435015c77a7149e92a551338e', '7c222fb2927d828af22f592134e8932480637c0d', NULL, 'Z', 'YAP ZHI HAO', '75878-lau-zhao-lin.jpg', 1, '0174510667', 'yap.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_email`);

--
-- Indexes for table `payment_history`
--
ALTER TABLE `payment_history`
  ADD PRIMARY KEY (`Transaction_ID`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `Id` bigint(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
