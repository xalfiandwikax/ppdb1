-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jan 2024 pada 19.57
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata`
--

CREATE TABLE `biodata` (
  `id_biodata` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `no_kk` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `ttl` varchar(30) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `gambar_akta` varchar(500) NOT NULL,
  `gambar_kk` varchar(500) NOT NULL,
  `gambar_ijazah` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `biodata`
--

INSERT INTO `biodata` (`id_biodata`, `nama_lengkap`, `nik`, `no_kk`, `jenis_kelamin`, `ttl`, `alamat`, `pendidikan`, `gambar_akta`, `gambar_kk`, `gambar_ijazah`) VALUES
(13, 'alfian', '3276112309960001', '3276030256866689', 'Laki-Laki', '2024-01-01', 'Bojongsari baru', 'SMP (Paket B)', '', 'noname.pdf', 'BAB-4-Sistem-Komputer-Siswa.pdf'),
(14, 'suratmi', '3276112309960001', '3276030256866689', 'Perempuan', '2024-01-01', 'Bojongsari Baru', 'SMP (Paket B)', '125-pengabdian.pdf', '4_SURAT_KUASA_DRS_KARNIDA.pdf', 'PPDB_LANGGENGIKHLAS.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `role_id` int(10) NOT NULL,
  `is_aktif` int(1) NOT NULL,
  `tanggal_dibuat` int(11) NOT NULL,
  `gambar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tabel_user`
--

INSERT INTO `tabel_user` (`id`, `nama`, `email`, `password`, `no_telp`, `role_id`, `is_aktif`, `tanggal_dibuat`, `gambar`) VALUES
(1, 'alfian dwika m.p', 'xalfiandwikax@gmail.com', '$2y$10$ghikCi6SJ2IPyws5XCtTae7D64ae5HQZa33CaBWH/6FJrQW6pDsD6', '087876279830', 1, 1, 1704710419, 'default.jpg'),
(2, 'jokul', 'jokul@gmail.com', '$2y$10$IJZpmnd9VW.iblqvUJvHRePcrO2t9/nvbD1nTISvr94rrn4q8VIl2', '08121984646', 2, 1, 1704710492, 'default.jpg'),
(3, 'siam', 'siam@gmail.com', '$2y$10$lsGL0V0Es7SOoOuqdOvvoOBUuEfiomdWwpY8oFNK1k.GnIkYz963a', '087876279830', 2, 1, 1704815949, 'default.jpg'),
(4, 'suratmi', 'suratmi@gmail.com', '$2y$10$7obUU6OCpTQPBhD.hnwibe2axjgJhJ1Ny/LMwATZYlMOOiDpImGeq', '08121984646', 2, 1, 1705162025, 'default.jpg'),
(5, 'lezuter', 'lezuter@gmail.com', '$2y$10$lerjTHG2KSxY9HR4Oy8jiOxNzf0ce8GR723RCTNX/ho5gTZO07qcC', '081381836813', 2, 1, 1705321033, 'default.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id_biodata`);

--
-- Indeks untuk tabel `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id_biodata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
