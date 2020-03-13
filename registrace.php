<?php

require "config.php";

$username = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$passwordZnova = $_POST["passwordZnova"];

if ($password !== $passwordZnova)  {
    echo("Hesla se neshodují.");
    exit;
}

$passwordHash = password_hash($password, PASSWORD_DEFAULT);

$spojeni = new PDO("mysql:dbname=" . DATABAZENAME . ";host=" . SERVER, USERNAME, PASSWORD);
$dotaz = $spojeni->prepare("INSERT INTO user(`name`, email, `password`) VALUES(?, ?, ?)");
$dotaz->execute([$username, $email, $passwordHash]);
