-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 06 Gru 2021, 09:40
-- Wersja serwera: 10.4.21-MariaDB
-- Wersja PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `id16523533_praca2`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `czas`
--

CREATE TABLE `czas` (
  `ID` int(255) NOT NULL,
  `user_id` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `dzien` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `start` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `stop` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `razem` varchar(255) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `czas`
--

INSERT INTO `czas` (`ID`, `user_id`, `dzien`, `start`, `stop`, `razem`) VALUES
(1, 'worker1', '19/11/2021', '15:20:19', '15:20:30', '00:00:11'),
(2, 'worker2', '21/11/2021', '15:21:33', '15:21:51', '00:00:18'),
(3, 'worker3', '21/11/2021', '15:22:00', '15:22:05', '00:00:05'),
(4, 'worker1', '21/11/2021', '15:22:27', '15:22:33', '00:00:06'),
(5, 'worker6', '21/11/2021', '15:20:23', '15:20:28', '00:00:05'),
(6, 'worker7', '21/11/2021', '15:56:03', '15:56:36', '00:00:33'),
(7, 'worker3', '25/11/2021', '17:04:59', '17:05:06', '00:00:07'),
(8, 'worker2', '26/11/2021', '19:29:56', '19:30:10', '00:00:14'),
(9, 'worker3', '27/11/2021', '11:58:20', '11:58:46', '00:00:26'),
(10, 'worker2', '27/11/2021', '12:16:56', '12:17:03', '00:00:07'),
(11, 'worker2', '06/12/2021', '09:13:23', '09:39:28', '00:26:05'),
(12, 'worker1', '06/12/2021', '09:13:59', '09:14:06', '00:00:07');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `user_id` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `imie` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `haslo` varchar(255) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`ID`, `user_id`, `imie`, `nazwisko`, `haslo`) VALUES
(1, 'worker1', 'mateusz', 'zbikowski', 'haslo1'),
(2, 'worker2', 'michal', 'petrok', 'haslo2'),
(3, 'worker3', 'piotrek', 'nuncjusz', 'haslo3'),
(4, 'worker4', 'mateusz ', 'wajcheprzeloz', 'worker4'),
(5, 'worker5', 'tymek', 'zielinski', 'worker5'),
(6, 'worker6', 'aash', 'levis', 'haslo6'),
(7, 'worker7', 'tomasz', 'niejadek', 'haslo7');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `czas`
--
ALTER TABLE `czas`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `czas`
--
ALTER TABLE `czas`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
