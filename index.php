<?php
require "config.php";
session_start();
$loggedId = $_SESSION["userId"];
$spojeni = new PDO("mysql:dbname=" . DATABAZENAME . ";host=" . SERVER, USERNAME, PASSWORD);
$dotaz = $spojeni->prepare("SELECT * FROM post WHERE autorId = ?");
$dotaz->execute([$loggedId]);
$prispevky = $dotaz->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="wrapper">
        <section id="navbar">
            <h1>Concrate Culture</h1>
            <hr />
            <ul>
                <li><a href="#home">BETON</a></li>
                <li><a href="#news">SUBWAY RIDERS</a></li>
                <li><a href="#contact">TELECOM</a></li>
                <li><a href="#about">blbos</a></li>
              </ul>
        </section>
<?php 

foreach ($prispevky as $prispevek) {
    echo('<div class="post">');
    $id = $prispevek["ID"];
    $title = $prispevek["title"];
    $content = $prispevek["content"];



?>


    </div>
</body>
</html>