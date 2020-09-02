-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2020 at 05:41 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karikatour`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftarakun`
--

CREATE TABLE `daftarakun` (
  `id` int(4) NOT NULL,
  `nama_depan` varchar(255) NOT NULL,
  `nama_belakang` varchar(255) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `kata_sandi` varchar(255) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftarakun`
--

INSERT INTO `daftarakun` (`id`, `nama_depan`, `nama_belakang`, `tanggal_lahir`, `username`, `email`, `kata_sandi`, `date_created`) VALUES
(1, 'Juan Fernando', 'Wijaya', '0000-00-00', 'nickname', 'juanfernandow88@gmail.com', '$2y$10$2VSi1C8JIV9ehyrJKEhrI.LD5CRbBi2cDbK3z8uKqXkRm58ZjpE5i', 1597065322),
(2, 'Richie', 'Jelek', '2020-08-03', 'Richieelek', 'richie@gmail.com', '$2y$10$HxL78QFHLHJeqO/4Uui6Ku7bbJ9DXZWDxZr/v0GfMwWdONR.tAQ7m', 1597065463),
(3, 'Juan Fernando', 'Wijaya', '2020-08-05', 'juanfernandow', 'giberico88@gmail.com', '$2y$10$oWS.m6Z4Qzusw10LxI0FUuFNcDCHvLUvQO4dfB.S/oE3Fbtzhf546', 1597420759);

-- --------------------------------------------------------

--
-- Table structure for table `destinasi`
--

CREATE TABLE `destinasi` (
  `id` int(3) NOT NULL,
  `nama_paket` varchar(255) NOT NULL,
  `negara` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `lamantanpalogin` varchar(100) NOT NULL,
  `lamansetelahlogin` varchar(100) NOT NULL,
  `hargapaket` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `destinasi`
--

INSERT INTO `destinasi` (`id`, `nama_paket`, `negara`, `gambar`, `lamantanpalogin`, `lamansetelahlogin`, `hargapaket`) VALUES
(1, 'Jepang 8 Hari 7 Malam', 'Jepang', 'jepang.jpg', 'jepang', 'jepangmasuk', 560),
(2, 'Jepang 11 Hari 10 Malam', 'Jepang', 'jepang1.jpg', 'jepang1', 'jepang1masuk', 820),
(3, 'Korea 7 Hari 6 Malam', 'Korea Selatan', 'korea.jpg', 'korea', 'koreamasuk', 610),
(4, 'Korea 9 Hari 8 Malam', 'Korea Selatan', 'korea1.jpg', 'korea1', 'korea1masuk', 870),
(5, 'Malaysia 4 Hari 3 Malam', 'Malaysia', 'malaysia.jpg', 'malaysia', 'malaysiamasuk', 320),
(6, 'Singapura 3 Hari 2 Malam', 'Singapura', 'singapura.jpg', 'singapura', 'singapuramasuk', 210),
(7, 'Bali 5 Hari 4 Malam', 'Bali, Indonesia', 'bali.jpg', 'bali', 'balimasuk', 180),
(8, 'Danau Toba 3 Hari 2 Malam', 'Sumatera Utara, Indonesia', 'toba.jpg', 'toba', 'tobamasuk', 120),
(9, 'Bangkok 4 Hari 3 Malam', 'Thailand', 'bangkok.jpg', 'bangkok', 'bangkokmasuk', 330),
(10, 'Bunaken 3 Hari 2 Malam', 'Sulawesi Utara, Indonesia', 'bunaken.jpg', 'bunaken', 'bunakenmasuk', 200),
(11, 'China 7 Hari 6 Malam', 'China', 'china.jpg', 'china', 'chinamasuk', 780),
(12, 'Lombok 3 Hari 2 Malam', 'Nusa Tenggara Barat, Indonesia', 'lombok.jpg', 'lombok', 'lombokmasuk', 220),
(13, 'Lombok 4 Hari 3 Malam', 'Nusa Tenggara Barat, Indonesia', 'lombok1.jpg', 'lombok1', 'lombok1masuk', 280),
(14, 'London 8 Hari 7 Malam', 'Inggris', 'london.jpg', 'london', 'londonmasuk', 1120),
(15, 'Paris 8 Hari 7 Malam', 'Perancis', 'paris.jpg', 'paris', 'parismasuk', 1180),
(16, 'Raja Ampat 5 Hari 4 Malam', 'Papua, Indonesia', 'rajaampat.jpg', 'rajaampat', 'rajaampatmasuk', 270);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `pesanan_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pilihan_paket` varchar(128) NOT NULL,
  `waktu_pemesanan` int(11) NOT NULL,
  `tanggal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`pesanan_id`, `user_id`, `pilihan_paket`, `waktu_pemesanan`, `tanggal`) VALUES
(1, 3, '16', 1597940691, 0),
(2, 3, '2', 1598285244, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftarakun`
--
ALTER TABLE `daftarakun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destinasi`
--
ALTER TABLE `destinasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`pesanan_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftarakun`
--
ALTER TABLE `daftarakun`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `pesanan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
