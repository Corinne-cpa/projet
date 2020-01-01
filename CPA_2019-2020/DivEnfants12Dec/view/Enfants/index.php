<?php $this->title = "Page enregistrement enfant"; ?>
<p><a href="login/deconnecter">Déconnexion</a></p>
<h3>Page d'enregistrement d'un enfant</h3>
<form method="POST" action="enfants/inscrire">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputNom">Nom</label>
            <input type="text" class="form-control" id="inputNom" name="inputNom">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPrenom">Prénom</label>
            <input type="text" class="form-control" id="inputprenom" name="inputPrenom">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputDn">Date de naissance</label>
            <input type="date" class="form-control" id="inputDn" name="inputDn">
        </div>
    </div>
    
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputParent">Parent de l'enfant</label>
            <input type="integer" class="form-control" id="inputParent" name="inputParent">
        </div>
    </div>
    
  
    
    
    
    <button type="submit" class="btn btn-primary">Ajouter enfant</button>