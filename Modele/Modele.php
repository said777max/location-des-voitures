<?php

// Renvoie la liste des voitures du blog
function getVoitures() {
    $bdd = getBdd();
    $billets = $bdd->query('select * from vehicules'
            . ' order by id desc');
    return $voitures;
}

// Renvoie les informations sur un voiture
function getVoiture($id) {
    $bdd = getBdd();
    $voiture = $bdd->prepare('select * from vehicules'
            . ' where id=?');
    $voiture->execute(array($id));
    if ($voiture->rowCount() == 1)
        return $voiture->fetch();  // Accès à la première ligne de résultat
    else
        throw new Exception("Aucun voiture ne correspond à l'identifiant '$id'");
}

// Effectue la connexion à la BDD
// Instancie et renvoie l'objet PDO associé
function getBdd() {
    $bdd = new PDO('mysql:host=localhost;dbname=location_vehicule;charset=utf8', 'root',
            '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $bdd;
}