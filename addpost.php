<?php
require "config.php";
session_start();
$title = $_POST["title"];
$content = $_POST["content"];
$loggedId = $_SESSION["userId"];

$spojeni = new PDO("mysql:dbname=" . DATABAZENAME . ";host=" . SERVER, USERNAME, PASSWORD);
$dotaz = $spojeni->prepare("INSERT INTO post(title, content, autorId) VALUE(?, ?, ?)");
$dotaz->execute([$title, $content, $loggedId]);

