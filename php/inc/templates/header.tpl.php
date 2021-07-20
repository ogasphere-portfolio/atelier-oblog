<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>O'Blog</title>

    <!-- On va chercher bootstrap via leur CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Bonus : on inclut une librairie CSS permettant d'afficher des icônes :  -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>
    <!-- On utilise le composant navbar de la doc Bootstrap -->
    <nav class="navbar navbar-expand-lg navbar-expand-md navbar-light bg-light">
        <a class="navbar-brand" href="index.php">A la dérive</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Ici on ajoute la classe justify-content-end pour aligner les éléments de menu sur la droite -->
        <!-- On pense aussi à retirer l'élément de l'exemple "disabled" -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav ">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Teamback <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="category.php">Teamfront</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="category.php">Collaboration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="category.php">Ma vie de dev</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Utilisation d'un container fluid pour occuper tout l'espace horizontal -->
    <!-- Ajout de la class text-center pour centrer le texte -->
    <div class="container-fluid text-center p-4">
        <h1>A la dérive</h1>
    </div>
    <div class="container-fluid text-center pb-4">
        Un blog collaboratif de développeurs web dérivant délibérément au milieu de l'espace
    </div>