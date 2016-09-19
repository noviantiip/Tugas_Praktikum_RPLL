-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2016 at 02:54 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `koperasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `id_anggota` varchar(11) NOT NULL,
  `nama_anggota` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama_anggota`, `jenis_kelamin`, `alamat`, `no_hp`) VALUES
('0', 'Asep Mimbar', 'Perempuan', 'Komp. Cipadung Permai Jl. Permai IV No. A70', '2147483647'),
('heb 234', 'Fifi Abruchman', 'Perempuan', 'Komp. Cipadung Permai Jl. Permai IV No. A75', '2147483647'),
('heb 245', 'Novianti', 'Perempuan', 'Komp. Cipadung Permai Jl. Permai IV No. A82', '0875433');

-- --------------------------------------------------------

--
-- Table structure for table `angsuran`
--

CREATE TABLE IF NOT EXISTS `angsuran` (
  `id_anggota` varchar(11) NOT NULL,
  `nama_anggota` varchar(30) NOT NULL,
`id_angsuran` int(10) NOT NULL,
  `tanggal_angsur` date NOT NULL,
  `jumlah_pinjaman` int(11) NOT NULL,
  `jumlah_angsuran` int(11) NOT NULL,
  `jumlah_jasa` int(11) NOT NULL,
  `sisa_pinjaman` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `angsuran`
--

INSERT INTO `angsuran` (`id_anggota`, `nama_anggota`, `id_angsuran`, `tanggal_angsur`, `jumlah_pinjaman`, `jumlah_angsuran`, `jumlah_jasa`, `sisa_pinjaman`) VALUES
('0', 'Asep Mimbar', 1, '2016-03-09', 50000, 20000, 2000, 28000);

-- --------------------------------------------------------

--
-- Table structure for table `buku_anggota`
--

CREATE TABLE IF NOT EXISTS `buku_anggota` (
  `id_anggota` varchar(11) NOT NULL,
  `nama_anggota` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `simpanan_pokok` int(11) NOT NULL,
  `simpanan_wajib` int(11) NOT NULL,
  `simpanan_sukarela` int(11) NOT NULL,
  `jmlh_simpanan` int(11) NOT NULL,
  `pinjaman` int(11) NOT NULL,
  `angsuran` int(11) NOT NULL,
  `jasa` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `buku_bulanan`
--

CREATE TABLE IF NOT EXISTS `buku_bulanan` (
  `id` varchar(11) NOT NULL,
  `nama_anggota` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `simpanan_pokok` int(11) NOT NULL,
  `simpanan_wajib` int(11) NOT NULL,
  `simpanan_sukarela` int(11) NOT NULL,
  `jmlh_simpanan` int(11) NOT NULL,
  `pinjaman` int(11) NOT NULL,
  `angsuran` int(11) NOT NULL,
  `jasa` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `debet` int(11) NOT NULL,
  `kredit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengurus`
--

CREATE TABLE IF NOT EXISTS `pengurus` (
  `username` varchar(30) NOT NULL,
  `password` varchar(16) NOT NULL,
  `hak_akses` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengurus`
--

INSERT INTO `pengurus` (`username`, `password`, `hak_akses`) VALUES
('rikarustikasari', '1010', 'kolektor'),
('yayat', '1234', 'ketua');

-- --------------------------------------------------------

--
-- Table structure for table `pinjaman`
--

CREATE TABLE IF NOT EXISTS `pinjaman` (
  `id_anggota` varchar(11) NOT NULL,
  `nama_anggota` varchar(30) NOT NULL,
`id_pinjam` int(10) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `jumlah_pinjaman` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pinjaman`
--

INSERT INTO `pinjaman` (`id_anggota`, `nama_anggota`, `id_pinjam`, `tanggal_pinjam`, `jumlah_pinjaman`) VALUES
('heb 234', 'Fifi Abruchman', 1, '2016-01-01', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `simpanan`
--

CREATE TABLE IF NOT EXISTS `simpanan` (
  `id_anggota` varchar(15) NOT NULL,
  `nama_anggota` varchar(30) NOT NULL,
  `id_simpan` varchar(13) NOT NULL,
  `tanggal_simpanan` date NOT NULL,
  `jenis_simpanan` varchar(10) NOT NULL,
  `jumlah_simpanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `simpanan`
--

INSERT INTO `simpanan` (`id_anggota`, `nama_anggota`, `id_simpan`, `tanggal_simpanan`, `jenis_simpanan`, `jumlah_simpanan`) VALUES
('heb 234', 'Fifi Abruchman', '01', '0000-00-00', '3', 10000),
('heb 245', 'Novianti', '02', '2016-01-01', '3', 5000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
 ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `angsuran`
--
ALTER TABLE `angsuran`
 ADD PRIMARY KEY (`id_angsuran`);

--
-- Indexes for table `pengurus`
--
ALTER TABLE `pengurus`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pinjaman`
--
ALTER TABLE `pinjaman`
 ADD PRIMARY KEY (`id_pinjam`);

--
-- Indexes for table `simpanan`
--
ALTER TABLE `simpanan`
 ADD PRIMARY KEY (`id_simpan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `angsuran`
--
ALTER TABLE `angsuran`
MODIFY `id_angsuran` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pinjaman`
--
ALTER TABLE `pinjaman`
MODIFY `id_pinjam` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
koperasibuku_anggota