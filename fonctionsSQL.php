<?php
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=test', 'root','',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e){
        die('Erreur : ' . $e->getMessage());
    }
    $reponse = $bdd->query('SELECT SUM(matricule) AS sum_matricules,postnom FROM etudiant GROUP BY postnom HAVING sum_matricules <= 4400');

    while($donnees = $reponse->fetch()){
        echo $donnees['sum_matricules'].' '.$donnees['postnom'].'<br>';
    }

    $reponse->closeCursor();
?>