-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 09, 2022 at 04:33 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tirage`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `add_date` varchar(255) NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `connected_shared`
--

DROP TABLE IF EXISTS `connected_shared`;
CREATE TABLE IF NOT EXISTS `connected_shared` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code_mise_client` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `connected_shared`
--

INSERT INTO `connected_shared` (`id`, `code_mise_client`, `ip`, `date`) VALUES
(1, 'Ti_16390419878_1_rage', '::1', '2022-01-08 02:42:15'),
(2, '1', '::1', '2022-01-08 02:58:15');

-- --------------------------------------------------------

--
-- Table structure for table `product_reaction`
--

DROP TABLE IF EXISTS `product_reaction`;
CREATE TABLE IF NOT EXISTS `product_reaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_user_poster` varchar(5) NOT NULL,
  `reaction` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_reaction`
--

INSERT INTO `product_reaction` (`id`, `product_id`, `user_id`, `product_user_poster`, `reaction`) VALUES
(1, 7, 8, '5', 1),
(2, 2, 8, '2', 0),
(3, 8, 8, '5', 1),
(4, 11, 8, '5', 1),
(5, 14, 8, '5', 1),
(6, 15, 8, '5', 1),
(7, 26, 8, '5', 1),
(8, 12, 8, '5', 1),
(9, 16, 8, '5', 1),
(10, 18, 8, '', 1),
(11, 22, 8, '', 1),
(12, 21, 8, '', 1),
(13, 23, 8, '', 1),
(14, 24, 8, '', 1),
(15, 7, 1, '', 1),
(16, 2, 1, '', 1),
(17, 8, 1, '', 1),
(18, 17, 1, '', 1),
(19, 21, 1, '', 1),
(20, 16, 5, '5', 1),
(21, 17, 5, '5', 1),
(22, 20, 5, '5', 1),
(23, 10, 8, '5', 1),
(24, 20, 8, '5', 1),
(25, 57, 8, '5', 0),
(26, 13, 8, '5', 1),
(27, 25, 8, '5', 1),
(28, 29, 8, '5', 1),
(29, 33, 8, '5', 1),
(30, 41, 8, '5', 1),
(31, 64, 5, '5', 1),
(32, 65, 5, '5', 1),
(33, 68, 5, '5', 1),
(34, 76, 5, '5', 1),
(35, 88, 5, '5', 1),
(36, 32, 8, '5', 1),
(37, 56, 8, '5', 1),
(38, 72, 8, '5', 1),
(39, 77, 8, '5', 1),
(40, 81, 8, '5', 1),
(41, 40, 8, '5', 1),
(42, 54, 8, '5', 1),
(43, 61, 8, '5', 1),
(44, 65, 8, '5', 1),
(45, 69, 8, '5', 1),
(46, 73, 8, '5', 1),
(47, 76, 8, '5', 1),
(48, 80, 8, '5', 1),
(49, 84, 8, '5', 1),
(50, 88, 8, '5', 1),
(51, 92, 8, '5', 1),
(52, 37, 5, '5', 1),
(53, 40, 5, '5', 1),
(54, 36, 5, '5', 1),
(55, 80, 5, '5', 1),
(56, 81, 5, '5', 1),
(57, 18, 7, '5', 1),
(58, 30, 7, '5', 1),
(59, 113, 7, '5', 1),
(60, 112, 7, '5', 1),
(61, 107, 7, '5', 1),
(62, 104, 7, '5', 1),
(63, 42, 9, '5', 1),
(64, 41, 9, '5', 1),
(65, 40, 9, '5', 1),
(66, 39, 9, '5', 1),
(67, 43, 9, '5', 1);

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `caption_image` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `category_product` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `mise` varchar(255) NOT NULL,
  `participant` int(11) NOT NULL,
  `prix_vente` varchar(255) NOT NULL,
  `admin_display` int(11) NOT NULL DEFAULT 0,
  `display_status` int(11) NOT NULL DEFAULT 0,
  `sellValidate` int(11) NOT NULL DEFAULT 0,
  `validate_tirage` int(5) NOT NULL,
  `add_date` varchar(255) NOT NULL,
  `start_date` varchar(50) NOT NULL,
  `end_date` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=115 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`id`, `user_id`, `caption_image`, `product`, `category_product`, `description`, `mise`, `participant`, `prix_vente`, `admin_display`, `display_status`, `sellValidate`, `validate_tirage`, `add_date`, `start_date`, `end_date`) VALUES
(1, 5, '7990_download2.png', 'techno F1', 'Telephone', 'profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outilprofite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outil', '1', 60, '55', 0, 1, 0, 0, '2021-09-18', '2021-10-12', '2022-01-09'),
(2, 5, '29613_images24.png', 'samsung galaxy note S8', 'Telephone', 'pour une meilleure performance avec votre portable gagne le samsung s8 pour une meilleure performance avec votre portable gagne le samsung s8', '1', 157, '157', 1, 1, 0, 0, '2021-09-18', '2021-10-11', '2021-11-11'),
(7, 5, '15985_images24.png', 'Iphone x', 'Telephone', 'Bine Bine Bine vBineBineBineBineBineBineBineBineBineBineBine', '1', 200, '200', 1, 1, 0, 0, '2021-09-18', '2021-10-12', '2021-11-12'),
(8, 5, '28170_download2.png', 'Iphone x Pro Max', 'Telephone', 'ok Bine Bine Bine vBine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine vBine Bine BineBine BineBine BineBine BineBine Bine', '10', 200, '2000', 1, 1, 0, 0, '2021-09-18', '2021-10-13', '2022-01-09'),
(11, 5, '7990_download2.png', 'techno F1', 'Telephone', 'profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outilprofite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outil', '1', 60, '55', 1, 1, 0, 0, '2021-09-18', '2021-10-12', '2021-11-30'),
(10, 5, '8303_images24.png', 'Benz', 'Voiture', 'Meilleur qualite et produit', '2', 100, '5000', 1, 1, 0, 1, '2021-10-12', '2021-10-12', '2021-10-13'),
(12, 5, '29613_images24.png', 'samsung galaxy note S8', 'Telephone', 'pour une meilleure performance avec votre portable gagne le samsung s8 pour une meilleure performance avec votre portable gagne le samsung s8', '0', 0, '157', 1, 1, 0, 0, '2021-09-18', '2021-10-11', '2021-11-11'),
(13, 5, '15985_images24.png', 'Iphone x', 'Telephone', 'Bine Bine Bine vBineBineBineBineBineBineBineBineBineBineBine', '1', 200, '200', 1, 1, 0, 0, '2021-09-18', '2021-10-12', '2021-11-12'),
(14, 5, '28170_download2.png', 'Iphone x Pro Max', 'Telephone', 'ok Bine Bine Bine vBine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine vBine Bine BineBine BineBine BineBine BineBine Bine', '10', 200, '2000', 1, 1, 0, 0, '2021-09-18', '2021-10-13', '2022-01-09'),
(15, 5, '28170_download2.png', 'Iphone x Pro Max', 'Telephone', 'ok Bine Bine Bine vBine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine vBine Bine BineBine BineBine BineBine BineBine Bine', '10', 200, '2000', 1, 1, 1, 0, '2021-09-18', '2021-10-13', '2022-01-09'),
(16, 5, '28170_download2.png', 'Iphone x Pro Max', 'Telephone', 'ok Bine Bine Bine vBine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine vBine Bine BineBine BineBine BineBine BineBine Bine', '10', 200, '2000', 1, 1, 0, 0, '2021-09-18', '2021-10-13', '2022-01-09'),
(17, 5, '28170_download2.png', 'Iphone x Pro Max', 'Telephone', 'ok Bine Bine Bine vBine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine vBine Bine BineBine BineBine BineBine BineBine Bine', '10', 200, '2000', 1, 1, 0, 0, '2021-09-18', '2021-10-13', '2021-11-13'),
(18, 5, '28170_download2.png', 'Iphone x Pro Max', 'Telephone', 'ok Bine Bine Bine vBine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine vBine Bine BineBine BineBine BineBine BineBine Bine', '10', 200, '2000', 1, 1, 0, 0, '2021-09-18', '2021-10-13', '2021-11-13'),
(19, 5, '28170_download2.png', 'Iphone x Pro Max', 'Telephone', 'ok Bine Bine Bine vBine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine vBine Bine BineBine BineBine BineBine BineBine Bine', '10', 200, '2000', 1, 1, 0, 0, '2021-09-18', '2021-10-13', '2021-11-13'),
(20, 5, '8303_images24.png', 'Benz', 'Voiture', 'Meilleur qualite et produit', '2', 100, '5000', 1, 1, 0, 0, '2021-10-12', '2021-10-12', '2021-10-13'),
(21, 5, '7990_download2.png', 'techno F1', 'Telephone', 'profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outilprofite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outil', '1', 60, '55', 1, 1, 0, 0, '2021-09-18', '2021-10-12', '2021-11-30'),
(22, 5, '29613_images24.png', 'samsung galaxy note S8', 'Telephone', 'pour une meilleure performance avec votre portable gagne le samsung s8 pour une meilleure performance avec votre portable gagne le samsung s8', '0', 0, '157', 1, 1, 0, 0, '2021-09-18', '2021-10-11', '2021-11-11'),
(23, 5, '15985_images24.png', 'Iphone x', 'Telephone', 'Bine Bine Bine vBineBineBineBineBineBineBineBineBineBineBine', '1', 200, '200', 1, 1, 0, 0, '2021-09-18', '2021-10-12', '2021-11-12'),
(24, 5, '28170_download2.png', 'Iphone x Pro Max', 'Telephone', 'ok Bine Bine Bine vBine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine vBine Bine BineBine BineBine BineBine BineBine Bine', '10', 200, '2000', 1, 1, 0, 0, '2021-09-18', '2021-10-13', '2021-11-13'),
(25, 5, '7990_download2.png', 'techno F1', 'Telephone', 'profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outilprofite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outil', '1', 60, '55', 1, 1, 0, 0, '2021-09-18', '2021-10-12', '2021-11-30'),
(26, 5, '29613_images24.png', 'samsung galaxy note S8', 'Telephone', 'pour une meilleure performance avec votre portable gagne le samsung s8 pour une meilleure performance avec votre portable gagne le samsung s8', '0', 0, '157', 1, 1, 0, 0, '2021-09-18', '2021-10-11', '2021-11-11'),
(27, 5, '15985_images24.png', 'Iphone x', 'Telephone', 'Bine Bine Bine vBineBineBineBineBineBineBineBineBineBineBine', '1', 200, '200', 1, 1, 0, 0, '2021-09-18', '2021-10-12', '2021-11-12'),
(28, 5, '28170_download2.png', 'Iphone x Pro Max', 'Telephone', 'ok Bine Bine Bine vBine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine vBine Bine BineBine BineBine BineBine BineBine Bine', '10', 200, '2000', 1, 1, 0, 0, '2021-09-18', '2021-10-13', '2021-11-13'),
(29, 5, '7990_download2.png', 'techno F1', 'Telephone', 'profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outilprofite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outil', '1', 60, '55', 1, 1, 0, 0, '2021-09-18', '2021-10-12', '2021-11-30'),
(30, 5, '29613_images24.png', 'samsung galaxy note S8', 'Telephone', 'pour une meilleure performance avec votre portable gagne le samsung s8 pour une meilleure performance avec votre portable gagne le samsung s8', '0', 0, '157', 1, 1, 0, 0, '2021-09-18', '2021-10-11', '2021-11-11'),
(31, 5, '15985_images24.png', 'Iphone x', 'Telephone', 'Bine Bine Bine vBineBineBineBineBineBineBineBineBineBineBine', '1', 200, '200', 1, 1, 0, 0, '2021-09-18', '2021-10-12', '2021-11-12'),
(32, 5, '28170_download2.png', 'Iphone x Pro Max', 'Telephone', 'ok Bine Bine Bine vBine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine vBine Bine BineBine BineBine BineBine BineBine Bine', '10', 200, '2000', 1, 1, 0, 0, '2021-09-18', '2021-10-13', '2021-11-13'),
(33, 5, '7990_download2.png', 'techno F1', 'Telephone', 'profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outilprofite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outil', '1', 60, '55', 1, 1, 0, 0, '2021-09-18', '2021-10-12', '2021-11-30'),
(34, 5, '29613_images24.png', 'samsung galaxy note S8', 'Telephone', 'pour une meilleure performance avec votre portable gagne le samsung s8 pour une meilleure performance avec votre portable gagne le samsung s8', '0', 0, '157', 1, 1, 0, 0, '2021-09-18', '2021-10-11', '2021-11-11'),
(35, 5, '15985_images24.png', 'Iphone x', 'Telephone', 'Bine Bine Bine vBineBineBineBineBineBineBineBineBineBineBine', '1', 200, '200', 1, 1, 0, 0, '2021-09-18', '2021-10-12', '2021-11-12'),
(36, 5, '28170_download2.png', 'Iphone x Pro Max', 'Telephone', 'ok Bine Bine Bine vBine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine vBine Bine BineBine BineBine BineBine BineBine Bine', '10', 200, '2000', 1, 1, 0, 0, '2021-09-18', '2021-10-13', '2021-11-13'),
(37, 5, '7990_download2.png', 'techno F1', 'Telephone', 'profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outilprofite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outil', '1', 60, '55', 1, 1, 0, 0, '2021-09-18', '2021-10-12', '2021-11-30'),
(38, 5, '29613_images24.png', 'samsung galaxy note S8', 'Telephone', 'pour une meilleure performance avec votre portable gagne le samsung s8 pour une meilleure performance avec votre portable gagne le samsung s8', '0', 0, '157', 1, 1, 0, 0, '2021-09-18', '2021-10-11', '2021-11-11'),
(39, 5, '15985_images24.png', 'Iphone x', 'Telephone', 'Bine Bine Bine vBineBineBineBineBineBineBineBineBineBineBine', '1', 200, '200', 1, 1, 0, 0, '2021-09-18', '2021-10-12', '2021-11-12'),
(40, 5, '28170_download2.png', 'Iphone x Pro Max', 'Telephone', 'ok Bine Bine Bine vBine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine vBine Bine BineBine BineBine BineBine BineBine Bine', '10', 200, '2000', 1, 1, 0, 0, '2021-09-18', '2021-10-13', '2021-11-13'),
(41, 5, '7990_download2.png', 'techno F1', 'Telephone', 'profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outilprofite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outil', '1', 60, '55', 1, 1, 0, 0, '2021-09-18', '2021-10-12', '2021-11-30'),
(42, 5, '29613_images24.png', 'samsung galaxy note S8', 'Telephone', 'pour une meilleure performance avec votre portable gagne le samsung s8 pour une meilleure performance avec votre portable gagne le samsung s8', '0', 0, '157', 1, 1, 0, 0, '2021-09-18', '2021-10-11', '2021-11-11'),
(43, 5, '15985_images24.png', 'Iphone x', 'Telephone', 'Bine Bine Bine vBineBineBineBineBineBineBineBineBineBineBine', '1', 200, '200', 1, 1, 0, 0, '2021-09-18', '2021-10-12', '2021-11-12'),
(44, 5, '28170_download2.png', 'Iphone x Pro Max', 'Telephone', 'ok Bine Bine Bine vBine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine vBine Bine BineBine BineBine BineBine BineBine Bine', '10', 200, '2000', 1, 1, 0, 0, '2021-09-18', '2021-10-13', '2021-11-13'),
(45, 5, '7990_download2.png', 'techno F1', 'Telephone', 'profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outilprofite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outil', '1', 60, '55', 1, 1, 0, 0, '2021-09-18', '2021-10-12', '2021-11-30'),
(46, 5, '29613_images24.png', 'samsung galaxy note S8', 'Telephone', 'pour une meilleure performance avec votre portable gagne le samsung s8 pour une meilleure performance avec votre portable gagne le samsung s8', '0', 0, '157', 1, 1, 0, 0, '2021-09-18', '2021-10-11', '2021-11-11'),
(47, 5, '15985_images24.png', 'Iphone x', 'Telephone', 'Bine Bine Bine vBineBineBineBineBineBineBineBineBineBineBine', '1', 200, '200', 1, 1, 0, 0, '2021-09-18', '2021-10-12', '2021-11-12'),
(48, 5, '28170_download2.png', 'Iphone x Pro Max', 'Telephone', 'ok Bine Bine Bine vBine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine vBine Bine BineBine BineBine BineBine BineBine Bine', '10', 200, '2000', 1, 1, 0, 0, '2021-09-18', '2021-10-13', '2021-11-13'),
(49, 5, '7990_download2.png', 'techno F1', 'Telephone', 'profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outilprofite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outil', '1', 60, '55', 1, 1, 0, 0, '2021-09-18', '2021-10-12', '2021-11-30'),
(50, 5, '29613_images24.png', 'samsung galaxy note S8', 'Telephone', 'pour une meilleure performance avec votre portable gagne le samsung s8 pour une meilleure performance avec votre portable gagne le samsung s8', '0', 0, '157', 1, 1, 0, 0, '2021-09-18', '2021-10-11', '2021-11-11'),
(51, 5, '15985_images24.png', 'Iphone x', 'Telephone', 'Bine Bine Bine vBineBineBineBineBineBineBineBineBineBineBine', '1', 200, '200', 1, 1, 0, 0, '2021-09-18', '2021-10-12', '2021-11-12'),
(52, 5, '28170_download2.png', 'Iphone x Pro Max', 'Telephone', 'ok Bine Bine Bine vBine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine vBine Bine BineBine BineBine BineBine BineBine Bine', '10', 200, '2000', 1, 1, 0, 0, '2021-09-18', '2021-10-13', '2021-11-13'),
(53, 5, '7990_download2.png', 'techno F1', 'Telephone', 'profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outilprofite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outil', '1', 60, '55', 1, 1, 0, 0, '2021-09-18', '2021-10-12', '2021-11-30'),
(54, 5, '29613_images24.png', 'samsung galaxy note S8', 'Telephone', 'pour une meilleure performance avec votre portable gagne le samsung s8 pour une meilleure performance avec votre portable gagne le samsung s8', '0', 0, '157', 1, 1, 0, 0, '2021-09-18', '2021-10-11', '2021-11-11'),
(55, 5, '15985_images24.png', 'Iphone x', 'Telephone', 'Bine Bine Bine vBineBineBineBineBineBineBineBineBineBineBine', '1', 200, '200', 1, 1, 0, 0, '2021-09-18', '2021-10-12', '2021-11-12'),
(56, 5, '28170_download2.png', 'Iphone x Pro Max', 'Telephone', 'ok Bine Bine Bine vBine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine vBine Bine BineBine BineBine BineBine BineBine Bine', '10', 200, '2000', 1, 1, 0, 0, '2021-09-18', '2021-10-13', '2021-11-13'),
(57, 5, '8303_images24.png', 'Benz', 'Voiture', 'Meilleur qualite et produit', '2', 100, '5000', 1, 1, 0, 0, '2021-10-12', '2021-10-12', '2021-10-13'),
(58, 5, '7990_download2.png', 'techno F1', 'Telephone', 'profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outilprofite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outil', '1', 60, '55', 1, 1, 0, 0, '2021-09-18', '2021-10-12', '2021-11-30'),
(59, 5, '29613_images24.png', 'samsung galaxy note S8', 'Telephone', 'pour une meilleure performance avec votre portable gagne le samsung s8 pour une meilleure performance avec votre portable gagne le samsung s8', '0', 0, '157', 1, 1, 0, 0, '2021-09-18', '2021-10-11', '2021-11-11'),
(60, 5, '15985_images24.png', 'Iphone x', 'Telephone', 'Bine Bine Bine vBineBineBineBineBineBineBineBineBineBineBine', '1', 200, '200', 1, 1, 0, 0, '2021-09-18', '2021-10-12', '2021-11-12'),
(61, 5, '28170_download2.png', 'Iphone x Pro Max', 'Telephone', 'ok Bine Bine Bine vBine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine vBine Bine BineBine BineBine BineBine BineBine Bine', '10', 200, '2000', 1, 1, 0, 0, '2021-09-18', '2021-10-13', '2021-11-13'),
(62, 5, '7990_download2.png', 'techno F1', 'Telephone', 'profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outilprofite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outil', '1', 60, '55', 1, 1, 0, 0, '2021-09-18', '2021-10-12', '2021-11-30'),
(63, 5, '29613_images24.png', 'samsung galaxy note S8', 'Telephone', 'pour une meilleure performance avec votre portable gagne le samsung s8 pour une meilleure performance avec votre portable gagne le samsung s8', '0', 0, '157', 1, 1, 0, 0, '2021-09-18', '2021-10-11', '2021-11-11'),
(64, 5, '15985_images24.png', 'Iphone x', 'Telephone', 'Bine Bine Bine vBineBineBineBineBineBineBineBineBineBineBine', '1', 200, '200', 1, 1, 0, 0, '2021-09-18', '2021-10-12', '2021-11-12'),
(65, 5, '28170_download2.png', 'Iphone x Pro Max', 'Telephone', 'ok Bine Bine Bine vBine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine vBine Bine BineBine BineBine BineBine BineBine Bine', '10', 200, '2000', 1, 1, 1, 0, '2021-09-18', '2021-10-13', '2021-11-13'),
(66, 5, '7990_download2.png', 'techno F1', 'Telephone', 'profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outilprofite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outil', '1', 60, '55', 1, 1, 0, 0, '2021-09-18', '2021-10-12', '2021-11-30'),
(67, 5, '29613_images24.png', 'samsung galaxy note S8', 'Telephone', 'pour une meilleure performance avec votre portable gagne le samsung s8 pour une meilleure performance avec votre portable gagne le samsung s8', '0', 0, '157', 1, 1, 0, 0, '2021-09-18', '2021-10-11', '2021-11-11'),
(68, 5, '15985_images24.png', 'Iphone x', 'Telephone', 'Bine Bine Bine vBineBineBineBineBineBineBineBineBineBineBine', '1', 200, '200', 1, 1, 0, 0, '2021-09-18', '2021-10-12', '2021-11-12'),
(69, 5, '28170_download2.png', 'Iphone x Pro Max', 'Telephone', 'ok Bine Bine Bine vBine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine vBine Bine BineBine BineBine BineBine BineBine Bine', '10', 200, '2000', 1, 1, 0, 0, '2021-09-18', '2021-10-13', '2021-11-13'),
(70, 5, '7990_download2.png', 'techno F1', 'Telephone', 'profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outilprofite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outil', '1', 60, '55', 1, 1, 0, 0, '2021-09-18', '2021-10-12', '2021-11-30'),
(71, 5, '29613_images24.png', 'samsung galaxy note S8', 'Telephone', 'pour une meilleure performance avec votre portable gagne le samsung s8 pour une meilleure performance avec votre portable gagne le samsung s8', '0', 0, '157', 1, 1, 0, 0, '2021-09-18', '2021-10-11', '2021-11-11'),
(72, 5, '15985_images24.png', 'Iphone x', 'Telephone', 'Bine Bine Bine vBineBineBineBineBineBineBineBineBineBineBine', '1', 200, '200', 1, 1, 0, 0, '2021-09-18', '2021-10-12', '2021-11-12'),
(73, 5, '28170_download2.png', 'Iphone x Pro Max', 'Telephone', 'ok Bine Bine Bine vBine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine vBine Bine BineBine BineBine BineBine BineBine Bine', '10', 200, '2000', 1, 1, 0, 0, '2021-09-18', '2021-10-13', '2021-11-13'),
(74, 5, '7990_download2.png', 'techno F1', 'Telephone', 'profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outilprofite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outil', '1', 60, '55', 1, 1, 0, 0, '2021-09-18', '2021-10-12', '2021-11-30'),
(75, 5, '29613_images24.png', 'samsung galaxy note S8', 'Telephone', 'pour une meilleure performance avec votre portable gagne le samsung s8 pour une meilleure performance avec votre portable gagne le samsung s8', '0', 0, '157', 1, 1, 0, 0, '2021-09-18', '2021-10-11', '2021-11-11'),
(76, 5, '15985_images24.png', 'Iphone x', 'Telephone', 'Bine Bine Bine vBineBineBineBineBineBineBineBineBineBineBine', '1', 200, '200', 1, 1, 0, 0, '2021-09-18', '2021-10-12', '2021-11-12'),
(77, 5, '28170_download2.png', 'Iphone x Pro Max', 'Telephone', 'ok Bine Bine Bine vBine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine vBine Bine BineBine BineBine BineBine BineBine Bine', '10', 200, '2000', 1, 1, 0, 0, '2021-09-18', '2021-10-13', '2021-11-13'),
(78, 5, '7990_download2.png', 'techno F1', 'Telephone', 'profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outilprofite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outil', '1', 60, '55', 1, 1, 0, 0, '2021-09-18', '2021-10-12', '2021-11-30'),
(79, 5, '29613_images24.png', 'samsung galaxy note S8', 'Telephone', 'pour une meilleure performance avec votre portable gagne le samsung s8 pour une meilleure performance avec votre portable gagne le samsung s8', '0', 0, '157', 1, 1, 0, 0, '2021-09-18', '2021-10-11', '2021-11-11'),
(80, 5, '15985_images24.png', 'Iphone x', 'Telephone', 'Bine Bine Bine vBineBineBineBineBineBineBineBineBineBineBine', '1', 200, '200', 1, 1, 0, 0, '2021-09-18', '2021-10-12', '2021-11-12'),
(81, 5, '28170_download2.png', 'Iphone x Pro Max', 'Telephone', 'ok Bine Bine Bine vBine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine vBine Bine BineBine BineBine BineBine BineBine Bine', '10', 200, '2000', 1, 1, 0, 0, '2021-09-18', '2021-10-13', '2021-11-13'),
(82, 5, '7990_download2.png', 'techno F1', 'Telephone', 'profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outilprofite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outil', '1', 60, '55', 1, 1, 0, 0, '2021-09-18', '2021-10-12', '2021-11-30'),
(83, 5, '29613_images24.png', 'samsung galaxy note S8', 'Telephone', 'pour une meilleure performance avec votre portable gagne le samsung s8 pour une meilleure performance avec votre portable gagne le samsung s8', '0', 0, '157', 1, 1, 0, 0, '2021-09-18', '2021-10-11', '2021-11-11'),
(84, 5, '15985_images24.png', 'Iphone x', 'Telephone', 'Bine Bine Bine vBineBineBineBineBineBineBineBineBineBineBine', '1', 200, '200', 1, 1, 0, 0, '2021-09-18', '2021-10-12', '2021-11-12'),
(85, 5, '28170_download2.png', 'Iphone x Pro Max', 'Telephone', 'ok Bine Bine Bine vBine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine vBine Bine BineBine BineBine BineBine BineBine Bine', '10', 200, '2000', 1, 1, 0, 0, '2021-09-18', '2021-10-13', '2021-11-13'),
(86, 5, '7990_download2.png', 'techno F1', 'Telephone', 'profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outilprofite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outil', '1', 60, '55', 1, 1, 0, 0, '2021-09-18', '2021-10-12', '2021-11-30'),
(87, 5, '29613_images24.png', 'samsung galaxy note S8', 'Telephone', 'pour une meilleure performance avec votre portable gagne le samsung s8 pour une meilleure performance avec votre portable gagne le samsung s8', '0', 0, '157', 1, 1, 0, 0, '2021-09-18', '2021-10-11', '2021-11-11'),
(88, 5, '15985_images24.png', 'Iphone x', 'Telephone', 'Bine Bine Bine vBineBineBineBineBineBineBineBineBineBineBine', '1', 200, '200', 1, 1, 0, 0, '2021-09-18', '2021-10-12', '2021-11-12'),
(89, 5, '28170_download2.png', 'Iphone x Pro Max', 'Telephone', 'ok Bine Bine Bine vBine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine vBine Bine BineBine BineBine BineBine BineBine Bine', '10', 200, '2000', 1, 1, 0, 0, '2021-09-18', '2021-10-13', '2021-11-13'),
(90, 5, '7990_download2.png', 'techno F1', 'Telephone', 'profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outilprofite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outil', '1', 60, '55', 1, 1, 0, 0, '2021-09-18', '2021-10-12', '2021-11-30'),
(91, 5, '29613_images24.png', 'samsung galaxy note S8', 'Telephone', 'pour une meilleure performance avec votre portable gagne le samsung s8 pour une meilleure performance avec votre portable gagne le samsung s8', '0', 0, '157', 1, 1, 0, 0, '2021-09-18', '2021-10-11', '2021-11-11'),
(92, 5, '15985_images24.png', 'Iphone x', 'Telephone', 'Bine Bine Bine vBineBineBineBineBineBineBineBineBineBineBine', '1', 200, '200', 1, 1, 0, 0, '2021-09-18', '2021-10-12', '2021-11-12'),
(93, 5, '28170_download2.png', 'Iphone x Pro Max', 'Telephone', 'ok Bine Bine Bine vBine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine vBine Bine BineBine BineBine BineBine BineBine Bine', '10', 200, '2000', 1, 1, 0, 0, '2021-09-18', '2021-10-13', '2021-11-13'),
(94, 5, '7990_download2.png', 'techno F1', 'Telephone', 'profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outilprofite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outil', '1', 60, '55', 1, 1, 0, 0, '2021-09-18', '2021-10-12', '2021-11-30'),
(95, 5, '29613_images24.png', 'samsung galaxy note S8', 'Telephone', 'pour une meilleure performance avec votre portable gagne le samsung s8 pour une meilleure performance avec votre portable gagne le samsung s8', '0', 0, '157', 1, 1, 0, 0, '2021-09-18', '2021-10-11', '2021-11-11'),
(96, 5, '15985_images24.png', 'Iphone x', 'Telephone', 'Bine Bine Bine vBineBineBineBineBineBineBineBineBineBineBine', '1', 200, '200', 1, 1, 0, 0, '2021-09-18', '2021-10-12', '2021-11-12'),
(97, 5, '28170_download2.png', 'Iphone x Pro Max', 'Telephone', 'ok Bine Bine Bine vBine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine vBine Bine BineBine BineBine BineBine BineBine Bine', '10', 200, '2000', 1, 1, 0, 0, '2021-09-18', '2021-10-13', '2021-11-13'),
(98, 5, '7990_download2.png', 'techno F1', 'Telephone', 'profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outilprofite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outil', '1', 60, '55', 1, 1, 0, 0, '2021-09-18', '2021-10-12', '2021-11-30'),
(99, 5, '29613_images24.png', 'samsung galaxy note S8', 'Telephone', 'pour une meilleure performance avec votre portable gagne le samsung s8 pour une meilleure performance avec votre portable gagne le samsung s8', '0', 0, '157', 1, 1, 0, 0, '2021-09-18', '2021-10-11', '2021-11-11'),
(100, 5, '15985_images24.png', 'Iphone x', 'Telephone', 'Bine Bine Bine vBineBineBineBineBineBineBineBineBineBineBine', '1', 200, '200', 1, 1, 0, 0, '2021-09-18', '2021-10-12', '2021-11-12'),
(101, 5, '28170_download2.png', 'Iphone x Pro Max', 'Telephone', 'ok Bine Bine Bine vBine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine vBine Bine BineBine BineBine BineBine BineBine Bine', '10', 200, '2000', 1, 1, 0, 0, '2021-09-18', '2021-10-13', '2021-11-13'),
(102, 5, '7990_download2.png', 'techno F1', 'Telephone', 'profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outilprofite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outil', '1', 60, '55', 1, 1, 0, 0, '2021-09-18', '2021-10-12', '2021-11-30'),
(103, 5, '29613_images24.png', 'samsung galaxy note S8', 'Telephone', 'pour une meilleure performance avec votre portable gagne le samsung s8 pour une meilleure performance avec votre portable gagne le samsung s8', '0', 0, '157', 1, 1, 0, 0, '2021-09-18', '2021-10-11', '2021-11-11'),
(104, 5, '15985_images24.png', 'Iphone x', 'Telephone', 'Bine Bine Bine vBineBineBineBineBineBineBineBineBineBineBine', '1', 200, '200', 1, 1, 0, 0, '2021-09-18', '2021-10-12', '2021-11-12'),
(105, 5, '28170_download2.png', 'Iphone x Pro Max', 'Telephone', 'ok Bine Bine Bine vBine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine vBine Bine BineBine BineBine BineBine BineBine Bine', '10', 200, '2000', 1, 1, 0, 0, '2021-09-18', '2021-10-13', '2021-11-13'),
(106, 5, '7990_download2.png', 'techno F1', 'Telephone', 'profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outilprofite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outil', '1', 60, '55', 1, 1, 1, 0, '2021-09-18', '2021-10-12', '2021-11-30'),
(107, 5, '29613_images24.png', 'samsung galaxy note S8', 'Telephone', 'pour une meilleure performance avec votre portable gagne le samsung s8 pour une meilleure performance avec votre portable gagne le samsung s8', '0', 0, '157', 1, 1, 0, 0, '2021-09-18', '2021-10-11', '2021-11-11'),
(108, 5, '15985_images24.png', 'Iphone x', 'Telephone', 'Bine Bine Bine vBineBineBineBineBineBineBineBineBineBineBine', '1', 200, '200', 1, 1, 0, 0, '2021-09-18', '2021-10-12', '2021-11-12'),
(109, 5, '28170_download2.png', 'Iphone x Pro Max', 'Telephone', 'ok Bine Bine Bine vBine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine Bine vBine Bine BineBine BineBine BineBine BineBine Bine', '10', 200, '2000', 1, 1, 0, 0, '2021-09-18', '2021-10-13', '2021-11-13'),
(110, 5, '7990_download2.png', 'techno F1', 'Telephone', 'profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outilprofite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outil, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outill, profite de performance de cette outil', '1', 60, '55', 1, 1, 1, 0, '2021-09-18', '2021-10-12', '2021-11-30'),
(111, 5, '29613_images24.png', 'samsung galaxy note S8', 'Telephone', 'pour une meilleure performance avec votre portable gagne le samsung s8 pour une meilleure performance avec votre portable gagne le samsung s8', '0', 0, '157', 1, 1, 0, 0, '2021-09-18', '2021-10-11', '2021-11-11'),
(112, 5, '15985_images24.png', 'Iphone x', 'Telephone', 'Bine Bine Bine vBineBineBineBineBineBineBineBineBineBineBine', '1', 200, '200', 1, 1, 1, 0, '2021-09-18', '2021-10-12', '2021-11-12'),
(113, 5, '28170_download2.png', 'Iphone x Pro Max', 'Telephone', 'ok Bine Bine Bine vBine Bine Bine Bine Bine Bine \r\nBine Bine Bine Bine Bine Bine Bine Bine vBine Bine\r\n BineBine BineBine BineBine BineBine Bine', '10', 200, '2000', 1, 1, 0, 0, '2021-09-18', '2021-10-13', '2021-11-13');

-- --------------------------------------------------------

--
-- Table structure for table `produit_categorie`
--

DROP TABLE IF EXISTS `produit_categorie`;
CREATE TABLE IF NOT EXISTS `produit_categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categorie` varchar(255) NOT NULL,
  `add_date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produit_categorie`
--

INSERT INTO `produit_categorie` (`id`, `categorie`, `add_date`) VALUES
(1, 'Telephone', '2021-09-14'),
(2, 'Ordinateur', '2021-09-14'),
(3, 'Voiture', '2021-09-14'),
(4, 'beaute', '2022-01-09');

-- --------------------------------------------------------

--
-- Table structure for table `produit_en_vente`
--

DROP TABLE IF EXISTS `produit_en_vente`;
CREATE TABLE IF NOT EXISTS `produit_en_vente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `seller_id` varchar(5) NOT NULL,
  `mise` varchar(255) NOT NULL,
  `code_mise` varchar(255) NOT NULL,
  `validate_tirage` int(5) NOT NULL,
  `visite_number` int(11) NOT NULL,
  `date` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produit_en_vente`
--

INSERT INTO `produit_en_vente` (`id`, `client_id`, `product_id`, `seller_id`, `mise`, `code_mise`, `validate_tirage`, `visite_number`, `date`) VALUES
(1, '5', '10', '5', '1', 'Ti_9839041985_1_rage', 1, 0, '2021-10-13'),
(2, '2', '10', '5', '1', 'Ti_1639034585_1_rage', 1, 0, '2021-10-15'),
(3, '3', '10', '5', '1', 'Ti_16345641985_1_rage', 1, 50, '2021-10-15'),
(4, '7', '10', '5', '1', 'Ti_16390419878_1_rage', 1, 50, '2021-10-15'),
(5, '1', '8', '5', '5', 'Ti_1639041985_1_rage', 0, 50, '2021-12-09'),
(6, '1', '8', '5', '5', 'Ti_1639042303_1_rage', 0, 50, '2021-12-09'),
(7, '1', '14', '5', '5', 'Ti_1639042431_1_rage', 0, 0, '2021-12-09'),
(8, '8', '89', '5', '10', 'Ti_1639043003_8_rage', 0, 0, '2021-12-09'),
(9, '8', '89', '5', '10', 'Ti_1639043089_8_rage', 0, 0, '2021-12-09'),
(10, '8', '89', '5', '10', 'Ti_1639043185_8_rage', 0, 0, '2021-12-09'),
(11, '8', '2', '5', '1', 'Ti_1639044368_8_rage', 0, 0, '2021-12-09'),
(12, '8', '97', '5', '10', 'Ti_1639058325_8_rage', 0, 0, '2021-12-09'),
(13, '8', '97', '5', '10', 'Ti_1639058404_8_rage', 0, 0, '2021-12-09'),
(14, '8', '97', '5', '10', 'Ti_1639058816_8_rage', 0, 0, '2021-12-09'),
(15, '8', '97', '5', '10', 'Ti_1639058824_8_rage', 0, 0, '2021-12-09'),
(16, '7', '8', '5', '10', 'Ti_1639385767_7_rage', 0, 0, '2021-12-13'),
(17, '5', '32', '5', '10', 'Ti_1639515679_5_rage', 0, 0, '2021-12-14'),
(18, '5', '12', '5', '0', 'Ti_1639573061__rage', 0, 0, '2021-12-15'),
(19, '5', '11', '5', '1', 'Ti_1639573061__rage', 0, 0, '2021-12-15'),
(20, '5', '10', '5', '2', 'Ti_1639573061__rage', 1, 0, '2021-12-15'),
(21, '5', '12', '5', '0', 'Ti_1639573196__rage', 0, 0, '2021-12-15'),
(22, '5', '11', '5', '1', 'Ti_1639573196__rage', 0, 0, '2021-12-15'),
(23, '5', '12', '5', '0', 'Ti_1639573238__rage', 0, 0, '2021-12-15'),
(24, '5', '11', '5', '1', 'Ti_1639573238__rage', 0, 0, '2021-12-15'),
(25, '5', '8', '5', '10', 'Ti_1639574235__rage', 0, 0, '2021-12-15'),
(26, '5', '2', '5', '1', 'Ti_1639574235__rage', 0, 0, '2021-12-15'),
(27, '5', '112', '5', '1', 'Ti_1639581242_5_rage', 0, 0, '2021-12-15'),
(28, '5', '112', '5', '1', 'Ti_1639581259_5_rage', 0, 0, '2021-12-15'),
(29, '7', '7', '5', '1', 'Ti_1639585092_7_rage', 0, 0, '2021-12-15'),
(30, '7', '1', '5', '1', 'Ti_1639585199__rage', 0, 0, '2021-12-15'),
(31, '5', '8', '5', '10', 'Ti_1639653184_5_rage', 0, 0, '2021-12-16'),
(32, '5', '8', '5', '10', 'Ti_1639653215__rage', 0, 0, '2021-12-16'),
(33, '8', '7', '5', '1', 'Ti_1640256561_8_rage', 0, 0, '2021-12-23'),
(34, '5', '110', '5', '1', 'Ti_1640259756_5_rage', 0, 0, '2021-12-23'),
(35, '7', '7', '5', '1', '2841716415538447', 0, 0, '2022-01-07');

-- --------------------------------------------------------

--
-- Table structure for table `produit_vendu`
--

DROP TABLE IF EXISTS `produit_vendu`;
CREATE TABLE IF NOT EXISTS `produit_vendu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `seller_id` varchar(11) NOT NULL,
  `code_mise` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produit_vendu`
--

INSERT INTO `produit_vendu` (`id`, `client_id`, `product_id`, `seller_id`, `code_mise`, `date`) VALUES
(1, '7', '10', '5', 'Ti_16390419878_1_rage', '2022-01-09');

-- --------------------------------------------------------

--
-- Table structure for table `system_log`
--

DROP TABLE IF EXISTS `system_log`;
CREATE TABLE IF NOT EXISTS `system_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `operation` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `system_log`
--

