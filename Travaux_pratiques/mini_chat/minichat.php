
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="minichat.css">
    <title>Document</title>
</head>
<body>
    <h2 style="font-family: Arial, Helvetica, sans-serif; font-size: 24px; font-weight: light; text-align: center;">Mini-chat</h2>
    <form method="post" action="minichat_post.php">
                  <div class="div_label">
                      <input name="pseudo" type="text" class="form-control" id="texte" placeholder="Pseudo">
                  </div>
                  <div class="div_label">
                      <input name="msg" type="text" class="form-control" id="texte1" placeholder="Message">
                  </div>
                  <div class="div_label">
                      <input name="envoyer" type="submit" class="form-control" id="btn" value="Envoyer">
                  </div>
                  <!-- <div class="div_label"></div> -->
    </form>
    <?php
        try{
            $bdd = new PDO('mysql:host=localhost;dbname=test', 'root','',
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        catch(Exception $e){
            die('Erreur : ' . $e->getMessage());
        }
        
        $reponse=$bdd->query('SELECT pseudo, message, la_date FROM minichat ORDER BY ID DESC LIMIT 0, 10');

        while ($donnees = $reponse->fetch())
        {
            echo '<div style="justify-content: center; align-items: center; display: flex;"><strong>'.htmlspecialchars($donnees['pseudo']) .' </strong>: '. htmlspecialchars($donnees['message']) .' '. htmlspecialchars($donnees['la_date']) .'<br></div>';
        }


        $reponse->closeCursor();
    ?>
    
</body>
</html>