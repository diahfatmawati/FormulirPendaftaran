-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2020 at 07:33 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(4) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'diahfatmawati_', 'mentaripagi');

-- --------------------------------------------------------

--
-- Table structure for table `buku_tamu`
--

CREATE TABLE `buku_tamu` (
  `ID_BT` int(10) UNSIGNED NOT NULL,
  `NAMA` varchar(200) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `ISI` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(4) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `jKel` varchar(10) DEFAULT NULL,
  `Email` varchar(40) DEFAULT NULL,
  `Alamat` varchar(50) DEFAULT NULL,
  `Kota` varchar(20) DEFAULT NULL,
  `Pesan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `Nama`, `jKel`, `Email`, `Alamat`, `Kota`, `Pesan`) VALUES
(1, 'Apriliana Latifah Hanum', 'Perempuan', 'aprhanum@gmail.com', 'Jalan Kenjeran', 'Surabaya', 'Mahasiswa semester 4 Jurusan Sistem Informasi Fakultas Ilmu Komputer UPN \"Veteran\" Jawa Timur.'),
(2, 'Fariza Nanda Sabila', 'Perempuan', 'fanasabila@gmail.com', 'Jalan Sedati', 'Sidoarjo', 'Mahasiswa semester 4 Jurusan Sistem Informasi Fakultas Ilmu Komputer UPN \"Veteran\" Jawa Timur.'),
(3, 'Firhan Adam Zulfian', 'Perempuan', 'zulfianadam@gmail.com', 'Pondok Benowo Indah', 'Surabaya', 'Mahasiswa semester 4 Jurusan Teknik Kimia Fakultas Teknik UPN \"Veteran\" Jawa Timur.'),
(4, 'M. Shaifullah Indrawanto', 'laki-laki', 'm.indrawanto@gmail.com', 'Jalan Kota Baru Driyorejo', 'Gresik', 'Mahasiswa semester 4 Jurusan Teknik Lingkungan Fakultas Teknik UPN \"Veteran\" Jawa Timur.'),
(5, 'Tiara Karunia Miranti', 'Perempuan', 'ayatiara28@gmail.com', 'Jalan Raya Lamongan', 'Lamongan', 'Mahasiswa semester 4 Jurusan Sistem Informasi Fakultas Ilmu Komputer UPN \"Veteran\" Jawa Timur.');

-- --------------------------------------------------------

--
-- Table structure for table `liga`
--

CREATE TABLE `liga` (
  `id` int(6) UNSIGNED NOT NULL,
  `kode` varchar(3) NOT NULL,
  `negara` varchar(30) NOT NULL,
  `champion` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `liga`
--

INSERT INTO `liga` (`id`, `kode`, `negara`, `champion`) VALUES
(1, 'Jer', 'Jerman', 4),
(2, 'Spa', 'Spanyol', 3),
(3, 'Eng', 'English', 3);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `pass`) VALUES
(1, 'ariyananda_@gmail.com', 'ariyana00'),
(2, 'bryan_lee@gmail.com', 'leebryan06'),
(3, 'dream.lavina@gmail.com', '12lavina00'),
(4, 'marsha_vella@yahoo.co.id', 'marsha1978'),
(5, 'maudymarissa5@gmail.com', 'marissa5'),
(6, 'zahra_alia@gmail.com', 'aliazahra12'),
(7, 'diah_fatmawati@ymail.com', 'diahfatma_00'),
(8, 'elvarida_muala@gmail.com', 'mualala11'),
(9, 'permanaputraibu@yahoo.co.id', 'putraibu1'),
(10, 'cantika_putriayu@gmail.com', 'cantikaayu2');

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `jeniskelamin` varchar(40) NOT NULL,
  `nisn` int(15) NOT NULL,
  `nik` int(15) NOT NULL,
  `tempatlahir` varchar(40) NOT NULL,
  `tanggallahir` varchar(40) NOT NULL,
  `akta` int(15) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `kewarganegaraan` varchar(30) NOT NULL,
  `berkebutuhankhusus` varchar(60) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `rt` int(11) NOT NULL,
  `rw` int(11) NOT NULL,
  `dusun` varchar(40) NOT NULL,
  `kelurahan` varchar(40) NOT NULL,
  `kecamatan` varchar(40) NOT NULL,
  `kodepos` int(11) NOT NULL,
  `lintang` varchar(40) NOT NULL,
  `bujur` varchar(40) NOT NULL,
  `tempattinggal` varchar(50) NOT NULL,
  `transportasi` varchar(40) NOT NULL,
  `nokks` int(15) NOT NULL,
  `anak` int(11) NOT NULL,
  `penerima` varchar(30) NOT NULL,
  `nokps` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`id`, `tanggal`, `namalengkap`, `jeniskelamin`, `nisn`, `nik`, `tempatlahir`, `tanggallahir`, `akta`, `agama`, `kewarganegaraan`, `berkebutuhankhusus`, `alamat`, `rt`, `rw`, `dusun`, `kelurahan`, `kecamatan`, `kodepos`, `lintang`, `bujur`, `tempattinggal`, `transportasi`, `nokks`, `anak`, `penerima`, `nokps`) VALUES
(1, '10 April 2020', 'Maria Selena', 'Perempuan', 411202001, 123456789, 'Yogyakarta', '20 April 2002', 200420, 'Budha', 'WNI', 'tidak', 'Jalan Malioboro No 12', 4, 1, 'Malio', 'Kerta', 'Kerta', 10212, '14 LU', '30 BT', 'Orang Tua', 'Mobil', 1234567890, 2, 'Ya', 1010201),
(2, '10 April 2020', 'Alex Potter', 'Laki-laki', 411202002, 234567890, 'Surabaya', '1 Juli 2002', 200401, 'Islam', 'WNI', 'tidak', 'Pondok Benowo Indah', 1, 1, 'Benowo', 'Sambikerep', 'Tandes', 20212, '15 LU', '30 BT', 'Orang Tua', 'Mobil', 987654321, 1, 'Ya', 1010203),
(3, '11 April 2020', 'Kenzo Hadid', 'Laki-laki', 411202003, 345678901, 'Surabaya', '31 Januari 2002', 200231, 'Islam', 'WNI', 'tidak', 'Jalan Lontar', 4, 2, 'Lontar Baru', 'Lontar', 'Sambikerep', 20216, '15 LU', '30 BT', 'Orang Tua', 'Kendaraan pribadi', 123456789, 1, 'Ya', 1010202),
(4, '11 April 2020', 'Ariana Grande', 'Perempuan', 411202004, 35783178, 'Surabaya', '19 Juli 2000', 200219, 'Islam', 'WNI', 'tidak', 'Pondok Benowo Indah', 2, 2, 'Benowo', 'Sambikerep', 'Tandes', 20212, '15 LU', '30 BT', 'Orang Tua', 'Kendaraan pribadi', 123456780, 3, 'Ya', 1010204),
(5, '12 April 2020', 'Almira Ose', 'Perempuan', 411202005, 1234567890, 'Surabaya', '26 Mei 2002', 200226, 'Islam', 'WNI', 'tidak', 'Jalan Kerta Jaya', 1, 2, 'Kerta', 'Kerta', 'Kertajaya', 20213, '15 LU', '30 BT', 'Orang Tua', 'Kendaraan pribadi', 987654321, 2, 'Ya', 1010205);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  ADD PRIMARY KEY (`ID_BT`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `liga`
--
ALTER TABLE `liga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  MODIFY `ID_BT` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `liga`
--
ALTER TABLE `liga`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
