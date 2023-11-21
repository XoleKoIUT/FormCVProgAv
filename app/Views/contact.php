<h2>Formulaire CodeIgniter 4</h2>

<?= form_open('\MailController\traitement'); ?>
<label for="identifiant">Nom</label>
<?= form_input('name', set_value('name'), 'required'); ?>
<?= validation_show_error('identifiant') ?>

<br>
<label for="email">Email</label>
<?= form_input('email', set_value('email'), 'required'); ?>
<?= validation_show_error('email') ?>

<br>

<?= form_submit('submit', 'Envoyer'); ?>
<?= form_close(); ?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exemple de Formulaire CodeIgniter 4</title>
</head>
<body>
<h2>Formulaire CodeIgniter 4</h2>
<?php echo form_open('MailController/traitement'); ?>
<label for="identifiant">Nom Utilisateur</label>
<?php echo form_input('identifiant', set_value('identifiant'), 'required'); ?>
<?= validation_show_error('identifiant') ?>
<br>
<label for="email">Adresse e-mail</label>
<?php echo form_input('email', set_value('email'), 'required'); ?>
<?= validation_show_error('email') ?>
<br>
<?php echo form_submit('submit', 'Envoyer'); ?>
<?php echo form_close(); ?>
</body>
</html>
