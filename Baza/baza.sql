-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20221207.ce5ce76a8d
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 08 Gru 2022, 19:25
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `baza`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `nickname` text NOT NULL,
  `adres_mail` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`ID`, `nickname`, `adres_mail`, `password`) VALUES
(1, 'Kalgon', '123', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zawod_it`
--

CREATE TABLE `zawod_it` (
  `id` int(11) NOT NULL,
  `pol` text NOT NULL,
  `ang` text NOT NULL,
  `bad` text NOT NULL,
  `wrong` text NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `zawod_it`
--

INSERT INTO `zawod_it` (`id`, `pol`, `ang`, `bad`, `wrong`, `text`) VALUES
(1, 'Procesor', 'Processor', 'Main Card', 'System', 'The Brain of the Computer'),
(2, 'System Operacyjny', 'Operating System ', 'Processing ', 'JavaScript', 'I need to install ... to turn on computer and install Games.'),
(3, 'Karta graficzna', 'Graphic card ', 'Expansion card ', 'Operating card', 'A device that displays the image on the monitor.'),
(4, 'Obudowa', 'Case', 'Syntax ', 'Build ', 'Thing that hold every device of computer inside.'),
(10, ' Oprogramowanie', 'Software', 'High-Ware', 'Free-Ware', 'I need to update my ... on that aplication,'),
(11, 'Sprzet', 'Hardware', 'Buildware', 'Basicware', 'My computer have the newest ... on world.');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zawod_kuch`
--

CREATE TABLE `zawod_kuch` (
  `id` int(11) NOT NULL,
  `pol` text NOT NULL,
  `ang` text NOT NULL,
  `bad` text NOT NULL,
  `wrong` text NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `zawod_kuch`
--

INSERT INTO `zawod_kuch` (`id`, `pol`, `ang`, `bad`, `wrong`, `text`) VALUES
(1, 'Ciasto', 'Cake', 'Apple Pie', 'Tart', 'That ... was delicious. Was it with nuts ?'),
(2, 'Chleb', 'Bread', 'Graham', 'Bake', 'I need to take some ... to eat with soup.');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zawod_mps`
--

CREATE TABLE `zawod_mps` (
  `id` int(11) NOT NULL,
  `pol` text COLLATE utf8mb4_polish_ci NOT NULL,
  `ang` text COLLATE utf8mb4_polish_ci NOT NULL,
  `bad` text COLLATE utf8mb4_polish_ci NOT NULL,
  `wrong` text COLLATE utf8mb4_polish_ci NOT NULL,
  `text` text COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `zawod_mps`
--

INSERT INTO `zawod_mps` (`id`, `pol`, `ang`, `bad`, `wrong`, `text`) VALUES
(1, 'Silnik', 'Engine', 'Interior', 'Battery', 'What type of ... does your car have under the hood ?'),
(2, 'Reflektor', 'Headlight', 'Mirror', 'Backlight', 'I need to change bulb in my ... .');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zawod_te`
--

CREATE TABLE `zawod_te` (
  `id` int(11) NOT NULL,
  `pol` text COLLATE utf8mb4_polish_ci NOT NULL,
  `ang` text COLLATE utf8mb4_polish_ci NOT NULL,
  `bad` text COLLATE utf8mb4_polish_ci NOT NULL,
  `wrong` text COLLATE utf8mb4_polish_ci NOT NULL,
  `text` text COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `zawod_it`
--
ALTER TABLE `zawod_it`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `zawod_kuch`
--
ALTER TABLE `zawod_kuch`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `zawod_mps`
--
ALTER TABLE `zawod_mps`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `zawod_te`
--
ALTER TABLE `zawod_te`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `zawod_it`
--
ALTER TABLE `zawod_it`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT dla tabeli `zawod_kuch`
--
ALTER TABLE `zawod_kuch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `zawod_mps`
--
ALTER TABLE `zawod_mps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `zawod_te`
--
ALTER TABLE `zawod_te`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
