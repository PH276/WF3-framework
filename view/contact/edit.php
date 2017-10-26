<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier un contact</title>
</head>
<body>
    <?php //dd($GLOBALS) ?>
    <form action="/contact/update/?id=<?= $GLOBALS['contact']->id ?>" method="post">
        <input type="text" name="nom" placeholder="nom" value="<?= $GLOBALS['contact']->nom ?>"><br>
        <input type="text" name="prenom" placeholder="Prénom" value="<?= $GLOBALS['contact']->prenom ?>"><br>
        <input type="text" name="phone" placeholder="Téléphone" value="<?= $GLOBALS['contact']->phone ?>"><br>
        <input type="submit" value="envoyer">

    </form>

</body>
</html>
