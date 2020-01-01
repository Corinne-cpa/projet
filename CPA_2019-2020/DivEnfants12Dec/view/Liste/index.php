<?php $this->title = "Liste de tous les jeux"; ?>
<p><a href="login/deconnecter">Déconnexion</a></p>
<h3>Liste de tous les jeux disponibles</h3>
<?php foreach ($jeux as $Jeux): ?>
<?= "ID Jeux:"?>
<?= $this->clean($Jeux['JEUX_ID']) ?> </br>
<?= "NOM Jeux:"?>
<?= $this->clean($Jeux['JEUX_NOM']) ?> </br>
<?php endforeach; ?>



