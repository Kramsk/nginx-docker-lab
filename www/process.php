<?php
session_start();

$username = htmlspecialchars($_POST['username'] ?? '');
$birthDate = htmlspecialchars($_POST['birthDate'] ?? '');
$tariff = htmlspecialchars($_POST['tariff'] ?? '');
$visitTime = htmlspecialchars($_POST['visitTime'] ?? '');
$personalTrainer = isset($_POST['personalTrainer']) ? 'Да' : 'Нет';

$_SESSION['username'] = $username;
$_SESSION['birthDate'] = $birthDate;
$_SESSION['tariff'] = $tariff;
$_SESSION['visitTime'] = $visitTime;
$_SESSION['personalTrainer'] = $personalTrainer;

header("Location: index.php");
exit();