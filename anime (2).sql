-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 23, 2022 alle 10:11
-- Versione del server: 10.4.16-MariaDB
-- Versione PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anime`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `commento`
--

CREATE TABLE `commento` (
  `id` int(11) NOT NULL,
  `commento` varchar(300) DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  `fkSerie` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `commento`
--

INSERT INTO `commento` (`id`, `commento`, `nome`, `data`, `fkSerie`) VALUES
(16, 'Bella questa serie mi piace molto', 'Ciao1234', '2022-05-14 12:40:24', 1),
(17, 'Test', NULL, '2022-05-14 15:01:18', 1),
(18, 'Ciao\r\n', 'Ciao1234', '2022-05-15 15:03:02', 21),
(19, 'Ciao', 'Ciao1234', '2022-05-15 15:15:43', 9),
(20, 'Ciao', 'Ciao1234', '2022-05-15 15:16:20', 35),
(21, 'Ciao', 'Ciao1234', '2022-05-15 15:17:08', 38),
(22, 'Ciao', 'Ciao1234', '2022-05-15 15:18:08', 37),
(23, 'Test', 'Ciao1234', '2022-05-15 15:19:18', 37),
(24, 'Terzo', 'Ciao1234', '2022-05-15 15:19:38', 1),
(25, 'Ciao', 'Ciao1234', '2022-05-15 15:20:01', 3),
(26, 'ciao', 'Ciao1234', '2022-05-15 16:04:22', 35),
(27, 'rerwwe', 'Ciao1234', '2022-05-15 16:04:48', 38),
(28, 'eweqeqwe', 'Ciao1234', '2022-05-15 16:04:57', 38),
(29, 'Ciao', 'Ciao1234', '2022-05-20 15:17:32', 27);

-- --------------------------------------------------------

--
-- Struttura della tabella `episodi`
--

CREATE TABLE `episodi` (
  `id` int(11) NOT NULL,
  `numero` int(11) DEFAULT NULL,
  `fkSerie` int(11) DEFAULT NULL,
  `video` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `episodi`
--

INSERT INTO `episodi` (`id`, `numero`, `fkSerie`, `video`) VALUES
(1, 1, 1, 'videos/1.mp4'),
(2, 2, 1, 'videos/2.mp4'),
(3, 1, 6, 'videos/1.mp4'),
(4, 1, 30, 'videos/1.mp4'),
(7, 1, 4, 'videos/1.mp4'),
(8, 1, 3, 'videos/1.mp4'),
(9, 1, 36, 'videos/1.mp4'),
(10, 1, 37, 'videos/1.mp4'),
(11, 1, 5, 'videos/1.mp4'),
(12, 1, 34, 'videos/1.mp4'),
(13, 1, 33, 'videos/1.mp4'),
(14, 1, 35, 'videos/1.mp4'),
(15, 1, 21, 'videos/1.mp4'),
(16, 1, 19, 'videos/1.mp4'),
(17, 1, 14, 'videos/1.mp4'),
(19, 1, 32, 'videos/1.mp4'),
(20, 1, 29, 'videos/1.mp4'),
(21, 1, 25, 'videos/1.mp4'),
(23, 1, 22, 'videos/1.mp4'),
(24, 1, 23, 'videos/1.mp4'),
(25, 1, 24, 'videos/1.mp4'),
(26, 1, 26, 'videos/1.mp4'),
(27, 1, 27, 'videos/1.mp4'),
(30, 1, 8, 'videos/1.mp4'),
(31, 1, 18, 'videos/1.mp4'),
(32, 1, 12, 'videos/1.mp4'),
(33, 1, 9, 'videos/1.mp4'),
(34, 1, 7, 'videos/1.mp4'),
(35, 1, 31, 'videos/1.mp4'),
(36, 1, 13, 'videos/1.mp4'),
(37, 1, 15, 'videos/1.mp4'),
(38, 1, 20, 'videos/1.mp4'),
(39, 1, 38, 'videos/1.mp4'),
(40, 1, 28, 'videos/1.mp4'),
(42, 1, 2, 'videos/1.mp4'),
(46, 2, 6, 'videos/19.mp4'),
(47, 2, 30, 'videos/19.mp4'),
(48, 2, 4, 'videos/21.mp4'),
(50, 2, 36, 'videos/22.mp4'),
(51, 2, 37, 'videos/23.mp4'),
(52, 2, 5, 'videos/24.mp4'),
(53, 2, 34, 'videos/17.mp4'),
(54, 2, 33, 'videos/29.mp4'),
(55, 2, 35, 'videos/26.mp4'),
(56, 2, 21, 'videos/14.mp4'),
(57, 2, 19, 'videos/16.mp4'),
(58, 2, 14, 'videos/26.mp4'),
(59, 2, 32, 'videos/2.mp4'),
(60, 2, 29, 'videos/20.mp4'),
(61, 2, 25, 'videos/18.mp4'),
(62, 2, 22, 'videos/4.mp4'),
(63, 2, 23, 'videos/3.mp4'),
(64, 2, 24, 'videos/5.mp4'),
(65, 2, 26, 'videos/5.mp4'),
(66, 2, 27, 'videos/2.mp4'),
(67, 2, 8, 'videos/7.mp4'),
(68, 2, 18, 'videos/12.mp4'),
(70, 2, 9, 'videos/16.mp4'),
(71, 2, 7, 'videos/15.mp4'),
(72, 2, 31, 'videos/12.mp4'),
(73, 2, 13, 'videos/12.mp4'),
(74, 2, 15, 'videos/12.mp4'),
(75, 2, 20, 'videos/11.mp4'),
(76, 3, 20, 'videos/10.mp4'),
(77, 3, 32, 'videos/10.mp4'),
(78, 3, 14, 'videos/17.mp4'),
(79, 3, 19, 'videos/5.mp4'),
(80, 3, 21, 'videos/16.mp4'),
(81, 3, 35, 'videos/17.mp4'),
(82, 3, 33, 'videos/19.mp4'),
(83, 3, 34, 'videos/22.mp4'),
(84, 3, 36, 'videos/23.mp4'),
(85, 3, 5, 'videos/4.mp4'),
(86, 3, 37, 'videos/21.mp4'),
(87, 3, 4, 'videos/13.mp4'),
(88, 3, 30, 'videos/17.mp4'),
(89, 3, 6, 'videos/15.mp4'),
(90, 3, 29, 'videos/5.mp4'),
(91, 3, 25, 'videos/3.mp4'),
(92, 3, 22, 'videos/5.mp4'),
(93, 3, 1, 'videos/7.mp4'),
(94, 3, 15, 'videos/9.mp4'),
(95, 3, 13, 'videos/2.mp4'),
(96, 3, 31, 'videos/4.mp4'),
(97, 3, 7, 'videos/4.mp4'),
(98, 3, 9, 'videos/5.mp4'),
(99, 3, 8, 'videos/9.mp4'),
(100, 3, 18, 'videos/11.mp4'),
(101, 3, 27, 'videos/14.mp4'),
(102, 3, 26, 'videos/15.mp4'),
(103, 3, 24, 'videos/8.mp4'),
(104, 3, 23, 'videos/6.mp4'),
(105, 4, 20, 'videos/19.mp4'),
(106, 4, 32, 'videos/9.mp4'),
(107, 4, 14, 'videos/16.mp4'),
(108, 4, 19, 'videos/9.mp4'),
(109, 4, 21, 'videos/2.mp4'),
(110, 4, 35, 'videos/21.mp4'),
(111, 4, 33, 'videos/22.mp4'),
(112, 4, 34, 'videos/23.mp4'),
(113, 4, 36, 'videos/10.mp4'),
(114, 4, 5, 'videos/10.mp4'),
(115, 4, 37, 'videos/21.mp4'),
(116, 4, 4, 'videos/4.mp4'),
(117, 4, 30, 'videos/22.mp4'),
(118, 4, 6, 'videos/4.mp4'),
(119, 4, 29, 'videos/5.mp4'),
(120, 4, 25, 'videos/18.mp4'),
(121, 4, 22, 'videos/9.mp4'),
(122, 4, 1, 'videos/2.mp4'),
(123, 4, 15, 'videos/3.mp4'),
(124, 4, 13, 'videos/2.mp4'),
(125, 4, 31, 'videos/4.mp4'),
(126, 4, 7, 'videos/5.mp4'),
(127, 4, 9, 'videos/5.mp4'),
(128, 4, 8, 'videos/4.mp4'),
(129, 4, 18, 'videos/7.mp4'),
(130, 4, 27, 'videos/8.mp4'),
(131, 4, 26, 'videos/4.mp4'),
(132, 4, 24, 'videos/2.mp4'),
(133, 4, 23, 'videos/9.mp4'),
(134, 5, 23, 'videos/18.mp4'),
(135, 5, 30, 'videos/17.mp4'),
(136, 5, 4, 'videos/18.mp4'),
(137, 5, 37, 'videos/15.mp4'),
(138, 5, 5, 'videos/9.mp4'),
(139, 5, 36, 'videos/4.mp4'),
(140, 5, 34, 'videos/5.mp4'),
(141, 5, 33, 'videos/14.mp4'),
(142, 5, 35, 'videos/4.mp4'),
(143, 5, 21, 'videos/2.mp4'),
(144, 5, 19, 'videos/4.mp4'),
(145, 5, 14, 'videos/27.mp4'),
(146, 5, 32, 'videos/5.mp4'),
(147, 5, 20, 'videos/19.mp4'),
(148, 5, 6, 'videos/25.mp4'),
(149, 5, 18, 'videos/11.mp4'),
(150, 5, 24, 'videos/21.mp4'),
(151, 5, 26, 'videos/10.mp4'),
(152, 5, 27, 'videos/5.mp4'),
(153, 5, 9, 'videos/13.mp4'),
(154, 5, 7, 'videos/15.mp4'),
(155, 5, 31, 'videos/22.mp4'),
(156, 5, 13, 'videos/3.mp4'),
(157, 5, 15, 'videos/24.mp4'),
(158, 5, 1, 'videos/2.mp4'),
(159, 5, 22, 'videos/26.mp4'),
(160, 5, 25, 'videos/29.mp4'),
(161, 5, 29, 'videos/28.mp4'),
(162, 6, 23, 'videos/26.mp4'),
(163, 6, 30, 'videos/16.mp4'),
(164, 6, 4, 'videos/7.mp4'),
(165, 6, 37, 'videos/8.mp4'),
(166, 6, 5, 'videos/9.mp4'),
(167, 6, 36, 'videos/5.mp4'),
(168, 6, 34, 'videos/10.mp4'),
(169, 6, 33, 'videos/12.mp4'),
(170, 6, 35, 'videos/14.mp4'),
(171, 6, 21, 'videos/13.mp4'),
(172, 6, 19, 'videos/11.mp4'),
(173, 6, 14, 'videos/18.mp4'),
(174, 6, 32, 'videos/13.mp4'),
(175, 6, 20, 'videos/25.mp4'),
(176, 6, 6, 'videos/25.mp4'),
(177, 6, 18, 'videos/15.mp4'),
(178, 6, 24, 'videos/19.mp4'),
(179, 6, 26, 'videos/18.mp4'),
(180, 6, 27, 'videos/7.mp4'),
(181, 6, 9, 'videos/5.mp4'),
(182, 6, 7, 'videos/11.mp4'),
(183, 6, 31, 'videos/23.mp4'),
(184, 6, 13, 'videos/23.mp4'),
(185, 6, 15, 'videos/24.mp4'),
(186, 6, 1, 'videos/2.mp4'),
(187, 6, 22, 'videos/23.mp4'),
(188, 6, 25, 'videos/22.mp4'),
(189, 6, 29, 'videos/2.mp4');

-- --------------------------------------------------------

--
-- Struttura della tabella `fkdoppio`
--

CREATE TABLE `fkdoppio` (
  `fkSerie` int(11) NOT NULL,
  `fkGenere` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `fkdoppio`
--

INSERT INTO `fkdoppio` (`fkSerie`, `fkGenere`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 2),
(2, 5),
(2, 8),
(2, 16),
(3, 4),
(3, 8),
(3, 9),
(3, 14),
(4, 5),
(4, 7),
(4, 14),
(4, 15),
(5, 8),
(5, 10),
(5, 15),
(5, 16),
(6, 4),
(6, 8),
(6, 11),
(6, 16),
(7, 1),
(7, 11),
(7, 14),
(7, 16),
(8, 1),
(8, 2),
(8, 7),
(8, 16),
(9, 1),
(9, 5),
(9, 9),
(9, 12),
(12, 1),
(12, 2),
(12, 3),
(12, 12),
(13, 1),
(13, 2),
(13, 9),
(13, 12),
(14, 3),
(14, 5),
(14, 7),
(14, 9),
(15, 1),
(15, 3),
(15, 5),
(15, 8),
(18, 1),
(18, 11),
(18, 13),
(18, 15),
(19, 1),
(19, 11),
(19, 12),
(19, 13),
(20, 5),
(20, 8),
(20, 12),
(20, 13),
(21, 1),
(21, 3),
(21, 7),
(21, 9),
(22, 2),
(22, 4),
(22, 6),
(22, 11),
(23, 1),
(23, 8),
(23, 9),
(23, 13),
(24, 1),
(24, 11),
(24, 12),
(24, 13),
(25, 1),
(25, 5),
(25, 8),
(25, 12),
(26, 1),
(26, 3),
(26, 4),
(26, 6),
(27, 1),
(27, 5),
(27, 9),
(27, 12),
(28, 3),
(28, 4),
(28, 5),
(28, 12),
(29, 1),
(29, 3),
(29, 5),
(29, 9),
(30, 1),
(30, 11),
(30, 14),
(30, 16),
(31, 1),
(31, 3),
(31, 6),
(31, 8),
(32, 1),
(32, 5),
(32, 6),
(32, 12),
(33, 1),
(33, 7),
(33, 9),
(33, 10),
(34, 1),
(34, 11),
(34, 14),
(34, 16),
(35, 1),
(35, 4),
(35, 7),
(35, 12),
(36, 10),
(36, 11),
(36, 12),
(36, 13),
(37, 1),
(37, 5),
(37, 8),
(37, 12),
(38, 1),
(38, 2),
(38, 6),
(38, 9);

-- --------------------------------------------------------

--
-- Struttura della tabella `genere`
--

CREATE TABLE `genere` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `genere`
--

INSERT INTO `genere` (`id`, `nome`) VALUES
(1, 'Azione'),
(2, 'Avventura'),
(3, 'Fantasy'),
(4, 'Magia'),
(5, 'Shounen'),
(6, 'Romantico'),
(7, 'Sentimentale'),
(8, 'Commedia'),
(9, 'Scolastico'),
(10, 'Scolastico'),
(11, 'Sci-Fi'),
(12, 'Arti Marziali'),
(13, 'Robot'),
(14, 'Slice of Life'),
(15, 'Soprannaturale'),
(16, 'Isekai');

-- --------------------------------------------------------

--
-- Struttura della tabella `img`
--

CREATE TABLE `img` (
  `id` int(11) NOT NULL,
  `img` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `img`
--

INSERT INTO `img` (`id`, `img`) VALUES
(1, 'img/anime/review-1.jpg'),
(2, 'img/anime/review-2.jpg'),
(3, 'img/anime/review-3.jpg'),
(4, 'img/anime/review-4.jpg'),
(5, 'img/anime/review-5.jpg'),
(6, 'img/anime/review-6.jpg');

-- --------------------------------------------------------

--
-- Struttura della tabella `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nomeUtente` varchar(40) DEFAULT NULL,
  `hash` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `login`
--

INSERT INTO `login` (`id`, `nomeUtente`, `hash`) VALUES
(7, 'Ciao1234', '$2y$10$tjbRtluB56MFk01VTxsSyORSxxcf.yACuu1ETk/0lfMcs.Ijob0my');

-- --------------------------------------------------------

--
-- Struttura della tabella `registrati`
--

CREATE TABLE `registrati` (
  `id` int(11) NOT NULL,
  `nomeUtente` varchar(40) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `hash` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `registrati`
--

INSERT INTO `registrati` (`id`, `nomeUtente`, `email`, `hash`) VALUES
(11, 'Ciao1234', 'Ciao1234', '$2y$10$Q5zIn6sgqPDwpqE5bmQHQer5zyyo3712qw1cFyS2IzIL.DQmn.kVe');

-- --------------------------------------------------------

--
-- Struttura della tabella `serie`
--

CREATE TABLE `serie` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  `trama` varchar(9999) DEFAULT NULL,
  `rilascio` varchar(20) DEFAULT NULL,
  `stato` varchar(20) DEFAULT NULL,
  `voto` varchar(20) DEFAULT NULL,
  `studio` varchar(100) DEFAULT NULL,
  `commenti` int(11) DEFAULT NULL,
  `durata` varchar(20) DEFAULT NULL,
  `qualità` varchar(20) DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `immagine` varchar(400) DEFAULT NULL,
  `numEpisodi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `serie`
