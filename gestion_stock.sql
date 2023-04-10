-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2023 at 09:13 AM
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
(11, 1, 'REF 31', '2023-04-04', 1, 49300, '[{\"product_id\":\"1\",\"qty\":\"7\",\"purchase_price\":\"100\",\"total_cost\":\"700\"},{\"product_id\":\"2\",\"qty\":\"22\",\"purchase_price\":\"1500\",\"total_cost\":\"33000\"},{\"product_id\":\"3\",\"qty\":\"12\",\"purchase_price\":\"1300\",\"total_cost\":\"15600\"}]'),
(15, 1, 'REF 5', '2023-04-10', 1, 1300, '[{\"product_id\":\"1\",\"qty\":\"7\",\"purchase_price\":\"100\",\"total_cost\":\"700\"},{\"product_id\":\"2\",\"qty\":\"22\",\"purchase_price\":\"1500\",\"total_cost\":\"33000\"},{\"product_id\":\"3\",\"qty\":\"12\",\"purchase_price\":\"1300\",\"total_cost\":\"15600\"}]'),
(16, 1, 'REF 12', '2023-04-08', 4, 3500, '[{\"product_id\":\"1\",\"qty\":\"7\",\"purchase_price\":\"100\",\"total_cost\":\"700\"},{\"product_id\":\"2\",\"qty\":\"22\",\"purchase_price\":\"1500\",\"total_cost\":\"33000\"},{\"product_id\":\"3\",\"qty\":\"12\",\"purchase_price\":\"1300\",\"total_cost\":\"15600\"}]'),
(17, 1, 'REF 11', '2023-04-07', 5, 25000, '[{\"product_id\":\"1\",\"qty\":\"7\",\"purchase_price\":\"100\",\"total_cost\":\"700\"},{\"product_id\":\"2\",\"qty\":\"22\",\"purchase_price\":\"1500\",\"total_cost\":\"33000\"},{\"product_id\":\"3\",\"qty\":\"12\",\"purchase_price\":\"1300\",\"total_cost\":\"15600\"}]'),
(18, 2, 'REF 8', '2023-04-06', 1, 1500, '[{\"product_id\":\"2\",\"qty\":\"10\",\"purchase_price\":\"150\",\"total_cost\":\"1500\"},{\"product_id\":\"6\",\"qty\":\"15\",\"purchase_price\":\"250\",\"total_cost\":\"3750\"}]'),
(19, 1, 'REF 23', '2023-04-09', 1, 7800, '[{\"product_id\":\"1\",\"qty\":\"7\",\"purchase_price\":\"100\",\"total_cost\":\"700\"},{\"product_id\":\"2\",\"qty\":\"22\",\"purchase_price\":\"1500\",\"total_cost\":\"33000\"},{\"product_id\":\"3\",\"qty\":\"12\",\"purchase_price\":\"1300\",\"total_cost\":\"15600\"}]'),
(20, 1, 'REF 17', '2023-04-05', 2, 9000, '[{\"product_id\":\"1\",\"qty\":\"7\",\"purchase_price\":\"100\",\"total_cost\":\"700\"},{\"product_id\":\"2\",\"qty\":\"22\",\"purchase_price\":\"1500\",\"total_cost\":\"33000\"},{\"product_id\":\"3\",\"qty\":\"12\",\"purchase_price\":\"1300\",\"total_cost\":\"15600\"}]'),
(21, 1, 'REF 32', '2023-04-10', 0, 0, '[{\"product_id\":\"1\",\"qty\":\"7\",\"purchase_price\":\"100\",\"total_cost\":\"700\"},{\"product_id\":\"2\",\"qty\":\"22\",\"purchase_price\":\"1500\",\"total_cost\":\"33000\"},{\"product_id\":\"3\",\"qty\":\"12\",\"purchase_price\":\"1300\",\"total_cost\":\"15600\"}]'),
(22, 1, 'REF 33', '2023-04-10', 0, 0, '[{\"product_id\":\"1\",\"qty\":\"7\",\"purchase_price\":\"100\",\"total_cost\":\"700\"},{\"product_id\":\"2\",\"qty\":\"22\",\"purchase_price\":\"1500\",\"total_cost\":\"33000\"},{\"product_id\":\"3\",\"qty\":\"12\",\"purchase_price\":\"1300\",\"total_cost\":\"15600\"}]'),
(23, 2, 'REF 34', '2023-04-10', 1, 125, '[{\"product_id\":\"1\",\"qty\":\"7\",\"purchase_price\":\"2.99 ( DZD)\",\"total_cost\":\"20.93\"},{\"product_id\":\"2\",\"qty\":\"22\",\"purchase_price\":\"1.99 ( DZD)\",\"total_cost\":\"43.78\"},{\"product_id\":\"3\",\"qty\":\"12\",\"purchase_price\":\"4.99 ( DZD)\",\"total_cost\":\"59.88\"}]'),
(24, 1, 'REF 35', '2023-04-10', 1, 0, '[{\"product_id\":\"1\",\"qty\":\"7\",\"purchase_price\":\"100\",\"total_cost\":\"700\"},{\"product_id\":\"2\",\"qty\":\"22\",\"purchase_price\":\"1500\",\"total_cost\":\"33000\"},{\"product_id\":\"3\",\"qty\":\"12\",\"purchase_price\":\"1300\",\"total_cost\":\"15600\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `description`, `img`) VALUES
(1, 'Brand A', 'Description of Brand A', '6433b5f6a8c22.png'),
(2, 'Brand B', 'Description of Brand B', '6433b5f6a8c22.png'),
(3, 'Brand C', 'Description of Brand C', '6433b5f6a8c22.png'),
(4, 'Brand D', 'Description of Brand D', '6433b5f6a8c22.png'),
(5, 'Brand E', 'Description of Brand E', '6433b5f6a8c22.png'),
(6, ' Brand 0A', 'Description of Brand A	', '6433b5f6a8c22.png');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `code`, `description`, `img`) VALUES
(1, 'Légumes', 'VEG', 'Une grande variété de légumes frais et de saison.', '6433b4b81683a.png'),
(2, 'Fruits', 'FRU', 'Une large sélection de fruits frais et juteux.', '6433b4db8748c.png'),
(3, 'Viande', 'MEAT', 'Des coupes de viande de qualité supérieure pour vos plats préférés.', '6433b4f9dfb49.png'),
(4, 'Poisson', 'FISH', 'Des fruits de mer frais et durables pour une alimentation saine.', '6433b5646609d.png'),
(5, 'Produits laitiers', 'DAIRY', 'Des produits laitiers frais et naturels pour votre santé.', '642ae01669c98.jpg'),
(6, 'Boulangerie', 'BAK', 'Du pain frais et des pâtisseries délicieuses pour votre petit déjeuner.', '642ae01669c98.jpg'),
(7, 'Céréales', 'CER', 'Des céréales et des grains pour une alimentation équilibrée.', '642ae01669c98.jpg'),
(8, 'Boissons', 'BEV', 'Des boissons rafraîchissantes pour toutes les occasions.', '642ae01669c98.jpg'),
(9, 'Snacks', 'SNK', 'Des snacks délicieux pour les petits creux.', '642ae01669c98.jpgg');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `city` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `code`, `phone`, `mail`, `city`, `address`, `img`) VALUES
(2, 'hassani hamza', '0674020244', '0674020244', 'hassanih97@gmail.com', 1, 'citty hassani slimane', '6433b65d450d9.png');

