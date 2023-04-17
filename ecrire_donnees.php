<?php
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=test', 'root','',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e){
        die('Erreur : ' . $e->getMessage());
    }
    $bdd->exec('INSERT INTO etudiant (nmyDate) VALUES (NOW())');
        echo ' suppression avec succes ';
?>