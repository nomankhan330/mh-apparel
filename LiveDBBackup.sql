/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.6.15-MariaDB : Database - mha3892_panel
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`mha3892_panel` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci */;

USE `mha3892_panel`;

/*Table structure for table `categories` */

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `detail` text DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `categories` */

insert  into `categories`(`id`,`name`,`slug`,`detail`,`image`,`active`,`created_at`,`updated_at`) values (1,'POLO SHIRTS','polo-shirts',NULL,'1693495540.png',1,'2023-08-31 15:25:40','2023-08-31 15:25:40'),(2,'T-SHIRTS','t-shirts',NULL,'1693495589.png',1,'2023-08-31 15:26:30','2023-08-31 15:26:30'),(3,'PULL OVER','pull-over',NULL,'1693495603.png',1,'2023-08-31 15:26:43','2023-08-31 15:26:43'),(4,'JOG PANTS','jog-pants',NULL,'1693495617.png',1,'2023-08-31 15:26:57','2023-08-31 15:26:57'),(5,'LADIES TOP','ladies-top',NULL,'1693495626.png',1,'2023-08-31 15:27:06','2023-08-31 15:27:06'),(10,'SHORTS','shorts',NULL,'1694012199.png',1,'2023-09-06 14:56:39','2023-09-06 14:56:39');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (16,'2014_10_12_000000_create_users_table',1),(17,'2014_10_12_100000_create_password_resets_table',1),(18,'2019_08_19_000000_create_failed_jobs_table',1),(19,'2019_12_14_000001_create_personal_access_tokens_table',1),(20,'2023_08_29_120427_create_categories_table',1),(21,'2023_08_30_152640_create_products_table',1),(22,'2023_08_31_104207_create_product_images_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `product_images` */

DROP TABLE IF EXISTS `product_images`;

CREATE TABLE `product_images` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) unsigned NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `product_images` */

