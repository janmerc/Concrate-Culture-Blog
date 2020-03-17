<?php
require "config.php";
session_start();
$title = $_POST["title"];
$datetime = (new DateTime())->format('Y-m-d H:i:s');
$content = $_POST["content"];
$loggedId = $_SESSION["userId"];

$spojeni = new PDO("mysql:dbname=" . DATABAZENAME . ";host=" . SERVER, USERNAME, PASSWORD);
$dotaz = $spojeni->prepare("INSERT INTO post(title, 'datetime', content, autorId) VALUE(?, ?, ?, ?)");
$dotaz->execute([$title,$datetime, $content, $loggedId]);

header("Location: /");