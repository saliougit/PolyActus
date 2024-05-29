<?php 

   
    class ConnexionManager{

        private static $instance = null;
        private $connection;

        // Constructeur privé pour empêcher l'instanciation directe de la classe
        private function __construct() {
            try {
                $this->connection = new PDO("mysql:host=localhost;dbname=mglsi_news", 'mglsi_user','P@ss@ger@123');
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo 'Connection failed: ' . $e->getMessage();
            }
        }

        // Méthode statique pour obtenir l'instance unique de la connexion
        public static function getInstance() {
            if (self::$instance === null) {
                self::$instance = (new ConnexionManager())->connection;
            }
            return self::$instance;
        }

    }

