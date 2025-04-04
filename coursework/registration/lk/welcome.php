<?php
// lk/welcome.php
session_start();

// Проверяем, авторизован ли пользователь
if (!isset($_SESSION['user'])) {
    // Если пользователь не авторизован, перенаправляем на страницу с ошибкой или логин
    header("Location: ../views/error.php"); // Или на страницу авторизации
    exit();
}

// Извлекаем логин пользователя из сессии
$email = $_SESSION['user']; // Просто используем значение строки
$login = $_SESSION['user'];

// Подключаем HTML-форму и передаём переменную $login
require_once('../views/welcome_page.php');
?>