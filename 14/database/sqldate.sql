-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 20 Gru 2021, 12:09
-- Wersja serwera: 10.4.21-MariaDB
-- Wersja PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `self_learning_system`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8_polish_ci NOT NULL,
  `link` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `images`
--

INSERT INTO `images` (`id`, `name`, `link`) VALUES
(1, 'gr1img1', 'https://imgur.com/XjDcZn5'),
(2, 'gr1img2', 'https://imgur.com/ZphRXKl'),
(3, 'gr1img3', 'https://imgur.com/3TPXhGC'),
(4, 'gr2img1', 'https://imgur.com/tlcL7p7'),
(5, 'gr2img2', 'https://imgur.com/yaYxO9i'),
(6, 'gr2img3', 'https://imgur.com/0MNLA2c'),
(7, 'gr3img1', 'https://imgur.com/MBpVNun'),
(8, 'gr3img2', 'https://imgur.com/HTNxY1C'),
(9, 'gr3img3', 'https://imgur.com/gJ6r1Mb'),
(10, 'gr4img1', 'https://imgur.com/oGEXTkC'),
(11, 'gr4img2', 'https://imgur.com/p4c10bW'),
(12, 'gr4img3', 'https://imgur.com/rtFe8vn');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `images`
--
ALTER TABLE `images`
  ADD UNIQUE KEY `id_image` (`id`) USING BTREE;

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
