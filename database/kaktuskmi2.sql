-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2019 at 07:30 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kaktuskmi2`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `kode_artikel` char(5) NOT NULL,
  `judul` varchar(60) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `kode_paket` char(5) NOT NULL,
  `id_penjual` char(1) NOT NULL,
  `nama_paket` varchar(45) NOT NULL,
  `harga` int(10) NOT NULL,
  `stok` int(3) NOT NULL,
  `gambar` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`kode_paket`, `id_penjual`, `nama_paket`, `harga`, `stok`, `gambar`) VALUES
('PAK01', '1', 'Paket 100.000', 100, 2, 'gambar12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` char(5) NOT NULL,
  `nama_pembeli` varchar(40) DEFAULT NULL,
  `no_telp` char(13) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `kecamatan` varchar(35) DEFAULT NULL,
  `kabupaten` varchar(35) DEFAULT NULL,
  `provinsi` varchar(35) DEFAULT NULL,
  `kodepos` char(5) NOT NULL,
  `alamat_lengkap` varchar(50) DEFAULT NULL,
  `catatan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `nama_pembeli`, `no_telp`, `email`, `kecamatan`, `kabupaten`, `provinsi`, `kodepos`, `alamat_lengkap`, `catatan`) VALUES
('PM001', 'Wahyu Shofian', '085200554942', 'wahyushofian@gmail.com', 'Nitikan', 'Bantul', 'Yogyakarta', '55571', 'Jl. Nitikan, Bantul, DIY', 'Jangan kirim barang second ya gan'),
('PM002', 'Faadihilah Ahnaf Faiz', '08577432571', 'fadhfaiz@gmail.com', 'Sewon', 'Bantul', 'Yogyakarta', '53718', 'Widoro, Bangunharjo, Mbantul', 'Jangan kirim dompet kulit ya gan'),
('PM003', 'Intan Destiyanti', '082132454333', 'idestiyanti@gmail.com', 'Umbulharjo', 'Bantul', 'Yogyakarta', '53218', 'Jl. Dr. Soepomo, Umbulharjo', 'Packing mantap gan');

-- --------------------------------------------------------

--
-- Table structure for table `penjual`
--

CREATE TABLE `penjual` (
  `id_penjual` char(1) NOT NULL,
  `nama_penjual` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` char(13) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjual`
--

INSERT INTO `penjual` (`id_penjual`, `nama_penjual`, `email`, `no_telp`, `username`, `password`) VALUES
('1', 'Dewi Soyusiawaty', 'my_soyus@yahoo.com', '085200554942', 'kaktuskmi', 'aglonema');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `kode_produk` char(5) NOT NULL,
  `id_penjual` char(1) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `stok_produk` int(3) NOT NULL,
  `diameter` int(3) NOT NULL,
  `tinggi` int(3) NOT NULL,
  `bobot` int(3) NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `jenis_produk` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`kode_produk`, `id_penjual`, `nama_produk`, `harga_produk`, `stok_produk`, `diameter`, `tinggi`, `bobot`, `gambar`, `jenis_produk`) VALUES
('BIT01', '1', 'Bibit Kaktus', 25000, 10, 3, 15, 2, 'gambar3.jpg', 'Bibit Tanaman'),
('BT001', '1', 'Batu Kristal', 25000, 1, 5, 2, 4, 'gambar8.jpg', 'Batu Hias Tanaman'),
('KAK01', '1', 'Aglonema', 35000, 20, 10, 25, 5, 'gambar5.jpg', 'Kaktus Aglonema'),
('KAK02', '1', 'Kaktus Sasivera', 35000, 3, 4, 30, 4, 'gambar6.jpg', 'Kaktus Sansivera'),
('POT01', '1', 'Pot Gelas', 15000, 3, 10, 20, 3, 'gambar1.jpg', 'Pot Tanaman');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `kode_pesanan` char(5) NOT NULL,
  `id_pembeli` char(5) DEFAULT NULL,
  `kode_produk` char(5) DEFAULT NULL,
  `kode_paket` char(5) DEFAULT NULL,
  `total_harga` int(10) DEFAULT NULL,
  `ongkir` int(10) DEFAULT NULL,
  `status` varchar(25) DEFAULT NULL,
  `jumlah_produk` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`kode_pesanan`, `id_pembeli`, `kode_produk`, `kode_paket`, `total_harga`, `ongkir`, `status`, `jumlah_produk`) VALUES
('PES01', 'PM001', 'KAK02', 'PAK01', 145000, 10000, 'Upload Struk Bayar', 1),
('PES02', 'PM002', 'KAK01', 'PAK01', 150000, 15000, 'Lunas', 1),
('PES03', 'PM003', 'BIT01', 'PAK01', 135000, 10000, 'Tunggu Ongkir', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`kode_paket`),
  ADD KEY `id_penjual` (`id_penjual`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indexes for table `penjual`
--
ALTER TABLE `penjual`
  ADD PRIMARY KEY (`id_penjual`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`kode_produk`),
  ADD KEY `id_penjual` (`id_penjual`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`kode_pesanan`),
  ADD KEY `id_pembeli` (`id_pembeli`,`kode_produk`,`kode_paket`),
  ADD KEY `kode_paket` (`kode_paket`),
  ADD KEY `kode_produk` (`kode_produk`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `paket`
--
ALTER TABLE `paket`
  ADD CONSTRAINT `paket_ibfk_1` FOREIGN KEY (`id_penjual`) REFERENCES `penjual` (`id_penjual`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_penjual`) REFERENCES `penjual` (`id_penjual`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`kode_paket`) REFERENCES `paket` (`kode_paket`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`kode_produk`) REFERENCES `produk` (`kode_produk`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
