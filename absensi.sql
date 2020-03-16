-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2020 at 01:24 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `Nip` int(8) NOT NULL,
  `Tanggal` date NOT NULL,
  `Jam_masuk` time NOT NULL,
  `Jam_keluar` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`Nip`, `Tanggal`, `Jam_masuk`, `Jam_keluar`) VALUES
(82746893, '2020-03-16', '07:30:00', '15:00:00'),
(84088378, '2020-03-16', '07:15:59', '15:15:00'),
(86486624, '2020-03-16', '07:00:00', '15:00:00'),
(86726522, '2020-02-16', '11:15:49', '11:15:49');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Nip` int(8) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Nip`, `Username`, `Password`, `Nama`) VALUES
(9867645, 'Amni', '12345', 'Amni nikmah');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `Nip` int(8) NOT NULL,
  `Nama_karyawan` varchar(20) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Telp` varchar(15) NOT NULL,
  `Jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`Nip`, `Nama_karyawan`, `Alamat`, `Telp`, `Jabatan`) VALUES
(82746893, 'Muhammad M.', 'Jepara', '089736457212', 'Sekertaris'),
(84088378, 'Ayu P.', 'Jakarta', '089365442124', 'Resepsionis'),
(86486624, 'Agus P.', 'Solo', '085612564345', 'Direktur'),
(86486625, '', '', '', ''),
(86486626, '', '', '', ''),
(86486627, '', '', '', ''),
(86486628, '', '', '', ''),
(86486629, '', '', '', ''),
(86726522, '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`Nip`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Nip`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`Nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `Nip` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88973628;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Nip` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9867646;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `Nip` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86726523;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
