-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2021 at 02:20 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `nik` char(8) NOT NULL,
  `namadosen` varchar(35) NOT NULL,
  `pendidikan` varchar(40) NOT NULL,
  `keahlian` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nik`, `namadosen`, `pendidikan`, `keahlian`) VALUES
('20154237', 'Dr. Syahrur Rizki, S.Kom', 'S1 Teknik Informatika', 'Dokter Umum');

-- --------------------------------------------------------

--
-- Table structure for table `krs`
--

CREATE TABLE IF NOT EXISTS `krs` (
`id` int(4) NOT NULL,
  `nim` char(16) NOT NULL,
  `kodemk` char(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `krs`
--

INSERT INTO `krs` (`id`, `nim`, `kodemk`) VALUES
(1, '1234567890123456', 'A003'),
(2, '1234567890123455', 'A005'),
(3, '1234567890123459', 'A007'),
(4, '1234567890123457', 'A009');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` char(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `prodi` varchar(30) NOT NULL,
  `semester` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `prodi`, `semester`) VALUES
('1234567890123450', 'Saipul', 'Gebang Putih', 30),
('1234567890123451', 'Agustin', 'Keputih', 24),
('1234567890123452', 'Aisyah', 'Keputih', 23),
('1234567890123453', 'Furqon', 'Nginden Jangkungan', 40),
('1234567890123454', 'Elis', 'Gebang Putih', 26),
('1234567890123455', 'Dani', 'Semolowaru', 30),
('1234567890123456', 'Putri A', 'Gebang Putih', 24),
('1234567890123457', 'Rizki S', 'Nginden Jangkungan', 24),
('1234567890123458', 'Rina D', 'Klampis Ngasem', 20),
('1234567890123459', 'Wahyu', 'Semolowaru', 90);

-- --------------------------------------------------------

--
-- Table structure for table `mk`
--

CREATE TABLE IF NOT EXISTS `mk` (
  `kodemk` varchar(4) NOT NULL,
  `namamk` varchar(30) NOT NULL,
  `sks` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mk`
--

INSERT INTO `mk` (`kodemk`, `namamk`, `sks`) VALUES
('A003', 'Pilek', 2),
('A005', 'Panas', 2),
('A006', 'Maag', 2),
('A007', 'Greges', 2),
('A008', 'Flu', 1),
('A009', 'Flu & Pilek', 3),
('A010', 'Asam urat', 3),
('A011', 'Asam lambung', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `level`) VALUES
('1234567890123450', '068dc774f413501d0441e49f221ee75b', 'mahasiswa'),
('1234567890123451', '8f67876249165f826727dcc9c71409b0', 'mahasiswa'),
('1234567890123452', 'cc048d1af8d094c5502e7ccd4179804e', 'mahasiswa'),
('1234567890123453', 'a027390f35869e22a93971fea5f07e7c', 'mahasiswa'),
('1234567890123454', '2bb97f8fb9a42c7354b8af29459be7c0', 'mahasiswa'),
('1234567890123455', '56a91628ff64934bfd86199c1a27c714', 'mahasiswa'),
('1234567890123456', 'abeac07d3c28c1bef9e730002c753ed4', 'mahasiswa'),
('1234567890123457', '435678553195517cc8ee76c04e36bd9e', 'mahasiswa'),
('1234567890123458', 'c9cac64eb11423263a64dbdc2fc37866', 'mahasiswa'),
('1234567890123459', '549e02da1424ca9e4efed0c70328aa8b', 'mahasiswa'),
('20154237', '827ccb0eea8a706c4c34a16891f84e7b', 'dosen'),
('admin', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
('syahrurrizki', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
('user', '827ccb0eea8a706c4c34a16891f84e7b', 'mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
 ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `krs`
--
ALTER TABLE `krs`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
 ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `mk`
--
ALTER TABLE `mk`
 ADD PRIMARY KEY (`kodemk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `krs`
--
ALTER TABLE `krs`
MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
