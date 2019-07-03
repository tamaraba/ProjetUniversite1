<?php
require_once 'Autoloader.php'; 
Autoloader::register();
    class Service_etudiant{
        public function recup()
        {
            $base=Database::connect();
            $requete=$base->query('SELECT Matricule FROM Etudiant ORDER BY Matricule DESC');
            while($donne=$requete ->fetch())
            {
            $mat=$donne['Matricule'];
            break;
            }
            return $mat;
        }
        public function add(Etudiant $etudiant) //Permet d'ajouter un etudiant
        {
            $base=Database::connect();
            $Nom=$etudiant->getNom();
            $Prenom=$etudiant->getPrenom();
            $Email=$etudiant->getEmail();
            $Telephone=$etudiant->getTelephone();
            $Date_naiss=$etudiant->getDate_naiss();
            
            $requete=$base->prepare("INSERT INTO Etudiant(Nom,Prenom,Email,Telephone,Date_naissance)VALUES(?,?,?,?,?)");
            $a=$requete->execute(array($Nom, $Prenom, $Email, $Telephone, $Date_naiss));
            // $requete=$base->prepare("INSERT INTO Non_boursier(Matricule, Adresse)VALUE(?,?)");
            // $a=$requete->execute(array($matricule, $etudiant->getAdresse()));

            $matricule=$this->recup();
            $requete=$base->prepare("INSERT INTO Boursier(Matricule, Id_bourse)VALUE(?,?)");
            $a=$requete->execute(array($matricule, $etudiant->getId_bourse()));
            $requete=$base->prepare("INSERT INTO Loge(Matricule,Id_chambre)VALUE(?,?)");
            $a=$requete->execute(array($matricule, $etudiant->getChambre()));
        }
        public function find(Etudiant $etudiant) //permet de retrouver un etudiant.
        {
            $base=Database::connect();
            $Nom=$etudiant->getNom();
            $Prenom=$etudiant->getPrenom();
            $Email=$etudiant->getEmail();
            $Telephone=$etudiant->getTelephone();
            $Date_naiss=$etudiant->getDate_naiss();

            $liste= mysql_query("SELECT * FROM Etudiant ");
            $li= mysql_fetch_array(iste);
        }
        public function findAll(Etudiant $etudiant) //Permet de retrouver tous les etudiants.
        {
            $base=Database::connect();
            $Nom=$etudiant->getNom();
            $Prenom=$etudiant->getPrenom();
            $Email=$etudiant->getEmail();
            $Telephone=$etudiant->getTelephone();
            $Date_naiss=$etudiant->getDate_naiss();
        }
        public function findBoursier(Boursier $boursier) //Permet de retrouver un boursier.
        {
            $base=Database::connect();
            $Nom=$boursier->getNom();
            $Prenom=$boursier->getPrenom();
            $Email=$boursier->getEmail();
            $Telephone=$boursier->getTelephone(); 
            $Date_naiss=$boursier->getDate_naiss();
            $Id_boursier=$boursier->getId_boursier();
            $Id_bourse=$boursier->getId_bourse();
        }
        public function findAllBoursier() //Permet de retrouver tous les boursiers.
        {
            $base=Database::connect();
            $Nom=$boursier->getNom();
            $Prenom=$boursier->getPrenom();
            $Email=$boursier->getEmail();
            $Telephone=$boursier->getTelephone(); 
            $Date_naiss=$boursier->getDate_naiss();
            $Id_boursier=$boursier->getId_boursier();
            $Id_bourse=$boursier->getId_bourse();
        }
        public function checkStatut(Statut $statut) //Permet de savoir si un etudiant est boursier, ,non boursier ou logé.
        {
            $base=Database::connect();
            $Boursier=$statut->getBoursier();
            $NonBoursier=$statut->getNonBoursier();
            $Loge=$statut->getLoge();
        }
    }
?>