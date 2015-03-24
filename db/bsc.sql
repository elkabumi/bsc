-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Mar 2015 pada 16.25
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bsc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `survey`
--

CREATE TABLE IF NOT EXISTS `survey` (
`survey_id` int(11) NOT NULL,
  `site_name` varchar(100) NOT NULL,
  `bsc_name` varchar(100) NOT NULL,
  `site_id` varchar(100) NOT NULL,
  `project` text NOT NULL,
  `region` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `create_by_id` int(11) NOT NULL,
  `update_by_id` int(11) NOT NULL,
  `create_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `survey`
--

INSERT INTO `survey` (`survey_id`, `site_name`, `bsc_name`, `site_id`, `project`, `region`, `branch`, `create_by_id`, `update_by_id`, `create_date`) VALUES
(9, 'MALANG MSC', 'MCRNC_MALANG_03', '20MLG026', 'AOP2014 Non Refarming East Java', 'EAST JAVA', 'MALANG', 11, 11, '2015-03-18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `survey_details`
--

CREATE TABLE IF NOT EXISTS `survey_details` (
`sd_id` int(11) NOT NULL,
  `survey_id` int(11) NOT NULL,
  `sd_number` int(11) NOT NULL,
  `sd_page` int(11) NOT NULL,
  `sd_answer` text NOT NULL,
  `sd_export` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `survey_details`
--

INSERT INTO `survey_details` (`sd_id`, `survey_id`, `sd_number`, `sd_page`, `sd_answer`, `sd_export`) VALUES
(91, 9, 1, 2, '20MLG026', 0),
(92, 9, 2, 2, 'MCRNC_MALANG_03', 0),
(93, 9, 3, 2, 'MALANG', 0),
(94, 9, 4, 2, 'JL. JAKSA AGUNG SUPRAPTO NO.47 MALANG - JATIM', 0),
(95, 9, 5, 2, '-7,9693894', 0),
(96, 9, 6, 2, '112,6318548', 0),
(97, 9, 7, 2, 'EJBN', 0),
(98, 9, 8, 2, 'MALANG', 0),
(99, 9, 9, 2, 'EAST JAVA', 0),
(100, 9, 10, 2, '2', 0),
(101, 9, 11, 2, '', 0),
(102, 9, 12, 2, '2', 0),
(103, 9, 13, 2, 'JL. A YANI-JL JAKSA AGUNG SUPRAPTO -SITE ADDRESS', 0),
(104, 9, 14, 2, 'INDOSAT MALANG, JL. JAKSA AGUNG SUPRAPTO NO.47 MALANG', 0),
(105, 9, 1, 3, '20131108041101Gunung Bromo.jpg', 0),
(106, 9, 2, 3, '20131108041107Tambang.jpg', 0),
(107, 9, 3, 3, 'Gambar 2', 0),
(108, 9, 4, 3, 'Gambar 1', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `survey_landlord`
--

CREATE TABLE IF NOT EXISTS `survey_landlord` (
`sl_id` int(11) NOT NULL,
  `survey_id` int(11) NOT NULL,
  `sl_number` int(11) NOT NULL,
  `sl_name` varchar(100) NOT NULL,
  `sl_address` text NOT NULL,
  `sl_phone` varchar(100) NOT NULL,
  `sl_fax` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `survey_landlord`
--

INSERT INTO `survey_landlord` (`sl_id`, `survey_id`, `sl_number`, `sl_name`, `sl_address`, `sl_phone`, `sl_fax`) VALUES
(21, 9, 1, '1', '', '', ''),
(22, 9, 2, '2', '', '', ''),
(23, 9, 3, '3', '', '', ''),
(24, 9, 4, '4', '', '', ''),
(25, 9, 5, '5', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(11) NOT NULL,
  `user_type_id` int(11) DEFAULT NULL,
  `user_login` varchar(100) DEFAULT NULL,
  `user_password` varchar(100) DEFAULT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_code` varchar(100) DEFAULT NULL,
  `user_phone` varchar(100) DEFAULT NULL,
  `user_img` text NOT NULL,
  `user_active_status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `user_type_id`, `user_login`, `user_password`, `user_name`, `user_code`, `user_phone`, `user_img`, `user_active_status`) VALUES
(11, 1, 'melon', '3a2cf27458c9aa3e358f8fc0f002bff6', 'melon', 'A0001', '03125435432', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
 ADD PRIMARY KEY (`survey_id`);

--
-- Indexes for table `survey_details`
--
ALTER TABLE `survey_details`
 ADD PRIMARY KEY (`sd_id`);

--
-- Indexes for table `survey_landlord`
--
ALTER TABLE `survey_landlord`
 ADD PRIMARY KEY (`sl_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
MODIFY `survey_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `survey_details`
--
ALTER TABLE `survey_details`
MODIFY `sd_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=109;
--
-- AUTO_INCREMENT for table `survey_landlord`
--
ALTER TABLE `survey_landlord`
MODIFY `sl_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
