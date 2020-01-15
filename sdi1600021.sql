-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 15 Ιαν 2020 στις 18:27:09
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
-- Βάση δεδομένων: `sdi1600021`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `chalandrineasmirni`
--

CREATE TABLE `chalandrineasmirni` (
  `id` int(2) NOT NULL,
  `anaxwrhsh` varchar(50) CHARACTER SET utf8 NOT NULL,
  `proorismos` varchar(50) CHARACTER SET utf8 NOT NULL,
  `meso` varchar(50) CHARACTER SET utf8 NOT NULL,
  `wra` int(4) NOT NULL,
  `staseis` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `chalandrineasmirni`
--

INSERT INTO `chalandrineasmirni` (`id`, `anaxwrhsh`, `proorismos`, `meso`, `wra`, `staseis`) VALUES
(1, 'Παλαιολόγου 83, Χαλάνδρι', 'Στ. Αγία Παρασκευή', 'Πεζή', 13, '(1,0 χλμ)'),
(2, 'Στ. Αγία Παρασκευή', 'Στ. Μέγαρο Μουσικής', 'Μετρό, Γραμμή 3', 12, '(7 στάσεις)'),
(3, 'Στ. Μέγαρο Μουσικής', 'Στ. Ιλίσια', 'Πεζή', 2, '(100 μ)'),
(4, 'Στ. Ιλίσια', 'Στ. Στροφή Νέας Σμύρνης', 'Λεωφορείο 550', 20, '(13 στάσεις)'),
(5, 'Στ. Στροφή Νέας Σμύρνης', 'Πάρκο Νέας Σμύρνης', 'Πεζή', 8, '(550 μ)');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `chalandrineasmirni2`
--

CREATE TABLE `chalandrineasmirni2` (
  `id` int(3) NOT NULL,
  `anaxwrhsh` varchar(50) CHARACTER SET utf8 NOT NULL,
  `proorismos` varchar(50) CHARACTER SET utf8 NOT NULL,
  `meso` varchar(50) CHARACTER SET utf8 NOT NULL,
  `wra` int(5) NOT NULL,
  `staseis` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `chalandrineasmirni2`
--

INSERT INTO `chalandrineasmirni2` (`id`, `anaxwrhsh`, `proorismos`, `meso`, `wra`, `staseis`) VALUES
(1, 'Παλαιολόγου 83, Χαλάνδρι', 'Στ. Αγία Παρασκευή', 'Πεζή', 13, '(1,0 χλμ)'),
(2, 'Στ. Αγία Παρασκευή', 'Στ. Σύνταγμα', 'Μετρό, Γραμμή 3', 16, '(9 στάσεις)'),
(3, 'Στ. Σύνταγμα', 'Σύνταγμα', 'Πεζή', 1, '(50 μ)'),
(4, 'Σύνταγμα', 'Στ. Αγίας Φωτεινής', 'Τραμ, Γραμμή 4', 15, '(8 στάσεις)'),
(5, 'Στ. Αγίας Φωτεινής', 'Πάρκο Νέας Σμύρνης', 'Πεζή', 6, '(600 μ)');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `chalandriperisteri`
--

CREATE TABLE `chalandriperisteri` (
  `id` int(3) NOT NULL,
  `anaxwrhsh` varchar(50) CHARACTER SET utf8 NOT NULL,
  `proorismos` varchar(50) CHARACTER SET utf8 NOT NULL,
  `meso` varchar(50) CHARACTER SET utf8 NOT NULL,
  `wra` int(3) NOT NULL,
  `staseis` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `chalandriperisteri`
--

INSERT INTO `chalandriperisteri` (`id`, `anaxwrhsh`, `proorismos`, `meso`, `wra`, `staseis`) VALUES
(1, 'Παλαιολόγου 83, Χαλάνδρι', 'Στ. Αγία Παρασκευή', 'Πεζή', 13, '(1,0 χλμ)'),
(2, 'Στ. Αγία Παρασκευή', 'Στ. Σύνταγμα', 'Μετρό, Γραμμή 3', 16, '(9 στάσεις)'),
(3, 'Στ. Σύνταγμα', 'Στ. Ανθούπολη', 'Μετρό, Γραμμή 2', 13, '(9 στάσεις)'),
(4, 'Στ. Ανθούπολη', 'Θηβών 166, Περιστέρι', 'Πεζή', 4, '(350 μ)');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `chalandriperisteri2`
--

CREATE TABLE `chalandriperisteri2` (
  `id` int(3) NOT NULL,
  `anaxwrhsh` varchar(50) CHARACTER SET utf8 NOT NULL,
  `proorismos` varchar(50) CHARACTER SET utf8 NOT NULL,
  `meso` varchar(50) CHARACTER SET utf8 NOT NULL,
  `wra` int(3) NOT NULL,
  `staseis` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `chalandriperisteri2`
--

INSERT INTO `chalandriperisteri2` (`id`, `anaxwrhsh`, `proorismos`, `meso`, `wra`, `staseis`) VALUES
(1, 'Παλαιολόγου 83, Χαλάνδρι', 'Στ. 7η Χολαργού', 'Πεζή', 17, '(1,3 χλμ)'),
(2, 'Στ. 7η Χολαργού', 'Αφετηρία', 'Λεωφορείο Χ95', 18, '(9 στάσεις)'),
(3, 'Αφετηρία', 'Στ. Σύνταγμα', 'Πεζή', 1, '(50 μ)'),
(4, 'Στ. Σύνταγμα', 'Στ. Ανθούπολη', 'Μετρό, Γραμμή 2', 13, '(9 στάσεις)'),
(5, 'Στ. Ανθούπολη', 'Θηβών 166, Περιστέρι', 'Πεζή', 4, '(350 μ)');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `chalandriperisteri3`
--

CREATE TABLE `chalandriperisteri3` (
  `id` int(3) NOT NULL,
  `anaxwrhsh` varchar(50) CHARACTER SET utf8 NOT NULL,
  `proorismos` varchar(50) CHARACTER SET utf8 NOT NULL,
  `meso` varchar(50) CHARACTER SET utf8 NOT NULL,
  `wra` int(3) NOT NULL,
  `staseis` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `chalandriperisteri3`
--

INSERT INTO `chalandriperisteri3` (`id`, `anaxwrhsh`, `proorismos`, `meso`, `wra`, `staseis`) VALUES
(1, 'Παλαιολόγου 83, Χαλάνδρι', 'Στ. 7η Χολαργού', 'Πεζή', 17, '(1,3 χλμ)'),
(2, 'Στ. 7η Χολαργού', 'Αφετηρία', 'Λεωφορείο Χ95', 16, '(9 στάσεις)'),
(3, 'Στ. Σύνταγμα', 'Θηβών 166, Περιστέρι', 'Πεζή', 84, '(6,6 χλμ)');

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
-- Δομή πίνακα για τον πίνακα `neasmirnichalandri`
--

CREATE TABLE `neasmirnichalandri` (
  `id` int(3) NOT NULL,
  `anaxwrhsh` varchar(50) CHARACTER SET utf8 NOT NULL,
  `proorismos` varchar(50) CHARACTER SET utf8 NOT NULL,
  `meso` varchar(50) CHARACTER SET utf8 NOT NULL,
  `wra` int(3) NOT NULL,
  `staseis` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `neasmirnichalandri`
--

INSERT INTO `neasmirnichalandri` (`id`, `anaxwrhsh`, `proorismos`, `meso`, `wra`, `staseis`) VALUES
(1, 'Πάρκο, Νέας Σμύρνης', 'Στ. Στροφή Νέας Σμύρνης', 'Πεζή', 5, '(350 μ)'),
(2, 'Στ. Στροφή Νέας Σμύρνης', 'Στ. Σύνταγμα', 'Λεωφορείο Α2', 12, '(9 στάσεις)'),
(3, 'Στ. Σύνταγμα', 'Στ. Σύνταγμα', 'Πεζή', 1, '(50 μ)'),
(4, 'Στ. Σύνταγμα', 'Στ. Αγία Παρασκευή', 'Μετρό, Γραμμή 3', 17, '(9 στάσεις)'),
(5, 'Στ. Αγία Παρασκευή', 'Παλαιλόγου 83, Χαλάνδρι', 'Πεζή', 11, '(1,0 χλμ)');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `neasmirnichalandri2`
--

CREATE TABLE `neasmirnichalandri2` (
  `id` int(3) NOT NULL,
  `anaxwrhsh` varchar(50) CHARACTER SET utf8 NOT NULL,
  `proorismos` varchar(50) CHARACTER SET utf8 NOT NULL,
  `meso` varchar(50) CHARACTER SET utf8 NOT NULL,
  `wra` int(3) NOT NULL,
  `staseis` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `neasmirnichalandri2`
--

INSERT INTO `neasmirnichalandri2` (`id`, `anaxwrhsh`, `proorismos`, `meso`, `wra`, `staseis`) VALUES
(1, 'Πάρκο, Νέας Σμύρνης', 'Στ. Αγίας Φωτεινής', 'Πεζή', 8, '(600 μ)'),
(2, 'Στ. Αγίας Φωτεινής', 'Στ. Σύνταγμα', 'Τραμ, Γραμμή 5', 15, '(8 στάσεις)'),
(3, 'Στ. Σύνταγμα', 'Στ. Σύνταγμα', 'Πεζή', 1, '(50 μ)'),
(4, 'Στ. Σύνταγμα', 'Στ. Αγία Παρασκευή', 'Μετρό, Γραμμή 3', 17, '(9 στάσεις)'),
(5, 'Στ. Αγία Παρασκευή', 'Παλαιλόγου 83, Χαλάνδρι', 'Πεζή', 11, '(1,0 χλμ)');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `neasmirniperisteri`
--

CREATE TABLE `neasmirniperisteri` (
  `id` int(3) NOT NULL,
  `anaxwrhsh` varchar(50) CHARACTER SET utf8 NOT NULL,
  `proorismos` varchar(50) CHARACTER SET utf8 NOT NULL,
  `meso` varchar(50) CHARACTER SET utf8 NOT NULL,
  `wra` int(3) NOT NULL,
  `staseis` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `neasmirniperisteri`
--

INSERT INTO `neasmirniperisteri` (`id`, `anaxwrhsh`, `proorismos`, `meso`, `wra`, `staseis`) VALUES
(1, 'Πάρκο, Νέας Σμύρνης', 'Στ. Στροφή Νέας Σμύρνης', 'Πεζή', 5, '(350 μ)'),
(2, 'Στ. Στροφή Νέας Σμύρνης', 'Στ. Συγγρού-Φιξ', 'Λεωφορείο 550', 8, '(7 στάσεις)'),
(3, 'Στ. Συγγρού-Φιξ', 'Στ. Συγγρού-Φιξ', 'Πεζή', 1, '(50 μ)'),
(4, 'Στ. Συγγρού-Φιξ', 'Στ. Ανθούπολη', 'Μετρό, Γραμμή 2', 16, '(11 στάσεις)'),
(5, 'Στ. Ανθούπολη', 'Θηβών 166, Περιστέρι', 'Πεζή', 4, '(350 μ)');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `neasmirniperisteri2`
--

CREATE TABLE `neasmirniperisteri2` (
  `id` int(3) NOT NULL,
  `anaxwrhsh` varchar(50) CHARACTER SET utf8 NOT NULL,
  `proorismos` varchar(50) CHARACTER SET utf8 NOT NULL,
  `meso` varchar(50) CHARACTER SET utf8 NOT NULL,
  `wra` int(5) NOT NULL,
  `staseis` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `neasmirniperisteri2`
--

INSERT INTO `neasmirniperisteri2` (`id`, `anaxwrhsh`, `proorismos`, `meso`, `wra`, `staseis`) VALUES
(1, 'Πάρκο, Νέας Σμύρνης', 'Στ. Άγιος Σώστης', 'Πεζή', 15, '(1,1 χλμ)'),
(2, 'Στ. Άγιος Σώστης', 'Αφετηρία (Ζάππειο)', 'Λεωφορείο 040', 9, '(6 στάσεις)'),
(3, 'Αφετηρία (Ζάππειο)', 'Στ. Σύνταγμα', 'Πεζή', 2, '(100 μ)'),
(4, 'Στ. Σύνταγμα', 'Στ. Ανθούπολη', 'Μετρό, Γραμμή 2', 13, '(9 στάσεις)'),
(5, 'Στ. Ανθούπολη', 'Θηβών 166, Περιστέρι', 'Πεζή', 4, '(350 μ)');

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

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `payment`
--

CREATE TABLE `payment` (
  `Id` int(11) NOT NULL,
  `Eidos` varchar(110) CHARACTER SET utf8 NOT NULL,
  `Timh` float NOT NULL,
  `Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `payment`
--

INSERT INTO `payment` (`Id`, `Eidos`, `Timh`, `Number`) VALUES
(1, 'Ένα εισιτήριο 90 λεπτών', 1.4, 0),
(2, 'Δύο εισιτήρια 90 λεπτών', 2.7, 0),
(3, 'Πέντε εισιτήρια 90 λεπτών', 6.5, 0),
(4, 'Έντεκα εισιτήρια 90 λεπτών', 13.5, 0),
(5, 'Εισιτήριο 24 ωρών', 4.5, 0),
(6, 'Εισιτήριο 5 ημερών', 9, 0),
(7, 'Εισιτήριο Λεωφορείου Express για Αεροδρόμιο', 6, 0),
(8, 'Εισιτήριο Μετρό για Αεροδρόμιο', 10, 0),
(9, 'Εισιτήριο Μετρό μετ επιστροφής για Αεροδρόμιο (εντός 48 ωρών)', 18, 0),
(10, 'Εισιτήριο Μετρό μεταξύ Αεροδρομίου & Παλλήνη-Κάντζα-Κορωπί', 6, 0),
(11, 'Τουριστικό εισιτήριο 3 ημερών (περιλαμβάνει μετακινήσεις προς Αεροδρόμιο)', 22, 0),
(12, 'Ένα εισιτήριο 90 λεπτών Ανώνυμη κάρτα (Ολόκληρο)', 1.4, 0),
(13, 'Ένα εισιτήριο 90 λεπτών Προσωποποιημένη κάρτα (Ολόκληρο)', 1.4, 0),
(14, 'Ένα εισιτήριο 90 λεπτών Προσωποποιημένη κάρτα (Μειωμένο)', 0.6, 0),
(15, 'Δύο εισιτήρια 90 λεπτών Ανώνυμη κάρτα (Ολόκληρο)', 2.7, 0),
(16, 'Δύο εισιτήρια 90 λεπτών Προσωποποιημένη κάρτα (Ολόκληρο)', 2.7, 0),
(17, 'Δύο εισιτήρια 90 λεπτών Προσωποποιημένη κάρτα (Μειωμένο)', 1.2, 0),
(18, 'Πέντε εισιτήρια 90 λεπτών Ανώνυμη κάρτα (Ολόκληρο)', 6.5, 0),
(19, 'Πέντε εισιτήρια 90 λεπτών Προσωποποιημένη κάρτα (Ολόκληρο)', 2.7, 0),
(20, 'Πέντε εισιτήρια 90 λεπτών Προσωποποιημένη κάρτα (Μειωμένο)', 3, 0),
(21, 'Έντεκα εισιτήρια 90 λεπτών(1 δωρεάν) Ανώνυμη κάρτα (Ολόκληρο)', 13.5, 0),
(22, 'Έντεκα εισιτήρια 90 λεπτών(1 δωρεάν) Προσωποποιημένη κάρτα (Ολόκληρο)', 13.5, 0),
(23, 'Έντεκα εισιτήρια 90 λεπτών(1 δωρεάν) Προσωποποιημένη κάρτα (Μειωμένο)', 6, 0),
(24, 'Εισιτήριο 24 ωρών Ανώνυμη κάρτα (Ολόκληρο)', 4.5, 0),
(25, 'Εισιτήριο 24 ωρών Προσωποποιημένη κάρτα (Ολόκληρο)', 4.5, 0),
(26, 'Εισιτήριο 5 ημερών Ανώνυμη κάρτα (Ολόκληρο)', 9, 0),
(27, 'Εισιτήριο 5 ημερών Προσωποποιημένη κάρτα (Ολόκληρο)', 9, 0),
(28, 'Εισιτήριο Λεωφορείου Express για Αεροδρόμιο Ανώνυμη κάρτα (Ολόκληρο)', 6, 0),
(29, 'Εισιτήριο Λεωφορείου Express για Αεροδρόμιο Προσωποποιημένη κάρτα (Ολόκληρο)', 6, 0),
(30, 'Εισιτήριο Λεωφορείου Express για Αεροδρόμιο Προσωποποιημένη κάρτα (Μειωμένο)', 3, 0),
(31, 'Εισιτήριο Μετρό για Αεροδρόμιο Ανώνυμη κάρτα (Ολόκληρο)', 10, 0),
(32, 'Εισιτήριο Μετρό για Αεροδρόμιο Προσωποποιημένη κάρτα (Ολόκληρο)', 10, 0),
(33, 'Εισιτήριο Μετρό για Αεροδρόμιο Προσωποποιημένη κάρτα (Μειωμένο)', 5, 0),
(34, 'Εισιτήριο Μετρό μετ επιστροφής για Αεροδρόμιο (εντός 48 ωρών) Ανώνυμη κάρτα (Ολόκληρο)', 18, 0),
(35, 'Εισιτήριο Μετρό μετ επιστροφής για Αεροδρόμιο (εντός 48 ωρών) Προσωποποιημένη κάρτα (Ολόκληρο)', 18, 0),
(36, 'Εισιτήριο Μετρό μεταξύ Αεροδρομίου & Παλλήνη-Κάντζα-Κορωπί Ανώνυμη κάρτα (Ολόκληρο)', 6, 0),
(37, 'Εισιτήριο Μετρό μεταξύ Αεροδρομίου & Παλλήνη-Κάντζα-Κορωπί Προσωποποιημένη κάρτα (Ολόκληρο)', 6, 0),
(38, 'Εισιτήριο Μετρό μεταξύ Αεροδρομίου & Παλλήνη-Κάντζα-Κορωπί Προσωποποιημένη κάρτα (Μειωμένο)', 3, 0),
(39, 'Τουριστικό εισιτήριο 3 ημερών (περιλαμβάνει μετακινήσεις προς Αεροδρόμιο) Ανώνυμη κάρτα (Ολόκληρο)', 22, 0),
(40, 'Τουριστικό εισιτήριο 3 ημερών (περιλαμβάνει μετακινήσεις προς Αεροδρόμιο) Προσωποποιημένη κάρτα (Ολόκληρο)', 22, 0),
(41, 'Εισιτήριο 30 ημερών (χωρίς μετακινήσεις προς Αεροδρόμιο) Προσωποποιημένη κάρτα (Ολόκληρο)', 30, 0),
(42, 'Εισιτήριο 30 ημερών (χωρίς μετακινήσεις προς Αεροδρόμιο) Προσωποποιημένη κάρτα (Μειωμένο)', 15, 0),
(43, 'Εισιτήριο 30 ημερών (με μετακινήσεις προς Αεροδρόμιο) Προσωποποιημένη κάρτα (Ολόκληρο)', 49, 0),
(44, 'Εισιτήριο 30 ημερών (με μετακινήσεις προς Αεροδρόμιο) Προσωποποιημένη κάρτα (Μειωμένο)', 25, 0),
(45, 'Εισιτήριο 90 ημερών (χωρίς μετακινήσεις προς Αεροδρόμιο) Προσωποποιημένη κάρτα (Ολόκληρο)', 85, 0),
(46, 'Εισιτήριο 90 ημερών (χωρίς μετακινήσεις προς Αεροδρόμιο) Προσωποποιημένη κάρτα (Μειωμένο)', 43, 0),
(47, 'Εισιτήριο 90 ημερών (με μετακινήσεις προς Αεροδρόμιο) Προσωποποιημένη κάρτα (Ολόκληρο)', 142, 0),
(48, 'Εισιτήριο 90 ημερών (με μετακινήσεις προς Αεροδρόμιο) Προσωποποιημένη κάρτα (Μειωμένο)', 71, 0),
(49, 'Εισιτήριο 180 ημερών (χωρίς μετακινήσεις προς Αεροδρόμιο) Προσωποποιημένη κάρτα (Ολόκληρο)', 170, 0),
(50, 'Εισιτήριο 180 ημερών (χωρίς μετακινήσεις προς Αεροδρόμιο) Προσωποποιημένη κάρτα (Μειωμένο)', 85, 0),
(51, 'Εισιτήριο 180 ημερών (με μετακινήσεις προς Αεροδρόμιο) Προσωποποιημένη κάρτα (Ολόκληρο)', 250, 0),
(52, 'Εισιτήριο 180 ημερών (με μετακινήσεις προς Αεροδρόμιο) Προσωποποιημένη κάρτα (Μειωμένο)', 125, 0),
(53, 'Εισιτήριο 365 ημερών (χωρίς μετακινήσεις προς Αεροδρόμιο) Προσωποποιημένη κάρτα (Ολόκληρο)', 330, 0),
(54, 'Εισιτήριο 365 ημερών (χωρίς μετακινήσεις προς Αεροδρόμιο) Προσωποποιημένη κάρτα (Μειωμένο)', 165, 0),
(55, 'Εισιτήριο 365 ημερών (με μετακινήσεις προς Αεροδρόμιο) Προσωποποιημένη κάρτα (Ολόκληρο)', 490, 0),
(56, 'Εισιτήριο 365 ημερών (με μετακινήσεις προς Αεροδρόμιο) Προσωποποιημένη κάρτα (Μειωμένο)', 245, 0);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `peristerichalandri`
--

CREATE TABLE `peristerichalandri` (
  `id` int(3) NOT NULL,
  `anaxwrhsh` varchar(50) CHARACTER SET utf8 NOT NULL,
  `proorismos` varchar(50) CHARACTER SET utf8 NOT NULL,
  `meso` varchar(50) CHARACTER SET utf8 NOT NULL,
  `wra` int(11) NOT NULL,
  `staseis` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `peristerichalandri`
--

INSERT INTO `peristerichalandri` (`id`, `anaxwrhsh`, `proorismos`, `meso`, `wra`, `staseis`) VALUES
(1, 'Θηβών 166, Περιστέρι', 'Στ. Ανθούπολη', 'Πεζή', 5, '(350 μ)'),
(2, 'Στ. Ανθούπολη', 'Στ. Σύνταγμα', 'Μετρό, Γραμμή 2', 13, '(9 στάσεις)'),
(3, 'Στ. Σύνταγμα', 'Στ. Αγία Παρασκευή', 'Μετρό, Γραμμή 3', 17, '(9 στάσεις)'),
(4, 'Στ. Αγία Παρασκευή', 'Παλαιλόγου 83, Χαλάνδρι', 'Πεζή', 11, '(1,0 χλμ)');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `peristerichalandri2`
--

CREATE TABLE `peristerichalandri2` (
  `id` int(3) NOT NULL,
  `anaxwrhsh` varchar(50) CHARACTER SET utf8 NOT NULL,
  `proorismos` varchar(50) CHARACTER SET utf8 NOT NULL,
  `meso` varchar(50) CHARACTER SET utf8 NOT NULL,
  `wra` int(11) NOT NULL,
  `staseis` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `peristerichalandri2`
--

INSERT INTO `peristerichalandri2` (`id`, `anaxwrhsh`, `proorismos`, `meso`, `wra`, `staseis`) VALUES
(1, 'Θηβών 166, Περιστέρι', 'Στ. Ανθούπολη', 'Πεζή', 5, '(350 μ)'),
(2, 'Στ. Ανθούπολη', 'Στ. Πανεπιστήμιο', 'Μετρό, Γραμμή 2', 11, '(8 στάσεις)'),
(3, 'Στ. Πανεπιστήμιο', 'Στ. Ακαδημίας', 'Πεζή', 3, '(260 μ)'),
(4, 'Στ. Ακαδημίας', 'Στ. Ερυθρός Σταυρός', 'Λεωφορείο 3', 14, '(12 στάσεις)'),
(5, 'Στ. Ερυθρός Σταυρός (Μετεπιβίβαση)', 'Στ. Αριστοτέλους', 'Λεωφορείο 19', 21, '(18 στάσεις)'),
(6, 'Στ. Αριστοτέλους', 'Παλαιλόγου 83, Χαλάνδρι', 'Πεζή', 1, '(90 μ)');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `peristerineasmirni`
--

CREATE TABLE `peristerineasmirni` (
  `id` int(3) NOT NULL,
  `anaxwrhsh` varchar(50) CHARACTER SET utf8 NOT NULL,
  `proorismos` varchar(50) CHARACTER SET utf8 NOT NULL,
  `meso` varchar(50) CHARACTER SET utf8 NOT NULL,
  `wra` int(3) NOT NULL,
  `staseis` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `peristerineasmirni`
--

INSERT INTO `peristerineasmirni` (`id`, `anaxwrhsh`, `proorismos`, `meso`, `wra`, `staseis`) VALUES
(1, 'Θηβών 166, Περιστέρι', 'Στ. Ανθούπολη', 'Πεζή', 5, '(350 μ)'),
(2, 'Στ. Ανθούπολη', 'Στ. Σύνταγμα', 'Μετρό, Γραμμή 2', 14, '(9 στάσεις)'),
(3, 'Στ. Σύνταγμα', 'Στ. Σύνταγμα', 'Πεζή', 1, '(50 μ)'),
(4, 'Στ. Σύνταγμα', 'Στ. Αγίας Φωτεινής', 'Τραμ, Γραμμή 5', 17, '(8 στάσεις)'),
(5, 'Στ. Αγίας Φωτεινής', 'Πάρκο Νέας Σμύρνης', 'Πεζή', 6, '(600 μ)');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `peristerineasmirni2`
--

CREATE TABLE `peristerineasmirni2` (
  `id` int(3) NOT NULL,
  `anaxwrhsh` varchar(50) CHARACTER SET utf8 NOT NULL,
  `proorismos` varchar(50) CHARACTER SET utf8 NOT NULL,
  `meso` varchar(50) CHARACTER SET utf8 NOT NULL,
  `wra` int(3) NOT NULL,
  `staseis` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `peristerineasmirni2`
--

INSERT INTO `peristerineasmirni2` (`id`, `anaxwrhsh`, `proorismos`, `meso`, `wra`, `staseis`) VALUES
(1, 'Θηβών 166, Περιστέρι', 'Στ. Ανθούπολη', 'Πεζή', 5, '(350 μ)'),
(2, 'Στ. Ανθούπολη', 'Στ. Συγγρού-Φιξ', 'Μετρό, Γραμμή 2', 16, '(11 στάσεις)'),
(3, 'Στ. Συγγρού-Φιξ', 'Στ. Συγγρού-Φιξ', 'Πεζή', 1, '(50 μ)'),
(4, 'Στ. Συγγρού-Φιξ', 'Στ. Στροφή Νέας Σμύρνης', 'Λεωφορείο 550', 9, '(7 στάσεις)'),
(5, 'Στ. Στροφή Νέας Σμύρνης', 'Πάρκο Νέας Σμύρνης', 'Πεζή', 8, '(550 μ)');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `staseis2`
--

CREATE TABLE `staseis2` (
  `id` int(11) NOT NULL,
  `station` varchar(18) CHARACTER SET utf8 NOT NULL,
  `time` int(11) NOT NULL,
  `station2` varchar(18) CHARACTER SET utf8 NOT NULL,
  `time2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `staseis2`
--

INSERT INTO `staseis2` (`id`, `station`, `time`, `station2`, `time2`) VALUES
(1, 'ΑΝΘΟΥΠΟΛΗ', 0, 'ΕΛΛΗΝΙΚΟ', 0),
(2, 'ΠΕΡΙΣΤΕΡΙ', 1, 'ΑΡΓΥΡΟΥΠΟΛΗ', 1),
(3, 'ΑΓΙΟΣ ΑΝΤΩΝΙΟΣ', 2, 'ΑΛΙΜΟΣ', 3),
(4, 'ΣΕΠΟΛΙΑ', 4, 'ΗΛΙΟΥΠΟΛΗ', 5),
(5, 'ΑΤΤΙΚΗ', 5, 'ΑΓΙΟΣ ΔΗΜΗΤΡΙΟΣ', 7),
(6, 'ΣΤΑΘΜΟΣ ΛΑΡΙΣΗΣ', 7, 'ΔΑΦΝΗ', 8),
(7, 'ΜΕΤΑΞΟΥΡΓΕΙΟ', 8, 'ΑΓΙΟΣ ΙΩΑΝΝΗΣ', 10),
(8, 'ΟΜΟΝΟΙΑ', 10, 'ΝΕΟΣ ΚΟΣΜΟΣ', 11),
(9, 'ΠΑΝΕΠΙΣΤΗΜΙΟ', 11, 'ΣΥΓΓΡΟΥ-ΦΙΞ', 13),
(10, 'ΣΥΝΤΑΓΜΑ', 13, 'ΑΚΡΟΠΟΛΗ', 14),
(11, 'ΑΚΡΟΠΟΛΗ', 14, 'ΣΥΝΤΑΓΜΑ', 16),
(12, 'ΣΥΓΓΡΟΥ-ΦΙΞ', 16, 'ΠΑΝΕΠΙΣΤΗΜΙΟ', 18),
(13, 'ΝΕΟΣ ΚΟΣΜΟΣ', 17, 'ΟΜΟΝΟΙΑ', 19),
(14, 'ΑΓΙΟΣ ΙΩΑΝΝΗΣ', 18, 'ΜΕΤΑΞΟΥΡΓΕΙΟ', 20),
(15, 'ΔΑΦΝΗ', 20, 'ΣΤΑΘΜΟΣ ΛΑΡΙΣΗΣ', 22),
(16, 'ΑΓΙΟΣ ΔΗΜΗΤΡΙΟΣ', 22, 'ΑΤΤΙΚΗ', 23),
(17, 'ΗΛΙΟΥΠΟΛΗ', 24, 'ΣΕΠΟΛΙΑ', 25),
(18, 'ΑΛΙΜΟΣ', 25, 'ΑΓΙΟΣ ΑΝΤΩΝΙΟΣ', 27),
(19, 'ΑΡΓΥΡΟΥΠΟΛΗ', 28, 'ΠΕΡΙΣΤΕΡΙ', 28),
(20, 'ΕΛΛΗΝΙΚΟ', 29, 'ΑΝΘΟΥΠΟΛΗ', 29);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `staseis3`
--

CREATE TABLE `staseis3` (
  `id` int(11) NOT NULL,
  `station` varchar(18) CHARACTER SET utf8 NOT NULL,
  `time` int(3) NOT NULL,
  `station2` varchar(18) CHARACTER SET utf8 NOT NULL,
  `time2` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `staseis3`
--

INSERT INTO `staseis3` (`id`, `station`, `time`, `station2`, `time2`) VALUES
(1, 'ΑΓΙΑ ΜΑΡΙΝΑ', 0, 'ΑΕΡΟΔΡΟΜΙΟ', 0),
(2, 'ΑΙΓΑΛΕΩ', 2, 'ΚΟΡΩΠΙ', 6),
(3, 'ΕΛΑΙΩΝΑΣ', 4, 'ΠΑΙΑΝΙΑ-ΚΑΝΤΖΑ', 12),
(4, 'ΚΕΡΑΜΕΙΚΟΣ', 6, 'ΠΑΛΛΗΝΗ', 14),
(5, 'ΜΟΝΑΣΤΗΡΑΚΙ', 8, 'ΔΟΥΚ. ΠΛΑΚΕΝΤΙΑΣ', 20),
(6, 'ΣΥΝΤΑΓΜΑ', 10, 'ΧΑΛΑΝΔΡΙ', 22),
(7, 'ΕΥΑΓΓΕΛΙΣΜΟΣ', 12, 'ΑΓΙΑ ΠΑΡΑΣΚΕΥΗ', 24),
(8, 'ΜΕΓΑΡΟ ΜΟΥΣΙΚΗΣ', 13, 'ΝΟΜΙΣΜΑΤΟΚΟΠΕΙΟ', 26),
(9, 'ΑΜΠΕΛΟΚΗΠΟΙ', 15, 'ΧΟΛΑΡΓΟΣ', 27),
(10, 'ΠΑΝΟΡΜΟΥ', 17, 'ΕΘΝΙΚΗ ΑΜΥΝΑ', 29),
(11, 'ΚΑΤΕΧΑΚΗ', 19, 'ΚΑΤΕΧΑΚΗ', 30),
(12, 'ΕΘΝΙΚΗ ΑΜΥΝΑ', 20, 'ΠΑΝΟΡΜΟΥ', 32),
(13, 'ΧΟΛΑΡΓΟΣ', 22, 'ΑΜΠΕΛΟΚΗΠΟΙ', 34),
(14, 'ΝΟΜΙΣΜΑΤΟΚΟΠΕΙΟ', 23, 'ΜΕΓΑΡΟ ΜΟΥΣΙΚΗΣ', 36),
(15, 'ΑΓΙΑ ΠΑΡΑΣΚΕΥΗ', 25, 'ΕΥΑΓΓΕΛΙΣΜΟΣ', 37),
(16, 'ΧΑΛΑΝΔΡΙ', 27, 'ΣΥΝΤΑΓΜΑ', 39),
(17, 'ΔΟΥΚ. ΠΛΑΚΕΝΤΙΑΣ', 29, 'ΜΟΝΑΣΤΗΡΑΚΙ', 41),
(18, 'ΠΑΛΛΗΝΗ', 35, 'ΚΕΡΑΜΕΙΚΟΣ', 43),
(19, 'ΠΑΙΑΝΙΑ-ΚΑΝΤΖΑ', 37, 'ΕΛΑΙΩΝΑΣ', 45),
(20, 'ΚΟΡΩΠΙ', 43, 'ΑΙΓΑΛΕΩ', 47),
(21, 'ΑΕΡΟΔΡΟΜΙΟ', 49, 'ΑΓΙΑ ΜΑΡΙΝΑ', 49);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `hobbies` varchar(255) NOT NULL,
  `number` int(10) NOT NULL,
  `flag` int(11) NOT NULL,
  `amea` int(11) NOT NULL,
  `foititis` int(11) NOT NULL,
  `anergos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `birthday`, `hobbies`, `number`, `flag`, `amea`, `foititis`, `anergos`) VALUES
(1, 'maria26@gmail.com', '123456789Aa', 'Mariaa', '1998-04-03', 'Kerki', 123456789, 0, 0, 1, 0),
(29, 'lina23@gmail.com', '123linaA', 'Lina', '1998-04-04', 'Koliou', 1234567891, 0, 0, 0, 0),
(36, 'chrysa@gmail.com', 'Chrysa24', 'Chrysa', '0000-00-00', '', 0, 0, 0, 0, 0),
(37, 'dimitrastr@hotmail.com', 'EAMsdi1600163', '', '0000-00-00', '', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `wrario2`
--

CREATE TABLE `wrario2` (
  `id` int(11) NOT NULL,
  `station` varchar(18) CHARACTER SET utf8 NOT NULL,
  `time1` varchar(10) CHARACTER SET utf8 NOT NULL,
  `time2` varchar(10) CHARACTER SET utf8 NOT NULL,
  `time3` varchar(18) CHARACTER SET utf8 NOT NULL,
  `station2` varchar(18) CHARACTER SET utf8 NOT NULL,
  `time4` varchar(10) CHARACTER SET utf8 NOT NULL,
  `time5` varchar(18) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `wrario2`
--

INSERT INTO `wrario2` (`id`, `station`, `time1`, `time2`, `time3`, `station2`, `time4`, `time5`) VALUES
(1, 'ΑΝΘΟΥΠΟΛΗ', '05:30', '05:30', '00:05/02:05', 'ΕΛΛΗΝΙΚΟ', '05:30', '00:01/02:01'),
(2, 'ΠΕΡΙΣΤΕΡΙ', '05:31', '05:31', '00:06/02:06', 'ΑΡΓΥΡΟΥΠΟΛΗ', '05:31', '00:02/02:02'),
(3, 'ΑΓ. ΑΝΤΩΝΙΟΣ', '05:32', '05:32', '00:07/02:07', 'ΑΛΙΜΟΣ', '05:33', '00:05/02:05'),
(4, 'ΣΕΠΟΛΙΑ', '05:34', '05:34', '00:09/02:09', 'ΗΛΙΟΥΠΟΛΗ', '05:35', '00:06/02:06'),
(5, 'ΑΤΤΙΚΗ', '05:30', '05:35', '00:11/02:11', 'ΑΓ. ΔΗΜΗΤΡΙΟΣ', '05:30', '00:08/02:08'),
(6, 'ΣΤ. ΛΑΡΙΣΗΣ', '05:31', '05:37', '00:12/02:12', 'ΔΑΦΝΗ', '05:31', '00:10/02:10'),
(7, 'ΜΕΤΑΞΟΥΡΓΕΙΟ', '05:32', '05:38', '00:13/02:13', 'ΑΓ. ΙΩΑΝΝΗΣ', '05:32', '00:11/02:11'),
(8, 'ΟΜΟΝΟΙΑ', '05:34', '05:40', '00:15/02:15', 'ΝΕΟΣ ΚΟΣΜΟΣ', '05:34', '00:12/02:12'),
(9, 'ΠΑΝΕΠΙΣΤΗΜΙΟ', '05:35', '05:41', '00:16/02:16', 'ΣΥΓΓΡΟΥ-ΦΙΞ', '05:35', '00:14/02:14'),
(10, 'ΣΥΝΤΑΓΜΑ', '05:37', '05:43', '00:20/02:20', 'ΑΚΡΟΠΟΛΗ', '05:37', '00:15/02:15'),
(11, 'ΑΚΡΟΠΟΛΗ', '05:38', '05:44', '00:21/02:21', 'ΣΥΝΤΑΓΜΑ', '05:38', '00:20/02:20'),
(12, 'ΣΥΓΓΡΟΥ-ΦΙΞ', '05:40', '05:46', '00:23/02:23', 'ΠΑΝΕΠΙΣΤΗΜΙΟ', '05:40', '00:21/02:21'),
(13, 'ΝΕΟΣ ΚΟΣΜΟΣ', '05:41', '05:47', '00:24/02:24', 'ΟΜΟΝΟΙΑ', '05:42', '00:23/02:23'),
(14, 'ΑΓ. ΙΩΑΝΝΗΣ', '05:43', '05:48', '00:25/02:25', 'ΜΕΤΑΞΟΥΡΓΕΙΟ', '05:43', '00:24/02:24'),
(15, 'ΔΑΦΝΗ', '05:44', '05:50', '00:27/02:27', 'ΣΤ. ΛΑΡΙΣΗΣ', '05:44', '00:25/02:25'),
(16, 'ΑΓ. ΔΗΜΗΤΡΙΟΣ', '05:46', '05:52', '00:29/02:29', 'ΑΤΤΙΚΗ', '05:46', '00:27/02:27'),
(17, 'ΗΛΙΟΥΠΟΛΗ', '05:48', '05:54', '00:30/02:30', 'ΣΕΠΟΛΙΑ', '05:47', '00:29/02:29'),
(18, 'ΑΛΙΜΟΣ', '05:50', '05:55', '00:32/02:32', 'ΑΓ. ΑΝΤΩΝΙΟΣ', '05:49', '00:30/02:30'),
(19, 'ΑΡΓΥΡΟΥΠΟΛΗ', '05:52', '05:58', '00:34/02:34', 'ΠΕΡΙΣΤΕΡΙ', '05:51', '00:32/02:32'),
(20, 'ΕΛΛΗΝΙΚΟ', '05:53', '05:59', '00:36/02:36', 'ΑΝΘΟΥΠΟΛΗ', '05:52', '00:33/02:33');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `wrario3`
--

CREATE TABLE `wrario3` (
  `id` int(3) NOT NULL,
  `station` varchar(18) CHARACTER SET utf8 NOT NULL,
  `time1` varchar(18) CHARACTER SET utf8 NOT NULL,
  `time2` varchar(18) CHARACTER SET utf8 NOT NULL,
  `station2` varchar(18) CHARACTER SET utf8 NOT NULL,
  `time4` varchar(18) CHARACTER SET utf8 NOT NULL,
  `time5` varchar(18) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `wrario3`
--

INSERT INTO `wrario3` (`id`, `station`, `time1`, `time2`, `station2`, `time4`, `time5`) VALUES
(1, 'ΑΓΙΑ ΜΑΡΙΝΑ', '05:30', '00:07/02:07', 'ΔΟΥΚ. ΠΛΑΚΕΝΤΙΑΣ', '05:30', '23:59/01:59'),
(2, 'ΑΙΓΑΛΕΩ', '05:31', '00:09/02:09', 'ΧΑΛΑΝΔΡΙ', '05:31', '00:01/02:01'),
(3, 'ΕΛΑΙΩΝΑΣ', '05:33', '00:11/02:11', 'ΑΓΙΑ ΠΑΡΑΣΚΕΥΗ', '05:33', '00:02/02:02'),
(4, 'ΚΕΡΑΜΕΙΚΟΣ', '05:35', '00:13/02:13', 'ΝΟΜΙΣΜΑΤΟΚΟΠΕΙΟ', '05:34', '00:04/02:04'),
(5, 'ΜΟΝΑΣΤΗΡΑΚΙ', '05:30', '00:15/02:15', 'ΧΟΛΑΡΓΟΣ', '05:36', '00:05/02:05'),
(6, 'ΣΥΝΤΑΓΜΑ', '05:32', '00:20/02:20', 'ΕΘΝΙΚΗ ΑΜΥΝΑ', '05:30', '00:07/02:07'),
(7, 'ΕΥΑΓΓΕΛΙΣΜΟΣ', '05:33', '00:21/02:21', 'ΚΑΤΕΧΑΚΗ', '05:31', '00:09/02:09'),
(8, 'ΜΕΓΑΡΟ ΜΟΥΣΙΚΗΣ', '05:35', '00:22/02:22', 'ΠΑΝΟΡΜΟΥ', '05:33', '00:11/02:11'),
(9, 'ΑΜΠΕΛΟΚΗΠΟΙ', '05:36', '00:24/02:24', 'ΑΜΠΕΛΟΚΗΠΟΙ', '05:35', '00:12/02:12'),
(10, 'ΠΑΝΟΡΜΟΥ', '05:38', '00:25/02:25', 'ΜΕΓΑΡΟ ΜΟΥΣΙΚΗΣ', '05:36', '00:14/02:14'),
(11, 'ΚΑΤΕΧΑΚΗ', '05:39', '00:27/02:27', 'ΕΥΑΓΓΕΛΙΣΜΟΣ', '05:37', '00:15/02:15'),
(12, 'ΕΘΝΙΚΗ ΑΜΥΝΑ', '05:41', '00:29/02:29', 'ΣΥΝΤΑΓΜΑ', '05:39', '00:20/02:20'),
(13, 'ΧΟΛΑΡΓΟΣ', '05:43', '00:31/02:31', 'ΜΟΝΑΣΤΗΡΑΚΙ', '05:41', '00:21/02:21'),
(14, 'ΝΟΜΙΣΜΑΤΟΚΟΠΕΙΟ', '05:45', '00:32/02:32', 'ΚΕΡΑΜΕΙΚΟΣ', '05:43', '00:23/02:23'),
(15, 'ΑΓΙΑ ΠΑΡΑΣΚΕΥΗ', '05:46', '00:34/02:34', 'ΕΛΑΙΩΝΑΣ', '05:45', '00:26/02:26'),
(16, 'ΧΑΛΑΝΔΡΙ', '05:48', '00:36/02:36', 'ΑΙΓΑΛΕΩ', '05:47', '00:27/02:27'),
(17, 'ΔΟΥΚ. ΠΛΑΚΕΝΤΙΑΣ', '05:49', '00:38/02:38', 'ΑΓΙΑ  ΜΑΡΙΝΑ', '05:49', '00:29/02:29');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `chalandrineasmirni`
--
ALTER TABLE `chalandrineasmirni`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `chalandrineasmirni2`
--
ALTER TABLE `chalandrineasmirni2`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `chalandriperisteri`
--
ALTER TABLE `chalandriperisteri`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `chalandriperisteri2`
--
ALTER TABLE `chalandriperisteri2`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `chalandriperisteri3`
--
ALTER TABLE `chalandriperisteri3`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `neasmirnichalandri`
--
ALTER TABLE `neasmirnichalandri`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `neasmirnichalandri2`
--
ALTER TABLE `neasmirnichalandri2`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `neasmirniperisteri`
--
ALTER TABLE `neasmirniperisteri`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `neasmirniperisteri2`
--
ALTER TABLE `neasmirniperisteri2`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Id`);

--
-- Ευρετήρια για πίνακα `peristerichalandri`
--
ALTER TABLE `peristerichalandri`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `peristerichalandri2`
--
ALTER TABLE `peristerichalandri2`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `peristerineasmirni`
--
ALTER TABLE `peristerineasmirni`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `peristerineasmirni2`
--
ALTER TABLE `peristerineasmirni2`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `staseis2`
--
ALTER TABLE `staseis2`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `staseis3`
--
ALTER TABLE `staseis3`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `wrario2`
--
ALTER TABLE `wrario2`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `wrario3`
--
ALTER TABLE `wrario3`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
