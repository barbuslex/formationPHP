<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <h1>Formulaire de connexion</h1>
        <hr>
        <form>
            <div class="mb-3">
                <label for="username" class="form-label">Nom d'utilisateur :</label>
                <input id="username" name="username" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe :</label>
                <input id="password" name="password" type="password" class="form-control">
            </div>
            <div class="mb-3 text-end">
                <button class="btn btn-primary" type="submit">Envoyer</button>
            </div>
        </form>
    </div>
</body>
</html>