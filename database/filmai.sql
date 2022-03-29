-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2022 at 02:06 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `filmai`
--

-- --------------------------------------------------------

--
-- Table structure for table `filmu_lentele`
--

CREATE TABLE `filmu_lentele` (
  `ID` int(11) NOT NULL,
  `zanras` varchar(266) NOT NULL,
  `metai` text NOT NULL,
  `rezisierius` varchar(264) NOT NULL,
  `pavadinimas` varchar(264) NOT NULL,
  `img` varchar(264) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `isleidimo-data` date DEFAULT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `filmu_lentele`
--

INSERT INTO `filmu_lentele` (`ID`, `zanras`, `metai`, `rezisierius`, `pavadinimas`, `img`, `price`, `isleidimo-data`, `quantity`) VALUES
(1, 'Istoriniai', '1991 - 1995', 'Steven Spielberg', 'Šindlerio sąrašas', '1.jpg', '13.99', '1993-01-01', 10),
(2, 'Istoriniai', '1996 - 2000', 'Steven Spielberg', 'Gelbstint eilinį Rajaną', '2.jpg', '12.99', '1998-12-02', 10),
(3, 'Istoriniai', '2016 - 2020', 'Steven Spielberg', 'Šnipų tiltas', '3.jpg', '12.99', '2015-01-01', 10),
(4, 'Drama', '2001 - 2005', 'Steven Spielberg', 'Terminalas', '4.jpg', '12.99', '2004-04-25', 10),
(6, 'Fantastiniai', '2001 - 2005', 'Steven Spielberg', 'Dirbtinis intelektas', '5.jpg', '12.99', '2001-04-25', 10),
(7, 'Veiksmo', '2011 - 2015', 'Quentin Tarantino', 'Ištrūkęs Džango', '6.jpg', '12.99', '2012-04-25', 10),
(8, 'Komedija', '1975 - 1980', 'Woody Allen', 'Manhatanas', '7.jpg', '12.99', '1979-01-25', 10),
(9, 'Drama', '1996 - 2000', 'Roberto Benigni', 'Gyvenimas yra gražus', '8.jpg', '12.99', '1997-03-25', 10),
(10, 'Istoriniai', '2001 - 2005', 'Roman Polański', 'Pianistas', '10.jpg', '12.99', '2002-01-25', 10),
(11, 'Drama', '2006 - 2010', 'Martin Scorsese', 'Kuždesių sala', '11.jpg', '12.99', '2010-01-25', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `filmu_lentele`
--
ALTER TABLE `filmu_lentele`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `filmu_lentele`
--
ALTER TABLE `filmu_lentele`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
