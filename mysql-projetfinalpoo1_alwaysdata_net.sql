-- phpMyAdmin SQL Dump
-- version 5.1.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql-projetfinalpoo1.alwaysdata.net
-- Generation Time: Jun 04, 2023 at 03:22 AM
-- Server version: 10.6.13-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projetfinalpoo1_adama`
--
CREATE DATABASE IF NOT EXISTS `projetfinalpoo1_adama` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `projetfinalpoo1_adama`;

-- --------------------------------------------------------

--
-- Table structure for table `administrateur`
--

CREATE TABLE `administrateur` (
  `id` int(10) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date_de_naissance` date NOT NULL,
  `mot_de_passe` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_general_ci;

--
-- Dumping data for table `administrateur`
--

INSERT INTO `administrateur` (`id`, `nom`, `prenom`, `email`, `date_de_naissance`, `mot_de_passe`) VALUES
(1, 'ndiaye', 'lamine', 'lamin@gmail.com', '2023-02-16', '12345'),
(2, 'mbaye', 'ndiaye', 'lamin@gmail.com', '2023-02-10', 'f00d4bcab62b6fe93b37f621c8281bf12a41bb76d133c39c4e6adbae3945ba58'),
(3, 'moussa', 'ndiaye', 'ndiayemb2002@gmail.com', '2023-02-08', 'f00d4bcab62b6fe93b37f621c8281bf12a41bb76d133c39c4e6adbae3945ba58'),
(4, 'moussa', 'ndiaye', 'ndiayemb2002@gmail.com', '2023-02-08', 'f00d4bcab62b6fe93b37f621c8281bf12a41bb76d133c39c4e6adbae3945ba58'),
(5, 'moussa', 'ndiaye', 'ndiayemb2002@gmail.com', '2023-02-08', 'f00d4bcab62b6fe93b37f621c8281bf12a41bb76d133c39c4e6adbae3945ba58'),
(6, 'moussa', 'ndiaye', 'ndiayemb2002@gmail.com', '2023-02-08', 'f00d4bcab62b6fe93b37f621c8281bf12a41bb76d133c39c4e6adbae3945ba58'),
(7, 'moussa', 'ndiaye', 'ndiayemb2002@gmail.com', '2023-02-08', 'f00d4bcab62b6fe93b37f621c8281bf12a41bb76d133c39c4e6adbae3945ba58');

-- --------------------------------------------------------

--
-- Table structure for table `chambre`
--

CREATE TABLE `chambre` (
  `id` int(11) NOT NULL,
  `nom_chambre` varchar(100) NOT NULL,
  `numero_chambre` varchar(100) NOT NULL,
  `numero_batiment` varchar(100) NOT NULL,
  `date_expiration` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_general_ci;

--
-- Dumping data for table `chambre`
--

INSERT INTO `chambre` (`id`, `nom_chambre`, `numero_chambre`, `numero_batiment`, `date_expiration`) VALUES
(7, 'Delira', '99', '12', '2002-05-29T16:58'),
(9, 'bel', '4', '12', '2025-06-24T23:17'),
(10, 'DELi', '34', '567', '2025-06-23T00:41'),
(12, 'fali', '345', '777', '2067-06-16T00:42');

-- --------------------------------------------------------

--
-- Table structure for table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int(10) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `date_de_naissance` date NOT NULL,
  `mot_de_passe` varchar(100) NOT NULL,
  `Chambre` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_general_ci;

--
-- Dumping data for table `etudiant`
--

INSERT INTO `etudiant` (`id`, `nom`, `email`, `prenom`, `date_de_naissance`, `mot_de_passe`, `Chambre`) VALUES
(30, 'Adama', 'biggloo045@gmail.com', 'Diarra', '2003-06-20', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 10),
(32, 'Ndiaye', 'mbaye2@gmail.com', 'Mbaye', '2002-06-23', '7738b33e9ccc5f04a068d447eab1ac99f96e75697930973ed95f2945610ab99c', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `chambre`
--
ALTER TABLE `chambre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
