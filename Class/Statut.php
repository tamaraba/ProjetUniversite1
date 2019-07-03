<?php
    class Statut
    {
        Private $Boursier;
        private $NonBoursier;
        private $Loge;

        public function __construct($Boursier, $NonBoursier, $Loge)
        {
            $this->Boursier=$Boursier;
            $this->NonBoursier=$NonBoursier;
            $this->Loge=$Loge;
        }

        /**
         * Get the value of Boursier
         */ 
        public function getBoursier()
        {
                return $this->Boursier;
        }

        /**
         * Set the value of Boursier
         *
         * @return  self
         */ 
        public function setBoursier($Boursier)
        {
                $this->Boursier = $Boursier;

                return $this;
        }

        /**
         * Get the value of NonBoursier
         */ 
        public function getNonBoursier()
        {
                return $this->NonBoursier;
        }

        /**
         * Set the value of NonBoursier
         *
         * @return  self
         */ 
        public function setNonBoursier($NonBoursier)
        {
                $this->NonBoursier = $NonBoursier;

                return $this;
        }
    }
?>