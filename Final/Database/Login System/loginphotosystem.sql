-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Aug 07, 2021 at 09:30 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginphotosystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `uidUsers`, `emailUsers`, `pwdUsers`) VALUES
(1, 'Shai', 'shai@gmail.com', '$2y$10$OWECt6l8edAkVWt69KAgnOCfGm95Z/iQa8kn6OIxWcq7X.nCem8Y2'),
(2, 'test', 'test@gmail.com', '$2y$10$FM541uEi11Kyl2r7DFZwselYvGtpJEgQhX4paFUzqk1030rOG0Xu.'),
(4, 'lkso', 'pppggf@gmail.com', '$2y$10$zH77piHRaWAfBD9ino.uqugnr.Q9/xKx7sIRyqwXeRBk665Ah8frG'),
(5, 'Nondo', 'nondo@gmail.com', '$2y$10$NPn/Hcf6PobxgglAHHDlVu3kF5oyjva/hiUKy52If0gUL2sGvPvfC'),
(6, 'jim', 'jim@gmail.com', '$2y$10$SA6OCnihcgH2gwtGl6vkL.LHyLJxc9e5Xcvhq5WILaznx7jGMasBa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
