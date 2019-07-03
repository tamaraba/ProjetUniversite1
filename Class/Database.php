<?php
    class Database
    {
        private static $dbHost = "localhost";
        private static $dbName = "Universite";
        private static $dbUser = "root";
        private static $dbUserPassword = "assthioune01";

        private static $connexion = null;

        public static function connect()
        {

            try
            {
                self::$connexion = new PDO("mysql:host=" .self::$dbHost.";dbname=".self::$dbName,
                self::$dbUser,self::$dbUserPassword);
            }
            catch(PDOException $e)
            {
                die($e->getMessage());
            }
            return self::$connexion;
        }
        public static function disconnect()
        {
            self::$connexion= null;
        }
    }
    Database::connect();
                //VERIFICATION DE LA CONNEXION MYSQL//
   /* $results= $database->query('SELECT Prenom FROM Etudiant');
    while($row = $results -> fetch())
    {
        echo $row ['Prenom'].'<br>';
    }*/
?>