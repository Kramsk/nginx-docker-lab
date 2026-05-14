<?php
session_start();
require_once 'ApiClient.php';

$username = htmlspecialchars($_POST['username'] ?? '');
$birthDate = htmlspecialchars($_POST['birthDate'] ?? '');
$tariff = htmlspecialchars($_POST['tariff'] ?? '');
$visitTime = htmlspecialchars($_POST['visitTime'] ?? '');
$personalTrainer = isset($_POST['personalTrainer']) ? 'Да' : 'Нет';

$errors = [];
if (empty($username)) $errors[] = "Имя обязательно";
if (empty($birthDate)) $errors[] = "Дата рождения обязательна";

if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    header("Location: index.php");
    exit();
}

$api = new ApiClient();
$weatherData = $api->request('https://wttr.in/Moscow?format=j1');
$_SESSION['api_data'] = $weatherData['current_condition'][0] ?? null;

setcookie("last_submission", date('Y-m-d H:i:s'), time() + 3600, "/");

setcookie("last_user", $username, time() + 3600, "/");

$_SESSION['username'] = $username;
$_SESSION['birthDate'] = $birthDate;
$_SESSION['tariff'] = $tariff;
$_SESSION['visitTime'] = $visitTime;
$_SESSION['personalTrainer'] = $personalTrainer;

$line = "$username;$birthDate;$tariff;$visitTime;$personalTrainer\n";
file_put_contents("data.txt", $line, FILE_APPEND);

header("Location: index.php");
exit();