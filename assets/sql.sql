delimiter $$

CREATE TABLE `tbluser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(18) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `password` text,
  `country` varchar(30) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `validationkey` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1$$

