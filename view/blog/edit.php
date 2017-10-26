<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier un article</title>
</head>
<body>
    <?php //dd($GLOBALS) ?>
    <form action="/blog/update/?id=<?= $GLOBALS['blog']->id ?>" method="post">
        <input type="text" name="titre" placeholder="titre" value="<?= $GLOBALS['blog']->titre ?>"><br>
        <input type="text" name="article" placeholder="article" value="<?= $GLOBALS['blog']->article ?>"><br>
        <input type="text" name="auteur" placeholder="Auteur" value="<?= $GLOBALS['blog']->auteur ?>"><br>
        <input type="submit" value="envoyer">

    </form>

</body>
</html>
