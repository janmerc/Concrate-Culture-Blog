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
    <title>Poznámkovač</title>
    <link rel="shortcut icon" href="/img/ico/MA_ICO.png" type="image/x-icon"/>
</head>
<body>
<div id="wrapper">
    <section id="navbar">
        <h1 id="concrateculture">Poznámkovač</h1>
        <div id="uzivatelskypanel">
            <ul id="mainList">
                <li><a href="prihlaseni.html">přihlášení/</a></li>
                <li><a href="registrace.html">registrace/</a></li>
                <li><a href="addpost.html">přidat poznámku/</a></li>
            </ul>
        </div>
        <hr>
        <!--
        <ul>
            <li><a href="beton.html">BETON</a></li>
            <li><a href="#subwayriders.html">SUBWAY RIDERS</a></li>
            <li><a href="telecom.html">TELECOM</a></li>
            <li><a href="">blbos</a></li>
        </ul>
        //-->
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
    echo('<a href="detail.php?id=' . $id . '"><p id="readmore">Celá Poznámka</p></a>');
    echo("</div>");
}

?>


    </div>
</body>

</html>