<?php
require 'Autoloader.php';
Autoloader::register();
    class Batiment
    {
        private $Id_batiment;
        private $Nom_batiment;

        function __construct($Id_batiment, $Nom_batiment)
        {
            $this->Id_batiment = $Id_batiment;
            $this->Nom_batiment = $Nom_batiment;
        }
        /**
         * Get the value of Id_batiment
         */ 
        public function getId_batiment()
        {
                return $this->Id_batiment;
        }
        /**
         * Set the value of Id_batiment
         *
         * @return  self
         */ 
        public function setId_batiment($Id_batiment)
        {
                $this->Id_batiment = $Id_batiment;
                return $this;
        }
        /**
         * Get the value of Nom_batiment
         */ 
        public function getNom_batiment()
        {
                return $this->Nom_batiment;
        }
        /**
         * Set the value of Nom_batiment
         *
         * @return  self
         */ 
        public function setNom_batiment($Nom_batiment)
        {
                $this->Nom_batiment = $Nom_batiment;
                return $this;
        }
    }
?>