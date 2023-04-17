<?php

     $mot_de_passe = 'sammy';
        if(isset($_POST['password']) AND $_POST['password'] == $mot_de_passe){
            echo "Bravo !! \nvous avez acceder a la page secrete ".'<br>';
            echo 'Le mot de passe est : '.$_POST['password'].'<br>';
        }
        else{
            echo '<p><font color="#FF0000" size="7">Mot de passe incorrect</font></p>';
            include('form.php');
        }

?>