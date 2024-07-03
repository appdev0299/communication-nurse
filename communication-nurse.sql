-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2024 at 01:43 PM
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
  `status_user` int(11) NOT NULL,
  `status_admin` int(11) NOT NULL,
  `status_ss` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ccfn_form_p`
--

INSERT INTO `ccfn_form_p` (`id`, `fullname`, `department`, `tel`, `personnel`, `email`, `social`, `option`, `date_a`, `communicate`, `production_file`, `status_user`, `status_admin`, `status_ss`, `created_at`) VALUES
(1, 'พัชรพล ปิงยศ', 'งานบริการการศึกษาและพัฒนาคุณภาพนักศึกษา', '41954', 'นักศึกษา', 'app.dev0299@gmail.com', 'Facebook Official (TH), Facebook Official (Eng), Youtube', 'sent_email', '2024-06-23', 'ด้านผลิตภัณฑ์(การศึกษา การวิจัย บริการวิชาการ)', 'cmuita_oit_13.docx', 1, 0, 0, '2024-06-20 01:26:47'),
(2, 'สมชาย ใจดี', 'แผนกวิจัยและพัฒนา', '12345', 'นักวิจัย', 'somchai.jai@example.com', 'Line Official, Instagram', 'sent_email', '2024-06-24', 'ประชาสัมพันธ์กิจกรรมวิจัย', 'research_promotion.docx', 1, 0, 0, '2024-06-20 02:00:00'),
(3, 'สุภาพร ชาวนา', 'แผนกบริหาร', '67890', 'ผู้จัดการ', 'supaporn.cha@example.com', 'Facebook Official (Eng), LinkedIn', 'sent_email', '2024-06-25', 'ประชาสัมพันธ์โครงการใหม่', 'new_project_announcement.docx', 1, 0, 0, '2024-06-20 02:30:00'),
(4, 'ธนา จิตรใจ', 'แผนกเทคโนโลยีสารสนเทศ', '54321', 'นักพัฒนาระบบ', 'thana.jit@example.com', 'Youtube, Facebook Official (TH)', 'sent_email', '2024-06-26', 'อัพเดทระบบใหม่', 'system_update.docx', 1, 0, 0, '2024-06-20 03:00:00'),
(5, 'วราภรณ์ สุขใจ', 'แผนกบัญชี', '98765', 'นักบัญชี', 'waraporn.suk@example.com', 'Instagram, Line Official', 'sent_email', '2024-06-27', 'รายงานการเงิน', 'financial_report.docx', 1, 0, 0, '2024-06-20 03:30:00'),
(6, 'อารยา พัฒนกิจ', 'แผนกการตลาด', '45678', 'ผู้จัดการฝ่ายการตลาด', 'araya.pat@example.com', 'Facebook Official (TH), Instagram', 'sent_email', '2024-06-28', 'โปรโมทสินค้าตัวใหม่', 'new_product_promotion.docx', 1, 0, 0, '2024-06-20 04:00:00'),
(7, 'พรรณราย อักษรดี', 'แผนกทรัพยากรบุคคล', '11223', 'นักทรัพยากรบุคคล', 'panarai.ak@example.com', 'LinkedIn, Facebook Official (Eng)', 'sent_email', '2024-06-29', 'ประกาศรับสมัครงาน', 'job_announcement.docx', 1, 0, 0, '2024-06-20 04:30:00'),
(8, 'นิรันดร์ ทรัพย์สมบัติ', 'แผนกวิศวกรรม', '99887', 'วิศวกร', 'nirand.sab@example.com', 'Youtube, Instagram', 'sent_email', '2024-06-30', 'อัพเดทโครงงานวิศวกรรม', 'engineering_project_update.docx', 1, 0, 0, '2024-06-20 05:00:00'),
(9, 'มัณฑนา มิตรภาพ', 'แผนกบริการลูกค้า', '33445', 'ผู้จัดการฝ่ายบริการลูกค้า', 'muntana.mit@example.com', 'Line Official, Facebook Official (TH)', 'sent_email', '2024-07-01', 'ประกาศกิจกรรมบริการลูกค้า', 'customer_service_event.docx', 1, 0, 0, '2024-06-20 05:30:00'),
(10, 'วิชัย ธรรมดี', 'แผนกโลจิสติกส์', '22334', 'ผู้จัดการฝ่ายโลจิสติกส์', 'wichai.dam@example.com', 'Instagram, LinkedIn', 'sent_email', '2024-07-02', 'ประชาสัมพันธ์โครงการขนส่ง', 'logistics_project_announcement.docx', 1, 0, 0, '2024-06-20 06:00:00'),
(11, 'วราภรณ์ สุขใจ', 'แผนกบัญชี', '98765', 'นักบัญชี', 'waraporn.suk@example.com', 'Instagram, Line Official', 'sent_email', '2024-06-27', 'รายงานการเงิน', 'financial_report.docx', 1, 0, 0, '2024-06-20 03:30:00'),
(12, 'ธนา จิตรใจ', 'แผนกเทคโนโลยีสารสนเทศ', '54321', 'นักพัฒนาระบบ', 'thana.jit@example.com', 'Youtube, Facebook Official (TH)', 'sent_email', '2024-06-26', 'อัพเดทระบบใหม่', 'system_update.docx', 1, 0, 0, '2024-06-20 03:00:00'),
(13, 'สมชาย ใจดี', 'แผนกวิจัยและพัฒนา', '12345', 'นักวิจัย', 'somchai.jai@example.com', 'Line Official, Instagram', 'sent_email', '2024-06-24', 'ประชาสัมพันธ์กิจกรรมวิจัย', 'research_promotion.docx', 1, 0, 0, '2024-06-20 02:00:00'),
(14, 'พัชรพล ปิงยศ', 'งานบริการการศึกษาและพัฒนาคุณภาพนักศึกษา', '41954', 'นักศึกษา', 'app.dev0299@gmail.com', 'Facebook Official (TH), Facebook Official (Eng), Youtube', 'sent_email', '2024-06-23', 'ด้านผลิตภัณฑ์(การศึกษา การวิจัย บริการวิชาการ)', 'cmuita_oit_13.docx', 1, 0, 0, '2024-06-20 01:26:47'),
(15, 'อารยา พัฒนกิจ', 'แผนกการตลาด', '45678', 'ผู้จัดการฝ่ายการตลาด', 'araya.pat@example.com', 'Facebook Official (TH), Instagram', 'sent_email', '2024-06-28', 'โปรโมทสินค้าตัวใหม่', 'new_product_promotion.docx', 1, 0, 0, '2024-06-20 04:00:00'),
(16, 'Sophia Harris', 'HR', '111222333', 'HR Manager', 'sophia.harris@example.com', 'Facebook, Twitter', 'sent_email', '2024-06-24', 'HR Policies Update', 'hr_policies_update.docx', 1, 0, 0, '2024-06-20 03:00:00'),
(17, 'Mia Clark', 'Legal', '444555666', 'Legal Advisor', 'mia.clark@example.com', 'LinkedIn, Facebook', 'sent_email', '2024-06-25', 'Legal Compliance Training', 'legal_compliance_training.docx', 1, 0, 0, '2024-06-20 04:00:00'),
(18, 'Noah Lewis', 'IT', '777888999', 'IT Support', 'noah.lewis@example.com', 'Facebook, LinkedIn', 'sent_email', '2024-06-26', 'System Maintenance Notice', 'system_maintenance_notice.docx', 1, 0, 0, '2024-06-20 05:00:00'),
(19, 'Ava Robinson', 'Finance', '000111222', 'Accountant', 'ava.robinson@example.com', 'Twitter, LinkedIn', 'sent_email', '2024-06-27', 'Quarterly Financial Report', 'quarterly_financial_report.docx', 1, 0, 0, '2024-06-20 06:00:00'),
(20, 'Elijah Martinez', 'Marketing', '333444555', 'Marketing Specialist', 'elijah.martinez@example.com', 'Facebook, Instagram', 'sent_email', '2024-06-28', 'Marketing Campaign Results', 'marketing_campaign_results.docx', 1, 0, 0, '2024-06-20 06:30:00'),
(22, 'พัชรพล ปิงยศ', 'งานบริหารทั่วไป', '49127', 'บุคลากรสายสนับสนุน', 'app.dev0299@gmail.com', 'Website คณะพยาบาลศาสตร์, Facebook Official (TH), Facebook Official (Eng)', 'sent_email', '2024-06-30', 'ประชุม/อบรม/สัมมนา', '5defd9e423f22c46.docx', 1, 0, 0, '2024-06-27 02:38:26');

-- --------------------------------------------------------

--
-- Table structure for table `ccfn_form_s`
--

CREATE TABLE `ccfn_form_s` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `department` varchar(100) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `personnel` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `social` text DEFAULT NULL,
  `option` enum('file','url') NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `date_a` date DEFAULT NULL,
  `communicate` text DEFAULT NULL,
  `file_names` text DEFAULT NULL,
  `upload_url` text DEFAULT NULL,
  `status_user` tinyint(4) DEFAULT 0,
  `status_admin` tinyint(4) DEFAULT 0,
  `status_ss` tinyint(4) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ccfn_form_s`
