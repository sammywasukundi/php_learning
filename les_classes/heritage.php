<?php
    include_once('Membre.class.php');
    class Admin extends Membre
    {
        private $couleur;

        public function getCouleur(){
            return $this->couleurPseudo;
        }
        public function setCouleur($nouvelleCouleur){
            return $this->couleurPseudo=$nouvelleCouleur;
        }
    }
    
?>