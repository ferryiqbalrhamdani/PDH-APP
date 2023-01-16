-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jan 2023 pada 07.03
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pdh`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ket` varchar(128) NOT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `nama`, `ket`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'l', '', 'l', '2023-01-09 20:17:40', '2023-01-09 20:17:40'),
(2, 'p', 'Perempuan', 'p', '2023-01-09 20:17:48', '2023-01-09 20:17:48'),
(3, 'p hijab', 'Perempuan Hijab', 'p-hijab', '2023-01-09 20:17:54', '2023-01-09 20:17:54');

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
-- Struktur dari tabel `itemlogs`
--

CREATE TABLE `itemlogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(100) DEFAULT NULL,
  `kategori` varchar(100) DEFAULT NULL,
  `item_id` varchar(100) DEFAULT NULL,
  `size_id` varchar(100) DEFAULT NULL,
  `size_id_celana` varchar(100) DEFAULT NULL,
  `size_id_topi` varchar(100) DEFAULT NULL,
  `size_id_sepatu` varchar(100) DEFAULT NULL,
  `item_id_sepatu` varchar(100) DEFAULT NULL,
  `item_id_topi` varchar(100) DEFAULT NULL,
  `item_id_celana` varchar(100) DEFAULT NULL,
  `catatanSepatu` varchar(100) DEFAULT NULL,
  `catatanTopi` varchar(100) DEFAULT NULL,
  `catatanCelana` varchar(100) DEFAULT NULL,
  `panjangcelanaTolerant` varchar(100) DEFAULT NULL,
  `lebarbawahTolerant` varchar(100) DEFAULT NULL,
  `lebarpahaTolerant` varchar(100) DEFAULT NULL,
  `lebarpinggulTolerant` varchar(100) DEFAULT NULL,
  `lebarpinggangTolerant` varchar(100) DEFAULT NULL,
  `catatanBaju` varchar(100) DEFAULT NULL,
  `lingkarbadanTolerant` varchar(100) DEFAULT NULL,
  `panjangbajuTolerant` varchar(100) DEFAULT NULL,
  `lingkarpinggangTolerant` varchar(100) DEFAULT NULL,
  `panjanglenganTolerant` varchar(100) DEFAULT NULL,
  `lebarpundakTolerant` varchar(100) DEFAULT NULL,
  `size_baju_id` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `itemlogs`
--

INSERT INTO `itemlogs` (`id`, `user_id`, `kategori`, `item_id`, `size_id`, `size_id_celana`, `size_id_topi`, `size_id_sepatu`, `item_id_sepatu`, `item_id_topi`, `item_id_celana`, `catatanSepatu`, `catatanTopi`, `catatanCelana`, `panjangcelanaTolerant`, `lebarbawahTolerant`, `lebarpahaTolerant`, `lebarpinggulTolerant`, `lebarpinggangTolerant`, `catatanBaju`, `lingkarbadanTolerant`, `panjangbajuTolerant`, `lingkarpinggangTolerant`, `panjanglenganTolerant`, `lebarpundakTolerant`, `size_baju_id`, `created_at`, `updated_at`) VALUES
(27, 'user', 'Laki-laki', '3', '14,5', '28', '54', '38', '4', '5', '1', NULL, NULL, NULL, '0', '0', '0', '0', '0', NULL, '0', '0', '0', '0', '0', NULL, '2023-01-11 20:41:57', '2023-01-11 20:41:57'),
(28, 'user', 'Laki-laki', '3', '14', NULL, NULL, NULL, '4', '5', '1', NULL, NULL, NULL, '0', '0', '0', '0', '0', NULL, '0', '0', '0', '0', '-2', NULL, '2023-01-11 20:50:08', '2023-01-11 20:50:08'),
(29, 'user', 'Laki-laki', '3', '14,5', '29', '54', '44', '4', '5', '1', NULL, NULL, NULL, '0', '0', '0', '0', '0', NULL, '0', '0', '0', '0', '0', NULL, '2023-01-12 00:03:10', '2023-01-12 00:03:10'),
(30, 'user', 'Laki-laki', '3', '14', '28', '56', '47', '4', '5', '1', NULL, NULL, NULL, '-3', '-3', '-2', '-3', '-5', NULL, '5', '4', '6', '2', '1', NULL, '2023-01-12 02:44:31', '2023-01-12 02:44:31'),
(31, 'user', 'Laki-laki', '3', '14,5', '27', '55', '38', '4', '5', '1', NULL, 'jaitannya harus rapi', NULL, '0', '0', '0', '0', '0', NULL, '0', '0', '0', '0', '0', NULL, '2023-01-12 05:58:40', '2023-01-12 05:58:40'),
(32, 'user', 'Laki-laki', '3', '17', '27', '55', '35', '4', '5', '1', NULL, NULL, NULL, '0', '0', '0', '0', '0', NULL, '0', '0', '0', '0', '0', NULL, '2023-01-12 06:02:09', '2023-01-12 06:02:09'),
(33, 'user', 'Laki-laki', '3', '14,5', '41', '55', '48', '4', '5', '1', 'sepatu', 'topi', 'celana', '0', '0', '0', '0', '0', 'baju', '0', '0', '0', '0', '0', NULL, '2023-01-12 18:17:28', '2023-01-12 18:17:28'),
(34, 'user p', 'Perempuan', '3', '14,5', '28', '54', '35', '4', '5', '1', NULL, NULL, NULL, '0', '0', '0', '0', '0', NULL, '0', '0', '0', '0', '0', NULL, '2023-01-12 18:31:13', '2023-01-12 18:31:13'),
(35, 'user p', 'Perempuan Hijab', '3', 's', '27', '55', '47', '4', '5', '1', NULL, NULL, NULL, '0', '0', '0', '0', '0', NULL, '0', '0', '0', '0', '0', NULL, '2023-01-12 18:39:54', '2023-01-12 18:39:54'),
(36, 'user', 'Laki-laki', '3', '14,5', '28', '54', '40', '4', '5', '1', 'sepatu', 'topi', 'celana', '1', '1', '1', '1', '0', 'baju', '0', '0', '0', '0', '0', NULL, '2023-01-12 18:52:37', '2023-01-12 18:52:37'),
(37, 'user p', 'Perempuan', '3', NULL, NULL, NULL, NULL, '4', '5', '1', NULL, NULL, NULL, '0', '0', '0', '0', '0', NULL, '0', '0', '0', '0', '0', NULL, '2023-01-15 18:37:55', '2023-01-15 18:37:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `color` varchar(100) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `items`
--

INSERT INTO `items` (`id`, `nama`, `color`, `slug`, `cover`, `note`, `created_at`, `updated_at`) VALUES
(1, 'celana panjang pria', 'danger', 'celana-panjang-pria', NULL, NULL, '2023-01-09 20:18:15', '2023-01-09 20:18:15'),
(3, 'kemeja pria', 'success', 'kemeja-pria', NULL, NULL, '2023-01-09 20:19:17', '2023-01-09 20:19:17'),
(4, 'sepatu pria', 'info', 'sepatu-pria', NULL, NULL, '2023-01-09 20:19:38', '2023-01-09 20:19:38'),
(5, 'topi pria', 'dark', 'topi-pria', NULL, NULL, '2023-01-09 20:19:55', '2023-01-09 20:19:55'),
(6, 'celana panjang wanita', 'danger', 'celana-panjang-wanita', NULL, NULL, '2023-01-09 20:24:24', '2023-01-09 20:24:24'),
(7, 'kemeja wanita', 'success', 'kemeja-wanita', NULL, NULL, '2023-01-09 20:25:07', '2023-01-09 20:25:07'),
(8, 'topi wanita', 'info', 'topi-wanita', NULL, NULL, '2023-01-09 20:25:43', '2023-01-09 20:25:43'),
(9, 'sepatu wanita', 'dark', 'sepatu-wanita', NULL, NULL, '2023-01-09 20:25:58', '2023-01-09 20:25:58'),
(10, 'rok wanita', 'danger', 'rok-wanita', NULL, NULL, '2023-01-09 20:26:13', '2023-01-09 20:26:13'),
(11, 'celana panjang wanita hijab', 'success', 'celana-panjang-wanita-hijab', NULL, NULL, '2023-01-09 20:26:42', '2023-01-09 20:26:42'),
(13, 'kemeja wanita hijab', 'info', 'kemeja-wanita-hijab', NULL, NULL, '2023-01-09 20:27:39', '2023-01-09 20:27:39'),
(14, 'topi wanita hijab', 'dark', 'topi-wanita-hijab', NULL, NULL, '2023-01-09 20:28:04', '2023-01-09 20:28:04'),
(15, 'sepatu wanita hijab', 'danger', 'sepatu-wanita-hijab', NULL, NULL, '2023-01-09 20:28:19', '2023-01-09 20:28:19'),
(16, 'celana panjang wanita non hijab', 'dark', 'celana-panjang-wanita-non-hijab', NULL, NULL, '2023-01-15 06:00:53', '2023-01-15 06:00:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `item_category`
--

CREATE TABLE `item_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `item_category`
--

