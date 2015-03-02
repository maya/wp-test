
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
DROP TABLE IF EXISTS `wp_revisr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_revisr` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `message` text,
  `event` varchar(42) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wp_revisr` WRITE;
/*!40000 ALTER TABLE `wp_revisr` DISABLE KEYS */;
INSERT INTO `wp_revisr` VALUES (1,'2015-01-12 08:27:13','Successfully created a new repository.','init'),(2,'2015-01-12 08:28:13','Error backing up the database.','error'),(3,'2015-01-12 08:28:13','Commmitted <a href=\"http://localhost/wordpresstest/wp-admin/post.php?post=8&action=edit\">#99804c0</a> to the local repository.','commit'),(4,'2015-01-12 08:38:42','Commmitted <a href=\"http://localhost/wordpresstest/wp-admin/post.php?post=9&action=edit\">#9839229</a> to the local repository.','commit'),(5,'2015-01-12 08:43:08','Error pushing changes to the remote repository.','error'),(6,'2015-01-12 08:43:18','Pulled <a href=\"http://localhost/wordpresstest/wp-admin/post.php?post=11&action=edit\">#4505780</a> from origin/master.','pull'),(7,'2015-01-12 08:43:55','Successfully pushed 5 commits to origin/master.','push'),(8,'2015-01-12 08:44:48','Error backing up the database.','error'),(9,'2015-01-12 08:54:52','Successfully backed up the database.','backup'),(10,'2015-02-26 20:18:33','Committed <a href=\"http://localhost/wordpresstest/wp-admin/post.php?post=17&action=edit\">#151eab2</a> to the local repository.','commit'),(11,'2015-02-26 20:23:10','Successfully pushed 2 commits to origin/master.','push'),(12,'2015-02-27 03:40:38','Committed <a href=\"http://localhost/wordpresstest/wp-admin/post.php?post=40&action=edit\">#3c436de</a> to the local repository.','commit'),(13,'2015-02-27 03:41:28','Successfully pushed 1 commit to origin/master.','push'),(14,'2015-02-28 04:58:07','Committed <a href=\"http://localhost/wordpresstest/wp-admin/post.php?post=42&action=edit\">#f4f963b</a> to the local repository.','commit'),(15,'2015-03-01 01:44:18','Committed <a href=\"http://localhost/wordpresstest/wp-admin/post.php?post=45&action=edit\">#1dda463</a> to the local repository.','commit'),(16,'2015-03-01 03:03:13','Committed <a href=\"http://localhost/wordpresstest/wp-admin/post.php?post=46&action=edit\">#f2f6791</a> to the local repository.','commit'),(17,'2015-03-01 03:03:34','Successfully pushed 3 commits to origin/master.','push'),(18,'2015-03-01 03:03:39','Successfully backed up the database.','backup'),(19,'2015-03-01 03:03:47','Successfully pushed 1 commit to origin/master.','push'),(20,'2015-03-02 21:47:28','Committed <a href=\"http://localhost/wordpresstest/wp-admin/post.php?post=48&action=edit\">#266af4f</a> to the local repository.','commit'),(21,'2015-03-02 21:48:49','Successfully pushed 1 commit to origin/master.','push'),(22,'2015-03-02 21:59:02','Committed <a href=\"http://localhost/wordpresstest/wp-admin/post.php?post=49&action=edit\">#f0198ac</a> to the local repository.','commit'),(23,'2015-03-02 21:59:53','Successfully pushed 1 commit to origin/master.','push');
/*!40000 ALTER TABLE `wp_revisr` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

