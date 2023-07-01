<?php

// index.php est le fichier point d'entrée unique de notre site
// => quelle que soit la page demandée, on passe toujours et 
// uniquement par index.php
// Avantage, on factorise une partie du code qui est nécessaire à 
// toutes les pages, par exemple l'inclusion de la classe Article 
// ou l'inclusion des templates header et footer

// ===========================================================
// Inclusion des fichiers nécessaires
// ===========================================================

require __DIR__ . '/inc/classes/Article.php';
require __DIR__ . '/inc/classes/Author.php';
require __DIR__ . '/inc/classes/Category.php';

// Récupération du tableau Php contenant la liste
// d'objets Article
require __DIR__ . '/inc/data.php';


    $servername = 'localhost';
    $username = 'explorateur';
    $password = 'Ereul9Aeng';
    $bdd = "oblog";
    
    //On établit la connexion
    

    
    //On essaie de se connecter
    try{
        $conn = new PDO("mysql:host=$servername;dbname=$bdd", $username, $password);
        //On définit le mode d'erreur de PDO sur Exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo 'Connexion réussie';
     
    }
    
    /*On capture les exceptions si une exception est lancée et on affiche
     *les informations relatives à celle-ci*/
    catch(PDOException $e){
      echo "Erreur : " . $e->getMessage();
      
    }

// ===========================================================
// Récupération des données nécessaires à toutes les pages
// du site (pour le moment on ne récupère que la page à
// afficher, mais d'autres données viendront se rajouter
// plus tard)
// ===========================================================

// -----------------------------------------------------
// Récupération de la page à afficher
// -----------------------------------------------------

// Par défaut, on considère qu'on affichera la page d'accueil
$pageToDisplay = 'home';
// Mais si un paramètre 'page' est présent dans l'URL, c'est
// qu'on veut afficher une autre page
if (isset($_GET['page']) && $_GET['page'] !== '') {
   $pageToDisplay = $_GET['page'];
}

// ===========================================================
// Chaque page nécessite une préparation différente car elle
// affiche des informations différentes
// ===========================================================

// ------------------
// Page d'Accueil
// ------------------
if ($pageToDisplay === 'home') {
    
    $articlesList = $dataArticlesList;
    $categorieList = $dataCategoriesList; 
    $authorList = $dataAuthorsList;

   
}
// ------------------
// Page Article
// ------------------
else if ($pageToDisplay === 'article') {
    
    $articlesList = $dataArticlesList;
    $categorieList = $dataCategoriesList; 
    $authorList = $dataAuthorsList;
    // On souhaite récupérer uniquement les données de l'article
    // à afficher
    $articleId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    // filter_input renvoie null si la paramètre n'existe pas
    // et false si le filtre de validation échoue
    // On s'assure donc de ne pas tomber ni sur false, ni sur null
    if ($articleId !== false && $articleId !== null) {
        $articleToDisplay = $articlesList[$articleId];
    } 
    // Si l'id n'est pas fourni, on affiche la page d'accueil
    // plutôt que d'avoir un message d'erreur
    else {
        $pageToDisplay = 'home';
    }
}
// ------------------
// Page Auteur
// ------------------
else if ($pageToDisplay === 'author') {

   
    $categorieList = $dataCategoriesList; 
    $authorList = $dataAuthorsList;

    $authorId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    // filter_input renvoie null si la paramètre n'existe pas
    // et false si le filtre de validation échoue
    // On s'assure donc de ne pas tomber ni sur false, ni sur null
    if ($authorId !== false && $authorId !== null) {
        $authorToDisplay = $authorList[$authorId];
    } 
    // Si l'id n'est pas fourni, on affiche la page d'accueil
    // plutôt que d'avoir un message d'erreur
    else {
        $pageToDisplay = 'home';
    }
    
}
// ------------------
// Page Catégorie
// ------------------


else if ($pageToDisplay === 'category') {
    
    $categorieList = $dataCategoriesList; 
    $authorList = $dataAuthorsList;

    
    $categorieId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    // filter_input renvoie null si la paramètre n'existe pas
    // et false si le filtre de validation échoue
    // On s'assure donc de ne pas tomber ni sur false, ni sur null
    if ($categorieId !== false && $categorieId !== null) {
        $categorieToDisplay = $categorieList[$categorieId];
       // var_dump ( $categorieToDisplay[$categorieId]);
        
       
    } 
    // Si l'id n'est pas fourni, on affiche la page d'accueil
    // plutôt que d'avoir un message d'erreur
    else {
        $pageToDisplay = 'home';
    }
}

// ===========================================================
// Affichage
// ===========================================================

// Rappel : les variables définies dans index.php, et dans les 
// fichiers inclus par index.php (inc/data.php par exemple)
// seront accessibles dans le code des templates inclus
// ci-dessous

require __DIR__.'/inc/templates/header.tpl.php';
require __DIR__.'/inc/templates/' . $pageToDisplay . '.tpl.php';
require __DIR__.'/inc/templates/aside.tpl.php';
require __DIR__.'/inc/templates/footer.tpl.php';
