<?php
    include_once('heritage.php');
    $admin = new Admin();
    $admin->setCouleur('rouge');
    echo $admin->getCouleur(). ' '.'c la couleur du pseudo'.' ';
?>