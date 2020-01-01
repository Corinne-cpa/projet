<?php $this->title = "Liste de tous les jeux"; ?>
<p><a href="login/deconnecter">Déconnexion</a></p>

<?php foreach ($jeux as $jeu):
    
 ?>
<?= $this ->clean ($jeux['JEUX_NOM']) ?> </br>
<?php endforeach; ?>

