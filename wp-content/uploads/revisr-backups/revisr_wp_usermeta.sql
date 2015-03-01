
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
DROP TABLE IF EXISTS `wp_usermeta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_usermeta` (
  `umeta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext,
  PRIMARY KEY (`umeta_id`),
  KEY `user_id` (`user_id`),
  KEY `meta_key` (`meta_key`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wp_usermeta` WRITE;
/*!40000 ALTER TABLE `wp_usermeta` DISABLE KEYS */;
INSERT INTO `wp_usermeta` VALUES (1,1,'nickname','maya'),(2,1,'first_name',''),(3,1,'last_name',''),(4,1,'description',''),(5,1,'rich_editing','true'),(6,1,'comment_shortcuts','false'),(7,1,'admin_color','fresh'),(8,1,'use_ssl','0'),(9,1,'show_admin_bar_front','true'),(10,1,'wp_capabilities','a:1:{s:13:\"administrator\";b:1;}'),(11,1,'wp_user_level','10'),(12,1,'dismissed_wp_pointers','wp360_locks,wp390_widgets,wp410_dfw'),(13,1,'show_welcome_panel','1'),(14,1,'session_tokens','a:3:{s:64:\"8e27b333db4591fbe924a553f3ceffcc5732f6a250f1d92dab3d0737a63708ea\";a:4:{s:10:\"expiration\";i:1422260567;s:2:\"ip\";s:3:\"::1\";s:2:\"ua\";s:120:\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36\";s:5:\"login\";i:1421050967;}s:64:\"441a7d203a32dc23c3eba9fa3d37e4f159463f609f844a67bd8ee1f2c7cfdb72\";a:4:{s:10:\"expiration\";i:1421380892;s:2:\"ip\";s:3:\"::1\";s:2:\"ua\";s:120:\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36\";s:5:\"login\";i:1421208092;}s:64:\"b80038d278da4969839465ab1eff750ee5101e511ab64969902f508d16d577f8\";a:4:{s:10:\"expiration\";i:1421380909;s:2:\"ip\";s:3:\"::1\";s:2:\"ua\";s:82:\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10.10; rv:35.0) Gecko/20100101 Firefox/35.0\";s:5:\"login\";i:1421208109;}}'),(15,1,'wp_dashboard_quick_press_last_post_id','3'),(16,2,'nickname','mbenari'),(17,2,'first_name',''),(18,2,'last_name',''),(19,2,'description',''),(20,2,'rich_editing','true'),(21,2,'comment_shortcuts','false'),(22,2,'admin_color','fresh'),(23,2,'use_ssl','0'),(24,2,'show_admin_bar_front','true'),(25,2,'wp_capabilities','a:1:{s:13:\"administrator\";b:1;}'),(26,2,'wp_user_level','10'),(27,2,'dismissed_wp_pointers','wp360_locks,wp390_widgets,wp410_dfw'),(28,2,'session_tokens','a:2:{s:64:\"bd2ff9e23ec89fdb381d2b0ab77db1b385df136d6b9614233222cbdec748410f\";a:4:{s:10:\"expiration\";i:1425154611;s:2:\"ip\";s:3:\"::1\";s:2:\"ua\";s:118:\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_2) AppleWebKit/600.3.18 (KHTML, like Gecko) Version/8.0.3 Safari/600.3.18\";s:5:\"login\";i:1424981811;}s:64:\"d366279302a5141b0d505b73408d78127e87855ea19241f4e9334853e62cbde1\";a:4:{s:10:\"expiration\";i:1426194064;s:2:\"ip\";s:3:\"::1\";s:2:\"ua\";s:82:\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10.10; rv:36.0) Gecko/20100101 Firefox/36.0\";s:5:\"login\";i:1424984464;}}'),(29,2,'wp_dashboard_quick_press_last_post_id','16'),(30,2,'wp_user-settings','libraryContent=browse'),(31,2,'wp_user-settings-time','1424982791'),(32,2,'managenav-menuscolumnshidden','a:4:{i:0;s:11:\"link-target\";i:1;s:11:\"css-classes\";i:2;s:3:\"xfn\";i:3;s:11:\"description\";}'),(33,2,'metaboxhidden_nav-menus','a:3:{i:0;s:8:\"add-post\";i:1;s:18:\"add-revisr_commits\";i:2;s:12:\"add-post_tag\";}'),(34,2,'nav_menu_recently_edited','11'),(35,2,'closedpostboxes_post','a:0:{}'),(36,2,'metaboxhidden_post','a:8:{i:0;s:12:\"revisionsdiv\";i:1;s:11:\"postexcerpt\";i:2;s:13:\"trackbacksdiv\";i:3;s:10:\"postcustom\";i:4;s:16:\"commentstatusdiv\";i:5;s:11:\"commentsdiv\";i:6;s:7:\"slugdiv\";i:7;s:9:\"authordiv\";}');
/*!40000 ALTER TABLE `wp_usermeta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

