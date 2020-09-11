<?php

require_once 'ControleurSecurise.php';
require_once 'Modele/voiture.php';

/**
 * Contrôleur des actions d'administration
 *
 * @author Dahchar Mohammed Said
 */
class ControleurAdmin extends ControleurSecurise
{
    private $voiture;

    /**
     * Constructeur 
     */
    public function __construct()
    {
        $this->voiture = new Voiture();
    }

    public function index()
    {
        $nbVoitures = $this->voiture->getNombreVoitures();
        $login = $this->requete->getSession()->getAttribut("login");
        $this->genererVue(array('nbVoitures' => $nbVoitures));
    }

}