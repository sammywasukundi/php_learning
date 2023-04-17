<?php 
    session_start();
    setcookie("pseudo","SamBro", time() + 365*24*3600,null,null,false,true);
    $_SESSION['nom']='sammy';
    $_SESSION['prenom']='bro';
    $_SESSION['age']=12;
?>
<?php    
    if(preg_match("#guitare$#i","je ne sais pas joue au guitare")){
        echo 'Vrai'.'</br>';
    }
    else{
        echo 'faux'.'</br>';
    }
    $text = preg_replace("#guitare(.+)$#i","<strong>$1/strong>",$text);
    echo $text;
    if(preg_match("#^[saq]#i","je ne sais pas joue au gris")){
        echo 'Vrai'.'</br>';
    }
    else{
        echo 'faux'.'</br>';
    }
    if(preg_match("#[^A-Z0-9]$#","je ne sais pas joue au gris")){
        echo 'Vrai'.'</br>';
    }
    else{
        echo 'faux'.'</br>';
    }
    if(preg_match("#^0[98][-. ]?[9712][0-9]{7}#","09 79576452")){
        echo 'Vrai'.'</br>';
    }
    else{
        echo 'faux'.'</br>';
    }

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
        Salut <?php echo $_SESSION['nom']; ?> bienvenue sur mon site web <br> <a href="info.php">voir l'information </a>
    </p>
    <!-- regex d'un numero de telephone -->
    <?php
        if(isset($_POST['telephone'])){
            $_POST['telephone'] = htmlspecialchars($_POST['telephone']);
        }
        if(preg_match("#^0[98][-. ]?[9712][0-9]{7}#",$_POST['telephone'])){
            echo 'le numero'.' '.$_POST['telephone'].' '. 'est un numero valide en RDC'.'</br>';
        }
        else{
            echo 'le numero'.' '.$_POST['telephone'].' '. 'est un numero non valide en RDC'.'</br>';
        }

    ?>
    <form method="post">
        <p>
            <label for="telephone">Numero de telephone</label><br>
            <input name="telephone" id="telephone"><br>
            <input type="submit" value="verification du numero">
        </p>
    </form>

    <!-- regex d'une adresse Email -->
    <?php
        if(isset($_POST['Email'])){
            $_POST['Email'] = htmlspecialchars($_POST['Email']);
        }
        if(preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",$_POST['Email'])){
            echo 'le'.' '.$_POST['Email'].' '. 'est une adresse valide'.'</br>';
        }
        else{
            echo 'le'.' '.$_POST['Email'].' '. 'est une adresse non valide'.'</br>';
        }
    ?>

    <form method="post">
        <label for="Email"> Adresse Email</label><br>
        <input type="mail" name="Email" id="Email"><br>
        <input type="submit" value="Verifier l'adreuniluksse mail">
    </form>
    <a href="https://uniluk.org/"></a>

</body>
</html>