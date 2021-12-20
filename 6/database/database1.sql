-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 20 Gru 2021, 9:15
-- Wersja serwera: 10.4.16-MariaDB
-- Wersja PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `reservation`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `reservation1`
--

CREATE TABLE `reservation1` (
  `id` int(255) NOT NULL,
  `firstname` varchar(300) COLLATE utf8mb4_polish_ci NOT NULL,
  `lastname` varchar(300) COLLATE utf8mb4_polish_ci NOT NULL,
  `class` int(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `reservation1`
--

INSERT INTO `reservation1` (`id`, `firstname`, `lastname`, `class`, `date`) VALUES
(1, 'Jan', 'Kowalski', 12, '2021-12-10'),
(2, 'Kacper', 'Grabek', 69, '2021-09-04'),
(3, 'Krynio', 'Barto', 44, '2021-01-26'),
(4, 'Jacob', 'Fish', 6, '2021-04-10'),
(5, 'Jacob', 'Rice', 13, '2021-05-15'),
(6, 'Bartolini', 'Blubery', 1, '2021-11-23'),
(7, 'Sebic', 'Kakukic', 2, '2021-03-02'),
(8, 'Daras', 'Tomaszewic', 50, '2021-08-05'),
(9, 'Dawic', 'Rempuszewicic', 34, '2021-06-27'),
(10, 'Majkel', 'Mini', 45, '2021-07-30');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `reservation1`
--
ALTER TABLE `reservation1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `reservation1`
--
ALTER TABLE `reservation1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
