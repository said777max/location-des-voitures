<?php

require_once 'Modele/Voiture.php';
require_once 'Vue/Vue.php';

class ControleurAccueil {

    private $voiture;

    public function __construct() {
        $this->voiture = new Voiture();
    }

// Affiche la liste de tous les voitures
    public function accueil() {
        $billets = $this->voiture->getVoitures();
        $vue = new Vue("Accueil");
        $vue->generer(array('voitures' => $voitures));
    }

}

