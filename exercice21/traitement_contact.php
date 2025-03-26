<?php 
//var_dump($_POST);
//var_dump($_FILES);
?>
<?php if($_POST): ?>
    <?php 
    foreach($_POST as $nomChamp => $valeurChamp) {
        if(empty($valeurChamp)) {
            die("Le champ $nomChamp est vide");
        }
    }

    if($_FILES['fichier']) {
        $filename = $_FILES['fichier']['name'];
        $filepath = $_FILES['fichier']['tmp_name'];
        $fileinfo = finfo_open(FILEINFO_MIME_TYPE);
        $filetype = finfo_file($fileinfo, $filepath);
        $allowedTypes = [
            'image/png' => 'png',
            'image/jpeg' => 'jpg'
        ];

        if(!in_array($filetype, array_keys($allowedTypes))) {
            die("Fichier non autorisé !");
         }

        if(!move_uploaded_file($filepath, "uploads/".$filename)) {
            die("Impossible de déplacer le fichier envoyé !");
        }
    }
    else {
        die('Fichier non envoyé');
    }
    ?>

    <h1>Formulaire envoyé !</h1>
    <ul>
        <li>Nom: <?= $_POST['nom']; ?></li>
        <li>Prénom: <?= $_POST['prenom']; ?></li>
        <li>Email: <?= $_POST['email']; ?></li>
        <li>Message: <?= $_POST['message']; ?></li>
        <li>Pièce jointe : <img src="uploads/<?= $filename; ?>" alt="IMAGE"></li>
    </ul>
<?php else: ?>
    <?php exit("Le fomulaire n'a pas été soumis !"); ?>
<?php endif; ?>
