<?php

// Renvoie la liste des voitures
function getVoitures() {
    $bdd = getBdd();
    $voitures = $bdd->query('select * from vehicules'
            . ' order by id desc');
    return $voitures;
}

// Renvoie les informations sur un voiture
function getVoiture($id) {
    $bdd = getBdd();
    $voiture = $bdd->prepare('select * from vehicule'
            . ' where id=?');
    $voiture->execute(array($id));
    if ($voiture->rowCount() > 0)
        return $voiture->fetch();  // Accès à la première ligne de résultat
    else
        throw new Exception("Aucun voiture ne correspond à l'identifiant '$id'");
}

// Effectue la connexion à la BDD
// Instancie et renvoie l'objet PDO associé
function getBdd() {
    $bdd = new PDO('mysql:host=localhost;dbname=location_vehicules;charset=utf8', 'root',
            '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $bdd;
}
