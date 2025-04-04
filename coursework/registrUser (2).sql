-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 04 2025 г., 13:55
-- Версия сервера: 5.7.39
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `registrUser`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret_question` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secret_answer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT 'user',
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `email`, `secret_question`, `secret_answer`, `role`, `last_login`) VALUES
(54, 'admin', '$2y$10$NhTt9BXWRj7GDdlQgDqB3uPq5wjcnpAYC7NqQqFq3JZ7z8VY1JQ0O', 'verbickijmaksim2005@gmail.com', NULL, NULL, 'admin', NULL),
(71, 'qwerty123', '$2y$10$iRlC7miILEYzUEqkuoI6leFgAME2YXHOsH18kUn77R4Al.HUMyzA6', 'qwerty2005@gmail.com', '1', '$2y$10$Ziy9c4gWzXaK3m75xzOTkOLIa3TCXYXPKZitmVohLlLJnGIOsSp3i', 'user', NULL),
(72, 'maks2005', '$2y$10$FfPn9QjyQfDrRf5GqkRBx./yhKio0eFHz85bO./Lg9JJDOUjnWlTm', 'maks2005@gmail.com', '1', '$2y$10$jE7kaadOM/IOgp102tIdIuEmCi6jTu3q8SAYR0YZberGCg7fkJ8Pa', 'user', NULL),
(73, 'verbic234', '$2y$10$vbayZdK2Aop8NqxPGq30z.rWsa.goRk0f/iWaHdLNG2sXUaXmCzxC', 'verb5@gmail.com', '1', '$2y$10$bUOBNlMbsjhlQjqU55gSZegZqGNX1XSvD7GOa1s57V1MobKPLL.D2', 'user', NULL),
(74, 'verbickij222', '$2y$10$mtCJxsfJeZK/CJHnnC/2yOWkyF891b3YqySQJ.vfUIr7Oop5ztUCW', 'verbic5@gmail.com', '1', '$2y$10$sUeLkS94xggEDrlR6Bh1D.qfNbnxHkEOdphnDWLWVwo4YJgYuhnw2', 'user', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
