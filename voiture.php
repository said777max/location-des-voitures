<?php

require 'Modele.php';

try {
    if (isset($_GET['id'])) {
        // intval renvoie la valeur numérique du paramètre ou 0 en cas d'échec
        $id = intval($_GET['id']);
        if ($id != 0) {
            $voiture = getVoiture($id);
            require 'vueVoiture.php';
        }
        else
            throw new Exception("Identifiant");
    }
    else
        throw new Exception("Aucun identifiant de voiture");
}
catch (Exception $e) {
    $msgErreur = $e->getMessage();
    require 'vueErreur.php';
}