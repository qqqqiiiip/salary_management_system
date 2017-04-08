/*
Navicat MySQL Data Transfer

Source Server         : nodejs
Source Server Version : 50553
Source Host           : 114.215.152.154:3306
Source Database       : salarymanagement

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-04-08 21:01:16
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `base_information`
-- ----------------------------
DROP TABLE IF EXISTS `base_information`;
CREATE TABLE `base_information` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `superior_id` int(3) DEFAULT NULL,
  `department_id` int(3) DEFAULT NULL,
  `base_wage` int(7) DEFAULT NULL,
  `House_wage` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of base_information
-- ----------------------------
INSERT INTO `base_information` VALUES ('1', '弓', '1', '2', '5000', '200');
INSERT INTO `base_information` VALUES ('2', '海', '1', '2', '4000', '0');
INSERT INTO `base_information` VALUES ('3', '123', '1', '3', '50000', '100');

-- ----------------------------
-- Table structure for `department`
-- ----------------------------
DROP TABLE IF EXISTS `department`;
CREATE TABLE `department` (
  `d_id` int(3) NOT NULL AUTO_INCREMENT,
  `d_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of department
-- ----------------------------

-- ----------------------------
-- Table structure for `rules`
-- ----------------------------
DROP TABLE IF EXISTS `rules`;
CREATE TABLE `rules` (
  `id` int(5) DEFAULT NULL,
  `base_days` int(2) DEFAULT NULL,
  `late_wage` int(5) DEFAULT NULL,
  `leave_wage` int(5) DEFAULT NULL,
  `over_wage` int(5) DEFAULT NULL,
  `ask_wage` int(5) DEFAULT NULL,
  `key` int(5) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rules
-- ----------------------------
INSERT INTO `rules` VALUES ('1', '21', '50', '500', '500', '200', '1');

-- ----------------------------
-- Table structure for `usr`
-- ----------------------------
DROP TABLE IF EXISTS `usr`;
CREATE TABLE `usr` (
  `username` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usr
-- ----------------------------
INSERT INTO `usr` VALUES ('ghb', '123');

-- ----------------------------
-- Table structure for `wage`
-- ----------------------------
DROP TABLE IF EXISTS `wage`;
CREATE TABLE `wage` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `e_id` int(5) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `d_id` int(5) DEFAULT NULL,
  `year` int(10) DEFAULT NULL,
  `month` int(10) DEFAULT NULL,
  `late_days` int(2) DEFAULT NULL,
  `leave_days` int(2) DEFAULT NULL,
  `ask_days` int(2) DEFAULT NULL,
  `over_hours` int(3) DEFAULT NULL,
  `base_wage` int(7) DEFAULT NULL,
  `House_wage` int(5) DEFAULT NULL,
  `should_wage` int(7) DEFAULT NULL,
  `shouldnot_wage` int(7) DEFAULT NULL,
  `real_wage` int(7) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wage
-- ----------------------------
INSERT INTO `wage` VALUES ('14', '1', '弓', '2', '2017', '3', '2', '3', '2', '2', '5000', '200', '6200', '2000', '4200');
INSERT INTO `wage` VALUES ('15', '1', '弓', '2', '2017', '4', '1', '1', '1', '1', '5000', '200', '5700', '750', '4950');
INSERT INTO `wage` VALUES ('16', '2', '海', '2', '2017', '4', '1', '1', '5', '5', '4000', '0', '6500', '1550', '4950');
INSERT INTO `wage` VALUES ('17', '2', '海', '2', '2017', '3', '0', '0', '0', '8', '4000', '0', '8000', '0', '8000');