-- --------------------------------------------------------

--
-- Table structure for table `fournisseurs`
--

CREATE TABLE `fournisseurs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fournisseurs`
--

INSERT INTO `fournisseurs` (`id`, `name`) VALUES
(1, 'hamza'),
(2, 'astro'),
(3, 'badboy');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` int(11) NOT NULL,
  `brand` int(11) NOT NULL,
  `SKU` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` float NOT NULL,
  `status` tinyint(1) NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `brand`, `SKU`, `unit`, `qty`, `price`, `status`, `img`, `description`, `created_by`) VALUES
(1, 'Apple', 1, 1, 'AP-1001', '1kg', 50, 2.99, 1, '6433b363286c7.jpg', 'Fresh and delicious apples.', 'admin'),
(2, 'Carrot', 2, 2, 'FF-2001', '1kg', 30, 1.99, 1, '6433b3d7649fc.png', 'Organic carrots grown locally.', 'admin'),
(3, 'Cheddar Cheese', 3, 3, 'KR-3001', '250g', 20, 4.99, 1, '6433b42db10a5.png', 'Sharp and creamy cheddar cheese.', 'admin'),
(4, 'Beef', 4, 4, 'AB-4001', '1kg', 10, 8.99, 1, '6433b4496ff45.jpg', 'Juicy and tender beef cuts.', 'admin'),
(5, 'Brown Rice', 5, 5, 'UB-5001', '1kg', 40, 3.99, 1, '6433b4753d180.png', 'Whole grain brown rice.', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `client` int(11) NOT NULL,
  `ref` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `payment` tinyint(1) NOT NULL,
  `total` int(11) NOT NULL,
  `paid` int(11) NOT NULL,
  `due` int(11) NOT NULL,
  `biller` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `first_name`, `tel`, `email`, `password`, `img`) VALUES
(1, 'admin', '', '', 'admin@gmail.com', '$2y$10$LEKyEGFcZs04xWUdZr0SyeEh7l3zHIBRIf5HfiGZLlWcNcN6UeF6O', '');

-- --------------------------------------------------------

--
-- Table structure for table `wilayat`
--

