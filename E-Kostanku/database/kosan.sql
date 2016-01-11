-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 10. Januari 2016 jam 11:47
-- Versi Server: 5.5.8
-- Versi PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kosan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kosan`
--

CREATE TABLE IF NOT EXISTS `kosan` (
  `kd_kos` varchar(8) NOT NULL,
  `nm_kos` varchar(50) NOT NULL,
  `pemilik` varchar(7) NOT NULL,
  `wilayah` varchar(6) NOT NULL,
  `fasilitas` text NOT NULL,
  `gambar` varchar(70) NOT NULL,
  `stts` enum('1','2','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kosan`
--

INSERT INTO `kosan` (`kd_kos`, `nm_kos`, `pemilik`, `wilayah`, `fasilitas`, `gambar`, `stts`) VALUES
('1', 'echo', 'USR-001', 'wil536', 'kompor', 'gambar/1709DSC09532.JPG', '1'),
('1', 'sumanto indahaus', 'USR-001', 'wil179', 'daging manusia segar', 'gambar/610Koala.jpg', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `masuk`
--

CREATE TABLE IF NOT EXISTS `masuk` (
  `id_pengguna` varchar(20) NOT NULL,
  `pengguna` varchar(50) NOT NULL,
  `sandi` varchar(50) NOT NULL,
  `level` enum('1','2','3') NOT NULL,
  PRIMARY KEY (`id_pengguna`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `masuk`
--

INSERT INTO `masuk` (`id_pengguna`, `pengguna`, `sandi`, `level`) VALUES
('amd1', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1'),
('pem2594', 'agung', 'e59cd3ce33a68f536c19fedb82a7936f', '2'),
('pem3922', 'indra', 'e24f6e3ce19ee0728ff1c443e4ff488d', '2'),
('pem4896', '123', '202cb962ac59075b964b07152d234b70', '2'),
('pem7300', 'echo', 'cbb11ed87dc8a95d81400c7f33c7c171', '2'),
('pem7681', '12', '13', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilik`
--

CREATE TABLE IF NOT EXISTS `pemilik` (
  `id_pemilik` varchar(9) NOT NULL,
  `nm_pemilik` varchar(50) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(12) NOT NULL,
  `usr_nm` varchar(30) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  `stts` int(1) NOT NULL,
  PRIMARY KEY (`id_pemilik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemilik`
--

INSERT INTO `pemilik` (`id_pemilik`, `nm_pemilik`, `no_ktp`, `jk`, `alamat`, `telp`, `usr_nm`, `pwd`, `stts`) VALUES
('pem2594', 'asdsa', 'asdsad', '1', 'dsadasdsad', 'asdsadas', 'agung', 'agung', 1),
('pem3922', 'indra', '13243245154', '1', 'semarang', '34354', 'indra', 'indra', 1),
('pem4896', 'sugeng', '764728562483756783', '1', 'kudus', '343434', '123', '123', 1),
('pem7300', 'echo', '112312323', '1', 'asdsadsad', '12234444', 'echo', 'echo', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `wilayah`
--

CREATE TABLE IF NOT EXISTS `wilayah` (
  `kd_wil` varchar(6) NOT NULL,
  `j_wil` varchar(2) NOT NULL,
  `nm_wil` varchar(50) NOT NULL,
  PRIMARY KEY (`kd_wil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wilayah`
--

INSERT INTO `wilayah` (`kd_wil`, `j_wil`, `nm_wil`) VALUES
('wil1', '1', 'Udinus'),
('wil176', '1', 'Udinus'),
('wil179', '3', 'gtg'),
('wil201', '1', 'Udinus'),
('wil219', '1', 'Udinus'),
('wil40', '1', 'unidip'),
('wil536', '1', 'unidip'),
('wil594', '1', 'Udinus'),
('wil60', '1', 'Udinus'),
('wil734', '1', 'Udinus'),
('wil737', '1', 'Udinus'),
('wil823', '1', 'unnes'),
('wil945', '1', 'Udinus');
