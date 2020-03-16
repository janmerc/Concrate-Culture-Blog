-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Pon 16. bře 2020, 16:40
-- Verze serveru: 10.4.11-MariaDB
-- Verze PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `blog`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `post`
--

CREATE TABLE `post` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `content` varchar(10000) COLLATE utf8_czech_ci NOT NULL,
  `datetime` datetime NOT NULL,
  `autorID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `post`
--

INSERT INTO `post` (`ID`, `title`, `content`, `datetime`, `autorID`) VALUES
(1, 'jbfdhzfbhjfb', 'srhsyatsr sdrt srth art tfxh wsrh seth gyedh rzash bx', '2020-03-16 17:19:45', 0),
(2, 'aaa', 'aaa', '2020-03-10 13:12:26', 0),
(3, 'ccc', 'ccc', '0000-00-00 00:00:00', 0),
(4, 'aaa', 'ccc', '0000-00-00 00:00:00', 0),
(5, 'aaa', 'ccc', '0000-00-00 00:00:00', 0),
(6, 'tit', 'ooooo', '0000-00-00 00:00:00', 0),
(7, 'jmeno', 'obsah', '0000-00-00 00:00:00', 0),
(8, 'nazev', 'cntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntcntaf asd d gdsg sd g555656456', '2020-03-14 12:06:57', 2),
(9, 'Poznámka 2', '<p style=\"text-align: left;\">Toto je moje nov&aacute; kr&aacute;sn&aacute; pozn&aacute;mka z m&eacute;ho nov&eacute;ho textov&eacute;ho editoru !&nbsp;<br /><span style=\"text-decoration: underline;\">pokus&iacute;m se o nějak&eacute; textov&eacute; &uacute;pravy</span></p><p style=\"text-align: left;\"><strong>dueurenru</strong></p>', '2020-03-11 12:12:50', 2),
(10, '', '<p>vkhmfcckhvj,hvcgjhvjhvbhk cvuzb,jh</p><p>h ggfvgzujkbmnb mvugi</p><p>h uhijkn gvuhink gvguhi</p>', '2020-03-24 13:12:46', 2),
(11, 'pokus 3', '<p>rtfzbh gxrdtfzgubhvctfgubjhct</p><p>jbhvtcdfžgubhvcgtfguhibvcfzghinbjvcfghinbjvzfghinb</p><p>sdfghjk23</p>', '2020-03-10 05:26:37', 2);

-- --------------------------------------------------------

--
-- Struktura tabulky `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_czech_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_czech_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_czech_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'aaaaaa', 'aaa@dasfsda.ffdas', '$2y$10$fowPUogZvJIrmr0FMC/Jeurp8DCxly7oM1Sqw1tiq9ib0ynU3RyPG'),
(2, 'user', 'email@email.email', '$2y$10$4P3J9FgaytPDVxOI0uA7CeLUJ22c5s0axin19/uTYAHJ5emFcwrvy');

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`ID`);

--
-- Klíče pro tabulku `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `post`
--
ALTER TABLE `post`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pro tabulku `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
