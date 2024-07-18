-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2024 at 11:09 AM
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
-- Database: `communication-nurse`
--

-- --------------------------------------------------------

--
-- Table structure for table `ccfn_form_p`
--

CREATE TABLE `ccfn_form_p` (
  `id` int(11) NOT NULL,
  `ref` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `personnel` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `social` varchar(255) DEFAULT NULL,
  `option` varchar(255) NOT NULL,
  `date_a` date NOT NULL,
  `communicate` varchar(255) NOT NULL,
  `production_file` varchar(255) NOT NULL,
  `status_user` int(11) DEFAULT 0,
  `status_sendline_user` tinyint(1) DEFAULT 0,
  `status_admin` int(11) DEFAULT 0,
  `status_sendline_admin` tinyint(1) DEFAULT 0,
  `status_ss` int(11) DEFAULT 0,
  `status_sendline_ss` tinyint(1) DEFAULT 0,
  `status_email` int(11) DEFAULT 0,
  `responsible_1` tinyint(10) NOT NULL DEFAULT 0,
  `responsible_status_1` tinyint(10) NOT NULL DEFAULT 0,
  `responsible_2` tinyint(10) NOT NULL DEFAULT 2,
  `responsible_3` tinyint(10) NOT NULL DEFAULT 3,
  `ref2` varchar(10) NOT NULL DEFAULT '07',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ccfn_form_p`
--

INSERT INTO `ccfn_form_p` (`id`, `ref`, `fullname`, `department`, `tel`, `personnel`, `email`, `social`, `option`, `date_a`, `communicate`, `production_file`, `status_user`, `status_sendline_user`, `status_admin`, `status_sendline_admin`, `status_ss`, `status_sendline_ss`, `status_email`, `responsible_1`, `responsible_status_1`, `responsible_2`, `responsible_3`, `ref2`, `created_at`) VALUES
(33, 'NQYIbPjFBduJNST', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Website', 'sent_email', '2024-07-20', 'ด้านบุคลากร', 'messageImage_1720407448702.jpg', 1, 1, 0, 0, 0, 0, 1, 0, 0, 2, 3, '07', '2024-07-17 03:49:45'),
(34, 'Sh3uPdNTK3R34Lm', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Facebook', 'sent_email', '2024-07-20', 'ด้านผลิตภัณฑ์(การศึกษา การวิจัย บริการวิชาการ)', '03.png', 1, 1, 0, 0, 0, 0, 1, 0, 0, 2, 3, '07', '2024-07-17 03:50:09'),
(35, '9FhTmNruZgrzelR', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'LinkedIn', 'sent_email', '2024-07-20', 'ด้านผลิตภัณฑ์(การศึกษา การวิจัย บริการวิชาการ)', '06.png', 1, 1, 0, 0, 0, 0, 1, 0, 0, 2, 3, '07', '2024-07-17 03:50:32'),
(36, 'Lg7jKa7aypEZ5rI', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Twitter', 'sent_email', '2024-07-20', 'ด้านผลิตภัณฑ์(การศึกษา การวิจัย บริการวิชาการ)', 'cover.jpg', 1, 1, 0, 0, 0, 0, 1, 0, 0, 2, 3, '07', '2024-07-17 03:51:02'),
(37, 'XAB39M7o01faaoQ', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Instagram', 'sent_email', '2024-07-20', 'ประชุม/อบรม/สัมมนา', '06.png', 1, 1, 0, 0, 0, 0, 1, 0, 0, 2, 3, '07', '2024-07-17 03:52:07'),
(38, 'nADKFS4i1ZpdRtr', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Facebook', 'sent_email', '2024-07-20', 'ด้านบุคลากร', '02.png.png', 2, 1, 0, 0, 0, 0, 1, 0, 0, 2, 3, '07', '2024-07-17 03:54:49'),
(39, 'tYg9VLkK3Oz6IQ8', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Facebook', 'sent_email', '2024-07-22', 'ด้านบุคลากร', '02.png.png', 1, 1, 0, 0, 0, 0, 1, 0, 0, 2, 3, '07', '2024-07-17 04:00:58'),
(40, '1Kz2w0kxZyaisPd', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Website, Facebook', 'sent_email', '2024-07-22', 'comm3', '02.png.png', 3, 1, 0, 1, 0, 0, 1, 0, 0, 2, 3, '07', '2024-07-17 04:04:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ccfn_form_p`
--
ALTER TABLE `ccfn_form_p`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ccfn_form_p`
--
ALTER TABLE `ccfn_form_p`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
