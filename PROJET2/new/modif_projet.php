<?php
session_start();
try
{
  $db = new PDO('mysql:host=localhost;dbname=memoire', 'root', '');
}
catch(Exception $e)
{
 // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
$req = $db->query('SELECT * FROM operation');

if(isset($_GET['num_op'])){
	try
{
  $db = new PDO('mysql:host=localhost;dbname=memoire', 'root', '');
}
catch(Exception $e)
{
 // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
$req = $db->prepare('SELECT * FROM projet where num_op= :num_op');
$req->execute(array(  'num_op' => $_GET['num_op']));
}
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- En-tête de la page -->
        <meta charset="utf-8" />
		<!--<link rel="stylesheet" href="formulaire.css" /> -->
        <title>FICHE D'AFFICHAGE DES OPERATION</title>
    </head>

<?php	if(empty($_GET['num_op'])){?>		
		<table width="600" cellspacing="0" cellpadding="5" border="1">
			 <tr>
				<td>NUM_OP</td>
				<td>LIBELLE_OP</td>
				<td>AUTORISATION DE PROGRAMME</td>
				<td>DATE INSCRIPTION</td>
				<td>DATE DE DEMARRAGE</td>
				<td>DATE D'ACHEVEMENT</td>
				<td>TOTAL</td>
			 </tr>
			 
			 <?php if(isset($req)){
			 while ($donnees = $req->fetch()){?>
			 <tr>
				<td><a href="modif_projet.php?num_op=<?php echo $donnees['num_op'] ?>"><?php echo $donnees['num_op'];?></a></td>
				<td><?php echo $donnees['libelle_op'];?></td>
				<td><?php echo $donnees['auto_prog'];?></td>
				<td><?php echo $donnees['date_insc'];?></td>
				<td><?php echo $donnees['date_dem'];?></td>
				<td><?php echo $donnees['date_ach'];?></td>
				<td><?php echo $donnees['total'];?></td>	
			 </tr>
<?php }}}?>
		</table>
		
<?php	if(isset($_GET['num_op'])){?>	
		<table width="600" cellspacing="0" cellpadding="5" border="1">
			 <tr>
				<td>N°du Projet</td>
				<td>Libellé du Projet</td>
				<td>Rubrique1</td>
				<td>Rubrique2</td>
				<td>MODIFIER</td>
			 </tr>
			 
			  <?php 
			while ($donnees = $req->fetch()){
				 $_SESSION['id']=$donnees['id'];
			 echo"<form method=post action=../modif2_projet.php>";
			 echo"<tr>";
				echo"<td>"."<input type=text name=num_proj value=".$donnees['num_proj'] ." >";echo"</td>";
				echo"<td>"."<input type=text name=libelle_proj value=".$donnees['libelle_proj'] ." >";echo"</td>";
				echo"<td>"."<input type=text name=rub1_projet value=".$donnees['rub1_projet'] ." >";echo"</td>";
				echo"<td>"."<input type=text name=rub2_projet value=".$donnees['rub2_projet']."  >"; echo"</td>";
				echo"<td>"."<input type=submit name=modifier value=MODIFIER />"; echo"</td>";
			 echo"</tr>";
			echo "</form>";
			  }}?>
		</table>
	</body>
</html>