<?php
// Définition de la structure de l'arborescence
$tree = array(
    'branche 1' => array(
        'branche 2' => array(
            'sous-branche 1',
            'sous-branche 2',
            'sous-branche 3'
        ),
        'sous-branche 4',
        'sous-branche 5'
    ),
    'branche 3' => array(
        'sous-branche 1',
        'sous-branche 2',
        'sous-branche 3'
    )
);

// Fonction récursive pour afficher l'arborescence
function displayTree($tree, $indent = 0) {
    foreach ($tree as $key => $value) {
        // affiche l'indentation correspondante
        echo str_repeat("\t", $indent);
        // affiche le nom du dossier/fichier
        echo "- $value\n";
        if (is_array($value)) {
            // si la valeur est un tableau, on appelle la fonction récursivement
            displayTree($value, $indent + 1);
        }
    }
}

// Affichage de l'arborescence
displayTree($tree);

?>

