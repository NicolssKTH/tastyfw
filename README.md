# tastyfw

Create Database;

USER TABLE:

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
`user_id` int(11) NOT NULL AUTO_INCREMENT,
`username` text COLLATE utf8_swedish_ci NOT NULL,
`password` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;


COMMENT TABLE:

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
`id` int(255) NOT NULL AUTO_INCREMENT,
`username` text COLLATE utf8_swedish_ci NOT NULL,
`comment` text COLLATE utf8_swedish_ci NOT NULL,
`food` text COLLATE utf8_swedish_ci NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;