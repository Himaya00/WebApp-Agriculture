-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2022 at 08:01 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id` int(11) NOT NULL,
  `division` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `division`, `district`, `name`) VALUES
(1, 'Gurudeniya', 'Kandy', 'D.S.Rathnayake'),
(2, 'Avissawella', 'Colombo', 'K.A.Jayantha'),
(3, 'Rattota', 'Matale', 'S.Bandara'),
(6, 'Manikhinna', 'Kandy', 'G.D.Jayaweera');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactno` bigint(12) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `division` varchar(255) DEFAULT current_timestamp(),
  `district` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `name`) VALUES
(1, 'Ampara'),
(2, 'Anuradhapura'),
(3, 'Badulla'),
(4, 'Batticaloa'),
(5, 'Colombo'),
(6, 'Galle'),
(7, 'Gampaha'),
(8, 'Hambantota'),
(9, 'Jaffna'),
(10, 'Kalutara'),
(11, 'Kandy'),
(12, 'Kegalle'),
(13, 'Kilinochchi'),
(14, 'Kurunegala'),
(15, 'Mannar'),
(16, 'Matale'),
(17, 'Matara'),
(18, 'Monaragala'),
(19, 'Mullaitivu'),
(20, 'Nuwara Eliya'),
(21, 'Polonnaruwa'),
(22, 'Puttalam'),
(23, 'Ratnapura'),
(24, 'Trincomalee'),
(25, 'Vavuniya');

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `id` int(11) NOT NULL,
  `distid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `foid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`id`, `distid`, `name`, `foid`) VALUES
(1, 11, 'Gannoruwa', ''),
(2, 5, 'Avissawella', '15'),
(3, 16, 'Rattota', ''),
(4, 14, 'Ibbagamuwa', '15'),
(9, 3, 'Passara', '21'),
(10, 8, 'Madamulana', '17'),
(11, 16, 'Rattota', '22');

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `district` varchar(255) NOT NULL,
  `fieldoffid` varchar(255) NOT NULL,
  `mobile` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`id`, `fullName`, `address`, `city`, `gender`, `email`, `username`, `password`, `district`, `fieldoffid`, `mobile`) VALUES
(23, 'S.S.Asanka', '11B,Jaya Mawatha', 'Avissawella', 'female', 'asanka@gmail.com', 'asanka12', 'asanka12', 'Colombo', '15', 771234567),
(24, 'W.A.Ranawaka', '3/1,Bogambara', 'Matale', 'male', 'rana@gmail.com', 'rana123', 'rana123', 'Matale', '14', 771234567),
(30, 'M.A.Sankalpa', '3/B, Ankubura', 'Alawathugoda', 'female', 'sankalpa@gmail.com', 'sankalpa', 'sanka12', 'Kandy', '13', 771234567),
(34, 'L.M.Rajapaksha', '11,Madamulana', 'Madamulana', 'female', 'raja@gmail.com', 'raja123', 'raja123', 'Hambantota', '17', 713452623),
(36, 'K.K.Gayan', '3/B, Bandarawela road', 'Passara', 'female', 'gayan@gmail.com', 'gayan123', 'gayan123', 'Badulla', '21', 771234567);

-- --------------------------------------------------------

--
-- Table structure for table `fieldoff`
--

CREATE TABLE `fieldoff` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `division` varchar(255) DEFAULT NULL,
  `distid` varchar(255) NOT NULL,
  `district` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `contactno` bigint(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fieldoff`
--

INSERT INTO `fieldoff` (`id`, `name`, `division`, `distid`, `district`, `position`, `contactno`, `username`, `password`, `email`) VALUES
(15, 'T.M.Dilshan', 'Avissawella', '5', 'Colombo', 'Divisional Supervisor', 721234456, 'ds2', 'ds12345', 'dila@gmail.com'),
(16, 'J.K.Ajith', 'Ibbagamuwa', '14', 'Kurunegala', 'FO-Grad 1', 712223456, 'ajith12', 'ajith123', 'ajith@gmail.com'),
(17, 'K.O.Perera', 'Madamulana', '8', 'Hambantota', 'Superviser L1', 751234567, 'perera12', 'perera12', 'perera@gmail.com'),
(21, 'S.N.Jayasena', 'Passara', '3', 'Badulla', 'FO-Grad 2', 721234567, 'jaya123', 'jaya123', 'jayas@gmail.com'),
(22, 'Lakshman Wasantha', 'Rattota', '16', 'Matale', 'FO-Grade 2', 721234567, 'laki123', 'laki123', 'laki@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `id` int(11) NOT NULL,
  `district` varchar(255) DEFAULT NULL,
  `division` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `appointmentTime` varchar(255) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `description` text DEFAULT NULL,
  `fieldoffid` varchar(255) NOT NULL,
  `farmid` varchar(255) NOT NULL,
  `mobile` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`id`, `district`, `division`, `fname`, `appointmentTime`, `postingDate`, `description`, `fieldoffid`, `farmid`, `mobile`) VALUES
(5, 'Matale', 'Rattota', 'W.A.Ranawaka', '6:00 PM', '2022-07-07 18:30:00', 'Need fertilizer', '22', '24', 771234567),
(7, 'Badulla', 'Passara', 'K.K.Gayan', '10:00 PM', '2022-07-07 18:30:00', 'Need urea', '21', '36', 713452623);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `division` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `contactno` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `division`, `district`, `contactno`) VALUES
(15, 'T.M.Dilshan', 'dila@gmail.com', 'ds2', 'ds12345', 'Avissawella', 'Colombo', 721234456),
(20, 'J.K.Ajith', 'ajith@gmail.com', 'ajith12', 'ajith123', 'Ibbagamuwa', 'Kurunegala', 712223456),
(22, 'S.S.Asanka', 'asanka@gmail.com', 'asanka12', 'asanka12', 'Avissawella', 'Colombo', 771234567),
(23, 'W.A.Ranawaka', 'rana@gmail.com', 'rana123', 'rana123', 'Matale', 'Matale', 771234567),
(29, 'M.A.Sankalpa', 'sankalpa@gmail.com', 'sankalpa', 'sanka12', 'Alawathugoda', 'Kandy', 771234567),
(31, 'L.M.Rajapaksha', 'raja@gmail.com', 'raja123', 'raja123', 'Madamulana', 'Hambantota', 713452623),
(34, 'K.O.Perera', 'perera@gmail.com', 'perera12', 'perera12', 'Madamulana', 'Hambantota', 751234567),
(39, 'S.N.Jayasena', 'jayas@gmail.com', 'jaya123', 'jaya123', 'Passara', 'Badulla', 721234567),
(40, 'K.K.Gayan', 'gayan@gmail.com', 'gayan123', 'gayan123', 'Passara', 'Badulla', 771234567),
(41, 'Lakshman Wasantha', 'laki@gmail.com', 'laki123', 'laki123', 'Rattota', 'Matale', 721234567);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fieldoff`
--
ALTER TABLE `fieldoff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `division` (`division`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `fieldoff`
--
ALTER TABLE `fieldoff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
