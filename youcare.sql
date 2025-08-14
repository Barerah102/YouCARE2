-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2025 at 02:03 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `youcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `appointment_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `appointment_datetime` datetime DEFAULT NULL,
  `status` enum('booked','completed','cancelled') DEFAULT 'booked',
  `booked_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appointment_id`, `patient_id`, `doctor_id`, `appointment_datetime`, `status`, `booked_on`) VALUES
(5, 5, 8, '2025-08-10 11:30:00', 'completed', '2025-08-06 20:08:57'),
(6, 6, 11, '2025-08-10 09:00:00', 'completed', '2025-08-06 21:03:39'),
(7, 7, 4, '2025-08-10 11:00:00', 'completed', '2025-08-06 21:04:23'),
(8, 8, 5, '2025-08-10 09:30:00', 'completed', '2025-08-06 21:04:56'),
(10, 11, 7, '2025-08-10 09:00:00', 'cancelled', '2025-08-08 14:36:50'),
(12, 14, 10, '2025-08-17 08:00:00', '', '2025-08-12 13:27:29');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `city_name`) VALUES
(3, 'Los Angeles'),
(4, 'Miami'),
(2, 'New York'),
(5, 'Seattle'),
(1, 'Washington');

-- --------------------------------------------------------

--
-- Table structure for table `doctoravailability`
--