CREATE TABLE `wilayat` (
  `id` varchar(1024) DEFAULT NULL,
  `code` varchar(1024) DEFAULT NULL,
  `name` varchar(1024) DEFAULT NULL,
  `ar_name` varchar(1024) DEFAULT NULL,
  `longitude` varchar(1024) DEFAULT NULL,
  `latitude` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wilayat`
--

INSERT INTO `wilayat` (`id`, `code`, `name`, `ar_name`, `longitude`, `latitude`) VALUES
('1', '1', 'Adrar', 'أدرار', '27.9766155', '-0.20396'),
('2', '2', 'Chlef', 'الشلف', '36.1646518', '1.3383152'),
('3', '3', 'Laghouat', 'الأغواط', '33.8080332', '2.8613457'),
('4', '4', 'Oum El Bouaghi', 'أم البواقي', '35.8374522', '6.9542028'),
('5', '5', 'Batna', 'باتنة', '35.5502656', '6.1751704'),
('6', '6', 'Béjaïa', 'بجاية', '36.7695969', '5.0085855'),
('7', '7', 'Biskra', 'بسكرة', '34.8515041', '5.7246709'),
('8', '8', 'Bechar', 'بشار', '31.5977602', '-1.8540446'),
('9', '9', 'Blida', 'البليدة', '36.4803023', '2.8009379'),
('10', '10', 'Bouira', 'البويرة', '36.2084234', '3.925049'),
('11', '11', 'Tamanrasset', 'تمنراست', '22.2746227', '5.6754684'),
('12', '12', 'Tbessa', 'تبسة', '35.4117259', '8.110545'),
('13', '13', 'Tlemcen', 'تلمسان', '34.8959541', '-1.3150979'),
('14', '14', 'Tiaret', 'تيارت', '35.3599899', '1.3916159'),
('15', '15', 'Tizi Ouzou', 'تيزي وزو', '36.7002068', '4.075957'),
('16', '16', 'Alger', 'الجزائر', '36.7538259', '3.057841'),
('17', '17', 'Djelfa', 'الجلفة', '34.6672467', '3.2993118'),
('18', '18', 'Jijel', 'جيجل', '36.7962714', '5.7504845'),
('19', '19', 'Se9tif', 'سطيف', '36.1905173', '5.4202134'),
('20', '20', 'Saefda', 'سعيدة', '34.841945', '0.1483583'),
('21', '21', 'Skikda', 'سكيكدة', '36.8777912', '6.9357204'),
('22', '22', 'Sidi Bel Abbes', 'سيدي بلعباس', '35.206334', '-0.6301368'),
('23', '23', 'Annaba', 'عنابة', '36.9184345', '7.7452755'),
('24', '24', 'Guelma', 'قالمة', '36.4569088', '7.4334312'),
('25', '25', 'Constantine', 'قسنطينة', '36.319475', '6.7370571'),
('26', '26', 'Medea', 'المدية', '36.2838408', '2.7728462'),
('27', '27', 'Mostaganem', 'مستغانم', '35.9751841', '0.1149273'),
('28', '28', 'M\'Sila', 'المسيلة', '35.7211476', '4.5187283'),
('29', '29', 'Mascara', 'معسكر', '35.382998', '0.1542592'),
('30', '30', 'Ouargla', 'ورقلة', '32.1961967', '4.9634113'),
('31', '31', 'Oran', 'وهران', '35.7066928', '-0.6405861'),
('32', '32', 'El Bayadh', 'البيض', '32.5722756', '0.950011'),
('33', '33', 'Illizi', 'إليزي', '26.5065999', '8.480587'),
('34', '34', 'Bordj Bou Arreridj', 'برج بوعريريج', '36.0686488', '4.7691823'),
('35', '35', 'Boumerdes', 'بومرداس', '36.7564181', '3.4917212'),
('36', '36', 'El Tarf', 'الطارف', '36.7534258', '8.2984543'),
('37', '37', 'Tindouf', 'تندوف', '27.2460501', '-6.3252899'),
('38', '38', 'Tissemsilt', 'تيسمسيلت', '35.6021906', '1.802187'),
('39', '39', 'El Oued', 'الوادي', '33.3714492', '6.8573436'),
('40', '40', 'Khenchela', 'خنشلة', '35.4263293', '7.1414137'),
('41', '41', 'Souk Ahras', 'سوق أهراس', '36.277849', '7.9592299'),
('42', '42', 'Tipaza', 'تيبازة', '36.5980966', '2.4085379'),
('43', '43', 'Mila', 'ميلة', '36.4514882', '6.2487316'),
('44', '44', 'Ain Defla', 'عين الدفلى', '36.1283915', '2.1772514'),
('45', '45', 'Naama', 'النعامة', '33.1995605', '-0.8021968'),
('46', '46', 'Ain Temouchent', 'عين تموشنت', '35.404044', '-1.0580975'),
('47', '47', 'Ghardaefa', 'غرداية', '32.5891743', '3.7455655'),
('48', '48', 'Relizane', 'غليزان', '35.8050195', '0.867381');

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
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `city` (`city`);

--
-- Indexes for table `fournisseurs`
--
ALTER TABLE `fournisseurs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`),
  ADD KEY `brand` (`brand`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client` (`client`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achats`
--
ALTER TABLE `achats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fournisseurs`
--
ALTER TABLE `fournisseurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `client` FOREIGN KEY (`client`) REFERENCES `clients` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
