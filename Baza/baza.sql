-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 02 Gru 2022, 12:15
-- Wersja serwera: 10.1.9-MariaDB
-- Wersja PHP: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `text` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `zawod_it`
--

INSERT INTO `zawod_it` (`id`, `pol`, `ang`, `bad`, `wrong`, `text`, `answer`) VALUES
(1, 'Procesor', 'Processor', 'Main Card', 'System', 'The Brain of the Computer', 'Processor'),
(2, 'System Operacyjny', 'Operating System ', 'Processing ', 'JavaScript', 'I need to install ... to turn on computer and install Games.', 'Operating  System'),
(3, 'Karta graficzna', 'Graphic card ', 'Expansion card ', 'Operating card', 'A device that displays the image on the monitor.', 'Graphic card'),
(4, 'Obudowa', 'Case', 'Syntax ', 'Build ', 'Thing that hold every device of computer inside.', 'Case');

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
  `text` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `zawod_kuch`
--

INSERT INTO `zawod_kuch` (`id`, `pol`, `ang`, `bad`, `wrong`, `text`, `answer`) VALUES
(1, 'Ciasto', 'Cake', 'Apple Pie', 'Tart', 'That ... was delicious. Was it with nuts ?', 'Cake'),
(2, 'Chleb', 'Bread', 'Graham', 'Bake', 'I need to take some ... to eat with soup.', 'Bread');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `zawod_it`
--
ALTER TABLE `zawod_it`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zawod_kuch`
--
ALTER TABLE `zawod_kuch`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `zawod_it`
--
ALTER TABLE `zawod_it`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT dla tabeli `zawod_kuch`
--
ALTER TABLE `zawod_kuch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
