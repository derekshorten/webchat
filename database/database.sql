
CREATE TABLE IF NOT EXISTS `Users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `First Name` varchar(20) NOT NULL,
  `Last Name` varchar(20) NOT NULL,
  `Email` varchar(10) NOT NULL,
  `Mobile Number` int(11) NOT NULL,
  `Country` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;
