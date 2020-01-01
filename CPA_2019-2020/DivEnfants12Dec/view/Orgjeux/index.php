<?php $this->title = "Page des jeux organisés"; ?>
<p><a href="login/deconnecter">Déconnexion</a></p>
<h3>Page d'ajout des jeux organisés</h3>
<form method="POST" action="orgjeux/inscrire">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputJeux">Jeux</label>
            <input type="integer" class="form-control" id="inputJeux" name="inputJeux">
        </div>
        <div class="form-group col-md-6">
            <label for="inputDate">Date</label>
            <input type="date" class="form-control" id="inputDate" name="inputDate">
        </div>
    </div>
    
    
    <button type="submit" class="btn btn-primary">OrgJeux</button>