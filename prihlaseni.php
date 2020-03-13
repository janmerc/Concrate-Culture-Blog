<?php

session_start();

require "config.php";

$username = $_POST["name"];
$password = $_POST["password"];

$spojeni = new PDO("mysql:dbname=" . DATABAZENAME . ";host=" . SERVER, USERNAME, PASSWORD);

$dotaz = $spojeni->prepare("SELECT * FROM user WHERE `name` = ?");
$dotaz->execute([$username]);

$user = $dotaz->fetch();

if ($user === false) {
    echo("Špatné jméno");
    exit;
}

if (!password_verify($password , $user["password"])) {
    echo("Špatné heslo");
    exit;
}

$_SESSION["userId"] = $user["id"];

header("Location: /");