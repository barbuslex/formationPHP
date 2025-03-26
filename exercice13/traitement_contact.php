<?php 
//var_dump($_POST);
?>
<?php if($_POST): ?>
    <h1>Formulaire envoyé !</h1>
    <ul>
        <li>Nom: <?= $_POST['nom']; ?></li>
        <li>Prénom: <?= $_POST['prenom']; ?></li>
        <li>Email: <?= $_POST['email']; ?></li>
        <li>Message: <?= $_POST['message']; ?></li>
    </ul>
<?php else: ?>
    <?php exit("Le fomulaire n'a pas été soumis !"); ?>
<?php endif; ?>
