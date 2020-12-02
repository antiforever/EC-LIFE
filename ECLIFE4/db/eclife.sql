-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2020 at 09:24 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eclife`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_benper`
--

CREATE TABLE `tbl_benper` (
  `id` int(255) NOT NULL,
  `mid` varchar(255) NOT NULL,
  `medex` varchar(255) NOT NULL,
  `edex` varchar(255) NOT NULL,
  `midex` varchar(255) NOT NULL,
  `groex` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_benper`
--

INSERT INTO `tbl_benper` (`id`, `mid`, `medex`, `edex`, `midex`, `groex`) VALUES
(1, '16309092543', '12', '15', '10', '12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_depben`
--

CREATE TABLE `tbl_depben` (
  `id` int(255) NOT NULL,
  `mid` varchar(255) NOT NULL,
  `deprel` varchar(255) NOT NULL,
  `depname` varchar(255) NOT NULL,
  `perben` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_depben`
--

INSERT INTO `tbl_depben` (`id`, `mid`, `deprel`, `depname`, `perben`) VALUES
(1, '16309092543', 'Son', 'Bensurto, Michael c.', '12'),
(2, '16309092543', 'Mother', 'Bensurto, Annal c.', '10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package`
--

CREATE TABLE `tbl_package` (
  `id` int(255) NOT NULL,
  `mid` varchar(255) NOT NULL,
  `tamount` varchar(255) DEFAULT NULL,
  `ypay` varchar(2) DEFAULT NULL,
  `termspay` varchar(255) DEFAULT NULL,
  `tpay` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_package`
--

INSERT INTO `tbl_package` (`id`, `mid`, `tamount`, `ypay`, `termspay`, `tpay`) VALUES
(1, '57093977658', NULL, NULL, NULL, NULL),
(2, '43286823151', NULL, NULL, NULL, NULL),
(3, '14084105513', NULL, NULL, NULL, NULL),
(8, '16309092543', '800000', '3', 'Monthly', '22222.222222222'),
(9, '60836937064', '500000', '5', 'Monthly', '8333.3333333333');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration`
--

CREATE TABLE `tbl_registration` (
  `id` int(255) NOT NULL,
  `mid` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `mcont` varchar(11) NOT NULL,
  `madd` varchar(255) NOT NULL,
  `muname` varchar(255) NOT NULL,
  `mupass` varchar(255) NOT NULL,
  `mtype` varchar(255) NOT NULL,
  `mreferral` varchar(255) DEFAULT NULL,
  `uchoose` int(1) DEFAULT NULL,
  `localfarmer` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_registration`
--

INSERT INTO `tbl_registration` (`id`, `mid`, `mname`, `mcont`, `madd`, `muname`, `mupass`, `mtype`, `mreferral`, `uchoose`, `localfarmer`) VALUES
(1, '123456789', 'mendiola, bernard a.', '2147483647', 'makati city', 'admin', 'admin1234', 'family', NULL, NULL, NULL),
(2, '25227075914', 'Mendiola, Bernard Agustin', '2147483647', 'makati city', 'admin', 'admin', 'family', '123456789', NULL, NULL),
(3, '23404794255', 'Mendiola2, Bernard2 Agustin2', '2147483647', 'urdaneta city pangasinan', 'mba', 'mba1234', 'farmer', '123456789', 1, NULL),
(4, '57093977658', 'Dela Cruz, Juan', '2147483647', 'Pilipines', 'jdc', 'jdc', 'family', '', NULL, NULL),
(5, '60836937064', 'Arroyo, Gloria M.', '09267255882', 'Pampanga', 'gma', 'gma', 'farmer', '', 0, NULL),
(11, '16309092543', 'Blenda, Bensurto C.', '09267255882', 'Caloocan City', 'blenda', 'blenda', 'family', '25227075914', 0, '60836937064');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_benper`
--
ALTER TABLE `tbl_benper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_depben`
--
ALTER TABLE `tbl_depben`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_package`
--
ALTER TABLE `tbl_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_benper`
--
ALTER TABLE `tbl_benper`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_depben`
--
ALTER TABLE `tbl_depben`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_package`
--
ALTER TABLE `tbl_package`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
