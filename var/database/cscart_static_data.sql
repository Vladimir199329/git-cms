-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Янв 07 2022 г., 16:03
-- Версия сервера: 10.5.13-MariaDB-0ubuntu0.21.10.1
-- Версия PHP: 7.1.33-44+ubuntu20.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cs_cartul`
--

--
-- Дамп данных таблицы `cscart_static_data`
--

INSERT INTO `cscart_static_data` (`param_id`, `param`, `param_2`, `param_3`, `param_4`, `param_5`, `param_6`, `class`, `section`, `status`, `position`, `parent_id`, `id_path`, `localization`, `company_id`) VALUES
(191, 'departments.departments_views', '', '', '', '2', 'N', 'ty-menu-item__promotions', 'A', 'A', 130, 0, '191', '', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
