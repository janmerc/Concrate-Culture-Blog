<?php
require "config.php";
session_start();
$title = $_POST["title"];
$datetime = $_POST["datetime"];
$content = $_POST["content"];
$loggedId = $_SESSION["userId"];

$spojeni = new PDO("mysql:dbname=" . DATABAZENAME . ";host=" . SERVER, USERNAME, PASSWORD);
$dotaz = $spojeni->prepare("INSERT INTO post(title, 'datetime', content, autorId) VALUE(?, ?, ?, ?)");
$dotaz->execute([$title,$datetime, $content, $loggedId]);

header("Location: /");