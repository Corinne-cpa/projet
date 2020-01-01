<?php $this->title = "Page des participants aux  jeux organisés"; ?>
<p><a href="login/deconnecter">Déconnexion</a></p>
<h3>Page d'ajout des participants aux jeux organisés</h3>
<form method="POST" action="participe/inscrire">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputIdenf">ID_Enfant</label>
            <input type="integer" class="form-control" id="inputIdenf" name="inputIdenf">
        </div>
        <div class="form-group col-md-6">
            <label for="inputIdOrgjeu">ID_ORGJEUX</label>
            <input type="integer" class="form-control" id="inputIdOrgjeu" name="inputIdOrgjeu">
        </div>
    </div>
    
    
    <button type="submit" class="btn btn-primary">Ajout Participant</button>