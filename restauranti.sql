-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2021 at 10:08 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restauranti`
--

-- --------------------------------------------------------

--
-- Table structure for table `administratori`
--

CREATE TABLE `administratori` (
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administratori`
--

INSERT INTO `administratori` (`username`, `password`) VALUES
('admin', 'Unipz.123');

-- --------------------------------------------------------

--
-- Table structure for table `klienti`
--

CREATE TABLE `klienti` (
  `klienti_id` int(11) NOT NULL,
  `klienti_emri` varchar(20) DEFAULT NULL,
  `klienti_mbiemri` varchar(30) DEFAULT NULL,
  `k_username` varchar(30) NOT NULL,
  `k_password` varchar(30) NOT NULL,
  `klienti_telefoni` int(11) DEFAULT NULL,
  `klienti_emailAdresa` varchar(40) DEFAULT NULL,
  `konfirmimi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `klienti`
--

INSERT INTO `klienti` (`klienti_id`, `klienti_emri`, `klienti_mbiemri`, `k_username`, `k_password`, `klienti_telefoni`, `klienti_emailAdresa`, `konfirmimi`) VALUES
(17, 'Alfred', 'Fazliu', 'alfredfazliu', 'Af12345', 44123456, 'alfredfazliu@gmail.com', 1),
(20, 'Armend', 'Fazliu', 'armend', 'fazliu', 44987123, 'armendf@gmail.com', 1),
(25, 'test', 'test', 'test', 'testtest', 44123321, 'test@hotmail.com', 1),
(27, 'Albion', 'Morina', 'Albion', '123456', 44444555, 'albion@gmail.com', 1),
(28, 'Armend', 'FaZLIU', 'mendi123', 'Armendf134', 43555560, 'armendf134@gmail.com', 1),
(29, 'Armend', 'Fazliu', 'armendf134', 'armendf134', 44112112, 'armendfazliu@gmail.com', 1),
(30, 'albion', 'morina', 'albialbi', 'albialbi1234', 49256307, 'amorii7@hotmail.com', 1),
(31, 'agron', 'morina', 'agroni1', 'agron123', 44555589, 'agron1@hotmail.com', 1),
(32, 'Hashim', 'Thaci', 'hasha123', 'hasha123', 49112112, 'hashimbossi@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `komenti`
--

CREATE TABLE `komenti` (
  `emri` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `komenti` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komenti`
--

INSERT INTO `komenti` (`emri`, `email`, `komenti`) VALUES
('Albion', 'albion@hotmail.com', 'test test'),
('Alfred', 'alfred@gmail.com', 'test'),
('armend', 'aremnd@hotmail.com', 'aaaaaaaa'),
('aremnd', 'armend@gmail.com', 'shum \r\n');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_lloji` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_lloji`) VALUES
(2, 'dasmave'),
(4, 'takimeve'),
(5, 'konferencave'),
(6, 'Pica napolitano'),
(8, 'ushqime deti');

-- --------------------------------------------------------

--
-- Table structure for table `rezervimi`
--

CREATE TABLE `rezervimi` (
  `rez_id` int(11) NOT NULL,
  `rez_dataRezervimit` date DEFAULT NULL,
  `rez_dataEventit` date DEFAULT NULL,
  `rez_fillimiEventit` time DEFAULT NULL,
  `rez_kohezgjatja` int(11) DEFAULT NULL,
  `nr_ulesve` int(11) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `klienti_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rezervimi`
--

INSERT INTO `rezervimi` (`rez_id`, `rez_dataRezervimit`, `rez_dataEventit`, `rez_fillimiEventit`, `rez_kohezgjatja`, `nr_ulesve`, `menu_id`, `klienti_id`) VALUES
(0, '2021-12-21', '2021-12-21', '00:00:00', 0, 0, 2, 20),
(9, '2021-09-20', '2021-09-21', '20:00:00', 4, 8, 6, 17),
(10, '2021-09-20', '2021-10-20', '12:00:00', 2, 20, 4, 17),
(25, '2021-01-22', '2021-02-22', '12:00:00', 3, 5, 2, 25),
(78, '2020-12-12', '2020-04-13', '20:00:00', 3, 25, 5, 17),
(125, '2020-12-12', '2020-04-12', '20:00:00', 2, 200, 4, 17),
(126, '2001-10-21', '0000-00-00', '12:00:00', 2, 3, 2, 31),
(322, '2012-09-20', '2012-05-21', '12:00:00', 5, 9, 4, 17),
(323, '0000-00-00', '0000-00-00', '12:00:00', 3, 5, 6, 20),
(324, '0000-00-00', '2010-10-21', '12:00:00', 3, 5, 2, 20),
(525, '2001-10-21', '2001-10-21', '288:00:00', 2, 5, 2, 20),
(545, '2001-10-21', '0000-00-00', '12:00:00', 3, 5, 2, 31),
(567, '2001-04-21', '2001-04-21', '00:00:12', 3, 5, 4, 20),
(987, '2001-10-21', '2001-10-21', '12:00:00', 2, 4, 2, 20),
(1024, '2001-09-21', '2001-09-21', '12:00:00', 2, 4, 5, 20),
(1056, '2014-12-21', '2016-12-21', '13:00:00', 2, 5, 2, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administratori`
--
ALTER TABLE `administratori`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `klienti`
--
ALTER TABLE `klienti`
  ADD PRIMARY KEY (`klienti_id`);

--
-- Indexes for table `komenti`
--
ALTER TABLE `komenti`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `rezervimi`
--
ALTER TABLE `rezervimi`
  ADD PRIMARY KEY (`rez_id`),
  ADD KEY `menu_id` (`menu_id`),
  ADD KEY `klienti_id` (`klienti_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `klienti`
--
ALTER TABLE `klienti`
  MODIFY `klienti_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rezervimi`
--
ALTER TABLE `rezervimi`
  ADD CONSTRAINT `rezervimi_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`menu_id`),
  ADD CONSTRAINT `rezervimi_ibfk_2` FOREIGN KEY (`klienti_id`) REFERENCES `klienti` (`klienti_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
