-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jun 2022 pada 08.52
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reehat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `picture` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `updated_at` varchar(25) NOT NULL,
  `created_at` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `articles`
--

INSERT INTO `articles` (`id`, `title`, `description`, `picture`, `url`, `updated_at`, `created_at`) VALUES
(1, 'Kenali Tips Menggunakan Teknik Pomodoro, Teknik Belajar Efektif', '<p>https://satupersen.net/blog/kenali-teknik-pomodoro</p>', 'artikel_1.jpg', 'kenali-tips-menggunakan-teknik-pomodoro-teknik-belajar-efektif', '12 June 2022', '12 June 2022'),
(2, 'Tips Membangun Kebiasaan Baru Agar Semakin Produktif', '<p>https://satupersen.net/blog/tips-membangun-kebiasaan-baru</p>', 'artikel_2.jpg', 'tips-membangun-kebiasaan-baru-agar-semakin-produktif', '12 June 2022', '12 June 2022'),
(3, 'Pelajari Kiat-Kiat Ini Agar Kemampuan Decision Making Kamu Meningkat', '<p>Coming Soon!</p>', 'artikel_3.jpg', 'pelajari-kiat-kiat-ini-agar-kemampuan-decision-making-kamu-meningkat', '12 June 2022', '12 June 2022'),
(4, 'Sering Dikejar Deadline Tugas? Yuk Kenali Konsep Planning Fallacy', '<p>https://satupersen.net/blog/mengenal-planning-fallacy</p>', 'artikel_4.jpg', 'sering-dikejar-deadline-tugas-yuk-kenali-konsep-planning-fallacy', '12 June 2022', '12 June 2022'),
(5, '5 Cara Menentukan Prioritas Supaya Terhindar Dari The Mere Urgency Effect', '<p>https://satupersen.net/blog/the-mere-urgency-effect</p>', 'artikel_5.jpg', '5-cara-menentukan-prioritas-supaya-terhindar-dari-the-mere-urgency-effect', '12 June 2022', '12 June 2022'),
(6, 'Merasa Nggak Produktif? Mungkin Kamu Mengalami Productivity Shame!', '<p>https://satupersen.net/blog/productivity-shame</p>', 'artikel_6.jpg', 'merasa-nggak-produktif-mungkin-kamu-mengalami-productivity-shame', '12 June 2022', '12 June 2022'),
(7, 'Mengenal Zeigarnik Effect, Kebiasaan Mengingat Pekerjaan Yang Belum Usai', '<p>https://satupersen.net/blog/mengenal-zeigarnik-effect</p>', 'artikel_7.jpg', 'mengenal-zeigarnik-effect-kebiasaan-mengingat-pekerjaan-yang-belum-usai', '12 June 2022', '12 June 2022'),
(8, 'Time Management: Cara Mengatur Waktu Dengan Metode ALPEN Agar Produktif', '<p>https://satupersen.net/blog/cara-mengatur-waktu-dengan-metode-alpen-agar-produktif</p>', 'artikel_8.jpg', 'time-management-cara-mengatur-waktu-dengan-metode-alpen-agar-produktif', '12 June 2022', '12 June 2022'),
(9, 'Kenali 4 Macam Gaya Belajar Untuk Mengatasi Rasa Malas', '<p style=\"box-sizing: border-box; margin-bottom: 1.5em; min-width: 100%; overflow-wrap: break-word;\"><font color=\"#090a0b\" face=\"PT Serif, serif\"><span style=\"word-spacing: 1px;\"><b>https://satupersen.net/blog/4-macam-gaya-belajar</b></span></font><br></p>', 'artikel_9.jpg', 'kenali-4-macam-gaya-belajar-untuk-mengatasi-rasa-malas', '12 June 2022', '12 June 2022');

-- --------------------------------------------------------

--
-- Struktur dari tabel `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `webinar` varchar(128) NOT NULL,
  `cost` int(11) NOT NULL,
  `name_user` varchar(128) NOT NULL,
  `picture_user` varchar(128) NOT NULL,
  `status` varchar(25) NOT NULL,
  `updated_at` varchar(25) NOT NULL,
  `created_at` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `picture` varchar(128) NOT NULL,
  `role_id` int(2) NOT NULL,
  `updated_at` varchar(25) NOT NULL,
  `created_at` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `picture`, `role_id`, `updated_at`, `created_at`) VALUES
(1, 'Reehat System', 'reehat@admin.com', '$2y$10$KZ7GVdlfGhdo8DjdNyg64OomvhQSA2NaT9x9QWP.yBnqKrrQ8Ff.6', 'Vintage Beetle In Gasoline Station.png', 1, '12 June 2022', '12 June 2022'),
(2, 'Melda Yusnita', 'melda@gmail.com', '$2y$10$DWxjfEjhH.XcqonH12B01evojMxOhT/FfwWQcrrEhjJCWiJfFm3Vu', 'melda.jpeg', 2, '12 June 2022', '12 June 2022');

-- --------------------------------------------------------

--
-- Struktur dari tabel `webinars`
--

CREATE TABLE `webinars` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `mentor` varchar(128) NOT NULL,
  `cost` int(11) NOT NULL,
  `video_url` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `updated_at` varchar(25) NOT NULL,
  `created_at` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `webinars`
--

INSERT INTO `webinars` (`id`, `title`, `thumbnail`, `description`, `mentor`, `cost`, `video_url`, `url`, `updated_at`, `created_at`) VALUES
(1, 'Mengatasi Stress Akibat Tekanan Kerja', 'webinar_1.png', '<p>Coming Soon!</p>', 'Ghassani Salsabila, S.Psi', 85000, 'https://www.youtube.com/embed/DGUdLn0KBms', 'mengatasi-stress-akibat-tekanan-kerja', '12 June 2022', '12 June 2022'),
(2, 'Menuju Hidup Produktif Dan Sehat Mental', 'webinar_2.png', '<p>Coming Soon!</p>', 'Shabrina Fitriandari, M.Psi', 85000, 'https://www.youtube.com/embed/DGUdLn0KBms', 'menuju-hidup-produktif-dan-sehat-mental', '12 June 2022', '12 June 2022'),
(3, 'Melatih Emosi Dan Amarahmu Sebaik Mungkin', 'webinar_3.png', '<p>Coming Soon!</p>', 'Fadhilah Eryanda, M.PSi', 85000, 'https://www.youtube.com/embed/DGUdLn0KBms', 'melatih-emosi-dan-amarahmu-sebaik-mungkin', '12 June 2022', '12 June 2022'),
(4, 'Mengatasi Sifat Perfeksionis Dan Merubahnya Menjadi Potensi', 'webinar_4.png', '<p>Coming Soon!</p>', 'Fionna Callista, S.Psi', 85000, 'https://www.youtube.com/embed/DGUdLn0KBms', 'mengatasi-sifat-perfeksionis-dan-merubahnya-menjadi-potensi', '12 June 2022', '12 June 2022'),
(5, 'Mengatasi Trauma Inner Child', 'webinar_5.png', '<p>Coming Soon!</p>', 'Durah Amajida, S.Psi', 85000, 'https://www.youtube.com/embed/DGUdLn0KBms', 'mengatasi-trauma-inner-child', '12 June 2022', '12 June 2022');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `webinars`
--
ALTER TABLE `webinars`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `webinars`
--
ALTER TABLE `webinars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
