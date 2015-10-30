<?php 
 session_start();
if(!isset($_SESSION['connexion'])){ header("location:indexe.php");} 
?> 
<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
        <title>SAM - Page d'Accueil</title>
        <!-- Bootstrap -->
        <link href="bootstrap-3.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="styles/animate.css" rel="stylesheet">
        <link href="styles/hover.css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="styles/style_directeur.css">
        <link rel="stylesheet" href="styles/bootflat.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
    </head>
<div id="wrapper">
    <body>
        <!------------------------------------------------------   Menu de Navigation ----------------------------------------------------->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
               <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">SAM</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right text-center">
                       <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i>
                            <i class="fa fa-caret-down fa-fw"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">Information du compte</li>
                            <li><a href="deconnecter.php" class="text-right">Se deconnecter <i class="fa  fa-sign-out fa-fw"></i></a></li>
                        </ul>
                    </li>
                    </ul>
                    
          
                </div>
           </div>
                <!-- /.navbar-collapse -->
            <!-- /.container-fluid -->
        </nav>
<!------------------------------------------------------   /Menu de Navigation ----------------------------------------------------->
<div class="container sam">
    <div class="row text-center">
        <div class="col-lg-3">
            <div class="panel mini-box">
                <div class="box-info">
                    <a href="sam_operation.php" class="hvr-buzz animated bounce">
                        <i class="fa  fa-credit-card fa-5x" style="color:#313131;"></i>
                        <h5 class="text-muted">Opération</h5>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="panel mini-box">
                <div class="box-info">
                    <a href="sam_projet.php" class="hvr-buzz animated shake">
                        <i class="fa fa-bank fa-5x" style="color:#4cd15c;"></i>
                        <h5 class="text-muted">Projet</h5>
                    </a>
                </div>
            </div>
        </div>
        
         <div class="col-lg-3">
            <div class="panel mini-box" class="hvr-buzz animated rubberBand">
                <div class="box-info">
                    <a href="sam_eng.php" class="hvr-buzz animated swing">
                        <i class="fa  fa-briefcase fa-5x " style="color:#ffa03f;"></i>
                        <h5 class="text-muted">Engagement</h5>
                    </a>
                </div>
            </div>
        </div>
        
         <div class="col-lg-3">
            <div class="panel mini-box">
                <div class="box-info">
                    <a href="sam_paiement.php" class="hvr-buzz animated flipInX">
                        <i class="fa  fa-eur fa-5x" style="color:#89ce4f;"></i>
                        <h5 class="text-muted">Paiement</h5>
                    </a>
                </div>
            </div>
        </div>
    </div>
 <!----------------------------------------------------------- Row 2 ------------------------------------------------------->   
    <div class="row text-center">
        <div class="col-lg-3">
            <div class="panel mini-box">
                <div class="box-info">
                    <a href="sam_mandat.php" class="hvr-buzz animated wobble">
                        <i class="fa  fa-ge fa-5x" style="color:#e07953;"></i>
                        <h5 class="text-muted">Mandat de Paiement</h5>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="panel mini-box">
                <div class="box-info">
                    <a href="ajoutentreprise.php" class="hvr-buzz animated bounceIn">
                        <i class="fa fa-building fa-5x" style="color:#ff4646;"></i>
                        <h5 class="text-muted">Entreprise</h5>
                    </a>
                </div>
            </div>
        </div>
        
         <div class="col-lg-3">
            <div class="panel mini-box">
                <div class="box-info">
                    <a href="sam_avis.php" class="hvr-buzz animated swing">
                        <i class="fa  fa-stack-exchange fa-5x" style="color:#ffbe44;"></i>
                        <h5 class="text-muted">Avis de virement</h5>
                    </a>
                </div>
            </div>
        </div>
        
         <div class="col-lg-3">
            <div class="panel mini-box">
                <div class="box-info">
                    <a href="sam_ods.php" class="hvr-buzz animated bounceIn">
                        <i class="fa  fa-flag fa-5x" style="color:#ff4646;"></i>
                        <h5 class="text-muted">ODS</h5>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>  
      
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-2.1.3.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>

    </body>

</html>