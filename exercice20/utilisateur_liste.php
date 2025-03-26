<?php 
session_start();
require('bdd.php');

$sql = "SELECT * FROM utilisateurs";
$listeUtilisateurs = $db->query($sql)->fetchAll();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des utilisateurs</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <h1>Liste des utilisateurs</h1>
        <hr>

        <!-- Message d'alerte -->
        <?php if(array_key_exists('alert', $_SESSION)): ?>
        <div class="alert alert-<?= $_SESSION['alert']['type']; ?>">
            <?= $_SESSION['alert']['message']; ?>
        </div>
        <?php unset($_SESSION['alert']); ?>
        <?php endif; ?>
        
        <!-- Bouton de lien vers la page d'ajout d'un utilisateur -->
        <div class="text-end mb-3">
            <a href="index.php?p=utilisateur_ajout" class="btn btn-success">Ajouter un utilisateur</a>
        </div>
        
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom d'utilisateur</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($listeUtilisateurs as $utilisateur): ?>
                <tr>
                    <td><?= $utilisateur['id']; ?></td>
                    <td><?= $utilisateur['username']; ?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</body>
</html>