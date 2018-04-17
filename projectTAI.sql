-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Янв 15 2018 г., 23:15
-- Версия сервера: 10.1.19-MariaDB
-- Версия PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `projectTAI`
--

-- --------------------------------------------------------

--
-- Структура таблицы `folders`
--

CREATE TABLE `folders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dt` date NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `folders`
--

INSERT INTO `folders` (`id`, `name`, `dt`, `id_user`) VALUES
(1, 'lato 2019', '2016-09-06', 1),
(2, 'dfghg', '2017-12-12', 1),
(3, 'lato 2010', '2017-12-03', 1),
(4, 'sdfghjkl;', '2017-07-03', 2),
(6, 'bnm', '2018-01-10', 3),
(13, 'dfgh', '2018-01-15', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `dt` date NOT NULL,
  `id_folder` int(11) NOT NULL,
  `photo_small` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `photos`
--

INSERT INTO `photos` (`id`, `title`, `dt`, `id_folder`, `photo_small`, `photo`) VALUES
(6, '111', '2018-01-15', 1, 'nUtqLUU9nbU.jpg', 'nUtqLUU9nbU.jpg'),
(7, '111', '2018-01-15', 1, '2017-09-15 00.24.20.jpg', '2017-09-15 00.24.20.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `login` varchar(20) NOT NULL,
  `pass` char(32) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `surname`, `login`, `pass`, `email`) VALUES
(1, 'Filippov', 'admin', '4a7d1ed414474e4033ac29ccb8653d9b', 'alexa@m'),
(2, 'FilippovA', 'andrei', '4a7d1ed414474e4033ac29ccb8653d9b', 'aleda@nfnd'),
(3, 'student ', 'student', '4a7d1ed414474e4033ac29ccb8653d9b', 'asd@mnd'),
(5, 'and', 'sad', 'and', 'and');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `folders`
--
ALTER TABLE `folders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `folders`
--
ALTER TABLE `folders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT для таблицы `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
