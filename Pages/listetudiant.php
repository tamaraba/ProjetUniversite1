<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="promo.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <title>Liste Promotions</title>
    </head>
    <body>
    <?php
    include("index.php");
    ?>
    <h1>Liste des Etudiants</h1>
    <?php
        echo'<table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Adresse Email</th>
                <th scope="col">N°Téléphone</th>
                <th scope="col">Date de Naissance</th>
            </tr>
        </thead>';
    ?>