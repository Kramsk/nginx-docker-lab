<?php 
session_start(); 
require_once 'UserInfo.php';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Главная — Регистрация в спортзале</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Панель управления</h1>

    <div id="gymForm">
        <!-- Блок из Шага 3: Информация о пользователе через класс UserInfo -->
        <div style="background: #f3f4f6; padding: 10px; border-radius: 8px; margin-bottom: 20px; font-size: 0.85em;">
            <strong>Техническая информация:</strong><br>
            <?php
            $info = UserInfo::getInfo();
            foreach ($info as $key => $val) {
                echo htmlspecialchars($key) . ': ' . htmlspecialchars($val) . '<br>';
            }
            ?>
        </div>

        <?php if (isset($_SESSION['errors'])): ?>
            <div style="color: #b91c1c; background-color: #fef2f2; border: 1px solid #fecaca; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                <strong>Ошибки:</strong>
                <ul>
                    <?php foreach ($_SESSION['errors'] as $error): ?>
                        <li><?= $error ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php unset($_SESSION['errors']); ?>
        <?php endif; ?>

        <!-- Блок из Шага 2: Данные из API -->
        <?php if (isset($_SESSION['api_data'])): ?>
            <div style="border: 1px solid #3b82f6; padding: 15px; border-radius: 8px; margin-bottom: 20px; background-color: #eff6ff;">
                <h3>☀️ Погода для тренировки:</h3>
                <?php 
                // Выводим основные параметры красиво, либо весь массив через print_r
                if (isset($_SESSION['api_data']['temp_C'])) {
                    echo "Температура: " . $_SESSION['api_data']['temp_C'] . "°C<br>";
                    echo "Ощущается как: " . $_SESSION['api_data']['FeelsLikeC'] . "°C<br>";
                } else {
                    echo "<pre>" . print_r($_SESSION['api_data'], true) . "</pre>";
                }
                ?>
            </div>
        <?php endif; ?>

        <?php if (isset($_COOKIE['last_user'])): ?>
            <div style="background-color: #f0f9ff; border: 1px solid #bae6fd; padding: 10px; border-radius: 8px; margin-bottom: 20px; font-size: 0.9em;">
                ℹ️ Рады видеть вас снова! Последний зарегистрированный вами клиент: <strong><?= $_COOKIE['last_user'] ?></strong>
            </div>
        <?php endif; ?>

        <?php if (isset($_SESSION['username'])): ?>
            <h3>✅ Текущая сессия:</h3>
            <ul>
                <li>ФИО: <?= $_SESSION['username'] ?></li>
                <li>Тариф: <?= $_SESSION['tariff'] ?></li>
            </ul>
        <?php else: ?>
            <p>В этой сессии данных пока нет.</p>
        <?php endif; ?>

        <hr>
        <nav>
            <a href="form.html">Заполнить форму</a> |
            <a href="view.php">Посмотреть все записи</a>
        </nav>
    </div>
</body>

</html>