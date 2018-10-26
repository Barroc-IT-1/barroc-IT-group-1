-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 26 okt 2018 om 11:33
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
(1, 'Frank', 'van Beek', '1234ND', 1234, 'Breda', 123456, 123456, 'test@test.test', 'Barroc', '2018-10-02 22:00:00', '2018-10-18 22:00:00'),
(2, 'testvoornaam1', 'testachternaam1', 'teststraat2', 1111, 'teststad', 11111, 11111, 'test@test.test.test', 'barroc', NULL, NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `developments`
--

CREATE TABLE `developments` (
  `id` int(10) UNSIGNED NOT NULL,
  `maintanance_contract` tinyint(1) DEFAULT '1',
  `open_projects` int(11) DEFAULT '1',
  `applications` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `hardware` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'Computer',
  `operating_system` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'Windows 10',
  `appointments` int(11) DEFAULT '1',
  `internal_contact_person` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'testpersoon',
  `customer_id` int(10) UNSIGNED DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `developments`
--

INSERT INTO `developments` (`id`, `maintanance_contract`, `open_projects`, `applications`, `hardware`, `operating_system`, `appointments`, `internal_contact_person`, `customer_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '1', '1', '1', 1, '1', 1, '2018-10-02 22:00:00', '2018-10-26 07:19:17');

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
(1, '123456', 10000, 2, 4000, 3000, 465123, 9635, 1, '2018-10-01 22:00:00', '2018-10-04 22:00:00');

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
(12, '2018_10_09_072807_create_customers_foreign', 1),
(13, '2018_10_26_075612_create_users_foreign', 1);

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
  `customer_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `project`
--

INSERT INTO `project` (`id`, `ongoing`, `done`, `costumer_number`, `customer_id`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 133, 1, '2018-10-02 22:00:00', '2018-10-10 22:00:00');

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
(1, '10', 1, 1, '2018-10-02 00:00:00', '2018-10-04 00:00:00', '2018-10-26 00:00:00', 12, 1, 1, '2018-10-09 22:00:00', '2018-10-26 22:00:00');

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
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `sales` tinyint(1) NOT NULL DEFAULT '0',
  `finance` tinyint(1) NOT NULL DEFAULT '0',
  `development` tinyint(1) NOT NULL DEFAULT '0',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` int(10) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `name`, `admin`, `sales`, `finance`, `development`, `email`, `email_verified_at`, `password`, `customer_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sales', 0, 1, 0, 0, 'sales@barroc.it', NULL, '$2y$10$jyjksOeU4mUvmMHIidpXDubS4JdhSD5oFRziJwYgpPi0KqPS7jBYS', 1, 'g1BQHw9c6uO3opSMznkzMEKgalH3nTxNEWaxhnqFLEa9zs0GrQj2DKXKszn0', '2018-10-26 06:18:13', '2018-10-26 06:18:13'),
(2, 'Finance', 0, 0, 1, 0, 'finance@barroc.it', NULL, '$2y$10$NvSvlvXBCb/LZAA7iID8je5Pb5CaVQhs7.ywZGnfLkjmKnT4M8VBi', NULL, 'QrzSIf703UTwUfMChTh5tjRnh1KzG4lcOyGvwpqeQ0OTiXpaWL3QJMUYdDka', '2018-10-26 07:17:01', '2018-10-26 07:17:01'),
(3, 'Development', 0, 0, 0, 1, 'development@barroc.it', NULL, '$2y$10$/a0dDYvqSQW4u73IrJ/1Gesd2phPeXvr/oNILooVi72zs8bzhrJa6', NULL, 'gUZNCxsdP7WYTonBtw0E4YSFGzpxRljVeI2Du5VJHm6DjtG3KkdARci7vTzU', '2018-10-26 07:18:06', '2018-10-26 07:18:06');

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
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_customer_id_foreign` (`customer_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `finance`
--
ALTER TABLE `finance`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT voor een tabel `project`
--
ALTER TABLE `project`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `developments`
--
ALTER TABLE `developments`
  ADD CONSTRAINT `developments_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE;

--
-- Beperkingen voor tabel `finance`
--
ALTER TABLE `finance`
  ADD CONSTRAINT `finance_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE;

--
-- Beperkingen voor tabel `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE;

--
-- Beperkingen voor tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
