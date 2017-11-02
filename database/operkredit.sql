-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 02 Nov 2017 pada 09.52
-- Versi Server: 5.6.14
-- Versi PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `operkredit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id_barang` varchar(12) NOT NULL,
  `id_kategori` varchar(12) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `warna` varchar(15) NOT NULL,
  `berat` varchar(10) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga_dp_kembali` int(11) NOT NULL,
  `harga_cicilan` int(11) NOT NULL,
  `sisa_cicilan` varchar(20) NOT NULL,
  `id_pengoper_kredit` varchar(12) NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pengambilan_kredit`
--

CREATE TABLE IF NOT EXISTS `detail_pengambilan_kredit` (
  `id_detail_pengambilan_kredit` varchar(12) NOT NULL,
  `id_pengambilan_kredit` varchar(12) NOT NULL,
  `id_barang` varchar(12) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  PRIMARY KEY (`id_detail_pengambilan_kredit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `id_jadwal` varchar(12) NOT NULL,
  `id_pengambilan_kredit` varchar(12) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` varchar(12) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `metode_pembayaran`
--

CREATE TABLE IF NOT EXISTS `metode_pembayaran` (
  `id_metode_pembayaran` varchar(12) NOT NULL,
  `nama_metode_pembayaran` varchar(30) NOT NULL,
  PRIMARY KEY (`id_metode_pembayaran`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengambilan_kredit`
--

CREATE TABLE IF NOT EXISTS `pengambilan_kredit` (
  `id_pengambilan_kredit` varchar(12) NOT NULL,
  `id_pengambil_kredit` varchar(12) NOT NULL,
  `id_metode_pembayaran` varchar(12) NOT NULL,
  `no_pengesahan` varchar(12) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_pengambilan_kredit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengambil_kredit`
--

CREATE TABLE IF NOT EXISTS `pengambil_kredit` (
  `id_pengambil_kredit` varchar(12) NOT NULL,
  `username` varchar(12) NOT NULL,
  PRIMARY KEY (`id_pengambil_kredit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengesahan`
--

CREATE TABLE IF NOT EXISTS `pengesahan` (
  `no_pengesahan` varchar(12) NOT NULL,
  `id_tim_pengesahan` varchar(12) NOT NULL,
  `file_pengesahan` varchar(30) NOT NULL,
  PRIMARY KEY (`no_pengesahan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengoper_kredit`
--

CREATE TABLE IF NOT EXISTS `pengoper_kredit` (
  `id_pengoper_kredit` varchar(12) NOT NULL,
  `username` varchar(12) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  PRIMARY KEY (`id_pengoper_kredit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengunjung`
--

CREATE TABLE IF NOT EXISTS `pengunjung` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_depan` varchar(50) DEFAULT NULL,
  `nama_belakang` varchar(500) DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_hp` varchar(12) NOT NULL,
  `status_pernikahan` varchar(30) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `kota` varchar(100) DEFAULT NULL,
  `kode_pos` varchar(12) DEFAULT NULL,
  `provinsi` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tim_pengesaha`
--

CREATE TABLE IF NOT EXISTS `tim_pengesaha` (
  `id_tim_pengesahan` varchar(12) NOT NULL,
  `nama_tim_pengesahan` varchar(30) NOT NULL,
  PRIMARY KEY (`id_tim_pengesahan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(254) NOT NULL,
  `role` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`iduser`, `username`, `password`, `role`) VALUES
(1, 'asus', '5D11339BA565BFF5D4B2137A28FE440999AF3F54980C36E6C6B76F012C28F6C5', 'Pengunjung');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
