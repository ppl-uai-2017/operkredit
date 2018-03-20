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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengunjung`
--

LOCK TABLES `pengunjung` WRITE;
/*!40000 ALTER TABLE `pengunjung` DISABLE KEYS */;
INSERT INTO `pengunjung` VALUES ('info@kaskus.co.id','Angga','Jakarta','1994-08-08','Laki Laki','085659818111','Lajang','Jakartaraya','Jakarta','12312','DKI Jakarta','3208130607940001','qsdsadasdasdasqe21.jpg','asdas1231adf1e.jpg','Pegawai Swasta','7500000','Ditolak'),('iqbal@ginx.co.id','Muhammad Iqbal Pratama','Kuningan','1994-07-06','Laki Laki','08562144666','Lajang','Jalan raya caracas nomor 146 kecamatan cilimus kabupaten kuningan RT. 13 RW. 04','Bekasi','45556','jawa barat','3208130607940009','20333d15d1fd39069e0d28b510495748.jpg','9e303d867d665debccc090f5ffb8eb02.jpg','Mahasiswa','3500000','Terverifikasi');
/*!40000 ALTER TABLE `pengunjung` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rumah`
--

DROP TABLE IF EXISTS `rumah`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rumah` (
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rumah`
--

LOCK TABLES `rumah` WRITE;
/*!40000 ALTER TABLE `rumah` DISABLE KEYS */;
INSERT INTO `rumah` VALUES (3,'300','2','3','2000','1','Sertifikat Hak Milik (SHM)','Jakarta','Lengkap','Jakarta','Rumah mewah mantap','9b4744f3aa6225bd27376165666ae103.jpg','73999897824bb50647238e3ec9c9168e.jpg','8d3bd877d1f47074942b5f840f5ad027.jpg','36c04ca11a8be017373f32a3979659c0.jpg','3000000','20','0','1500000','iqbalc09','Terverifikasi','Cibubur Regensi','1'),(5,'300','2','3','310','3','Sertifikat Hak Milik (SHM)','Jakarta','Lengkap','Jakarta selatan dekat Kampus ','Listrik 1300 watt, air PDAM','15b8ba75cfec1308d07e3833c61a6803.jpg','a7a78b844cf3c1684c4637db537198fb.jpg','4546431f52f7467c3245f6b45e0ff422.jpg','52c6015922fc105873570205d6d6d38b.jpg','300000000','35','0','5200000','iqbalc09','Terverifikasi','Jakarta Selatan Regensi','1'),(6,'2500','2','2','200','3','Sertifikat Hak Satuan Rumah Susun (SHSRS)','Jakarta','Lengkap','Bogor Pusat','Dekat dengan bukit, pemandangan adem ','0e64c6fa7a344c129aa79e7b06e3942e.jpg','e89f87ccc9c9e5315b0de3459a713aa1.jpg','108e7ffdd644e6104ccacc9b10f304f8.jpg','836d0ba17176169861867b53bf5ee6fd.jpg','400000000','50','0','15000000','iqbalc09','Terverifikasi','Bogor Paradise','1'),(7,'1300','2','3','700','3','Sertifikat Hak Milik (SHM)','Jakarta','Lengkap','kuningan city belakang menara jamsostek','dekat dengan halte bus, listrik 2000 watt','39235b19349d94cc3767d334fb2b9e38.jpg','2d57b91ed2d504d778468604ae182e85.jpg','7d76e1615b08c780ce8aeac597688680.jpg','512e6c34c6235c63027dbe7b9be95ccc.jpg','1000000000','10','0','10000000','asus','Terverifikasi','Kuningan City','1');
/*!40000 ALTER TABLE `rumah` ENABLE KEYS */;
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
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'asus','5D11339BA565BFF5D4B2137A28FE440999AF3F54980C36E6C6B76F012C28F6C5','Pengunjung','info@kaskus.co.id'),(2,'pengesahan','2F0DBFF91B7ED935F16BE140E90DA5AADC9A5230DC40759B316A1333F7178F02','Pengesahan','mip.mip774@gmail.com'),(5,'iqbalc09','6794217736bb4f62450cf6c8cace0162b072c945c2e4cbda369c918694df789a','Pengunjung','iqbal@ginx.co.id');
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

-- Dump completed on 2017-11-16 13:40:23
