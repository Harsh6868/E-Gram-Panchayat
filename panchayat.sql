-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2025 at 06:36 AM
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
-- Database: `panchayat`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` enum('Pending','Solved') DEFAULT 'Pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `name`, `email`, `subject`, `message`, `status`, `created_at`) VALUES
(1, 'harsh vikas patil', 'hp2738200@gmail.com', 'water', 'lack of water', 'Pending', '2025-03-09 16:51:51'),
(4, 'vijay patil', 'vp@gmail.com', 'paste control', 'xyz', 'Pending', '2025-03-19 09:56:47'),
(5, 'neha patil', 'neha@gmail.com', 'about the schemes', '@schemes only', 'Pending', '2025-03-21 05:31:10');

-- --------------------------------------------------------

--
-- Table structure for table `tax_payments`
--

CREATE TABLE `tax_payments` (
  `id` int(11) NOT NULL,
  `owner_name` varchar(255) NOT NULL,
  `property_id` varchar(100) NOT NULL,
  `tax_amount` decimal(10,2) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `transaction_id` varchar(100) DEFAULT NULL,
  `payment_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tax_payments`
--

INSERT INTO `tax_payments` (`id`, `owner_name`, `property_id`, `tax_amount`, `payment_method`, `transaction_id`, `payment_date`) VALUES
(1, 'harshal patil', '123321', 230.00, 'upi', 'T250307658534', '2025-03-12 17:15:18'),
(2, 'tushar patil', '2345', 180.00, 'credit_card', 'T6457832410987', '2025-03-12 17:19:36'),
(3, 'samadhan dilip patil', '9192', 200.00, 'upi', '', '2025-03-15 11:09:54'),
(4, 'yashodip', '23415', 320.00, 'debit_card', 'T54678392', '2025-03-19 09:20:08'),
(5, 'sejal patil', '23445627', 230.00, 'debit_card', 'T54678392', '2025-03-21 05:00:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(15, 'Admin', 'sarpanch@gmail.com', '$2y$10$Sm3jGFHObjATuVnuZGsrEe0mJ959XDwm3.efaNm5N7xeAlPXa6.ju', '2025-03-19 13:37:36'),
(16, 'Harshal patil', 'hp@gmail.com', '$2y$10$jqhCu1l0BrJU9QxhhI1KJuVML0D0MBnu4ye1njC6mq82E2JblLb5m', '2025-03-19 17:47:23'),
(17, 'neha patil', 'neha@gmail.com', '$2y$10$dP7uM/TI4T5nlwmwWjmAS.yhPjuu7IxEPYwa33Rv4lu6hkifR1y2q', '2025-03-21 05:29:04');

-- --------------------------------------------------------

--
-- Table structure for table `water_tax_payments`
--

CREATE TABLE `water_tax_payments` (
  `id` int(11) NOT NULL,
  `owner_name` varchar(255) NOT NULL,
  `connection_id` varchar(100) NOT NULL,
  `tax_amount` decimal(10,2) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `transaction_id` varchar(100) DEFAULT NULL,
  `payment_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `water_tax_payments`
--

INSERT INTO `water_tax_payments` (`id`, `owner_name`, `connection_id`, `tax_amount`, `payment_method`, `transaction_id`, `payment_date`) VALUES
(1, 'harshal patil', '23323', 230.00, 'upi', 'T6457832410987', '2025-03-12 17:40:12'),
(2, 'vijay patil', '2345432', 2000.00, 'debit_card', 'T45637876354', '2025-03-19 09:22:30'),
(3, 'darshan', '230', 240.00, 'debit_card', 'T56748357645', '2025-03-19 13:42:29'),
(4, 'neha patil', '2305678493', 250.00, 'credit_card', 'T56748357645567', '2025-03-21 05:32:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tax_payments`
--
ALTER TABLE `tax_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `water_tax_payments`
--
ALTER TABLE `water_tax_payments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tax_payments`
--
ALTER TABLE `tax_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `water_tax_payments`
--
ALTER TABLE `water_tax_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
