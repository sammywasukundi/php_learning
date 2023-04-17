<?php 
    $parents =array(
            array('enfant1','21','biochimie'),
            array('enfant2','14','electronique'),
            array('enfant3','25','pedagogie')
    );

    foreach($parents as $parent){
        echo $parent[0].' '.$parent[1].' '.$parent[2]."</br>";
    }
?>

<!-- et la si on veut on affiche seulement les options ou encore les ages -->