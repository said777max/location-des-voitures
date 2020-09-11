<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/Voiture.php';

class ControleurAccueil extends Controleur {

    private $voiture;

    public function __construct() {
        $this->voiture = new Voiture();
    }

    // Affiche la liste de tous les voitures
    public function index() {
        $voitures = $this->voiture->getVoitures();
        $this->genererVue(array('voitures' => $voitures));
    }

}