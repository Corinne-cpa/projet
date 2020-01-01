<h3>Page d'inscription</h3>
<form method="POST" action="login/inscrire">
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
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" name="inputEmail">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword">Password</label>
            <input type="password" class="form-control" id="inputPassword" name="inputPassword">
        </div>
    </div>
    <div class="form-group">
        <label for="inputAdresse">Adresse</label>
        <input type="text" class="form-control" id="inputAddress" name="inputAdresse">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputTelephone">Téléphone</label>
            <input type="tel" class="form-control" id="inputTel" name="inputTelephone">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">S'inscrire</button>
</form>
<p><a href="login">Connectez-vous ici</a></p>