CREATE TABLE `api_keys` (
  `key_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `apikey` varchar(64) DEFAULT NULL,
  `access_level` varchar(10) DEFAULT NULL,
  `active` int(1) DEFAULT NULL,
  PRIMARY KEY (`key_id`),
  KEY `key_id` (`key_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
