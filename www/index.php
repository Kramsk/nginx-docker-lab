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

        <?php if (isset($_SESSION['username'])): ?>
            <h3>✅ Последняя регистрация в этой сессии:</h3>
            <ul>
                <li><strong>ФИО:</strong> <?= $_SESSION['username'] ?></li>
                <li><strong>Дата рождения:</strong> <?= $_SESSION['birthDate'] ?></li>
                <li><strong>Тариф:</strong> <?= $_SESSION['tariff'] ?></li>
                <li><strong>Время посещения:</strong> <?= $_SESSION['visitTime'] ?></li>
                <li><strong>Тренер:</strong> <?= $_SESSION['personalTrainer'] ?></li>
            </ul>
        <?php else: ?>
            <p>Данных в текущей сессии пока нет. Пожалуйста, заполните форму.</p>
        <?php endif; ?>

        <hr style="margin: 20px 0;">
        
        <nav>
            <a href="form.html">Заполнить форму</a> | 
            <a href="view.php">Посмотреть все записи</a>
        </nav>
    </div>
</body>
</html>