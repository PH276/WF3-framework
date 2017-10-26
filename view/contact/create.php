<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Créer un contact</title>
</head>
<body>
    <form action="/contact/store" method="post">
        <input type="text" name="nom" placeholder="nom"><br>
        <input type="text" name="prenom" placeholder="Prénom"><br>
        <input type="text" name="phone" placeholder="Téléphone"><br>
        <input type="submit" value="envoyer">

    </form>

</body>
</html>
