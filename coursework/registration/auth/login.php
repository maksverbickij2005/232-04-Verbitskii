<?php
// auth/login.php

session_start();
require_once('../includes/db.php');

// Включим отладку на время разработки
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Функция для логирования ошибок
function logError($message) {
    $logDir = '../logs';
    $logFile = $logDir . '/error.log';

    if (!is_dir($logDir)) {
        mkdir($logDir, 0755, true);
    }

    $timestamp = date('Y-m-d H:i:s');
    $logMessage = "[$timestamp] $message\n";
    file_put_contents($logFile, $logMessage, FILE_APPEND);
}

function delay() {
    sleep(2);
}

function sendEmailNotification($email, $message) {
    $to = $email;
    $subject = "Неудачная попытка входа";
    $headers = "From: no-reply@yoursite.com\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    mail($to, $subject, $message, $headers);
}

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = trim($_POST['login']);
    $pass = trim($_POST['pass']);

    if (empty($login) || empty($pass)) {
        $errors[] = "Заполните все поля.";
        logError("Ошибка: Не все поля заполнены.");
    } else {
        if (strlen($login) < 5 || strlen($login) > 20) {
            $errors[] = "Логин должен содержать от 5 до 20 символов.";
            logError("Ошибка: Логин не соответствует требованиям длины.");
        }
        elseif (!preg_match('/^[a-zA-Z0-9]+$/', $login)) {
            $errors[] = "Логин должен содержать только латинские буквы и цифры.";
            logError("Ошибка: Логин содержит недопустимые символы.");
        }
        elseif (strlen($pass) < 8 || strlen($pass) > 30) {
            $errors[] = "Пароль должен содержать от 8 до 30 символов.";
            logError("Ошибка: Пароль не соответствует требованиям длины.");
        } else {
            delay();

            $sql = "SELECT * FROM users WHERE login = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $login);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();

                // Детальная отладка
                echo "<div style='background:#f0f0f0; padding:10px; margin:10px;'>";
                echo "<h3>Отладочная информация:</h3>";
                echo "<pre>";
                echo "Введенный пароль: " . htmlspecialchars($pass) . "\n";
                echo "Хэш из БД: " . htmlspecialchars($row['pass']) . "\n";
                echo "Длина пароля: " . strlen($pass) . " символов\n";
                echo "Длина хэша: " . strlen($row['pass']) . " символов\n";
                echo "Результат password_verify: " . (password_verify($pass, $row['pass']) ? 'true' : 'false') . "\n";
                
                // Альтернативная проверка для теста
                $testHash = password_hash($pass, PASSWORD_BCRYPT);
                echo "Новый хэш этого пароля: $testHash\n";
                echo "Сравнение с хэшем из БД: " . (password_verify($pass, $row['pass']) ? 'Совпадает' : 'Не совпадает');
                echo "</pre>";
                echo "</div>";

                // Временная принудительная проверка
                $isValid = ($pass === 'Rollins_1986') || password_verify($pass, $row['pass']);
                
                if ($isValid) {
                    $_SESSION['user_id'] = $row['id'];
                    $_SESSION['user'] = $row['login'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['role'] = $row['role'];

                    if ($_SESSION['role'] == 'admin') {
                        header("Location: ../auth/admin.php");
                        exit();
                    } else {
                        header("Location: ../lk/welcome.php");
                        exit();
                    }
                } else {
                    $errors[] = "Неверный пароль.";
                    logError("Ошибка входа. Логин: $login, Хэш: ".$row['pass']);
                }
            } else {
                $errors[] = "Пользователь не найден.";
            }
        }
    }
}

require_once('../views/login_form.php');
?>