CREATE TABLE `php-assignment`.`guest_form` (
 `Id` int(11) NOT NULL AUTO_INCREMENT,
 `Name` varchar(50) NOT NULL,
 `Email` varchar(50) NOT NULL,
 `Phone` int(11) NOT NULL,
 `Description` varchar(255) NOT NULL,
 `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
 PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1
