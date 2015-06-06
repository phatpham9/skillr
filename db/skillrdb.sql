-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 05, 2015 at 08:05 PM
-- Server version: 5.5.35-cll-lve
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `skillrdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `skillr_login_attempts`
--

CREATE TABLE IF NOT EXISTS `skillr_login_attempts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(40) COLLATE utf8_bin NOT NULL,
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `skillr_sessions`
--

CREATE TABLE IF NOT EXISTS `skillr_sessions` (
  `session_id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `skillr_sessions`
--

INSERT INTO `skillr_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('1fe0f7366528ae62bcab566c3e7ca621', '207.46.13.116', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 1431911162, ''),
('24ac5db166daa9096278bd90808620b3', '207.46.13.11', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0)', 1430408914, ''),
('27971cc4d073c55786e6c56cc729f448', '171.232.69.70', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:37.0) Gecko/20100101 Firefox/37.0', 1430404298, 'a:2:{s:9:"user_data";s:0:"";s:9:"last_page";s:32:"http://skillr.phatpham.com/skill";}'),
('4260efc6ba757b2d1b13bc47b8da56f4', '157.55.39.251', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0)', 1432659953, ''),
('517ac5a297daf4dea6693276b026a52a', '183.80.70.65', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.81 Safari/537.36', 1433555683, 'a:2:{s:9:"user_data";s:0:"";s:9:"last_page";s:32:"http://skillr.phatpham.com/skill";}'),
('5dbdf50f0e90f94dc8d5555e6a1b6eca', '207.46.13.116', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 1431911155, ''),
('77de3fb37e7555dc65d32cfca7eaaad5', '207.46.13.130', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 1430408777, ''),
('814f894501959d0ad1526b1331c5846e', '207.46.13.106', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 1432254004, ''),
('89112d9da6bc43ff19c6708db815b80c', '157.55.39.245', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 1432856083, ''),
('9761f36fc5b3f09608d679a81d37a6f8', '207.46.13.140', 'Mozilla/5.0 (iPhone; CPU iPhone OS 7_0 like Mac OS X) AppleWebKit/537.51.1 (KHTML, like Gecko) Version/7.0 Mobile/11A465', 1432855482, ''),
('b2ca576ff8b73ac0fb9f4f8f5cdc94c3', '207.46.13.106', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 1432253996, ''),
('b76921bf3cea6a890b1b01c770d2212d', '207.46.13.11', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0)', 1430409210, ''),
('cb3d3355f94fd5f912be9445d86a7e8e', '157.55.39.252', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 1432659917, ''),
('d0f9f43f8f68b92ddbded120d6c796b0', '207.46.13.11', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 1430412451, ''),
('f68f0f59620bb9b86745de9f3ddeaa88', '207.46.13.11', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0)', 1430409210, '');

-- --------------------------------------------------------

--
-- Table structure for table `skillr_skill`
--

CREATE TABLE IF NOT EXISTS `skillr_skill` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `description` varchar(256) NOT NULL,
  `note` text NOT NULL,
  `start_date` date NOT NULL DEFAULT '0000-00-00',
  `end_date` date NOT NULL DEFAULT '0000-00-00',
  `order` int(11) NOT NULL,
  `is_done` tinyint(1) NOT NULL DEFAULT '0',
  `date_done` datetime DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `skillr_skill`
--

INSERT INTO `skillr_skill` (`id`, `name`, `description`, `note`, `start_date`, `end_date`, `order`, `is_done`, `date_done`, `user_id`) VALUES
(45, 'Wordpress', 'CMS Framework', 'Learn to code Wordpress. Goals:\n- Understand pros and cons comparison of Wordpress and Joomla, Drupal framework\n- Understand Wordpress architecture and sourcecode structure\n- Deploy Wordpress for developing\n- Code personal website using Wordpress\n- Code Wordpress theme', '2014-11-10', '2014-11-16', 20140901, 0, NULL, 1),
(47, 'Nginx', 'HTTP Server', 'Learn how to use Nginx, the high performance HTTP server better to use for static contents. Goals:\n- Understand basic Nginx mechanism\n- Understand pros and cons comparison of Nginx and Apache\n- Deploy Nginx for hosting Wordpress website', '2014-11-17', '2014-11-23', 20140929, 0, NULL, 1),
(50, 'PostgresSQL', 'Object RDBMS', 'Learn to code PostgresSQL. Goals:\n- Understand pros and cons comparison of PostgresSQL and another Object DBMS\n- Understand pros and cons comparison of PostgresSQL and MySQL, Oracle\n- Understand differences of query syntax between PostgresSQL and MySQL, Oracle\n- Deploy PostgresSQL for using\n- Code PostgresSQL for Wordpress website', '2014-11-24', '2014-11-30', 20141006, 0, NULL, 1),
(52, 'Smarty', 'Template Framework', 'Learn to code Smarty.\n<b>Goals</b>:\n- Understand Smarty syntax and another stuff\n- Integrate Smarty to CodeIgniter framework\n- Code Smarty for skillr website\n<b>References</b>:\n- Smarty documentation: http://www.smarty.net/docs/en\n- CodeIgniter integration guide: http://www.coolphptools.com/codeigniter-smarty', '2014-08-18', '2014-08-24', 20140818, 1, '2014-08-23 15:01:36', 1),
(54, 'Cassandra', 'Wide-column Stores DBMS', 'Learn to code Cassandra. Goals:\n- Understand pros and cons comparison of Cassandra and another wide-column store DBMS\n- Deploy Cassandra for using\n- Code basic Cassandra queries', '2014-12-01', '2014-12-07', 0, 0, NULL, 1),
(55, 'Redis', 'Key-value Stores DBMS', 'Learn to code Redis.\n<b>Goals</b>:\n- Understand pros and cons comparison of Redis and Memcached\n- Understand differences of query syntax and protocol between Redis and Memcached\n- Deploy Redis for using\n- Code basic Redis queries\n<b>Books</b>:\n- Redis in Action: http://www.it-ebooks.info/book/2447\n- Redis Cookbook: http://www.it-ebooks.info/book/562\n<b>References</b>:\n- Redis documentation: http://redis.io/documentation\n- Redis features: http://kkovacs.eu/cassandra-vs-mongodb-vs-couchdb-vs-redis', '2014-08-25', '2014-08-27', 0, 1, '2014-08-27 08:00:44', 1);

-- --------------------------------------------------------

--
-- Table structure for table `skillr_users`
--

CREATE TABLE IF NOT EXISTS `skillr_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '1',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ban_reason` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `new_password_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `new_password_requested` datetime DEFAULT NULL,
  `new_email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `new_email_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Dumping data for table `skillr_users`
--

INSERT INTO `skillr_users` (`id`, `username`, `password`, `email`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES
(1, 'phatpham', '$2a$08$o6/YJNPFgLTDp/850tyf0OP/zBalyg5Y9n.xSB5Q/rV3wcfEQE3wm', 'contact@phatpham.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '118.68.235.91', '2014-11-10 16:32:29', '2014-08-20 16:46:24', '2014-11-10 16:32:29'),
(2, 'luanbui', '$2a$08$cKnl88VY8hEJyDMNrlcXDeJTVBU0TMaClsSeByY9te98JgqZaUtei', 'buihuynhkinhluan@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '123.30.135.76', '2014-08-21 03:55:51', '2014-08-20 16:48:56', '2014-08-21 03:55:51'),
(3, 'phutang', '$2a$08$vcHi8to9Jyrgf6F8LiYnAOirHBPGiIX2tdoC.VJ2tDw01SlzyRAYm', 'tangkhanhphu@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '14.161.14.21', '2014-08-23 04:42:08', '2014-08-20 16:49:21', '2014-08-23 04:42:08'),
(4, 'khanhduong', '$2a$08$rN6JSNQxsqO1yWD.8mR5TuUd0X6Y0OH6FhyiLZFMb03HYXcCC0b6i', 'duonghoaikhanh@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2014-08-20 16:57:45', '2014-08-20 09:57:45');

-- --------------------------------------------------------

--
-- Table structure for table `skillr_user_autologin`
--

CREATE TABLE IF NOT EXISTS `skillr_user_autologin` (
  `key_id` char(32) COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`key_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `skillr_user_autologin`
--

INSERT INTO `skillr_user_autologin` (`key_id`, `user_id`, `user_agent`, `last_ip`, `last_login`) VALUES
('f2f2e9455433ba61f18d6e7d56b4cc8e', 2, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.0 Safari/537.36', '123.30.135.76', '2014-08-21 03:55:51');

-- --------------------------------------------------------

--
-- Table structure for table `skillr_user_profiles`
--

CREATE TABLE IF NOT EXISTS `skillr_user_profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `ava_url` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Dumping data for table `skillr_user_profiles`
--

INSERT INTO `skillr_user_profiles` (`id`, `user_id`, `ava_url`) VALUES
(1, 1, 'uploads/ava/255f79af556bc837757f0dbb5329df09.jpg'),
(2, 2, NULL),
(3, 3, NULL),
(4, 4, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