--

INSERT INTO `serie` (`id`, `nome`, `tipo`, `trama`, `rilascio`, `stato`, `voto`, `studio`, `commenti`, `durata`, `qualità`, `views`, `immagine`, `numEpisodi`) VALUES
(1, 'Fate Stay Night: Unlimited Blade', 'Serie Tv', 'Ogni essere umano che abita il mondo di Alcia è marchiato da un \"Conte\" o da un numero scritto sul suo corpo. Per la madre di Hina, il suo totale scende a 0 e viene trascinata nell\'Abisso, per non essere mai più vista. Ma le ultime parole di sua madre mandano Hina alla ricerca di un eroe leggendario della Guerra dei Rifiuti - il leggendario Asso!', '2019', 'In corso', '7.5', 'Lerch', NULL, '24min/ep', 'HD', 100108, 'https://s7.gifyu.com/images/1eeac2cdfac152e95.jpg', 25),
(2, 'The Seven Deadly Sins: Wrath of the Gods', 'Serie Tv', 'Nuova stagione di \"The Seven Deadly Sins\". I Sette Peccati Capitali sono riusciti a respingere la minaccia dei Dieci Comandamenti, ma solo temporaneamente, perché il nemico è pronto a tornare ad attaccare.', '2019', 'Finito', '5', 'Studio Deen', NULL, '24m/ep', 'HD', 30007, 'https://s8.gifyu.com/images/Nanatsu_no_Taizai_Wrath_of_the_Gods-cover-thumb.jpg.png', 25),
(3, 'Gintama Movie 2: Kanketsu-hen - Yorozuya', 'Film', 'Ancora da tradurre...', '2013', 'Finito', '9', 'Sunrise', NULL, '1h 30m', 'HD', 1205, 'https://s8.gifyu.com/images/1e4dfc99fa67f9e85.png', 1),
(4, 'Fullmetal Alchemist: Brotherhood', 'Serie Tv', 'Ambientato in un mondo alternativo simile all\'Europa di inizio 1900, narra i viaggi e la maturazione fisica e spirituale di due fratelli, Edward e Alphonse Elric. Abbandonati dal padre alchimista in tenera età e cresciuti quindi dalla sola madre Trisha, i due bambini manifestano fin da subito grandi attitudini nello studio delle scienze alchemiche. Questo li porta, anni dopo, a tentare una trasmutazione umana, il massimo dei tabù dell\'alchimia, al fine di riportare in vita la madre, morta di malattia. Un’azione che pagheranno a caro prezzo, dando così inizio a una fantastica avventura che li porterà sulle tracce delle leggendaria Pietra Filosofale al fine di riparare all\'errore commesso.', '2009', 'Finito', '9.5', 'Bones', NULL, '24m/ep', 'HD', 300007, 'https://s8.gifyu.com/images/1f48d806835477cca.png', 50),
(5, 'Haikyuu!!', 'Serie Tv', ' Dopo aver assistito a una partita di pallavolo, il giovane Shouyou Hinata si pone come personale obbiettivo di diventare \"Il piccolo Gigante\" di quello sport. Entrato nel club di pallavolo della sua scuola media, affronta insieme alla squadra il torneo interscolastico ma lui e i suoi compagni devono inchinarsi di fronte a una forte squadra guidata da un formidabile giocatore di nome Tobio Kageyama. Desideroso di arrivare ai vertici e di prendersi la rivincita su Kageyama, Shouyou continua a praticare la pallavolo anche alla sua entrata nel club scolastico alle superiori dove però trova proprio il suo rivale.\r\n', '2011', 'Finito', '10', 'Shueisha', NULL, '24m/ep', 'HD', 1325676, 'https://s8.gifyu.com/images/3210f1f869aa4e4b598.png', 25),
(6, 'Fate / Stay Night: Unlimited Blade Works', 'Serie Tv', 'Shirou Emiya è un normale studente che viene improvvisamente trascinato in una guerra per ottenere il Santo Graal, un oggetto capace di esaudire qualunque desiderio. Tutti i partecipanti devono usare spiriti eroici chiamati Servant per combattere tra di loro, tuttavia, dato che Shirou è un novizio e privo delle abilità magiche necessarie, deve unirsi a Rin Tohsaka per sopravvivere alle battaglie. Questa è solo una soluzione temporanea, dato che Archer, il Servant di Rin, detesta Shirou per qualche sconosciuta ragione.', '2019', 'Finito', '7', 'Studio Deen', NULL, '24m/ep', 'HD', 400012, 'https://s8.gifyu.com/images/125dc5b4be40105ffb.png', 25),
(7, 'Sen to Chihiro no Kamikakushi', 'Serie Tv', ' Cihiro è una bambina di 10 anni; i suoi genitori si stanno trasferendo in una nuova città quando, a pochi minuti dall’arrivo, si ritrovano nel mezzo del bosco davanti a uno strano edificio. Incuriosito, il padre di Chihiro scende dall’auto e insiste per dare un’occhiata. La bambina, inizialmente contraria, si affretta a raggiungerli, intimorita dal rimanere da sola in macchina ad aspettarli. Attraversano il curioso edificio e, una volta dall’altra parte, si ritrovano in un ampio prato. Da lì, raggiungono un curioso villaggio…\r\n', '2001', 'Completato', '8.8', 'Studio Ghibli', NULL, '2h', 'SD', 9081, 'https://s8.gifyu.com/images/Sen_to_Chihiro-cover-thumb.jpg', 25),
(8, 'Kizumonogatari', 'Serie Tv', 'In seguito alla cerimonia di chiusura dell\'anno scolastico, Araragi viene a conoscenza di alcune voci in merito alla presenza di un vampiro in città grazie alla sua amica Hanekawa, una studentessa modello della sua scuola. In quello stesso giorno, troverà una donna gravemente ferita nella stazione della metropolitana. Ciò che Araragi non sa, però, è che quella donna altri non è che una leggendaria vampira centenaria, che lo coinvolgerà in svariate situazioni soprannaturali.', '2016', 'Completato', '8.9', 'Shaft', NULL, '24min/ep', 'HD', 12346, 'https://s8.gifyu.com/images/Kizumonogatari_Movie-cover-thumb.jpg', 25),
(9, 'Rurōni Kenshin -Meiji Kenkaku Romantan-', 'Serie Tv', 'Battosai Himura è uno spietato assassino al servizio dei fautori della Restaurazione Meiji: attraverso il suo operato a Kyoto con la spada, negli anni immediatamente precedenti all\'avvento del periodo Meiji, l\'uomo contribuisce alla fine dello Shogunato Tokugawa, ma in seguito all\'insediamento del nuovo governo egli scompare nel nulla. Dieci anni più tardi, il samurai vagabondo Kenshin Himura approda nella nuova capitale Tokyo: l\'uomo apprende immediatamente che nella nuova era pacifica a nessuno è più consentito portare la spada, nemmeno ai samurai. La katana di Kenshin, tuttavia, reca una lama invertita quale emblema del giuramento dell\'uomo di non uccidere più, e proteggere nondimeno quante più persone possibile dalle ingiustizie subite. Dopo l\'incontro con la giovane Kaoru Kamiya, dal carattere forte, genuino e indipendente e padrona di una palestra di scherma, Kenshin si ritroverà spesso coinvolto in combattimenti contro altri samurai che non apprezzano il nuovo stile di vita paci', '1996', 'Completato', '8.1', 'Studio Deen, Studio ', NULL, '24min/ep', 'SD', 89393, 'https://s8.gifyu.com/images/RurouniKenshinTV-cover-thumb.jpg', 25),
(12, 'Kimi no Na wa.', 'Film', 'La storia è ambientata un mese dopo che, per la prima volta in mille anni, in Giappone cade una cometa. Mitsuha, una liceale che abita in campagna, vuole vivere in città perché è stanca della vita di paese. Poi, c\'è Taki: uno studente che vive a Tokyo, trascorre il tempo libero insieme agli amici e lavora part-time presso un ristorante italiano. Un giorno, Mitsuha fa un sogno in cui è un giovane ragazzo. Per converso, anche Taki fa un sogno in cui è una studentessa che frequenta le scuole superiori in campagna. Quale segreto si cela dietro i loro sogni?', '2016', 'Completato', '9.7', 'Kadokawa Shoten', NULL, '2h 30m', 'HD', 1234322, 'https://s8.gifyu.com/images/Your_Name.jpg', 1),
(13, 'Shingeki no kyojin', 'Serie Tv', 'Diverse centinaia di anni fa, la razza umana fu quasi sterminata dai giganti. Si racconta di quanto questi fossero alti, privi di intelligenza e affamati di carne umana; peggio ancora, essi sembra divorassero umani più per piacere che per necessario sostentamento.\r\nUna piccola percentuale dell\'umanità però sopravvisse asserragliandosi in una città circondata da mura estremamente alte, anche più alte del più grande di giganti.\r\nEren è un adolescente che vive in questa città, dove non si vede un gigante da oltre un secolo, ma presto un orrore indicibile si palesa alle sue porte, ed un gigante più grande di quanto si sia mai sentito narrare, appare dal nulla abbattendo le mura ed imperversando assieme ad altri suoi simili fra la popolazione.\r\nEren, vinto il terrore iniziale, si ripromette di eliminare ogni singolo gigante, per vendicare l\'umanità.\r\n', '2013', 'In corso', '8.9', 'Wit Studio e Mappa', NULL, '24min/ep', 'HD', 1234321124, 'https://s8.gifyu.com/images/recent-1.jpg', 25),
(14, 'Kimetsu no Yaiba', 'Serie Tv', 'Tanjiro è il primogenito di una numerosa famiglia priva di padre, che vive in una isolata casa di montagna trai boschi. Un giorno, dopo una fitta nevicata, il ragazzo si reca da solo in città per vendere del carbone, perché il percorso innevato è troppo difficile per i suoi fratellini. Non riesce a far ritorno a casa prima dell\'imbrunire e un amico di famiglia lo esorta a passare la notte da lui ai piedi della montagna, sconsigliandogli di addentrasi nel bosco di notte, per via di una voce riguardante la presenza di demoni notturni in zona. La storia era vera e a pagarne le conseguenze è stata la famiglia di Tanjiro. Il ragazzo, tornato a casa il mattino seguente, trova una scena straziante: sono stati tutti sbranati, tranne sua sorella Nezuko, che è diventata un demone. Inizia ora un avventuroso viaggio alla ricerca di una cura per far tornare umana Nezuko e nel farlo Tanjiro dovrà allenarsi duramente per unirsi ai cacciatori di demoni.', '2019', 'Completato', '9.9', 'Ufotable', NULL, '24min/ep', 'HD', 989898, 'https://s8.gifyu.com/images/recent-6.jpg', 25),
(15, 'Sword Art Online Alicization: War of Underworld\n', 'Serie Tv', 'Dopo una lunga scalata all\'interno della Central Cathedral, Kirito, Eugeo ed Alice sono riusciti a giungere al cospetto di Quinella, ovvero l\'Administrator che governa tutto il mondo di Underworld. Nonostante la vittoria conseguita alla fine sulla despota, che è comunque costata la vita di Eugeo e di Cardinal, la situazione non è migliorata per Kirito: l\'Ocean Turtle, il complesso marino che ospita le apparecchiature su cui gira il mondo di Underworld è sotto attacco da parte di soldati di provenienza ignota. Per uscire dalla crisi, Kirito è chiamato a compiere una nuova missione in cui Alice sembra essere l\'elemento chiave. Ma al tempo stesso sul mondo di Underworld incombe la profetizzata invasione da parte delle forze del Dark World...', '2020', 'Finito', '9', 'A-1 Pictures', NULL, '24m/ep', 'HD', 3003230, 'https://s8.gifyu.com/images/Sword_Art_Online_Alicization_War_of_the_Underworld-cover-thumb.jpg', 25),
(18, 'Spy X Family', 'Serie Tv', 'Twilight, una delle migliori spie al mondo, ha trascorso la vita ad affrontare missioni sotto copertura per rendere il mondo un posto migliore. Un giorno però riceve un compito particolarmente difficile, per riuscire nella sua nuova missione dovrà formare una famiglia temporanea e iniziare una nuova vita!', '2022', 'In Corso', '10', 'CloverWorks e Wit Studio', NULL, '24m/ep', 'HD', 903033, 'https://s8.gifyu.com/images/Spy_X_Family-cover-thumb.jpg', 12),
(19, 'Kaguya-sama: Love is War', 'Serie Tv', 'Considerato un genio grazie al suo perfetto rendimento scolastico, il presidente Miyuki Shirogane dirige il consiglio studentesco della prestigiosa Shuichiin Academy, aiutato dalla bella e ricca Kaguya Shinomiya, la sua vice. I due vengono spesso considerati la coppia perfetta, nonostante non ci sia nessuna relazione amorosa tra di loro. La verità però è che, avendo passato molto tempo insieme, entrambi hanno cominciato a provare qualcosa l\'uno per l\'altra. Tuttavia, poiché ritengono che le dichiarazioni d\'amore sono segno di debolezza, nessuno dei due ha intenzione di confessare i propri sentimenti! Miyuki e Kaguya intraprendono così una guerra in cui ogni mezzo è lecito, pur di ottenere una confessione dell\'altro/a. Che questa battaglia d\'amore abbia inizio!', '2019', 'Finito', '8.7', 'A-1 Pictures', NULL, '24m/ep', 'HD', 120024, 'https://s8.gifyu.com/images/Kaguya-sama_wa_Kokurasetai-cover-thumb.jpg', 12),
(20, 'Tensei Shitara Slime Datta Ken', 'Serie Tv', 'Un uomo di 37 anni, disoccupato e senza una fidanzata, dopo essere stato ucciso da un rapinatore in fuga, si ritrova in un nuovo mondo, reincarnato in uno slime cieco, ma con abilità uniche. Con il nuovo nome di \"Rimuru Tempest\" inizia così la sua nuova vita in un altro mondo dove dovrà affrontare molte sfide ma avrà anche l\'opportunità di incontrare un sempre più crescente numero di seguaci.\r\n', '2019', 'Finito', '10', '8bit', NULL, '24m/ep', 'HD', 132563035, 'https://s8.gifyu.com/images/Tensei_Shitara_Slime_Datta_Ken-cover-thumb.jpg', 25),
(21, 'I Will Quit Being the Hero', 'Serie Tv', 'Dopo aver salvato il mondo, l\'eroe più forte di tutti non ha un luogo a cui far ritorno, la sua potenza straordinaria non è più necessaria in un mondo pacifico. A conti fatti, l\'unico posto in cui può stare è l\'armata dei suoi vecchi nemici!', '2022', 'In Corso', '6', 'Sphere', NULL, '24m/ep', 'HD', 30004, 'https://s8.gifyu.com/images/ysha_yamemasu_medium_image_a53f2e59-55e5-4889-89c3-df282a5e231a.jpg', 12),
(22, 'Overlord 1', 'Serie Tv', 'Yggdrasil è una realtà virtuale MMORPG che, un tempo molto popolare, ora è sull\'orlo della chiusura. Momonga, uno dei suoi giocatori più forti e famosi, esegue il login per l\'ultima volta per assistere alla fine del servizio, ma durante il conto alla rovescia chiude gli occhi e ripensa a tutti i bei momenti passati con i suoi compagni. Quando li riapre, Momonga scopre che il logout non è avvenuto e che, anzi, egli stesso è stato catapultato nel gioco sotto forma del suo personaggio simile a uno scheletro. Tutt\'altro che sconvolto, da questo momento in poi il suo unico obiettivo sarà conquistare il nuovo mondo in cui è rinato.', '2015', 'Finito', '9', 'Madhouse', NULL, '24m/ep', 'HD', 3003224, 'https://s8.gifyu.com/images/overlord_medium_image_2cd0074b-3b42-44f3-a421-5bd8a9497c1d.jpg', 13),
(23, 'Overlord 2', 'Serie Tv', 'In questa seconda stagione si continuerà a seguire le gesta di Ainz Ooal Gown, lich (un non morto) dai poteri smisurati e sovrano della Grande Catacomba di Nazarick, nel suo tentativo di conquista del nuovo mondo in cui si è trovato catapultato dopo la chiusura di Yggdrasil, un MMORPG (MassiveLY Multiplayer Online Role-Playing Game) di cui era assiduo giocatore. In questo tentativo viene aiutato dai servitori e abitanti della stessa Nazarick, ex NPC (i personaggi controllati dal computer) creati da lui stesso e dagli altri appartenenti alla sua gilda nel vecchio gioco, che ora hanno preso vita insieme ai loro fenomenali poteri magici. In questa stagione Ainz inizierà a controllare con la forza la regione intorno alla catacomba dichiarando guerra alle 5 tribù degli uomini lucertola mentre nel frattempo continuerà poi a celarsi, fuori le mura sicure del proprio palazzo, sotto la falsa identità dell’avventuriero Momon per avventurarsi alla ricerca di altri giocatori, magari rimasti intrappolati come lui in Yggdrasil.', '2018', 'Finito', '7', 'Mappa', NULL, '24m/ep', 'HD', 2003222, 'https://s8.gifyu.com/images/immagine_2022-05-14_195017055.png', 13),
(24, 'Skeleton Knight in Another World', 'Serie Tv', 'Il protagonista della storia si addormenta mentre gioca ad un gioco online e si risveglia in un mondo fantastico sotto le spoglie del suo personaggio. Mentre è ancora sotto shock nota che il suo equipaggiamento consta unicamente della sua spada più potente e della sua armatura, e come se non bastasse, l\'aspetto del suo personaggio è stato modificato in base alla skin \"Skeleton\". Fa quindi la conoscenza dell\'elfa Arianne, ottenendo così la sua prima quest.', '2022', 'In Corso', '7', 'Studio Kai', NULL, '24m/ep', 'HD', 300225, 'https://s8.gifyu.com/images/gaikotsu_kishisama_tadaima_isekai_e_odekakechuu_medium_image_3a4e5a6a-2f79-4f01-8b8a-241d7f1054b2.jpg', 12),
(25, 'One Piece', 'Serie Tv', 'In un mondo quasi interamente coperto dall\'acqua e con poche e piccole isole abitate si è fortemente diffusa la pirateria, pratica che riceve un\'ulteriore spinta il giorno in cui Gold Roger, il re dei pirati, annuncia al mondo intero che ha nascosto un incredibile tesoro, il One Piece. Tra i tanti giovani sognatori che si mettono in viaggio alla ricerca dello One Piece vi è Monkey D. Rufy, giovane allegro e spensierato in possesso di un corpo di gomma, dal momento che da piccolo mangiò uno dei frutti del diavolo, misteriosi frutti in grado di donare incredibili poteri privando tuttavia della capacità di nuotare.La storia inizia con Rufy che, alla deriva in una botte di legno, s\'imbatte nella nave della terribile piratessa Alvida, e segue le avventure di Rufy, seriamente intenzione a diventare il nuovo re dei pirati.', '1999', 'In Corso', '9', 'Toei Animation', NULL, '24m/ep', 'HD', 4000001, 'https://s8.gifyu.com/images/one_piece_medium_image_d6f05535-6f28-4267-8180-761936f4384c.jpg', 1016),
(26, 'The Greatest Demon Lord Is Reborn as a Typical Nobody', 'Serie Tv', 'Essendo il più potente di tutti i tempi, il signore dei demoni Varvatos pensa che la vita sia noiosa. L\'entità decide di reincarnarsi in un corpo dal potere magico non elevato, ma crescendo vede che gli altri sono molto deboli in confronto. Rinato sotto il nome di Ard non si ferma davanti a nulla per raggiungere il suo obiettivo finale.\r\n\r\n', '2022', 'In Corso', '7.5', 'Silver Link', NULL, '24m/ep', 'HD', 98778, 'https://s8.gifyu.com/images/the_greatest_demon_lord_is_reborn_as_a_typical_nobody_medium_image_8e5a2a7c-dc7c-4958-a95e-f9526dd85017.jpg', 12),
(27, 'The Rising of the Shield Hero 2\r\n', 'Serie Tv', 'Seconda stagione di Tate no Yuusha no Nariagari.', '2022', 'In Corso', '5', 'Kinema Citrus', NULL, '24m/ep', 'HD', 989993, 'https://s8.gifyu.com/images/tate_no_yuusha_no_nariagari_season_2_medium_image_3703a278-c98a-41aa-9af0-eab5c3dd7463.jpg', 12),
(28, 'The Rising of the Shield Hero\r\n', 'Serie Tv', 'Naofumi Iwatani passa molto del suo tempo a leggere light novel e fumetti fantasy. Un giorno la sua attenzione viene attirata da un misterioso libro con molte pagine ancora bianche e, dopo averlo sfogliato, si trova improvvisamente evocato in un universo parallelo. Scopre quindi di essere uno dei quattro eroi in possesso delle armi leggendarie, i quali hanno il compito di salvare il mondo dalla distruzione della profezia. Naofumi è \"L\'eroe dello scudo\", il più debole, e si ritrova ben presto emarginato e tradito, con la sola compagnia del suo scudo. Ora Naofumi deve risorgere, diventare un vero eroe e salvare il mondo.', '2019', 'Finito', '10', 'Kinema Citrus', NULL, '24m/ep', 'HD', 10000001, 'https://s8.gifyu.com/images/tate_no_yusha_no_nariagari_medium_image_a8d46df6-361d-4612-904c-a746fa49b613.jpg', 25),
(29, 'Naruto Shippuuden\r\n', 'Serie Tv', 'Continuano le avventure di Naruto Uzumaki, un ninja del Villaggio della Foglia che sogna di diventare Hokage, ossia il ninja a capo del villaggio. Naruto ormai sa che dentro di lui è sigillato lo spirito della Volpe a Nove Code, un gigantesco demone sovrannaturale che anni addietro aveva raso al suolo la Foglia. Dopo un viaggio di allenamento di due anni con il maestro Jiraya, Naruto fa ritorno al villaggio per continuare la sua attività con il gruppo 7. Tuttavia, non c\'è pace per il giovane ninja, perché l\'Organizzazione Alba si è messa sulle sue tracce con l\'intenzione di catturarlo: l\'obiettivo sono i nove cercoteri, che l\'Alba vorrebbe utilizzare per uno scopo sinistro. Nel frattempo Sasuke continua a essere consumato dall\'odio e dalla vendetta.\r\n\r\n', '2017', 'Finito', '9', 'Studio Pierrot', NULL, '24m/ep', 'HD', 13256305, 'https://s8.gifyu.com/images/NarutoShippuuden-cover-thumb.jpg', 600),
(30, 'Dragon Ball Super', 'Serie Tv', 'La storia è ambientata 6 mesi dopo la sconfitta di Majin Bu, con la Terra finalmente in pace. Gohan e Videl si sono sposati e Goku è costretto da Chichi a lavorare nei campi per guadagnare denaro, in quanto oramai il patrimonio dello Stregone del Toro è quasi esaurito, tuttavia grazie a Mr. Satan che gli consegna una ricompensa in denaro ricevuta dallo stato per la salvezza del mondo, Goku può smettere di lavorare e ricominciare ad allenarsi, mentre Vegeta passa un po\' di tempo in vacanza con la famiglia, per poi anch\'esso tornare ad allenarsi con l\'obiettivo di superare il suo rivale Kakaroth. Nel frattempo il Dio della distruzione, Beerus, si risveglia dopo 39 anni di sonno, ed insieme al suo maestro Whis va alla ricerca di un certo \"Super Saiyan God\" visto da lui in una visione, non prima di aver distrutto alcuni pianeti per capriccio, sotto lo sgomento dei Kaiohshin. Nel giorno della festa di Bulma, Goku va ad allenarsi da Re Kaioh, e proprio in quel momento Beerus si dirige da lui.\r\n\r\n', '2019', 'Finito', '10', 'Toei Animation', NULL, '24m/ep', 'HD', 400004, 'https://s8.gifyu.com/images/dragon_ball_super_ita_medium_image_6fba1871-8663-4c5f-87b9-f940575de0ae.jpg', 120),
(31, 'Shikimori\'s Not Just a Cutie\r\n', 'Serie Tv', 'Nella stessa classe di Izumi-kun si trova anche la sua ragazza, Shikimori-san, una ragazza sempre carina e gentile, nonostante a volte sia anche un po\' intimidatoria.\r\n\r\n', '2022', 'In Corso', '7', 'Doga Kobo', NULL, '24m/ep', 'HD', 30033, 'https://s8.gifyu.com/images/kawaii_dake_ja_nai_shikimorisan_medium_image_840084ce-6e6f-454f-b055-ae515351fd74.jpg', 12),
(32, 'My Dress-Up Darling\r\n', 'Serie Tv', 'Traumatizzato da un incidente d\'infanzia con un amico che si è opposto al suo amore per le bambole tradizionali, Wakana Gojou, un artigiano di bambole speranzoso, trascorre le sue giornate da solitario, trovando conforto nell\'aula scolastica del suo liceo. Per Wakana, persone come la bella Marin Kitagawa, una ragazza alla moda che è sempre circondata da una folla di amici, è praticamente un alieno di un altro mondo. Ma quando l\'allegra Marin, mai una persona timida, vede Wakana cucire via un giorno dopo la scuola, irrompe con l\'obiettivo di trascinare la sua tranquilla compagna di classe nel suo hobby segreto: il cosplay! Il cuore ferito di Wakana sarà in grado di gestire l\'invasione di questo sexy alieno?!\r\n\r\n', '2022', 'Finito', '10', 'CloverWorks', NULL, '24m/ep', 'HD', 12010, 'https://s8.gifyu.com/images/my_dressup_darling_medium_image_4f89daa8-80c4-4c60-9285-2d7dd7ca0dc0.jpg', 12),
(33, 'How a Realist Hero Rebuilt the Kingdom 2\r\n', 'Serie Tv', 'Seconda Stagione di \"How a Realist Hero Rebuilt the Kingdom\".\r\n\r\n', '2022', 'Finito', '7', 'J.C.Staff', NULL, '24m/ep', 'HD', 30005, 'https://s8.gifyu.com/images/genjitsu_shugi_yuusha_no_oukoku_saikenki_part_2_medium_image_583d0654-7303-4755-854d-b3b3045b174a.jpg', 12),
(34, 'How a Realist Hero Rebuilt the Kingdom\r\n', 'Serie Tv', '\"Oh, Eroe!\" Con questa esclamazione molto cliché, Kazuya Souma viene evocato in un altro mondo e la sua avventura... non ha inizio. Dopo aver presentato il suo piano per rafforzare economicamente e militarmente il Paese, il re gli cede il trono e Souma si ritrova affibbiato il governo della nazione. Per di più, ora è anche fidanzato con la figlia del re! Per rimettere in piedi il Paese, Souma si circonda di uomini saggi e talentuosi. Cinque persone si riuniscono al cospetto del nuovo re: ma quali saranno i molti talenti e abilità che possiedono?\r\n\r\n', '2021', 'Finito', '7', 'J.C.Staff', NULL, '24m/ep', 'HD', 400006, 'https://s8.gifyu.com/images/genjitsu_shugi_yuusha_no_oukoku_saikenki_medium_image_7f570614-e7a6-4784-a891-86baa0f81442.jpg', 25),
(35, 'In the Land of Leadale\r\n', 'Serie Tv', 'Nuovi inizi in terre familiari. Dopo che un orribile incidente l\'ha messa in vita, l\'ultima traccia di libertà che Keina Kagami ha avuto è stata nel VRMMORPG World of Leadale. Quando si sveglia nel corpo del suo avatar di gioco, però, Keina, ora Cayna, scopre che le preoccupazioni della sua vecchia vita sembrano essere un ricordo del passato, ma in qualche modo questa nuova terra non sembra essere proprio il Leadale lei si ricorda...\r\n\r\n', '2022', 'Finito', '9', 'Maho Film', NULL, '24m/ep', 'HD', 30032218, 'https://s8.gifyu.com/images/leadale_no_daichi_nite_medium_image_091fbb20-c1a1-4153-9c81-db5e28d7df5e.jpg', 12),
(36, 'Gotoubun no Hanayome / The Quintessential Quintuplets.\r\n\r\n\r\n', 'Serie Tv', 'Fuutarou Uesugi è uno studente dagli ottimi voti ma povero e asociale. Un giorno conosce Itsuki Nakano, una studentessa appena trasferitasi. I due litigano ma quando Fuutarou scopre di doverle fare da tutor, cerca di migliorare i rapporti con lei. Al contempo scopre che deve fare da tutor ad altre quattro ragazze, tutte sorelle gemelle di lei e ognuna con un carattere differente e problematico.\r\n\r\n', '2019', 'Finito', '10', 'Tezuka Productions', NULL, '24m/ep', 'HD', 1200007, 'https://s8.gifyu.com/images/gotoubun_no_hanayome_medium_image_b68b0ef1-cef6-4ddd-8842-09394dc8d2cd.jpg', 12),
(37, 'Gotoubun no Hanayome 2nd Season\r\n', 'Serie Tv', 'Seconda stagione dell\'anime The Quintessential Quintuplets.\r\n\r\n', '2021', 'Finito', '8', 'Bibury Animation Studios', NULL, '24m/ep', 'HD', 20032225, 'https://s8.gifyu.com/images/gotoubun_no_hanayome_2nd_season_medium_image_c28b2cd5-e177-4759-a270-a76a6eecf9f9.jpg', 12),
(38, 'The Quintessential Quintuplets the Movie\r\n', 'Film', 'Il film di The Quintessential Quintuplets.\r\n\r\n', '2022', 'Annunciato', '//', 'Bibury Animation Studios', NULL, '2h 15m', 'HD', 41, 'https://s8.gifyu.com/images/5toubun_no_hanayome_movie_medium_image_997a0d6c-f608-414e-8e7f-d0e07ef1ade2.jpg', 1);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `commento`
--
ALTER TABLE `commento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkSerie` (`fkSerie`);

