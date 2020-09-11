<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/Voiture.php';

class ControleurAccueil extends Controleur {

    private $Voiture;

    public function __construct() {
        $this->voiture = new Voiture();
    }

    // Affiche la liste de tous les voitures
    public function index() {
        $billets = $this->voiture->getVoitures();
        $this->genererVue(array('voitures' => $voitures));
    }

}
