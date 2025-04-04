<?php
session_start();

// Проверяем авторизацию и роль
if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin') {
    header("Location: ../auth/login.php");
    exit();
}

// Подключаем HTML-форму и передаём переменную $login
require_once('../views/admin_panel.php');
?>
