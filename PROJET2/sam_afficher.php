<?php
session_start();
if(!isset($_SESSION['connexion'])){ header("location:indexe.php");} 
try
{
    $db = new PDO('mysql:host=localhost;dbname=memoire2', 'root', '');
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
}
$reqe = $db->query('SELECT * FROM operation');
if(isset($_POST['supprimer'])){
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=memoire2', 'root', '');
    }
    catch(Exception $e)
    {
        // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
    }
    $req = $db->prepare('DELETE FROM operation where num_op=?');
    $req->execute(array($_POST['num_op']));
    header("location:sam_afficher.php?message=message");
}
?>
<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
        <title>SAM - OPERATION</title>
        <?php include('plugins.php') ?>
    </head>

    <body id="operation">
        <!------------------------------------------------------   HEADER ----------------------------------------------------->
        <?php include('header.php')?>
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
        <div class="container">
            <div class="row">
                <div class="panel panel-primary" id="panel_pad">
                    <div class="panel-heading">
                        <h1 class="panel-title">Liste des opérations disponibles:</h1>
                    </div>
                    <div class="panel-body">
                        <?php if(isset($_GET['message'])){ ?>
        
         <div class="alert alert-success alert-dismissible monalert" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close" ><span aria-hidden="true">&times;</span></button>
                       <strong>Yeah !</strong> Votre Opération a été supprimer avec succes !  <i class="fa fa-info-circle"></i>
                        </div>
                        <?php }?>
                        <?php if(isset($_GET['msg'])){ ?>
        
         <div class="alert alert-success alert-dismissible monalert" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close" ><span aria-hidden="true">&times;</span></button>
                       <strong>Yeah !</strong> Votre Opération a été modifier avec succes !  <i class="fa fa-info-circle"></i>
                        </div>
                        <?php }?>
                        <p class="policp text-justify"> Sélectionnez une opération!</p>
                        <div class="col-xs-12 padnul table-responsive" >
                <div class="form-group col-xs-6">
                <h6>Nombre de ligne:</h6>
                    <select id="change-page-size" class="form-control col-xs-6">
                        <option value="1">Aucun</option>
                        <option value="3">3</option>
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                    </select>
                </div>
				<div class="form-group col-xs-6 col-lg-6">
				<h6>Taille de Navigation:</h6>
				    <select id="change-nav-size" class="form-control">
				        <option value="1">Aucun</option>
				        <option value="2">2</option>
				        <option value="3">3</option>
				        <option value="4">4</option>
				    </select>
				</div>
                            <table class="footable table table-bordered " data-limit-navigation="5">
                               <tfoot>
                                   <tr>
                                       <td colspan="4">
                                           <nav class='text-center'>
                                              <ul class="pagination pagination-centered">
                                                <li>
                                                  <a href="#" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                  </a>
                                                </li>
                                                <li><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#">5</a></li>
                                                <li>
                                                  <a href="#" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                  </a>
                                                </li>
                                              </ul>
                                            </nav>
                                       </td>
                                   </tr>
                                    
                                </tfoot>
                               <thead>
                                     <tr class="text-center">
                                        <th>NUM_OP</td>
                                        <th  data-hide="phone">LIBELLE_OP</td>
                                        <th data-hide="phone">AUTORISATION DE PROGRAMME</td>
                                        <th>SELECTIONNER</td>
                                    </tr>
                                </thead>

                                <?php if(isset($reqe) ){
    while ($donnees = $reqe->fetch()){
        echo"<form method=post action=sam_opselection.php>";
        echo"<tbody>";
        echo"<tr class=text-center>";
        echo"<td>"."<input class='form-control' readonly type=text name=num_op value=".$donnees['num_op'] ." >";echo"</td>";
        echo"<td>"."<input class=form-control readonly type=text name=libelle_op value=".$donnees['libelle_op'] ." >";echo"</td>";
        echo"<td>"."<input class=form-control readonly type=text name=auto_prog value=".$donnees['auto_prog'] ." >";echo"</td>";
        echo"<td>"."<button class='btn btn-success' type=submit name=selectionner>SELECTIONNER<span class='fa fa-plus fa-fw'></span></button>"; echo"</td>";
        echo"</tr>";
        echo"</tbody>";
        echo "</form>";
    }}?>
                            </table>
                        </div>
                    </div>
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
                        <?php	if(isset($_POST['detail'])){ 
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
    $donnees = $req->fetch(); ?>
                       Page Size:
             
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
    <script type="text/javascript" src="js/footable.paginate.js"></script>
     <script type="text/javascript">
        $(function () {
			$('table').footable();

					$('#change-page-size').change(function (e) {
						e.preventDefault();
						var pageSize = $(this).val();
						$('.footable').data('page-size', pageSize);
						$('.footable').trigger('footable_initialized');
					});

					$('#change-nav-size').change(function (e) {
						e.preventDefault();
						var navSize = $(this).val();
						$('.footable').data('limit-navigation', navSize);
						$('.footable').trigger('footable_initialized');
					});
        });
    </script>
    </body>

</html>