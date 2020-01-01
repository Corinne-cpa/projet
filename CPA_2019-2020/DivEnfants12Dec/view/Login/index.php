<?php $this->title = "Page de connexion"; ?>
<p><a href="login/deconnecter">Déconnexion</a></p>
<form method="POST" action="login/loginParent">
    <div class="form-group">
        <label for="inputEmail">Adresse Email</label>
        <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" name="inputEmail">
    </div>
    <div class="form-group">
        <label for="inputPassword">Mot de passe</label>
        <input type="password" class="form-control" id="inputPassword" name="inputPassword">
    </div>
    <button type="submit" class="btn btn-primary">Connexion</button>
</form>
<a href="Login/register">Inscrivez-vous ici</a>