<?php 
    session_start();
    setcookie('pseudo','SamBro', time() + 365*24*3600,null,null,false,true);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <p>
            yo man je me souviens de toi : <?php echo $_SESSION['nom'].' '.$_SESSION['prenom'].' '.$_SESSION['age'];?>
        </p>
        <p>
            <?php
                echo $_COOKIE['pseudo'];
            ?>
        </p>
    </body>
</html>