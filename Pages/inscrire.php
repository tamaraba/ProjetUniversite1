<!DOCTYPE html>
<html lang="en">
<style>
        input[type=text], select
        {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        }
        input[type=submit]:hover {
        background-color: #45a049;
        }
        div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 5px;
        }
    </style>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class=container>
                <a class="navbar-brand" href="../index.php">Accueil</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
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
                        <li class="nav-item">
                            <a class="nav-link" href="boursier.php"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Pages/boursiers.php"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Pages/statut.php"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="col-12"><marquee behavior="alternate"><h1>Bienvenue sur le formulaire d'inscription des Etudiants</h1></marquee><div>
        <form action="" method="POST">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        Entrer le Nom
                        <input class="form-control" required name="nom" type="text">
                    </div>
                    <div class="col-md-8">
                        Entrer le Prenom
                        <input class="form-control" required name="prenom" type="text">
                    </div>
                    <div class="col-md-8">
                        Adresse Email
                        <input class="form-control"required name="mail" type="email">
                    </div>
                    
                    <div class="col-md-8">
                        Entrer N°Téléphone
                        <input class="form-control"required name="numero" type="number" min=300000000>
                    </div>
                    <div class="col-md-8">
                        Entrer Date de Naissance
                        <input type="date" class="form-control" name="dateN" id="dateN">
                    </div>
                    
                    <div class="col-8">
                        <div class="row">
                        <div class="col-md-6">
                        <div class="form-check" id="boursier">
                        <input class="form-check-input" type="radio" name="etudiant" id="exampleRadios1" value="boursier">
                        <label class="form-check-label" for="exampleRadios1">
                            Boursier
                        </label>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-check" id="nonboursier">
                        <input class="form-check-input" type="radio" name="etudiant" id="exampleRadios2" value="nonboursier">
                        <label class="form-check-label" for="exampleRadios2">
                            Non_Boursier
                        </label>
                        </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                    <div class="form-checkbox" id="loge">
                    <input type="checkbox" id="coding" name="loge" value="loge">
                    <label for="coding">Logé</label>
                    </div>    
                </div>
                    <div  class="col-md-8" id="catbourse">
                    Catégorie bourse
                    <Select class="form-control" name="bourse" >
                    <option value="0">Choisir Type de Bourse</option>
                    <?php
                        require_once '../Class/Autoloader.php'; 
                        Autoloader::register();
                        $base= Database::connect();

                        $requete=$base->query("SELECT * FROM Categorie_bourse");
                            while($retour=$requete->fetch())
                            {
                                echo "<option value=".$retour['Id_bourse'].">".$retour['Type']." </option>";
                            }
                    ?>
                    </Select>
                    </div>
                    <div class="col-md-8"  id="adresse">
                        Entrer Adresse
                        <input class="form-control" name="adresse" type="text">
                    </div>
                    <div class="col-md-8"  id="chambre">
                        Chambre
                        <Select class="form-control" name="chambre" >
                        <option value="0">Choisir une Chambre</option>
                        <?php
                        require_once '../Class/Autoloader.php'; 
                        Autoloader::register();
                        $base= Database::connect();

                        $requete=$base->query("SELECT * FROM Chambre");
                            while($retour=$requete->fetch())
                            {
                                echo "<option value=".$retour['Id_chambre'].">".$retour['Numero_chambre']."".$retour['Nom_chambre']."</option>";
                            }
                        ?>
                    </Select>
                    </div>
                </div>
                <div class="row">
                    <button  class="btn btn-success" type="submit" name="ins">Inscrire</button>
                    </div>
            </div>
        </form>
        <?php
    require_once '../Class/Autoloader.php'; 
    Autoloader::register();
    $base= Database::connect();
        /*echo'<table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Adresse Email</th>
                    <th scope="col">N°Téléphone</th>
                    <th scope="col">Date de Naissance</th>
                </tr>
            </thead>';*/
        if(isset($_POST['ins'])){
        $Nom=$_POST['nom'];
        $Prenom=$_POST['prenom'];
        $Email=$_POST['mail'];
        $Telephone=$_POST['numero'];
        $Date_naiss=$_POST['dateN'];
        $Adresse= $_POST['adresse'];
        $bourse=$_POST['bourse'];
        $Id_chambre=$_POST['chambre'];
        $service = new Service_etudiant();

        // $nonboursier = new NonBoursier($Nom, $Prenom, $Email,$Telephone, $Date_naiss,$Adresse);
        // $service->add($nonboursier);

        //$service = new Service_etudiant();
        // $boursier = new Boursier($Nom, $Prenom, $Email,$Telephone, $Date_naiss,$bourse);
        // $service->add($boursier);

        // $requete= $base -> prepare("INSERT INTO Etudiant (Nom, Prenom, Email, Telephone, Date_naissance) VALUES (?,?,?,?,?)");
        // $requete -> execute(array($Nom, $Prenom, $Email, $Telephone, $Date_naiss));

        // $etudiant = new Boursier($Nom, $Prenom, $Email,$Telephone, $Date_naiss,1,1);

        $loge = new Loge($Nom, $Prenom, $Email,$Telephone, $Date_naiss,$bourse,$Id_chambre);
        $service->add($loge);
        $service->add($etudiant);
        }
?>
<script  src="../js/jquery.js"></script>
<script  src="../js/formulaire.js"></></script>

    </body>
</html>