-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2026 at 10:26 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unipix`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'admin2', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'tonmoy', 'cfd118a5df7225dd407e95e1fc6e5fab');

-- --------------------------------------------------------

--
-- Table structure for table `affiliatelogo`
--

CREATE TABLE `affiliatelogo` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `affiliatelogo`
--

INSERT INTO `affiliatelogo` (`id`, `logo`, `link`) VALUES
(3, 'affiliate-Logo/Profile-1557745349.png', ''),
(4, 'affiliate-Logo/Profile-1557747260.png', ''),
(5, 'affiliate-Logo/Profile-1557747310.png', ''),
(6, 'affiliate-Logo/Profile-1557747339.png', ''),
(7, 'affiliate-Logo/Profile-1557747374.png', ''),
(8, 'affiliate-Logo/Profile-1557747411.png', ''),
(9, 'affiliate-Logo/Profile-1557747443.png', ''),
(10, 'affiliate-Logo/Profile-1557747461.png', ''),
(11, 'affiliate-Logo/Profile-1557747491.png', ''),
(12, 'affiliate-Logo/Profile-1557747509.png', ''),
(13, 'affiliate-Logo/Profile-1557747551.png', ''),
(14, 'affiliate-Logo/Profile-1557747567.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `bannerimg` varchar(255) NOT NULL,
  `text1` varchar(255) NOT NULL,
  `text2` varchar(255) NOT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `bannerimg`, `text1`, `text2`, `category`) VALUES
(3, 'BannerImage/BannerImage-1774714279.jpg', 'We are the best', 'Choose best for your child', 12),
(4, 'BannerImage/BannerImage-1774714245.jpg', 'We are the best', 'Let Your Child Grow', 12),
(5, 'BannerImage/BannerImage-1774714225.jpg', 'We are the best', 'Give Boost to Your child', 12),
(6, 'BannerImage/BannerImage-1775219388.jpg', '', '', 11),
(7, 'BannerImage/BannerImage-1775219426.jpg', '', '', 11),
(8, 'BannerImage/BannerImage-1775219454.jpg', '', '', 11),
(9, 'BannerImage/BannerImage-1775414844.jpg', '', '', 13),
(10, 'BannerImage/BannerImage-1775414863.jpg', '', '', 13),
(11, 'BannerImage/BannerImage-1775414888.jpg', '', '', 13),
(12, 'BannerImage/BannerImage-1775216394.jpg', '', '', 7),
(13, 'BannerImage/BannerImage-1775216408.jpg', '', '', 7),
(14, 'BannerImage/BannerImage-1775216419.jpg', '', '', 7),
(15, 'BannerImage/BannerImage-1775219673.jpg', '', '', 15),
(16, 'BannerImage/BannerImage-1775219686.jpg', '', '', 15),
(17, 'BannerImage/BannerImage-1775219699.jpg', '', '', 15),
(18, 'BannerImage/BannerImage-1557910942.jpg', '', '', 14),
(19, 'BannerImage/BannerImage-1557910953.jpg', '', '', 14),
(20, 'BannerImage/BannerImage-1557910962.jpg', '', '', 14),
(21, 'BannerImage/BannerImage-1557911193.jpg', '', '', 9),
(22, 'BannerImage/BannerImage-1557911199.jpg', '', '', 9),
(23, 'BannerImage/BannerImage-1557911204.jpg', '', '', 9),
(24, 'BannerImage/BannerImage-1557911466.jpg', '', '', 1),
(25, 'BannerImage/BannerImage-1557911478.jpg', '', '', 1),
(26, 'BannerImage/BannerImage-1557911484.jpg', '', '', 1),
(27, 'BannerImage/BannerImage-1557911679.jpg', '', '', 2),
(28, 'BannerImage/BannerImage-1557911691.jpg', '', '', 2),
(29, 'BannerImage/BannerImage-1557911702.jpg', '', '', 2),
(30, 'BannerImage/BannerImage-1775216084.jpg', '', '', 3),
(31, 'BannerImage/BannerImage-1775216104.jpg', '', '', 3),
(32, 'BannerImage/BannerImage-1775216139.jpg', '', '', 3),
(33, 'BannerImage/BannerImage-1775215389.jpg', '', '', 4),
(34, 'BannerImage/BannerImage-1775215400.jpg', '', '', 4),
(35, 'BannerImage/BannerImage-1775215378.png', '', '', 4),
(36, 'BannerImage/BannerImage-1775216333.jpg', '', '', 5),
(37, 'BannerImage/BannerImage-1775216347.jpg', '', '', 5),
(38, 'BannerImage/BannerImage-1775216360.jpg', '', '', 5),
(39, 'BannerImage/BannerImage-1774715257.jpg', '', '', 6),
(40, 'BannerImage/BannerImage-1774715274.jpg', '', '', 6),
(41, 'BannerImage/BannerImage-1774715286.jpg', '', '', 6),
(42, 'BannerImage/BannerImage-1775216198.jpg', '', '', 8),
(43, 'BannerImage/BannerImage-1775216209.jpg', '', '', 8),
(44, 'BannerImage/BannerImage-1775216217.jpg', '', '', 8),
(45, 'BannerImage/BannerImage-1775220116.jpg', '', '', 19),
(46, 'BannerImage/BannerImage-1775220127.jpg', '', '', 19),
(47, 'BannerImage/BannerImage-1775220137.jpg', '', '', 19);

-- --------------------------------------------------------

--
-- Table structure for table `bannercategory`
--

CREATE TABLE `bannercategory` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bannercategory`
--

INSERT INTO `bannercategory` (`id`, `category`) VALUES
(1, 'Computer Science & Engineering'),
(2, 'Electrical & Electronic Engineering'),
(3, 'Software Engineering'),
(4, 'Data Science'),
(5, 'English'),
(6, 'Economics'),
(7, 'Business Administration'),
(8, 'Law & Justice'),
(9, 'Admission'),
(10, 'Journal'),
(11, 'Research'),
(12, 'Home'),
(13, 'Result'),
(14, 'Forms'),
(15, 'Library'),
(16, 'Economics'),
(17, 'Business Administration'),
(18, 'Law & Justice'),
(19, 'Campus Life');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'Music Bangla'),
(2, 'Sports');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `postid` int(11) NOT NULL,
  `comment` text NOT NULL,
  `user` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `postid`, `comment`, `user`, `status`) VALUES
