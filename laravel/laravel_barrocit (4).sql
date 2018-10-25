-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 11 okt 2018 om 15:28
-- Serverversie: 10.1.30-MariaDB
-- PHP-versie: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_barrocit`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` int(11) NOT NULL,
  `residence` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel_number` int(11) NOT NULL,
  `fax_number` int(11) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `customers`
--

INSERT INTO `customers` (`id`, `name`, `last_name`, `address`, `zipcode`, `residence`, `tel_number`, `fax_number`, `email`, `company`, `created_at`, `updated_at`) VALUES
(1, 'Frank', 'van Beek', 'blauwhoefsedreef22', 4986, 'breda', 648632597, 11111, 'frank@radius.com', 'Radius', NULL, NULL),
(2, 'Dominic', 'van Beaten', 'teststraat1', 8523, 'breda', 68547913, 63145287, 'dominic@radius.com', 'radius', NULL, NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `developments`
--

CREATE TABLE `developments` (
  `id` int(10) UNSIGNED NOT NULL,
  `maintanance_contract` tinyint(1) NOT NULL,
  `open_projects` int(11) NOT NULL,
  `applications` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hardware` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `operating_system` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appointments` int(11) NOT NULL,
  `internal_contact_person` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `developments`
--

INSERT INTO `developments` (`id`, `maintanance_contract`, `open_projects`, `applications`, `hardware`, `operating_system`, `appointments`, `internal_contact_person`, `customer_id`, `created_at`, `updated_at`) VALUES
(1, 0, 3, '3', 'computer', 'windows 10', 2, 'Micheal scofield', 1, NULL, NULL),
(2, 1, 2, '2', 'computer', 'windows 98', 2, 'jason van den heuvel', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `finance`
--

CREATE TABLE `finance` (
  `id` int(10) UNSIGNED NOT NULL,
  `bankrekeningnummer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saldo` int(11) NOT NULL,
  `aantal_facturen` int(11) NOT NULL,
  `omzetbedrag` int(11) NOT NULL,
  `limiet` int(11) NOT NULL,
  `grootboekrekening` int(11) NOT NULL,
  `btw_code` int(11) NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `finance`
--

INSERT INTO `finance` (`id`, `bankrekeningnummer`, `saldo`, `aantal_facturen`, `omzetbedrag`, `limiet`, `grootboekrekening`, `btw_code`, `customer_id`, `created_at`, `updated_at`) VALUES
(1, '123654789', 100000, 3, 2000, 3000, 41869, 123456, 1, NULL, NULL),
(2, '741852963', 50000, 2, 3000, 4000, 123456789, 9635, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_09_25_081533_create_developments_table', 1),
(4, '2018_09_25_081641_create_finance_table', 1),
(5, '2018_09_25_081657_create_sales_table', 1),
(6, '2018_09_25_081813_create_customers_table', 1),
(7, '2018_09_25_081835_create_user_table', 1),
(8, '2018_09_25_081852_create_project_table', 1),
(9, '2018_10_09_072514_create_sales_foreign', 1),
(10, '2018_10_09_072623_create_finance_foreign', 1),
(11, '2018_10_09_072659_create_developments_foreign', 1),
(12, '2018_10_09_072807_create_customers_foreign', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `project`
--

CREATE TABLE `project` (
  `id` int(10) UNSIGNED NOT NULL,
  `ongoing` tinyint(1) NOT NULL,
  `done` tinyint(1) NOT NULL,
  `costumer_number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `sales`
--

CREATE TABLE `sales` (
  `id` int(10) UNSIGNED NOT NULL,
  `offer_numbers` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `offer_status` int(11) NOT NULL,
  `prospect` tinyint(1) NOT NULL,
  `date_of_action` datetime NOT NULL,
  `last_contact_data` datetime NOT NULL,
  `next_action` datetime NOT NULL,
  `sale_percentage` int(11) NOT NULL,
  `creditworthy` tinyint(1) NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `sales`
--

INSERT INTO `sales` (`id`, `offer_numbers`, `offer_status`, `prospect`, `date_of_action`, `last_contact_data`, `next_action`, `sale_percentage`, `creditworthy`, `customer_id`, `created_at`, `updated_at`) VALUES
(3, '2', 1, 1, '2018-10-01 00:00:00', '2018-10-02 00:00:00', '2018-10-10 00:00:00', 22, 1, 1, NULL, NULL),
(4, '2', 1, 1, '2018-10-01 00:00:00', '2018-10-03 00:00:00', '2018-10-05 00:00:00', 23, 1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, NULL, 'Sales', 'Sales@barroc.it', NULL, '$2y$10$qwIBsgsxKfmdIF7TFQN8gutTh20ODb.Ol3LwD.p8GNCmFyj2VlNku', NULL, '2018-10-11 10:16:06', '2018-10-11 10:16:06');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `developments`
--
ALTER TABLE `developments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `developments_customer_id_foreign` (`customer_id`);

--
-- Indexen voor tabel `finance`
--
ALTER TABLE `finance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `finance_customer_id_foreign` (`customer_id`);

--
-- Indexen voor tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexen voor tabel `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sales_customer_id_foreign` (`customer_id`);

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `developments`
--
ALTER TABLE `developments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `finance`
--
ALTER TABLE `finance`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT voor een tabel `project`
--
ALTER TABLE `project`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `developments`
--
ALTER TABLE `developments`
  ADD CONSTRAINT `developments_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Beperkingen voor tabel `finance`
--
ALTER TABLE `finance`
  ADD CONSTRAINT `finance_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Beperkingen voor tabel `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
