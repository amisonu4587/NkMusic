-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 28, 2021 at 11:18 AM
-- Server version: 5.7.23-23
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qcscltxj_music`
--

-- --------------------------------------------------------

--
-- Table structure for table `additional`
--

CREATE TABLE `additional` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `additional_info` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `additional`
--

INSERT INTO `additional` (`id`, `additional_info`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'ssss', NULL, '2021-05-07 00:16:51', '2021-05-07 00:16:51');

-- --------------------------------------------------------

--
-- Table structure for table `albam`
--

CREATE TABLE `albam` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `albam_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `release_version` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `artist_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sportify_artist_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metadata_language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `release_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `albam_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `primary_track_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondary_track_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instrumental` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `version` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `primary_artist` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featuring` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remixer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `composer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arranger` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `producer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `production_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publisher` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_isre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subgenre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondary_genre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_secondary_genre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_tier` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `producer_catalogue_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parental_advisory` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preview` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `track_title_language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lyrics_language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lyrics` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `release_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `formate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catalouge_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `audio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `albam`
--

INSERT INTO `albam` (`id`, `user_id`, `albam_title`, `release_version`, `artist_name`, `sportify_artist_url`, `metadata_language`, `release_date`, `type`, `level`, `albam_image`, `created_at`, `updated_at`, `content_type`, `primary_track_type`, `secondary_track_type`, `instrumental`, `title`, `version`, `primary_artist`, `featuring`, `remixer`, `author`, `composer`, `arranger`, `producer`, `pline`, `production_year`, `publisher`, `isre`, `generate_isre`, `genre`, `subgenre`, `secondary_genre`, `sub_secondary_genre`, `price_tier`, `producer_catalogue_number`, `parental_advisory`, `preview`, `track_title_language`, `lyrics_language`, `lyrics`, `release_title`, `formate`, `line`, `line2`, `upc`, `catalouge_name`, `audio`) VALUES
(18, '12', 'Titanic', '1st', 'Sanjoy', 'http://localhost:8000/release', 'English', '2021-03-20', 'Hindi', 'Hindi', '2574af2f797262c2c75f3d8e4bbe3541.jpg', '2021-03-18 00:00:09', '2021-03-18 00:00:09', 'audio', 'music', 'medley', 'yes', 'ew', 'qwesfd', 'Sanjoy', 'dsf', 'df', 'fd', 'sdf', 'sd', 'sdf', 'sdf', 'audi', NULL, 'yes', 'sdaf', 'audi', 'opel', 'opel', 'audi', 'audi', 'sdf', 'yes', 'df', 'opel', 'sd', 'sdf', 'sdf', 'audi', 'sdf', 'sdf', '03221', 'jbvfhvbgvbuydgdv', '4fcc4e9440d18217b5793e48ab32a094.mp3'),
(19, '12', 'title', '2nd', 'sanjoy', 'http://localhost:8000/release', 'dsg', '2021-03-19', 'sdg', 'sd', '1d5969f73ae0856cbe0ae069fa14a727.jpg', '2021-03-18 01:50:19', '2021-03-18 01:50:19', 'audio', 'music', 'medley', 'yes', 'sanjoy', '2nd', 'sanjoy', 'df', 'sdf', 'sdf', 'sdf', 'dsf', 'sdf', 'sdf', 'volvo', NULL, 'yes', 'sdf', 'saab', 'opel', 'audi', 'opel', 'opel', 'sdf', 'yes', 'sd', 'opel', 'ds', 'sd', 'sdf', 'opel', 'sdf', 'sdf', 'sdds', 'sd', '63acf72b0c3986818beef56b0fc4d938.mp3'),
(23, '12', 'adsf', 'sdf', 'sdfsdf', 'http://localhost:8000/release', 'sa', '2021-04-02', 'as', 'asd', 'f7d986310c9ceb4403e2c9ffab91fb17.png', '2021-04-07 23:55:16', '2021-04-07 23:55:16', 'audio', 'music', 'originam', 'yes', 'fsdegrhj', 'dfg', 'sdfsdf', 'sdgwewe', 'asf', 'asf', 'dsf', 'dsf', 'sdf', 'xz', '2007', NULL, 'yes', NULL, 'English-Hip Hop', 'Jainism', 'Mood/ Raag', 'Additional information ex bhajan , Mother\'s Love etc', 'Sad', '8484', 'yes', 'df', 'Gujarati', 'dsf', 'df', 'sdvdsv', 'audi', 'sdv', 'sdv', 'sdv', 'sdv', '394b21a507d9251d0421af47c637e221.mp3'),
(24, '12', 'DIL', 'Original', 'ac,bg', 'http://localhost:8000/release', 'other', '2021-04-09', 'cfff', 'jkbkjbbkjh', '3c5e97e82f24776156fd4ec5f9a7d516.png', '2021-04-08 01:37:58', '2021-04-08 01:37:58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'c71d5dcdea21b5fc9e0e49d0d63a09f6.mp3'),
(25, '13', 'poijl', 'bbkbk', 'kuhhjhb,gfcdf', 'http://localhost:8000/release', 'jghjgugy', '2021-04-16', 'hfcffg', 'hcffhf', '863fbb0e071416cfe4fb31557aaf795f.png', '2021-04-08 02:09:46', '2021-04-08 02:09:46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8c8ecd38cdc5410fd74369472e2f5f7d.mp3'),
(26, '14', 'u', 'ghk', 'ghk', 'http://localhost:8000/release', 'fdg', '2021-04-16', '555', '8585', 'b68a35965602153ce02e56254cfc37a8.png', '2021-04-19 03:20:23', '2021-04-19 03:20:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4875f74446142670988440d5255bdf24.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `album_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `album_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `release_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isrc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isrc_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lyricis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `composer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `artist` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mood` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `callertune` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cats`
--

CREATE TABLE `cats` (
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `cat_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cats`
--

INSERT INTO `cats` (`cat_id`, `cat_name`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test Category 1', NULL, '2021-04-23 00:04:56', '2021-04-23 00:04:56'),
(2, 'Test Category 2', NULL, '2021-04-23 00:07:16', '2021-04-23 00:07:16'),
(3, 'Test Category 3', NULL, '2021-04-23 00:08:37', '2021-04-23 00:08:37'),
(4, 'Test Category 4', NULL, '2021-04-23 00:09:16', '2021-04-23 00:09:16'),
(5, 'Test Category 5', NULL, '2021-04-29 03:40:11', '2021-04-29 03:40:11');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'asf', 'asf@adzxsfg.ghff', '7521452145', 'sdg', 'sg', '2021-03-16 02:30:23', '2021-03-16 02:30:23'),
(2, 'adsfgrth', 'ujghfse@sdfcgvh.ghfds', '12345678907', 'dgfhj', 'sdegfrh;', '2021-03-16 02:31:54', '2021-03-16 02:31:54'),
(3, 'AJIT EKKA', 'nkmusicproduction@rediffmail.com', '07077806662', 'LLLLLLLLLLLLLLL', 'LLLLLLLLLLLLLLLLLLL', '2021-05-14 04:21:42', '2021-05-14 04:21:42');

-- --------------------------------------------------------

--
-- Table structure for table `crbt`
--

CREATE TABLE `crbt` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `crbt`
--

INSERT INTO `crbt` (`id`, `user_id`, `email`, `name`, `created_at`, `updated_at`) VALUES
(1, '14', 'maitysanjoy1998@gmail.com', 'Sanjoy Maity', '2021-05-04 03:23:40', '2021-05-04 03:23:40'),
(2, '17', '2704b8e062e7c041d7e56d1218c4e6c1.pdf', 'lopl', '2021-05-31 06:28:01', '2021-05-31 06:28:01');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `album_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `album_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `all_genre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `all_sub_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `release_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion_sub_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_isre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_upc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lyrics` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `composer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `artist` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mood` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `additional_information` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `callertune` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `album_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `audio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `music_release_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `premier_release_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `star_cast` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `director` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `producer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `approve` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2021_01_24_152541_add_role_to_users_table', 1),
(5, '2021_03_08_070958_add_phone_to_users_table', 1),
(6, '2021_03_08_071838_add_status_to_users_table', 1),
(7, '2021_03_11_052753_add_username_to_users', 2),
(8, '2021_03_11_114841_create_albam_table', 3),
(9, '2021_03_15_053823_add_content_type_column_to_albam', 4),
(10, '2021_03_15_112257_add_release_title_column_to_albam', 5),
(12, '2021_03_16_072457_create_contact_table', 6),
(13, '2021_03_16_095341_create_partner_table', 7),
(14, '2021_03_19_041529_add_branch_to_users_table', 8),
(15, '2021_04_19_104754_create_album_table', 9),
(16, '2020_06_13_153405_create_cats_table', 10),
(17, '2020_06_13_173716_create_sub_cats_table', 10),
(18, '2020_06_16_055012_create_sub_sub_cats_table', 11),
(19, '2021_04_24_102656_add_cat_id_to_sub_sub_cats', 12),
(20, '2021_04_26_070335_create_song_table', 13),
(21, '2021_04_27_093607_create_film_table', 14),
(22, '2021_04_29_051916_add_approve_to_song_table', 15),
(23, '2021_04_29_052426_add_approve_to_film_table', 16),
(24, '2021_04_29_054846_add_status_to_film_table', 17),
(25, '2021_04_29_055008_add_status_to_song_table', 18),
(26, '2021_04_30_070522_create_music_revenue_table', 19),
(27, '2021_04_30_072311_create_youtube_revenue_table', 20),
(28, '2021_05_03_071655_create_payout_partner_table', 21),
(29, '2021_05_03_120530_create_url_table', 22),
(30, '2021_05_04_084910_create_crbt_table', 23),
(31, '2021_05_04_091710_create_additional_table', 24),
(32, '2021_05_04_115939_create_religion_category_table', 25),
(33, '2021_05_05_045735_create_religion_cat_table', 26),
(34, '2021_05_05_052125_create_religion_subcat_table', 27),
(36, '2021_05_05_061953_create_religion_details_table', 28),
(37, '2021_05_05_094532_create_prime_partner_table', 29),
(38, '2021_05_05_104508_add_service_to_users_table', 30),
(39, '2021_05_12_053442_create_service_table', 31);

-- --------------------------------------------------------

--
-- Table structure for table `music_revenue`
--

CREATE TABLE `music_revenue` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revenue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `music_revenue`
--

INSERT INTO `music_revenue` (`id`, `user_id`, `month`, `revenue`, `created_at`, `updated_at`) VALUES
(1, '13', 'ADS', 'asd asas', '2021-04-30 01:38:21', '2021-04-30 01:38:21'),
(2, '14', 'ADS', 'dfdfdf', '2021-04-30 03:53:48', '2021-04-30 03:53:48'),
(3, '12', 'asd', 'ASD', '2021-04-30 03:58:04', '2021-04-30 03:58:04'),
(4, '14', 'asd', 'asdsads', '2021-05-03 00:34:14', '2021-05-03 00:34:14'),
(5, '16', 'January', '$280', '2021-05-21 06:53:02', '2021-05-21 06:53:02');

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `partner_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id`, `partner_image`, `created_at`, `updated_at`) VALUES
(5, 'd6a63d2a41ce267c27142d4abed8d6b9.png', '2021-05-08 04:12:32', '2021-05-08 04:12:32'),
(6, '7e2f6f89852307da3e489be22a5802bd.png', '2021-05-08 04:12:42', '2021-05-08 04:12:42'),
(7, '38d63b38821afc6125c0f1d04cbd10bc.png', '2021-05-08 04:13:04', '2021-05-08 04:13:04'),
(8, 'd9954c1cb5cd22a140efa62b198dfce2.png', '2021-05-08 04:13:29', '2021-05-08 04:13:29'),
(9, 'eaf839c830576aa91d124912d09e1855.png', '2021-05-08 04:13:43', '2021-05-08 04:13:43');

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
('q@gmail.com', '$2y$10$wfXWZD1ctvfnVJHQYYWSGOL6pnSBSp32W83IJo5HDtW4d.A.91QmS', '2021-03-19 00:05:15'),
('sanjay@quantex.co.in', '$2y$10$oXvMDyqf8pEQfsmAWo9PbOKITR4ZGtiMMTPPoYXCHhLIGz6yqLrty', '2021-05-10 00:17:46'),
('maitysanjoy4587@gmail.com', '$2y$10$1fWXjXUp11ZdpFhlDn7jXu/8Ko9Zky2FfQEtrHdUnOQFgQ6Sznd2u', '2021-06-09 06:37:22');

-- --------------------------------------------------------

--
-- Table structure for table `payout_partner`
--

CREATE TABLE `payout_partner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payout` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payout_partner`
--

INSERT INTO `payout_partner` (`id`, `user_id`, `service_name`, `month`, `payout`, `date`, `ref_no`, `bank_name`, `created_at`, `updated_at`) VALUES
(2, '14', 'Youtube Content Id', 'January', '50000', '12/12/20', '03228', '03228', '2021-05-07 06:03:15', '2021-05-07 06:03:15'),
(3, '16', 'Music Distributuin & UGC Claim', 'January', '$280', '560', '4675865fyg87', 'HDFC', '2021-05-21 06:57:41', '2021-05-21 06:57:41');

-- --------------------------------------------------------

--
-- Table structure for table `prime_partner`
--

CREATE TABLE `prime_partner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ppartner_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prime_partner`
--

INSERT INTO `prime_partner` (`id`, `ppartner_image`, `created_at`, `updated_at`) VALUES
(7, '83845caa9c910ff69f94981fd8ba342f.png', '2021-05-08 04:00:00', '2021-05-08 04:00:00'),
(9, 'c509a04fe51cec9794afaee227b2d0f8.png', '2021-05-08 04:00:35', '2021-05-08 04:00:35'),
(10, 'bc871efa83a585504c365139f418cdec.png', '2021-05-08 04:00:45', '2021-05-08 04:00:45'),
(11, '86839c7467a337602f9c16e514a1e2bb.png', '2021-05-08 04:01:08', '2021-05-08 04:01:08'),
(12, '93cc6958d3b0ac0329459e6e3c877c0a.png', '2021-05-08 04:02:23', '2021-05-08 04:02:23');

-- --------------------------------------------------------

--
-- Table structure for table `religion_cat`
--

CREATE TABLE `religion_cat` (
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `cat_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `religion_cat`
--

INSERT INTO `religion_cat` (`cat_id`, `cat_name`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'hingi', NULL, '2021-05-04 23:34:25', '2021-05-04 23:34:25'),
(2, 'xxxxxx', NULL, '2021-05-04 23:35:17', '2021-05-04 23:35:17'),
(3, 'cvb', NULL, '2021-05-04 23:36:13', '2021-05-04 23:36:13'),
(4, 'sdffdgn', NULL, '2021-05-04 23:36:41', '2021-05-04 23:36:41'),
(5, 'vfbgn', NULL, '2021-05-06 02:05:57', '2021-05-06 02:05:57');

-- --------------------------------------------------------

--
-- Table structure for table `religion_details`
--

CREATE TABLE `religion_details` (
  `sub_sub_cat_id` bigint(20) UNSIGNED NOT NULL,
  `sub_sub_cat_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_cat_id` int(11) NOT NULL DEFAULT '0',
  `cat_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `religion_details`
--

INSERT INTO `religion_details` (`sub_sub_cat_id`, `sub_sub_cat_name`, `sub_cat_id`, `cat_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'werht', 2, '2', NULL, '2021-05-05 01:03:27', '2021-05-05 01:03:27');

-- --------------------------------------------------------

--
-- Table structure for table `religion_subcat`
--

CREATE TABLE `religion_subcat` (
  `sub_cat_id` bigint(20) UNSIGNED NOT NULL,
  `sub_cat_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat_id` int(11) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `religion_subcat`
--

INSERT INTO `religion_subcat` (`sub_cat_id`, `sub_cat_name`, `cat_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'svs', 2, NULL, '2021-05-05 00:08:10', '2021-05-05 00:08:10'),
(2, 'janina', 2, NULL, '2021-05-05 00:08:42', '2021-05-05 00:08:42'),
(3, 'zsavvd', 4, NULL, '2021-05-05 00:08:57', '2021-05-05 00:08:57'),
(4, 'zsavvd', 3, NULL, '2021-05-05 00:09:31', '2021-05-05 00:09:31'),
(5, 'ho', 1, NULL, '2021-05-22 07:59:30', '2021-05-22 07:59:30');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `service_image`, `created_at`, `updated_at`) VALUES
(4, '9baff7728e9fdb7e9db70ac6e252fbb0.jpg', '2021-05-12 03:43:10', '2021-05-12 03:43:10'),
(6, '5dcd10490ae56376d0063bca06fc87c7.jpg', '2021-05-12 03:46:20', '2021-05-12 03:46:20');

-- --------------------------------------------------------

--
-- Table structure for table `song`
--

CREATE TABLE `song` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `album_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `album_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `all_genre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `all_sub_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `release_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion_sub_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_isre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_upc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lyrics` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `composer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `artist` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mood` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `additional_information` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `callertune` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `album_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `audio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `music_release_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `premier_release_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `approve` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_cats`
--

CREATE TABLE `sub_cats` (
  `sub_cat_id` bigint(20) UNSIGNED NOT NULL,
  `sub_cat_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat_id` int(11) NOT NULL DEFAULT '0',
  `gst` int(11) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_cats`
--

INSERT INTO `sub_cats` (`sub_cat_id`, `sub_cat_name`, `cat_id`, `gst`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'subcat 1', 1, 0, NULL, '2021-04-23 04:14:44', '2021-04-23 04:14:44'),
(2, 'subcat 2', 2, 0, NULL, '2021-04-24 01:58:54', '2021-04-24 01:58:54'),
(3, 'subcat 3', 2, 0, NULL, '2021-04-24 01:59:25', '2021-04-24 01:59:25'),
(4, 'subcat 4', 2, 0, NULL, '2021-04-29 03:41:01', '2021-04-29 03:41:01');

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_cats`
--

CREATE TABLE `sub_sub_cats` (
  `sub_sub_cat_id` bigint(20) UNSIGNED NOT NULL,
  `sub_sub_cat_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_cat_id` int(11) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cat_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_sub_cats`
--

INSERT INTO `sub_sub_cats` (`sub_sub_cat_id`, `sub_sub_cat_name`, `sub_cat_id`, `remember_token`, `created_at`, `updated_at`, `cat_id`) VALUES
(2, 'dswf', 3, NULL, '2021-05-05 01:08:55', '2021-05-05 01:08:55', '2');

-- --------------------------------------------------------

--
-- Table structure for table `url`
--

CREATE TABLE `url` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `url`
--

INSERT INTO `url` (`id`, `user_id`, `email`, `name`, `created_at`, `updated_at`) VALUES
(1, '14', 'brajagopal@gmail.com', 'Brajagopal Pramanik', '2021-05-03 07:04:20', '2021-05-03 07:04:20'),
(2, '13', 'df@wshgh.fd', 'df', '2021-05-04 00:46:15', '2021-05-04 00:46:15'),
(3, '14', 're', 'ererererer', '2021-05-07 06:14:26', '2021-05-07 06:14:26'),
(4, '14', 'sad@ASG.SFDG', 'GF', '2021-05-07 06:21:36', '2021-05-07 06:21:36'),
(8, '17', '5a5c90bf676d86a6192a3f483d8fe60d.pdf', 'lloolk', '2021-05-31 05:24:16', '2021-05-31 05:24:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT '1',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ifcs` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ac_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subscription` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revenue_share` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `membership` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `phone`, `state`, `city`, `bank`, `ifcs`, `video`, `status`, `username`, `ac_name`, `bank_name`, `branch`, `user_image`, `subscription`, `company_name`, `label_name`, `revenue_share`, `membership`, `service`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$Q8TqxVDOM/yPm9LdZPewzOhM2y1fDS7jcG0d4OycMN7leum7GdD7O', NULL, '2021-03-08 01:51:46', '2021-03-08 01:51:46', 2, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, NULL, 'q@gmail.com', NULL, '$2y$10$trjgDiB27YMYDdddEw.91e9b3FSRNzJs97Uvfq1x7Ux7WS4scXZji', NULL, '2021-03-16 01:08:41', '2021-05-12 13:29:29', 1, NULL, NULL, NULL, '78965412301111', 'ASASAffb', NULL, 1, 'qqq', 'Sanjoy Maity', 'Allahabad', 'Talibhata', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, NULL, 'sanjay@quantex.co.in', NULL, '$2y$10$J3bI.mjCWMuZXJ.9m9y.LOp9MBfLiM9sSGAP4hBlxGQyX76W0yh1m', NULL, '2021-04-08 02:00:13', '2021-04-08 02:00:13', 1, NULL, NULL, NULL, '111111111111', 'hvcgvgjvghjvg', NULL, 1, 'sanjoy', 'hbhb', 'jhb', 'jhbvbjh', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'asf', 'maitysanjoy4587@gmail.com', NULL, '$2y$10$zNTU0DvmbkgX2QwaPQ1pnuARuaUyUPePDJTebIgpoU504WW0gNE1m', NULL, '2021-04-19 02:04:27', '2021-05-05 03:04:54', 1, NULL, NULL, NULL, '123654785492111', 'afefffsfdsfd', NULL, 1, 'wass007', 'dfg', 'dfg', 'dfg', '4c1a417c643aa883349a85aa5c358020.png', 'asf', 'asf', 'sa', 'asf', 'Gold', 'YouTube Content ID + Distribution'),
(16, NULL, 'nagpuriarkestra@gmail.com', NULL, '$2y$10$qRT1l/fK49L76O2sji4Ry.E4nxrvoe0U19GdefSG6BWqVjmypRJnW', NULL, '2021-05-12 14:18:18', '2021-05-22 07:55:43', 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'BALKARAN ORAON', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, NULL, 'mi2@gmail.com', NULL, '$2y$10$ua4sXLJWImQABzBs.1MefOaQEjWOaZeCT2FqwfWs9eOxpiV5ry8Ae', NULL, '2021-05-26 09:43:42', '2021-05-26 09:43:42', 1, '7029524181', NULL, NULL, NULL, NULL, NULL, 1, 'sonuxman007', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, NULL, 'dfg@fh.gh', NULL, '$2y$10$xZCjw.EmRGgT1mtQlbA8Jeyk4HaTcGVpppViJmqR/1aYtZNV/nQ7m', NULL, '2021-05-30 12:03:10', '2021-05-30 12:03:10', 1, '1111111111', NULL, NULL, NULL, NULL, NULL, 1, 'fgd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `youtube_revenue`
--

CREATE TABLE `youtube_revenue` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revenue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `youtube_revenue`
--

INSERT INTO `youtube_revenue` (`id`, `user_id`, `month`, `revenue`, `created_at`, `updated_at`) VALUES
(1, '13', 'ADS', 'dfdfdf', '2021-04-30 04:02:28', '2021-04-30 04:02:28'),
(2, '14', 'sa', 'sadasdss dsdd dvdvvdv ddv dvdv dvdv dv', '2021-05-03 00:31:56', '2021-05-03 00:31:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `additional`
--
ALTER TABLE `additional`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `albam`
--
ALTER TABLE `albam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crbt`
--
ALTER TABLE `crbt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `music_revenue`
--
ALTER TABLE `music_revenue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payout_partner`
--
ALTER TABLE `payout_partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prime_partner`
--
ALTER TABLE `prime_partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `religion_cat`
--
ALTER TABLE `religion_cat`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `religion_details`
--
ALTER TABLE `religion_details`
  ADD PRIMARY KEY (`sub_sub_cat_id`);

--
-- Indexes for table `religion_subcat`
--
ALTER TABLE `religion_subcat`
  ADD PRIMARY KEY (`sub_cat_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_cats`
--
ALTER TABLE `sub_cats`
  ADD PRIMARY KEY (`sub_cat_id`);

--
-- Indexes for table `sub_sub_cats`
--
ALTER TABLE `sub_sub_cats`
  ADD PRIMARY KEY (`sub_sub_cat_id`);

--
-- Indexes for table `url`
--
ALTER TABLE `url`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `youtube_revenue`
--
ALTER TABLE `youtube_revenue`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `additional`
--
ALTER TABLE `additional`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `albam`
--
ALTER TABLE `albam`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cats`
--
ALTER TABLE `cats`
  MODIFY `cat_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `crbt`
--
ALTER TABLE `crbt`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `music_revenue`
--
ALTER TABLE `music_revenue`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payout_partner`
--
ALTER TABLE `payout_partner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `prime_partner`
--
ALTER TABLE `prime_partner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `religion_cat`
--
ALTER TABLE `religion_cat`
  MODIFY `cat_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `religion_details`
--
ALTER TABLE `religion_details`
  MODIFY `sub_sub_cat_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `religion_subcat`
--
ALTER TABLE `religion_subcat`
  MODIFY `sub_cat_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `song`
--
ALTER TABLE `song`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_cats`
--
ALTER TABLE `sub_cats`
  MODIFY `sub_cat_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_sub_cats`
--
ALTER TABLE `sub_sub_cats`
  MODIFY `sub_sub_cat_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `url`
--
ALTER TABLE `url`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `youtube_revenue`
--
ALTER TABLE `youtube_revenue`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
