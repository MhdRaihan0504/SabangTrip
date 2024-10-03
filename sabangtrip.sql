-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jun 2024 pada 07.29
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sabangtrip`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `discover`
--

CREATE TABLE `discover` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `discover`
--

INSERT INTO `discover` (`id`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Tugu Kilometer 0 Indonesia', 'images/1717648610.png', 'Tugu Kilometer Nol Indonesia adalah sebuah monumen yang terletak di Sabang, Pulau Weh, Provinsi Aceh. Monumen ini menandai titik nol kilometer untuk Indonesia, yang berarti titik awal perhitungan jarak di seluruh wilayah Indonesia dimulai dari sini. Berikut adalah deskripsi panjang mengenai Tugu Kilometer Nol Indonesia di Sabang:\r\n\r\nTugu ini terletak di ujung barat laut Pulau Weh, sekitar 29 kilometer dari pusat Kota Sabang. Untuk mencapai lokasi ini, pengunjung bisa menggunakan kendaraan pribadi atau angkutan umum dari Kota Sabang. Perjalanan ke sana menawarkan pemandangan alam yang indah, termasuk hutan tropis dan pantai-pantai eksotis.\r\n\r\nPembangunan Tugu Kilometer Nol dimulai pada tahun 1997 dan diresmikan oleh Presiden Indonesia saat itu, Soeharto, pada tahun 1997. Monumen ini dibangun sebagai simbol kebanggaan nasional dan untuk menandai titik geografis penting yang merupakan ujung barat dari seluruh wilayah Nusantara.', '2024-06-05 21:36:50', '2024-06-05 21:36:50'),
(2, 'Dermaga Teupin Layeun', 'images/1717648703.png', 'Dermaga Teupin Layeun adalah sebuah dermaga yang terletak di Desa Iboih, Kecamatan Sukakarya, Kota Sabang, Pulau Weh, Provinsi Aceh. Dermaga ini merupakan salah satu titik akses utama bagi wisatawan yang ingin menjelajahi keindahan alam bawah laut dan pantai-pantai eksotis di sekitar Pulau Weh. Berikut adalah deskripsi panjang mengenai Dermaga Teupin Layeun:\r\n\r\nDermaga Teupin Layeun terletak di bagian barat Pulau Weh, tepatnya di Desa Iboih yang terkenal dengan keindahan pantainya. Lokasinya dapat dicapai dengan perjalanan darat sekitar 30 menit dari pusat Kota Sabang. Pengunjung dapat menggunakan kendaraan pribadi, taksi, atau angkutan umum untuk mencapai dermaga ini. Jalan menuju dermaga menawarkan pemandangan alam yang hijau dan menenangkan.\r\n\r\nDermaga Teupin Layeun dilengkapi dengan fasilitas yang memadai untuk kenyamanan pengunjung. Terdapat area parkir yang luas, ruang tunggu, toilet, dan beberapa warung makan yang menjual makanan ringan dan minuman. Dermaga ini juga memiliki tempat penyewaan peralatan snorkeling dan diving bagi wisatawan yang ingin menjelajahi keindahan bawah laut di sekitar Pulau Weh.', '2024-06-05 21:38:23', '2024-06-05 21:38:23'),
(3, 'Karang Batik, Iboih', 'images/1717648761.png', 'Karang Batik adalah salah satu spot menyelam dan snorkeling yang terkenal di kawasan Iboih, Pulau Weh, Provinsi Aceh. Terkenal dengan keindahan terumbu karangnya yang unik, Karang Batik menjadi destinasi favorit bagi penyelam dan pecinta alam bawah laut. Berikut adalah deskripsi panjang mengenai Karang Batik di Iboih:\r\n\r\nKarang Batik terletak di perairan sekitar Desa Iboih, yang dikenal sebagai salah satu destinasi wisata utama di Pulau Weh. Iboih dapat diakses melalui perjalanan darat sekitar 30-40 menit dari pusat Kota Sabang. Setelah tiba di Iboih, pengunjung dapat menyewa perahu atau menggunakan jasa penyelaman lokal untuk mencapai lokasi Karang Batik yang berada tidak jauh dari pantai.\r\n\r\nKarang Batik mendapatkan namanya dari pola unik terumbu karangnya yang menyerupai motif batik, dengan berbagai warna dan bentuk yang memukau. Terumbu karang di sini tumbuh subur dan menciptakan habitat bagi berbagai spesies ikan tropis, moluska, dan biota laut lainnya. Kombinasi warna-warni terumbu karang dan ikan yang berenang di sekitarnya memberikan pemandangan bawah laut yang spektakuler dan tak terlupakan.', '2024-06-05 21:39:21', '2024-06-05 21:39:21'),
(4, 'Ujong Karang', 'images/1717650938.png', 'Ujong Karang adalah salah satu destinasi wisata yang terletak di Pulau Weh, Sabang, Provinsi Aceh. Tempat ini dikenal dengan keindahan alamnya yang memukau, terutama pemandangan laut dan formasi batu karangnya yang spektakuler. Berikut adalah deskripsi lengkap tentang Ujong Karang:\r\n\r\nUjong Karang terletak di ujung barat Pulau Weh, di Kota Sabang, Aceh. Untuk mencapai Ujong Karang, wisatawan bisa melakukan perjalanan darat dari pusat Kota Sabang dengan menggunakan kendaraan pribadi atau angkutan umum. Perjalanan ini menawarkan pemandangan alam yang menakjubkan, melewati hutan tropis dan pantai-pantai indah.\r\n\r\nUjong Karang terkenal dengan pemandangan laut yang luas dan formasi batu karang yang unik. Nama \"Ujong Karang\" sendiri berarti \"Ujung Karang\" dalam bahasa Aceh, yang mencerminkan lokasi ini sebagai ujung dari sebuah daratan yang dipenuhi batu karang. Formasi karang di sini menciptakan pemandangan yang dramatis dan menakjubkan, terutama saat ombak menghantam batu karang tersebut.', '2024-06-05 22:15:38', '2024-06-05 22:15:38'),
(5, 'Freddies', 'images/1717650992.png', 'Freddies Santai Sumurtiga adalah salah satu tempat penginapan paling populer di Pulau Weh, Sabang, Provinsi Aceh. Tempat ini terkenal dengan suasana yang santai, pemandangan laut yang menakjubkan, dan layanan yang ramah. Berikut adalah deskripsi lengkap tentang Freddies:\r\n\r\nFreddies Santai Sumurtiga terletak di pantai Sumur Tiga, yang berada di sisi timur Pulau Weh. Lokasinya dapat dicapai dengan perjalanan sekitar 15 menit dari pusat Kota Sabang. Penginapan ini mudah diakses melalui perjalanan darat dengan kendaraan pribadi atau taksi lokal.\r\n\r\nFreddies menawarkan berbagai jenis akomodasi yang cocok untuk berbagai anggaran dan kebutuhan wisatawan. Semua kamar dirancang untuk memberikan kenyamanan maksimal dengan pemandangan laut yang indah. Berikut beberapa fasilitas yang ditawarkan:', '2024-06-05 22:16:32', '2024-06-05 22:16:32'),
(6, 'Batu Kapal', 'images/1717651044.png', 'Batu Kapal adalah salah satu destinasi wisata alam yang menarik di Pulau Weh, Sabang, Provinsi Aceh. Tempat ini dikenal dengan formasi batu karangnya yang unik dan pemandangan alam yang menakjubkan. Berikut adalah deskripsi lengkap tentang Batu Kapal:\r\n\r\nBatu Kapal terletak di sisi barat Pulau Weh, tidak jauh dari Pantai Iboih yang terkenal. Untuk mencapai Batu Kapal, wisatawan bisa melakukan perjalanan darat dari pusat Kota Sabang dengan menggunakan kendaraan pribadi atau angkutan umum. Perjalanan ini menawarkan pemandangan alam yang indah, melewati hutan tropis dan pantai-pantai yang eksotis.\r\n\r\nNama \"Batu Kapal\" berasal dari formasi batu karang besar yang menyerupai bentuk kapal. Formasi batu ini terbentuk secara alami akibat erosi dan aktivitas geologi selama ribuan tahun. Pemandangan di sekitar Batu Kapal sangat memukau, dengan air laut yang jernih berwarna biru kehijauan dan hutan tropis yang rimbun.', '2024-06-05 22:17:24', '2024-06-05 22:17:24'),
(7, 'Pulau Rubiah', 'images/1717651079.png', 'Pulau Rubiah adalah salah satu destinasi wisata terkemuka di Pulau Weh, Sabang, Provinsi Aceh. Pulau kecil ini terkenal dengan keindahan alam bawah lautnya, menjadikannya surga bagi para penyelam dan pecinta snorkeling. Berikut adalah deskripsi lengkap tentang Pulau Rubiah:\r\n\r\nLokasi dan Akses\r\nPulau Rubiah terletak di barat laut Pulau Weh, tidak jauh dari Pantai Iboih. Untuk mencapai Pulau Rubiah, wisatawan bisa menggunakan perahu dari Pantai Iboih, yang memakan waktu sekitar 10-15 menit. Perahu-perahu ini biasanya tersedia sepanjang hari dan menawarkan tarif yang terjangkau.\r\n\r\nKeindahan dan Keunikan\r\nPulau Rubiah dinamai berdasarkan nama seorang pahlawan Aceh, Cut Nyak Rubiah, yang konon dimakamkan di pulau ini. Pulau ini dikenal dengan air lautnya yang jernih, terumbu karang yang sehat, dan keanekaragaman hayati laut yang menakjubkan.', '2024-06-05 22:17:59', '2024-06-05 22:17:59'),
(8, 'Air Terjun Pria', 'images/1717651123.png', 'Air Terjun Pria adalah sebuah air terjun yang terletak di daerah X, dengan ketinggian sekitar 50 meter. Air terjun ini dikelilingi oleh hutan tropis yang lebat dan pemandangan alam yang memukau. Namanya mungkin berasal dari karakteristiknya yang kuat dan gagah, dengan aliran air yang deras dan gemuruh yang mengingatkan pada kekuatan alam. Di sekitar air terjun, seringkali Anda dapat menemukan flora dan fauna endemik yang menambah keindahan dan keunikan tempat ini. Pengunjung sering datang ke sini untuk menikmati keindahan alam yang masih alami dan untuk merasakan kedamaian serta keajaiban alam yang disajikan oleh Air Terjun Pria.', '2024-06-05 22:18:43', '2024-06-05 22:18:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `etiket`
--

CREATE TABLE `etiket` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(255) NOT NULL,
  `occupant` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending',
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_05_12_164804_create_discover_table', 1),
(5, '2024_05_19_152733_create_etiket_table', 1),
(6, '2024_05_19_153025_create_payment_table', 1),
(7, '2024_06_05_175856_create_testimonial_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `payment`
--

CREATE TABLE `payment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `etiket_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('zJKRDmmgwE9H1bKo4vc6sGyOQVpGKyc0B9sGbDpH', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibUNISVJhdEVSdzd5Y21RazVDeUJrNnc3SnZRakJpSENmZnh0NkJyQSI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyNzoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1717651639);

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimonial`
--

