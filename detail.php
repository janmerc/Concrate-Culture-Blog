<!DOCTYPE html>
<html lang="cz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concrate Culture</title>
</head>
<body>


<?php

$id = $_GET["id"];
require "config.php";

$spojeni = new PDO("mysql:dbname=" . DATABAZENAME . ";host=" . SERVER, USERNAME, PASSWORD);
$dotaz = $spojeni->prepare("SELECT * FROM post WHERE id = ?");
$dotaz->execute([$id]);
$post = $dotaz->fetch();

$title = $post["title"];
$content = $post["content"];

echo("<h1>$title</h1>");
echo("<p>$content</p>");
?>



</body>
</html>