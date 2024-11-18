-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2023 at 03:29 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;
/*!40101 SET NAMES utf8mb4 */
;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
    `admin_id` int(11) NOT NULL,
    `user_name` varchar(30) NOT NULL,
    `pass` varchar(30) NOT NULL,
    `name` varchar(30) DEFAULT NULL,
    `mobile` varchar(30) DEFAULT NULL,
    `email` varchar(30) DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO
    `admin` (
        `admin_id`,
        `user_name`,
        `pass`,
        `name`,
        `mobile`,
        `email`
    )
VALUES (
        38,
        'anshu',
        '123456',
        'Anshu',
        '0000000000',
        'example@gmail.com'
    ),
    (
        39,
        'admin',
        'admin@admin',
        'Ashish',
        '0000000000',
        'admin@gmail.com'
    );

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
    `class_id` int(11) NOT NULL,
    `class` varchar(10) DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO
    `class` (`class_id`, `class`)
VALUES (1, 'BCOM'),
    (2, 'BSC'),
    (3, 'BA'),
    (4, 'BCA'),
    (5, 'MBA');

-- --------------------------------------------------------

--
-- Table structure for table `student_record`
--

CREATE TABLE `student_record` (
    `id` int(11) NOT NULL,
    `s_name` varchar(30) DEFAULT NULL,
    `s_address` varchar(30) DEFAULT NULL,
    `s_class` int(11) DEFAULT NULL,
    `s_mobile` varchar(30) DEFAULT NULL,
    `s_gender` varchar(10) DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Dumping data for table `student_record`
--

INSERT INTO
    `student_record` (
        `id`,
        `s_name`,
        `s_address`,
        `s_class`,
        `s_mobile`,
        `s_gender`
    )
VALUES (
        12,
        'Ashish',
        'Badarpur Border',
        5,
        '9876568765',
        'Male'
    ),
    (
        13,
        'Anshu',
        'Lajpat Nagar',
        1,
        '9310612442',
        'Male'
    ),
    (
        14,
        'Sachin',
        'Lal Kuan',
        2,
        '5467380987',
        'Male'
    ),
    (
        15,
        'Rohit',
        'Prem Nagar',
        3,
        '9876568765',
        'Male'
    ),
    (
        16,
        'Seema',
        'PhaladPur',
        2,
        '7656787653',
        'Female'
    ),
    (
        17,
        'Shivani',
        'Lajpat Nagar',
        4,
        '7656787653',
        'Female'
    );

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin` ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class` ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `student_record`
--
ALTER TABLE `student_record` ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 40;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 6;

--
-- AUTO_INCREMENT for table `student_record`
--
ALTER TABLE `student_record`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 20;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;