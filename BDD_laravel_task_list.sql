-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: May 24, 2022 at 11:23 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_task_list`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_07_05_155951_create_tasks_table', 1),
(4, '2022_05_16_092645_add_expired_at_to_users', 2),
(5, '2022_05_16_093137_add_expired_at_to_tasks', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('yolande237@gmail.com', '$2y$10$TVEpr5XEbzigAzs2U0BfZel9VLtese8mXTzav3UeqBQ3t5dNhche.', '2022-05-22 16:14:57');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `done` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expired_at` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `user_id`, `name`, `done`, `created_at`, `updated_at`, `expired_at`) VALUES
(7, 1, 'Welcome the minister', 0, '2022-05-16 15:23:47', '2022-05-16 15:23:47', '2022-05-01'),
(8, 3, 'register', 1, '2022-05-17 09:42:07', '2022-05-17 09:42:21', '2022-05-06'),
(10, 4, 'test des formulaires', 0, '2022-05-18 09:27:13', '2022-05-18 09:27:13', '2022-05-20'),
(11, 1, 'Write purpose', 1, '2022-05-19 04:27:08', '2022-05-22 16:43:51', '2022-05-20'),
(12, 1, 'Hello world', 0, '2022-05-20 20:24:19', '2022-05-20 20:24:19', '2022-05-30'),
(13, 1, 'Bring all documents', 0, '2022-05-21 00:54:44', '2022-05-21 00:54:44', '2022-05-13'),
(14, 1, 'call', 0, '2022-05-21 01:05:07', '2022-05-21 01:05:07', '2022-05-22'),
(25, 8, 'go to school', 0, '2022-05-23 08:08:33', '2022-05-23 08:12:34', '2022-05-23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'yolande', 'yolande237@gmail.com', '$2y$10$/EUfCuNYZoFk83b8I1y.W.JG6d1NvVKqJKcYQB1lmwyeh7kh9MbI.', 'lEwSJw8hRM6RIl991U0Ctf2LO4olUscrbc5UcSWFZ3Ib47OQLEI3h52LWxcv', '2022-05-13 14:40:24', '2022-05-16 17:51:17'),
(2, 'tella', 'ruthtella@gmail.com', '$2y$10$cNje1iihZ9d6URQEJnTVK.Q0Q9PZG.Xc6Sd8PRcxR.oS/2WU54RIi', 'FhficDvynGLwhtK3xf14wJn7pjACGYdj1ANOMrhoaywdaAFjmdY327L4CRrR', '2022-05-16 14:55:43', '2022-05-16 14:56:15'),
(3, 'yann', 'yan123@gmail.com', '$2y$10$0.ZzBKEuFLRESF/lwNkske4S8AZvQs5apOOyNPp.KNVzChWIRQ9eC', NULL, '2022-05-17 09:41:19', '2022-05-17 09:41:19'),
(4, 'TANKEU', 'aroltankeu@yahoo.com', '$2y$10$b/mQjihQ3/8VmUxsxkD/JeCMwrL8qm0Unmdwl10kM4L0AZtd843H2', 'EHb9xk62Rr7goYztwjJk3ymaLtUUWnZ1nTGnuwbTHPgOOv7pixDTFgC4ssKC', '2022-05-18 09:25:57', '2022-05-18 09:25:57'),
(5, 'hollie', 'yolande127@gmail.com', '$2y$10$P6vhiEqX4RLM2adALXxCB.gtJoAylKFkQB/v7uKTXLYzJEWaElvBy', 'Y4cwtnw6VLqqtdpYg8u6JyGPyUyAqpvi5e9tTgXJhAcYkscVfz1EJUMzZOib', '2022-05-22 15:26:04', '2022-05-22 15:26:04'),
(6, 'josiane', 'josiane@gmail.com', '$2y$10$0umYfRNCto/WQJCDMTJst.UqAio9vRTS46dD9dCXwVrK83UhVaG/6', 'btH0dgkh7ktozZAoeG7QXXlIhguiVgLHcLN05KFsk2CfIMcrLMicbHCcgu9S', '2022-05-22 15:55:52', '2022-05-22 15:55:52'),
(7, 'gaelle', 'gaelle237@gmail.com', '$2y$10$zQpP6dkosOJIhfPwsh22uOnUOdmBE3.3HVmIEhNYwHSrzdXHPDERa', NULL, '2022-05-23 08:06:14', '2022-05-23 08:06:14'),
(8, 'gaelle', 'gaelle123@gmail.com', '$2y$10$ZqOO0sRdMNW/YnAtbJPPPOPuX15g1L4xhJKPH1DFGu0xQdrBwQamK', 'r2DRRDMj5u3xTU4sILChwio6wgK1Si9KD7Sn9bb8O8y38hIpAlCIN0Jggo7I', '2022-05-23 08:07:27', '2022-05-23 08:10:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tasks_user_id_index` (`user_id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
