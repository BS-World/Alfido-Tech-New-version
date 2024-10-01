-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2024 at 06:01 PM
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
-- Database: `internship`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `whatsapp` varchar(15) NOT NULL,
  `internshipDomain` varchar(50) NOT NULL,
  `cidno` varchar(50) NOT NULL,
  `linkedIn` varchar(200) NOT NULL,
  `gtask1` varchar(200) NOT NULL,
  `ltask1` varchar(200) NOT NULL,
  `gtask2` varchar(200) NOT NULL,
  `ltask2` varchar(200) NOT NULL,
  `gtask3` varchar(200) NOT NULL,
  `ltask3` varchar(200) NOT NULL,
  `paymentStatus` enum('Yes','No') NOT NULL,
  `paymentScreenshot` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `fullName`, `email`, `whatsapp`, `internshipDomain`, `cidno`, `linkedIn`, `gtask1`, `ltask1`, `gtask2`, `ltask2`, `gtask3`, `ltask3`, `paymentStatus`, `paymentScreenshot`, `created_at`) VALUES
(1, 'BHANUPRATAP BISWAS', 'bhanubiswas98@gmail.com', '9977465250', 'UX/UI Design', 'yrty', 'https://github.com/AlfidoTech/AlfidoTech/blob/main/submission.html', 'dfg', 'https://github.com/AlfidoTech/AlfidoTech/blob/main/submission.html', 'https://github.com/AlfidoTech/AlfidoTech/blob/main/submission.html', 'https://github.com/AlfidoTech/AlfidoTech/blob/main/submission.html', 'https://github.com/AlfidoTech/AlfidoTech/blob/main/submission.html', 'https://github.com/AlfidoTech/AlfidoTech/blob/main/submission.html', 'Yes', 'powerbi.png', '2024-09-25 19:01:53'),
(2, 'BHANUPRATAP BISWAS', 'bhanubiswas98@gmail.com', '9977465250', 'UX/UI Design', 'yrty', 'https://github.com/AlfidoTech/AlfidoTech/blob/main/submission.html', 'dfg', 'https://github.com/AlfidoTech/AlfidoTech/blob/main/submission.html', 'https://github.com/AlfidoTech/AlfidoTech/blob/main/submission.html', 'https://github.com/AlfidoTech/AlfidoTech/blob/main/submission.html', 'https://github.com/AlfidoTech/AlfidoTech/blob/main/submission.html', 'https://github.com/AlfidoTech/AlfidoTech/blob/main/submission.html', 'Yes', 'powerbi.png', '2024-09-25 19:04:09'),
(3, 'BHANUPRATAP BISWAS', 'bhanubiswas98@gmail.com', '9977465250', 'React.JS', 'yrty', 'https://github.com/AlfidoTech/AlfidoTech/blob/main/submission.html', 'dfg', 'vbcv', 'vb', 'xcv', 'xcb', 'cxb', 'Yes', 'Teenu Anand.pdf', '2024-09-25 19:05:26'),
(4, 'BHANUPRATAP BISWAS', 'bhanubiswas98@gmail.com', '9977465250', 'React.JS', 'yrty', 'https://github.com/AlfidoTech/AlfidoTech/blob/main/submission.html', 'dfg', 'vbcv', 'vb', 'xcv', 'xcb', 'cxb', 'Yes', 'Designer (32).png', '2024-09-25 19:21:34'),
(5, 'BHANUPRATAP BISWAS', 'bhanubiswas98@gmail.com', '9977465250', 'UX/UI Design', 'yrty', 'https://github.com/AlfidoTech/AlfidoTech/blob/main/submission.html', 'dfg', 'vbcv', 'vb', 'xcv', 'xcb', 'cxb', 'Yes', 'offer letter (11).png', '2024-09-29 14:00:35'),
(6, 'BHANUPRATAP BISWAS', 'bhanubiswas98@gmail.com', '9977465250', 'React.JS', 'yrty', 'https://github.com/AlfidoTech/AlfidoTech/blob/main/submission.html', 'dfg', 'vbcv', 'vb', 'xcv', 'xcb', 'cxb', 'Yes', 'offer letter (11).png', '2024-09-29 14:43:20'),
(7, 'BHANUPRATAP BISWAS', 'bhanubiswas98@gmail.com', '9977465250', 'React.JS', 'yrty', 'https://github.com/AlfidoTech/AlfidoTech/blob/main/submission.html', 'dfg', 'vbcv', 'vb', 'xcv', 'xcb', 'cxb', 'Yes', 'offer letter (11).png', '2024-09-29 14:56:57'),
(8, 'BHANUPRATAP BISWAS', 'bhanubiswas98@gmail.com', '9977465250', 'UX/UI Design', 'yrty', 'https://github.com/AlfidoTech/AlfidoTech/blob/main/submission.html', 'dfg', 'vbcv', 'vb', 'xcv', 'xcb', 'cxb', 'Yes', 'Mayank Kale (1).jpg', '2024-09-29 18:28:04'),
(9, 'BHANUPRATAP BISWAS', 'bhanubiswas98@gmail.com', '9977465250', 'UX/UI Design', 'yrty', 'https://github.com/AlfidoTech/AlfidoTech/blob/main/submission.html', 'dfg', 'vbcv', 'vb', 'xcv', 'xcb', 'cxb', 'Yes', 'Mayank Kale (1).jpg', '2024-09-30 19:32:01');

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `candidate_id` varchar(50) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `domain` varchar(100) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `certificate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`candidate_id`, `fullName`, `domain`, `duration`, `certificate`) VALUES
(' BS/JAN/0302', 'BASIT YOUSF', 'Web Development', '1 Month', 'uploads/offer letter (11).png'),
(' BS/SEP/190303', 'Prashant Singh', 'Data Analytics', '1 Month', 'uploads/Prashant Singh.pdf'),
('BC/OCT/1746', 'khushboo padmakar', 'Java Development', '1 Month', 'NA'),
('BS/APR/10536', 'Tanmay Arun Narkar', 'Data Analytics', '1 Month', 'NA'),
('BS/APR/10568', 'Mayakrishna Yadav', 'Data Analytics', '1 Month', 'NA'),
('BS/APR/10570', 'Gautam Kumar', 'Data Analytics', '1 Month', 'NA'),
('BS/APR/10582', 'Pocharam Srindhu', 'Python Development', '1 Month', 'NA'),
('BS/AUG/1930', 'DHIRAJ KUMAR', 'Web Development', '1 Month', 'NA'),
('BS/AUG/1936', 'Yogita Srivastava ', 'Data Science', '1 Month', 'NA'),
('BS/AUG/1967', 'Devika Shibu', 'Data Science', '1 Month', 'NA'),
('BS/AUG/1971', 'Nithish Kumar ', 'Web Development', '1 Month', 'NA'),
('BS/AUG/1978', 'Teenu Anand', 'Android Development', '1 Month', 'NA'),
('BS/AUG/1980', 'Anupam Vishwakarma', 'Data Analytics', '1 Month', 'NA'),
('BS/AUG/2003', 'SURANGALA SYAM PEDDI SURESH ', 'Data Analytics', '4 Months', 'NA'),
('BS/AUG/2004', 'Haripriya Koratala', 'Web Development', '1 Month', 'NA'),
('BS/AUG/2007', 'keesari sreeja reddy', 'Web Development', '1 Month', 'NA'),
('BS/CH/31822168', 'Rani Katare', 'UX/UI Design (Figma)', '2 months', 'NA'),
('BS/CH/31822198', 'Prerna Nareda', 'UX/UI Design (Figma)', '2 months', 'NA'),
('BS/DEC/3097', 'Varshitha gangishetty', 'Python Development', '1 Month', 'uploads/Mayank Kale.jpg'),
('BS/DEC/3099', 'Shruti Negi', 'Web Development', '1 Month', 'NA'),
('BS/DEC/3105', 'Pranav Pattapu', 'Web Development', '1 Month', 'NA'),
('BS/DEC/3110', 'K.Srinidhi', 'Python Development', '1 Month', 'NA'),
('BS/DEC/3113', 'Sai Priya Kotte', 'Python Development', '1 Month', 'NA'),
('BS/DEC/3114', 'SadhvikaChowdary Pentyala', 'Python Development', '1 Month', 'NA'),
('BS/DEC/3156', 'Sumit Sambhaji Nikhade', 'Web Development', '1 Month', 'NA'),
('BS/DEC/3157', 'Karan Mandaokar', 'Data Science', '1 Month', 'NA'),
('BS/DEC/3174', 'Matam Jeshwanth', 'Web Development', '1 Month', 'NA'),
('BS/DEC/3184', 'Depaka Manikanta', 'Python Development', '1 Month', 'NA'),
('BS/DEC/3191', 'Prasad Dnyaneshwar Banarase', 'Web Development', '1 Month', 'NA'),
('BS/DEC/3196', 'Monisha P M', 'Python Development', '1 Month', 'NA'),
('BS/DEC/3233', 'Chudi Sai Devamsh Reddy', 'Python Development', '4 Month', 'NA'),
('BS/DEC/3251', 'Rathod Anil Tulshiram', 'Web Development', '1 Month', 'NA'),
('BS/DEC/3255', 'Baddenapalli Akshaya', 'Java Development', '1 Month', 'NA'),
('BS/DEC/403594', 'Biradar Swati Sanjiv', 'Web Development', '4 Month ', 'NA'),
('BS/DEC/88779', 'Shweta Shivaji Surwase', 'Java Development', '4 Month', 'NA'),
('BS/FEB/10197', 'Ayushi Bhatt ', 'Web Development', '1 Month', 'NA'),
('BS/FEB/10234', 'CHUDI SAI DEVAMSH REDDY', 'Java Development', '4 Month', 'NA'),
('BS/FEB/10256', 'Suhail Khan', 'Python Development', '1 Month', 'NA'),
('BS/FEB/10260', 'Priyansh Soni', 'Python Development', '1 Month', 'NA'),
('BS/FEB/10269', 'Bommana rikshith', 'Python Development', '1 Month', 'NA'),
('BS/FEB/10271', 'Patil Dhanshri Sunil', 'Web Development', '1 Month', 'NA'),
('BS/FEB/10274', 'Muppavarapu Manishwari ', 'Java Development', '1 Month', 'NA'),
('BS/FEB/10279', 'Mohammad Aslam Mohiuddin ', 'Python Development', '1 Month', 'NA'),
('BS/FEB/10281', 'RAKSHITH GOWDA', 'Python Development', '1 Month', 'NA'),
('BS/FEB/10311', 'Dhruv Harchandani ', 'Data Analytics', '1 Month', 'NA'),
('BS/FEB/10318', 'CHAKKA RASAGNA', 'Web Development', '1 Month', 'NA'),
('BS/FEB/10321', 'Kishore Kumar H', 'Python Development', '1 Month', 'NA'),
('BS/FEB/10325', ' M Uma Naga Bharathi', 'Data Analytics', '1 Month', 'NA'),
('BS/FEB/10328', 'THATI ANILKUMAR', 'Java Development', '1 Month', 'NA'),
('BS/FEB/10329', 'THATI ANILKUMAR', 'Python Development', '1 Month', 'NA'),
('BS/FEB/10339', 'D SHIVARAM GOUD', 'Java Development', '1 Month', 'NA'),
('BS/FEB/1901', 'Sacchitanand Dwivedi', 'Data Analytics (Python, Power BI, Advance Excel)', '6 Months (Feb to Jul)', 'NA'),
('BS/FEB/1902', 'Shivam Yadav', 'Data Science', '6 Months (Feb to Jul)', 'NA'),
('BS/FEB/6491', 'RIDDHI AJAY BHATIA ', 'Python Development', '1 Month', 'NA'),
('BS/FEB/6507', 'Prabhakar G', 'Data Analytics', '1 Month', 'NA'),
('BS/FEB/6544', 'Darla Joel Kumar', 'Java Development', '4 Month', 'NA'),
('BS/FEB/6547', 'Akhil Thakur', 'Data Science', '1 Month', 'NA'),
('BS/FEB/6551', 'Shashikant Ghanshyam Garade ', 'UX/UI Design', '4 Month', 'NA'),
('BS/FEB/6558', 'Prajin Ashok Patil', 'Java Development', '4 Month', 'NA'),
('BS/FEB/6575', 'Sandipkumar Kanubhai Malani', 'Java Development', '4 Month', 'NA'),
('BS/FEB/6669', 'Kandarapu Prakash', 'Python Development', '1 Month', 'NA'),
('BS/FEB/6679', 'Panchal Ganpat Maheshkumar', 'Python Development', '1 Month', 'NA'),
('BS/FEB/6709', 'Gaurav Ashok Aher', 'Data Analytics', '1 Month', 'NA'),
('BS/JAN/0240', 'Sahil Rajendra Kachare', 'Python Development', '1 Month', 'NA'),
('BS/JAN/0249', 'Bhimanapalli Srilekha', 'Python Development', '1 Month', 'NA'),
('BS/JAN/0268', 'Shabreentaj H', 'Data Science', '4 Month', 'NA'),
('BS/JAN/0280', 'Soham Nawale', 'Data Science', '1 Month', 'NA'),
('BS/JAN/0293', 'Faizan Farid', 'Web Development', '1 Month', 'NA'),
('BS/JAN/0326', 'Shaikh Arif Jawed', 'Web Development', '4 Month', 'NA'),
('BS/JAN/0336', 'sophiya kanjirakadan', 'Data Science', '1 Month', 'NA'),
('BS/JAN/0337', 'Mohd Faisal Hameed', 'Web Development', '1 Month', 'NA'),
('BS/JAN/0343', 'Kalashri Bhanudas Borhade', 'Data Analytics', '1 Month', 'NA'),
('BS/JAN/0357', 'SWATI LATTA', 'Data Analytics', '1 Month', 'NA'),
('BS/JAN/0367', 'Taufeeq Hussain ', 'Data Analytics', '1 Month', 'NA'),
('BS/JAN/0371', 'Pisal Harsh Sadashiv', 'Data Science', '1 Month', 'NA'),
('BS/JAN/0382', 'Rutuja Tatyasaheb More', 'Data Science', '1 Month', 'NA'),
('BS/JAN/0409', 'Aadhi Vinay', 'Python Development', '1 Month', 'NA'),
('BS/JAN/0435', 'SAYAN SINGHA', 'Python Development', '1 Month', 'NA'),
('BS/JAN/0442', 'Arontika Bagchi', 'Data Science', '1 Month', 'NA'),
('BS/JAN/0450', 'Abhijeet kumar', 'Python Development', '1 Month', 'NA'),
('BS/JAN/0465', 'Arup Mondal', 'Web Development', '1 Month', 'NA'),
('BS/JAN/0486', 'Aya Essid', 'Data Science', '1 Month', 'NA'),
('BS/JAN/0509', 'Ram Narayan', 'Python Development', '1 Month', 'NA'),
('BS/JAN/0510', 'Devi Ramesh Keerthana', 'Data Science', '1 Month', 'NA'),
('BS/JAN/0518', 'aya essid', 'Python Development', '1 Month', 'NA'),
('BS/JAN/0527', 'Shweta Sharadrao Kulkarni', 'Web Development', '1 Month', 'NA'),
('BS/JAN/191299', 'Raghav Raj Dubey', 'Sales Representative', '6 Month', 'NA'),
('BS/JAN/643321', 'ZUBAIR AHMAD WANI', 'Data Science', '1 Month', 'NA'),
('BS/JAN/6578234', 'Sajad Ahmad Khan', 'Web Development', '1 Month', 'NA'),
('BS/JAN/8103156', 'Sajad Ahmad Khan', 'Android Development (Kotlin)', '1 Month', 'NA'),
('BS/JAN/971327', 'Ekta Dwivedi', 'Geographic information system(GIS)', '1 Month', 'NA'),
('BS/JUL/0120', 'SAUMYA PANDEY', 'Java Development', '1 Month', 'NA'),
('BS/JUL/0129', 'Prashant Subhash kakade ', 'Web Development', '4 Month', 'NA'),
('BS/JUL/0166', 'Degala Mounika', 'Data Science', '1 Month', 'NA'),
('BS/JUL/0178', 'GUGULOTH VAIDEHI', 'Python Development', '1 Month', 'NA'),
('BS/JUL/0183', 'Mallela Saisree', 'Java Development', '1 Month', 'NA'),
('BS/JUL/0202', 'Pothula Naga Gangothri', 'Data Science', '1 Month', 'NA'),
('BS/JUL/0205', 'Akinwande Joshua Tolulope ', 'Web Development', '1 Month', 'NA'),
('BS/JUL/787982', 'Mayank Kale', 'Web Development', '4 Months', 'NA'),
('BS/JUL/97458', 'Suneel Kumar Patel', 'Softwa re Developer Department', '1-Jul-22 to 25-Aug-23.', 'NA'),
('BS/JUN/25502', 'Abhishek sikandarpure ', 'Web Development', '1 Month', 'NA'),
('BS/JUN/25544', 'Sakshi Abasaheb Disale', 'Data Analytics', '1 Month', 'NA'),
('BS/JUN/25546', 'chowdavarapu Priya Sahithi ', 'Python Development', '1 Month', 'NA'),
('BS/JUN/25547', 'PUSALA GANESH', 'Data Analytics', '1 Month', 'NA'),
('BS/JUN/25550', 'Anumala prasanna', 'Python Development', '1 Month', 'NA'),
('BS/MAR/10347', 'Sayali Sanjay ingole ', 'Data Analytics', '1 Month', 'NA'),
('BS/MAR/10371', 'Bugga Vinay', 'Java Development', '1 Month', 'NA'),
('BS/MAR/10390', 'Shahbaj khan', 'Python Development', '1 Month', 'NA'),
('BS/MAR/10391', 'Akhand Chaurasiya', 'Python Development', '1 Month', 'NA'),
('BS/MAR/10394', 'Sabbu Jagan', 'Java Development', '1 Month', 'NA'),
('BS/MAR/10397', 'Sai Shivani Vilasagaram', 'Data Analytics', '4 Month ', 'NA'),
('BS/MAR/10412', 'Avijit Chakraborty', 'UX/UI Design', '2 Month', 'NA'),
('BS/MAR/10451', 'Manasvi  Uttam Chintakindi', 'Data Analytics', '1 Month', 'NA'),
('BS/MAR/10463', 'Bugga Vinay', 'Python Development', '1 Month', 'NA'),
('BS/MAR/10474', 'Nithin Badi', 'Data Science', '1 Month', 'NA'),
('BS/MAR/10489', 'Sarika Bhalchandra Dhakad', 'Data Analytics', '1 Month', 'NA'),
('BS/MAR/10641', 'Laxmi Vishnu Sidruk', 'Data Analytics', '1 Month', 'NA'),
('BS/MAY/1871786', 'Harun Shah', 'Web Development - HTML CSS, JavaScript, ASP .NET, ReactJS,Django, MySQL', '01-May-23 to 30-Oct-23', 'NA'),
('BS/MAY/19561', 'Diksha Rajendra Lokhande', 'Data Analytics', '1 Month', 'NA'),
('BS/MAY/19589', 'Kummari Sumanth', 'Data Analytics', '1 Month', 'NA'),
('BS/MAY/19591', 'PedavitiRama Krishna Reddy', 'Python Development', '1 Month', 'NA'),
('BS/MAY/19604', 'Pallavi Kocherla', 'Web Development', '1 Month', 'NA'),
('BS/MAY/19606', 'Shraddha Rajendra Lokhande ', 'Java Development', '1 Month', 'NA'),
('BS/MAY/19608', 'VORAGANTI SRINAYANI', 'Web Development', '1 Month', 'NA'),
('BS/MAY/19609', 'MOHAMMED IFZAN S', 'Data Analytics', '1 Month', 'NA'),
('BS/MAY/19633', 'Kothapally Sujatha', 'Java Development', '1 Month', 'NA'),
('BS/MAY/2123', 'Darshana Santosh Phalke', 'Data Analytics', '1-May-2023 To 30-Aug-2023', 'NA'),
('BS/MAY/2256818', 'Abhishek Bagwan', 'Web Development - HTML CSS, JavaScript, ReactJS, SQL', '01-May-23 to 30-Oct-23', 'NA'),
('BS/NOV/2292', 'Dipan Kundu', 'Data Analytics', '1 Month', 'NA'),
('BS/NOV/2297', 'Sanket Suryavanshi', 'Python Development', '1 Month', 'NA'),
('BS/NOV/2375', 'Pranay Chintaman Pinjarkar', 'Data Analytics', '1 Month', 'NA'),
('BS/NOV/2378', 'PALLE SAI SUMANTH', 'Web Development', '1 Month', 'NA'),
('BS/NOV/2384', 'deepesh panwar', 'Web Development', '1 Month', 'NA'),
('BS/NOV/2386', 'Pritam Gope', 'Web Development', '1 Month', 'NA'),
('BS/NOV/2399', 'Daniel Nicholas Dibal', 'Data Analytics', '1 Month', 'NA'),
('BS/NOV/2409', 'MOHAMMED OBAID BABA', 'Python Development', '1 Month', 'NA'),
('BS/NOV/2417', 'Shailja Tiwari', 'Java Development', '1 Month', 'NA'),
('BS/NOV/2444', 'Manu EP', 'Data Analytics', '1 Month', 'NA'),
('BS/NOV/2451', 'Shivani Nayan Mohite.', 'Data Science', '1 Month', 'NA'),
('BS/NOV/2457', 'Rohit Sharma', 'Python Development', '4 Month', 'NA'),
('BS/NOV/2471', 'Choudhary Gouspasha Bashamiya', 'Web Development', '1 Month', 'NA'),
('BS/NOV/2474', 'Srishubhavirddhi S', 'Data Science', '4 Month', 'NA'),
('BS/NOV/2504', 'Prayaksha Bendadi', 'Data Science', '1 Month', 'NA'),
('BS/NOV/2521', 'Shalini Parihar', 'Web Development', '1 Month', 'NA'),
('BS/NOV/2538', 'Sonali Bhandula', 'Web Development', '1 Month', 'NA'),
('BS/NOV/2569', 'Kadire Aditya vardhan Reddy', 'Data Science', '1 Month', 'NA'),
('BS/NOV/2584', 'KORRA PRASHANTH NAYAK', 'Data Science', '1 Month', 'NA'),
('BS/NOV/2597', 'Gandamalla Nikhil Kumar', 'Web Development', '1 Month', 'NA'),
('BS/NOV/2617', 'DODDE RAJU', 'Data Science', '1 Month', 'NA'),
('BS/NOV/2622', 'Aaradhana Mewade', 'Java Development', '1 Month', 'NA'),
('BS/NOV/2676', 'Abhishek Bisht', 'Data Analytics', '1 Month', 'NA'),
('BS/NOV/2695', 'Akshay Mohan S', 'Data Science', '4 Month', 'NA'),
('BS/NOV/2717', 'Maringanti Venkata Anirudh Kumar', 'Java Development', '1 Month', 'NA'),
('BS/NOV/2748', 'kader issa goulbi', 'UX/UI Design', '1 Month', 'NA'),
('BS/NOV/2768', 'Olatubosun haneef olatayo', 'UX/UI Design', '1 Month', 'NA'),
('BS/NOV/2784', 'ADEBARI UTHMAN TITILOPE', 'Web Development', '1 Month', 'NA'),
('BS/NOV/2786', 'Ogunmola Deborah Erioluwa', 'Web Development', '1 Month', 'NA'),
('BS/NOV/2810', 'Payal Barnwal', 'Data Analytics', '1 Month', 'NA'),
('BS/NOV/2823', 'Vegge Sanjana', 'Web Development', '1 Month', 'NA'),
('BS/NOV/2842', 'Pagidipalli Mary Jasmine', 'Python Development', '1 Month', 'NA'),
('BS/NOV/2845', 'Rohini Chavhan', 'Data Analytics', '1 Month', 'NA'),
('BS/Nov/2849', 'Phillip Bere', 'UX/UI Design', '1 Month', 'NA'),
('BS/NOV/2850', 'Mounika Deekonda', 'Python Development', '1 Month', 'NA'),
('BS/NOV/2856', 'Ramu Sairi', 'Data Analytics', '1 Month', 'NA'),
('BS/NOV/2869', 'monika jagadam', 'Python Development', '1 Month', 'NA'),
('BS/NOV/2878', 'MANSI SINHA', 'Data Analytics', '4 Month', 'NA'),
('BS/NOV/2897', 'K.Siri Vandana', 'Python Development', '1 Month', 'NA'),
('BS/NOV/2898', 'G Bhuvana Reddy', 'Data Science', '1 Month', 'NA'),
('BS/NOV/2909', 'B.Gnanasree', 'Java Development', '1 Month', 'NA'),
('BS/NOV/2910', 'Kasam Laxmi Srina', 'Python Development', '1 Month', 'NA'),
('BS/NOV/2911', 'Shabadhu Chikitha', 'Python Development', '1 Month', 'NA'),
('BS/NOV/2912', 'Adi Divya', 'Python Development', '1 Month', 'NA'),
('BS/NOV/2917', 'Akhilesh Aradhi', 'Python Development', '1 Month', 'NA'),
('BS/NOV/2925', 'Parne Ammuleshwari', 'Java Development', '1 Month', 'NA'),
('BS/NOV/2927', 'Naveena R', 'Data Analytics', '1 Month', 'NA'),
('BS/NOV/2928', 'Pola Vignesh Reddy', 'Python Development', '1 Month', 'NA'),
('BS/NOV/2931', 'Pasham Karthik Reddy', 'Java Development', '1 Month', 'NA'),
('BS/NOV/2932', 'DAMERA SANTHOSH KUMAR', 'Web Development', '1 Month', 'NA'),
('BS/NOV/2934', 'Kalakonda dinesh', 'Python Development', '1 Month', 'NA'),
('BS/NOV/2963', 'B. Shaivi Reddy', 'Web Development', '1 Month', 'NA'),
('BS/NOV/2974', 'Rushikesh Patil', 'Web Development', '1 Month', 'NA'),
('BS/NOV/2975', 'Shubham Mahendra Mete', 'Web Development', '1 Month', 'NA'),
('BS/NOV/2979', 'G Veena Madhuri', 'Data Science', '1 Month', 'NA'),
('BS/NOV/2988', 'SURAJ CHOUGALA', 'Web Development', '1 Month', 'NA'),
('BS/NOV/3006', 'Saisrikar Devasani', 'Python Development', '4 Month', 'NA'),
('BS/NOV/3013', 'Haripriya Koratala', 'Web Development', '1 Month', 'NA'),
('BS/NOV/3024', 'ANIL AJINATH DUDHE', 'Data Science', '1 Month', 'NA'),
('BS/NOV/3029', 'Baddenapalli Akshaya', 'Web Development', '1 Month', 'NA'),
('BS/NOV/3031', 'Anabothula Pavani', 'Data Science', '1 Month', 'NA'),
('BS/NOV/3032', 'Yalka Rithika ', 'Data Science', '1 Month', 'NA'),
('BS/NOV/3051', 'Anupama Amarender P', 'Python Development', '1 Month', 'NA'),
('BS/NOV/3053', 'cynthia Agu', 'Web Development', '1 Month', 'NA'),
('BS/NOV/3073', 'Satya Alekhya Devarakonda', 'Data Analytics', '1 Month', 'NA'),
('BS/NOV/3074', 'Durgesh Samadhan Shinde', 'Data Analytics', '1 Month', 'NA'),
('BS/NOV/31103', 'Keesari Sreeja Reddy', 'Web Development', '1 Month', 'NA'),
('BS/OCT /1765', 'Bhagwati keja', 'Java Development', '1 Month', 'NA'),
('BS/OCT/10549', 'Lalit Sonawane', 'Data Science', '4 Month', 'NA'),
('BS/OCT/10616', 'Saksham Saxena', 'Data Science', '1 Month', 'NA'),
('BS/OCT/10621', 'PONNAM RAHUL', 'Data Science', '1 Month', 'NA'),
('BS/OCT/10643', 'Utkarsh Momula', 'Java Development', '1 Month', 'NA'),
('BS/OCT/10645', 'Venkatesh Babu Vanguri', 'Data Science', '1 Month', 'NA'),
('BS/OCT/10657', 'Sashwinakash C K', 'Java Development', '1 Month', 'NA'),
('BS/OCT/10663', 'Chetla Praneeth Kumar', 'Python Development', '1 Month', 'NA'),
('BS/OCT/10667', 'Pudari Anirudh Goud', 'Data Science', '1 Month', 'NA'),
('BS/OCT/10669', 'Erothu Sai Kumar', 'Web Development', '1 Month', 'NA'),
('BS/OCT/10670', 'Yennam Pranay Reddy', 'Data Science', '1 Month', 'NA'),
('BS/OCT/10671', 'PALAMAKULA SAITEJA', 'Data Science', '1 Month', 'NA'),
('BS/OCT/10672', 'Ambati sumeth kumar', 'Python Development', '1 Month', 'NA'),
('BS/OCT/10673', 'velagandula sohan', 'Data Science', '1 Month', 'NA'),
('BS/OCT/10674', 'Erumalla Saiteja', 'Python Development', '4 Month', 'NA'),
('BS/OCT/10675', 'KARTHIK THODUPUNURI', 'Python Development', '1 Month', 'NA'),
('BS/OCT/10676', 'Abhishek Bitla', 'Python Development', '1 Month', 'NA'),
('BS/OCT/10677', 'Avishya Janagama', 'Python Development', '1 Month', 'NA'),
('BS/OCT/10679', 'Adama prashanth', 'Python Development', '1 Month', 'NA'),
('BS/OCT/10682', 'D.Chanakya', 'Data Science', '1 Month', 'NA'),
('BS/OCT/10702', 'M Anirudh Dhadhi Sagar', 'Data Science', '1 Month', 'NA'),
('BS/OCT/10703', 'Gangi jathin', 'Data Science', '1 Month', 'NA'),
('BS/OCT/10708', 'Vuthunoori Sandeep', 'Java Development', '1 Month', 'NA'),
('BS/OCT/10730', 'LONKA MAHAJAN', 'Web Development', '1 Month', 'NA'),
('BS/OCt/10731', 'YESWANTH SAI MAHESH JAGU', 'Web Development', '1 Month', 'NA'),
('BS/OCT/10734', 'Dasari Manisha', 'Python Development', '1 Month', 'NA'),
('BS/OCT/10735', 'Sweety Allampalli', 'Python Development', '1 Month', 'NA'),
('BS/OCT/10736', 'Charan', 'Python Development', '1 Month', 'NA'),
('BS/OCT/10737', 'Pokala Akshay Kumar', 'Python Development', '1 Month', 'NA'),
('BS/OCT/10738', 'Guvala Madhulika', 'Python Development', '1 Month', 'NA'),
('BS/OCT/10744', 'Aila Mourya Bharadwaj', 'Python Development', '1 Month', 'NA'),
('BS/OCT/10762', 'shreenay reddy', 'Data Science', '1 Month', 'NA'),
('BS/OCT/10763', 'shreenay reddy', 'Python Development', '1 Month', 'NA'),
('BS/OCT/10767', 'Varshith reddy', 'Web Development', '1 Month', 'NA'),
('BS/OCT/10768', 'Mandra Lokesh', 'Data Analytics', '1 Month', 'NA'),
('BS/OCT/10770', 'Repala Akanksha', 'Python Development', '1 Month', 'NA'),
('BS/OCT/10772', 'Gaddoju Sriram', 'Python Development', '1 Month', 'NA'),
('BS/OCT/10773', 'Shashi Vardhan', 'Data Science', '1 Month', 'NA'),
('BS/OCT/10774', 'R Chandana Reddy', 'Data Science', '1 Month', 'NA'),
('BS/OCT/10775', 'Saurav SAMEER Naik', 'Data Science', '1 Month', 'NA'),
('BS/OCT/10780', 'VARLA DEEKSHITHA', 'Data Science', '1 Month', 'NA'),
('BS/OCT/10784', 'chennamaneni jashwanth', 'Data Science', '1 Month', 'NA'),
('BS/OCT/10785', 'sreeram sriharsha', 'Java Development', '1 Month', 'NA'),
('BS/OCT/10786', 'SAI VARDHAN PULLURI', 'Web Development', '1 Month', 'NA'),
('BS/OCT/10788', 'Guru Shiva Kumar', 'Python Development', '1 Month', 'NA'),
('BS/OCT/10793', 'p.sai retish reddy', 'Data Science', '1 Month', 'NA'),
('BS/OCT/10798', 'Bukka Ramcharan', 'Web Development', '1 Month', 'NA'),
('BS/OCT/10799', 'SAI SIDDARTH RAVULA', 'Python Development', '1 Month', 'NA'),
('BS/OCT/10804', 'chakali divya', 'Data Science', '1 Month', 'NA'),
('BS/OCT/1123', 'Priyanka Narwariya', 'Web Development', '4 Month', 'NA'),
('BS/OCT/1457', 'Rahul Sharad Wagh', 'Data Analytics', '1 Month', 'NA'),
('BS/OCT/1499', 'Yash Tolani', 'Data Analytics', '1 Month', 'NA'),
('BS/OCT/1506', 'Ayushman Saket', 'Web Development', '1 Month', 'NA'),
('BS/OCT/1520', 'Jay Ramesh Dhakate', 'Data Analytics', '4 Month', 'NA'),
('BS/OCT/1575', 'Nelluri Lokesh', 'Data Analytics', '1 Month', 'NA'),
('BS/OCT/1588', 'Deepali', 'Python Development', '1 Month', 'NA'),
('BS/OCT/1589', 'JITENDRA HARBOLA', 'Web Development', '1 Month', 'NA'),
('BS/OCT/1607', 'Anshu Lalwani', 'Web Development', '1 Month', 'NA'),
('BS/OCT/1609', 'Gayatri Vivek Ballal', 'Data Science', '1 Month', 'NA'),
('BS/OCT/1623', 'Rampelli Sai Eshwar', 'Web Development', '1 Month', 'NA'),
('BS/OCT/1626', 'Mohammed Asim Alam', 'Data Science', '1 Month', 'NA'),
('BS/OCT/1632', 'B Sai Shashank', 'Data Analytics', '1 Month', 'NA'),
('BS/OCT/1640', 'Kalam Sujith Reddy', 'Data Science', '1 Month', 'NA'),
('BS/OCT/1653', 'Saloni Meshram', 'Data Analytics', '1-Jul-2023 To 30-Oct-2023', 'NA'),
('BS/OCT/1693', 'Arihant Jain', 'Data Analytics', '4 Month', 'NA'),
('BS/OCT/1704', 'Leela Narasimha Rao Dasari', 'Data Analytics', '4 Month', 'NA'),
('BS/OCT/1721', 'Hitesh Bhakuni', 'Data Analytics', '1 Month', 'NA'),
('BS/OCT/1733', 'Shivam', 'Data Analytics', '1 Month', 'NA'),
('BS/OCT/1748', 'Priyanshi shrivastava', 'Java Development', '1 Month', 'NA'),
('BS/OCT/1749', 'Faizan Alam', 'Web Development', '1 Month', 'NA'),
('BS/OCT/1750', 'Pranshi Rastogi', 'Data Analytics', '1 Month', 'NA'),
('BS/OCT/1771', 'Akshat Mourya', 'Web Development', '1 Month', 'NA'),
('BS/OCT/1830', 'KOTLA KEERTHI', 'Web Development', '1 Month', 'NA'),
('BS/OCT/1858', 'Dr Madhuri Sonawale Naik', 'Data Science', '4 Month', 'NA'),
('BS/OCT/1860', 'Pranay Chintaman Pinjarkar', 'Python Development', '1 Month', 'NA'),
('BS/OCT/1861', 'Pranay Chintaman Pinjarkar', 'Web Development', '1 Month', 'NA'),
('BS/OCT/1867', 'Kiran Kumar Panda', 'Data Analytics', '1 Month', 'NA'),
('BS/OCT/1869', 'kodidala prasanna', 'Java Development', '1 Month', 'NA'),
('BS/OCT/1871', 'Poonam Gopalrao Bhosle', 'Data Science', '4 Month', 'NA'),
('BS/OCT/1882', 'Yadav Alok', 'Web Development', '1 Month', 'NA'),
('BS/OCT/1910', 'Supriya Raturi', 'Python Development', '1 Month', 'NA'),
('BS/OCT/1924', 'Shabnam Kanganolli', 'Data Analytics', '1 Month', 'NA'),
('BS/OCT/1929', 'Kolawole Demilade Peterr', 'Data Analytics', '1 Month', 'NA'),
('BS/OCT/1941', 'Prajwal M', 'Data Analytics', '1 Month', 'NA'),
('BS/OCT/1948', 'Precious Eboma Onyinyechukwu', 'Data Analytics', '1 Month', 'NA'),
('BS/OCT/1950', 'Adefisayo Adelakun', 'Web Development', '1 Month', 'NA'),
('BS/OCT/1959', 'Afolabi Wilson Olamide', 'Data Science', '1 Month', 'NA'),
('BS/OCT/1970', 'Himanshu likhitkar ', 'Python Development', '1 Month', 'NA'),
('BS/OCT/1982', 'HARIHARAN R', 'Java Development', '1 Month', 'NA'),
('BS/OCT/1985', 'Pragya awasthi', 'Data Analytics', '4 Month', 'NA'),
('BS/OCT/1990', 'Asmeet Kaur', 'Python Development', '1 Month', 'NA'),
('BS/OCT/1997', 'VANTEDDU YAMUNA', 'Web Development', '1 Month', 'NA'),
('BS/OCT/2008', 'SURAJ KUMAR', 'Web Development', '1 Month', 'NA'),
('BS/OCT/2042', 'Madhu Kalamata', 'Data Science', '1 Month', 'NA'),
('BS/OCT/2081', 'prashant baraskar', 'Python Development', '1 Month', 'NA'),
('BS/OCT/2088', 'Sangeeta M Kallappagoudar', 'Data Analytics', '4 Month', 'NA'),
('BS/OCT/2156', 'Suraj Dass', 'Data Analytics', '1 Month', 'NA'),
('BS/OCT/2166', 'Abhijeet Upadhyaya', 'Java Development', '1 Month', 'NA'),
('BS/OCT/2176', 'Dharmendra Garhwal', 'Web Development', '1 Month', 'NA'),
('BS/OCT/2184', 'Dipika Sawkare', 'Web Development', '1 Month', 'NA'),
('BS/OCT/2202', 'ABESSOLO ATEBA ABHAS', 'Data Science', '1 Month', 'NA'),
('BS/OCT/2212', 'Divya Kumari', 'Data Science', '1 Month', 'NA'),
('BS/OCT/2218', 'KORRA KISHAN NAIK', 'Data Science', '1 Month', 'NA'),
('BS/OCT/2220', 'SUNDAR SINGH BHAINSORA', 'Data Analytics', '1 Month', 'NA'),
('BS/OCT/2257', 'Priyanka Hemant Sonar', 'Data Analytics', '1 Month', 'NA'),
('BS/OCT/2258', 'Akhilesh Raut', 'Data Analytics', '1 Month', 'NA'),
('BS/OCT/2262', 'Suyash srivastav', 'Data Analytics', '4 Month', 'NA'),
('BS/OCT/2263', 'K NARSIMHULU', 'Web Development', '1 Month', 'NA'),
('BS/OCT/2265', 'Jaaini Hrudaya', 'Python Development', '1 Month', 'NA'),
('BS/OCT/2272', 'Shweta Dhande', 'Web Development', '1 Month', 'NA'),
('BS/SEP/0029', 'SOBHNATH PRAJAPATI', 'Web Development', '4 Month', 'NA'),
('BS/SEP/10003', 'Gagandeep Kaur', 'Python Development', '1 Month', 'NA'),
('BS/SEP/10015', 'Jitendra Ahirwar', 'Data Science', '1 Month', 'NA'),
('BS/SEP/10043', 'Arya B', 'Data Analytics', '1 Month', 'NA'),
('BS/SEP/10045', 'Veerlapati Nagadeepthi', 'Python Development', '1 Month', 'NA'),
('BS/SEP/10067', 'Jammu Hemanth Kumar', 'Web Development', '1 Month', 'NA'),
('BS/SEP/10087', 'Lakavath Premchand', 'Data Science', '1 Month', 'NA'),
('BS/SEP/10088', 'Mohammed Abdul Rahman Maaz', 'Data Science', '1 Month', 'NA'),
('BS/SEP/10100', 'Jessica Singh Syal', 'Data Science', '4 Month', 'NA'),
('BS/SEP/10112', 'Sriram S', 'Data Science', '4 Month', 'NA'),
('BS/SEP/10120', 'PRISHA MATHUR', 'Data Science', '1 Month', 'NA'),
('BS/SEP/10142', 'Tanisha Saxena', 'Java Development', '1 Month', 'NA'),
('BS/SEP/10144', 'Shreyas Ananda Bailkar', 'Data Science', '1 Month', 'NA'),
('BS/SEP/10148', 'Sufiyan Ahmad Khan', 'Python Development', '1 Month', 'NA'),
('BS/SEP/10151', 'Nasreen Fatima', 'Data Analytics', '1 Month', 'NA'),
('BS/SEP/10153', 'Vaishnavi Umesh Choudhari', 'Data Science', '1 Month', 'NA'),
('BS/SEP/10154', 'Sayan Sarkar', 'Data Science', '1 Month', 'NA'),
('BS/SEP/10166', 'Selvaprasad.S', 'Web Development', '1 Month', 'NA'),
('BS/SEP/10172', 'Syed Mohammad Azim', 'Data Science', '1 Month', 'NA'),
('BS/SEP/10175', 'Chetan Pawar', 'Data Science', '1 Month', 'NA'),
('BS/SEP/10176', 'Chetan Pawar', 'Data Analytics', '1 Month', 'NA'),
('BS/SEP/10196', 'Shujaath Ulla Khan', 'Web Development', '4 Month', 'NA'),
('BS/SEP/10208', 'Aniket Gajanan Dongare', 'Data Science', '1 Month', 'NA'),
('BS/SEP/10217', 'Shambhavi Srivastava', 'Data Science', '1 Month', 'NA'),
('BS/SEP/1024', 'Raj Verma', 'Python Development', '1 Month', 'NA'),
('BS/SEP/10262', 'Sanya', 'Data Analytics', '1 Month', 'NA'),
('BS/SEP/10286', 'Ayushi Dwivedi', 'Data Analytics', '1 Month', 'NA'),
('BS/SEP/10298', 'Sutapa Mandal', 'Data Analytics', '1 Month', 'NA'),
('BS/SEP/10310', 'Rakesh Singh', 'Data Science', '1 Month', 'NA'),
('BS/SEP/10326', 'Ayushman Saket', 'Java Development', '4 Month', 'NA'),
('BS/SEP/10333', 'Goutam Singh Mewada', 'Web Development', '1 Month', 'NA'),
('BS/SEP/10335', 'B.Vishnu narayanan', 'Web Development', '1 Month', 'NA'),
('BS/SEP/10336', 'Ritesh Kumar', 'Data Science', '1 Month', 'NA'),
('BS/SEP/10338', 'Ashu Kumar', 'Data Science', '1 Month', 'NA'),
('BS/SEP/10343', 'Kyama Likitha', 'Data Science', '1 Month', 'NA'),
('BS/SEP/10344', 'Jailakshmi N C', 'Data Science', '1 Month', 'NA'),
('BS/SEP/10356', 'Aditi Mishra', 'Java Development', '1 Month', 'NA'),
('BS/SEP/10363', 'Kothamasi Kewin Kumar', 'Data Science', '1 Month', 'NA'),
('BS/SEP/10396', 'Nehal Khan', 'Web Development', '4 Month', 'NA'),
('BS/SEP/10422', 'Akanksha Sen', 'Web Development', '1 Month', 'NA'),
('BS/SEP/10427', 'Dilecta Girkar', 'Data Analytics', '4 Month', 'NA'),
('BS/SEP/10428', 'Alvister Michael Almeida', 'Data Analytics', '4 Month', 'NA'),
('BS/SEP/10435', 'Kamisetty Venkata Rajesh', 'Data Science', '1 Month', 'NA'),
('BS/SEP/10436', 'Shanthveer Sankangoudar', 'Data Analytics', '1 Month', 'NA'),
('BS/SEP/10440', 'Akshatra uday', 'Python Development', '4 Month', 'NA'),
('BS/SEP/10446', 'Arindam Parnami', 'Data Science', '1 Month', 'NA'),
('BS/SEP/10456', 'Kiranjit Kaur', 'Web Development', '1 Month', 'NA'),
('BS/SEP/10471', 'Asvin Selvarajan', 'Data Science', '1 Month', 'NA'),
('BS/SEP/10485', 'Vishal Chavan', 'Data Science', '1 Month', 'NA'),
('BS/SEP/10488', 'NAVAJOTHI M', 'Data Analytics', '4 Month', 'NA'),
('BS/SEP/10492', 'Jaspal Singh', 'Java Development', '1 Month', 'NA'),
('BS/SEP/10520', 'Shristi Purusarthi', 'Java Development', '1 Month', 'NA'),
('BS/SEP/10521', 'Toleti Mouli Veereswara Sai Aravind', 'Data Science', '1 Month', 'NA'),
('BS/SEP/10580', 'Arpita Rajesh sirsat', 'Java Development', '4 Month', 'NA'),
('BS/SEP/10581', 'Prem Pamena', 'Data Analytics', '1 Month', 'NA'),
('BS/SEP/190302', 'BANTU VENKATAPATHI RAJU', 'Data Analytics', '4 Months', 'NA'),
('BS/SEP/190357', 'Kanishka R ', 'Data Analytics', '1 Month', 'NA'),
('BS/SEP/190358', 'Mohammed yasith . N', 'Data Science', '1 Month', 'uploads/Mohammed Yasith . N.pdf'),
('BS/SEP/190359', 'Bharath M', 'Data Analytics', '1 Month', 'NA'),
('BS/SEP/65873544', 'Raghav raj Dubey', 'Account Management (Audit)', '6 Months (01-Sep-23 to 29-Feb-24)', 'NA'),
('BS/SEP/8878397', 'Praphul Kumar Nimje', 'Python Development ( Django)', '1-Sep-2023 to 30-Nov-2023', 'NA'),
('BS/SEP/9709', 'Sachin Meena', 'Web Development', '1 Month', 'NA'),
('BS/SEP/9710', 'Dinesh Jatav', 'Python Development', '1 Month', 'NA'),
('BS/SEP/9711', 'Udal Singh Choudhary', 'Web Development', '1 Month', 'NA'),
('BS/SEP/9712', 'Vishal Rathore', 'Data Analytics', '1 Month', 'NA'),
('BS/SEP/9715', 'Ashish Jayswal', 'Data Analytics', '1 Month', 'NA'),
('BS/SEP/9718', 'Priya Bakore', 'Data Analytics', '1 Month', 'NA'),
('BS/SEP/9722', 'Sonam Sahle', 'Python Development', '1 Month', 'NA'),
('BS/SEP/9735', 'Dipika Jawarkar', 'Data Analytics', '1 Month', 'NA'),
('BS/SEP/9748', 'Kartik Gupta', 'Java Development', '1 Month', 'NA'),
('BS/SEP/9749', 'Geoff George', 'Web Development', '1 Month', 'NA'),
('BS/SEP/9757', 'Ambika Kumari', 'Java Development', '1 Month', 'NA'),
('BS/SEP/9760', 'Chhaya Kumari', 'Web Development', '1 Month', 'NA'),
('BS/SEP/9790', 'Mayank Garg', 'Python Development', '1 Month', 'NA'),
('BS/SEP/9796', 'Vaibhav Purushottam Waghode', 'Web Development', '1 Month', 'NA'),
('BS/SEP/9798', 'Nitesh Sahu', 'Python Development', '1 Month', 'NA'),
('BS/SEP/9800', 'Shaik Ayesha', 'Web Development', '1 Month', 'NA'),
('BS/SEP/9851', 'Ashu Srivastava', 'Java Development', '1 Month', 'NA'),
('BS/SEP/9854', 'Ponnada Kiran', 'Web Development', '4 Month', 'NA'),
('BS/SEP/9878', 'Vikram Verma', 'Data Science', '1 Month', 'NA'),
('BS/SEP/9882', 'Suraj Prasad Sharma', 'Python Development', '1 Month', 'NA'),
('BS/SEP/9892', 'Sameer Mohammad', 'Java Development', '4 Month', 'NA'),
('BS/SEP/9895', 'Geeta Amrute', 'Python Development', '1 Month', 'NA'),
('BS/SEP/9914', 'Anjana kashyap', 'Web Development', '1 Month', 'NA'),
('BS/SEP/9942', 'Sajal Kumar Sahu', 'Web Development', '1 Month', 'NA'),
('BS/SEP/9947', 'Ram Narayan Tiwari', 'Data Analytics', '4 Month', 'NA'),
('BS/SEP/9948', 'Abhijit Singh', 'Web Development', '1 Month', 'NA'),
('BS/SEP/9990', 'Ashish Kumar vishwakarma', 'Data Science', '1 Month', 'NA'),
('BS/TYP/7584952', 'Prerna Nareda', 'Typing Master', '6 Month', 'NA'),
('BU/AUG/2008', 'Joseph Esther ', 'Data Analytics', '1 Month', 'NA');

-- --------------------------------------------------------

--
-- Table structure for table `internship_applications`
--

CREATE TABLE `internship_applications` (
  `CID` varchar(20) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `whatsapp` varchar(15) NOT NULL,
  `internshipDomain` varchar(50) NOT NULL,
  `collegeName` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `passingYear` varchar(4) NOT NULL,
  `submission_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `internship_applications`
