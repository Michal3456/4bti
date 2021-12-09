-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 09 Gru 2021, 16:22
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
-- Baza danych: `fotobudka`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `photos`
--

CREATE TABLE `photos` (
  `id` int(100) NOT NULL,
  `imie` text COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` text COLLATE utf8_polish_ci NOT NULL,
  `data` date NOT NULL,
  `link` text COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `photos`
--

INSERT INTO `photos` (`id`, `imie`, `nazwisko`, `data`, `link`) VALUES
(1, 'Jacek', 'Wasielewski', '2021-12-02', 'http://szarafinskij.ssolk.pl/f/1.html'),
(2, 'Juliusz', 'Czarnecki', '2021-12-01', 'http://szarafinskij.ssolk.pl/f/2.html'),
(3, 'Jacek', 'Pała', '2021-12-05', 'http://szarafinskij.ssolk.pl/f/3.html'),
(4, 'Jacek', 'Wasielewski', '2021-12-05', 'http://szarafinskij.ssolk.pl/f/4.html'),
(5, 'Jacek', 'Pała', '2021-12-02', 'http://szarafinskij.ssolk.pl/f/5.html'),
(6, 'Jacek', 'Wasielewski', '2021-12-08', 'http://szarafinskij.ssolk.pl/f/6.html'),
(7, 'Juliusz', 'Czarnecki', '2021-12-07', 'http://szarafinskij.ssolk.pl/f/7.html'),
(8, 'Olgierd ', 'Everec', '2021-12-06', 'http://szarafinskij.ssolk.pl/f/8.html'),
(9, 'Zofia', 'Ponton', '2021-12-05', 'http://szarafinskij.ssolk.pl/f/9.html'),
(10, 'Olgierd', 'Everec', '2021-12-04', 'http://szarafinskij.ssolk.pl/f/10.html'),
(11, 'Zofia', 'Ponton', '2021-12-02', 'http://szarafinskij.ssolk.pl/f/11.html'),
(12, 'Olgierd', 'Everec', '2021-12-03', 'http://szarafinskij.ssolk.pl/f/12.html');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