(1, 17, 'er ewrw erw e\r\n\r\n', 'dim wala', 1),
(2, 13, ' Sed porttitor euismod maximus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla facilisi. Quisque eget hendrerit est, at sagittis lacus. Cras quis purus id mauris viverra tincidunt et ut enim. Nullam eget pellentesque ex. Suspendisse consectetur lectus purus', 'rajib', 1),
(3, 13, 'ulvinar nibh scelerisque. Ut sit amet semper diam. Pellentesque dolor ipsum, sollicitudin id ipsum in, pretium eleifend orci. Maecenas eget facilisis magna, vitae euismod neque. Donec dictum risus sed ex semper, non venenatis magna placerat. Nam auctor felis vitae aliquam hendrerit. Nunc scelerisque l', 'sdfgh', 1),
(5, 12, 'vinar nibh scelerisque. Ut sit amet semper diam. Pellentesque dolor ipsum, sollicitudin id ipsum in, pretium eleifend orci. Maecenas eget facilisis magna, vitae euismod neque. Donec dictum risus sed ex semper, non venenatis magna placerat. Nam auctor felis vitae aliquam hendrerit. Nunc ', 'lal', 1),
(6, 12, 'inar nibh scelerisque. Ut sit amet semper diam. Pellentesque dolor ipsum, sollicitudin id ipsum in, pretium eleifend orci. Maecenas eget facilisis magna, vitae euismod neque. Donec dictum risus sed ex semper, non venenatis magna placerat. Nam auctor felis vitae aliquam hendrerit. Nunc sce', 'rajib', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`) VALUES
(3, 'Tonmoy Singha', 'tonmoy.singha25@gmail.com', '01733709926', 'Moulvibazar Polytechnic Institute .There is 4 technology here..'),
(4, 'Tonmoy Singha', 'tonmoy.singha25@gmail.com', '01733709926', 'Moulvibazar Polytechnic Institute .There is 4 technology here..');

-- --------------------------------------------------------

--
-- Table structure for table `contactinfo`
--

CREATE TABLE `contactinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` text NOT NULL,
  `fax` text NOT NULL,
  `website` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contactinfo`
--

INSERT INTO `contactinfo` (`id`, `name`, `address`, `phone`, `fax`, `website`, `email`, `picture`) VALUES
(9, 'Unipix University', '1250 Innovation Drive, Austin, Texas 78701, USA', '+1 (512) 555-7842', '+1 (512) 555-7843', 'www.unipixuniversity.edu', 'info@unipixuniversity.edu', 'Contactinfo/Contactinfo-1775167327.png');

-- --------------------------------------------------------

--
-- Table structure for table `curriculam`
--

CREATE TABLE `curriculam` (
  `id` int(11) NOT NULL,
  `courseCode` varchar(100) NOT NULL,
  `courseTitle` varchar(255) NOT NULL,
  `credit` float NOT NULL,
  `hours` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `dept` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `curriculam`
--

INSERT INTO `curriculam` (`id`, `courseCode`, `courseTitle`, `credit`, `hours`, `semester`, `dept`) VALUES
(904, 'CSE-801', 'Deep Learning', 3, '3', 'Semester 8', 1),
(905, 'CSE-802', 'Deep Learning Lab', 1, '2', 'Semester 8', 1),
(906, 'CSE-803', 'Blockchain', 3, '3', 'Semester 8', 1),
(907, 'CSE-804', 'Wireless Communication', 3, '3', 'Semester 8', 1),
(908, 'CSE-805', 'Project II', 6, '6', 'Semester 8', 1),
(909, 'CSE-806', 'Viva', 2, '2', 'Semester 8', 1),
(910, 'CSE-807', 'Green Computing', 2, '2', 'Semester 8', 1),
(911, 'CSE-808', 'Career Development', 2, '2', 'Semester 8', 1),
(912, 'CSE-701', 'Data Mining', 3, '3', 'Semester 7', 1),
(913, 'CSE-702', 'Data Mining Lab', 1, '2', 'Semester 7', 1),
(914, 'CSE-703', 'Cloud Computing', 3, '3', 'Semester 7', 1),
(915, 'CSE-704', 'Cloud Lab', 1, '2', 'Semester 7', 1),
(916, 'CSE-705', 'Human Computer Interaction', 3, '3', 'Semester 7', 1),
(917, 'CSE-706', 'Embedded System', 3, '3', 'Semester 7', 1),
(918, 'CSE-707', 'Embedded Lab', 1, '2', 'Semester 7', 1),
(919, 'CSE-708', 'Research Methodology', 2, '2', 'Semester 7', 1),
(920, 'CSE-709', 'Project I', 3, '3', 'Semester 7', 1),
(921, 'CSE-710', 'Internship', 2, '2', 'Semester 7', 1),
(922, 'CSE-601', 'Machine Learning', 3, '3', 'Semester 6', 1),
(923, 'CSE-602', 'ML Lab', 1, '2', 'Semester 6', 1),
(924, 'CSE-603', 'Computer Graphics', 3, '3', 'Semester 6', 1),
(925, 'CSE-604', 'Graphics Lab', 1, '2', 'Semester 6', 1),
(926, 'CSE-605', 'Cyber Security', 3, '3', 'Semester 6', 1),
(927, 'CSE-606', 'Data Communication', 3, '3', 'Semester 6', 1),
(928, 'CSE-607', 'Distributed System', 3, '3', 'Semester 6', 1),
(929, 'CSE-608', 'IoT', 3, '3', 'Semester 6', 1),
(930, 'CSE-609', 'IoT Lab', 1, '2', 'Semester 6', 1),
(931, 'GED-601', 'Entrepreneurship', 2, '2', 'Semester 6', 1),
(932, 'CSE-501', 'Computer Networks', 3, '3', 'Semester 5', 1),
(933, 'CSE-502', 'Networks Lab', 1, '2', 'Semester 5', 1),
(934, 'CSE-503', 'Software Engineering II', 3, '3', 'Semester 5', 1),
(935, 'CSE-504', 'SE Lab', 1, '2', 'Semester 5', 1),
(936, 'CSE-505', 'Algorithm Analysis', 3, '3', 'Semester 5', 1),
(937, 'CSE-506', 'Artificial Intelligence', 3, '3', 'Semester 5', 1),
(938, 'CSE-507', 'AI Lab', 1, '2', 'Semester 5', 1),
(939, 'CSE-508', 'Compiler Design', 3, '3', 'Semester 5', 1),
(940, 'GED-501', 'Sociology', 2, '2', 'Semester 5', 1),
(941, 'CSE-509', 'Mobile App Development', 3, '3', 'Semester 5', 1),
(942, 'CSE-401', 'Database Management System', 3, '3', 'Semester 4', 1),
(943, 'CSE-402', 'DBMS Lab', 1, '2', 'Semester 4', 1),
(944, 'CSE-403', 'Computer Architecture', 3, '3', 'Semester 4', 1),
(945, 'CSE-404', 'Microprocessor', 3, '3', 'Semester 4', 1),
(946, 'CSE-405', 'Microprocessor Lab', 1, '2', 'Semester 4', 1),
(947, 'CSE-406', 'Theory of Computation', 3, '3', 'Semester 4', 1),
(948, 'CSE-407', 'Operating System', 3, '3', 'Semester 4', 1),
(949, 'CSE-408', 'OS Lab', 1, '2', 'Semester 4', 1),
(950, 'GED-401', 'Technical Writing', 2, '2', 'Semester 4', 1),
(951, 'CSE-409', 'Software Engineering', 3, '3', 'Semester 4', 1),
(952, 'CSE-301', 'Data Structures', 3, '3', 'Semester 3', 1),
(953, 'CSE-302', 'Data Structures Lab', 1, '2', 'Semester 3', 1),
(954, 'CSE-303', 'Digital Logic Design', 3, '3', 'Semester 3', 1),
(955, 'CSE-304', 'DLD Lab', 1, '2', 'Semester 3', 1),
(956, 'CSE-305', 'Algorithms', 3, '3', 'Semester 3', 1),
(957, 'CSE-306', 'Numerical Methods', 3, '3', 'Semester 3', 1),
(958, 'MATH-301', 'Complex Variables', 3, '3', 'Semester 3', 1),
(959, 'GED-301', 'Economics', 3, '3', 'Semester 3', 1),
(960, 'CSE-307', 'Web Development', 3, '3', 'Semester 3', 1),
(961, 'CSE-201', 'Object Oriented Programming', 4, '4', 'Semester 2', 1),
(962, 'CSE-202', 'OOP Lab', 1, '2', 'Semester 2', 1),
(963, 'CSE-203', 'Discrete Mathematics', 3, '3', 'Semester 2', 1),
(964, 'MATH-201', 'Linear Algebra', 3, '3', 'Semester 2', 1),
(965, 'CHEM-201', 'Chemistry', 3, '3', 'Semester 2', 1),
(966, 'CHEM-202', 'Chemistry Lab', 1, '2', 'Semester 2', 1),
(967, 'STAT-201', 'Probability and Statistics', 3, '3', 'Semester 2', 1),
(968, 'GED-201', 'Ethics', 2, '2', 'Semester 2', 1),
(969, 'CSE-204', 'Engineering Drawing', 2, '2', 'Semester 2', 1),
(970, 'CSE-101', 'Introduction to Computer Science', 3, '3', 'Semester 1', 1),
(971, 'CSE-102', 'Structured Programming', 4, '4', 'Semester 1', 1),
(972, 'CSE-103', 'Programming Lab', 1, '2', 'Semester 1', 1),
(973, 'MATH-101', 'Calculus and Analytic Geometry', 3, '3', 'Semester 1', 1),
(974, 'PHY-101', 'Physics', 3, '3', 'Semester 1', 1),
(975, 'PHY-102', 'Physics Lab', 1, '2', 'Semester 1', 1),
(976, 'ENG-101', 'Communicative English', 3, '3', 'Semester 1', 1),
(977, 'GED-101', 'Liberation War Studies', 2, '2', 'Semester 1', 1),
(978, 'EEE-101', 'Basic Electrical Engineering', 2, '2', 'Semester 1', 1),
(979, 'EEE-801', 'VLSI Design', 3, '3', 'Semester 8', 2),
(980, 'EEE-802', 'VLSI Design Lab', 1, '2', 'Semester 8', 2),
(981, 'EEE-803', 'Wireless and Mobile Communication', 3, '3', 'Semester 8', 2),
(982, 'EEE-804', 'Smart Grid and Automation', 3, '3', 'Semester 8', 2),
(983, 'EEE-805', 'Project / Thesis II', 6, '6', 'Semester 8', 2),
(984, 'EEE-806', 'Viva Voce', 2, '2', 'Semester 8', 2),
(985, 'EEE-807', 'Energy Management', 2, '2', 'Semester 8', 2),
(986, 'EEE-808', 'Career Development and Leadership', 2, '2', 'Semester 8', 2),
(987, 'EEE-701', 'High Voltage Engineering', 3, '3', 'Semester 7', 2),
(988, 'EEE-702', 'High Voltage Engineering Lab', 1, '2', 'Semester 7', 2),
(989, 'EEE-703', 'Digital Signal Processing', 3, '3', 'Semester 7', 2),
(990, 'EEE-704', 'Digital Signal Processing Lab', 1, '2', 'Semester 7', 2),
(991, 'EEE-705', 'Renewable Energy Technology', 3, '3', 'Semester 7', 2),
(992, 'EEE-706', 'Embedded Systems', 3, '3', 'Semester 7', 2),
(993, 'EEE-707', 'Embedded Systems Lab', 1, '2', 'Semester 7', 2),
(994, 'EEE-708', 'Project / Thesis I', 3, '3', 'Semester 7', 2),
(995, 'EEE-709', 'Industrial Training', 2, '2', 'Semester 7', 2),
(996, 'EEE-710', 'Professional Practice and Ethics', 2, '2', 'Semester 7', 2),
(997, 'EEE-601', 'Power System II', 3, '3', 'Semester 6', 2),
(998, 'EEE-602', 'Power System II Lab', 1, '2', 'Semester 6', 2),
(999, 'EEE-603', 'Control Systems II', 3, '3', 'Semester 6', 2),
(1000, 'EEE-604', 'Control Systems II Lab', 1, '2', 'Semester 6', 2),
(1001, 'EEE-605', 'Communication Engineering II', 3, '3', 'Semester 6', 2),
(1002, 'EEE-606', 'Communication Engineering II Lab', 1, '2', 'Semester 6', 2),
(1003, 'EEE-607', 'Power Electronics', 3, '3', 'Semester 6', 2),
(1004, 'EEE-608', 'Power Electronics Lab', 1, '2', 'Semester 6', 2),
(1005, 'GED-601', 'Entrepreneurship Development', 2, '2', 'Semester 6', 2),
(1006, 'EEE-609', 'Computer Aided Design for EEE', 3, '3', 'Semester 6', 2),
(1007, 'EEE-501', 'Power System I', 3, '3', 'Semester 5', 2),
(1008, 'EEE-502', 'Power System I Lab', 1, '2', 'Semester 5', 2),
(1009, 'EEE-503', 'Control Systems I', 3, '3', 'Semester 5', 2),
(1010, 'EEE-504', 'Control Systems I Lab', 1, '2', 'Semester 5', 2),
(1011, 'EEE-505', 'Communication Engineering I', 3, '3', 'Semester 5', 2),
(1012, 'EEE-506', 'Communication Engineering I Lab', 1, '2', 'Semester 5', 2),
(1013, 'EEE-507', 'Microprocessors and Interfacing', 3, '3', 'Semester 5', 2),
(1014, 'EEE-508', 'Microprocessors and Interfacing Lab', 1, '2', 'Semester 5', 2),
(1015, 'GED-501', 'Sociology for Engineers', 2, '2', 'Semester 5', 2),
(1016, 'EEE-509', 'Industrial Electronics', 3, '3', 'Semester 5', 2),
(1017, 'EEE-401', 'Electronic Devices and Circuits II', 3, '3', 'Semester 4', 2),
(1018, 'EEE-402', 'Electronic Devices and Circuits II Lab', 1, '2', 'Semester 4', 2),
(1019, 'EEE-403', 'Digital Electronics', 3, '3', 'Semester 4', 2),
(1020, 'EEE-404', 'Digital Electronics Lab', 1, '2', 'Semester 4', 2),
(1021, 'EEE-405', 'Electrical Machines II', 3, '3', 'Semester 4', 2),
(1022, 'EEE-406', 'Electrical Machines II Lab', 1, '2', 'Semester 4', 2),
(1023, 'EEE-407', 'Electromagnetic Fields and Waves', 3, '3', 'Semester 4', 2),
(1024, 'EEE-408', 'Numerical Methods', 3, '3', 'Semester 4', 2),
(1025, 'GED-401', 'Technical Writing and Presentation', 2, '2', 'Semester 4', 2),
(1026, 'EEE-409', 'Power Plant Engineering', 3, '3', 'Semester 4', 2),
(1027, 'EEE-301', 'Circuit Analysis II', 3, '3', 'Semester 3', 2),
(1028, 'EEE-302', 'Circuit Analysis II Lab', 1, '2', 'Semester 3', 2),
(1029, 'EEE-303', 'Electronic Devices and Circuits I', 3, '3', 'Semester 3', 2),
(1030, 'EEE-304', 'Electronic Devices and Circuits I Lab', 1, '2', 'Semester 3', 2),
(1031, 'EEE-305', 'Signals and Systems', 3, '3', 'Semester 3', 2),
(1032, 'MATH-301', 'Complex Variables and Laplace Transform', 3, '3', 'Semester 3', 2),
(1033, 'EEE-306', 'Electrical Machines I', 3, '3', 'Semester 3', 2),
(1034, 'EEE-307', 'Electrical Machines I Lab', 1, '2', 'Semester 3', 2),
(1035, 'GED-301', 'Economics', 3, '3', 'Semester 3', 2),
(1036, 'EEE-308', 'Measurement and Instrumentation', 2, '2', 'Semester 3', 2),
(1037, 'EEE-201', 'Circuit Analysis I', 3, '3', 'Semester 2', 2),
(1038, 'EEE-202', 'Circuit Analysis I Lab', 1, '2', 'Semester 2', 2),
(1039, 'MATH-201', 'Linear Algebra and Differential Equations', 3, '3', 'Semester 2', 2),
(1040, 'CHEM-201', 'Chemistry', 3, '3', 'Semester 2', 2),
(1041, 'CHEM-202', 'Chemistry Lab', 1, '2', 'Semester 2', 2),
(1042, 'CSE-201', 'Structured Programming', 3, '3', 'Semester 2', 2),
(1043, 'CSE-202', 'Structured Programming Lab', 1, '2', 'Semester 2', 2),
(1044, 'STAT-201', 'Probability and Statistics', 3, '3', 'Semester 2', 2),
(1045, 'GED-201', 'Ethics and Values', 2, '2', 'Semester 2', 2),
(1046, 'EEE-203', 'Workshop Practice', 2, '2', 'Semester 2', 2),
(1047, 'EEE-101', 'Basic Electrical Engineering', 3, '3', 'Semester 1', 2),
(1048, 'EEE-102', 'Basic Electrical Engineering Lab', 1, '2', 'Semester 1', 2),
(1049, 'MATH-101', 'Calculus and Analytic Geometry', 3, '3', 'Semester 1', 2),
(1050, 'PHY-101', 'Physics', 3, '3', 'Semester 1', 2),
(1051, 'PHY-102', 'Physics Lab', 1, '2', 'Semester 1', 2),
(1052, 'ENG-101', 'Communicative English', 3, '3', 'Semester 1', 2),
(1053, 'CSE-101', 'Introduction to Computer Science', 3, '3', 'Semester 1', 2),
(1054, 'GED-101', 'Liberation War Studies', 2, '2', 'Semester 1', 2),
(1055, 'EEE-103', 'Engineering Drawing', 3, '3', 'Semester 1', 2),
(1056, 'SWE-801', 'Deep Learning', 3, '3', 'Semester 8', 3),
(1057, 'SWE-802', 'Deep Learning Lab', 1, '2', 'Semester 8', 3),
(1058, 'SWE-803', 'Blockchain Technology', 3, '3', 'Semester 8', 3),
(1059, 'SWE-804', 'Cyber Security Advanced', 3, '3', 'Semester 8', 3),
(1060, 'SWE-805', 'Project II / Thesis', 6, '6', 'Semester 8', 3),
(1061, 'SWE-806', 'Viva Voce', 2, '2', 'Semester 8', 3),
(1062, 'SWE-807', 'Green Computing', 2, '2', 'Semester 8', 3),
(1063, 'SWE-808', 'Career Development', 2, '2', 'Semester 8', 3),
(1064, 'SWE-701', 'Data Mining', 3, '3', 'Semester 7', 3),
(1065, 'SWE-702', 'Data Mining Lab', 1, '2', 'Semester 7', 3),
(1066, 'SWE-703', 'Big Data Analytics', 3, '3', 'Semester 7', 3),
(1067, 'SWE-704', 'Big Data Lab', 1, '2', 'Semester 7', 3),
(1068, 'SWE-705', 'Software Quality Assurance', 3, '3', 'Semester 7', 3),
(1069, 'SWE-706', 'Embedded Systems', 3, '3', 'Semester 7', 3),
(1070, 'SWE-707', 'Embedded Lab', 1, '2', 'Semester 7', 3),
(1071, 'SWE-708', 'Research Methodology', 2, '2', 'Semester 7', 3),
(1072, 'SWE-709', 'Project I', 3, '3', 'Semester 7', 3),
(1073, 'SWE-710', 'Internship', 2, '2', 'Semester 7', 3),
(1074, 'SWE-601', 'Machine Learning', 3, '3', 'Semester 6', 3),
(1075, 'SWE-602', 'ML Lab', 1, '2', 'Semester 6', 3),
(1076, 'SWE-603', 'Cloud Computing', 3, '3', 'Semester 6', 3),
(1077, 'SWE-604', 'Cloud Lab', 1, '2', 'Semester 6', 3),
(1078, 'SWE-605', 'Information Security', 3, '3', 'Semester 6', 3),
(1079, 'SWE-606', 'Security Lab', 1, '2', 'Semester 6', 3),
(1080, 'SWE-607', 'Distributed Systems', 3, '3', 'Semester 6', 3),
(1081, 'SWE-608', 'DevOps Engineering', 3, '3', 'Semester 6', 3),
(1082, 'GED-601', 'Entrepreneurship', 2, '2', 'Semester 6', 3),
(1083, 'SWE-609', 'API Design & Integration', 3, '3', 'Semester 6', 3),
(1084, 'SWE-501', 'Software Project Management', 3, '3', 'Semester 5', 3),
(1085, 'SWE-502', 'Design Patterns', 3, '3', 'Semester 5', 3),
(1086, 'SWE-503', 'Compiler Design', 3, '3', 'Semester 5', 3),
(1087, 'SWE-504', 'Compiler Lab', 1, '2', 'Semester 5', 3),
(1088, 'SWE-505', 'Artificial Intelligence', 3, '3', 'Semester 5', 3),
(1089, 'SWE-506', 'AI Lab', 1, '2', 'Semester 5', 3),
(1090, 'SWE-507', 'Mobile App Development', 3, '3', 'Semester 5', 3),
(1091, 'SWE-508', 'Mobile Lab', 1, '2', 'Semester 5', 3),
(1092, 'GED-501', 'Sociology', 2, '2', 'Semester 5', 3),
(1093, 'SWE-509', 'Cloud Fundamentals', 3, '3', 'Semester 5', 3),
(1114, 'SWE-301', 'Algorithms', 3, '3', 'Semester 3', 3),
(1115, 'SWE-302', 'Algorithms Lab', 1, '2', 'Semester 3', 3),
(1116, 'SWE-303', 'Digital Logic Design', 3, '3', 'Semester 3', 3),
(1117, 'SWE-304', 'DLD Lab', 1, '2', 'Semester 3', 3),
(1118, 'SWE-305', 'Database Systems', 3, '3', 'Semester 3', 3),
(1119, 'SWE-306', 'Database Lab', 1, '2', 'Semester 3', 3),
(1120, 'SWE-307', 'Web Engineering', 3, '3', 'Semester 3', 3),
(1121, 'SWE-308', 'Web Lab', 1, '2', 'Semester 3', 3),
(1122, 'GED-301', 'Economics', 3, '3', 'Semester 3', 3),
(1123, 'SWE-401', 'Operating Systems', 3, '3', 'Semester 4', 3),
(1124, 'SWE-402', 'OS Lab', 1, '2', 'Semester 4', 3),
(1125, 'SWE-403', 'Software Requirements Engineering', 3, '3', 'Semester 4', 3),
(1126, 'SWE-404', 'Software Design', 3, '3', 'Semester 4', 3),
(1127, 'SWE-405', 'Software Testing & QA', 3, '3', 'Semester 4', 3),
(1128, 'SWE-406', 'Software Testing Lab', 1, '2', 'Semester 4', 3),
(1129, 'SWE-407', 'Computer Networks', 3, '3', 'Semester 4', 3),
(1130, 'SWE-408', 'Networks Lab', 1, '2', 'Semester 4', 3),
(1131, 'GED-401', 'Technical Writing', 2, '2', 'Semester 4', 3),
(1132, 'SWE-409', 'Human Computer Interaction', 3, '3', 'Semester 4', 3),
(1133, 'SWE-201', 'Object Oriented Programming', 4, '4', 'Semester 2', 3),
(1134, 'SWE-202', 'OOP Lab', 1, '2', 'Semester 2', 3),
(1135, 'SWE-203', 'Discrete Mathematics', 3, '3', 'Semester 2', 3),
(1136, 'MATH-201', 'Linear Algebra', 3, '3', 'Semester 2', 3),
(1137, 'STAT-201', 'Probability & Statistics', 3, '3', 'Semester 2', 3),
(1138, 'SWE-204', 'Data Structures', 3, '3', 'Semester 2', 3),
(1139, 'SWE-205', 'Data Structures Lab', 1, '2', 'Semester 2', 3),
(1140, 'GED-201', 'Ethics', 2, '2', 'Semester 2', 3),
(1141, 'SWE-206', 'Software Tools', 2, '2', 'Semester 2', 3),
(1142, 'SWE-101', 'Introduction to Software Engineering', 3, '3', 'Semester 1', 3),
(1143, 'SWE-102', 'Structured Programming', 4, '4', 'Semester 1', 3),
(1144, 'SWE-103', 'Programming Lab', 1, '2', 'Semester 1', 3),
(1145, 'MATH-101', 'Calculus', 3, '3', 'Semester 1', 3),
(1146, 'PHY-101', 'Physics', 3, '3', 'Semester 1', 3),
(1147, 'PHY-102', 'Physics Lab', 1, '2', 'Semester 1', 3),
(1148, 'ENG-101', 'Communicative English', 3, '3', 'Semester 1', 3),
(1149, 'GED-101', 'Bangladesh Studies', 2, '2', 'Semester 1', 3),
(1150, 'SWE-104', 'Engineering Drawing', 2, '2', 'Semester 1', 3),
(1151, 'DS-801', 'Advanced Predictive Analytics', 3, '3', 'Semester 8', 4),
(1152, 'DS-802', 'Decision Support Systems', 3, '3', 'Semester 8', 4),
(1153, 'DS-803', 'Blockchain for Data Science', 3, '3', 'Semester 8', 4),
(1154, 'DS-804', 'MLOps', 3, '3', 'Semester 8', 4),
(1155, 'DS-805', 'Project II / Thesis', 6, '6', 'Semester 8', 4),
(1156, 'DS-806', 'Viva', 2, '2', 'Semester 8', 4),
(1157, 'DS-807', 'Career Development', 2, '2', 'Semester 8', 4),
(1158, 'DS-808', 'Professional Practice', 2, '2', 'Semester 8', 4),
(1159, 'DS-809', 'Capstone Presentation', 1, '1', 'Semester 8', 4),
(1160, 'DS-701', 'Big Data Analytics', 3, '3', 'Semester 7', 4),
(1161, 'DS-702', 'Big Data Lab', 1, '2', 'Semester 7', 4),
(1162, 'DS-703', 'Applied Data Science', 3, '3', 'Semester 7', 4),
(1163, 'DS-704', 'Applied Data Science Lab', 1, '2', 'Semester 7', 4),
(1164, 'DS-705', 'Social Network Analysis', 3, '3', 'Semester 7', 4),
(1165, 'DS-706', 'IoT Data Analytics', 3, '3', 'Semester 7', 4),
(1166, 'DS-707', 'Project I', 3, '3', 'Semester 7', 4),
(1167, 'DS-708', 'Internship', 2, '2', 'Semester 7', 4),
(1168, 'DS-709', 'Seminar and Presentation', 2, '2', 'Semester 7', 4),
(1169, 'DS-710', 'Visualization Studio', 1, '2', 'Semester 7', 4),
(1170, 'DS-601', 'Natural Language Processing', 3, '3', 'Semester 6', 4),
(1171, 'DS-602', 'NLP Lab', 1, '2', 'Semester 6', 4),
(1172, 'DS-603', 'Computer Vision', 3, '3', 'Semester 6', 4),
(1173, 'DS-604', 'Computer Vision Lab', 1, '2', 'Semester 6', 4),
(1174, 'DS-605', 'Optimization Techniques', 3, '3', 'Semester 6', 4),
(1175, 'DS-606', 'Recommender Systems', 3, '3', 'Semester 6', 4),
(1176, 'DS-607', 'Data Security and Privacy', 3, '3', 'Semester 6', 4),
(1177, 'DS-608', 'Research Methodology', 2, '2', 'Semester 6', 4),
(1178, 'GED-601', 'Entrepreneurship', 2, '2', 'Semester 6', 4),
(1179, 'DS-609', 'MLOps Fundamentals', 2, '2', 'Semester 6', 4),
(1180, 'DS-610', 'Distributed Data Processing', 2, '2', 'Semester 6', 4),
(1181, 'DS-501', 'Deep Learning', 3, '3', 'Semester 5', 4),
(1182, 'DS-502', 'Deep Learning Lab', 1, '2', 'Semester 5', 4),
(1183, 'DS-503', 'Artificial Intelligence', 3, '3', 'Semester 5', 4),
(1184, 'DS-504', 'AI Lab', 1, '2', 'Semester 5', 4),
(1185, 'DS-505', 'Time Series Analysis', 3, '3', 'Semester 5', 4),
(1186, 'DS-506', 'Business Intelligence', 3, '3', 'Semester 5', 4),
(1187, 'DS-507', 'Data Warehousing', 3, '3', 'Semester 5', 4),
(1188, 'DS-508', 'Data Warehousing Lab', 1, '2', 'Semester 5', 4),
(1189, 'GED-501', 'Sociology', 2, '2', 'Semester 5', 4),
(1190, 'DS-509', 'Applied Regression Analysis', 3, '3', 'Semester 5', 4),
(1191, 'DS-401', 'Machine Learning', 3, '3', 'Semester 4', 4),
(1192, 'DS-402', 'Machine Learning Lab', 1, '2', 'Semester 4', 4),
(1193, 'DS-403', 'Data Mining', 3, '3', 'Semester 4', 4),
(1194, 'DS-404', 'Data Mining Lab', 1, '2', 'Semester 4', 4),
(1195, 'DS-405', 'Probability Models', 3, '3', 'Semester 4', 4),
(1196, 'DS-406', 'Big Data Fundamentals', 3, '3', 'Semester 4', 4),
(1197, 'DS-407', 'Cloud Computing', 3, '3', 'Semester 4', 4),
(1198, 'DS-408', 'Cloud Lab', 1, '2', 'Semester 4', 4),
(1199, 'GED-401', 'Technical Writing', 2, '2', 'Semester 4', 4),
(1200, 'DS-409', 'Software Engineering for Data Science', 3, '3', 'Semester 4', 4),
(1201, 'DS-301', 'Data Structures and Algorithms', 3, '3', 'Semester 3', 4),
(1202, 'DS-302', 'Data Structures Lab', 1, '2', 'Semester 3', 4),
(1203, 'DS-303', 'Data Visualization', 3, '3', 'Semester 3', 4),
(1204, 'DS-304', 'Data Visualization Lab', 1, '2', 'Semester 3', 4),
(1205, 'DS-305', 'Mathematical Statistics', 3, '3', 'Semester 3', 4),
(1206, 'DS-306', 'Data Collection and Preprocessing', 3, '3', 'Semester 3', 4),
(1207, 'DS-307', 'Web Technologies', 3, '3', 'Semester 3', 4),
(1208, 'DS-308', 'Web Lab', 1, '2', 'Semester 3', 4),
(1209, 'GED-301', 'Economics', 3, '3', 'Semester 3', 4),
(1210, 'DS-309', 'Data Ethics', 2, '2', 'Semester 3', 4),
(1211, 'DS-201', 'Object Oriented Programming', 4, '4', 'Semester 2', 4),
(1212, 'DS-202', 'OOP Lab', 1, '2', 'Semester 2', 4),
(1213, 'DS-203', 'Linear Algebra', 3, '3', 'Semester 2', 4),
(1214, 'DS-204', 'Probability and Statistics', 3, '3', 'Semester 2', 4),
(1215, 'DS-205', 'Discrete Mathematics', 3, '3', 'Semester 2', 4),
(1216, 'DS-206', 'Database Systems', 3, '3', 'Semester 2', 4),
(1217, 'DS-207', 'Database Lab', 1, '2', 'Semester 2', 4),
(1218, 'GED-201', 'Ethics', 2, '2', 'Semester 2', 4),
(1219, 'DS-208', 'Data Communication Basics', 2, '2', 'Semester 2', 4),
(1220, 'DS-101', 'Introduction to Data Science', 3, '3', 'Semester 1', 4),
(1221, 'DS-102', 'Programming Fundamentals', 4, '4', 'Semester 1', 4),
(1222, 'DS-103', 'Programming Lab', 1, '2', 'Semester 1', 4),
(1223, 'MATH-101', 'Calculus', 3, '3', 'Semester 1', 4),
(1224, 'STAT-101', 'Introduction to Statistics', 3, '3', 'Semester 1', 4),
(1225, 'ENG-101', 'Communicative English', 3, '3', 'Semester 1', 4),
(1226, 'GED-101', 'Bangladesh Studies', 2, '2', 'Semester 1', 4),
(1227, 'DS-104', 'Computer Applications', 3, '3', 'Semester 1', 4),
(1228, 'ENG-801', 'Research Project / Thesis-II', 6, '6', 'Semester 8', 5),
(1229, 'ENG-802', 'Viva Voce', 2, '2', 'Semester 8', 5),
(1230, 'ENG-803', 'Postmodern Literature', 3, '3', 'Semester 8', 5),
(1231, 'ENG-804', 'Comparative Literature', 3, '3', 'Semester 8', 5),
(1232, 'ENG-805', 'Language and Technology', 3, '3', 'Semester 8', 5),
(1233, 'ENG-806', 'Career Development', 2, '2', 'Semester 8', 5),
(1234, 'ENG-807', 'Cultural Studies', 2, '2', 'Semester 8', 5),
(1235, 'ENG-808', 'Leadership and Communication', 2, '2', 'Semester 8', 5),
(1236, 'ENG-701', 'Contemporary Literature', 3, '3', 'Semester 7', 5),
(1237, 'ENG-702', 'World Literature', 3, '3', 'Semester 7', 5),
(1238, 'ENG-703', 'Applied Linguistics', 3, '3', 'Semester 7', 5),
(1239, 'ENG-704', 'Stylistics', 3, '3', 'Semester 7', 5),
(1240, 'ENG-705', 'Project / Thesis-I', 3, '3', 'Semester 7', 5),
(1241, 'ENG-706', 'Internship / Field Work', 2, '2', 'Semester 7', 5),
(1242, 'ENG-707', 'Public Speaking', 2, '2', 'Semester 7', 5),
(1243, 'ENG-708', 'Publishing Studies', 3, '3', 'Semester 7', 5),
(1244, 'ENG-601', 'Victorian Literature', 3, '3', 'Semester 6', 5),
(1245, 'ENG-602', 'Modern Poetry', 3, '3', 'Semester 6', 5),
(1246, 'ENG-603', 'Modern Drama', 3, '3', 'Semester 6', 5),
(1247, 'ENG-604', 'Discourse Analysis', 3, '3', 'Semester 6', 5),
(1248, 'ENG-605', 'English Language Teaching', 3, '3', 'Semester 6', 5),
(1249, 'ENG-606', 'Gender and Literature', 3, '3', 'Semester 6', 5),
(1250, 'GED-601', 'Entrepreneurship', 2, '2', 'Semester 6', 5),
(1251, 'ENG-607', 'Professional Communication', 3, '3', 'Semester 6', 5),
(1252, 'ENG-501', 'Literary Criticism-II', 3, '3', 'Semester 5', 5),
(1253, 'ENG-502', 'American Literature-II', 3, '3', 'Semester 5', 5),
(1254, 'ENG-503', 'Postcolonial Literature', 3, '3', 'Semester 5', 5),
(1255, 'ENG-504', 'ELT Methods', 3, '3', 'Semester 5', 5),
(1256, 'ENG-505', 'Research Methodology', 3, '3', 'Semester 5', 5),
(1257, 'ENG-506', 'Semantics and Pragmatics', 3, '3', 'Semester 5', 5),
(1258, 'GED-501', 'Sociology', 2, '2', 'Semester 5', 5),
(1259, 'ENG-507', 'Creative Writing', 3, '3', 'Semester 5', 5),
(1260, 'ENG-401', 'Linguistics-II', 3, '3', 'Semester 4', 5),
(1261, 'ENG-402', 'Literary Criticism-I', 3, '3', 'Semester 4', 5),
(1262, 'ENG-403', 'American Literature-I', 3, '3', 'Semester 4', 5),
(1263, 'ENG-404', 'Rhetoric and Composition', 3, '3', 'Semester 4', 5),
(1264, 'ENG-405', 'Short Story', 3, '3', 'Semester 4', 5),
(1265, 'ENG-406', 'Sociolinguistics', 3, '3', 'Semester 4', 5),
(1266, 'GED-401', 'Technical Writing', 2, '2', 'Semester 4', 5),
(1267, 'ENG-407', 'Editing and Proofreading', 3, '3', 'Semester 4', 5),
(1268, 'ENG-301', 'Linguistics-I', 3, '3', 'Semester 3', 5),
(1269, 'ENG-302', 'Poetry-II', 3, '3', 'Semester 3', 5),
(1270, 'ENG-303', 'Drama-II', 3, '3', 'Semester 3', 5),
(1271, 'ENG-304', 'Novel-II', 3, '3', 'Semester 3', 5),
(1272, 'ENG-305', 'Academic Writing', 3, '3', 'Semester 3', 5),
(1273, 'ENG-306', 'Translation Studies', 3, '3', 'Semester 3', 5),
(1274, 'GED-301', 'Economics', 3, '3', 'Semester 3', 5),
(1275, 'ENG-307', 'English for Media', 2, '2', 'Semester 3', 5),
(1276, 'ENG-201', 'Advanced Grammar and Writing', 3, '3', 'Semester 2', 5),
(1277, 'ENG-202', 'English Phonetics and Phonology', 3, '3', 'Semester 2', 5),
(1278, 'ENG-203', 'History of English Literature-II', 3, '3', 'Semester 2', 5),
(1279, 'ENG-204', 'Drama-I', 3, '3', 'Semester 2', 5),
(1280, 'ENG-205', 'Novel-I', 3, '3', 'Semester 2', 5),
(1281, 'ENG-206', 'Critical Thinking and Logic', 2, '2', 'Semester 2', 5),
(1282, 'GED-201', 'Ethics and Values', 2, '2', 'Semester 2', 5),
(1283, 'ENG-207', 'Presentation Skills', 3, '3', 'Semester 2', 5),
(1284, 'ENG-101', 'Introduction to English Studies', 3, '3', 'Semester 1', 5),
(1285, 'ENG-102', 'English Reading Skills', 3, '3', 'Semester 1', 5),
(1286, 'ENG-103', 'Basic Grammar and Composition', 3, '3', 'Semester 1', 5),
(1287, 'ENG-104', 'History of English Literature-I', 3, '3', 'Semester 1', 5),
(1288, 'ENG-105', 'Classical Poetry', 3, '3', 'Semester 1', 5),
(1289, 'ENG-106', 'Speaking and Listening Skills', 2, '2', 'Semester 1', 5),
(1290, 'GED-101', 'Bangladesh Studies', 2, '2', 'Semester 1', 5),
(1291, 'ENG-107', 'Computer Fundamentals', 3, '3', 'Semester 1', 5),
(1292, 'ECO-801', 'Thesis / Research Project-II', 6, '6', 'Semester 8', 6),
(1293, 'ECO-802', 'Viva Voce', 2, '2', 'Semester 8', 6),
(1294, 'ECO-803', 'Advanced Development Economics', 3, '3', 'Semester 8', 6),
(1295, 'ECO-804', 'Advanced International Economics', 3, '3', 'Semester 8', 6),
(1296, 'ECO-805', 'Economics of Climate Change', 3, '3', 'Semester 8', 6),
(1297, 'ECO-806', 'Career Development', 2, '2', 'Semester 8', 6),
(1298, 'ECO-807', 'Leadership and Governance', 2, '2', 'Semester 8', 6),
(1299, 'ECO-808', 'Contemporary Economic Issues', 2, '2', 'Semester 8', 6),
(1300, 'ECO-701', 'Advanced Econometrics', 3, '3', 'Semester 7', 6),
(1301, 'ECO-702', 'Trade and Globalization', 3, '3', 'Semester 7', 6),
(1302, 'ECO-703', 'Poverty and Inequality', 3, '3', 'Semester 7', 6),
(1303, 'ECO-704', 'Behavioral Economics', 3, '3', 'Semester 7', 6),
(1304, 'ECO-705', 'Project / Thesis-I', 3, '3', 'Semester 7', 6),
(1305, 'ECO-706', 'Internship / Field Survey', 2, '2', 'Semester 7', 6),
(1306, 'ECO-707', 'Seminar and Presentation', 2, '2', 'Semester 7', 6),
(1307, 'ECO-708', 'Financial Economics', 3, '3', 'Semester 7', 6),
(1340, 'ECO-601', 'Monetary Economics', 3, '3', 'Semester 6', 6),
(1341, 'ECO-602', 'Fiscal Economics', 3, '3', 'Semester 6', 6),
(1342, 'ECO-603', 'Urban and Regional Economics', 3, '3', 'Semester 6', 6),
(1343, 'ECO-604', 'Population Economics', 3, '3', 'Semester 6', 6),
(1344, 'ECO-605', 'Project Appraisal and Cost-Benefit Analysis', 3, '3', 'Semester 6', 6),
(1345, 'ECO-606', 'Quantitative Techniques for Economics', 3, '3', 'Semester 6', 6),
(1346, 'GED-601', 'Entrepreneurship', 2, '2', 'Semester 6', 6),
(1347, 'ECO-607', 'Policy Analysis', 3, '3', 'Semester 6', 6),
(1348, 'ECO-501', 'Money, Banking and Financial Markets', 3, '3', 'Semester 5', 6),
(1349, 'ECO-502', 'Environmental Economics', 3, '3', 'Semester 5', 6),
(1350, 'ECO-503', 'Health Economics', 3, '3', 'Semester 5', 6),
(1351, 'ECO-504', 'Labor Economics', 3, '3', 'Semester 5', 6),
(1352, 'ECO-505', 'Industrial Economics', 3, '3', 'Semester 5', 6),
(1353, 'ECO-506', 'International Economics-II', 3, '3', 'Semester 5', 6),
(1354, 'GED-501', 'Sociology', 2, '2', 'Semester 5', 6),
(1355, 'ECO-507', 'Computer Applications in Economics', 3, '3', 'Semester 5', 6),
(1356, 'ECO-401', 'Intermediate Microeconomics-II', 3, '3', 'Semester 4', 6),
(1357, 'ECO-402', 'Intermediate Macroeconomics-II', 3, '3', 'Semester 4', 6),
(1358, 'ECO-403', 'Econometrics-II', 3, '3', 'Semester 4', 6),
(1359, 'ECO-404', 'Public Finance-II', 3, '3', 'Semester 4', 6),
(1360, 'ECO-405', 'Development Economics-II', 3, '3', 'Semester 4', 6),
(1361, 'ECO-406', 'International Economics-I', 3, '3', 'Semester 4', 6),
(1362, 'GED-401', 'Technical Writing', 2, '2', 'Semester 4', 6),
(1363, 'ECO-407', 'Research Methods', 3, '3', 'Semester 4', 6),
(1364, 'ECO-301', 'Intermediate Microeconomics-I', 3, '3', 'Semester 3', 6),
(1365, 'ECO-302', 'Intermediate Macroeconomics-I', 3, '3', 'Semester 3', 6),
(1366, 'ECO-303', 'Econometrics-I', 3, '3', 'Semester 3', 6),
(1367, 'ECO-304', 'Public Finance-I', 3, '3', 'Semester 3', 6),
(1368, 'ECO-305', 'Development Economics-I', 3, '3', 'Semester 3', 6),
(1369, 'ECO-306', 'Agricultural Economics', 3, '3', 'Semester 3', 6),
(1370, 'GED-301', 'Economics of Bangladesh', 3, '3', 'Semester 3', 6),
(1371, 'ECO-307', 'Presentation and Report Writing', 2, '2', 'Semester 3', 6),
(1372, 'ECO-201', 'Principles of Macroeconomics', 3, '3', 'Semester 2', 6),
(1373, 'ECO-202', 'Mathematics for Economics-II', 3, '3', 'Semester 2', 6),
(1374, 'ECO-203', 'Statistics for Economics-II', 3, '3', 'Semester 2', 6),
(1375, 'ECO-204', 'Economic History', 3, '3', 'Semester 2', 6),
(1376, 'ENG-201', 'Academic Writing', 3, '3', 'Semester 2', 6),
(1377, 'GED-201', 'Ethics and Values', 2, '2', 'Semester 2', 6),
(1378, 'CSE-201', 'Spreadsheet and Data Analysis', 3, '3', 'Semester 2', 6),
(1379, 'ECO-205', 'Business Communication', 2, '2', 'Semester 2', 6),
(1380, 'ECO-101', 'Introduction to Economics', 3, '3', 'Semester 1', 6),
(1381, 'ECO-102', 'Principles of Microeconomics', 3, '3', 'Semester 1', 6),
(1382, 'ECO-103', 'Mathematics for Economics-I', 3, '3', 'Semester 1', 6),
(1383, 'ECO-104', 'Statistics for Economics-I', 3, '3', 'Semester 1', 6),
(1384, 'ENG-101', 'Communicative English', 3, '3', 'Semester 1', 6),
(1385, 'GED-101', 'Bangladesh Studies', 2, '2', 'Semester 1', 6),
(1386, 'CSE-101', 'Computer Fundamentals', 3, '3', 'Semester 1', 6),
(1387, 'ECO-105', 'Basic Accounting', 2, '2', 'Semester 1', 6),
(1388, 'BBA-801', 'Project / Thesis-II', 6, '6', 'Semester 8', 7),
(1389, 'BBA-802', 'Viva Voce', 2, '2', 'Semester 8', 7),
(1390, 'BBA-803', 'Advanced Strategic Management', 3, '3', 'Semester 8', 7),
(1391, 'BBA-804', 'International Marketing', 3, '3', 'Semester 8', 7),
(1392, 'BBA-805', 'Digital Business Transformation', 3, '3', 'Semester 8', 7),
(1393, 'BBA-806', 'Career Development', 2, '2', 'Semester 8', 7),
(1394, 'BBA-807', 'Leadership and Professional Ethics', 2, '2', 'Semester 8', 7),
(1395, 'BBA-808', 'Contemporary Business Issues', 2, '2', 'Semester 8', 7),
(1396, 'BBA-701', 'Leadership and Change Management', 3, '3', 'Semester 7', 7),
(1397, 'BBA-702', 'Retail Management', 3, '3', 'Semester 7', 7),
(1398, 'BBA-703', 'Corporate Governance', 3, '3', 'Semester 7', 7),
(1399, 'BBA-704', 'SME and Family Business', 3, '3', 'Semester 7', 7),
(1400, 'BBA-705', 'Project / Thesis-I', 3, '3', 'Semester 7', 7),
(1401, 'BBA-706', 'Internship / Field Work', 2, '2', 'Semester 7', 7),
(1402, 'BBA-707', 'Seminar and Presentation', 2, '2', 'Semester 7', 7),
(1403, 'BBA-708', 'Business Environment', 3, '3', 'Semester 7', 7),
(1404, 'BBA-601', 'Corporate Finance', 3, '3', 'Semester 6', 7),
(1405, 'BBA-602', 'Brand Management', 3, '3', 'Semester 6', 7),
(1406, 'BBA-603', 'Performance Management', 3, '3', 'Semester 6', 7),
(1407, 'BBA-604', 'Auditing', 3, '3', 'Semester 6', 7),
(1408, 'BBA-605', 'Operations Research', 3, '3', 'Semester 6', 7),
(1409, 'BBA-606', 'Small Business Management', 3, '3', 'Semester 6', 7),
(1410, 'GED-601', 'Entrepreneurship', 2, '2', 'Semester 6', 7),
(1411, 'BBA-607', 'Business Analytics', 3, '3', 'Semester 6', 7),
(1412, 'BBA-501', 'Strategic Management', 3, '3', 'Semester 5', 7),
(1413, 'BBA-502', 'International Business', 3, '3', 'Semester 5', 7),
(1414, 'BBA-503', 'Investment Analysis', 3, '3', 'Semester 5', 7),
(1415, 'BBA-504', 'Sales Management', 3, '3', 'Semester 5', 7),
(1416, 'BBA-505', 'Banking and Insurance', 3, '3', 'Semester 5', 7),
(1417, 'BBA-506', 'Supply Chain Management', 3, '3', 'Semester 5', 7),
(1418, 'GED-501', 'Sociology', 2, '2', 'Semester 5', 7),
(1419, 'BBA-507', 'Business Negotiation', 3, '3', 'Semester 5', 7),
(1420, 'BBA-401', 'Production and Operations Management', 3, '3', 'Semester 4', 7),
(1421, 'BBA-402', 'Financial Management', 3, '3', 'Semester 4', 7),
(1422, 'BBA-403', 'Management Information Systems', 3, '3', 'Semester 4', 7),
(1423, 'BBA-404', 'Consumer Behavior', 3, '3', 'Semester 4', 7),
(1424, 'BBA-405', 'Business Research Methods', 3, '3', 'Semester 4', 7),
(1425, 'BBA-406', 'Taxation and VAT', 3, '3', 'Semester 4', 7),
(1426, 'GED-401', 'Technical Writing', 2, '2', 'Semester 4', 7),
(1427, 'BBA-407', 'E-Business', 3, '3', 'Semester 4', 7),
(1428, 'BBA-301', 'Human Resource Management', 3, '3', 'Semester 3', 7),
(1429, 'BBA-302', 'Business Statistics', 3, '3', 'Semester 3', 7),
(1430, 'BBA-303', 'Cost and Management Accounting', 3, '3', 'Semester 3', 7),
(1431, 'BBA-304', 'Business Law', 3, '3', 'Semester 3', 7),
(1432, 'BBA-305', 'Principles of Finance', 3, '3', 'Semester 3', 7),
(1433, 'BBA-306', 'Entrepreneurship Development', 3, '3', 'Semester 3', 7),
(1434, 'GED-301', 'Economics of Bangladesh', 3, '3', 'Semester 3', 7),
(1435, 'BBA-307', 'Report Writing and Presentation', 2, '2', 'Semester 3', 7),
(1436, 'BBA-201', 'Organizational Behavior', 3, '3', 'Semester 2', 7),
(1437, 'BBA-202', 'Macroeconomics', 3, '3', 'Semester 2', 7),
(1438, 'BBA-203', 'Business Mathematics', 3, '3', 'Semester 2', 7),
(1439, 'BBA-204', 'Financial Accounting', 3, '3', 'Semester 2', 7),
(1440, 'BBA-205', 'Marketing Principles', 3, '3', 'Semester 2', 7),
(1441, 'ENG-201', 'Academic Writing', 3, '3', 'Semester 2', 7),
(1442, 'GED-201', 'Ethics and Values', 2, '2', 'Semester 2', 7),
(1443, 'CSE-201', 'Spreadsheet and Presentation Tools', 2, '2', 'Semester 2', 7),
(1444, 'BBA-101', 'Principles of Management', 3, '3', 'Semester 1', 7),
(1445, 'BBA-102', 'Business Communication', 3, '3', 'Semester 1', 7),
(1446, 'BBA-103', 'Introduction to Business', 3, '3', 'Semester 1', 7),
(1447, 'BBA-104', 'Microeconomics', 3, '3', 'Semester 1', 7),
(1448, 'BBA-105', 'Basic Accounting', 3, '3', 'Semester 1', 7),
(1449, 'ENG-101', 'Communicative English', 3, '3', 'Semester 1', 7),
(1450, 'GED-101', 'Bangladesh Studies', 2, '2', 'Semester 1', 7),
(1451, 'CSE-101', 'Computer Fundamentals', 2, '2', 'Semester 1', 7),
(1452, 'LAW-801', 'Thesis / Research Project-II', 6, '6', 'Semester 8', 8),
(1453, 'LAW-802', 'Viva Voce', 2, '2', 'Semester 8', 8),
(1454, 'LAW-803', 'Advanced Criminal Law', 3, '3', 'Semester 8', 8),
(1455, 'LAW-804', 'Advanced Civil Litigation', 3, '3', 'Semester 8', 8),
(1456, 'LAW-805', 'International Trade Law', 3, '3', 'Semester 8', 8),
(1457, 'LAW-806', 'Career Development', 2, '2', 'Semester 8', 8),
(1458, 'LAW-807', 'Leadership and Governance', 2, '2', 'Semester 8', 8),
(1459, 'LAW-808', 'Contemporary Legal Issues', 2, '2', 'Semester 8', 8),
(1460, 'LAW-701', 'Advanced Constitutional Law', 3, '3', 'Semester 7', 8),
(1461, 'LAW-702', 'International Humanitarian Law', 3, '3', 'Semester 7', 8),
(1462, 'LAW-703', 'Commercial Law', 3, '3', 'Semester 7', 8),
(1463, 'LAW-704', 'Law and Society', 3, '3', 'Semester 7', 8),
(1464, 'LAW-705', 'Project / Thesis-I', 3, '3', 'Semester 7', 8),
(1465, 'LAW-706', 'Internship / Chamber Practice', 2, '2', 'Semester 7', 8),
(1466, 'LAW-707', 'Seminar and Presentation', 2, '2', 'Semester 7', 8),
(1467, 'LAW-708', 'Legal Clinic', 3, '3', 'Semester 7', 8),
(1468, 'LAW-601', 'Comparative Law', 3, '3', 'Semester 6', 8),
(1469, 'LAW-602', 'Media Law', 3, '3', 'Semester 6', 8),
(1470, 'LAW-603', 'Cyber Law', 3, '3', 'Semester 6', 8),
(1471, 'LAW-604', 'Public International Law', 3, '3', 'Semester 6', 8),
(1472, 'LAW-605', 'Private International Law', 3, '3', 'Semester 6', 8),
(1473, 'LAW-606', 'Legal Research Methodology', 3, '3', 'Semester 6', 8),
(1474, 'GED-601', 'Entrepreneurship', 2, '2', 'Semester 6', 8),
(1475, 'LAW-607', 'Professional Ethics for Lawyers', 3, '3', 'Semester 6', 8),
(1476, 'LAW-501', 'International Law-II', 3, '3', 'Semester 5', 8),
(1477, 'LAW-502', 'Labour Law', 3, '3', 'Semester 5', 8),
(1478, 'LAW-503', 'Taxation Law', 3, '3', 'Semester 5', 8),
(1479, 'LAW-504', 'Environmental Law', 3, '3', 'Semester 5', 8),
(1480, 'LAW-505', 'Banking Law', 3, '3', 'Semester 5', 8),
(1481, 'LAW-506', 'Intellectual Property Law', 3, '3', 'Semester 5', 8),
(1482, 'GED-501', 'Sociology', 2, '2', 'Semester 5', 8),
(1483, 'LAW-507', 'Alternative Dispute Resolution', 3, '3', 'Semester 5', 8),
(1484, 'LAW-401', 'Evidence Law', 3, '3', 'Semester 4', 8),
(1485, 'LAW-402', 'Civil Procedure Code', 3, '3', 'Semester 4', 8),
(1486, 'LAW-403', 'Criminal Procedure Code', 3, '3', 'Semester 4', 8),
(1487, 'LAW-404', 'International Law-I', 3, '3', 'Semester 4', 8),
(1488, 'LAW-405', 'Family Law', 3, '3', 'Semester 4', 8),
(1489, 'LAW-406', 'Human Rights Law', 3, '3', 'Semester 4', 8),
(1490, 'GED-401', 'Technical Writing', 2, '2', 'Semester 4', 8),
(1491, 'LAW-407', 'Legal Drafting', 3, '3', 'Semester 4', 8),
(1492, 'LAW-301', 'Law of Contract-II', 3, '3', 'Semester 3', 8),
(1493, 'LAW-302', 'Criminal Law-II', 3, '3', 'Semester 3', 8),
(1494, 'LAW-303', 'Property Law', 3, '3', 'Semester 3', 8),
(1495, 'LAW-304', 'Administrative Law', 3, '3', 'Semester 3', 8),
(1496, 'LAW-305', 'Equity and Trusts', 3, '3', 'Semester 3', 8),
(1497, 'LAW-306', 'Company Law', 3, '3', 'Semester 3', 8),
(1498, 'GED-301', 'Economics', 3, '3', 'Semester 3', 8),
(1499, 'LAW-307', 'Moot Court Practice', 2, '2', 'Semester 3', 8),
(1500, 'LAW-201', 'Constitutional Law-II', 3, '3', 'Semester 2', 8),
(1501, 'LAW-202', 'Law of Contract-I', 3, '3', 'Semester 2', 8),
(1502, 'LAW-203', 'Jurisprudence', 3, '3', 'Semester 2', 8),
(1503, 'ENG-201', 'Academic Writing', 3, '3', 'Semester 2', 8),
(1504, 'GED-201', 'Ethics and Values', 2, '2', 'Semester 2', 8),
(1505, 'LAW-204', 'Law of Torts', 3, '3', 'Semester 2', 8),
(1506, 'LAW-205', 'Criminal Law-I', 3, '3', 'Semester 2', 8),
(1507, 'LAW-206', 'Legal Writing', 2, '2', 'Semester 2', 8),
(1508, 'LAW-101', 'Introduction to Law', 3, '3', 'Semester 1', 8),
(1509, 'LAW-102', 'Legal System of Bangladesh', 3, '3', 'Semester 1', 8),
(1510, 'LAW-103', 'Constitutional Law-I', 3, '3', 'Semester 1', 8),
(1511, 'ENG-101', 'Communicative English', 3, '3', 'Semester 1', 8),
(1512, 'GED-101', 'Bangladesh Studies', 2, '2', 'Semester 1', 8),
(1513, 'CSE-101', 'Computer Fundamentals', 2, '2', 'Semester 1', 8),
(1514, 'LAW-104', 'Legal Methods', 3, '3', 'Semester 1', 8),
(1515, 'LAW-105', 'History of Legal System', 3, '3', 'Semester 1', 8);

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `id` int(11) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `message_from_head` text NOT NULL,
  `faculty` int(11) NOT NULL,
  `overview` text NOT NULL,
  `icon` varchar(100) NOT NULL DEFAULT 'fa-book'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`id`, `dept`, `details`, `message_from_head`, `faculty`, `overview`, `icon`) VALUES
(1, 'Computer Science & Engineering', 'Professor & Head ', 'Welcome to the Department of Computer Science and Engineering at Unipix University. It is my great pleasure to lead a department that is committed to excellence in education, research, and innovation. Our goal is to provide students with a strong foundation in computer science along with practical skills that meet the demands of the rapidly evolving technology industry. We strive to create a learning environment that encourages creativity, critical thinking, and problem-solving. The department is supported by experienced faculty members, modern laboratories, and up-to-date curriculum designed to prepare students for real-world challenges. We also encourage students to participate in research, projects, and extracurricular activities to enhance their overall development. I believe that our students have the potential to become future leaders, innovators, and professionals in the field of technology. I wish all students success in their academic journey and future careers.', 17, 'The Department of Computer Science and Engineering (CSE) at Unipix University is dedicated to providing high-quality education and fostering innovation in the field of computing and technology. The department offers a well-structured curriculum that combines theoretical knowledge with practical skills to prepare students for modern technological challenges. Students gain expertise in various areas such as programming, software development, data structures, artificial intelligence, networking, and cybersecurity. The department is equipped with modern laboratories, advanced computing facilities, and experienced faculty members who guide students throughout their academic journey. The CSE program emphasizes problem-solving, critical thinking, and real-world application of knowledge. Students are encouraged to participate in research, projects, workshops, and internships to enhance their professional skills and industry readiness. Graduates from the CSE department are well-prepared to pursue careers in software development, IT industries, research organizations, and entrepreneurship, both nationally and internationally.', 'fas fa-laptop-code'),
(2, 'Electrical & Electronic Engineering', 'Professor & Head ', 'Welcome to the Department of Electrical and Electronic Engineering at Unipix University. It is an honor to lead a department that is dedicated to academic excellence and technological advancement. Our mission is to provide students with strong theoretical knowledge and practical skills required in the field of electrical and electronic engineering. We aim to create a learning environment that fosters innovation, creativity, and critical thinking. The department is equipped with modern laboratories and supported by highly qualified faculty members who are committed to guiding students towards success. We also encourage students to engage in research, industrial training, and project work to enhance their professional skills. I am confident that our students will become competent engineers and contribute significantly to society and the advancement of technology. I wish them success in their academic and professional journey.', 5, 'The Department of Electrical and Electronic Engineering (EEE) at Unipix University is committed to providing quality education and practical knowledge in the fields of electrical and electronic systems. The department focuses on developing skilled engineers who can contribute to modern technology and industrial growth. The curriculum covers important areas such as electrical circuits, power systems, electronics, communication engineering, control systems, and renewable energy. Students gain hands-on experience through well-equipped laboratories and real-world projects. Our experienced faculty members guide students to develop analytical thinking, technical skills, and problem-solving abilities. The department also encourages participation in research, innovation, and industrial training programs. Graduates of the EEE department are prepared for careers in power generation, telecommunications, automation, electronics industries, and research organizations both nationally and internationally.', 'fas fa-bolt'),
(3, 'Software Engineering', 'Professor & Head ', 'Welcome to the Department of Software Engineering at Unipix University. Our department is dedicated to providing high-quality education and training in the field of software development and technology. We aim to equip students with the necessary skills, knowledge, and creativity required to succeed in the rapidly growing software industry. Our curriculum is designed to combine theory with practical experience, ensuring that students are industry-ready. Our faculty members are committed to guiding students in academic learning, research, and innovation. We encourage students to participate in projects, internships, and collaborative activities to enhance their professional development. I believe our students will become skilled software engineers and contribute significantly to the advancement of technology and society.', 9, 'The Department of Software Engineering at Unipix University focuses on developing skilled professionals in software design, development, and maintenance. The program is designed to provide students with strong theoretical knowledge along with practical experience in modern software technologies. Students learn various subjects such as programming, software development life cycle, database systems, web development, mobile application development, and software testing. The department emphasizes hands-on learning through projects, coding practices, and real-world problem-solving. With modern laboratories and experienced faculty members, students are encouraged to develop innovative software solutions and participate in research and industry-based projects. The program prepares graduates for careers in software companies, IT industries, startups, and research organizations.', 'fas fa-code'),
(4, 'Data Science', 'Professor & Head ', 'Welcome to the Department of Data Science at Unipix University. It is a pleasure to lead a department that is focused on innovation, research, and the power of data in today’s world. Our mission is to equip students with strong analytical skills and technical knowledge required to handle complex data and transform it into meaningful insights. We aim to create a learning environment that encourages curiosity, creativity, and critical thinking. The department offers a modern curriculum supported by experienced faculty members and advanced laboratory facilities. We also encourage students to engage in research, projects, and industry collaborations to enhance their practical experience. I am confident that our students will become skilled data professionals and contribute significantly to the advancement of technology and society.', 13, 'The Department of Data Science at Unipix University is dedicated to preparing students for the rapidly growing field of data-driven technology. The program focuses on collecting, analyzing, and interpreting large volumes of data to support decision-making and innovation. Students gain knowledge in key areas such as statistics, machine learning, data analysis, data visualization, big data technologies, and artificial intelligence. The curriculum combines theoretical concepts with practical applications through projects, case studies, and real-world datasets. The department is equipped with modern computing facilities and guided by experienced faculty members who support students in research and industry-oriented learning. Students are encouraged to develop analytical thinking, problem-solving skills, and technical expertise to meet the demands of the modern data-driven world. Graduates of the Data Science program are well-prepared for careers in data analysis, machine learning engineering, business intelligence, research, and various IT industries.', 'fas fa-database'),
(5, 'English', 'Professor & Head ', 'Welcome to the Department of English at Unipix University. It is a privilege to lead a department that celebrates language, literature, and creative expression. Our goal is to equip students with strong communication skills, critical thinking abilities, and a deep understanding of literary and cultural studies. We strive to create an environment that nurtures creativity, intellectual curiosity, and lifelong learning. With a dynamic curriculum, experienced faculty, and a supportive academic environment, we prepare students to engage with diverse texts and ideas. We also encourage participation in research, writing, presentations, and cultural activities. I am confident that our students will become articulate, thoughtful individuals who contribute meaningfully to society in fields such as education, media, writing, and beyond.', 33, 'The Department of English at Unipix University is dedicated to fostering critical thinking, creativity, and a deep appreciation for language and literature. The program focuses on the study of English literature, linguistics, and communication skills to prepare students for diverse academic and professional fields. Students explore various literary genres, critical theories, and cultural contexts while developing strong writing, reading, and analytical abilities. The curriculum blends theoretical knowledge with practical applications through presentations, research projects, and interactive discussions. The department is supported by qualified faculty members and a resource-rich learning environment. Students are encouraged to enhance their communication skills, creativity, and intellectual curiosity. Graduates are well-prepared for careers in teaching, writing, media, publishing, public relations, and research.', 'fas fa-book-open'),
(6, 'Economics', 'Professor & Head ', 'Welcome to the Department of Economics at Unipix University. It is an honor to lead a department that focuses on understanding economic challenges and developing practical solutions. Our mission is to equip students with strong analytical and decision-making skills required in today’s complex economic environment. We aim to create a learning atmosphere that promotes research, innovation, and critical thinking. With a well-structured curriculum and dedicated faculty members, we prepare students to become competent economists and professionals. We also encourage students to participate in research, policy analysis, and real-world economic studies. I believe our graduates will contribute significantly to economic development and make a positive impact on society.', 18, 'The Department of Economics at Unipix University is dedicated to providing a strong foundation in economic theory, policy, and real-world applications. The program focuses on understanding how economies function at local, national, and global levels. Students study key areas such as microeconomics, macroeconomics, econometrics, development economics, and international trade. The curriculum combines theoretical knowledge with practical analysis, enabling students to interpret economic data and make informed decisions. The department encourages critical thinking, analytical skills, and research activities. With experienced faculty members and modern learning resources, students are prepared for careers in banking, government, research organizations, business sectors, and international institutions.', 'fas fa-chart-line'),
(7, 'Business Administration', 'Professor & Head ', 'Welcome to the Department of Business Administration at Unipix University. It is a privilege to lead a department dedicated to excellence in business education and professional development. Our goal is to provide students with the knowledge, skills, and confidence required to succeed in today’s dynamic business environment. We aim to create a learning environment that encourages innovation, leadership, and critical thinking. The department offers a modern curriculum supported by experienced faculty members and practical learning opportunities. We encourage students to participate in internships, projects, and business-related activities to gain real-world experience. I am confident that our students will become successful business professionals and contribute positively to the global economy.', 19, 'The Department of Business Administration at Unipix University is committed to developing future business leaders and professionals. The program provides students with a strong foundation in business principles, management practices, and organizational skills. Students study key areas such as accounting, finance, marketing, human resource management, entrepreneurship, and business communication. The curriculum is designed to combine theoretical knowledge with practical applications through case studies, projects, and internships. The department focuses on enhancing leadership, decision-making, and problem-solving abilities. With experienced faculty members and modern learning facilities, students are prepared to meet the challenges of the competitive business world. Graduates of the BBA program are well-equipped for careers in corporate organizations, banking, entrepreneurship, and management sectors both nationally and internationally.', 'fas fa-briefcase'),
(8, 'Law & Justice', 'Professor & Head ', 'Welcome to the Department of Law & Justice at Unipix University. It is an honor to lead a department committed to excellence in legal education and the pursuit of justice. Our mission is to equip students with a deep understanding of legal principles, ethical values, and professional skills required in the legal field. We strive to create a learning environment that promotes critical thinking, integrity, and responsibility. The department provides a modern curriculum, practical training opportunities, and guidance from experienced faculty members. We encourage students to participate in moot courts, legal research, and internships to gain real-world experience. I believe our students will become competent legal professionals who will uphold justice, protect rights, and contribute positively to society.', 20, 'The Department of Law & Justice at Unipix University is dedicated to providing quality legal education and promoting justice, ethics, and social responsibility. The program aims to develop skilled legal professionals with a strong understanding of law, human rights, and legal systems. Students study key areas such as constitutional law, criminal law, civil law, international law, human rights law, and legal research. The curriculum combines theoretical knowledge with practical training through moot courts, case studies, and internships. The department encourages critical thinking, legal reasoning, and analytical skills. With experienced faculty members and a supportive academic environment, students are prepared for careers in legal practice, judiciary, corporate law, and public service. Graduates of the Law & Justice program are well-equipped to uphold justice and contribute to society through their legal expertise.', 'fas fa-balance-scale');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `dept` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `designation`, `picture`, `details`, `dept`) VALUES
(2, 'Prof. Christopher White', 'Associate Professor', 'Faculty/Faculty-1774732629.jpg', '<div><div><div><div><div><div><div><div><span><b>Phone: </b>+1 617-555-0913<br><b>Email: </b><a target=\"_blank\" rel=\"nofollow\">christopher.white@unipix.edu</a><br><b>Present Address:</b> 88 Innovation Drive, Boston, Massachusetts, USA<br><b>Permanent Address: </b>34 Pine Street, Chicago, Illinois, USA<br><b>National ID No: </b>845739162580<br><b>Job ID No:</b> UNI-CSE-4078<br><b>Sex:</b> Male<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u><br></b><span>Bachelor of Science in Computer Science, University of Illinois, USA<br>Master of Science in Information Technology, Harvard University, USA<br>Ph.D. in Computer Science, Massachusetts Institute of Technology (MIT), USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Christopher White is an accomplished academic and researcher with more than 13 years of experience in the field of Computer Science and Engineering. He has taught a wide range of subjects including programming, data structures, operating systems, software engineering, and computer networks.He is highly passionate about teaching and focuses on developing students’ logical thinking, problem-solving skills, and practical knowledge. His teaching methodology integrates modern technologies, real-world case studies, and project-based learning.Prof. White has been actively involved in research and has published numerous papers in reputed international journals and conferences. His research interests include cybersecurity, artificial intelligence, data science, and network security.He strongly encourages students to participate in coding competitions, research projects, and innovative development activities to enhance their skills. His dedication helps students become competent professionals ready for global IT industries.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Cyber Security<br>Artificial Intelligence<br>Data Science<br>Computer Networks<br>Software Engineering<br><br></span><span><b><u>DEPARTMENT:</u></b><br>Computer Science &amp; Engineering</span></div></div></div></div><div></div><div><div></div></div></div></div></div><div></div></div><div><div></div><div><div><div><div></div><div><div></div><span><div></div><div><div><div></div><div><div></div></div></div></div></span></div></div></div></div></div>', '1'),
(3, 'Prof. Andrew Clark', 'Assistant Professor', 'Faculty/Faculty-1774732565.jpg', '<span><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">andrew.clark@unipix.edu</a><br><b>Present Address:</b> 210 Tech Park Avenue, Denver, Colorado, USA<br><b>Permanent Address: </b>92 River Street, Portland, Oregon, USA<br><b>National ID No: </b>739158462901<br><b>Job ID No: </b>UNI-CSE-5123<br><b>Sex: </b>Male<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Science in Computer Science, University of Oregon, USA<br>Master of Science in Software Engineering, Carnegie Mellon University, USA<br>Ph.D. in Computer Science, University of Texas at Austin, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Andrew Clark is a highly experienced academic and researcher with over 12 years of teaching experience in the field of Computer Science and Engineering. He has taught various core subjects including programming languages, data structures, algorithms, operating systems, and software development.He is dedicated to providing a student-centered learning environment where students can develop both theoretical understanding and practical skills. His teaching methodology focuses on hands-on learning, project-based development, and real-world problem solving.Prof. Clark has been actively involved in research activities and has published several research papers in international journals and conferences. His research interests include software engineering, artificial intelligence, cloud computing, and distributed systems.He encourages students to participate in research, coding competitions, and innovative software development projects to enhance their technical skills and career opportunities. His goal is to produce highly skilled graduates who can contribute effectively to the global IT industry.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Software Engineering<br>Artificial Intelligence<br>Cloud Computing<br>Distributed Systems<br>Data Structures &amp; Algorithms<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Computer Science &amp; Engineering</span>', '1'),
(4, 'Dr. Jessica Miller', 'Assistant Professor', 'Faculty/Faculty-1774732869.JPG', '<span><b>Phone: </b>+1 617-555-0734<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">jessica.miller@unipix.edu</a><br><b>Present Address: </b>90 Innovation Street, Boston, Massachusetts, USA<br><b>Permanent Address:</b> 44 Green Park Avenue, Miami, Florida, USA<br><b>National ID No: </b>694217385620<br><b>Job ID No: </b>UNI-CSE-6033<br><b>Sex: </b>Female<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Science in Computer Science, University of Florida, USA<br>Master of Science in Information Technology, New York University, USA<br>Ph.D. in Cyber Security, MIT, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Dr. Jessica Miller is a dedicated educator and researcher with over 9 years of experience in Computer Science and Engineering. She has expertise in cybersecurity, networking, and data protection.She is passionate about teaching and focuses on building strong conceptual knowledge along with practical skills. Her classes emphasize hands-on training, project development, and real-world applications.She has contributed to several research publications and encourages students to participate in cybersecurity research and competitions.<br><span><br><b><u>AREA OF INTEREST:</u></b><br>Cyber Security<br>Network Security<br>Information Security<br>Data Protection<br>Computer Networks<br><br></span><b><u>DEPARTMENT:</u></b> <br>Computer Science &amp; Engineering', '1'),
(5, 'Dr. Jonathan Reed', 'Professor & Head', 'Faculty/Faculty-1774991012.jpg', '<span><b>Phone: </b>+1 512-555-0847<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">jonathan.reed@unipix.edu</a><br><b>Present Address:</b> 78 Power Innovation Drive, Austin, Texas, USA<br><b>Permanent Address:</b> 33 Hilltop Street, Columbus, Ohio, USA<br><b>National ID No:</b> 637281945026<br><b>Job ID No:</b> UNI-EEE-1319<br><b>Sex:</b> Male<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Science in Electrical Engineering, Ohio State University, USA<br>Master of Science in Electrical Power Systems, University of Illinois, USA<br>Ph.D. in Electrical and Electronic Engineering, University of Texas at Austin, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Dr. Jonathan Reed is an experienced academic and researcher with over 11 years of teaching and research experience in Electrical and Electronic Engineering. He has taught subjects such as electrical circuits, power electronics, control systems, and industrial automation.He is dedicated to providing a strong academic foundation along with practical knowledge through laboratory work and real-world projects. His teaching approach focuses on developing students’ analytical thinking and problem-solving abilities.Dr. Reed has published several research papers in international journals and conferences. His research interests include power electronics, renewable energy systems, smart grid technology, and industrial automation.He actively encourages students to participate in research, innovation, and technical competitions to enhance their skills and professional growth.<br><br><u><b>AREA OF INTEREST:</b></u><br><span>Power Electronics<br>Renewable Energy<br>Smart Grid Technology<br>Industrial Automation<br>Control Systems<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Electrical &amp; Electronic Engineering<br></span><br>', '2'),
(6, 'Prof. Daniel Harris', 'Professor', 'Faculty/Faculty-1774987029.jpg', '<span><b>Phone:</b> +1 408-555-0932<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">daniel.harris@unipix.edu</a><br><b>Present Address:</b> 56 Energy Tech Road, San Jose, California, USA<br><b>Permanent Address: </b>21 Maple Drive, Denver, Colorado, USA<br><b>National ID No:</b> 918273645082<br><b>Job ID No:</b> UNI-EEE-1207<br><b>Sex:</b> Male<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Science in Electrical Engineering, University of California, San Diego, USA<br>Master of Science in Power Systems Engineering, University of Texas at Austin, USA<br>Ph.D. in Electrical and Electronic Engineering, Georgia Institute of Technology, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Daniel Harris is a dedicated academician and researcher with more than 13 years of experience in the field of Electrical and Electronic Engineering. He has extensive teaching experience in subjects such as electrical circuits, power systems, control engineering, and renewable energy systems.He is committed to providing a high-quality learning environment where students can develop strong technical knowledge along with practical skills. His teaching methodology focuses on real-world applications, laboratory experiments, and project-based learning.Prof. Harris has actively participated in research and has published several papers in international journals and conferences. His research interests include smart grid technology, renewable energy systems, power electronics, and electrical automation.He encourages students to engage in research, technical innovation, and industrial training programs to enhance their skills and career opportunities. His goal is to produce highly skilled engineers capable of contributing to modern technological advancements.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Power Systems<br>Renewable Energy<br>Smart Grid Technology<br>Power Electronics<br>Control Systems<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Electrical &amp; Electronic Engineering</span>', '2'),
(7, 'Dr. Olivia Anderson', 'Associate Professor', 'Faculty/Faculty-1774985275.jpg', '<span><b>Phone:</b> +1 408-555-0678<br><b>Email: </b><a target=\"_blank\" rel=\"nofollow\">olivia.anderson@unipix.edu</a><br><b>Present Address: </b>65 Energy Park Drive, San Diego, California, USA<br><b>Permanent Address:</b> 27 Sunset Boulevard, Phoenix, Arizona, USA<br><b>National ID No:</b> 758392614820<br><b>Job ID No:</b> UNI-EEE-8126<br><b>Sex:</b> Female<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Science in Electrical Engineering, Arizona State University, USA<br>Master of Science in Electronic Engineering, University of California, Los Angeles (UCLA), USA<br>Ph.D. in Electrical and Electronic Engineering, Stanford University, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Dr. Olivia Anderson is a dedicated academic and researcher with more than 10 years of experience in teaching and research in the field of Electrical and Electronic Engineering. She has taught various subjects including electronics, communication systems, signal processing, and embedded systems.She is passionate about delivering quality education and focuses on developing students’ technical knowledge and problem-solving skills. Her teaching methodology integrates theoretical concepts with practical applications through laboratory work and project-based learning.Dr. Anderson has actively participated in research and has published several papers in international journals and conferences. Her research interests include communication systems, signal processing, renewable energy, and embedded technologies.She encourages students to engage in research, innovation, and industrial training to enhance their professional skills and career opportunities. Her goal is to prepare students to become skilled engineers capable of contributing to modern technological advancements.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Communication Systems<br>Signal Processing<br>Embedded Systems<br>Renewable Energy<br>Electronics<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Electrical &amp; Electronic Engineering</span>', '2'),
(8, 'Prof. Laura Martinez', 'Associate Professor', 'Faculty/Faculty-1774985337.jpg', '<span><b>Phone:</b> +34 612 345 789<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">laura.martinez@unipix.edu</a><br><b>Present Address:</b> 45 Solar Avenue, Madrid, Spain<br><b>Permanent Address: </b>18 Valencia Street, Barcelona, Spain<br><b>National ID No:</b> 839271645082<br><b>Job ID No: </b>UNI-EEE-7084<br><b>Sex:</b> Female<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Science in Electrical Engineering, University of Barcelona, Spain<br>Master of Science in Power Engineering, Polytechnic University of Madrid, Spain<br>Ph.D. in Electrical and Electronic Engineering, University of Cambridge, UK<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Laura Martinez is a highly qualified academic and researcher with over 12 years of experience in the field of Electrical and Electronic Engineering. She has extensive teaching experience in subjects such as electrical circuits, power systems, control systems, and renewable energy technologies.She is dedicated to providing a student-centered learning environment where theoretical knowledge is combined with practical applications. Her teaching approach emphasizes laboratory work, real-world problem solving, and innovative thinking.Prof. Martinez has been actively involved in research and has published numerous papers in international journals and conferences. Her research interests include renewable energy systems, smart grids, power distribution, and electrical automation.She encourages students to participate in research projects, laboratory experiments, and industrial training programs to enhance their technical and professional skills. Her goal is to develop competent engineers who can contribute to sustainable energy solutions and technological advancement.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Power Systems<br>Renewable Energy<br>Smart Grid Technology<br>Control Systems<br>Electrical Machines<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Electrical &amp; Electronic Engineering</span><br>', '2'),
(9, 'Prof. Alexander King', 'Professor & Head', 'Faculty/Faculty-1774995489.jpg', '<span><b>Phone: </b>+1 650-555-0999<br><b>Email: </b><a target=\"_blank\" rel=\"nofollow\">alexander.king@unipix.edu</a><br><b>Present Address:</b> 300 Tech Innovation Boulevard, Palo Alto, California, USA<br><b>Permanent Address:</b> 85 Redwood Street, San Jose, California, USA<br><b>National ID No:</b> 918264735092<br><b>Job ID No:</b> UNI-SE-3001<br><b>Sex:</b> Male<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Science in Computer Science, University of California, Berkeley, USA<br>Master of Science in Software Engineering, Stanford University, USA<br>Ph.D. in Software Engineering, Carnegie Mellon University, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Alexander King is a highly experienced academician, researcher, and administrator with more than 18 years of experience in the field of Software Engineering. He has extensive expertise in software development, system architecture, cloud computing, and large-scale system design.As the Head of the Department, he plays a vital role in academic planning, curriculum development, and maintaining the quality of education. He is committed to creating an innovative and research-oriented learning environment where students can develop strong technical and leadership skills.Prof. King has published numerous research papers in internationally recognized journals and conferences. His research interests include software architecture, distributed systems, cloud computing, and artificial intelligence.He actively encourages students and faculty members to engage in research, collaborative projects, and industry partnerships to enhance academic excellence and professional growth. His leadership continues to guide the department towards success and innovation.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Software Architecture<br>Cloud Computing<br>Distributed Systems<br>Artificial Intelligence<br>System Design<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Software Engineering</span>', '3'),
(10, 'Dr. Sophia Bennett', 'Assistant Professor', 'Faculty/Faculty-1774994213.jpg', '<span><b>Phone:</b> +1 650-555-0839<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">sophia.bennett@unipix.edu</a><br><b>Present Address:</b> 120 Software Park Drive, Palo Alto, California, USA<br><b>Permanent Address:</b> 36 Lakeview Avenue, San Jose, California, USA<br><b>National ID No:</b> 874193625048<br><b>Job ID No:</b> UNI-SE-1964<br><b>Sex:</b> Female<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Science in Software Engineering, University of California, Irvine, USA<br>Master of Science in Computer Science, Stanford University, USA<br>Ph.D. in Software Engineering, Carnegie Mellon University, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Dr. Sophia Bennett is a highly skilled academic and researcher with over 9 years of experience in teaching and research in Software Engineering. She has taught various subjects including software development, system design, web engineering, and software testing.She is dedicated to providing a modern and interactive learning environment where students can develop strong programming and software development skills. Her teaching approach focuses on project-based learning, real-world applications, and collaborative development practices.Dr. Bennett has contributed to several international research publications and conferences. Her research interests include software architecture, web technologies, agile development, and cloud-based systems.She encourages students to participate in software development projects, hackathons, and research activities to enhance their practical knowledge and career readiness.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Software Architecture<br>Web Development<br>Agile Development<br>Cloud Computing<br>Software Testing<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Software Engineering</span>', '3'),
(11, 'Prof. Ethan Richardson', 'Professor', 'Faculty/Faculty-1774996251.jpg', '<div><div><div><div><div><div><div><span><b>Phone:</b> +1 408-555-0875<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">ethan.richardson@unipix.edu</a><br><b>Present Address:</b> 175 Tech Valley Boulevard, San Jose, California, USA<br><b>Permanent Address:</b> 48 Oakwood Street, Portland, Oregon, USA<br><b>National ID No:</b> 736492815027<br><b>Job ID No:</b> UNI-SE-3112<br><b>Sex:</b> Male<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Science in Computer Science, University of Oregon, USA<br>Master of Science in Software Engineering, University of Washington, USA<br>Ph.D. in Software Engineering, Stanford University, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Ethan Richardson is a highly experienced academic and researcher with over 13 years of experience in teaching and research in Software Engineering. He has taught a wide range of subjects including software development, system design, database systems, and web engineering.He is dedicated to delivering quality education through a combination of theoretical knowledge and practical applications. His teaching methodology focuses on project-based learning, real-world case studies, and collaborative development practices.Prof. Richardson has published several research papers in international journals and conferences. His research interests include software architecture, cloud computing, web technologies, and scalable systems.He actively encourages students to participate in research, internships, and software development projects to enhance their technical skills and professional growth.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Software Architecture<br>Cloud Computing<br>Web Technologies<br>Scalable Systems<br>Database Systems<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Software Engineering</span></div></div></div></div></div></div></div>', '3'),
(12, 'Dr. Lucas Bennett', 'Assistant Professor', 'Faculty/Faculty-1774996597.jpg', '<span><b>Phone: </b>+1 510-555-0821<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">lucas.bennett@unipix.edu</a><br><b>Present Address:</b> 132 Innovation Drive, Oakland, California, USA<br><b>Permanent Address:</b> 27 Cedar Street, Fresno, California, USA<br><b>National ID No:</b> 845217936028<br><b>Job ID No:</b> UNI-SE-3224<br><b>Sex:</b> Male<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Science in Computer Science, University of California, Davis, USA<br>Master of Science in Software Engineering, University of Southern California, USA<br>Ph.D. in Computer Science, University of California, Irvine, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Dr. Lucas Bennett is a motivated academic and researcher with over 8 years of experience in teaching and research in Software Engineering. He has taught subjects such as programming, database systems, software testing, and web development.He is committed to providing a modern and engaging learning environment where students can develop strong programming skills and practical knowledge. His teaching approach emphasizes hands-on practice, project-based learning, and real-world problem solving.Dr. Bennett has contributed to several research publications and conferences. His research interests include software testing, web technologies, cloud-based applications, and agile development.He encourages students to participate in coding competitions, software projects, and research activities to enhance their technical skills and career readiness.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Software Testing<br>Web Development<br>Cloud Computing<br>Agile Development<br>Database Systems<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Software Engineering</span>', '3'),
(13, 'Prof. Adrian Caldwell', 'Professor & Head', 'Faculty/Faculty-1774998952.jpg', '<span><b>Phone:</b> +1 415-555-0966<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">adrian.caldwell@unipix.edu</a><br><b>Present Address:</b> 180 Data Innovation Park, San Francisco, California, USA<br><b>Permanent Address:</b> 62 Lakeview Drive, Seattle, Washington, USA<br><b>National ID No:</b> 793615284027<br><b>Job ID No:</b> UNI-DS-4001<br><b>Sex:</b> Male<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Science in Computer Science, University of Washington, USA<br>Master of Science in Data Science, Columbia University, USA<br>Ph.D. in Data Science and Artificial Intelligence, Massachusetts Institute of Technology (MIT), USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Adrian Caldwell is a highly experienced academician, researcher, and administrator with more than 17 years of experience in the field of Data Science and Artificial Intelligence. He has extensive expertise in data analysis, machine learning, big data technologies, and predictive modeling.As the Head of the Department, he plays a crucial role in academic leadership, curriculum development, and maintaining the quality of education. He is dedicated to building a research-oriented and innovation-driven learning environment where students can develop strong analytical and technical skills.Prof. Caldwell has published numerous research papers in internationally recognized journals and conferences. His research interests include machine learning, big data analytics, deep learning, and data-driven decision-making systems.He actively encourages students and faculty members to participate in research, industry collaborations, and innovative projects to enhance academic excellence and professional growth. His leadership continues to guide the department towards success in the rapidly evolving field of data science.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Machine Learning<br>Big Data Analytics<br>Deep Learning<br>Data Mining<br>Predictive Modeling<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Data Science</span>', '4'),
(14, 'Dr. Elena Morris', 'Associate Professor', 'Faculty/Faculty-1774999303.jpg', '<span><b>Phone:</b> +1 347-555-0894<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">elena.morris@unipix.edu</a><br><b>Present Address:</b> 95 Data Science Avenue, New York, USA<br><b>Permanent Address:</b> 28 Willow Street, Boston, Massachusetts, USA<br><b>National ID No:</b> 864219735082<br><b>Job ID No:</b> UNI-DS-4125<br><b>Sex:</b> Female<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Science in Statistics, University of California, Los Angeles (UCLA), USA<br>Master of Science in Data Science, New York University, USA<br>Ph.D. in Machine Learning and Data Analytics, University of California, Berkeley, USA<br></span><br><u><b>PROFESSIONAL EXPERIENCE:</b></u><br>Dr. Elena Morris is an experienced academic and researcher with over 10 years of teaching and research experience in Data Science. She has expertise in statistical analysis, machine learning, and data visualization.She is committed to delivering high-quality education through a combination of theoretical knowledge and practical applications. Her teaching methodology focuses on real-world data analysis, project-based learning, and research-driven approaches.Dr. Morris has published several research papers in international journals and conferences. Her research interests include machine learning, data mining, big data analytics, and predictive modeling.She actively encourages students to participate in research projects, data competitions, and industry collaborations to enhance their analytical and technical skills.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Machine Learning<br>Data Mining<br>Big Data Analytics<br>Data Visualization<br>Predictive Modeling<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Data Science</span>', '4'),
(15, 'Dr. Victor Langford', 'Associate Professor', 'Faculty/Faculty-1774999737.jpg', '<span><b>Phone:</b> +1 646-555-0916<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">victor.langford@unipix.edu</a><br><b>Present Address:</b> 210 Analytics Drive, New York, USA<br><b>Permanent Address:</b> 47 Riverstone Avenue, Chicago, Illinois, USA<br><b>National ID No:</b> 752941638205<br><b>Job ID No:</b> UNI-DS-4238<br><b>Sex:</b> Male<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Science in Computer Science, University of Illinois, USA<br>Master of Science in Data Analytics, University of Texas at Austin, USA<br>Ph.D. in Data Science, Carnegie Mellon University, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Dr. Victor Langford is a skilled academic and researcher with over 11 years of experience in teaching and research in the field of Data Science. He has taught various subjects including data analysis, machine learning, statistics, and big data technologies.He is dedicated to providing a dynamic learning environment where students can develop strong analytical thinking and technical skills. His teaching approach emphasizes real-world data applications, project-based learning, and research-oriented activities.Dr. Langford has published several research papers in international journals and conferences. His research interests include machine learning, big data analytics, data visualization, and predictive modeling.He actively encourages students to participate in data-driven research, competitions, and industry collaborations to enhance their skills and career opportunities.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Machine Learning<br>Big Data Analytics<br>Data Visualization<br>Predictive Modeling<br>Statistical Modeling<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Data Science</span>', '4'),
(16, 'Prof. Lily Harper', 'Professor', 'Faculty/Faculty-1775000115.jpg', '<span>Phone: +1 408-555-0937<br>Email: <a target=\"_blank\" rel=\"nofollow\">lily.harper@unipix.edu</a><br>Present Address: 155 Data Analytics Park, San Jose, California, USA<br>Permanent Address: 22 River Lane, Sacramento, California, USA<br>National ID No: 691842735026<br>Job ID No: UNI-DS-4351<br>Sex: Female<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Science in Mathematics, University of California, Davis, USA<br>Master of Science in Data Science, Stanford University, USA<br>Ph.D. in Data Analytics, University of California, Berkeley, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Lily Harper is a dedicated academic and researcher with over 8 years of experience in teaching and research in Data Science. She has expertise in data analytics, statistical modeling, and machine learning.She is committed to providing a modern and engaging learning environment where students can develop strong analytical and technical skills. Her teaching approach focuses on hands-on data analysis, real-world datasets, and project-based learning.Prof. Harper has contributed to several research publications and international conferences. Her research interests include data visualization, machine learning, predictive analytics, and big data technologies.She encourages students to participate in research projects, data competitions, and industry collaborations to enhance their practical skills and career readiness.<br><br><u><b>AREA OF INTEREST:</b></u><br><span>Data Analytics<br>Machine Learning<br>Predictive Analytics<br>Data Visualization<br>Big Data<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Data Science</span>', '4'),
(17, 'Prof. David Wilson', 'Professor & Head', 'Faculty/Faculty-1774729504.jpg', '<b>Phone: </b>+44 7700 900456<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">david.wilson@unipix.edu</a><br><b>Present Address:</b> 22 Oxford Street, London, United Kingdom<br><b>Permanent Address:</b> 78 King Street, Manchester, United Kingdom<br><b>National ID No: </b>594738261045<br><b>Job ID No:</b> UNI-EEE-2031<br><b>Sex:</b><span> Male<br><br></span><b><u>ACADEMIC QUALIFICATIONS:</u></b>\r\n<br><span>Bachelor of Science in Electrical Engineering, University of Manchester, UK<br>\r\nMaster of Science in Electronic Engineering, University of Cambridge, UK<br>\r\nPh.D. in Electrical and Electronic Engineering, Imperial College London, UK<br></span>\r\n<br><b><u>PROFESSIONAL EXPERIENCE:</u></b><u>\r\n</u><br>Prof. David Wilson is a highly experienced academic and researcher with more than 15 years of teaching experience in the field of Electrical and Electronic Engineering. He has taught various subjects including electrical circuits, power systems, control systems, and communication engineering.\r\nHe is known for his strong commitment to academic excellence and his ability to deliver complex engineering concepts in a clear and understandable manner. His teaching methodology focuses on practical applications, research-based learning, and student engagement.\r\nProf. Wilson has been actively involved in research activities and has contributed to several international journals and conferences. His research interests include power systems, renewable energy, smart grids, and electrical automation.\r\nHe encourages students to participate in research projects, laboratory work, and industrial training programs to enhance their technical and professional skills. His goal is to develop competent engineers who can contribute to technological advancement and innovation.\r\n<br><br><b><u>AREA OF INTEREST:</u></b>\r\n<br><span>Power Systems<br>\r\nRenewable Energy<br>\r\nControl Systems<br>\r\nElectrical Machines<br>\r\nSmart Grid Technology<br></span>\r\n<br><span><b><u>DEPARTMENT:</u></b><br>Computer Science &amp; Engineering</span>', '1'),
(18, 'Prof. Catherine Tresa', 'Professor & Head', 'Faculty/Faculty-1775078595.jpg', '<span><b>Phone:</b> +1 312-555-0957<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">catherine.tresa@unipix.edu</a><br><b>Present Address:</b> 210 Economic Research Center, Chicago, Illinois, USA<br><b>Permanent Address:</b> 44 Brookside Avenue, Boston, Massachusetts, USA<br><b>National ID No:</b> 826417935028<br><b>Job ID No:</b> UNI-ECO-6001<br><b>Sex:</b> Female<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Science in Economics, University of Chicago, USA<br>Master of Science in Applied Economics, Harvard University, USA<br>Ph.D. in Economics, Massachusetts Institute of Technology (MIT), USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Catherine Tresa is a highly experienced academician, researcher, and administrator with more than 18 years of experience in the field of Economics. She has extensive expertise in microeconomics, macroeconomics, econometrics, and development economics. As the Head of the Department, she plays a key role in academic leadership, curriculum development, and maintaining high standards of education. She is committed to creating a research-oriented and intellectually stimulating environment where students can develop strong analytical and decision-making skills. Prof. Tresa has published numerous research papers in internationally recognized journals and has participated in global economic conferences. Her research interests include economic policy, international trade, economic development, and financial systems.She actively encourages students and faculty members to engage in research, policy analysis, and real-world economic studies. Her leadership continues to guide the department towards academic excellence and innovation.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Microeconomics<br>Macroeconomics<br>Econometrics<br>International Trade<br>Economic Development<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Economics</span>', '6'),
(19, 'Prof. Benjamin Carter', 'Professor & Head', 'Faculty/Faculty-1775084956.jpg', '<span><b>Phone:</b> +1 212-555-0973<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">benjamin.carter@unipix.edu</a><br><b>Present Address: </b>300 Business Plaza, New York, USA<br><b>Permanent Address:</b> 55 Park Avenue, Chicago, Illinois, USA<br><b>National ID No:</b> 826395174028<br><b>Job ID No: </b>UNI-BBA-7001<br><b>Sex:</b> Male<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Business Administration, University of Chicago, USA<br>Master of Business Administration (MBA), Harvard Business School, USA<br>Ph.D. in Business Administration, Stanford University, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Benjamin Carter is a highly experienced academic, researcher, and administrator with over 18 years of experience in the field of Business Administration. He has extensive expertise in management, finance, marketing, and organizational leadership.As the Head of the Department, he plays a crucial role in academic leadership, curriculum development, and maintaining the quality of education. He is committed to creating a dynamic and industry-oriented learning environment where students can develop strong managerial and leadership skills.Prof. Carter has published numerous research papers in internationally recognized journals and has participated in global business conferences. His research interests include strategic management, business analytics, organizational behavior, and entrepreneurship.He actively encourages students to participate in internships, business case competitions, and research projects to enhance their practical knowledge and professional development. His leadership continues to guide the department towards excellence and innovation.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Strategic Management<br>Business Analytics<br>Organizational Behavior<br>Entrepreneurship<br>Financial Management<br></span><span><br><u><b>DEPARTMENT:</b></u><br>Business Administration</span>', '7'),
(20, 'Prof. Anthony Wilson', 'Professor & Head', 'Faculty/Faculty-1775147525.jpg', '<span><b>Phone:</b> +1 646-555-0975<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">anthony.wilson@unipix.edu</a><br><b>Present Address:</b> 310 Legal Studies Building, New York, USA<br><b>Permanent Address:</b> 52 Court Street, Washington, D.C., USA<br><b>National ID No:</b> 864217395028<br><b>Job ID No:</b> UNI-LAW-8001<br><b>Sex:</b> Male<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Laws (LL.B), Georgetown University, USA<br>Master of Laws (LL.M), Harvard Law School, USA<br>Ph.D. in Law &amp; Justice, Yale University, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Anthony Wilson is a highly experienced academic, legal expert, and administrator with over 19 years of experience in the field of Law &amp; Justice. He has extensive expertise in constitutional law, criminal law, human rights, and international law.As the Head of the Department, he plays a vital role in academic leadership, curriculum development, and maintaining the quality of legal education. He is committed to creating a disciplined and intellectually stimulating environment where students can develop strong legal reasoning, ethical values, and professional skills. Prof. Wilson has published numerous research papers in internationally recognized law journals and has participated in global legal conferences and seminars. His research interests include constitutional law, human rights law, international justice systems, and legal reforms.He actively encourages students to participate in moot courts, legal research, and internships to gain practical experience and enhance their professional development. His leadership continues to guide the department towards academic excellence and justice-oriented education.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Constitutional Law<br>Criminal Law<br>Human Rights Law<br>International Law<br>Legal Ethics<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Law &amp; Justice</span>', '8'),
(26, 'Dr. Michael Brown', 'Professor', 'Faculty/Faculty-1774727556.jpg', '<span><b>Phone:</b>&nbsp;</span>+1 415-555-0824<br><span><b>Email:</b>&nbsp;</span>michael.brown@unipix.edu<br><span><b>Present Address:</b>&nbsp;</span>45 Green Valley Avenue, Brooklyn, New York, USA<br><b>Permanent Address:&nbsp;</b>18 Lakeview Street, Austin, Texas, USA<br><b>National ID No:</b> 487521963874<br><b>Job ID No:</b> UNI-CSE-1024<br><span><b>Sex:</b> Male<br><br></span><b><u>ACADEMIC QUALIFICATIONS:</u></b>\r\n<br><span>Bachelor of Science in Computer Science, University of California, Berkeley, USA<br>\r\nMaster of Science in Software Engineering, Stanford University, USA<br>\r\nPh.D. in Computer Science, Massachusetts Institute of Technology (MIT), USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b>\r\n<br>Dr. Michael Brown is a dedicated academic and researcher with extensive experience in teaching and research in the field of Computer Science and Engineering. He has been involved in higher education for more than 12 years and has taught a variety of courses including programming, software engineering, database systems, data structures, and artificial intelligence.\r\nHe is highly committed to creating an interactive and student-friendly learning environment where students can develop both theoretical understanding and practical skills. His teaching approach emphasizes critical thinking, problem-solving, and innovation.\r\nDr. Brown has also participated in several academic research projects and international conferences. His research interests include software development, machine learning, cloud computing, and intelligent systems. He has published a number of articles in reputed journals and conference proceedings.\r\nAs a faculty member, he always encourages students to take part in research, project development, and skill-based learning activities. His goal is to prepare students for academic excellence and successful professional careers in the modern technological world.<br>\r\n<br><b><u>AREA OF INTEREST:</u></b>\r\n<br><span>Software Engineering<br>\r\nArtificial Intelligence<br>\r\nMachine Learning<br>\r\nDatabase Systems<br>\r\nCloud Computing<br></span>\r\n<br><span><b><u>DEPARTMENT:</u></b><br>Computer Science &amp; Engineering</span>&nbsp;', '1'),
(27, 'Prof. Sarah Davis', 'Professor', 'Faculty/Faculty-1774732173.jpg', '<span><b>Phone: </b>+44 7700 900789<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">sarah.davis@unipix.edu</a><br><b>Present Address:</b> 56 Oxford Lane, London, United Kingdom<br><b>Permanent Address: </b>12 Queen Street, Birmingham, United Kingdom<br><b>National ID No:</b> 728451936204<br><b>Job ID No: </b>UNI-CSE-6022<br><b>Sex: </b>Female<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Science in Software Engineering, University of Manchester, UK<br>Master of Science in Computer Systems, University of Cambridge, UK<br>Ph.D. in Computer Science, University College London (UCL), UK<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Sarah Davis is a highly skilled academic with more than 11 years of experience in teaching and research in software engineering and computer systems.She focuses on delivering quality education through modern teaching methods, including practical sessions, real-life case studies, and collaborative learning. She is committed to developing students’ problem-solving abilities and technical expertise.Her research interests include software engineering, cloud computing, and system architecture. She actively supports students in research and development activities.<br><span><br><b><u>AREA OF INTEREST:</u></b><br>Software Engineering<br>Cloud Computing<br>System Design<br>Web Development<br>Computer Systems<br></span><span><br><b><u>DEPARTMENT:</u></b> <br>Computer Science &amp; Engineering</span>', '1'),
(28, 'Dr. Emily Johnson', 'Assistant Professor', 'Faculty/Faculty-1774731995.jpg', '<span><b>Phone:</b> +1 415-555-0612<br><b>Email: </b><a target=\"_blank\" rel=\"nofollow\">emily.johnson@unipix.edu</a><br><b>Present Address:</b> 78 Tech Valley Road, San Jose, California, USA<br><b>Permanent Address:</b> 25 Lake Street, Dallas, Texas, USA<br><b>National ID No: </b>563829174205<br><b>Job ID No:</b> UNI-CSE-6011<br><b>Sex:</b> Female<br></span><br><u><b>ACADEMIC QUALIFICATIONS:</b></u><br><span>Bachelor of Science in Computer Science, University of Texas, USA<br>Master of Science in Data Science, Columbia University, USA<br>Ph.D. in Artificial Intelligence, Stanford University, USA</span>P<br><br><b><u>ROFESSIONAL EXPERIENCE:</u></b><br>Dr. Emily Johnson is an experienced academician and researcher with over 10 years of teaching experience in Computer Science and Engineering. She specializes in artificial intelligence, data science, and machine learning.She is dedicated to creating an interactive and research-oriented learning environment where students can develop innovative ideas and technical skills. Her teaching approach focuses on practical implementation, project-based learning, and real-world problem-solving.She has published several research papers in international journals and actively participates in conferences. She encourages students to engage in research and innovative projects.<br><span><br><b><u>AREA OF INTEREST:</u></b><br>Artificial Intelligence<br>Machine Learning<br>Data Science<br>Deep Learning<br></span><div>Data Analytics</div><span><br><b><u>DEPARTMENT:</u></b> <br>Computer Science &amp; Engineering</span>', '1'),
(29, 'Prof. Charles Allen', 'Professor', 'Faculty/Faculty-1774986861.jpg', '<span><b>Phone: </b>+1 646-555-0745<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">charles.allen@unipix.edu</a><br><b>Present Address:</b> 85 Power Grid Avenue, Los Angeles, California, USA<br><b>Permanent Address:</b> 39 Oakwood Drive, Houston, Texas, USA<br><b>National ID No:</b> 806314729158<br><b>Job ID No:</b> UNI-EEE-1142<br><b>Sex:</b> Male<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Science in Electrical Engineering, University of Texas, USA<br>Master of Science in Electrical Power Engineering, Georgia Institute of Technology, USA<br>Ph.D. in Electrical and Electronic Engineering, University of California, Berkeley, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Charles Allen is a highly experienced academician and researcher with over 15 years of teaching experience in the field of Electrical and Electronic Engineering. He has taught a variety of core subjects including electrical circuits, power systems, control systems, and electrical machines.He is known for his strong commitment to academic excellence and his ability to simplify complex engineering concepts for students. His teaching methodology emphasizes practical learning, laboratory work, and real-world applications.Prof. Allen has been actively involved in research and has published numerous papers in internationally recognized journals and conferences. His research interests include power generation, renewable energy systems, smart grid technologies, and industrial automation.He actively motivates students to participate in research, innovation, and industrial training programs. His goal is to develop skilled engineers who can contribute effectively to the advancement of modern technology and sustainable energy solutions.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Power Systems<br>Renewable Energy<br>Smart Grid Technology<br>Electrical Machines<br>Industrial Automation<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Electrical &amp; Electronic Engineering</span>', '2'),
(30, 'Prof. Charlotte White', 'Professor', 'Faculty/Faculty-1774985193.jpg', '<span><b>Phone:</b> +44 7700 900678<br><b>Email: </b><a target=\"_blank\" rel=\"nofollow\">charlotte.white@unipix.edu</a><br><b>Present Address:</b> 32 Engineering Park Road, London, United Kingdom<br><b>Permanent Address:</b> 14 Rosewood Avenue, Leeds, United Kingdom<br><b>National ID No:</b> 682419375204<br><b>Job ID No:</b> UNI-EEE-9245<br><b>Sex:</b> Female<br></span><br><u><b>ACADEMIC QUALIFICATIONS:</b></u><br><span>Bachelor of Science in Electrical Engineering, University of Leeds, UK<br>Master of Science in Power Systems Engineering, University of Manchester, UK<br>Ph.D. in Electrical and Electronic Engineering, Imperial College London, UK<br></span><br><u><b>PROFESSIONAL EXPERIENCE:</b></u><br>Prof. Charlotte White is a highly experienced academic and researcher with over 13 years of teaching experience in Electrical and Electronic Engineering. She has taught various core subjects including power systems, electrical machines, control systems, and energy engineering.She is committed to delivering high-quality education through a combination of theoretical knowledge and practical applications. Her teaching approach focuses on laboratory-based learning, real-world case studies, and innovative problem-solving techniques.Prof. White has contributed to numerous international research publications and conferences. Her research interests include renewable energy systems, smart grid technology, power distribution, and energy management.She actively encourages students to participate in research projects, technical competitions, and industrial training programs to enhance their practical skills and professional development. Her goal is to prepare students to become efficient and innovative engineers capable of contributing to modern energy solutions.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Power Systems<br>Renewable Energy<br>Smart Grid Technology<br>Energy Management<br>Electrical Machines<br></span><span><br><u><b>DEPARTMENT:</b></u><br>Electrical &amp; Electronic Engineering</span>', '2'),
(31, 'Prof. Steven Collins', 'Associate Professor', 'Faculty/Faculty-1774990948.jpg', '<span><b>Phone:</b> +1 646-555-0972<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">steven.collins@unipix.edu</a><br><b>Present Address:</b> 92 Electric Avenue, New York, USA<br><b>Permanent Address:</b> 15 Cedar Lane, Atlanta, Georgia, USA<br><b>National ID No:</b> 582914736025<br><b>Job ID No:</b> UNI-EEE-1428<br><b>Sex: </b>Male<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Science in Electrical Engineering, Georgia Institute of Technology, USA<br>Master of Science in Electronic Engineering, University of California, Los Angeles (UCLA), USA<br>Ph.D. in Electrical and Electronic Engineering, Stanford University, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Steven Collins is a highly experienced academic and researcher with more than 12 years of teaching experience in Electrical and Electronic Engineering. He has taught various subjects including electrical circuits, control systems, communication engineering, and power electronics.He is committed to providing quality education through a balanced approach of theoretical knowledge and practical applications. His teaching style focuses on laboratory-based learning, real-world problem solving, and student engagement.Prof. Collins has contributed to several international research journals and conferences. His research interests include communication systems, embedded systems, renewable energy technologies, and electrical automation.He encourages students to participate in research activities, technical projects, and industrial training to develop their professional skills and stay updated with modern technologies.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Communication Systems<br>Embedded Systems<br>Renewable Energy<br>Power Electronics<br>Control Systems<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Electrical &amp; Electronic Engineering</span>', '2');
INSERT INTO `faculty` (`id`, `name`, `designation`, `picture`, `details`, `dept`) VALUES
(32, 'Dr. Chloe Mitchell', 'Associate Professor', 'Faculty/Faculty-1774994807.jpg', '<span><b>Phone:</b> +1 702-555-0861<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">chloe.mitchell@unipix.edu</a><br><b>Present Address:</b> 150 Tech Valley Road, Las Vegas, Nevada, USA<br><b>Permanent Address:</b> 27 Sunset Drive, Phoenix, Arizona, USA<br><b>National ID No:</b> 781945263084<br><b>Job ID No:</b> UNI-SE-2186<br><b>Sex:</b> Female<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Science in Computer Science, University of Nevada, USA<br>Master of Science in Software Engineering, University of Southern California, USA<br>Ph.D. in Software Engineering, Stanford University, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Dr. Chloe Mitchell is an experienced academic and researcher with over 10 years of teaching experience in Software Engineering and Computer Science. She has taught courses such as software development, database systems, web technologies, and mobile application development.She is passionate about delivering quality education through modern teaching approaches, including project-based learning, hands-on practice, and real-world problem-solving. Her classes focus on building strong programming skills and developing innovative software solutions.Dr. Mitchell has published several research papers in international journals and conferences. Her research interests include mobile computing, software design, cloud-based applications, and human-computer interaction.She actively encourages students to participate in research, hackathons, and software development projects to enhance their technical and professional skills.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Mobile Application Development<br>Software Design<br>Cloud Computing<br>Human-Computer Interaction<br>Web Technologies<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Software Engineering</span>', '3'),
(33, 'Prof. Jonathan Blake', 'Professor & Head', 'Faculty/Faculty-1775046404.jpg', '<span><b>Phone:</b> +44 7700 900845<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">jonathan.blake@unipix.edu</a><br><b>Present Address:</b> 45 Literary Avenue, London, United Kingdom<br><b>Permanent Address:</b> 18 Oxford Road, Cambridge, United Kingdom<br><b>National ID No:</b> 728194563027<br><b>Job ID No: </b>UNI-ENG-5001<br><b>Sex: </b>Male<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Arts in English Literature, University of Oxford, UK<br>Master of Arts in English Language and Literature, University of Cambridge, UK<br>Ph.D. in English Literature, University College London (UCL), UK<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Jonathan Blake is a highly experienced academician, researcher, and administrator with over 18 years of experience in the field of English Language and Literature. He has taught a wide range of courses including English literature, linguistics, critical theory, and academic writing.As the Head of the Department, he plays a significant role in academic planning, curriculum development, and maintaining the quality of education. He is committed to creating a dynamic and intellectually stimulating learning environment where students can develop strong analytical, communication, and writing skills.Prof. Blake has published numerous research papers in reputed international journals and has contributed to various literary conferences and seminars. His research interests include modern literature, literary criticism, comparative literature, and language studies.He encourages students to engage in research, creative writing, and literary activities to enhance their academic and professional development. His leadership continues to guide the department towards academic excellence and innovation.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>English Literature<br>Linguistics<br>Literary Criticism<br>Comparative Literature<br>Creative Writing<br></span><span><br><b><u>DEPARTMENT:</u></b><br>English</span>', '5'),
(34, 'Dr. Kevin Brooks', 'Assistant Professor', 'Faculty/Faculty-1774991553.jpg', '<span><b>Phone:</b> +1 720-555-0883<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">kevin.brooks@unipix.edu</a><br><b>Present Address:</b> 140 Energy Drive, Denver, Colorado, USA<br><b>Permanent Address:</b> 29 Forest Lane, Kansas City, Missouri, USA<br><b>National ID No:</b> 904728156392<br><b>Job ID No:</b> UNI-EEE-1537<br><b>Sex:</b> Male<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Science in Electrical Engineering, University of Colorado, USA<br>Master of Science in Power Systems Engineering, Purdue University, USA<br>Ph.D. in Electrical and Electronic Engineering, University of Michigan, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Dr. Kevin Brooks is an experienced academic and researcher with over 10 years of teaching and research experience in Electrical and Electronic Engineering. He has taught subjects such as electrical circuits, power systems, electrical machines, and control systems.He is committed to delivering high-quality education by combining theoretical knowledge with practical applications. His teaching approach emphasizes laboratory work, project-based learning, and real-world engineering problem solving.Dr. Brooks has published several research papers in international journals and conferences. His research interests include power systems, renewable energy technologies, smart grid systems, and electrical automation.He encourages students to actively participate in research, innovation, and industrial training programs to enhance their technical skills and professional development.<br><br><u><b>AREA OF INTEREST:</b></u><br><span>Power Systems<br>Renewable Energy<br>Smart Grid Technology<br>Electrical Machines<br>Control Systems<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Electrical &amp; Electronic Engineering</span>', '2'),
(35, 'Dr. Natalie Green', 'Assistant Professor', 'Faculty/Faculty-1774992165.jpg', '<span><b>Phone:</b> +1 305-555-0726<br><b>Email: </b><a target=\"_blank\" rel=\"nofollow\">natalie.green@unipix.edu</a><br><b>Present Address:</b> 66 Innovation Park, Miami, Florida, USA<br><b>Permanent Address:</b> 21 Palm Street, Orlando, Florida, USA<br><b>National ID No:</b> 735829164027<br><b>Job ID No:</b> UNI-EEE-1649<br><b>Sex:</b> Female<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Science in Electrical Engineering, University of Florida, USA<br>Master of Science in Communication Engineering, University of California, San Diego, USA<br>Ph.D. in Electrical and Electronic Engineering, University of Southern California, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Dr. Natalie Green is a dedicated academic and researcher with more than 9 years of teaching experience in Electrical and Electronic Engineering. She has expertise in communication systems, signal processing, and embedded technologies.She is passionate about delivering high-quality education and focuses on building strong conceptual understanding along with practical skills. Her teaching approach includes laboratory-based learning, real-world applications, and interactive classroom sessions.Dr. Green has contributed to several research publications and international conferences. Her research interests include wireless communication, signal processing, embedded systems, and smart technologies.She actively encourages students to participate in research projects, innovation programs, and technical competitions to enhance their professional skills and career opportunities.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Communication Systems<br>Signal Processing<br>Embedded Systems<br>Wireless Communication<br>Smart Technologies<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Electrical &amp; Electronic Engineering</span>', '2'),
(36, 'Dr. Ryan Cooper', 'Associate Professor', 'Faculty/Faculty-1774992925.jpg', '<span><b>Phone:</b> +1 408-555-0954<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">ryan.cooper@unipix.edu</a><br><b>Present Address:</b> 210 Silicon Tech Park, San Jose, California, USA<br><b>Permanent Address:</b> 48 Hill Street, San Diego, California, USA<br><b>National ID No:</b> 826394715208<br><b>Job ID No:</b> UNI-CSE-1742<br><b>Sex:</b> Male<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Science in Computer Science, University of California, San Diego, USA<br>Master of Science in Software Engineering, Stanford University, USA<br>Ph.D. in Computer Science, University of California, Berkeley, USA<br></span><br><u><b>PROFESSIONAL EXPERIENCE:</b></u><br>Dr. Ryan Cooper is a highly skilled academic and researcher with over 11 years of experience in teaching and research in the field of Computer Science and Engineering. He has taught a wide range of subjects including programming, data structures, algorithms, software engineering, and database systems.He is dedicated to creating an engaging and student-centered learning environment where students can develop strong technical and analytical skills. His teaching approach focuses on hands-on practice, project-based learning, and real-world problem-solving.Dr. Cooper has published several research papers in international journals and conferences. His research interests include artificial intelligence, data science, software development, and cloud computing.He encourages students to participate in research, coding competitions, and innovative projects to enhance their skills and prepare for future careers in the IT industry.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Artificial Intelligence<br>Data Science<br>Software Engineering<br>Cloud Computing<br>Algorithms<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Computer Science &amp; Engineering</span>', '1'),
(37, 'Prof. Hannah Scott', 'Associate Professor', 'Faculty/Faculty-1774993268.jpg', '<span><b>Phone: </b>+1 415-555-0987<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">hannah.scott@unipix.edu</a><br><b>Present Address:</b> 95 Tech Innovation Street, San Francisco, California, USA<br><b>Permanent Address:</b> 22 Maple Avenue, Sacramento, California, USA<br><b>National ID No:</b> 915826374509<br><b>Job ID No:</b> UNI-CSE-1856<br><b>Sex:</b> Female<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Science in Computer Science, University of California, Davis, USA<br>Master of Science in Information Technology, New York University, USA<br>Ph.D. in Computer Science, University of California, Berkeley, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Hannah Scott is an experienced academic and researcher with over 10 years of teaching experience in the field of Computer Science and Engineering. She has expertise in programming, software engineering, database systems, and web technologies.She is committed to delivering quality education through a balanced approach of theory and practical applications. Her teaching methodology focuses on interactive learning, project-based development, and real-world problem solving.Prof. Scott has actively contributed to research and has published several papers in international journals and conferences. Her research interests include web development, cloud computing, data science, and software systems.She encourages students to participate in research projects, coding competitions, and innovative software development activities to enhance their technical and professional skills.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Web Development<br>Cloud Computing<br>Data Science<br>Software Engineering<br>Database Systems<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Computer Science &amp; Engineering</span>', '1'),
(38, 'Prof. Isabella Turner', 'Professor', 'Faculty/Faculty-1774994441.jpg', '<span><b>Phone:</b> +1 925-555-0795<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">isabella.turner@unipix.edu</a><br><b>Present Address:</b> 88 Innovation Tech Boulevard, San Mateo, California, USA<br><b>Permanent Address: </b>19 Ocean View Drive, San Diego, California, USA<br><b>National ID No:</b> 659283741905<br><b>Job ID No:</b> UNI-SE-2075<br><b>Sex:</b> Female<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Science in Software Engineering, University of California, Los Angeles (UCLA), USA<br>Master of Science in Information Systems, Columbia University, USA<br>Ph.D. in Software Engineering, Massachusetts Institute of Technology (MIT), USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Isabella Turner is a highly experienced academic and researcher with more than 11 years of experience in the field of Software Engineering. She has taught subjects such as software development, system analysis, database systems, web engineering, and software project management.She is committed to delivering high-quality education through innovative teaching methods, including project-based learning, real-world case studies, and collaborative development practices. Her approach helps students develop both technical expertise and teamwork skills.Prof. Turner has been actively involved in research and has published numerous papers in international journals and conferences. Her research interests include software architecture, cloud-based systems, web technologies, and scalable application development.She encourages students to participate in research projects, internships, and software development competitions to enhance their practical skills and professional growth.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Software Architecture<br>Cloud Computing<br>Web Technologies<br>Software Project Management<br>Scalable Systems<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Software Engineering</span>', '3'),
(39, 'Prof. Victoria Adams', 'Professor', 'Faculty/Faculty-1774995152.jpg', '<span><b>Phone:</b> +1 650-555-0918<br><b>Email: </b><a target=\"_blank\" rel=\"nofollow\">victoria.adams@unipix.edu</a><br><b>Present Address:</b> 210 Innovation Tech Park, Palo Alto, California, USA<br><b>Permanent Address:</b> 64 Riverdale Avenue, San Francisco, California, USA<br><b>National ID No:</b> 902715836420<br><b>Job ID No:</b> UNI-SE-2297<br><b>Sex:</b> Female<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Science in Software Engineering, University of California, Berkeley, USA<br>Master of Science in Computer Science, Stanford University, USA<br>Ph.D. in Software Engineering, Massachusetts Institute of Technology (MIT), USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Victoria Adams is a highly experienced academic and researcher with more than 14 years of experience in teaching and research in Software Engineering. She has taught various subjects including software architecture, system design, web engineering, and advanced software development.She is dedicated to providing high-quality education through innovative teaching methodologies, including project-based learning, real-world case studies, and collaborative development practices. Her approach helps students develop strong technical expertise along with leadership and teamwork skills.Prof. Adams has published numerous research papers in international journals and conferences. Her research interests include software architecture, cloud computing, scalable systems, and artificial intelligence integration.She actively encourages students to participate in research, internships, and software development competitions to enhance their practical knowledge and professional growth.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Software Architecture<br>Cloud Computing<br>Scalable Systems<br>Artificial Intelligence<br>Web Engineering<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Software Engineering</span>', '3'),
(40, 'Dr. Nathan Cole', 'Associate Professor', 'Faculty/Faculty-1774997141.jpg', '<span><b>Phone:</b> +1 925-555-0814<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">nathan.cole@unipix.edu</a><br><b>Present Address:</b> 210 Silicon Park Avenue, San Mateo, California, USA<br><b>Permanent Address:</b> 33 Elm Street, Sacramento, California, USA<br><b>National ID No:</b> 592814736025<br><b>Job ID No:</b> UNI-SE-3336<br><b>Sex:</b> Male<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Science in Computer Science, University of California, Santa Barbara, USA<br>Master of Science in Software Engineering, Stanford University, USA<br>Ph.D. in Computer Science, University of California, Los Angeles (UCLA), USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Dr. Nathan Cole is an experienced academic and researcher with over 11 years of teaching and research experience in Software Engineering and Computer Science. He has taught a variety of subjects including software development, database systems, system analysis, and web technologies.He is dedicated to providing quality education through a balanced approach of theoretical concepts and practical applications. His teaching methodology emphasizes project-based learning, collaborative development, and real-world problem-solving.Dr. Cole has published several research papers in international journals and conferences. His research interests include software architecture, cloud computing, data-driven applications, and distributed systems.He actively encourages students to participate in research projects, internships, and innovative software development activities to enhance their technical and professional skills.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Software Architecture<br>Cloud Computing<br>Distributed Systems<br>Data-Driven Applications<br>Web Technologies<br></span><span><br><u><b>DEPARTMENT:</b></u><br>Software Engineering</span>', '3'),
(41, 'Prof. Sebastian Hayes', 'Professor', 'Faculty/Faculty-1774997402.jpg', '<span><b>Phone:</b> +1 628-555-0978<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">sebastian.hayes@unipix.edu</a><br><b>Present Address:</b> 210 Innovation Valley, San Francisco, California, USA<br><b>Permanent Address:</b> 74 Silver Oak Drive, San Diego, California, USA<br><b>National ID No:</b> 845196273058<br><b>Job ID No:</b> UNI-SE-3559<br><b>Sex:</b> Male<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Science in Computer Science, University of California, Irvine, USA<br>Master of Science in Software Engineering, Stanford University, USA<br>Ph.D. in Software Systems, Carnegie Mellon University, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Sebastian Hayes is a distinguished academic and researcher with over 16 years of experience in teaching and research in Software Engineering. He has expertise in advanced software systems, distributed computing, and large-scale application development.He is known for his innovative teaching methods and focuses on real-world software development practices, project-based learning, and industry-oriented skills. His approach helps students build strong technical foundations and professional competence.Prof. Hayes has published numerous research papers in internationally recognized journals and conferences. His research interests include distributed systems, cloud computing, artificial intelligence integration, and scalable software architecture.He actively encourages students to participate in research, innovation, and collaborative software projects to enhance their skills and career opportunities.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Distributed Systems<br>Cloud Computing<br>Software Architecture<br>Artificial Intelligence<br>Scalable Systems<br></span><span><br><u><b>DEPARTMENT:</b></u><br>Software Engineering</span>', '3'),
(42, 'Prof. Julian Mercer', 'Professor', 'Faculty/Faculty-1775043396.jpg', '<span><b>Phone:</b> +1 347-555-0948<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">julian.mercer@unipix.edu</a><br><b>Present Address:</b> 220 Data Innovation Hub, New York, USA<br><b>Permanent Address:</b> 51 Brookside Avenue, Philadelphia, Pennsylvania, USA<br><b>National ID No:</b> 918473652084<br><b>Job ID No: </b>UNI-DS-4574<br><b>Sex:</b> Male<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Science in Computer Science, Pennsylvania State University, USA<br>Master of Science in Data Science, Columbia University, USA<br>Ph.D. in Machine Learning and Data Systems, University of Chicago, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Julian Mercer is a highly experienced academic and researcher with over 15 years of experience in teaching and research in Data Science. He has extensive expertise in machine learning, data mining, statistical analysis, and big data technologies.He is committed to delivering high-quality education through a combination of theoretical knowledge and practical applications. His teaching approach focuses on real-world data analysis, project-based learning, and research-driven innovation.Prof. Mercer has published numerous research papers in internationally recognized journals and conferences. His research interests include predictive modeling, deep learning, big data analytics, and intelligent data systems.He actively encourages students to participate in research projects, industry collaborations, and data-driven innovation activities to enhance their analytical and professional skills.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Machine Learning<br>Deep Learning<br>Big Data Analytics<br>Predictive Modeling<br>Data Mining<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Data Science</span>', '4'),
(43, 'Prof. Amelia Clarke', 'Assistant Professor', 'Faculty/Faculty-1775044379.jpg', '<span><b>Phone:</b> +1 646-555-0982<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">amelia.clarke@unipix.edu</a><br><b>Present Address:</b> 310 Data Science Plaza, New York, USA<br><b>Permanent Address:</b> 44 Riverbank Street, Boston, Massachusetts, USA<br><b>National ID No:</b> 784215963027<br><b>Job ID No:</b> UNI-DS-4686<br><b>Sex:</b> Female<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Science in Mathematics, University of California, Berkeley, USA<br>Master of Science in Data Science, Stanford University, USA<br>Ph.D. in Artificial Intelligence and Data Analytics, MIT, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Amelia Clarke is a distinguished academic and researcher with over 13 years of experience in teaching and research in Data Science. She has strong expertise in machine learning, data analytics, and artificial intelligence.She is committed to delivering high-quality education through innovative teaching approaches, including project-based learning, real-world data analysis, and research-oriented activities. Her teaching helps students develop strong analytical thinking and problem-solving abilities.Prof. Clarke has published numerous research papers in reputed international journals and conferences. Her research interests include deep learning, data mining, predictive analytics, and intelligent systems.She actively encourages students to engage in research projects, data competitions, and industry collaborations to enhance their practical skills and career development.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Machine Learning<br>Deep Learning<br>Data Mining<br>Predictive Analytics<br>Artificial Intelligence<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Data Science</span>', '4'),
(44, 'Prof. Aaron Whitaker', 'Assistant Professor', 'Faculty/Faculty-1775045081.jpg', '<span><b>Phone:</b> +1 415-555-0993<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">aaron.whitaker@unipix.edu</a><br><b>Present Address:</b> 140 Analytics Hub, San Francisco, California, USA<br><b>Permanent Address:</b> 26 Pinecrest Avenue, Portland, Oregon, USA<br><b>National ID No:</b> 673829145026<br><b>Job ID No:</b> UNI-DS-4798<br><b>Sex:</b> Male<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Science in Statistics, University of Oregon, USA<br>Master of Science in Data Science, University of Washington, USA<br>Ph.D. in Data Analytics, University of California, San Diego, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Aaron Whitaker is a dedicated academic and researcher with over 8 years of experience in teaching and research in Data Science. He has expertise in data analysis, statistical modeling, and machine learning.He focuses on delivering quality education through practical learning, real-world data analysis, and project-based teaching methods. His teaching approach helps students develop strong analytical thinking and problem-solving skills.Prof. Whitaker has contributed to several research publications and conferences. His research interests include predictive analytics, big data processing, data visualization, and machine learning applications.He encourages students to participate in research, data competitions, and industry collaborations to enhance their technical skills and professional growth.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Data Analytics<br>Machine Learning<br>Predictive Modeling<br>Data Visualization<br>Big Data<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Data Science</span>', '4'),
(45, 'Prof. Rachel Simmons', 'Professor', 'Faculty/Faculty-1775045412.jpg', '<span><b>Phone:</b> +1 212-555-0964<br><b>Email: </b><a target=\"_blank\" rel=\"nofollow\">rachel.simmons@unipix.edu</a><br><b>Present Address:</b> 260 Data Analytics Center, New York, USA<br><b>Permanent Address:</b> 17 Maple Grove, Albany, New York, USA<br><b>National ID No:</b> 918275643082<br><b>Job ID No:</b> UNI-DS-4810<br><b>Sex:</b> Female<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Science in Mathematics, University of New York, USA<br>Master of Science in Data Science, Columbia University, USA<br>Ph.D. in Data Analytics, University of Chicago, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Rachel Simmons is a dedicated academic and researcher with over 7 years of experience in teaching and research in Data Science. She specializes in statistical modeling, data visualization, and machine learning.She focuses on delivering quality education through practical applications, real-world datasets, and project-based learning. Her teaching approach helps students develop analytical thinking and problem-solving skills.Prof. Simmons has contributed to several research publications and conferences. Her research interests include data mining, predictive analytics, big data technologies, and machine learning applications.She actively encourages students to participate in research, data competitions, and collaborative projects to enhance their technical skills and professional development.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Data Visualization<br>Machine Learning<br>Predictive Analytics<br>Data Mining<br>Big Data<br></span><span><br><u><b>DEPARTMENT:</b></u><br>Data Science</span>', '4'),
(46, 'Prof. Leonard Shaw', 'Professor', 'Faculty/Faculty-1775045912.jpg', '<span><b>Phone:</b> +1 617-555-0928<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">leonard.shaw@unipix.edu</a><br><b>Present Address:</b> 275 Data Innovation Center, Boston, Massachusetts, USA<br><b>Permanent Address:</b> 61 Harbor Street, Providence, Rhode Island, USA<br><b>National ID No:</b> 835719264028<br><b>Job ID No:</b> UNI-DS-4922<br><b>Sex:</b> Male<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Science in Computer Science, Boston University, USA<br>Master of Science in Data Science, Harvard University, USA<br>Ph.D. in Artificial Intelligence and Data Analytics, MIT, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Leonard Shaw is a highly experienced academic and researcher with over 16 years of experience in teaching and research in Data Science. He has expertise in machine learning, big data analytics, and intelligent systems.He is committed to delivering high-quality education through a combination of theoretical knowledge and practical applications. His teaching approach focuses on real-world data analysis, research-based learning, and project-driven methodologies.Prof. Shaw has published numerous research papers in internationally recognized journals and conferences. His research interests include deep learning, predictive analytics, big data technologies, and data-driven decision-making systems.He actively encourages students to participate in research, innovation, and industry collaborations to enhance their analytical and professional skills.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Machine Learning<br>Deep Learning<br>Big Data Analytics<br>Predictive Modeling<br>Data Mining<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Data Science</span>', '4'),
(47, 'Prof. Sophie Turner', 'Assistant Professor', 'Faculty/Faculty-1775049947.jpg', '<span><b>Phone:</b> +44 7700 900912<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">sophie.turner@unipix.edu</a><br><b>Present Address:</b> 62 Literary Square, London, United Kingdom<br><b>Permanent Address:</b> 21 Rose Garden Street, Manchester, United Kingdom<br><b>National ID No:</b> 845291736028<br><b>Job ID No:</b> UNI-ENG-5124<br><b>Sex: </b>Female<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Arts in English Literature, University of Manchester, UK<br>Master of Arts in English Language and Linguistics, University of Leeds, UK<br>Ph.D. in English Studies, University of Birmingham, UK<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Sophie Turner is a dedicated academic and researcher with over 7 years of experience in teaching English Language and Literature. She has taught courses such as academic writing, linguistics, modern literature, and communication skills.She is committed to providing quality education through interactive teaching methods, including class discussions, presentations, and literary analysis. Her teaching approach focuses on developing students’ critical thinking, writing skills, and communication abilities.Prof. Turner has contributed to several research publications and academic conferences. Her research interests include modern literature, linguistics, discourse analysis, and creative writing.She encourages students to participate in literary activities, research projects, and writing competitions to enhance their academic and creative skills.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Modern Literature<br>Linguistics<br>Creative Writing<br>Discourse Analysis<br>Academic Writing<br></span><span><br><b><u>DEPARTMENT:</u></b><br>English</span>', '5'),
(48, 'Dr. Matthew Collins', 'Associate Professor', 'Faculty/Faculty-1775050538.jpg', '<span><b>Phone:</b> +44 7700 900733<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">matthew.collins@unipix.edu</a><br><b>Present Address:</b> 88 Literary Park, London, United Kingdom<br><b>Permanent Address:</b> 35 King Street, Birmingham, United Kingdom<br><b>National ID No:</b> 792614835027<br><b>Job ID No:</b> UNI-ENG-5236<br><b>Sex:</b> Male<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Arts in English Literature, University of Birmingham, UK<br>Master of Arts in English Language and Literature, University of Edinburgh, UK<br>Ph.D. in English Studies, University of Oxford, UK<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Dr. Matthew Collins is an experienced academic and researcher with over 10 years of teaching experience in English Language and Literature. He has taught courses such as literary theory, modern poetry, academic writing, and linguistics.He is dedicated to delivering quality education through interactive teaching methods, including group discussions, presentations, and analytical studies. His teaching approach focuses on enhancing students’ critical thinking, writing ability, and communication skills.Dr. Collins has published several research papers in international journals and has participated in various academic conferences. His research interests include modern literature, literary criticism, linguistics, and discourse analysis.He actively encourages students to participate in research, creative writing, and literary activities to enhance their academic and professional development.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Modern Literature<br>Literary Criticism<br>Linguistics<br>Discourse Analysis<br>Academic Writing<br></span><span><br><b><u>DEPARTMENT:</u></b><br>English</span>', '5'),
(49, 'Prof. Eleanor Hughes', 'Professor', 'Faculty/Faculty-1775068840.jpg', '<span><b>Phone:</b> +44 7700 900658<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">eleanor.hughes@unipix.edu</a><br><b>Present Address:</b> 72 Literary Crescent, London, United Kingdom<br><b>Permanent Address:</b> 19 Willow Road, Oxford, United Kingdom<br><b>National ID No:</b> 681924735028<br><b>Job ID No:</b> UNI-ENG-5347<br><b>Sex:</b> Female<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Arts in English Literature, University of Oxford, UK<br>Master of Arts in English Language and Literature, University of Cambridge, UK<br>Ph.D. in English Literature, University College London (UCL), UK<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Eleanor Hughes is a distinguished academic and researcher with over 15 years of experience in teaching English Language and Literature. She has taught a wide range of subjects including classical literature, modern literature, literary criticism, and linguistics.She is known for her engaging teaching style and dedication to academic excellence. Her teaching approach focuses on critical analysis, interpretative skills, and effective communication. She encourages students to explore literature deeply and develop their own perspectives.Prof. Hughes has published numerous research papers in international journals and has contributed to several academic conferences and literary forums. Her research interests include comparative literature, feminist literature, literary theory, and discourse analysis.She actively encourages students to participate in research, creative writing, and literary discussions to enhance their academic and intellectual growth.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Comparative Literature<br>Literary Theory<br>Feminist Literature<br>Discourse Analysis<br>Creative Writing<br></span><span><br><b><u>DEPARTMENT:</u></b><br>English</span>', '5'),
(50, 'Prof. Dominic Carter', 'Professor', 'Faculty/Faculty-1775070492.jpg', '<span><b>Phone:</b> +44 7700 900721<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">dominic.carter@unipix.edu</a><br><b>Present Address:</b> 55 Literary Gardens, London, United Kingdom<br><b>Permanent Address:</b> 23 Kingsway Road, Liverpool, United Kingdom<br><b>National ID No:</b> 754218936027<br><b>Job ID No: </b>UNI-ENG-5459<br><b>Sex:</b> Male<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Arts in English Literature, University of Leeds, UK<br>Master of Arts in English Language and Linguistics, University of Nottingham, UK<br>Ph.D. in English Literature, University of Cambridge, UK<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Dominic Carter is a highly experienced academic and researcher with over 14 years of experience in teaching English Language and Literature. He has taught a variety of subjects including modern literature, literary theory, linguistics, and academic writing.He is committed to delivering high-quality education through interactive teaching methods such as discussions, presentations, and critical analysis of literary texts. His teaching approach focuses on developing students’ analytical thinking, communication skills, and appreciation for literature.Prof. Carter has published several research papers in international journals and has participated in numerous academic conferences. His research interests include modern literature, postcolonial studies, linguistics, and literary criticism.He actively encourages students to engage in research, creative writing, and literary activities to enhance their academic and professional development.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Modern Literature<br>Postcolonial Studies<br>Linguistics<br>Literary Criticism<br>Academic Writing<br></span><span><br><b><u>DEPARTMENT:</u></b><br>English</span>', '5'),
(51, 'Dr. Rebecca Lawson', 'Associate Professor', 'Faculty/Faculty-1775070743.jpg', '<span><b>Phone:</b> +1 312-555-0986<br><b>Email: </b><a target=\"_blank\" rel=\"nofollow\">rebecca.lawson@unipix.edu</a><br><b>Present Address:</b> 120 Literary Avenue, Chicago, Illinois, USA<br><b>Permanent Address:</b> 48 Maple Street, Austin, Texas, USA<br><b>National ID No:</b> 862941735028<br><b>Job ID No:</b> UNI-ENG-5563<br><b>Sex:</b> Female<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Arts in English Literature, University of Texas, USA<br>Master of Arts in English Language and Literature, Columbia University, USA<br>Ph.D. in English Studies, University of Chicago, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Dr. Rebecca Lawson is an experienced academic and researcher with over 10 years of teaching experience in English Language and Literature. She has taught courses such as modern literature, American literature, academic writing, and linguistics.She is dedicated to delivering quality education through interactive teaching methods, including discussions, presentations, and literary analysis. Her teaching approach focuses on developing students’ critical thinking, writing ability, and communication skills.Dr. Lawson has published several research papers in international journals and has participated in various academic conferences. Her research interests include American literature, literary criticism, discourse analysis, and cultural studies.She actively encourages students to participate in research, creative writing, and literary activities to enhance their academic and professional development.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>American Literature<br>Literary Criticism<br>Discourse Analysis<br>Cultural Studies<br>Academic Writing<br></span><span><br><b><u>DEPARTMENT:</u></b><br>English</span>', '5'),
(52, 'Prof. Andrew Mitchell', 'Assistant Professor', 'Faculty/Faculty-1775071040.jpg', '<span><b>Phone: </b>+1 415-555-0902<br><b>Email: </b><a target=\"_blank\" rel=\"nofollow\">andrew.mitchell@unipix.edu</a><br><b>Present Address:</b> 85 Literary Park, San Francisco, California, USA<br><b>Permanent Address:</b> 29 Oak Street, Denver, Colorado, USA<br><b>National ID No:</b> 739261845027<br><b>Job ID No:</b> UNI-ENG-5674<br><b>Sex:</b> Male<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Arts in English Literature, University of California, Berkeley, USA<br>Master of Arts in English Language and Linguistics, New York University, USA<br>Ph.D. in English Studies, University of California, Los Angeles (UCLA), USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Andrew Mitchell is a dedicated academic and researcher with over 8 years of teaching experience in English Language and Literature. He has taught courses such as academic writing, modern literature, linguistics, and communication skills.He is committed to delivering high-quality education through interactive teaching methods, including discussions, presentations, and analytical studies. His teaching approach focuses on enhancing students’ critical thinking, writing ability, and communication skills.Prof. Mitchell has contributed to several research publications and conferences. His research interests include modern literature, discourse analysis, linguistics, and cultural studies.He actively encourages students to participate in research, creative writing, and literary activities to enhance their academic and professional development.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Modern Literature<br>Linguistics<br>Discourse Analysis<br>Cultural Studies<br>Academic Writing<br></span><span><br><b><u>DEPARTMENT:</u></b><br>English</span>', '5'),
(53, 'Prof. Abigail Foster', 'Professor', 'Faculty/Faculty-1775071437.jpg', '<span><b>Phone:</b> +1 617-555-0935<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">abigail.foster@unipix.edu</a><br><b>Present Address:</b> 140 Literary Square, Boston, Massachusetts, USA<br><b>Permanent Address:</b> 36 Riverdale Avenue, New York, USA<br><b>National ID No:</b> 918264735082<br><b>Job ID No:</b> UNI-ENG-5786<br><b>Sex:</b> Female<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Arts in English Literature, Boston University, USA<br>Master of Arts in English Language and Literature, Harvard University, USA<br>Ph.D. in English Studies, Yale University, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Abigail Foster is a highly experienced academic and researcher with over 15 years of teaching experience in English Language and Literature. She has taught a wide range of subjects including American literature, literary theory, linguistics, and academic writing.She is known for her engaging teaching style and dedication to academic excellence. Her teaching approach focuses on critical analysis, interpretative skills, and effective communication. She encourages students to explore literature deeply and develop independent thinking.Prof. Foster has published numerous research papers in reputed international journals and has participated in various academic conferences and literary forums. Her research interests include American literature, feminist studies, literary criticism, and cultural studies.She actively encourages students to participate in research, creative writing, and literary activities to enhance their academic and intellectual growth.<br><br><u><b>AREA OF INTEREST:</b></u><br><span>American Literature<br>Literary Theory<br>Feminist Studies<br>Cultural Studies<br>Creative Writing<br></span><span><br><b><u>DEPARTMENT:</u></b><br>English</span>', '5'),
(54, 'Prof. Gregory Sullivan', 'Professor', 'Faculty/Faculty-1775071852.jpg', '<span><b>Phone:</b> +1 646-555-0919<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">gregory.sullivan@unipix.edu</a><br><b>Present Address:</b> 200 Literary Avenue, New York, USA<br><b>Permanent Address:</b> 58 Maple Grove, Philadelphia, Pennsylvania, USA<br><b>National ID No:</b> 735918264027<br><b>Job ID No:</b> UNI-ENG-5897<br><b>Sex:</b> Male<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Arts in English Literature, University of Pennsylvania, USA<br>Master of Arts in English Language and Literature, Columbia University, USA<br>Ph.D. in English Studies, Princeton University, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Gregory Sullivan is a highly experienced academic and researcher with over 16 years of teaching experience in English Language and Literature. He has taught a wide range of subjects including American literature, literary theory, linguistics, and academic writing.He is dedicated to delivering high-quality education through interactive teaching methods such as critical discussions, presentations, and analytical studies. His teaching approach focuses on developing students’ analytical thinking, writing ability, and communication skills.Prof. Sullivan has published numerous research papers in reputed international journals and has participated in various academic conferences and literary forums. His research interests include American literature, literary criticism, discourse analysis, and cultural studies.He actively encourages students to engage in research, creative writing, and literary activities to enhance their academic and professional development.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>American Literature<br>Literary Criticism<br>Discourse Analysis<br>Cultural Studies<br>Academic Writing<br></span><span><br><b><u>DEPARTMENT:</u></b><br>English</span>', '5'),
(55, 'Prof. Richard Bennett', 'Professor', 'Faculty/Faculty-1775079036.jpg', '<span><b>Phone:</b> +1 617-555-0962<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">richard.bennett@unipix.edu</a><br><b>Present Address:</b> 185 Economic Research Avenue, Boston, Massachusetts, USA<br><b>Permanent Address:</b> 52 Hillcrest Drive, New Haven, Connecticut, USA<br><b>National ID No:</b> 739582164027<br><b>Job ID No:</b> UNI-ECO-6113<br><b>Sex: </b>Male<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Science in Economics, Yale University, USA<br>Master of Science in Applied Economics, Harvard University, USA<br>Ph.D. in Economics, University of Chicago, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Richard Bennett is a highly experienced academic and researcher with over 16 years of teaching and research experience in Economics. He has taught a wide range of subjects including microeconomics, macroeconomics, econometrics, and international economics.He is committed to delivering high-quality education through a combination of theoretical knowledge and practical applications. His teaching approach focuses on analytical thinking, data-driven decision making, and real-world economic analysis.Prof. Bennett has published numerous research papers in internationally recognized journals and has participated in global economic conferences. His research interests include economic policy, international trade, financial economics, and development economics.He actively encourages students to engage in research, policy analysis, and economic modeling to enhance their academic and professional development.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Microeconomics<br>Macroeconomics<br>Econometrics<br>International Economics<br>Economic Policy<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Economics</span>', '6'),
(56, 'Prof. Natalie Parker', 'Assistant Professor', 'Faculty/Faculty-1775079371.jpg', '<span><b>Phone: </b>+1 415-555-0988<br><b>Email: </b><a target=\"_blank\" rel=\"nofollow\">natalie.parker@unipix.edu</a><br><b>Present Address:</b> 210 Economic Plaza, San Francisco, California, USA<br><b>Permanent Address:</b> 33 Maple Avenue, Sacramento, California, USA<br><b>National ID No:</b> 684215973028<br><b>Job ID No:</b> UNI-ECO-6225<br><b>Sex: </b>Female<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Science in Economics, University of California, Berkeley, USA<br>Master of Science in Applied Economics, Stanford University, USA<br>Ph.D. in Economics, University of California, Los Angeles (UCLA), USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Natalie Parker is a dedicated academic and researcher with over 8 years of teaching experience in Economics. She has taught subjects such as microeconomics, macroeconomics, development economics, and economic analysis.She is committed to providing quality education through interactive teaching methods, including discussions, case studies, and data-based analysis. Her teaching approach focuses on developing students’ analytical thinking, problem-solving skills, and understanding of real-world economic issues.Prof. Parker has contributed to several research publications and academic conferences. Her research interests include development economics, economic policy, financial systems, and applied econometrics.She encourages students to participate in research, policy discussions, and economic analysis projects to enhance their academic and professional skills.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Development Economics<br>Economic Policy<br>Applied Econometrics<br>Financial Economics<br>Macroeconomics<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Economics</span>', '6'),
(57, 'Dr. Steven Marshall', 'Associate Professor', 'Faculty/Faculty-1775079631.jpg', '<span><b>Phone:</b> +1 646-555-0941<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">steven.marshall@unipix.edu</a><br><b>Present Address: </b>175 Economic Research Hub, New York, USA<br><b>Permanent Address:</b> 29 Cedar Avenue, Baltimore, Maryland, USA<br><b>National ID No:</b> 742915863027<br><b>Job ID No:</b> UNI-ECO-6337<br><b>Sex:</b> Male<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Science in Economics, University of Maryland, USA<br>Master of Science in Economics, Columbia University, USA<br>Ph.D. in Economics, Princeton University, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Dr. Steven Marshall is an experienced academic and researcher with over 11 years of teaching and research experience in Economics. He has taught various subjects including microeconomics, macroeconomics, econometrics, and international economics.He is dedicated to delivering quality education through a combination of theoretical understanding and practical application. His teaching approach focuses on analytical thinking, data interpretation, and real-world economic problem-solving.Dr. Marshall has published several research papers in international journals and has participated in various academic conferences. His research interests include economic policy, international trade, financial markets, and applied econometrics.He actively encourages students to engage in research, economic analysis, and policy-based studies to enhance their academic and professional development.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Microeconomics<br>Macroeconomics<br>Econometrics<br>International Trade<br>Financial Economics<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Economics</span>', '6');
INSERT INTO `faculty` (`id`, `name`, `designation`, `picture`, `details`, `dept`) VALUES
(58, 'Prof. Vanessa Coleman', 'Professor', 'Faculty/Faculty-1775083122.jpg', '<span><b>Phone:</b> +1 415-555-0976<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">vanessa.coleman@unipix.edu</a><br><b>Present Address:</b> 230 Economic Research Center, San Francisco, California, USA<br><b>Permanent Address:</b> 41 Green Valley Road, Los Angeles, California, USA<br><b>National ID No:</b> 853917264028<br><b>Job ID No:</b> UNI-ECO-6449<br><b>Sex:</b> Female<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Science in Economics, University of California, Berkeley, USA<br>Master of Science in Applied Economics, Harvard University, USA<br>Ph.D. in Economics, Stanford University, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Vanessa Coleman is a distinguished academic and researcher with over 15 years of experience in teaching and research in Economics. She has taught a wide range of subjects including microeconomics, macroeconomics, econometrics, and international economics.She is committed to delivering high-quality education through analytical and research-based teaching methods. Her teaching approach focuses on real-world economic analysis, data interpretation, and policy evaluation.Prof. Coleman has published numerous research papers in internationally recognized journals and has participated in global economic conferences. Her research interests include economic policy, international trade, financial markets, and development economics.She actively encourages students to participate in research, economic modeling, and policy discussions to enhance their academic and professional growth.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Economic Policy<br>International Trade<br>Financial Economics<br>Development Economics<br>Econometrics<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Economics</span>', '6'),
(59, 'Prof. Daniel Reeves', 'Assistant Professor', 'Faculty/Faculty-1775083563.jpg', '<span><b>Phone:</b> +1 212-555-0939<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">daniel.reeves@unipix.edu</a><br><b>Present Address:</b> 145 Economic Plaza, New York, USA<br><b>Permanent Address:</b> 38 Lakeview Drive, Columbus, Ohio, USA<br><b>National ID No: </b>918735264028<br><b>Job ID No:</b> UNI-ECO-6561<br><b>Sex: </b>Male<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Science in Economics, Ohio State University, USA<br>Master of Science in Applied Economics, University of Michigan, USA<br>Ph.D. in Economics, University of Wisconsin–Madison, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Daniel Reeves is a dedicated academic and researcher with over 8 years of teaching experience in Economics. He has taught subjects such as microeconomics, macroeconomics, economic analysis, and development economics.He focuses on delivering quality education through interactive teaching methods, including case studies, discussions, and real-world economic analysis. His teaching approach helps students develop analytical thinking and problem-solving skills.Prof. Reeves has contributed to several research publications and academic conferences. His research interests include development economics, economic policy, financial markets, and applied econometrics.He actively encourages students to participate in research, economic analysis projects, and policy discussions to enhance their academic and professional skills.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Development Economics<br>Economic Policy<br>Financial Economics<br>Applied Econometrics<br>Macroeconomics<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Economics</span>', '6'),
(60, 'Dr. Lauren Whitfield', 'Associate Professor', 'Faculty/Faculty-1775083873.jpg', '<span><b>Phone:</b> +1 646-555-0952<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">lauren.whitfield@unipix.edu</a><br><b>Present Address:</b> 198 Economic Research Avenue, New York, USA<br><b>Permanent Address:</b> 27 Hillcrest Road, Boston, Massachusetts, USA<br><b>National ID No:</b> 847261935028<br><b>Job ID No:</b> UNI-ECO-6673<br><b>Sex:</b> Female<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Science in Economics, University of California, Los Angeles (UCLA), USA<br>Master of Science in Applied Economics, Columbia University, USA<br>Ph.D. in Economics, University of Chicago, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Dr. Lauren Whitfield is an experienced academic and researcher with over 10 years of teaching experience in Economics. She has taught courses such as microeconomics, macroeconomics, econometrics, and international economics.She is committed to delivering quality education through analytical and research-based teaching methods. Her teaching approach focuses on real-world economic analysis, data interpretation, and policy evaluation.Dr. Whitfield has published several research papers in international journals and has participated in various academic conferences. Her research interests include international trade, economic policy, development economics, and applied econometrics.She actively encourages students to participate in research, economic modeling, and policy analysis to enhance their academic and professional development.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>International Trade<br>Economic Policy<br>Development Economics<br>Applied Econometrics<br>Macroeconomics<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Economics</span>', '6'),
(61, 'Prof. Theodore Grant', 'Professor', 'Faculty/Faculty-1775084039.jpg', '<span><b>Phone: </b>+1 617-555-0979<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">theodore.grant@unipix.edu</a><br><b>Present Address:</b> 250 Economic Research Plaza, Boston, Massachusetts, USA<br><b>Permanent Address:</b> 42 Elmwood Drive, Hartford, Connecticut, USA<br><b>National ID No:</b> 792635814027<br><b>Job ID No:</b> UNI-ECO-6785<br><b>Sex:</b> Male<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Science in Economics, University of Michigan, USA<br>Master of Science in Applied Economics, Harvard University, USA<br>Ph.D. in Economics, Princeton University, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Theodore Grant is a highly experienced academic and researcher with over 17 years of experience in teaching and research in Economics. He has taught a wide range of subjects including microeconomics, macroeconomics, econometrics, and international economics.He is committed to delivering high-quality education through analytical and research-based teaching methods. His teaching approach focuses on data-driven decision making, economic modeling, and real-world policy analysis.Prof. Grant has published numerous research papers in internationally recognized journals and has participated in global economic conferences. His research interests include economic policy, financial economics, international trade, and development economics.He actively encourages students to participate in research, policy discussions, and economic analysis projects to enhance their academic and professional development.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Economic Policy<br>Financial Economics<br>International Trade<br>Development Economics<br>Econometrics<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Economics</span>', '6'),
(62, 'Prof. Kimberly Hayes', 'Assistant Professor', 'Faculty/Faculty-1775084235.jpg', '<span>Phone: +1 408-555-0946<br>Email: <a target=\"_blank\" rel=\"nofollow\">kimberly.hayes@unipix.edu</a><br>Present Address: 170 Economic Hub Center, San Jose, California, USA<br>Permanent Address: 29 Sunset Avenue, Las Vegas, Nevada, USA<br>National ID No: 735918462028<br>Job ID No: UNI-ECO-6896<br>Sex: Female</span>ACADEMIC QUALIFICATIONS:<span>Bachelor of Science in Economics, University of Nevada, USA<br>Master of Science in Applied Economics, University of California, Berkeley, USA<br>Ph.D. in Economics, University of Southern California, USA</span>PROFESSIONAL EXPERIENCE:Prof. Kimberly Hayes is a dedicated academic and researcher with over 7 years of teaching experience in Economics. She has taught subjects such as microeconomics, macroeconomics, and economic analysis.She focuses on delivering quality education through interactive teaching methods, including case studies, discussions, and real-world economic analysis. Her teaching approach helps students develop analytical thinking and problem-solving skills.Prof. Hayes has contributed to several research publications and academic conferences. Her research interests include development economics, economic policy, financial systems, and applied econometrics.She actively encourages students to participate in research, economic projects, and policy discussions to enhance their academic and professional skills.AREA OF INTEREST:<span>Development Economics<br>Economic Policy<br>Financial Economics<br>Applied Econometrics<br>Macroeconomics</span><span>DEPARTMENT:<br>Economics</span>', '6'),
(63, 'Prof. Olivia Grant', 'Professor', 'Faculty/Faculty-1775085547.jpg', '<span><b>Phone:</b> +1 617-555-0991<br><b>Email: </b><a target=\"_blank\" rel=\"nofollow\">olivia.grant@unipix.edu</a><br><b>Present Address:</b> 220 Business Innovation Center, Boston, Massachusetts, USA<br><b>Permanent Address:</b> 37 Lakeview Drive, New York, USA<br><b>National ID No:</b> 915384726028<br><b>Job ID No:</b> UNI-BBA-7124<br><b>Sex:</b> Female<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Business Administration, New York University, USA<br>Master of Business Administration (MBA), Harvard Business School, USA<br>Ph.D. in Business Administration, University of Pennsylvania (Wharton), USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Olivia Grant is a highly experienced academic and researcher with over 15 years of experience in the field of Business Administration. She has expertise in marketing, strategic management, business analytics, and organizational leadership.She is committed to delivering high-quality education through modern teaching methods, including case studies, business simulations, and project-based learning. Her teaching approach focuses on developing students’ leadership skills, decision-making abilities, and practical business knowledge.Prof. Grant has published numerous research papers in internationally recognized journals and has participated in global business conferences. Her research interests include strategic management, consumer behavior, digital marketing, and entrepreneurship.She actively encourages students to participate in internships, business competitions, and research projects to enhance their professional skills and career development.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Strategic Management<br>Digital Marketing<br>Consumer Behavior<br>Business Analytics<br>Entrepreneurship<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Business Administration</span>', '7'),
(64, 'Prof. Jonathan Pierce', 'Professor', 'Faculty/Faculty-1775145209.jpg', '<span><b>Phone:</b> +1 415-555-0926<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">jonathan.pierce@unipix.edu</a><br><b>Present Address:</b> 180 Business Hub Tower, San Francisco, California, USA<br><b>Permanent Address:</b> 49 Oakridge Avenue, Seattle, Washington, USA<br><b>National ID No:</b> 874215936028<br><b>Job ID No: </b>UNI-BBA-7235<br><b>Sex:</b> Male<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Business Administration, University of Washington, USA<br>Master of Business Administration (MBA), Stanford University, USA<br>Ph.D. in Business Administration, University of California, Berkeley, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Jonathan Pierce is a highly experienced academic and researcher with over 16 years of experience in the field of Business Administration. He has extensive expertise in finance, marketing, strategic management, and business analytics.He is committed to delivering high-quality education through modern teaching techniques, including case studies, real-world business analysis, and interactive learning. His teaching approach focuses on developing leadership qualities, decision-making skills, and practical business knowledge among students.Prof. Pierce has published numerous research papers in internationally recognized journals and has participated in global business conferences. His research interests include financial management, strategic planning, entrepreneurship, and business analytics.He actively encourages students to participate in internships, business case competitions, and research projects to enhance their professional skills and career opportunities.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Financial Management<br>Strategic Management<br>Business Analytics<br>Entrepreneurship<br>Marketing<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Business Administration</span>', '7'),
(65, 'Dr. Melissa Turner', 'Associate Professor', 'Faculty/Faculty-1775145528.jpg', '<span><b>Phone: </b>+1 646-555-0958<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">melissa.turner@unipix.edu</a><br><b>Present Address:</b> 205 Business Research Center, New York, USA<br><b>Permanent Address:</b> 31 Greenfield Road, Boston, Massachusetts, USA<br><b>National ID No:</b> 792415863028<br><b>Job ID No:</b> UNI-BBA-7346<br><b>Sex:</b> Female<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Business Administration, Boston University, USA<br>Master of Business Administration (MBA), Columbia University, USA<br>Ph.D. in Business Administration, University of Chicago, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Dr. Melissa Turner is an experienced academic and researcher with over 10 years of experience in the field of Business Administration. She has taught courses such as marketing management, organizational behavior, business communication, and strategic planning.She is dedicated to delivering quality education through interactive teaching methods, including case studies, presentations, and real-world business analysis. Her teaching approach focuses on developing students’ leadership skills, communication abilities, and decision-making capacity.Dr. Turner has published several research papers in international journals and has participated in various academic and business conferences. Her research interests include consumer behavior, strategic management, digital marketing, and organizational development.She actively encourages students to participate in internships, research projects, and business competitions to enhance their practical skills and career development.<br><br><u><b>AREA OF INTEREST:</b></u><br><span>Consumer Behavior<br>Strategic Management<br>Digital Marketing<br>Organizational Development<br>Business Communication<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Business Administration</span>', '7'),
(66, 'Prof. Kevin Morgan', 'Assistant Professor', 'Faculty/Faculty-1775145712.jpg', '<span><b>Phone:</b> +1 408-555-0931<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">kevin.morgan@unipix.edu</a><br><b>Present Address:</b> 190 Business Innovation Park, San Jose, California, USA<br><b>Permanent Address: </b>42 Sunset Drive, Los Angeles, California, USA<br><b>National ID No:</b> 681942735028<br><b>Job ID No:</b> UNI-BBA-7458<br><b>Sex:</b> Male<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Business Administration, University of California, Los Angeles (UCLA), USA<br>Master of Business Administration (MBA), University of Southern California, USA<br>Ph.D. in Business Administration, University of Texas at Austin, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Kevin Morgan is a dedicated academic and researcher with over 8 years of experience in the field of Business Administration. He has taught courses such as marketing, business communication, management principles, and entrepreneurship.He focuses on delivering quality education through modern teaching methods, including case studies, presentations, and real-world business scenarios. His teaching approach helps students develop leadership skills, communication abilities, and practical business knowledge.Prof. Morgan has contributed to several research publications and academic conferences. His research interests include entrepreneurship, digital marketing, business strategy, and organizational behavior.He actively encourages students to participate in internships, business competitions, and research projects to enhance their professional skills and career opportunities.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Entrepreneurship<br>Digital Marketing<br>Business Strategy<br>Organizational Behavior<br>Management<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Business Administration</span>', '7'),
(67, 'Prof. Sophia Mitchell', 'Professor', 'Faculty/Faculty-1775146043.jpg', '<span><b>Phone:</b> +1 212-555-0947<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">sophia.mitchell@unipix.edu</a><br><b>Present Address:</b> 250 Business Excellence Tower, New York, USA<br><b>Permanent Address:</b> 38 Green Valley Road, Chicago, Illinois, USA<br><b>National ID No:</b> 915273684028<br><b>Job ID No:</b> UNI-BBA-7569<br><b>Sex:</b> Female<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Business Administration, University of Illinois, USA<br>Master of Business Administration (MBA), Harvard Business School, USA<br>Ph.D. in Business Administration, Stanford University, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Sophia Mitchell is a highly experienced academic and researcher with over 15 years of experience in the field of Business Administration. She has strong expertise in strategic management, marketing, business analytics, and organizational leadership.She is committed to delivering high-quality education through innovative teaching methods such as case studies, business simulations, and real-world analysis. Her teaching approach focuses on developing leadership skills, critical thinking, and decision-making abilities among students.Prof. Mitchell has published numerous research papers in internationally recognized journals and has participated in global business conferences. Her research interests include strategic management, consumer behavior, digital marketing, and entrepreneurship.She actively encourages students to participate in internships, business competitions, and research projects to enhance their professional skills and career growth.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Strategic Management<br>Consumer Behavior<br>Digital Marketing<br>Business Analytics<br>Entrepreneurship<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Business Administration</span>', '7'),
(68, 'Dr. Brandon Hayes', 'Associate Professor', 'Faculty/Faculty-1775146416.jpg', '<span><b>Phone: </b>+1 347-555-0922<br><b>Email: </b><a target=\"_blank\" rel=\"nofollow\">brandon.hayes@unipix.edu</a><br><b>Present Address: </b>210 Business Research Hub, New York, USA<br><b>Permanent Address:</b> 46 Oakwood Lane, Boston, Massachusetts, USA<br><b>National ID No:</b> 864219753028<br><b>Job ID No:</b> UNI-BBA-7681<br><b>Sex: </b>Male<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Business Administration, University of Michigan, USA<br>Master of Business Administration (MBA), Columbia University, USA<br>Ph.D. in Business Administration, University of Chicago, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Dr. Brandon Hayes is an experienced academic and researcher with over 11 years of experience in the field of Business Administration. He has taught courses such as financial management, marketing, organizational behavior, and business strategy.He is dedicated to delivering quality education through interactive teaching methods, including case studies, presentations, and real-world business analysis. His teaching approach focuses on developing leadership, decision-making, and analytical skills among students.Dr. Hayes has published several research papers in international journals and has participated in various academic and business conferences. His research interests include financial management, strategic planning, business analytics, and entrepreneurship.He actively encourages students to participate in internships, research projects, and business competitions to enhance their professional skills and career development.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Financial Management<br>Strategic Planning<br>Business Analytics<br>Entrepreneurship<br>Organizational Behavior<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Business Administration</span>', '7'),
(69, 'Prof. Nicole Rivera', 'Assistant Professor', 'Faculty/Faculty-1775146969.jpg', '<span><b>Phone:</b> +1 415-555-0907<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">nicole.rivera@unipix.edu</a><br><b>Present Address: </b>175 Business Innovation Center, San Francisco, California, USA<br><b>Permanent Address:</b> 28 Palm Grove Avenue, Miami, Florida, USA<br><b>National ID No:</b> 753918264028<br><b>Job ID No:</b> UNI-BBA-7793<br><b>Sex:</b> Female<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Business Administration, Florida International University, USA<br>Master of Business Administration (MBA), University of California, Berkeley, USA<br>Ph.D. in Business Administration, University of Texas at Austin, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Nicole Rivera is a dedicated academic and researcher with over 7 years of experience in the field of Business Administration. She has taught courses such as marketing, business communication, organizational behavior, and entrepreneurship.She is committed to delivering high-quality education through interactive teaching methods, including case studies, presentations, and real-world business scenarios. Her teaching approach focuses on developing leadership, communication, and decision-making skills among students.Prof. Rivera has contributed to several research publications and academic conferences. Her research interests include digital marketing, consumer behavior, business strategy, and entrepreneurship.She actively encourages students to participate in internships, research projects, and business competitions to enhance their professional skills and career opportunities.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Digital Marketing<br>Consumer Behavior<br>Business Strategy<br>Entrepreneurship<br>Organizational Behavior<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Business Administration</span>', '7'),
(70, 'Prof. Marcus Delgado', 'Professor', 'Faculty/Faculty-1775147214.jpg', '<span><b>Phone:</b> +1 305-555-0983<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">marcus.delgado@unipix.edu</a><br><b>Present Address:</b> 260 Business Leadership Tower, Miami, Florida, USA<br><b>Permanent Address:</b> 47 Sunset Boulevard, Los Angeles, California, USA<br><b>National ID No:</b> 918572643028<br><b>Job ID No:</b> UNI-BBA-7815<br><b>Sex:</b> Male<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Business Administration, University of Miami, USA<br>Master of Business Administration (MBA), University of Pennsylvania (Wharton), USA<br>Ph.D. in Business Administration, Harvard University, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Marcus Delgado is a highly accomplished academic and researcher with over 17 years of experience in Business Administration. He has expertise in strategic management, international business, finance, and organizational leadership.He is dedicated to delivering high-quality education through innovative teaching methods such as business case analysis, simulations, and real-world problem-solving. His teaching approach focuses on developing leadership qualities, decision-making skills, and strategic thinking among students.Prof. Delgado has published numerous research papers in internationally recognized journals and has participated in global business conferences. His research interests include international business, financial strategy, business leadership, and entrepreneurship.He actively encourages students to participate in internships, research, and business competitions to enhance their professional growth and career opportunities.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>International Business<br>Strategic Management<br>Financial Strategy<br>Entrepreneurship<br>Organizational Leadership<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Business Administration</span>', '7'),
(72, 'Prof. Victoria Lawson', 'Professor', 'Faculty/Faculty-1775206219.jpg', '<span><b>Phone: </b>+1 202-555-0944<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">victoria.lawson@unipix.edu</a><br><b>Present Address:</b> 180 Legal Research Center, Washington, D.C., USA<br><b>Permanent Address:</b> 39 Maple Grove, Boston, Massachusetts, USA<br><b>National ID No:</b> 915274863028<br><b>Job ID No:</b> UNI-LAW-8123<br><b>Sex:</b> Female<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Laws (LL.B), University of California, USA<br>Master of Laws (LL.M), Harvard Law School, USA<br>Ph.D. in Law &amp; Justice, Columbia University, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Victoria Lawson is a highly experienced academic and legal scholar with over 15 years of experience in teaching and research in Law &amp; Justice. She has taught various subjects including constitutional law, human rights law, criminal law, and international law.She is committed to delivering high-quality legal education through critical analysis, case studies, and practical legal training. Her teaching approach focuses on developing students’ legal reasoning, analytical skills, and ethical understanding.Prof. Lawson has published numerous research papers in internationally recognized law journals and has participated in global legal conferences. Her research interests include human rights law, constitutional law, gender justice, and international legal systems.She actively encourages students to participate in moot courts, legal research, and internships to enhance their practical skills and professional development.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Human Rights Law<br>Constitutional Law<br>Criminal Law<br>International Law<br>Gender Justice<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Law &amp; Justice</span>', '8'),
(73, 'Prof. Gregory Hoffman', 'Professor', 'Faculty/Faculty-1775208696.jpg', '<span><b>Phone:</b> +1 212-555-0968<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">gregory.hoffman@unipix.edu</a><br><b>Present Address:</b> 225 Legal Studies Complex, New York, USA<br><b>Permanent Address:</b> 61 Liberty Street, Philadelphia, Pennsylvania, USA<br><b>National ID No:</b> 782619354028<br><b>Job ID No:</b> UNI-LAW-8235<br><b>Sex:</b> Male<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Laws (LL.B), University of Pennsylvania, USA<br>Master of Laws (LL.M), Yale Law School, USA<br>Ph.D. in Law &amp; Justice, Harvard University, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Gregory Hoffman is a highly experienced academic and legal expert with over 17 years of experience in teaching and research in Law &amp; Justice. He has taught a wide range of subjects including criminal law, constitutional law, international law, and legal ethics.He is dedicated to delivering high-quality legal education through case-based learning, legal analysis, and practical training. His teaching approach focuses on developing students’ legal reasoning, critical thinking, and professional ethics.Prof. Hoffman has published numerous research papers in internationally recognized law journals and has participated in global legal conferences and seminars. His research interests include criminal justice, constitutional law, international human rights, and legal reform.He actively encourages students to participate in moot courts, legal research, and internships to enhance their practical knowledge and professional development.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Criminal Law<br>Constitutional Law<br>International Law<br>Legal Ethics<br>Human Rights Law<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Law &amp; Justice</span>', '8'),
(74, 'Prof. Amanda Collins', 'Assistant Professor', 'Faculty/Faculty-1775209784.jpg', '<span><b>Phone: </b>+1 347-555-0936<br><b>Email:</b> amanda.collins@unipix.edu<br><b>Present Address:</b> 160 Legal Research Building, New York, USA<br><b>Permanent Address: </b>28 Hillcrest Avenue, Boston, Massachusetts, USA<br><b>National ID No:</b> 918472635028<br><b>Job ID No:</b> UNI-LAW-8347<br><b>Sex:</b> Female<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Laws (LL.B), Boston University, USA<br>Master of Laws (LL.M), Columbia University, USA<br>Ph.D. in Law &amp; Justice, University of Chicago, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Amanda Collins is a dedicated academic and legal researcher with over 7 years of experience in teaching Law &amp; Justice. She has taught subjects such as constitutional law, criminal law, legal research, and human rights law.She is committed to delivering quality legal education through interactive teaching methods, including case studies, legal analysis, and classroom discussions. Her teaching approach focuses on developing students’ legal reasoning, critical thinking, and ethical understanding.Prof. Collins has contributed to several research publications and academic conferences. Her research interests include human rights law, constitutional law, gender justice, and legal policy.She actively encourages students to participate in moot courts, internships, and legal research activities to enhance their professional skills and practical knowledge.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Human Rights Law<br>Constitutional Law<br>Criminal Law<br>Gender Justice<br>Legal Research<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Law &amp; Justice</span>', '8'),
(75, 'Dr. Kevin Douglas', 'Associate Professor', 'Faculty/Faculty-1775210721.jpg', '<span><b>Phone:</b> +1 646-555-0980<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">kevin.douglas@unipix.edu</a><br><b>Present Address:</b> 275 Legal Research Hub, New York, USA<br><b>Permanent Address:</b> 34 Liberty Avenue, Washington, D.C., USA<br><b>National ID No:</b> 781945263028<br><b>Job ID No:</b> UNI-LAW-8459<br><b>Sex:</b> Male<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Laws (LL.B), Georgetown University, USA<br>Master of Laws (LL.M), Harvard Law School, USA<br>Ph.D. in Law &amp; Justice, Yale University, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Dr. Kevin Douglas is an experienced academic and legal researcher with over 11 years of teaching and research experience in Law &amp; Justice. He has taught courses such as criminal law, constitutional law, legal ethics, and international law.He is committed to delivering quality education through analytical and case-based teaching methods. His teaching approach focuses on developing students’ legal reasoning, critical thinking, and understanding of real-world legal systems.Dr. Douglas has published several research papers in international law journals and has participated in various academic conferences. His research interests include criminal justice, constitutional law, international law, and legal reforms.He actively encourages students to participate in moot courts, internships, and legal research projects to enhance their academic and professional development.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Criminal Law<br>Constitutional Law<br>International Law<br>Legal Ethics<br>Legal Reform<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Law &amp; Justice</span>', '8'),
(76, 'Prof. Isabella Grant', 'Professor', 'Faculty/Faculty-1775211100.jpg', '<span><b>Phone:</b> +1 202-555-0915<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">isabella.grant@unipix.edu</a><br><b>Present Address:</b> 190 Legal Excellence Center, Washington, D.C., USA<br><b>Permanent Address:</b> 42 Riverdale Street, New York, USA<br><b>National ID No:</b> 864273915028<br><b>Job ID No: </b>UNI-LAW-8562<br><b>Sex:</b> Female<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Laws (LL.B), New York University, USA<br>Master of Laws (LL.M), Columbia University, USA<br>Ph.D. in Law &amp; Justice, Harvard University, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Isabella Grant is a highly experienced academic and legal scholar with over 16 years of experience in teaching and research in Law &amp; Justice. She has taught a wide range of subjects including constitutional law, human rights law, criminal law, and international law.She is dedicated to delivering high-quality legal education through analytical teaching methods, case studies, and real-world legal practices. Her teaching approach focuses on developing students’ legal reasoning, critical thinking, and ethical awareness.Prof. Grant has published numerous research papers in internationally recognized law journals and has participated in global legal conferences and seminars. Her research interests include human rights law, constitutional law, gender justice, and international legal systems.She actively encourages students to participate in moot courts, legal research, and internships to enhance their professional skills and practical experience.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Human Rights Law<br>Constitutional Law<br>Criminal Law<br>International Law<br>Gender Justice<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Law &amp; Justice</span>', '8'),
(77, 'Prof. Daniel Whitmore', 'Assistant Professor', 'Faculty/Faculty-1775212546.jpg', '<span><b>Phone:</b> +1 347-555-0977<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">daniel.whitmore@unipix.edu</a><br><b>Present Address:</b> 210 Legal Studies Plaza, New York, USA<br><b>Permanent Address:</b> 36 Oakwood Drive, Boston, Massachusetts, USA<br><b>National ID No:</b> 752918463028<br><b>Job ID No:</b> UNI-LAW-8674<br><b>Sex:</b> Male<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Laws (LL.B), Boston University, USA<br>Master of Laws (LL.M), University of Chicago, USA<br>Ph.D. in Law &amp; Justice, Columbia University, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Daniel Whitmore is a dedicated academic and legal researcher with over 8 years of experience in teaching Law &amp; Justice. He has taught subjects such as criminal law, constitutional law, legal research, and human rights law.He is committed to delivering quality legal education through case-based learning, analytical discussions, and practical legal training. His teaching approach focuses on developing students’ legal reasoning, critical thinking, and professional ethics.Prof. Whitmore has contributed to several research publications and academic conferences. His research interests include criminal justice, constitutional law, legal policy, and international law.He actively encourages students to participate in moot courts, internships, and legal research activities to enhance their academic and professional development.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Criminal Law<br>Constitutional Law<br>International Law<br>Legal Policy<br>Human Rights Law<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Law &amp; Justice</span>', '8'),
(78, 'Dr. Natalie Whitman', 'Associate Professor', 'Faculty/Faculty-1775213395.jpg', '<span><b>Phone:</b> +1 202-555-0992<br><b>Email: </b><a target=\"_blank\" rel=\"nofollow\">sophia.bennett@unipix.edu</a><br><b>Present Address:</b> 245 Legal Research Tower, Washington, D.C., USA<br><b>Permanent Address:</b> 31 Greenfield Avenue, Chicago, Illinois, USA<br><b>National ID No:</b> 819273645028<br><b>Job ID No:</b> UNI-LAW-8785<br><b>Sex:</b> Female<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Laws (LL.B), University of Chicago, USA<br>Master of Laws (LL.M), Harvard Law School, USA<br>Ph.D. in Law &amp; Justice, Yale University, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Dr. Sophia Bennett is an experienced academic and legal researcher with over 10 years of teaching experience in Law &amp; Justice. She has taught courses such as constitutional law, human rights law, legal ethics, and international law.She is committed to delivering high-quality legal education through analytical teaching methods, case studies, and research-based learning. Her teaching approach focuses on developing students’ legal reasoning, critical thinking, and ethical awareness.Dr. Bennett has published several research papers in internationally recognized law journals and has participated in global legal conferences. Her research interests include human rights law, constitutional law, gender justice, and international legal systems.She actively encourages students to participate in moot courts, legal research, and internships to enhance their academic and professional development.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Human Rights Law<br>Constitutional Law<br>International Law<br>Gender Justice<br>Legal Ethics<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Law &amp; Justice</span>', '8'),
(79, 'Prof. Sebastian Cole', 'Professor', 'Faculty/Faculty-1775213691.jpg', '<span><b>Phone:</b> +1 212-555-0989<br><b>Email:</b> <a target=\"_blank\" rel=\"nofollow\">sebastian.cole@unipix.edu</a><br><b>Present Address:</b> 260 Legal Studies Center, New York, USA<br><b>Permanent Address:</b> 47 Brookside Lane, Boston, Massachusetts, USA<br><b>National ID No:</b> 918263745028<br><b>Job ID No:</b> UNI-LAW-8896<br><b>Sex:</b> Male<br></span><br><b><u>ACADEMIC QUALIFICATIONS:</u></b><br><span>Bachelor of Laws (LL.B), New York University, USA<br>Master of Laws (LL.M), Columbia University, USA<br>Ph.D. in Law &amp; Justice, Harvard University, USA<br></span><br><b><u>PROFESSIONAL EXPERIENCE:</u></b><br>Prof. Sebastian Cole is a highly experienced academic and legal expert with over 18 years of experience in teaching and research in Law &amp; Justice. He has taught a wide range of subjects including constitutional law, criminal law, international law, and legal ethics.He is committed to delivering high-quality legal education through analytical teaching methods, case-based learning, and real-world legal applications. His teaching approach focuses on developing students’ legal reasoning, critical thinking, and professional ethics.Prof. Cole has published numerous research papers in internationally recognized law journals and has participated in global legal conferences and seminars. His research interests include constitutional law, criminal justice, human rights law, and international legal systems.He actively encourages students to participate in moot courts, legal research, and internships to enhance their practical knowledge and professional development.<br><br><b><u>AREA OF INTEREST:</u></b><br><span>Constitutional Law<br>Criminal Law<br>Human Rights Law<br>International Law<br>Legal Ethics<br></span><span><br><b><u>DEPARTMENT:</u></b><br>Law &amp; Justice</span>', '8');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `formTitle` text NOT NULL,
  `form` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `formTitle`, `form`) VALUES