INSERT INTO `item_category` (`id`, `item_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(3, 3, 1, NULL, NULL),
(4, 4, 1, NULL, NULL),
(5, 5, 1, NULL, NULL),
(6, 6, 2, NULL, NULL),
(7, 7, 2, NULL, NULL),
(8, 8, 2, NULL, NULL),
(9, 9, 2, NULL, NULL),
(10, 10, 2, NULL, NULL),
(11, 11, 3, NULL, NULL),
(13, 13, 3, NULL, NULL),
(14, 14, 3, NULL, NULL),
(15, 15, 1, NULL, NULL),
(16, 16, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `item_size`
--

CREATE TABLE `item_size` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `size_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `item_size`
--

INSERT INTO `item_size` (`id`, `item_id`, `size_id`, `created_at`, `updated_at`) VALUES
(1, 3, 1, NULL, NULL),
(2, 3, 2, NULL, NULL),
(3, 3, 3, NULL, NULL),
(4, 3, 4, NULL, NULL),
(5, 3, 5, NULL, NULL),
(6, 3, 6, NULL, NULL),
(7, 3, 7, NULL, NULL),
(8, 3, 8, NULL, NULL),
(9, 3, 9, NULL, NULL),
(10, 1, 10, NULL, NULL),
(11, 1, 11, NULL, NULL),
(12, 1, 12, NULL, NULL),
(13, 1, 13, NULL, NULL),
(14, 1, 14, NULL, NULL),
(15, 1, 15, NULL, NULL),
(16, 1, 16, NULL, NULL),
(17, 1, 17, NULL, NULL),
(18, 1, 18, NULL, NULL),
(19, 1, 19, NULL, NULL),
(20, 1, 20, NULL, NULL),
(21, 1, 21, NULL, NULL),
(22, 1, 22, NULL, NULL),
(23, 1, 23, NULL, NULL),
(24, 1, 24, NULL, NULL),
(25, 1, 25, NULL, NULL),
(26, 1, 26, NULL, NULL),
(27, 1, 27, NULL, NULL),
(28, 1, 28, NULL, NULL),
(29, 1, 29, NULL, NULL),
(30, 1, 30, NULL, NULL),
(31, 1, 31, NULL, NULL),
(32, 1, 32, NULL, NULL),
(33, 1, 33, NULL, NULL),
(34, 1, 34, NULL, NULL),
(35, 5, 35, NULL, NULL),
(36, 5, 36, NULL, NULL),
(37, 5, 37, NULL, NULL),
(38, 5, 38, NULL, NULL),
(39, 5, 39, NULL, NULL),
(41, 5, 41, NULL, NULL),
(43, 4, 43, NULL, NULL),
(44, 4, 44, NULL, NULL),
(45, 4, 45, NULL, NULL),
(46, 4, 46, NULL, NULL),
(47, 4, 47, NULL, NULL),
(48, 4, 48, NULL, NULL),
(49, 4, 49, NULL, NULL),
(50, 4, 50, NULL, NULL),
(51, 4, 51, NULL, NULL),
(52, 4, 52, NULL, NULL),
(53, 4, 53, NULL, NULL),
(54, 4, 54, NULL, NULL),
(55, 4, 55, NULL, NULL),
(56, 4, 56, NULL, NULL),
(57, 5, 57, NULL, NULL),
(58, 8, 58, NULL, NULL),
(59, 8, 59, NULL, NULL),
(60, 8, 60, NULL, NULL),
(61, 8, 61, NULL, NULL),
(62, 8, 62, NULL, NULL),
(63, 8, 63, NULL, NULL),
(64, 8, 64, NULL, NULL),
(65, 9, 65, NULL, NULL),
(66, 9, 66, NULL, NULL),
(67, 9, 67, NULL, NULL),
(68, 9, 68, NULL, NULL),
(69, 9, 69, NULL, NULL),
(70, 9, 70, NULL, NULL),
(71, 9, 71, NULL, NULL),
(72, 9, 72, NULL, NULL),
(73, 9, 73, NULL, NULL),
(74, 9, 74, NULL, NULL),
(75, 9, 75, NULL, NULL),
(76, 9, 76, NULL, NULL),
(77, 9, 77, NULL, NULL),
(78, 9, 78, NULL, NULL),
(80, 13, 80, NULL, NULL),
(81, 13, 81, NULL, NULL),
(83, 13, 83, NULL, NULL),
(84, 13, 84, NULL, NULL),
(85, 13, 85, NULL, NULL),
(86, 13, 86, NULL, NULL),
(87, 13, 87, NULL, NULL),
(88, 13, 88, NULL, NULL),
(89, 11, 89, NULL, NULL),
(90, 11, 90, NULL, NULL),
(91, 11, 91, NULL, NULL),
(92, 11, 92, NULL, NULL),
(93, 11, 93, NULL, NULL),
(94, 11, 94, NULL, NULL),
(95, 11, 95, NULL, NULL),
(96, 11, 96, NULL, NULL),
(97, 11, 97, NULL, NULL),
(98, 11, 98, NULL, NULL),
(99, 11, 99, NULL, NULL),
(100, 11, 100, NULL, NULL),
(101, 11, 101, NULL, NULL),
(102, 11, 102, NULL, NULL),
(103, 11, 103, NULL, NULL),
(104, 14, 104, NULL, NULL),
(105, 14, 105, NULL, NULL),
(106, 14, 106, NULL, NULL),
(107, 14, 107, NULL, NULL),
(108, 14, 108, NULL, NULL),
(109, 14, 109, NULL, NULL),
(110, 14, 110, NULL, NULL),
(111, 14, 111, NULL, NULL),
(114, 15, 114, NULL, NULL),
(115, 15, 115, NULL, NULL),
(116, 15, 116, NULL, NULL),
(117, 15, 117, NULL, NULL),
(118, 15, 118, NULL, NULL),
(119, 15, 119, NULL, NULL),
(120, 15, 120, NULL, NULL),
(121, 15, 121, NULL, NULL),
(122, 15, 122, NULL, NULL),
(123, 15, 123, NULL, NULL),
(124, 15, 124, NULL, NULL),
(125, 7, 125, NULL, NULL),
(126, 7, 126, NULL, NULL),
(127, 7, 127, NULL, NULL),
(128, 7, 128, NULL, NULL),
(129, 7, 129, NULL, NULL),
(130, 7, 130, NULL, NULL),
(131, 7, 131, NULL, NULL),
(132, 7, 132, NULL, NULL),
(133, 7, 133, NULL, NULL),
(134, 16, 134, NULL, NULL),
(135, 16, 135, NULL, NULL),
(136, 16, 136, NULL, NULL),
(137, 16, 137, NULL, NULL),
(138, 16, 138, NULL, NULL),
(139, 16, 139, NULL, NULL),
(140, 16, 140, NULL, NULL),
(141, 16, 141, NULL, NULL),
(142, 16, 142, NULL, NULL),
(143, 16, 143, NULL, NULL),
(144, 16, 144, NULL, NULL),
(145, 16, 145, NULL, NULL),
(146, 16, 146, NULL, NULL),
(147, 16, 147, NULL, NULL),
(148, 16, 148, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `item_tolerant`
--

CREATE TABLE `item_tolerant` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `tolerant_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `logs`
--

CREATE TABLE `logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `tolerant_id` bigint(20) UNSIGNED NOT NULL,
  `size_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `logs`
--

INSERT INTO `logs` (`id`, `user_id`, `item_id`, `tolerant_id`, `size_id`, `created_at`, `updated_at`) VALUES
(3, 1, 1, 1, 1, '2023-01-11 08:21:25', NULL);

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
(5, '2023_01_04_084842_create_roles_table', 1),
(6, '2023_01_04_085304_add_role_id_column_to_users_table', 1),
(7, '2023_01_04_090223_create_categories_table', 1),
(8, '2023_01_04_092142_create_sizes_table', 1),
(9, '2023_01_04_093456_create_tolerant_table', 1),
(10, '2023_01_04_093805_create_items_table', 1),
(11, '2023_01_04_095050_create_item_tolerant_table', 1),
(12, '2023_01_04_095246_create_logs_table', 1),
(13, '2023_01_04_100443_create_item_category_table', 1),
(14, '2023_01_05_070230_create_item_size_table', 1),
(15, '2023_01_06_020243_add_color_column_to_items_table', 1),
(16, '2023_01_06_025527_add_pangkat_column_to_users_table', 1),
(17, '2023_01_09_012132_add_cover_column_to_sizes_table', 1),
(18, '2023_01_09_012250_add_cover_column_to_sizes_table', 1),
(19, '2023_01_09_041039_add_lebar_pinggang_column_to_sizes_table', 1),
(20, '2023_01_09_041746_drop_lingkar_kepala_and_ukuran_kaki_from_sizes_table', 1),
(21, '2023_01_10_040920_add_size_id_column_to_logs_table', 2),
(22, '2023_01_11_082823_create_itemlogs_table', 3),
(23, '2023_01_11_085538_drop_tolerant_id_from_itemlogs_table', 4),
(24, '2023_01_11_085736_add_tolerant_column_to_itemlogs_table', 5),
(25, '2023_01_11_094619_add_tolerant_column_to_itemlogs_table', 6),
(26, '2023_01_12_011250_add_size_baju_id_to_itemlogs_table', 7),
(27, '2023_01_12_013853_add_size_id_to_itemlogs_table', 8),
(28, '2023_01_12_031910_add_kategori_to_itemlogs_table', 9),
(29, '2023_01_12_034033_add_slug_to_itemlogs_table', 10),
(30, '2023_01_12_064803_add_size_column_to_sizes_table', 11);

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
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'User', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ukuran_cm` varchar(255) DEFAULT NULL,
  `cover` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `lebar_pundak` varchar(255) DEFAULT NULL,
  `panjang_lengan` varchar(255) DEFAULT NULL,
  `lingkar_pinggang` varchar(255) DEFAULT NULL,
  `panjang_baju` varchar(255) DEFAULT NULL,
  `lingkar_badan` varchar(255) DEFAULT NULL,
  `setengah_lingkaran` varchar(100) DEFAULT NULL,
  `lebar_punggung` varchar(100) DEFAULT NULL,
  `panjang_tangan` varchar(100) DEFAULT NULL,
  `lebar_pinggang` varchar(100) DEFAULT NULL,
  `lebar_pinggul` varchar(255) DEFAULT NULL,
  `lebar_paha` varchar(255) DEFAULT NULL,
  `lebar_bawah` varchar(255) DEFAULT NULL,
  `panjang_celana` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sizes`
--

INSERT INTO `sizes` (`id`, `ukuran_cm`, `cover`, `slug`, `lebar_pundak`, `panjang_lengan`, `lingkar_pinggang`, `panjang_baju`, `lingkar_badan`, `setengah_lingkaran`, `lebar_punggung`, `panjang_tangan`, `lebar_pinggang`, `lebar_pinggul`, `lebar_paha`, `lebar_bawah`, `panjang_celana`, `created_at`, `updated_at`) VALUES
(1, '14', 'img/data-baju/kemeja-pria-TNI-AU-edit-400px/KEMEJA-PRIA-14.jpg', '14', '42', '24', '94', '69', '96', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-09 20:29:36', '2023-01-09 20:29:36'),
(2, '14,5', 'img/data-baju/kemeja-pria-TNI-AU-edit-400px/KEMEJA-PRIA-14.5.jpg', '14-5', '43', '25', '96', '69', '100', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-09 20:30:07', '2023-01-09 20:30:07'),
(3, '15', 'img/data-baju/kemeja-pria-TNI-AU-edit-400px/KEMEJA-PRIA-15.jpg', '15', '44', '26', '98', '70', '104', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-09 20:37:42', '2023-01-09 20:37:42'),
(4, '15,5', 'img/data-baju/kemeja-pria-TNI-AU-edit-400px/KEMEJA-PRIA-15.5.jpg', '15-5', '46', '26', '104', '72', '108', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-09 20:39:06', '2023-01-09 20:39:06'),
(5, '16', 'img/data-baju/kemeja-pria-TNI-AU-edit-400px/KEMEJA-PRIA-16.jpg', '16', '48', '26', '108', '74', '112', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-09 20:39:42', '2023-01-09 20:39:42'),
(6, '16,5', 'img/data-baju/kemeja-pria-TNI-AU-edit-400px/KEMEJA-PRIA-16.5.jpg', '16-5', '50', '27', '112', '74', '116', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-09 20:40:20', '2023-01-09 20:40:20'),
(7, '17', 'img/data-baju/kemeja-pria-TNI-AU-edit-400px/KEMEJA-PRIA-17.jpg', '17', '52', '28', '116', '76', '118', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-09 20:41:10', '2023-01-09 20:41:10'),
(8, '17,5', 'img/data-baju/kemeja-pria-TNI-AU-edit-400px/KEMEJA-PRIA-17.5.jpg', '17-5', '53', '28', '118', '77', '120', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-09 20:41:43', '2023-01-09 20:41:43'),
(9, '18', 'img/data-baju/kemeja-pria-TNI-AU-edit-400px/KEMEJA-PRIA-18.jpg', '18', '54', '29', '120', '78', '122', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-09 20:42:25', '2023-01-09 20:42:25'),
(10, '27', 'img/data-baju/Celana-Pria-TNI-AU-edit-400px/Celana-Panjang-Pria-27.jpg', '27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '34', '39.5', '27', '18.5', '97', '2023-01-09 20:43:17', '2023-01-09 20:43:17'),
(11, '28', 'img/data-baju/Celana-Pria-TNI-AU-edit-400px/Celana-Panjang-Pria-28.jpg', '28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '34.5', '41.5', '28', '19', '98', '2023-01-09 20:43:54', '2023-01-09 20:43:54'),
(12, '29', 'img/data-baju/Celana-Pria-TNI-AU-edit-400px/Celana-Panjang-Pria-29.jpg', '29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '37', '43.5', '29', '19.5', '99', '2023-01-09 22:53:54', '2023-01-09 22:53:54'),
(13, '30', 'img/data-baju/Celana-Pria-TNI-AU-edit-400px/Celana-Panjang-Pria-28.jpg', '30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '38.5', '45.5', '30', '20', '100', '2023-01-09 22:55:51', '2023-01-09 22:55:51'),
(14, '31', 'img/data-baju/Celana-Pria-TNI-AU-edit-400px/Celana-Panjang-Pria-31.jpg', '31', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '40', '47.5', '31', '20.5', '101', '2023-01-09 22:56:24', '2023-01-09 22:56:24'),
(15, '32', 'img/data-baju/Celana-Pria-TNI-AU-edit-400px/Celana-Panjang-Pria-32.jpg', '32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '41.5', '49.5', '32', '21', '102', '2023-01-09 22:56:56', '2023-01-09 22:56:56'),
(16, '33', 'img/data-baju/Celana-Pria-TNI-AU-edit-400px/Celana-Panjang-Pria-33.jpg', '33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '43', '51.5', '33', '21.5', '103', '2023-01-09 22:57:38', '2023-01-09 22:57:38'),
(17, '34', 'img/data-baju/Celana-Pria-TNI-AU-edit-400px/Celana-Panjang-Pria-34.jpg', '34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '44.5', '53.5', '34', '22', '104', '2023-01-09 22:58:12', '2023-01-09 22:58:12'),
(18, '35', 'img/data-baju/Celana-Pria-TNI-AU-edit-400px/Celana-Panjang-Pria-35.jpg', '35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '46', '55.5', '35', '22.5', '104', '2023-01-09 22:58:45', '2023-01-09 22:58:45'),
(19, '36', 'img/data-baju/Celana-Pria-TNI-AU-edit-400px/Celana-Panjang-Pria-36.jpg', '36', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '47.5', '57.5', '36', '23', '105', '2023-01-09 22:59:25', '2023-01-09 22:59:25'),
(20, '37', 'img/data-baju/Celana-Pria-TNI-AU-edit-400px/Celana-Panjang-Pria-37.jpg', '37', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '49', '59.5', '37', '23.5', '105', '2023-01-09 23:00:04', '2023-01-09 23:00:04'),
(21, '38', 'img/data-baju/Celana-Pria-TNI-AU-edit-400px/Celana-Panjang-Pria-38.jpg', '38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '50.5', '61.5', '38', '24', '106', '2023-01-09 23:01:06', '2023-01-09 23:01:06'),
(22, '39', 'img/data-baju/Celana-Pria-TNI-AU-edit-400px/Celana-Panjang-Pria-39.jpg', '39', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '52', '63.5', '39', '24.5', '106', '2023-01-09 23:02:04', '2023-01-09 23:02:04'),
(23, '40', 'img/data-baju/Celana-Pria-TNI-AU-edit-400px/Celana-Panjang-Pria-40.jpg', '40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '53.5', '65.5', '40', '25', '106', '2023-01-09 23:02:36', '2023-01-09 23:02:36'),
(24, '41', 'img/data-baju/Celana-Pria-TNI-AU-edit-400px/Celana-Panjang-Pria-41.jpg', '41', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '55', '67.5', '41', '25.5', '106', '2023-01-09 23:03:30', '2023-01-09 23:03:30'),
(25, '42', 'img/data-baju/Celana-Pria-TNI-AU-edit-400px/Celana-Panjang-Pria-42.jpg', '42', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '56.5', '69.5', '42', '26', '106', '2023-01-09 23:04:06', '2023-01-09 23:04:06'),
(26, '43', 'img/data-baju/Celana-Pria-TNI-AU-edit-400px/Celana-Panjang-Pria-43.jpg', '43', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '58', '71.5', '43', '26.5', '106', '2023-01-09 23:04:45', '2023-01-09 23:04:45'),
(27, '44', 'img/data-baju/Celana-Pria-TNI-AU-edit-400px/Celana-Panjang-Pria-44.jpg', '44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '59.5', '73.5', '44', '27', '106', '2023-01-10 01:17:41', '2023-01-10 01:17:41'),
(28, '45', 'img/data-baju/Celana-Pria-TNI-AU-edit-400px/Celana-Panjang-Pria-45.jpg', '45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '61', '75.5', '45', '27.5', '106.5', '2023-01-10 01:19:08', '2023-01-10 01:19:08'),
(29, '46', 'img/data-baju/Celana-Pria-TNI-AU-edit-400px/Celana-Panjang-Pria-46.jpg', '46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '62.5', '77.5', '46', '28', '106.5', '2023-01-10 01:19:55', '2023-01-10 01:19:55'),
(30, '47', 'img/data-baju/Celana-Pria-TNI-AU-edit-400px/Celana-Panjang-Pria-47.jpg', '47', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '64', '79.5', '47', '28', '106.5', '2023-01-10 01:20:39', '2023-01-10 01:20:39'),
(31, '48', 'img/data-baju/Celana-Pria-TNI-AU-edit-400px/Celana-Panjang-Pria-48.jpg', '48', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '65.5', '81.5', '48', '29', '106.5', '2023-01-10 01:21:15', '2023-01-10 01:21:15'),
(32, '49', 'img/data-baju/Celana-Pria-TNI-AU-edit-400px/Celana-Panjang-Pria-49.jpg', '49', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '67', '83.5', '49', '29.5', '106.5', '2023-01-10 01:22:04', '2023-01-10 01:22:04'),
(33, '50', 'img/data-baju/Celana-Pria-TNI-AU-edit-400px/Celana-Panjang-Pria-50.jpg', '50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '68.5', '85.5', '50', '30', '106.5', '2023-01-10 01:22:46', '2023-01-10 01:22:46'),
(34, '51', 'img/data-baju/Celana-Pria-TNI-AU-edit-400px/Celana-Panjang-Pria-51.jpg', '51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '70', '87.5', '51', '30.5', '106.5', '2023-01-10 01:23:55', '2023-01-10 01:23:55'),
(35, '54', 'BaretTNIAU-400px.jpg', '54', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-10 01:24:46', '2023-01-10 01:24:46'),
(36, '55', 'BaretTNIAU-400px.jpg', '55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-10 01:25:31', '2023-01-10 01:25:31'),
(37, '56', 'BaretTNIAU-400px.jpg', '56', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-10 01:25:40', '2023-01-10 01:25:40'),
(38, '57', 'BaretTNIAU-400px.jpg', '57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-10 01:25:47', '2023-01-10 01:25:47'),
(39, '58', 'BaretTNIAU-400px.jpg', '58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-10 01:25:54', '2023-01-10 01:25:54'),
(41, '60', 'BaretTNIAU-400px.jpg', '60', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-10 01:26:14', '2023-01-10 01:26:14'),
(43, '35', 'Sepatu-PDL-TNI-AU-400px.jpg', '35-2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-10 01:28:29', '2023-01-10 01:28:29'),
(44, '36', 'Sepatu-PDL-TNI-AU-400px.jpg', '36-2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-10 01:28:38', '2023-01-10 01:28:38'),
(45, '37', 'Sepatu-PDL-TNI-AU-400px.jpg', '37-2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-10 01:28:45', '2023-01-10 01:28:45'),
(46, '38', NULL, '38-2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-10 01:28:56', '2023-01-10 01:28:56'),
(47, '39', NULL, '39-2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-10 01:29:04', '2023-01-10 01:29:04'),
(48, '40', NULL, '40-2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-10 01:29:20', '2023-01-10 01:29:20'),
(49, '41', NULL, '41-2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-10 01:29:27', '2023-01-10 01:29:27'),
(50, '42', NULL, '42-2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-10 01:29:36', '2023-01-10 01:29:36'),
(51, '43', NULL, '43-2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-10 01:29:45', '2023-01-10 01:29:45'),
(52, '44', NULL, '44-2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-10 01:29:53', '2023-01-10 01:29:53'),
(53, '45', NULL, '45-2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-10 01:30:01', '2023-01-10 01:30:01'),
(54, '46', NULL, '46-2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-10 01:30:12', '2023-01-10 01:30:12'),
(55, '47', NULL, '47-2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-10 01:30:19', '2023-01-10 01:30:19'),
(56, '48', NULL, '48-2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-10 01:30:28', '2023-01-10 01:30:28'),
(57, '61', NULL, '61-2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-10 02:57:55', '2023-01-10 02:57:55'),
(58, '55', NULL, '55-2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-12 02:51:17', '2023-01-12 02:51:17'),
(59, '56', NULL, '56-2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-12 02:51:26', '2023-01-12 02:51:26'),
(60, '57', NULL, '57-2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-12 02:52:33', '2023-01-12 02:52:33'),
(61, '58', NULL, '58-2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-12 02:52:40', '2023-01-12 02:52:40'),
(62, '59', NULL, '59-2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-12 02:52:49', '2023-01-12 02:52:49'),
(63, '61', NULL, '61-3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-12 02:53:07', '2023-01-12 02:53:07'),
(64, '60', NULL, '60-2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-12 02:53:30', '2023-01-12 02:53:30'),
(65, '35', NULL, '35-3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-12 02:55:09', '2023-01-12 02:55:09'),
(66, '36', NULL, '36-3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-12 02:55:17', '2023-01-12 02:55:17'),
(67, '37', NULL, '37-3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-12 02:55:28', '2023-01-12 02:55:28'),
(68, '38', NULL, '38-3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-12 02:55:37', '2023-01-12 02:55:37'),
(69, '39', NULL, '39-3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-12 02:55:44', '2023-01-12 02:55:44'),
(70, '40', NULL, '40-3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-12 02:55:52', '2023-01-12 02:55:52'),
(71, '41', NULL, '41-3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-12 02:56:00', '2023-01-12 02:56:00'),
(72, '42', NULL, '42-3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-12 02:56:09', '2023-01-12 02:56:09'),
(73, '43', NULL, '43-3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-12 02:56:17', '2023-01-12 02:56:17'),
(74, '44', NULL, '44-3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-12 02:56:26', '2023-01-12 02:56:26'),
(75, '45', NULL, '45-3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-12 02:56:41', '2023-01-12 02:56:41'),
(76, '46', NULL, '46-3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-12 02:56:51', '2023-01-12 02:56:51'),
(77, '47', NULL, '47-3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-12 02:56:59', '2023-01-12 02:56:59'),
(78, '48', NULL, '48-3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-12 02:57:06', '2023-01-12 02:57:06'),
(80, 'l', 'img/data-baju/KEMEJA-WANITA-HIJAB-edit-400px/KEMEJA-WANITA-HIJAB-L.jpg', 'l', '41', NULL, NULL, '70', NULL, '43', '39', '58.5', NULL, NULL, NULL, NULL, NULL, '2023-01-12 16:32:15', '2023-01-12 16:32:15'),
(81, 's', 'img/data-baju/KEMEJA-WANITA-HIJAB-edit-400px/KEMEJA-WANITA-HIJAB-S.jpg', 's', '39', NULL, NULL, '68', NULL, '39', '37', '57.5', NULL, NULL, NULL, NULL, NULL, '2023-01-12 16:36:00', '2023-01-12 16:36:00'),
(83, 'xl', 'img/data-baju/KEMEJA-WANITA-HIJAB-edit-400px/KEMEJA-WANITA-HIJAB-XL.jpg', 'xl', '42', NULL, NULL, '71', NULL, '45.5', '40', '59', NULL, NULL, NULL, NULL, NULL, '2023-01-12 16:40:49', '2023-01-12 16:40:49'),
(84, 'xs', 'img/data-baju/KEMEJA-WANITA-HIJAB-edit-400px/KEMEJA-WANITA-HIJAB-XS.jpg', 'xs', '38', NULL, NULL, '67', NULL, '37', '36', '57', NULL, NULL, NULL, NULL, NULL, '2023-01-13 00:35:12', '2023-01-13 00:35:12'),
(85, '2xl', 'img/data-baju/KEMEJA-WANITA-HIJAB-edit-400px/KEMEJA-WANITA-HIJAB-2XL.jpg', '2xl', '43', NULL, NULL, '72', NULL, '48', '41', '59.5', NULL, NULL, NULL, NULL, NULL, '2023-01-13 00:36:38', '2023-01-13 00:36:38'),
(86, '3xl', 'img/data-baju/KEMEJA-WANITA-HIJAB-edit-400px/KEMEJA-WANITA-HIJAB-3XL.jpg', '3xl', '44', NULL, NULL, '73', NULL, '50.5', '42', '59.5', NULL, NULL, NULL, NULL, NULL, '2023-01-13 00:38:07', '2023-01-13 00:38:07'),
(87, '4xl', 'img/data-baju/KEMEJA-WANITA-HIJAB-edit-400px/KEMEJA-WANITA-HIJAB-4XL.jpg', '4xl', '45', NULL, NULL, '73', NULL, '53', '43', '59.5', NULL, NULL, NULL, NULL, NULL, '2023-01-13 00:39:07', '2023-01-13 00:39:07'),
(88, '5xl', 'img/data-baju/KEMEJA-WANITA-HIJAB-edit-400px/KEMEJA-WANITA-HIJAB-5XL.jpg', '5xl', '46', NULL, NULL, '73', NULL, '55.5', '44', '59.5', NULL, NULL, NULL, NULL, NULL, '2023-01-13 00:40:25', '2023-01-13 00:40:25'),
(89, '2xs', 'img/data-baju/Celana-Panjang-Wanita-edit-400px/CELANA PANJANG WANITA HIJAB 2XS.jpg', '2xs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '32.5', '43.5', '28', '17.5', '95.5', '2023-01-13 01:06:05', '2023-01-13 01:06:05'),
(90, 'xs', 'img/data-baju/Celana-Panjang-Wanita-edit-400px/CELANA PANJANG WANITA HIJAB XS.jpg', 'xs-2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '34.5', '45.5', '29', '18', '96', '2023-01-13 01:08:22', '2023-01-13 01:08:22'),
(91, 's', 'img/data-baju/Celana-Panjang-Wanita-edit-400px/CELANA PANJANG WANITA HIJAB S.jpg', 's-2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '36.5', '47.5', '30', '18.5', '96.5', '2023-01-13 01:09:38', '2023-01-13 01:09:38'),
(92, 'm', 'img/data-baju/Celana-Panjang-Wanita-edit-400px/CELANA PANJANG WANITA HIJAB M.jpg', 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '38.5', '49.5', '31', '19', '97', '2023-01-13 01:10:17', '2023-01-13 01:10:17'),
(93, 'l', 'img/data-baju/Celana-Panjang-Wanita-edit-400px/CELANA PANJANG WANITA HIJAB L.jpg', 'l-2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '40.5', '51.5', '32', '19.5', '97.5', '2023-01-13 01:10:58', '2023-01-13 01:10:58'),
(94, 'xl', 'img/data-baju/Celana-Panjang-Wanita-edit-400px/CELANA-PANJANG-WANITA-HIJAB-2XL.jpg', 'xl-2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '42.5', '53.5', '33', '20', '98', '2023-01-13 01:31:32', '2023-01-13 01:31:32'),
(95, '2xl', 'img/data-baju/Celana-Panjang-Wanita-edit-400px/CELANA-PANJANG-WANITA-HIJAB-2XL.jpg', '2xl-2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '44.5', '55.5', '34', '20.5', '98', '2023-01-13 01:33:01', '2023-01-13 01:33:01'),
(96, '3xl', 'img/data-baju/Celana-Panjang-Wanita-edit-400px/CELANA PANJANG WANITA HIJAB 3XL.jpg', '3xl-2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '46.5', '57.5', '35', '21', '98', '2023-01-13 01:33:59', '2023-01-13 01:33:59'),
(97, '4xl', 'img/data-baju/Celana-Panjang-Wanita-edit-400px/CELANA PANJANG WANITA HIJAB 4XL.jpg', '4xl-2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '48.5', '59.5', '36', '21.5', '98', '2023-01-13 01:34:46', '2023-01-13 01:34:46'),
(98, '5xl', 'img/data-baju/Celana-Panjang-Wanita-edit-400px/CELANA PANJANG WANITA HIJAB 5XL.jpg', '5xl', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '50.5', '61.5', '37', '22', '98', '2023-01-13 01:35:24', '2023-01-13 01:35:24'),
(99, '6xl', 'img/data-baju/Celana-Panjang-Wanita-edit-400px/CELANA PANJANG WANITA HIJAB 6XL.jpg', '6xl', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '52.5', '63.5', '38', '22.5', '98.5', '2023-01-13 01:36:16', '2023-01-13 01:36:16'),
(100, '7xl', 'img/data-baju/Celana-Panjang-Wanita-edit-400px/CELANA PANJANG WANITA HIJAB 7XL.jpg', '7xl', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '54.5', '65.5', '39', '23', '98.5', '2023-01-13 01:37:02', '2023-01-13 01:37:02'),
(101, '8xl', 'img/data-baju/Celana-Panjang-Wanita-edit-400px/CELANA PANJANG WANITA HIJAB 8XL.jpg', '8xl', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '56.5', '67.5', '40', '23.5', '98.5', '2023-01-13 01:37:43', '2023-01-13 01:37:43'),
(102, '9xl', 'img/data-baju/Celana-Panjang-Wanita-edit-400px/CELANA PANJANG WANITA HIJAB 9XL.jpg', '9xl', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '58.5', '69.5', '41', '24', '98.5', '2023-01-13 01:38:22', '2023-01-13 01:38:22'),
(103, '10xl', 'img/data-baju/Celana-Panjang-Wanita-edit-400px/CELANA PANJANG WANITA HIJAB 10XL.jpg', '10xl', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '60.5', '71.5', '42', '24.5', '98.5', '2023-01-13 01:39:10', '2023-01-13 01:39:10'),
(104, '54', NULL, '54-2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-13 01:49:39', '2023-01-13 01:49:39'),
(105, '55', NULL, '55-3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-13 01:49:44', '2023-01-13 01:49:44'),
(106, '56', NULL, '56-3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-13 01:49:54', '2023-01-13 01:49:54'),
(107, '57', NULL, '57-3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-13 01:50:00', '2023-01-13 01:50:00'),
(108, '58', NULL, '58-3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-13 01:50:06', '2023-01-13 01:50:06'),
(109, '59', NULL, '59', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-13 01:50:13', '2023-01-13 01:50:13'),
(110, '60', NULL, '60-3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-13 01:50:54', '2023-01-13 01:50:54'),
(111, '61', NULL, '61', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-13 01:51:01', '2023-01-13 01:51:01'),
(114, '38', NULL, '38-4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-13 02:26:31', '2023-01-13 02:26:31'),
(115, '39', NULL, '39-4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-13 02:28:07', '2023-01-13 02:28:07'),
(116, '40', NULL, '40-4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-13 02:28:13', '2023-01-13 02:28:13'),
(117, '41', NULL, '41-4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-13 02:28:21', '2023-01-13 02:28:21'),
(118, '42', NULL, '42-4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-13 02:28:28', '2023-01-13 02:28:28'),
(119, '43', NULL, '43-4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-13 02:28:35', '2023-01-13 02:28:35'),
(120, '44', NULL, '44-4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-13 02:28:41', '2023-01-13 02:28:41'),
(121, '45', NULL, '45-4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-13 02:28:47', '2023-01-13 02:28:47'),
(122, '46', NULL, '46-4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-13 02:28:55', '2023-01-13 02:28:55'),
(123, '47', NULL, '47-4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-13 02:29:01', '2023-01-13 02:29:01'),
(124, '48', NULL, '48-4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-13 02:29:09', '2023-01-13 02:29:09'),
(125, 'xs', 'img/data-baju/kemeja-wanita-TN-AU-edit-400px/Kemeja Wanita Non Hijab XS.jpg', 'xs-3', '35', NULL, NULL, '64', NULL, '37', '44', '23.5', NULL, NULL, NULL, NULL, NULL, '2023-01-13 02:55:51', '2023-01-13 02:55:51'),
(126, 's', 'img/data-baju/kemeja-wanita-TN-AU-edit-400px/Kemeja Wanita Non Hijab S.jpg', 's-3', '39', NULL, NULL, '68', NULL, '39', '46', '24', NULL, NULL, NULL, NULL, NULL, '2023-01-13 03:01:09', '2023-01-13 03:01:09'),
(127, 'm', 'img/data-baju/kemeja-wanita-TN-AU-edit-400px/Kemeja Wanita Non Hijab M.jpg', 'm-2', '40', NULL, NULL, '69', NULL, '41', '48', '24.5', NULL, NULL, NULL, NULL, NULL, '2023-01-13 03:02:30', '2023-01-13 03:02:30'),
(128, 'l', 'img/data-baju/kemeja-wanita-TN-AU-edit-400px/Kemeja Wanita Non Hijab L.jpg', 'l-3', '41', NULL, NULL, '70', NULL, '43', '50', '25', NULL, NULL, NULL, NULL, NULL, '2023-01-13 03:03:24', '2023-01-13 03:03:24'),
(129, 'xl', 'img/data-baju/kemeja-wanita-TN-AU-edit-400px/Kemeja Wanita Non Hijab XL.jpg', 'xl-3', '42', NULL, NULL, '71', NULL, '45.5', '52.5', '25.5', NULL, NULL, NULL, NULL, NULL, '2023-01-13 03:04:25', '2023-01-13 03:04:25'),
(130, '2xl', 'img/data-baju/kemeja-wanita-TN-AU-edit-400px/Kemeja Wanita Non Hijab 2XL.jpg', '2xl-3', '43', NULL, NULL, '72', NULL, '48', '55', '26', NULL, NULL, NULL, NULL, NULL, '2023-01-13 03:05:17', '2023-01-13 03:05:17'),
(131, '3xl', 'img/data-baju/kemeja-wanita-TN-AU-edit-400px/Kemeja Wanita Non Hijab 3XL.jpg', '3xl-3', '44', NULL, NULL, '73', NULL, '50.5', '57.5', '26.5', NULL, NULL, NULL, NULL, NULL, '2023-01-13 03:06:14', '2023-01-13 03:06:14'),
(132, '4xl', 'img/data-baju/kemeja-wanita-TN-AU-edit-400px/Kemeja Wanita Non Hijab 4XL.jpg', '4xl-3', '45', NULL, NULL, '73', NULL, '53', '60', '27', NULL, NULL, NULL, NULL, NULL, '2023-01-13 03:07:04', '2023-01-13 03:07:04'),
(133, '5xl', 'img/data-baju/kemeja-wanita-TN-AU-edit-400px/Kemeja Wanita Non Hijab 5XL.jpg', '5xl-2', '46', NULL, NULL, '73', NULL, '55.5', '62.5', '27.5', NULL, NULL, NULL, NULL, NULL, '2023-01-13 03:08:05', '2023-01-13 03:08:05'),
(134, '2xs', 'img/data-baju/Celana Panjang Wanita Non Hijab/CELANA PANJANG WANITA NON HIJAB 2XS.jpg', '2xs-2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '32.5', '43.5', '28', '17.5', '95.5', '2023-01-15 06:02:19', '2023-01-15 06:02:19'),
(135, 'xs', 'img/data-baju/Celana Panjang Wanita Non Hijab/CELANA PANJANG WANITA NON HIJAB XS.jpg', 'xs-4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '34.5', '45.5', '29', '18', '96', '2023-01-15 06:02:57', '2023-01-15 06:02:57'),
(136, 's', 'img/data-baju/Celana Panjang Wanita Non Hijab/CELANA PANJANG WANITA NON HIJAB S.jpg', 's-4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '36.5', '47.5', '30', '18.5', '96.5', '2023-01-15 06:03:51', '2023-01-15 06:03:51'),
(137, 'm', 'img/data-baju/Celana Panjang Wanita Non Hijab/CELANA PANJANG WANITA NON HIJAB M.jpg', 'm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '38.5', '49.5', '31', '19', '97', '2023-01-15 06:04:37', '2023-01-15 06:04:37'),
(138, 'l', 'img/data-baju/Celana Panjang Wanita Non Hijab/CELANA PANJANG WANITA NON HIJAB L.jpg', 'l-4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '40.5', '51.5', '32', '19.5', '97.5', '2023-01-15 06:05:15', '2023-01-15 06:05:15'),
(139, 'xl', 'img/data-baju/Celana Panjang Wanita Non Hijab/CELANA PANJANG WANITA NON HIJAB XL.jpg', 'xl-4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '42.5', '53.5', '33', '20', '98', '2023-01-15 06:05:55', '2023-01-15 06:05:55'),
(140, '2xl', 'img/data-baju/Celana Panjang Wanita Non Hijab/CELANA PANJANG WANITA NON HIJAB 2XL.jpg', '2xl-4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '44.5', '55.5', '34', '20.5', '98', '2023-01-15 06:07:54', '2023-01-15 06:07:54'),
(141, '3xl', 'img/data-baju/Celana Panjang Wanita Non Hijab/CELANA PANJANG WANITA NON HIJAB 3XL.jpg', '3xl-4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '46.5', '57.5', '35', '21', '98', '2023-01-15 06:08:38', '2023-01-15 06:08:38'),
(142, '4xl', 'img/data-baju/Celana Panjang Wanita Non Hijab/CELANA PANJANG WANITA NON HIJAB 4XL.jpg', '4xl-4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '48.5', '59.5', '36', '21.5', '98', '2023-01-15 06:09:17', '2023-01-15 06:09:17'),
(143, '5xl', 'img/data-baju/Celana Panjang Wanita Non Hijab/CELANA PANJANG WANITA NON HIJAB 5XL.jpg', '5xl-3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '50.5', '61.5', '37', '22', '98', '2023-01-15 06:12:27', '2023-01-15 06:12:27'),
(144, '6xl', 'img/data-baju/Celana Panjang Wanita Non Hijab/CELANA PANJANG WANITA NON HIJAB 6XL.jpg', '6xl-2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '52.5', '63.5', '38', '22.5', '98.5', '2023-01-15 06:13:08', '2023-01-15 06:13:08'),
(145, '7xl', 'img/data-baju/Celana Panjang Wanita Non Hijab/CELANA PANJANG WANITA NON HIJAB 7XL.jpg', '7xl-2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '54.5', '65.5', '39', '23', '98.5', '2023-01-15 06:13:46', '2023-01-15 06:13:46'),
(146, '8xl', 'img/data-baju/Celana Panjang Wanita Non Hijab/CELANA PANJANG WANITA NON HIJAB 8XL.jpg', '8xl-2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '56.5', '67.5', '40', '23.5', '98.5', '2023-01-15 06:14:29', '2023-01-15 06:14:29'),
(147, '9xl', 'img/data-baju/Celana Panjang Wanita Non Hijab/CELANA PANJANG WANITA NON HIJAB 9XL.jpg', '9xl-2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '58.5', '69.5', '41', '24', '98.5', '2023-01-15 06:16:48', '2023-01-15 06:16:48'),
(148, '10xl', 'img/data-baju/Celana Panjang Wanita Non Hijab/CELANA PANJANG WANITA NON HIJAB 10XL.jpg', '10xl-2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '60.5', '71.5', '42', '24.5', '98.5', '2023-01-15 06:18:42', '2023-01-15 06:18:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tolerant`
--

CREATE TABLE `tolerant` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lebar_pundak` int(11) NOT NULL,
  `panjang_lengan` int(11) NOT NULL,
  `lingkar_pinggang` int(11) NOT NULL,
  `panjang_baju` int(11) NOT NULL,
  `lingkar_badan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tolerant`
--

INSERT INTO `tolerant` (`id`, `lebar_pundak`, `panjang_lengan`, `lingkar_pinggang`, `panjang_baju`, `lingkar_badan`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 4, 3, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `pangkat` varchar(100) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `satker` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nip`, `nama`, `pangkat`, `slug`, `role_id`, `cover`, `password`, `satker`, `jabatan`, `jk`, `status`, `created_at`, `updated_at`) VALUES
(1, '121232', 'admin', 'admin', 'admin', 1, NULL, '$2y$10$9ROIIvcLqy91GohD8hRwDeWZ0/YbcaWqeL84H983yCEQMUlhfb.4a', 'admin', 'admin', 'l', 'active', '2023-01-10 03:16:28', '2023-01-10 03:16:28'),
(2, '111111', 'user', 'user', 'user', 2, NULL, '$2y$10$BA0.Zsblw3KYdHOuRluAv.q7Ov.gB0truQh76ZcKYTbxMvmGBfGVe', 'user', 'user', 'l', 'active', '2023-01-10 03:30:32', '2023-01-10 03:30:32'),
(3, '222222', 'user p', 'user', 'user', 2, NULL, '$2y$10$BA0.Zsblw3KYdHOuRluAv.q7Ov.gB0truQh76ZcKYTbxMvmGBfGVe', 'user', 'user', 'p', 'active', '2023-01-10 03:31:21', '2023-01-10 03:31:21');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `itemlogs`
--
ALTER TABLE `itemlogs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `item_category`
--
ALTER TABLE `item_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_category_item_id_foreign` (`item_id`),
  ADD KEY `item_category_category_id_foreign` (`category_id`);

--
-- Indeks untuk tabel `item_size`
--
ALTER TABLE `item_size`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_size_item_id_foreign` (`item_id`),
  ADD KEY `item_size_size_id_foreign` (`size_id`);

--
-- Indeks untuk tabel `item_tolerant`
--
ALTER TABLE `item_tolerant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_tolerant_item_id_foreign` (`item_id`),
  ADD KEY `item_tolerant_tolerant_id_foreign` (`tolerant_id`);

--
-- Indeks untuk tabel `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `logs_user_id_foreign` (`user_id`),
  ADD KEY `logs_item_id_foreign` (`item_id`),
  ADD KEY `logs_tolerant_id_foreign` (`tolerant_id`),
  ADD KEY `logs_size_id_foreign` (`size_id`);

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
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tolerant`
--
ALTER TABLE `tolerant`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `itemlogs`
--
ALTER TABLE `itemlogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `item_category`
--
ALTER TABLE `item_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `item_size`
--
ALTER TABLE `item_size`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT untuk tabel `item_tolerant`
--
ALTER TABLE `item_tolerant`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `logs`
--
ALTER TABLE `logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT untuk tabel `tolerant`
--
ALTER TABLE `tolerant`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `item_category`
--
ALTER TABLE `item_category`
  ADD CONSTRAINT `item_category_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `item_category_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);

--
-- Ketidakleluasaan untuk tabel `item_size`
--
ALTER TABLE `item_size`
  ADD CONSTRAINT `item_size_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`),
  ADD CONSTRAINT `item_size_size_id_foreign` FOREIGN KEY (`size_id`) REFERENCES `sizes` (`id`);

--
-- Ketidakleluasaan untuk tabel `item_tolerant`
--
ALTER TABLE `item_tolerant`
  ADD CONSTRAINT `item_tolerant_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`),
  ADD CONSTRAINT `item_tolerant_tolerant_id_foreign` FOREIGN KEY (`tolerant_id`) REFERENCES `tolerant` (`id`);

--
-- Ketidakleluasaan untuk tabel `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`),
  ADD CONSTRAINT `logs_size_id_foreign` FOREIGN KEY (`size_id`) REFERENCES `sizes` (`id`),
  ADD CONSTRAINT `logs_tolerant_id_foreign` FOREIGN KEY (`tolerant_id`) REFERENCES `tolerant` (`id`),
  ADD CONSTRAINT `logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
