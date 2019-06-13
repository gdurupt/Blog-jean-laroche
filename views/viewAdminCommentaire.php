<section id="page-top">
    <div id="content" class="container-fluid" style="margin-top: 100px;">
        <!-------------------------------------------------------------------------------------------->
        <div class="row">
            <!-------------------------------------------------------------------------------------------->
            <?php foreach ($articles as $article):?>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold"><?= $article->titre() ?></h6>
                        </div>
                        <form action="admin&page=Commentaire&id=<?= $article->id() ?>" method="get">
                            <div class="card-body d-flex flex-row justify-content-center">
                                <input type="submit" value="Choisir" class="btn btn-success btn-sm">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
            <!-------------------------------------------------------------------------------------------->
        </div>
        <!-------------------------------------------------------------------------------------------->
       <?php foreach ($comments as $comment):
            if(isset($_GET['id'])){
                if($_GET['id'] == $comment->page() AND $comment->report() == 1){
?>
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card shadow mb-4">
                    <!-------------------------------------------------------------------------------------------->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-danger"> Mr/Mme <?= htmlspecialchars($comment->logins()) ?> Le <?= $comment->dateComment() ?></h6>
                    </div>
                    <!-------------------------------------------------------------------------------------------->
                    <div class="card-header d-flex flex-row align-items-center justify-content-between flex-wrap">
                        <p class="m-0"><?= htmlspecialchars($comment->comments()) ?> </p>

                        <div class=" d-flex flex-row-reverse">
                            <!-------------------------------------------------------------------------------------------->
                            <form action="admin&page=Commentaire&id=<?= $comment->page() ?>" method="post">
                                <div class="card-body d-flex flex-row justify-content-center">
                                    <input type="hidden" name="Post" value="DeleteComment" />
                                    <input type="hidden" name="deleteComment" value="<?= $comment->id() ?>" />
                                    <input type="submit" value="Supprimer" class="btn btn-danger btn-sm" onclick="return(confirm('Etes-vous sûr de vouloir supprimer se commentaire?'));">
                                </div>
                            </form>
                            <!-------------------------------------------------------------------------------------------->
                            <form action="admin&page=Commentaire&id=<?= $comment->page() ?>" method="post">
                                <div class="card-body d-flex flex-row justify-content-center">
                                    <input type="hidden" name="Post" value="ManageComment" />
                                    <input type="hidden" name="ManageComment" value="<?= $comment->id() ?>" />
                                    <input type="submit" value="Validé" class="btn btn-success btn-sm">
                                </div>
                            </form>
                            <!-------------------------------------------------------------------------------------------->
                        </div>
                    </div>
                    <!-------------------------------------------------------------------------------------------->
                </div>
            </div>
        </div>
        <?php 
                }else{
                } 
            }
endforeach
?>        
<!-------------------------------------------------------------------------------------------->       
<!-------------------------------------------------------------------------------------------->       
        <?php foreach ($comments as $comment):
            if(isset($_GET['id'])){
                if($_GET['id'] == $comment->page() AND $comment->report() == 0){
?>
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card shadow mb-4">
                    <!-------------------------------------------------------------------------------------------->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold"> Mr/Mme <?= htmlspecialchars($comment->logins()) ?> Le <?= $comment->dateComment() ?></h6>
                    </div>
                    <!-------------------------------------------------------------------------------------------->
                    <div class="card-header d-flex flex-row align-items-center justify-content-between flex-wrap">
                        <p class="m-0"><?= htmlspecialchars($comment->comments()) ?> </p>

                        <div class=" d-flex flex-row-reverse">
                            <!-------------------------------------------------------------------------------------------->
                            <form action="admin&page=Commentaire&id=<?= $comment->page() ?>" method="post">
                                <div class="card-body d-flex flex-row justify-content-center">
                                    <input type="hidden" name="Post" value="DeleteComment" />
                                    <input type="hidden" name="deleteComment" value="<?= $comment->id() ?>" />
                                    <input type="submit" value="Supprimer" class="btn btn-danger btn-sm" onclick="return(confirm('Etes-vous sûr de vouloir supprimer se commentaire?'));">
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-------------------------------------------------------------------------------------------->
                </div>
            </div>
        </div>
        <?php 
                }else{
                } 
            }
endforeach
?>
        <!-------------------------------------------------------------------------------------------->
    </div>
</section>