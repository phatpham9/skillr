-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2014 at 05:07 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

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
(45, 'Wordpress', 'CMS Framework', 'Learn to code Wordpress. Goals:\n- Understand pros and cons comparison of Wordpress and Joomla, Drupal framework\n- Understand Wordpress architecture and sourcecode structure\n- Deploy Wordpress for developing\n- Code personal website using Wordpress\n- Code Wordpress theme', '2014-09-01', '2014-09-28', 20140901, 0, NULL, 1),
(47, 'Nginx', 'HTTP Server', 'Learn how to use Nginx, the high performance HTTP server better to use for static contents. Goals:\n- Understand basic Nginx mechanism\n- Understand pros and cons comparison of Nginx and Apache\n- Doploy Nginx for hosting Wordpress website', '2014-09-29', '2014-10-05', 20140929, 0, NULL, 1),
(50, 'PostgresSQL', 'Object RDBMS', 'Learn to code PostgresSQL. Goals:\n- Understand pros and cons comparison of PostgresSQL and another Object DBMS\n- Understand pros and cons comparison of PostgresSQL and MySQL, Oracle\n- Understand differences of query syntax between PostgresSQL and MySQL, Oracle\n- Deploy PostgresSQL for using\n- Code PostgresSQL for Wordpress website', '2014-10-06', '2014-10-12', 20141006, 0, NULL, 1),
(51, 'Toefl iBT', 'English Certificate', 'Study and do Toefl iBT tests. Goal: 90/120 score', '2014-09-29', '2015-03-29', 20140929, 0, NULL, 1),
(52, 'Smarty', 'Template Framework', 'Learn to code Smarty.\n<b>Goals</b>:\n- Understand Smarty syntax and another stuff\n- Integrate Smarty to CodeIgniter framework\n- Code Smarty for skillr website\n<b>References</b>:\n- Smarty documentation: http://www.smarty.net/docs/en\n- CodeIgniter integration guide: http://www.coolphptools.com/codeigniter-smarty', '2014-08-18', '2014-08-24', 20140818, 1, '2014-08-23 15:01:36', 1),
(54, 'Cassandra', 'Wide-column Stores DBMS', 'Learn to code Cassandra. Goals:\r\n- Understand pros and cons comparison of Cassandra and another wide-column store DBMS\r\n- Deploy Cassandra for using\r\n- Code basic Cassandra queries', '2014-10-13', '2014-10-19', 0, 0, NULL, 1),
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
(1, 'admin', '$2a$08$SLoKKiIAq1czhcLbBujpHuG2A5HnRmPDf0i9NOLzQblzDQOx/pt6u', 'phat.pham9@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2014-11-12 05:06:21', '2014-08-20 16:46:24', '2014-11-12 04:06:41');

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
(1, 1, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
