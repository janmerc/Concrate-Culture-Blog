<!DOCTYPE html>
<html lang="cz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/main.css" /> 
    <title>Concrate Culture</title>
</head>
<body>
<div id="wrapper">
        <section id="navbar">
            <h1><a href="index.php">Concrate Culture</a></h1>
            <hr />
            <ul>
                <li><a href="#BETON">BETON</a></li>
                <li><a href="#SUBWAY RIDERS">SUBWAY RIDERS</a></li>
                <li><a href="#TELECOM">TELECOM</a></li>
                <li><a href="#blbos">blbos</a></li>
              </ul>
        </section>


<?php

$id = $_GET["id"];
require "config.php";

$spojeni = new PDO("mysql:dbname=" . DATABAZENAME . ";host=" . SERVER, USERNAME, PASSWORD);
$dotaz = $spojeni->prepare("SELECT * FROM post WHERE id = ?");
$dotaz->execute([$id]);
$post = $dotaz->fetch();

$title = $post["title"];
$datetime = $datetime["datetime"];
$content = $post["content"];
echo('<div id="post">');
echo("<h1>$title</h1>");
echo("<p>$datetime</p>");
echo("<p>$content</p>");
echo("</div>");
?>



</body>
</html>