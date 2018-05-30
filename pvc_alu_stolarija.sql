/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100131
 Source Host           : localhost:3306
 Source Schema         : pvc_alu_stolarija

 Target Server Type    : MySQL
 Target Server Version : 100131
 File Encoding         : 65001

 Date: 30/05/2018 12:58:31
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for administrator
-- ----------------------------
DROP TABLE IF EXISTS `administrator`;
CREATE TABLE `administrator`  (
  `administrator_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`administrator_id`) USING BTREE,
  UNIQUE INDEX `uq_administrator_email`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Compact;

-- ----------------------------
-- Records of administrator
-- ----------------------------
INSERT INTO `administrator` VALUES (1, 'milan.nikolic.14@singimail.rs', '1234567');
INSERT INTO `administrator` VALUES (2, 'marko.miseljic.14@singimail.rs', '6543217');
INSERT INTO `administrator` VALUES (3, 'misko309@gmail.com', '1231237');
INSERT INTO `administrator` VALUES (4, 'marko.miseljic.14@gmail.com', '3213217');

-- ----------------------------
-- Table structure for cart
-- ----------------------------
DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart`  (
  `cart_id` int(22) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `session_number` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`cart_id`) USING BTREE,
  UNIQUE INDEX `uq_cart_session_number`(`session_number`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Compact;

-- ----------------------------
-- Records of cart
-- ----------------------------
INSERT INTO `cart` VALUES (1, '2018-04-23 01:17:56', 'eHeuEHCBIdXxcWDI5kSNDDBVxW1vizlH');
INSERT INTO `cart` VALUES (2, '2018-04-23 01:18:04', 'dsvmdldl');

-- ----------------------------
-- Table structure for cart_model
-- ----------------------------
DROP TABLE IF EXISTS `cart_model`;
CREATE TABLE `cart_model`  (
  `cart_model_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `added_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `area` decimal(10, 2) UNSIGNED NOT NULL,
  `cart_id` int(11) UNSIGNED NOT NULL,
  `model_id` int(11) UNSIGNED NOT NULL,
  `price_of_model` decimal(10, 2) NOT NULL,
  PRIMARY KEY (`cart_model_id`) USING BTREE,
  INDEX `fk_cart_model_cart_id`(`cart_id`) USING BTREE,
  INDEX `fk_cart_model_model_id`(`model_id`) USING BTREE,
  CONSTRAINT `fk_cart_model_cart_id` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`cart_id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `fk_cart_model_model_id` FOREIGN KEY (`model_id`) REFERENCES `model` (`model_id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Compact;

-- ----------------------------
-- Records of cart_model
-- ----------------------------
INSERT INTO `cart_model` VALUES (1, '2018-04-29 13:46:43', 12.00, 1, 1, 0.00);
INSERT INTO `cart_model` VALUES (2, '2018-04-29 13:47:04', 21.00, 2, 2, 0.00);

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category`  (
  `category_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `picture` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`category_id`) USING BTREE,
  UNIQUE INDEX `uq_category_name`(`name`) USING BTREE,
  UNIQUE INDEX `uq_category_picture`(`picture`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Compact;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES (1, 'PVC', '/assets/images/pvcCat1.png', 'PVC je skraćenica za polivinil-hlorid. PVC je jedna od najkorišćenijih vrsta plastike. PVC prozori imaju dobra toplotna svojstva, spojevi elemenata su vareni tako da PVC prozor čini praktično jednu celinu i on je kompaktan materijal u celom preseku.\r\n\r\nPVC stolarija u ogromnoj meri smanjuje nivo buke koji dolazi od spolja. PVC prozori koje koristimo mogu imati 5 i 6 komora u preseku. Komore znače dubinu samog PVC profila samim tim imaju bolju energetsku efikasnost.');
INSERT INTO `category` VALUES (2, 'ALU', '/assets/images/aluCat.jpg', 'Aluminijum ima veliku otpornost na atmosferske uticaje i iz tog razloga se praktikuje za prostore koji su izloženi sunčevoj svetlosti i visokim temperaturama. ALU prozori su ekološki jer je aluminijum material prirodnog porekla.\r\n\r\nAluminijumska stolarija je lakša od PVC-a pa se može koristiti za izradu večih površina za poslovne prostore, izloge i slično.\r\n\r\nDugotrajnost i pouzdanost ALU stolarije kao i veliki izbor boja u kombinaciji sa plastifikacijom ili eloksazom aluminijumske prozore stavlja na prvo mesto prilikom odabira za vaš stambeni ili poslovni objekat.');

-- ----------------------------
-- Table structure for manufacturer
-- ----------------------------
DROP TABLE IF EXISTS `manufacturer`;
CREATE TABLE `manufacturer`  (
  `manufacturer_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `administrator_id` int(11) UNSIGNED NOT NULL,
  PRIMARY KEY (`manufacturer_id`) USING BTREE,
  UNIQUE INDEX `uq_manufacturer_name`(`name`) USING BTREE,
  INDEX `fk_manufacturer_administrator_id`(`administrator_id`) USING BTREE,
  CONSTRAINT `fk_manufacturer_administrator_id` FOREIGN KEY (`administrator_id`) REFERENCES `administrator` (`administrator_id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Compact;

-- ----------------------------
-- Records of manufacturer
-- ----------------------------
INSERT INTO `manufacturer` VALUES (1, 'SCHUCO', 1);
INSERT INTO `manufacturer` VALUES (2, 'GRASING', 1);
INSERT INTO `manufacturer` VALUES (3, 'Talaris', 2);
INSERT INTO `manufacturer` VALUES (4, 'FORMAT ALDE', 1);
INSERT INTO `manufacturer` VALUES (5, 'D-Mont', 2);
INSERT INTO `manufacturer` VALUES (6, 'MR PVC SISTEM ', 1);

-- ----------------------------
-- Table structure for model
-- ----------------------------
DROP TABLE IF EXISTS `model`;
CREATE TABLE `model`  (
  `model_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `min_width` decimal(10, 2) NOT NULL,
  `max_width` decimal(10, 2) NOT NULL,
  `min_height` decimal(10, 2) NOT NULL,
  `max_height` decimal(10, 2) NOT NULL,
  `administrator_id` int(11) UNSIGNED NOT NULL,
  `picture` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `profile_id` int(11) UNSIGNED NOT NULL,
  PRIMARY KEY (`model_id`) USING BTREE,
  UNIQUE INDEX `uq_model_name`(`name`) USING BTREE,
  UNIQUE INDEX `uq_model_picture`(`picture`) USING BTREE,
  INDEX `fk_model_administrator_id`(`administrator_id`) USING BTREE,
  INDEX `fk_model_profile_id`(`profile_id`) USING BTREE,
  CONSTRAINT `fk_model_administrator_id` FOREIGN KEY (`administrator_id`) REFERENCES `administrator` (`administrator_id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `fk_model_profile_id` FOREIGN KEY (`profile_id`) REFERENCES `profile` (`profile_id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 37 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Compact;

-- ----------------------------
-- Records of model
-- ----------------------------
INSERT INTO `model` VALUES (1, 'PVC prozor jednokrilni', 45.00, 100.00, 45.00, 100.00, 1, 'assets/images/models/sistem300_slika_1.png', 1);
INSERT INTO `model` VALUES (2, 'PVC prozor dvokrilni', 55.00, 123.00, 55.00, 123.00, 1, 'assets/images/models/sistem300_slika_2.png', 1);
INSERT INTO `model` VALUES (3, 'PVC balkonska vrata jednokrilna', 100.00, 150.00, 145.00, 220.00, 2, 'assets/images/models/sistem300_slika_3.png', 1);
INSERT INTO `model` VALUES (4, 'PVC balkonska vrata dvokrilna', 100.00, 150.00, 145.00, 230.00, 2, 'assets/images/models/sistem300_slika_4.png', 1);
INSERT INTO `model` VALUES (6, 'PVC karolaj vrata jednokrilna sa 3D šarkom', 120.00, 220.00, 145.00, 230.00, 4, 'assets/images/models/sistem400_slika_1.png', 2);
INSERT INTO `model` VALUES (7, 'PVC karolaj vrata dvokrilna sa 3D šarkom', 130.00, 200.00, 145.00, 230.00, 3, 'assets/images/models/sistem400_slika_2.png', 2);
INSERT INTO `model` VALUES (8, 'PVC sobna vrata sa staklom', 115.00, 225.00, 145.00, 230.00, 2, 'assets/images/models/sistem400_slika_3.png', 2);
INSERT INTO `model` VALUES (10, 'Pvc sobna vrata bez stakla', 100.00, 180.00, 145.00, 230.00, 1, 'assets/images/models/sistem400_slika_4.png', 2);
INSERT INTO `model` VALUES (14, 'MR ECO PROZOR ARCADE\r\n\r\n1', 1.00, 1.00, 1.00, 1.00, 1, '1', 8);
INSERT INTO `model` VALUES (15, 'MR ECLUSIVE PROZOR PRESTIGE\r\n', 1.00, 1.00, 1.00, 1.00, 2, '3', 8);
INSERT INTO `model` VALUES (16, 'MR PREMIUM PROZOR EFORTE', 1.00, 1.00, 1.00, 1.00, 4, '32', 8);
INSERT INTO `model` VALUES (17, 'MR PREMIUM PROZOR EFORTE SA ALU OBLOGOM', 1.00, 1.00, 1.00, 1.00, 2, '12', 8);
INSERT INTO `model` VALUES (18, 'PVC ulazna vrata jednokrilna sa 3D šarkom', 120.00, 150.00, 145.00, 230.00, 4, 'assets/images/models/sistem500_slika_1.png', 3);
INSERT INTO `model` VALUES (19, 'PVC ulazna vrata dvokrilna sa 3D šarkom', 120.00, 175.00, 145.00, 230.00, 3, 'assets/images/models/sistem500_slika_2.png', 3);
INSERT INTO `model` VALUES (21, 'PVC ulazna vrata moderna linija', 120.00, 150.00, 145.00, 230.00, 2, 'assets/images/models/sistem500_slika_3.png', 3);
INSERT INTO `model` VALUES (22, 'PVC ulazna vrata elegantna linija', 120.00, 150.00, 145.00, 230.00, 3, 'assets/images/models/sistem500_slika_4.png', 3);
INSERT INTO `model` VALUES (25, 'LUX sigurnosna vrata', 120.00, 150.00, 145.00, 230.00, 1, 'assets/images/models/sistem600_slika_1.jpg', 4);
INSERT INTO `model` VALUES (26, 'STANDARD Plus sigurnosna vrata', 120.00, 150.00, 145.00, 230.00, 2, 'assets/images/models/sistem600_slika_2.jpg', 4);
INSERT INTO `model` VALUES (27, 'Classic Plus sigurnosna vrata', 120.00, 150.00, 145.00, 230.00, 3, 'assets/images/models/sistem600_slika_3.jpg', 4);
INSERT INTO `model` VALUES (28, 'Standard sigurnosna vrata', 120.00, 150.00, 145.00, 230.00, 2, 'assets/images/models/sistem600_slika_4.jpg', 4);
INSERT INTO `model` VALUES (29, 'Protivpožarna vrata - standard', 120.00, 150.00, 145.00, 230.00, 1, 'assets/images/models/sistem800_slika_1.jpg', 6);
INSERT INTO `model` VALUES (30, 'Protivpožarna vrata - standard plus', 120.00, 150.00, 145.00, 230.00, 4, 'assets/images/models/sistem800_slika_2.jpg', 6);
INSERT INTO `model` VALUES (31, 'Sigurnosna vrata - model Tal 2. brave', 120.00, 150.00, 145.00, 230.00, 3, 'assets/images/models/sistem800_slika_3.jpg', 6);
INSERT INTO `model` VALUES (32, 'Ulazna vrata, T model', 120.00, 150.00, 145.00, 230.00, 2, 'assets/images/models/sistem800_slika_4.jpg', 6);
INSERT INTO `model` VALUES (33, 'Prozor sa 3D šarkama', 45.00, 120.00, 45.00, 120.00, 1, 'assets/images/models/sistem800k_slika_1.jpg', 7);
INSERT INTO `model` VALUES (34, 'Dvokrilni prozor sa komaricom', 50.00, 120.00, 50.00, 120.00, 2, 'assets/images/models/sistem800k_slika_2.jpg', 7);
INSERT INTO `model` VALUES (35, 'Ulazna vrata', 120.00, 150.00, 145.00, 230.00, 3, 'assets/images/models/sistem800k_slika_3.jpg', 7);
INSERT INTO `model` VALUES (36, 'Polukružni prozor sa 3D šarkama', 50.00, 120.00, 50.00, 130.00, 2, 'assets/images/models/sistem800k_slika_4.jpg', 7);

-- ----------------------------
-- Table structure for model_view
-- ----------------------------
DROP TABLE IF EXISTS `model_view`;
CREATE TABLE `model_view`  (
  `model_view_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `model_id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(24) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `user_agent` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`model_view_id`) USING BTREE,
  INDEX `fk_model_view_model_id`(`model_id`) USING BTREE,
  INDEX `model_view_ip_address_idx`(`ip_address`) USING BTREE,
  CONSTRAINT `fk_model_view_model_id` FOREIGN KEY (`model_id`) REFERENCES `model` (`model_id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 221 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Compact;

-- ----------------------------
-- Records of model_view
-- ----------------------------
INSERT INTO `model_view` VALUES (2, '2018-05-22 09:44:20', 4, '199.200.10.23', 'Firefox...');
INSERT INTO `model_view` VALUES (3, '2018-05-22 09:44:20', 4, '199.200.10.23', 'Chrome...');
INSERT INTO `model_view` VALUES (4, '2018-05-22 09:44:21', 4, '199.200.10.23', 'Chrome...');
INSERT INTO `model_view` VALUES (5, '2018-05-22 09:44:21', 4, '199.200.10.23', 'Chrome...');
INSERT INTO `model_view` VALUES (6, '2018-05-22 09:44:21', 4, '199.200.10.23', 'Chrome...');
INSERT INTO `model_view` VALUES (7, '2018-05-22 09:44:21', 4, '199.200.10.23', 'Chrome...');
INSERT INTO `model_view` VALUES (8, '2018-05-22 09:52:13', 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (9, '2018-05-22 09:52:14', 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (10, '2018-05-22 09:52:14', 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (11, '2018-05-22 09:52:14', 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (12, '2018-05-22 09:52:24', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (13, '2018-05-22 09:56:58', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (14, '2018-05-22 09:56:58', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (15, '2018-05-22 10:21:11', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (16, '2018-05-22 10:23:38', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (17, '2018-05-22 10:23:43', 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (18, '2018-05-22 10:35:29', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (19, '2018-05-22 10:35:30', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (20, '2018-05-22 10:37:11', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (21, '2018-05-22 10:37:12', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (22, '2018-05-22 10:37:13', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (23, '2018-05-22 10:37:13', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (24, '2018-05-22 10:37:13', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (25, '2018-05-22 10:37:13', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (26, '2018-05-22 10:37:14', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (27, '2018-05-22 10:37:14', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (28, '2018-05-22 10:37:14', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (29, '2018-05-22 10:37:20', 3, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (30, '2018-05-22 10:42:58', 3, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (31, '2018-05-22 10:43:00', 3, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (32, '2018-05-22 11:37:20', 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:59.0) Gecko/20100101 Firefox/59.0');
INSERT INTO `model_view` VALUES (33, '2018-05-22 11:38:17', 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (34, '2018-05-22 11:38:18', 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (35, '2018-05-22 11:38:19', 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (36, '2018-05-22 11:38:20', 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (37, '2018-05-22 11:39:39', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (38, '2018-05-22 17:56:40', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (39, '2018-05-22 17:56:41', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (40, '2018-05-22 17:56:42', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (41, '2018-05-22 17:56:42', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (42, '2018-05-22 17:56:42', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (43, '2018-05-22 17:56:43', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (44, '2018-05-22 18:06:02', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (45, '2018-05-22 18:06:03', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (46, '2018-05-22 18:06:03', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (47, '2018-05-22 18:06:04', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (48, '2018-05-22 18:06:04', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (49, '2018-05-22 18:06:04', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (50, '2018-05-22 18:06:04', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (51, '2018-05-22 18:06:04', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (52, '2018-05-22 18:35:56', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (53, '2018-05-22 18:36:01', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (54, '2018-05-22 18:36:04', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (55, '2018-05-22 18:48:07', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36 Edge/17.17134');
INSERT INTO `model_view` VALUES (56, '2018-05-22 18:48:23', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36 Edge/17.17134');
INSERT INTO `model_view` VALUES (57, '2018-05-22 18:48:23', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36 Edge/17.17134');
INSERT INTO `model_view` VALUES (58, '2018-05-22 18:48:23', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36 Edge/17.17134');
INSERT INTO `model_view` VALUES (59, '2018-05-22 18:48:24', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36 Edge/17.17134');
INSERT INTO `model_view` VALUES (60, '2018-05-23 18:42:58', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (61, '2018-05-23 18:43:16', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (62, '2018-05-23 18:43:16', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (63, '2018-05-23 18:43:16', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (64, '2018-05-23 18:43:16', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (65, '2018-05-23 18:43:17', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (66, '2018-05-23 18:43:17', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (67, '2018-05-23 18:43:17', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (68, '2018-05-23 18:43:17', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (69, '2018-05-23 18:43:18', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (70, '2018-05-23 18:43:18', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (71, '2018-05-23 18:43:18', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (72, '2018-05-23 18:43:19', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (73, '2018-05-23 18:43:19', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (74, '2018-05-23 23:20:40', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (75, '2018-05-26 15:56:18', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (76, '2018-05-26 15:56:19', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (77, '2018-05-26 15:56:19', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (78, '2018-05-26 15:56:20', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (79, '2018-05-26 15:56:21', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (80, '2018-05-26 15:56:22', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (81, '2018-05-26 15:56:23', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (82, '2018-05-26 15:56:23', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (83, '2018-05-26 15:56:23', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (84, '2018-05-26 15:56:24', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (85, '2018-05-26 15:56:24', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (86, '2018-05-26 15:56:24', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (87, '2018-05-26 15:56:24', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (88, '2018-05-26 15:56:25', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (89, '2018-05-26 15:56:25', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (90, '2018-05-26 15:56:25', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (91, '2018-05-26 15:56:25', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (92, '2018-05-26 15:56:25', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (93, '2018-05-26 15:56:26', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (94, '2018-05-26 15:56:27', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (95, '2018-05-26 15:56:27', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (96, '2018-05-26 15:56:28', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (97, '2018-05-26 15:56:37', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (98, '2018-05-26 15:56:40', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (99, '2018-05-26 15:56:41', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (100, '2018-05-26 16:18:03', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (101, '2018-05-26 16:18:08', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (102, '2018-05-26 16:18:12', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (103, '2018-05-26 16:18:14', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (104, '2018-05-26 16:18:14', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (105, '2018-05-26 16:18:14', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (106, '2018-05-26 16:18:16', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (107, '2018-05-26 16:22:51', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (108, '2018-05-26 16:49:22', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (109, '2018-05-26 20:11:51', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (110, '2018-05-26 20:11:55', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (111, '2018-05-26 20:32:41', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (112, '2018-05-26 22:56:11', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (113, '2018-05-27 11:02:13', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (114, '2018-05-27 11:33:08', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (115, '2018-05-27 11:33:09', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (116, '2018-05-27 11:33:36', 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (117, '2018-05-27 11:35:16', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (118, '2018-05-27 11:35:21', 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (119, '2018-05-27 14:01:47', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (120, '2018-05-27 21:41:11', 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (121, '2018-05-27 23:01:07', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (122, '2018-05-27 23:07:23', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (123, '2018-05-27 23:09:06', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (124, '2018-05-27 23:09:36', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (125, '2018-05-27 23:09:37', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (126, '2018-05-27 23:09:38', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (127, '2018-05-27 23:09:38', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (128, '2018-05-27 23:09:55', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (129, '2018-05-27 23:09:56', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (130, '2018-05-27 23:09:57', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (131, '2018-05-27 23:41:25', 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (132, '2018-05-27 23:58:24', 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (133, '2018-05-28 20:25:45', 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (134, '2018-05-28 20:26:57', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (135, '2018-05-28 20:26:57', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (136, '2018-05-28 20:26:57', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (137, '2018-05-28 20:26:58', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (138, '2018-05-28 20:26:58', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (139, '2018-05-28 20:26:58', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (140, '2018-05-28 20:26:58', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (141, '2018-05-28 20:26:58', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (142, '2018-05-28 20:26:59', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (143, '2018-05-28 20:26:59', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (144, '2018-05-28 20:26:59', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (145, '2018-05-28 22:26:59', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (146, '2018-05-28 22:27:00', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (147, '2018-05-28 22:27:00', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (148, '2018-05-28 22:27:09', 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (149, '2018-05-28 22:28:36', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (150, '2018-05-28 22:47:29', 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (151, '2018-05-28 22:58:16', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (152, '2018-05-28 23:11:07', 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (153, '2018-05-29 10:25:52', 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (154, '2018-05-30 11:16:41', 7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (155, '2018-05-30 11:17:12', 7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (156, '2018-05-30 11:17:13', 7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (157, '2018-05-30 11:17:13', 7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (158, '2018-05-30 11:17:13', 7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (159, '2018-05-30 11:17:13', 7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (160, '2018-05-30 11:17:14', 7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (161, '2018-05-30 11:17:14', 7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (162, '2018-05-30 11:17:14', 7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (163, '2018-05-30 11:17:14', 7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (164, '2018-05-30 11:17:15', 7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (165, '2018-05-30 11:17:15', 7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (166, '2018-05-30 11:17:15', 7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (167, '2018-05-30 11:17:15', 7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (168, '2018-05-30 11:17:15', 7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (169, '2018-05-30 11:17:16', 7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (170, '2018-05-30 11:19:35', 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (171, '2018-05-30 11:45:17', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (172, '2018-05-30 11:46:40', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (173, '2018-05-30 11:46:41', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (174, '2018-05-30 11:46:41', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (175, '2018-05-30 11:46:41', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (176, '2018-05-30 11:46:41', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (177, '2018-05-30 11:46:42', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (178, '2018-05-30 11:46:42', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (179, '2018-05-30 11:46:42', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (180, '2018-05-30 11:46:42', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (181, '2018-05-30 11:46:43', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (182, '2018-05-30 11:46:43', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (183, '2018-05-30 11:46:43', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (184, '2018-05-30 11:46:43', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (185, '2018-05-30 11:46:44', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (186, '2018-05-30 11:46:44', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (187, '2018-05-30 11:46:44', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (188, '2018-05-30 11:46:45', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (189, '2018-05-30 11:48:39', 6, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (190, '2018-05-30 11:48:43', 7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (191, '2018-05-30 11:48:45', 8, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (192, '2018-05-30 11:48:48', 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (193, '2018-05-30 12:00:54', 18, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (194, '2018-05-30 12:01:25', 18, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (195, '2018-05-30 12:01:29', 19, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (196, '2018-05-30 12:01:53', 19, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (197, '2018-05-30 12:07:15', 21, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (198, '2018-05-30 12:09:18', 22, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (199, '2018-05-30 12:10:08', 22, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (200, '2018-05-30 12:10:08', 22, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (201, '2018-05-30 12:10:09', 22, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (202, '2018-05-30 12:10:09', 22, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (203, '2018-05-30 12:10:09', 22, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (204, '2018-05-30 12:10:09', 22, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (205, '2018-05-30 12:22:07', 25, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (206, '2018-05-30 12:22:10', 26, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (207, '2018-05-30 12:22:13', 28, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (208, '2018-05-30 12:22:16', 27, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (209, '2018-05-30 12:22:35', 25, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (210, '2018-05-30 12:34:33', 29, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (211, '2018-05-30 12:34:37', 30, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (212, '2018-05-30 12:34:44', 31, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (213, '2018-05-30 12:37:40', 31, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (214, '2018-05-30 12:37:44', 30, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (215, '2018-05-30 12:37:47', 29, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (216, '2018-05-30 12:52:22', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (217, '2018-05-30 12:52:29', 34, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (218, '2018-05-30 12:52:33', 35, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (219, '2018-05-30 12:52:37', 36, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (220, '2018-05-30 12:54:32', 36, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');

-- ----------------------------
-- Table structure for order
-- ----------------------------
DROP TABLE IF EXISTS `order`;
CREATE TABLE `order`  (
  `order_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `forename` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `surname` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `residential_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `state` enum('u obradi','odbijena','poslata') CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `created_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cart_id` int(11) UNSIGNED NOT NULL,
  PRIMARY KEY (`order_id`) USING BTREE,
  INDEX `fk_order_cart_id`(`cart_id`) USING BTREE,
  CONSTRAINT `fk_order_cart_id` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`cart_id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for profile
-- ----------------------------
DROP TABLE IF EXISTS `profile`;
CREATE TABLE `profile`  (
  `profile_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `picture` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `price_per_unit_area` decimal(10, 2) UNSIGNED NOT NULL,
  `administrator_id` int(11) UNSIGNED NOT NULL,
  `category_id` int(11) UNSIGNED NOT NULL,
  `manufacturer_id` int(11) UNSIGNED NOT NULL,
  PRIMARY KEY (`profile_id`) USING BTREE,
  UNIQUE INDEX `uq_profile_name`(`name`) USING BTREE,
  UNIQUE INDEX `uq_profile_picture`(`picture`) USING BTREE,
  INDEX `fk_profile_administrator_id`(`administrator_id`) USING BTREE,
  INDEX `fk_profile_category_id`(`category_id`) USING BTREE,
  INDEX `fk_profile_manufacturer_id`(`manufacturer_id`) USING BTREE,
  CONSTRAINT `fk_profile_administrator_id` FOREIGN KEY (`administrator_id`) REFERENCES `administrator` (`administrator_id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `fk_profile_category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `fk_profile_manufacturer_id` FOREIGN KEY (`manufacturer_id`) REFERENCES `manufacturer` (`manufacturer_id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Compact;

-- ----------------------------
-- Records of profile
-- ----------------------------
INSERT INTO `profile` VALUES (1, 'SISTEM 300', 'assets/images/sistem300.png', '- 3 komorni profil, širine 54mm\r\n- trajan i postojan na atmosferske uticaje\r\n- jako dobra termoizolaciona sposobnost\r\n- koeficijent prolaza toplote k = 1,37 W/m2K', 123.00, 1, 1, 1);
INSERT INTO `profile` VALUES (2, 'SISTEM 400', 'assets/images/sistem400.png', '- 4 komorni profil, širine 61mm\r\n- trajan i postojan na atmosferske uticaje\r\n- jako dobra termoizolaciona sposobnost\r\n- koeficijent prolaza toplote k = 1,31 W/m2K', 123.00, 2, 1, 2);
INSERT INTO `profile` VALUES (3, 'SISTEM 500', 'assets/images/sistem500.png', '- 5 komorni profil, širine 65mm\r\n- trajan i postojan na atmosferske uticaje\r\n- jako dobra termoizolaciona sposobnost\r\n- koeficijent prolaza toplote k = 1,26 W/m2K', 12.00, 1, 1, 1);
INSERT INTO `profile` VALUES (4, 'SISTEM 600', 'assets/images/sistem600.png', '- 6 komorni profil, širine 75mm\r\n- trajan i postojan na atmosferske uticaje\r\n- jako dobra termoizolaciona sposobnost\r\n- koeficijent prolaza toplote k = 1,11 W/m2K', 13.00, 1, 1, 2);
INSERT INTO `profile` VALUES (6, 'SISTEM 800', 'assets/images/sistem800.png', '- 8 komorni profil, širine 90mm\r\n- trajan i postojan na atmosferske uticaje\r\n- jako dobra termoizolaciona sposobnost\r\n- koeficijent prolaza toplote k = 1,09 W/m2K', 133.00, 1, 1, 1);
INSERT INTO `profile` VALUES (7, 'SISTEM 800K', 'assets/images/sistem800k.png', '- klizni sistem širine 75mm\r\n- trajan i postojan na atmosferske uticaje\r\n- jako dobra termoizolaciona sposobnost', 1231.00, 3, 1, 3);
INSERT INTO `profile` VALUES (8, 'PROFIL M11000 Alutherm Plus\r\n', 'assets/images/aluM11000.jpg', 'Širina profila 78mm\r\nTermički prekid pomoću poliamida ojačanih staklenim vlaknima debljine 20mm u krilu i 24mm u štoku (spada u najvišu kategoriju termičkih prekida – grupa 2.1 K = 2,6)\r\nProfili sa dve slobodne komore koje omogućavaju dobru evakuaciju vode i dobro vezivanje\r\nIma ugradjen sistem nepropustljivosti – ALUSEAL\r\nU ovaj profil može biti ugradjeno jednostruko, duplo ili trostruko staklo debljine do 57mm\r\nTežina stakla do 130kg po krilu prozora (zavisi od šarki koje se koriste) i do 150kg za ulazna vrata\r\nZaptivanje sa tri EPDM zaptivke\r\nOdlična zvučna izolacija (do 52dB)\r\nPodržava veliki broj estetskih opcija: minimalistički izgled, moderan, neoklasičan, tradicionalni itd.\r\nProfili za sve dimenzije vrata, pogodni i za komercijalne i za privatne objekte\r\nU ovoj seriji postoje posebno dizajnirani profili koji postižu izgled kao kod drvenih prozora (‘wood effect’)', 1233.00, 2, 2, 4);
INSERT INTO `profile` VALUES (10, 'PROFIL M9400 Softline Plus\r\n', 'assets/images/aluM9400-sofline-plus.jpg', 'Širina profila 70 mm\r\nIma ugradjen sistem nepropustljivosti – ALUSEAL\r\nU ovaj profil može biti ugradjeno jednostruko ili duplo staklo, debljine od 10 – 32mm\r\nTežina stakla do 130kg po krilu\r\nZaptivanje pomoću tri EPDM zaptivke\r\nIma mogućnost velikog broja različitih estetskih rešenja (jednokrilni ili dvokrilni prozori i vrata, ulazna vrata, konstrukcije s nepravilnim uglovima i dr.)\r\nU ovoj seriji postoje posebno dizajnirani profili koji postižu izgled kao kod drvenih prozora (‘wood effect’)', 123.00, 4, 2, 4);
INSERT INTO `profile` VALUES (11, 'PROFIL M940 Mini\r\n', 'assets/images/aluM940_mini.jpg', 'Širina profila 45mm\r\nU ovaj profil može biti ugradjeno jednostruko ili duplo staklo, debljine od 10 – 26mm\r\nTežina stakla do 130kg po krilu\r\nZaptivanje pomoću tri EPDM zaptivke\r\nPodržava mnoge vrste i dizajne prozora\r\nPosebna izolacija (vodootporan, ne propusta vazduh, otporan na udare vetra itd.)\r\nU ovoj seriji postoje posebno dizajnirani profili koji postižu izgled kao kod drvenih prozora (‘wood effect’)', 313.00, 3, 2, 3);
INSERT INTO `profile` VALUES (12, 'PROFIL M9050 klizni\r\n', 'assets/images/aluM9050.jpg', 'Širina profila zavisi od toga koliko krila ima vaš prozor/vrata (jednošinski profil za jedno krilo, dvošinski za dva ili četiri krila, trošinski za tri ili šest krila itd.)\r\nŠirina krila 32mm\r\nJednostruko ili duplo staklo, debljine od 16 – 20mm\r\nMaksimalna težina krila do 80kg\r\nMaksimalna nepropustljivost vode i zvučna izolacija\r\n3 opciona načina da otvorite prozor/vrata\r\nSpektar od preko 40 boja koje možete izabrati za individualno dizajniranje', 13.00, 3, 2, 1);

SET FOREIGN_KEY_CHECKS = 1;
