-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 05 月 24 日 00:35
-- 服务器版本: 5.5.24
-- PHP 版本: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `db_str`
--

-- --------------------------------------------------------

--
-- 表的结构 `stu`
--

CREATE TABLE IF NOT EXISTS `stu` (
  `stu_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '序号',
  `stu_name` varchar(20) NOT NULL COMMENT '姓名',
  `stu_sex` char(2) NOT NULL COMMENT '性别',
  `stu_date` date NOT NULL COMMENT '入学日期',
  `stu_score` int(11) NOT NULL COMMENT '入学成绩',
  `stu_add` varchar(40) NOT NULL COMMENT '家庭住址',
  PRIMARY KEY (`stu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- 转存表中的数据 `stu`
--

INSERT INTO `stu` (`stu_id`, `stu_name`, `stu_sex`, `stu_date`, `stu_score`, `stu_add`) VALUES
(1, '黄方', '女', '2013-08-27', 395, '上海市中山路258号'),
(2, '陈超凡', '男', '2013-08-26', 412, '北京市朝阳区亮马河45号'),
(3, '田海燕', '女', '2015-09-01', 550, '福建省泉州市泉港镇691号'),
(4, '肖娅妮', '女', '2012-08-23', 509, '福建省漳州市石码镇102号'),
(5, '叶滨', '男', '2014-08-22', 580, '福建省厦门市嘉禾路721号'),
(6, '赵慧杰', '男', '2013-09-21', 398, '四川省成都市春熙路412号'),
(7, '陈林玲', '女', '2013-08-29', 475, '云南省大理市'),
(8, '高小松', '男', '2014-08-31', 430, '福建省龙岩市'),
(9, '黄键平', '男', '2012-08-29', 315, '上海市南京东路170号'),
(10, '王磊', '男', '2014-09-02', 430, '广东省'),
(11, '姚小红', '女', '2013-09-01', 416, '江西省'),
(12, '郭亮亮', '男', '2015-09-03', 420, '广东省江门市 '),
(13, '李海燕', '女', '2013-09-01', 399, '广东省'),
(14, '丁一星', '男', '2013-09-01', 350, '香港'),
(15, '江小萍', '女', '2014-09-02', 460, '香港'),
(16, '郭晶', '女', '2015-09-01', 300, '北京市海淀区'),
(25, '陈琦', '男', '2014-09-03', 321, '云南大理'),
(26, '王伟男', '男', '2013-08-29', 287, '香港'),
(27, '赵小伟', '男', '2013-08-29', 360, '香港'),
(28, '梁丽丽 ', '女', '2013-08-25', 500, '香港'),
(29, '张芳 ', '女', '2013-08-25', 421, '广东深圳');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