--

INSERT INTO `ccfn_form_s` (`id`, `fullname`, `department`, `tel`, `personnel`, `email`, `social`, `option`, `title`, `details`, `date_a`, `communicate`, `file_names`, `upload_url`, `status_user`, `status_admin`, `status_ss`, `created_at`) VALUES
(21, 'พัชรพล ปิงยศ', 'งานการเงินการคลังและพัสดุ', '12345678', 'บุคลากรสายสนับสนุน', 'cstandbrooke0@usatoday.com', 'Website คณะพยาบาลศาสตร์, Facebook Official (TH), Facebook Official (Eng), Line Official', 'file', '56', '456456', '2024-06-24', 'ด้านผู้บริหาร', 'file_6674fed2b316e.jpg', '', 1, 0, 0, '2024-06-21 04:17:22'),
(22, 'พัชรพล ปิงยศ', 'งานการเงินการคลังและพัสดุ', '12345678', 'บุคลากรสายสนับสนุน', 'cstandbrooke0@usatoday.com', 'Website คณะพยาบาลศาสตร์, Facebook Official (TH), Facebook Official (Eng), Line Official', 'file', '56', '456456', '2024-06-24', 'ด้านผู้บริหาร', 'file_6674fed2b316e.jpg', '', 1, 0, 0, '2024-06-21 04:17:22'),
(23, 'พัชรพล ปิงยศ', 'งานการเงินการคลังและพัสดุ', '12345678', 'บุคลากรสายสนับสนุน', 'cstandbrooke0@usatoday.com', 'Website คณะพยาบาลศาสตร์, Facebook Official (TH), Facebook Official (Eng), Line Official', 'file', '56', '456456', '2024-06-24', 'ด้านผู้บริหาร', 'file_6674fed2b316e.jpg', '', 1, 0, 0, '2024-06-21 04:17:22'),
(24, 'พัชรพล ปิงยศ', 'งานการเงินการคลังและพัสดุ', '12345678', 'บุคลากรสายสนับสนุน', 'cstandbrooke0@usatoday.com', 'Website คณะพยาบาลศาสตร์, Facebook Official (TH), Facebook Official (Eng), Line Official', 'file', '56', '456456', '2024-06-24', 'ด้านผู้บริหาร', 'file_6674fed2b316e.jpg', '', 1, 0, 0, '2024-06-21 04:17:22'),
(25, 'พัชรพล ปิงยศ', 'งานการเงินการคลังและพัสดุ', '12345678', 'บุคลากรสายสนับสนุน', 'cstandbrooke0@usatoday.com', 'Website คณะพยาบาลศาสตร์, Facebook Official (TH), Facebook Official (Eng), Line Official', 'file', '56', '456456', '2024-06-24', 'ด้านผู้บริหาร', 'file_6674fed2b316e.jpg', '', 1, 0, 0, '2024-06-21 04:17:22'),
(26, 'พัชรพล ปิงยศ', 'งานการเงินการคลังและพัสดุ', '12345678', 'บุคลากรสายสนับสนุน', 'cstandbrooke0@usatoday.com', 'Website คณะพยาบาลศาสตร์, Facebook Official (TH), Facebook Official (Eng), Line Official', 'file', '56', '456456', '2024-06-24', 'ด้านผู้บริหาร', 'file_6674fed2b316e.jpg', '', 1, 0, 0, '2024-06-21 04:17:22'),
(27, 'พัชรพล ปิงยศ', 'งานการเงินการคลังและพัสดุ', '12345678', 'บุคลากรสายสนับสนุน', 'cstandbrooke0@usatoday.com', 'Website คณะพยาบาลศาสตร์, Facebook Official (TH), Facebook Official (Eng), Line Official', 'file', '56', '456456', '2024-06-24', 'ด้านผู้บริหาร', 'file_6674fed2b316e.jpg', '', 1, 0, 0, '2024-06-21 04:17:22'),
(28, 'พัชรพล ปิงยศ', 'งานการเงินการคลังและพัสดุ', '12345678', 'บุคลากรสายสนับสนุน', 'cstandbrooke0@usatoday.com', 'Website คณะพยาบาลศาสตร์, Facebook Official (TH), Facebook Official (Eng), Line Official', 'file', '56', '456456', '2024-06-24', 'ด้านผู้บริหาร', 'file_6674fed2b316e.jpg', '', 1, 0, 0, '2024-06-21 04:17:22'),
(29, 'พัชรพล ปิงยศ', 'งานการเงินการคลังและพัสดุ', '12345678', 'บุคลากรสายสนับสนุน', 'cstandbrooke0@usatoday.com', 'Website คณะพยาบาลศาสตร์, Facebook Official (TH), Facebook Official (Eng), Line Official', 'file', '56', '456456', '2024-06-24', 'ประชุม/อบรม/สัมมนา', 'file_6674ff21c8faf.jpg', '', 1, 0, 0, '2024-06-21 04:18:41'),
(30, 'พัชรพล ปิงยศ', 'งานการเงินการคลังและพัสดุ', '12345678', 'บุคลากรสายสนับสนุน', 'cstandbrooke0@usatoday.com', 'Website คณะพยาบาลศาสตร์, Facebook Official (TH), Facebook Official (Eng), Line Official', 'file', '56', '456456', '2024-06-24', 'ประชุม/อบรม/สัมมนา', 'file_6674ff21c8faf.jpg', '', 1, 0, 0, '2024-06-21 04:18:41'),
(31, 'พัชรพล ปิงยศ', 'งานการเงินการคลังและพัสดุ', '12345678', 'บุคลากรสายสนับสนุน', 'cstandbrooke0@usatoday.com', 'Website คณะพยาบาลศาสตร์, Facebook Official (TH), Facebook Official (Eng), Line Official', 'file', '56', '456456', '2024-06-24', 'ประชุม/อบรม/สัมมนา', 'file_6674ff21c8faf.jpg', '', 1, 0, 0, '2024-06-21 04:18:41'),
(32, 'พัชรพล ปิงยศ', 'งานการเงินการคลังและพัสดุ', '12345678', 'บุคลากรสายสนับสนุน', 'cstandbrooke0@usatoday.com', 'Website คณะพยาบาลศาสตร์, Facebook Official (TH), Facebook Official (Eng), Line Official', 'file', '56', '456456', '2024-06-24', 'ประชุม/อบรม/สัมมนา', 'file_6674ff21c8faf.jpg', '', 1, 0, 0, '2024-06-21 04:18:41'),
(33, 'พัชรพล ปิงยศ', 'งานบริหารทั่วไป', '4129', 'บุคลากรสายสนับสนุน', 'app.dev0299@gmail.com', 'Website คณะพยาบาลศาสตร์, Facebook Official (TH), Facebook Official (Eng), Line Official', 'file', 'ทดสอบ', 'ทดสอบ', '2024-06-30', 'ประชุม/อบรม/สัมมนา', 'file_667ccf9a09d9e.png, file_667ccf9a0a056.png, file_667ccf9a0a171.png', '', 1, 0, 0, '2024-06-27 02:34:02'),
(34, 'พัชรพล ปิงยศ', 'งานบริหารทั่วไป', '49127', 'บุคลากรสายสนับสนุน', 'app.dev0299@gmail.com', 'Email', 'file', 'เปิดรับข้อเสนอโครงการ ภายใต้การขับเคลื่อนเป้าหมายยุทธศาสตร์การพัฒนากลไก เพื่อส่งเสริมนวัตกรรม ประจำปีงบประมาณ 2567', '???? เปิดรับข้อเสนอโครงการ\r\nภายใต้การขับเคลื่อนเป้าหมายยุทธศาสตร์การพัฒนากลไกเพื่อส่งเสริมนวัตกรรม ประจำปีงบประมาณ 2567\r\nดังนี้\r\n1. โครงการหนึ่งคณะ หนึ่งโครงการต่อยอดความร่วมมือ ขับเคลื่อนมหาวิทยาลัยเชียงใหม่สู่เวทีโลก (One Faculty One MoU) \r\nทุนสนับสนุนไม่เกิน 150,000 บาท\r\n2. โครงการริเริ่มเชื่อมโยงโครงการความร่วมมือ ด้านวิชาการ วิจัย และนวัตกรรม (Seed International Initiatives)\r\nทุนสนับสนุนไม่เกิน 400,000 บาท\r\n???? เพื่อสนับสนุนให้คณะและส่วนงานในมหาวิทยาลัยต่อยอดความร่วมมือในระดับนานาชาติกับสถาบันการศึกษาหรือหน่วยงานชั้นนำในต่างประเทศ และพัฒนาศักยภาพบุคลากรด้านวิชาการ วิจัยและนวัตกรรม \r\n???? เปิดรับข้อเสนอโครงการ ตั้งแต่วันนี้ - 21 มิ.ย. 67 \r\n???? ดาวน์โหลดเอกสารและรายละเอียดเพิ่มเติม https://cmu.to/k41nu \r\n???? ส่งข้อเสนอโครงการได้ทางอีเมล imo@cmu.ac.th\r\n☎️ สอบถามข้อมูลเพิ่มเติม 088-088-9955 (ป่าน) ขอแสดงความนับถือ สำนักบริหารนวัตกรรม Innovation Management office ', '2024-06-30', 'ประชุม/อบรม/สัมมนา', 'file_667cd00e39705.png', '', 1, 0, 0, '2024-06-27 02:35:58'),
(35, 'Nest Pingyos', 'งานนโยบายและแผนและประกันคุณภาพการศึกษา', '49127', 'MIS Employee', 'app.dev0299@gmail.com', 'W1, F1th, F2en', 'file', '่้า่้า', '่้เ่้า้่า', '2024-07-06', 'comm1', 'file_6684f4a3552e1.png', '', 1, 0, 0, '2024-07-03 06:50:11'),
(36, 'Nest Pingyos', 'งานนโยบายและแผนและประกันคุณภาพการศึกษา', '778978', 'MIS Employee', 'app.dev0299@gmail.com', '', 'url', '456', '456456', '2024-07-04', 'comm3', '', '45654', 1, 0, 0, '2024-07-03 07:14:24'),
(37, 'Nest Pingyos', 'งานนโยบายและแผนและประกันคุณภาพการศึกษา', '456546', 'MIS Employee', 'app.dev0299@gmail.com', 'L1, W1, Sou1, TV1', 'url', 'fhfgh', 'tdg', '2024-07-06', 'comm4', '', 'fgdf', 1, 0, 0, '2024-07-03 07:15:31'),
(38, 'Nest Pingyos', 'งานบริหารทั่วไป', '123', 'MIS Employee', 'app.dev0299@gmail.com', '', 'file', '123', '131231', '2024-07-06', 'comm3', 'file_6684fdb114e51.jpg', '', 1, 0, 0, '2024-07-03 07:28:49'),
(39, 'Nest Pingyos', 'งานบริหารทั่วไป', '123', 'MIS Employee', 'app.dev0299@gmail.com', '', 'file', '123', '131231', '2024-07-06', 'comm3', 'file_6684fdc8a53f2.jpg', '', 1, 0, 0, '2024-07-03 07:29:12'),
(40, 'Nest Pingyos', 'งานนโยบายและแผนและประกันคุณภาพการศึกษา', '545456', 'MIS Employee', 'app.dev0299@gmail.com', 'Website, Facebook Official (En)', 'url', 'nvb', 'nvbnvbnvbn', '2024-07-06', 'comm1', '', 'vbnvbnv', 1, 0, 0, '2024-07-03 07:31:16'),
(41, 'Nest Pingyos', 'งานบริหารทั่วไป', '456546', 'MIS Employee', 'app.dev0299@gmail.com', 'Website', 'url', '5', '4456', '2024-07-06', 'comm1', '', '546456', 1, 0, 0, '2024-07-03 07:59:37'),
(42, 'Nest Pingyos', 'งานบริหารทั่วไป', '4596', 'MIS Employee', 'app.dev0299@gmail.com', 'Website, Facebook Official (En)', 'url', '45654645', '6456456', '2024-07-06', 'comm1', '', 'http', 1, 0, 0, '2024-07-03 08:05:38'),
(43, 'Nest Pingyos', 'งานบริหารงานวิจัยบริการวิชาการและวิเทศสัมพันธ์', '490', 'MIS Employee', 'app.dev0299@gmail.com', 'Website, Facebook Official (TH)', 'url', 'dfgdfgdf', 'gdfgdfgdfg', '2024-07-06', 'comm1', '', 'https://docs.google.com/forms/d/1qMrb5qAOC2QF8IbHz_V0GFKe1b_GhLTI2Q7bu0sR6Tg/viewform?edit_requested=true', 1, 0, 0, '2024-07-03 08:10:05'),
(44, 'Nest Pingyos', 'งานบริหารทั่วไป', '6546', 'MIS Employee', 'app.dev0299@gmail.com', 'Facebook Official (TH)', 'url', 'เ้ห้เด้หด', 'เ้ดเ้หดเ้หด้', '2024-07-06', 'comm1', '', 'https://docs.google.com/forms/d/1qMrb5qAOC2QF8IbHz_V0GFKe1b_GhLTI2Q7bu0sR6Tg/viewform?edit_requested=true', 1, 0, 0, '2024-07-03 08:15:26'),
(45, 'Nest Pingyos', 'งานบริหารงานวิจัยบริการวิชาการและวิเทศสัมพันธ์', '456645', 'MIS Employee', 'app.dev0299@gmail.com', 'LinkedIn, Instagram, Twitter', 'url', '54645', '645645645645', '2024-07-06', 'comm3', '', 'https://docs.google.com/forms/d/1qMrb5qAOC2QF8IbHz_V0GFKe1b_GhLTI2Q7bu0sR6Tg/viewform?edit_requested=true', 1, 0, 0, '2024-07-03 08:21:21'),
(46, 'Nest Pingyos', 'งานการเงินการคลังและพัสดุ', '5646456', 'MIS Employee', 'app.dev0299@gmail.com', 'Facebook Official (TH), Line Official', 'url', '546456', '45645645', '2024-07-06', 'comm3', '', 'https://docs.google.com/forms/d/1qMrb5qAOC2QF8IbHz_V0GFKe1b_GhLTI2Q7bu0sR6Tg/viewform?edit_requested=true', 1, 0, 0, '2024-07-03 08:24:52'),
(47, 'Nest Pingyos', 'งานบริหารงานวิจัยบริการวิชาการและวิเทศสัมพันธ์', '564564', 'MIS Employee', 'app.dev0299@gmail.com', 'Website, Facebook Official (TH), Facebook Official (En)', 'url', '456456', '4564564', '2024-07-06', 'comm1', '', 'https://docs.google.com/forms/d/1qMrb5qAOC2QF8IbHz_V0GFKe1b_GhLTI2Q7bu0sR6Tg/viewform?edit_requested=true', 1, 0, 0, '2024-07-03 08:42:16'),
(48, 'Nest Pingyos', 'งานนโยบายและแผนและประกันคุณภาพการศึกษา', '45645', 'MIS Employee', 'app.dev0299@gmail.com', 'Facebook Official (TH), LinkedIn, Instagram', 'url', '45654', '654646456', '2024-07-06', 'comm3', '', 'https://docs.google.com/forms/d/1qMrb5qAOC2QF8IbHz_V0GFKe1b_GhLTI2Q7bu0sR6Tg/viewform?edit_requested=true', 1, 0, 0, '2024-07-03 08:50:04');

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

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ccfn_form_p`
--
ALTER TABLE `ccfn_form_p`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `ccfn_form_s`
--
ALTER TABLE `ccfn_form_s`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `ci_brand`
--
ALTER TABLE `ci_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
