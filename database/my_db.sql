-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 15 2018 г., 23:44
-- Версия сервера: 5.7.20
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `my_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `Name` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Surname` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Age` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Gender` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Birthdate` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Hobby` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Login` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Password` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Bank_card` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Resume` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Category` text COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`Name`, `Surname`, `Age`, `Gender`, `Birthdate`, `Hobby`, `Login`, `Password`, `Bank_card`, `Resume`, `Category`) VALUES
('Nick', 'Rich', '34', 'male', '12.04.1984', 'chess', 'nr84', '1204', '2233445765', 'look for a job', 'something'),
('Sara', 'Kondor', '28', 'female', '10.01.1990', 'tennis', 'saraK', '$2y$10$Elv9DsMj4l8zmqlnYLu7e.R.HJ5GG8umgkzShATvF2jjWLLzDZmHG', '3598382789', 'working in IT company', 'something');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
