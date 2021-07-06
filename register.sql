-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2021 at 05:14 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `degree360`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`, `phone`, `country_id`, `state_id`, `city_id`, `gender`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'chaitany sangole', 'csjob1994@gmail.com', '', 8149750231, 114, 21, 1508, 'male', 'image.png', 'active', '2021-04-20 15:59:16', '2021-07-06 02:49:52'),
(17, '', 'saurabhsangole@gmail.com', 'Swami@12', 7896321456, 114, 21, 1508, 'male', 'ariana-grande-2014-3.jpg', 'active', '2021-04-21 06:17:01', '2021-07-06 02:50:27'),
(18, 'jitendra kumar', 'jitendra12pm@gmail.com', 'Jitu@123', 0, 114, 21, 1508, 'male', 'catfight.png', 'active', '2021-04-21 06:20:10', '2021-07-06 02:50:12'),
(20, 'sonu kumar', 'sonukg@gmail.com', 'Sonukg@1', 0, 114, 21, 849, 'male', 'img_avtar.jpg', 'active', '2021-04-21 06:23:47', '2021-07-06 02:57:48'),
(21, 'shilpa shinde', '', 'Shilpa@1', 8645123654, 114, 28, 1018, 'male', 'original.png', 'active', '2021-04-21 06:27:39', '2021-07-06 02:50:00'),
(22, '', 'shehnaazgill@gmail.com', 'Sana@123', 7865215302, 114, 28, 1018, 'male', '710729.jpg', 'active', '2021-04-21 12:27:50', '2021-07-06 02:50:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_country_id` (`country_id`),
  ADD KEY `fk_state_id` (`state_id`),
  ADD KEY `fk_city_id` (`city_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `register`
--
ALTER TABLE `register`
  ADD CONSTRAINT `fk_city_id` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`),
  ADD CONSTRAINT `fk_country_id` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`),
  ADD CONSTRAINT `fk_state_id` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
