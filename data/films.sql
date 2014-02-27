-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2014 at 07:30 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `films`
--

CREATE TABLE IF NOT EXISTS `films` (
  `film_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `genre` varchar(45) DEFAULT NULL,
  `director` varchar(45) DEFAULT NULL,
  `actors` varchar(250) DEFAULT NULL,
  `yr` year(4) DEFAULT NULL,
  `image_src` varchar(45) DEFAULT NULL,
  `summary` varchar(1024) DEFAULT NULL,
  `link` varchar(520) DEFAULT NULL,
  `youtube` varchar(520) NOT NULL,
  PRIMARY KEY (`film_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`film_id`, `title`, `genre`, `director`, `actors`, `yr`, `image_src`, `summary`, `link`, `youtube`) VALUES
(1, 'Texas Chainsaw', 'Horror', 'John Luessenhop', 'Alexandra Daddario, Trey Songz, Tania Raymonde', 2013, '/film/chainsaw.jpg', 'Not a bad flick. But not great either.', 'http://www.imdb.com/title/tt1572315/', '//www.youtube.com/embed/75TvtJIbbNY"'),
(2, 'The Great Gatsby', 'Drama', 'Baz Luhrman', 'Leonardo DiCaprio, Toby Maguire, Carey Mulligan', 2013, '/film/gatsby.jpg', 'Great film. I really enjoyed the cinematography of the 1920’s New York. The film transports you to the early 20th century New York City. New York always has a way to pull you in and intrigue you with its charisma. Toby character’s captures the essence of what made this city party central and the mystery that comes with it.  ', 'http://www.imdb.com/title/tt1343092/', '//www.youtube.com/embed/rARN6agiW7o'),
(3, 'Mama', 'Horror, Supernatural Horror', 'Andres Muschietti', 'Jessica Chastain, Nikolaj Coster-Waldau', 2013, '/film/mama.jpg', 'The film started out great.Two girls ages 1 and 5 are left behind in a cabin by their father. The two girls are then raised by ghost who resides in this lovely cabin in the middle of nowhere. The girls are found five years later by two trackers who where hired by the Uncle. Uncle Luke becomes the legal guardian of the and girls but little does he know he inherits the Mama as well. Of course Mama is upset they took her children. Luke doesn''t play a role in caring for the girls. Luke gets attack and gets sent to a hospital with a coma. So his girlfriend Annie, takes the burden of being a parent, hosting disgruntle ghost, and leaving her wanna-be rock band. The movie ended sadly with one of the girls choosing to be with Mama.   ', 'http://www.imdb.com/title/tt2023587/', '//www.youtube.com/embed/GZlY47eCdas'),
(4, 'Jackass Presents: Bad Grandpa', 'Comdey', 'Jeff Tremaine', 'Johnny Knoxville, Jackson Nicoll', 2013, '/film/badgrandpa.jpg', 'Very funny movie. The kid actor is awesome through out the movie. ', 'http://www.imdb.com/title/tt3063516/', '//www.youtube.com/embed/tctgUr147zA'),
(5, 'Lego Movie', 'Animated Comedy, Children Comedy', 'Phil Lord', 'Will Arnett, Elizabeth Banks', 2014, '/film/lego.jpg', 'This was a great movie. I’m not sure my 4 year old enjoyed it as much as we did. The CGI was great. Everything inside Lego Land was made out of Lego, the water, explosion, and the clouds. The robots from the movie reminded me of another movie, They Live. They Live is an 80’s movie starring Rody Piper who takes on an overwhelming group of aliens trying to brain wash the human minds. Come to think of it, it’s almost the same premise. However, Lego Movie had Batman in it.  ', 'http://www.imdb.com/title/tt1490017/', '//www.youtube.com/embed/fZ_JOBCLF-I'),
(6, 'Pacific Rim', 'Action, Sci-Fi', 'Guillermo del Toro', 'Charlie Hunnam, Idris Elba, Rinko Kikuchi', 2013, '/film/pacificrim.jpg', 'I didn’t know what to expect from this film, but overall it was pleasant sci-fi movie. The story flows quite nicely. I can tell the movie was influence by Godzilla and other anime films from Japan. The battle scenes where done really well and the giant monsters looked authentic. If the studio can manage this right, they can create two or three more films. It will be interesting to the see the first attack from the Kaiju and experience of survivors. They did a great job balancing the fight between Kaiju and humanity  and providing us the science behind this monsters . Even though, there are a couple of story holes to explain the drifting between the Kaiju and the nature of their existence.  Good sci-fi flick and I believe there is a sequel in the works.    ', 'http://www.imdb.com/title/tt1663662/', '//www.youtube.com/embed/5guMumPFBag'),
(7, 'After Earth', 'Sci-Fi, Action', 'M. Night Shyamalan', 'Will Smith, Jaden Smith', 2013, '/film/afterearth.jpg', 'After watching this film, I can understand all the negative reviews. I enjoyed some moments of the film. I couldn''t understand the whole of purpose of adding the Ursas. They could have done without them, since the setting of this film is after Earth. After landing on Earth, it wasn''t the Earth or it''s habitats their greatest threats, it was that Ursa. If mankind had all this technology, warp time, and it''s seems they developed a planet from scratch, Earth looks pretty good to settle down. Am i wrong? Well, this was a hit or miss. And it was miss.  ', 'http://www.imdb.com/title/tt1815862/', '//www.youtube.com/embed/CZIt20emgLY'),
(8, 'Now You See Me', 'Action', 'Louis Leterrier', 'Mark Ruffalo, Woody Harrelson, Malanie Laurent', 2013, '/film/nowyou.jpg', 'This film was surprisingly good. It was a original story and the flow was a fast pace "cat and mouse" film. Some of it was a little over the top but manage to keep me entertained through out the whole movie. A sequel is already planned and with whole cast on board. Can''t wait.  ', 'http://www.imdb.com/title/tt1670345/', '//www.youtube.com/embed/4OtM9j2lcUA');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
