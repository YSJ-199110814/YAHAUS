-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2022 at 12:36 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yahaus`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `create_global_varchar` (IN `name` VARCHAR(50), IN `the_value` VARCHAR(50))  BEGIN
SET name = the_value;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tblaccomodationplaces`
--

CREATE TABLE `tblaccomodationplaces` (
  `PlaceNumber` int(11) NOT NULL,
  `Rent` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblaccomodationplaces`
--

INSERT INTO `tblaccomodationplaces` (`PlaceNumber`, `Rent`) VALUES
(1, '400'),
(2, '400'),
(3, '400'),
(4, '400'),
(5, '400'),
(6, '400'),
(7, '400'),
(8, '400'),
(9, '400'),
(10, '400'),
(11, '400'),
(12, '400'),
(13, '400'),
(14, '400'),
(15, '400'),
(16, '400'),
(17, '400'),
(18, '400'),
(19, '400'),
(20, '400'),
(21, '400'),
(22, '400'),
(23, '400'),
(24, '400'),
(25, '400'),
(26, '400'),
(27, '400'),
(28, '400'),
(29, '400'),
(30, '430'),
(31, '400'),
(32, '450'),
(33, '300'),
(34, '350'),
(35, '400'),
(36, '300'),
(37, '425'),
(38, '475'),
(39, '400'),
(40, '600'),
(41, '400'),
(42, '400'),
(43, '450'),
(44, '300'),
(45, '350'),
(46, '400'),
(47, '300'),
(48, '425'),
(49, '475'),
(50, '400'),
(51, '600'),
(52, '500'),
(53, '500');

-- --------------------------------------------------------

--
-- Table structure for table `tblapartmentplaces`
--

CREATE TABLE `tblapartmentplaces` (
  `PlaceNumber` int(11) NOT NULL,
  `ApartmentNumber` int(11) NOT NULL,
  `PostCode` varchar(8) NOT NULL,
  `RoomNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblapartmentplaces`
--

INSERT INTO `tblapartmentplaces` (`PlaceNumber`, `ApartmentNumber`, `PostCode`, `RoomNumber`) VALUES
(30, 123, 'LS1 11A', 1),
(31, 123, 'LS1 11A', 2),
(32, 123, 'LS1 11A', 3),
(33, 8, 'S1 22B', 1),
(34, 8, 'S1 22B', 2),
(35, 8, 'S1 22B', 3),
(36, 8, 'S1 22B', 4),
(37, 16, 'BD1 33C', 1),
(38, 16, 'BD1 33C', 2),
(39, 16, 'BD1 33C', 3),
(40, 16, 'BD1 33C', 4),
(41, 16, 'BD1 33C', 5),
(42, 35, 'YO5 44D', 1),
(43, 35, 'YO5 44D', 2),
(44, 35, 'YO5 44D', 3),
(45, 35, 'YO5 44D', 4),
(46, 13, 'LS71 56P', 1),
(47, 13, 'LS71 56P', 2),
(48, 13, 'LS71 56P', 3),
(49, 44, 'YO3 23J', 1),
(50, 44, 'YO3 23J', 2),
(51, 44, 'YO3 23J', 3),
(52, 44, 'YO3 23J', 4),
(53, 44, 'YO3 23J', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tblapartments`
--

CREATE TABLE `tblapartments` (
  `ApartmentNumber` int(11) NOT NULL,
  `StreetAddress` varchar(150) NOT NULL,
  `PostCode` varchar(8) NOT NULL,
  `NumberOfRooms` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblapartments`
--

INSERT INTO `tblapartments` (`ApartmentNumber`, `StreetAddress`, `PostCode`, `NumberOfRooms`) VALUES
(8, 'Sheffield Road, Sheffield', 'S1 22B', 4),
(13, 'Leeds Road, Leeds', 'LS71 56P', 3),
(16, 'Bradford Road, Bradford', 'BD1 33C', 5),
(35, 'York Road, York', 'YO5 44D', 4),
(44, 'York Road, York', 'YO3 23J', 5),
(123, 'Leeds Road, Leeds', 'LS1 11A', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tblcourses`
--

CREATE TABLE `tblcourses` (
  `CourseCode` int(11) NOT NULL,
  `CourseName` varchar(30) NOT NULL,
  `LeadStaffID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcourses`
--

INSERT INTO `tblcourses` (`CourseCode`, `CourseName`, `LeadStaffID`) VALUES
(1, 'Physics', 1),
(2, 'Biology', 8),
(3, 'Chemistry', 9),
(4, 'Alchemy', 1),
(5, 'Telekinesis', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tblhallplaces`
--

CREATE TABLE `tblhallplaces` (
  `PlaceNumber` int(11) NOT NULL,
  `Hall` varchar(30) NOT NULL,
  `Room Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblhallplaces`
--

INSERT INTO `tblhallplaces` (`PlaceNumber`, `Hall`, `Room Number`) VALUES
(1, 'Anning Hall', 1),
(2, 'Anning Hall', 2),
(3, 'Anning Hall', 3),
(4, 'Anning Hall', 4),
(5, 'Anning Hall', 5),
(6, 'Anning Hall', 6),
(7, 'Anning Hall', 7),
(8, 'Darwin Hall', 1),
(9, 'Darwin Hall', 2),
(10, 'Darwin Hall', 3),
(11, 'Darwin Hall', 4),
(12, 'Darwin Hall', 5),
(13, 'Darwin Hall', 6),
(14, 'Darwin Hall', 7),
(15, 'Owen Hall', 1),
(16, 'Owen Hall', 2),
(17, 'Owen Hall', 3),
(18, 'Owen Hall', 4),
(19, 'Owen Hall', 5),
(20, 'Owen Hall', 6),
(21, 'Owen Hall', 7),
(22, 'Rutherford Hall', 1),
(23, 'Rutherford Hall', 2),
(24, 'Rutherford Hall', 3),
(25, 'Rutherford Hall', 4),
(26, 'Rutherford Hall', 5),
(27, 'Rutherford Hall', 6),
(28, 'Rutherford Hall', 7),
(29, 'Rutherford Hall', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tblhalls`
--

CREATE TABLE `tblhalls` (
  `Hall` varchar(30) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `HallManagerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblhalls`
--

INSERT INTO `tblhalls` (`Hall`, `Location`, `HallManagerID`) VALUES
('Anning Hall', '55 York', 2),
('Darwin Hall', '22 Leeds', 5),
('Owen Hall', '77 Sheffield', 6),
('Rutherford Hall', '18 Bradford', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tblinspections`
--

CREATE TABLE `tblinspections` (
  `InspectionNumber` int(11) NOT NULL,
  `StaffID` int(11) NOT NULL,
  `ApartmentNumber` int(11) NOT NULL,
  `PostCode` varchar(8) NOT NULL,
  `Date` date NOT NULL,
  `Satisfactory` tinyint(1) NOT NULL,
  `Comments` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblinspections`
--

INSERT INTO `tblinspections` (`InspectionNumber`, `StaffID`, `ApartmentNumber`, `PostCode`, `Date`, `Satisfactory`, `Comments`) VALUES
(1, 10, 123, 'LS1 11A', '0000-00-00', 0, ''),
(2, 3, 8, 'S1 22B', '0000-00-00', 0, ''),
(3, 3, 16, 'BD1 33C', '0000-00-00', 0, 'Mould issues.'),
(4, 10, 35, 'YO5 44D', '0000-00-00', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tblinvoices`
--

CREATE TABLE `tblinvoices` (
  `InvoiceNumber` int(11) NOT NULL,
  `LeaseNumber` int(11) NOT NULL,
  `Semester` int(11) NOT NULL,
  `PaymentDue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblinvoices`
--

INSERT INTO `tblinvoices` (`InvoiceNumber`, `LeaseNumber`, `Semester`, `PaymentDue`) VALUES
(1, 1, 1, 550),
(2, 6, 2, 200),
(3, 2, 3, 400),
(4, 3, 1, 400),
(5, 5, 2, 450),
(6, 4, 1, 450),
(7, 8, 3, 300),
(8, 7, 2, 100);

-- --------------------------------------------------------

--
-- Table structure for table `tblleaseagreements`
--

CREATE TABLE `tblleaseagreements` (
  `LeaseNumber` int(11) NOT NULL,
  `StudentID` int(11) NOT NULL,
  `Type` varchar(10) NOT NULL,
  `PlaceNumber` int(11) NOT NULL,
  `StartSemester` int(11) NOT NULL,
  `EndSemester` int(11) NOT NULL,
  `ArrivalDate` date NOT NULL,
  `DepartureDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblleaseagreements`
--

INSERT INTO `tblleaseagreements` (`LeaseNumber`, `StudentID`, `Type`, `PlaceNumber`, `StartSemester`, `EndSemester`, `ArrivalDate`, `DepartureDate`) VALUES
(1, 1, 'Hall', 5, 1, 3, '2022-08-06', '2023-08-15'),
(2, 7, 'Apartment', 40, 1, 3, '2022-09-05', '2023-08-12'),
(3, 6, 'Hall', 15, 1, 2, '2022-09-01', '2023-05-05'),
(4, 3, 'Hall', 7, 2, 3, '2023-01-06', '2023-08-15'),
(5, 2, 'Apartment', 43, 1, 3, '2022-09-01', '2023-08-13'),
(6, 4, 'Apartment', 48, 1, 2, '2022-09-15', '2023-05-07'),
(7, 5, 'Hall', 3, 2, 2, '2023-01-08', '2023-05-04'),
(8, 10, 'Apartment', 50, 1, 3, '2022-09-01', '2023-08-14');

-- --------------------------------------------------------

--
-- Table structure for table `tblstaff`
--

CREATE TABLE `tblstaff` (
  `StaffID` int(11) NOT NULL,
  `Forename` varchar(100) NOT NULL,
  `MiddleNames` varchar(100) NOT NULL,
  `Surname` varchar(100) NOT NULL,
  `Title` varchar(5) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `DoB` date NOT NULL,
  `Email` varchar(320) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Role` varchar(30) NOT NULL,
  `Location` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstaff`
--

INSERT INTO `tblstaff` (`StaffID`, `Forename`, `MiddleNames`, `Surname`, `Title`, `Gender`, `DoB`, `Email`, `Phone`, `Role`, `Location`) VALUES
(1, 'Peter', 'R.', 'Jones', 'Mr.', 'Male', '1980-02-01', 'Peter.Jones@example.com', '07222 111111', 'Adviser', 'Campus'),
(2, 'Fela', 'P.', 'Benson', 'Mr.', 'Male', '1977-01-04', 'Fela.Benson@example.com', '07222 222222', 'Hall Manager', 'Anning Hall'),
(3, 'Benedict', '', 'Hawthorn', 'Mr.', 'Male', '1965-12-22', 'Benedict.Hawthorn@example.com', '07222 333333', 'Administrative assitant', 'Residential Office'),
(4, 'Zelda', 'G.', 'Dorf', 'Ms.', 'Female', '1995-07-15', 'Zelda.Dorf@example.com', '07222 444444', 'Cleaner', 'Residential Office'),
(5, 'Lauren', 'G.', 'Warren', 'Mrs.', 'Female', '1987-02-01', 'Lauren.Warren@example.com', '07222 555555', 'Hall Manager', 'Darwin Hall'),
(6, 'Richard', 'O.', 'Richardson', 'Mr.', 'Male', '1983-01-04', 'Richard.Richardson@example.com', '07222 666666', 'Hall Manager', 'Owen Hall'),
(7, 'Carla', 'A.', 'Ruby', 'Ms.', 'Female', '1992-12-22', 'Carla.Ruby@example.com', '07222 777777', 'Hall Manager', 'Rutherford Hall'),
(8, 'Mary', '', 'Magenta', 'Mrs.', 'Female', '1988-07-15', 'Mary.Magenta@example.com', '07222 888888', 'Adviser', 'Campus'),
(9, 'Kelly', 'T.', 'Kent', 'Mr.', 'Non-binary', '1985-12-31', 'Kelly.Kent@example.com', '07222 999999', 'Adviser', 'Campus'),
(10, 'Kibibi', 'T.', 'Jamal', 'Ms.', 'Female', '1973-02-03', 'Kibibi.Jamal@example.com', '07222 000000', 'Administrative assitant', 'Residential Office');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudents`
--

CREATE TABLE `tblstudents` (
  `StudentID` int(11) NOT NULL,
  `Forename` varchar(100) NOT NULL,
  `MiddleNames` varchar(100) NOT NULL,
  `Surname` varchar(100) NOT NULL,
  `Title` varchar(5) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `DoB` date NOT NULL,
  `CourseCode` int(11) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `Email` varchar(320) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `NonTermAddress` varchar(150) NOT NULL,
  `AdviserID` int(11) NOT NULL,
  `NextOfKinRelationship` varchar(30) NOT NULL,
  `NextOfKinForename` varchar(100) NOT NULL,
  `NextOfKinSurname` varchar(100) NOT NULL,
  `NextOfKinAddress` varchar(150) NOT NULL,
  `NextOfKinEmail` varchar(320) NOT NULL,
  `NextOfKinTelephone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudents`
--

INSERT INTO `tblstudents` (`StudentID`, `Forename`, `MiddleNames`, `Surname`, `Title`, `Gender`, `DoB`, `CourseCode`, `Category`, `Email`, `Phone`, `NonTermAddress`, `AdviserID`, `NextOfKinRelationship`, `NextOfKinForename`, `NextOfKinSurname`, `NextOfKinAddress`, `NextOfKinEmail`, `NextOfKinTelephone`) VALUES
(1, 'John', 'R.', 'Smith', 'Mr.', 'Male', '2003-02-01', 1, 'Year 1', 'John.Smith@example.com', '07111 111111', 'Birmingham', 1, 'father', 'Gary', 'Smith', 'Inner Birmingham', 'Gary.Smith@example.com', '07222 111111'),
(2, 'Henry', 'P.', 'Davis', 'Mr.', 'Male', '2004-01-04', 3, 'Year 1', 'Henry.Davis@example.com', '07111 222222', 'London', 1, 'mother', 'Betty', 'Davis', 'East London', 'Betty.Davis@example.com', '07222 222222'),
(3, 'Sally', '', 'Jones', 'Ms.', 'Female', '2002-12-22', 2, 'Year 2', 'Sally.Jones@example.com', '07111 333333', 'Cardiff', 8, 'father', 'Tom', 'Jones', 'West Cardiff', 'Tom.Jones@example.com', '07222 333333'),
(4, 'Roger', 'Terrence', 'Dawn', 'Mr.', 'Male', '1999-07-15', 1, 'Year 3', 'Roger.Dawn@example.com', '07111 444444', 'Bristol', 9, 'step-father', 'Henry', 'Dawn', 'Central Bristol', 'Henry.Dawn@example.com', '07222 444444'),
(5, 'Nabil', 'G.', 'Siddique', 'Mr.', 'Male', '2003-02-01', 5, 'New student', 'Nabil.Siddique@example.com', '07111 555555', 'Salisbury', 1, 'brother', 'Gaffar', 'Siddique', 'North Salisbury', 'Gaffar.Siddique@example.com', '07222 555555'),
(6, 'Theresa', 'O.', 'Morris', 'Mrs.', 'Female', '2004-01-04', 4, 'Year 2', 'Theresa.Morris@example.com', '07111 666666', 'Paris', 9, 'father', 'Jerry', 'Morris', 'South Paris', 'Jerry.Morris@example.com', '07222 666666'),
(7, 'Samiya', 'A.', 'Matin', 'Ms.', 'Female', '2002-12-22', 3, 'New student', 'Samiya.Matin@example.com', '07111 777777', 'Hull', 8, 'mother', 'Mariam', 'Matin', 'EastHull', 'Mariam.Matin@example.com', '07222 777777'),
(8, 'Kwabena', '', 'Johnson', 'Mr.', 'Male', '1999-07-15', 4, 'Year 3', 'Kwabena.Johnson@example.com', '07111 888888', 'York', 9, 'step-mother', 'Sarah', 'Johnson', 'West York', 'Sarah.Johnson@example.com', '07222 888888'),
(9, 'Toby', 'T.', 'Thompson', 'N/A', 'Non-binary', '2000-12-31', 2, 'Year 2', 'Toby.Thompson@example.com', '07111 999999', 'Newcastle', 9, 'father', 'Ralph', 'Thompson', 'South Newcastle', 'Ralph.Thompson@example.com', '07222 999999'),
(10, 'Laura', 'T.', 'Eastwood', 'Ms.', 'Female', '2003-02-03', 3, 'Year 1', 'Laura.Eastwood@example.com', '07111 000000', 'Leeds', 1, 'husband', 'Clint', 'Eastwood', 'West Leeds', 'Clint.Eastwood@example.com', '07222 000000');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `Username` varchar(30) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Role` varchar(15) NOT NULL,
  `EmailAddress` varchar(320) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`Username`, `Password`, `Role`, `EmailAddress`) VALUES
('admin', '$2y$10$HqdeD5NJjqBQSt7mRydhdOBOsp1PzBj0XX5ZeOTtmkpuszsr17Rzu', 'admin', 'admin@example.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblaccomodationplaces`
--
ALTER TABLE `tblaccomodationplaces`
  ADD PRIMARY KEY (`PlaceNumber`);

--
-- Indexes for table `tblapartmentplaces`
--
ALTER TABLE `tblapartmentplaces`
  ADD PRIMARY KEY (`PlaceNumber`);

--
-- Indexes for table `tblapartments`
--
ALTER TABLE `tblapartments`
  ADD PRIMARY KEY (`ApartmentNumber`,`PostCode`);

--
-- Indexes for table `tblcourses`
--
ALTER TABLE `tblcourses`
  ADD PRIMARY KEY (`CourseCode`);

--
-- Indexes for table `tblhallplaces`
--
ALTER TABLE `tblhallplaces`
  ADD PRIMARY KEY (`PlaceNumber`);

--
-- Indexes for table `tblinspections`
--
ALTER TABLE `tblinspections`
  ADD PRIMARY KEY (`InspectionNumber`);

--
-- Indexes for table `tblinvoices`
--
ALTER TABLE `tblinvoices`
  ADD PRIMARY KEY (`InvoiceNumber`);

--
-- Indexes for table `tblleaseagreements`
--
ALTER TABLE `tblleaseagreements`
  ADD PRIMARY KEY (`LeaseNumber`),
  ADD KEY `StudentID` (`StudentID`);

--
-- Indexes for table `tblstaff`
--
ALTER TABLE `tblstaff`
  ADD PRIMARY KEY (`StaffID`);

--
-- Indexes for table `tblstudents`
--
ALTER TABLE `tblstudents`
  ADD PRIMARY KEY (`StudentID`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblaccomodationplaces`
--
ALTER TABLE `tblaccomodationplaces`
  MODIFY `PlaceNumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tblcourses`
--
ALTER TABLE `tblcourses`
  MODIFY `CourseCode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblinspections`
--
ALTER TABLE `tblinspections`
  MODIFY `InspectionNumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblstaff`
--
ALTER TABLE `tblstaff`
  MODIFY `StaffID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tblstudents`
--
ALTER TABLE `tblstudents`
  MODIFY `StudentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblleaseagreements`
--
ALTER TABLE `tblleaseagreements`
  ADD CONSTRAINT `tblleaseagreements_ibfk_1` FOREIGN KEY (`StudentID`) REFERENCES `tblstudents` (`StudentID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `test_event` ON SCHEDULE EVERY 1 YEAR STARTS '2022-09-01 02:00:00' ON COMPLETION NOT PRESERVE ENABLE DO SELECT 1$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
