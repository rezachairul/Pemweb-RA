-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Des 2022 pada 16.16
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mapro`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi_mahasiswa`
--

CREATE TABLE `prodi_mahasiswa` (
  `nim` int(10) NOT NULL,
  `nama` char(20) NOT NULL,
  `prodi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `prodi_mahasiswa`
--

INSERT INTO `prodi_mahasiswa` (`nim`, `nama`, `prodi`) VALUES
(140036, 'Jack Sklington', 'Teknik Informatika'),
(140037, 'Markus Togi', 'Teknik Informatika'),
(140038, 'Lois Berry', 'Teknik Informatika'),
(140039, 'Jossy', 'Teknik Informatika'),
(140040, 'Fikri', 'Teknik Informatika'),
(140041, 'Irsan', 'Teknik Informatika'),
(1201410, 'Redzi', 'Teknik Elektro'),
(1201420, 'Patrik', 'Teknik Elektro'),
(1201440, 'Dodi', 'Teknik Geofisika'),
(1201454, 'Jerry', 'Teknik Geologi'),
(1201470, 'Roy', 'Teknik Sipil'),
(1201472, 'Lulu', 'Teknik Elektro'),
(1201480, 'Budi', 'Teknik Mesin'),
(1201481, 'Jono', 'Teknik Mesin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `prodi_mahasiswa`
--
ALTER TABLE `prodi_mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `prodi_mahasiswa`
--
ALTER TABLE `prodi_mahasiswa`
  MODIFY `nim` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12014104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
