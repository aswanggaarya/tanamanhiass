-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2019 at 09:41 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tanaman`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(5) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(256) NOT NULL,
  `namaadmin` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`, `namaadmin`) VALUES
(2, 'mimin', '$2y$10$0dwUkzDkRRvgcwGeKtZ2..DdRonZbIUv0kvniajuff5Qc75gnPP4a', 'mimin'),
(3, 'oki', '$2y$10$qLrKLc2AbvcK00JbfT/eOuuLzLu.dEkB1oOa00gEGa3PsI9FOnpPy', 'oki'),
(4, 'admin', '$2y$10$oci8b1RVhH/K/muBtfDF2uFGUXqNSihCyQMLcoETl0kdgY7KuDyse', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `idbarang` int(5) NOT NULL,
  `namabarang` varchar(100) NOT NULL,
  `lokasi` varchar(20) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(5) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`idbarang`, `namabarang`, `lokasi`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(1, 'Tanaman Kaktus Ownroot Hijau', 'Bekasi', 'Tanaman Kaktus', 150000, 10, 'kaktusownroothijau.jpg'),
(2, 'Tanaman Anggrek Cymbidium', 'Bekasi', 'Tanaman Anggrek', 300000, 6, 'anggrekcymbidium.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `idinvoice` int(5) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `tglpesan` datetime NOT NULL,
  `batasbayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`idinvoice`, `nama`, `alamat`, `tglpesan`, `batasbayar`) VALUES
(1, 'Dodi Wijaya', 'Jakarta Barat', '2019-12-08 07:00:14', '2019-12-09 07:00:14'),
(2, 'Wijayanto', 'Bali', '2019-12-08 07:04:16', '2019-12-09 07:04:16');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `idpesanan` int(5) NOT NULL,
  `idinvoice` int(5) NOT NULL,
  `idbarang` int(5) NOT NULL,
  `namabarang` varchar(100) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`idpesanan`, `idinvoice`, `idbarang`, `namabarang`, `jumlah`, `harga`, `pilihan`) VALUES
(1, 2, 1, 'Tanaman Kaktus Ownroot Hijau', 1, 150000, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idbarang`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`idinvoice`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`idpesanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `idbarang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `idinvoice` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `idpesanan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
