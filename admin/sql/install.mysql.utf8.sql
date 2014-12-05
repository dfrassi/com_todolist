DROP TABLE IF EXISTS `#__todolist`;

CREATE TABLE `#__todolist` (
  `id` int(11) NOT NULL auto_increment,
  `titolo` varchar(25) NOT NULL,
  `descrizione` varchar(255) NOT NULL,
  `data` datetime NOT NULL,
   PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;
