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

 Date: 21/06/2018 12:39:44
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
  `password_hash` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`administrator_id`) USING BTREE,
  UNIQUE INDEX `uq_administrator_email`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Compact;

-- ----------------------------
-- Records of administrator
-- ----------------------------
INSERT INTO `administrator` VALUES (1, 'milan.nikolic.14@singimail.rs', 'e13efc991a9bf44bbb4da87cdbb725240184585ccaf270523170e008cf2a3b85f45f86c3da647f69780fb9e971caf5437b3d06d418355a68c9760c70a31d05c7');
INSERT INTO `administrator` VALUES (2, 'marko.miseljic.14@singimail.rs', 'e13efc991a9bf44bbb4da87cdbb725240184585ccaf270523170e008cf2a3b85f45f86c3da647f69780fb9e971caf5437b3d06d418355a68c9760c70a31d05c7');
INSERT INTO `administrator` VALUES (3, 'misko309@gmail.com', 'e13efc991a9bf44bbb4da87cdbb725240184585ccaf270523170e008cf2a3b85f45f86c3da647f69780fb9e971caf5437b3d06d418355a68c9760c70a31d05c7');
INSERT INTO `administrator` VALUES (4, 'marko.miseljic.14@gmail.com', 'e13efc991a9bf44bbb4da87cdbb725240184585ccaf270523170e008cf2a3b85f45f86c3da647f69780fb9e971caf5437b3d06d418355a68c9760c70a31d05c7');

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
) ENGINE = InnoDB AUTO_INCREMENT = 476 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Compact;

-- ----------------------------
-- Records of cart
-- ----------------------------
INSERT INTO `cart` VALUES (1, '2018-04-23 01:17:56', 'Rt5XIzsfxMUYDARYmEN6iQAJoZOFvJ6T');
INSERT INTO `cart` VALUES (411, '2018-06-02 13:20:29', 'OPF0S9RPV0Py9TOygQjxKPwRdt0SOmZq');
INSERT INTO `cart` VALUES (414, '2018-06-02 13:23:01', 'i5X4HSu2nsccAiVTqFh7RwCmM8KH6bp1');
INSERT INTO `cart` VALUES (416, '2018-06-02 14:31:16', 'IBHHdfM32UFVEDfnZdlAnxSq9OxMO0Yb');
INSERT INTO `cart` VALUES (419, '2018-06-02 14:55:53', 'XRtrr7LgX72nxHSrRqMwgP3GEbulbpMN');
INSERT INTO `cart` VALUES (421, '2018-06-02 18:16:48', 'TtE5RSTu1uZP1MHCbanMHBMCm69nnqw6');
INSERT INTO `cart` VALUES (422, '2018-06-02 18:17:34', 'Flbm00mV0Mht2aIXmG6dmDlfqPrYOwWT');
INSERT INTO `cart` VALUES (426, '2018-06-02 20:47:08', 'NmPt872wID6irn4NP8r5T8lYTuOfkrpF');
INSERT INTO `cart` VALUES (427, '2018-06-03 03:26:41', '3Ysi40tWP4xgmJfwERr8BhxKMeo3dEBK');
INSERT INTO `cart` VALUES (430, '2018-06-03 03:59:12', 'cGtSEaONmbYBvX8ou7NX3RnaOPop917I');
INSERT INTO `cart` VALUES (431, '2018-06-04 13:47:30', 'ZKoVgDXtBv1JH8J6V9crYY74N7DnHUUo');
INSERT INTO `cart` VALUES (433, '2018-06-04 20:21:28', '6WqGe425S4vxj1rCOJhrehUvs5AonP7N');
INSERT INTO `cart` VALUES (436, '2018-06-05 20:51:16', '5rcFZz18iPgFKlvxyGU6sRZwzkyvNaFb');
INSERT INTO `cart` VALUES (441, '2018-06-06 10:33:59', 'zOJl9ZJWvodw63umVNEartILkNwRFiy6');
INSERT INTO `cart` VALUES (442, '2018-06-07 09:41:36', '5Jv4IqgSS4vFhZsQlSjn41WOLvJQeGLj');
INSERT INTO `cart` VALUES (446, '2018-06-08 10:45:00', '9KTv934wY8SNZCjgBGWhDQAywL1acSuR');
INSERT INTO `cart` VALUES (449, '2018-06-08 10:45:31', '1FLjsrEnxhmBa2vyTohpR0wJv5caFQWt');
INSERT INTO `cart` VALUES (452, '2018-06-08 10:45:51', 'ZadrlYTsgu5FfDPNdIs6N9ToyiHzzjBj');
INSERT INTO `cart` VALUES (455, '2018-06-08 10:46:58', 'd5FgC9JvrBNT8RjPMKYB3fKEU9RpaPfn');
INSERT INTO `cart` VALUES (456, '2018-06-08 10:47:17', 'o1jkSXceuq64Y1WSkjOJoosIKcpKvtQX');
INSERT INTO `cart` VALUES (457, '2018-06-18 21:03:14', 'aRK7aww8ekcXCnBatYE8q79IvfqJqrb7');
INSERT INTO `cart` VALUES (458, '2018-06-19 10:02:09', 'OcGxU1ZztM1eHSVdS3kJ0pIJluHprfCa');
INSERT INTO `cart` VALUES (462, '2018-06-19 10:03:51', 'IgRJQHZW8GHlmpG0ppERGo2ECD3PRtMe');
INSERT INTO `cart` VALUES (463, '2018-06-19 10:04:29', 'u8s5oTFeVrOQ1ubkCiqiRKyMkQ1pFCW0');
INSERT INTO `cart` VALUES (464, '2018-06-19 10:07:47', 'sE5uprPSzboJqySyNBJn1zEDIw6FXG4j');
INSERT INTO `cart` VALUES (467, '2018-06-19 23:20:32', '0gQCeDhFaJUUXiMTfhMTasVcVqlgykX1');
INSERT INTO `cart` VALUES (471, '2018-06-20 07:55:07', 'cZJ8MWxGaZTIHPCoi0Iytqydwc6hB1Xu');
INSERT INTO `cart` VALUES (472, '2018-06-20 22:34:41', 'aAtoDEOcCnGCaCoqkIzCrcPr4ufCFlkE');
INSERT INTO `cart` VALUES (475, '2018-06-21 08:04:22', 'FWdBXS1TgSfF0wWaIleZ6qSrjLYaaEJe');

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
  `price_for_model` decimal(10, 2) UNSIGNED NOT NULL,
  PRIMARY KEY (`cart_model_id`) USING BTREE,
  INDEX `fk_cart_model_cart_id`(`cart_id`) USING BTREE,
  INDEX `fk_cart_model_model_id`(`model_id`) USING BTREE,
  CONSTRAINT `fk_cart_model_cart_id` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`cart_id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `fk_cart_model_model_id` FOREIGN KEY (`model_id`) REFERENCES `model` (`model_id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 91 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Compact;

