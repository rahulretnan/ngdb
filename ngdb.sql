-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 15, 2020 at 07:02 PM
-- Server version: 10.3.22-MariaDB-0+deb10u1
-- PHP Version: 7.3.14-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `acs`
--

CREATE TABLE `acs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `r_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ac_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `bstatus` tinyint(1) NOT NULL DEFAULT 0,
  `pstate` tinyint(1) NOT NULL DEFAULT 0,
  `rstate` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `acs`
--

INSERT INTO `acs` (`id`, `r_id`, `ac_id`, `status`, `bstatus`, `pstate`, `rstate`, `created_at`, `updated_at`) VALUES
(1, 'r1', 'Ac1', 1, 0, 1, 1, '2020-04-10 11:17:57', '2020-04-10 12:30:05'),
(2, 'r2', 'Ac2', 1, 0, 1, 1, '2020-04-10 11:18:48', '2020-04-10 12:30:05');

-- --------------------------------------------------------

--
-- Table structure for table `components`
--

CREATE TABLE `components` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fans`
--

CREATE TABLE `fans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `r_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fn_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `bstatus` tinyint(1) NOT NULL DEFAULT 0,
  `pstate` tinyint(1) NOT NULL DEFAULT 0,
  `rstate` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fans`
--

INSERT INTO `fans` (`id`, `r_id`, `fn_id`, `status`, `bstatus`, `pstate`, `rstate`, `created_at`, `updated_at`) VALUES
(1, 'r1', 'F1', 1, 0, 1, 1, '2020-04-10 11:20:53', '2020-04-10 12:30:05'),
(2, 'r2', 'F2', 1, 0, 1, 1, '2020-04-10 11:21:37', '2020-04-10 12:30:05'),
(3, 'r3', 'F3', 1, 0, 1, 1, '2020-04-10 11:22:29', '2020-04-10 12:30:05');

-- --------------------------------------------------------

--
-- Table structure for table `fridges`
--

CREATE TABLE `fridges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `r_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fr_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `bstatus` tinyint(1) NOT NULL DEFAULT 0,
  `pstate` tinyint(1) NOT NULL DEFAULT 0,
  `rstate` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fridges`
--

INSERT INTO `fridges` (`id`, `r_id`, `fr_id`, `status`, `bstatus`, `pstate`, `rstate`, `created_at`, `updated_at`) VALUES
(1, 'r3', 'Fr1', 1, 0, 1, 1, '2020-04-10 11:24:23', '2020-04-10 12:30:06');

-- --------------------------------------------------------

--
-- Table structure for table `lights`
--

CREATE TABLE `lights` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `r_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lt_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `bstatus` tinyint(1) NOT NULL DEFAULT 0,
  `pstate` tinyint(1) NOT NULL DEFAULT 0,
  `rstate` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lights`
--

INSERT INTO `lights` (`id`, `r_id`, `lt_id`, `status`, `bstatus`, `pstate`, `rstate`, `created_at`, `updated_at`) VALUES
(1, 'r1', 'L1', 1, 0, 0, 1, '2020-04-10 11:26:14', '2020-04-10 12:30:31'),
(2, 'r2', 'L2', 1, 0, 1, 1, '2020-04-10 11:27:24', '2020-04-10 12:30:05'),
(3, 'r3', 'L3', 1, 0, 1, 1, '2020-04-10 11:27:42', '2020-04-10 12:30:05');

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
(1, '2019_08_19_000000_create_failed_jobs_table', 1),
(2, '2020_04_06_142824_create_rooms_table', 1),
(3, '2020_04_06_142923_create_components_table', 1),
(4, '2020_04_06_143256_create_fans_table', 1),
(5, '2020_04_06_143318_create_lights_table', 1),
(6, '2020_04_06_143340_create_fridges_table', 1),
(7, '2020_04_06_143359_create_acs_table', 1),
(8, '2020_04_06_143548_create_motors_table', 1),
(9, '2020_04_08_203943_create_powers_table', 1),
(10, '2020_04_10_155427_create_wms_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `motors`
--

CREATE TABLE `motors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `r_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mt_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `bstatus` tinyint(1) NOT NULL DEFAULT 0,
  `pstate` tinyint(1) NOT NULL DEFAULT 0,
  `rstate` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `motors`
--

INSERT INTO `motors` (`id`, `r_id`, `mt_id`, `status`, `bstatus`, `pstate`, `rstate`, `created_at`, `updated_at`) VALUES
(1, 'r4', 'M1', 1, 0, 1, 1, '2020-04-10 11:29:39', '2020-04-10 12:30:06');

-- --------------------------------------------------------

--
-- Table structure for table `powers`
--

CREATE TABLE `powers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pmainstatus` tinyint(1) NOT NULL DEFAULT 0,
  `psave` tinyint(1) NOT NULL DEFAULT 0,
  `pstatus` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `powers`
--

INSERT INTO `powers` (`id`, `p_id`, `pmainstatus`, `psave`, `pstatus`, `created_at`, `updated_at`) VALUES
(1, 'p1', 0, 0, 1, '2020-04-10 11:30:46', '2020-04-10 12:30:06');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `r_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `rview` tinyint(1) NOT NULL DEFAULT 0,
  `pstate` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `r_id`, `rname`, `status`, `rview`, `pstate`, `created_at`, `updated_at`) VALUES
