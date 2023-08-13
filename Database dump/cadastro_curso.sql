-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2023 at 05:06 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cadastro_curso`
--

CREATE DATABASE `cadastro_curso`

-- --------------------------------------------------------

--
-- Table structure for table `tb_curso`
--

CREATE TABLE `tb_curso` (
  `cd_curso` int(11) NOT NULL,
  `nm_curso` varchar(50) NOT NULL,
  `qt_horas` int(11) NOT NULL,
  `vl_curso` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_curso`
--

INSERT INTO `tb_curso` (`cd_curso`, `nm_curso`, `qt_horas`, `vl_curso`) VALUES
(1, 'Desenvolvimento de Sistemas', 200, '120.00'),
(2, 'Enfermagem', 200, '120.00'),
(3, 'Edificações', 1200, '30.00'),
(4, 'Administração', 1800, '120.00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `email_id` varchar(50) NOT NULL,
  `senha_id` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
