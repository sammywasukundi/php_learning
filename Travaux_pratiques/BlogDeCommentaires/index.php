<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mon blog</title>
    <link rel="stylesheet" href="blog.css">
</head>
<body>
    <h1>Mon super Blog</h1>
    <p>Derniers billets du blog :</p>
    <?php
        try{
            $bdd = new PDO ('mysql:host=localhost;dbname:test', 'root',''); 
        }
        catch(Exception $se){
            die('Erreur : ' . $e->getMessage());
        }

        $req = $bdd->query('SELECT id, titre, contenu FROM billets ORDER BY dateDeCreation DESC LIMIT 0, 5');

         while ($donnees =$req->fetch())
         {
            ?>
            <div class="news">
                <h3>
                <?php echo htmlspecialchars($donnees['titre']); ?>
                <em>le <?php echo $donnees['dateDeCreation']; ?></em>
                </h3>
                <p>
                <?php

                echo nl2br(htmlspecialchars($donnees['contenu']));
                ?>
                <br />
                <em><a href="commentaires.php?billet=<?php echo $donnees['id'];
                ?>">Commentaires</a></em>
                </p>
            </div>
            <?php
         } 

         $req->closeCursor();
         ?>
    ?>
</body>
</html>