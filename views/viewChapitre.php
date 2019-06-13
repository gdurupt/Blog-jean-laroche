<!--===============================================================================================-->
<section class="blog-inner-sec">
    <hr class="color">
<!--===============================================================================================--> 
<?php foreach ($articles as $article):?>
    <div class="container">
        <div class="blog-content">
            <div class="titrechapitre"><?= $article->titre() ?></div>
            <div class="bread-crome-sec ">
                <ol class="breadcrumb">          
                  <li class="admin breadcrumb-item">
                            By <a href="#">Jean Laroche</a>  
                    </li>
                    <li class="date breadcrumb-item active">Le <?= $article->dateCrea() ?></li>
                </ol>
                <div class="share-sec right">
                    <ul>
                        <li> Me suivre :</li>
                        <li>
                            <a href="" class="fa fa-facebook-official"></a>
                        </li>
                        <li>
                            <a href="" class="fa fa-instagram"></a>
                        </li>
                        <li>
                            <a href="" class="fa fa-twitter"></a>
                        </li>
                        <li>
                            <a href="" class="fa fa-pinterest"></a>
                        </li>
                        <li>
                            <a href="" class="fa fa-google-plus"></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="about ">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-12 text-center">
                        <?= $article->contenus() ?>
                    </div>
<?php endforeach ?>
<!--===============================================================================================--> 
                    <section class="comment-sec border border-bottom-0 border-left-0 border-right-0">
                        <h2>Commentaire</h2>
<!--===============================================================================================--> 
<?php foreach ($comments as $comment):?>
                        <div class="comment border border-top-0 border-left-0 border-right-0">
                            <h4><?= htmlspecialchars($comment->logins()) ?> Le <?= $comment->dateComment() ?></h4>
                            <div class="card-body d-flex justify-content-between w-100 p-3">
                                <div class="d-flex">
                                    <h6><?= htmlspecialchars($comment->comments()) ?> </h6>
                                </div>
                                <div class="d-flex">
<!--===============================================================================================--> 
                                    <form action="chapitre&id=<?= $_GET['id'] ?>" method="post">
                                        <input type="hidden" name="Post" value="ReportComment" />
                                        <div class="card-body">
                                            <input type="hidden" name="reportComment" value="<?= $comment->id() ?>" />
                                            <input type="submit" value="Signaler" class="btn btn-outline-danger btn-sm" onclick="return(confirm('Etes-vous sûr de vouloir signaler se commentaire?'));">
                                        </div>
                                    </form>
<!--===============================================================================================-->
                                </div>
                            </div>
                        </div>
<?php endforeach?>
<!--===============================================================================================-->
                        <h2>Ecrire un commentaire</h2>
                        <div class="form">
<!--===============================================================================================-->
                            <form action="chapitre&id=<?php echo $_GET['id'] ?>" method="post">
                                <input type="hidden" name="Post" value="NewComment" />
                                <div class="row">
                                    <div class="col-md-6">
                                        <input placeholder="Votre Nom" name="name" class="form-control" required>
                                    </div>
                                    <div class="col-md-12">
                                        <textarea class="form-control" name="message" placeholder="Votre Message"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-outline-success">Envoyer</button>
                                    </div>
                                </div>
                            </form>
<!--===============================================================================================-->
                        </div>
                    </section>
         
                </div>
            </div>
        </div>
    </div>
</section>
