<?php

// var_dump($_POST);
// exit();
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=test', 'root','',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e){
        die('Erreur : ' . $e->getMessage());
    }

    // $req = $bdd->query('INSERT INTO minichat (pseudo, message) VALUES (\''.$_POST['pseudo'].'\',\''.$_POST['msg'].'\')');
    // // $req->exec();

    // Insertion du message à l'aide d'une requête préparée
    if(isset($_POST['envoyer'])){
        if(!empty($_POST['pseudo']) AND !empty($_POST['msg'])){
            $pseudo = htmlspecialchars($_POST['pseudo']);
            $message = htmlspecialchars($_POST['msg']);

            $req = $bdd->prepare('INSERT INTO minichat (pseudo, message, la_date) VALUES(?, ?, NOW())');
            $req->execute(array($pseudo, $message));
            header('Location: minichat.php');
        }
        else{
            echo 'Veuillez remplir tous les champs' .' '.'<a href="minichat.php">Retour</a>';

        }
    }
    

    
?>