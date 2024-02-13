-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2024 at 04:51 PM
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
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2024_02_09_141019_students_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `f_name`, `l_name`, `gender`, `age`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Carter', 'Bahringer', 'Female', '20', 'jacquelyn76@example.net', '2024-02-13 03:40:34', '2024-02-13 03:40:34'),
(2, 'Johnathan', 'Oberbrunner', 'Female', '18', 'otha.koepp@example.org', '2024-02-13 03:40:34', '2024-02-13 03:40:34'),
(3, 'Wade', 'Kutch', 'Female', '21', 'faustino80@example.com', '2024-02-13 03:40:34', '2024-02-13 03:40:34'),
(4, 'Vicente', 'Schulist', 'Female', '21', 'marielle70@example.com', '2024-02-13 03:40:34', '2024-02-13 03:40:34'),
(5, 'Dexter', 'Morissette', 'Male', '20', 'lillian.marquardt@example.com', '2024-02-13 03:40:34', '2024-02-13 03:40:34'),
(6, 'Isabella', 'Gottlieb', 'Male', '18', 'raleigh.muller@example.com', '2024-02-13 03:40:34', '2024-02-13 03:40:34'),
(7, 'Donnie', 'Goodwin', 'Female', '21', 'kassulke.kyleigh@example.net', '2024-02-13 03:40:34', '2024-02-13 03:40:34'),
(8, 'Chesley', 'Langosh', 'Male', '22', 'newell.friesen@example.org', '2024-02-13 03:40:34', '2024-02-13 03:40:34'),
(9, 'Anabel', 'Rutherford', 'Male', '20', 'ruthie99@example.com', '2024-02-13 03:40:34', '2024-02-13 03:40:34'),
(10, 'Britney', 'Osinski', 'Female', '21', 'eleonore24@example.org', '2024-02-13 03:40:34', '2024-02-13 03:40:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kathlyn Dach', 'sipes.zaria@example.net', '2024-02-13 03:40:34', '$2y$12$UQT2O30X.UBGrnvfZDiXa.vto/sRYd.afyOp0OlL9CBIIHUO8XZuS', 'jgHI7SwimA', '2024-02-13 03:40:34', '2024-02-13 03:40:34'),
(2, 'Dr. Ivory Murray MD', 'blanche30@example.net', '2024-02-13 03:40:34', '$2y$12$UQT2O30X.UBGrnvfZDiXa.vto/sRYd.afyOp0OlL9CBIIHUO8XZuS', 'CAO3fYZlZ6', '2024-02-13 03:40:34', '2024-02-13 03:40:34'),
(3, 'Fritz Williamson', 'schneider.ebony@example.net', '2024-02-13 03:40:34', '$2y$12$UQT2O30X.UBGrnvfZDiXa.vto/sRYd.afyOp0OlL9CBIIHUO8XZuS', 'd3zZ9bqKeP', '2024-02-13 03:40:34', '2024-02-13 03:40:34'),
(4, 'Rosemary McClure', 'christiansen.jayde@example.net', '2024-02-13 03:40:34', '$2y$12$UQT2O30X.UBGrnvfZDiXa.vto/sRYd.afyOp0OlL9CBIIHUO8XZuS', '9VSxJW7KYP', '2024-02-13 03:40:34', '2024-02-13 03:40:34'),
(5, 'Maribel Bednar', 'xfay@example.org', '2024-02-13 03:40:34', '$2y$12$UQT2O30X.UBGrnvfZDiXa.vto/sRYd.afyOp0OlL9CBIIHUO8XZuS', '3vGupalkLP', '2024-02-13 03:40:34', '2024-02-13 03:40:34'),
(6, 'Prof. Eldon O\'Reilly Jr.', 'sophie.medhurst@example.org', '2024-02-13 03:40:34', '$2y$12$UQT2O30X.UBGrnvfZDiXa.vto/sRYd.afyOp0OlL9CBIIHUO8XZuS', 'VbqTuCAek3', '2024-02-13 03:40:34', '2024-02-13 03:40:34'),
(7, 'Barney Crooks', 'lconnelly@example.org', '2024-02-13 03:40:34', '$2y$12$UQT2O30X.UBGrnvfZDiXa.vto/sRYd.afyOp0OlL9CBIIHUO8XZuS', 'RjrrA1lMfc', '2024-02-13 03:40:34', '2024-02-13 03:40:34'),
(8, 'Dawn Labadie', 'thelma34@example.org', '2024-02-13 03:40:34', '$2y$12$UQT2O30X.UBGrnvfZDiXa.vto/sRYd.afyOp0OlL9CBIIHUO8XZuS', '7W1OLzlr2n', '2024-02-13 03:40:34', '2024-02-13 03:40:34'),
(9, 'Unique Gutkowski', 'moen.michale@example.net', '2024-02-13 03:40:34', '$2y$12$UQT2O30X.UBGrnvfZDiXa.vto/sRYd.afyOp0OlL9CBIIHUO8XZuS', 'mGrskzUULw', '2024-02-13 03:40:34', '2024-02-13 03:40:34'),
(10, 'Trevion Stiedemann', 'zroberts@example.net', '2024-02-13 03:40:34', '$2y$12$UQT2O30X.UBGrnvfZDiXa.vto/sRYd.afyOp0OlL9CBIIHUO8XZuS', 'W999T38VlR', '2024-02-13 03:40:34', '2024-02-13 03:40:34'),
(11, 'Mark Tedra', 'marktedra@gmail.com', NULL, '$2y$12$fjkDEmEgIjkZjAND70q.seXS66Vrs.CdUVDHA5616UKSPPMXvu42W', NULL, '2024-02-13 03:42:00', '2024-02-13 03:42:00'),
(12, 'Kenneth', 'kenneth@gmail.com', NULL, '$2y$12$yy9kBbSU.CmVyFRpzWzS5eI03ChHSC5S/E3SGNWgrCXMu8GrSawQO', NULL, '2024-02-13 03:46:06', '2024-02-13 03:46:06'),
(13, 'Shashty', 'shashty@gmail.com', NULL, '$2y$12$vi7zZw93xDM0T35h/8ML0ePlU8pQMijGEyRrz7j3DWv.WwgyZ.meq', NULL, '2024-02-13 03:53:31', '2024-02-13 03:53:31'),
(14, 'Qanna S.', 'qanna@gmail.com', NULL, '$2y$12$eG3fbTDGQqcWNeJIwUxYG.yFYdqGzzH686cmECv4SmiyhYMpIxTU.', NULL, '2024-02-13 03:56:01', '2024-02-13 03:56:01'),
(15, 'Stell V.', 'stell@gmail.com', NULL, '$2y$12$g7txeQeghWYEWytSStoRz.p3VNpLUiU8Y1fb0kaXGJLqMjgpD0rQq', NULL, '2024-02-13 07:04:43', '2024-02-13 07:04:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
