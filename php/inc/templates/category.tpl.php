  <!-- Mon container (avec une max-width) dans lequel mon contenu va être placé: https://getbootstrap.com/docs/4.1/layout/overview/#containers -->
  <div class="container">
    <!-- Je crée une nouvelle ligne dans ma grille virtuelle: https://getbootstrap.com/docs/4.1/layout/grid/-->
    <div class="row">

      <!-- Par défaut (= sur mobile) mon element <main> prend toutes les colonnes (=12)
        MAIS au dela d'une certaine taille, il n'en prendra plus que 9
        https://getbootstrap.com/docs/4.1/layout/grid/#grid-options -->
      <main class="col-lg-9">

        <h1>Page <?= $categorieToDisplay->title ?> </h1>


        <?php $articlesList = $dataArticlesList;
        $articles = $categorieToDisplay->articles($articlesList); ?>

        <?php foreach ($articles as $key => $articleObject) : ?>
          <article class="card">
            <div class="card-body">
              <h2 class="card-title"><a href="index.php?page=article&id=<?= $key ?>"><?= $articleObject->title ?></a></h2>
              <p class="infos">
                Posté par <a href="#" class="card-link"><?= $articleObject->author ?></a> le <time datetime="2017-07-13"><?= $articleObject->date ?> </time><?php $articleObject->date ?></time> dans <a href="#" class="card-link"><?= $articleObject->category ?></a>
              </p>
              <p class="card-text"><?= $articleObject->content ?></p>
            </div>
          </article>
        <?php endforeach; ?>
      </main>