<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
        <title>Entreprise</title>
        <!-- Bootstrap -->
        <link href="bootstrap-3.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="styles/bootflat.css">
        <link rel="stylesheet" href="styles/style_directeur.css">
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
                    <a class="navbar-brand" href="entreprise.php"><?php echo $_SESSION['connexion']; ?></a>
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
<div class="container option1">
    <div class="row text-center">
        <div class="col-lg-6">
            <div class="panel mini-box">
                <div class="box-info">
                    <a href="ods.php">
                     <i class="fa  fa-certificate fa-3x"></i>
                    <h5 class="text-muted">Ordre de Service</h5>
                    </a>
                </div>
            </div>
        </div>
        
             <div class="col-lg-6">
            <div class="panel mini-box">
                <div class="box-info">
                    <a href="entreprise_fac2.php">
                     <i class="fa  fa-file-text-o fa-3x"></i>
                    <h5 class="text-muted">Facture</h5>
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