(6, 'Library Membership Form', 'Form/Form-1558353800.pdf'),
(7, 'Student Smart Card', 'Form/Form-1558353950.pdf'),
(8, 'admission form ', 'Form/Form-1558860174.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `title`, `category`) VALUES
(24, 'Gallery/Gallery-1775504636.jpg', 'Graduate Students', '6'),
(25, 'Gallery/Gallery-1775504688.jpg', 'Final Day', '6'),
(26, 'Gallery/Gallery-1775504722.jpg', 'Celebration', '6'),
(27, 'Gallery/Gallery-1775504761.jpg', 'Graduate', '4'),
(28, 'Gallery/Gallery-1775504888.jpg', 'Unipix Students', '4'),
(29, 'Gallery/Gallery-1775504963.jpg', 'Fairwell', '4'),
(30, 'Gallery/Gallery-1775505021.jpg', 'University', '5'),
(31, 'Gallery/Gallery-1775505141.jpg', 'Campus', '5'),
(32, 'Gallery/Gallery-1775505589.jpg', 'Unipix History', '5'),
(33, 'Gallery/Gallery-1775567482.jpg', 'University Campus', '4'),
(34, 'Gallery/Gallery-1775567926.jpg', 'Unipix Student Meeting', '4'),
(35, 'Gallery/Gallery-1775568022.jpg', 'Party', '4'),
(36, 'Gallery/Gallery-1775568088.jpg', 'Office Staff', '5'),
(37, 'Gallery/Gallery-1775568194.jpg', 'Register Office', '5'),
(38, 'Gallery/Gallery-1775568282.jpg', 'Graduate Student', '5'),
(39, 'Gallery/Gallery-1775568373.jpg', 'Ceremony', '6'),
(40, 'Gallery/Gallery-1775568424.jpg', 'Academic', '6'),
(41, 'Gallery/Gallery-1775568652.jpg', 'Wheather of Unipix', '6');

-- --------------------------------------------------------

--
-- Table structure for table `gallerycategory`
--

CREATE TABLE `gallerycategory` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gallerycategory`
--

INSERT INTO `gallerycategory` (`id`, `category`) VALUES
(4, 'Image'),
(5, 'Video'),
(6, 'Slideshow');

-- --------------------------------------------------------

--
-- Table structure for table `librarian`
--

CREATE TABLE `librarian` (
  `id` int(11) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `librarian`
--

INSERT INTO `librarian` (`id`, `designation`, `picture`, `details`, `name`) VALUES
(1, 'Librarian', 'Librarian/Librarian-1774734019.JPG', 'Emily Carter is the Chief Librarian at Unipix University, responsible for managing library resources, supporting academic research, and ensuring access to a wide range of learning materials. She assists students and faculty in finding relevant books, journals, and digital resources to enhance their academic and research activities.<br><b>Office Hours:</b> Sunday – Thursday, 9:00 AM – 3:00 PM&nbsp;<br><b>Responsibilities:</b> Book Management, Research Support, Digital Library Services', 'Emily Carter');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(26, 'tonmoy.singha25@gmail.com'),
(35, 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `noticeboard`
--

CREATE TABLE `noticeboard` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `dates` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `noticeboard`
--

INSERT INTO `noticeboard` (`id`, `title`, `details`, `dates`) VALUES
(1, 'Admission for Fall Semester 2026', 'This is to inform all prospective students that Unipix University has officially commenced its admission process for the Fall Semester 2026. The university offers a wide range of undergraduate and postgraduate programs across various disciplines, designed to meet the academic and professional needs of modern society.\r\n\r\nInterested candidates are strongly encouraged to apply within the specified deadline by completing the official application form and submitting all required academic documents, including transcripts, certificates, and identification materials. Applicants must ensure that all information provided is accurate and authentic, as any false information may lead to disqualification.\r\n\r\nUnipix University is committed to providing a high-quality learning environment supported by experienced faculty members, advanced laboratories, modern classrooms, and digital resources. The university also emphasizes research, innovation, and practical learning to prepare students for real-world challenges.\r\n\r\nCandidates are advised to carefully review the admission requirements and eligibility criteria before applying. For further assistance, applicants may visit the official website or contact the admission office during working hours. The university welcomes all aspiring students to become a part of its academic community.', '2026-08-05'),
(7, 'Midterm Examination Notice', 'All students of Unipix University are hereby informed that the midterm examinations for the current semester will be held shortly as per the academic calendar. The detailed examination schedule will be published by the respective departments in due course.\r\nStudents are advised to begin their preparation seriously and review all course materials thoroughly. It is mandatory for every student to carry a valid university ID card while attending the examination. Entry into the examination hall without proper identification will not be permitted.\r\nThe university maintains a strict policy against any form of unfair means or misconduct during examinations. Students found violating examination rules will face disciplinary actions as per university regulations.\r\nStudents are encouraged to maintain honesty, discipline, and academic integrity throughout the examination period. The university wishes all students success in their upcoming examinations.', '2026-08-20'),
(8, 'Library Facilities and Regulations Update', 'The university library has recently updated its facilities and regulations in order to enhance the academic experience of students and faculty members. The library remains a central hub for learning, research, and knowledge development within the university.\r\nStudents are required to maintain silence and discipline while using the library. Any behavior that disturbs the study environment will not be tolerated. Borrowed books must be returned within the due date, and failure to do so may result in fines or suspension of borrowing privileges.\r\nThe library also provides access to a wide range of digital resources, including e-books, academic journals, and online research databases. Students are strongly encouraged to utilize these resources for their academic and research activities.\r\nThe university believes that proper use of library facilities will significantly contribute to the intellectual growth and academic success of students.', '2026-08-28'),
(9, 'Workshop on Artificial Intelligence and Emerging Technologies', 'The Department of Computer Science and Engineering is organizing a workshop on Artificial Intelligence and Emerging Technologies. This workshop aims to provide students with practical knowledge and insights into the latest technological advancements that are shaping the future of the digital world.\r\nThe sessions will be conducted by experienced faculty members and industry experts who will share their knowledge on topics such as machine learning, data science, automation, and real-world applications of AI. Students will also have the opportunity to participate in hands-on activities and interactive discussions.\r\nThis workshop is an excellent opportunity for students to enhance their technical skills, broaden their understanding of modern technologies, and prepare themselves for future career opportunities.\r\nInterested students are requested to register within the deadline, as seats are limited. Certificates of participation will be awarded to all attendees.', '2026-09-05'),
(10, 'Assignment Submission and Academic Guidelines', 'All students are hereby notified that the deadline for submission of course assignments is approaching. Students must ensure that all assignments are completed and submitted within the specified timeframe.\r\nAssignments must follow the proper formatting guidelines as instructed by the course teachers. Students are also required to maintain originality in their work, as plagiarism will not be tolerated under any circumstances. Any form of academic dishonesty may result in serious consequences, including grade penalties or disciplinary action.\r\nStudents who face any difficulties in completing their assignments are advised to consult their respective teachers well in advance. Late submissions will only be accepted under exceptional circumstances with proper approval.\r\nThe university emphasizes academic integrity and encourages students to take their responsibilities seriously.', '2026-09-12'),
(11, 'Seminar on Career Development and Professional Skills', 'Unipix University is pleased to announce that a seminar on career development and professional skills will be organized by the Career Counseling Cell. The main objective of this seminar is to guide students in preparing themselves for future career opportunities and the competitive job market.\r\nThe seminar will cover important topics such as career planning, CV writing, interview techniques, communication skills, and workplace professionalism. Experienced professionals and industry experts will share their valuable insights and real-life experiences to help students understand the expectations of employers.\r\nStudents from all departments are strongly encouraged to attend this seminar and actively participate in the discussions. This session will provide a valuable opportunity to gain knowledge, improve confidence, and develop essential skills required for career success.', '2026-09-20'),
(12, 'Annual Cultural Program Announcement', 'Unipix University is delighted to announce its Annual Cultural Program, which aims to promote creativity, talent, and cultural diversity among students. This program will include a variety of events such as singing, dancing, drama, recitation, and art competitions.\r\nStudents who are interested in participating are requested to complete their registration within the given deadline. The cultural program provides a platform for students to express their talents, build confidence, and enjoy a vibrant campus life.\r\nAll students, faculty members, and staff are cordially invited to attend and make the event successful. The university believes that such activities play an important role in the overall development of students beyond academic achievements.', '2026-09-28'),
(13, 'Internship Opportunity for Students', 'The Placement Office of Unipix University is offering internship opportunities for students in reputed national and international organizations. This initiative is designed to provide students with practical experience and exposure to real-world working environments.\r\nInterested students are required to submit their updated CVs, academic transcripts, and necessary documents to the placement office within the specified deadline. Shortlisted candidates will be contacted for further selection procedures.\r\nInternships play a crucial role in building professional skills, enhancing knowledge, and preparing students for future careers. Therefore, all eligible students are encouraged to take advantage of this opportunity and gain valuable experience.', '2026-10-05'),
(14, 'Scholarship Application Notice', 'Applications are now open for merit-based and need-based scholarships at Unipix University. The scholarship program aims to support talented and deserving students in achieving their academic goals without financial barriers.\r\nEligible students are requested to submit their applications along with the required documents within the specified deadline. The selection process will be based on academic performance, financial condition, and other relevant criteria set by the university authority.\r\nStudents are encouraged to carefully read the eligibility requirements before applying. For further details, they may contact the scholarship office. The university remains committed to supporting students in their academic journey.', '2026-10-15'),
(15, 'Final Examination Preparation Notice', 'All students are hereby advised to begin their preparation for the upcoming final examinations. The university will soon publish the final examination routine, and students are expected to complete all academic requirements before the examinations commence.\r\nStudents must ensure that all assignments, projects, and lab reports are submitted within the deadlines provided by their respective departments. Failure to complete coursework may result in ineligibility to sit for the final examinations.\r\nThe university encourages students to maintain discipline, focus on their studies, and utilize available resources such as library and consultation sessions. Proper preparation and dedication will help students achieve better academic results.', '2026-10-25');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `details`, `image`) VALUES
(1, 'Residence Halls ', 'Residence halls at Unipix University provide a safe, comfortable, and supportive living environment for students. The university ensures that residential facilities are well-maintained and designed to meet the needs of modern student life. Rooms are equipped with essential amenities, including proper furniture, internet access, and a clean, secure atmosphere that supports both study and relaxation.The residence halls promote a sense of community by encouraging students from diverse backgrounds to live and interact together. This environment helps students build friendships, develop social skills, and experience a collaborative lifestyle. Common areas, study rooms, and recreational spaces are available for students to relax and engage in group activities.Security and student well-being are top priorities, with 24/7 supervision and support services in place. Overall, the residence halls at Unipix University offer a balanced living experience that enhances both academic focus and personal growth.', 'Pages/Pages-1558350258.'),
(3, 'Cultural', 'Cultural activities at Unipix University play a significant role in enriching student life and promoting creativity, diversity, and social engagement. The university encourages students to participate in various cultural programs that celebrate art, music, literature, and traditions from different backgrounds. These activities help students develop confidence, express their talents, and build a strong sense of community.Regular cultural events such as annual festivals, music performances, drama productions, poetry recitations, and art exhibitions are organized throughout the academic year. These events provide a platform for students to showcase their skills and creativity while also appreciating the talents of others. Cultural clubs and societies actively engage students in organizing and participating in these programs, fostering teamwork and leadership abilities.The university values cultural diversity and promotes inclusiveness by celebrating national and international cultural events. Students from different regions and backgrounds come together to share their traditions, customs, and perspectives, creating a vibrant and multicultural campus environment.Through cultural engagement, students gain not only entertainment but also personal growth, improved communication skills, and a deeper understanding of global cultures. Unipix University believes that cultural activities are essential in shaping well-rounded individuals who appreciate diversity and contribute positively to society.', 'Pages/Pages-1558350305.'),
(4, 'CAMPUS LIFE ', 'Campus life at Unipix University offers a vibrant and engaging environment that supports both academic and personal growth. The university provides a well-balanced atmosphere where students can focus on their studies while also participating in various extracurricular activities. Modern classrooms, well-equipped laboratories, libraries, and recreational facilities create a comfortable and productive learning space.Students are encouraged to take part in clubs, organizations, and cultural activities that enhance their leadership, teamwork, and communication skills. Various student clubs such as technology clubs, debate clubs, cultural societies, and sports teams provide opportunities for students to explore their interests and talents beyond academics. Regular events, seminars, workshops, and competitions are organized to keep students active and involved in campus life.The campus promotes diversity and inclusiveness, welcoming students from different backgrounds and cultures. This multicultural environment allows students to share ideas, build friendships, and gain a broader global perspective. The university also ensures student support services such as counseling, career guidance, and mentoring programs to help students succeed both academically and personally.In addition, recreational spaces, sports facilities, and common areas provide students with opportunities to relax and socialize. Campus life at Unipix University is designed to create a dynamic and supportive community where students can grow into confident, responsible, and well-rounded individuals prepared for future challenges.', 'Pages/Pages-1557916143.'),
(5, 'Student Organizations', 'Student organizations at Unipix University play a vital role in enhancing campus life by providing opportunities for leadership, collaboration, and personal development. A wide range of clubs and societies, including academic, cultural, technological, and social groups, allow students to explore their interests and talents beyond the classroom. These organizations regularly organize events, workshops, competitions, and community service activities, helping students develop teamwork and communication skills. Participation in student organizations fosters creativity, responsibility, and networking, preparing students to become active contributors to society and future leaders in their respective fields.', 'Pages/Pages-1558350218.'),
(6, 'LIBRARY', 'The Unipix University Library stands as a cornerstone of academic excellence, serving as a dynamic center for knowledge, research, and intellectual engagement. Designed to support the diverse academic needs of students, faculty, and researchers, the library plays a vital role in fostering a culture of learning, innovation, and critical inquiry. It is committed to providing access to high-quality information resources and modern facilities that enhance both teaching and research activities across all disciplines offered by the university.The library houses an extensive and well-organized collection of printed materials, including textbooks, reference books, academic journals, periodicals, and research publications. These resources cover a wide range of subject areas such as Computer Science and Engineering, Electrical and Electronic Engineering, Software Engineering, Data Science, Business Administration, Economics, English, and Law &amp; Justice. The collection is continuously updated to ensure that users have access to the latest editions and current academic developments, enabling them to stay informed and competitive in their respective fields.In addition to its physical collection, the Unipix University Library offers a comprehensive range of digital resources. The library provides access to e-books, online journals, academic databases, and digital repositories that support advanced research and learning. Through its e-library services, users can access scholarly materials anytime and from anywhere, promoting flexibility and convenience in the learning process. The integration of modern information technology ensures efficient resource management and easy retrieval of information through digital catalog systems and online search tools.The library environment is carefully designed to create a quiet, comfortable, and conducive atmosphere for study and research. Spacious reading areas, individual study carrels, and group discussion rooms are available to accommodate different learning preferences. Whether students prefer silent study or collaborative work, the library provides appropriate spaces to support their academic activities. Adequate lighting, proper ventilation, and ergonomic seating further enhance the user experience, making the library an ideal place for focused learning.A key feature of the Unipix University Library is its commitment to user support and guidance. The library is staffed by qualified and experienced professionals who are dedicated to assisting users in locating and utilizing resources effectively. They provide guidance in research methodologies, information literacy, citation practices, and database usage. This personalized support helps students and researchers develop essential skills for academic success and lifelong learning.The library also plays an important role in promoting research and innovation within the university. By offering access to scholarly publications, research tools, and academic networks, it supports faculty members and students in conducting high-quality research. The availability of both print and digital resources encourages interdisciplinary exploration and knowledge sharing, which are essential for addressing complex global challenges. The library may also organize workshops, seminars, and training sessions to enhance research skills and awareness of new information technologies.Furthermore, the Unipix University Library is committed to maintaining a user-friendly and inclusive environment. It ensures that all members of the academic community have equal access to its resources and services. Special provisions may be available to support users with different needs, ensuring that the library remains accessible and welcoming to everyone. Clear policies regarding borrowing, returning, and resource usage are implemented to ensure smooth and efficient library operations.To keep pace with the evolving demands of modern education, the library continuously upgrades its infrastructure and services. It adopts new technologies and expands its digital collections to meet the changing needs of users in a digital age. The integration of automated systems for cataloging, circulation, and inventory management enhances efficiency and accuracy in library operations. These advancements enable users to quickly locate materials and access information without unnecessary delays.The library also encourages a culture of reading and intellectual curiosity among students. By providing access to a diverse range of materials, including literature, magazines, and general knowledge resources, it supports not only academic growth but also personal development. Students are motivated to explore new ideas, broaden their perspectives, and engage in independent learning beyond the classroom.In addition to supporting academic programs, the Unipix University Library serves as a collaborative space where ideas can be exchanged and knowledge can be shared. It brings together students and faculty from different disciplines, fostering interdisciplinary interaction and intellectual dialogue. This collaborative environment contributes to the overall academic and cultural enrichment of the university community.Sustainability and continuous improvement are also key priorities of the library. Efforts are made to preserve resources, manage collections responsibly, and adopt environmentally friendly practices where possible. The library regularly evaluates its services and seeks feedback from users to improve its offerings and ensure satisfaction.In conclusion, the Unipix University Library is more than just a repository of books; it is a vibrant academic resource center that supports learning, research, and innovation. Through its extensive collections, modern facilities, digital services, and dedicated staff, the library plays a crucial role in the academic journey of students and faculty. It embodies the university’s commitment to excellence, knowledge dissemination, and lifelong learning, making it an indispensable part of the Unipix University experience.', 'Pages/Pages-1775163792.'),
(7, 'Admission Requirements', '<h2>Admission Requirements</h2>The admission process at Unipix University is designed to ensure that qualified and motivated students are selected for various academic programs. Applicants must meet the following requirements:<h3>General Requirements</h3><ul><li>Applicants must have successfully completed their previous academic qualification (High School / HSC / A-Level / Equivalent) from a recognized institution.</li><li>A minimum required GPA or equivalent academic performance must be achieved, as specified by the university.</li><li>Applicants must demonstrate a strong academic background relevant to their chosen program.</li></ul><h3>Undergraduate Program Requirements</h3><ul><li>Completion of Secondary School Certificate (SSC) and Higher Secondary Certificate (HSC) or equivalent.</li><li>Minimum GPA requirements as per university policy.</li><li>For science and engineering programs, students must have a background in Mathematics and Physics.</li><li>English proficiency is required (basic reading, writing, and communication skills).</li></ul><h3>Graduate Program Requirements</h3><ul><li>A Bachelor’s degree from a recognized university in a relevant field.</li><li>Minimum CGPA requirement as defined by the department.</li><li>Some programs may require prior coursework or experience in specific subjects.</li><li>Submission of academic transcripts and certificates.</li></ul><h3>English Language Requirements</h3><ul><li>Applicants must have proficiency in English for academic success.</li><li>International students may need to submit standardized test scores such as IELTS or TOEFL.</li><li>Alternatively, applicants may attend an internal English proficiency test or interview conducted by the university.</li></ul><h3>Required Documents</h3><ul><li>Completed application form.</li><li>Academic certificates and transcripts (original and photocopies).</li><li>Valid identification (passport or national ID).</li><li>Passport-size photographs.</li><li>Statement of Purpose (for certain programs).</li><li>Recommendation letters (if required).</li></ul><h3>Admission Test / Interview</h3><ul><li>Applicants may be required to sit for an admission test depending on the program.</li><li>Some departments conduct viva or interview sessions to assess communication skills and subject knowledge.</li><li>Performance in tests and interviews plays a role in final selection.</li></ul><h3>Application Process</h3><ul><li>Fill out the online or offline application form.</li><li>Submit required documents within the deadline.</li><li>Pay the application fee (if applicable).</li><li>Wait for confirmation and admission decision from the university.</li></ul><h3>Special Considerations</h3><ul><li>Scholarships or financial aid may be available for eligible students based on merit or need.</li><li>International students are welcome and must comply with visa and immigration requirements.</li><li>Credit transfer options may be available for students from other institutions.</li></ul><h3>Final Admission</h3><ul><li>Selected candidates will receive an official admission offer letter.</li><li>Students must complete the enrollment process within the specified time.</li><li>Payment of tuition fees and registration is required to confirm admission.</li></ul>', ''),
(8, 'ABOUT OUR ACADEMIC PROGRAMS DETAILS', 'The academic programs offered across disciplines such as Computer Science &amp; Engineering, Electrical &amp; Electronic Engineering, Software Engineering, Data Science, English, Economics, Business Administration, and Law &amp; Justice collectively aim to develop well-rounded graduates equipped with both theoretical knowledge and practical skills. These programs integrate scientific, technological, analytical, and humanistic perspectives to address modern societal and industrial challenges. Engineering and technology-based fields focus on innovation, problem-solving, system design, and the application of advanced computational and electronic principles. Data-oriented disciplines emphasize analytical thinking, statistical reasoning, and data-driven decision-making. At the same time, programs in English, Economics, and Business Administration cultivate critical thinking, communication skills, economic understanding, and managerial competence essential for organizational and social development. The Law &amp; Justice program contributes by fostering legal awareness, ethical reasoning, and an understanding of justice systems and governance. Together, these programs are designed to promote intellectual growth, professional excellence, and adaptability in a rapidly changing global environment, enabling graduates to contribute effectively to diverse sectors including industry, academia, public service, and entrepreneurship.', 'Pages/Pages-1775162322.'),
(9, 'Laboratory', 'The laboratory is one of the most essential and advanced facilities of the university, designed to provide students with practical knowledge alongside theoretical learning. It is equipped with modern instruments, updated technologies, and a well-organized environment that supports both academic and research activities.\r\n<br>In the laboratory, students gain hands-on experience by performing experiments, developing projects, and applying classroom concepts to real-world situations. This practical exposure helps students to improve their technical skills, analytical thinking, and problem-solving abilities.<br>The university ensures that all laboratories are properly maintained, safe, and accessible to students and faculty members. Qualified instructors and lab assistants are always available to guide students and ensure smooth operation during practical sessions. The laboratory environment encourages innovation, teamwork, and creativity, helping students to prepare for professional challenges in their respective fields.<br>', 'Pages/Pages-1774728326.'),
(10, 'Innovation ', 'Innovation is a central focus of the university, serving as a driving force behind academic excellence and continuous development. The institution encourages both students and faculty members to think creatively, challenge conventional ideas, and explore new possibilities in their respective fields. By fostering an environment that values curiosity and originality, the university aims to cultivate innovative thinkers who can contribute meaningfully to society.The university provides a supportive and resource-rich environment where individuals are empowered to engage with modern technologies and develop practical solutions to real-world problems. Through access to advanced tools, research facilities, and expert guidance, students are able to experiment, design, and implement new ideas effectively. Emphasis is placed on hands-on learning, ensuring that theoretical knowledge is complemented by practical experience.A variety of academic programs, workshops, seminars, and project-based learning initiatives are organized to promote innovation at every level. These activities encourage students to transform their ideas into tangible outcomes, whether through research projects, prototypes, or entrepreneurial ventures. Innovation labs and collaborative workspaces play a significant role in this process, offering students the opportunity to work in teams, share knowledge, and develop interdisciplinary solutions.Furthermore, the university strongly believes that innovation is essential for long-term progress and sustainable development. By nurturing creativity, critical thinking, and problem-solving skills, it prepares students to adapt to a rapidly changing global landscape. Graduates are equipped not only with technical expertise but also with the vision and leadership qualities needed to become successful entrepreneurs, innovators, and change-makers in their respective fields.', 'Pages/Pages-1775218178.'),
(11, 'Journal', 'The university actively publishes academic journals as part of its commitment to promoting research, knowledge dissemination, and scholarly communication. These journals serve as an important platform for students, researchers, and faculty members to present their original research findings, analytical articles, and innovative ideas. By encouraging academic writing and publication, the university fosters a strong research culture that supports intellectual growth and academic excellence.All journal publications strictly adhere to recognized academic standards and ethical guidelines to ensure the quality, credibility, and integrity of the research. A rigorous review and editorial process is maintained, allowing only well-structured, relevant, and high-quality research work to be published. This ensures that the journals contribute meaningfully to the advancement of knowledge across various fields of study.The university also promotes interdisciplinary research by encouraging contributions from diverse academic backgrounds, including science, engineering, business, humanities, and law. This approach helps to bridge gaps between different disciplines and fosters collaboration among researchers at both national and international levels. Such collaborative efforts enhance innovation and provide broader perspectives on complex global issues.Through its academic journals, the university aims to make a significant contribution to the global academic community. It not only enhances the quality of research output but also inspires students and scholars to engage in continuous learning, critical thinking, and discovery. By providing opportunities for publication and intellectual exchange, the institution prepares individuals to become active contributors to research, innovation, and academic development worldwide.', 'Pages/Pages-1774728199.');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `studentID` int(11) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `courseCode` varchar(50) DEFAULT NULL,
  `cgpa` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `studentID`, `semester`, `courseCode`, `cgpa`) VALUES
(1150, 234501, 'Semester 1', 'CSE-101', 3.5),
(1151, 234501, 'Semester 1', 'CSE-102', 3.75),
(1152, 234501, 'Semester 1', 'CSE-103', 3.75),
(1153, 234501, 'Semester 1', 'MATH-101', 3.25),
(1154, 234501, 'Semester 1', 'PHY-101', 3),
(1155, 234501, 'Semester 1', 'PHY-102', 3.5),
(1156, 234501, 'Semester 1', 'ENG-101', 3.5),
(1157, 234501, 'Semester 1', 'GED-101', 3.75),
(1158, 234501, 'Semester 1', 'EEE-101', 3.5),
(1159, 234501, 'Semester 2', 'CSE-201', 3.5),
(1160, 234501, 'Semester 2', 'CSE-202', 3.75),
(1161, 234501, 'Semester 2', 'CSE-203', 3.4),
(1162, 234501, 'Semester 2', 'MATH-201', 3.25),
(1163, 234501, 'Semester 2', 'CHEM-201', 3),
(1164, 234501, 'Semester 2', 'CHEM-202', 3.6),
(1165, 234501, 'Semester 2', 'STAT-201', 3.3),
(1166, 234501, 'Semester 2', 'GED-201', 3.8),
(1167, 234501, 'Semester 2', 'CSE-204', 3.45),
(1168, 234501, 'Semester 3', 'CSE-301', 3.6),
(1169, 234501, 'Semester 3', 'CSE-302', 3.85),
(1170, 234501, 'Semester 3', 'CSE-303', 3.4),
(1171, 234501, 'Semester 3', 'CSE-304', 3.7),
(1172, 234501, 'Semester 3', 'CSE-305', 3.3),
(1173, 234501, 'Semester 3', 'CSE-306', 3.25),
(1174, 234501, 'Semester 3', 'MATH-301', 3.1),
(1175, 234501, 'Semester 3', 'GED-301', 3.75),
(1176, 234501, 'Semester 3', 'CSE-307', 3.9),
(1177, 234501, 'Semester 4', 'CSE-401', 3.45),
(1178, 234501, 'Semester 4', 'CSE-402', 3.8),
(1179, 234501, 'Semester 4', 'CSE-403', 3.35),
(1180, 234501, 'Semester 4', 'CSE-404', 3.2),
(1181, 234501, 'Semester 4', 'CSE-405', 3.75),
(1182, 234501, 'Semester 4', 'CSE-406', 3.1),
(1183, 234501, 'Semester 4', 'CSE-407', 3.3),
(1184, 234501, 'Semester 4', 'CSE-408', 3.85),
(1185, 234501, 'Semester 4', 'GED-401', 3.6),
(1186, 234501, 'Semester 4', 'CSE-409', 3.5),
(1187, 234501, 'Semester 5', 'CSE-501', 3.55),
(1188, 234501, 'Semester 5', 'CSE-502', 3.9),
(1189, 234501, 'Semester 5', 'CSE-503', 3.4),
(1190, 234501, 'Semester 5', 'CSE-504', 3.75),
(1191, 234501, 'Semester 5', 'CSE-505', 3.25),
(1192, 234501, 'Semester 5', 'CSE-506', 3.6),
(1193, 234501, 'Semester 5', 'CSE-507', 3.8),
(1194, 234501, 'Semester 5', 'CSE-508', 3.3),
(1195, 234501, 'Semester 5', 'GED-501', 3.7),
(1196, 234501, 'Semester 5', 'CSE-509', 3.65),
(1197, 234501, 'Semester 6', 'CSE-601', 3.6),
(1198, 234501, 'Semester 6', 'CSE-602', 3.85),
(1199, 234501, 'Semester 6', 'CSE-603', 3.4),
(1200, 234501, 'Semester 6', 'CSE-604', 3.75),
(1201, 234501, 'Semester 6', 'CSE-605', 3.3),
(1202, 234501, 'Semester 6', 'CSE-606', 3.25),
(1203, 234501, 'Semester 6', 'CSE-607', 3.45),
(1204, 234501, 'Semester 6', 'CSE-608', 3.5),
(1205, 234501, 'Semester 6', 'CSE-609', 3.9),
(1206, 234501, 'Semester 6', 'GED-601', 3.7),
(1207, 234501, 'Semester 7', 'CSE-701', 3.5),
(1208, 234501, 'Semester 7', 'CSE-702', 3.8),
(1209, 234501, 'Semester 7', 'CSE-703', 3.45),
(1210, 234501, 'Semester 7', 'CSE-704', 3.85),
(1211, 234501, 'Semester 7', 'CSE-705', 3.3),
(1212, 234501, 'Semester 7', 'CSE-706', 3.4),
(1213, 234501, 'Semester 7', 'CSE-707', 3.75),
(1214, 234501, 'Semester 7', 'CSE-708', 3.6),
(1215, 234501, 'Semester 7', 'CSE-709', 3.9),
(1216, 234501, 'Semester 7', 'CSE-710', 3.7),
(1217, 234501, 'Semester 8', 'CSE-801', 3.65),
(1218, 234501, 'Semester 8', 'CSE-802', 3.9),
(1219, 234501, 'Semester 8', 'CSE-803', 3.5),
(1220, 234501, 'Semester 8', 'CSE-804', 3.4),
(1221, 234501, 'Semester 8', 'CSE-805', 3.75),
(1222, 234501, 'Semester 8', 'CSE-806', 3.8),
(1223, 234501, 'Semester 8', 'CSE-807', 3.55),
(1224, 234501, 'Semester 8', 'CSE-808', 3.85),
(1225, 234502, 'Semester 1', 'CSE-101', 3),
(1226, 234502, 'Semester 1', 'CSE-102', 3.25),
(1227, 234502, 'Semester 1', 'CSE-103', 3.5),
(1228, 234502, 'Semester 1', 'MATH-101', 3.75),
(1229, 234502, 'Semester 1', 'PHY-101', 4),
(1230, 234502, 'Semester 1', 'PHY-102', 3.25),
(1231, 234502, 'Semester 1', 'ENG-101', 3.5),
(1232, 234502, 'Semester 1', 'GED-101', 3.75),
(1233, 234502, 'Semester 1', 'EEE-101', 3),
(1234, 234502, 'Semester 2', 'CSE-201', 3.25),
(1235, 234502, 'Semester 2', 'CSE-202', 3.5),
(1236, 234502, 'Semester 2', 'CSE-203', 3.75),
(1237, 234502, 'Semester 2', 'MATH-201', 4),
(1238, 234502, 'Semester 2', 'CHEM-201', 3),
(1239, 234502, 'Semester 2', 'CHEM-202', 3.25),
(1240, 234502, 'Semester 2', 'STAT-201', 3.5),
(1241, 234502, 'Semester 2', 'GED-201', 3.75),
(1242, 234502, 'Semester 2', 'CSE-204', 4),
(1243, 234502, 'Semester 3', 'CSE-301', 3.5),
(1244, 234502, 'Semester 3', 'CSE-302', 3.75),
(1245, 234502, 'Semester 3', 'CSE-303', 4),
(1246, 234502, 'Semester 3', 'CSE-304', 3),
(1247, 234502, 'Semester 3', 'CSE-305', 3.25),
(1248, 234502, 'Semester 3', 'CSE-306', 3.5),
(1249, 234502, 'Semester 3', 'MATH-301', 3.75),
(1250, 234502, 'Semester 3', 'GED-301', 4),
(1251, 234502, 'Semester 3', 'CSE-307', 3.25),
(1252, 234502, 'Semester 4', 'CSE-401', 3.75),
(1253, 234502, 'Semester 4', 'CSE-402', 4),
(1254, 234502, 'Semester 4', 'CSE-403', 3),
(1255, 234502, 'Semester 4', 'CSE-404', 3.25),
(1256, 234502, 'Semester 4', 'CSE-405', 3.5),
(1257, 234502, 'Semester 4', 'CSE-406', 3.75),
(1258, 234502, 'Semester 4', 'CSE-407', 4),
(1259, 234502, 'Semester 4', 'CSE-408', 3.25),
(1260, 234502, 'Semester 4', 'GED-401', 3.5),
(1261, 234502, 'Semester 4', 'CSE-409', 3.75),
(1262, 234502, 'Semester 5', 'CSE-501', 4),
(1263, 234502, 'Semester 5', 'CSE-502', 3),
(1264, 234502, 'Semester 5', 'CSE-503', 3.25),
(1265, 234502, 'Semester 5', 'CSE-504', 3.5),
(1266, 234502, 'Semester 5', 'CSE-505', 3.75),
(1267, 234502, 'Semester 5', 'CSE-506', 4),
(1268, 234502, 'Semester 5', 'CSE-507', 3.25),
(1269, 234502, 'Semester 5', 'CSE-508', 3.5),
(1270, 234502, 'Semester 5', 'GED-501', 3.75),
(1271, 234502, 'Semester 5', 'CSE-509', 4),
(1272, 234502, 'Semester 6', 'CSE-601', 3),
(1273, 234502, 'Semester 6', 'CSE-602', 3.25),
(1274, 234502, 'Semester 6', 'CSE-603', 3.5),
(1275, 234502, 'Semester 6', 'CSE-604', 3.75),
(1276, 234502, 'Semester 6', 'CSE-605', 4),
(1277, 234502, 'Semester 6', 'CSE-606', 3.25),
(1278, 234502, 'Semester 6', 'CSE-607', 3.5),
(1279, 234502, 'Semester 6', 'CSE-608', 3.75),
(1280, 234502, 'Semester 6', 'CSE-609', 4),
(1281, 234502, 'Semester 6', 'GED-601', 3.25),
(1282, 234502, 'Semester 7', 'CSE-701', 3.5),
(1283, 234502, 'Semester 7', 'CSE-702', 3.75),
(1284, 234502, 'Semester 7', 'CSE-703', 4),
(1285, 234502, 'Semester 7', 'CSE-704', 3),
(1286, 234502, 'Semester 7', 'CSE-705', 3.25),
(1287, 234502, 'Semester 7', 'CSE-706', 3.5),
(1288, 234502, 'Semester 7', 'CSE-707', 3.75),
(1289, 234502, 'Semester 7', 'CSE-708', 4),
(1290, 234502, 'Semester 7', 'CSE-709', 3.25),
(1291, 234502, 'Semester 7', 'CSE-710', 3.5),
(1292, 234502, 'Semester 8', 'CSE-801', 3.75),
(1293, 234502, 'Semester 8', 'CSE-802', 4),
(1294, 234502, 'Semester 8', 'CSE-803', 3),
(1295, 234502, 'Semester 8', 'CSE-804', 3.25),
(1296, 234502, 'Semester 8', 'CSE-805', 3.5),
(1297, 234502, 'Semester 8', 'CSE-806', 3.75),
(1298, 234502, 'Semester 8', 'CSE-807', 4),
(1299, 234502, 'Semester 8', 'CSE-808', 3.25),
(1300, 234503, 'Semester 1', 'CSE-101', 3.25),
(1301, 234503, 'Semester 1', 'CSE-102', 3.5),
(1302, 234503, 'Semester 1', 'CSE-103', 3.75),
(1303, 234503, 'Semester 1', 'MATH-101', 4),
(1304, 234503, 'Semester 1', 'PHY-101', 3),
(1305, 234503, 'Semester 1', 'PHY-102', 3.25),
(1306, 234503, 'Semester 1', 'ENG-101', 3.5),
(1307, 234503, 'Semester 1', 'GED-101', 3.75),
(1308, 234503, 'Semester 1', 'EEE-101', 4),
(1309, 234503, 'Semester 2', 'CSE-201', 3.5),
(1310, 234503, 'Semester 2', 'CSE-202', 3.75),
(1311, 234503, 'Semester 2', 'CSE-203', 4),
(1312, 234503, 'Semester 2', 'MATH-201', 3),
(1313, 234503, 'Semester 2', 'CHEM-201', 3.25),
(1314, 234503, 'Semester 2', 'CHEM-202', 3.5),
(1315, 234503, 'Semester 2', 'STAT-201', 3.75),
(1316, 234503, 'Semester 2', 'GED-201', 4),
(1317, 234503, 'Semester 2', 'CSE-204', 3.25),
(1318, 234503, 'Semester 3', 'CSE-301', 3.75),
(1319, 234503, 'Semester 3', 'CSE-302', 4),
(1320, 234503, 'Semester 3', 'CSE-303', 3),
(1321, 234503, 'Semester 3', 'CSE-304', 3.25),
(1322, 234503, 'Semester 3', 'CSE-305', 3.5),
(1323, 234503, 'Semester 3', 'CSE-306', 3.75),
(1324, 234503, 'Semester 3', 'MATH-301', 4),
(1325, 234503, 'Semester 3', 'GED-301', 3.25),
(1326, 234503, 'Semester 3', 'CSE-307', 3.5),
(1327, 234503, 'Semester 4', 'CSE-401', 4),
(1328, 234503, 'Semester 4', 'CSE-402', 3),
(1329, 234503, 'Semester 4', 'CSE-403', 3.25),
(1330, 234503, 'Semester 4', 'CSE-404', 3.5),
(1331, 234503, 'Semester 4', 'CSE-405', 3.75),
(1332, 234503, 'Semester 4', 'CSE-406', 4),
(1333, 234503, 'Semester 4', 'CSE-407', 3.25),
(1334, 234503, 'Semester 4', 'CSE-408', 3.5),
(1335, 234503, 'Semester 4', 'GED-401', 3.75),
(1336, 234503, 'Semester 4', 'CSE-409', 4),
(1337, 234503, 'Semester 5', 'CSE-501', 3),
(1338, 234503, 'Semester 5', 'CSE-502', 3.25),
(1339, 234503, 'Semester 5', 'CSE-503', 3.5),
(1340, 234503, 'Semester 5', 'CSE-504', 3.75),
(1341, 234503, 'Semester 5', 'CSE-505', 4),
(1342, 234503, 'Semester 5', 'CSE-506', 3.25),
(1343, 234503, 'Semester 5', 'CSE-507', 3.5),
(1344, 234503, 'Semester 5', 'CSE-508', 3.75),
(1345, 234503, 'Semester 5', 'GED-501', 4),
(1346, 234503, 'Semester 5', 'CSE-509', 3.25),
(1347, 234503, 'Semester 6', 'CSE-601', 3.5),
(1348, 234503, 'Semester 6', 'CSE-602', 3.75),
(1349, 234503, 'Semester 6', 'CSE-603', 4),
(1350, 234503, 'Semester 6', 'CSE-604', 3),
(1351, 234503, 'Semester 6', 'CSE-605', 3.25),
(1352, 234503, 'Semester 6', 'CSE-606', 3.5),
(1353, 234503, 'Semester 6', 'CSE-607', 3.75),
(1354, 234503, 'Semester 6', 'CSE-608', 4),
(1355, 234503, 'Semester 6', 'CSE-609', 3.25),
(1356, 234503, 'Semester 6', 'GED-601', 3.5),
(1357, 234503, 'Semester 7', 'CSE-701', 3.75),
(1358, 234503, 'Semester 7', 'CSE-702', 4),
(1359, 234503, 'Semester 7', 'CSE-703', 3),
(1360, 234503, 'Semester 7', 'CSE-704', 3.25),
(1361, 234503, 'Semester 7', 'CSE-705', 3.5),
(1362, 234503, 'Semester 7', 'CSE-706', 3.75),
(1363, 234503, 'Semester 7', 'CSE-707', 4),
(1364, 234503, 'Semester 7', 'CSE-708', 3.25),
(1365, 234503, 'Semester 7', 'CSE-709', 3.5),
(1366, 234503, 'Semester 7', 'CSE-710', 3.75),
(1367, 234503, 'Semester 8', 'CSE-801', 4),
(1368, 234503, 'Semester 8', 'CSE-802', 3),
(1369, 234503, 'Semester 8', 'CSE-803', 3.25),
(1370, 234503, 'Semester 8', 'CSE-804', 3.5),
(1371, 234503, 'Semester 8', 'CSE-805', 3.75),
(1372, 234503, 'Semester 8', 'CSE-806', 4),
(1373, 234503, 'Semester 8', 'CSE-807', 3.25),
(1374, 234503, 'Semester 8', 'CSE-808', 3.5),
(1375, 234601, 'Semester 1', 'EEE-101', 3.25),
(1376, 234601, 'Semester 1', 'EEE-102', 3.5),
(1377, 234601, 'Semester 1', 'MATH-101', 3.75),
(1378, 234601, 'Semester 1', 'PHY-101', 4),
(1379, 234601, 'Semester 1', 'PHY-102', 3),
(1380, 234601, 'Semester 1', 'ENG-101', 3.25),
(1381, 234601, 'Semester 1', 'CSE-101', 3.5),
(1382, 234601, 'Semester 1', 'GED-101', 3.75),
(1383, 234601, 'Semester 1', 'EEE-103', 4),
(1384, 234601, 'Semester 2', 'EEE-201', 3.5),
(1385, 234601, 'Semester 2', 'EEE-202', 3.75),
(1386, 234601, 'Semester 2', 'MATH-201', 4),
(1387, 234601, 'Semester 2', 'CHEM-201', 3),
(1388, 234601, 'Semester 2', 'CHEM-202', 3.25),
(1389, 234601, 'Semester 2', 'CSE-201', 3.5),
(1390, 234601, 'Semester 2', 'CSE-202', 3.75),
(1391, 234601, 'Semester 2', 'STAT-201', 4),
(1392, 234601, 'Semester 2', 'GED-201', 3.25),
(1393, 234601, 'Semester 2', 'EEE-203', 3.5),
(1394, 234601, 'Semester 3', 'EEE-301', 3.75),
(1395, 234601, 'Semester 3', 'EEE-302', 4),
(1396, 234601, 'Semester 3', 'EEE-303', 3),
(1397, 234601, 'Semester 3', 'EEE-304', 3.25),
(1398, 234601, 'Semester 3', 'EEE-305', 3.5),
(1399, 234601, 'Semester 3', 'MATH-301', 3.75),
(1400, 234601, 'Semester 3', 'EEE-306', 4),
(1401, 234601, 'Semester 3', 'EEE-307', 3.25),
(1402, 234601, 'Semester 3', 'GED-301', 3.5),
(1403, 234601, 'Semester 3', 'EEE-308', 3.75),
(1404, 234601, 'Semester 4', 'EEE-401', 4),
(1405, 234601, 'Semester 4', 'EEE-402', 3),
(1406, 234601, 'Semester 4', 'EEE-403', 3.25),
(1407, 234601, 'Semester 4', 'EEE-404', 3.5),
(1408, 234601, 'Semester 4', 'EEE-405', 3.75),
(1409, 234601, 'Semester 4', 'EEE-406', 4),
(1410, 234601, 'Semester 4', 'EEE-407', 3.25),
(1411, 234601, 'Semester 4', 'EEE-408', 3.5),
(1412, 234601, 'Semester 4', 'GED-401', 3.75),
(1413, 234601, 'Semester 4', 'EEE-409', 4),
(1414, 234601, 'Semester 5', 'EEE-501', 3),
(1415, 234601, 'Semester 5', 'EEE-502', 3.25),
(1416, 234601, 'Semester 5', 'EEE-503', 3.5),
(1417, 234601, 'Semester 5', 'EEE-504', 3.75),
(1418, 234601, 'Semester 5', 'EEE-505', 4),
(1419, 234601, 'Semester 5', 'EEE-506', 3.25),
(1420, 234601, 'Semester 5', 'EEE-507', 3.5),
(1421, 234601, 'Semester 5', 'EEE-508', 3.75),
(1422, 234601, 'Semester 5', 'GED-501', 4),
(1423, 234601, 'Semester 5', 'EEE-509', 3.25),
(1424, 234601, 'Semester 6', 'EEE-601', 3.5),
(1425, 234601, 'Semester 6', 'EEE-602', 3.75),
(1426, 234601, 'Semester 6', 'EEE-603', 4),
(1427, 234601, 'Semester 6', 'EEE-604', 3),
(1428, 234601, 'Semester 6', 'EEE-605', 3.25),
(1429, 234601, 'Semester 6', 'EEE-606', 3.5),
(1430, 234601, 'Semester 6', 'EEE-607', 3.75),
(1431, 234601, 'Semester 6', 'EEE-608', 4),
(1432, 234601, 'Semester 6', 'GED-601', 3.25),
(1433, 234601, 'Semester 6', 'EEE-609', 3.5),
(1434, 234601, 'Semester 7', 'EEE-701', 3.75),
(1435, 234601, 'Semester 7', 'EEE-702', 4),
(1436, 234601, 'Semester 7', 'EEE-703', 3),
(1437, 234601, 'Semester 7', 'EEE-704', 3.25),
(1438, 234601, 'Semester 7', 'EEE-705', 3.5),
(1439, 234601, 'Semester 7', 'EEE-706', 3.75),
(1440, 234601, 'Semester 7', 'EEE-707', 4),
(1441, 234601, 'Semester 7', 'EEE-708', 3.25),
(1442, 234601, 'Semester 7', 'EEE-709', 3.5),
(1443, 234601, 'Semester 7', 'EEE-710', 3.75),
(1444, 234601, 'Semester 8', 'EEE-801', 4),
(1445, 234601, 'Semester 8', 'EEE-802', 3),
(1446, 234601, 'Semester 8', 'EEE-803', 3.25),
(1447, 234601, 'Semester 8', 'EEE-804', 3.5),
(1448, 234601, 'Semester 8', 'EEE-805', 3.75),
(1449, 234601, 'Semester 8', 'EEE-806', 4),
(1450, 234601, 'Semester 8', 'EEE-807', 3.25),
(1451, 234601, 'Semester 8', 'EEE-808', 3.5);

-- --------------------------------------------------------

--
-- Table structure for table `routine`
--

CREATE TABLE `routine` (
  `id` int(11) NOT NULL,
  `dept` int(11) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `routine`
--

INSERT INTO `routine` (`id`, `dept`, `picture`, `file`) VALUES
(14, 1, 'Routine/Routine-1775164830.jpg', 'Routine/Routine-1775164830.jpg'),
(15, 2, 'Routine/Routine-1775164862.jpg', 'Routine/Routine-1775164862.pdf'),
(16, 3, 'Routine/Routine-1775164889.jpg', 'Routine/Routine-1775164889.pdf'),
(17, 4, 'Routine/Routine-1775164930.jpg', 'Routine/Routine-1775164930.pdf'),
(18, 5, 'Routine/Routine-1775164960.jpg', 'Routine/Routine-1775164960.pdf'),
(19, 6, 'Routine/Routine-1775164977.jpg', 'Routine/Routine-1775164977.pdf'),
(20, 7, 'Routine/Routine-1775165005.jpg', 'Routine/Routine-1775165005.pdf'),
(21, 8, 'Routine/Routine-1775165022.jpg', 'Routine/Routine-1775165022.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `studentID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(100) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dept` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `studentID`, `name`, `address`, `phone`, `picture`, `email`, `password`, `dept`) VALUES
(24, 234501, 'Md. Ismail Hossain', 'Thakurgaon, Bangladesh', '01755551111', 'StudentPicture/Student-1775418164.jpeg', 'mdismailhossain@gmail.com', 'ismail', 1),
(25, 234502, 'Saikat Talukdar', 'Sylhet Division, Bangladesh', '01788996655', 'StudentPicture/Student-1775415715.jpeg', 'saikattalukdar@gmail.com', 'saikat', 1),
(26, 234503, 'Dipanwitaa Moitree', 'Sylhet Division, Bangladesh', '01766554477', 'StudentPicture/Student-1775416652.jpeg', 'dipanwitaamoitree@gmail.com', 'moitree', 1),
(27, 234601, 'Tim David Wilson', 'City in New York State, USA', '+1 415-782-3412', 'StudentPicture/Student-1775463681.jpg', 'timdavid00@gmail.com', 'david', 2);

-- --------------------------------------------------------

--
-- Table structure for table `studentadvisor`
--

CREATE TABLE `studentadvisor` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `picture` varchar(255) NOT NULL,
  `dept` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `studentadvisor`
--

INSERT INTO `studentadvisor` (`id`, `name`, `designation`, `details`, `picture`, `dept`) VALUES
(1, 'Prof. Andrew Clark', 'Student Advisor', '<span><b>Office Hours: </b>Every Tuesday,<b> 10:00 AM – 12:00 PM</b><br>\r\n<b>Advising Focus:</b> Academic Progress, Career Guidance</span>\r\n<br>Students are encouraged to schedule meetings for academic support, course advising, and any educational concerns.', 'Faculty/Faculty-1774733689.jpg', 1),
(2, 'Prof. Charles Allen', 'Student Advisor', '<b>Office Hours:</b> Every Tuesday, <b>10:00 AM – 12:00 PM</b><br>\r\n<b>Advising Focus:</b> Academic Progress, Career Guidance<br>\r\nStudents are encouraged to schedule meetings for academic support, course advising, and any educational concerns.', 'Faculty/Faculty-1774993484.jpg', 2),
(3, 'Prof. Ethan Richardson', 'Student Advisor', '<b>Office Hours:</b> Every Tuesday, <b>10:00 AM – 12:00 PM</b><br>\r\n<b>Advising Focus:</b> Academic Progress, Career Guidance<br>\r\nStudents are encouraged to schedule meetings for academic support, course advising, and any educational concerns.', 'Faculty/Faculty-1774997750.jpg', 3),
(4, 'Prof. Adrian Caldwell', 'Student Advisor', '<b>Office Hours:&nbsp;</b>Every Tuesday,<b>&nbsp;10:00 AM – 12:00 PM</b><br><b>Advising Focus:</b>&nbsp;Academic Progress, Career Guidance<br>Students are encouraged to schedule meetings for academic support, course advising, and any educational concerns.', 'Faculty/Faculty-1774998793.jpg', 4),
(5, 'Prof. Sophie Turner', 'Student Advisor', '<b>Office Hours:&nbsp;</b>Every Tuesday,<b>&nbsp;10:00 AM – 12:00 PM</b><br><b>Advising Focus:</b>&nbsp;Academic Progress, Career Guidance<br>Students are encouraged to schedule meetings for academic support, course advising, and any educational concerns.', 'Faculty/Faculty-1775072134.jpg', 5),
(6, 'Prof. Vanessa Coleman', 'Student Advisor', '<b>Office Hours:&nbsp;</b>Every Tuesday,<b>&nbsp;10:00 AM – 12:00 PM</b><br><b>Advising Focus:</b>&nbsp;Academic Progress, Career Guidance<br>Students are encouraged to schedule meetings for academic support, course advising, and any educational concerns.', 'Faculty/Faculty-1775084303.jpg', 6),
(7, 'Prof. Olivia Grant', 'Student Advisor', '<b>Office Hours:&nbsp;</b>Every Tuesday,<b>&nbsp;10:00 AM – 12:00 PM</b><br><b>Advising Focus:</b>&nbsp;Academic Progress, Career Guidance<br>Students are encouraged to schedule meetings for academic support, course advising, and any educational concerns.', 'Faculty/Faculty-1775085563.jpg', 7),
(8, 'Prof. Amanda Collins', 'Student Advisor', '<b>Office Hours:&nbsp;</b>Every Tuesday,<b>&nbsp;10:00 AM – 12:00 PM</b><br><b>Advising Focus:</b>&nbsp;Academic Progress, Career Guidance<br>Students are encouraged to schedule meetings for academic support, course advising, and any educational concerns.', 'Faculty/Faculty-1775213825.jpg', 8);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vc`
--

CREATE TABLE `vc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `vc`
--

INSERT INTO `vc` (`id`, `name`, `designation`, `details`, `picture`) VALUES
(2, 'Dr. John Smith', 'Vice-Chancellor', 'The Vice-Chancellor is the highest authority and chief executive of the university. He is responsible for overseeing all academic and administrative activities, ensuring quality education, and maintaining discipline within the institution. The Vice-Chancellor plays a vital role in decision-making, policy implementation, and the overall development of the university.', 'Faculty/Faculty-1774721001.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `affiliatelogo`
--
ALTER TABLE `affiliatelogo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bannercategory`
--
ALTER TABLE `bannercategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactinfo`
--
ALTER TABLE `contactinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `curriculam`
--
ALTER TABLE `curriculam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallerycategory`
--
ALTER TABLE `gallerycategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `librarian`
--
ALTER TABLE `librarian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noticeboard`
--
ALTER TABLE `noticeboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routine`
--
ALTER TABLE `routine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentadvisor`
--
ALTER TABLE `studentadvisor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vc`
--
ALTER TABLE `vc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `affiliatelogo`
--
ALTER TABLE `affiliatelogo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `bannercategory`
--
ALTER TABLE `bannercategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contactinfo`
--
ALTER TABLE `contactinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `curriculam`
--
ALTER TABLE `curriculam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1516;

--
-- AUTO_INCREMENT for table `dept`
--
ALTER TABLE `dept`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `gallerycategory`
--
ALTER TABLE `gallerycategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `librarian`
--
ALTER TABLE `librarian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `noticeboard`
--
ALTER TABLE `noticeboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1452;

--
-- AUTO_INCREMENT for table `routine`
--
ALTER TABLE `routine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `studentadvisor`
--
ALTER TABLE `studentadvisor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vc`
--
ALTER TABLE `vc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
