<?php
    abstract class Etudiant
    {
        protected $Nom;
        protected $Prenom;
        protected $Telephone;
        protected $Email;
        protected $Date_naiss;

        public function __construct($Nom, $Prenom, $Email, $Telephone, $Date_naiss)
        {
        $this->setNom($Nom);
        $this->setPrenom($Prenom);
        $this->setTelephone($Telephone);
        $this->setEmail($Email);
        $this->setDate_naiss($Date_naiss);
        }

        /**
         * Get the value of Nom
         */ 
        public function getNom()
        {
                return $this->Nom;
        }

        /**
         * Set the value of Nom
         *
         * @return  self
         */ 
        public function setNom($Nom)
        {
                $this->Nom = $Nom;

                return $this;
        }

        /**
         * Get the value of Prenom
         */ 
        public function getPrenom()
        {
                return $this->Prenom;
        }

        /**
         * Set the value of Prenom
         *
         * @return  self
         */ 
        public function setPrenom($Prenom)
        {
                $this->Prenom = $Prenom;

                return $this;
        }

        /**
         * Get the value of Telephone
         */ 
        public function getTelephone()
        {
                return $this->Telephone;
        }

        /**
         * Set the value of Telephone
         *
         * @return  self
         */ 
        public function setTelephone($Telephone)
        {
                $this->Telephone = $Telephone;

                return $this;
        }

        /**
         * Get the value of Email
         */ 
        public function getEmail()
        {
                return $this->Email;
        }

        /**
         * Set the value of Email
         *
         * @return  self
         */ 
        public function setEmail($Email)
        {
                $this->Email = $Email;

                return $this;
        }

        /**
         * Get the value of Date_naiss
         */ 
        public function getDate_naiss()
        {
                return $this->Date_naiss;
        }

        /**
         * Set the value of Date_naiss
         *
         * @return  self
         */ 
        public function setDate_naiss($Date_naiss)
        {
                $this->Date_naiss = $Date_naiss;

                return $this;
        }
    }
?>