CREATE TABLE `testimonial` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `rating`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Meutia Aini', 5, 'bagus bangett, pesan tiket ke sabang jadi lebih mudah dan cepat', '2021-07-31 17:00:00', NULL),
(2, 'Rizki Julina', 5, 'Pengalaman dengan Sabang Trip sangat bagus. Situs webnya informatif dan mudah digunakan. Pilihan paket wisatanya menarik', '2021-08-01 17:00:00', NULL),
(3, 'Iffatun', 3, 'bagus, memudahkan dalam memesan tiket', '2021-08-02 17:00:00', NULL),
(4, 'Nazwa Salsabila', 5, 'Situs web ini memiliki banyak opsi paket wisata yang menarik dan harga yang terjangkau. Saya tidak sabar untuk melakukan perjalanan lagi dengan Sabang Trip!!!', '2021-08-03 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'user', 'tes@gmail.com', '$2y$12$l0Pz74HaKkLfvVsDojU1IeaJYVSuajPTNQF0oAOJ8NXqnQs0vEtr6', 'user', NULL, NULL),
(2, 'admin', 'admin@gmail.com', '$2y$12$0GJdw54vqZgBXC/yHuRklOTzNvARWhyjN4w8jhARFJqzeEf48jW92', 'admin', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `discover`
--
ALTER TABLE `discover`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `etiket`
--
ALTER TABLE `etiket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `etiket_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payment_user_id_foreign` (`user_id`),
  ADD KEY `payment_etiket_id_foreign` (`etiket_id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `testimonial`
--
ALTER TABLE `testimonial`
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
-- AUTO_INCREMENT untuk tabel `discover`
--
ALTER TABLE `discover`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `etiket`
--
ALTER TABLE `etiket`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `payment`
--
ALTER TABLE `payment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `etiket`
--
ALTER TABLE `etiket`
  ADD CONSTRAINT `etiket_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_etiket_id_foreign` FOREIGN KEY (`etiket_id`) REFERENCES `etiket` (`id`),
  ADD CONSTRAINT `payment_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
