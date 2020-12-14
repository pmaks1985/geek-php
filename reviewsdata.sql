-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 14 2020 г., 12:18
-- Версия сервера: 5.6.47
-- Версия PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `reviewsdata`
--

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_review` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_review` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `text_review`, `date_review`) VALUES
(1, 'Петр Семенов', 'Такой прямо хороший сайт, никогда такого не видел!', '2020-12-13 09:02:44'),
(4, 'Иван Михайлов', 'Великолепный сайт! Очень здорово сделан.', '2020-12-13 09:34:54'),
(5, 'Максим Прохоров ', 'Так себе конечно сайтик', '2020-12-13 09:48:29'),
(6, 'Прохорова Вероника', 'ужасный сайт', '2020-12-13 09:57:25'),
(7, 'Вера', 'Администратор молодец, Прекрасный сайт, Гениальный\r\n', '2020-12-13 10:00:29'),
(8, 'Тест', 'Тест отзыв', '2020-12-13 10:04:04'),
(9, 'Тимофей', 'я не умею писать, за меня пишет папа моим пальцем', '2020-12-13 10:12:29'),
(11, 'wigehwiuvb', 'aegawgawegbearb', '2020-12-14 06:41:51'),
(12, 'Tom Bom', 'Some else text', '2020-12-14 06:44:10');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
