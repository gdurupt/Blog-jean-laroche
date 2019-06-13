<!DOCTYPE html>
<html lang="fr">
<!--===============================================================================================-->     
<!--==============================         head        ==========================================-->    
<!--===============================================================================================--> 
<head>
    <meta charset="UTF-8">
    <title><?php echo $_GET['url'] ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.min.css">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&family=Old+Standard+TT" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="public/jquery/jQuery.lightninBox.css">
    
    <link rel="stylesheet" href="public/CSS/aos.css">
    
    <link rel="stylesheet" type="text/css" href="public/CSS/style.css">

<?php  
//--------------------------------------------------------------------------------------------     
//--------------------------------         Head Admin        ---------------------------------    
//--------------------------------------------------------------------------------------------       
?>
    <link rel="icon" type="image/png" href="public/image/images_login/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="public/CSS/animate_login.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="public/CSS/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="public/CSS/util_login.css">
    <!--===============================================================================================-->   
    <link rel="stylesheet" type="text/css" href="public/CSS/main_login.css">
    <!--===============================================================================================-->        
</head>

<body>
<!--===============================================================================================-->     
<!--==============================         header        ==========================================-->    
<!--===============================================================================================-->  
    <header class="d-flex flex-column flex-md-row align-items-center">
        <div class="container">
            <a href="Accueil" class="navbar-brand">
                Jean Laroche
            </a>
            <nav class="navbar navbar-expand-lg navbar-light right">
                <div class="main-navbar right">
                    <ul class="navbar-nav mr-auto">
<!--===============================================================================================-->
                        <li class="nav-item active">
<?php   
    if(isset($_GET['url']) AND $_GET['url'] == 'Admin'){
?>          <a class="nav-link" href="Admin">Accueil admin</a><?php       
    }else{
?>          <a class="nav-link" href="Accueil">Accueil</a><?php
    }
?>
                        </li>
<!--===============================================================================================-->                       
                        <li class="nav-item">
<?php   
    if(isset($_GET['url']) AND $_GET['url'] == 'Admin'){
?>          <a class="nav-link" href="Admin&page=Page">Page</a><?php
        
    }else{
?>          <a class="nav-link" href="Auteur">Auteur</a><?php
    }    
?>
                        </li>
<!--===============================================================================================-->
                        <li class="nav-item">
<?php   
    if(isset($_GET['url']) AND $_GET['url'] == 'Admin'){
?>          <a class="nav-link" href="Admin&page=Commentaire">Commentaire</a><?php        
    }else{
?>          <a class="nav-link" href="Livre">Un billet simple pour l'alaska</a><?php
    }   
?>
                        </li>
<!--===============================================================================================-->                     
                        <li class="nav-item">
<?php   
    if(isset($_GET['url']) AND $_GET['url'] == 'Admin'){
?>          <a class="nav-link"></a><?php       
    }else{
?>          <a class="nav-link" href="Contact">Contact</a><?php
    }    
?>
                        </li>
<!--===============================================================================================-->                        
                    </ul>
                </div>
                <button class="navbar-toggler right" type="button" data-toggle="collapse">
                    <span class="navbar-toggler-icon fa fa-bars">

                    </span>
                </button>
            </nav>
        </div>
    </header>
<!--===============================================================================================-->     
<!--==============================         Donnée        ==========================================-->    
<!--===============================================================================================-->   
<?php echo $content ?>
<!--===============================================================================================-->     
<!--==============================         Footer       ==========================================-->    
<!--===============================================================================================--> 
    <footer>
        <div class="container">
            <div class="menu-sec">
                <ul>
                    <li>
                        <a href="Accueil">Accueil</a>
                    </li>
                    <li>
                        <a href="Auteur">Auteur</a>
                    </li>
                    <li>
                        <a href="Livre"> Un billet simple pour l'alaska </a>
                    </li>
                    <li>
                        <a href="Contact">Contact</a>
                    </li>
                </ul>
                <h3>(C) Jean Laroche 2019. Tout droits reservé.</h3>
            </div>
            <div class="logo">
                <a href="Accueil">Jean Laroche.</a>
            </div>
        </div>
    </footer>
<!--===============================================================================================-->     
<!--==============================         Script        ==========================================-->    
<!--===============================================================================================-->   
    <script src="public/jquery/jquery.js"></script>
<!--===============================================================================================-->
    <script src="public/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<!--===============================================================================================-->
    <script src="public/jquery/tilt.jquery.min.js"></script>
<!--===============================================================================================-->
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
<!--===============================================================================================-->
    <script src="public/Js/main.js"></script>
<!--===============================================================================================--> 
</body>

</html>