INSERT INTO `system_log` (`id`, `user_id`, `user`, `operation`, `description`, `date`) VALUES
(1, 5, 'lucien kalala', 'Deconnexion', 'L\'utilisateur lucien kalala s\'est deconnecter avec success.', '2021-12-27'),
(2, 5, 'lucien kalala', 'Connection/Login', 'L\'utilisateur  a été connecté avec success.', '2021-12-27'),
(3, 5, 'lucien kalala', 'Deconnexion', 'L\'utilisateur lucien kalala s\'est deconnecter avec success.', '2021-12-27'),
(4, 9, 'lucien kalala', 'Connection/Login', 'L\'utilisateur  a été connecté avec success.', '2021-12-27 01:12:08'),
(5, 9, 'lucien kalala', 'Cloture tirage', 'L\'utilisateur lucien kalala a clourer la session de tirage pour le produit techno F1 avec success.', '2021-12-27 01:21:46'),
(6, 9, 'lucien kalala', 'bloquer', 'L\'utilisateur lucien kalala a été bloquer par lucien kalala avec success.', '2021-12-27 03:50:19'),
(7, 9, 'lucien kalala', 'debloquer', 'L\'utilisateur lucien kalala a été debloquer par lucien kalala avec success.', '2021-12-27 03:50:24'),
(8, 9, 'lucien kalala', 'Deconnexion', 'L\'utilisateur lucien kalala s\'est deconnecter avec success.', '2021-12-27 03:58:26'),
(9, 9, 'lucien kalala', 'Connection/Login', 'L\'utilisateur  a été connecté avec success.', '2021-12-27 06:07:07'),
(10, 9, 'lucien kalala', 'Deconnexion', 'L\'utilisateur lucien kalala s\'est deconnecter avec success.', '2021-12-27 06:07:17'),
(11, 9, 'lucien kalala', 'Connection/Login', 'L\'utilisateur  a été connecté avec success.', '2021-12-27 06:07:33'),
(12, 9, 'lucien kalala', 'Connection/Login', 'L\'utilisateur  a été connecté avec success.', '2021-12-28 07:12:34'),
(13, 9, 'lucien kalala', 'Deconnexion', 'L\'utilisateur lucien kalala s\'est deconnecter avec success.', '2021-12-28 08:13:46'),
(14, 5, 'lucien kalala', 'Connection/Login', 'L\'utilisateur  a été connecté avec success.', '2021-12-28 08:13:59'),
(15, 7, 'Lucien', 'Connection/Login', 'L\'utilisateur Lucien a été connecté avec success.', '2022-01-05 09:38:05'),
(16, 7, 'Lucien', 'Deconnexion', 'L\'utilisateur Lucien s\'est deconnecter avec success.', '2022-01-05 09:56:16'),
(17, 5, 'lucien kalala', 'Connection/Login', 'L\'utilisateur lucien kalala a été connecté avec success.', '2022-01-05 09:56:30'),
(18, 7, 'Lucien', 'Connection/Login', 'L\'utilisateur Lucien a été connecté avec success.', '2022-01-07 10:01:33'),
(19, 7, 'Lucien', 'Depot mise', 'L\'utilisateur Lucien a envoyer sa mise pour le produit Iphone x.', '2022-01-07 11:10:44'),
(20, 7, 'Lucien', 'Deconnexion', 'L\'utilisateur Lucien s\'est deconnecter avec success.', '2022-01-07 04:14:13'),
(21, 9, 'lucien kalala', 'Connection/Login', 'L\'utilisateur lucien kalala a été connecté avec success.', '2022-01-08 08:30:31'),
(22, 9, 'lucien kalala', 'Deconnexion', 'L\'utilisateur lucien kalala s\'est deconnecter avec success.', '2022-01-08 01:15:03'),
(23, 7, 'Lucien', 'Connection/Login', 'L\'utilisateur Lucien a été connecté avec success.', '2022-01-08 01:15:22'),
(24, 7, 'Lucien', 'Deconnexion', 'L\'utilisateur Lucien s\'est deconnecter avec success.', '2022-01-08 02:44:24'),
(25, 9, 'lucien kalala', 'Connection/Login', 'L\'utilisateur lucien kalala a été connecté avec success.', '2022-01-08 02:44:37'),
(26, 7, 'Lucien', 'Connection/Login', 'L\'utilisateur Lucien a été connecté avec success.', '2022-01-08 06:50:39'),
(27, 5, 'lucien kalala', 'Connection/Login', 'L\'utilisateur lucien kalala a été connecté avec success.', '2022-01-09 01:27:49'),
(28, 5, 'lucien kalala', 'Ajouter', 'Nouvelle categorisation de produit beaute a été enregistrée a par lucien kalala avec success.', '2022-01-09 01:38:38'),
(29, 5, 'lucien kalala', 'Deconnexion', 'L\'utilisateur lucien kalala s\'est deconnecter avec success.', '2022-01-09 02:23:01'),
(30, 9, 'lucien kalala', 'Connection/Login', 'L\'utilisateur lucien kalala a été connecté avec success.', '2022-01-09 02:24:33'),
(31, 9, 'lucien kalala', 'Cloture tirage', 'L\'utilisateur lucien kalala a clourer la session de tirage pour le produit Iphone x Pro Max avec success.', '2022-01-09 04:16:29');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL,
  `other_usertype` varchar(255) NOT NULL,
  `login_status` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `store_name` varchar(255) NOT NULL,
  `cover_store_image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `add_date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `phone`, `usertype`, `other_usertype`, `login_status`, `country`, `province`, `city`, `password`, `profile`, `store_name`, `cover_store_image`, `description`, `add_date`) VALUES
