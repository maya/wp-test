
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
DROP TABLE IF EXISTS `wp_postmeta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_postmeta` (
  `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext,
  PRIMARY KEY (`meta_id`),
  KEY `post_id` (`post_id`),
  KEY `meta_key` (`meta_key`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wp_postmeta` WRITE;
/*!40000 ALTER TABLE `wp_postmeta` DISABLE KEYS */;
INSERT INTO `wp_postmeta` VALUES (1,2,'_wp_page_template','default'),(2,4,'_edit_last','1'),(3,1,'_edit_lock','1421051072:1'),(4,1,'_edit_last','1'),(6,8,'_edit_last','1'),(7,8,'committed_files','a:20:{i:0;s:12:\"?? index.php\";i:1;s:14:\"?? license.txt\";i:2;s:14:\"?? readme.html\";i:3;s:18:\"?? wp-activate.php\";i:4;s:12:\"?? wp-admin/\";i:5;s:21:\"?? wp-blog-header.php\";i:6;s:23:\"?? wp-comments-post.php\";i:7;s:17:\"?? wp-config-.php\";i:8;s:23:\"?? wp-config-sample.php\";i:9;s:14:\"?? wp-content/\";i:10;s:14:\"?? wp-cron.php\";i:11;s:15:\"?? wp-includes/\";i:12;s:20:\"?? wp-links-opml.php\";i:13;s:14:\"?? wp-load.php\";i:14;s:15:\"?? wp-login.php\";i:15;s:14:\"?? wp-mail.php\";i:16;s:18:\"?? wp-settings.php\";i:17;s:16:\"?? wp-signup.php\";i:18;s:19:\"?? wp-trackback.php\";i:19;s:13:\"?? xmlrpc.php\";}'),(8,8,'files_changed','20'),(9,8,'commit_hash','99804c0'),(10,8,'branch','master'),(11,8,'db_hash','b1022f2'),(12,8,'backup_method','tables'),(13,8,'git_tag',''),(14,8,'_edit_lock','1421051154:1'),(15,9,'_edit_last','1'),(16,9,'committed_files','a:1:{i:0;s:12:\"?? README.md\";}'),(17,9,'files_changed','1'),(18,9,'commit_hash','9839229'),(19,9,'branch','master'),(20,9,'git_tag',''),(21,9,'_edit_lock','1421051787:1'),(22,11,'commit_hash','4505780'),(23,11,'branch','master'),(24,11,'files_changed','1'),(25,11,'committed_files','a:1:{i:1;s:11:\"A	README.md\";}'),(26,11,'_edit_lock','1421052075:1'),(27,12,'commit_hash','5e67e15'),(28,12,'db_hash','5e67e15'),(29,12,'backup_method','tables'),(30,12,'branch','master'),(31,12,'files_changed','0'),(32,12,'committed_files','a:0:{}');
/*!40000 ALTER TABLE `wp_postmeta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

