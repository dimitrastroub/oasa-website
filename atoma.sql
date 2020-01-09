-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 09 Ιαν 2020 στις 23:19:37
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
-- Βάση δεδομένων: `atoma`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `hlioupoli`
--

CREATE TABLE `hlioupoli` (
  `id` int(10) NOT NULL,
  `stash` varchar(50) NOT NULL,
  `odos` varchar(50) NOT NULL,
  `dhmos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `hlioupoli`
--

INSERT INTO `hlioupoli` (`id`, `stash`, `odos`, `dhmos`) VALUES
(1, 'ΚΛΕΙΟΥΣ', 'ΤΣΑΜΑΔΟΥ', 'ΗΛΙΟΥΠΟΛΗΣ'),
(2, 'ΠΑΠΑΓΟΥ', 'ΑΛ.ΠΑΝΑΓΟΥΛΗ', 'ΗΛΙΟΥΠΟΛΗΣ'),
(3, 'ΣΠ.ΜΗΛΙΟΥ', 'ΤΣΑΜΑΔΟΥ', 'ΗΛΙΟΥΠΟΛΗΣ');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `kaisariani`
--

CREATE TABLE `kaisariani` (
  `id` varchar(10) NOT NULL,
  `stash` varchar(50) NOT NULL,
  `odos` varchar(50) NOT NULL,
  `dhmos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `kaisariani`
--

INSERT INTO `kaisariani` (`id`, `stash`, `odos`, `dhmos`) VALUES
('1', '11η ΚΑΙΣΑΡΙΑΝΗΣ', 'ΕΘΝΙΚΗΣ ΑΝΤΙΣΤΑΣΕΩΣ', 'ΚΑΙΣΑΡΙΑΝΗΣ'),
('2', '11η ΚΑΙΣΑΡΙΑΝΗΣ', 'ΕΘΝΙΚΗΣ ΑΝΤΙΣΤΑΣΕΩΣ', 'ΚΑΙΣΑΡΙΑΝΗΣ'),
('3', '8η ΚΑΙΣΑΡΙΑΝΗΣ', 'ΕΘΝΙΚΗΣ ΑΝΤΙΣΤΑΣΕΩΣ', 'ΚΑΙΣΑΡΙΑΝΗΣ'),
('4', '9η ΚΑΙΣΑΡΙΑΝΗΣ', 'ΕΘΝΙΚΗΣ ΑΝΤΙΣΤΑΣΕΩΣ', 'ΚΑΙΣΑΡΙΑΝΗΣ'),
('5', 'ΔΗΜΑΡΧΕΙΟ', 'ΕΘΝΙΚΗΣ ΑΝΤΙΣΤΑΣΕΩΣ', 'ΚΑΙΣΑΡΙΑΝΗΣ'),
('6', 'ΠΑΝΑΓΙΤΣΑ', 'ΕΘΝΙΚΗΣ ΑΝΤΙΣΤΑΣΕΩΣ', 'ΚΑΙΣΑΡΙΑΝΗΣ'),
('7', 'ΠΑΝΑΓΙΤΣΑ', 'ΕΘΝΙΚΗΣ ΑΝΤΙΣΤΑΣΕΩΣ', 'ΚΑΙΣΑΡΙΑΝΗΣ'),
('8', 'ΦΑΡΜΑΚΕΙΟ', 'ΕΘΝΙΚΗΣ ΑΝΤΙΣΤΑΣΕΩΣ', 'ΚΑΙΣΑΡΙΑΝΗΣ'),
('9', 'ΦΑΡΜΑΚΕΙΟ', 'ΕΘΝΙΚΗΣ ΑΝΤΙΣΤΑΣΕΩΣ', 'ΚΑΙΣΑΡΙΑΝΗΣ');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `papagos`
--

CREATE TABLE `papagos` (
  `id` int(10) NOT NULL,
  `stash` varchar(50) NOT NULL,
  `odos` varchar(50) NOT NULL,
  `dhmos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `papagos`
--

INSERT INTO `papagos` (`id`, `stash`, `odos`, `dhmos`) VALUES
(1, 'ΔΗΜΑΡΧΕΙΟ ΠΕΡΙΚΛΕΟΥΣ', 'ΠΕΡΙΚΛΕΟΥΣ', 'ΠΑΠΑΓΟΥ-ΧΟΛΑΡΓΟΥ'),
(2, 'ΣΤΡΑΤΟΠΕΔΟ', 'ΚΥΠΡΟΥ', 'ΠΑΠΑΓΟΥ-ΧΟΛΑΡΓΟΥ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
