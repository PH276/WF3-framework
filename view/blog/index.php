<?php
?>

<?php foreach ($GLOBALS['blogs'] as $blog) : ?>
    <div>
        <a href="/blog/edit/?id=<?= $blog['id'] ?>"><?= $blog['titre'] ?></a><br><br>
        <?= $blog['article'] ?><br>
        <?= $blog['auteur'] ?><br>

        <a href="/blog/delete/?id=<?= $blog['id'] ?>">Supprimer</a><br>

    </div>
    <hr>
<?php endforeach; ?>
