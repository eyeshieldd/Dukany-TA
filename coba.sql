-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2019 at 02:48 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coba`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangjual`
--

CREATE TABLE `barangjual` (
  `id_barangjual` int(10) NOT NULL,
  `id_supplier` int(10) DEFAULT NULL,
  `kode_barang` varchar(50) NOT NULL,
  `nama_barangjual` varchar(50) NOT NULL,
  `harga_beli` int(10) NOT NULL,
  `harga_jual` int(10) NOT NULL,
  `stok` int(10) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barangjual`
--

INSERT INTO `barangjual` (`id_barangjual`, `id_supplier`, `kode_barang`, `nama_barangjual`, `harga_beli`, `harga_jual`, `stok`, `merk`, `keterangan`) VALUES
(1, 1, 'BJ001', 'baju', 100000, 150000, 1234567, 'rei', 'adsfghj'),
(19, 1, 'bj002', 'sabilal rosyad xxx', 100000, 120000, 1234567, 'rei', 'qwerfg'),
(23, 1, 'bj003', 'dcsc', 1000, 120000, 100, 'rei', 'adsfghj'),
(24, 1, 'qqqqq', 'johan aji', 100000, 120000, 2, 'rei', 'qwerfg'),
(27, 1, 'bj009', 'kaos', 100000, 120000, 0, 'eiger', 'qwerfg');

-- --------------------------------------------------------

--
-- Table structure for table `barangsewa`
--

CREATE TABLE `barangsewa` (
  `id_barangsewa` int(10) NOT NULL,
  `id_supplier` int(10) NOT NULL,
  `kode_barang` varchar(50) NOT NULL,
  `nama_barangsewa` varchar(50) NOT NULL,
  `harga_sewa` int(10) NOT NULL,
  `status` varchar(50) NOT NULL,
  `kondisi` varchar(50) NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barangsewa`
--

INSERT INTO `barangsewa` (`id_barangsewa`, `id_supplier`, `kode_barang`, `nama_barangsewa`, `harga_sewa`, `status`, `kondisi`, `tanggal_keluar`, `tanggal_kembali`, `keterangan`) VALUES
(2, 6, 'bj002', 'kaos', 12345678, 'Tersedia', 'Baik', '0000-00-00', '0000-00-00', 'uvuhkn'),
(4, 1, 'asdawsfeg', 'sabilal rosyad xxx', 12345678, 'Tersedia', 'Baik', '0000-00-00', '0000-00-00', 'uvuhkn');

-- --------------------------------------------------------

--
-- Table structure for table `kasir`
--

CREATE TABLE `kasir` (
  `id_kasir` int(10) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `no_hp` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kasir`
--

INSERT INTO `kasir` (`id_kasir`, `last_login`, `username`, `password`, `nama_lengkap`, `no_hp`) VALUES
(1, '2019-02-26 00:00:00', 'sabilal', 'sabil', 'sabilal rosyad', 1234567890),
(32, '2019-03-01 00:00:00', 'sabil', 'sabil', 'er32r3', 32),
(33, '2019-02-28 00:00:00', 'muhammad', '123', 'sabilal rosyad xxx', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(10) NOT NULL,
  `nama_supplier` varchar(50) NOT NULL,
  `no_hp` int(50) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `no_hp`, `alamat`) VALUES
(1, 'amikom', 88899999, 'concattai'),
(6, 'amikomcuy', 232000000, 'pasar baruuuuuuuueeeee');

-- --------------------------------------------------------

--
-- Table structure for table `transaksijual`
--

CREATE TABLE `transaksijual` (
  `id_transaksijual` int(10) NOT NULL,
  `tanggal` datetime NOT NULL,
  `id_kasir` int(10) NOT NULL,
  `no_nota` varchar(100) NOT NULL DEFAULT '0',
  `total` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksijual`
--

INSERT INTO `transaksijual` (`id_transaksijual`, `tanggal`, `id_kasir`, `no_nota`, `total`) VALUES
(9, '2019-03-20 00:00:00', 32, '111111sdasdasdasd', 1000),
(63, '2001-03-19 00:00:00', 32, '0', 0),
(68, '2001-03-19 00:00:00', 32, '1', 0),
(72, '2001-03-19 00:00:00', 32, '10320', 0),
(98, '2001-03-19 00:00:00', 32, '2019', 0),
(106, '2019-03-01 19:58:13', 32, '2019-03-01 19:58:13', 0),
(107, '2019-03-01 19:58:49', 32, '2019-03-01 19:58:49', 0),
(108, '2019-03-01 19:59:14', 32, 'kontol2019-03-01 19:59:14', 0),
(109, '2019-03-01 19:59:49', 32, 'sabil-2019-03-01 19:59:49', 0),
(110, '2019-03-01 20:00:20', 32, '-2019-03-01 20:00:20', 0),
(111, '2019-03-01 20:01:18', 32, 'Array-2019-03-01 20:01:18', 0),
(112, '2019-03-01 20:03:37', 32, 'sabil-2019-03-01 20:03:37', 0),
(113, '2019-03-01 20:04:56', 32, 'sabil-2019-03-01 20:04:56', 0),
(114, '2019-03-01 20:05:26', 32, 'sabil-20190301200526', 0),
(115, '2019-03-01 20:17:11', 32, 'sabil-20190301201711', 0),
(116, '2019-03-01 20:17:27', 32, 'sabil-20190301201727', 0),
(117, '2019-03-01 20:21:12', 32, 'sabil-20190301202112', 0),
(118, '2019-03-01 20:33:51', 32, 'sabil-20190301203351', 0),
(119, '2019-03-01 20:34:24', 32, 'sabil-20190301203424', 0),
(120, '2019-03-01 20:35:02', 32, 'sabil-20190301203502', 0),
(121, '2019-03-01 20:36:11', 32, 'sabil-20190301203611', 0),
(123, '2019-03-01 20:38:06', 32, 'sabil-20190301203806', 0),
(124, '2019-03-01 20:38:53', 32, 'sabil-20190301203853', 0),
(125, '2019-03-01 20:40:19', 32, 'sabil-20190301204019', 0),
(126, '2019-03-01 20:46:00', 32, 'sabil-20190301204600', 0),
(127, '2019-03-01 20:50:22', 32, 'sabil-20190301205022', 0),
(128, '2019-03-01 21:03:49', 32, 'sabil-20190301210349', 0),
(129, '2019-03-01 21:03:53', 32, 'sabil-20190301210353', 0),
(130, '2019-03-01 21:06:47', 32, 'sabil-20190301210647', 0),
(131, '2019-03-01 21:08:36', 32, 'sabil-20190301210836', 0),
(132, '2019-03-02 02:25:25', 32, 'sabil-20190302022525', 0),
(133, '2019-03-02 02:39:22', 32, 'sabil-20190302023922', 0);

-- --------------------------------------------------------

--
-- Table structure for table `transaksijualdetail`
--

CREATE TABLE `transaksijualdetail` (
  `id_transaksijualdetail` int(10) NOT NULL,
  `id_barangjual` int(10) NOT NULL,
  `no_nota` int(10) NOT NULL,
  `kode_barang` varchar(50) NOT NULL,
  `nama_barangjual` varchar(50) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `harga_jual` int(10) NOT NULL,
  `status` int(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksijualdetail`
--

INSERT INTO `transaksijualdetail` (`id_transaksijualdetail`, `id_barangjual`, `no_nota`, `kode_barang`, `nama_barangjual`, `jumlah`, `harga_jual`, `status`) VALUES
(12, 24, 1, 'BJ001', 'baju', 1, 100000, 0),
(13, 1, 10320, '', '', 1, 150000, 0),
(14, 1, 10320, '', '', 3, 150000, 0),
(16, 19, 10320, '', '', 3, 120000, 0),
(17, 27, 10320, '', '', 100000, 120000, 0),
(18, 1, 10320, '', '', 1, 150000, 0),
(19, 19, 10320, '', '', 100000, 120000, 0),
(20, 19, 10320, '', '', 2000, 120000, 0),
(21, 1, 10320, '', '', 100000, 150000, 0),
(22, 19, 10323, '', '', 9, 120000, 0),
(23, 1, 10320, '', '', 101010, 150000, 0),
(24, 1, 10320, '', '', 2000, 150000, 0),
(25, 24, 10320, '', '', 100000, 120000, 0),
(26, 19, 10329, '', '', 100000, 120000, 0),
(27, 19, 10329, '', '', 100000999, 120000, 0),
(31, 1, 10329, '', '', 888, 150000, 0),
(33, 1, 10329, '', '', 1, 150000, 0),
(34, 1, 10329, '', '', 1, 150000, 0),
(35, 1, 10329, '', '', 1, 150000, 0),
(36, 19, 10329, '', '', 100000, 120000, 0),
(37, 19, 10329, '', '', 1, 120000, 0),
(38, 24, 10329, '', '', 3, 120000, 0),
(39, 23, 10329, '', '', 6, 120000, 0),
(40, 19, 10329, '', '', 100000, 120000, 0),
(41, 1, 10329, '', '', 1, 150000, 0),
(42, 1, 10329, '', '', 1, 150000, 0),
(43, 1, 20329, '', '', 1, 150000, 0),
(44, 19, 20329, '', '', 1, 120000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `transaksisewa`
--

CREATE TABLE `transaksisewa` (
  `id_transaksisewa` int(10) NOT NULL,
  `id_kasir` int(10) NOT NULL,
  `id_barangsewa` int(10) NOT NULL,
  `kode_barang` int(10) NOT NULL,
  `nama_barangsewa` varchar(50) NOT NULL,
  `harga` int(10) NOT NULL,
  `tanggal_sewa` date NOT NULL,
  `tanggal_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangjual`
--
ALTER TABLE `barangjual`
  ADD PRIMARY KEY (`id_barangjual`),
  ADD UNIQUE KEY `kode_barang` (`kode_barang`),
  ADD KEY `id_supplier` (`id_supplier`);

--
-- Indexes for table `barangsewa`
--
ALTER TABLE `barangsewa`
  ADD PRIMARY KEY (`id_barangsewa`),
  ADD UNIQUE KEY `kode_barang` (`kode_barang`),
  ADD KEY `id_supplier` (`id_supplier`);

--
-- Indexes for table `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`id_kasir`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `id_kasir` (`id_kasir`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `transaksijual`
--
ALTER TABLE `transaksijual`
  ADD PRIMARY KEY (`id_transaksijual`),
  ADD UNIQUE KEY `no_nota` (`no_nota`),
  ADD KEY `id_kasir` (`id_kasir`),
  ADD KEY `id_kasir_2` (`id_kasir`),
  ADD KEY `id_barangjual` (`no_nota`);

--
-- Indexes for table `transaksijualdetail`
--
ALTER TABLE `transaksijualdetail`
  ADD PRIMARY KEY (`id_transaksijualdetail`),
  ADD KEY `id_barangjual` (`id_barangjual`),
  ADD KEY `no_nota` (`no_nota`);

--
-- Indexes for table `transaksisewa`
--
ALTER TABLE `transaksisewa`
  ADD PRIMARY KEY (`id_transaksisewa`),
  ADD KEY `id_barangsewa` (`id_barangsewa`),
  ADD KEY `id_kasir` (`id_kasir`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barangjual`
--
ALTER TABLE `barangjual`
  MODIFY `id_barangjual` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `barangsewa`
--
ALTER TABLE `barangsewa`
  MODIFY `id_barangsewa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kasir`
--
ALTER TABLE `kasir`
  MODIFY `id_kasir` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaksijual`
--
ALTER TABLE `transaksijual`
  MODIFY `id_transaksijual` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `transaksijualdetail`
--
ALTER TABLE `transaksijualdetail`
  MODIFY `id_transaksijualdetail` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barangjual`
--
ALTER TABLE `barangjual`
  ADD CONSTRAINT `barangjual_ibfk_1` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`);

--
-- Constraints for table `barangsewa`
--
ALTER TABLE `barangsewa`
  ADD CONSTRAINT `barangsewa_ibfk_1` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`);

--
-- Constraints for table `transaksijual`
--
ALTER TABLE `transaksijual`
  ADD CONSTRAINT `transaksijual_ibfk_1` FOREIGN KEY (`id_kasir`) REFERENCES `kasir` (`id_kasir`);

--
-- Constraints for table `transaksijualdetail`
--
ALTER TABLE `transaksijualdetail`
  ADD CONSTRAINT `transaksijualdetail_ibfk_1` FOREIGN KEY (`id_barangjual`) REFERENCES `barangjual` (`id_barangjual`);

--
-- Constraints for table `transaksisewa`
--
ALTER TABLE `transaksisewa`
  ADD CONSTRAINT `transaksisewa_ibfk_1` FOREIGN KEY (`id_kasir`) REFERENCES `kasir` (`id_kasir`),
  ADD CONSTRAINT `transaksisewa_ibfk_2` FOREIGN KEY (`id_barangsewa`) REFERENCES `barangsewa` (`id_barangsewa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
