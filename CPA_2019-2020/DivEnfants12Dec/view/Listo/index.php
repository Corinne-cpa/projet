<?php $this->title = "Liste de tous les jeux organisés"; ?>
<p><a href="login/deconnecter">Déconnexion</a></p>
<h3>Liste de tous les jeux organisés</h3>
<?php foreach ($game as $Game): ?>
<?= "ID ORGJEUX:"?>
<?= $this->clean($Game['ORGJEUX_ID']) ?> </br>
<?= "ID DU JEU:"?>
<?= $this->clean($Game['ORGJEUX_JEUX']) ?> </br>
<?= "DATE:"?>
<?= $this->clean($Game['ORGJEUX_DATE']) ?> </br>
<?php endforeach; ?>



