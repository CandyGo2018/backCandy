-- MySQL dump 10.13  Distrib 5.7.24, for Linux (x86_64)
--
-- Host: localhost    Database: candyGo
-- ------------------------------------------------------
-- Server version	5.7.24-0ubuntu0.18.04.1

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
-- Current Database: `candyGo`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `candyGo` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `candyGo`;

--
-- Table structure for table `bonbon`
--

DROP TABLE IF EXISTS `bonbon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bonbon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `picture` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bonbon`
--

LOCK TABLES `bonbon` WRITE;
/*!40000 ALTER TABLE `bonbon` DISABLE KEYS */;
INSERT INTO `bonbon` VALUES (1,'tagada','https://www.laboutiqueharibo.fr/media/catalog/product/cache/1/image/1200x/040ec09b1e35df139433887a97daa66f/h/a/haribo-tagada-sachet-120g.png'),(2,'crocodile','https://www.123bonbon.com/869-large_default/hari-crocodiles-sachets.jpg'),(3,'happy cola','https://images-na.ssl-images-amazon.com/images/I/41gI6n3fJrL.jpg'),(4,'nounours','https://www.allobonbons.com/1941-large_default/4-sachets-de-120-gr-ours-d-or-haribo.jpg'),(5,'nounours guimauve','https://m.media-amazon.com/images/S/aplus-media/vc/e58a1f27-67d7-4dbd-b9d3-6d496e5e5cd1._CR0,0,300,300_PT0_SX300__.jpg'),(6,'dragibus','https://www.etsdupleix.com/1954-thickbox_default/4-sachets-de-120-gr-dragibus-haribo.jpg'),(7,'oeufs au plat','https://www.laboutiqueharibo.fr/media/catalog/product/cache/1/image/1200x/040ec09b1e35df139433887a97daa66f/o/e/oeufs_au_plat.png'),(8,'rotella','https://www.themadeco.fr/54663-large/rouleau-reglisse-rotella-haribo.jpg'),(9,'carensac','http://valgourmand.com/v/1/c/c_1vals_ha104.jpg'),(10,'haribat','https://www.bonbon-foliz.com/media/images-produits/haribo/haribat-haribo-3863.jpg'),(11,'miami pik','https://i2.cdscdn.com/pdt2/7/7/4/1/700x700/har3103220034774/rw/haribo-miami-pik-sachet.jpg'),(12,'flower power','http://probel-group.com/284-large_default/product.jpg'),(13,'tagada pik','https://images-na.ssl-images-amazon.com/images/I/91grfdA94FL._SX466_.jpg'),(14,'tagada purple','https://i2.cdscdn.com/pdt2/5/7/7/1/700x700/har3103220037577/rw/haribo-tagada-purple-intense-250g.jpg'),(15,'oeil','http://www.lafoliedubonbon.fr/img/p/201-951-thickbox.jpg'),(16,'fingers','https://www.candywarehouse.com/assets/item/regular/gummy-fingers-candy-130068.jpg'),(17,'organes','https://www.candywarehouse.com/assets/item/regular/candy-body-parts-129395-im.jpg'),(18,'chenilles','https://static.openfoodfacts.org/images/products/20054922/front_fr.8.full.jpg'),(19,'cervelles','https://www.candywarehouse.com/assets/item/regular/gummy-internal-organs-candy-131251-w.jpg'),(20,'squellettes','https://www.candywarehouse.com/assets/item/regular/gummy-skulls-candy-130071.jpg'),(21,'tombe','https://www.candywarehouse.com/assets/item/regular/rest-in-pieces-candy-gravestones-130474-w.jpg'),(22,'sucre d\'orge','http://www.bonbonsaupalais.fr/322-large_default/le-sucre-d-orge.jpg'),(23,'banane','http://valgourmand.com/v/1/c/c_1haribo_ha102.jpg'),(24,'diable','https://www.bonbonz.be/1176-home_default/bonbon-tete-de-diable-rouge.jpg');
/*!40000 ALTER TABLE `bonbon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bonbondex`
--

DROP TABLE IF EXISTS `bonbondex`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bonbondex` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `bonbon_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_idfk_1` (`user_id`),
  KEY `bonbon_id` (`bonbon_id`),
  CONSTRAINT `bonbondex_ibfk_1` FOREIGN KEY (`bonbon_id`) REFERENCES `bonbon` (`id`),
  CONSTRAINT `user_idfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bonbondex`
--

LOCK TABLES `bonbondex` WRITE;
/*!40000 ALTER TABLE `bonbondex` DISABLE KEYS */;
INSERT INTO `bonbondex` VALUES (1,1,1,1),(2,2,3,6),(3,3,2,4),(4,4,2,6),(5,5,3,2),(6,1,2,6),(7,1,3,7);
/*!40000 ALTER TABLE `bonbondex` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'paul','paul'),(2,'jack','jack'),(3,'lisa','lisa'),(4,'loic','loic'),(5,'alex','alex');
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

-- Dump completed on 2018-10-31  1:27:56
