<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <base href="<?= $webRoot ?>" >
        <link rel="stylesheet" href="Content/bootstrap.min.css">
        <link rel="stylesheet" href="Content/style.css" />
        <title><?= $title ?></title>
    </head>
    <body>
        <div id="global">
            <header>
                <a href=""><h1 id="blogTitle">Site de divertissements des enfants</h1></a>
            </header>
            <div id="content">
                <?= $content ?>
            </div> <!-- #content -->
            <footer id="blogFooter">
                Projet réalisé par Corinne.</br>
                <p><a href='admin'>@dmin du site</p>
            </footer>
        </div> <!-- #global -->
    </body>
</html>
