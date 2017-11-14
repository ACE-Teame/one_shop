/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : one_shop

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-11-12 14:15:10
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `admin_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(48) NOT NULL,
  `password` varchar(256) NOT NULL,
  `created_time` int(10) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------

-- ----------------------------
-- Table structure for `goods`
-- ----------------------------
DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `goods_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `goods_name` varchar(64) NOT NULL,
  `goods_descript` text,
  `price` decimal(10,2) NOT NULL,
  `dicount` decimal(4,2) NOT NULL DEFAULT '1.00',
  `add_admin_id` int(11) NOT NULL,
  PRIMARY KEY (`goods_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商品表';

-- ----------------------------
-- Records of goods
-- ----------------------------

-- ----------------------------
-- Table structure for `goods_attribute`
-- ----------------------------
DROP TABLE IF EXISTS `goods_attribute`;
CREATE TABLE `goods_attribute` (
  `attr_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `attr_name` varchar(48) NOT NULL,
  `created_time` int(10) NOT NULL,
  PRIMARY KEY (`attr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商品属性表';

-- ----------------------------
-- Records of goods_attribute
-- ----------------------------

-- ----------------------------
-- Table structure for `goods_attribute_val`
-- ----------------------------
DROP TABLE IF EXISTS `goods_attribute_val`;
CREATE TABLE `goods_attribute_val` (
  `attr_val_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `attr_id` int(11) NOT NULL,
  `attr_val` varchar(48) NOT NULL,
  `created_time` int(10) NOT NULL,
  PRIMARY KEY (`attr_val_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='属性值';

-- ----------------------------
-- Records of goods_attribute_val
-- ----------------------------

-- ----------------------------
-- Table structure for `goods_category`
-- ----------------------------
DROP TABLE IF EXISTS `goods_category`;
CREATE TABLE `goods_category` (
  `cate_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(48) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `created_time` int(10) NOT NULL,
  PRIMARY KEY (`cate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商品分类';

-- ----------------------------
-- Records of goods_category
-- ----------------------------

-- ----------------------------
-- Table structure for `goods_cate_attr`
-- ----------------------------
DROP TABLE IF EXISTS `goods_cate_attr`;
CREATE TABLE `goods_cate_attr` (
  `cate_id` int(11) NOT NULL,
  `attr_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='分类属性关联表';

-- ----------------------------
-- Records of goods_cate_attr
-- ----------------------------

-- ----------------------------
-- Table structure for `goods_picture`
-- ----------------------------
DROP TABLE IF EXISTS `goods_picture`;
CREATE TABLE `goods_picture` (
  `picture_id` int(11) NOT NULL,
  `goods_id` int(11) NOT NULL,
  `path` varchar(128) NOT NULL,
  PRIMARY KEY (`picture_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of goods_picture
-- ----------------------------

-- ----------------------------
-- Table structure for `goods_use_attr`
-- ----------------------------
DROP TABLE IF EXISTS `goods_use_attr`;
CREATE TABLE `goods_use_attr` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` int(11) NOT NULL,
  `attr_id` int(11) NOT NULL,
  `attr_value_id` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商品拥有属性';

-- ----------------------------
-- Records of goods_use_attr
-- ----------------------------

-- ----------------------------
-- Table structure for `goods_use_attr_price`
-- ----------------------------
DROP TABLE IF EXISTS `goods_use_attr_price`;
CREATE TABLE `goods_use_attr_price` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` int(11) NOT NULL,
  `attr_val_ids` varchar(256) NOT NULL,
  `stock` int(11) NOT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商品组合属性价格库存表';

-- ----------------------------
-- Records of goods_use_attr_price
-- ----------------------------

-- ----------------------------
-- Table structure for `order`
-- ----------------------------
DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `order_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `order_sn` varchar(36) NOT NULL,
  `goods_id` int(11) NOT NULL,
  `receiver_name` varchar(36) NOT NULL,
  `receiver_address` varchar(64) NOT NULL,
  `receiver_phone` varchar(16) NOT NULL,
  `order_status` tinyint(1) NOT NULL DEFAULT '1',
  `order_created_time` int(10) NOT NULL,
  `remark` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='订单表';

-- ----------------------------
-- Records of order
-- ----------------------------
