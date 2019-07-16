--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 11 2019 г., 00:50
-- Версия сервера: 5.7.16-log

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `server`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `SKU` varchar(255) NOT NULL COMMENT '​(unique for each product)',
  `name` varchar(255) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `type_id` int(11) NOT NULL DEFAULT '0',
  `size` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `width` int(11) DEFAULT NULL,
  `length` int(11) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `SKU`, `name`, `price`, `type_id`, `size`, `height`, `width`, `length`, `weight`, `status`) VALUES
(1, 'asd1', 'asd1', 123, 0, 1, NULL, NULL, NULL, NULL, 1),
(2, 'asd2', 'asd2', 123, 0, 1, NULL, NULL, NULL, NULL, 1),
(3, 'test3', '3', 3, 0, 1, 2, 3, 4, 5, 1),
(4, 'test4', 'test4', 444, 0, 44, NULL, NULL, NULL, NULL, 1),
(5, 'test5', 'test5', 55, 1, NULL, 555, 5555, 55555, NULL, 1),
(6, 'test 6', 'test 6', 56, 2, NULL, NULL, NULL, NULL, 654, 1);

-- --------------------------------------------------------

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `SKU` (`SKU`);


--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
