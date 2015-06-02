CREATE TABLE `api_messages` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `hostname` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `v_id_to` varchar(45) DEFAULT NULL,
  `v_id_from` varchar(45) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `time_sent` varchar(45) DEFAULT NULL,
  `seen` varchar(45) DEFAULT 'no',
  `replied` varchar(45) DEFAULT 'no',
  `time_seen` varchar(45) DEFAULT NULL,
  `deleted` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