(1, 'r1', 'Rahul\'s Room', 1, 1, 1, '2020-04-10 11:31:48', '2020-04-10 12:30:05'),
(2, 'r2', 'Zain\'s Room', 1, 1, 1, '2020-04-10 11:32:09', '2020-04-10 12:30:05'),
(3, 'r3', 'Kitchen', 1, 1, 1, '2020-04-10 11:32:34', '2020-04-10 12:30:05'),
(4, 'r4', 'General', 1, 1, 1, '2020-04-10 11:32:57', '2020-04-10 12:30:05');

-- --------------------------------------------------------

--
-- Table structure for table `wms`
--

CREATE TABLE `wms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `r_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wm_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `bstatus` tinyint(1) NOT NULL DEFAULT 0,
  `pstate` tinyint(1) NOT NULL DEFAULT 0,
  `rstate` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wms`
--

INSERT INTO `wms` (`id`, `r_id`, `wm_id`, `status`, `bstatus`, `pstate`, `rstate`, `created_at`, `updated_at`) VALUES
(1, 'r4', 'Wm1', 1, 0, 1, 1, '2020-04-10 11:34:10', '2020-04-10 12:30:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acs`
--
ALTER TABLE `acs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `acs_ac_id_unique` (`ac_id`);

--
-- Indexes for table `components`
--
ALTER TABLE `components`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `components_c_id_unique` (`c_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fans`
--
ALTER TABLE `fans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fans_fn_id_unique` (`fn_id`);

--
-- Indexes for table `fridges`
--
ALTER TABLE `fridges`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fridges_fr_id_unique` (`fr_id`);

--
-- Indexes for table `lights`
--
ALTER TABLE `lights`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lights_lt_id_unique` (`lt_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motors`
--
ALTER TABLE `motors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `motors_mt_id_unique` (`mt_id`);

--
-- Indexes for table `powers`
--
ALTER TABLE `powers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `powers_p_id_unique` (`p_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rooms_r_id_unique` (`r_id`);

--
-- Indexes for table `wms`
--
ALTER TABLE `wms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `wms_wm_id_unique` (`wm_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acs`
--
ALTER TABLE `acs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `components`
--
ALTER TABLE `components`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fans`
--
ALTER TABLE `fans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fridges`
--
ALTER TABLE `fridges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lights`
--
ALTER TABLE `lights`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `motors`
--
ALTER TABLE `motors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `powers`
--
ALTER TABLE `powers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wms`
--
ALTER TABLE `wms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
