<?php $this->title = "Ajout des jeux"; ?>
<p><a href="login/deconnecter">Déconnexion</a></p>



<h3>Page d'ajout d'un jeu</h3>
<form method="POST" action="jeux/inscrire">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputNomJeu">Nom</label>
            <input type="text" class="form-control" id="inputNomJeu" name="inputNomJeu">
        </div>
        <div class="form-group col-md-6">
            <label for="inputAgemin">Age Min</label>
            <input type="integer" class="form-control" id="inputAgemin" name="inputAgemin">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputAgemax">Age Max</label>
            <input type="interger" class="form-control" id="inputAgemax" name="inputAgemax">
        </div>
    </div>
    
    
    
    <button type="submit" class="btn btn-primary">Ajouter Jeux</button>

 

