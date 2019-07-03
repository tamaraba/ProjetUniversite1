<?php
    require_once 'Autoloader.php'; 
    Autoloader::register();
    $base= Database::connect();
    $requete=$base->query('SELECT Matricule FROM Etudiant ORDER BY Matricule DESC');
    while($donne = $requete ->fetch())
    {
        $mat=$donne['Matricule'];
        break;
    }
    echo $mat;
?>