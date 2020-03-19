<?php
require "config.php";
session_start();
if( isset($_SESSION["userId"]) );
$loggedId = $_SESSION["userId"];
$spojeni = new PDO("mysql:dbname=" . DATABAZENAME . ";host=" . SERVER, USERNAME, PASSWORD);
$dotaz = $spojeni->prepare("SELECT * FROM post WHERE autorId = ?");
$dotaz->execute([$loggedId]);
$prispevky = $dotaz->fetchAll();

?>
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
    <h1 id="concrateculture">Concrate Culture</h1>
    <div id="uzivatelskypanel">
        <ul id="mainList">
            <li><a href="prihlaseni.html">přihlášení/</a></li>
            <li><a href="registrace.html">registrace/</a></li>
            <li><a href="addpost.html">přidat poznámku/</a></li>
        </ul>
    </div>
    <hr>
    <ul>
        <li><a href="#BETON">BETON</a></li>
        <li><a href="#SUBWAY RIDERS">SUBWAY RIDERS</a></li>
        <li><a href="#TELECOM">TELECOM</a></li>
        <li><a href="#blbos">blbos</a></li>
        </ul>
    </section>
<?php 

foreach ($prispevky as $prispevek) {
    echo('<div id="post">');
    $id = $prispevek["ID"];
    $title = $prispevek["title"];
    $datetime =$prispevek["datetime"];
    $content = $prispevek["content"];

    $content = substr($content , 0, min(strlen($content), 700));

    echo('<a href="detail.php?id=' . $id . '"><h1 id="h1title">' . $title . '</h1></a>');
    echo("<p st>přidáno - $datetime</p>");
    echo("<p></p>");
    echo("<p>$content</p>");
    echo('<a href="detail.php?id=' . $id . '"><p id="readmore">čti více !</p></a>');
    echo("</div>");
}

?>


    </div>
</body>

</html>