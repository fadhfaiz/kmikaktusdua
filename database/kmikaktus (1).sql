-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2019 at 10:16 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kmikaktus`
--

-- --------------------------------------------------------

--
-- Table structure for table `aksesoris`
--

CREATE TABLE `aksesoris` (
  `kode_aksesoris` char(5) NOT NULL,
  `nama` varchar(40) DEFAULT NULL,
  `harga` int(10) DEFAULT NULL,
  `stok` int(3) DEFAULT NULL,
  `gambar` varchar(35) DEFAULT NULL,
  `id_penjual` int(1) NOT NULL,
  `jenis_aksesoris` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aksesoris`
--

INSERT INTO `aksesoris` (`kode_aksesoris`, `nama`, `harga`, `stok`, `gambar`, `id_penjual`, `jenis_aksesoris`) VALUES
('AK001', 'Pot Kaca Cantik', 20000, 10, 'gambar1.jpg', 1, 'Pot'),
('AK002', 'Batu Warna-Warni', 40000, 15, 'gambar2.jpg', 1, 'Batu'),
('AK003', 'Bibit Aloevera Cantik', 5000, 10, 'gambar3.jpg', 1, 'Bibit'),
('AK004', 'kaktus mini', 7500, 12, 'gambar20.jpg', 1, 'Bibit'),
('AK005', 'kaktus bulat', 5000, 10, 'gambar21.jpg', 1, 'Bibit'),
('AK006', 'batu warna', 5000, 5, 'gambar15.jpg', 1, 'Batu'),
('AK007', 'batu koral', 10000, 10, 'gambar16.jpg', 1, 'Batu'),
('Ak008', 'batu putih', 8000, 5, 'gambar13.jpg', 1, 'Batu'),
('AK009', 'pot putih', 15000, 5, 'gambar17.jpg', 1, 'Pot'),
('AK010', 'pot orange', 5500, 3, 'gambar19.jpg', 1, 'Pot');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `kode_artikel` char(5) NOT NULL,
  `judul` varchar(60) DEFAULT NULL,
  `isi` text,
  `gambar` varchar(35) DEFAULT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`kode_artikel`, `judul`, `isi`, `gambar`, `tanggal`) VALUES
