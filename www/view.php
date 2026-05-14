<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Все регистрации — Спортзал</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Список всех клиентов</h1>

    <div id="gymForm" style="max-width: 600px;">
        <ul>
            <?php
            if (file_exists("data.txt")) {
                $lines = file("data.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                
                foreach ($lines as $line) {
                    $elements = explode(";", $line);
                    
                    if (count($elements) >= 5) {
                        $name = $elements[0];
                        $date = $elements[1];
                        $tariff = $elements[2];
                        $time = $elements[3];
                        $trainer = $elements[4];

                        echo "<li>
                                <b>$name</b> ($date) — 
                                <i>Тариф: $tariff, Время: $time, Тренер: $trainer</i>
                              </li><br>";
                    }
                }
            } else {
                echo "<li>Данных пока нет</li>";
            }
            ?>
        </ul>

        <hr>
        <a href="index.php">На главную</a> | 
        <a href="form.html">Добавить еще</a>
    </div>
</body>
</html>