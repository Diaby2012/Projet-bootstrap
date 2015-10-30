<?php
session_start();
if(isset($_POST['detail'])){ 
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=memoire2', 'root', '');
    }
    catch(Exception $e)
    {
        // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
    }
    $req = $db->prepare('SELECT * FROM operation where num_op= :num_op');
    $req->execute(array('num_op' => $_POST['num_op']));
    $donnees = $req->fetch(); 

?>
<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
        <title>SAM - Page d'Accueil</title>
        <!-- Bootstrap -->
        <link href="bootstrap-3.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="styles/style_operation.css">
        <link href="styles/animate.css" rel="stylesheet">
        <link href="styles/hover.css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
    </head>

    <body>
        <!------------------------------------------------------   Menu de Navigation ----------------------------------------------------->
        <nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="sam.php">SAM</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right text-center">
                        <li>
                            <a href="#" class="hvr-buzz"> <i class="fa  fa fa-bank "></i> <span class="li_men">Projet</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hvr-buzz"> <i class="fa  fa-briefcase "></i> Engagement
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hvr-buzz"> <i class="fa  fa-eur "></i> Paiement
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hvr-buzz"> <i class="fa  fa-ge "></i> Mandat de Paiement
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hvr-buzz"> <i class="fa  fa-file-powerpoint-o "></i> Certificat de Paiement
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hvr-buzz"> <i class="fa   fa-stack-exchange "></i> Avis de Virement
                            </a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-user fa-fw"></i>
                                <i class="fa fa-caret-down fa-fw"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-header">Information du compte</li>
                                <li><a href="#" class="text-right">Se deconnecter <i class="fa  fa-sign-out fa-fw"></i></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
<button class='btn btn-success' data-toggle='modal' data-target='#detailModal' type=submit name=detail>DETAIL<span class='fa fa-plus fa-fw'></span></button>

                </div>
            </div>
            <!-- /.navbar-collapse -->
            <!-- /.container-fluid -->
        </nav>
        <!------------------------------------------------------   /Menu de Navigation ----------------------------------------------------->
        <!------------------------------------------------------   Menu 2 ----------------------------------------------------->
        <div class="container">
            <div class="row">

                <ul class="nav nav-pills nav-justified">
                    <li role="presentation">
                        <a href="sam_operation.php"> <span class="li_men">Ajouter</span> <i class="fa fa-plus-circle"></i>
                        </a>
                    </li>
                    <li role="presentation" class="active"><a href="sam_afficher.php"><span class="li_men">Afficher</span> <i class="fa fa-pencil-square-o"></i>
                        </a>
                    </li>
                </ul>

        </div>


        </div>
    </div>
<div class="modal" id="detailModal" role="dialog" aria-labelledby="detailModal1" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h2 class="modal-title">Opération - Details</h2>
            </div>
            
            <div class="modal-body">
                 
                    <table class="table table-bordered">

                        <tr>
                            <td>NUM_OP</td>
                            <td><?php echo $donnees['num_op'];?></td>
                        </tr>

                        <tr>
                            <td>LIBELLE_OP</td>
                            <td><?php echo $donnees['libelle_op'];?></td>
                        </tr>

                        <tr>
                            <td>AUTORISATION DE PROGRAMME</td>
                            <td><?php echo $donnees['auto_prog'];?></td>
                        </tr>

                        <tr>
                            <td>DATE INSCRIPTION</td>
                            <td><?php echo $donnees['date_insc'];?></td>
                        </tr>

                        <tr>
                            <td>DATE DE DEMARRAGE</td>
                            <td><?php echo $donnees['date_dem'];?></td>
                        </tr>

                        <tr>
                            <td>DATE D'ACHEVEMENT</td>
                            <td><?php echo $donnees['date_ach'];?></td>
                        </tr>

                        <tr>
                            <td>ETUDE</td>
                            <td><?php echo $donnees['etude'];?></td>
                        </tr>

                        <tr>
                            <td>BATIMENT</td>
                            <td><?php echo $donnees['batiment'];?></td>
                        </tr>

                        <tr>
                            <td>TRAVAUX_PUBLIC</td>
                            <td><?php echo $donnees['travaux_public'];?></td>
                        </tr>

                        <tr>
                            <td>MATERIEL_PROD</td>
                            <td><?php echo $donnees['materiel_equipement_production'];?></td>
                        </tr>

                        <tr>
                            <td>MATERIEL_TRANSPORT</td>
                            <td><?php echo $donnees['materiel_transport'];?></td>
                        </tr>

                        <tr>
                            <td>FORMATION</td>
                            <td><?php echo $donnees['formation'];?></td>
                        </tr>

                        <tr>
                            <td>PRESTATION_SERV</td>
                            <td><?php echo $donnees['prestation_service_externe'];?></td>
                        </tr>

                        <tr>
                            <td>AUTRE</td>
                            <td><?php echo $donnees['autre'];?></td>
                        </tr>

                        <tr>
                            <td>PUBLICATION</td>
                            <td><?php echo $donnees['publication'];?></td>
                        </tr>

                        <tr>
                            <td>CONTROLE_SUIVI</td>
                            <td><?php echo $donnees['controle_suivi'];?></td>
                        </tr>

                        <tr>
                            <td>MONTANT_NON_VENTILLE</td>
                            <td><?php echo $donnees['montant_non_ventille'];?></td>
                        </tr>

                        <tr>
                            <td>TOTAL</td>
                            <td><?php echo $donnees['total'];?></td>
                        </tr>
                    </table>

                    <?php } ?>
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
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