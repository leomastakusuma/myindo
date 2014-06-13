-- phpMyAdmin SQL Dump
-- version 4.0.6deb1
-- http://www.phpmyadmin.net
--
-- Inang: localhost
-- Waktu pembuatan: 13 Jun 2014 pada 16.03
-- Versi Server: 5.5.35-0ubuntu0.13.10.2
-- Versi PHP: 5.5.3-1ubuntu2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `DB_Myindo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `T_Departemen`
--

CREATE TABLE IF NOT EXISTS `T_Departemen` (
  `id_departemen` int(11) NOT NULL AUTO_INCREMENT,
  `departemen` varchar(50) NOT NULL,
  PRIMARY KEY (`id_departemen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `T_Gaji`
--

CREATE TABLE IF NOT EXISTS `T_Gaji` (
  `id_gaji` int(11) NOT NULL AUTO_INCREMENT,
  `id_jabatan` int(11) NOT NULL,
  `gaji_pokok` decimal(10,0) NOT NULL,
  `tunjangan_fungsional` decimal(10,0) NOT NULL,
  `tunjangan_struktural` decimal(10,0) NOT NULL,
  `tunjangan_makan` decimal(10,0) NOT NULL,
  `tunjangan_transportasi` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id_gaji`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `T_Golongan`
--

CREATE TABLE IF NOT EXISTS `T_Golongan` (
  `id_golongan` int(11) NOT NULL AUTO_INCREMENT,
  `id_jabatan` int(11) NOT NULL,
  `golongan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_golongan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `T_Jabatan`
--

CREATE TABLE IF NOT EXISTS `T_Jabatan` (
  `id_jabatan` int(11) NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_jabatan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `T_Karyawan`
--

CREATE TABLE IF NOT EXISTS `T_Karyawan` (
  `id_Karyawan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_karyawan` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `umur` varchar(4) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `id_golongan` int(11) NOT NULL,
  PRIMARY KEY (`id_Karyawan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `T_Potongan`
--

CREATE TABLE IF NOT EXISTS `T_Potongan` (
  `Id_Potongan` int(11) NOT NULL AUTO_INCREMENT,
  `Jth` decimal(10,0) NOT NULL,
  `PPH21` decimal(10,0) NOT NULL,
  `Presensi` int(2) NOT NULL,
  PRIMARY KEY (`Id_Potongan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
