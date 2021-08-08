-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 05 2021 г., 16:21
-- Версия сервера: 8.0.19
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `trainingwebapplication`
--

-- --------------------------------------------------------

--
-- Структура таблицы `chatgroup`
--

CREATE TABLE `chatgroup` (
  `id_chat` int NOT NULL,
  `user_id` int NOT NULL,
  `user2_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `chatgroup`
--

INSERT INTO `chatgroup` (`id_chat`, `user_id`, `user2_id`) VALUES
(1, 32, 35),
(2, 32, 7),
(3, 33, 32),
(4, 31, 35);

-- --------------------------------------------------------

--
-- Структура таблицы `chatmessage`
--

CREATE TABLE `chatmessage` (
  `id_message` int NOT NULL,
  `chat_id` int NOT NULL,
  `id_userSend` int NOT NULL,
  `content` text NOT NULL,
  `data` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `chatmessage`
--

INSERT INTO `chatmessage` (`id_message`, `chat_id`, `id_userSend`, `content`, `data`) VALUES
(1, 1, 32, 'Привет Билли', '13'),
(2, 2, 32, 'Николаю', '13'),
(3, 2, 7, 'Привет', '13'),
(4, 3, 33, 'админское приветствие', '13'),
(5, 4, 31, 'Привет', '13'),
(6, 4, 31, 'Привет', '13'),
(7, 4, 31, 'Как дела', '13'),
(8, 3, 32, 'Привет админу', '13');

-- --------------------------------------------------------

--
-- Структура таблицы `courses`
--

CREATE TABLE `courses` (
  `id` int NOT NULL,
  `name` varchar(30) NOT NULL,
  `data` varchar(255) NOT NULL,
  `opic` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `test` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `courses`
--

INSERT INTO `courses` (`id`, `name`, `data`, `opic`, `photo`, `test`) VALUES
(1, 'Основы HTML', '1622293213', 'Курс об основах HTML, методологии, основы создании веб страниц, вёрстка', 'HTML.jpg', 1),
(7, 'HTML теги', '1622293273', 'Основные теги', 'HTML.jpg', 1),
(12, 'HTML Элементы', '1622406750', '', 'HTML.jpg', 1),
(13, 'HTML Атрибуты', '1622406750', '', 'HTML.jpg', 1),
(14, 'HTML Форматирование текста', '1622406750', '', 'HTML.jpg', 1),
(15, 'HTML Фразовые теги', '1622406750', '', 'HTML.jpg', 1),
(16, 'CSS Введение', '1622416073', '', 'CSS.jpg', 1),
(17, 'CSS Единицы измерения', '1622416118', '', 'CSS.jpg', 1),
(18, 'CSS Подключение', '1622416123', '', 'CSS.jpg', 1),
(19, 'CSS Селекторы', '1622416131', '', 'CSS.jpg', 1),
(21, 'Модальное окно на HTML и CSS', '1622852153', 'Несложное модальное окно на примере данного сайта', 'reg.jpg', 0),
(22, 'Блок личного профиля для сайта', '1622853308', '', 'profile.jpg', 0),
(23, 'Прикольный эффект', '1625240891', '', 'DL.jpg', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `data` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `opic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `name`, `data`, `photo`, `content`, `opic`) VALUES
(1, '100 летие со дня рождения Андрея Дмитриевича Сахарова', '1622389830', 'cb6a96529fe0ca88e6eb43f0d61a4c84979.jpg', 'Гениальный фотограф смог запечатлить злодеяния этого безумца, но похоже был всхвачен в плен', NULL),
(2, 'Герои Даманских событий Курганской области', '1622389830', '3ab3e8a1eb9dbfb97d37b9a654d899ad219.jpg', 'Оказывается всё это не правда и террористов не существует это всё лож', NULL),
(3, 'Тренировочная эвакуация', '', '0fa652ee0559b9866c356b5d6162b98b588.jpg', '', NULL),
(4, 'Международный день семьи', '', 'et7WDr2ndy4.jpg', '', NULL),
(5, '«Духовно нравственный смысл Великой Победы»', '1622406750', 'vGacj0IaOoA.jpg', '', NULL),
(6, '800 летие князя Александра Невского', '1622406750', 'gR_7HY3n2Xc.jpg', '', NULL),
(7, 'БУЛЛИНГ ИЛИ ТРАВЛЯ СРЕДИ СВЕРСТНИКОВ', '1622406750', '226831dd1b2ec54e5dee581b9e2ed24c943.jpg', '', NULL),
(8, 'Диктант Победы 2021', '1622406750', 'JUEt901A-5E.jpg', '', NULL),
(9, 'Всероссийская акция «Георгиевская ленточка»', '1622406750', '6a95ae89750de27e438f41daf964501a65.jpg', '', NULL),
(10, 'Книга путь к звездам', '1622406750', 'Rgxotaph1Ww.jpg', '', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `resulttest`
--

CREATE TABLE `resulttest` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `id_test` int NOT NULL,
  `result` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `resulttest`
--

INSERT INTO `resulttest` (`id`, `id_user`, `id_test`, `result`) VALUES
(66, 32, 18, 1),
(67, 32, 12, 1),
(68, 32, 16, 1),
(70, 33, 1, 1),
(74, 32, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `testing`
--

CREATE TABLE `testing` (
  `id` int NOT NULL,
  `id_course` int NOT NULL,
  `test` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `testing`
--

INSERT INTO `testing` (`id`, `id_course`, `test`) VALUES
(2, 7, 1),
(3, 1, 1),
(4, 13, 1),
(5, 14, 1),
(6, 15, 1),
(7, 12, 1),
(8, 16, 1),
(9, 17, 1),
(10, 18, 0),
(11, 19, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(16) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(16) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `surname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `opic` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `groups` int UNSIGNED DEFAULT NULL,
  `datereg` varchar(191) DEFAULT NULL,
  `ip` varchar(191) DEFAULT NULL,
  `avatars` int UNSIGNED DEFAULT NULL,
  `activation` varchar(191) DEFAULT NULL,
  `buildmy` int UNSIGNED DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `activing` varchar(255) DEFAULT NULL,
  `online` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `name`, `surname`, `opic`, `city`, `groups`, `datereg`, `ip`, `avatars`, `activation`, `buildmy`, `email`, `activing`, `online`) VALUES
(6, 'User1', '$2y$10$blLyh6nSfp5IEgEZfm4Vh.uT92y4GTTTlMt/Vpfmc0ZuPqKaHb97K', 'User1', NULL, NULL, NULL, 6, '2021-05-31, 19:23:00', '127.0.0.1', 1, '0', 0, 'cdrffwffsss47@gmail.com', 'Дизайнер', 0),
(7, 'Николай', '$2y$10$Nq2xVXMyMVgy/qSh5rXZ/eGqE7Im4C85BJt7oQ1f/mRCs5hIu0KKW', 'asd', NULL, NULL, NULL, 5, '2021-05-31, 19:24:11', '127.0.0.1', 13, '0', 0, 'asd@mail.ru', 'Верстальщик', 0),
(8, 'Валентин', '$2y$10$.rXRK1IAAzXAdi80AY6aqe0k5122K.ukVekCsjLNW9CHOqpn6YHyC', 'student', NULL, NULL, NULL, 5, '2021-05-31, 19:25:20', '127.0.0.1', 7, '0', 0, 'cdrffwffsss47@gmail.com', 'Программист', 0),
(31, 'Танзиля', '$2y$10$/WwgsPxf3MpxclgeZ96UlOfhEHY6mJOV9z6st9C85KXPKistY.5ji', 'Танзиля', NULL, NULL, NULL, 6, '2021-06-16, 11:51:49', '127.0.0.1', 4, NULL, 0, 'rudiktr891105@gmail.com', 'бухгалтер', NULL),
(32, 'Nova', '$2y$10$wEFPbNaE3en0nk2q.j/EBeko9w01szF8JW67TxvaW4Wd/uWNHuUje', 'Вадим', 'Галимов', 'гыы', NULL, 1, '2021-06-16, 11:54:01', '127.0.0.1', 11, NULL, 0, 'black2016white@mail.ru', 'Web-developer', NULL),
(33, 'admin', '$2y$10$pB8P/KgnFXo6J6WjM19fS.r7HZvLdRqJqF2yxHRFfc8siBlowpi7G', 'тип', 'главный', NULL, NULL, 6, '2021-06-23, 02:16:03', '127.0.0.1', 6, NULL, 0, 'black2016white@mail.ru', 'Администратор', NULL),
(34, '123', '$2y$10$GUSBaRjUHAHiHqdKl6uDAOwrnTQvPMHGCUo.THn623q3jSOEBq3W2', '123', NULL, NULL, NULL, 6, '2021-06-28, 01:22:24', '127.0.0.1', 4, NULL, 0, 'asd@mail.ru', '123', NULL),
(35, 'Billy Herrington', '$2y$10$D4g0JUzKN5MFYv4.du7Zqe5DxOh.J/HQdv8GpoxpipCNwMs/55QIS', 'Billy Herrington', NULL, NULL, NULL, 6, '2021-06-30, 22:46:20', '127.0.0.1', 15, NULL, 0, 'BillyHerrington@mail.ru', 'Master', NULL),
(43, 'tester', '$2y$10$S9cjS7bhwYpcvBL4rnpzF.WXwKh7/AhX6Q5XRwqxsHb2vdcSnftRC', 'Владимир', 'Владимирович', NULL, 'Челяба', 6, '2021-07-02, 22:55:42', '127.0.0.1', 1, NULL, 0, 'asd@mail.ru', 'тестер', NULL),
(44, 'clown', '$2y$10$KHJldCSCBq6LHLEpjy9.ru8qFC3xAsOA6sSrNxR9AqiYGF2U8SlFG', 'dead', 'inside', NULL, 'Челяба', 6, '2021-07-02, 23:11:16', '127.0.0.1', 13, NULL, 0, 'zxc@mail.ru', 'фыв', NULL),
(45, '........', '$2y$10$qQEyXfcXGxJd/hLjiTUicuikHmUulKg7saQCEkLCj.vYS8JgcmKja', '.......', '...........', NULL, '.................', 6, '2021-07-04, 19:33:43', '127.0.0.1', 0, NULL, 0, 'tg00@gmail.com', '...............', NULL),
(46, '......', '$2y$10$xgT6iDAM4Ye2C0YTsrvUGeB7kx25RzDkPHIOoU2H5qqMTZ8dwWZUW', '......', '......', NULL, '.................', 6, '2021-07-04, 19:36:31', '127.0.0.1', 8, NULL, 0, 'tg00@gmail.com', '...............', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `chatgroup`
--
ALTER TABLE `chatgroup`
  ADD PRIMARY KEY (`id_chat`);

--
-- Индексы таблицы `chatmessage`
--
ALTER TABLE `chatmessage`
  ADD PRIMARY KEY (`id_message`),
  ADD KEY `chat_id` (`chat_id`),
  ADD KEY `chatmessage_ibfk_2` (`id_userSend`);

--
-- Индексы таблицы `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `resulttest`
--
ALTER TABLE `resulttest`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `testing`
--
ALTER TABLE `testing`
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
-- AUTO_INCREMENT для таблицы `chatgroup`
--
ALTER TABLE `chatgroup`
  MODIFY `id_chat` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `chatmessage`
--
ALTER TABLE `chatmessage`
  MODIFY `id_message` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `resulttest`
--
ALTER TABLE `resulttest`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT для таблицы `testing`
--
ALTER TABLE `testing`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `chatmessage`
--
ALTER TABLE `chatmessage`
  ADD CONSTRAINT `chatmessage_ibfk_1` FOREIGN KEY (`chat_id`) REFERENCES `chatgroup` (`id_chat`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `chatmessage_ibfk_2` FOREIGN KEY (`id_userSend`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
