-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 10:55 AM
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
-- Database: `db_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sampul` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `sampul`, `judul`, `konten`, `slug`, `created_at`, `updated_at`) VALUES
(1, '1670730654-banner1.jpg', 'Memasak daging agar tidak alot', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto itaque, pariatur quod et consectetur quasi quas eum quidem, placeat illo, similique optio deserunt nemo iste eos omnis. In, veritatis corrupti?', 'memasak-daging-agar-tidak-alot', '2022-12-15 01:53:39', '2022-12-15 01:53:39'),
(2, '1670730721-banner2.jpg', 'Alasan Harus Vaksin Saat Kuliner dan Traveling', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto itaque, pariatur quod et consectetur quasi quas eum quidem, placeat illo, similique optio deserunt nemo iste eos omnis. In, veritatis corrupti?', 'alasan-harus-vaksin-saat-kuliner-dan-traveling', '2022-12-15 01:53:40', '2022-12-15 01:53:40'),
(3, '1670730776-banner3.jpg', 'Sate Taichan, Makassar', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto itaque, pariatur quod et consectetur quasi quas eum quidem, placeat illo, similique optio deserunt nemo iste eos omnis. In, veritatis corrupti?', 'sate-taichan-makassar', '2022-12-15 01:53:40', '2022-12-15 01:53:40');

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
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `konten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `konten`, `created_at`, `updated_at`) VALUES
(1, 'Foodescape', '2022-12-15 01:53:40', '2022-12-15 01:53:40');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'wisata kuliner', 'wisata-kuliner', '2022-12-15 01:53:38', '2022-12-15 01:53:38'),
(2, 'resep dan tutorial', 'resep-dan-tutorial', '2022-12-15 01:53:38', '2022-12-15 01:53:38'),
(3, 'review makanan', 'review-makanan', '2022-12-15 01:53:38', '2022-12-15 01:53:38');

-- --------------------------------------------------------

--
-- Table structure for table `like`
--

CREATE TABLE `like` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_post` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `like`
--

INSERT INTO `like` (`id`, `id_post`, `id_user`) VALUES
(1, 2, 3),
(2, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'logo.png', '2022-12-15 01:53:40', '2022-12-15 01:53:40');

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
(4, '2021_01_22_063108_create_kategori_table', 1),
(5, '2021_01_27_094756_create_post_table', 1),
(6, '2021_01_27_185544_add_id_kategori_to_post_table', 1),
(7, '2021_01_28_085907_create_tag_table', 1),
(8, '2021_01_28_125128_create_post_tag_table', 1),
(9, '2021_01_31_163416_create_banner_table', 1),
(10, '2021_02_01_124740_create_logo_table', 1),
(11, '2021_02_01_171437_create_footer_table', 1),
(12, '2021_02_02_094328_create_tentang_table', 1),
(13, '2021_02_13_052058_add_id_user_to_post_table', 1),
(14, '2021_02_28_153130_create_permission_tables', 1),
(15, '2021_03_01_162633_create_like_table', 1),
(16, '2021_05_06_130247_create_rekomendasi_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 3);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `sampul` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `id_kategori`, `id_user`, `sampul`, `judul`, `konten`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '1670732866-30 makanan tradisional Indo.jpg', '9 Nama Makanan Asli Indonesia Ini Aneh Banget, Tapi Enak Lho!', '<p>Masakan-masakan Indonesia telah dikenal hingga di seluruh penjuru dunia. Beberapa d antaranya bahkan diakui sebagai makanan terenak di dunia. Seperti sate, nasi goreng, nasi Padang, dan sebagainya.</p>\n\n            <p>Kekayaan makanan khas Indonesia tak ada habisnya. Bahkan, ada beragam masakan yang diberi nama aneh dan nyeleneh. Apa saja ya?</p>\n            \n            <br><p><b>1. Nasi Kentut</b></p>\n            \n            <p>Nasi kentut merupakan makanan khas Medan yang dimasak dengan daun kentut (paederia scandens) atau biasa dikenal orang Jawa dengan nama daun kesembukan. Meskipun daun ini berbau tidak sedap seperti kentut manusia, tetapi daun ini banyak khasiatnya lho.</p>\n            \n            <p>Di antaranya mengobati sariawan, mengatasi perut kembung, mengobati mata dan radang telinga. Biasanya nasi ini disajikan dengan ikan pepes, ayam gulung, tahu dan tempe sesuai selera. Sudah pernah coba?</p>\n            \n            <br><p><b>2. Kerupuk Melarat</b></p>\n            \n            <p>Makanan khas Cirebon ini biasa disajikan dengan sambal asam. Kerupuk ini disebut melarat karena tidak digoreng dengan minyak, tetapi dimasak dengan pasir yang telah dibersihkan terlebih dahulu.</p>\n            \n            <p>Kerupuk ini tersedia dalam beraneka ragam warna yang menarik, yaitu hijau, putih, kuning, dan merah muda. Kamu paling suka warna apa?</p>\n            \n            <br><p><b>3. Kue Onde-onde Ketawa</b></p>\n            \n            <p>Kue ini pertama kali dibuat pada masa dinasti Zhou untuk para tukang kayu dan tukang batu yang membangun istana kekaisaran. Kue ini melambangkan keselamatan dan kebersamaan. Mungkin saking enaknya bikin kita jadi ketawa saat menyantapnya. Hehehe...</p>\n            \n            <br><p><b>4. Ketela Bajingan</b></p>\n            \n            <p>Makanan ini berupa ketela yang dimasak dengan gula Jawa dan santan, lalu disajikan dengan kuah manis yang kental. Karena disajikan utuh tanpa dipotong terlebih dahulu, makanan ini terlihat mirip dengan bajing rebus sehingga disebut ketela bajingan.</p>\n            \n            <br><p><b>5. Kue Dollar</b></p>\n            <p>Kue ini berbentuk bulat pipih mirip koin dan rasanya mirip kue semprong. Dulu hanya ada rasa gula palem, tetapi sekarang sudah memiliki berbagai varian rasa. Seperti rasa jahe, wijen, dan keju.</p>\n            \n            <br><p><b>6. Kuku Macan</b></p>\n            <p>Kuku macan merupakan kerupuk ikan tengiri, salah satu camilan khas Balikpapan. Bentuknya mirip dengan kuku jari yang runcing. Karena ukuranya agak besar, sehingga disebut kuku macan.</p>\n            \n            <br><p><b>7. Kue Cubit</b></p>\n            <p>Kue berukuran sekitar 4 sentimeter ini populer di Jakarta. Ketika matang, kue ini biasa diangkat dengan capit makanan, seperti dicubit. Sekilas mirip kue lumpur tetapi lebih banyak taburan topping di atasnya.</p>\n            \n            <br><p><b>8. Sate kere</b></p>\n            <p>Kudapan salah satu makanan khas Solo. Kere dalam bahasa Jawa artinya melarat atau miskin. Sate ini terbuat dari tempe gambus, yaitu tempe yang terbuat dari ampas tahu dan tetap dilengkapi bumbu kacang seperti sate pada umumnya.</p>\n            \n            <br><p><b>9. Endog Bulus (Telur Kura-kura)</b></p>\n            <p>Endog bulus mirip kue Nopia yang sempat dipopulerkan etnis Tionghoa di Banyumas. Kue ini sendiri berasal dari Magelang dan ukurannya sebesar telur kura-kura. Kulitnya agak keras dan terdapat gula merah yang manis di dalamnya.</p>', '9-nama-makanan-asli-indonesia-ini-aneh-banget-tapi-enak-lho', '2022-12-15 01:53:38', '2022-12-15 01:53:38'),
(2, 2, 2, '1671034753-ayam-palekko-foto-resep-utama.jpg', '3 Resep Ayam Palekko Khas Bugis Enak dan Mudah Dibuat, Dijamin Bikin Ketagihan', '<p>Resep ayam palekko khas Bugis, Sulawesi Selatan ini bisa menjadi teman makan siang Anda bersama keluarga dan orang-orang terdekat. Ya, sajian ayam memang tak ada habisnya. Bahkan, sepertinya masing-masing wilayah di Indonesia memiliki resep olahan ayam yang khas, sesuai dengan bumbu dan cita rasa daerahnya.</p>\n            <p>Tak terkecuali dengan resep ayam palekko ini. Memiliki tampilan seperti ayam bumbu rempah, resep ayam palekko memang dibuat dengan campuran aneka bumbu seperti serai, lengkuas, jahe, bawang, daun jeruk, dan masih banyak lagi. Tak heran resep ayam palekko ini memiliki rasa yang khas.</p>\n            <p>Disajikan bersama dengan nasi hangat, resep ayam palekko sangat cocok untuk dijadikan selingan dalam menu harian Anda. Tak perlu khawatir karena cara membuat resep ayam palekko ini mudah saja. ini dia beberapa resep ayam palekko yang telah kami pilih khusus untuk Anda. Selamat mencoba!</p>\n            \n            <br><b><p>1. Ayam Palekko Khas Bugis</b></p>\n            <p>Bahan-bahan:</p>\n            <p>1/2 ekor ayam bagian atas</p>\n            <p>1 batang serai, geprek</p>\n            <p>Seruas lengkuas, geprek</p>\n            <p>2 lembar daun jeruk</p>\n            <p>250 ml air</p>\n            <p>Secukupnya garam, lada bubuk, kaldu ayam dana gula</p>\n            \n            <br><p>Bumbu dihaluskan:</p>\n            <p>6 butir bawang merah</p>\n            <p>4 siung bawang putih</p>\n            <p>5 buah cabai merah</p>\n            <p>Sedikit kunyit</p>\n            \n            <br><p>Cara membuat resep ayam palekko:</p>\n            <p>1. Siapkan bahan-bahan.</p> \n            <p>2. Tumis bumbu halus, serai, daun jeruk, dan lengkuas sampai harum. Kemudian tuangkan air.</p>\n            <p>3. Selanjutnya masukkan ayam, dan bumbu penyedap.</p>\n            <p>4. Masak dengan api kecil sampai kuah menyusut. Jangan lupa koreksi rasa.</p>\n            <p>5. Sajikan selagi hangat.</p>\n            \n            <br><b><p>2. Ayam Palekko Bugis Spesial</b></p>\n            <p>Bahan utama:</p>\n            <p>250 gram ayam</p>\n            \n            <br><p>Bumbu halus:</p>\n            <p>10 siung bawang merah</p>\n            <p>4 siung bawang putih</p>\n            <p>3 buah cabai merah</p>\n            <p>35 buah cabai rawit</p>\n            <p>1 cm jahe</p>\n            <p>1 cm lengkuas</p>\n            <p>1 cm kunyit</p>\n            \n            <br><p>Bumbu pelengkap:</p>\n            <p>Air asam</p>\n            <p>Lada bubuk</p>\n            <p>secukupnya gula, garam, kaldu jamur</p>\n            <p>Minyak secukupnya buat numis</p>\n            <p>2 lembar daun jeruk buang tulang</p>\n            <p>1 batang sereh geprek</p>\n            \n            <br><p>Cara membuat resep ayam palekko:</p>\n            <p>1. Potong kecil-kecil ayam lalu cuci hingga bersih dan rendam dengan air asam+lada+garam diamkan selama 30 menit.</p>\n            <p>2. Haluskan semua bahan bumbu halus.</p>\n            <p>3. Tumis bumbu halus lalu masukkan sereh dan daun jeruk aduk lalu tumis hingga harum.</p>\n            <p>4. Masukkan ayam dan air asam tadi lalu masukkan semua bahan bumbu pelengkap aduk hingga tercampur rata.</p>\n            <p>5. Tutup diamkan sampai air menyusut agar bumbu meresap.</p>\n            <p>6. Koreksi rasa, jika sudah enak angkat lalu sajikan.</p>\n            \n            <br><p><b>3. Ayam Palekko ala Rumahan</b></p>\n            <p>Bahan-bahan:</p>\n            <p>1 ekor ayam dipotong kecil-kecil</p>\n            <p>10 siung bawang merah</p>\n            <p>3 siung bawang putih</p>\n            <p>3 buah cabe merah</p>\n            <p>2 cm jahe</p>\n            <p>3 cm lengkuas</p>\n            <p>2 batang serei (geprek)</p>\n            <p>2 lembar daun jeruk</p>\n            <p>Air asam</p>\n            <p>Secukupnya kunyit bubuk</p>\n            <p>Secukupnya merica bubuk</p>\n            <p>Sesuai selera cabai rawit</p>\n            <p>Secukupnya garam dan penyedap</p>\n            <p>Minyak untuk menumis</p>\n            \n            <br><p>Cara membuat resep ayam palekko:</p>\n            <p>1. Cuci bersih ayam, potong kecil-kecil, rendam dengan air asam, garam dan merica, diamkan sekitar 10 menit.</p>\n            <p>2. Untuk bumbu halus blender bawang merah, bawang putih, cabai merah, cabai rawit, lengkuas, jahe, kunyit dan serai.</p>\n            <p>3. Panaskan minyak goreng sekitar 2 sendok makan, tumis bumbu halus dan masukkan daun jeruk serta bagian atas serai yg di geprek, biarkan hingga aroma bumbunya tercium.</p>\n            <p>4. Setelah tumisan agak kering masukkan ayam beserta air perendamnya beri garam dan penyedap.</p>\n            <p>5. Tambahkan air secukupnya dan biarkan hingga airnya kembali menyusut dan ayamnya matang sempurna.</p>\n            <p>6. Koreksi rasa lalu hidangkan.</p>', '3-resep-ayam-palekko-khas-bugis-enak-dan-mudah-dibuat-dijamin-bikin-ketagihan', '2022-12-15 01:53:39', '2022-12-15 01:53:39'),
(3, 1, 2, '1671034497-sambel.jpg', '5 Masakan Terpedas Diakui Sedunia, Nomor 1 Dari Indonesia, Lho!', '<p>Kamu pecinta makanan pedas? Nggak sah kalau belum mencicipi 5 kuliner pedas sejagat ini. Banyak warga dunia yang mencoba makanan ini mengakui kepedasannya yang maut dan bikin mereka sampai tobat-tobat!</p>\n            <p>Seluruh masakan ini menggunakan cabai sebagai bahannya. Cabai hingga saat ini masih diakui sebagai makanan yang rasanya pedas meski ada tingkatannya. Gak banyak basa-basi, mau tahu makanan apa saja yang terpedas di dunia?</p>\n            \n            <br><p><b>1. Sambal Ulek - Indonesia.</b></p>\n            <p>Buat orang Indonesia, makan gak pakai sambal rasanya kayak ada yang hilang separuh jiwa. Itulah kenapa sambal yang diulek dengan cobek ini jadi menu wajib saat menyantap hidangan. Mulai dari bakso, mie ayam, ayam bakar, dendeng, semua pakai sambal. Banyak orang di dunia mengakui, masakan ini jadi nomor satu yang paling pedas sedunia. Apalagi jika komposisinya murni cabai rawit merah yang punya nama lain rawit galak, rawit gila, atau rawit setan. Dijamin mulutmu terbakar habis!</p>\n            \n            <br><p><b>2. Suicide Chicken - Amerika Serikat</b></p>\n            <p>Judulnya sih agak-agak serem saat dilafalkan dalam bahasa Inggris. Tapi pas di-Indonesia-in, jadi ayam bunuh diri, hihihi. Anyway, ini makanan katanya pedes banget gak ketulungan. Sausnya berasal dari perpaduan saus tabasco, potongan cabai kering, dan cabai segar cincang sebelum akhirnya digoreng kering juga. Tuh, lihat tampilan Suicide Chicken, membuat liurmu sudah hampir tumpah.<p>\n            \n            <br><p><b>3. Jerk Chicken - Karibia</b></p>\n            <p>Lagi-lagi hidangan ini bernama aneh. Kalau di-Indonesia-in jadinya, ayam brengsek, hihihi. Jerk Chicken ini dimasak bersama rempah-rempah yang memang kuat seperti cengke, kayu manus, dan pala. Rempah ini dipadu dengan daun bawang, timi, bawang putih, serta cabai jenis scotch bonnet, salah satu yang terpedas di dunia. Jadi kalau kamu menyantap ini pastikan ada 8 gelas air untuk memadamkan rasa pedasnya, ya.<p>\n            \n            <br><p><b>4. Vindaloo - India</b></p>\n            <p>Hidangan asal India ini terbuat dari ayam yang juga dipadu bersama rempah-rempah berasa kuat mulai dari adas, biji mostar, ketumbar, dan jahe. Gak lupa cabe kering. Pedasnya makanan ini sampai ke tulang-tulang ayamnya segala. Mesti nyobain, nih. Ada juga Vandaloo kambing yang jadi alternatif kalau kamu bosan hidangan ayam.<p>\n            \n            <br><p><b>5. Wot - Ethiopia</b></p>\n            <p>Meski negerinya gersang, Ethiopia ternyata menyimpan kuliner yang pedasnya nauzubilah. Cabai kering dan barbere, dua bahan yang ditenggarai bikin makanan ini jadi pedes abis. Kalau kamu menyantap ini, siap-siap banjir keringat dan panas dalam.<p>', '5-masakan-terpedas-diakui-sedunia-nomor-1-dari-indonesia-lho', '2022-12-15 01:53:39', '2022-12-15 01:53:39'),
(4, 2, 1, '1671080412-labuana.jpg', 'Kentang Goreng La Buana Cafe Kualitasnya Patut Diacungi Jempol', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto itaque, pariatur quod et consectetur quasi quas eum quidem, placeat illo, similique optio deserunt nemo iste eos omnis. In, veritatis corrupti?', 'kentang-goreng-la-buana-cafe-kualitasnya-patut-diacungi-jempol', '2022-12-15 01:53:39', '2022-12-15 01:53:39');

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_post` bigint(20) UNSIGNED NOT NULL,
  `id_tag` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tag`
--

INSERT INTO `post_tag` (`id`, `id_post`, `id_tag`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 3, NULL, NULL),
(3, 2, 3, NULL, NULL),
(4, 3, 1, NULL, NULL),
(5, 3, 3, NULL, NULL),
(6, 4, 1, NULL, NULL),
(7, 4, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rekomendasi`
--

CREATE TABLE `rekomendasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_post` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rekomendasi`
--

INSERT INTO `rekomendasi` (`id`, `id_post`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-12-15 01:53:39', '2022-12-15 01:53:39'),
(2, 4, '2022-12-15 01:53:39', '2022-12-15 01:53:39');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2022-12-15 01:53:37', '2022-12-15 01:53:37'),
(2, 'penulis', 'web', '2022-12-15 01:53:37', '2022-12-15 01:53:37'),
(3, 'pembaca', 'web', '2022-12-15 01:53:37', '2022-12-15 01:53:37');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`id`, `nama`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'jajan', 'jajan', '2022-12-15 01:53:38', '2022-12-15 01:53:38'),
(2, 'sehat', 'sehat', '2022-12-15 01:53:38', '2022-12-15 01:53:38'),
(3, 'lezat', 'lezat', '2022-12-15 01:53:38', '2022-12-15 01:53:38');

-- --------------------------------------------------------

--
-- Table structure for table `tentang`
--

CREATE TABLE `tentang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tentang`
--

INSERT INTO `tentang` (`id`, `konten`, `facebook`, `instagram`, `twitter`, `created_at`, `updated_at`) VALUES
(1, '<b>We love hearing from our readers!\n            <p>if you...</p>\n            <p>\n            <li>Have any comments, questions, or suggestions about Food Escape, food, and beyond</li>\n            <li>Want to invite us to your food tasting, grand opening, and any other events</li>\n            <li>Are Interested in sponsorship or advertising opportunities with Food Escape</li>\n            </p><p>No need to worry about contacting us!</p>\n            <p>You are very welcome to leave comments on the blog, but we will never tolerate any unproductively negative comments, incluiding those with racism, pornography or social remaks.</p>', 'https://id-id.facebook.com/kfcindonesia/', 'https://www.instagram.com/hikmanrrr_/', 'https://twitter.com/KFCINDONESIA?', '2022-12-15 01:53:40', '2022-12-15 01:53:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '2022-12-15 01:53:37', '$2y$10$sKBtmfe5uHsL6yeO1qL77OJ6xN1I0z.Q4NBhhyC5kS.M/CSRFDa3m', NULL, '2022-12-15 01:53:37', '2022-12-15 01:53:37'),
(2, 'Prince Hussein', 'member@gmail.com', '2022-12-15 01:53:37', '$2y$10$wPXf96uJ1kgxSsVcptJNV.mHli0TVwPrqt5iS2Q9lN5cfrxcfK5jS', NULL, '2022-12-15 01:53:38', '2022-12-15 01:53:38'),
(3, 'hikma', 'hikmahnurrrrr@gmail.com', '2022-12-15 01:53:38', '$2y$10$NVouiH3axSYsDJgqOZCQm.qvoU3sCfpE53H1DEcPi2IuQ1Sqhc5R6', NULL, '2022-12-15 01:53:38', '2022-12-15 01:53:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `like`
--
ALTER TABLE `like`
  ADD PRIMARY KEY (`id`),
  ADD KEY `like_id_post_foreign` (`id_post`),
  ADD KEY `like_id_user_foreign` (`id_user`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_tag_id_post_foreign` (`id_post`),
  ADD KEY `post_tag_id_tag_foreign` (`id_tag`);

--
-- Indexes for table `rekomendasi`
--
ALTER TABLE `rekomendasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tentang`
--
ALTER TABLE `tentang`
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
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `like`
--
ALTER TABLE `like`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rekomendasi`
--
ALTER TABLE `rekomendasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `like`
--
ALTER TABLE `like`
  ADD CONSTRAINT `like_id_post_foreign` FOREIGN KEY (`id_post`) REFERENCES `post` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `like_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD CONSTRAINT `post_tag_id_post_foreign` FOREIGN KEY (`id_post`) REFERENCES `post` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_tag_id_tag_foreign` FOREIGN KEY (`id_tag`) REFERENCES `tag` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