-- ----------------------------
-- Records of cart_model
-- ----------------------------
INSERT INTO `cart_model` VALUES (1, '2018-04-29 13:46:43', 1800.00, 1, 1, 0.00);
INSERT INTO `cart_model` VALUES (20, '2018-06-02 13:21:00', 3025.00, 411, 33, 0.00);
INSERT INTO `cart_model` VALUES (21, '2018-06-02 13:21:56', 18910.00, 411, 29, 0.00);
INSERT INTO `cart_model` VALUES (22, '2018-06-02 13:23:01', 3025.00, 414, 33, 0.00);
INSERT INTO `cart_model` VALUES (23, '2018-06-02 14:28:35', 2025.00, 411, 33, 0.00);
INSERT INTO `cart_model` VALUES (24, '2018-06-02 14:31:16', 3025.00, 416, 33, 0.00);
INSERT INTO `cart_model` VALUES (25, '2018-06-02 14:53:07', 3025.00, 411, 33, 0.00);
INSERT INTO `cart_model` VALUES (26, '2018-06-02 14:54:18', 17205.00, 411, 4, 0.00);
INSERT INTO `cart_model` VALUES (27, '2018-06-02 14:55:53', 3025.00, 419, 33, 0.00);
INSERT INTO `cart_model` VALUES (28, '2018-06-02 14:56:09', 3025.00, 419, 36, 0.00);
INSERT INTO `cart_model` VALUES (29, '2018-06-02 18:16:48', 3025.00, 421, 33, 0.00);
INSERT INTO `cart_model` VALUES (30, '2018-06-02 18:17:34', 18300.00, 422, 35, 0.00);
INSERT INTO `cart_model` VALUES (31, '2018-06-02 18:18:20', 17400.00, 422, 35, 0.00);
INSERT INTO `cart_model` VALUES (32, '2018-06-02 18:21:33', 3025.00, 421, 33, 0.00);
INSERT INTO `cart_model` VALUES (33, '2018-06-02 18:22:10', 2860.00, 422, 36, 0.00);
INSERT INTO `cart_model` VALUES (34, '2018-06-02 20:47:08', 3025.00, 426, 33, 0.00);
INSERT INTO `cart_model` VALUES (35, '2018-06-02 21:06:36', 22078.00, 426, 35, 0.00);
INSERT INTO `cart_model` VALUES (36, '2018-06-03 03:26:41', 3000.00, 427, 33, 0.00);
INSERT INTO `cart_model` VALUES (37, '2018-06-03 03:58:34', 3025.00, 427, 34, 0.00);
INSERT INTO `cart_model` VALUES (38, '2018-06-03 03:58:51', 3025.00, 427, 34, 0.00);
INSERT INTO `cart_model` VALUES (39, '2018-06-03 03:59:12', 20252.00, 430, 31, 0.00);
INSERT INTO `cart_model` VALUES (40, '2018-06-03 03:59:34', 3025.00, 430, 36, 0.00);
INSERT INTO `cart_model` VALUES (41, '2018-06-04 13:47:30', 3025.00, 431, 33, 0.00);
INSERT INTO `cart_model` VALUES (42, '2018-06-04 20:21:49', 3025.00, 433, 33, 0.00);
INSERT INTO `cart_model` VALUES (43, '2018-06-04 20:22:06', 3025.00, 433, 33, 0.00);
INSERT INTO `cart_model` VALUES (46, '2018-06-05 21:48:16', 3025.00, 436, 33, 0.00);
INSERT INTO `cart_model` VALUES (47, '2018-06-05 21:57:29', 18600.00, 436, 35, 0.00);
INSERT INTO `cart_model` VALUES (48, '2018-06-05 21:57:40', 24000.00, 436, 35, 0.00);
INSERT INTO `cart_model` VALUES (49, '2018-06-06 10:33:59', 3025.00, 441, 33, 0.00);
INSERT INTO `cart_model` VALUES (50, '2018-06-06 10:34:12', 3025.00, 441, 33, 0.00);
INSERT INTO `cart_model` VALUES (51, '2018-06-06 10:34:14', 3025.00, 441, 33, 0.00);
INSERT INTO `cart_model` VALUES (52, '2018-06-06 11:30:38', 3025.00, 441, 33, 30250.00);
INSERT INTO `cart_model` VALUES (53, '2018-06-07 09:41:36', 3025.00, 442, 33, 30250.00);
INSERT INTO `cart_model` VALUES (54, '2018-06-07 09:41:41', 3025.00, 442, 33, 30250.00);
INSERT INTO `cart_model` VALUES (55, '2018-06-07 09:41:47', 4225.00, 442, 33, 42250.00);
INSERT INTO `cart_model` VALUES (56, '2018-06-07 09:43:18', 4225.00, 442, 33, 42250.00);
INSERT INTO `cart_model` VALUES (57, '2018-06-08 10:45:00', 3025.00, 446, 33, 30250.00);
INSERT INTO `cart_model` VALUES (58, '2018-06-08 10:45:04', 3025.00, 446, 33, 30250.00);
INSERT INTO `cart_model` VALUES (59, '2018-06-08 10:45:06', 3025.00, 446, 33, 30250.00);
INSERT INTO `cart_model` VALUES (60, '2018-06-08 10:45:31', 6000.00, 449, 37, 108000.00);
INSERT INTO `cart_model` VALUES (61, '2018-06-08 10:45:36', 6000.00, 449, 37, 108000.00);
INSERT INTO `cart_model` VALUES (62, '2018-06-08 10:45:38', 6000.00, 449, 37, 108000.00);
INSERT INTO `cart_model` VALUES (63, '2018-06-08 10:45:51', 3025.00, 452, 33, 30250.00);
INSERT INTO `cart_model` VALUES (64, '2018-06-08 10:46:10', 3025.00, 452, 33, 30250.00);
INSERT INTO `cart_model` VALUES (65, '2018-06-08 10:46:16', 3025.00, 452, 33, 30250.00);
INSERT INTO `cart_model` VALUES (66, '2018-06-08 10:46:58', 3025.00, 455, 33, 30250.00);
INSERT INTO `cart_model` VALUES (67, '2018-06-08 10:47:17', 20615.00, 456, 18, 247380.00);
INSERT INTO `cart_model` VALUES (68, '2018-06-08 10:47:48', 3025.00, 455, 33, 30250.00);
INSERT INTO `cart_model` VALUES (69, '2018-06-08 10:48:06', 2025.00, 455, 33, 20250.00);
INSERT INTO `cart_model` VALUES (70, '2018-06-08 10:48:10', 2025.00, 455, 33, 20250.00);
INSERT INTO `cart_model` VALUES (71, '2018-06-18 21:03:14', 3025.00, 457, 33, 30250.00);
INSERT INTO `cart_model` VALUES (72, '2018-06-19 10:02:09', 3025.00, 458, 33, 30250.00);
INSERT INTO `cart_model` VALUES (73, '2018-06-19 10:02:23', 3025.00, 458, 33, 30250.00);
INSERT INTO `cart_model` VALUES (74, '2018-06-19 10:02:29', 2025.00, 458, 33, 20250.00);
INSERT INTO `cart_model` VALUES (75, '2018-06-19 10:03:22', 1575.00, 458, 15, 31500.00);
INSERT INTO `cart_model` VALUES (76, '2018-06-19 10:03:51', 3025.00, 462, 33, 30250.00);
INSERT INTO `cart_model` VALUES (77, '2018-06-19 10:04:29', 3025.00, 463, 33, 30250.00);
INSERT INTO `cart_model` VALUES (78, '2018-06-19 10:07:47', 2025.00, 464, 33, 20250.00);
INSERT INTO `cart_model` VALUES (79, '2018-06-19 10:08:09', 6000.00, 464, 37, 108000.00);
INSERT INTO `cart_model` VALUES (80, '2018-06-19 10:11:03', 3025.00, 462, 33, 30250.00);
INSERT INTO `cart_model` VALUES (85, '2018-06-20 07:55:07', 3025.00, 471, 33, 30250.00);
INSERT INTO `cart_model` VALUES (86, '2018-06-20 22:34:41', 3025.00, 472, 33, 30250.00);
INSERT INTO `cart_model` VALUES (87, '2018-06-20 22:34:54', 2025.00, 472, 15, 40500.00);
INSERT INTO `cart_model` VALUES (88, '2018-06-20 22:35:08', 18910.00, 472, 6, 264740.00);
INSERT INTO `cart_model` VALUES (89, '2018-06-21 08:04:22', 2025.00, 475, 33, 20250.00);
INSERT INTO `cart_model` VALUES (90, '2018-06-21 08:04:36', 2700.00, 475, 15, 54000.00);

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category`  (
  `category_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `picture` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `administrator_id` int(11) UNSIGNED NOT NULL,
  PRIMARY KEY (`category_id`) USING BTREE,
  UNIQUE INDEX `uq_category_name`(`name`) USING BTREE,
  UNIQUE INDEX `uq_category_picture`(`picture`) USING BTREE,
  INDEX `fk_category_administraotr_id`(`administrator_id`) USING BTREE,
  CONSTRAINT `fk_category_administraotr_id` FOREIGN KEY (`administrator_id`) REFERENCES `administrator` (`administrator_id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Compact;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES (1, 'PVC', 'assets/images/pvcCat1.png', 'PVC je skraćenica za polivinil-hlorid. PVC je jedna od najkorišćenijih vrsta plastike. PVC prozori imaju dobra toplotna svojstva, spojevi elemenata su vareni tako da PVC prozor čini praktično jednu celinu i on je kompaktan materijal u celom preseku.\r\n\r\nPVC stolarija u ogromnoj meri smanjuje nivo buke koji dolazi od spolja. PVC prozori koje koristimo mogu imati 5 i 6 komora u preseku. Komore znače dubinu samog PVC profila samim tim imaju bolju energetsku efikasnost.', 1);
INSERT INTO `category` VALUES (2, 'ALU', 'assets/images/aluCat.jpg', 'Aluminijum ima veliku otpornost na atmosferske uticaje i iz tog razloga se praktikuje za prostore koji su izloženi sunčevoj svetlosti i visokim temperaturama. ALU prozori su ekološki jer je aluminijum material prirodnog porekla.\r\n\r\nAluminijumska stolarija je lakša od PVC-a pa se može koristiti za izradu večih površina za poslovne prostore, izloge i slično.\r\n\r\nDugotrajnost i pouzdanost ALU stolarije kao i veliki izbor boja u kombinaciji sa plastifikacijom ili eloksazom aluminijumske prozore stavlja na prvo mesto prilikom odabira za vaš stambeni ili poslovni objekat.', 2);

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
) ENGINE = InnoDB AUTO_INCREMENT = 63 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Compact;

-- ----------------------------
-- Records of model
-- ----------------------------
INSERT INTO `model` VALUES (1, 'PVC prozor jednokrilni', 45.00, 100.00, 45.00, 100.00, 1, 'assets/images/models/sistem300_slika_1.jpg', 1);
INSERT INTO `model` VALUES (2, 'PVC prozor dvokrilni', 55.00, 123.00, 55.00, 123.00, 1, 'assets/images/models/sistem300_slika_2.jpg', 1);
INSERT INTO `model` VALUES (3, 'PVC balkonska vrata jednokrilna', 100.00, 150.00, 145.00, 220.00, 2, 'assets/images/models/sistem300_slika_3.jpg', 1);
INSERT INTO `model` VALUES (4, 'PVC balkonska vrata dvokrilna', 100.00, 150.00, 145.00, 230.00, 2, 'assets/images/models/sistem300_slika_4.jpg', 1);
INSERT INTO `model` VALUES (6, 'PVC karolaj vrata jednokrilna sa 3D šarkom', 120.00, 220.00, 145.00, 230.00, 4, 'assets/images/models/sistem400_slika_6.jpg', 2);
INSERT INTO `model` VALUES (7, 'PVC karolaj vrata dvokrilna sa 3D šarkom', 130.00, 200.00, 145.00, 230.00, 3, 'assets/images/models/sistem400_slika_7.jpg', 2);
INSERT INTO `model` VALUES (8, 'PVC sobna vrata sa staklom', 115.00, 225.00, 145.00, 230.00, 2, 'assets/images/models/sistem400_slika_8.jpg', 2);
INSERT INTO `model` VALUES (10, 'Pvc sobna vrata bez stakla', 100.00, 180.00, 145.00, 230.00, 1, 'assets/images/models/sistem400_slika_10.jpg', 2);
INSERT INTO `model` VALUES (14, 'MR ECO PROZOR ARCADE\r\n\r\n1', 40.00, 100.00, 40.00, 100.00, 1, 'assets/images/models/profilm11000aluthermplus_slika_14.jpg', 8);
INSERT INTO `model` VALUES (15, 'MR ECLUSIVE PROZOR PRESTIGE\r\n', 35.00, 110.00, 35.00, 100.00, 2, 'assets/images/models/profilm11000aluthermplus_slika_15.jpg', 8);
INSERT INTO `model` VALUES (16, 'MR PREMIUM PROZOR EFORTE', 30.00, 100.00, 30.00, 100.00, 4, 'assets/images/models/profilm11000aluthermplus_slika_16.jpg', 8);
INSERT INTO `model` VALUES (17, 'MR PREMIUM PROZOR EFORTE SA ALU PERSIJANIMA', 30.00, 111.00, 38.00, 115.00, 2, 'assets/images/models/profilm11000aluthermplus_slika_17.jpg', 8);
INSERT INTO `model` VALUES (18, 'PVC ulazna vrata jednokrilna sa 3D šarkom', 120.00, 150.00, 145.00, 230.00, 4, 'assets/images/models/sistem500_slika_18.jpg', 3);
INSERT INTO `model` VALUES (19, 'PVC ulazna vrata dvokrilna sa 3D šarkom', 120.00, 175.00, 145.00, 230.00, 3, 'assets/images/models/sistem500_slika_19.jpg', 3);
INSERT INTO `model` VALUES (21, 'PVC ulazna vrata moderna linija', 120.00, 150.00, 145.00, 230.00, 2, 'assets/images/models/sistem500_slika_21.jpg', 3);
INSERT INTO `model` VALUES (22, 'PVC ulazna vrata elegantna linija', 120.00, 150.00, 145.00, 230.00, 3, 'assets/images/models/sistem500_slika_22.jpg', 3);
INSERT INTO `model` VALUES (25, 'LUX sigurnosna vrata', 120.00, 150.00, 145.00, 230.00, 1, 'assets/images/models/sistem600_slika_25.jpg', 4);
INSERT INTO `model` VALUES (26, 'STANDARD Plus sigurnosna vrata', 120.00, 150.00, 145.00, 230.00, 2, 'assets/images/models/sistem600_slika_26.jpg', 4);
INSERT INTO `model` VALUES (27, 'Classic Plus sigurnosna vrata', 120.00, 150.00, 145.00, 230.00, 3, 'assets/images/models/sistem600_slika_27.jpg', 4);
INSERT INTO `model` VALUES (28, 'Standard sigurnosna vrata', 120.00, 150.00, 145.00, 230.00, 2, 'assets/images/models/sistem600_slika_28.jpg', 4);
INSERT INTO `model` VALUES (29, 'Protivpožarna vrata - standard', 120.00, 150.00, 145.00, 230.00, 1, 'assets/images/models/sistem800_slika_29.jpg', 6);
INSERT INTO `model` VALUES (30, 'Protivpožarna vrata - standard plus', 120.00, 150.00, 145.00, 230.00, 4, 'assets/images/models/sistem800_slika_30.jpg', 6);
INSERT INTO `model` VALUES (31, 'Sigurnosna vrata - model Tal 2. brave', 120.00, 150.00, 145.00, 230.00, 3, 'assets/images/models/sistem800_slika_31.jpg', 6);
INSERT INTO `model` VALUES (32, 'Ulazna vrata, T model', 120.00, 150.00, 145.00, 230.00, 2, 'assets/images/models/sistem800_slika_32.jpg', 6);
INSERT INTO `model` VALUES (33, 'Prozor sa 3D šarkama', 45.00, 120.00, 45.00, 120.00, 1, 'assets/images/models/sistem800k_slika_33.jpg', 7);
INSERT INTO `model` VALUES (34, 'Dvokrilni prozor sa komaricom', 50.00, 120.00, 50.00, 120.00, 2, 'assets/images/models/sistem800k_slika_34.jpg', 7);
INSERT INTO `model` VALUES (35, 'Ulazna vrata', 120.00, 150.00, 145.00, 230.00, 3, 'assets/images/models/sistem800k_slika_35.jpg', 7);
INSERT INTO `model` VALUES (36, 'Polukružni prozor sa 3D šarkama', 50.00, 120.00, 50.00, 130.00, 2, 'assets/images/models/sistem800k_slika_36.jpg', 7);
INSERT INTO `model` VALUES (37, 'MR PREMIUM VRATA EFORTE standard', 60.00, 160.00, 100.00, 240.00, 3, 'assets/images/models/profilem904mini_slika_37.jpg', 11);
INSERT INTO `model` VALUES (40, 'MR ECO VRATA ARCADE 1', 50.00, 120.00, 100.00, 230.00, 4, 'assets/images/models/profilem904mini_slika_40.jpg', 11);
INSERT INTO `model` VALUES (44, 'MR ECO VRATA ARCADE 2', 50.00, 120.00, 100.00, 230.00, 3, 'assets/images/models/profilem904mini_slika_44.jpg', 11);
INSERT INTO `model` VALUES (46, 'MR PREMIUM VRATA EFORTE', 60.00, 150.00, 100.00, 245.00, 1, 'assets/images/models/profilem904mini_slika_46.jpg', 11);
INSERT INTO `model` VALUES (47, 'ALU ulazna vrata elegant', 50.00, 145.00, 130.00, 250.00, 1, 'assets/images/models/profilem9040softlineplus_slika_47.jpg', 10);
INSERT INTO `model` VALUES (49, 'ALU ulazna vrata standard 1', 50.00, 145.00, 130.00, 250.00, 2, 'assets/images/models/profilem9040softlineplus_slika_49.jpg', 10);
INSERT INTO `model` VALUES (51, 'ALU ulazna vrata standard 2', 50.00, 145.00, 130.00, 250.00, 1, 'assets/images/models/profilem9040softlineplus_slika_51.jpg', 10);
INSERT INTO `model` VALUES (55, 'ALU Sigurnosna vrata - model Tal', 50.00, 130.00, 115.00, 245.00, 4, 'assets/images/models/profilem9040softlineplus_slika_55.jpg', 10);
INSERT INTO `model` VALUES (56, 'MR ECO KLIZNI PROZOR ARCADE', 45.00, 90.00, 45.00, 90.00, 3, 'assets/images/models/profilm9050klizni_slika_56.jpg', 12);
INSERT INTO `model` VALUES (57, 'MR PREMIUM KLIZNI PROZOR EFORTE', 45.00, 90.00, 45.00, 90.00, 2, 'assets/images/models/profilm9050klizni_slika_57.jpg', 12);
INSERT INTO `model` VALUES (59, 'MR PREMIUM BALKONSKA KLIZNA VRATA EFORTE', 150.00, 345.00, 160.00, 280.00, 3, 'assets/images/models/profilm9050klizni_slika_59.jpg', 12);
INSERT INTO `model` VALUES (62, 'MR ECLUSIVE KLIZNA VRATA PRESTIGE ', 150.00, 345.00, 160.00, 280.00, 1, 'assets/images/models/profilm9050klizni_slika_62.jpg', 12);

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
) ENGINE = InnoDB AUTO_INCREMENT = 365 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Compact;

-- ----------------------------
-- Records of model_view
-- ----------------------------
INSERT INTO `model_view` VALUES (255, '2018-06-02 12:10:34', 35, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (256, '2018-06-02 12:24:55', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (257, '2018-06-02 12:28:55', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (258, '2018-06-02 12:28:56', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (259, '2018-06-02 12:28:57', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (260, '2018-06-02 12:28:57', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (261, '2018-06-02 12:28:57', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (262, '2018-06-02 12:29:08', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (263, '2018-06-02 12:29:09', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (264, '2018-06-02 12:29:10', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (265, '2018-06-02 12:29:10', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (266, '2018-06-02 12:29:11', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (267, '2018-06-02 12:29:11', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (268, '2018-06-02 12:29:11', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (269, '2018-06-02 12:29:12', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (270, '2018-06-02 12:29:18', 36, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (271, '2018-06-02 12:29:20', 35, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (272, '2018-06-02 13:10:03', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (273, '2018-06-02 13:16:03', 35, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (274, '2018-06-02 13:16:59', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (275, '2018-06-02 13:18:59', 36, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0');
INSERT INTO `model_view` VALUES (276, '2018-06-02 13:20:16', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0');
INSERT INTO `model_view` VALUES (277, '2018-06-02 13:21:28', 29, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0');
INSERT INTO `model_view` VALUES (278, '2018-06-02 13:22:54', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (279, '2018-06-02 13:53:18', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0');
INSERT INTO `model_view` VALUES (280, '2018-06-02 13:55:10', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0');
INSERT INTO `model_view` VALUES (281, '2018-06-02 14:28:29', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0');
INSERT INTO `model_view` VALUES (282, '2018-06-02 14:31:09', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0');
INSERT INTO `model_view` VALUES (283, '2018-06-02 14:52:50', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0');
INSERT INTO `model_view` VALUES (284, '2018-06-02 14:54:09', 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0');
INSERT INTO `model_view` VALUES (285, '2018-06-02 14:55:49', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (286, '2018-06-02 14:56:05', 36, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36');
INSERT INTO `model_view` VALUES (287, '2018-06-02 18:16:40', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0');
INSERT INTO `model_view` VALUES (288, '2018-06-02 18:17:22', 35, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0');
INSERT INTO `model_view` VALUES (289, '2018-06-02 18:18:09', 35, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0');
INSERT INTO `model_view` VALUES (290, '2018-06-02 18:21:25', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0');
INSERT INTO `model_view` VALUES (291, '2018-06-02 18:21:58', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0');
INSERT INTO `model_view` VALUES (292, '2018-06-02 18:22:01', 36, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0');
INSERT INTO `model_view` VALUES (293, '2018-06-02 18:27:28', 35, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0');
INSERT INTO `model_view` VALUES (294, '2018-06-02 20:46:40', 35, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0');
INSERT INTO `model_view` VALUES (295, '2018-06-02 20:47:01', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0');
INSERT INTO `model_view` VALUES (296, '2018-06-02 21:06:28', 35, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0');
INSERT INTO `model_view` VALUES (297, '2018-06-02 21:08:19', 36, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0');
INSERT INTO `model_view` VALUES (298, '2018-06-03 03:25:37', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0');
INSERT INTO `model_view` VALUES (299, '2018-06-03 03:25:41', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0');
INSERT INTO `model_view` VALUES (300, '2018-06-03 03:58:25', 34, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0');
INSERT INTO `model_view` VALUES (301, '2018-06-03 03:58:44', 34, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0');
INSERT INTO `model_view` VALUES (302, '2018-06-03 03:59:05', 31, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0');
INSERT INTO `model_view` VALUES (303, '2018-06-03 03:59:24', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0');
INSERT INTO `model_view` VALUES (304, '2018-06-03 03:59:28', 36, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0');
INSERT INTO `model_view` VALUES (305, '2018-06-04 13:47:21', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0');
INSERT INTO `model_view` VALUES (306, '2018-06-04 14:59:06', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0');
INSERT INTO `model_view` VALUES (307, '2018-06-04 20:21:23', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0');
INSERT INTO `model_view` VALUES (308, '2018-06-04 20:22:00', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0');
INSERT INTO `model_view` VALUES (309, '2018-06-05 20:51:10', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0');
INSERT INTO `model_view` VALUES (310, '2018-06-05 20:51:22', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0');
INSERT INTO `model_view` VALUES (311, '2018-06-05 21:48:11', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0');
INSERT INTO `model_view` VALUES (312, '2018-06-05 21:57:21', 35, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0');
INSERT INTO `model_view` VALUES (313, '2018-06-06 08:11:46', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0');
INSERT INTO `model_view` VALUES (314, '2018-06-06 10:16:19', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0');
INSERT INTO `model_view` VALUES (315, '2018-06-06 10:33:55', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0');
INSERT INTO `model_view` VALUES (346, '2018-06-19 23:20:28', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36 Edge/17.17134');
INSERT INTO `model_view` VALUES (347, '2018-06-19 23:34:01', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36 Edge/17.17134');
INSERT INTO `model_view` VALUES (348, '2018-06-19 23:40:45', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36 Edge/17.17134');
INSERT INTO `model_view` VALUES (349, '2018-06-19 23:45:24', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36 Edge/17.17134');
INSERT INTO `model_view` VALUES (350, '2018-06-19 23:54:33', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36 Edge/17.17134');
INSERT INTO `model_view` VALUES (351, '2018-06-19 23:55:26', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36 Edge/17.17134');
INSERT INTO `model_view` VALUES (352, '2018-06-19 23:56:45', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36 Edge/17.17134');
INSERT INTO `model_view` VALUES (353, '2018-06-20 07:55:02', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36 Edge/17.17134');
INSERT INTO `model_view` VALUES (354, '2018-06-20 08:36:49', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36 Edge/17.17134');
INSERT INTO `model_view` VALUES (355, '2018-06-20 08:37:05', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36 Edge/17.17134');
INSERT INTO `model_view` VALUES (356, '2018-06-20 08:37:06', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36 Edge/17.17134');
INSERT INTO `model_view` VALUES (357, '2018-06-20 08:37:08', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36 Edge/17.17134');
INSERT INTO `model_view` VALUES (358, '2018-06-20 08:37:13', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36 Edge/17.17134');
INSERT INTO `model_view` VALUES (359, '2018-06-20 22:34:36', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36 Edge/17.17134');
INSERT INTO `model_view` VALUES (360, '2018-06-20 22:34:48', 15, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36 Edge/17.17134');
INSERT INTO `model_view` VALUES (361, '2018-06-20 22:35:02', 6, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36 Edge/17.17134');
INSERT INTO `model_view` VALUES (362, '2018-06-21 08:04:17', 33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36 Edge/17.17134');
INSERT INTO `model_view` VALUES (363, '2018-06-21 08:04:30', 15, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36 Edge/17.17134');
INSERT INTO `model_view` VALUES (364, '2018-06-21 11:15:25', 62, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36 Edge/17.17134');

-- ----------------------------
-- Table structure for order_cart
-- ----------------------------
DROP TABLE IF EXISTS `order_cart`;
CREATE TABLE `order_cart`  (
  `order_cart_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `forename` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `surname` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `residential_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `created_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cart_id` int(11) UNSIGNED NOT NULL,
  `state` enum('u obradi','odbijena','odobrena') CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT 'u obradi',
  PRIMARY KEY (`order_cart_id`) USING BTREE,
  UNIQUE INDEX `uq_order_cart_id`(`cart_id`) USING BTREE,
  INDEX `fk_order_cart_id`(`cart_id`) USING BTREE,
  CONSTRAINT `fk_order_cart_id` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`cart_id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 36 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Compact;

-- ----------------------------
-- Records of order_cart
-- ----------------------------
INSERT INTO `order_cart` VALUES (5, 'Marko', 'Miseljic', 'Beograd Brace Jerkovic 54', 'marko.miseljic.14@gmail.com', '2018-06-04 15:22:16', 431, 'odbijena');
INSERT INTO `order_cart` VALUES (6, 'Marko', 'Miseljic', 'dryry', 'misko309@gmail.com', '2018-06-20 07:57:15', 471, 'u obradi');
INSERT INTO `order_cart` VALUES (10, 'Marko', 'Miseljic', '21edasd', 'misko309@gmail.com', '2018-06-20 22:35:20', 472, 'odobrena');
INSERT INTO `order_cart` VALUES (35, 'Marko', 'Miseljic', 'dryry', 'marko.miseljic.14@gmail.com', '2018-06-21 08:15:40', 475, 'odbijena');

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
INSERT INTO `profile` VALUES (1, 'SISTEM 300', 'assets/images/sistem300.png', '- 3 komorni profil, širine 54mm\r\n- trajan i postojan na atmosferske uticaje\r\n- jako dobra termoizolaciona sposobnost\r\n- koeficijent prolaza toplote k = 1,37 W/m2K', 15.00, 1, 1, 1);
INSERT INTO `profile` VALUES (2, 'SISTEM 400', 'assets/images/sistem400.png', '- 4 komorni profil, širine 61mm\r\n- trajan i postojan na atmosferske uticaje\r\n- jako dobra termoizolaciona sposobnost\r\n- koeficijent prolaza toplote k = 1,31 W/m2K', 14.00, 2, 1, 2);
INSERT INTO `profile` VALUES (3, 'SISTEM 500', 'assets/images/sistem500.png', '- 5 komorni profil, širine 65mm\r\n- trajan i postojan na atmosferske uticaje\r\n- jako dobra termoizolaciona sposobnost\r\n- koeficijent prolaza toplote k = 1,26 W/m2K', 12.00, 1, 1, 1);
INSERT INTO `profile` VALUES (4, 'SISTEM 600', 'assets/images/sistem600.png', '- 6 komorni profil, širine 75mm\r\n- trajan i postojan na atmosferske uticaje\r\n- jako dobra termoizolaciona sposobnost\r\n- koeficijent prolaza toplote k = 1,11 W/m2K', 13.00, 1, 1, 2);
INSERT INTO `profile` VALUES (6, 'SISTEM 800', 'assets/images/sistem800.png', '- 8 komorni profil, širine 90mm\r\n- trajan i postojan na atmosferske uticaje\r\n- jako dobra termoizolaciona sposobnost\r\n- koeficijent prolaza toplote k = 1,09 W/m2K', 11.00, 1, 1, 1);
INSERT INTO `profile` VALUES (7, 'SISTEM 800K', 'assets/images/sistem800k.png', '- klizni sistem širine 75mm\r\n- trajan i postojan na atmosferske uticaje\r\n- jako dobra termoizolaciona sposobnost', 10.00, 3, 1, 3);
INSERT INTO `profile` VALUES (8, 'PROFIL M11000 Alutherm Plus\r\n', 'assets/images/aluM11000.jpg', 'Širina profila 78mm\r\nTermički prekid pomoću poliamida ojačanih staklenim vlaknima debljine 20mm u krilu i 24mm u štoku (spada u najvišu kategoriju termičkih prekida – grupa 2.1 K = 2,6)\r\nProfili sa dve slobodne komore koje omogućavaju dobru evakuaciju vode i dobro vezivanje\r\nIma ugradjen sistem nepropustljivosti – ALUSEAL\r\nU ovaj profil može biti ugradjeno jednostruko, duplo ili trostruko staklo debljine do 57mm\r\nTežina stakla do 130kg po krilu prozora (zavisi od šarki koje se koriste) i do 150kg za ulazna vrata\r\nZaptivanje sa tri EPDM zaptivke\r\nOdlična zvučna izolacija (do 52dB)\r\nPodržava veliki broj estetskih opcija: minimalistički izgled, moderan, neoklasičan, tradicionalni itd.\r\nProfili za sve dimenzije vrata, pogodni i za komercijalne i za privatne objekte\r\nU ovoj seriji postoje posebno dizajnirani profili koji postižu izgled kao kod drvenih prozora (‘wood effect’)', 20.00, 2, 2, 4);
INSERT INTO `profile` VALUES (10, 'PROFIL M9400 Softline Plus\r\n', 'assets/images/aluM9400-sofline-plus.jpg', 'Širina profila 70 mm\r\nIma ugradjen sistem nepropustljivosti – ALUSEAL\r\nU ovaj profil može biti ugradjeno jednostruko ili duplo staklo, debljine od 10 – 32mm\r\nTežina stakla do 130kg po krilu\r\nZaptivanje pomoću tri EPDM zaptivke\r\nIma mogućnost velikog broja različitih estetskih rešenja (jednokrilni ili dvokrilni prozori i vrata, ulazna vrata, konstrukcije s nepravilnim uglovima i dr.)\r\nU ovoj seriji postoje posebno dizajnirani profili koji postižu izgled kao kod drvenih prozora (‘wood effect’)', 21.00, 4, 2, 4);
INSERT INTO `profile` VALUES (11, 'PROFIL M940 Mini\r\n', 'assets/images/aluM940_mini.jpg', 'Širina profila 45mm\r\nU ovaj profil može biti ugradjeno jednostruko ili duplo staklo, debljine od 10 – 26mm\r\nTežina stakla do 130kg po krilu\r\nZaptivanje pomoću tri EPDM zaptivke\r\nPodržava mnoge vrste i dizajne prozora\r\nPosebna izolacija (vodootporan, ne propusta vazduh, otporan na udare vetra itd.)\r\nU ovoj seriji postoje posebno dizajnirani profili koji postižu izgled kao kod drvenih prozora (‘wood effect’)', 18.00, 3, 2, 3);
INSERT INTO `profile` VALUES (12, 'PROFIL M9050 klizni\r\n', 'assets/images/aluM9050.jpg', 'Širina profila zavisi od toga koliko krila ima vaš prozor/vrata (jednošinski profil za jedno krilo, dvošinski za dva ili četiri krila, trošinski za tri ili šest krila itd.)\r\nŠirina krila 32mm\r\nJednostruko ili duplo staklo, debljine od 16 – 20mm\r\nMaksimalna težina krila do 80kg\r\nMaksimalna nepropustljivost vode i zvučna izolacija\r\n3 opciona načina da otvorite prozor/vrata\r\nSpektar od preko 40 boja koje možete izabrati za individualno dizajniranje', 23.00, 3, 2, 1);

SET FOREIGN_KEY_CHECKS = 1;
