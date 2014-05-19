/*
Navicat MySQL Data Transfer

Source Server         : Localhost
Source Server Version : 50532
Source Host           : localhost:3306
Source Database       : linhskin_km

Target Server Type    : MYSQL
Target Server Version : 50532
File Encoding         : 65001

Date: 2014-05-20 01:34:09
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `user_code`
-- ----------------------------
DROP TABLE IF EXISTS `user_code`;
CREATE TABLE `user_code` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `create_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_code
-- ----------------------------
INSERT INTO `user_code` VALUES ('49', 'Tuáº¥n Anh Äinh', 'dinhtuananh227@gmai.com', '2147483647', 'M9E35', '1400524407');
