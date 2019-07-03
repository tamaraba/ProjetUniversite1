<?php
require_once 'Autoloader.php';
Autoloader::register();
    class NonBoursier extends Etudiant
    {
        private $Adresse;

        function __construct($Nom, $Prenom, $Email,$Telephone, $Date_naiss, $Adresse)
        {
            parent:: __construct($Nom, $Prenom, $Email,$Telephone, $Date_naiss);
            $this-> Adresse = $Adresse;
        }

        /**
         * Get the value of Adresse
         */ 
        public function getAdresse()
        {
                return $this->Adresse;
        }

        /**
         * Set the value of Adresse
         *
         * @return  self
         */ 
        public function setAdresse($Adresse)
        {
                $this->Adresse = $Adresse;

                return $this;
        }
    }
?>