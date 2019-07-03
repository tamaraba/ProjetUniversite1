<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <title>Chambre</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class=container>
                <a class="navbar-brand" href="#">Accueil</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <p></p>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link" href="inscrire.php">Inscription</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="batiment.php">Ajouter Batiment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="chambre.php">Ajouter Chambre</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <form action="" method="POST">
            <div class="container">
            <h1>Ajouter une Chambre</h1>
                <div class="row">
                    <div class="col-md-8">
                        Entrer le Numero de la Chambre
                        <input class="form-control" name="numb" type="number">
                    </div>
                    <div class="col-md-8">
                        Entrer le Nom de la Chambre
                        <input class="form-control" name="nom" type="text">
                    </div>
                    <div class="col-md-8">
                    <Select class="form-control" name="bat" >
                        <option value="0">Choisir Batiment</option>
                        <?php
                        require_once '../Class/Autoloader.php'; 
                        Autoloader::register();
                        $base= Database::connect();

                        $requete=$base->query("SELECT * FROM Batiment");
                            while($retour=$requete->fetch())
                            {
                                echo "<option value=".$retour['Id_batiment'].">".$retour['Nom_batiment']."</option>";
                            }
                        ?>
                        </div>
                    </Select><br>  
                    <div>
                    <button  class="btn btn-success" type="submit" name="ajout">Ajouter</button>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>
<?php
    require_once '../Class/Autoloader.php'; 
    Autoloader::register();
    $base= Database::connect();
        if(isset($_POST['ajout'])){
        $numero=$_POST['numb'];
        $Nom=$_POST['nom'];
        $bat=$_POST['bat'];

        $requete= $base -> prepare("INSERT INTO Chambre(Numero_chambre,Nom_chambre, Id_batiment) VALUES (?,?,?)");
        $requete->execute(array($numero,$Nom, $bat));

        // $etudiant = new Etudiant($Nom, $Prenom, $Email,$Telephone, $Date_naiss);
        // $service = new Service_etudiant();
        // $service -> add($etudiant);
        }
?>
    </body>
</html>