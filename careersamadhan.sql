-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2024 at 08:05 AM
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
-- Database: `careersamadhan`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_category`
--

CREATE TABLE `add_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `cat_image` varchar(255) NOT NULL,
  `cat_add_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cat_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_category`
--

INSERT INTO `add_category` (`cat_id`, `cat_name`, `cat_image`, `cat_add_date`, `cat_status`) VALUES
(1, 'BPT', '', '2024-11-23 02:13:58', 'Active'),
(3, 'BHM', '', '2024-11-23 02:14:16', 'Active'),
(4, 'BMLT', '', '2024-11-23 02:14:26', 'Active'),
(5, 'BOT', '', '2024-11-23 02:14:36', 'Active'),
(6, 'BOTA', '', '2024-11-23 02:14:45', 'Active'),
(7, 'DMLT', '', '2024-11-23 02:14:54', 'Active'),
(8, 'DOT', '', '2024-11-23 02:15:04', 'Active'),
(9, 'DPT', '', '2024-11-23 02:15:16', 'Active'),
(10, 'X-RAY', '', '2024-11-23 02:15:26', 'Active'),
(11, 'TECHNICIAN', '', '2024-11-23 02:15:38', 'Active'),
(12, 'DIPLOMA IN ULTRASOUND', '', '2024-11-23 02:15:48', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `add_course`
--

CREATE TABLE `add_course` (
  `id` int(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `duration` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_course`
--

INSERT INTO `add_course` (`id`, `category`, `course_name`, `duration`) VALUES
(1, '1', 'MBBS', '5'),
(2, '1', 'MBBS PG', '7'),
(3, '3', 'MBBS CHINA', '5');

-- --------------------------------------------------------

--
-- Table structure for table `add_state`
--

CREATE TABLE `add_state` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `type` int(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `basic_info` longtext NOT NULL,
  `cat_image` varchar(255) NOT NULL,
  `cat_add_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cat_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_state`
--

INSERT INTO `add_state` (`cat_id`, `cat_name`, `type`, `state`, `basic_info`, `cat_image`, `cat_add_date`, `cat_status`) VALUES
(1, 'MBBS IN Bihar', 1, 'Bihar', 'Bihar has total 13 Government Medical Colleges (Including 1 AIIMS Patna) accepting NEET UG and All Government Medical Colleges are best, The best Government Medical Colleges in Bihar are Patna Medical College, Patna, Darbhanga Medical College, Darbhanga, Nalanda Medical College, Patna, Indira Gandhi Institute of Medical Sciences, Patna respectively. The Patna Medical College, Patna, have highest number of MBBS seats in Bihar with annual intake 200 Seats. In Bihar there are total                                ', '', '2024-12-24 23:09:46', 'Active'),
(2, 'MBBS In  Arunachal Pradesh', 1, 'Arunachal Pradesh', '                                                           \r\nGovernment Medical Colleges (Including 1 AIIMS Patna) accepting NEET UG and All Government Medical Colleges are best, The best Government Medical Colleges in Bihar are Patna Medical College, Patna, Darbhanga Medical College, Darbhanga, Nalanda Medical College, Patna, Indira Gandhi Institute of Medical Sciences, Patna respectively. The Patna Medical College, Patna, have highest number of MBBS ', '', '2024-12-24 23:12:02', 'Active'),
(3, 'MBBS IN China', 2, 'Abroad', 'China Government Medical Colleges (Including 1 AIIMS Patna) accepting NEET UG and All Government Medical Colleges are best, The best Government Medical Colleges in China are Patna Medical College, Patna, Darbhanga Medical College, Darbhanga, Nalanda Medical College, Patna, Indira Gandhi Institute of Medical Sciences, Patna respectively. The Patna Medical College, Patna, have highest number of MBBS       China                                                \r\n                                                  ', '', '2024-12-24 23:17:36', 'Active'),
(4, 'MBBS IN Nepal', 2, 'Abroad', '  MBBS IN NepalMBBS IN NepalMBBS IN NepalMBBS IN NepalMBBS IN Nepal MBBS IN NepalMBBS IN Nepal MBBS IN Nepal                                                     \r\n     MBBS IN NepalMBBS IN NepalMBBS IN NepalMBBS IN NepalMBBS IN Nepal MBBS IN NepalMBBS IN Nepal MBBS IN Nepal                                                     \r\n  MBBS IN NepalMBBS IN  NepalMBBS IN  NepalMBBS IN NepalMBBS IN Nepal MBBS IN NepalMBBS IN Nepal MBBS IN Nepal                                                     \r\n  MBBS IN NepalMBBS IN NepalMBBS IN NepalMBBS IN NepalMBBS IN Nepal MBBS IN NepalMBBS IN Nepal MBBS IN Nepal                                                     \r\n                                               ', '', '2024-12-24 23:20:20', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `add_sub_category`
--

CREATE TABLE `add_sub_category` (
  `sub_cat_id` int(11) NOT NULL,
  `sub_cat_image` varchar(255) NOT NULL,
  `sub_cat_image2` varchar(100) NOT NULL,
  `image3` varchar(100) NOT NULL,
  `image4` varchar(100) NOT NULL,
  `image5` varchar(100) NOT NULL,
  `sub_cat_name` varchar(100) NOT NULL,
  `c_address` varchar(100) NOT NULL,
  `aproved_by` varchar(100) NOT NULL,
  `n_courses` varchar(100) NOT NULL,
  `streams` varchar(100) NOT NULL,
  `inr` varchar(100) NOT NULL,
  `cat_id` varchar(11) NOT NULL,
  `sub_cat_status` varchar(20) NOT NULL,
  `type_college` varchar(100) NOT NULL,
  `established` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `affiliation` varchar(100) NOT NULL,
  `ratings` varchar(100) NOT NULL,
  `c_overview` longtext NOT NULL,
  `fee_s` longtext NOT NULL,
  `map` longtext NOT NULL,
  `rname` varchar(100) NOT NULL,
  `rating` varchar(100) NOT NULL,
  `rdate` varchar(100) NOT NULL,
  `coment` varchar(100) NOT NULL,
  `home_c` int(100) NOT NULL,
  `sub_cat_add_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tag1` varchar(1000) NOT NULL,
  `tag2` varchar(1000) NOT NULL,
  `tag3` varchar(1000) NOT NULL,
  `tag4` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_sub_category`
--

INSERT INTO `add_sub_category` (`sub_cat_id`, `sub_cat_image`, `sub_cat_image2`, `image3`, `image4`, `image5`, `sub_cat_name`, `c_address`, `aproved_by`, `n_courses`, `streams`, `inr`, `cat_id`, `sub_cat_status`, `type_college`, `established`, `location`, `affiliation`, `ratings`, `c_overview`, `fee_s`, `map`, `rname`, `rating`, `rdate`, `coment`, `home_c`, `sub_cat_add_date`, `tag1`, `tag2`, `tag3`, `tag4`) VALUES
(1, 'images/sub-category/1.jpg', '', '', '', 'images/sub-category/2.jpg', 'Sundardeep Group Of Instititution', 'Gaziabad , UP, ', 'AICTE, BCI, NCTE', '30+ Courses', 'Engineering, Medicine & Health Sciences, Teaching & Education, Law, Business & Management Studies, I', '3,00,000/- ', '1', 'Active', 'Private', '2006', 'Gaziabad , UP', 'AKTU (Dr. A.P.J. Abdul Kalam Technical University)', '4.0', 'Sundardeep group of instititution To provide knowledge with Academic Excellence and to make our students better Technocrats & Professionals, so that they chart out their own path of success and possess perfection in their endeavors. To inspire our Faculty members to always Excel and in turn Motivate the Students to achieve Excellence. To guide our Students to be better Technocrats & Professionals with the quality to pave the way for creating a better tomorrow for our Nation', '', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.153224189174!2d77.53298857550269!3d28.68506277563608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cf1b78d24d27b%3A0x1ab5eb467e30e71a!2sSunder%20Deep%20Group%20of%20Institution!5e0!3m2!1sen!2sin!4v1732097017662!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '', '', '', '', 1, '2024-11-20 10:05:36', '', '', '', ''),
(2, 'images/sub-category/3.jpg', '', '', '', 'images/sub-category/4.png', 'MANGALAYATAN UNIVERSITY', 'Aligarh , UP', 'NCTE, PCI, BCI, UGC', '25 Courses', 'B.TECH , M.TECH', '3,25,000/-', '1', 'Active', 'PRIVATE', '2006', 'Aligarh , UP', 'AIU( ASSOCIATION OF INDIAN UNIVERSITY)', '4.1 ', 'MANGALAYATAN UNIVERSITY To be a leader in education, an institution must be founded on two basic principles: keeping the interest of students as its foremost priority and recognizing that knowledge is ever-growing, omnipresent and requires the opening of minds. At Mangalayatan University, we take pride in these two qualities being at the core of our existence. Mangalayatan (translated as the germinal bed of positive thought) aims to perpetuate a culture of hardwork, embracing change and preparing oneself for the fast progressing world with the latest skills and the highest level of social and personal values. Situated 20 km from the Yamuna Expressway in Uttar Pradesh, Mangalayatan University was founded in 2006 and has graduated over 7000+ students. Nearly 3500+ students from India and abroad are currently studying on campus. Mangalayatan University vision is to give students from all kinds of background, a quality educational experience leading to legitimately rewarding career opportunities. ', '', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3534.409932887282!2d77.89510557546511!3d27.64278607621961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39736245b0e4c18b%3A0xc9463b55b7851cb2!2sMangalayatan%20University!5e0!3m2!1sen!2sin!4v1732098145885!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '', '', '', '', 1, '2024-11-20 10:22:36', '', '', '', ''),
(3, 'images/sub-category/5.jpg', '', '', '', 'images/sub-category/6.jpg', 'GLocal University', ' Saharanpur , Uttar Pradesh', ' Approved By UGC, State Government, AICTE, Bar Council of India, Pharmacy Council of India, Associat', '50+', 'MBA , B.TECH ,ENGINEERING (Mechanical ,Civil, Electrical And Computer Science))', '3,55,000', '15', 'Active', 'Private', '2011', ' Saharanpur , Uttar Pradesh', 'UGC', '4.3', 'GLocal University To provide knowledge with Academic Excellence and to make our students better Technocrats & Professionals, so that they chart out their own path of success and possess perfection in their endeavors. To inspire our Faculty members to always Excel and in turn Motivate the Students to achieve Excellence. To guide our Students to be better Technocrats & Professionals with the quality to pave the way for creating a better tomorrow for our Nation. ', '', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14110878.70001245!2d59.18302354999999!3d30.292958600000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390929d43c6651bb%3A0x1770a02820ae4ef0!2sGlocal%20University!5e0!3m2!1sen!2sin!4v1732098667548!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '', '', '', '', 1, '2024-11-20 10:31:18', '', '', '', ''),
(4, 'images/sub-category/7.jpg', '', '', '', 'images/sub-category/4.png', 'Kashi Institute Of Technology', 'Varanasi , Uttar Pradesh', 'AICTE, BCI, NCTE', '30', 'Mtech , BCA , BBA, MBA , Diploma', '3,04,000/-', '7', 'Active', 'Private', '2008', 'Varanasi , Uttar Pradesh', 'AKTU (Dr. A.P.J. Abdul Kalam Technical University)', '3.2 ', 'Kashi Institute of TechnologY Kashi Institute of Technology (KIT) is an integral part of Kashi Group of Institutions (KGI). The institute was established in 2008 and is located in Varanasi. It is a private institution that is affiliated to Dr Abdul Kalam Technical University (AKTU). With its 12 year experience of academic excellence, KIT offers holistic education to students. Moreover, Kashi Institute of Technology has been awarded Grade A Accreditation by NAAC. KIT is a member of the Computer Society of India (CSI). Further, it offers spoken English tutorial workshops for students in collaboration with IIT Bombay. In addition, the institute has signed an MoU with IIT Kanpur for academic purposes. The institute has a record of 20 research papers that have been published by the students till date at the national level. As guest lecturers and for delivering seminars, KIT has been visited by professors from IIT BHU, Banaras Hindu University and Utkarsh Micro Finance. KIT has also established a Corporate Relations Centre (CRC) ', '', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230886.76071289222!2d82.50297168671878!3d25.283848399999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39854b28a50b87e7%3A0x9e7beb7bf99a2777!2sKashi%20Institute%20Of%20Technology!5e0!3m2!1sen!2sin!4v1732099123611!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '', '', '', '', 1, '2024-11-20 10:38:55', '', '', '', ''),
(5, 'images/sub-category/bg1.jpg', '', '', '', 'images/sub-category/college-students-smiling-banner.jpg', 'era', 'patna', 'naac', '6', 'Engineering | Management | Pharmacy | Nursing | Sciences | Computer Applications |', '230000', '22', 'Active', 'private', '2000', 'Patna', 'patna university', '4', 'Ganga Institute of Technology and Management (GITAM) is a renowned educational institution in Kablana, Jhajjar district of Haryana, India. Established in 2008 by the Pawan Ganga Educational Society, GITAM has emerged as a leading technical and management education Institute. The Institute is duly approved by AICTE (All India Council for Technical Education) and Affiliated to Maharshi Dayanand University (MDU, Rohtak Graded A+ by NAAC). GITAM is also recognized under Section 2(f) of the UGC Act, 1956.', '', 'birla', '', '', '', '', 0, '2024-11-23 03:12:26', '', '', '', ''),
(6, 'images/sub-category/college-student-walking-to-university-campus-education-banner-concept-free-photo.jpg', '', '', '', '', 'KIST OLLEGE', 'patna', 'naac', '8', 'Engineering | Management | Pharmacy | Nursing | Sciences | Computer Applications |', '600000', '23', 'Active', 'private', '2000', 'Patna', 'patna university', '5', 'The Korea Institute of Science and Technology is a multi-disciplinary research institute located in Seoul, South Korea. Founded in 1966, it was the first multi-disciplinary scientific research institute in Korea and has contributed significantly to the economic development of the country, particularly during the years of accelerated growth in the 1970s and 1980s.', '', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7237016.474509509!2d76.105388275!3d27.664768999999986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19de00bafc23%3A0x82030b73c6374211!2sKIST%20Medical%20College%20-%20Basic%20Science%20Block!5e0!3m2!1sen!2sin!4v1732332281943!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '', '', '', '', 0, '2024-11-23 03:24:53', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_user_id` varchar(255) NOT NULL,
  `admin_role` varchar(50) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_mobile_no` varchar(100) NOT NULL,
  `admin_status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `admin_add_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_user_id`, `admin_role`, `admin_password`, `admin_mobile_no`, `admin_status`, `admin_add_date`) VALUES
(1, 'The Edu Nova', 'admin', 'Admin', 'admin', '123456789', 'Active', '2024-08-29 09:25:06');

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `college` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`id`, `name`, `email`, `phone`, `state`, `college`, `course`, `date`) VALUES
(1, 'amit', 'amitk@gmail.com', '8353998872', 'up', 'yn', 'b.tech', '2024-11-03 09:31:38.884429'),
(2, 'amit', 'amitk@gmail.com', '8353998872', 'up', 'yn', 'b.tech', '2024-11-03 09:33:31.624738'),
(3, 'test', 'amitk@gmail.com', '8353998872', 'up', 'yn', 'b.tech', '2024-11-03 09:34:42.149458'),
(4, 'nishikant', 'sales@erainfotech.in', '9470637132', 'up', 'buddha institute of technology', 'isc', '2024-11-05 03:04:13.766631'),
(5, '', '', '', '', '', '', '2024-11-23 03:15:06.718686');

-- --------------------------------------------------------

--
-- Table structure for table `apply_job`
--

CREATE TABLE `apply_job` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` int(100) NOT NULL,
  `resume` varchar(100) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `college_course`
--

CREATE TABLE `college_course` (
  `id` int(100) NOT NULL,
  `college_name` varchar(100) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `fee` int(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `college_course`
--

INSERT INTO `college_course` (`id`, `college_name`, `course_name`, `fee`, `date`) VALUES
(36, 'Sundardeep Group Of Instititution', 'BCA', 65000, '2024-11-20 10:07:30'),
(37, 'Sundardeep Group Of Instititution', 'Masters in Business Administration (MBA)', 850000, '2024-11-20 10:10:56'),
(38, 'KIST OLLEGE', 'Diploma in it', 120000, '2024-11-23 03:21:18'),
(39, 'abc college', '', 0, '2024-12-23 15:53:37');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `con_id` int(11) NOT NULL,
  `con_name` varchar(100) NOT NULL,
  `con_email` varchar(50) NOT NULL,
  `con_mobile` varchar(50) NOT NULL,
  `con_address` text NOT NULL,
  `con_add_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enquary`
--

CREATE TABLE `enquary` (
  `id` int(11) NOT NULL,
  `state` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `notes` varchar(100) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquary`
--

INSERT INTO `enquary` (`id`, `state`, `name`, `email`, `mobile`, `subject`, `notes`, `date`) VALUES
(1, '', 'amit', 'amitk@gmail.com', '8353998872', 'test', 'bzdfgfsg', '2024-11-03 09:19:40.998790'),
(2, 'up', 'test', 'amitk@gmail.com', '9450778712', '', 'Admission', '2024-12-24 21:10:51.295773'),
(3, 'up', 'ravi', 'ravik@gmail.com', '222', '', '', '2024-12-24 21:12:30.860929'),
(4, 'up', 'ravi', 'amitk@gmail.com', '234', 'Counselling', '', '2024-12-24 21:14:09.509073');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(100) NOT NULL,
  `college_name` varchar(100) NOT NULL,
  `faq` longtext NOT NULL,
  `faqans` longtext NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `college_name`, `faq`, `faqans`, `date`) VALUES
(2, 'Sundardeep Group Of Instititution', 'How To Take Adimission', 'Apply Online Test', '2024-11-20 10:15:14.434266'),
(3, 'KIST OLLEGE', 'How is career in kist', 'it is good', '2024-11-23 03:21:51.621593');

-- --------------------------------------------------------

--
-- Table structure for table `hm_category`
--

CREATE TABLE `hm_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `cat_image` varchar(255) NOT NULL,
  `cat_add_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cat_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hm_category`
--

INSERT INTO `hm_category` (`cat_id`, `cat_name`, `cat_image`, `cat_add_date`, `cat_status`) VALUES
(1, 'DHM', '', '2024-11-23 03:57:41', ''),
(2, 'BHM', '', '2024-11-23 03:57:49', '');

-- --------------------------------------------------------

--
-- Table structure for table `home_slider`
--

CREATE TABLE `home_slider` (
  `slider_id` int(11) NOT NULL,
  `slider_image` varchar(255) NOT NULL,
  `slider_status` varchar(50) NOT NULL,
  `slider_add_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_slider`
--

INSERT INTO `home_slider` (`slider_id`, `slider_image`, `slider_status`, `slider_add_date`) VALUES
(2, 'images/slider/2.jpg', 'Active', '2024-07-19 08:06:35'),
(3, 'images/slider/3.jpg', 'Active', '2024-07-19 08:06:42'),
(4, 'images/slider/5.jpg', 'Active', '2024-07-19 08:06:49'),
(5, 'images/slider/C1.jpg', 'Active', '2024-08-29 08:22:01');

-- --------------------------------------------------------

--
-- Table structure for table `law_category`
--

CREATE TABLE `law_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `cat_image` varchar(255) NOT NULL,
  `cat_add_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cat_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `law_category`
--

INSERT INTO `law_category` (`cat_id`, `cat_name`, `cat_image`, `cat_add_date`, `cat_status`) VALUES
(1, 'BALLB', '', '2024-11-23 02:04:21', ''),
(2, 'BBALLB', '', '2024-11-23 02:04:39', ''),
(3, 'LLB', '', '2024-11-23 03:51:57', ''),
(4, 'LLM', '', '2024-11-23 03:52:04', '');

-- --------------------------------------------------------

--
-- Table structure for table `login_data`
--

CREATE TABLE `login_data` (
  `login_id` int(11) NOT NULL,
  `login_name` varchar(100) DEFAULT NULL,
  `login_email` varchar(100) DEFAULT NULL,
  `login_mobile` varchar(50) DEFAULT NULL,
  `login_add_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nursing_category`
--

CREATE TABLE `nursing_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `cat_image` int(255) NOT NULL,
  `cat_add_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cat_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nursing_category`
--

INSERT INTO `nursing_category` (`cat_id`, `cat_name`, `cat_image`, `cat_add_date`, `cat_status`) VALUES
(1, 'BSC NURSING', 0, '2024-11-23 04:01:43', ''),
(2, 'ANM', 0, '2024-11-23 04:01:51', ''),
(3, 'GNM', 0, '2024-11-23 04:01:58', ''),
(4, 'POST NURSING', 0, '2024-11-23 04:02:09', '');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy_category`
--

CREATE TABLE `pharmacy_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `cat_image` varchar(255) NOT NULL,
  `cat_add_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cat_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pharmacy_category`
--

INSERT INTO `pharmacy_category` (`cat_id`, `cat_name`, `cat_image`, `cat_add_date`, `cat_status`) VALUES
(1, 'DPHARMA', '', '2024-11-23 04:06:12', ''),
(2, 'BPHARMA', '', '2024-11-23 04:06:18', ''),
(3, 'MPHARMA', '', '2024-11-23 04:06:24', '');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `name`, `date`) VALUES
(1, 'Andhra Pradesh', '2024-12-24 23:05:07.747175'),
(2, 'Arunachal Pradesh', '2024-12-24 23:05:24.971606'),
(3, ' Assam', '2024-12-24 23:05:38.406175'),
(4, 'Bihar', '2024-12-24 23:05:53.369865'),
(5, 'Chhattisgarh', '2024-12-24 23:06:15.552393');

-- --------------------------------------------------------

--
-- Table structure for table `state_college`
--

CREATE TABLE `state_college` (
  `id` int(11) NOT NULL,
  `college_name` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `estd` int(100) NOT NULL,
  `intak` int(100) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `state_college`
--

INSERT INTO `state_college` (`id`, `college_name`, `state`, `category`, `type`, `country`, `estd`, `intak`, `date`) VALUES
(1, 'xyz college', '', '1', '2', '1', 1999, 5647, '2024-12-24 23:24:18.843221'),
(2, 'xyz bihar college', '', '1', '1', '1', 1990, 456, '2024-12-24 23:36:29.818913'),
(3, 'patna bihar gov college', '', '1', '2', '1', 1999, 456, '2024-12-24 23:38:19.868715'),
(4, 'ABC CHINA college', '', '3', '2', '2', 1999, 456, '2024-12-24 23:48:17.852386'),
(5, 'CHING CHONG CHINA college', '', '3', '1', '2', 1990, 456, '2024-12-24 23:49:29.682930');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `v_id` int(11) NOT NULL,
  `v_name` varchar(100) DEFAULT NULL,
  `v_mobile` varchar(50) DEFAULT NULL,
  `v_alter_mobile` varchar(50) DEFAULT NULL,
  `v_cover_pic` varchar(255) DEFAULT NULL,
  `v_city` varchar(20) DEFAULT NULL,
  `v_service` varchar(50) DEFAULT NULL,
  `v_sub_category` varchar(20) NOT NULL,
  `v_address` text DEFAULT NULL,
  `v_about_us` text DEFAULT NULL,
  `v_photo_video_start_price` varchar(50) DEFAULT NULL,
  `v_adhar_no` varchar(50) DEFAULT NULL,
  `v_camera_brand` varchar(100) DEFAULT NULL,
  `v_camera_modal` varchar(100) DEFAULT NULL,
  `v_lens_gimple` varchar(100) DEFAULT NULL,
  `v_drone_brand` varchar(50) DEFAULT NULL,
  `v_drone_modal` varchar(100) DEFAULT NULL,
  `v_edit_soft` varchar(100) DEFAULT NULL,
  `v_account_no` varchar(50) DEFAULT NULL,
  `v_ifsc_code` varchar(50) DEFAULT NULL,
  `v_branch` varchar(50) DEFAULT NULL,
  `v_half_day_price` varchar(50) DEFAULT NULL,
  `v_full_day_price` varchar(50) DEFAULT NULL,
  `v_extra_hours_price` varchar(50) DEFAULT NULL,
  `v_image_1` varchar(255) DEFAULT NULL,
  `v_image_2` varchar(255) DEFAULT NULL,
  `v_image_3` varchar(255) DEFAULT NULL,
  `v_image_4` varchar(255) DEFAULT NULL,
  `v_image_5` varchar(255) DEFAULT NULL,
  `v_image_6` varchar(255) DEFAULT NULL,
  `v_image_7` varchar(255) DEFAULT NULL,
  `v_image_8` varchar(255) DEFAULT NULL,
  `v_image_9` varchar(255) DEFAULT NULL,
  `v_image_10` varchar(255) DEFAULT NULL,
  `v_video_1` varchar(255) DEFAULT NULL,
  `v_video_2` varchar(255) DEFAULT NULL,
  `v_video_3` varchar(255) DEFAULT NULL,
  `v_video_4` varchar(255) DEFAULT NULL,
  `v_video_link_1` text DEFAULT NULL,
  `v_video_link_2` text DEFAULT NULL,
  `v_video_link_3` text DEFAULT NULL,
  `v_video_link_4` text DEFAULT NULL,
  `v_term` varchar(20) NOT NULL,
  `v_promoted` varchar(50) NOT NULL,
  `v_status` varchar(20) DEFAULT NULL,
  `v_add_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_booking`
--

CREATE TABLE `vendor_booking` (
  `v_book_id` int(11) NOT NULL,
  `v_book_name` varchar(100) NOT NULL,
  `v_book_email` varchar(50) NOT NULL,
  `v_book_mobile` varchar(50) NOT NULL,
  `v_book_message` varchar(100) NOT NULL,
  `v_id` varchar(30) NOT NULL,
  `v_book_cat_id` int(11) NOT NULL,
  `v_book_status` varchar(30) NOT NULL,
  `v_book_add_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_category`
--
ALTER TABLE `add_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `add_course`
--
ALTER TABLE `add_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_state`
--
ALTER TABLE `add_state`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `add_sub_category`
--
ALTER TABLE `add_sub_category`
  ADD PRIMARY KEY (`sub_cat_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apply_job`
--
ALTER TABLE `apply_job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college_course`
--
ALTER TABLE `college_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `enquary`
--
ALTER TABLE `enquary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hm_category`
--
ALTER TABLE `hm_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `home_slider`
--
ALTER TABLE `home_slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `law_category`
--
ALTER TABLE `law_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `login_data`
--
ALTER TABLE `login_data`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `nursing_category`
--
ALTER TABLE `nursing_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `pharmacy_category`
--
ALTER TABLE `pharmacy_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state_college`
--
ALTER TABLE `state_college`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`v_id`);

--
-- Indexes for table `vendor_booking`
--
ALTER TABLE `vendor_booking`
  ADD PRIMARY KEY (`v_book_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_category`
--
ALTER TABLE `add_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `add_course`
--
ALTER TABLE `add_course`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `add_state`
--
ALTER TABLE `add_state`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `add_sub_category`
--
ALTER TABLE `add_sub_category`
  MODIFY `sub_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `apply_job`
--
ALTER TABLE `apply_job`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `college_course`
--
ALTER TABLE `college_course`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enquary`
--
ALTER TABLE `enquary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hm_category`
--
ALTER TABLE `hm_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home_slider`
--
ALTER TABLE `home_slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `law_category`
--
ALTER TABLE `law_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login_data`
--
ALTER TABLE `login_data`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nursing_category`
--
ALTER TABLE `nursing_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pharmacy_category`
--
ALTER TABLE `pharmacy_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `state_college`
--
ALTER TABLE `state_college`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_booking`
--
ALTER TABLE `vendor_booking`
  MODIFY `v_book_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
