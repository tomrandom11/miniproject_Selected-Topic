-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2021 at 12:47 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `item`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `password`) VALUES
(2, 'admin', 'oomzzz111@hotmail.com', 25);

-- --------------------------------------------------------

--
-- Table structure for table `item_z`
--

CREATE TABLE `item_z` (
  `item_id` int(12) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `item_status` varchar(50) NOT NULL DEFAULT 'ในระบบ',
  `item_count` int(100) NOT NULL DEFAULT 0,
  `number` varchar(20) NOT NULL DEFAULT '0',
  `time_day` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item_z`
--

INSERT INTO `item_z` (`item_id`, `item_name`, `item_status`, `item_count`, `number`, `time_day`) VALUES
(160140000, 'กรรไกรแต่งกิ่ง 3 จังหวะ', 'ในระบบ', 0, '0', '0000-00-00'),
(160140001, 'กรรไกรแต่งกิ่ง 3 จังหวะ', 'ในระบบ', 0, '0', '0000-00-00'),
(160140002, 'กรรไกรแต่งกิ่ง 3 จังหวะ', 'ซาน', 0, '0899503864', '2021-03-26'),
(160140003, 'กรรไกรแต่งกิ่ง 3 จังหวะ', 'ลา', 0, '0899503863', '2021-03-04'),
(160140004, 'กรรไกรแต่งกิ่ง 3 จังหวะ', 'ในระบบ', 0, '0', '0000-00-00'),
(160140005, 'กรรไกรแต่งกิ่ง 3 จังหวะ', 'กรภัท', 0, '0825465541', '2021-03-18'),
(160140006, 'กรรไกรแต่งกิ่ง 3 จังหวะ', 'ชชชช', 0, '0825465541', '2021-03-11'),
(160141000, 'กรรไกรตัดหญ้า', 'ในระบบ', 0, '0', '0000-00-00'),
(160141001, 'กรรไกรตัดหญ้า', 'ในระบบ', 0, '0', '0000-00-00'),
(160141003, 'กรรไกรตัดหญ้า', 'ในระบบ', 0, '0899503864', '2021-03-11'),
(160141004, 'กรรไกรตัดหญ้า', 'พาทิศ', 0, '0899503864', '2021-02-11'),
(160142000, 'กรรไกรแต่งกิ่ง748', 'ในระบบ', 0, '0', '0000-00-00'),
(160142001, 'กรรไกรแต่งกิ่ง748', 'ในระบบ', 0, '0', '0000-00-00'),
(160142002, 'กรรไกรแต่งกิ่ง748', 'พาทิศ', 0, '0899503863', '2021-03-24'),
(160142003, 'กรรไกรแต่งกิ่ง748', 'ในระบบ', 0, '0', '0000-00-00'),
(160245000, 'เลื่อยตัดกิ่งไม้', 'ในระบบ', 0, '0', '0000-00-00'),
(160245001, 'เลื่อยตัดกิ่งไม้', 'พาทิศ', 0, '0899503864', '2021-03-31'),
(160245002, 'เลื่อยตัดกิ่งไม้', 'ในระบบ', 0, '0', '0000-00-00'),
(160245003, 'เลื่อยตัดกิ่งไม้', 'มาดี', 0, '0899503879', '2021-02-23'),
(160246000, 'เลื่อยคันธนู', 'ในระบบ', 0, '0', '0000-00-00'),
(160246001, 'เลื่อยคันธนู', 'ในระบบ', 0, '0', '0000-00-00'),
(160246002, 'เลื่อยคันธนู', 'ในระบบ', 0, '0', '0000-00-00'),
(160246003, 'เลื่อยคันธนู', 'ในระบบ', 0, '0', '0000-00-00'),
(160247000, 'เลื่อยพับ', 'ในระบบ', 0, '0', '0000-00-00'),
(160247001, 'เลื่อยพับ', 'ในระบบ', 0, '0', '0000-00-00'),
(160247002, 'เลื่อยพับ', 'ในระบบ', 0, '0', '0000-00-00'),
(160247003, 'เลื่อยพับ', 'ในระบบ', 0, '0', '0000-00-00'),
(160260000, 'บัวรดน้ำ', 'ในระบบ', 0, '0', '0000-00-00'),
(160260001, 'บัวรดน้ำ', 'ในระบบ', 0, '0', '0000-00-00'),
(160260003, 'บัวรดน้ำ', 'ในระบบ', 0, '0', '0000-00-00'),
(160260004, 'บัวรดน้ำ', 'ในระบบ', 0, '0', '0000-00-00'),
(160345000, 'ช้อนพรวนดิน CHILLINGTON', 'ในระบบ', 0, '0', '0000-00-00'),
(160345001, 'ช้อนพรวนดิน CHILLINGTON', 'ในระบบ', 0, '0', '0000-00-00'),
(160346000, 'ส้อมพรวนดิน SPRING', 'ในระบบ', 0, '0', '0000-00-00'),
(160346001, 'ส้อมพรวนดิน SPRING', 'ในระบบ', 0, '0', '0000-00-00'),
(160445000, 'เสียบด้ามยาว', 'ในระบบ', 0, '0', '0000-00-00'),
(160445001, 'เสียบด้ามยาว', 'ในระบบ', 0, '0', '0000-00-00'),
(160446000, 'เสียบด้ามสั้น', 'ในระบบ', 0, '0', '0000-00-00'),
(160446001, 'เสียบด้ามสั้น', 'ในระบบ', 0, '0', '0000-00-00'),
(160545000, 'คราดทั่วไป', 'ในระบบ', 0, '0', '0000-00-00'),
(160545001, 'คราดทั่วไป', 'ในระบบ', 0, '0', '0000-00-00'),
(160546000, 'คราดใบไม้', 'ในระบบ', 0, '0', '0000-00-00'),
(160546001, 'คราดใบไม้', 'ในระบบ', 0, '0', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'ZeroSG', 'oomzzz111@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'tomrandom3', 'tomrandom11@gmail.com', 'eaa876993a42958e1346f9ab383ee2a6'),
(3, 'tomrandom8', 'tomrandom1@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'tomrandom7', 'supapak50150@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'tomrandom4', 'tomrandom156@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_z`
--
ALTER TABLE `item_z`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
