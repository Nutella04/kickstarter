-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 21 2020 г., 06:57
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `kickstarter`
--

-- --------------------------------------------------------

--
-- Структура таблицы `projects`
--

CREATE TABLE `projects` (
  `id` int(10) NOT NULL,
  `title` varchar(180) NOT NULL,
  `description` varchar(400) NOT NULL,
  `goal` int(50) NOT NULL,
  `donated` int(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `user` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `goal`, `donated`, `img`, `user`, `place`) VALUES
(1, 'The Pursuit of Happiness - Big Box and Nostalgia expansion', 'The Pursuit of Happiness gets a Big Box, Deluxe components and a brandnew Expansion!', 20000, 229880, 'images/1.jpg', 'Artipia Games', 'Athens, Greece'),
(2, 'AstroDemons VS R.A.S.', 'High-quality resin miniatures for fans of wargaming, colectors and painters', 5000, 32090, 'images/2.png', 'Space Legats', 'Yakutsk, Russia'),
(3, 'Romanselvania - a hilarious video game genre mashup', 'Dracula meets The Bachelor! Hot as Hades, funny as Hell. Team members from BioShock, Saint\'s Row, & Perception PS4/PS5/Switch/PC', 200000, 123477, 'images/3.png', 'The Deep End Games', 'Boston, MA'),
(5, 'The Pursuit of Happiness - Big Box and Nostalgia expansion', 'The Pursuit of Happiness gets a Big Box, Deluxe components and a brandnew Expansion!', 20001, 0, 'images/1.jpg', 'генри', 'мухосранск'),
(9, 'The Pursuit of Happiness - Big Box and Nostalgia expansion', 'The Pursuit of Happiness gets a Big Box, Deluxe components and a brandnew Expansion!', 20001, 0, 'images/1.jpg', 'eric', 'мухосранск'),
(10, 'AstroDemons VS R.A.S.', 'High-quality resin miniatures for fans of wargaming, colectors and painters', 5001, 0, 'images/2.png', 'eric', 'мухосранск');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