CREATE TABLE `doctoravailability` (
  `availability_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `available_days` varchar(50) DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctoravailability`
--

INSERT INTO `doctoravailability` (`availability_id`, `doctor_id`, `start_date`, `end_date`, `available_days`, `start_time`, `end_time`) VALUES
(1, 1, '2025-08-10', '2025-09-10', 'Monday, Wednesday', '09:00:00', '12:00:00'),
(2, 2, '2025-08-11', '2025-09-11', 'Tuesday, Thursday', '10:00:00', '13:00:00'),
(3, 3, '2025-08-12', '2025-09-12', 'Monday, Friday', '08:30:00', '11:30:00'),
(4, 4, '2025-08-13', '2025-09-13', 'Wednesday, Saturday', '11:00:00', '14:00:00'),
(5, 5, '2025-08-14', '2025-09-14', 'Tuesday, Sunday', '09:30:00', '12:30:00'),
(6, 6, '2025-08-15', '2025-09-15', 'Monday, Wednesday', '10:00:00', '13:00:00'),
(7, 7, '2025-08-16', '2025-09-16', 'Tuesday, Friday', '09:00:00', '12:00:00'),
(8, 8, '2025-08-17', '2025-09-17', 'Wednesday, Saturday', '11:30:00', '14:30:00'),
(9, 9, '2025-08-18', '2025-09-18', 'Thursday, Sunday', '10:30:00', '13:30:00'),
(10, 10, '2025-08-19', '2025-09-19', 'Monday, Thursday', '08:00:00', '11:00:00'),
(11, 11, '2025-08-20', '2025-09-20', 'Tuesday, Friday', '09:00:00', '12:00:00'),
(12, 12, '2025-08-21', '2025-09-21', 'Wednesday, Saturday', '10:30:00', '13:30:00'),
(13, 13, '2025-08-22', '2025-09-22', 'Monday, Thursday', '08:30:00', '11:30:00'),
(14, 14, '2025-08-23', '2025-09-23', 'Tuesday, Friday', '09:00:00', '12:00:00'),
(15, 15, '2025-08-24', '2025-09-24', 'Wednesday, Sunday', '11:00:00', '14:00:00'),
(16, 16, '2025-08-25', '2025-09-25', 'Monday, Friday', '09:30:00', '12:30:00'),
(17, 17, '2025-08-26', '2025-09-26', 'Tuesday, Thursday', '10:00:00', '13:00:00'),
(18, 18, '2025-08-27', '2025-09-27', 'Wednesday, Saturday', '08:00:00', '11:00:00'),
(19, 19, '2025-08-28', '2025-09-28', 'Thursday, Sunday', '09:00:00', '12:00:00'),
(20, 20, '2025-08-29', '2025-09-29', 'Monday, Thursday', '10:00:00', '13:00:00'),
(21, 21, '2025-08-30', '2025-09-30', 'Tuesday, Friday', '08:30:00', '11:30:00'),
(22, 1, '2025-08-10', '2025-09-10', 'Monday, Wednesday', '09:00:00', '12:00:00'),
(23, 2, '2025-08-11', '2025-09-11', 'Tuesday, Thursday', '10:00:00', '13:00:00'),
(24, 3, '2025-08-12', '2025-09-12', 'Monday, Friday', '08:30:00', '11:30:00'),
(25, 4, '2025-08-13', '2025-09-13', 'Wednesday, Saturday', '11:00:00', '14:00:00'),
(26, 5, '2025-08-14', '2025-09-14', 'Tuesday, Sunday', '09:30:00', '12:30:00'),
(27, 6, '2025-08-15', '2025-09-15', 'Monday, Wednesday', '10:00:00', '13:00:00'),
(28, 7, '2025-08-16', '2025-09-16', 'Tuesday, Friday', '09:00:00', '12:00:00'),
(29, 8, '2025-08-17', '2025-09-17', 'Wednesday, Saturday', '11:30:00', '14:30:00'),
(30, 9, '2025-08-18', '2025-09-18', 'Thursday, Sunday', '10:30:00', '13:30:00'),
(31, 10, '2025-08-19', '2025-09-19', 'Monday, Thursday', '08:00:00', '11:00:00'),
(32, 11, '2025-08-20', '2025-09-20', 'Tuesday, Friday', '09:00:00', '12:00:00'),
(33, 12, '2025-08-21', '2025-09-21', 'Wednesday, Saturday', '10:30:00', '13:30:00'),
(34, 13, '2025-08-22', '2025-09-22', 'Monday, Thursday', '08:30:00', '11:30:00'),
(35, 14, '2025-08-23', '2025-09-23', 'Tuesday, Friday', '09:00:00', '12:00:00'),
(36, 15, '2025-08-24', '2025-09-24', 'Wednesday, Sunday', '11:00:00', '14:00:00'),
(37, 16, '2025-08-25', '2025-09-25', 'Monday, Friday', '09:30:00', '12:30:00'),
(38, 17, '2025-08-26', '2025-09-26', 'Tuesday, Thursday', '10:00:00', '13:00:00'),
(39, 18, '2025-08-27', '2025-09-27', 'Wednesday, Saturday', '08:00:00', '11:00:00'),
(40, 19, '2025-08-28', '2025-09-28', 'Thursday, Sunday', '09:00:00', '12:00:00'),
(41, 20, '2025-08-29', '2025-09-29', 'Monday, Thursday', '10:00:00', '13:00:00'),
(42, 21, '2025-08-30', '2025-09-30', 'Tuesday, Friday', '08:30:00', '11:30:00'),
(43, 1, '2025-08-10', '2025-09-10', 'Monday, Wednesday', '09:00:00', '12:00:00'),
(44, 2, '2025-08-11', '2025-09-11', 'Tuesday, Thursday', '10:00:00', '13:00:00'),
(45, 3, '2025-08-12', '2025-09-12', 'Monday, Friday', '08:30:00', '11:30:00'),
(46, 4, '2025-08-13', '2025-09-13', 'Wednesday, Saturday', '11:00:00', '14:00:00'),
(47, 5, '2025-08-14', '2025-09-14', 'Tuesday, Sunday', '09:30:00', '12:30:00'),
(48, 6, '2025-08-15', '2025-09-15', 'Monday, Wednesday', '10:00:00', '13:00:00'),
(49, 7, '2025-08-16', '2025-09-16', 'Tuesday, Friday', '09:00:00', '12:00:00'),
(50, 8, '2025-08-17', '2025-09-17', 'Wednesday, Saturday', '11:30:00', '14:30:00'),
(51, 9, '2025-08-18', '2025-09-18', 'Thursday, Sunday', '10:30:00', '13:30:00'),
(52, 10, '2025-08-19', '2025-09-19', 'Monday, Thursday', '08:00:00', '11:00:00'),
(53, 11, '2025-08-20', '2025-09-20', 'Tuesday, Friday', '09:00:00', '12:00:00'),
(54, 12, '2025-08-21', '2025-09-21', 'Wednesday, Saturday', '10:30:00', '13:30:00'),
(55, 13, '2025-08-22', '2025-09-22', 'Monday, Thursday', '08:30:00', '11:30:00'),
(56, 14, '2025-08-23', '2025-09-23', 'Tuesday, Friday', '09:00:00', '12:00:00'),
(57, 15, '2025-08-24', '2025-09-24', 'Wednesday, Sunday', '11:00:00', '14:00:00'),
(58, 16, '2025-08-25', '2025-09-25', 'Monday, Friday', '09:30:00', '12:30:00'),
(59, 17, '2025-08-26', '2025-09-26', 'Tuesday, Thursday', '10:00:00', '13:00:00'),
(60, 18, '2025-08-27', '2025-09-27', 'Wednesday, Saturday', '08:00:00', '11:00:00'),
(61, 19, '2025-08-28', '2025-09-28', 'Thursday, Sunday', '09:00:00', '12:00:00'),
(62, 20, '2025-08-29', '2025-09-29', 'Monday, Thursday', '10:00:00', '13:00:00'),
(63, 21, '2025-08-30', '2025-09-30', 'Tuesday, Friday', '08:30:00', '11:30:00'),
(64, 1, '2025-08-10', '2025-09-10', 'Monday, Wednesday', '09:00:00', '12:00:00'),
(65, 2, '2025-08-11', '2025-09-11', 'Tuesday, Thursday', '10:00:00', '13:00:00'),
(66, 3, '2025-08-12', '2025-09-12', 'Monday, Friday', '08:30:00', '11:30:00'),
(67, 4, '2025-08-13', '2025-09-13', 'Wednesday, Saturday', '11:00:00', '14:00:00'),
(68, 5, '2025-08-14', '2025-09-14', 'Tuesday, Sunday', '09:30:00', '12:30:00'),
(69, 6, '2025-08-15', '2025-09-15', 'Monday, Wednesday', '10:00:00', '13:00:00'),
(70, 7, '2025-08-16', '2025-09-16', 'Tuesday, Friday', '09:00:00', '12:00:00'),
(71, 8, '2025-08-17', '2025-09-17', 'Wednesday, Saturday', '11:30:00', '14:30:00'),
(72, 9, '2025-08-18', '2025-09-18', 'Thursday, Sunday', '10:30:00', '13:30:00'),
(73, 10, '2025-08-19', '2025-09-19', 'Monday, Thursday', '08:00:00', '11:00:00'),
(74, 11, '2025-08-20', '2025-09-20', 'Tuesday, Friday', '09:00:00', '12:00:00'),
(75, 12, '2025-08-21', '2025-09-21', 'Wednesday, Saturday', '10:30:00', '13:30:00'),
(76, 13, '2025-08-22', '2025-09-22', 'Monday, Thursday', '08:30:00', '11:30:00'),
(77, 14, '2025-08-23', '2025-09-23', 'Tuesday, Friday', '09:00:00', '12:00:00'),
(78, 15, '2025-08-24', '2025-09-24', 'Wednesday, Sunday', '11:00:00', '14:00:00'),
(79, 16, '2025-08-25', '2025-09-25', 'Monday, Friday', '09:30:00', '12:30:00'),
(80, 17, '2025-08-26', '2025-09-26', 'Tuesday, Thursday', '10:00:00', '13:00:00'),
(81, 18, '2025-08-27', '2025-09-27', 'Wednesday, Saturday', '08:00:00', '11:00:00'),
(82, 19, '2025-08-28', '2025-09-28', 'Thursday, Sunday', '09:00:00', '12:00:00'),
(83, 20, '2025-08-29', '2025-09-29', 'Monday, Thursday', '10:00:00', '13:00:00'),
(84, 21, '2025-08-30', '2025-09-30', 'Tuesday, Friday', '08:30:00', '11:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `doctor_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `specialization` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` text DEFAULT NULL,
  `city_id` int(11) NOT NULL,
  `profile_details` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`doctor_id`, `user_id`, `full_name`, `specialization`, `phone`, `email`, `address`, `city_id`, `profile_details`) VALUES
(1, 0, 'Dr. Sarah Bennett', 'Cardiologist', '03001234567', 'sarah.bennett@example.com', 'Washington', 1, 'Experienced heart specialist'),
(2, 0, 'Dr. Robert Hayes', 'Orthopedic Surgeon', '03111230000', 'robert.hayes@example.com', 'Washington', 1, 'Expert in bone and joint surgery'),
(3, 0, 'Dr. Jennifer Clark', 'ENT Specialist', '03221234567', 'jennifer.clark@example.com', 'Washington', 1, 'Ear, Nose, and Throat care'),
(4, 0, 'Dr. Michael Lee', 'Dermatologist', '03007654321', 'michael.lee@example.com', 'New York', 2, 'Skin care and treatment expert'),
(5, 0, 'Dr. Olivia Harris', 'Psychiatrist', '03456781234', 'olivia.harris@example.com', 'New York', 2, 'Mental health and counseling'),
(6, 0, 'Dr. Daniel Moore', 'Gastroenterologist', '03334567890', 'daniel.moore@example.com', 'New York', 2, 'Digestive system specialist'),
(7, 0, 'Dr. David Kim', 'Neurologist', '03451239876', 'david.kim@example.com', 'Los Angeles', 3, 'Brain and nervous system specialist'),
(8, 0, 'Dr. Ashley Rogers', 'Dentist', '03881234567', 'ashley.rogers@example.com', 'Los Angeles', 3, 'Dental and oral care'),
(9, 0, 'Dr. Kevin Brooks', 'Urologist', '03991234567', 'kevin.brooks@example.com', 'Los Angeles', 3, 'Kidney and urinary specialist'),
(10, 0, 'Dr. Anna Mitchell', 'Endocrinologist', '03561234567', 'anna.mitchell@example.com', 'Miami', 4, 'Hormone and metabolism specialist'),
(11, 0, 'Dr. Charles Evans', 'Hematologist', '03112233445', 'charles.evans@example.com', 'Miami', 4, 'Blood disorder expert'),
(12, 0, 'Dr. Natalie Perez', 'Allergist', '03777889900', 'natalie.perez@example.com', 'Miami', 4, 'Allergy and immune system expert'),
(13, 0, 'Dr. Laura Wilson', 'General Physician', '03111239876', 'laura.wilson@example.com', 'Seattle', 5, 'General health consultant'),
(14, 0, 'Dr. Brian Murphy', 'Pulmonologist', '03177889900', 'brian.murphy@example.com', 'Seattle', 5, 'Lung and respiratory care'),
(15, 0, 'Dr. Sophia Green', 'Rheumatologist', '03155667788', 'sophia.green@example.com', 'Seattle', 5, 'Joint and autoimmune care'),
(61, 0, 'Eva', 'cardiologist', '03314677668', 'eva123@gmail.com', 'Washington', 1, 'Heart specialist'),
(62, 0, 'Sana', 'cardiologist', '03314677660', 'sana12@gmail.com', 'Washington', 1, '#');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `subject` varchar(150) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`, `created_at`) VALUES
(1, 'eva', 'eva@gmail.com', 'youcare', 'heyy can u give me some information about your hospital please!', '2025-08-05 20:01:06'),
(2, 'Johnson', 'Johanson77@email.com', 'General Information', 'Do you offer online consultations? I live outside the city and would prefer a virtual appointment if possible.', '2025-08-05 20:11:59'),
(4, 'Olivia', 'olivia.williams@example.com', 'Services Inquiry', 'Do you offer mental health consultations or wellness programs? I’d love to learn more about your services.', '2025-08-05 20:14:14'),
(5, 'khan', '#khan@gmail.com', 'General Information', '###', '2025-08-10 00:13:58'),
(6, 'khan', '#khan@gmail.com', 'General Information', 'Is there any branch of Youcare in London??', '2025-08-10 00:48:52'),
(7, 'khan', '#khan@gmail.com', 'General Information', 'Is there any branch of Youcare in London??', '2025-08-10 01:23:33'),
(8, 'Bone', 'bone@gmail.com', 'General Information', 'Can I book two appointments in one day?', '2025-08-12 21:47:43'),
(9, 'Bone', 'bone@gmail.com', 'General Information', 'Can I book two appointments in one day?', '2025-08-12 21:54:46'),
(10, 'Bone', 'bone@gmail.com', 'General Information', 'Can I book two appointments in one day?', '2025-08-12 21:57:11'),
(11, 'Bone', 'bone@gmail.com', 'General Information', 'Can I book two appointments in one day?', '2025-08-12 21:57:15'),
(12, 'Bone', 'bone@gmail.com', 'General Information', 'Can I book two appointments in one day?', '2025-08-13 19:50:37');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `patient_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` text DEFAULT NULL,
  `city_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`patient_id`, `user_id`, `full_name`, `phone`, `email`, `address`, `city_id`, `created_at`) VALUES
