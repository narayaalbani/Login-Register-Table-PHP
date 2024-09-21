-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 21, 2024 at 04:54 AM
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
-- Database: `auth`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`email`, `name`, `password`) VALUES
('tes@tes.com', 'tes', '$2y$10$rQ48dRJKo1sugzobtQjBG.fq.gBLVRdcXzqUSoOYsM6xSCDvjXAaC');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(9) COLLATE utf8mb3_unicode_ci NOT NULL,
  `golongan` char(1) COLLATE utf8mb3_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `golongan`, `name`) VALUES
('10291', 'k', 'Camden'),
('1080874', 'c', 'Aubrey'),
('1161', 'g', 'Maxine'),
('127', 'j', 'Melody'),
('12896', 'v', 'Marcella'),
('129673', 'i', 'Kolby'),
('13564969', 't', 'Felipa'),
('144174449', 'u', 'Marjory'),
('1451817', 'u', 'Elfrieda'),
('15313', 'q', 'Hattie'),
('159', 't', 'Gia'),
('16', 'f', 'Betsy'),
('188650605', 'h', 'Elise'),
('193', 'u', 'Lambert'),
('194799', 'k', 'Cathryn'),
('2', 'v', 'Manuel'),
('20583752', 'q', 'Pierre'),
('2091545', 'i', 'Braxton'),
('209228776', 'e', 'Lindsay'),
('209599265', 'g', 'Noemi'),
('21', 'v', 'Albina'),
('22', 'v', 'Rickie'),
('22692342', 'j', 'Jonathan'),
('243582659', 'z', 'Maurine'),
('248286147', 'w', 'Miguel'),
('2564121', 'e', 'Grant'),
('282568', 'i', 'Laurianne'),
('3', 'r', 'Jan'),
('3010', 'r', 'Rey'),
('31', 'i', 'Earlene'),
('31167472', 'r', 'Sydnie'),
('32487013', 'i', 'Jackeline'),
('328501', 'r', 'Barrett'),
('33', 'g', 'Fletcher'),
('33123182', 'i', 'Emmie'),
('38', 'e', 'Agustin'),
('389', 'j', 'Arjun'),
('38990', 'a', 'Ivy'),
('4', 'a', 'Danika'),
('405261', 's', 'Eda'),
('42587462', 'i', 'Vivianne'),
('428391380', 'm', 'Clara'),
('43335390', 'l', 'Charity'),
('43880252', 's', 'Alice'),
('44', 'r', 'Amya'),
('46232697', 'i', 'Ramon'),
('46767', 'b', 'Ursula'),
('4733210', 'i', 'Providenci'),
('4743385', 'i', 'Asia'),
('491', 'i', 'Freeda'),
('49414', 'o', 'Ross'),
('4976150', 'c', 'Harold'),
('5', 'w', 'Garrick'),
('53', 's', 'Dorcas'),
('5597', 'j', 'Trevion'),
('6', 'i', 'Enola'),
('61', 'p', 'Godfrey'),
('6219', 'c', 'Maria'),
('6261', 't', 'Helen'),
('629', 'f', 'Evan'),
('65', 'y', 'Garrick'),
('65062', 'g', 'Caleb'),
('65094589', 'i', 'Mohammad'),
('65501', 'e', 'Yazmin'),
('66444592', 'p', 'Dave'),
('67187', 'a', 'Rhea'),
('7', 'w', 'Thelma'),
('706', 'j', 'Loren'),
('719', 'g', 'Hilbert'),
('7210', 'c', 'Carley'),
('733033', 'q', 'Lauryn'),
('7386825', 'j', 'Faye'),
('76', 'l', 'Tressa'),
('77369', 'm', 'Reva'),
('775', 'f', 'Adaline'),
('77599', 'g', 'Zita'),
('79', 'l', 'Isabel'),
('8', 'j', 'Zella'),
('80337', 'p', 'Aliza'),
('80815931', 'p', 'Shakira'),
('811315206', 'f', 'Yvonne'),
('8224151', 'k', 'Madyson'),
('82987126', 'q', 'Jameson'),
('84286569', 'q', 'Barney'),
('86912427', 'v', 'Pedro'),
('883', 'e', 'Berry'),
('8842100', 'r', 'Roger'),
('8889', 'v', 'Rickey'),
('88899', 'x', 'Isaias'),
('9', 'c', 'Christop'),
('901', 'u', 'Ramon'),
('93414', 'm', 'Foster'),
('943', 'g', 'Janie'),
('957862', 'd', 'Domenic'),
('9688', 'n', 'Loyal'),
('97084', 'k', 'Elfrieda'),
('974295', 'h', 'Malika'),
('98', 'p', 'Rowland'),
('993548', 'b', 'Rahul');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