insert  into `product_images`(`id`,`product_id`,`image_url`,`created_at`,`updated_at`) values (1,1,'assets/web/images/products/202309031015t-shirt-1.png','2023-09-03 10:15:59','2023-09-03 10:15:59'),(4,2,'assets/web/images/products/202309041044t-shirt1.png','2023-09-04 10:44:58','2023-09-04 10:44:58'),(5,3,'assets/web/images/products/202309041455t-shirt2.png','2023-09-04 14:55:52','2023-09-04 14:55:52'),(6,4,'','2023-09-04 14:57:00','2023-09-04 14:57:00'),(7,5,'assets/web/images/products/202309041507short-1.png','2023-09-04 15:07:44','2023-09-04 15:07:44'),(8,6,'assets/web/images/products/202309041625product-1.png','2023-09-04 16:26:04','2023-09-04 16:26:04'),(9,6,'assets/web/images/products/202309041625product-2.png','2023-09-04 16:26:04','2023-09-04 16:26:04'),(10,6,'assets/web/images/products/202309041625product-4.png','2023-09-04 16:26:04','2023-09-04 16:26:04'),(11,6,'assets/web/images/products/202309041625product-3.png','2023-09-04 16:26:04','2023-09-04 16:26:04'),(12,6,'assets/web/images/products/202309041625t-shirt-1.png','2023-09-04 16:26:04','2023-09-04 16:26:04'),(13,6,'assets/web/images/products/202309041625t-shirt-2.png','2023-09-04 16:26:04','2023-09-04 16:26:04'),(14,6,'assets/web/images/products/202309041625t-shirt-3.png','2023-09-04 16:26:05','2023-09-04 16:26:05'),(15,6,'assets/web/images/products/202309041625t-shirt-4.png','2023-09-04 16:26:05','2023-09-04 16:26:05'),(16,6,'assets/web/images/products/202309041625t-shirt-5.png','2023-09-04 16:26:05','2023-09-04 16:26:05'),(17,6,'assets/web/images/products/202309041625t-shirt-6.png','2023-09-04 16:26:05','2023-09-04 16:26:05'),(18,6,'assets/web/images/products/202309041625t-shirt-7.png','2023-09-04 16:26:05','2023-09-04 16:26:05'),(28,7,'assets/web/images/products/202309061501t-shirt-2.png','2023-09-06 15:02:15','2023-09-06 15:02:15'),(29,8,'assets/web/images/products/202309061503t-shirt-3.png','2023-09-06 15:04:55','2023-09-06 15:04:55'),(30,9,'assets/web/images/products/202309061505product-1.png','2023-09-06 15:05:51','2023-09-06 15:05:51'),(31,10,'assets/web/images/products/202309061506product-2.png','2023-09-06 15:06:18','2023-09-06 15:06:18'),(32,11,'assets/web/images/products/202309061509product-3.png','2023-09-06 15:09:52','2023-09-06 15:09:52'),(33,12,'assets/web/images/products/202309061510t-shirt-4.png','2023-09-06 15:10:32','2023-09-06 15:10:32'),(34,13,'assets/web/images/products/202309061511t-shirt-8.png','2023-09-06 15:11:33','2023-09-06 15:11:33'),(35,14,'assets/web/images/products/202309061518t-shirt3.png','2023-09-06 15:18:57','2023-09-06 15:18:57'),(36,15,'assets/web/images/products/202309061519t-shirt4.png','2023-09-06 15:19:32','2023-09-06 15:19:32'),(37,16,'assets/web/images/products/202309061522t-shirt5.png','2023-09-06 15:22:49','2023-09-06 15:22:49'),(38,17,'assets/web/images/products/202309061526t-shirt4.png','2023-09-06 15:27:18','2023-09-06 15:27:18'),(39,18,'assets/web/images/products/202309061527t-shirt6.png','2023-09-06 15:27:52','2023-09-06 15:27:52'),(40,19,'assets/web/images/products/202309061528t-shirt7.png','2023-09-06 15:28:10','2023-09-06 15:28:10'),(41,20,'assets/web/images/products/202309061528pullover-1.png','2023-09-06 15:28:53','2023-09-06 15:28:53'),(42,21,'assets/web/images/products/202309061529pullover-2.png','2023-09-06 15:29:38','2023-09-06 15:29:38'),(43,22,'assets/web/images/products/202309061530pullover-3.png','2023-09-06 15:30:23','2023-09-06 15:30:23'),(44,23,'assets/web/images/products/202309061530pullover-4.png','2023-09-06 15:30:45','2023-09-06 15:30:45'),(45,24,'assets/web/images/products/202309061531pullover-5.png','2023-09-06 15:31:35','2023-09-06 15:31:35'),(46,25,'assets/web/images/products/202309061532pullover-6.png','2023-09-06 15:32:08','2023-09-06 15:32:08'),(47,26,'assets/web/images/products/202309061532pullover-7.png','2023-09-06 15:32:50','2023-09-06 15:32:50'),(48,27,'assets/web/images/products/202309061533pullover-8.png','2023-09-06 15:33:29','2023-09-06 15:33:29'),(49,28,'assets/web/images/products/202309061533pullover-9.png','2023-09-06 15:33:59','2023-09-06 15:33:59'),(50,29,'assets/web/images/products/202309061534pullover-10.png','2023-09-06 15:34:23','2023-09-06 15:34:23'),(51,30,'assets/web/images/products/202309061535jogpants-1.png','2023-09-06 15:35:34','2023-09-06 15:35:34'),(53,31,'assets/web/images/products/202309061537jogpants-2.png','2023-09-06 15:37:54','2023-09-06 15:37:54'),(54,32,'assets/web/images/products/202309061538jogpants-2.png','2023-09-06 15:38:39','2023-09-06 15:38:39'),(55,33,'assets/web/images/products/202309061539jogpants-3.png','2023-09-06 15:39:05','2023-09-06 15:39:05'),(56,34,'assets/web/images/products/202309061542ladiestop-1.png','2023-09-06 15:43:00','2023-09-06 15:43:00'),(57,35,'assets/web/images/products/202309061543ladiestop-2.png','2023-09-06 15:43:34','2023-09-06 15:43:34'),(58,36,'assets/web/images/products/202309061545short-1.png','2023-09-06 15:45:23','2023-09-06 15:45:23'),(59,37,'assets/web/images/products/202309061545short-2.png','2023-09-06 15:45:43','2023-09-06 15:45:43'),(60,38,'assets/web/images/products/202309061546short-3.png','2023-09-06 15:46:02','2023-09-06 15:46:02'),(61,39,'assets/web/images/products/202309061546short-4.png','2023-09-06 15:46:19','2023-09-06 15:46:19');

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `category_id` bigint(20) unsigned NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `products` */

