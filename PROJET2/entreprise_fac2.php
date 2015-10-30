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
$req = $db->query('SELECT * FROM engagement where verdict="valider" and approbation="approuver" and ods="ok"  ');

if(isset($_POST['selectionner'])){
	$_SESSION['id_eng']=$_POST['id'];
	header("location:sam4_paiement.php");
}
?>
<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
        <title>Controleur Financier - Page d'Administration</title>
        <!-- Bootstrap -->
        <link href="bootstrap-3.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="styles/half-slider.css" rel="stylesheet">
        <link href="styles/scrolling-nav.css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="styles/style_directeur.css">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
    </head>
   <body id="paiement">
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
<section class="table_cf">
<div class="container">
<div class="row">
<div class="col-lg-12">

<table  class="table table-bordered">
			 <tr class="text-center">
			    <td>ID</td>
				<td>NUM_PROJ</td>
				<td>OBJET ENG</td>
				<td>NUM FICHE ENG</td>
				<td>DETAIL</td>
				<td>SELECTIONNER</td>
			 </tr>
			 
			 <?php if(isset($req)){
			 while ($donnees = $req->fetch()){
				 $_SESSION['v']=$donnees['id'];
			 echo"<form method=post action=entreprise_fac.php>";
			 echo"<tr class=text-center>";
				echo"<td class=col-lg-1>"."<input class=form-control readonly type=number name=id  value=".$donnees['id'] ." >";echo"</td>";
				echo"<td>"."<input class=form-control type=text name=num_proj disabled value=".$donnees['num_proj'] ." >";echo"</td>";
				echo"<td>"."<input class=form-control type=text name=objet_eng disabled value=".$donnees['objet_eng'] ." >";echo"</td>";
				echo"<td>"."<input class=form-control type=text name=nfich_eng disabled value=".$donnees['nfich_eng']."  >"; echo"</td>";
                echo"<td>"."<a class='btn btn-default' href=sam_ods.php?id=".$donnees['id'].">";echo"Détail<span class='fa fa-plus fa-fw'</a></td>";				
				 echo"<td>"."<button class='btn btn-success' type=submit name=selectionner>SELECTIONNER<span class='fa fa-plus fa-fw'></span></button>"; echo"</td>";
			 echo"</tr>";
			echo "</form>";
			  }}?>
		</table>
		
         
		<?php if(isset($_GET['id'])){
					try
		{
		  $db = new PDO('mysql:host=localhost;dbname=memoire2', 'root', '');
		}
		catch(Exception $e)
		{
		 // En cas d'erreur, on affiche un message et on arrête tout
				die('Erreur : '.$e->getMessage());
		}
		$req = $db->prepare('SELECT * FROM engagement where id =?');
		$req->execute(array($_GET['id']));
		$donnees = $req->fetch();
        ?>
		<table class="table table-hover">
	         <tr>
				<td>ID</td>
				<td><?php echo $donnees['id'];?></td>
			 </tr>
	
			 <tr>
				<td>NUM_PROJ</td>
				<td><?php echo $donnees['num_proj'];?></td>
			 </tr>

			 <tr>
				<td>OBJET_ENG</td>
				<td><?php echo $donnees['objet_eng'];?></td>
			 </tr>
			 
			 <tr>
				<td>NFICH_ENG</td>
				<td><?php echo $donnees['nfich_eng'];?></td>
			 </tr>
			 
			 <tr>
				<td>STRUCTURE_ENG</td>
				<td><?php echo $donnees['structure_eng'];?></td>
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
		</div>
		</div>
</div>
    </section>			
		<?php } ?>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-2.1.3.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
    </body>

</html>