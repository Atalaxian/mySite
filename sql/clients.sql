-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Мар 30 2020 г., 19:25
-- Версия сервера: 5.7.29-cll-lve
-- Версия PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `f62745_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `clients`
--

INSERT INTO `clients` (`id`, `name`, `password`, `email`) VALUES
(10, 'Аталиксиан', '$2y$10$icxDAuJMGtn0FNHXkCFaz.gx.l6HqoqzmdbiOyTPC8klcLFSeuzS2', 'fallout.fun@yandex.ru'),
(11, 'Другой Аталиксиан', '$2y$10$hGRKdPvLXzse/2I9YrVuaOtMkozIOvQMpwAP0Be1uS/Rmkt/H4Hda', 'agarkovsergey1999@gmail.com'),
(12, 'Третий Аталиксиан', '$2y$10$d0.GaOb1LnPaf8/eliPYpe3DxUa3V5.pXwiq7aJhYso1Rk34pumZ2', 'agarkovsergey1998@gmail.com'),
(13, 'Сергей Евгеньев', '$2y$10$qhYtUfcbTyKK0KASNg9UQ.32VQMZFoB0RHRAeHg769KMjSgY4iAJ.', 'fallout.fun1@yandex.ru');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