(1, 'Benjamin Paluku', 'lmk@gmail.com', '09876456', 'seller', '', 1, 'drc', 'sud kivu', 'Bukavu', '81dc9bdb52d04dc20036dbd8313ed055', 'IMG_0370.jpeg', 'Chez LMK', 'H93424651a8064edebcd7ffe40a17f6c9D_jpg_.png', 'Pour vous nous sommes disponible.', '1630184615'),
(2, 'lucien kalala', 'client1@gmail.com', '+250784166980', 'client', '', 1, 'drc', 'sud kivu', 'Bukavu', '81dc9bdb52d04dc20036dbd8313ed055', 'ben1.jpg', 'Prosperité', 'images242.png', 'Le travail assure l\'independance', '1630184650'),
(5, 'lucien kalala', 'vendeur@gmail.com', '+243996848331', 'seller', 'client', 1, 'Dr congo', 'Suk kivu', 'Bukavu', '81dc9bdb52d04dc20036dbd8313ed055', '942b99f7c861437c9f3d3835bb9b7fd9.jpg', 'Les Cardinales', 'icon1.png', 'Un service digne de vous et de qualite!', '1630364965'),
(7, 'Lucien', 'client@gmail.com', '+243996848331', 'client', '', 1, 'Dr congo', 'Bukavu', 'Bukavu', '81dc9bdb52d04dc20036dbd8313ed055', 'elvis.jpg', 'L\'amour', '', 'La Grace de Dieu', '1631373136'),
(9, 'lucien kalala', 'admin@gmail.com', '+250784166989', 'admin', '', 1, 'drc', 'sud kivu', 'bkv', '81dc9bdb52d04dc20036dbd8313ed055', '3153tigareuser_IMG_0368.jpeg', '-', '-', '-', '1634294541'),
(12, 'Gloire Bagula', 'vendeur1@gmail.com', '+243996848339', 'seller', '', 1, 'drc', 'Sud Kivu', 'Bukavu', '81dc9bdb52d04dc20036dbd8313ed055', '1fa7652e2a614b94b35e691eb9dfce4c.jpg', 'Gloire shop', '1280px-Flag_of_the_Democratic_Republic_of_the_Congo_svg1.png', 'Le service de qualite c\'est Ici.', '1636706372');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
