/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100130
 Source Host           : localhost:3306
 Source Schema         : pvc_alu_database

 Target Server Type    : MySQL
 Target Server Version : 100130
 File Encoding         : 65001

 Date: 16/04/2018 09:06:50
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
INSERT INTO `administrator` VALUES (1, 'milan.nikolic.14@singimail.rs', '123456');
INSERT INTO `administrator` VALUES (2, 'marko.miseljic.14@singimail.rs', '654321');
INSERT INTO `administrator` VALUES (3, 'misko309@gmail.com', '123123');
INSERT INTO `administrator` VALUES (4, 'marko.miseljic.14@gmail.com', '321321');

-- ----------------------------
-- Table structure for cart
-- ----------------------------
DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart`  (
  `cart_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `session_number` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`cart_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for cart_model
-- ----------------------------
DROP TABLE IF EXISTS `cart_model`;
CREATE TABLE `cart_model`  (
  `cart_model_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `added_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `model_price` decimal(10, 2) UNSIGNED NOT NULL,
  `cart_id` int(11) UNSIGNED NOT NULL,
  `model_id` int(11) UNSIGNED NOT NULL,
  PRIMARY KEY (`cart_model_id`) USING BTREE,
  INDEX `fk_cart_model_cart_id`(`cart_id`) USING BTREE,
  INDEX `fk_cart_model_model_id`(`model_id`) USING BTREE,
  CONSTRAINT `fk_cart_model_cart_id` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`cart_id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `fk_cart_model_model_id` FOREIGN KEY (`model_id`) REFERENCES `model` (`model_id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category`  (
  `category_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `picture` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`category_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Compact;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES (1, 'PVC', '', '');
INSERT INTO `category` VALUES (2, 'ALU', '', '');

-- ----------------------------
-- Table structure for manufacturer
-- ----------------------------
DROP TABLE IF EXISTS `manufacturer`;
CREATE TABLE `manufacturer`  (
  `manufacturer_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `administrator_id` int(11) UNSIGNED NOT NULL,
  PRIMARY KEY (`manufacturer_id`) USING BTREE,
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
  `profile_id` int(11) UNSIGNED NOT NULL,
  PRIMARY KEY (`model_id`) USING BTREE,
  INDEX `fk_model_administrator_id`(`administrator_id`) USING BTREE,
  INDEX `fk_model_profile_id`(`profile_id`) USING BTREE,
  CONSTRAINT `fk_model_administrator_id` FOREIGN KEY (`administrator_id`) REFERENCES `administrator` (`administrator_id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `fk_model_profile_id` FOREIGN KEY (`profile_id`) REFERENCES `profile` (`profile_id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Compact;

-- ----------------------------
-- Records of model
-- ----------------------------
INSERT INTO `model` VALUES (1, 'PVC Vrata', 100.00, 1000.00, 1000.00, 1000.00, 1, 1);
INSERT INTO `model` VALUES (4, 'PVC Prozor', 11.00, 123.00, 213.00, 23.00, 2, 1);

-- ----------------------------
-- Table structure for order
-- ----------------------------
DROP TABLE IF EXISTS `order`;
CREATE TABLE `order`  (
  `order_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `surname` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `residential_address` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
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
  `picture` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `price_per_unit_area` decimal(10, 2) UNSIGNED NOT NULL,
  `administrator_id` int(11) UNSIGNED NOT NULL,
  `category_id` int(11) UNSIGNED NOT NULL,
  `manufacturer_id` int(11) UNSIGNED NOT NULL,
  PRIMARY KEY (`profile_id`) USING BTREE,
  UNIQUE INDEX `uq_profile_name`(`name`) USING BTREE,
  INDEX `fk_profile_administrator_id`(`administrator_id`) USING BTREE,
  INDEX `fk_profile_category_id`(`category_id`) USING BTREE,
  INDEX `fk_profile_manufacturer_id`(`manufacturer_id`) USING BTREE,
  CONSTRAINT `fk_profile_administrator_id` FOREIGN KEY (`administrator_id`) REFERENCES `administrator` (`administrator_id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `fk_profile_category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `fk_profile_manufacturer_id` FOREIGN KEY (`manufacturer_id`) REFERENCES `manufacturer` (`manufacturer_id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Compact;

-- ----------------------------
-- Records of profile
-- ----------------------------
INSERT INTO `profile` VALUES (1, 'gg', '', 'asdad', 123.00, 1, 1, 1);

SET FOREIGN_KEY_CHECKS = 1;
