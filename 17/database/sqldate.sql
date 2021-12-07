-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 05 Gru 2021, 23:06
-- Wersja serwera: 10.4.14-MariaDB
-- Wersja PHP: 7.4.11

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
-- Struktura tabeli dla tabeli `rezerwujacy`
--

CREATE TABLE `rezerwujacy` (
  `id` varchar(255) DEFAULT NULL,
  `imie` varchar(255) DEFAULT NULL,
  `nazwisko` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



--
-- Zrzut danych tabeli `rezerwujacy`
--

INSERT INTO `rezerwujacy` (`id`, `imie`, `nazwisko`) VALUES
(1, 'Michał', 'Zdunek'),
(2, 'Kacper', 'Piotrowski'),
(3, 'Kamil', 'Kowal'),
(4, 'Bartek', 'Kowalski'),
(5, 'Jakub', 'Zdunek'),
(6, 'Andrzej', 'Kowal'),
(7, 'Wiktor', 'Zdunek'),
(8, 'Maciek', 'Kowalski'),
(9, 'Stefan', 'Zdunek'),
(10, 'Józek', 'Piotrowski'),
(11, 'Waldek', 'Kowal');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `stoliki`
--

CREATE TABLE `stoliki` (
  `id_stolika` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL,
  `typ_stolika` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL,
  `wielkosc` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;


--
-- Zrzut danych tabeli `stoliki`
--

INSERT INTO `stoliki` (`id_stolika`, `typ_stolika`, `wielkosc`) VALUES
(1, 'okragly', '1'),
(2, 'okragly', '2'),
(3, 'okragly', '3'),
(4, 'okragly', '4'),
(5, 'okragly', '5'),
(6, 'okragly', '6'),
(7, 'kwadratowy', '1'),
(8, 'kwadratowy', '2'),
(9, 'kwadratowy', '3'),
(10, 'kwadratowy', '4'),
(11, 'kwadratowy', '5'),
(12, 'kwadratowy', '7');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
