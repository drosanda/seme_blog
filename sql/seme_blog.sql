-- MariaDB dump 10.17  Distrib 10.4.11-MariaDB, for osx10.10 (x86_64)
--
-- Host: localhost    Database: seme_blog
-- ------------------------------------------------------
-- Server version	10.4.11-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `b_kategori`
--

DROP TABLE IF EXISTS `b_kategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `b_kategori` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `jenis` varchar(16) DEFAULT NULL,
  `nama` varchar(77) NOT NULL,
  `slug` varchar(77) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `b_kategori`
--

LOCK TABLES `b_kategori` WRITE;
/*!40000 ALTER TABLE `b_kategori` DISABLE KEYS */;
INSERT INTO `b_kategori` VALUES (1,'kategori','admin cendol','admin-cendol'),(2,'kategori','Tips & Trick','tips-and-trick'),(3,'kategori','Items','items'),(4,'tahun','2021','2021'),(5,'genre','Sci-fi','sci-fi');
/*!40000 ALTER TABLE `b_kategori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `b_user`
--

DROP TABLE IF EXISTS `b_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `b_user` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `nama` varchar(44) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `b_user`
--

LOCK TABLES `b_user` WRITE;
/*!40000 ALTER TABLE `b_user` DISABLE KEYS */;
INSERT INTO `b_user` VALUES (1,'Egi'),(2,'Nuri'),(3,'Andhika'),(4,'Sandi'),(5,'Daeng');
/*!40000 ALTER TABLE `b_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c_konten`
--

DROP TABLE IF EXISTS `c_konten`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `c_konten` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `b_user_id` int(1) DEFAULT NULL,
  `b_kategori_id` int(3) NOT NULL,
  `b_kategori_id_tahun` int(3) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `c_konten_id` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `b_kategori_id` (`b_kategori_id`),
  KEY `c_konten_id` (`c_konten_id`),
  KEY `b_user_id` (`b_user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c_konten`
--

LOCK TABLES `c_konten` WRITE;
/*!40000 ALTER TABLE `c_konten` DISABLE KEYS */;
INSERT INTO `c_konten` VALUES (1,1,1,4,'Lorem lipsum dolor sit amet','<h3>jbasjdbakjsbdkasd</h3>\r\n\r\n<h1><em><strong>askldnaksdnlkasd</strong></em><br />\r\nkasdkaknsd</h1>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Where does it come from?</h2>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ibu pergi kepasar!</p>\r\n',NULL),(2,2,1,4,'','PErtamax!!!!!',1),(3,3,1,1,'Amankan Upper Bracket TI10, T1 Jumpa \"Raja Terakhir\"','<p>Sempat mengalami kekalahan beruntun di dua laga pertama <strong>The International 10</strong> kontra Invictus Gaming dan Evil Geniuses, <strong>T1</strong> mencicipi kemenangan di match berat lawan VP. Sayangnya, momentum tersebut tak berlangsung lama karena sang juara bertahan TI menanti di match keempat mereka dan memberi kekalahan ketiga untuk T1.</p>\r\n<p>Fans mulai banyak yang meragukan nasib T1 di TI10, mereka sudah diambang gugur duluan dari fase group stage. Namun, tanpa disangka Xepher-Whitemon serta ketiga pemain T1 lain mampu menyapu bersih empat pertandingan tersisa lawan Aster, Alliance, Undying dan Thunder Predator. 4 kemenangan tersebut, plus bantuan dari tim Undying yang mengalahkan Evil Geniuses membuat T1 masuk ke upper bracket di main event mendatang. Cuma, apes bagi T1 karena akan menghadapi \"Raja Terakhir\"<strong> PSG.LGD</strong>!</p>',NULL),(4,4,3,1,'Doctor Strange 2','On this IMDbrief - presented by USAA - we break down the Good, the Bad, and the Mad, plus everything else we know about Marvel\'s \'Doctor Strange in the Multiverse of Madness\' (2022).',NULL),(5,5,1,1,'Stroy Line','On this IMDbrief - presented by USAA - we break down the Good, the Bad, and the Mad, plus everything else we know about Marvel\'s \'Doctor Strange in the Multiverse of Madness\' (2022).',NULL),(6,3,1,4,'Keduaxxxx','Keduaxxxx',1),(7,1,1,1,'','Ketigaxxxx',1),(8,4,1,1,'','Keempats',1);
/*!40000 ALTER TABLE `c_konten` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-10-13  9:59:54