--
-- Indici per le tabelle `episodi`
--
ALTER TABLE `episodi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkSerie` (`fkSerie`);

--
-- Indici per le tabelle `fkdoppio`
--
ALTER TABLE `fkdoppio`
  ADD PRIMARY KEY (`fkSerie`,`fkGenere`),
  ADD KEY `fkGenere` (`fkGenere`);

--
-- Indici per le tabelle `genere`
--
ALTER TABLE `genere`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `registrati`
--
ALTER TABLE `registrati`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `serie`
--
ALTER TABLE `serie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `commento`
--
ALTER TABLE `commento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT per la tabella `episodi`
--
ALTER TABLE `episodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT per la tabella `genere`
--
ALTER TABLE `genere`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT per la tabella `img`
--
ALTER TABLE `img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT per la tabella `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT per la tabella `registrati`
--
ALTER TABLE `registrati`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT per la tabella `serie`
--
ALTER TABLE `serie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `commento`
--
ALTER TABLE `commento`
  ADD CONSTRAINT `commento_ibfk_1` FOREIGN KEY (`fkSerie`) REFERENCES `serie` (`id`);

--
-- Limiti per la tabella `episodi`
--
ALTER TABLE `episodi`
  ADD CONSTRAINT `episodi_ibfk_1` FOREIGN KEY (`fkSerie`) REFERENCES `serie` (`id`);

--
-- Limiti per la tabella `fkdoppio`
--
ALTER TABLE `fkdoppio`
  ADD CONSTRAINT `fkdoppio_ibfk_1` FOREIGN KEY (`fkSerie`) REFERENCES `serie` (`id`),
  ADD CONSTRAINT `fkdoppio_ibfk_2` FOREIGN KEY (`fkGenere`) REFERENCES `genere` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
