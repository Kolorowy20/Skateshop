-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 29 Lis 2021, 21:03
-- Wersja serwera: 10.4.21-MariaDB
-- Wersja PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `projekt_konrad`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `deski`
--

CREATE TABLE `deski` (
  `id_deski` int(10) UNSIGNED NOT NULL,
  `rodzaj` varchar(15) DEFAULT NULL,
  `model` varchar(100) DEFAULT NULL,
  `cena` decimal(6,2) DEFAULT NULL,
  `opis` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `deski`
--

INSERT INTO `deski` (`id_deski`, `rodzaj`, `model`, `cena`, `opis`) VALUES
(1, 'cruiser', 'Deskorolka Cruiser NKX Leaf Classic', '271.89', 'w'),
(2, 'cruiser', 'Deskorolka Cruiser Maple Canada Leaf', '209.99', 'w'),
(3, 'cruiser', 'Deskorolka Cruiser Drewniana Smiley Face', '149.99', 'w'),
(4, 'deski', 'Deskorolka Kompletna Enjoi Panda Whitey', '289.00', 'w'),
(5, 'deski', 'Deskorolka Kompletna Donut Drewniana', '199.00', 'w'),
(6, 'deski', 'Deskorolka kompletna Fish Retro Black', '329.00', 'w'),
(7, 'longboard', 'Deskorolka Longboard Drop Switch Abstract', '799.00', 'w'),
(8, 'longboard', 'Deskorolka Longboard 100 Drop Mini Floral', '379.99', 'w'),
(9, 'longboard', 'Deskorolka Longboard Master Pintail', '188.00', 'w'),
(10, 'waveboeard', 'Deskorolka Waveboard Street Surfing black', '119.99', 'w'),
(11, 'waveboeard', 'Deskorolka Waveboard Wave Original Street Surfing', '419.00', 'w'),
(12, 'waveboeard', 'Deskorolka Waveboard Street Surfing blue', '69.99', 'w'),
(13, 'pennyboard', 'Deskorolka Pennyboard Fiszka Drewniana', '149.00', 'w'),
(14, 'pennyboard', 'Deskorolka Pennyboard Fiszka SKY NILS', '119.00', 'w'),
(15, 'pennyboard', 'Deskorolka Pennyboard Fiszka WORKER Sunbow 22 ABEC-7', '249.99', 'w');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klienci`
--

CREATE TABLE `klienci` (
  `id_klienta` int(10) UNSIGNED NOT NULL,
  `imie` varchar(20) DEFAULT NULL,
  `login` varchar(20) DEFAULT NULL,
  `haslo` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `data_utworzenia` date DEFAULT NULL,
  `uprawnienia` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `klienci`
--

INSERT INTO `klienci` (`id_klienta`, `imie`, `login`, `haslo`, `email`, `data_utworzenia`, `uprawnienia`) VALUES
(1, 'Admin', 'admin', 'admin', 'admin@admin.com', '2021-11-28', 'admin'),
(2, 'Konrad', 'qwe', 'qwe', 'qwe@qwe.pl', '2021-11-28', 'klient'),
(3, 'Test', 'test', 'test', 'test@test.com', '2021-11-28', 'klient'),
(4, 'Jan', 'qwerty', 'qwerty', '222@ff.pc', '2021-11-28', 'klient'),
(5, 'Jakub', 'jakub', 'kuba', 'ulaniec@gmail.com', '2021-11-29', 'klient'),
(6, 'Maja', 'maja', 'maja', 'maja@gmail.com', '2021-11-29', 'klient');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `koszyk`
--

CREATE TABLE `koszyk` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_deski` int(10) DEFAULT NULL,
  `rodzaj` varchar(15) DEFAULT NULL,
  `model` varchar(50) DEFAULT NULL,
  `ilosc` int(100) DEFAULT NULL,
  `cena` decimal(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wysylka`
--

CREATE TABLE `wysylka` (
  `id_wysylki` int(10) UNSIGNED NOT NULL,
  `imie` varchar(20) DEFAULT NULL,
  `nazwisko` varchar(25) DEFAULT NULL,
  `miejscowosc` varchar(30) DEFAULT NULL,
  `ulica` varchar(60) DEFAULT NULL,
  `kod_pocztowy` varchar(10) DEFAULT NULL,
  `telefon` varchar(13) DEFAULT NULL,
  `dostawa` varchar(25) DEFAULT NULL,
  `plec` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `wysylka`
--

INSERT INTO `wysylka` (`id_wysylki`, `imie`, `nazwisko`, `miejscowosc`, `ulica`, `kod_pocztowy`, `telefon`, `dostawa`, `plec`) VALUES
(1, 'Konrad', 'Białas', 'Opoczno', 'Spacerowa', '26300', '234324324', 'Kurier standard', 'Mężczyzna'),
(2, 'Jan', 'Wiśniewski', 'Opoczno', 'Św. Wojciecha', '26300', '213215324', 'Odbiór w sklepie', 'Mężczyzna'),
(3, 'Maja', 'Szot', 'Opoczno', 'Biernackiego', '26300', '545754456', 'Kurier za pobraniem', 'Kobieta');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamowienia`
--

CREATE TABLE `zamowienia` (
  `id_zamowienia` int(10) UNSIGNED NOT NULL,
  `imie` varchar(20) NOT NULL,
  `id_klienta` int(7) NOT NULL,
  `id_deski` int(7) NOT NULL,
  `dostawa` varchar(20) DEFAULT NULL,
  `cena` int(11) NOT NULL,
  `data_utworzenia` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `zamowienia`
--

INSERT INTO `zamowienia` (`id_zamowienia`, `imie`, `id_klienta`, `id_deski`, `dostawa`, `cena`, `data_utworzenia`) VALUES
(1, 'Konrad', 5, 15, 'Kurier standard', 250, '2021-11-29'),
(2, 'Jan', 5, 12, 'Odbiór w sklepie', 70, '2021-11-29'),
(3, 'Maja', 6, 7, 'Kurier za pobraniem', 799, '2021-11-29');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `deski`
--
ALTER TABLE `deski`
  ADD PRIMARY KEY (`id_deski`);

--
-- Indeksy dla tabeli `klienci`
--
ALTER TABLE `klienci`
  ADD PRIMARY KEY (`id_klienta`);

--
-- Indeksy dla tabeli `koszyk`
--
ALTER TABLE `koszyk`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `wysylka`
--
ALTER TABLE `wysylka`
  ADD PRIMARY KEY (`id_wysylki`);

--
-- Indeksy dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  ADD PRIMARY KEY (`id_zamowienia`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `deski`
--
ALTER TABLE `deski`
  MODIFY `id_deski` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT dla tabeli `klienci`
--
ALTER TABLE `klienci`
  MODIFY `id_klienta` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `koszyk`
--
ALTER TABLE `koszyk`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `wysylka`
--
ALTER TABLE `wysylka`
  MODIFY `id_wysylki` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  MODIFY `id_zamowienia` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
