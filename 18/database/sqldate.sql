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

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zdjecia`
--

CREATE TABLE `zdjecia` (
  `ID` int(255) NOT NULL,
  `zdjecie1` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `zdjecie2` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `zdjecie3` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `zdjecie4` varchar(255) COLLATE utf8_polish_ci NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `czas`
--

INSERT INTO `zdjecia` (`ID`, `zdjecie`) VALUES
(1, `4d.jfif`),
(2, `5d.jpg`),
(3, `6d.jpg`),
(4, `7d.PNG`);


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