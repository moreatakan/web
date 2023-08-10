-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Agu 2023 pada 08.52
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dpmptsp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categoryizin`
--

CREATE TABLE `categoryizin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namakategori` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categoryizin`
--

INSERT INTO `categoryizin` (`id`, `namakategori`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Izin Kesehatan', 'izin-kesehatan', '2023-08-08 04:48:07', '2023-08-08 04:48:07'),
(2, 'Izin Usaha', 'izin-usaha', '2023-08-08 04:48:14', '2023-08-08 04:48:14');

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
-- Struktur dari tabel `izin`
--

CREATE TABLE `izin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categoryizin_id` bigint(20) UNSIGNED NOT NULL,
  `namaizin` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `izin`
--

INSERT INTO `izin` (`id`, `categoryizin_id`, `namaizin`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'Izin Praktek Dokter', 'izin-praktek-dokter', '2023-08-08 04:48:29', '2023-08-08 04:48:29'),
(2, 1, 'Izin Praktek Bidan', 'izin-praktek-bidan', '2023-08-08 04:48:41', '2023-08-08 04:48:41'),
(3, 2, 'Izin usaha minuman ringan', 'izin-usaha-minuman-ringan', '2023-08-08 04:49:09', '2023-08-08 04:49:09');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_19_073156_create_posts_table', 1),
(6, '2023_07_10_073338_create_slides_table', 1),
(7, '2023_07_26_092458_create_izin_table', 1),
(8, '2023_07_27_004152_create_categoryizin_table', 1),
(9, '2023_07_31_094401_create_standarpelayanans_table', 1),
(10, '2023_08_08_013718_create_spelayanans_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `excerpt` text NOT NULL,
  `body` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `created_at`, `updated_at`, `judul`, `slug`, `excerpt`, `body`, `image`, `published_at`) VALUES
(1, 1, '2023-08-09 19:13:47', '2023-08-09 19:13:47', 'DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU (DPMPTSP)', 'dinas-penanaman-modal-dan-pelayanan-terpadu-satu-pintu-dpmptsp', 'DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU (DPMPTSP) KABUPATEN SAROLANGUN MERUPAKAN OPD PEMBANTU KEPALA DAERAH UNTUK PENYELENGGARAAN PEMERINTAH DAERAH BIDANG PELAYANAN PUBLIK YANG DIBERI K...', '<div>DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU (DPMPTSP) KABUPATEN SAROLANGUN MERUPAKAN OPD PEMBANTU KEPALA DAERAH UNTUK PENYELENGGARAAN PEMERINTAH DAERAH BIDANG PELAYANAN PUBLIK YANG DIBERI KEWENANGAN UNTUK MENYELENGGARAKAN FUNGSI UTAMA BIDANG PENANAMAN MODAL DAN PERIZINAN DI DAERAH. OPD INI PERTAMA KALI DIBENTUK BERDASARKAN PERATURAN DAERAH KABUPATEN SAROLANGUN NOMOR 04 TAHUN 2008 TENTANG SUSUNAN ORGANISASI DAN TATA KERJA LEMBAGA TEKNIS DAERAH KABUPATEN SAROLANGUN TANGGAL 5 MEI 2008 YANG PADA SAAT ITU BERNAMA KANTOR PELAYANAN PERIZINAN TERPADU SATU PINTU (KPPTSP).<br><br></div><div>Melalui Peraturan Daerah Kab. Sarolangun Nomor 08 Tahun 2009 tanggal 26 Agustus 2009 tentang Perubahan Peraturan Daerah Kabupaten Sarolangun nomor 04 Tahun 2008 tentang Susunan Organisasi dan Tata Kerja Lembaga Teknis Daerah Kabupaten Sarolangun OPD ini berubah menjadi Badan Pelayanan Perizinan Terpadu Satu Pintu yang memiliki empat bidang tanpa Eselon IV yaitu a) Bidang Pendataan dan Penetapan, b) Bidang Pelayanan Perizinan, c) Bidang Penyuluhan dan d) Bidang Pengendalian dan Pelaporan.<br><br></div><div>Selanjutnya pada tanggal 12 Oktober 2016 melalui Peraturan Daerah Kab. Sarolangun Nomor 5 Tahun 2016 tentang Pembentukan dan Susunan Perangkat Daerah maka Organisasi Perangkat Daerah ini bernama Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu (DPMPTSP), Tipe C terdiri Kepala Dinas, Sekretariat dan 4 (empat) bidang, yang meliputi 2 (dua) bidang untuk melaksanakan fungsi penanaman modal dan 2 (dua) bidang untuk melaksanakan fungsi pelayanan perizinan Kepala Dinas ...<br><br></div><div><br></div>', 'posts-images/WlecUV9faFDMD77JDDhvYtwpJ9vT0LKVcHnAqEv1.png', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_slide` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `slides`
--

INSERT INTO `slides` (`id`, `judul_slide`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'slide 1', 'slider-images/OiL3m8l9PUPiaLPFNF3cpu1aYttKsOOkPdxdafEM.jpg', 1, '2023-08-09 19:10:31', '2023-08-09 19:10:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `spelayanan`
--

CREATE TABLE `spelayanan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `izin_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `persyaratan` text NOT NULL,
  `file` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `standarpelayanan`
--

CREATE TABLE `standarpelayanan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `izin_id` bigint(20) UNSIGNED NOT NULL,
  `persyaratan` text NOT NULL,
  `namafile` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hidayah', 'rhidayah602@gmail.com', NULL, '$2y$10$VZ0AmQTtkDAZOmO5C46ZV.2iXH952lrpd8g9Qjf1AWhg0AX3mIViy', 0, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categoryizin`
--
ALTER TABLE `categoryizin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `izin`
--
ALTER TABLE `izin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `izin_namaizin_unique` (`namaizin`),
  ADD UNIQUE KEY `izin_slug_unique` (`slug`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_judul_unique` (`judul`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indeks untuk tabel `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `spelayanan`
--
ALTER TABLE `spelayanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `standarpelayanan`
--
ALTER TABLE `standarpelayanan`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `categoryizin`
--
ALTER TABLE `categoryizin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `izin`
--
ALTER TABLE `izin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `spelayanan`
--
ALTER TABLE `spelayanan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `standarpelayanan`
--
ALTER TABLE `standarpelayanan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
