<?php
    try{
        $bdd = new PDO ('mysql:host=localhost;dbname:test', 'root',''); 
    }
    catch(Exception $se){
        die('Erreur : ' . $e->getMessage());
    }
?>