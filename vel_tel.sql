-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 11 Ιαν 2020 στις 14:51:18
-- Έκδοση διακομιστή: 10.4.11-MariaDB
-- Έκδοση PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `vel_tel`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `chalandri-nea_smirni`
--

CREATE TABLE `chalandri-nea_smirni` (
  `id` int(10) NOT NULL,
  `anaxwrisi` varchar(50) NOT NULL,
  `meso` varchar(50) NOT NULL,
  `wra` int(50) NOT NULL,
  `proorimsos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `chalandri-nea_smirni`
--

INSERT INTO `chalandri-nea_smirni` (`id`, `anaxwrisi`, `meso`, `wra`, `proorimsos`) VALUES
(2, 'ΠΑΛΑΙΟΛΟΓΟΥ 83, ΧΑΛΑΝΔΡΙ', 'ΠΟΔΙΑ', 13, 'ΣΤ. ΑΓΙΑ ΠΑΡΑΣΚΕΥΗ'),
(2, 'ΣΤ. ΑΓΙΑ ΠΑΡΑΣΚΕΥΗ', 'ΜΕΤΡΟ', 12, 'ΜΕΓΑΡΟ ΜΟΥΣΙΚΗΣ'),
(2, 'ΜΕΓΑΡΟ ΜΟΥΣΙΚΗΣ', 'ΠΟΔΙΑ', 1, 'ΙΛΙΣΙΑ'),
(2, 'ΙΛΙΣΙΑ', '550', 18, 'ΣΤΡΟΦΗ Ν.ΣΜΥΡΝΗΣ'),
(2, 'ΣΤΡΟΦΗ Ν.ΣΜΥΡΝΗΣ', 'ΠΟΔΙΑ', 8, 'ΠΑΡΚΟ Ν.ΣΜΥΡΝΗΣ');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `chalandri2-neasmirni`
--

CREATE TABLE `chalandri2-neasmirni` (
  `id` int(10) NOT NULL,
  `anaxwrisi` varchar(50) NOT NULL,
  `meso` varchar(50) NOT NULL,
  `wra` int(50) NOT NULL,
  `proorismos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `chalandri2-neasmirni`
--

INSERT INTO `chalandri2-neasmirni` (`id`, `anaxwrisi`, `meso`, `wra`, `proorismos`) VALUES
(3, 'ΠΑΛΑΙΟΛΟΓΟΥ 83, ΧΑΛΑΝΔΡΙ', 'ΠΟΔΙΑ', 13, 'ΣΤ. ΑΓΙΑ ΠΑΡΑΣΚΕΥΗ'),
(3, 'ΣΤ. ΑΓΙΑ ΠΑΡΑΣΚΕΥΗ', 'ΜΕΤΡΟ', 16, 'ΣΤ. ΣΥΝΤΑΓΜΑΤΟΣ'),
(3, 'ΣΤ. ΣΥΝΤΑΓΜΑΤΟΣ', 'ΠΟΔΙΑ', 1, 'ΣΥΝΤΑΓΜΑ'),
(3, 'ΣΥΝΤΑΓΜΑ', 'ΤΡΑΜ 5', 17, 'ΑΓΙΑΣ ΦΩΤΕΙΝΗΣ'),
(3, 'ΑΓΙΑΣ ΦΩΤΕΙΝΗΣ', 'ΠΟΔΙΑ', 6, 'ΠΑΡΚΟ Ν.ΣΜΥΡΝΗΣ');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `pagkrati-varnava`
--

CREATE TABLE `pagkrati-varnava` (
  `id` int(10) NOT NULL,
  `anaxwrisi` varchar(50) NOT NULL,
  `meso` varchar(50) NOT NULL,
  `wra` int(50) NOT NULL,
  `proorismos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `pagkrati-varnava`
--

INSERT INTO `pagkrati-varnava` (`id`, `anaxwrisi`, `meso`, `wra`, `proorismos`) VALUES
(1, 'ΣΤ.ΑΝΩ ΠΑΤΗΣΙΑ', 'ΠΟΔΙΑ', 4, 'ΑΦΕΤΗΡΙΑ'),
(1, 'ΑΦΕΤΗΡΙΑ', '11', 37, 'ΠΛ. ΠΛΑΣΤΗΡΑ'),
(1, 'ΠΛ. ΠΛΑΣΤΗΡΑ', 'ΠΟΔΙΑ', 4, 'ΠΛ. ΒΑΡΝΑΒΑ');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `peristeri-thisio`
--

CREATE TABLE `peristeri-thisio` (
  `id` int(10) NOT NULL,
  `anaxwrisi` varchar(50) NOT NULL,
  `meso` varchar(50) NOT NULL,
  `wra` int(50) NOT NULL,
  `proorismos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `peristeri-thisio`
--

INSERT INTO `peristeri-thisio` (`id`, `anaxwrisi`, `meso`, `wra`, `proorismos`) VALUES
(4, 'ΘΗΒΩΝ 166, ΠΕΡΙΣΤΕΡΙ', 'ΠΟΔΙΑ', 5, 'ΣΤ. ΑΝΘΟΥΠΟΛΗ'),
(4, 'ΣΤ. ΑΝΘΟΥΠΟΛΗ', 'ΜΕΤΡΟ 3', 6, 'ΣΤ. ΑΤΤΙΚΗ'),
(4, 'ΣΤ. ΑΤΤΙΚΗ', 'ΗΣΑΠ', 8, 'ΘΗΣΕΙΟ');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `peristeri2-thisio`
--

CREATE TABLE `peristeri2-thisio` (
  `id` int(10) NOT NULL,
  `anaxwrisi` varchar(50) NOT NULL,
  `meso` varchar(50) NOT NULL,
  `wra` int(50) NOT NULL,
  `proorismos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `peristeri2-thisio`
--

INSERT INTO `peristeri2-thisio` (`id`, `anaxwrisi`, `meso`, `wra`, `proorismos`) VALUES
(5, 'ΘΗΒΩΝ 166, ΠΕΡΙΣΤΕΡΙ', 'ΠΟΔΙΑ', 5, 'ΣΤ. ΑΝΘΟΥΠΟΛΗ'),
(5, 'ΣΤ. ΑΝΘΟΥΠΟΛΗ', 'ΜΕΤΡΟ 2', 10, 'ΟΜΟΝΟΙΑ'),
(5, 'ΟΜΟΝΟΙΑ', 'ΠΟΔΙΑ', 1, 'ΟΜΟΝΟΙΑ'),
(5, 'ΟΜΟΝΟΙΑ', '227', 0, 'ΘΗΣΕΙΟ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
