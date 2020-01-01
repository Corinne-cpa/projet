
<?php $this->title = "Page de connexion de l'administrateur"; ?>

<form method="POST" action="admin/loginAdmin">
    <div class="form-group">
        <label for="inputLogin">Login</label>
        <input type="text" class="form-control" id="inputLogin" aria-describedby="loginHelp" name="inputLogin">
    </div>
    <div class="form-group">
        <label for="inputPassword">Mot de passe</label>
        <input type="password" class="form-control" id="inputPassword" name="inputPassword">
    </div>
    <button type="submit" class="btn btn-primary">Connexion</button>
</form>
