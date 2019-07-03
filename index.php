<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Accueil</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="../Pages/Etudiant.css">
        <style> 
        div {
            width: 100px;
            height: 100px;
            background-color: green;
            position: relative;
            /*-webkit-animation-name: example; /* Safari 4.0 - 8.0 */
            /*-webkit-animation-duration: 3s; /* Safari 4.0 - 8.0 */
            /*-webkit-animation-iteration-count: infinite; Safari 4.0 - 8.0
            /* animation-name: example;
            animation-duration: 10s;
            animation-iteration-count: infinite; */
        }
            @-webkit-keyframes example {
            0%   {background-color:red; left:0px; top:0px;}
            25%  {background-color:yellow; left:200px; top:0px;}
            50%  {background-color:blue; left:200px; top:200px;}
            75%  {background-color:green; left:0px; top:200px;}
            100% {background-color:pink; left:0px; top:0px;}
        }
            @keyframes example {
            0%   {background-color:red; left:0px; top:0px;}
            25%  {background-color:yellow; left:200px; top:0px;}
            50%  {background-color:blue; left:200px; top:200px;}
            75%  {background-color:green; left:0px; top:200px;}
            100% {background-color:pink; left:0px; top:0px;}
        }
        body {
        background-image: url("Pages/img.png");
        background-repeat: repeat;
        }
        </style>
    </head>
    <body>
        <?php
            require_once 'Class/Autoloader.php'; 
            Autoloader::register();
            $etudiant = new Service_etudiant();
        ?>
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
                            <a class="nav-link" href="Pages/inscrire.php">Inscription</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Pages/batiment.php">Ajouter Batiment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Pages/chercher.php">Ajouter Chambre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Pages/boursier.php"></a>
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
    </body>
</html>