-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 10 Gru 2021, 10:36
-- Wersja serwera: 10.4.14-MariaDB
-- Wersja PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `users`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `fname` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `adress` varchar(255) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `adress`) VALUES
(1, 'Pan', 'Krecik', 'Brodnica'),
(2, 'Janusz', 'Kowalski', 'Toruń'),
(3, 'Jan', 'Tracz', 'Brodnica'),
(4, 'Janusz', 'Wesoły', 'Toruń'),
(5, 'Damian', 'Wąśicki', 'Brodnica'),
(6, 'Jarek', 'Niewesoły', 'Toruń'),
(7, 'Dominik', 'Karp', 'Gdańsk'),
(8, 'Bartosz', 'Rydzyk', 'Toruń'),
(9, 'Szymon', 'Kokowicz', 'Brodnica'),
(10, 'Mateusz', 'Sobierajski', 'Toruń');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
