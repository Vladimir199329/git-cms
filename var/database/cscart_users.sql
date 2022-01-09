-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Янв 07 2022 г., 16:00
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
-- Дамп данных таблицы `cscart_users`
--

INSERT INTO `cscart_users` (`user_id`, `status`, `user_type`, `user_login`, `referer`, `is_root`, `company_id`, `last_login`, `last_activity`, `timestamp`, `password`, `salt`, `firstname`, `lastname`, `company`, `email`, `phone`, `fax`, `url`, `tax_exempt`, `lang_code`, `birthday`, `purchase_timestamp_from`, `purchase_timestamp_to`, `responsible_email`, `password_change_timestamp`, `api_key`, `helpdesk_user_id`, `janrain_identifier`) VALUES
(15, 'A', 'C', 'user_15', '', 'N', 1, 1641465444, 1641473391, 1641374104, '$2y$10$dTkRxLyAvL.TEEgIVhfSr.hyTVYOrVk8mgGaDjUNpnuh/oo7tPwLq', '', 'Vladimir', 'Pupkin', '', 'test@mail.com', '+7(999)999-99-99', '', '', 'N', 'ru', 0, 0, 0, '', 1641374104, '', 0, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
