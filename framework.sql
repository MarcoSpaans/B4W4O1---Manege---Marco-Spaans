/*maak database manege*/
CREATE DATABASE `manege`;

/* maak tabel customer */
CREATE TABLE `customer` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `name_customer` varchar(255),
  `adress` varchar(255),
  `postcode` varchar(255),
  `city` varchar(255),
  `phone` varchar(255),
  `email` varchar(255)
);

/* maak tabel horse */
CREATE TABLE `horse` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `race_id` int(11),
  `name_horse` varchar(255),
  `age` int(11),
  `jump` varchar(255)
);

/* maak tabel race */
CREATE TABLE `race` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `name_race` varchar(255),
  `height` decimal(4,0)
);

/* insert paardenrassen in tabel 'race' */
INSERT INTO `race` (`name_race`, `height`) VALUES
('Friese paard', '155'),
('Pony', '147'),
('Gelderlander', '163');

/* maak tabel resevation */
CREATE TABLE `resevation` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `customer_id` int(11),
  `horse_id` int(11),
  `start_time` datetime,
  `time_span` int(11)
);
