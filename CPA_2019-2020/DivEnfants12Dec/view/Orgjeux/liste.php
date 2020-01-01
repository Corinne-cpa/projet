<?php $this->title = "Liste de tous les jeux organisés"; ?>
<p><a href="login/deconnecter">Déconnexion</a></p>
<h3>Liste de tous les jeux organisés</h3>
<?php foreach ($orgjeux as $Orgjeux): ?>
<?= "ID ORGJEUX:"?>
<?= $this->clean($Orgjeux['ORGJEUX_ID']) ?> </br>
<?= "ID DU JEU:"?>
<?= $this->clean($Orgjeux['ORGJEUX_JEUX']) ?> </br>
<?= "DATE:"?>
<?= $this->clean($Orgjeux['ORGJEUX_DATE']) ?> </br>
<?php endforeach; ?>
