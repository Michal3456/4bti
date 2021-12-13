-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 06 Gru 2021, 22:51
-- Wersja serwera: 10.4.22-MariaDB
-- Wersja PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `projektpp`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `answer`
--

CREATE TABLE `answer` (
  `ID` int(255) NOT NULL,
  `Answer` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `answer`
--

INSERT INTO `answer` (`ID`, `Answer`) VALUES
(1, 'Wszystko dobrze!'),
(2, 'Mieszkam w Brodnicy'),
(3, 'Chodzę do CKZIU w Brodnicy'),
(4, 'Bardzo dobrze! Super sie czuje w tej szkole.');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `question`
--

CREATE TABLE `question` (
  `ID` int(255) NOT NULL,
  `Question` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `question`
--

INSERT INTO `question` (`ID`, `Question`) VALUES
(1, 'Co tam u ciebie?'),
(2, 'Skąd jesteś?'),
(3, 'Gdzie chodzisz do szkoły?'),
(4, 'Jak oceniasz tą szkołę?');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
