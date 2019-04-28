-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2019 at 10:58 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crime_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `message` text,
  `report_id` int(255) DEFAULT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `username`, `message`, `report_id`, `post_date`) VALUES
(1, 'dartmouth', 'Eish!! Dilo tsa Gaborone Bathong.', 2, '2019-04-26 15:49:10'),
(2, 'dartmouth', 'Ke G wa wa ntate', 3, '2019-04-26 15:59:01');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(255) NOT NULL,
  `name` varchar(191) NOT NULL,
  `surname` varchar(191) NOT NULL,
  `username` varchar(191) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` int(191) NOT NULL,
  `password` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `surname`, `username`, `email`, `number`, `password`, `location`, `image`, `createdAt`) VALUES
(1, 'Tefo', 'Mosienyane', 'dartmouth', 'tefo@hotmail.com', 712563409, '$2y$10$fteWWohhzq/2bSt1n6U31O2WNPRmQT1PNv.HLUxtqqehvqKgSE/7q', 'Braudhurst', '', '2019-04-24 17:51:14'),
(2, 'Tunnel', 'Rogue', 'rogueboy', 'rogue@ymail.com', 75483402, '$2y$10$ORh64/XGlkrOmIiwZPlRYOFHDhmbHTSpePRCDsFmFMMFWK5dcxCLG', 'Phase4', '', '2019-04-24 17:54:54'),
(3, 'Radio', 'Stewart', 'stew', 'sadam@gmail.com', 2147483647, '$2y$10$SkZoRnnKDDskczLwr.gi9.9r6kD6mZPO0MtKisq7LJWIylzEd4Qee', 'Village', '', '2019-04-24 18:01:42'),
(4, 'Thabo', 'Somebody', 'thabo', 'thabo@gmail.com', 2147483647, '$2y$10$B0sfdnPsAkp8JiSw30ucUeHWe4R1D4VhvHfTAgrB54bYlxL0avoeG', 'G-West', '', '2019-04-26 10:45:39');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(255) NOT NULL,
  `title` varchar(191) NOT NULL,
  `member_id` int(191) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `number` int(255) NOT NULL,
  `date_reported` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `title`, `member_id`, `username`, `description`, `location`, `address`, `number`, `date_reported`) VALUES
(1, 'Break-in', 1, '@dartmouth', 'This is an Emergency!!', 'Braudhurst', 'Latitude: -24.645632 || Longitude: 25.917030399999998', 712563409, '2019-04-25 20:45:55'),
(2, 'Suspicious Activity', 1, '@dartmouth', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', 'Tlokweng', 'melthabeng 115, serotla', 756893482, '2019-04-26 08:13:28'),
(3, 'Suspicious Activity', 4, '@thabo', 'kerhbsvkjelkrjawenkljfalcwk f jwelafjkejfkjsfak ajkasefk jsknfvsefncjksnfajskejfbcksnfckjsndfkcljsfkclnsk  jsnlkacfnjskncalksjlnfsndbfckjnskjavseavb senbravkjsfankbakjdsnflksjn kjk', 'G-west ', '1254 maun drive, st', 71234567, '2019-04-26 10:50:00'),
(4, 'Robbery', 4, '@thabo', 'This is an Emergency!!', 'G-West', 'Latitude: -24.665352700000003 || Longitude: 25.9310816', 2147483647, '2019-04-26 10:51:13'),
(5, 'Assault', 1, 'anon', 'This is an Emergency!!', 'Braudhurst', 'Latitude: -24.662353 || Longitude: 25.9323546', 712563409, '2019-04-26 11:15:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `report_id` (`report_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_id` (`member_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`report_id`) REFERENCES `reports` (`id`);

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
