<?php $this->titre = "CarLocation - " . $this->nettoyer($voiture['marque'])." ". $this->nettoyer($voiture['serie']); ?>

<article>
    <header>
        <h1 class="Voiture"><?= $this->nettoyer($voiture['marque'])." ". $this->nettoyer($voiture['serie']) ?></h1>
    </header>
    <table>
        <tr><img src="<?= $voiture['image']  ?>"></tr>
    <tr><td>marque</td><td><?= $this->nettoyer($voiture['marque']) ?></td></tr>
    <tr><td>serie</td><td><?= $this->nettoyer($voiture['serie']) ?></td></tr>
    <tr><td>fabricant</td><td><?= $this->nettoyer($voiture['fabricant']) ?></td></tr>
    <tr><td>couleur</td><td><?= $this->nettoyer($voiture['couleur']) ?></td></tr>
    <tr><td>contenance</td><td><?= $this->nettoyer($voiture['contenance']) ?></td></tr>
    <tr><td>chaises</td><td><?= $this->nettoyer($voiture['chaises']) ?></td></tr>
    <tr><td>matricule</td><td><?= $this->nettoyer($voiture['matricule']) ?></td></tr>
    <tr><td>vitesse_max</td><td><?= $this->nettoyer($voiture['vitesse_max']) ?></td></tr>
    <tr><td>transmission</td><td><?= $this->nettoyer($voiture['transmission']) ?></td></tr>
    <tr><td>transmission</td><td><?= $this->nettoyer($voiture['transmission']) ?></td></tr>
    <tr><td>acceleration</td><td><?= $this->nettoyer($voiture['acceleration']) ?></td></tr>
    <tr><td>puissance_moteur</td><td><?= $this->nettoyer($voiture['puissance_moteur']) ?></td></tr>
    <tr><td>date de sortie</td><td><?= $this->nettoyer($voiture['jour'])." - ".$this->nettoyer($voiture['mois'])." - ".$this->nettoyer($voiture['annee']) ?></td></tr>
</table>
</article>
<hr />
