
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">

                <?php foreach($articlesList as $articleId => $articleObject): ?>
                    <div class="card mb-4">
                        <div class="card-header"><a href="index.php?page=article&id=<?= $articleId ?>"><?= $articleObject->title ?></a></div>
                        <div class="card-body">
                            <p class="card-text"><?= $articleObject->content ?></p>
                            <div class="text-muted">Meta info</div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <nav aria-label="Page navigation" class="mb-4">
                    <ul class="pagination justify-content-between">
                        <li class="page-item"><a class="page-link" href="#">Précédent</a></li>
                        <li class="page-item"><a class="page-link" href="#">Suivant</a></li>
                    </ul>
                </nav>
            </div>

            <div class="col-lg-4 col-md-12">
                <form class="form mb-4">
                    <div class="form-row">
                        <div class="col-7">
                            <label for="search" class="sr-only">Rechercher</label>
                            <input type="text" class="form-control mr-2" id="search">
                        </div>
                        <div class="col-5">
                            <button type="submit" class="btn btn-primary form-control">Rechercher</button>
                        </div>
                    </div>
                </form>
                <!-- emmet : (div.card.mb-4>div.card-header+ul.list-group.list-group-flush>li.list-group-item*4>a)*2 -->
                <div class="card mb-4">
                    <div class="card-header">Catégories</div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="category.php">Teamback</a></li>
                        <li class="list-group-item"><a href="category.php">Teamfront</a></li>
                        <li class="list-group-item"><a href="category.php">Collaboration</a></li>
                        <li class="list-group-item"><a href="category.php">Ma vie de dev</a></li>
                    </ul>
                </div>
                <div class="card mb-4">
                    <div class="card-header">Auteurs</div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="author.php">Maxime</a></li>
                        <li class="list-group-item"><a href="author.php">Dario</a></li>
                        <li class="list-group-item"><a href="author.php">Lucie</a></li>
                        <li class="list-group-item"><a href="author.php">Anthony</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>