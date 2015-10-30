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
if(isset($_POST['selectionner'])){
	$_SESSION['num_op']=$_POST['num_op'];
	header("location:sam2_eng.php");
}

?>
<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
        <title>SAM - ENGAGEMENT</title>
       <?php include('plugins.php') ?>

    </head>

    <body id="engagement">
        <!------------------------------------------------------   HEADER ----------------------------------------------------->
        <?php include('header.php')?>
        <!------------------------------------------------------   Menu 2 ----------------------------------------------------->
        <div class="container">
            <div class="row">

                <ul class="nav nav-pills nav-justified">
                    <li role="presentation" class="active"><a href="sam_eng.php"><span class="li_men">Afficher</span> <i class="fa fa-pencil-square-o"></i>
                        </a>
                    </li>
                </ul>
                <div class="panel panel-primary" id="panel_pad">
                    <div class="panel-heading">
                        <h1 class="panel-title">SELECTION DE L'OPERATION:</h1>
                    </div>
                    <div class="panel-body">
                        <p class="policp text-justify"> Selectionnez l'opération à laquel appartient l'engagement!</p>
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
				<div class="form-group col-xs-6">
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
                                <tr class="text-center">
                                    <td>NUM_OP</td>
                                    <td>LIBELLE_OP</td>
                                    <td>AUTORISATION DE PROGRAMME</td>
                                    <td>SELECTIONNER</td>
                                </tr>

                                <?php if(isset($reqe) ){
    while ($donnees = $reqe->fetch()){
        echo"<form method=post action=sam_eng.php>";
        echo"<tr class=text-center>";
        echo"<td>"."<input class=form-control readonly type=text name=num_op value=".$donnees['num_op'] ." >";echo"</td>";
        echo"<td>"."<input class=form-control readonly type=text name=libelle_op value=".$donnees['libelle_op'] ." >";echo"</td>";
        echo"<td>"."<input class=form-control readonly type=text name=auto_prog value=".$donnees['auto_prog'] ." >";echo"</td>";
        echo"<td>"."<button class='btn btn-success' type=submit name=selectionner>SELECTIONNER<span class='fa fa-plus fa-fw'></span></button>"; echo"</td>";
        echo"</tr>";
        echo "</form>";
    }}?>
                            </table>
                        </div>
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