-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2022 at 11:01 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-kasir-ci4`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id_category` int(11) NOT NULL,
  `name_category` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id_category`, `name_category`) VALUES
(1, 'Hardware'),
(2, 'IoT'),
(3, 'Makanan1'),
(4, 'Minuman1'),
(5, 'Bumbu masakan'),
(6, 'Elektronik'),
(7, 'Alat tulis kantor'),
(8, 'test'),
(9, 'test'),
(10, 'test'),
(11, 'test'),
(12, 'test'),
(13, 'test'),
(14, 'test'),
(15, 'test'),
(16, 'test'),
(17, 'test'),
(18, 'test'),
(19, 'test'),
(20, 'test'),
(21, 'test'),
(22, 'test'),
(23, 'test'),
(24, 'test'),
(25, 'test'),
(26, 'test'),
(27, 'test'),
(28, 'test'),
(29, 'test'),
(30, 'test'),
(31, 'test'),
(32, 'test'),
(33, 'test'),
(34, 'test'),
(35, 'test'),
(36, 'test'),
(37, 'test'),
(38, 'test'),
(39, 'test'),
(40, 'test'),
(41, 'test'),
(42, 'test'),
(43, 'test'),
(44, 'test'),
(45, 'test'),
(46, 'test'),
(47, 'test'),
(48, 'test'),
(49, 'test'),
(50, 'test'),
(51, 'test'),
(52, 'test'),
(54, 'Atest');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_sell`
--

CREATE TABLE `tbl_detail_sell` (
  `id_detail` int(11) NOT NULL,
  `no_code` varchar(15) NOT NULL,
  `code_product` varchar(25) NOT NULL,
  `modal` int(11) DEFAULT NULL,
  `selling_price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `profit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_detail_sell`
--

INSERT INTO `tbl_detail_sell` (`id_detail`, `no_code`, `code_product`, `modal`, `selling_price`, `qty`, `total_price`, `profit`) VALUES
(10, '202210060002', '1', 250000, 300000, 2, 600000, 100000),
(11, '202210070001', '2', 50000, 74100, 1, 74100, 24100),
(12, '202210070001', '111', 150000, 200000, 1, 200000, 50000),
(13, '202210070001', '1', 250000, 300000, 1, 300000, 50000),
(14, '202210090001', '1', 250000, 300000, 5, 1500000, 250000),
(15, '202210090002', '1', 250000, 300000, 2, 600000, 100000),
(16, '202210090002', '2', 85000, 90000, 1, 90000, 5000),
(17, '202210090003', '1', 250000, 300000, 1, 300000, 50000),
(18, '202210090004', '2', 85000, 90000, 1, 90000, 5000),
(19, '202210090004', '1', 250000, 300000, 1, 300000, 50000),
(20, '202210090005', '1', 250000, 300000, 1, 300000, 50000),
(21, '202210090006', '1', 250000, 300000, 1, 300000, 50000);

--
-- Triggers `tbl_detail_sell`
--
DELIMITER $$
CREATE TRIGGER `t_detail_sell` AFTER INSERT ON `tbl_detail_sell` FOR EACH ROW BEGIN
	UPDATE tbl_product SET stock = stock - NEW.qty
    WHERE code_product = NEW.code_product;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id_product` int(11) NOT NULL,
  `code_product` varchar(25) NOT NULL,
  `name_product` varchar(15) NOT NULL,
  `id_category` int(2) NOT NULL,
  `id_unit` int(2) NOT NULL,
  `purchase_price` int(11) NOT NULL,
  `selling_price` int(11) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id_product`, `code_product`, `name_product`, `id_category`, `id_unit`, `purchase_price`, `selling_price`, `stock`) VALUES
(3, '1', 'keyboard', 1, 1, 250000, 300000, 4),
(4, '2', 'Mouse', 1, 1, 85000, 90000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sell`
--

CREATE TABLE `tbl_sell` (
  `id_sell` int(11) NOT NULL,
  `no_code` varchar(15) DEFAULT NULL,
  `date_sell` date DEFAULT NULL,
  `hour` time DEFAULT NULL,
  `grand_total` int(11) DEFAULT NULL,
  `buyed` int(11) DEFAULT NULL,
  `refund` int(11) DEFAULT NULL,
  `id_user` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sell`
--

INSERT INTO `tbl_sell` (`id_sell`, `no_code`, `date_sell`, `hour`, `grand_total`, `buyed`, `refund`, `id_user`) VALUES
(5, '202210060001', '2022-10-06', '20:07:40', 600000, 600000, -540000, 1),
(6, '202210060002', '2022-10-06', '20:43:17', 600000, 700000, 100000, 1),
(7, '202210070001', '2022-10-07', '01:18:06', 574100, 600000, 25900, 1),
(8, '202210090001', '2022-10-09', '21:24:42', 1500000, 1500000, -1350000, 1),
(9, '202210090002', '2022-10-09', '21:26:22', 690000, 700000, 10000, 1),
(10, '202210090003', '2022-10-09', '21:29:07', 300000, 3000, -297000, 1),
(11, '202210090004', '2022-10-10', '21:29:32', 90000, 100000, 10000, 1),
(12, '202210090004', '2022-10-09', '21:38:49', 300000, 300000, -270000, 1),
(13, '202210090005', '2022-10-09', '21:39:00', 300000, 300000, 0, 1),
(14, '202210090006', '2022-10-09', '22:07:36', 300000, 300000, -270000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_setting`
--

CREATE TABLE `tbl_setting` (
  `id` int(1) NOT NULL,
  `name_shop` varchar(25) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `no_phone` varchar(200) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_setting`
--

INSERT INTO `tbl_setting` (`id`, `name_shop`, `address`, `no_phone`, `description`) VALUES
(1, 'Entwo Shop', 'Jl. Ir. H. Juanda, Rawagaru, Sidanegara, Kec. Cilacap Tengah, Kabupaten Cilacap, Jawa Tengah 53223', '081215163676', 'Entwo was founded at 2013 in Cilacap, Central Java, Indonesia. Entwo has a professional team of young and dynamic, with the refreshment of knowledge and skills needed regularly. Entwo also also building strategic alliances with a number of technology partners, national, regional, and global solutions to strengthen its offering.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_unit`
--

CREATE TABLE `tbl_unit` (
  `id_unit` int(2) NOT NULL,
  `name_unit` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_unit`
--

INSERT INTO `tbl_unit` (`id_unit`, `name_unit`) VALUES
(1, 'PCS'),
(3, 'Keteng'),
(4, '2323'),
(5, '2'),
(6, 'f'),
(7, '5');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(2) NOT NULL,
  `name_user` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `level` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `name_user`, `email`, `password`, `level`) VALUES
(1, 'Entwo', 'entwo@gmail.com', 'password123', 1),
(2, 'fahmi', 'fahmi@gmail.com', 'password123', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `tbl_detail_sell`
--
ALTER TABLE `tbl_detail_sell`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `tbl_sell`
--
ALTER TABLE `tbl_sell`
  ADD PRIMARY KEY (`id_sell`);

--
-- Indexes for table `tbl_setting`
--
ALTER TABLE `tbl_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_unit`
--
ALTER TABLE `tbl_unit`
  ADD PRIMARY KEY (`id_unit`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tbl_detail_sell`
--
ALTER TABLE `tbl_detail_sell`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_sell`
--
ALTER TABLE `tbl_sell`
  MODIFY `id_sell` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_setting`
--
ALTER TABLE `tbl_setting`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_unit`
--
ALTER TABLE `tbl_unit`
  MODIFY `id_unit` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
