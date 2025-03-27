<h1>Liste des annonces</h1>
<hr>
<div class="text-right">
    <a href="/annonces/ajouter" class="btn btn-success">Ajouter une annonce</a>
</div>
<?php foreach($annonces as $annonce): ?>
    <article>
        <h2><a href="/annonces/lire/<?= $annonce->id ?>"><?= $annonce->titre ?></a></h2>
        <div><?= $annonce->description ?></div>
    </article>
<?php endforeach; ?>