('5cc80', 'Aglaonema Adelia', 'Diambil dari nama kolektor tanaman hias di Manila, Adelia Angeles, tanaman aglaonema Adelia memiliki daun berujung runcing dengan warna merah menyala. Jenis tanaman Aglaonema ini berdaun besar, mengkilat dan tampil wah karena kombinasi warna merah-hijau yang intens.\r\n\r\nTanaman Aglaonema Adelia bisa tumbuh mencapai 30 cm, terutama jika menggunakan tanah yang gembur. Cara merawat tanaman Aglaonema ini adalah dengan menempatkan pada daerah yang semi-panas dan tidak terpapar sinar matahari secara langsung. Penyiraman harus dilakukan secara berkala dalam jumlah air sedang, dan disarankan dilakukan penyemprotan (misting) di bagian daun sesuai kebutuhan.', 'Aglaonema.jpg', '0000-00-00 00:00:00'),
('AR001', 'Apa itu Kaktus ?', 'Kaktus adalah nama yang diberikan untuk anggota tumbuhan berbunga famili Cactaceae.\n\nKaktus dapat tumbuh pada waktu yang lama tanpa air.[1] Kaktus biasa ditemukan di daerah-daerah yang kering (gurun).[1] Kata jamak untuk kaktus adalah kakti.[2] Kaktus memiliki akar yang panjang untuk mencari air dan memperlebar penyerapan air dalam tanah.[1] Air yang diserap kaktus disimpan dalam ruang di batangnya.[1] Kaktus juga memiliki daun yang berubah bentuk menjadi duri sehingga dapat mengurangi penguapan air lewat daun.{[3] Oleh sebab itu, kaktus dapat tumbuh pada waktu yang lama tanpa air', 'gambar10.jpg', '2019-04-03 00:00:00'),
('AR002', 'Tips Memilih Tanaman Hias', 'Bingung memilih tanaman hias yang yang bisa kamu gunakan untuk lengkapi taman atau sekedar mempermanis sudut ruangan? Kaktus hias mungkin bisa jadi salah satu pilihanmu.\r\n\r\nTertarik hadirkan kaktus hias pada hunianmu? Ada banyak sekali variasi jenis kaktus hias yang bisa kamu pilih. Dan, untuk kamu yang masih pemula dalam memelihara kaktus hias, berikut adalah rekomendasi jenis kaktus hias dengan daya tahan ekstra dan perawatan praktis yang cocok untuk pemula!', 'gambar11.jpg', '2019-04-09 00:00:00'),
('AR003', 'Cara merawat Kaktus', 'Perhatikan Suhu Tempat Untuk Menanam Kaktus\r\nTanaman kaktus adalah tanaman yang sebaiknya ditempatkan di tempat dengan suhu sejuk namun tidak lembab. Dengan suhu yang pas, kaktus bisa tumbuh dan berkembang dengan baik. Hindari menempatkan kaktus di tempat dengan suhu terlalu dingin karena ini bisa membuat kaktus rentan membusuk. Juga, hindari menempatkan kaktus di tempat dengan suhu terlalu kering karena ini akan membuatnya layu dan mudah mati. \r\n\r\nSiram dengan Air Secukupnya Saja\r\nAgar kaktus tetap segar, siram kaktus dengan air secukupnya saja. Kaktus tidak perlu disiram setiap hari. Cukup siram satu kali untuk 3 hari atau bahkan satu kali untuk seminggu. Kaktus yang disiram terlalu sering justru akan lebih mudah membusuk. \r\n', 'gambar12.jpg', '2019-04-11 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `beli_aksesoris`
--

CREATE TABLE `beli_aksesoris` (
  `kode_pesanan` char(5) NOT NULL,
  `kode_aksesoris` char(5) DEFAULT NULL,
  `id_pembeli` char(5) DEFAULT NULL,
  `total_harga` int(10) DEFAULT NULL,
  `jumlah_barang` int(3) DEFAULT NULL,
  `tanggal_beli` date NOT NULL,
  `ongkir` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beli_aksesoris`
--

INSERT INTO `beli_aksesoris` (`kode_pesanan`, `kode_aksesoris`, `id_pembeli`, `total_harga`, `jumlah_barang`, `tanggal_beli`, `ongkir`) VALUES
('PS001', 'AK001', 'PB001', NULL, 1, '2019-04-22', 10000),
('PS002', 'AK002', 'PB002', NULL, 1, '2019-04-23', 20000),
('PS003', 'AK003', 'PB003', NULL, 1, '2019-04-24', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `beli_paket`
--

CREATE TABLE `beli_paket` (
  `kode_pesanan` char(5) NOT NULL,
  `kode_paket` char(5) DEFAULT NULL,
  `id_pembeli` char(5) NOT NULL,
  `total_harga` int(10) DEFAULT NULL,
  `jumlah_barang` int(3) DEFAULT NULL,
  `tanggal_beli` date NOT NULL,
  `ongkir` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beli_paket`
--

INSERT INTO `beli_paket` (`kode_pesanan`, `kode_paket`, `id_pembeli`, `total_harga`, `jumlah_barang`, `tanggal_beli`, `ongkir`) VALUES
('PS001', 'PK001', 'PB001', NULL, 1, '2019-04-22', 12000),
('PS002', 'PK002', 'PB002', NULL, 1, '2019-04-23', 15000),
('PS003', 'PK003', 'PB003', NULL, 1, '2019-04-24', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `beli_tanaman`
--

CREATE TABLE `beli_tanaman` (
  `kode_pesanan` char(5) NOT NULL,
  `id_pembeli` char(5) NOT NULL,
  `kode_tanaman` char(5) DEFAULT NULL,
  `total_harga` int(10) DEFAULT NULL,
  `jumlah_barang` int(3) DEFAULT NULL,
  `tanggal_beli` date NOT NULL,
  `ongkir` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beli_tanaman`
--

INSERT INTO `beli_tanaman` (`kode_pesanan`, `id_pembeli`, `kode_tanaman`, `total_harga`, `jumlah_barang`, `tanggal_beli`, `ongkir`) VALUES
('PS001', 'PB001', 'TN001', NULL, 1, '2019-04-22', 15000),
('PS002', 'PB002', 'TN002', NULL, 1, '2019-04-23', 20000),
('PS003', 'PB003', 'TN003', NULL, 1, '2019-04-24', 13000);

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `kode_paket` char(5) NOT NULL,
  `nama_paket` varchar(45) DEFAULT NULL,
  `gambar` varchar(35) DEFAULT NULL,
  `stok` int(3) DEFAULT NULL,
  `harga` int(10) DEFAULT NULL,
  `id_penjual` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`kode_paket`, `nama_paket`, `gambar`, `stok`, `harga`, `id_penjual`) VALUES
('PK001', 'Paket Putih Hemat', 'gambar7.jpg', 5, 70000, 1),
('PK002', 'Paket Warna Warni', 'gambar8.jpg', 5, 65000, 1),
('PK003', 'Paket Kado Cantik', 'gambar9.jpg', 5, 75000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` char(5) NOT NULL,
  `nama_pembeli` varchar(40) DEFAULT NULL,
  `no_telp` varchar(13) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `kecamatan` varchar(15) DEFAULT NULL,
  `kabupaten` varchar(15) DEFAULT NULL,
  `provinsi` varchar(50) DEFAULT NULL,
  `alamatlengkap` varchar(50) DEFAULT NULL,
  `catatan` varchar(100) NOT NULL,
  `kodepos` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `nama_pembeli`, `no_telp`, `email`, `kecamatan`, `kabupaten`, `provinsi`, `alamatlengkap`, `catatan`, `kodepos`) VALUES
('PB001', 'Ais Suryo', '08122112212', 'aissuryo@gmail.com', 'umbulharjo', 'DI Yogyakarta', 'Yogyakarta', 'Gg. Nakula, Jl. Soga, 55162', 'Jangan kirim dompet kulit ya', '55162'),
('PB002', 'Sandi Subianto', '020202020202', 'suararakyat@gmail.com', 'Sewon', 'Mbantul', 'D.I Yogyakarta', 'Jl. Sendirian', 'pokoknya cari aja yg belum ada aspal dan kabel indihome', '55165'),
('PB003', 'Aldo', '082671628374', 'aldoofficial@gmail.com', 'Sambaliung', 'Berau', 'Kaltim', 'Jl. Nangka no 290', '', '17564'),
('PB004', 'Ari', '08761234666', 'arinurcahya@gmail.com', 'umbulharjo', 'bantul', 'Yogyakarta', '<p>jl. setengah jadi</p>', 'di dekat pohon mangga', '55164'),
('PB005', 'Ari', '08761234666', 'arinurcahya@gmail.com', 'umbulharjo', 'bantul', 'Yogyakarta', '<p>jl. setengah jadi</p>', 'di dekat pohon mangga', '55164'),
('PB006', 'Ari', '08761234666', 'arinurcahya@gmail.com', 'umbulharjo', 'bantul', 'Yogyakarta', '<p>jl. setengah jadi</p>', 'di dekat pohon mangga', '55164'),
('PB007', 'Ari', '08761234666', 'arinurcahya@gmail.com', 'umbulharjo', 'bantul', 'Yogyakarta', '<p>jl. setengah jadi</p>', 'di dekat pohon mangga', '55164'),
('PB008', 'Ari', '08761234666', 'arinurcahya@gmail.com', 'umbulharjo', 'bantul', 'Yogyakarta', '<p>jl. setengah jadi</p>', 'di dekat pohon mangga', '55164'),
('PB009', 'Ari', '08761234666', 'arinurcahya@gmail.com', 'umbulharjo', 'bantul', 'Yogyakarta', '<p>setengah</p>', 'di dekat pohon mangga', '55164');

-- --------------------------------------------------------

--
-- Table structure for table `penjual`
--

CREATE TABLE `penjual` (
  `id_penjual` int(1) NOT NULL,
  `nama_penjual` varchar(40) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `no_telp` char(13) DEFAULT NULL,
  `username` varchar(12) DEFAULT NULL,
  `password` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjual`
--

INSERT INTO `penjual` (`id_penjual`, `nama_penjual`, `email`, `no_telp`, `username`, `password`) VALUES
(1, 'Dewi Soyusiawaty', 'my_soyus@yahoo.com', '085200554942', 'kaktuskmi', 'aglonema');

-- --------------------------------------------------------

--
-- Table structure for table `tanaman`
--

CREATE TABLE `tanaman` (
  `kode_tanaman` char(5) NOT NULL,
  `id_penjual` int(11) NOT NULL,
  `nama_tanaman` varchar(45) DEFAULT NULL,
  `harga` int(10) DEFAULT NULL,
  `stok` int(3) DEFAULT NULL,
  `diameter` int(3) DEFAULT NULL,
  `tinggi` int(3) DEFAULT NULL,
  `bobot` int(3) DEFAULT NULL,
  `gambar` varchar(35) DEFAULT NULL,
  `jenis_tanaman` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tanaman`
--

INSERT INTO `tanaman` (`kode_tanaman`, `id_penjual`, `nama_tanaman`, `harga`, `stok`, `diameter`, `tinggi`, `bobot`, `gambar`, `jenis_tanaman`) VALUES
('TN001', 1, 'Bambu Hoki - Pot Gelas - Small', 40000, 15, 10, 20, 300, 'gambar4.jpg', 'Kaktus'),
('TN002', 1, 'Aglonema - Pot Kaca', 30000, 15, 20, 50, 700, 'gambar5.jpg', 'Aglonema'),
('TN003', 1, 'Lactea Putih - Pot Plastik Hitam', 25000, 10, 15, 25, 300, 'gambar6.jpg', 'Lactea'),
('TN004', 1, 'Tunas Aloevera', 8500, 4, 30, 25, 50, 'gambar3.jpg', 'Aloevera'),
('TN005', 1, 'Drasanena - pot keramik', 15000, 5, 40, 50, 60, 'gambar24.jpg', 'Drasanena');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aksesoris`
--
ALTER TABLE `aksesoris`
  ADD PRIMARY KEY (`kode_aksesoris`),
  ADD KEY `id_penjual` (`id_penjual`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`kode_artikel`);

--
-- Indexes for table `beli_aksesoris`
--
ALTER TABLE `beli_aksesoris`
  ADD PRIMARY KEY (`kode_pesanan`),
  ADD KEY `kode_aksesoris` (`kode_aksesoris`,`id_pembeli`),
  ADD KEY `id_pembeli` (`id_pembeli`);

--
-- Indexes for table `beli_paket`
--
ALTER TABLE `beli_paket`
  ADD PRIMARY KEY (`kode_pesanan`),
  ADD KEY `kode_paket` (`kode_paket`),
  ADD KEY `id_pembeli` (`id_pembeli`);

--
-- Indexes for table `beli_tanaman`
--
ALTER TABLE `beli_tanaman`
  ADD PRIMARY KEY (`kode_pesanan`),
  ADD KEY `id_pembeli` (`id_pembeli`,`kode_tanaman`),
  ADD KEY `kode_tanaman` (`kode_tanaman`);

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
-- Indexes for table `tanaman`
--
ALTER TABLE `tanaman`
  ADD PRIMARY KEY (`kode_tanaman`),
  ADD KEY `id_penjual` (`id_penjual`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tanaman`
--
ALTER TABLE `tanaman`
  MODIFY `id_penjual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `aksesoris`
--
ALTER TABLE `aksesoris`
  ADD CONSTRAINT `aksesoris_ibfk_1` FOREIGN KEY (`id_penjual`) REFERENCES `penjual` (`id_penjual`);

--
-- Constraints for table `beli_aksesoris`
--
ALTER TABLE `beli_aksesoris`
  ADD CONSTRAINT `beli_aksesoris_ibfk_1` FOREIGN KEY (`kode_aksesoris`) REFERENCES `aksesoris` (`kode_aksesoris`),
  ADD CONSTRAINT `beli_aksesoris_ibfk_2` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`);

--
-- Constraints for table `beli_paket`
--
ALTER TABLE `beli_paket`
  ADD CONSTRAINT `beli_paket_ibfk_1` FOREIGN KEY (`kode_paket`) REFERENCES `paket` (`kode_paket`),
  ADD CONSTRAINT `beli_paket_ibfk_2` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`);

--
-- Constraints for table `beli_tanaman`
--
ALTER TABLE `beli_tanaman`
  ADD CONSTRAINT `beli_tanaman_ibfk_1` FOREIGN KEY (`kode_tanaman`) REFERENCES `tanaman` (`kode_tanaman`),
  ADD CONSTRAINT `beli_tanaman_ibfk_2` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`);

--
-- Constraints for table `paket`
--
ALTER TABLE `paket`
  ADD CONSTRAINT `paket_ibfk_1` FOREIGN KEY (`id_penjual`) REFERENCES `penjual` (`id_penjual`);

--
-- Constraints for table `tanaman`
--
ALTER TABLE `tanaman`
  ADD CONSTRAINT `tanaman_ibfk_1` FOREIGN KEY (`id_penjual`) REFERENCES `penjual` (`id_penjual`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
