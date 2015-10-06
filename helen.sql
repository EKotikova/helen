-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 06 2015 г., 18:46
-- Версия сервера: 5.5.45
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `helen`
--

-- --------------------------------------------------------

--
-- Структура таблицы `maintexts`
--

CREATE TABLE IF NOT EXISTS `maintexts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `body` text NOT NULL,
  `url` tinytext NOT NULL,
  `lang` enum('ru','en') NOT NULL DEFAULT 'ru',
  `showhide` enum('show','hide') NOT NULL DEFAULT 'show',
  `putdate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `maintexts`
--

INSERT INTO `maintexts` (`id`, `name`, `body`, `url`, `lang`, `showhide`, `putdate`) VALUES
(1, 'Добро пожаловать на сайт!', 'Мы разрабатываем и создаем качественную и надежную программную продукцию, учитывая все ваши требования и пожелания!!!.', 'index', 'ru', 'show', '2015-09-01'),
(2, 'Контакты', 'Адресс: ул.Филимонова, д.47 А;\r\n\r\nдом.тел.: 211-87-55;\r\nмоб.тел.: +37544-771-77-75; ', 'sut', 'ru', 'show', '2015-09-19'),
(3, 'О компании', 'Данная компания создана в 2015 г. Она очень молодая, но активно развивается!', 'com', 'ru', 'show', '2015-09-19'),
(4, 'Главные новости', '\r\nSony: PlayStation VR будет стоить как новая игровая приставка\r\nВыход гарнитуры виртуальной реальности Sony PlayStation VR в следующем году станет одним из главных событий для мира видеоигр. Однако новинка может оказаться чрезмерно дорогой для многих игроков, ведь Sony планирует продавать гарнитуру по цене игровой консоли\r\nApple A9: раскрыты основные параметры процессора iPhone 6s\r\nПо традиции Apple не раскрывает параметры своего нового мобильного чипа A9, применяющегося в смартфонах iPhone 6s и 6s Plus, однако благодаря китайскому центру сертификации TENAA нам всё же удалось узнать количество содержащихся в нём ядер и их тактовую частоту', 'den', 'ru', 'show', '2015-09-19');

-- --------------------------------------------------------

--
-- Структура таблицы `tovars`
--

CREATE TABLE IF NOT EXISTS `tovars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `mame` tinytext NOT NULL,
  `body` text NOT NULL,
  `picher` tinytext NOT NULL,
  `pichersmal` tinytext NOT NULL,
  `putdate` date NOT NULL,
  `showhide` enum('show','hide') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Дамп данных таблицы `tovars`
--

INSERT INTO `tovars` (`id`, `user_id`, `mame`, `body`, `picher`, `pichersmal`, `putdate`, `showhide`) VALUES
(12, 1, 'цветок', '<p>Хризантема</p>\r\n', '1443808031.jpg', '_', '2015-10-02', 'show'),
(13, 1, 'медуза', '<p>Она плавает &nbsp;в море.</p>\r\n', '1443808065.jpg', '_', '2015-10-02', 'show'),
(16, 5, 'лава', '<p>этна</p>\r\n', '1443974648.jpg', '_', '2015-10-04', 'show'),
(20, 5, 'маяк', '', '1444140011.jpg', '_', '2015-10-04', 'show');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` tinytext NOT NULL,
  `password` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `putdate` date NOT NULL,
  `lasvisit` datetime NOT NULL,
  `bloclunbloc` enum('unblock','block','','') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `putdate`, `lasvisit`, `bloclunbloc`) VALUES
(1, 'peta', '111', '', '2015-09-23', '2015-09-23 11:22:52', 'unblock'),
(2, 'elena', '1111', 'koti@gmail.com', '0000-00-00', '0000-00-00 00:00:00', 'unblock'),
(3, 'georg', '111', 'g@mail.com', '2015-09-26', '2015-09-26 17:57:30', 'unblock'),
(4, 'настя', '34', 'nas@mail.ru', '2015-09-28', '2015-09-28 21:09:59', 'unblock'),
(5, 'Андрей', '1234', 'andre@email.ru', '2015-10-04', '2015-10-04 18:54:02', 'unblock');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