insert  into `products`(`id`,`name`,`slug`,`price`,`category_id`,`description`,`created_at`,`updated_at`) values (1,'White Polo Shirt','white-polo-shirt',0,1,'White Color','2023-09-03 10:15:58','2023-09-06 15:07:35'),(2,'Acid Wash Short Sleeve Tee','acid-wash-short-sleeve-tee',0,2,'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborumnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat','2023-09-04 10:44:58','2023-09-04 10:44:58'),(3,'Crew Neck Tee With Pocket','crew-neck-tee-with-pocket',0,2,'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborumnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat','2023-09-04 14:55:52','2023-09-04 14:55:52'),(5,'Men\'s Short','mens-short',0,9,'Acid Wash Shorts','2023-09-04 15:07:44','2023-09-04 15:07:44'),(7,'Red Polo Shirt','red-polo-shirt',0,1,'Red Shirt','2023-09-06 15:02:15','2023-09-06 15:13:09'),(8,'Yellow Polo Shirt','yellow-polo-shirt',0,1,'Yellow Polo Shirt','2023-09-06 15:04:54','2023-09-06 15:08:13'),(9,'Black Polo Shirt','black-polo-shirt',0,1,'Black Polo Shirt','2023-09-06 15:05:51','2023-09-06 15:08:27'),(10,'Grey Polo Shirt','grey-polo-shirt',0,1,'Grey Polo Shirt','2023-09-06 15:06:18','2023-09-06 15:08:45'),(11,'Sky Blue Polo Shirt','sky-blue-polo-shirt',0,1,'Sky Blue Polo Shirt','2023-09-06 15:09:52','2023-09-06 15:09:52'),(12,'Blue Polo Shirt','blue-polo-shirt',0,1,'Blue Polo Shirt','2023-09-06 15:10:32','2023-09-06 15:10:32'),(13,'Off White Polo Shirt','off-white-polo-shirt',0,1,'Off White Polo Shirt','2023-09-06 15:11:33','2023-09-06 15:11:33'),(14,'Dye Over Garment Tie and Dye Tee','dye-over-garment-tie-and-dye-tee',0,2,'Dye Over Garment Tie and Dye Tee','2023-09-06 15:18:57','2023-09-06 15:18:57'),(16,'Garment Acid Wash Tee','garment-acid-wash-tee',0,2,'Garment Acid Wash Tee','2023-09-06 15:22:49','2023-09-06 15:22:49'),(17,'Garment Acid Wash Tee 2','garment-acid-wash-tee-2',0,2,'Garment Acid Wash Tee 2','2023-09-06 15:27:18','2023-09-06 15:27:18'),(18,'Garment Tie and Dye Tee','garment-tie-and-dye-tee',0,2,'Garment Tie and Dye Tee','2023-09-06 15:27:52','2023-09-06 15:27:52'),(19,'Tie and Dye Crop Tee','tie-and-dye-crop-tee',0,2,'Tie and Dye Crop Tee','2023-09-06 15:28:10','2023-09-06 15:28:10'),(20,'Acid Wash Crop Hoodie-1','acid-wash-crop-hoodie-1',0,3,'Acid Wash Crop Hoodie-1','2023-09-06 15:28:53','2023-09-06 15:28:53'),(21,'Acid Wash Crop Hoodie-2','acid-wash-crop-hoodie-2',0,3,'Acid Wash Crop Hoodie-2','2023-09-06 15:29:38','2023-09-06 15:29:38'),(22,'Dye Mineral Pullover Hoodie','dye-mineral-pullover-hoodie',0,3,'Dye Mineral Pullover Hoodie','2023-09-06 15:30:23','2023-09-06 15:30:23'),(23,'Garment Neon Dye Jersey Hoodie','garment-neon-dye-jersey-hoodie',0,3,'Garment Neon Dye Jersey Hoodie','2023-09-06 15:30:45','2023-09-06 15:30:45'),(24,'Pigment Dye Crop Hoodie','pigment-dye-crop-hoodie',0,3,'Pigment Dye Crop Hoodie','2023-09-06 15:31:35','2023-09-06 15:31:35'),(25,'Colourfull Printed Hoodie','colourfull-printed-hoodie',0,3,'Colorful Printed Hoodie','2023-09-06 15:32:08','2023-09-06 15:32:08'),(26,'Military Print Hoodie','military-print-hoodie',0,3,'Military Print Hoodie','2023-09-06 15:32:50','2023-09-06 15:32:50'),(27,'Color Hoodie','color-hoodie',0,3,'Color Hoodie','2023-09-06 15:33:29','2023-09-06 15:33:29'),(28,'Half Sleeves Hoodie','half-sleeves-hoodie',0,3,'Half Sleeves Hoodie','2023-09-06 15:33:59','2023-09-06 15:33:59'),(29,'Herringbone All Over Printed Hoodie','herringbone-all-over-printed-hoodie',0,3,'Herringbone All Over Printed Hoodie','2023-09-06 15:34:23','2023-09-06 15:34:23'),(30,'Acid Wash Pant','acid-wash-pant',0,4,'Acid Wash Pant','2023-09-06 15:35:34','2023-09-06 15:35:34'),(32,'Pigment Dye Pant','pigment-dye-pant',0,4,'Pigment Dye Pant','2023-09-06 15:38:39','2023-09-06 15:38:39'),(33,'Printed Jog Paint','printed-jog-paint',0,4,'Printed Jog Paint','2023-09-06 15:39:05','2023-09-06 15:39:05'),(34,'Garment Acid Tang Top','garment-acid-tang-top',0,5,'Garment Acid Tang Top','2023-09-06 15:43:00','2023-09-06 15:43:00'),(35,'Colorful Top','colorful-top',0,5,'Colorful Top','2023-09-06 15:43:34','2023-09-06 15:43:34'),(36,'Acid Wash Short','acid-wash-short',0,10,'Acid Wash Short','2023-09-06 15:45:23','2023-09-06 15:45:23'),(37,'Pigment Dye Short','pigment-dye-short',0,10,'Pigment Dye Short','2023-09-06 15:45:43','2023-09-06 15:45:43'),(38,'Printed Shorts','printed-shorts',0,10,'Printed Shorts','2023-09-06 15:46:02','2023-09-06 15:46:02'),(39,'Casual Shorts','casual-shorts',0,10,'Casual Shorts','2023-09-06 15:46:19','2023-09-06 15:46:19');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values (1,'Administrator','admin@mh-apparel.com','2023-08-31 15:22:31','$2y$10$JaL588YVxBSJbdJjp4nZ7OHTPisal4aD3bTFxmFSpdPP/pSox/sNe','R8QajX6stMoElhIPkyHLJxcx8jitQQsjKXHv5tNiIVJk0htjaWL5WT1m35dO','2023-08-31 15:22:31','2023-08-31 15:22:31');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