--

INSERT INTO `internship_applications` (`CID`, `fullName`, `email`, `gender`, `whatsapp`, `internshipDomain`, `collegeName`, `qualification`, `passingYear`, `submission_date`) VALUES
('Reg/BS/14390', 'BHANUPRATAP BISWAS', 'bhanubiswas98@gmail.com', 'male', '9977465250', 'React.JS', 'scac', 'bsc', '2022', '2024-09-25 16:16:58'),
('REG/BS/14664', 'Sanjana', 'bhghghg777@gmail.com', 'male', '9977465dvdv', 'Python Development', 'scac', 'bsc', '2024', '2024-09-29 18:27:24'),
('REG/BS/17558', 'akash', 'bhanuasffbiswas98@gmail.com', 'male', '9977465250', 'Python Development', 'scac', 'bsc', '2024', '2024-09-29 14:19:23'),
('REG/BS/19550', 'Sanjana', 'bhghghg777@gmail.com', 'female', '9977465250', 'React.JS', 'scac', 'bsc', '2024', '2024-09-28 19:19:56'),
('REG/BS/26499', 'Sanjana', 'bhaxfgfgas9777@gmail.com', 'female', '9977465250', 'Python Development', 'scac', 'bsc', '2022', '2024-09-28 19:05:01'),
('REG/BS/31050', 'BHANUPRATAP BISWAS', 'bhanubiswas9777@gmail.com', 'female', '9977465250', 'Data Analytics', 'scac', 'bsc', '2022', '2024-09-26 19:37:30'),
('REG/BS/32361', 'Sanjana', 'bhghghg777@gmail.com', 'female', '9977465250', 'UX/UI Design', 'scac', 'bsc', '2024', '2024-09-29 14:15:37'),
('REG/BS/38662', 'Sanjana', 'bhghghg777@gmail.com', 'female', '9977465250', 'UX/UI Design', 'scac', 'bsc', '2024', '2024-09-29 14:18:36'),
('REG/BS/39713', 'Sanjana', 'bhghghg777@gmail.com', 'female', '9977465dvdv', 'Python Development', 'scac', 'bsc', '2024', '2024-09-29 14:21:02'),
('REG/BS/41830', 'BHANUPRATAP BISWAS', 'bhanubiswas9777@gmail.com', 'male', '9977465250', 'Python Development', 'scac', 'bsc', '2022', '2024-09-25 18:29:32'),
('REG/BS/44962', 'BHANUPRATAP BISWAS', 'bhanubiswas9777@gmail.com', 'male', '9977465250', 'Python Development', 'scac', 'bsc', '2022', '2024-09-25 18:27:18'),
('REG/BS/50292', 'Sanjana', 'bhghghg777@gmail.com', 'male', '9977465dvdv', 'Python Development', 'scac', 'bsc', '2024', '2024-09-30 19:31:41'),
('REG/BS/55350', 'Sanjana', 'bhghghg777@gmail.com', 'male', '9977465dvdv', 'React.JS', 'scac', 'bsc', '2024', '2024-09-29 14:39:52'),
('REG/BS/59503', 'BHANUPRATAP BISWAS', 'bhanubiswas9777@gmail.com', 'male', '9977465250', 'Python Development', 'scac', 'bsc', '2022', '2024-09-25 18:29:54'),
('REG/BS/64042', '', '', '', '', '', '', '', '', '2024-09-29 18:27:02'),
('REG/BS/64193', 'Sanjana', 'bhghghg777@gmail.com', 'male', '9977465250', 'React.JS', 'scac', 'bsc', '2024', '2024-09-29 14:18:54'),
('Reg/BS/64397', 'BHANUPRATAP BISWAS', 'bhanubiswas98@gmail.com', 'male', '9977465250', 'React.JS', 'scac', 'bsc', '2022', '2024-09-25 16:16:31'),
('Reg/BS/69278', 'BHANUPRATAP BISWAS', 'bhanubiswas98@gmail.com', 'female', '9977465250', 'Data Science', 'scac', 'bsc', '2022', '2024-09-25 16:25:55'),
('REG/BS/71616', 'Sanjana', 'bhaxfgfgas9777@gmail.com', 'female', '9977465250', 'UX/UI Design', 'scac', 'bsc', '2022', '2024-09-28 19:04:15'),
('Reg/BS/71842', 'BHANUPRATAP BISWAS', 'bhanubiswas98@gmail.com', 'male', '9977465250', 'React.JS', 'scac', 'bsc', '2022', '2024-09-25 16:16:48'),
('Reg/BS/74647', 'BHANUPRATAP BISWAS', 'bhanubiswas98@gmail.com', 'male', '9977465250', 'React.JS', 'scac', 'bsc', '2022', '2024-09-25 16:08:53'),
('Reg/BS/88238', 'BHANUPRATAP BISWAS', 'bhanubiswas9777@gmail.com', 'female', '9977465250', 'UX/UI Design', 'scac', 'bsc', '2022', '2024-09-25 17:03:37'),
('Reg/BS/93677', 'BHANUPRATAP BISWAS', 'bhanubiswas98@gmail.com', 'male', '9977465250', 'React.JS', 'scac', 'bsc', '2022', '2024-09-25 16:08:10'),
('REG/BS/93690', 'BHANUPRATAP BISWAS', 'bhanubiswas9777@gmail.com', 'female', '9977465250', 'Java Development', 'scac', 'bsc', '2022', '2024-09-25 17:29:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'Bhanu', '$2y$10$FfkWPOV21j3qYmIV2P6p1eXEOepbjws2m41zpqcO60Zpk0pMYsIlu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `internship_applications`
--
ALTER TABLE `internship_applications`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
