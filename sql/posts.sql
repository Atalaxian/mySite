-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Мар 30 2020 г., 19:24
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
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `post_name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `post_description` varchar(500) NOT NULL,
  `date_add` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`post_id`, `post_name`, `user_name`, `post_description`, `date_add`) VALUES
(16, 'БД №1', 'Аталиксиан', 'Лабораторная №1', '2020-03-30 16:13:34'),
(17, 'БД №2', 'Аталиксиан', 'Лабораторная №2', '2020-03-30 16:15:15'),
(18, 'БД (экзамен)', 'Аталиксиан', 'Вопросы', '2020-03-30 16:15:52'),
(19, 'Основа Теории Управления', 'Аталиксиан', 'Лабораторная №1', '2020-03-30 16:16:39'),
(20, 'Основа Теории Управления', 'Другой Аталиксиан', 'Лабораторная №2', '2020-03-30 16:18:26'),
(21, 'Основа Теории Управления', 'Другой Аталиксиан', 'Лабораторная №3', '2020-03-30 16:18:44'),
(22, 'Основа Теории Управления', 'Другой Аталиксиан', 'Лабораторная №4', '2020-03-30 16:19:00'),
(23, 'Проектирование на JAVA', 'Третий Аталиксиан', 'Лабораторная №1', '2020-03-30 16:20:35'),
(24, 'Проектирование на JAVA', 'Третий Аталиксиан', 'Лабораторная №2', '2020-03-30 16:20:58');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD UNIQUE KEY `post_id` (`post_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
