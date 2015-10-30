<?php
session_start();



	try
{
$db = new PDO('mysql:host=localhost;dbname=memoire2', 'root', '');
}
catch(Exception $e)
{

        die('Erreur : '.$e->getMessage());
}

$req = $db->prepare('SELECT * FROM operation where id=?');
$req->execute(array($_GET['id']));
$donnees = $req->fetch();
$_SESSION['id']=$donnees['id'];
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- En-tête de la page -->
        <meta charset="utf-8" />
		<!--<link rel="stylesheet" href="formulaire.css" /> -->
        <title>FICHE D'ENGAGEMENT DE DEPENSE</title>
    </head>
    <body>
		
<?php 

			echo"<form method=post action=modif2_operation.php>";
				   echo"<p>";
					   echo"<label for=id>ID</label> :"; 
					   echo"<input type=text name=id id=id required=yes value=".$donnees['id']." />";
				   echo"</p>";
				   
				   echo"<p>";
					   echo"<label for=noperation>N°de lopération</label> :"; 
					   echo"<input type=text name=num_op id=noperation required=yes value=".$donnees['num_op']." />";
				   echo"</p>";
				   
				   echo"<p>";
					   echo"<label for=loperation>Libellé de lopération</label> :"; 
					   echo"<input type=text name=libelle_op id=loperation required=yes value=".$donnees['libelle_op']." />";
				   echo"</p>";
				   
				   echo"<p>";
					   echo"<label for=autorisation_programme>Montant Autorisation de Programme</label> :"; 
					   echo"<input type=double name=auto_prog id=autorisation_programme required=yes value=".$donnees['auto_prog']." />";
				   echo"</p>";
				   
				   echo"<p>";
					   echo"<label for=date_inscription>Date d'Inscription</label> :"; 
					   echo"<input type=text name=date_insc id=date_inscription required=yes value=".$donnees['date_insc']." />";
				   echo"</p>";
				   
				   echo"<p>";
					   echo"<label for=date_demarrage>Date de demarrage</label> :"; 
					   echo"<input type=text name=date_dem id=date_demarrage required=yes value=".$donnees['date_dem']." />";
				   echo"</p>";
				   
				   echo"<p>";
					   echo"<label for=date_achevement>Date d'Achèvement</label> :"; 
					   echo"<input type=text name=date_ach id=date_achevement required=yes value=".$donnees['date_dem']." />";
				   echo"</p>";
				   
				  echo"<fieldset>";
					 echo"<legend></legend>";
				   
				   echo"<p>";
					   echo"<label for=etude>Etude</label> :"; 
					   echo"<input type=double name=etude id=etude onChange=calculeTotal() value=".$donnees['etude']." />";
				   echo"</p>";
				   
				   echo"<p>";
					   echo"<label for=batiment>Batiment</label> :"; 
					   echo"<input type=double name=batiment id=batiment onChange=calculeTotal() value=".$donnees['batiment']." />";
				   echo"</p>";
				   
				   echo"<p>";
					   echo"<label for=travauxpublic>Travaux public</label> :"; 
					   echo"<input type=double name=travaux_public id=travauxpublic onChange=calculeTotal() value=".$donnees['travaux_public']." />";
				   echo"</p>";
				   
				   echo"<p>";
					   echo"<label for=mep>Machine et equipement de production</label> :"; 
					   echo"<input type=double name=materiel_equipement_production id=mep onChange=calculeTotal() value=".$donnees['materiel_equipement_production']." />";
				   echo"</p>";
				   
				   echo"<p>";
					   echo"<label for=mtransport>Matériel de transport</label> :"; 
					   echo"<input type=double name=materiel_transport id=mtransport onChange=calculeTotal() value=".$donnees['materiel_transport']." />";
				   echo"</p>";
				   
				   echo"<p>";
					   echo"<label for=formation>Formation</label> :"; 
					   echo"<input type=double name=formation id=formation onChange=calculeTotal() value=".$donnees['formation']." />";
				   echo"</p>";
				   
				   echo"<p>";
					   echo"<label for=pse>Prestation des services externes</label> :"; 
					   echo"<input type=double name=prestation_service_externe id=pse onChange=calculeTotal() value=".$donnees['prestation_service_externe']." />";
				   echo"</p>";
				   
				   
				   echo"<p>";
					   echo"<label for=autres>Autres</label> :"; 
					   echo"<input type=double name=autre id=autres onChange=calculeTotal() value=".$donnees['autre']." />";
				   echo"</p>";
				   
				   echo"<p>";
					   echo"<label for=publication>Publication</label> :"; 
					   echo"<input type=double name=publication id=publication onChange=calculeTotal() value=".$donnees['publication']." />";
				   echo"</p>";
				   
				   echo"<p>";
					   echo"<label for=cs>Controle et suivi</label> :"; 
					   echo"<input type=double name=controle_suivi id=cs onChange=calculeTotal() value=".$donnees['controle_suivi']." />";
				   echo"</p>";
				   
					echo"<p>";
					   echo"<label for=mnv>Montant non ventillé</label> :"; 
					   echo"<input type=double name=montant_non_ventille id=mnv onChange=calculeTotal() value=".$donnees['montant_non_ventille']." />";
				   echo"</p>";
					
				   echo"<p>";
					   echo"<label for=total>Total </label> :";
					   echo"<input type=double name=total id=total required=yes value=".$donnees['total']." />";
				   echo"</p>";
				   
				   echo"<p>";
				   echo"<input type=submit value=Enregistrer name=enregistrer />";
				   echo"</p>";
			echo"</form>";
 ?>
		<script>
					function calculeTotal()
					{
					    var a = document.getElementById("etude").value;
					    var b = document.getElementById("batiment").value;
					    var c = document.getElementById("travauxpublic").value;
						var d = document.getElementById("mep").value;
						var e = document.getElementById("mtransport").value;
						var f = document.getElementById("formation").value;
					    var g = document.getElementById("pse").value;
					    var h = document.getElementById("autres").value;
					    var i = document.getElementById("publication").value;
					    var j = document.getElementById("cs").value; 
					    var k = document.getElementById("mnv").value;
						
						if( a== ""){ a= 0;}
						if( b== ""){ b= 0;}
						if( c== ""){ c= 0;}
						if( d== ""){ d= 0;}
						if( e== ""){ e= 0;}
						if( f== ""){ f= 0;}
						if( g== ""){ g= 0;}
						if( h== ""){ h= 0;}
						if( i== ""){ i= 0;}
						if( j== ""){ j= 0;}
						if( k== ""){ k= 0;}
					   
					   
					    document.getElementById("total").value = parseFloat(a)+parseFloat(b)+parseFloat(c)+parseFloat(d)+parseFloat(e)+parseFloat(f)+parseFloat(g)+parseFloat(h)+parseFloat(i)+parseFloat(j)+parseFloat(k); // On fait le calcul dans le champs
					   
					}
		</script>

	</body>
</html>