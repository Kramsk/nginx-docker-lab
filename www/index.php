<?php session_start(); ?>
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
        <?php if (isset($_SESSION['username'])): ?>
            <h3>✅ Данные вашей сессии:</h3>
            <p>Добро пожаловать, <b><?= $_SESSION['username'] ?></b>!</p>
            <ul>
                <li>Дата рождения: <?= $_SESSION['birthDate'] ?></li>
                <li>Выбранный тариф: <?= $_SESSION['tariff'] ?></li>
                <li>Время посещения: <?= $_SESSION['visitTime'] ?></li>
                <li>Нужен тренер: <?= $_SESSION['personalTrainer'] ?></li>
            </ul>
        <?php else: ?>
            <p>Вы еще не заполнили анкету.</p>
        <?php endif; ?>

        <hr>
        
        <nav>
            <a href="form.html">Заполнить форму</a> | 
            <a href="view.php">Посмотреть все данные</a>
        </nav>
    </div>
</body>
</html>