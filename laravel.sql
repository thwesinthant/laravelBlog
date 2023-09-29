-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2023 at 09:13 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Omnis velit.', '2023-09-24 01:29:44', '2023-09-24 01:29:44'),
(2, 'Aspernatur similique perspiciatis.', '2023-09-24 01:29:44', '2023-09-24 01:29:44'),
(3, 'Velit voluptatibus velit.', '2023-09-24 01:29:44', '2023-09-24 01:29:44'),
(4, 'Dolores temporibus laudantium.', '2023-09-24 01:29:44', '2023-09-24 01:29:44'),
(5, 'Quia aut.', '2023-09-24 01:29:44', '2023-09-24 01:29:44'),
(6, 'Quibusdam quia sunt.', '2023-09-24 01:29:44', '2023-09-24 01:29:44'),
(7, 'Deleniti doloribus.', '2023-09-24 01:29:44', '2023-09-24 01:29:44'),
(8, 'Saepe eius.', '2023-09-24 01:29:44', '2023-09-24 01:29:44'),
(9, 'Veritatis velit dolores.', '2023-09-24 01:29:44', '2023-09-24 01:29:44'),
(10, 'Rerum recusandae odit.', '2023-09-24 01:29:44', '2023-09-24 01:29:44');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `ordering` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `ordering_secondary` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `comment` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `ordering`, `ordering_secondary`, `comment`, `created_at`, `updated_at`) VALUES
(1, 11, 1, 1, 0, 'bobo comment', '2023-09-27 03:08:21', '2023-09-27 03:08:21'),
(2, 11, 1, 1, 1, 'reply to bobo', '2023-09-27 03:35:48', '2023-09-27 03:35:48'),
(3, 11, 1, 2, 0, 'nono comment', '2023-09-28 23:32:12', '2023-09-28 23:32:12'),
(4, 11, 1, 2, 1, 'reply to nono 1', '2023-09-28 23:38:22', '2023-09-28 23:38:22');

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
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(44, '2014_10_12_000000_create_users_table', 1),
(45, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(46, '2019_08_19_000000_create_failed_jobs_table', 1),
(47, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(48, '2023_09_09_073703_create_posts_table', 1),
(49, '2023_09_09_074941_create_categories_table', 1),
(50, '2023_09_16_142156_create_comments_table', 1),
(51, '2023_09_23_075541_create_items_table', 1),
(52, '2023_09_26_044755_create_products_table', 2),
(53, '2023_09_29_063906_create_replies_table', 3);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `comment_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `photo`, `user_id`, `category_id`, `comment_id`, `created_at`, `updated_at`) VALUES
(1, 'Ipsum nostrum ex.', 'Reiciendis quasi et voluptate alias exercitationem.', NULL, 7, 3, 9, '2023-09-24 01:29:33', '2023-09-24 01:29:33'),
(2, 'Enim aut nisi sunt.', 'Molestias impedit ut accusamus quia hic quis sed omnis ut.', NULL, 1, 7, 10, '2023-09-24 01:29:33', '2023-09-24 01:29:33'),
(3, 'Tempora est doloremque sit.', 'Dolorem quo minus nobis enim eum maiores.', NULL, 8, 1, 6, '2023-09-24 01:29:33', '2023-09-24 01:29:33'),
(4, 'title4', 'jsdkfjsdkfjklsdjfkjsdkfjklsdjfklsjdklfjklsdjfklsdj', NULL, 8, 6, 5, '2023-09-24 01:29:33', '2023-09-24 01:33:14'),
(5, 'At culpa consequatur facilis.', 'Accusamus sit voluptatem in ex sunt ullam.', NULL, 1, 7, 2, '2023-09-24 01:29:33', '2023-09-24 01:29:33'),
(6, 'Sed vel ad.', 'Rerum ut mollitia ea repudiandae qui quisquam ea natus quo.', NULL, 7, 7, 5, '2023-09-24 01:29:33', '2023-09-24 01:29:33'),
(7, 'Hic veniam incidunt.', 'Illum et consequatur illum dolorum expedita voluptate repellat cum.', NULL, 9, 5, 4, '2023-09-24 01:29:33', '2023-09-24 01:29:33'),
(8, 'Eum sed est corporis.', 'Qui enim voluptatem odit molestias incidunt earum.', NULL, 3, 4, 6, '2023-09-24 01:29:33', '2023-09-24 01:29:33'),
(9, 'Iure ex cupiditate non.', 'Dolores necessitatibus molestias nam id laudantium velit aut.', NULL, 10, 1, 9, '2023-09-24 01:29:33', '2023-09-24 01:29:33');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL,
  `reply` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `provider` varchar(255) DEFAULT NULL,
  `provider_id` varchar(255) DEFAULT NULL,
  `provider_token` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `provider`, `provider_id`, `provider_token`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Loy Padberg', 'Ms. Beverly Kemmer I', 'vito03@example.com', '2023-09-24 01:29:52', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Emilia Bergnaum', '25', '40', 'g402kpgLRY', '2023-09-24 01:29:52', '2023-09-24 01:29:52'),
(2, 'Karley Grimes', 'Emmett Schmitt', 'deffertz@example.org', '2023-09-24 01:29:52', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Michel Torp', '35', '33', 'NVxMrlTN1w', '2023-09-24 01:29:52', '2023-09-24 01:29:52'),
(3, 'Roxane Kozey', 'Brenden Kovacek', 'ikihn@example.com', '2023-09-24 01:29:52', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Dr. Percy Dickens', '48', '6', 'rdVNH5XGJz', '2023-09-24 01:29:52', '2023-09-24 01:29:52'),
(4, 'Sabrina Oberbrunner', 'Ona Pouros', 'kaya.denesik@example.net', '2023-09-24 01:29:52', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Moshe DuBuque', '48', '34', 'vTLuJKDKWw', '2023-09-24 01:29:52', '2023-09-24 01:29:52'),
(5, 'Hillary Wiegand', 'Libbie Lynch', 'lupton@example.org', '2023-09-24 01:29:52', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Marcos Rippin', '20', '37', 'G3gI22FiT2', '2023-09-24 01:29:52', '2023-09-24 01:29:52'),
(6, 'Albertha Kreiger', 'Dayne Jaskolski', 'lacey.conn@example.com', '2023-09-24 01:29:52', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Kurtis Jones DDS', '27', '27', 'wHz9k4EcBp', '2023-09-24 01:29:52', '2023-09-24 01:29:52'),
(7, 'Novella Jakubowski', 'Raul Gottlieb', 'brittany.dickens@example.org', '2023-09-24 01:29:52', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Mrs. Fannie Funk V', '2', '17', 'vIZpq7GWbC', '2023-09-24 01:29:52', '2023-09-24 01:29:52'),
(8, 'Brisa Raynor', 'Mac Ward Jr.', 'icollier@example.net', '2023-09-24 01:29:52', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Prof. Chris Stark PhD', '50', '29', 'pYHZ4VZyOQ', '2023-09-24 01:29:52', '2023-09-24 01:29:52'),
(9, 'Miss Alison Bosco V', 'Tobin King I', 'cspencer@example.com', '2023-09-24 01:29:52', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Dorothy Farrell', '18', '26', '8NEEIQ8ykD', '2023-09-24 01:29:52', '2023-09-24 01:29:52'),
(10, 'Jameson Keeling', 'Nyah Heidenreich', 'baumbach.casper@example.com', '2023-09-24 01:29:52', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Ms. Hermina Beatty', '44', '42', 'EGYwPVfujC', '2023-09-24 01:29:52', '2023-09-24 01:29:52'),
(11, 'bobo', NULL, 'bobo@gmail.com', NULL, '$2y$10$VyiMvjDcEQfUoebcHX.HfOiJHcQJ9ZyYIrmfnRIj6ky5Y.qx0M.hK', NULL, NULL, NULL, NULL, '2023-09-27 03:03:40', '2023-09-27 03:03:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
