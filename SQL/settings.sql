CREATE TABLE `settings` (
  `option_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `option_name` varchar(64) NOT NULL DEFAULT '',
  `option_value` mediumtext NOT NULL,
  `option_group` varchar(55) NOT NULL DEFAULT 'site',
  `auto_load` enum('no','yes') NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`option_id`,`option_name`),
  KEY `option_name` (`option_name`),
  KEY `auto_load` (`auto_load`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `settings`
--


INSERT INTO `settings` VALUES(1, 'site_name', 'Testbed', 'site', 'yes');
INSERT INTO `settings` VALUES(2, 'site_keywords', 'persistence, caching, testing', 'site', 'yes');
INSERT INTO `settings` VALUES(3, 'site_description', 'Performance Testbed', 'site', 'yes');
INSERT INTO `settings` VALUES(4, 'site_email', 'ajita@quietretreatprivacy.com', 'site', 'yes');