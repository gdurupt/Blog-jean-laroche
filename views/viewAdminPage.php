<section id="page-top" class="">>
    <div id="content" class="container-fluid" style="margin-top: 100px;">
<!--------------------------------------------------------------------------------------------> 
            <div class="row">
<!--------------------------------------------------------------------------------------------> 
                <?php foreach ($articles as $article):?>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between flex-wrap">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold"><?= $article->titre() ?></h6>
                            </div>
<!-------------------------------------------------------------------------------------------->   
                            <div class="d-flex flex-row">
<!--------------------------------------------------------------------------------------------> 
                                <form action="admin&page=Page&id=<?= $article->id() ?>" method="post">
                                    <div class="card-body">
                                        <input type="hidden" name="Post" value="DeleteArticle" />
                                        <input type="hidden" name="deleteArticle" value="<?= $article->id() ?>" />
                                        <input type="submit" value="Supprimer" class="btn btn btn-danger btn-sm" onclick="return(confirm('Etes-vous sûr de vouloir supprimer cette article ?'));">
                                    </div>
                                </form>
<!-------------------------------------------------------------------------------------------->           
                                <form action="admin&page=Page&id=<?= $article->id() ?>" method="get">
                                    <div class="card-body d-flex flex-row justify-content-center">
                                        <input type="submit" value="Choisir" class="btn btn-success btn-sm">
                                    </div>
                                </form>
<!-------------------------------------------------------------------------------------------->              
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
<!--------------------------------------------------------------------------------------------> 
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h3 class="m-0 font-weight-bold" style="font-size:18px;">Nouvelle article</h3>
                            </div>
                            <div class="d-flex flex-row">
                                <form action="admin&page=Page&id=new" method="get">
                                    <div class="card-body d-flex flex-row justify-content-center">
                                        <input type="submit" value="Choisir" class="btn btn-success btn-sm">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
<!--------------------------------------------------------------------------------------------> 
            </div>
<!-------------------------------------------------------------------------------------------->         
            <?php foreach ($articles as $article):
            if(isset($_GET['id'])){
                if($_GET['id'] == $article->id()){
?>
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold"></h6>
                        </div>
<!--------------------------------------------------------------------------------------------> 
                        <form action="admin&page=Page&id=<?= $article->id() ?>" method="post" class="formTinymce">
                            <input type="hidden" name="Post" value="UpdateArticle" />
                            <div class="card-body d-flex flex-col align-items-center justify-content-center">
                                <textarea name="titre" rows="1" cols="15" class="text-center"><?= $article->titre() ?></textarea>
                            </div>
                            <div class="card-body d-flex flex-col align-items-center justify-content-center" class="texte">
                                <textarea name="article" rows="8" cols="150"><?= $article->contenus() ?></textarea>
                            </div>
                            <div class="card-body d-flex justify-content-center">
                                <input type="submit" value="Modifier" class="btn btn-success btn-sm">
                            </div>
                        </form>
<!--------------------------------------------------------------------------------------------> 
                    </div>
                </div>
            </div>
            <?php 
                }
            }
         endforeach;
//--------------------------------------------------------------------------------------------
           if(isset($_GET['id'])){     
             if($_GET['id'] == "new"){
?>
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold">Nouveau chapitre</h6>
                        </div>
<!--------------------------------------------------------------------------------------------> 
                        <form action="admin&page=Page" method="post" class="w-100 p-3 formTinymce">
                            <input type="hidden" name="Post" value="New" />
                            <div class="card-body d-flex flex-col align-items-center justify-content-center">
                                <textarea name="titre" rows="1" cols="15" class="text-center"></textarea>
                            </div>
                            <div class="card-body d-flex flex-col align-items-center justify-content-center">
                                <textarea name="article" rows="8" cols="150"></textarea>
                            </div>
                            <div class="card-body d-flex justify-content-center">
                                <input type="submit" value="Modifier" class="btn btn-success btn-sm">
                            </div>
                        </form>
<!--------------------------------------------------------------------------------------------> 
                    </div>
                </div>
            </div>
            <?php 
                }      
           }
?>
<!--------------------------------------------------------------------------------------------> 
    </div>
<!--------------------------------------------------------------------------------------------> 
    <script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea'
        });

    </script>
<!--------------------------------------------------------------------------------------------> 
</section>
