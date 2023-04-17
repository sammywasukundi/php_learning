<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commentaires </title>
    <link rel="stylesheet" href="blog.css">
</head>
<body>
    <h1>Mon super blog !</h1>
    <p><a href="index.php">Retour à la liste des billets</a></p>
    <?php
        try{
                $bdd = new PDO ('mysql:host=localhost;dbname:test', 'root',''); 
            }
        catch(Exception $se){
                die('Erreur : ' . $e->getMessage());
            }

        $req = $bdd->prepare('SELECT id, titre, contenu,
        dateDeCreation AS
        dateDeCreation FROM billets WHERE id = ?');
        $req->execute(array($_GET['billets']));
        $donnees->fetch();
    ?>

    <div class="news">
        <h3>
        <?php echo htmlspecialchars($donnees['titre']); ?>
        <em>le <?php echo $donnees['dateDeCreation_fr']; ?></em>
        </h3>
        <p>
        <?php
        echo nl2br(htmlspecialchars($donnees['contenu']));
        ?>
        </p>
    </div>
    <h2>Commentaires</h2>
    <?php
        $req->closeCursor();

        $req = $bdd->prepare('SELECT id, titre, contenu,
        DATE_FORMAT(date_commentaire, \'%d/%m/%Y à %Hh%imin%ss\') AS
        date_commentaire_fr FROM commentaires WHERE id_billet = ? ORDER BY
        date_commentaire');
        $req->execute(array($_GET['billets']));
        $donnees->fetch();

        while ($donnees = $req->fetch())
        {
        ?>
        <p><strong><?php echo htmlspecialchars($donnees['auteur']); ?>
        </strong> le <?php echo $donnees['date_commentaire_fr']; ?></p>
        <p><?php echo nl2br(htmlspecialchars($donnees['commentaire'])); ?></p>
        <?php
        } // Fin de la boucle des commentaires
        $req->closeCursor();
        ?>

    ?>

</body>
</html>