-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jul 2022 pada 11.44
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbeventorganizer`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar`
--

CREATE TABLE `daftar` (
  `id` int(11) NOT NULL,
  `tanggal_daftar` date DEFAULT NULL,
  `alasan` varchar(200) DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `kegiatan_id` int(11) NOT NULL,
  `kategori_peserta_id` int(11) NOT NULL,
  `nosertifikat` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `daftar`
--

INSERT INTO `daftar` (`id`, `tanggal_daftar`, `alasan`, `users_id`, `kegiatan_id`, `kategori_peserta_id`, `nosertifikat`) VALUES
(3, '2022-06-12', 'ingin kuliah di luar negeri', 2, 1, 2, 'S-2022-VI-001'),
(10, '2022-07-08', 'Ingin menempuh pendidikan diluar negeri', 4, 1, 2, NULL),
(11, '2022-07-08', 'Ingin bersepeda supaya sehat dan menambah relasi', 5, 3, 1, NULL),
(12, '2022-07-08', 'Menambah ilmu pemrogaman pada php', 6, 4, 3, NULL),
(13, '2022-07-08', 'Menambah pengetahuan pada bidang spiritual dalam mental kesehatan', 7, 5, 4, NULL),
(14, '2022-07-08', 'Ingin menambah skill dan mendapatkan juara', 8, 6, 5, NULL),
(17, '2022-07-08', 'Menambah ilmu dan diamalkan dalam kehidupan sehari-hari', 6, 7, 3, NULL),
(18, '2022-07-08', 'Ingin menambah ilmu masak dan menikmati hidangan yang disediakan', 9, 8, 6, NULL),
(21, '2022-07-08', 'Ingin pergi ke luar negeri', 3, 1, 2, NULL),
(22, '2022-07-08', 'Ingin menambah ilmu', 3, 1, 2, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_kegiatan`
--

CREATE TABLE `jenis_kegiatan` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `jenis_kegiatan`
--

INSERT INTO `jenis_kegiatan` (`id`, `nama`) VALUES
(1, 'Seminar'),
(2, 'Workshop'),
(3, 'Event Olah Raga'),
(4, 'Bazaar'),
(5, 'Pelatihan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_peserta`
--

CREATE TABLE `kategori_peserta` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kategori_peserta`
--

INSERT INTO `kategori_peserta` (`id`, `nama`) VALUES
(1, 'Pelajar'),
(2, 'Mahasiswa'),
(3, 'Karyawan Swasta'),
(4, 'Guru/Dosen'),
(5, 'Umum'),
(6, 'ASN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `judul` varchar(200) DEFAULT NULL,
  `kapasitas` int(11) DEFAULT NULL,
  `harga_tiket` double DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `narasumber` varchar(200) DEFAULT NULL,
  `tempat` varchar(100) DEFAULT NULL,
  `pic` varchar(45) DEFAULT NULL,
  `foto_flyer` varchar(30) DEFAULT NULL,
  `jenis_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `judul`, `kapasitas`, `harga_tiket`, `tanggal`, `narasumber`, `tempat`, `pic`, `foto_flyer`, `jenis_id`) VALUES
(1, 'Seminar Sukses Kuliah di Luar Negeri', 100, 25000, '2022-06-30', 'Dr. Seto Waluyo, Dr. Annisa PhD, Misna Azqia M.Kom', 'Aula Kampus B2 STT-NF', 'ahmad fathan', '1.jpg', 1),
(3, 'Bike Event 2022', 150, 25000, '2022-07-31', 'Aiman Cahyadi', 'CFD Jakarta', 'Bayu Putra', '3.png', 3),
(4, 'Pelatihan Pemrogaman Web PHP ', 50, 50000, '2022-04-05', 'Adora Montminy', 'Virtual', 'Fadhil', '4.png', 5),
(5, 'Spirituality in Mental Health', 70, 10000, '2022-07-04', 'Annisa Nurahmah S.Pd.I.', 'Kampus NF', 'Jordan', '5.png', 1),
(6, 'Event Valorant antar Kampus', 120, 35000, '2022-07-05', 'BerserX', 'Nurul Fikri, Lenteng Agung, Jakarta Selatan', 'Andi', '6.png', 3),
(7, 'Pelatihan Pemrogaman Web PHP ', 50, 100000, '2022-07-05', 'Rezky S. M.Kom', 'STT Terpadu Nurul Fikri', 'Hilmi Sofyan', '7.png', 2),
(8, 'Kuliner Nusantara', 100, 0, '2022-07-08', 'Chef Juna', 'Kemayoran', 'Abdus Putra', '8.png', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `created_at`, `last_login`, `status`, `role`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'admin@gmail.com', '2022-06-12 00:07:42', '2022-06-12 00:07:42', 1, 'administrator'),
(2, 'aminah', '90b74c589f46e8f3a484082d659308bd', 'aminah@gmail.com', '2022-06-12 00:07:44', '2022-06-12 00:07:44', 1, 'public'),
(3, 'siswa1', '827ccb0eea8a706c4c34a16891f84e7b', 'siswa1@gmail.com', '2022-07-07 23:45:46', '2022-07-07 23:45:46', 0, 'public'),
(4, 'Bayu', '827ccb0eea8a706c4c34a16891f84e7b', 'Bayu77@gmail.com', '2022-07-08 01:42:34', '2022-07-08 01:42:34', 0, 'public'),
(5, 'abdus', '827ccb0eea8a706c4c34a16891f84e7b', 'abdusgans@gmail.com', '2022-07-08 01:44:52', '2022-07-08 01:44:52', 0, 'public'),
(6, 'nabilah', '827ccb0eea8a706c4c34a16891f84e7b', 'nabilahhh@gmail.com', '2022-07-08 01:46:44', '2022-07-08 01:46:44', 0, 'public'),
(7, 'nadira', '827ccb0eea8a706c4c34a16891f84e7b', 'nadirarrs@gmail.com', '2022-07-08 01:48:30', '2022-07-08 01:48:30', 0, 'public'),
(8, 'hilmi', '827ccb0eea8a706c4c34a16891f84e7b', 'shofyann@gmail.com', '2022-07-08 01:50:33', '2022-07-08 01:50:33', 0, 'public'),
(9, 'faiz', '827ccb0eea8a706c4c34a16891f84e7b', 'faiz@sttnf.ac.id', '2022-07-08 02:17:16', '2022-07-08 02:17:16', 0, 'public'),
(10, 'Muha', '827ccb0eea8a706c4c34a16891f84e7b', 'Muha@gmail.com', '2022-07-08 06:48:53', '2022-07-08 06:48:53', 0, 'public');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pesanan_users1_idx` (`users_id`),
  ADD KEY `fk_pesanan_produk1_idx` (`kegiatan_id`),
  ADD KEY `fk_daftar_kategori_peserta1_idx` (`kategori_peserta_id`);

--
-- Indeks untuk tabel `jenis_kegiatan`
--
ALTER TABLE `jenis_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori_peserta`
--
ALTER TABLE `kategori_peserta`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_produk_jenis_produk_idx` (`jenis_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `jenis_kegiatan`
--
ALTER TABLE `jenis_kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kategori_peserta`
--
ALTER TABLE `kategori_peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `daftar`
--
ALTER TABLE `daftar`
  ADD CONSTRAINT `fk_daftar_kategori_peserta1` FOREIGN KEY (`kategori_peserta_id`) REFERENCES `kategori_peserta` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pesanan_produk1` FOREIGN KEY (`kegiatan_id`) REFERENCES `kegiatan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pesanan_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD CONSTRAINT `fk_produk_jenis_produk` FOREIGN KEY (`jenis_id`) REFERENCES `jenis_kegiatan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
