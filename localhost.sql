-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- โฮสต์: localhost
-- เวลาในการสร้าง: 
-- รุ่นของเซิร์ฟเวอร์: 5.0.51
-- รุ่นของ PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- ฐานข้อมูล: `project`
-- 
CREATE DATABASE `project` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `project`;

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `component`
-- 

CREATE TABLE `component` (
  `id_component` int(11) NOT NULL auto_increment,
  `type_component` int(11) NOT NULL,
  `name_component` varchar(50) collate utf8_unicode_ci NOT NULL,
  `volume` varchar(20) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id_component`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

-- 
-- dump ตาราง `component`
-- 

INSERT INTO `component` VALUES (1, 1, 'เนื้อ', 'กิโลกรัม');
INSERT INTO `component` VALUES (2, 4, 'น้ำตาล', 'กรัม');
INSERT INTO `component` VALUES (3, 4, 'น้ำปลา', 'มิลลืลิตร');
INSERT INTO `component` VALUES (4, 3, 'ส้ม', 'ผล');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `disease`
-- 

CREATE TABLE `disease` (
  `id_disease` int(11) NOT NULL auto_increment,
  `name_disease` varchar(50) collate utf8_unicode_ci NOT NULL,
  `cause_disease` text collate utf8_unicode_ci NOT NULL,
  `prevention_disease` text collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id_disease`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=23 ;

-- 
-- dump ตาราง `disease`
-- 

INSERT INTO `disease` VALUES (15, 'ปากนกกระจอก', '', '');
INSERT INTO `disease` VALUES (4, 'nameDisease', 'cause', 'prevention');
INSERT INTO `disease` VALUES (14, 'ใช้', '', '');
INSERT INTO `disease` VALUES (16, 'หวัด', '', '');
INSERT INTO `disease` VALUES (17, 'Disease', 'cause', 'prevention');
INSERT INTO `disease` VALUES (18, 'โรคใหม่', 'dddd', 'ffff');
INSERT INTO `disease` VALUES (19, 'โรคกระเพาะอาหาร', 'โรคกระเพาะอาหาร', 'โรคกระเพาะอาหาร');
INSERT INTO `disease` VALUES (20, 'ทดสอบโรค', 'ทดสอบ', 'ทดสอบ');
INSERT INTO `disease` VALUES (21, 'ทดสอบโรค', 'ทดสอบ', 'ทดสอบ');
INSERT INTO `disease` VALUES (22, 'newDisase', 'testdisease', 'tesddd');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `food`
-- 

CREATE TABLE `food` (
  `id_food` int(11) NOT NULL auto_increment,
  `type_food` int(11) NOT NULL,
  `name_food` varchar(50) collate utf8_unicode_ci NOT NULL,
  `method_food` text collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id_food`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

-- 
-- dump ตาราง `food`
-- 

INSERT INTO `food` VALUES (6, 1, 'ข้าวผัด', '<p>อปดกหดอดกหดหอแปอ</p>');
INSERT INTO `food` VALUES (8, 1, 'testtest', '<p>kerkkhai santikurkuwong</p>');
INSERT INTO `food` VALUES (9, 1, 'testssssddd', '<p>face</p>');
INSERT INTO `food` VALUES (10, 1, 'ใข่น้ำ', '<p>วิธีทำ</p>');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `map_component`
-- 

CREATE TABLE `map_component` (
  `id_food` int(11) NOT NULL,
  `id_component` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- dump ตาราง `map_component`
-- 

INSERT INTO `map_component` VALUES (8, 2, 0);
INSERT INTO `map_component` VALUES (9, 1, 10);
INSERT INTO `map_component` VALUES (9, 2, 20);
INSERT INTO `map_component` VALUES (9, 3, 30);
INSERT INTO `map_component` VALUES (10, 1, 1);
INSERT INTO `map_component` VALUES (10, 2, 5);
INSERT INTO `map_component` VALUES (10, 3, 2);

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `map_disease`
-- 

CREATE TABLE `map_disease` (
  `id_disease` int(11) NOT NULL,
  `id_symptom` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- dump ตาราง `map_disease`
-- 

INSERT INTO `map_disease` VALUES (15, 2);
INSERT INTO `map_disease` VALUES (14, 7);
INSERT INTO `map_disease` VALUES (14, 1);
INSERT INTO `map_disease` VALUES (15, 7);
INSERT INTO `map_disease` VALUES (16, 8);
INSERT INTO `map_disease` VALUES (16, 10);
INSERT INTO `map_disease` VALUES (16, 7);
INSERT INTO `map_disease` VALUES (18, 3);
INSERT INTO `map_disease` VALUES (18, 8);
INSERT INTO `map_disease` VALUES (19, 5);
INSERT INTO `map_disease` VALUES (19, 6);
INSERT INTO `map_disease` VALUES (19, 1);
INSERT INTO `map_disease` VALUES (20, 1);
INSERT INTO `map_disease` VALUES (21, 1);
INSERT INTO `map_disease` VALUES (22, 15);
INSERT INTO `map_disease` VALUES (22, 8);

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `map_food`
-- 

CREATE TABLE `map_food` (
  `id_food` int(11) NOT NULL,
  `id_disease` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- dump ตาราง `map_food`
-- 

INSERT INTO `map_food` VALUES (8, 15);
INSERT INTO `map_food` VALUES (8, 4);
INSERT INTO `map_food` VALUES (8, 18);
INSERT INTO `map_food` VALUES (9, 14);
INSERT INTO `map_food` VALUES (9, 20);
INSERT INTO `map_food` VALUES (9, 19);
INSERT INTO `map_food` VALUES (10, 15);
INSERT INTO `map_food` VALUES (10, 20);

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `symptom`
-- 

CREATE TABLE `symptom` (
  `id_symptom` int(11) NOT NULL auto_increment,
  `type_wrong` int(11) NOT NULL,
  `symptom` varchar(250) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id_symptom`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

-- 
-- dump ตาราง `symptom`
-- 

INSERT INTO `symptom` VALUES (1, 1, 'ปวดหัว');
INSERT INTO `symptom` VALUES (2, 3, 'มีแผลในปาก');
INSERT INTO `symptom` VALUES (3, 2, 'หูอื้อ');
INSERT INTO `symptom` VALUES (4, 2, 'ในหูมีน้ำ');
INSERT INTO `symptom` VALUES (5, 1, 'ปวดหัวเวลากลางคืน');
INSERT INTO `symptom` VALUES (6, 2, 'ในหูมีน้ำ');
INSERT INTO `symptom` VALUES (7, 3, 'ปากมีกลิ่นเหม็น');
INSERT INTO `symptom` VALUES (8, 4, 'มีเสล็ด');
INSERT INTO `symptom` VALUES (9, 4, 'คันคอ');
INSERT INTO `symptom` VALUES (10, 4, 'เสียงแหบ');
INSERT INTO `symptom` VALUES (15, 1, 'ปวดหัวเมื่อเจอแสง');
INSERT INTO `symptom` VALUES (16, 7, 'มีน้ำเหลือง');
INSERT INTO `symptom` VALUES (22, 3, 'dfdfsdf');
INSERT INTO `symptom` VALUES (23, 7, 'sddffff');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `type_component`
-- 

CREATE TABLE `type_component` (
  `id_type_component` int(11) NOT NULL auto_increment,
  `name_type_component` varchar(50) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id_type_component`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

-- 
-- dump ตาราง `type_component`
-- 

INSERT INTO `type_component` VALUES (1, 'เนื้อสัตว์');
INSERT INTO `type_component` VALUES (2, 'ผัก');
INSERT INTO `type_component` VALUES (3, 'ผลไม้');
INSERT INTO `type_component` VALUES (4, 'เครื่องปรุง');
INSERT INTO `type_component` VALUES (5, 'ซอส');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `type_food`
-- 

CREATE TABLE `type_food` (
  `id_type_food` int(11) NOT NULL auto_increment,
  `name_type_food` varchar(100) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id_type_food`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

-- 
-- dump ตาราง `type_food`
-- 

INSERT INTO `type_food` VALUES (1, 'ต้ม');
INSERT INTO `type_food` VALUES (6, 'อาหารหวาน');
INSERT INTO `type_food` VALUES (12, 'อาหารคาว');
INSERT INTO `type_food` VALUES (11, 'อาหารต้ม');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `type_wrong`
-- 

CREATE TABLE `type_wrong` (
  `id_type` int(11) NOT NULL auto_increment,
  `name_type` varchar(250) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id_type`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

-- 
-- dump ตาราง `type_wrong`
-- 

INSERT INTO `type_wrong` VALUES (1, 'ศรีษะ');
INSERT INTO `type_wrong` VALUES (2, 'หู');
INSERT INTO `type_wrong` VALUES (3, 'ปาก');
INSERT INTO `type_wrong` VALUES (4, 'คอ');
INSERT INTO `type_wrong` VALUES (6, 'ท้อง');
INSERT INTO `type_wrong` VALUES (7, 'เท้า');
INSERT INTO `type_wrong` VALUES (17, 'ืnew type');
INSERT INTO `type_wrong` VALUES (16, 'test');
