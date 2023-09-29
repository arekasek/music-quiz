-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 18 Paź 2022, 18:38
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `song`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `muzyka`
--

CREATE TABLE `muzyka` (
  `id` int(11) NOT NULL,
  `imie_wyk` varchar(30) DEFAULT NULL,
  `nazwisko_wyk` varchar(30) DEFAULT NULL,
  `tytul_pios` varchar(30) DEFAULT NULL,
  `album` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `muzyka`
--

INSERT INTO `muzyka` (`id`, `imie_wyk`, `nazwisko_wyk`, `tytul_pios`, `album`) VALUES
(1, 'Miroslaw', 'Trzcinski', 'O tobie kochana', 'Jedyna'),
(2, 'Tomasz', 'Iwanca', 'Na szczycie', 'O.R.S'),
(3, 'Marcin', 'Siwka', 'Jak zapomniec', 'Widioteka'),
(4, 'Alan', 'Walker', 'Faded', 'Spectre'),
(5, 'Arek', 'Asmus', 'impreza', '123'),
(18, 'Bruno', 'Mars', 'Uptown funk', 'Grenade');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `odpowiedzi`
--

CREATE TABLE `odpowiedzi` (
  `id` int(5) NOT NULL,
  `odp` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `odpowiedzi`
--

INSERT INTO `odpowiedzi` (`id`, `odp`) VALUES
(1, 'a'),
(2, 'c'),
(3, 'b');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `muzyka`
--
ALTER TABLE `muzyka`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `odpowiedzi`
--
ALTER TABLE `odpowiedzi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `muzyka`
--
ALTER TABLE `muzyka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT dla tabeli `odpowiedzi`
--
ALTER TABLE `odpowiedzi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
