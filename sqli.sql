-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 30, 2018 at 09:33 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sqli`
--
CREATE DATABASE IF NOT EXISTS `sqli` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sqli`;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `uid` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`uid`, `date`, `message`) VALUES
(1, '2018-01-24 21:44:30', 'hello\r\n'),
(2, '2018-01-24 21:44:30', 'hello\r\n'),
(4, '2018-01-24 21:47:59', 'Gotcha&lt;script&gt; alert(&quot;This message will pop up everytime!&quot;); &lt;/script&gt;'),
(5, '2018-01-24 21:47:59', 'Gotcha&lt;script&gt; alert(&quot;This message will pop up everytime!&quot;); &lt;/script&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` varchar(20) NOT NULL,
  `NAME` varchar(60) NOT NULL,
  `EMAIL` varchar(60) NOT NULL,
  `PASSWORD` varchar(70) NOT NULL,
  `CCTYPE` varchar(16) NOT NULL,
  `CCNUM` varchar(16) NOT NULL,
  `CITY` varchar(60) NOT NULL,
  `PHONE` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `NAME`, `EMAIL`, `PASSWORD`, `CCTYPE`, `CCNUM`, `CITY`, `PHONE`) VALUES
('135401', 'PURCHASING @ MOUNT SINAI', 'purchases@mountsinai.com', 'Pa$$wordMount', 'VISA', '4117888890900716', 'BROOKLYN, NY', '7186549087'),
('135408', 'CARLASCIO ORTHOPEDIC', 'carlascioortho@ail.com', 'Pa$$wordCarlascio', 'MASTERCARD', '8117677787280901', 'JERSEY CITY, NJ', '9088765643'),
('135409', 'DYNAMICS ORTHOTICS AND PROSTHETICS', 'dynamicortho@ail.com', 'Pa$$wordDynamic', 'AMEX', '6729182703973990', 'DENVER, CO', '6154452898'),
('135411', 'HANGER CLINIC: PROSTHETICS ', 'hangerclinic@ail.com', 'Pa$$wordHanger', 'VISA', '5679890919028376', 'LOS ANGELES, CA', '2152507888'),
('135890', 'PROSTA', 'purchasing@prosta.com', 'Pa$$wordProsta', 'MASTERCARD', '8117656292893098', 'NEW YORK, NY', '7809829098'),
('135908', 'OFFICE OF DR.ROSEN', 'drosen@ail.com', 'Pa$$wordRosen', 'VISA', '4117888890900716', 'BROOKLYN, NY', '3476537261');

-- --------------------------------------------------------

--
-- Table structure for table `prosthetic`
--

CREATE TABLE `prosthetic` (
  `ID` varchar(20) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `PRICE` varchar(20) NOT NULL,
  `VENDOR_CITY` varchar(30) NOT NULL,
  `STOCK` varchar(30) NOT NULL,
  `FUNCTION` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prosthetic`
--

INSERT INTO `prosthetic` (`ID`, `NAME`, `PRICE`, `VENDOR_CITY`, `STOCK`, `FUNCTION`) VALUES
('214482', 'KING SMART LEG', '$10000', 'BROOKLYN,NY', '500', 'LEG'),
('252213', 'OTTO BOCK X3 WATERPROOF PROSTHETIC ', '$26500', 'Sacramento, CA', '207', 'KNEE'),
('253472', 'MICHELANGELO HAND', '$15700', 'NEW BRUNSWICK, NJ', '318', 'HAND'),
('256719', 'HELIX3D HIP JOINT SYSTEM ', '$17750', 'CLEVELAND, OH', '567', 'HIP'),
('290810', 'QC SMART FOOT', '$1000', 'RARITAN, NJ', '90', 'FOOT'),
('627910', 'DYNAMIC ARM', '$7500', 'WILMINGTON, DE', '456', 'ARM '),
('908290', 'QC SMART ARM', '$7500', 'RARITAN, NJ', '709', 'ARM');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `uid` varchar(128) NOT NULL,
  `pwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `uid`, `pwd`) VALUES
(1, 'admin', '5fcb2671b9670831c4faa33840cebeb218cab9d1edac4a9a12e7f4549e5f3f1e8190c45dd81eabc0419b60cefbc63c711a776666ec1d8b25cc2a528590715957'),
(2, 'daniel', 'e9e633097ab9ceb3e48ec3f70ee2beba41d05d5420efee5da85f97d97005727587fda33ef4ff2322088f4c79e8133cc9cd9f3512f4d3a303cbdb5bc585415a00'),
(3, 'testhash', '5fcb2671b9670831c4faa33840cebeb218cab9d1edac4a9a12e7f4549e5f3f1e8190c45dd81eabc0419b60cefbc63c711a776666ec1d8b25cc2a528590715957');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`) USING BTREE;

--
-- Indexes for table `prosthetic`
--
ALTER TABLE `prosthetic`
  ADD PRIMARY KEY (`ID`) USING BTREE,
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
