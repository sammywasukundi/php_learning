<?php
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=test', 'root','',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e){
        die('Erreur : ' . $e->getMessage());
    }
    $reponse = $bdd->query('SELECT * FROM etudiant');
    while ($donnees = $reponse->fetch())
    {
        echo $donnees['nom'] .' '. $donnees['postnom'] .' '.$donnees['complements'] .' '. $donnees['matricule'].$donnees['myDate'].'<br>';
    }
    $reponse->closeCursor();
?>
