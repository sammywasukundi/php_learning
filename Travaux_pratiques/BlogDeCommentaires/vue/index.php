<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Blog</title>
        <link rel="stylesheet" href="blog.css">
    </head>
    <body>
        <h1>Mon super blog</h1>
        <p>Derniers billets du blog</p>

        <?php
            foreach($billets as $billet)
            {
            ?>
            <div class="news">
                <h3>
                    <?php
                        echo $billet['titre']; 
                    ?>
                    <em>
                        le 
                        <?php 
                            echo $billet['dateDeCreation']; 
                            ?>
                    </em>
                </h3>
                <p>
                    <?php 
                        echo $billet['contenu'];
                    ?>
                    <br/>
                <em>
                    <a href="commentaires.php?billet=<?php echo $billet['id']; ?>">Commentaires</a>
                </em>
                </p>
            </div>
        <?php
            }
        ?>
    </body>
</html>