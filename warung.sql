-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2018 at 09:07 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warung`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_menu`
--

CREATE TABLE `jenis_menu` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(30) NOT NULL,
  `ket_jenis` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_menu`
--

INSERT INTO `jenis_menu` (`id_jenis`, `nama_jenis`, `ket_jenis`) VALUES
(1, 'makanan kecil', 'biasanya sebagai pelangkap'),
(2, 'makanan berat', 'untuk makan'),
(3, 'minuman dingin', 'cocok agar segar'),
(4, 'minuman hangat', 'untuk menghangaykan tubuh');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` varchar(6) NOT NULL,
  `nama_karyawan` varchar(40) NOT NULL,
  `password_karyawan` varchar(100) NOT NULL,
  `telp_karyawan` varchar(14) NOT NULL,
  `alamat_karyawan` varchar(60) NOT NULL,
  `lahir_karyawan` date NOT NULL,
  `tgl_kerja_karyawan` date NOT NULL,
  `foto_karyawan` varchar(100) NOT NULL,
  `email_karyawan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_karyawan`, `password_karyawan`, `telp_karyawan`, `alamat_karyawan`, `lahir_karyawan`, `tgl_kerja_karyawan`, `foto_karyawan`, `email_karyawan`) VALUES
('SK001', 'suparto', 'suparto', '083878987676', 'jalan hadi lamongan', '1998-12-01', '2018-01-01', 'aku.jpg', 'suparto@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `meja`
--

CREATE TABLE `meja` (
  `nomor_meja` int(11) NOT NULL,
  `kapasitas_meja` int(2) NOT NULL,
  `letak meja` varchar(300) NOT NULL,
  `foto_meja` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(5) NOT NULL,
  `nama_menu` varchar(60) DEFAULT NULL,
  `foto_menu` varchar(100) NOT NULL,
  `harga_menu` int(9) DEFAULT NULL,
  `ket_menu` varchar(200) DEFAULT NULL,
  `jenis_menu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `foto_menu`, `harga_menu`, `ket_menu`, `jenis_menu`) VALUES
(5, 'Dendeng Balado', 'm1.jpg', 13000, 'Dendeng Balado kami memiliki cita rasa yang khas dengan paduan resep dan bumbu yang sempurna akan memanjakan lidah anda.', 1),
(6, 'Gulai Tunjang Kikil', 'm2.jpg', 15000, 'Gulai Tunjang - Kikil adalah masakan khas Sumatera Barat yang rasanya menggugah selera.', 2),
(7, 'Kepala Kakap', 'm3.jpg', 20000, 'Gulai Kepala Kakap masih menjadi favorit dari pengunjung yang menikmati santapan di Restoran atau Rumah Makan Minangkabau. Dengan rasanya yang dan dimasak dengan santan khas masakan padang.', 1),
(8, 'Gulai Ayam', 'm4.jpg', 11000, 'Gulai Ayam adalah makanan yang identik dengan perayaan hari besar keagamaan seperti lebaran dan umum dijumpai di Restoran Padang.', 1),
(9, 'Es Campur', 'm5.jpg', 5000, 'Minuman khas Indonesia yang banyak digunakan sebagai sajian penutup dan dapat dijumpai di beberapa daerah di Indonesia dengan berbagai bahan pembuatnya.', 3),
(10, 'Milk Tea', 'm6.jpg', 4000, 'salah satu jenis minuman teh yang populer belakangan ini, terutama jenis milk tea asal taiwan yang seringkali menggunakan bubble :', 3),
(11, 'Wedang Ronde', 'm7.jpg', 3000, 'Kalau yang satu ini adalah minuman hangat khas Solo dan Salatiga. Air rebusan jahe, gula, pandan dan serai dihidangkan di dalam gelas.', 4);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(5) NOT NULL,
  `nama_pelanggan` varchar(200) NOT NULL,
  `email_pelanggan` varchar(100) NOT NULL,
  `password_pelanggan` varchar(25) NOT NULL,
  `telp_pelanggan` varchar(14) NOT NULL,
  `alamat_pelanggan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `email_pelanggan`, `password_pelanggan`, `telp_pelanggan`, `alamat_pelanggan`) VALUES
(1, 'iqbal', 'iqbal@gmail.com', 'iqbal', '083850187425', ''),
(2, 'xzscdvfbg', 'aku@gmail.com', '', 'asdfgazsdfg', 'zsxcfvgb'),
(3, 'ASDF', 'aku@gmail.com', 'okthapian', 'ASDF', 'ASDFG'),
(4, 'asdf', 'aku@gmail.com', 'okthapian', 'asdfgh', 'xcvn'),
(5, 'qwert', 'wert@gmail.com', 'qwerf', 'werg', 'werf'),
(6, 'aku', 'aku@gmail.com', 'aku', '083809898789', 'sekaran');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_menu`
--
ALTER TABLE `jenis_menu`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `meja`
--
ALTER TABLE `meja`
  ADD PRIMARY KEY (`nomor_meja`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `jenis_menu` (`jenis_menu`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_menu`
--
ALTER TABLE `jenis_menu`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `meja`
--
ALTER TABLE `meja`
  MODIFY `nomor_meja` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`jenis_menu`) REFERENCES `jenis_menu` (`id_jenis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
