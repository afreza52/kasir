-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Agu 2023 pada 05.46
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mypos`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` enum('P','L') NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`customer_id`, `name`, `gender`, `phone`, `address`, `created`, `updated`) VALUES
(2, 'umum', 'L', '124009', 'kajen', '2023-07-28 19:21:29', '2023-08-07 04:37:02'),
(3, 'Customer 1', 'P', '0929883', 'pekalongan ', '2023-07-31 11:57:57', NULL),
(4, 'Customer 2', 'L', '0929832', 'jawa barat', '2023-07-31 11:58:13', '2023-07-31 06:58:39'),
(5, 'Customer 3', 'P', '09823832', 'Yogyakarta', '2023-08-07 09:51:42', '2023-08-07 04:49:08'),
(6, 'Customer4', 'L', '09823834', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(7, 'Customer5', 'P', '09823835', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(8, 'Customer6', 'L', '09823836', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(9, 'Customer7', 'P', '09823837', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(10, 'Customer8', 'L', '09823838', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(11, 'Customer9', 'P', '09823839', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(12, 'Customer10', 'L', '098238310', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(13, 'Customer11', 'P', '098238311', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(14, 'Customer12', 'L', '098238312', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(15, 'Customer13', 'P', '098238313', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(16, 'Customer14', 'L', '098238314', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(17, 'Customer15', 'P', '098238315', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(18, 'Customer16', 'L', '098238316', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(19, 'Customer17', 'P', '098238317', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(20, 'Customer18', 'L', '098238318', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(21, 'Customer19', 'P', '098238319', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(22, 'Customer20', 'L', '098238320', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(23, 'Customer21', 'P', '098238321', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(24, 'Customer22', 'L', '098238322', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(25, 'Customer23', 'P', '098238323', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(26, 'Customer24', 'L', '098238324', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(27, 'Customer25', 'P', '098238325', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(28, 'Customer26', 'L', '098238326', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(29, 'Customer27', 'P', '098238327', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(30, 'Customer28', 'L', '098238328', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(31, 'Customer29', 'P', '098238329', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(32, 'Customer30', 'L', '098238330', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(33, 'Customer31', 'P', '098238331', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(34, 'Customer32', 'L', '098238332', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(35, 'Customer33', 'P', '098238333', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(36, 'Customer34', 'L', '098238334', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(37, 'Customer35', 'P', '098238335', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(38, 'Customer36', 'L', '098238336', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(39, 'Customer37', 'P', '098238337', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(40, 'Customer38', 'L', '098238338', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(41, 'Customer39', 'P', '098238339', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(42, 'Customer40', 'L', '098238340', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(43, 'Customer41', 'P', '098238341', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(44, 'Customer42', 'L', '098238342', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(45, 'Customer43', 'P', '098238343', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(46, 'Customer44', 'L', '098238344', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(47, 'Customer45', 'P', '098238345', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(48, 'Customer46', 'L', '098238346', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(49, 'Customer47', 'P', '098238347', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(50, 'Customer48', 'L', '098238348', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(51, 'Customer49', 'P', '098238349', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(52, 'Customer50', 'L', '098238350', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(53, 'Customer51', 'P', '098238351', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(54, 'Customer52', 'L', '098238352', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(55, 'Customer53', 'P', '098238353', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(56, 'Customer54', 'L', '098238354', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(57, 'Customer55', 'P', '098238355', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(58, 'Customer56', 'L', '098238356', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(59, 'Customer57', 'P', '098238357', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(60, 'Customer58', 'L', '098238358', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(61, 'Customer59', 'P', '098238359', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(62, 'Customer60', 'L', '098238360', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(63, 'Customer61', 'P', '098238361', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(64, 'Customer62', 'L', '098238362', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(65, 'Customer63', 'P', '098238363', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(66, 'Customer64', 'L', '098238364', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(67, 'Customer65', 'P', '098238365', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(68, 'Customer66', 'L', '098238366', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(69, 'Customer67', 'P', '098238367', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(70, 'Customer68', 'L', '098238368', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(71, 'Customer69', 'P', '098238369', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(72, 'Customer70', 'L', '098238370', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(73, 'Customer71', 'P', '098238371', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(74, 'Customer72', 'L', '098238372', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(75, 'Customer73', 'P', '098238373', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(76, 'Customer74', 'L', '098238374', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(77, 'Customer75', 'P', '098238375', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(78, 'Customer76', 'L', '098238376', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(79, 'Customer77', 'P', '098238377', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(80, 'Customer78', 'L', '098238378', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(81, 'Customer79', 'P', '098238379', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(82, 'Customer80', 'L', '098238380', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(83, 'Customer81', 'P', '098238381', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(84, 'Customer82', 'L', '098238382', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(85, 'Customer83', 'P', '098238383', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(86, 'Customer84', 'L', '098238384', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(87, 'Customer85', 'P', '098238385', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(88, 'Customer86', 'L', '098238386', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(89, 'Customer87', 'P', '098238387', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(90, 'Customer88', 'L', '098238388', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(91, 'Customer89', 'P', '098238389', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(92, 'Customer90', 'L', '098238390', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(93, 'Customer91', 'P', '098238391', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(94, 'Customer92', 'L', '098238392', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(95, 'Customer93', 'P', '098238393', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(96, 'Customer94', 'L', '098238394', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(97, 'Customer95', 'P', '098238395', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(98, 'Customer96', 'L', '098238396', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(99, 'Customer97', 'P', '098238397', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(100, 'Customer98', 'L', '098238398', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08'),
(101, 'Customer99', 'P', '098238399', 'Yogyakarta', '2023-08-07 10:01:33', '2023-08-07 04:49:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `p_category`
--

CREATE TABLE `p_category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `p_category`
--

INSERT INTO `p_category` (`category_id`, `name`, `created`, `updated`) VALUES
(1, 'Makanan', '2023-07-31 13:26:15', '2023-07-31 09:07:20'),
(2, 'Minuman', '2023-07-31 13:46:19', '2023-07-31 09:07:28'),
(5, 'ATK', '2023-07-31 15:38:47', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `p_item`
--

CREATE TABLE `p_item` (
  `item_id` int(11) NOT NULL,
  `barcode` varchar(100) DEFAULT NULL,
  `name` varchar(128) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `stock` int(10) NOT NULL DEFAULT 0,
  `image` varchar(100) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `p_item`
--

INSERT INTO `p_item` (`item_id`, `barcode`, `name`, `category_id`, `unit_id`, `price`, `stock`, `image`, `created`, `updated`) VALUES
(1, 'A001', 'Aqua 1500 ml', 2, 2, 10000, 1, 'item-230802-45a06bd5e3.png', '2023-07-31 15:57:14', '2023-08-02 05:41:26'),
(3, 'A003', 'Mie Sedaap', 1, 3, 3500, 5, 'item-230802-3bf6363e8d.jpg', '2023-08-01 12:02:28', '2023-08-02 05:38:26'),
(4, 'A002', 'Pensil', 5, 3, 2000, 0, 'item-230802-2d5a49214b.png', '2023-08-01 12:04:22', '2023-08-02 05:44:59'),
(5, 'A004', 'Indomie', 1, 2, 3500, 29, 'item-230802-3256bc2936.png', '2023-08-01 13:03:48', '2023-08-02 05:36:24'),
(7, 'A005', 'Teh bolot 450 ml', 2, 2, 15000, 0, 'item-230802-3c5285ad95.jpg', '2023-08-01 13:55:53', '2023-08-02 05:42:13'),
(10, 'A006', 'Sate Kambing', 1, 3, 55000, 100, 'item-230802-3b9b26b79c.jpg', '2023-08-02 09:17:14', NULL),
(12, 'A007', 'Le Mineral 500ml', 2, 2, 5000, 0, NULL, '2023-08-03 10:10:17', '2023-08-25 05:32:58'),
(13, 'A008', 'Sate Kambing', 1, 2, 55000, 30, NULL, '2023-08-03 10:10:34', NULL),
(14, 'A009', 'a', 1, 1, 55000, 0, NULL, '2023-08-03 10:10:59', NULL),
(15, 'A010', 'Sate Kambing', 1, 1, 3500, 5, NULL, '2023-08-03 10:11:27', NULL),
(16, 'A011', 'Sate Kambing', 1, 1, 3500, 1, NULL, '2023-08-03 10:11:36', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `p_unit`
--

CREATE TABLE `p_unit` (
  `unit_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `p_unit`
--

INSERT INTO `p_unit` (`unit_id`, `name`, `created`, `updated`) VALUES
(1, 'Kilogram', '2023-07-31 14:22:53', NULL),
(2, 'Liter', '2023-07-31 14:23:09', '2023-07-31 09:23:37'),
(3, 'Buah', '2023-07-31 14:23:24', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `description` text DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `name`, `phone`, `address`, `description`, `created`, `updated`) VALUES
(1, 'Toko A', '092347237', 'Jogjakarta', 'Toko Elektronik  terlengkap', '2023-07-27 11:32:59', '2023-07-27 10:55:46'),
(2, 'Toko B', '0834237722', 'Jepara', 'Toko ATK Terbesar', '2023-07-27 11:33:37', '2023-07-27 06:33:02'),
(4, 'Toko C', '923891283', 'jepara', 'bangunan', '2023-07-27 15:26:41', NULL),
(6, 'Toko D', '0923891283', 'Magelang', 'Makanan', '2023-08-03 16:18:50', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_sale`
--

CREATE TABLE `t_sale` (
  `sale_id` int(11) NOT NULL,
  `invoice` varchar(50) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `total_price` int(11) DEFAULT NULL,
  `discount` int(11) NOT NULL,
  `final_price` int(11) NOT NULL,
  `cash` int(11) NOT NULL,
  `remaining` int(11) NOT NULL,
  `note` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_sale`
--

INSERT INTO `t_sale` (`sale_id`, `invoice`, `customer_id`, `total_price`, `discount`, `final_price`, `cash`, `remaining`, `note`, `date`, `user_id`, `created`) VALUES
(192, 'MP2308210001', 2, 12000, 0, 12000, 19000, 7000, '', '2023-07-21', 1, '2023-08-21 06:15:45'),
(194, 'MP2308210002', 2, 12000, 0, 12000, 19000, 7000, '', '2023-08-21', 1, '2023-08-21 06:25:25'),
(195, 'MP2308210003', 5, 12000, 0, 12000, 100000, 88000, '', '2023-08-21', 1, '2023-08-21 07:42:33'),
(196, 'MP2308210004', 2, 12000, 0, 12000, 12000, 0, '', '2023-08-21', 1, '2023-08-21 07:43:08'),
(197, 'MP2308210005', 4, 12000, 0, 12000, 220000, 208000, '', '2023-07-06', 1, '2023-08-21 07:46:53'),
(198, 'MP2308210006', 2, 12000, 0, 12000, 500000, 488000, '', '2023-08-21', 1, '2023-08-21 07:49:15'),
(199, 'MP2308210007', 6, 5500, 0, 5500, 10000, 4500, 'lunas', '2023-08-21', 1, '2023-08-21 07:49:46'),
(200, 'MP2308250001', 2, 420000, 0, 420000, 1000000, 580000, 'lunas', '2023-09-25', 1, '2023-08-25 04:30:39'),
(201, 'MP2308250002', 2, 10000000, 0, 10000000, 10000000, 0, 'ok', '2023-08-25', 1, '2023-08-25 05:40:37'),
(202, 'MP2308250003', 2, 1140000, 0, 1140000, 1200000, 60000, '', '2023-07-25', 1, '2023-08-25 05:42:24'),
(203, 'MP2308250004', 2, 3500, 0, 3500, 10000, 6500, 'gugk', '2023-08-25', 1, '2023-08-25 05:55:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_sale_item`
--

CREATE TABLE `t_sale_item` (
  `sale_id` int(11) NOT NULL,
  `barcode` varchar(50) NOT NULL,
  `item` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_sale_item`
--

INSERT INTO `t_sale_item` (`sale_id`, `barcode`, `item`, `price`, `qty`, `discount`, `total`) VALUES
(192, 'A001', 'Aqua 1500 ml', 10000, 1, 0, 10000),
(192, 'A002', 'Pensil', 2000, 1, 0, 2000),
(194, 'A001', 'Aqua 1500 ml', 10000, 1, 0, 10000),
(194, 'A002', 'Pensil', 2000, 1, 0, 2000),
(195, 'A001', 'Aqua 1500 ml', 10000, 1, 0, 10000),
(195, 'A002', 'Pensil', 2000, 1, 0, 2000),
(196, 'A002', 'Pensil', 2000, 1, 0, 2000),
(196, 'A001', 'Aqua 1500 ml', 10000, 1, 0, 10000),
(197, 'A001', 'Aqua 1500 ml', 10000, 1, 0, 10000),
(197, 'A002', 'Pensil', 2000, 1, 0, 2000),
(198, 'A001', 'Aqua 1500 ml', 10000, 1, 0, 10000),
(198, 'A002', 'Pensil', 2000, 1, 0, 2000),
(199, 'A003', 'Mie Sedaap', 3500, 1, 0, 3500),
(199, 'A002', 'Pensil', 2000, 1, 0, 2000),
(200, 'A005', 'Teh bolot 450 ml', 15000, 28, 0, 420000),
(201, 'A005', 'Teh bolot 450 ml', 15000, 500, 0, 7500000),
(201, 'A007', 'Le Mineral 500ml', 5000, 500, 0, 2500000),
(202, 'A002', 'Pensil', 2000, 20, 0, 40000),
(202, 'A009', 'a', 55000, 20, 0, 1100000),
(203, 'A004', 'Indomie', 3500, 1, 0, 3500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_stock`
--

CREATE TABLE `t_stock` (
  `stock_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `type` enum('in','out') NOT NULL,
  `detail` varchar(200) NOT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `qty` int(10) NOT NULL,
  `date` date NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_stock`
--

INSERT INTO `t_stock` (`stock_id`, `item_id`, `type`, `detail`, `supplier_id`, `qty`, `date`, `created`, `user_id`) VALUES
(1, 1, 'in', 'kulakan', 4, 15, '2023-08-04', '2023-08-04 11:29:59', 1),
(2, 4, 'in', 'kulakan', 2, 12, '2023-08-04', '2023-08-04 11:30:18', 1),
(5, 3, 'in', 'kulakan', 2, 40, '2023-08-04', '2023-08-04 11:32:01', 1),
(6, 5, 'in', 'kulakan', 2, 2, '2023-08-04', '2023-08-04 14:56:54', 1),
(14, 1, 'in', 'kulakan', 1, 2, '2023-08-04', '2023-08-04 15:47:56', 1),
(17, 7, 'out', 'rusak', NULL, 2, '2023-08-14', '2023-08-14 08:40:49', 1),
(18, 7, 'in', 'kulakan', 1, 100, '2023-08-18', '2023-08-18 11:00:47', 1),
(19, 5, 'in', 'kulakan', 2, 14, '2023-08-24', '2023-08-24 15:01:24', 2),
(20, 10, 'in', 'kulakan', 1, 16, '2023-08-24', '2023-08-24 15:01:42', 2),
(21, 12, 'in', 'kulakan', 6, 21, '2023-08-24', '2023-08-24 15:02:06', 2),
(22, 13, 'in', 'kulakan', 1, 19, '2023-08-24', '2023-08-24 15:02:26', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(128) NOT NULL,
  `address` varchar(128) DEFAULT NULL,
  `level` int(1) NOT NULL COMMENT '1:admin, 2:kasir'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `name`, `address`, `level`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'patih gajah duduk', 'majapahit pekalonga', 1),
(2, 'kasir', '8691e4fc53b99da544ce86e22acba62d13352eff', 'mamatmumur', 'pekalongan barat', 2),
(5, 'afreza', '874c0ac75f323057fe3b7fb3f5a8a41df2b94b1d', 'Afreza Dwi Zuliyanto', 'njaten, bumiharjo keling jepara rt 1/2', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indeks untuk tabel `p_category`
--
ALTER TABLE `p_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indeks untuk tabel `p_item`
--
ALTER TABLE `p_item`
  ADD PRIMARY KEY (`item_id`),
  ADD UNIQUE KEY `barcode` (`barcode`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `unit_id` (`unit_id`);

--
-- Indeks untuk tabel `p_unit`
--
ALTER TABLE `p_unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indeks untuk tabel `t_sale`
--
ALTER TABLE `t_sale`
  ADD PRIMARY KEY (`sale_id`);

--
-- Indeks untuk tabel `t_sale_item`
--
ALTER TABLE `t_sale_item`
  ADD KEY `t_sale_item_ibfk_1` (`sale_id`);

--
-- Indeks untuk tabel `t_stock`
--
ALTER TABLE `t_stock`
  ADD PRIMARY KEY (`stock_id`),
  ADD KEY `supplier_id` (`supplier_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `t_stock_ibfk_1` (`item_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT untuk tabel `p_category`
--
ALTER TABLE `p_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `p_item`
--
ALTER TABLE `p_item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `p_unit`
--
ALTER TABLE `p_unit`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `t_sale`
--
ALTER TABLE `t_sale`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT untuk tabel `t_stock`
--
ALTER TABLE `t_stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `p_item`
--
ALTER TABLE `p_item`
  ADD CONSTRAINT `p_item_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `p_category` (`category_id`),
  ADD CONSTRAINT `p_item_ibfk_2` FOREIGN KEY (`unit_id`) REFERENCES `p_unit` (`unit_id`);

--
-- Ketidakleluasaan untuk tabel `t_sale_item`
--
ALTER TABLE `t_sale_item`
  ADD CONSTRAINT `t_sale_item_ibfk_1` FOREIGN KEY (`sale_id`) REFERENCES `t_sale` (`sale_id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `t_stock`
--
ALTER TABLE `t_stock`
  ADD CONSTRAINT `t_stock_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `p_item` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_stock_ibfk_2` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`supplier_id`),
  ADD CONSTRAINT `t_stock_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
