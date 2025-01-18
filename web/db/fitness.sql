-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: dao.mysql.ukraine.com.ua:3306
-- Час створення: Січ 18 2025 р., 05:52
-- Версія сервера: 5.7.44-51-log
-- Версія PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `dao_fitness`
--

-- --------------------------------------------------------

--
-- Структура таблиці `fitness`
--

CREATE TABLE `fitness` (
  `id` bigint(1) NOT NULL,
  `user` bigint(1) NOT NULL DEFAULT '0',
  `data` varchar(250) NOT NULL,
  `time` int(1) NOT NULL DEFAULT '0',
  `value` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Індекси таблиці `fitness`
--
ALTER TABLE `fitness`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для таблиці `fitness`
--
ALTER TABLE `fitness`
  MODIFY `id` bigint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
