-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 15 Ιαν 2020 στις 02:33:13
-- Έκδοση διακομιστή: 10.4.10-MariaDB
-- Έκδοση PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `test`
--

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
(1, 'maria26@gmail.com', '123456789Aa', 'Mariaas', '1998-04-03', 'Kerki', 123456789, 0, 0, 1, 0),
(29, 'lina23@gmail.com', '123linaA', 'Lina', '1998-04-04', 'Koliou', 1234567891, 0, 0, 0, 0),
(30, 'linakolioy@gmail.com', 'Dokimi12', '', '0000-00-00', '', 0, 0, 0, 0, 0),
(32, 'maria22@gmail.com', 'Linakol1', '', '0000-00-00', '', 0, 0, 0, 0, 0),
(33, 'name@example.com', '123456789Bb', '', '0000-00-00', '', 0, 0, 0, 0, 0),
(35, 'sdi1600071@di.uoa.gr', 'M3eixkena', '', '0000-00-00', '', 0, 0, 0, 0, 0);

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
