<?php

    require_once 'modele/dao/ArticleDao.php';
    require_once 'modele/dao/CategorieDao.php';
    require_once 'modele/domaine/Article.php';
    require_once 'modele/domaine/Categorie.php';

    class Controller{
        function __construct(){}

        public function showAccueil(){
            $articleDao = new ArticleDao();
            $categorieDao = new CategorieDao();

            $articles = $articleDao->getAllArticles();
            $categories = $categorieDao->getAllCategories();

            require_once 'vue/inc/accueil.php';
        }

        public function showArticlesByCategory($id){
            $articleDao = new ArticleDao();
            $categorieDao = new CategorieDao();

            $articles = $articleDao->getArticlesByCategory($id);
            $categories = $categorieDao->getAllCategories();
            require_once 'vue/inc/articleByCategorie.php';
        }

        public function showErrorPage(){
            require_once 'vue/inc/error.php';
        }

    }

