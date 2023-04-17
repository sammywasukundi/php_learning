<?php 
    $age = 5;
    switch($age){
        case 5:
            echo 'enfant';
            break;
        case 12:
            echo 'adolescent';
            break;
        case 18:
            echo 'jeune adulte';
            break;
        case 40:
            echo 'age mur';
            break;
        default:
            echo 'pas reconnu<br>';
            break;
    }

?><br>
<?php
    // $lignes = 0;
    // while($lignes < 30){
    //     echo "$lignes : je ne dois pas regarder les mouches quand j'apprends du PHP<br>";
    //     $lignes++;
    // }
    for($lignes = 0;$lignes < 30;$lignes++){
        echo "$lignes : bonjour a tous<br>";
    }
    $year=date('Y');
    $mouth=date('m');
    $day=date('d');
    $hour=date('H');
    $minuts=date('i');
    echo "La date du jour est $day /$mouth /$year<br> Il est $hour: $minuts <br>";

    function direBonjour($nom){
        echo "Bonjour $nom <br>";
    }

    direBonjour('sam');
    direBonjour('moise');
    direBonjour('love');
    direBonjour('josue');
    direBonjour('joseph');

    
    $jours=array('dimanche','lundi','mardi','mercredi','jeudi','vendredi','samedi');
    
    // for($parcours = 0;$parcours < 7; $parcours ++){
    //     echo "$jours[$parcours]<br>";    
    $position=array_search('mercredi', $jours);
    echo 'mercredi se trouve a la position : '. $position.'<br>';
    foreach ($jours as $numero){
        echo $numero."<br>";
    }
    // }

    $identite = array(
        "nom" => "mumbere",
        "postnom" => "wasukundi",
        "prenom" => "sammy",
        "matricule" => "4283",
    );
    // echo '<pre>';
    // print_r($identite) ;
    // echo '</pre>';
    foreach($identite as $cle => $ele){
        echo $cle." : "." $ele"."<br>";
    }

    echo 'voici le nom que tu as entre :'.$_POST['firstname'];
    // echo "tu veux aller changer de nom ?"."<a href='bonjour.php'>vas-y</a>" ;
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
    <a href="bonjour.php?nom=sammy&amp;prenom=douze">dis moi bonjour</a>
        <?php include("menu.php");?>
        <?php include("corps.php")?>
        <?php include("pieds.php")?>

</body>
</html>