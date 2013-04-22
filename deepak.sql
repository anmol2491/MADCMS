-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 24, 2013 at 02:18 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `deepak`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `pid` int(11) DEFAULT NULL,
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `cmt` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`pid`, `cid`, `name`, `cmt`) VALUES
(19, 4, 'Himanshu', 'Used CSS?'),
(27, 5, 'hello', 'buddy'),
(27, 6, 'hello', 'buddy'),
(19, 7, 'Check', 'Check comment'),
(19, 8, 'Boxer', 'Nice Work');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `memberID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `eid` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`memberID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`memberID`, `username`, `password`, `eid`) VALUES
(23, 'Deepak', 'cf2498d9d7f42d0d7f9d9031210ed4ea', 'deepak.mittal2192@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `pageID` int(11) NOT NULL AUTO_INCREMENT,
  `pageTitle` varchar(255) DEFAULT NULL,
  `isRoot` int(11) NOT NULL DEFAULT '1',
  `pageCont` text,
  PRIMARY KEY (`pageID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`pageID`, `pageTitle`, `isRoot`, `pageCont`) VALUES
(1, 'Home', 0, '<style> \r\n#sexy\r\n{\r\nfont-size:20px;\r\ntext-align:center;\r\npadding-top:auto;\r\npadding-bottom:auto;\r\nwidth:100px;\r\nheight:100px;\r\nbackground:red;\r\nposition:relative;\r\nmargin-bottom:200px;\r\nanimation-name:myfirst;\r\nanimation-duration:5s;\r\nanimation-timing-function:linear;\r\nanimation-delay:2s;\r\nanimation-iteration-count:infinite;\r\nanimation-direction:alternate;\r\nanimation-play-state:running;\r\n/* Firefox: */\r\n-moz-animation-name:myfirst;\r\n-moz-animation-duration:5s;\r\n-moz-animation-timing-function:linear;\r\n-moz-animation-delay:2s;\r\n-moz-animation-iteration-count:infinite;\r\n-moz-animation-direction:alternate;\r\n-moz-animation-play-state:running;\r\n/* Safari and Chrome: */\r\n-webkit-animation-name:myfirst;\r\n-webkit-animation-duration:5s;\r\n-webkit-animation-timing-function:linear;\r\n-webkit-animation-delay:2s;\r\n-webkit-animation-iteration-count:infinite;\r\n-webkit-animation-direction:alternate;\r\n-webkit-animation-play-state:running;\r\n/* Opera: */\r\n-o-animation-name:myfirst;\r\n-o-animation-duration:5s;\r\n-o-animation-timing-function:linear;\r\n-o-animation-delay:2s;\r\n-o-animation-iteration-count:infinite;\r\n-o-animation-direction:alternate;\r\n-o-animation-play-state:running;\r\n}\r\n\r\n@keyframes myfirst\r\n{\r\n0%   {background:red; left:0px; top:0px;}\r\n25%  {background:yellow; left:200px; top:0px;}\r\n50%  {background:blue; left:200px; top:200px;}\r\n75%  {background:green; left:0px; top:200px;}\r\n100% {background:red; left:0px; top:0px;}\r\n}\r\n\r\n@-moz-keyframes myfirst /* Firefox */\r\n{\r\n0%   {background:red; left:0px; top:0px;}\r\n25%  {background:yellow; left:200px; top:0px;}\r\n50%  {background:blue; left:200px; top:200px;}\r\n75%  {background:green; left:0px; top:200px;}\r\n100% {background:red; left:0px; top:0px;}\r\n}\r\n\r\n@-webkit-keyframes myfirst /* Safari and Chrome */\r\n{\r\n0%   {background:red; left:0px; top:0px;}\r\n25%  {background:yellow; left:200px; top:0px;}\r\n50%  {background:blue; left:200px; top:200px;}\r\n75%  {background:green; left:0px; top:200px;}\r\n100% {background:red; left:0px; top:0px;}\r\n}\r\n\r\n@-o-keyframes myfirst /* Opera */\r\n{\r\n0%   {background:red; left:0px; top:0px;}\r\n25%  {background:yellow; left:200px; top:0px;}\r\n50%  {background:blue; left:200px; top:200px;}\r\n75%  {background:green; left:0px; top:200px;}\r\n100% {background:red; left:0px; top:0px;}\r\n}\r\n</style>\r\n\r\n\r\n\r\n<div id="sexy">Deepak</div>\r\n'),
(19, 'Table', 1, '<style>\r\n#customers\r\n{\r\nfont-family:"Trebuchet MS", Arial, Helvetica, sans-serif;\r\nwidth:100%;\r\nborder-collapse:collapse;\r\n}\r\n#customers td, #customers th \r\n{\r\nfont-size:1em;\r\nborder:1px solid #98bf21;\r\npadding:3px 7px 2px 7px;\r\n}\r\n#customers th \r\n{\r\nfont-size:1.1em;\r\ntext-align:left;\r\npadding-top:5px;\r\npadding-bottom:4px;\r\nbackground-color:#A7C942;\r\ncolor:#ffffff;\r\n}\r\n#customers tr.alt td \r\n{\r\ncolor:#000000;\r\nbackground-color:#EAF2D3;\r\n}\r\n</style>\r\n\r\n<table id="customers">\r\n<tr>\r\n  <th>Company</th>\r\n  <th>Contact</th>\r\n  <th>Country</th>\r\n</tr>\r\n<tr>\r\n<td>Alfreds Futterkiste</td>\r\n<td>Maria Anders</td>\r\n<td>Germany</td>\r\n</tr>\r\n<tr class="alt">\r\n<td>Berglunds snabbk&#65533;p</td>\r\n<td>Christina Berglund</td>\r\n<td>Sweden</td>\r\n</tr>\r\n<tr>\r\n<td>Centro comercial Moctezuma</td>\r\n<td>Francisco Chang</td>\r\n<td>Mexico</td>\r\n</tr>\r\n<tr class="alt">\r\n<td>Ernst Handel</td>\r\n<td>Roland Mendel</td>\r\n<td>Austria</td>\r\n</tr>\r\n<tr>\r\n<td>Island Trading</td>\r\n<td>Helen Bennett</td>\r\n<td>UK</td>\r\n</tr>\r\n<tr class="alt">\r\n<td>K&#65533;niglich Essen</td>\r\n<td>Philip Cramer</td>\r\n<td>Germany</td>\r\n</tr>\r\n<tr>\r\n<td>Laughing Bacchus Winecellars</td>\r\n<td>Yoshi Tannamuri</td>\r\n<td>Canada</td>\r\n</tr>\r\n<tr class="alt">\r\n<td>Magazzini Alimentari Riuniti</td>\r\n<td>Giovanni Rovelli</td>\r\n<td>Italy</td>\r\n</tr>\r\n<tr>\r\n<td>North/South</td>\r\n<td>Simon Crowther</td>\r\n<td>UK</td>\r\n</tr>\r\n<tr class="alt">\r\n<td>Paris sp&#65533;cialit&#65533;s</td>\r\n<td>Marie Bertrand</td>\r\n<td>France</td>\r\n</tr>\r\n</table>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
