<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Projet SPOTIFY</title>
        <link rel="stylesheet" href="css/output.css">
        <link rel="stylesheet" href="css/menu.css"> 
    </head>
    <body>
        <?php include "prefabs/menu.php"; ?> 
        <?php
            $bdd = new PDO("mysql:host=localhost;dbname=decaillot-gabin_spotify;charset=utf8", "root", "");
        ?>
        <h1>Spotify  Fiche 2</h1>
        
        <h2>Requête 5 : Donner le nombre d'artistes différents dans la base songs.</h2>
        <?php
            $reponse = $bdd->query("SELECT count(DISTINCT artist) FROM songs;");

            while ($donnees = $reponse->fetch()){
                echo $donnees["count(DISTINCT artist)"] . "<br>";
            }

            $reponse->closeCursor();
        ?>
        <br>
        
        <h2>Requête 6 : Donner la chanson de Nirvana qui est la plus dansante dans la base topRock.</h2>
        <?php
            $reponse = $bdd->query("SELECT * FROM toprock WHERE artist='Nirvana' AND danceability=(SELECT max(danceability) FROM toprock WHERE artist='Nirvana');");

            while ($donnees = $reponse->fetch()){
                echo $donnees["name"] . "<br>";
            }

            $reponse->closeCursor();
        ?>
        <br>
        
        <h2>Requête 7 : Donner les premières chansons à être sorties dans la base songs.</h2>
        <?php
            $reponse = $bdd->query("SELECT * FROM songs WHERE release_date!='' ORDER BY release_date LIMIT 0, 10");

            while ($donnees = $reponse->fetch()){
                echo $donnees["song_name"] . "<br>";
            }

            $reponse->closeCursor();
        ?>
        
        <h2>Requête 8 : Donner le nombre d'artistes jouant du "metal" dans la base singers.</h2>
        <?php
            $reponse = $bdd->query("SELECT count(*) FROM singers WHERE genres LIKE '%metal%'");

            while ($donnees = $reponse->fetch()){
                echo $donnees["count(*)"] . "<br>";
            }

            $reponse->closeCursor();
        ?>
    </body>
</html>