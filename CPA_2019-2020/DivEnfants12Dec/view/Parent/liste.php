<?php $this->title = "Liste des parents"; ?>
<p><a href="login/deconnecter">Déconnexion</a></p>
<h3>Liste des parents pour recupérer l'ID</h3>
<?php foreach ($parent as $Parents): ?>
<?= "PARENT ID:"?>
<?= $this->clean($Parents['PARENT_ID']) ?> </br>
<?= "PARENT NOM:"?>
<?= $this->clean($Parents['PARENT_NOM']) ?> </br>
<?= "PARENT PRENOM:"?>
<?= $this->clean($Parents['PARENT_PRENOM']) ?> </br>
<?php endforeach; ?>
