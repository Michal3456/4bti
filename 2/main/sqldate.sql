-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 06 Gru 2021, 22:57
-- Wersja serwera: 10.4.18-MariaDB
-- Wersja PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `gps`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `devices`
--

CREATE TABLE `devices` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `devices`
--

INSERT INTO `devices` (`id`, `name`, `location`) VALUES
(1, 'SamsungPhone', 'Warsaw'),
(2, 'Boeing787', 'NewYork'),
(3, 'ToyotaYaris', 'Berlin'),
(4, 'ValveHalfLife3Laptop', 'Missing'),
(5, 'Satmap', 'Pyongyang'),
(6, 'Smartwatch', 'Paris'),
(7, 'Blackhawk', 'Vietnam'),
(8, 'GPSTracker1', 'Brodnica'),
(9, 'GPSTracker2', 'Poznan'),
(10, 'GPSTracker3', 'Moscow');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `owners`
--

CREATE TABLE `owners` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `owners`
--

INSERT INTO `owners` (`id`, `firstname`, `lastname`) VALUES
(1, 'john', 'doe'),
(2, 'Emrys', 'Brookes'),
(3, 'Bruce', 'Avalos'),
(4, 'Elif', 'Sheppard'),
(5, 'Amelia', 'Connor'),
(6, 'Dylon', 'Humphries'),
(7, 'Reuben', 'Delaney'),
(8, 'Reem', 'Cullen'),
(9, 'Ayaan', 'Rose'),
(10, 'Lee', 'Reem');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `devices`
--
ALTER TABLE `devices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT dla tabeli `owners`
--
ALTER TABLE `owners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
