<?php
?>

<?php foreach ($GLOBALS['contacts'] as $contact) : ?>
    <div>
        Prénom : <a href="/contact/edit/?id=<?= $contact['id'] ?>"><?= $contact['prenom'] ?></a><br>
        Nom : <?= $contact['nom'] ?><br>
        Phone : <?= $contact['phone'] ?><br>

        <a href="/contact/delete/?id=<?= $contact['id'] ?>">Supprimer</a><br>

    </div>
    <hr>
<?php endforeach; ?>
