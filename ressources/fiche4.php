<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Projet SPOTIFY - 4</title>
        <link rel="stylesheet" href="css/output.css">
        <link rel="stylesheet" href="css/menu.css">
    </head>
    <body>
        <?php include "prefabs/menu.php"; ?> 
        <h1>Spotify  Fiche 4</h1>
        
        <h2>Formulaire</h2>
        <form method="POST">
            <label for="artist">Artiste</label>
            <input type="text" name="artist" placeholder="Entrer l'artiste">
            <input type="submit">
        </form>

        <?php
            $bdd = new PDO("mysql:host=localhost;dbname=decaillot-gabin_spotify;charset=utf8", "root", "");

            $reponse_songs = $bdd->prepare("SELECT DISTINCT songs.* FROM songs INNER JOIN singers ON songs.artist=singers.id WHERE singers.name=? LIMIT 0, 10");
            $reponse_pop = $bdd->prepare("SELECT DISTINCT data.* FROM data INNER JOIN singers ON data.id=singers.id WHERE singers.name=?");
        
            if (isset($_POST["artist"])){
                echo "<h2>Chansons de " . $_POST["artist"] . "</h2>";

                $reponse_songs->execute(array($_POST["artist"]));

                while ($donnees = $reponse_songs->fetch()){
                    echo $donnees["song_name"] . "<br>";
                }
    
                $reponse_songs->closeCursor();

                

                $reponse_pop->execute(array($_POST["artist"]));

                while ($donnees = $reponse_pop->fetch()){
                    echo "<h2>" . $_POST["artist"] . " a une popularité de " . $donnees["popularity"] . "</h2>";
                }
    
                $reponse_pop->closeCursor();
            }
            
        ?>
        
    </body>
</html>