<?php $this->title = "Liste de tous les enfants"; ?>
<p><a href="login/deconnecter">Déconnexion</a></p>
<h3>Liste de tous les enfants</h3>
<?php foreach ($enfant as $Enfants): ?>
<?= "ID Enfant:"?>
<?= $this->clean($Enfants['ENFANT_ID']) ?> </br>
<?= "NOM de l'enfant:"?>
<?= $this->clean($Enfants['ENFANT_NOM']) ?> </br>
<?= "PRENOM de l'enfant:"?>
<?= $this->clean($Enfants['ENFANT_PRENOM']) ?> </br>
<?= "ID parent de l'enfant:"?>
<?= $this->clean($Enfants['ENFANT_PARENT']) ?> </br>
<?php endforeach; ?>
