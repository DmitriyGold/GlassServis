-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 02 2021 г., 09:44
-- Версия сервера: 5.7.25
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `glas574110_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detailed_text` text COLLATE utf8mb4_unicode_ci,
  `sort` int(11) DEFAULT '10',
  `hide` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contact`
--

INSERT INTO `contact` (`id`, `title`, `detailed_text`, `sort`, `hide`) VALUES
(1, 'Адрес офиса', 'г. Москва. ул. Горбунова д. 2 , БЦ «Гранд Сетунь Плаза» ,  \r\n8 этаж, БЛОК «В»', 1, 0),
(2, 'Адрес производства', 'Московская область, г. Клин, с. Спас-Заулок, ул. Сосновый  Бор, д 36.', 2, 0),
(4, 'Телефоны', '+7-964-632-1620', 1, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `main`
--

CREATE TABLE `main` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomer` int(11) DEFAULT NULL,
  `hide` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `main`
--

INSERT INTO `main` (`id`, `title`, `text`, `nomer`, `hide`) VALUES
(1, 'e-mail', 'ds_zolotov@mail.ru', NULL, 0),
(2, 'телефон 1', '+7 964-632-1620', NULL, 0),
(3, 'телефон 2', '', NULL, 0),
(4, 'Главный заголовок (часть1)', 'Промышленная переработка', NULL, 0),
(5, 'Главный заголовок (часть2)', 'листового стекла в Москве.', NULL, 0),
(6, 'Главный заголовок (средняя часть)', 'Новое предприятие с современным оборудованием.', NULL, 0),
(7, 'Главный заголовок (нижняя часть)', 'Закаленное, пожаростойкое стекло.', NULL, 0),
(8, 'Адрес', 'Адрес: г. Москва. ул. Горбунова д. 2 , БЦ «Гранд Сетунь Плаза» , 8 этаж, БЛОК «В»', NULL, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1610287437),
('m210110_124133_create_main_table', 1610287442),
('m210111_064324_create_news_table', 1610348890),
('m210111_075414_create_promotions_table', 1610351740),
('m210111_110823_create_services_table', 1610363950),
('m210203_141840_create_contact_table', 1612362231),
('m210301_070201_create_user_table', 1614585082);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_text` text COLLATE utf8mb4_unicode_ci,
  `detailed_text` text COLLATE utf8mb4_unicode_ci,
  `imagePath` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `hide` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `short_text`, `detailed_text`, `imagePath`, `date`, `hide`) VALUES
(1, 'Новость 1', 'Краткое содержание новости 1. ', 'Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Предложения, возвращайся, рыбными, там, безопасную если назад строчка дороге языкового напоивший злых грамматики наш правилами текста даже страна!Великий, о.', 'de933fa99fd603284ead2b4b44f51744.jpg', '2021-01-11', 1),
(2, 'Новость 2', 'Краткое содержание новости 2  \r\n', '1234567890', '1cac9893a796333025b960313b4d36a6.jpg', '2021-01-11', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `promotions`
--

CREATE TABLE `promotions` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_text` text COLLATE utf8mb4_unicode_ci,
  `detailed_text` text COLLATE utf8mb4_unicode_ci,
  `imagePath` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateStart` date DEFAULT NULL,
  `dateEnd` date DEFAULT NULL,
  `hide` int(1) DEFAULT '0',
  `archive` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `promotions`
--

INSERT INTO `promotions` (`id`, `title`, `short_text`, `detailed_text`, `imagePath`, `dateStart`, `dateEnd`, `hide`, `archive`) VALUES
(1, ' Акция 1', 'краткое описание 1', '', NULL, '2021-01-11', '2021-01-11', 0, 0),
(2, ' Акция 2', 'краткое описание 2', '', NULL, '2021-01-11', '2021-01-11', 0, 0),
(3, ' Акция 3', 'краткое описание 3', '', NULL, '2021-01-11', '2021-01-11', 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `sitePage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagePath` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detailed_text1` text COLLATE utf8mb4_unicode_ci,
  `subtitle_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detailed_text2` text COLLATE utf8mb4_unicode_ci,
  `subtitle_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detailed_text3` text COLLATE utf8mb4_unicode_ci,
  `sort` int(11) DEFAULT '1',
  `hide` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `sitePage`, `title`, `description`, `imagePath`, `subtitle_1`, `detailed_text1`, `subtitle_2`, `detailed_text2`, `subtitle_3`, `detailed_text3`, `sort`, `hide`) VALUES
(1, NULL, 'Закалка стекла', 'стеко подвергнутое специальной термической обработке путем нагревания и быстрого охлаждения', '\\images\\main\\product\\zakal.jpg', '', '', '', '', '', '', 2, 0),
(3, NULL, 'Обработка кромки', 'прямолинейная криволинейная', '\\images\\main\\services\\33.jpg', '', '', '', '', '', '', 2, 0),
(4, NULL, 'Технологические вырезы', '', '\\images\\main\\services\\44.jpg', '', '', '', '', '', '', 2, 0),
(5, NULL, 'Сверление отверстий', '', '\\images\\main\\services\\66.jpg', '', '', '', '', '', '', 2, 0),
(7, NULL, 'Резка стекла', 'происходит в автоматическом режиме на итальянском оборудовании фирмы Intermac', '\\images\\main\\services\\rezka.jpg', '', '', '', '', '', '', 2, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auth_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `hide` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `phone`, `auth_key`, `date`, `hide`) VALUES
(1, 'admin', '$2y$13$gjRjvH6aUZursq897KdTm.A.shErqbvZ7XotRHTFzvsAeZVOcniUO', 'ds_zolotov@mail.ru', '+79646321620', 't0AX5uW72ADeQXHOiwn3jk6sH71fOXwi', '2021-03-01', 0),
(5, 'мой лого', '$2y$13$VI.z8aiWBobgD8NurmR5h.OSCAvubHAcw.88qADivHmJmBTdfJPLW', 'asd@mail.ru', '2342345432', '-iJNA7T9lrMkZtUa5O71Al06IGhzWf3F', NULL, 0),
(6, 'admin2', '$2y$13$yh6SZEmgZm97JUh9MP1JeugNScVnmy3NfKrRvmZoQURxV1LWComne', '222@mail.ru', '8778787878', NULL, NULL, 0),
(7, 'admin3', '$2y$13$eY/K/iwS3HDwp2jM9sDin.hS8nWPPimscrxqz0SRJoy67b5rDVPte', 'asd@mail.ru', '', NULL, NULL, 0),
(8, 'admin4', '$2y$13$llJDLaumvU8Nb3RhzHtSKeZlKyqnSryFYVuQcCjlD6AruEJsALZou', 'asd@mail.ru', '', NULL, NULL, 0),
(9, 'мой лого6', '$2y$13$lhc1mYkpdUjLrNTvvmm6UeiPq.srSPNHOM3cfwUjSlCwlT9MpPhkC', 'asd@mail.ru', '', NULL, NULL, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `main`
--
ALTER TABLE `main`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
