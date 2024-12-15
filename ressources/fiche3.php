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
        <h1>Spotify  Fiche 3</h1>
        
        <h2>Requête 9 : Donner les noms des chansons du groupe "Rage Against The Machine"</h2>
        <?php
            $reponse = $bdd->query("SELECT songs.* FROM songs INNER JOIN singers ON songs.artist=singers.id WHERE singers.name='Rage Against The Machine' LIMIT 0, 10");

            while ($donnees = $reponse->fetch()){
                echo $donnees["song_name"] . "<br>";
            }

            $reponse->closeCursor();
        ?>
        <br>
        
        <h2>Requête 10 : Donner le nom de la première chanson sortie par "The Police".</h2>
        <?php
            $reponse = $bdd->query("SELECT songs.* FROM songs INNER JOIN singers ON songs.artist=singers.id WHERE singers.name='The Police' AND songs.release_date!='' ORDER BY songs.release_date LIMIT 0, 1");

            while ($donnees = $reponse->fetch()){
                echo $donnees["song_name"] . "<br>";
            }

            $reponse->closeCursor();
        ?>
        <br>
        
        <h2>Requête 11 : Donner le nom de l'artiste qui le plus de followers.</h2>
        <?php
            $reponse = $bdd->query("SELECT singers.* FROM singers INNER JOIN data ON singers.id=data.id WHERE data.followers=(SELECT max(followers) FROM data)");

            while ($donnees = $reponse->fetch()){
                echo $donnees["name"] . "<br>";
            }

            $reponse->closeCursor();
        ?>
        
        <h2>Requête 12 : Donner le nombre de sorties de l'artiste chantant "Highway to Hell".</h2>
        <?php
            $reponse = $bdd->query("SELECT * FROM data WHERE id=(SELECT DISTINCT artist FROM songs WHERE song_name='Highway to Hell')");

            while ($donnees = $reponse->fetch()){
                echo $donnees["num_release"] . "<br>";
            }

            $reponse->closeCursor();
        ?>
    </body>
</html>