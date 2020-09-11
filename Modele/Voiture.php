<?php

require_once 'Modele/Modele.php';

/**
 * 
 * 
 * @author Dahchar Mohammed Said
 */
class Voiture extends Modele {

    /** Renvoie la liste des voitures
     * 
     * @return PDOStatement La liste des voitures
     */
    public function getVoiture() {
        $sql = 'select * from vehicule'
                . ' order by id desc';
        $voitures = $this->executerRequete($sql);
        return $voitures;
    }

    /** Renvoie les informations sur un voiture
     * 
     * @param int $id L'identifiant du voiture
     * @return array Le voiture
     * @throws Exception Si l'identifiant du voiture est inconnu
     */
    public function getVoiture($id) {
        $sql = 'select * from vehicule'
                . ' where id=?';
        $voiture = $this->executerRequete($sql, array($id));
        if ($voiture->rowCount() > 0)
            return $voiture->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun voiture ne correspond à l'identifiant '$id'");
    }

}