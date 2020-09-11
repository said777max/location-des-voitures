<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <base href="<?= $racineWeb ?>" >
        <link rel="stylesheet" href="Contenu/style.css" />
        <title><?= $titre ?></title>
    </head>
    <body>
        <div id="global">
            <header>
                <a href=""><h1 id="voiture">Accueil</h1></a>
                <p>bienvenu dans notre app de location des voitures.</p>
            </header>
            <div id="contenu">
                <?= $contenu ?>
            </div> <!-- #contenu -->
            <footer id="piedBlog">
                location des voitures &copy 2020 Dahchar Mohammed Said
            </footer>
        </div> <!-- #global -->
    </body>
</html>