-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 24 Apr 2024 pada 07.45
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_ti`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '00create_personal_access_tokens_table', 1),
(2, '01create_users_table', 1),
(3, '02create_password_resets_table', 1),
(4, '03create_failed_jobs_table', 1),
(5, '05create_pasiens_table', 1),
(6, '06create_tanda_vitals_table', 1),
(7, '07add_colum_table_pasiens', 1),
(8, '08add_colum_table_tanda_vitals', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasiens`
--

CREATE TABLE `pasiens` (
  `noreg` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_tlp` varchar(255) NOT NULL,
  `tv_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pasiens`
--

INSERT INTO `pasiens` (`noreg`, `nama`, `jenis_kelamin`, `alamat`, `no_tlp`, `tv_id`, `created_at`, `updated_at`) VALUES
(360227, 'Myah Lowe DVM', 'Perempuan', '834 Schultz Pass Apt. 928Martaside, WI 82784', '9759559', NULL, '2024-03-03 19:22:23', '2024-03-03 19:57:19'),
(4068695, 'Winona Lockman', 'Perempuan', '742 Goyette Isle\nJoeshire, FL 99185', '4829215', NULL, '2024-03-03 19:22:23', '2024-03-03 19:22:23'),
(4254279, 'Suzanne Green', 'Perempuan', '99330 Patience Rapid\nDietrichmouth, MS 22464', '3674276', NULL, '2024-03-03 19:22:23', '2024-03-03 19:22:23'),
(5344500, 'Misty Breitenberg', 'Perempuan', '5272 Brionna Courts\nSouth Edisonport, CO 40028', '5571928', NULL, '2024-03-03 19:22:23', '2024-03-03 19:22:23'),
(6059213, 'Lesly Walker', 'Perempuan', '5351 Doyle Plain Apt. 226\nWaelchiberg, NJ 41484-5204', '6465457', NULL, '2024-03-03 19:22:23', '2024-03-03 19:22:23'),
(6213328, 'Ms. Belle Walsh III', 'Perempuan', '6993 Nathen Plaza\nKaitlinstad, MO 26564-7009', '1648190', NULL, '2024-03-03 19:22:23', '2024-03-03 19:22:23'),
(6658250, 'Kaleigh Larson', 'Laki-laki', '60595 Judson Hills\nEast Groverborough, WV 24419-9450', '7329037', NULL, '2024-03-03 19:22:23', '2024-03-03 19:22:23'),
(7562263, 'Sierra Stiedemann', 'Perempuan', '2995 Rhianna Lane\nSouth Deonbury, LA 08686-4185', '9943457', NULL, '2024-03-03 19:22:23', '2024-03-03 19:22:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('alisyakamillia@gmail.com', '$2y$10$NYq0K4Sd8nAAiumBEl/A7.v6L7tpRgIYHusFGJmfCZ0/0EGH9FLWa', '2024-03-03 19:24:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `tanda_vitals`
--

CREATE TABLE `tanda_vitals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tinggi_badan` int(11) NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `tekanan_darah` int(11) NOT NULL,
  `nadi` int(11) NOT NULL,
  `pernapasan` int(11) NOT NULL,
  `suhu` int(11) NOT NULL,
  `pasien_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tanda_vitals`
--

INSERT INTO `tanda_vitals` (`id`, `tinggi_badan`, `berat_badan`, `tekanan_darah`, `nadi`, `pernapasan`, `suhu`, `pasien_id`, `created_at`, `updated_at`) VALUES
(1, 1232, 12, 132, 2132, 1324, 123, 7562263, '2024-03-03 19:23:39', '2024-03-03 19:23:39'),
(2, 150, 40, 100, 67, 25, 30, 360227, '2024-03-03 19:56:17', '2024-03-03 19:56:17'),
(3, 2313, 213, 231, 231, 231, 231, 360227, '2024-03-04 19:41:05', '2024-03-04 19:41:05'),
(4, 2313, 321, 231, 321, 321, 231, 360227, '2024-03-04 19:42:12', '2024-03-04 19:42:12'),
(5, 2313, 321, 213, 231, 321, 231, 4068695, '2024-03-04 19:42:59', '2024-03-04 19:42:59'),
(6, 175, 54, 120, 120, 120, 36, 360227, '2024-03-04 19:56:49', '2024-03-04 19:56:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'alisya', 'alisyakamillia@gmail.com', NULL, '$2y$10$okwrWTCRfZEZKo1KisQiDeOOUZrjLctRSYHKVqVIxJQSUdnK5BhiW', NULL, '2024-03-03 19:23:12', '2024-03-03 19:23:12'),
(2, 'alisya', 'ashaffareldwi@gmail.com', NULL, '$2y$10$P31D4KFfbD2PicvqNLX7Nujj/OJhJkigcZ2PyK1dQzTzX.arkiE0O', NULL, '2024-03-03 19:55:07', '2024-03-03 19:55:07'),
(3, 'Muhammad Alif Mauladi', 'keren@gmail.com', NULL, '$2y$10$ZMlrB7KqWgdQ5i8/XqnmFu21wgQpP5OZezjn8zccKv1huDqvSZt9G', NULL, '2024-03-04 19:40:54', '2024-03-04 19:40:54');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pasiens`
--
ALTER TABLE `pasiens`
  ADD PRIMARY KEY (`noreg`),
  ADD KEY `pasiens_tv_id_foreign` (`tv_id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `tanda_vitals`
--
ALTER TABLE `tanda_vitals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tanda_vitals_pasien_id_foreign` (`pasien_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pasiens`
--
ALTER TABLE `pasiens`
  MODIFY `noreg` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7562264;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tanda_vitals`
--
ALTER TABLE `tanda_vitals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pasiens`
--
ALTER TABLE `pasiens`
  ADD CONSTRAINT `pasiens_tv_id_foreign` FOREIGN KEY (`tv_id`) REFERENCES `tanda_vitals` (`id`);

--
-- Ketidakleluasaan untuk tabel `tanda_vitals`
--
ALTER TABLE `tanda_vitals`
  ADD CONSTRAINT `tanda_vitals_pasien_id_foreign` FOREIGN KEY (`pasien_id`) REFERENCES `pasiens` (`noreg`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
