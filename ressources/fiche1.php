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
        <h1>Spotify Fiche 1</h1>
        
        <h2>Requête 1 : Donner les différents titres des chansons commençant par « Back » présentes dans la base toprock</h2>
        <?php
            $reponse = $bdd->query("SELECT * FROM toprock WHERE name LIKE 'Back%' LIMIT 0, 10");

            while ($donnees = $reponse->fetch()){
                echo $donnees["name"] . "<br>";
            }

            $reponse->closeCursor();
        ?>
        <br>
        
        <h2>Requête 2 : Donner les titres des chansons de U2 sortie avant 1990 dans la base toprock</h2>
        <?php
            $reponse = $bdd->query("SELECT * FROM toprock WHERE artist='U2' AND release_date<1990 LIMIT 0, 10");

            while ($donnees = $reponse->fetch()){
                echo $donnees["name"] . "<br>";
            }

            $reponse->closeCursor();
        ?>
        <br>
        
        <h2>Requête 3 : Donner les titres des chansons de Nirvana dont le caractère acoustique est  inférieur à 0,5 et dont le tempo est supérieur à 120 dans la base toprock.</h2>
        <?php
            $reponse = $bdd->query("SELECT * FROM toprock WHERE artist='Nirvana' AND acousticness<0.5 AND tempo>120 LIMIT 0, 10");

            while ($donnees = $reponse->fetch()){
                echo $donnees["name"] . "<br>";
            }

            $reponse->closeCursor();
        ?>
        
        <h2>Requête 4 : Donner les titres des artistes qui ont le même nom que leurs chansons dans la base toprock.</h2>
        <?php
            $reponse = $bdd->query("SELECT * FROM toprock WHERE artist=name LIMIT 0, 10");

            while ($donnees = $reponse->fetch()){
                echo $donnees["name"] . "<br>";
            }

            $reponse->closeCursor();
        ?>
    </body>
</html>