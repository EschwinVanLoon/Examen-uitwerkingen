-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 24 nov 2020 om 09:36
-- Serverversie: 10.4.14-MariaDB
-- PHP-versie: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `examen`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `statistieken`
--

CREATE TABLE `statistieken` (
  `id` int(10) NOT NULL,
  `pagina` text NOT NULL,
  `url` varchar(16) NOT NULL,
  `aantal_bezoeken` int(10) DEFAULT NULL,
  `laatste_bezoek` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `statistieken`
--

INSERT INTO `statistieken` (`id`, `pagina`, `url`, `aantal_bezoeken`, `laatste_bezoek`) VALUES
(1, 'home', 'index.php', 1, '2020-11-23 17:46:51'),
(2, 'javaScript', 'javascript.php', 1, '2020-11-23 17:47:20'),
(3, 'PHP', 'phpSql.php', 1, '2020-11-23 17:47:19'),
(4, 'OO', 'oo.php', 2, '2020-11-23 17:47:24');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `statistieken`
--
ALTER TABLE `statistieken`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `statistieken`
--
ALTER TABLE `statistieken`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
