<?php
require 'Autoloader.php';
Autoloader::register();
    class Chambre
    {
        private $Id_chambre;
        private $Id_batiment;

        function __construct($Id_chambre, $Id_batiment)
        {
            $this->Id_chambre = $Id_chambre;
            $this->Id_batiment = $Id_batiment;
        }

        /**
         * Get the value of Id_chambre
         */ 
        public function getId_chambre()
        {
                return $this->Id_chambre;
        }

        /**
         * Set the value of Id_chambre
         *
         * @return  self
         */ 
        public function setId_chambre($Id_chambre)
        {
                $this->Id_chambre = $Id_chambre;

                return $this;
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
    }
?>