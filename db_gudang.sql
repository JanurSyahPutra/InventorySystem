-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2020 at 02:07 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gudang`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('adm', '123'),
('admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `id` int(11) NOT NULL,
  `kode_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `pengirim` varchar(50) NOT NULL,
  `tanggal_terima` date NOT NULL,
  `penerima` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang_keluar`
--

INSERT INTO `barang_keluar` (`id`, `kode_barang`, `nama_barang`, `pengirim`, `tanggal_terima`, `penerima`) VALUES
(24, 'Tepung001', 'Tepung', 'PT Tepung', '2020-07-02', 'Made'),
(25, 'Beras001', 'Beras', 'PT Beras', '2020-07-02', 'Made'),
(26, 'Tomat001', 'Tomat', 'PT Tomat', '2020-07-04', 'Rafael'),
(27, 'PPK001', 'HP', 'PT. ADIT', '2020-07-17', 'PT. ALDI'),
(28, 'BRG009', 'LAPTOP ANYAR', 'PT. LAPTOP INDO', '2020-07-10', 'ALDI'),
(29, 'P001', 'HP', 'PT. HP INDO', '2020-07-10', 'ALDI');

-- --------------------------------------------------------

--
-- Table structure for table `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `id` int(11) NOT NULL,
  `kode_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `pengirim` varchar(50) NOT NULL,
  `tanggal_terima` date NOT NULL,
  `penerima` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang_masuk`
--

INSERT INTO `barang_masuk` (`id`, `kode_barang`, `nama_barang`, `pengirim`, `tanggal_terima`, `penerima`) VALUES
(14, 'Tepung001', 'Tepung', 'PT Tepung', '2020-07-02', 'Made'),
(15, 'Jagung001', 'Jagung', 'PT Jagung', '2020-07-02', 'Vidia'),
(16, 'Kentang001', 'Kentang', 'PT Kentang', '2020-07-07', 'Adit'),
(17, 'Tomat001', 'Tomat', 'PT Tomat', '2020-07-08', 'Rafael'),
(18, 'HP001', 'HP', 'PT HP', '2020-07-06', 'Mohtar'),
(19, 'Laptop001', 'Baju', 'PT Laptop', '2020-07-05', 'Khurun'),
(20, 'Susu Bubuk001', 'Susu Bubuk', 'PT Susu Bubuk', '2020-07-05', 'Aldi'),
(22, 'PPK001', 'HP', 'PT. ADIT', '2020-07-13', 'ALDI'),
(23, 'BRG009', 'LAPTOP ANYAR', 'PT. LAPTOP INDO', '2020-07-10', 'ALDI'),
(24, 'p001', 'HP', 'PT. HP INDO', '2020-07-10', 'ALDI');

-- --------------------------------------------------------

--
-- Table structure for table `gudang`
--

CREATE TABLE `gudang` (
  `id` int(11) NOT NULL,
  `kode_barang` varchar(30) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `pengirim` varchar(50) NOT NULL,
  `tanggal_terima` date NOT NULL,
  `penerima` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gudang`
--

INSERT INTO `gudang` (`id`, `kode_barang`, `nama_barang`, `pengirim`, `tanggal_terima`, `penerima`) VALUES
(15, 'Jagung001', 'Jagung', 'PT Jagung', '2020-07-02', 'Vidia'),
(16, 'Kentang001', 'Kentang', 'PT Kentang', '2020-07-07', 'Adit'),
(18, 'HP001', 'HP', 'PT HP', '2020-07-06', 'Mohtar'),
(19, 'Laptop001', 'Laptop', 'PT Laptop', '2020-07-05', 'Khurun'),
(20, 'Susu Bubuk001', 'Susu Bubuk', 'PT Susu Bubuk', '2020-07-05', 'Aldi'),
(21, '9922', 'leptop', 'PT jhc', '2020-07-10', 'janur p');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gudang`
--
ALTER TABLE `gudang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `gudang`
--
ALTER TABLE `gudang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
