-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 06 Mar 2020 pada 03.19
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laporan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'operator', 'user\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `ip_address`, `login`, `time`) VALUES
(10, '::1', 'asisten', 1583395224);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_laporan`
--

CREATE TABLE `tbl_laporan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl` datetime NOT NULL,
  `nilai` varchar(20) NOT NULL,
  `keterangan` text NOT NULL,
  `nota` varchar(200) NOT NULL,
  `total` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'admin', '$2y$08$38XbLfXKS0l5Ra9hRVkeduph.dU0VjearjN8KVDBXU3FGltYldj0G', '', 'admin@admin.com', '', NULL, NULL, 'Z90l.iR6awUEnlnYpEBiYO', 1268889823, 1583460349, 1, 'Ali', '', '', '0000-00-00', 'ADMIN', NULL),
(2, '::1', 'user', '$2y$08$38XbLfXKS0l5Ra9hRVkeduph.dU0VjearjN8KVDBXU3FGltYldj0G', NULL, 'danis@gmail.com', NULL, NULL, NULL, 'elT9ORj4FkjnAIQa/BQh8e', 1553757026, 1583395849, 1, 'Danis Azidan', 'L', 'Slawi', '0000-00-00', NULL, NULL),
(15, '::1', 'Nadila125', '$2y$08$JUhSwA21n4yPn9fLazCDtOwNMsQ6FN6S83fzY02sT2hnXjnp71wcS', NULL, 'nadila4@gmail.com', NULL, NULL, NULL, NULL, 1554024854, NULL, 1, 'Siti Nadila', 'P', 'Jakarta', '2019-03-25', NULL, NULL),
(22, '::1', 'siswa', '$2y$08$/.QaIq2yD.N1eYPT4qcvVOxlMM5bEcm5u/Ur553D/14F1NyVN7pnO', NULL, 'siswa@gmail.com', NULL, '7s5JwcnGtQJWGJJPFACHjef3232ecf2e5a6accca', 1560694668, 'pX0Rp8dJ04w/qXdNC/1SCe', 1554797841, 1574097562, 1, 'Muhammad Siswaa', 'L', 'Slawi Wetan', '2019-04-20', NULL, NULL),
(28, '::1', 'Pras', '$2y$08$G.877.d4EfmeoA2617p8AuvepEFb855Ys.EI9dlvWwLITE5lw76HW', NULL, 'pras123@gmail.com', NULL, NULL, NULL, NULL, 1556261012, NULL, 1, 'Prasestya', 'L', 'Slawi', '2019-04-26', NULL, NULL),
(29, '::1', 'anamamam', '$2y$08$aUGxATt/qoFrhf2R7laok.i110zV5xU9FaL3.bZCMpp5kBuQoE5oy', NULL, 'aamma@gmail.com', NULL, NULL, NULL, NULL, 1557453983, NULL, 1, 'Amamamma', 'L', 'Anaamma', '2019-05-30', NULL, NULL),
(30, '::1', 'lili123', '$2y$08$yc9jdSVhDCnr1Jsgpf0zaOFLja5GwXPtiQa37MzhKsY5/lKuHhruq', NULL, 'lili@gmail.com', NULL, NULL, NULL, NULL, 1557456895, NULL, 1, 'Siti Ili', 'P', 'Slawi Wetan', '2019-05-24', NULL, NULL),
(31, '::1', 'Ginanjar123', '$2y$08$mgyMUfrtXyc0kNHRNz9x0.XrrNOOFWj24MMlnlIeJxj6Wxd7.N61a', NULL, 'ginanjar@gmail.com', NULL, NULL, NULL, NULL, 1557457009, NULL, 1, 'Ginanjar Wiro Sasmito', 'L', 'Brebes', '2019-05-22', NULL, NULL),
(65, '::1', 'Azka Siswa', '$2y$08$FlAOzksMWpjq4pVQIFKOf.dB6mhPwZvEJD21usVL7Cq5QgdYD8/nC', NULL, 'azkawildan10@gmail.com', NULL, NULL, NULL, 'TPqKeDuynIovTDvlvOcqou', 1560695542, 1561704629, 1, 'Joni', 'L', 'Tegal', '2019-05-28', NULL, NULL),
(66, '192.168.43.1', 'Novi123', '$2y$08$05pb98.jHGexLlw2X1Qud.lTk8sJod4dhPDu7sHYxV686MKlRzOXm', NULL, 'nvntarfwbw@gmail.com', 'ef52ad59b0e9a0a59aefabc284d876f6d20ebf26', NULL, NULL, NULL, 1560762577, NULL, 0, 'Novianto Arief', 'L', 'Tegal', '2018-06-17', NULL, NULL),
(69, '::1', 'ali budi', '$2y$08$38XbLfXKS0l5Ra9hRVkeduph.dU0VjearjN8KVDBXU3FGltYldj0G', NULL, 'budiali122@gmail.com', 'f42e1e0eec529fc0e07548393a672165cfde88d3', NULL, NULL, NULL, 1560901138, NULL, 0, 'Ali Budi P', 'L', 'Tegal', '2019-05-27', NULL, NULL),
(70, '::1', 'alibudii', '$2y$08$y2s0ghY7rwNOWOwxMYacgO13mG4Rq0kqVNI16ASBRgjwEepXZhtVi', NULL, 'budiali0709@gmail.com', 'a94c85b2eae3121954e2bd7edc9ad0dbaa9e6711', NULL, NULL, NULL, 1582328325, NULL, 0, 'Ali Budi P', 'L', 'Tegal', '1997-09-10', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_laporan`
--
ALTER TABLE `tbl_laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_laporan`
--
ALTER TABLE `tbl_laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
