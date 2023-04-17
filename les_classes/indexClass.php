<?php
    include_once('Membre.class.php');
    $membre = new Membre();
    $membre->setPseudo('Sam12');
    echo $membre->getPseudo(). ' '.'on risque de te bannir';
    $membre->bannir();
?>
