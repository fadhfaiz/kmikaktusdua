-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2019 at 10:26 AM
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

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`kode_artikel`, `judul`, `isi`, `tanggal`, `gambar`) VALUES
('AR001', 'Kaktus dan Segala Manfaatnya', 'Kaktus (Cactaceae) adalah tanaman yang memiliki batang berduri dan dikenal hidup dicuaca panas dan\r\nkering, duri pada kaktus itu merupakan daun kaktus yang berubah bentuk menjadi duri sebagai\r\npenyesuaian diri untuk menghemat air. Biasanya kita mengenal kaktus itu hidup di gurun padahal tidak\r\nsemua jenis kaktus itu hidup di gurun ada juga beberapa jenis kaktus yang hidup di daerah tropis.\r\nTanaman kaktus saat ini juga digunakan sebagai tanaman hias, beraneka ragam jenis tanaman kaktus\r\nsekarang dijual dipasaran. Jenis tanaman kaktus yang populer adalah ariocarpus,haworhia attenuata,\r\nferocactus, Echinofossulocactus, echinocactud grussoni, Cereus Tetragonous.\r\n\r\nCara perawatan tanaman kaktus yang tergolong mudah menjadi salah satu sebab tanaman kaktus\r\npopuler dikalangan pecinta tamanan hias.\r\nKaktus tidak hanya bermanfaat untuk menghias rumah atau ruangan, sekarang kaktus juga sudah diolah\r\nmenjadi berbagai produk kecantikan, berikut manfaat kaktus :\r\n\r\n1. Menjadikan udara ruangan bebas dari polusi\r\nKaktus dapat membuat udara ruangan lebih bersih karena tumbuhan ini dapat menangkap\r\npolusi disekitarnya. Duri kaktus berfungsi untuk menangkap debu disekitar ruangan\r\n\r\n2. Meningkatkan kadar oksigen diruangan\r\nTanaman kaktus berbeda dari tanaman lain. Tanaman kaktus pada malam hari akan menyerap\r\nkarbondioksida dan melepaskan oksigen, sehingga kadar oksigen yang ada di ruangan akan\r\nmeningkat.\r\n\r\n3. Mengatasi radiasi dan gelombang elektromagnetik\r\nGelombang elektromagnetik yang dihasilkan dari computer, televisi, handphone, dan berbagai\r\nalat elektronik lainnya juga menghasilkan radiasi yang tidak baik bagi tubuh. Tanaman kaktus\r\ndapat menetralisir gelombang elektromagnetik dan menyerap radiasi yang dipaparkan oleh alat\r\nelektronik tersebut.\r\n\r\n4. Mencegah penuaan dini\r\nTanaman kaktus mengandung anti-oksidan yang melimpah, sehingga kaktus mampu mencegah\r\nmunculnya tanda-tanda penuaan dini. Kaktus juga kaya dengan vitamin E yang dapat membantu\r\nmempercepat regenerasi sel kulit. Produk kosmetik yang memiliki bahan dasar kaktus sekarang\r\nsudah ada di pasaran, biasanya berbentuk gel.\r\n\r\n5. Memperbaiki sel kulit yang rusak\r\nKandungan anti oksidan yang tinggi pada tanaman kaktus juga bisa membuat regenerasi kuliy\r\nmenjadi lebih cepat sehingga kulit akan tampak lebih sehar dan segar.\r\n\r\n6. Melawan radikal bebas\r\nRadikal bebas berasal dari radiasi sinar UV, polusi udara, dan asap rokok dapat menyebabkan\r\nkerusakan pada jaringa kulit. Molekul radikal bebas dapat dilawan dengan menggunakan\r\nantioksidan. Oleh karena itu tanaman kaktus yang kaya akan kandungan anti oksidan, flavonoid\r\ndan vitamin E dapat melawan radikal bebas\r\n\r\n7. Mengatasi gejala alergi\r\nBatang kaktus dapat digunakan untuk mengatasi gejala alergi seperti ruam dan rasa gatal.\r\nKarena kaktus memiliki kandungan flavonoid yang berfungsi untuk meredakan gejala alergi.', '2019-05-05', 'artikel kaktus.jpg');

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
  `gambar` varchar(20) NOT NULL,
  `jenis_produk` varchar(30) NOT NULL,
  `catatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`kode_produk`, `id_penjual`, `nama_produk`, `harga_produk`, `stok_produk`, `diameter`, `tinggi`, `gambar`, `jenis_produk`, `catatan`) VALUES
('KK001', '1', 'Cephalocereus Senilis', 10000, 1, 1, 1, 'P3.PNG', 'Sukulen', ''),
('KK002', '1', 'Cereus Tetragonous', 20000, 2, 2, 2, 'P4.PNG', 'Sukulen', ''),
('KK003', '1', 'Cereus Peruvianus', 30000, 3, 3, 3, 'P5.PNG', 'Sukulen', ''),
('KK004', '1', 'Echeveria Purposorum', 40000, 4, 4, 4, 'P6.PNG', 'Sukulen', ''),
('KK005', '1', 'Astrophythum Capricorne', 50000, 5, 5, 5, 'P7.PNG', 'Sukulen', ''),
('KK006', '1', 'Astrophythum Asterias', 60000, 6, 6, 6, 'P3.PNG', 'Sukulen', ''),
('KK007', '1', 'Astrophythum Myriostigma', 70000, 7, 7, 7, 'P4.PNG', 'Sukulen', ''),
('KK008', '1', 'Astrophythum Ornatum', 80000, 8, 8, 8, 'P5.PNG', 'Sukulen', ''),
('KK009', '1', 'Echinopsis Ancistrophora', 90000, 9, 9, 9, 'P6.PNG', 'Sukulen', ''),
('KK010', '1', 'Echinopsis Atacamensis', 10000, 10, 10, 10, 'P7.PNG', 'Sukulen', ''),
('KK011', '1', 'Echinopsis Chiloensis', 11000, 11, 11, 11, 'P3.PNG', 'Sukulen', ''),
('KK012', '1', 'Echinopsis Oxygona', 12000, 12, 12, 12, 'P4.PNG', 'Sukulen', ''),
('KK013', '1', 'Echinopsis Spaciana', 130001, 13, 13, 13, 'P5.PNG', 'Sukulen', ''),
('KK014', '1', 'Echinopsis Terscheckii', 14000, 14, 14, 14, 'P6.PNG', 'Sukulen', ''),
('KK015', '1', 'Trichocereus Spachianus ', 15000, 15, 15, 15, 'P5.PNG', 'Sukulen', ''),
('KK016', '1', 'Acanthocalycium Thionanthum', 16000, 16, 16, 16, 'P7.PNG', 'Sukulen', ''),
('KK017', '1', 'Echinocactus Grusonii', 17000, 17, 17, 17, 'P3.PNG', 'Sukulen', ''),
('KK018', '1', 'Aloe Aristata Cactus', 18000, 18, 18, 18, 'P4.PNG', 'Sukulen', ''),
('KK019', '1', 'Aloe Erinacea', 19000, 19, 19, 19, 'P5.PNG', 'Sukulen', ''),
('KK020', '1', 'Aloe Jucunda', 20000, 20, 20, 20, 'P6.PNG', 'Sukulen', ''),
('KK021', '1', 'Ariocarpus Confusus', 21000, 21, 21, 21, 'P7.PNG', 'Sukulen', ''),
('KK022', '1', 'Ariocarpus Fissuratus', 22000, 22, 22, 22, 'P5.PNG', 'Sukulen', '');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `kode_pesanan` char(5) NOT NULL,
  `id_pembeli` char(5) DEFAULT NULL,
  `kode_produk` char(5) DEFAULT NULL,
  `total_harga` int(10) DEFAULT NULL,
  `ongkir` int(10) DEFAULT NULL,
  `status` varchar(25) DEFAULT NULL,
  `jumlah_produk` int(3) DEFAULT NULL,
  `tanggal_beli` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`kode_pesanan`, `id_pembeli`, `kode_produk`, `total_harga`, `ongkir`, `status`, `jumlah_produk`, `tanggal_beli`) VALUES
('PES01', 'PM001', 'KK001', 145000, 10000, 'Upload Struk Bayar', 1, '2019-05-01'),
('PES02', 'PM002', 'KK002', 150000, 15000, 'Lunas', 1, '2019-05-02'),
('PES03', 'PM003', 'KK003', 135000, 10000, 'Tunggu Ongkir', 1, '2019-05-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`kode_artikel`);

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
  ADD KEY `id_pembeli` (`id_pembeli`,`kode_produk`),
  ADD KEY `kode_produk` (`kode_produk`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_penjual`) REFERENCES `penjual` (`id_penjual`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`kode_produk`) REFERENCES `produk` (`kode_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
