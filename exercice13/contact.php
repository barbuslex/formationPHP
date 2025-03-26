<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <h1>Formulaire de contact</h1>
        <hr>
        <form method="post" action="traitement_contact.php">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input id="nom" name="nom" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom</label>
                <input id="prenom" name="prenom" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input id="email" name="email" type="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" name="message" id="message" rows="5"></textarea>
            </div>
            <div class="mb-3 text-end">
                <button class="btn btn-primary" type="submit">Envoyer</button>
            </div>
        </form>
    </div>
</body>
</html>