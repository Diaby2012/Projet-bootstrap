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

    <body id="virement">
        <!------------------------------------------------------   Menu de Navigation ----------------------------------------------------->
        <?php include('header.php')?>
        <!------------------------------------------------------   /Menu de Navigation ----------------------------------------------------->
        <!------------------------------------------------------   Menu 2 ----------------------------------------------------->
        <div class="container">
            <div class="row">

                <ul class="nav nav-pills nav-justified">
                    <li role="presentation" class="active"><a href="sam_paiement.php"><span class="li_men">Afficher</span> <i class="fa fa-pencil-square-o"></i>
                        </a>
                    </li>
                </ul>
                <div class="col-xs-12 padnul" >
                    <table class="table table-bordered">
                        <tr class="text-center">
                            <td>NUM_OP</td>
                            <td>LIBELLE_OP</td>
                            <td>AUTORISATION DE PROGRAMME</td>
                            <td>SELECTIONNER</td>
                        </tr>

 <?php if(isset($reqe) ){
			 while ($donnees = $reqe->fetch()){
                echo"<form method=post action=sam2_avis.php>";
			 echo"<tr class=text-center>";
				echo"<td>"."<input class=form-control readonly type=text name=num_op value=".$donnees['num_op'] ." >";echo"</td>";
				echo"<td>"."<input class=form-control readonly type=text name=libelle_op value=".$donnees['libelle_op'] ." >";echo"</td>";
				echo"<td>"."<input class=form-control readonly type=text name=auto_prog value=".$donnees['auto_prog'] ." >";echo"</td>";
				echo"<td>"."<button class='btn btn-success' type=submit name=selectionner>SELECTIONNER<span class='fa fa-plus fa-fw'></span></button>"; echo"</td>";
				echo"</tr>";
			echo "</form>";
}}?>
                    </table>

                   
                    </body>
                </html>

        </div>


        </div>
    </div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-2.1.3.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>

<script src="js/script.js"></script>
<!--------------------------------------------- PAGINATE --------------------------------------------->

<script src="js/footable.paginate.js" type="text/javascript"></script>
</body>

</html>gr'