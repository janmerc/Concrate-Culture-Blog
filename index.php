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
            <h1>Concrate Culture</h1>
            <hr />
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
    $content = $prispevek["content"];

    $content = substr($content , 0, min(strlen($content), 50));

    echo('<a href="detail.php?id=' . $id . '"><h1 id="h1title">' . $title . '</h1></a>');
    echo("<p>$content</p>");
    echo("</div>");
}

?>


    </div>
    <footer>
        <p>&copy; 2015 </p>
    </footer>
</body>

</html>