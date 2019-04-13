
CREATE TABLE IF NOT EXISTS `phonebook` (

  `id` int(11) NOT NULL,

  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  
  PRIMARY KEY (`id`)

) ENGINE=InnoDB;

INSERT INTO `phonebook` (`id`, `name`, `email`,`mobile`) VALUES

(11, 'Zeus', 'zeus@wp.pl', '111' ),

(12, 'Anthena', 'Athena@wp.pl', '123' ),

(13, 'Jupiter', 'Jupiter@wp.pl', '783' ),

(14, 'Venus', 'Venus@wp.pl', '987' );
