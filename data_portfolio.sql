SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE `Comme` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Comment` varchar(250) NOT NULL,
  `Date` datetime DEFAULT NULL
) ;

INSERT INTO `Comme`(`Id`, `Name`, `Email`, `Comment`,`Date`) VALUES
(1, 'sonia','sonia.rachu@hotmail.com','je suis cool','2019-03-18 10:59:27'),
(2, 'cylia', 'nassima.rach@hotmail.com','je suis cool','2019-03-18 10:59:27');

ALTER TABLE `Comme`
  ADD PRIMARY KEY (`Id`);

  ALTER TABLE `Comme`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;