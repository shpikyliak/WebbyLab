# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.7.10)
# Database: films
# Generation Time: 2015-12-21 07:56:18 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table films
# ------------------------------------------------------------

DROP TABLE IF EXISTS `films`;

CREATE TABLE `films` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(30) DEFAULT NULL,
  `release_year` int(4) DEFAULT NULL,
  `format` varchar(7) DEFAULT NULL,
  `stars` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `films` WRITE;
/*!40000 ALTER TABLE `films` DISABLE KEYS */;

INSERT INTO `films` (`id`, `title`, `release_year`, `format`, `stars`)
VALUES
	(9,'Gladiator',2000,'Blu-Ray','Russell Crowe, Joaquin Phoenix, Connie Nielson'),
	(10,'Star Wars',1977,'Blu-Ray','Harrison Ford, Mark Hamill, Carrie Fisher, Alec Guinness, James Earl Jones'),
	(11,'Raiders of the Lost Ark',1981,'DVD','Harrison Ford, Karen Allen'),
	(12,'Serenity',2005,'Blu-Ray','Nathan Fillion, Alan Tudyk, Adam Baldwin, Ron Glass, Jewel Staite, Gina Torres, Morena Baccarin, Sean Maher, Summer Glau, Chiwetel Ejiofor'),
	(14,'WarGames',1983,'VHS','Matthew Broderick, Ally Sheedy, Dabney Coleman, John Wood, Barry Corbin'),
	(15,'Spaceballs',1987,'DVD','Bill Pullman, John Candy, Mel Brooks, Rick Moranis, Daphne Zuniga, Joan Rivers'),
	(16,'Young Frankenstein',1974,'VHS','Gene Wilder, Kenneth Mars, Terri Garr, Gene Hackman, Peter Boyle'),
	(17,'Real Genius',1985,'VHS','Val Kilmer, Gabe Jarret, Michelle Meyrink, William Atherton'),
	(18,'Top Gun',1986,'DVD','Tom Cruise, Kelly McGillis, Val Kilmer, Anthony Edwards, Tom Skerritt'),
	(19,'MASH',1970,'DVD','Donald Sutherland, Elliot Gould, Tom Skerritt, Sally Kellerman, Robert Duvall'),
	(20,'Jaws',1975,'DVD','Roy Scheider, Robert Shaw, Richard Dreyfuss, Lorraine Gary '),
	(21,'2001: A Space Odyssey',1968,'DVD','Keir Dullea, Gary Lockwood, William Sylvester, Douglas Rain'),
	(22,'Harvey',1950,'DVD','James Stewart, Josephine Hull, Peggy Dow, Charles Drake'),
	(23,'Knocked Up',2007,'Blu-Ray','Seth Rogen, Katherine Heigl, Paul Rudd, Leslie Mann'),
	(24,'Blazing Saddles',1974,'VHS','Mel Brooks, Clevon Little, Harvey Korman, Gene Wilder, Slim Pickens, Madeline Kahn'),
	(25,'Casablanca',1942,'DVD','Humphrey Bogart, Ingrid Bergman, Claude Rains, Peter Lorre'),
	(26,'Charade',1953,'DVD','Audrey Hepburn, Cary Grant, Walter Matthau, James Coburn, George Kennedy'),
	(27,'Cool Hand Luke',1967,'VHS','Paul Newman, George Kennedy, Strother Martin'),
	(28,'The Sting',1973,'DVD','Robert Redford, Paul Newman, Robert Shaw, Charles Durning'),
	(29,'The Muppet Movie',1979,'DVD','Jim Henson, Frank Oz, Dave Geolz, Mel Brooks, James Coburn, Charles Durning, Austin Pendleton'),
	(30,'Get Shorty ',1995,'DVD','John Travolta, Danny DeVito, Renne Russo, Gene Hackman, Dennis Farina'),
	(31,'My Cousin Vinny',1992,'DVD','Joe Pesci, Marrisa Tomei, Fred Gwynne, Austin Pendleton, Lane Smith, Ralph Macchio'),
	(32,'Gladiator',2000,'Blu-Ray','Russell Crowe, Joaquin Phoenix, Connie Nielson'),
	(33,'Star Wars',1977,'Blu-Ray','Harrison Ford, Mark Hamill, Carrie Fisher, Alec Guinness, James Earl Jones'),
	(34,'Raiders of the Lost Ark',1981,'DVD','Harrison Ford, Karen Allen'),
	(35,'Serenity',2005,'Blu-Ray','Nathan Fillion, Alan Tudyk, Adam Baldwin, Ron Glass, Jewel Staite, Gina Torres, Morena Baccarin, Sean Maher, Summer Glau, Chiwetel Ejiofor'),
	(36,'Hooisers',1986,'VHS','Gene Hackman, Barbara Hershey, Dennis Hopper'),
	(37,'WarGames',1983,'VHS','Matthew Broderick, Ally Sheedy, Dabney Coleman, John Wood, Barry Corbin'),
	(38,'Spaceballs',1987,'DVD','Bill Pullman, John Candy, Mel Brooks, Rick Moranis, Daphne Zuniga, Joan Rivers'),
	(39,'Young Frankenstein',1974,'VHS','Gene Wilder, Kenneth Mars, Terri Garr, Gene Hackman, Peter Boyle'),
	(40,'Real Genius',1985,'VHS','Val Kilmer, Gabe Jarret, Michelle Meyrink, William Atherton'),
	(41,'Top Gun',1986,'DVD','Tom Cruise, Kelly McGillis, Val Kilmer, Anthony Edwards, Tom Skerritt'),
	(42,'MASH',1970,'DVD','Donald Sutherland, Elliot Gould, Tom Skerritt, Sally Kellerman, Robert Duvall'),
	(43,'Jaws',1975,'DVD','Roy Scheider, Robert Shaw, Richard Dreyfuss, Lorraine Gary '),
	(44,'2001: A Space Odyssey',1968,'DVD','Keir Dullea, Gary Lockwood, William Sylvester, Douglas Rain'),
	(45,'Harvey',1950,'DVD','James Stewart, Josephine Hull, Peggy Dow, Charles Drake'),
	(46,'Knocked Up',2007,'Blu-Ray','Seth Rogen, Katherine Heigl, Paul Rudd, Leslie Mann');

/*!40000 ALTER TABLE `films` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
