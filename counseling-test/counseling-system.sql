-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2024 at 07:50 PM
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
-- Database: `counseling-system`
--

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_09_25_135829_create_students_table', 1),
(7, '2023_09_30_194235_create_note_individus_table', 1),
(8, '2023_10_01_195850_create_note_kelompoks_table', 1),
(9, '2023_10_01_202217_create_tbl_kasuses_table', 1),
(10, '2023_10_01_202309_create_tbl_prestasis_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `noteindividu`
--

CREATE TABLE `noteindividu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `students_id` bigint(20) UNSIGNED NOT NULL,
  `konselingSebelumnya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isNew` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenisKonseling` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tglKonseling` date NOT NULL,
  `deskripsiMasalah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tindakan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rencanaTindakLanjut` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tglRTL` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `noteindividu`
--

INSERT INTO `noteindividu` (`id`, `user_id`, `students_id`, `konselingSebelumnya`, `isNew`, `jenisKonseling`, `tglKonseling`, `deskripsiMasalah`, `tindakan`, `catatan`, `rencanaTindakLanjut`, `tglRTL`, `status`) VALUES
(2, 1, 432432432, '-', 'Yes', 'Pribadi', '2023-10-25', '-', '-', '-', '-', '2023-10-25', 'Selesai'),
(4, 1, 123123123, '-', 'Yes', 'Pribadi', '2012-10-10', 'mm', 'kjh', 'kjh', 'kjh', '2012-10-10', 'Selesai'),
(5, 1, 432432432, '2', 'No', 'Pribadi', '2023-10-26', ';lk;lk', 'fgjhfhg', 'ghfhf', 'hgfjhgf', '2023-10-26', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `notekelompok`
--

CREATE TABLE `notekelompok` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `targetKonselingKelompok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tglRencanaPelaksanaan` date NOT NULL,
  `materi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tglRealisasiPelaksanaan` date NOT NULL,
  `evaluasiProses` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `evaluasiAkhir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descHambatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descAltSolusi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descRTL` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notekelompok`
--

INSERT INTO `notekelompok` (`id`, `user_id`, `targetKonselingKelompok`, `tglRencanaPelaksanaan`, `materi`, `tglRealisasiPelaksanaan`, `evaluasiProses`, `evaluasiAkhir`, `status`, `descHambatan`, `descAltSolusi`, `descRTL`) VALUES
(1, 1, 'Kelas VII TA 2019/2020', '2024-04-09', 'Pengabdian kepada masyarakat', '2024-04-09', 'Baik', 'Sangat Baik', 'Selesai', '-', '-', '-');

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `NISN` bigint(20) UNSIGNED NOT NULL,
  `Nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempatLahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tglLahir` date NOT NULL,
  `noHP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statusKeaktifanSiswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaAyah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noHPAyah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaanAyah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamatAyah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isAyahAlive` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaIbu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noHPIbu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaanIbu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamatIbu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isIbuAlive` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statusMaritalOrtu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isTinggalBersamaOrtu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaWali` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noHPWali` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaanWali` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamatWali` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `NISN`, `Nama`, `tempatLahir`, `tglLahir`, `noHP`, `Alamat`, `statusKeaktifanSiswa`, `namaAyah`, `noHPAyah`, `pekerjaanAyah`, `alamatAyah`, `isAyahAlive`, `namaIbu`, `noHPIbu`, `pekerjaanIbu`, `alamatIbu`, `isIbuAlive`, `statusMaritalOrtu`, `isTinggalBersamaOrtu`, `namaWali`, `noHPWali`, `pekerjaanWali`, `alamatWali`) VALUES
(1, 432432432, 'Adit', 'Batam', '2023-10-18', '465465', 'fdsfds', 'Aktif', 'Asep', '0811111111', 'Karyawan', 'Jalan Yos Sudarso Nomor 3', 'Hidup', 'Yuni', '08121212121', 'Ibu Rumah Tangga', 'Jalan Yos Sudarso Nomor 3', 'Hidup', 'Nikah', 'Yes', '-', '-', '-', '-'),
(2, 123123123, 'Budi', 'skldfjslfkj', '2012-10-10', '0182012834', 'lkjhlkhlkh', 'Aktif', 'lkfjhsd', '0808', 'lkjflsdjkf', 'dsjkfhkfh', 'Hidup', 'kajshdjk', '098098', 'fsdkjfhk', 'jhkjh', 'Hidup', 'Nikah', 'Yes', '-', '-', '-', '-'),
(7, 1231231231, 'test', 'test', '2012-10-23', '08999', 'iya', 'Aktif', 'Budi', '0898', 'Karyawan', 'iya', 'Hidup', 'Ani', '0897', 'Ibu Rumah Tangga', 'iya', 'Hidup', 'Nikah', 'Yes', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kasus`
--

CREATE TABLE `tbl_kasus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `NISN` bigint(20) UNSIGNED NOT NULL,
  `tglKasus` date NOT NULL,
  `penjelasan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penanganan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penanganKasus` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rencanaTindakLanjut` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_kasus`
--

INSERT INTO `tbl_kasus` (`id`, `NISN`, `tglKasus`, `penjelasan`, `penanganan`, `kelas`, `penanganKasus`, `rencanaTindakLanjut`, `status`) VALUES
(2, 432432432, '2013-02-01', 'Mencoret Dinding Sekolah', 'Hukum berdiri di depan kelas', 'VII-I', 'Pak Budi', '-', 'Selesai'),
(3, 432432432, '2013-09-21', 'Melawan Guru saat Menjelaskan', 'Dihukum di kantor guru', 'IX-III', 'Pak Taufik', '-', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prestasi`
--

CREATE TABLE `tbl_prestasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `NISN` bigint(20) UNSIGNED NOT NULL,
  `kelas` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tglPrestasi` date NOT NULL,
  `namaPrestasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tingkatPrestasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peringkatPrestasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_prestasi`
--

INSERT INTO `tbl_prestasi` (`id`, `NISN`, `kelas`, `tglPrestasi`, `namaPrestasi`, `tingkatPrestasi`, `peringkatPrestasi`) VALUES
(2, 432432432, 'IX-III', '2014-06-10', 'OSN tingkat kota', 'Kota', '1'),
(3, 432432432, 'VI-I', '1011-10-10', 'Basic Cup - Catur', 'Kota', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namaUser` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `namaUser`, `username`, `role`, `password`) VALUES
(1, 'admin', 'admin', 'Admin', '$2a$12$u10/WOZu1OWBcrlr2V7CIuoCnmDBEs.x5StW.K2rj19oVe0vXOiq2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noteindividu`
--
ALTER TABLE `noteindividu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`,`students_id`),
  ADD KEY `fkNISN` (`students_id`);

--
-- Indexes for table `notekelompok`
--
ALTER TABLE `notekelompok`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `NISN` (`NISN`);

--
-- Indexes for table `tbl_kasus`
--
ALTER TABLE `tbl_kasus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `NISN` (`NISN`);

--
-- Indexes for table `tbl_prestasi`
--
ALTER TABLE `tbl_prestasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `NISN` (`NISN`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `noteindividu`
--
ALTER TABLE `noteindividu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notekelompok`
--
ALTER TABLE `notekelompok`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_kasus`
--
ALTER TABLE `tbl_kasus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_prestasi`
--
ALTER TABLE `tbl_prestasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `noteindividu`
--
ALTER TABLE `noteindividu`
  ADD CONSTRAINT `fkNISN` FOREIGN KEY (`students_id`) REFERENCES `students` (`NISN`),
  ADD CONSTRAINT `fkuserid` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `notekelompok`
--
ALTER TABLE `notekelompok`
  ADD CONSTRAINT `FKUser` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `tbl_kasus`
--
ALTER TABLE `tbl_kasus`
  ADD CONSTRAINT `fkNISNN` FOREIGN KEY (`NISN`) REFERENCES `students` (`NISN`);

--
-- Constraints for table `tbl_prestasi`
--
ALTER TABLE `tbl_prestasi`
  ADD CONSTRAINT `nisnFK` FOREIGN KEY (`NISN`) REFERENCES `students` (`NISN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
