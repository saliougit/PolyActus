<?php

require_once 'ConnexionManager.php';

    class CategorieDao{

        private $bdd;
    
        
        public function __construct(){
            $this->bdd = ConnexionManager::getInstance();
        }

        public function getAllCategories(){
            $data = $this->bdd->query('SELECT * FROM Categorie');
            $reponse = $data->fetchAll(PDO::FETCH_CLASS, 'Categorie');
            return $reponse;
        }
    }
