<?php
session_start();
if(!$_SESSION['username']) {
    header('Location: ../connexion');
    exit();
}

require('bdd.php');

if(isset($_GET['id']) && is_numeric($_GET['id'])) {
    if($_POST) {
        if(!$_POST['username']) {
            $_SESSION['alert'] = [
                'type' => 'danger',
                'message' => "Impossible d'ajouter l'utilisateur : le nom d'utilisateur est obligatoire"
            ];
            header('Location: ../utilisateur_modifier/'.$_GET['id']);
            exit();
        }
    
        $sql = "SELECT * FROM utilisateurs WHERE LOWER(username) = LOWER(:nom_utilisateur)";
        $query = $db->prepare($sql);
        $query->execute([
            'nom_utilisateur' => $_POST['username']
        ]);
    
        if($query->fetch()) {
            $_SESSION['alert'] = [
                'type' => 'danger',
                'message' => "Impossible de modifier l'utilisateur : ".$_POST['username']." existe déjà"
            ];
            header('Location: ../utilisateur_modifier/'.$_GET['id']);
            exit();
        }
    
        $sql = "UPDATE utilisateurs SET username = :nom_utilisateur WHERE id = :id";
        $query = $db->prepare($sql);
        $execute = $query->execute([
            'nom_utilisateur' => $_POST['username'],
            'id' => $_GET['id']
        ]);
    
        if($execute) {
            $_SESSION['alert'] = [
                'type' => 'success',
                'message' => "Utilisateur ".$_POST['username']." modifié avec succès"
            ];
        }
        else {
            $
            $_SESSION['alert'] = [
                'type' => 'danger',
                'message' => "Impossible de modifier l'utilisateur : ".$query->errorInfo()
            ];
        }

        unset($_SESSION['username']);
    
        header('Location: ../utilisateur_liste');
        exit();
    }

    $sql = "SELECT * FROM utilisateurs WHERE id = :id";
    $query = $db->prepare($sql);
    $query->execute([
        'id' => $_GET['id']
    ]);
    $utilisateur = $query->fetch();

    if(!$utilisateur) {
        die("Utilisateur introuvable");
    }
}
else {
    die("Mauvaise requête");
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un utilisateur</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <h1>Modifier un utilisateur</h1>
        <hr>
        <!-- Message d'alerte -->
        <?php if(array_key_exists('alert', $_SESSION)): ?>
        <div class="alert alert-<?= $_SESSION['alert']['type']; ?>">
            <?= $_SESSION['alert']['message']; ?>
        </div>
        <?php unset($_SESSION['alert']); ?>
        <?php endif; ?>

        <form method="post" action="../utilisateur_modifier/<?= $_GET['id']; ?>">
            <div class="mb-3">
                <label for="username" class="form-label">Nom d'utilisateur :</label>
                <input id="username" name="username" type="text" class="form-control" value="<?= $utilisateur['username'] ?>">
            </div>
            <div class="mb-3 text-end">
                <a href="../utilisateur_liste" class="btn btn-secondary">Annuler</a>
                <button class="btn btn-primary" type="submit">Modifier</button>
            </div>
        </form>
    </div>
</body>
</html>