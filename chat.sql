-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Sep 2022 pada 11.31
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `badibot_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `chat`
--

CREATE TABLE `chat` (
  `id` int(10) NOT NULL,
  `pertanyaan` varchar(200) NOT NULL,
  `jawaban` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `chat`
--

INSERT INTO `chat` (`id`, `pertanyaan`, `jawaban`) VALUES
(1, 'hai | hallo | halloo | hay | hi | woy', 'Hai kawan, Aku adalah Badibot. Silakan Ketik apa yang pengin kamu tahu tentangku.'),
(2, 'siapa kamu | siapa | kamu? | who ', 'Saya hanya Bot. Anda bisa memanggil saya \"Badibot'),
(3, 'terimakasih | thank | thanku | makasih', 'sama-sama teman'),
(4, 'selamat pagi | pagi | morning | good morning', 'Hai, Selamat Pagi teman'),
(5, 'selamat siang | siang | afternoon', 'Hai, Selamat Siang teman');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
