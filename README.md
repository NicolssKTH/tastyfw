# tastyfw

--
-- Databas: `tastyrecipe`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` text COLLATE utf8_swedish_ci NOT NULL,
  `comment` text COLLATE utf8_swedish_ci NOT NULL,
  `food` text COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=82 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumpning av Data i tabell `comments`
--

INSERT INTO `comments` (`id`, `username`, `comment`, `food`) VALUES
(49, 'Niclas', 'test', 'pancake'),
(13, 'svampbob', 'OLALA TASTE SO GUUUD :)', 'meatballs'),
(81, 'qwer', '\'&quot;*', 'pancake'),
(18, 'svampbob', 'tjohej\r\n', 'pancake'),
(30, 'Niclas', 'OMfG SO AMAZING', 'meatballs'),
(48, 'Niclas', 'test', 'meatballs'),
(45, 'Niclas', 'test4', 'meatballs'),
(80, 'qwer', 'niclas', 'pancake'),
(79, 'qwer', 'åöåöääöåöä', 'meatballs'),
(76, 'svampbob', 'This is an Amazin site! :)', 'pancake'),
(58, 'Niclas', '&lt;h2&gt;hej&lt;/h2&gt;', 'meatballs');

-- --------------------------------------------------------

--
-- Tabellstruktur `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text COLLATE utf8_swedish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumpning av Data i tabell `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`) VALUES
(14, 'testuser', '$2y$10$BiWAIT3pavUNw3k7fUVJKeN7rCqezHbHXN556sydktHndLiAmDYlu'),
(13, 'qwer', '$2y$10$1L7ijcNn2KXqF4Z.WWZveucsIaonMZjau6dSvmgH0klNCWbm4jXnm'),
(11, 'svampbob', '$2y$10$G./.ZM5ekIGeguZ/tR.HT.kOEphDncTBsXRYRjYCn3stTA5hFv4KK'),
(10, 'Niclas', '$2y$10$2ygspKw8O8kdFt0rh7Qvm.INRM5TL7ZwdWW39owe32F/dPbMKrXv2');
