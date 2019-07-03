<?php
require 'Autoloader.php';
Autoloader::register();
    class Categorie_bourse
    {
        private $Id_bourse;
        private $Type;
        private $Montant;

        public function __construct($Id_bourse, $Type, $Montant) 
        {
            $this->Id_bourse = $Id_bourse;
            $this->Type = $Type;
            $this->Montant = $Montant;
        }

        /**
         * Get the value of Id_bourse
         */ 
        public function getId_bourse()
        {
                return $this->Id_bourse;
        }

        /**
         * Set the value of Id_bourse
         *
         * @return  self
         */ 
        public function setId_bourse($Id_bourse)
        {
                $this->Id_bourse = $Id_bourse;

                return $this;
        }

        /**
         * Get the value of Type
         */ 
        public function getType()
        {
                return $this->Type;
        }

        /**
         * Set the value of Type
         *
         * @return  self
         */ 
        public function setType($Type)
        {
                $this->Type = $Type;

                return $this;
        }

        /**
         * Get the value of Montant
         */ 
        public function getMontant()
        {
                return $this->Montant;
        }

        /**
         * Set the value of Montant
         *
         * @return  self
         */ 
        public function setMontant($Montant)
        {
                $this->Montant = $Montant;

                return $this;
        }
    }
?>