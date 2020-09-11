<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/Voiture.php';
/**
 * Contrôleur des actions liées aux voitures
 *
 * @author Dahchar Mohammed Said
 */
class ControleurVoiture extends Controleur {

    private $voiture;

    /**
     * Constructeur 
     */
    public function __construct() {
        $this->voiture = new Voiture();
    }

    // Affiche les détails sur un voiture
    public function index() {
        $idVoiture = $this->requete->getParametre("id");
        
        $voiture = $this->voiture->getVoiture($id);
        
        $this->genererVue(array('voiture' => $voiture));
    }
}