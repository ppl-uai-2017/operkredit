-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30 Okt 2017 pada 05.24
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `operkredit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
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
  `id_pengoper_kredit` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pengambilan_kredit`
--

CREATE TABLE `detail_pengambilan_kredit` (
  `id_detail_pengambilan_kredit` varchar(12) NOT NULL,
  `id_pengambilan_kredit` varchar(12) NOT NULL,
  `id_barang` varchar(12) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` varchar(12) NOT NULL,
  `id_pengambilan_kredit` varchar(12) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` varchar(12) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `metode_pembayaran`
--

CREATE TABLE `metode_pembayaran` (
  `id_metode_pembayaran` varchar(12) NOT NULL,
  `nama_metode_pembayaran` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengambilan_kredit`
--

CREATE TABLE `pengambilan_kredit` (
  `id_pengambilan_kredit` varchar(12) NOT NULL,
  `id_pengambil_kredit` varchar(12) NOT NULL,
  `id_metode_pembayaran` varchar(12) NOT NULL,
  `no_pengesahan` varchar(12) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengambil_kredit`
--

CREATE TABLE `pengambil_kredit` (
  `id_pengambil_kredit` varchar(12) NOT NULL,
  `username` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengesahan`
--

CREATE TABLE `pengesahan` (
  `no_pengesahan` varchar(12) NOT NULL,
  `id_tim_pengesahan` varchar(12) NOT NULL,
  `file_pengesahan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengoper_kredit`
--

CREATE TABLE `pengoper_kredit` (
  `id_pengoper_kredit` varchar(12) NOT NULL,
  `username` varchar(12) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `provinsi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengunjung`
--

CREATE TABLE `pengunjung` (
  `username` varchar(12) NOT NULL,
  `nama_depan` varchar(30) NOT NULL,
  `nama_belakang` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `no_hp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tim_pengesaha`
--

CREATE TABLE `tim_pengesaha` (
  `id_tim_pengesahan` varchar(12) NOT NULL,
  `nama_tim_pengesahan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `detail_pengambilan_kredit`
--
ALTER TABLE `detail_pengambilan_kredit`
  ADD PRIMARY KEY (`id_detail_pengambilan_kredit`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  ADD PRIMARY KEY (`id_metode_pembayaran`);

--
-- Indexes for table `pengambilan_kredit`
--
ALTER TABLE `pengambilan_kredit`
  ADD PRIMARY KEY (`id_pengambilan_kredit`);

--
-- Indexes for table `pengambil_kredit`
--
ALTER TABLE `pengambil_kredit`
  ADD PRIMARY KEY (`id_pengambil_kredit`);

--
-- Indexes for table `pengesahan`
--
ALTER TABLE `pengesahan`
  ADD PRIMARY KEY (`no_pengesahan`);

--
-- Indexes for table `pengoper_kredit`
--
ALTER TABLE `pengoper_kredit`
  ADD PRIMARY KEY (`id_pengoper_kredit`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tim_pengesaha`
--
ALTER TABLE `tim_pengesaha`
  ADD PRIMARY KEY (`id_tim_pengesahan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
