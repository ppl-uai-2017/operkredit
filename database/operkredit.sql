-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 05 Nov 2017 pada 17.38
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
-- Struktur dari tabel `detail_pengambilan_kredit`
--

CREATE TABLE IF NOT EXISTS `detail_pengambilan_kredit` (
  `id_detail_pengambilan_kredit` varchar(12) NOT NULL,
  `id_pengambilan_kredit` varchar(12) NOT NULL,
  `id_rumah` varchar(12) NOT NULL,
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
-- Struktur dari tabel `pengesahan`
--

CREATE TABLE IF NOT EXISTS `pengesahan` (
  `no_pengesahan` varchar(12) NOT NULL,
  `file_pengesahan` varchar(30) NOT NULL,
  PRIMARY KEY (`no_pengesahan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengunjung`
--

CREATE TABLE IF NOT EXISTS `pengunjung` (
  `email` varchar(255) NOT NULL,
  `nama_lengkap` varchar(45) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `status_pernikahan` varchar(30) NOT NULL,
  `alamat` longtext NOT NULL,
  `kota` varchar(45) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `file_ktp` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `pekerjaan` varchar(110) NOT NULL,
  `gaji` varchar(100) NOT NULL,
  `verifikasi` varchar(60) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pengunjung`
--

INSERT INTO `pengunjung` (`email`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `no_hp`, `status_pernikahan`, `alamat`, `kota`, `kode_pos`, `provinsi`, `no_ktp`, `file_ktp`, `foto`, `pekerjaan`, `gaji`, `verifikasi`) VALUES
('iqbal@ginx.co.id', 'Muhammad Iqbal Pratama', 'Kuningan', '1994-07-06', 'Laki Laki', '08562144666', 'Lajang', 'Jalan raya caracas nomor 146 kecamatan cilimus kabupaten kuningan RT. 13 RW. 04', 'Bekasi', '45556', 'jawa barat', '3208130607940009', '20333d15d1fd39069e0d28b510495748.jpg', '9e303d867d665debccc090f5ffb8eb02.jpg', 'Mahasiswa', '3500000', 'Terverifikasi'),
('umiyati777@gmail.com', 'umiyati W', 'Bekasi', '1999-11-01', 'Perempuan', '09736917641', 'Lajang', 'Jalan lauser', 'Jakarta Selatan', '727181', 'Jawa Barat', '6349573169765491', 'e2ff0e706cde2d1080f4cd8261d4cc59.jpg', '01717baeec93589208dad86fe7c8e689.jpg', 'Mahasiswa', '7000000', 'Menunggu'),
('umiyati@gmail.com', 'umiyati', 'Bekasi', '1999-11-30', 'Perempuan', '089721836713', 'Kawin', 'kampung bogor', 'Bekasi', '21710', 'Jawa Barat', '', '', '', '', '', 'Terverifikasi'),
('umiyati@if.uai.ac.id', 'umiyatiSR', 'Bekasi', '1999-11-18', 'Perempuan', '0897546245', 'Lajang', 'Kampung Bogor', 'Jakarta', '297349', 'Jawa Barat', '471479817491', '990ed5c28e50dffdd13d6f349413afa7.png', '', 'Mahasiswa', '5000000', 'Terverifikas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rumah`
--

CREATE TABLE IF NOT EXISTS `rumah` (
  `idrumah` int(11) NOT NULL AUTO_INCREMENT,
  `luas_tanah` varchar(45) NOT NULL,
  `lantai` varchar(45) NOT NULL,
  `kamar_mandi` varchar(45) NOT NULL,
  `luas_bangunan` varchar(45) NOT NULL,
  `kamar` varchar(45) NOT NULL,
  `sertifikasi` varchar(45) NOT NULL,
  `kota` varchar(45) NOT NULL,
  `dokumen` varchar(45) NOT NULL,
  `alamat` longtext NOT NULL,
  `deskripsi` longtext NOT NULL,
  `foto1` varchar(100) NOT NULL,
  `foto2` varchar(100) NOT NULL,
  `foto3` varchar(100) NOT NULL,
  `foto4` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `total_cicilan` varchar(100) NOT NULL,
  `cicilan_ke` varchar(100) NOT NULL,
  `cicilan_perbulan` varchar(100) NOT NULL,
  `pengoper_kredit` varchar(150) NOT NULL,
  `status` varchar(45) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `stok` varchar(45) NOT NULL,
  PRIMARY KEY (`idrumah`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `rumah`
--

INSERT INTO `rumah` (`idrumah`, `luas_tanah`, `lantai`, `kamar_mandi`, `luas_bangunan`, `kamar`, `sertifikasi`, `kota`, `dokumen`, `alamat`, `deskripsi`, `foto1`, `foto2`, `foto3`, `foto4`, `harga`, `total_cicilan`, `cicilan_ke`, `cicilan_perbulan`, `pengoper_kredit`, `status`, `judul`, `stok`) VALUES
(3, '500', '2', '5', '400', '7', 'Akta Jual Beli (AJB)', 'Bekasi', 'Lengkap', 'Kampung Bogor gang pesor', 'rumah dekat dengan kebun kelapa dan musholah', '054c82b0b144cc769afe2c1d8cd1515a.jpg', '014725ff71b796d2d49cc60733d74581.jpg', '069e04f6d8b54e0baccb28817cfaa33b.jpg', '3989874f142d2b355c29de34a2e38656.jpg', '3000000000', '120', '70', '25000000', 'ummy', 'Terverifikasi', 'Hunian Bekasi', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(254) NOT NULL,
  `role` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`iduser`, `username`, `password`, `role`, `email`) VALUES
(1, 'asus', '5D11339BA565BFF5D4B2137A28FE440999AF3F54980C36E6C6B76F012C28F6C5', 'Pengunjung', 'asassins@y7mail.com'),
(2, 'pengesahan', '2F0DBFF91B7ED935F16BE140E90DA5AADC9A5230DC40759B316A1333F7178F02', 'Pengesahan', 'mip.mip774@gmail.com'),
(4, 'blinkbink', 'f43625b5e81adabd65d9b8d64d20924b4579e479549a0ba0c9bbee3eb94aa022', 'Pengunjung', 'tentacle77@yahoo.com'),
(5, 'iqbalc09', '6794217736bb4f62450cf6c8cace0162b072c945c2e4cbda369c918694df789a', 'Pengunjung', 'iqbal@ginx.co.id'),
(6, 'ummy', 'a1dd395c19f3a1f7ff0e6bfe3ee6028e4373b41085a6da776ab02a8baf129abb', 'Pengunjung', 'umiyati@gmail.com'),
(7, 'umy78', '76f3c33f69823b51bf2e6cf8f4900fa724e992810378e30183e67d11a4a33262', 'Pengunjung', 'umiyati@if.uai.ac.id'),
(8, 'miamia', '03fd52c136b651f235b8e56e4c68c41898197bb30a90a1d74fabde4581d9800a', 'Pengunjung', 'umiyati777@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
