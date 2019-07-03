<?php
include 'Etudiant.php';
    class Boursier extends Etudiant
    {
            private $Id_bourse;

            public function __construct($Nom, $Prenom, $Email, $Telephone, $Date_naiss,$Id_bourse)
            {
                parent:: __construct($Nom, $Prenom, $Email, $Telephone, $Date_naiss);
                $this->Id_bourse=$Id_bourse;
            }
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

    }
?>