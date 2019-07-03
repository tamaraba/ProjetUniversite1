<?php
    class Loge extends Boursier
    {
      
        private $Id_Chambre;

        function __construct($Nom, $Prenom, $Email,$Telephone,$Date_naiss, $Id_bourse,  $Id_Chambre)
        {
            parent:: __construct($Nom, $Prenom, $Email, $Telephone, $Date_naiss, $Id_bourse);
            $this-> Id_Chambre = $Id_Chambre;
        }
        public function getChambre()
        {
                return $this->Id_Chambre;
        }

        /**
         * Set the value of Adresse
         *
         * @return  self
         */ 
        public function setChambre($Id_Chambre)
        {
                $this->Id_Chambre = $Id_Chambre;

                return $this;
        }
    }
?>