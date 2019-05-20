<section id="page-top" class="">
    <div id="content" class="container-fluid" style="margin-top: 100px;">
<!--===============================================================================================-->        
        <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold">Bienvenue cher administrateur</h6>
                        </div>
                    </div>
                </div>
            </div>
<!--===============================================================================================--> 
<?php foreach ($countComment as $count):?>
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <?php
                            if($count->nbreport() > 0){
?>
                                <h6 class="m-0 font-weight-bold text-danger">Vous avez <?= $count->nbreport() ?> commentaire signalés </h6>
<?php                       
                     }else{   
?>
                                 <h6 class="m-0 font-weight-bold text-success">Vous avez aucun commentaire signalés </h6>
<?php                   
                        }
?>
                            
                        </div>
                    </div>
                </div>
            </div>
<!--===============================================================================================-->   
<?php endforeach ?>
    </div>
</section>