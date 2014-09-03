-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 09 月 03 日 01:23
-- 服务器版本: 5.0.51a-community-nt
-- PHP 版本: 5.2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `dcms`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `user_id` tinyint(2) unsigned NOT NULL auto_increment,
  `username` varchar(20) collate utf8_unicode_ci NOT NULL default '',
  `passwd` varchar(40) collate utf8_unicode_ci NOT NULL default '',
  `nickname` varchar(21) collate utf8_unicode_ci NOT NULL default '',
  `power` tinyint(2) NOT NULL default '0',
  `powerls` varchar(30) collate utf8_unicode_ci NOT NULL default '0',
  PRIMARY KEY  (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=30 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`user_id`, `username`, `passwd`, `nickname`, `power`, `powerls`) VALUES
(1, 'admin', '123456', 'dx', 1, '0'),
(2, 'sad', 'asd', 'asd', 2, ''),
(29, '', '', '', 0, '');

-- --------------------------------------------------------

--
-- 表的结构 `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `art_id` int(7) unsigned NOT NULL auto_increment,
  `title` varchar(60) collate utf8_unicode_ci NOT NULL default '',
  `keywords` varchar(60) collate utf8_unicode_ci NOT NULL default '',
  `description` varchar(300) collate utf8_unicode_ci NOT NULL default '',
  `cat_id` tinyint(3) NOT NULL default '0',
  `flag` char(20) collate utf8_unicode_ci NOT NULL default '',
  `pubdate` int(20) NOT NULL default '0',
  `sendate` int(20) NOT NULL default '0',
  `content` text collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`art_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `article`
--

INSERT INTO `article` (`art_id`, `title`, `keywords`, `description`, `cat_id`, `flag`, `pubdate`, `sendate`, `content`) VALUES
(2, '去掉a标签状态栏显示链接地址', 'html,链接地址', '<p>找了很多方法，例如window.status==”xxx”循环执行，但还是这个好用</p>', 1, '', 0, 1408952283, '<p>找了很多方法，例如window.status==”xxx”循环执行，但还是这个好用</p>\n<p>&lt;script&gt;<br>\n$(document).ready(function(){<br>\n$(“a”).each(function(){<br>\nvar href2 = $(this).attr(“href”);<br>\n$(this).attr(“href”,”/”).attr(“href2″,href2);<br>\n});<br>\n$(“a”).click( function () {<br>\nvar newhref = $(this).attr(“href2″);<br>\n$(this).attr(“href”,newhref);</p>\n<p>});</p>\n<p>});<br>\n&lt;/script&gt;</p>');

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` tinyint(3) unsigned NOT NULL auto_increment,
  `cat_name` char(24) NOT NULL default '',
  `cat_keywords` varchar(60) NOT NULL default '',
  `cat_des` varchar(150) NOT NULL default '',
  `cat_pid` tinyint(3) NOT NULL default '0',
  `date` int(20) NOT NULL default '0',
  PRIMARY KEY  (`cat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_keywords`, `cat_des`, `cat_pid`, `date`) VALUES
(1, '笔记', '笔记', 'PHP HTML 程序笔记', 0, 0),
(2, '二次开发', 'CMS 框架 ThinkPHP', 'dedecms 二次开发 thinkPHP Yii', 0, 0),
(3, '生活杂谈', '新闻 文章 美文', '新闻 文章 美文', 0, 0),
(4, '随笔', '生活随笔', '生活随笔', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `power`
--

CREATE TABLE IF NOT EXISTS `power` (
  `power_id` tinyint(2) unsigned NOT NULL auto_increment,
  `powername` varchar(30) collate utf8_unicode_ci NOT NULL default '',
  PRIMARY KEY  (`power_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `power`
--

INSERT INTO `power` (`power_id`, `powername`) VALUES
(1, '超级管理员'),
(2, '信息发布员');

-- --------------------------------------------------------

--
-- 表的结构 `sysconfig`
--

CREATE TABLE IF NOT EXISTS `sysconfig` (
  `sid` tinyint(3) unsigned NOT NULL auto_increment,
  `varname` varchar(20) collate utf8_unicode_ci NOT NULL default '',
  `info` varchar(30) collate utf8_unicode_ci NOT NULL default '',
  `value` varchar(30) collate utf8_unicode_ci NOT NULL default '',
  `group_id` tinyint(2) NOT NULL default '0',
  PRIMARY KEY  (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `sysconfig`
--

INSERT INTO `sysconfig` (`sid`, `varname`, `info`, `value`, `group_id`) VALUES
(1, 'd_webname', '网站名称', '', 1),
(2, 'd_keywords', '网站关键字', '', 1),
(3, 'd_description', '网站描述', '', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
