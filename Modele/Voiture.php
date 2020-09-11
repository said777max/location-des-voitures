<?php

require_once 'Framework/Modele.php';

/**
 * Fournit les services d'accès aux genres musicaux 
 * 
 * @author Dahchar Mohammed Said
 */
class Voiture extends Modele {

    /** Renvoie la liste des voitures du blog
     * 
     * @return PDOStatement La liste des voitures
     */
    public function getVoitures() {
        $sql = 'select * from vehicule'
                . ' order by id desc';
        $voitures = $this->executerRequete($sql);
        return $voitures;
    }

    /** Renvoie les informations sur une voiture
     * 
     * @param int $id L'identifiant d'une voiture
     * @return array La voiture
     * @throws Exception Si l'identifiant d'une voiture est inconnu
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

    /**
     * Renvoie le nombre total de voitures
     * 
     * @return int Le nombre de voitures
     */
    public function getNombreVoitures()
    {
        $sql = 'select count(*) as nbVoitures from vehicule';
        $resultat = $this->executerRequete($sql);
        $ligne = $resultat->fetch();  // Le résultat comporte toujours 1 ligne
        return $ligne['nbVoitures'];
    }
}