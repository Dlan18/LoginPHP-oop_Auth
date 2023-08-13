-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 13, 2023 at 12:15 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `class_ranks`
--

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `id` int NOT NULL,
  `student_id` int NOT NULL,
  `score` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `scores`
--

INSERT INTO `scores` (`id`, `student_id`, `score`) VALUES
(20, 20, 87),
(21, 21, 85),
(22, 22, 87),
(24, 24, 83),
(25, 25, 88),
(26, 26, 77),
(27, 27, 90),
(28, 28, 99),
(29, 29, 20);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`) VALUES
(20, 'Abdurrahman Faiz'),
(21, 'Achmad Fauzan'),
(22, 'Adystya Anandita'),
(24, 'Aisyah Salsabila'),
(25, 'Aldo Ahmad Hirzi'),
(26, 'Ali Zainal Abidin Sahab'),
(27, 'sdwww'),
(28, 'esa'),
(29, 'salmeng');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`) VALUES
(5, 'paiz', 'paiz', '123'),
(6, 'p', 'p', 'p'),
(7, 'wd', 'wdd', '1'),
(8, 't', 't', '1'),
(9, 'p', 'pp', '$2y$10$y/kgQ2M.n1PQebhK5tmR5uYD0Mp.5biqIDYfuDO5lWsCIfyS.xtsW'),
(10, 'oi', 'salmeng', '$2y$10$hdanYzeU2xq1EuM9fXktgOEcF0qXTE.1NJ4bBLmCX3Q4wTELrQL4W'),
(11, 'oi', 'tes', '$2y$10$H9UEt4QngHqEsHCvnirVfu.aMgjz./nScT0Avd552D.EC21zuXLue'),
(12, 'test', 'ya', '$2y$10$cYGDXPW238rKXBPtrb76iuvcvOkGdCCNfV/bZdGhaZTFMau5rAEYW'),
(13, 'ffrfr', 'erfr', '$2y$10$88FClGwdKTonZnZcKbz/9O2XOmFHjRBFA2Rox9p0rQ136pt041c8e'),
(14, 'q', 'q', '$2y$10$0o8HkDL1S/mFKFQU7p/4x.ibyCxeZ0Ki8gXWSPiMDGugxscm5IpMW'),
(15, 'asaas', 'ds', '$2y$10$UkoyZMc5x1AEf9yZHpErzefdzq7YM40O9.uD2LqCVpvtBHfaMrbre'),
(16, 'dlan', 'dlan', '$2y$10$gUR5/qjGuQVwDvetHhXSdu86HcJegly1Um79j1uOArchy3DZZvMza'),
(17, 'jj', 'jj1', '$2y$10$ppuqK/A6LkhVnv3NrSLZOej0CdW7RmMAlNOC4q9ixjf1nl4u6Pvye'),
(18, 'fadlan', 'fdln', '$2y$10$VvmLFsJkpu1LcvnEo8v6kO1JsJBhkeZhDBSaD8..OUFO.Lw0ZhQhO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `scores`
--
ALTER TABLE `scores`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `scores`
--
ALTER TABLE `scores`
  ADD CONSTRAINT `scores_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
