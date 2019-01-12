<?php $title = 'Liste des catégories'; ?>

<?php ob_start(); ?>

    <?php
    while ($categorie = $categories->fetch())
    {
    ?>
        <div>
            <p><?= $categorie['id']; ?> </p>
            <p><?= $categorie['title']; ?> </p>
            <p><?= $categorie['description']; ?> </p>
        </div>
    <?php
    }
    $categories->closeCursor();
    ?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>