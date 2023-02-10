-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 17, 2022 at 09:51 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roastup`
--
CREATE DATABASE IF NOT EXISTS `roastup` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `roastup`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user` varchar(100) NOT NULL,
  `item_details` varchar(100) NOT NULL,
  `totalcost` int(8) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `item_details`, `totalcost`, `date_time`) VALUES
('surendrasriramula@gmail.com', 'chickendumbiryani-2\n', 458, '2022-09-17 12:46:31'),
('yarasipavan@gmail.com', 'vegfiredrice-3\n', 597, '2022-09-17 12:50:20');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`fullname`, `email`, `mobile`, `password`) VALUES
('SURENDRA', 'surendrasriramula@gmail.com', 8297697638, '123456'),
('PAVAN', 'yarasipavan@gmail.com', 9618095243, '12345');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `name` varchar(50) NOT NULL,
  `id` int(5) NOT NULL,
  `cost` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`name`, `id`, `cost`) VALUES
('vegfiredrice', 101, 199),
('vegmanchuria', 102, 159),
('babycornrice', 103, 199),
('mushroombiryani', 104, 199),
('paneerbiryani', 105, 229),
('chickenroastbiryani', 201, 249),
('chickendumbiryani', 202, 229),
('muttondumbiryani', 203, 399),
('chickenlollipopbiryani', 204, 249);

-- --------------------------------------------------------

--
-- Table structure for table `suggestions`
--

CREATE TABLE `suggestions` (
  `user` varchar(100) NOT NULL,
  `suggestion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suggestions`
--

INSERT INTO `suggestions` (`user`, `suggestion`) VALUES
('surendrasriramula@gmail.com', 'hiiii hello this is pavan'),
('surendrasriramula@gmail.com', 'hi again testing'),
('surendrasriramula@gmail.com', 'testing 2'),
('surendrasriramula@gmail.com', 'testing 3'),
('surendrasriramula@gmail.com', '<div class=\"navbar navbar-expand-lg bg-light navbar-light\">             <div class=\"container-fluid\">                 <a href=\"home.php\" class=\"navbar-brand\"><span>ROASTUP</span></a>                 <button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\">                     <span class=\"navbar-toggler-icon\"></span>                 </button>                  <div class=\"collapse navbar-collapse justify-content-between\" id=\"navbarCollapse\">                     <div class=\"navbar-nav ml-auto\">                         <a href=\"home.php\" class=\"nav-item nav-link\">Home</a>                         <a href=\"about.php\" class=\"nav-item nav-link\">About</a>                         <a href=\"feature.php\" class=\"nav-item nav-link\">Feature</a>                         <a href=\"menu.php\" class=\"nav-item nav-link\">Menu</a>                         <a href=\"contact.php\" class=\"nav-item nav-link active\">Contact</a> 			<a href=\"form.php\" class=\"nav-item nav-link\">Cart</a> 			<a href=\"ordered_list.php\" class=\"nav-item nav-link\">Orders Details</a> 			<a href=\"logout.php\" class=\"nav-item nav-link\">Logout</a>                     </div>                 </div>             </div>         </div>         <div class=\"page-header\"></div>'),
('yarasipavan@gmail.com', 'good mrng');

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `userid` varchar(100) NOT NULL,
  `id` int(4) NOT NULL,
  `qty` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
