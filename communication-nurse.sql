-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2024 at 04:57 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `cmuitaccount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `cmuitaccount`) VALUES
(1, 'phatcharapon.p@cmu.ac.th');

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
  `status_admin` text DEFAULT '0',
  `status_sendline_admin` tinyint(1) DEFAULT 0,
  `status_ss` int(11) DEFAULT 0,
  `status_sendline_ss` tinyint(1) DEFAULT 0,
  `status_email` int(11) DEFAULT 0,
  `responsible_1` varchar(255) NOT NULL DEFAULT '0',
  `responsible_status_1` tinyint(10) NOT NULL DEFAULT 0,
  `responsible_2` tinyint(10) NOT NULL DEFAULT 2,
  `responsible_3` tinyint(10) NOT NULL DEFAULT 3,
  `ref2` varchar(10) NOT NULL DEFAULT '07',
  `status_user2` tinyint(10) NOT NULL DEFAULT 0 COMMENT '	กำเนินการตามคำร้องขอ',
  `status_user3` tinyint(10) NOT NULL DEFAULT 0 COMMENT 'ส่งกลับเพื่อแก้ไข',
  `status_user4` tinyint(10) NOT NULL DEFAULT 0 COMMENT 'ส่งมอบ',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ccfn_form_p`
--

INSERT INTO `ccfn_form_p` (`id`, `ref`, `fullname`, `department`, `tel`, `personnel`, `email`, `social`, `option`, `date_a`, `communicate`, `production_file`, `status_user`, `status_sendline_user`, `status_admin`, `status_sendline_admin`, `status_ss`, `status_sendline_ss`, `status_email`, `responsible_1`, `responsible_status_1`, `responsible_2`, `responsible_3`, `ref2`, `status_user2`, `status_user3`, `status_user4`, `created_at`) VALUES
(33, 'NQYIbPjFBduJNST', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Website', 'sent_email', '2024-07-20', 'ด้านบุคลากร', 'messageImage_1720407448702.jpg', 1, 1, '0', 0, 0, 0, 1, '0', 0, 2, 3, '07', 0, 0, 0, '2024-07-17 03:49:45'),
(34, 'Sh3uPdNTK3R34Lm', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Facebook', 'sent_email', '2024-07-20', 'ด้านผลิตภัณฑ์(การศึกษา การวิจัย บริการวิชาการ)', '03.png', 1, 1, '0', 0, 0, 0, 1, '0', 0, 2, 3, '07', 0, 0, 0, '2024-07-17 03:50:09'),
(35, '9FhTmNruZgrzelR', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'LinkedIn', 'sent_email', '2024-07-20', 'ด้านผลิตภัณฑ์(การศึกษา การวิจัย บริการวิชาการ)', '06.png', 2, 1, '0', 0, 0, 0, 1, 'phatcharapon.p@cmu.ac.th', 0, 2, 3, '07', 1, 0, 0, '2024-07-17 03:50:32'),
(36, 'Lg7jKa7aypEZ5rI', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Twitter', 'sent_email', '2024-07-20', 'ด้านผลิตภัณฑ์(การศึกษา การวิจัย บริการวิชาการ)', 'cover.jpg', 3, 1, 'ทดสอบการอัพเดทค่าแอดมิน', 0, 0, 0, 1, 'phatcharapon.p@cmu.ac.th', 0, 2, 3, '07', 1, 1, 0, '2024-07-17 03:51:02'),
(37, 'XAB39M7o01faaoQ', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Instagram', 'sent_email', '2024-07-20', 'ประชุม/อบรม/สัมมนา', '06.png', 3, 1, 'ทดสอบการอัพเดทค่าแอดมิน', 0, 0, 0, 1, 'phatcharapon.p@cmu.ac.th', 0, 2, 3, '07', 1, 1, 0, '2024-07-17 03:52:07'),
(38, 'nADKFS4i1ZpdRtr', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Facebook', 'sent_email', '2024-07-20', 'ด้านบุคลากร', '02.png.png', 3, 1, 'ทดสอบการอัพเดทค่าแอดมิน', 0, 0, 0, 1, '0', 0, 2, 3, '07', 1, 1, 0, '2024-07-17 03:54:49'),
(39, 'tYg9VLkK3Oz6IQ8', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Facebook', 'sent_email', '2024-07-22', 'ด้านบุคลากร', '02.png.png', 2, 1, '0', 0, 0, 0, 1, '0', 0, 2, 3, '07', 1, 0, 0, '2024-07-17 04:00:58'),
(40, '1Kz2w0kxZyaisPd', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Website, Facebook', 'sent_email', '2024-07-22', 'comm3', '02.png.png', 3, 1, '0', 1, 0, 0, 1, '0', 0, 2, 3, '07', 0, 0, 0, '2024-07-17 04:04:00'),
(41, 'J5mUNRoQighHc6I', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Website', 'sent_email', '2024-07-24', 'comm3', 'ccfn_form_p (9).sql', 4, 1, '0', 0, 0, 0, 1, '0', 0, 2, 3, '07', 1, 0, 1, '2024-07-19 02:48:49'),
(42, '4dd4nZskipwVBNd', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Website, Facebook, Line Official, LinkedIn', 'sent_email', '2024-07-24', 'comm3', 'ccfn_form_s (10).sql', 2, 1, '0', 0, 0, 0, 1, '0', 0, 2, 3, '07', 1, 0, 0, '2024-07-19 02:52:09'),
(43, 'n7ANp3xjevAcCoC', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Website, Facebook', 'sent_email', '2024-08-09', 'comm4', 'เว็บไซต์การประเมินความเสี่ยงเบาหวาน.docx', 1, 1, '0', 0, 0, 0, 1, '0', 0, 2, 3, '07', 0, 0, 0, '2024-08-04 05:55:47'),
(44, '3OtABgtseq3MdgS', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Website, Facebook, Line Official', 'sent_email', '2024-08-09', 'comm1', 'admin.sql', 1, 1, '0', 0, 0, 1, 1, '0', 0, 2, 3, '07', 0, 0, 0, '2024-08-04 14:00:53'),
(45, '5uHmmORvv18nxyj', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Facebook', 'sent_email', '2024-08-09', 'comm1', 'ccfn_form_s.sql', 1, 1, '0', 0, 0, 1, 1, '0', 0, 2, 3, '07', 0, 0, 0, '2024-08-04 14:06:11');

-- --------------------------------------------------------

--
-- Table structure for table `ccfn_form_s`
--

CREATE TABLE `ccfn_form_s` (
  `id` int(11) NOT NULL,
  `ref` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `department` varchar(100) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `personnel` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `social` text DEFAULT NULL,
  `option` enum('file','url') NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `date_a` datetime DEFAULT NULL,
  `communicate` text DEFAULT NULL,
  `file_names` text DEFAULT NULL,
  `upload_url` text DEFAULT NULL,
  `status_user` tinyint(1) DEFAULT 0 COMMENT '1ร้องขอ\r\n2ส่งต่อ\r\n3ส่งแก้ไข\r\n4ส่งมอบ',
  `status_sendline_user` tinyint(1) DEFAULT 0 COMMENT '1 ส่งแจ้งเตือนสำเร็จ',
  `status_admin` text NOT NULL COMMENT 'หมายเหตุแก้ไข',
  `status_sendline_admin` tinyint(1) DEFAULT 0 COMMENT 'ส่งแจ้งเตือนแก้ขไสำเร็จ',
  `status_ss` tinyint(1) DEFAULT 0,
  `status_sendline_ss` tinyint(1) DEFAULT 0 COMMENT 'คำขอใหม่',
  `status_email` tinyint(1) NOT NULL,
  `responsible_1` varchar(255) NOT NULL DEFAULT '0' COMMENT 'มอบหมายคนที่1',
  `responsible_status_1` tinyint(2) NOT NULL DEFAULT 0 COMMENT '1 มอบหมายสำเร็จ',
  `responsible_2` varchar(255) NOT NULL DEFAULT '2' COMMENT 'มอบหมายคนที่2',
  `responsible_3` varchar(255) NOT NULL DEFAULT '3' COMMENT 'มอบหมายคนที่3',
  `ref2` varchar(10) NOT NULL DEFAULT '07' COMMENT 'เลขอ้างอิง',
  `status_user2` tinyint(10) NOT NULL DEFAULT 0 COMMENT 'กำเนินการตามคำร้องขอ',
  `status_user3` tinyint(10) NOT NULL DEFAULT 0 COMMENT 'ส่งกลับเพื่อแก้ไข',
  `status_user4` tinyint(10) NOT NULL DEFAULT 0 COMMENT 'ส่งมอบ',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ccfn_form_s`
--

INSERT INTO `ccfn_form_s` (`id`, `ref`, `fullname`, `department`, `tel`, `personnel`, `email`, `social`, `option`, `title`, `details`, `date_a`, `communicate`, `file_names`, `upload_url`, `status_user`, `status_sendline_user`, `status_admin`, `status_sendline_admin`, `status_ss`, `status_sendline_ss`, `status_email`, `responsible_1`, `responsible_status_1`, `responsible_2`, `responsible_3`, `ref2`, `status_user2`, `status_user3`, `status_user4`, `created_at`) VALUES
(9, 'g8oDVYLBXrzxbVL', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป หน่วยสื่อสารและภาพลักษณ์องค์กร', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Website, Facebook Official (TH), Facebook Official (En), Instagram, Twitter', 'file', 'พิธีลงนามในบันทึกข้อตกลงการดำเนินแผนธุรกิจโครงการจัดตั้งศูนย์ดูแลเด็กปฐมวัยเพื่อพัฒนาการสมองและทักษะแห่งศตวรรษที่ 21 (NDUX Childcare Center)  ', 'คณะพยาบาลศาสตร์ มหาวิทยาลัยเชียงใหม่ ร่วมกับ ศูนย์นวัตกรรมการจัดการ คณะบริหารธุรกิจ มหาวิทยาลัยเชียงใหม่ จัดพิธีลงนามในบันทึกข้อตกลงการดำเนินแผนธุรกิจ โครงการจัดตั้งศูนย์ดูแลเด็กปฐมวัยเพื่อพัฒนาการสมองและทักษะแห่งศตวรรษที่ 21 (ต้นแบบ NeuroeducationX - NDUX Childcare Center) โดยได้รับเกียรติจาก ผู้ช่วยศาสตราจารย์ ดร.ธานี แก้วธรรมนุกูล คณบดีคณะพยาบาลศาสตร์ และ อาจารย์ ดร.นงลักษณ์ เฉลิมสุข รองคณบดีด้านขับเคลื่อนยุทธศาสตร์ สื่อสารและภาพลักษณ์องค์กร พร้อมด้วย รองศาสตราจารย์ ดร.นฤมล กิมภากรณ์ ผู้อำนวยการศูนย์นวัตกรรมการจัดการ และ ดร.ชานนท์ ชิงชยานุรักษ์ รองผู้อำนวยการศูนย์นวัตกรรมการจัดการ คณะบริหารธุรกิจ มหาวิทยาลัยเชียงใหม่ ร่วมลงนาม ณ ห้องประชุมวิลาวัณย์ เสนารัตน์ คณะพยาบาลศาสตร์ เมื่อวันศุกร์ที่ 12 กรกฎาคม 2567', '2024-07-19 00:00:00', 'comm3', 'file_669624036c21d.jpg, file_669624036c438.jpg, file_669624036c5b8.jpg', '', 3, 1, 'ดร.ชานนท์ ชิงชยานุรักษ์ รองผู้อำนวยการศูนย์นวัตกรรมการจัดการ คณะบริหารธุรกิจ มหาวิทยาลัยเชียงใหม่', 1, 0, 0, 1, '0', 0, '2', '3', '07', 0, 0, 0, '2024-07-16 07:40:51'),
(10, 'z7lWmsHr2Uc6L64', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป หน่วยสื่อสารและภาพลักษณ์องค์กร', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Website, Facebook Official (TH)', 'file', 'test', 'test', '2024-07-20 00:00:00', 'comm1', 'file_66972f44a76af.png, file_66972f44a789c.png, file_66972f44a7a5d.png', '', 2, 1, '0', 0, 0, 0, 1, '0', 0, '2', '3', '07', 0, 0, 0, '2024-07-17 02:41:08'),
(11, 'pxV6VUl8K8EbUAX', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป หน่วยสื่อสารและภาพลักษณ์องค์กร', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Website', 'file', 'test', 'test', '2024-07-20 00:00:00', 'comm2', 'file_66972fb3a43ad.png, file_66972fb3a4592.png, file_66972fb3a470a.png, file_66972fb3a48f1.png, file_66972fb3a4b7b.png', '', 2, 1, '0', 0, 0, 0, 1, 'phatcharapon.p@cmu.ac.th', 1, '2', '3', '07', 0, 0, 0, '2024-07-17 02:42:59'),
(12, 'hO79y5MmIFeOz26', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป หน่วยสื่อสารและภาพลักษณ์องค์กร', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Website, Facebook Official (TH), Facebook Official (En)', 'file', 'ทดสอบ', 'ทดสอบ', '2024-07-20 00:00:00', 'comm5', 'file_669732bbc27a9.png, file_669732bbc29b2.png, file_669732bbc2b0d.png, file_669732bbc2c7c.png, file_669732bbc2da9.jpg, file_669732bbc2ef4.jpg', '', 2, 1, '0', 0, 0, 0, 1, 'phatcharapon.p@cmu.ac.th', 1, '2', '3', '07', 0, 0, 0, '2024-07-17 02:55:55'),
(13, 'G9fDqIkzTqn5X7U', 'นาย พัชรพล ปิงยศ', 'งานบริหารงานวิจัย บริการวิชาการ และวิเทศสัมพันธ์ หน่วยบริหารงานวิจัยและบริการวิชาการ', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Website, Facebook Official (TH), Facebook Official (En)', 'file', 'ผู้ช่วยศาสตราจารย์ ดร.ลัพณา กิจรุ่งโรจน์ คณบดีคณะพยาบาลศาสตร์ มหาวิทยาลัยสงขลานครินทร์ ผู้ช่วยศาสตราจารย์ ดร.พิสมัย วัฒนสิทธิ์ รองคณบดีฝ่ายพัฒนาองค์กรและบุคลากร ผู้ช่วยศาสตราจารย์ ดร.วิไลพร สมานกสิกรณ์ ผู้ช่วยคณบดีฝ่ายทรัพยากรการเรียนรู้ และคณจารย์ คณะพยา', 'ได้ร่วมเสวนาและแลกเปลี่ยนเรียนรู้ ในหัวข้อเรื่อง การใช้เทคโนโลยีในการจัดการศึกษาพยาบาล โดยมีวัตถุประสงค์ เพื่อพัฒนาการศึกษาพยาบาล มุมมองการนำเทคโนโลยีมาใช้ในการจัดการศึกษาพยาบาล เส้นทางและความเป็นไปได้ในการพัฒนาเทคโนโลยี VR เพื่อการศึกษาพยาบาล ทั้งนี้ผู้เข้าร่วมการเสวนาฯยังได้ทดลองใช้งาน VR ที่ประกอบด้วย3 หัวข้อหลัก ได้แก่ \r\n1. การวัดแรงดันในหลอดเลือดดำส่วนกลาง \r\n2. การดูแลเด็กป่วยที่ได้รับการใส่ท่อช่วยหายใจ \r\n3. การทำคลอด (การเตรียมตัวและอุปกรณ์ การเตรียมผู้คลอด การทำคลอดในรูปแบบต่าง ๆ การทำคลอดรก การดูแลทารกแรกเกิด การเย็บแผล) \r\nวันอังคารที่ 9  เดือนกรกฎาคม พ.ศ. 2567 ณ คณะพยาบาลศาสตร์ มหาวิทยาลัยสงขลานครินทร์\r\n', '2024-07-20 00:00:00', 'comm3', 'file_669733928f1d6.jpg, file_669733928f41e.jpg, file_669733928f58c.jpg, file_669733928f6af.jpg, file_669733928f7cd.jpg, file_669733928f8d0.jpg', '', 3, 1, 'ทดสอบการอัพเดทค่าแอดมิน', 1, 0, 0, 1, '0', 1, '2', '3', '07', 0, 0, 0, '2024-07-17 02:59:30'),
(14, 'KGqrS4679MUzvmi', 'นาย พัชรพล ปิงยศ', 'งานบริหารงานวิจัย บริการวิชาการ และวิเทศสัมพันธ์ หน่วยบริหารงานวิจัยและบริการวิชาการ', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Website', 'file', 'วันที่ต้องการใช้งาน', 'วันที่ต้องการใช้งาน', '2024-07-20 00:00:00', 'comm1', 'file_6697380f651e0.png', '', 1, 1, '0', 0, 0, 0, 1, '0', 0, '2', '3', '07', 0, 0, 0, '2024-07-17 03:18:39'),
(15, 'HZAgkuCsPUZ1hOp', 'นาย พัชรพล ปิงยศ', 'งานบริหารงานวิจัย บริการวิชาการ และวิเทศสัมพันธ์ หน่วยบริหารงานวิจัยและบริการวิชาการ', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Website, Facebook Official (TH), Facebook Official (En), Line Official, LinkedIn, Instagram, Twitter', 'url', 'คณะพยาบาลศาสตร์ ได้รับการตีพิมพ์ผลงานวิชาการในวารสารระดับนานาชาติ)', 'คณะพยาบาลศาสตร์ มหาวิทยาลัยเชียงใหม่ ขอแสดงความยินดีกับ รศ.ดร.ปิยะนุช ชูโต อาจารย์ประจำกลุ่มวิชาการพยาบาลสูติศาสตร์และนรีเวชวิทยา ที่ได้รับการตีพิมพ์ผลงานวิจัยในวารสารวิชาการระดับนานาชาติ บทความวิจัยเรื่อง &quot;Enhancing clinical performance self-efficacy among nursing students: A virtual clinical laboratory approach&quot; ในวารสาร Teaching and Learning in Nursing ซึ่งอยู่ในฐานข้อมูล Scopus Nursing Q2 และ ISI Q2\r\n \r\nสามารถสืบค้นบทความ ได้ที่ https://doi.org/10.1016/j.teln.2024.06.002', '2024-07-20 10:19:00', 'comm3', '', 'https://docs.google.com/forms/d/1qMrb5qAOC2QF8IbHz_V0GFKe1b_GhLTI2Q7bu0sR6Tg/viewform?edit_requested=true', 1, 1, '0', 0, 0, 0, 1, 'phatcharapon.p@cmu.ac.th', 1, '', '', '07', 0, 0, 0, '2024-07-17 03:21:06'),
(22, 'nFJyZwOIByA8ZlZ', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป หน่วยสื่อสารและภาพลักษณ์องค์กร', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Website, Facebook Official (TH), Facebook Official (En), LinkedIn, Instagram, Twitter', 'file', 'พิธีลงนามในบันทึกข้อตกลงการดำเนินแผนธุรกิจโครงการจัดตั้งศูนย์ดูแลเด็กปฐมวัยเพื่อพัฒนาการสมองและทักษะแห่งศตวรรษที่ 21 (NDUX Childcare Center)  ', 'คณะพยาบาลศาสตร์ มหาวิทยาลัยเชียงใหม่ ร่วมกับ ศูนย์นวัตกรรมการจัดการ คณะบริหารธุรกิจ มหาวิทยาลัยเชียงใหม่ จัดพิธีลงนามในบันทึกข้อตกลงการดำเนินแผนธุรกิจ โครงการจัดตั้งศูนย์ดูแลเด็กปฐมวัยเพื่อพัฒนาการสมองและทักษะแห่งศตวรรษที่ 21 (ต้นแบบ NeuroeducationX - NDUX Childcare Center) โดยได้รับเกียรติจาก ผู้ช่วยศาสตราจารย์ ดร.ธานี แก้วธรรมนุกูล คณบดีคณะพยาบาลศาสตร์ และ อาจารย์ ดร.นงลักษณ์ เฉลิมสุข รองคณบดีด้านขับเคลื่อนยุทธศาสตร์ สื่อสารและภาพลักษณ์องค์กร พร้อมด้วย รองศาสตราจารย์ ดร.นฤมล กิมภากรณ์ ผู้อำนวยการศูนย์นวัตกรรมการจัดการ และ ดร.ชานนท์ ชิงชยานุรักษ์ รองผู้อำนวยการศูนย์นวัตกรรมการจัดการ คณะบริหารธุรกิจ มหาวิทยาลัยเชียงใหม่ ร่วมลงนาม ณ ห้องประชุมวิลาวัณย์ เสนารัตน์ คณะพยาบาลศาสตร์ เมื่อวันศุกร์ที่ 12 กรกฎาคม 2567', '2024-07-19 00:00:00', 'comm3', 'file_66961f7b441e4.jpg, file_66961f7b44676.jpg, file_66961f7b4491a.jpg', '', 2, 1, '0', 0, 0, 0, 1, '0', 0, '2', '3', '07', 0, 0, 0, '2024-07-16 00:21:31'),
(23, 'DcFwN4Y53rF2h9f', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป หน่วยสื่อสารและภาพลักษณ์องค์กร', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Website, Facebook Official (TH), Facebook Official (En), Line Official, LinkedIn, Instagram, Twitter', 'file', 'พิธีลงนามในบันทึกข้อตกลงการดำเนินแผนธุรกิจโครงการจัดตั้งศูนย์ดูแลเด็กปฐมวัยเพื่อพัฒนาการสมองและทักษะแห่งศตวรรษที่ 21 (NDUX Childcare Center)  ', 'คณะพยาบาลศาสตร์ มหาวิทยาลัยเชียงใหม่ ร่วมกับ ศูนย์นวัตกรรมการจัดการ คณะบริหารธุรกิจ มหาวิทยาลัยเชียงใหม่ จัดพิธีลงนามในบันทึกข้อตกลงการดำเนินแผนธุรกิจ โครงการจัดตั้งศูนย์ดูแลเด็กปฐมวัยเพื่อพัฒนาการสมองและทักษะแห่งศตวรรษที่ 21 (ต้นแบบ NeuroeducationX - NDUX Childcare Center) โดยได้รับเกียรติจาก ผู้ช่วยศาสตราจารย์ ดร.ธานี แก้วธรรมนุกูล คณบดีคณะพยาบาลศาสตร์ และ อาจารย์ ดร.นงลักษณ์ เฉลิมสุข รองคณบดีด้านขับเคลื่อนยุทธศาสตร์ สื่อสารและภาพลักษณ์องค์กร พร้อมด้วย รองศาสตราจารย์ ดร.นฤมล กิมภากรณ์ ผู้อำนวยการศูนย์นวัตกรรมการจัดการ และ ดร.ชานนท์ ชิงชยานุรักษ์ รองผู้อำนวยการศูนย์นวัตกรรมการจัดการ คณะบริหารธุรกิจ มหาวิทยาลัยเชียงใหม่ ร่วมลงนาม ณ ห้องประชุมวิลาวัณย์ เสนารัตน์ คณะพยาบาลศาสตร์ เมื่อวันศุกร์ที่ 12 กรกฎาคม 2567', '2024-07-19 00:00:00', 'comm3', 'file_669626a96b17d.jpg, file_669626a96b58a.jpg, file_669626a96b8c1.jpg', '', 2, 1, 'แก้ไขชื่อ ดร.ชานนท์ ชิงชยานุรักษ์ รองผู้อำนวยการศูนย์นวัตกรรมการจัดการ คณะบริหารธุรกิจ มหาวิทยาลัยเชียงใหม่', 1, 0, 0, 1, '', 0, '', '', '07', 0, 0, 0, '2024-07-16 00:52:09'),
(24, 'DRpIu6jS9iB48mN', 'นางสาว สุภาพรรณ ไชยวรรณ์', 'งานบริหารงานวิจัย บริการวิชาการ และวิเทศสัมพันธ์ หน่วยบริหารงานวิจัยและบริการวิชาการ', '0 53 935033', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'supapan.ch@cmu.ac.th', 'Website, Facebook Official (TH), Line Official', 'file', 'คณะพยาบาลศาสตร์ ได้รับการตีพิมพ์ผลงานวิชาการในวารสารระดับนานาชาติ', 'คณะพยาบาลศาสตร์ มหาวิทยาลัยเชียงใหม่ ขอแสดงความยินดีกับ รศ.ดร.ปิยะนุช ชูโต อาจารย์ประจำกลุ่มวิชาการพยาบาลสูติศาสตร์และนรีเวชวิทยา ที่ได้รับการตีพิมพ์ผลงานวิจัยในวารสารวิชาการระดับนานาชาติ บทความวิจัยเรื่อง &quot;Enhancing clinical performance self-efficacy among nursing students: A virtual clinical laboratory approach&quot; ในวารสาร Teaching and Learning in Nursing ซึ่งอยู่ในฐานข้อมูล Scopus Nursing Q2 และ ISI Q2\r\n \r\nสามารถสืบค้นบทความ ได้ที่ https://doi.org/10.1016/j.teln.2024.06.002', '2024-07-19 00:00:00', 'comm3', 'file_669629af99971.png', '', 3, 1, 'ทดสอบการอัพเดทค่าแอดมิน', 1, 0, 0, 1, '0', 0, '2', '3', '07', 0, 0, 0, '2024-07-16 01:05:03'),
(25, 'lBNofdIL6YusoLR', 'นางสาว ธันยชนก คณะแก้ว', 'งานบริการการศึกษา และพัฒนาคุณภาพนักศึกษา หน่วยการเรียนรู้ทางการพยาบาล', 'test', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'thanyachanok.k@cmu.ac.th', 'Website', 'url', 'test', 'test', '2024-07-20 00:00:00', 'comm2', '', 'test', 4, 1, 'ทดสอบการอัพเดทค่าแอดมิน', 1, 0, 0, 1, '0', 0, '2', '3', '07', 0, 0, 0, '2024-07-16 19:35:38'),
(26, 'PxC4vyXlxa7TwrQ', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป หน่วยสื่อสารและภาพลักษณ์องค์กร', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Website, Facebook Official (TH), Facebook Official (En)', 'file', 'หวังว่าสักวัน', 'เนินนานที่เราต้องห่างกัน เธอคิดถึงฉันบ้างรึป่าว \r\n   D.                        C#m.            Bm.    E \r\nเธอจะเป็นอย่างไร เธอสบายดีไหม ฉันคิดถึงเธอเหลือเกิน\r\n\r\n   A          C#m.       F#m.        E.            \r\nอยากได้เธอนั้นคืนมา แต่เธอคงต้องบอกลา    \r\n  D.                          C#m.         Bm.               E. \r\nใจของเธอตอนนี้มันเป็นของใคร         ฉันเสียใจ\r\n\r\nท่อนฮุค\r\n    A.          C#m.                F#m.               E.                   \r\nกลับมาเป็นเหมือนเดิมได้รึป่าวเรื่องตอนนั้น.  \r\n                   D            C#m.   Bm        E. \r\n ที่ฉันพลาดไปฉันเสียใจ.        ฉันขอโทษจริงๆ\r\n       A.       C#m.                    F#m. \r\nอยากให้เธอกลับมาเป็นเหมือนเก่า  \r\n             E.           D.  C#m.              Bm.         \r\nเหมือนตอนที่เรารักกัน        ได้แต่หวังว่าสักวัน\r\n          E.                         \r\nเราทั้งสองจะมาพบกัน \r\nA\r\n(กลองขึ้น)\r\n A.                  C#m.                 F#m\r\nเหลือเพียงความทรงจำที่ไม่เคยลบเลือนออกไป\r\nจากหัวใจของฉัน และรู้ว่าไม่มีวัน ที่เราจะรักกัน อีกครั้ง ได้ไหมเธอ\r\n               \r\n\r\n \r\n             \r\nA          C#m.       F#m.        E.            \r\nอยากได้เธอนั้นคืนมา แต่เธอคงต้องบอกลา    \r\n  D.                          C#m.         Bm.               E. \r\nใจของเธอตอนนี้มันเป็นของใคร         ฉันเสียใจ\r\nท่อนฮุค\r\n  \r\n    A.          C#m.                F#m.               E.                   \r\nกลับมาเป็นเหมือนเดิมได้รึป่าวเรื่องตอนนั้น.  \r\n                   D            C#m.   Bm        E. \r\n ที่ฉันพลาดไปฉันเสียใจ.        ฉันขอโทษจริงๆ\r\n       A.       C#m.                    F#m. \r\nอยากให้เธอกลับมาเป็นเหมือนเก่า  \r\n             E.           D.  C#m.              Bm.         \r\nเหมือนตอนที่เรารักกัน        ได้แต่หวังว่าสักวัน\r\n          E.                         \r\nเราทั้งสองจะมาพบกัน \r\n\r\nโซโล่\r\nA/C#m/F#m/ E/D/C#m/Bm/E (2รอบ)\r\nท่อนแรก(กีตาร์)\r\nA.          C#m.                F#m.               E.                   \r\nกลับมาเป็นเหมือนเดิมได้รึป่าวเรื่องตอนนั้น.  \r\n                   D            C#m.   Bm        E. \r\n ที่ฉันพลาดไปฉันเสียใจ.        ฉันขอโทษจริงๆ\r\n       A.       C#m.                    F#m. \r\nอยากให้เธอกลับมาเป็นเหมือนเก่า  \r\n             E.           D.  C#m.              Bm.         \r\nเหมือนตอนที่เรารักกัน        ได้แต่หวังว่าสักวัน\r\n          E.                         \r\nเราทั้งสองจะมาพบกัน \r\n(ขึ้นคีย์)\r\nBb         Dm.                Gm.               Bb.                   \r\nกลับมาเป็นเหมือนเดิมได้รึป่าวเรื่องตอนนั้น.  \r\n                   Eb           Dm.   Cm        F\r\n ที่ฉันพลาดไปฉันเสียใจ.        ฉันขอโทษจริงๆ\r\n       Bb      Dm.                    Gm. \r\nอยากให้เธอกลับมาเป็นเหมือนเก่า  \r\n             Bb.           Eb.  Dm.              Cm.         \r\nเหมือนตอนที่เรารักกัน        ได้แต่หวังว่าสักวัน\r\n          F                        \r\nเราทั้งสองจะมาพบกัน .', '2024-07-21 10:40:00', 'comm5', 'file_66988b92a08dc.jpg, file_66988b92ae163.jpg, file_66988b92ae3ac.jpg, file_66988b92ae5cb.jpg, file_66988b92ae754.jpg', '', 2, 1, '0', 0, 0, 0, 1, 'phatcharapon.p@cmu.ac.th', 0, '', '', '07', 0, 0, 0, '2024-07-18 03:27:14'),
(27, 'gZWvETjxpG4o0uO', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป หน่วยสื่อสารและภาพลักษณ์องค์กร', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Website, Facebook Official (TH), Facebook Official (En)', 'file', 'กิจกรรม Workshop สำหรับบุคลากรของมหาวิทยาลัยเชียงใหม่', 'CMU Lifelong ขอเชิญบุคลากรของมหาวิทยาลัยเชียงใหม่ มาร่วมสร้าง “จิตใจที่แข็งแรง” เสริมพลังบวกจิตใจของเราให้พร้อมรับมือกับความเครียด เรื่องกวนใจต่างๆที่เจอในแต่ละวันกับเวิร์คชอป\r\n\r\n“ปั้นพลังบวก: เทคนิค“การออกกำลังใจ”ที่ใช้ได้จริงในชีวิตประจำวัน รุ่นที่ 1”\r\nเวิร์คชอปการบริหารจิตใจเพื่อให้สามารถรับมือกับความคิดเชิงลบได้อย่างมีประสิทธิภาพ ผ่าน PERMA Model และเทคนิคการจัดการความคิดด้านลบด้วยจิตวิทยาเชิงบวก เสริมความแข็งแรงให้กับสุขภาพจิตใจ เพื่อให้บุคลากรทุกท่านสามารถนำไปประยุกต์ใช้รับมือกับสารพัดปัญหากวนใจทั้งจากการทำงานและชีวิตประจำวันได้\r\n\r\nวิทยากรโดย\r\nคุณอรุณฉัตร คุรุวาณิชย์ จาก Life Education Thailand', '2024-07-21 10:44:00', 'comm3', 'file_6698902325f2b.jpg', '', 2, 1, '0', 0, 0, 0, 1, 'phatcharapon.p@cmu.ac.th', 0, '', '', '07', 0, 0, 0, '2024-07-18 03:46:43'),
(28, '9rtpIdqNZb6jQnZ', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป หน่วยสื่อสารและภาพลักษณ์องค์กร', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Website, Facebook Official (TH), Facebook Official (En)', 'url', 'กิจกรรม Workshop สำหรับบุคลากรของมหาวิทยาลัยเชียงใหม่', 'CMU Lifelong ขอเชิญบุคลากรของมหาวิทยาลัยเชียงใหม่ มาร่วมสร้าง “จิตใจที่แข็งแรง” เสริมพลังบวกจิตใจของเราให้พร้อมรับมือกับความเครียด เรื่องกวนใจต่างๆที่เจอในแต่ละวันกับเวิร์คชอป\r\n\r\n“ปั้นพลังบวก: เทคนิค“การออกกำลังใจ”ที่ใช้ได้จริงในชีวิตประจำวัน รุ่นที่ 1”\r\nเวิร์คชอปการบริหารจิตใจเพื่อให้สามารถรับมือกับความคิดเชิงลบได้อย่างมีประสิทธิภาพ ผ่าน PERMA Model และเทคนิคการจัดการความคิดด้านลบด้วยจิตวิทยาเชิงบวก เสริมความแข็งแรงให้กับสุขภาพจิตใจ เพื่อให้บุคลากรทุกท่านสามารถนำไปประยุกต์ใช้รับมือกับสารพัดปัญหากวนใจทั้งจากการทำงานและชีวิตประจำวันได้\r\n\r\nวิทยากรโดย\r\nคุณอรุณฉัตร คุรุวาณิชย์ จาก Life Education Thailand', '2024-07-21 10:52:00', 'comm3', '', 'https://docs.google.com/forms/d/1qMrb5qAOC2QF8IbHz_V0GFKe1b_GhLTI2Q7bu0sR6Tg/viewform?edit_requested=true', 2, 1, 'asdsadasd', 1, 0, 0, 1, 'phatcharapon.p@cmu.ac.th', 0, '2', '3', '07', 0, 0, 0, '2024-07-18 03:53:57'),
(29, 'ajEaU5h1Uu3OpUQ', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป หน่วยสื่อสารและภาพลักษณ์องค์กร', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Website', 'url', 'ทดสอบ', 'ทดสอบ', '2024-07-21 12:48:00', 'comm4', '', 'https://docs.google.com/forms/d/1qMrb5qAOC2QF8IbHz_V0GFKe1b_GhLTI2Q7bu0sR6Tg/viewform?edit_requested=true', 4, 1, 'ทดสอบการอัพเดทค่าแอดมิน', 1, 0, 0, 1, 'tharika.s@cmu.ac.th', 1, '2', '3', '07', 0, 0, 0, '2024-07-18 05:48:26'),
(30, '6EMvhUBwkjPLbcr', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป หน่วยสื่อสารและภาพลักษณ์องค์กร', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Website, Facebook Official (En)', 'url', '่้า', 'า่้า้า', '2024-07-21 13:09:00', 'comm2', '', 'https://docs.google.com/forms/d/1qMrb5qAOC2QF8IbHz_V0GFKe1b_GhLTI2Q7bu0sR6Tg/viewform?edit_requested=true', 2, 1, '0', 0, 0, 0, 1, 'tharika.s@cmu.ac.th', 1, '2', '3', '07', 0, 0, 0, '2024-07-18 06:09:44'),
(31, 'PTFsXj3JZwxr252', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป หน่วยสื่อสารและภาพลักษณ์องค์กร', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Facebook Official (En), LinkedIn', 'url', 'เ้่ด้่', '่้เ่้เ่', '2024-07-21 13:20:00', 'comm3', '', 'https://docs.google.com/forms/d/1qMrb5qAOC2QF8IbHz_V0GFKe1b_GhLTI2Q7bu0sR6Tg/viewform?edit_requested=true', 2, 1, '0', 0, 0, 0, 1, 'tharika.s@cmu.ac.th', 0, '2', '3', '07', 0, 0, 0, '2024-07-18 06:20:30'),
(32, 'mwFZ3WzclZiM1pQ', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป หน่วยสื่อสารและภาพลักษณ์องค์กร', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Website, Facebook Official (TH), Facebook Official (En)', 'file', '45', '64564', '2024-07-21 13:25:00', 'comm2', 'file_6698b550a00e5.jpg', '', 2, 1, '0', 0, 0, 0, 1, 'phatcharapon.p@cmu.ac.th', 1, '2', '3', '07', 0, 0, 0, '2024-07-18 06:25:20'),
(33, 'dP7I7v6kgEL8Id2', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป หน่วยสื่อสารและภาพลักษณ์องค์กร', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Facebook Official (TH), Facebook Official (En), Line Official, LinkedIn', 'file', 'ytutu', 'tututu', '2024-07-21 13:35:00', 'comm3', 'file_6698b7a83e917.jpg', '', 2, 1, '0', 0, 0, 0, 1, 'phatcharapon.p@cmu.ac.th', 1, '2', '3', '07', 0, 0, 0, '2024-07-18 06:35:20'),
(34, 'lXF5AFnT2tqamff', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป หน่วยสื่อสารและภาพลักษณ์องค์กร', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Facebook Official (TH), Line Official', 'file', '45645', '456456', '2024-07-21 13:50:00', 'comm3', 'file_6698bb4116848.jpg', '', 2, 1, '0', 1, 0, 0, 1, 'phatcharapon.p@cmu.ac.th', 1, '2', '3', '07', 0, 0, 0, '2024-07-18 06:50:41'),
(35, 'oAQElvdMy6UEfsv', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป หน่วยสื่อสารและภาพลักษณ์องค์กร', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Facebook Official (TH), Facebook Official (En)', 'url', '132', '132', '2024-07-21 14:21:00', 'comm2', '', 'http', 2, 1, '0', 1, 0, 0, 1, 'phatcharapon.p@cmu.ac.th', 1, '2', '3', '07', 0, 0, 0, '2024-07-18 07:21:28'),
(36, 'ENhteDbHIrbdIHr', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป หน่วยสื่อสารและภาพลักษณ์องค์กร', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'เสียงตามสาย', 'url', '121', '1212', '2024-07-21 14:29:00', 'comm4', '', 'https://docs.google.com/forms/d/1qMrb5qAOC2QF8IbHz_V0GFKe1b_GhLTI2Q7bu0sR6Tg/viewform?edit_requested=true', 4, 1, '0', 0, 0, 0, 1, 'phatcharapon.p@cmu.ac.th', 1, '2', '3', '07', 0, 0, 0, '2024-07-18 07:30:02'),
(37, 'yzBaFddJvazPdPm', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป หน่วยสื่อสารและภาพลักษณ์องค์กร', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Facebook Official (En)', 'file', '456', '456', '2024-07-21 14:42:00', 'comm3', 'file_6698c765c1ed8.jpg', '', 1, 1, '0', 0, 0, 0, 1, '0', 1, '2', '3', '07', 0, 0, 0, '2024-07-18 07:42:29'),
(38, 'Kk0XIVRDpQKyAJV', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป หน่วยสื่อสารและภาพลักษณ์องค์กร', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Website, Facebook Official (TH)', 'file', '123', '123', '2024-07-21 14:45:00', 'comm2', 'file_6698c84f6b0e4.jpg', '', 3, 1, 'ทดสอบการอัพเดทค่าแอดมิน', 1, 0, 0, 1, '0', 0, '2', '3', '07', 0, 0, 0, '2024-07-18 07:46:23'),
(39, 's7qDVI6aeTEADUW', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป หน่วยสื่อสารและภาพลักษณ์องค์กร', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Website, Facebook Official (TH), Facebook Official (En)', 'url', '123', '123\r\n', '2024-07-22 09:43:00', 'comm2', '', 'https://docs.google.com/forms/d/1qMrb5qAOC2QF8IbHz_V0GFKe1b_GhLTI2Q7bu0sR6Tg/viewform?edit_requested=true', 2, 1, '0', 0, 0, 0, 1, '0', 0, '2', '3', '07', 0, 0, 0, '2024-07-19 02:43:41'),
(40, 'XgEKRdR7YgP6Q7p', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป หน่วยสื่อสารและภาพลักษณ์องค์กร', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Line Official, Instagram, Twitter', 'url', 'หกดหกด', 'ฟดหกด', '2024-07-22 09:53:00', 'comm3', '', 'https://docs.google.com/forms/d/1qMrb5qAOC2QF8IbHz_V0GFKe1b_GhLTI2Q7bu0sR6Tg/viewform?edit_requested=true', 4, 1, '0', 1, 1, 0, 1, 'phatcharapon.p@cmu.ac.th', 0, '2', '3', '07', 0, 0, 0, '2024-07-19 02:53:52'),
(41, 'Ehw4csj9AtJYWuH', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป หน่วยสื่อสารและภาพลักษณ์องค์กร', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Website, Facebook Official (TH), Facebook Official (En)', 'file', 'ทดสอบการส่งline', 'ทดสอบการส่งline', '2024-07-26 11:03:00', 'comm3', 'file_669f2bb744a84.png, file_669f2bb7461f9.jpg', '', 2, 1, '0', 1, 0, 0, 1, 'tharika.s@cmu.ac.th', 0, '2', '3', '07', 0, 0, 0, '2024-07-23 04:04:07'),
(42, '8XmWIjmvnVzEEVw', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป หน่วยสื่อสารและภาพลักษณ์องค์กร', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Website, Facebook Official (TH), Facebook Official (En)', 'file', 'ทดสอบการแจ้งเตือน', 'ทดสอบการแจ้งเตือน', '2024-07-26 11:07:00', 'comm3', 'file_669f2c8d345bd.png', '', 4, 1, '0', 1, 0, 0, 1, 'tharika.s@cmu.ac.th', 0, '2', '3', '07', 0, 0, 1, '2024-07-23 04:07:41'),
(43, '6HS6vKmI1ZVTxyI', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป หน่วยสื่อสารและภาพลักษณ์องค์กร', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Website, Facebook Official (TH), Facebook Official (En)', 'file', 'ทดสอบการการแจ้งเตือน V2', 'ทดสอบการการแจ้งเตือน V2', '2024-07-26 11:40:00', 'comm5', 'file_669f347cac26f.png, file_669f347cac429.jpg', '', 4, 1, '0', 1, 1, 0, 1, 'phatcharapon.p@cmu.ac.th', 0, '2', '3', '07', 0, 0, 0, '2024-07-23 04:41:32'),
(44, 'sfDRrxkpyndpaJp', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป หน่วยสื่อสารและภาพลักษณ์องค์กร', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Website, Facebook Official (TH)', 'url', 'ทดสอบการการแจ้งเตือน V2', 'ทดสอบการการแจ้งเตือน V2', '2024-07-26 11:45:00', 'comm2', '', 'https://docs.google.com/forms/d/1qMrb5qAOC2QF8IbHz_V0GFKe1b_GhLTI2Q7bu0sR6Tg/viewform?edit_requested=true', 2, 1, 'ทดสอบการการแจ้งเตือน V2', 1, 0, 0, 1, 'tharika.s@cmu.ac.th', 0, '2', '3', '07', 0, 0, 0, '2024-07-23 04:45:36'),
(45, 'dGdQb5XeMu7cWXJ', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป หน่วยสื่อสารและภาพลักษณ์องค์กร', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Website, Facebook Official (TH), Facebook Official (En)', 'file', 'ทดสอบการแจ้งเตือน V3', 'ทดสอบการแจ้งเตือน V3', '2024-07-26 12:10:00', 'comm3', 'file_669f3b7e80e54.png, file_669f3b7e8103b.jpg', '', 2, 1, '0', 0, 0, 0, 1, 'phatcharapon.p@cmu.ac.th', 0, '2', '3', '07', 1, 0, 0, '2024-07-23 05:11:26'),
(46, 'NDIbN7YKaF82Ogd', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป หน่วยสื่อสารและภาพลักษณ์องค์กร', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Website, Facebook Official (TH), Facebook Official (En)', 'file', 'ทดสอบการแจ้งเตือน', 'ทดสอบการแจ้งเตือน', '2024-07-26 13:38:00', 'comm2', 'file_669f500a32122.png', '', 4, 1, 'ทดสอบการแก้ไข', 0, 0, 0, 1, 'tharika.s@cmu.ac.th', 0, '2', '3', '07', 1, 1, 1, '2024-07-23 06:39:06'),
(47, 'oAVB8wOF9zUtpGt', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป หน่วยสื่อสารและภาพลักษณ์องค์กร', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Website, Facebook Official (TH), Facebook Official (En)', 'file', 'ทดสอบ คำขอใหม่', 'ทดสอบ คำขอใหม่', '2024-08-07 20:32:00', 'comm1', 'file_66af8310def74.jpg', '', 1, 1, '0', 0, 0, 0, 1, '0', 0, '2', '3', '07', 0, 0, 0, '2024-08-04 13:33:04'),
(48, 'JAcClRa6HzlcB6L', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป หน่วยสื่อสารและภาพลักษณ์องค์กร', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Website, Facebook Official (TH), Facebook Official (En)', 'file', 'ฟหก', 'ฟหกฟหก', '2024-08-07 20:35:00', 'comm2', 'file_66af839f50d79.jpg', '', 1, 1, '0', 0, 0, 1, 1, '0', 0, '2', '3', '07', 0, 0, 0, '2024-08-04 13:35:27'),
(49, '3uWIG0KlvWbPqPv', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป หน่วยสื่อสารและภาพลักษณ์องค์กร', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Website, Facebook Official (TH), Facebook Official (En)', 'file', 'mfmf', 'mfmf', '2024-08-07 20:55:00', 'comm1', 'file_66af88795f26d.jpg', '', 1, 1, '0', 0, 0, 1, 1, '0', 0, '2', '3', '07', 0, 0, 0, '2024-08-04 13:56:09'),
(50, '74cSEID6zYmOITE', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป หน่วยสื่อสารและภาพลักษณ์องค์กร', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Website, Facebook Official (TH), Facebook Official (En), LinkedIn', 'file', 'กดเกดเกด', 'ดเกเกเ', '2024-08-07 21:05:00', 'comm3', 'file_66af8aaa6b68b.jpg', '', 1, 1, '0', 0, 0, 1, 1, '0', 0, '2', '3', '07', 0, 0, 0, '2024-08-04 14:05:30'),
(51, 'l96U44zARKyh1Ym', 'นาย พัชรพล ปิงยศ', 'งานบริหารทั่วไป หน่วยสื่อสารและภาพลักษณ์องค์กร', '49127', 'พนักงานมหาวิทยาลัยสายปฎิบัติการ', 'phatcharapon.p@cmu.ac.th', 'Website, Facebook Official (TH), Facebook Official (En)', 'file', 'ทดสอบการแจ้งเตือนผ่านline แบบสองทาง', 'ทดสอบการแจ้งเตือนผ่านline แบบสองทาง', '2024-08-07 21:20:00', 'comm3', 'file_66af8e5a2d63b.jpg', '', 1, 1, '0', 0, 0, 1, 1, '0', 0, '2', '3', '07', 0, 0, 0, '2024-08-04 14:21:14');

-- --------------------------------------------------------

--
-- Table structure for table `ci_brand`
--

CREATE TABLE `ci_brand` (
  `id` int(11) NOT NULL,
  `header` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `img_file` varchar(255) NOT NULL,
  `download` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ci_brand`
--

INSERT INTO `ci_brand` (`id`, `header`, `title`, `details`, `img_file`, `download`) VALUES
(1, 'ตราสัญลักษณ์', 'ความหมายของตราสัญลักษณ์', 'เครื่องหมายหกเหลี่ยม เป็นรูปร่างเรขาคณิตที่เป็นตัวแทนของโครงสร้างความแข็งแรงและการสร้างรูปแบบระเบียบแบบแผน ดังนั้น เครื่องหมายหกเหลี่ยมเป็นเกลียวสีแสดและสีเทา หมายถึง คณะพยาบาลศาสตร์ มหาวิทยาลัยเชียงใหม่ มุ่งเน้นการบริหารองค์กรอย่างเป็นระบบและการทำงานแบบร่วมมือร่วมใจประสานกันในบริบทของความเป็นไทย เพื่อพัฒนาความเข้มแข็งด้านวิชาการและวิจัยให้เป็นที่ประจักษ์ในระดับนานาชาติ ตรงกลางเครื่องหมายหกเหลี่ยม เป็นรูปช้างสีแสดในท่าก้าวย่างใช้งวงชูคบเพลิงรัศมีแปดแฉก ซึ่งเป็นสัญลักษณ์ของมหาวิทยาลัยเชียงใหม่ สื่อให้เห็นถึงการที่คณะฯ เป็นองค์กรภายใต้การกำกับของมหาวิทยาลัยเชียงใหม่\r\n                            สีแสด เป็นสีประจำคณะพยาบาลศาสตร์ มหาวิทยาลัยเชียงใหม่ สื่อถึงความีพลังและความคิดสร้างสรรค์\r\n                            สีเทา สื่อถึงความมีสติปัญญา ความมั่นคง และ สง่างาม\r\n                            ตัวอักษรภาษาอังกฤษสีแสด คำว่า NURSE CMU หมายถึง คณะพยาบาลศาสตร์ มหาวิทยาลัยเชียงใหม่\r\n                            โดยตัวอักษร r ตกแต่งด้วยดอกทองกวาว เป็นดอกไม้ที่มีสีแสดซึ่งเป็นดอกไม้ประจำมหาวิทยาลัยเชียงใหม่และจังหวัดเชียงใหม่ สีแสดของดอกทองกวาวสอดคล้องกับสีประจำคณะพยาบาลศาสตร์และตัวอักษรภาษาอังกฤษสีเทาแสดงนามคณะพยาบาลศาสตร์ มหาวิทยาลัยเชียงใหม่', 'logo-final-edit-1.jpg', 'logo.zip'),
(2, 'รูปภาพประกอบพื้นหลัง', 'รูปภาพประกอบพื้นหลัง', 'background เป็นภาพหรือวิดีโอที่ผู้ใช้  สามารถใช้เป็นพื้นหลัง (background) ในการประชุมหรือการสนทนาออนไลน์ได้ ซึ่งช่วยเพิ่มความเข้ากันได้และมุ่งเน้นให้ผู้ใช้มีประสบการณ์ที่สะดวกสบายขึ้น เช่น การซ่อนพื้นหลังที่ไม่ต้องการให้ผู้อื่นเห็นหรือการประชุมในสภาพแวดล้อมที่สวยงามหรือมีความท้าทาย', 'backgrounds.jpg', 'backgrounds.zip');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu_en`
--

CREATE TABLE `menu_en` (
  `id` int(11) NOT NULL,
  `home` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `check_status` varchar(255) NOT NULL,
  `services` varchar(255) NOT NULL,
  `ci` varchar(255) NOT NULL,
  `lang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu_en`
--

INSERT INTO `menu_en` (`id`, `home`, `about`, `check_status`, `services`, `ci`, `lang`) VALUES
(1, 'Home', 'About', 'Check status', 'Online services', 'Ci Brand', 'EN');

-- --------------------------------------------------------

--
-- Table structure for table `menu_th`
--

CREATE TABLE `menu_th` (
  `id` int(11) NOT NULL,
  `home` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `check_status` varchar(255) NOT NULL,
  `services` varchar(255) NOT NULL,
  `ci` varchar(255) NOT NULL,
  `lang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu_th`
--

INSERT INTO `menu_th` (`id`, `home`, `about`, `check_status`, `services`, `ci`, `lang`) VALUES
(1, 'หน้าหลัก', 'เกี่ยวกับเรา', 'ตรวจสอบสถานะ', 'บริการออนไลน์', 'อัตลักษณ์ขององค์กร', 'ไทย');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ccfn_form_p`
--
ALTER TABLE `ccfn_form_p`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ccfn_form_s`
--
ALTER TABLE `ccfn_form_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_brand`
--
ALTER TABLE `ci_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_en`
--
ALTER TABLE `menu_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_th`
--
ALTER TABLE `menu_th`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ccfn_form_p`
--
ALTER TABLE `ccfn_form_p`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `ccfn_form_s`
--
ALTER TABLE `ccfn_form_s`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `ci_brand`
--
ALTER TABLE `ci_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu_en`
--
ALTER TABLE `menu_en`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_th`
--
ALTER TABLE `menu_th`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
