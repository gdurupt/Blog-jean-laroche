<section class="my-blog-sec">
    <hr class="color">
<!--===============================================================================================-->  
    <div class="container">
        <div class="blog-inner">
            <h1>Un Billet simple pour l'alaska</h1>
            <h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five</h5>
            <div class="row">
<!--===============================================================================================--> 
<?php foreach ($articles as $article):?>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="artical">
                        <div class="h3">
                            <?= $article->titre() ?>
                        </div>
                        <div class="h5"><?= $article->contenus() ?>...</div>
                        <a href="chapitre&amp;id=<?= $article->id() ?>">Continuer a lire</a>
                    </div>
                </div>
<?php endforeach ?>
<!--===============================================================================================-->  
            </div>
        </div>
    </div>
<!--===============================================================================================--> 
    <hr class="color">
</section>