(1, 1, 'CAPRII', '03312222288', 'capri@email.com', 'uk', 1, '2025-08-05 16:38:33'),
(2, 1, 'James', '0328887657', 'James1@gmail.com', 'Washington', 3, '2025-08-06 23:39:07'),
(3, 1, 'eva', '03222278966', 'eva@gmail.com', '', 4, '2025-08-07 00:03:12'),
(4, 1, 'ANDREW', '025887276262', 'ANDD@gmail.com', '', 1, '2025-08-07 00:03:53'),
(5, 1, 'WILY', '0236782726', 'w12@gmail.com', '', 3, '2025-08-07 01:08:57'),
(6, 1, 'OLIVIA', '0023873888', 'OLIVIA@GMAIL.COM', '', 4, '2025-08-07 02:03:39'),
(7, 1, 'Rose', '01245787559', 'rose123@gmail.com', '', 2, '2025-08-07 02:04:23'),
(8, 1, 'Kate', '0327818616', 'katy@gmail.com', '', 2, '2025-08-07 02:04:56'),
(9, 1, 'sara', '03256788888', 'sara@gmail.com', '', 3, '2025-08-07 16:18:04'),
(10, 2, 'sofia', '03212344444', 'sofia@gmail.com', 'Washington', 1, '2025-08-07 21:21:09'),
(11, 1, 'Dane', '03222278966', 'dane@gmail.com', '', 3, '2025-08-08 19:36:50'),
(12, 1, 'khan', '0322212331', 'khan@gmail.com', '', 4, '2025-08-09 21:13:09'),
(13, 2, 'khan', '0326898789', '#khan@gmail.com', 'Washington', 2, '2025-08-10 01:31:28'),
(14, 1, 'Bone', '03689689689', 'bone@gmail.com', '', 4, '2025-08-12 18:27:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','doctor','patient') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `role`) VALUES
(1, 'eva', '$2y$10$h2GsVvr/bV00zvZI9.xxIOMX51qViUbwO84KX3C4Fes6rXbSVFDm6', 'patient'),
(2, 'SARA', '$2y$10$sXx2cjkBXl8X1Yz9Pdyk6uKtpvd8S.u1xEf4VunPWmaQCgPJAId1K', 'patient'),
(3, 'DRMICHEAL', '$2y$10$PsAPsDWvaY/8EVuzO1tBoOXzzrD.0DC7dL7L1yNs9Ac1RidYPjNXG', 'doctor'),
(4, 'olivea', '$2y$10$.CA8HP0svJ4nWnFsPDhXdubTQTeCTNyo9AfkdhtNqa.h0al49iJme', ''),
(5, 'Dane', '$2y$10$A6Y8.D9g7AYYiCBueo21c.jM/0GiBEuuA.GLmx7/MRoQC7TV0G3KG', 'patient'),
(6, 'admin', '$2y$10$WVSkqexFNIakqiVMA9PWX.G.cHNdIlGV.i9DUqkkvk2.BjFK72g26', 'admin'),
(7, 'Nora', '$2y$10$eenr00riwjzBzb1Fi81bBekj6jBYpuHKm5eS0CM6Wvc05asFC1L5i', 'patient');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`city_id`),
  ADD UNIQUE KEY `city_name` (`city_name`);

--
-- Indexes for table `doctoravailability`
--
ALTER TABLE `doctoravailability`
  ADD PRIMARY KEY (`availability_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `doctoravailability`
--
ALTER TABLE `doctoravailability`
  MODIFY `availability_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
