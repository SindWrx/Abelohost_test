-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 10 2019 г., 05:19
-- Версия сервера: 5.6.38
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
-- База данных: `abelohost`
--

-- --------------------------------------------------------

--
-- Структура таблицы `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `url` text CHARACTER SET utf8 NOT NULL,
  `short_key` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `links`
--

INSERT INTO `links` (`id`, `url`, `short_key`) VALUES
(44, 'https://www.draw.io/', 'RUNM936'),
(45, 'https://www.youtube.com/watch?v=2oTFISdefXg', '5XNM936'),
(46, 'http://127.0.0.1/openserver/phpmyadmin/sql.php?server=1&db=abelohost&table=links&pos=0&token=ef7affba2baaffaf596cb2c2a3b2882b', 'WWMM936'),
(47, 'http://127.0.0.1/openserver/phpmyadmin/index.php?db=abelohost&table=links&target=sql.php&token=ea20b325b671215c9c23bbae9bd5a5d5', 'UU2M936'),
(48, 'https://www.php.net/manual/ru/pdostatement.fetchall.php', '65R1936'),
(49, 'asd', 'LCP1936'),
(50, 'http://abelohost/', 'FBP1936'),
(51, 'http://abelohost/?logout=true', 'DPA1936'),
(52, 'https://www.bestagencies.com/tools/filter-effects-css-generator/', 'R4D1936'),
(54, 'http://abelohost/index.php', '27D1936'),
(55, 'https://habr.com/ru/post/212077/', 'X0D1936'),
(56, 'https://github.com/SindWrx/Abelohost_test', 'AHF1936'),
(57, 'asdasdasdasd', '3EG1936');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nick` varchar(16) CHARACTER SET utf8 NOT NULL,
  `pwd` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `nick`, `pwd`) VALUES
(1, 'admin', '123');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nick` (`nick`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
