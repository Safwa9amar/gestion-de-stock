-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2023 at 04:27 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestion_stock`
--

-- --------------------------------------------------------

--
-- Table structure for table `achats`
--

CREATE TABLE `achats` (
  `id` int(11) NOT NULL,
  `Supplier` int(11) DEFAULT NULL,
  `Reference` varchar(1024) DEFAULT NULL,
  `Date` varchar(1024) DEFAULT NULL,
  `Status` tinyint(1) DEFAULT NULL,
  `Grand_Total` bigint(20) DEFAULT NULL,
  `product_list` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `achats`
--

INSERT INTO `achats` (`id`, `Supplier`, `Reference`, `Date`, `Status`, `Grand_Total`, `product_list`) VALUES
(11, 1, 'REF 31', '2023-04-04', 1, 49300, '[{\"product_id\":\"1\",\"qty\":\"7\",\"purchase_price\":\"100\",\"total_cost\":\"700\"},{\"product_id\":\"2\",\"qty\":\"22\",\"purchase_price\":\"1500\",\"total_cost\":\"33000\"},{\"product_id\":\"3\",\"qty\":\"12\",\"purchase_price\":\"1300\",\"total_cost\":\"15600\"}]');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achats`
--
ALTER TABLE `achats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Supplier` (`Supplier`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achats`
--
ALTER TABLE `achats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
