-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 04 月 23 日 11:56
-- 服务器版本: 5.5.24-log
-- PHP 版本: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `mydatabase`
--

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `psd` char(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`user_id`, `name`, `psd`, `email`, `reg_date`) VALUES
(1, '赵多', '123', 'zhaoyi@xujc.com', '2016-11-01 11:30:10'),
(2, '丁玲玲', '145258', 'ding@163.com', '2016-11-29 01:50:30'),
(3, '张楠芳', '00785', 'zhangn@163.com', '2015-12-28 16:00:00'),
(4, '胡若兵', '00012', 'hurou@xujc.com', '2016-06-22 16:00:00'),
(5, '康杨', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'kan@qq.com', '2016-12-07 07:37:59'),
(6, '丁西珍', 'f6e1126cedebf23e1463aee73f9df08783640400', 'zheng@xujc.com', '2016-12-07 07:38:39'),
(7, '刘亮亮', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', 'liang@qq.com', '2016-12-07 07:39:35'),
(8, '钱进', '1c6637a8f2e1f75e06ff9984894d6bd16a3a36a9', 'qing@qq.com', '2016-12-07 07:40:06'),
(9, '任我行', '17ba0791499db908433b80f37c5fbc89b870084b', 'reng@qq.com', '2016-12-07 07:40:47'),
(10, '苏小朋', '17ba0791499db908433b80f37c5fbc89b870084b', 'shu@qq.com', '2016-12-07 07:41:11'),
(12, '听歌', '8a1beaee63fed318ca54d4f7d18cee4081c68a74', 'dfs@df.com', '2017-04-11 09:36:45');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
