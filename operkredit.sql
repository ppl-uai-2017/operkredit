-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: operkredit
-- ------------------------------------------------------
-- Server version	5.7.19-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `barang`
--

DROP TABLE IF EXISTS `barang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  `id_pengoper_kredit` varchar(12) NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `barang`
--

LOCK TABLES `barang` WRITE;
/*!40000 ALTER TABLE `barang` DISABLE KEYS */;
/*!40000 ALTER TABLE `barang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detail_pengambilan_kredit`
--

DROP TABLE IF EXISTS `detail_pengambilan_kredit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detail_pengambilan_kredit` (
  `id_detail_pengambilan_kredit` varchar(12) NOT NULL,
  `id_pengambilan_kredit` varchar(12) NOT NULL,
  `id_barang` varchar(12) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  PRIMARY KEY (`id_detail_pengambilan_kredit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detail_pengambilan_kredit`
--

LOCK TABLES `detail_pengambilan_kredit` WRITE;
/*!40000 ALTER TABLE `detail_pengambilan_kredit` DISABLE KEYS */;
/*!40000 ALTER TABLE `detail_pengambilan_kredit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jadwal`
--

DROP TABLE IF EXISTS `jadwal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jadwal` (
  `id_jadwal` varchar(12) NOT NULL,
  `id_pengambilan_kredit` varchar(12) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jadwal`
--

LOCK TABLES `jadwal` WRITE;
/*!40000 ALTER TABLE `jadwal` DISABLE KEYS */;
/*!40000 ALTER TABLE `jadwal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori`
--

DROP TABLE IF EXISTS `kategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori` (
  `id_kategori` varchar(12) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori`
--

LOCK TABLES `kategori` WRITE;
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `metode_pembayaran`
--

DROP TABLE IF EXISTS `metode_pembayaran`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `metode_pembayaran` (
  `id_metode_pembayaran` varchar(12) NOT NULL,
  `nama_metode_pembayaran` varchar(30) NOT NULL,
  PRIMARY KEY (`id_metode_pembayaran`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `metode_pembayaran`
--

LOCK TABLES `metode_pembayaran` WRITE;
/*!40000 ALTER TABLE `metode_pembayaran` DISABLE KEYS */;
/*!40000 ALTER TABLE `metode_pembayaran` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pengambil_kredit`
--

DROP TABLE IF EXISTS `pengambil_kredit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pengambil_kredit` (
  `id_pengambil_kredit` varchar(12) NOT NULL,
  `username` varchar(12) NOT NULL,
  PRIMARY KEY (`id_pengambil_kredit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengambil_kredit`
--

LOCK TABLES `pengambil_kredit` WRITE;
/*!40000 ALTER TABLE `pengambil_kredit` DISABLE KEYS */;
/*!40000 ALTER TABLE `pengambil_kredit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pengambilan_kredit`
--

DROP TABLE IF EXISTS `pengambilan_kredit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pengambilan_kredit` (
  `id_pengambilan_kredit` varchar(12) NOT NULL,
  `id_pengambil_kredit` varchar(12) NOT NULL,
  `id_metode_pembayaran` varchar(12) NOT NULL,
  `no_pengesahan` varchar(12) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_pengambilan_kredit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengambilan_kredit`
--

LOCK TABLES `pengambilan_kredit` WRITE;
/*!40000 ALTER TABLE `pengambilan_kredit` DISABLE KEYS */;
/*!40000 ALTER TABLE `pengambilan_kredit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pengesahan`
--

DROP TABLE IF EXISTS `pengesahan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pengesahan` (
  `no_pengesahan` varchar(12) NOT NULL,
  `id_tim_pengesahan` varchar(12) NOT NULL,
  `file_pengesahan` varchar(30) NOT NULL,
  PRIMARY KEY (`no_pengesahan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengesahan`
--

LOCK TABLES `pengesahan` WRITE;
/*!40000 ALTER TABLE `pengesahan` DISABLE KEYS */;
/*!40000 ALTER TABLE `pengesahan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pengoper_kredit`
--

DROP TABLE IF EXISTS `pengoper_kredit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pengoper_kredit` (
  `id_pengoper_kredit` varchar(12) NOT NULL,
  `username` varchar(12) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  PRIMARY KEY (`id_pengoper_kredit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengoper_kredit`
--

LOCK TABLES `pengoper_kredit` WRITE;
/*!40000 ALTER TABLE `pengoper_kredit` DISABLE KEYS */;
/*!40000 ALTER TABLE `pengoper_kredit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pengunjung`
--

DROP TABLE IF EXISTS `pengunjung`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pengunjung` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_depan` varchar(30) NOT NULL,
  `nama_belakang` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengunjung`
--

LOCK TABLES `pengunjung` WRITE;
/*!40000 ALTER TABLE `pengunjung` DISABLE KEYS */;
/*!40000 ALTER TABLE `pengunjung` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tim_pengesaha`
--

DROP TABLE IF EXISTS `tim_pengesaha`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tim_pengesaha` (
  `id_tim_pengesahan` varchar(12) NOT NULL,
  `nama_tim_pengesahan` varchar(30) NOT NULL,
  PRIMARY KEY (`id_tim_pengesahan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tim_pengesaha`
--

LOCK TABLES `tim_pengesaha` WRITE;
/*!40000 ALTER TABLE `tim_pengesaha` DISABLE KEYS */;
/*!40000 ALTER TABLE `tim_pengesaha` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(254) NOT NULL,
  `role` varchar(50) NOT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'asus','5D11339BA565BFF5D4B2137A28FE440999AF3F54980C36E6C6B76F012C28F6C5','Pengunjung');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-02 12:46:39
