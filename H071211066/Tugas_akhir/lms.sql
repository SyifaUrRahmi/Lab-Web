-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 07:25 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `absens`
--

CREATE TABLE `absens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kelas_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `absens`
--

INSERT INTO `absens` (`id`, `kelas_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(2, 2, '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(3, 3, '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(4, 4, '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(5, 5, '2022-12-15 01:01:48', '2022-12-15 01:01:48');

-- --------------------------------------------------------

--
-- Table structure for table `dosens`
--

CREATE TABLE `dosens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nama_dosen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dosens`
--

INSERT INTO `dosens` (`id`, `user_id`, `nama_dosen`, `nip`, `alamat`, `no_telp`, `created_at`, `updated_at`) VALUES
(1, 2, 'Supriadi', '199101042014032014', '-', '-', '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(2, 3, 'Vikyani', '199001042014032014', '-', '-', '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(3, 4, 'Marnasiah', '198701042014032014', '-', '-', '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(4, 5, 'Kasmawati', '198001042014032014', '-', '-', '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(5, 6, 'Aisyah Az-zikra', '200301042014032022', '-', '-', '2022-12-15 01:01:48', '2022-12-15 01:01:48');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `matakuliah_id` bigint(20) UNSIGNED NOT NULL,
  `nama_kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `matakuliah_id`, `nama_kelas`, `deskripsi_kelas`, `created_at`, `updated_at`) VALUES
(1, 1, 'Pemrograman Web B', 'Kelas ini untuk mahasiswa yang mengambil matakuliah Pemrograman Web dan berada di kelas B', '2022-12-15 01:01:48', '2022-12-15 08:01:54'),
(2, 1, 'Pemrograman Web A', 'none', '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(3, 3, 'Struktur Data A', 'none', '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(4, 2, 'Sistem Basis Data B', 'Kelas ini untuk mahasiswa yang mengambil matakuliah Sistem Basis Data dan berada di kelas B', '2022-12-15 01:01:48', '2022-12-15 08:02:56'),
(5, 2, 'Sistem Basis Data A', 'none', '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(6, 1, 'Pemrograman Web C', 'Kelas ini untuk kelas Pemrograman C', '2022-12-15 07:43:35', '2022-12-15 08:00:37');

-- --------------------------------------------------------

--
-- Table structure for table `kelas_dosens`
--

CREATE TABLE `kelas_dosens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kelas_id` bigint(20) UNSIGNED NOT NULL,
  `dosen_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas_dosens`
--

INSERT INTO `kelas_dosens` (`id`, `kelas_id`, `dosen_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(2, 1, 2, '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(3, 2, 4, '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(4, 3, 3, '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(5, 4, 1, '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(6, 5, 5, '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(7, 7, 1, '2022-12-15 06:41:12', '2022-12-15 06:41:12'),
(9, 6, 1, '2022-12-15 07:43:35', '2022-12-15 07:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `kelas_mahasiswas`
--

CREATE TABLE `kelas_mahasiswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kelas_id` bigint(20) UNSIGNED NOT NULL,
  `mahasiswa_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas_mahasiswas`
--

INSERT INTO `kelas_mahasiswas` (`id`, `kelas_id`, `mahasiswa_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(2, 4, 1, '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(3, 1, 3, '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(4, 4, 3, '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(5, 1, 4, '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(6, 4, 4, '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(7, 3, 2, '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(8, 3, 6, '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(9, 2, 5, '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(10, 2, 7, '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(11, 2, 8, '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(12, 5, 5, '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(13, 5, 7, '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(14, 5, 8, '2022-12-15 01:01:48', '2022-12-15 01:01:48');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswas`
--

CREATE TABLE `mahasiswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `angkatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswas`
--

INSERT INTO `mahasiswas` (`id`, `nama`, `nim`, `jenis_kelamin`, `alamat`, `angkatan`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Syifa Ur Rahmi', 'H071211001', 'Perempuan', '-', '2021', 7, '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(2, 'Zakiah Fitri', 'H071201002', 'Perempuan', '-', '2020', 8, '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(3, 'Dzul Fadli', 'H071211003', 'Laki-laki', '-', '2021', 9, '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(4, 'Marlina', 'H071211004', 'Perempuan', '-', '2021', 10, '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(5, 'Syaikul Rajab', 'H071211005', 'Laki-laki', '-', '2021', 11, '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(6, 'Aifa anugerah', 'H071201006', 'Perempuan', '-', '2020', 12, '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(7, 'Ayusnawati', 'H071211007', 'Perempuan', '-', '2021', 13, '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(8, 'Alfian', 'H071211008', 'Laki-laki', '-', '2021', 14, '2022-12-15 01:01:48', '2022-12-15 01:01:48');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliahs`
--

CREATE TABLE `matakuliahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tahunajaran_id` bigint(20) UNSIGNED NOT NULL,
  `nama_matakuliah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_matakuliah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `matakuliahs`
--

INSERT INTO `matakuliahs` (`id`, `tahunajaran_id`, `nama_matakuliah`, `deskripsi_matakuliah`, `created_at`, `updated_at`) VALUES
(1, 1, 'Pemrograman Web', 'none', '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(2, 1, 'Sistem Basis Data', 'none', '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(3, 1, 'Struktur Data', 'none', '2022-12-15 01:01:48', '2022-12-15 01:01:48');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah_dosens`
--

CREATE TABLE `matakuliah_dosens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `matakuliah_id` bigint(20) UNSIGNED NOT NULL,
  `dosen_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `matakuliah_dosens`
--

INSERT INTO `matakuliah_dosens` (`id`, `matakuliah_id`, `dosen_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(2, 1, 2, '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(3, 1, 4, '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(4, 2, 1, '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(5, 2, 5, '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(6, 3, 3, '2022-12-15 01:01:48', '2022-12-15 01:01:48');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_07_053902_create_dosens_table', 1),
(6, '2022_12_07_054522_create_mahasiswas_table', 1),
(7, '2022_12_07_140346_create_matakuliahs_table', 1),
(8, '2022_12_07_141132_create_kelas_table', 1),
(9, '2022_12_08_145450_create_tahun_ajarans_table', 1),
(10, '2022_12_10_090118_create_matakuliah_dosens_table', 1),
(11, '2022_12_12_014937_create_kelas_dosens_table', 1),
(12, '2022_12_13_145240_create_kelas_mahasiswas_table', 1),
(13, '2022_12_14_155849_create_tugas_table', 1),
(14, '2022_12_15_085803_create_absens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tahun_ajarans`
--

CREATE TABLE `tahun_ajarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tahunajaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tahun_ajarans`
--

INSERT INTO `tahun_ajarans` (`id`, `tahunajaran`, `created_at`, `updated_at`) VALUES
(1, '2021/2022', '2022-12-15 01:01:48', '2022-12-15 01:01:48');

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kelas_id` bigint(20) UNSIGNED NOT NULL,
  `dosen_id` bigint(20) UNSIGNED NOT NULL,
  `nama_tugas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_tugas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tugas`
--

INSERT INTO `tugas` (`id`, `kelas_id`, `dosen_id`, `nama_tugas`, `deskripsi_tugas`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Tugas makalah individu', 'Buatlah makalah dengan materi html', '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(2, 4, 1, 'Membuat Database', 'Cari data mahasiswa Mipa angkatan 2016-2022 dan buatlah databasenya! Database berisi mahasiswa, jurusan, dan angkatan.', '2022-12-15 04:40:22', '2022-12-15 04:40:22'),
(3, 4, 1, 'Test', 'okokok', '2022-12-15 04:42:59', '2022-12-15 04:42:59'),
(4, 4, 1, 'test lagi', 'semoga tdk gagal lagi', '2022-12-15 04:45:09', '2022-12-15 04:45:09'),
(6, 6, 1, 'Membuat Profile mahasiswa dengan HTML', 'Buatlah profile masing-masing dengan menggunakan HTML, buat  profilemu sekreatif mungkin bisa dengan menggunakan css', '2022-12-15 08:29:44', '2022-12-15 08:29:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `is_dosen` tinyint(1) NOT NULL DEFAULT 0,
  `is_mahasiswa` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `password`, `username`, `is_admin`, `is_dosen`, `is_mahasiswa`, `created_at`, `updated_at`) VALUES
(1, '$2y$10$bpC6TVI5J.R3XGRvOk1YqO/DCT5I8PNHJtSCvA90PnNfy8WsMuzJK', 'Syifa', 1, 0, 0, '2022-12-15 01:01:47', '2022-12-15 01:01:47'),
(2, '$2y$10$vzhTuKt7Dk7G.wcnr7AP8ul8TYpXumnAX14w3DqkwjEyZlRJM.S8K', '199101042014032014', 0, 1, 0, '2022-12-15 01:01:47', '2022-12-15 01:01:47'),
(3, '$2y$10$TKShBXypE7J4Hudv0GfocuNyJwo/SHL/A6PNlFep/eAiUSnN5Bi1K', '199001042014032014', 0, 1, 0, '2022-12-15 01:01:47', '2022-12-15 01:01:47'),
(4, '$2y$10$bnPOi0x9QH.HP3w0k8yS5.v58U1MfMSbT0Vpgm7lNFRuUXIQeDNCu', '198701042014032014', 0, 1, 0, '2022-12-15 01:01:47', '2022-12-15 01:01:47'),
(5, '$2y$10$hW7bZeeWNS1xKop.z.A6jumWSgg0OOi.1YIu1s6/VulMvo7pdp/uW', '198001042014032014', 0, 1, 0, '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(6, '$2y$10$yhAEpCCpAPSBgH9hCLJ8p.0tztdyyGqkPDpbOl2PaVAUzc2/ATZl2', '200301042014032022', 0, 1, 0, '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(7, '$2y$10$z.Lk6S0NF81zEh539VLJ.utnKEGULzyBrsyCb41O1a.oqHcCHhLru', 'H071211001', 0, 0, 1, '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(8, '$2y$10$FyTM67gzkD7E7Bqm/2QwJ.mm0bTq7I/xbCsxIS.yVR4t2hcV0ikRu', 'H071201002', 0, 0, 1, '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(9, '$2y$10$CY30eyB5KnYUppWaHArQP.5jGOHnT0CZtL6aIXWskxC0fVs9mjlB.', 'H071211003', 0, 0, 1, '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(10, '$2y$10$XbcgGsrg6XK9DsnoZeHbYuTxP/9m7WphyW2frUin/efmZY.cxlC2e', 'H071211004', 0, 0, 1, '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(11, '$2y$10$jsnTOjViIqG4HP86lNRzGuV842jL91l.EcuzqT7iEABXW9RYOccHq', 'H071211005', 0, 0, 1, '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(12, '$2y$10$JihDomst8A3Pd8FsM37el.GfBZigrxaENm5SrJfHtvF9e6Kwce7RG', 'H071201006', 0, 0, 1, '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(13, '$2y$10$M0UbuBns3tAFR9SUMfGECeicQjQR7mz4sr0LL/VJ2.CfvozmCkgue', 'H071211007', 0, 0, 1, '2022-12-15 01:01:48', '2022-12-15 01:01:48'),
(14, '$2y$10$84r4C3pD./mybnYA1o3jPezgRIMJ/sBshz8u/yrWrpeHDm5IY/9/6', 'H071211008', 0, 0, 1, '2022-12-15 01:01:48', '2022-12-15 01:01:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absens`
--
ALTER TABLE `absens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosens`
--
ALTER TABLE `dosens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas_dosens`
--
ALTER TABLE `kelas_dosens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas_mahasiswas`
--
ALTER TABLE `kelas_mahasiswas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswas`
--
ALTER TABLE `mahasiswas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mahasiswas_nim_unique` (`nim`);

--
-- Indexes for table `matakuliahs`
--
ALTER TABLE `matakuliahs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matakuliah_dosens`
--
ALTER TABLE `matakuliah_dosens`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tahun_ajarans`
--
ALTER TABLE `tahun_ajarans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absens`
--
ALTER TABLE `absens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dosens`
--
ALTER TABLE `dosens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kelas_dosens`
--
ALTER TABLE `kelas_dosens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kelas_mahasiswas`
--
ALTER TABLE `kelas_mahasiswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `mahasiswas`
--
ALTER TABLE `mahasiswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `matakuliahs`
--
ALTER TABLE `matakuliahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `matakuliah_dosens`
--
ALTER TABLE `matakuliah_dosens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tahun_ajarans`
--
ALTER TABLE `tahun_ajarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
