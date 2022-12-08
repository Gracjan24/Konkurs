-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20221207.ce5ce76a8d
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 08 Gru 2022, 23:26
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
(11, 'Sprzet', 'Hardware', 'Buildware', 'Basicware', 'My computer have the newest ... on world.'),
(12, 'Kod', 'Code', 'Kode', 'Cods', 'I saw your ... today. Do you write in Javascript ?'),
(14, 'Zasilacz', 'Power Supply', 'Support', 'Operator', 'Gear that transform energy for Computer.'),
(15, 'Hard Drive', 'Dysk Twardy', 'Case Drive', 'Heavy User', 'The thing on which you store all your data.'),
(16, 'Wentylator', 'Fan', 'Cold', 'Winter', 'Computer element that cools with air.');

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
(2, 'Chleb', 'Bread', 'Graham', 'Bake', 'I need to take some ... to eat with soup.'),
(3, 'Kiszenie', 'Pickles', 'Pudding', 'Cooling', 'I need to ... my cucumbers and pepper.'),
(4, 'Sól', 'Salt', 'Sugar', 'Tree', 'The rock that we use to season dish.'),
(5, 'Pieprz', 'Pepper', 'Paprika', 'Garlic', 'The Black Seasoning. Can be Colorfull.'),
(6, 'Czosnek', 'Garlic', 'Horseradish', 'Ginger', 'Toothed Violet Plant that we use for Dishes.'),
(7, 'Wino', 'Wine', 'Tequilla', 'Whiskey', 'Red Alcohol made from Grapes.'),
(8, 'Maka', 'Flour', 'Powder', 'Wheat', 'You can made with that some dough.'),
(9, 'Cukier', 'Sugar', 'Powder', 'Flour', 'Sweet white rocks we add to dishes.'),
(10, 'Patelnia', 'Pan', 'Pot', 'Leek', 'You can fry chicken on it.');

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
(2, 'Reflektor', 'Headlight', 'Mirror', 'Backlight', 'I need to change bulb in my ... .'),
(10, 'Filtr Powietrza', 'Air Filter', 'Changer Air', 'Cooler', 'Thing that purifies the air in the car.'),
(11, 'Poduszka Powietrzna', 'Air Bag', 'Pooler', 'Pusher', 'The material that pops with a car Crash.'),
(12, 'Hamulec', 'Brake', 'Gauge', 'Gear', 'The pedal that slow your car.'),
(13, 'Hamulec Ręczny', 'Emergency Brake', 'Power Brake', 'Clutch', 'You can do drift with it.'),
(14, 'Chłodnica', 'Radiator', 'Trunker', 'Air Filter', 'In the front of the car cooling the engine.'),
(15, 'Kierownica', 'Steering Wheel', 'Brakes', 'Glove Compartment', 'It allows you to control the car.'),
(16, 'Klakson', 'Horn', 'Yealer', 'Grand', 'You can use it in Emergency situation to comunicate something.'),
(17, 'Tłumik', 'Muffler', 'Full Flight', 'Nocatalyst', 'Mutes engine sounds.');

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
-- Zrzut danych tabeli `zawod_te`
--

INSERT INTO `zawod_te` (`id`, `pol`, `ang`, `bad`, `wrong`, `text`) VALUES
(1, 'Pieniądze', 'Money', 'Honey', 'Relive', 'You get payment in that from work.'),
(2, 'Złoto', 'Gold', 'Silver', 'Simple', 'The most famous ore on the market.'),
(3, 'Ubezpieczenie', 'Insurance', 'Fiance', 'Uber', 'If you have an accident you will get money.'),
(4, 'Podatek', 'Tax', 'Heavy Attack', 'Gauger', 'You need to pay them every month.'),
(5, 'Premia', 'Bonus', 'Payroll', 'Fiance', 'You can get it for doing above-average work'),
(6, 'Nadgodziny', 'Overtime', 'Heavy Time', 'Over Pay', 'You doing it after work.'),
(7, 'Zwrot Podatku', 'Tax Return', 'Taxary', 'Backary', 'I got my ... on my account. I gave them too much money.'),
(8, 'Płaca Minimalna', 'minimum wage', 'Lowest Price', 'Nothing Payed', 'The minimum you get for working in the country.');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT dla tabeli `zawod_kuch`
--
ALTER TABLE `zawod_kuch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT dla tabeli `zawod_mps`
--
ALTER TABLE `zawod_mps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT dla tabeli `zawod_te`
--
ALTER TABLE `zawod_te`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
